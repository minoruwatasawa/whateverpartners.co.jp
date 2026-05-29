<?php
/**
 * AIチャット用 API（RAG: カテゴリ判定 → コンテンツ選択 → 回答生成）
 * POST JSON: { "message": "ユーザーのメッセージ" }
 * 返却 JSON: { "reply": "AIの返答", "references": [{ "title", "url" }, ...] } または { "error": "..." }
 */

ob_start();

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    ob_clean();
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

require_once dirname(__DIR__) . '/includes/functions.php';

try {
    $raw = file_get_contents('php://input');
    $input = json_decode($raw, true);
    $message = isset($input['message']) && is_string($input['message']) ? trim($input['message']) : '';

    if ($message === '') {
        ob_clean();
        http_response_code(400);
        echo json_encode(['error' => 'Message is required']);
        exit;
    }

    $maxLength = 200;
    if (mb_strlen($message) > $maxLength) {
        ob_clean();
        http_response_code(400);
        echo json_encode(['error' => 'Message is too long (max ' . $maxLength . ' characters)']);
        exit;
    }

    $categories = getAiCategories();
    if (empty($categories)) {
        ob_clean();
        echo json_encode([
            'reply' => '申し訳ございません。現在回答の準備ができておりません。お問い合わせフォームからご連絡ください。',
            'references' => [],
        ]);
        exit;
    }

    // Step 1: ユーザー質問をどのカテゴリに該当させるか判定
    $categoryList = [];
    foreach ($categories as $cid => $cat) {
        $categoryList[] = $cid . ': ' . ($cat['label'] ?? '') . ' - ' . ($cat['description'] ?? '');
    }
    $categoryPrompt = "ユーザーの質問が次のどのカテゴリに該当するか判定してください。\n\nカテゴリ一覧:\n" . implode("\n", $categoryList)
        . "\n\n質問: " . $message
        . "\n\n上記のいずれか1つだけを、カテゴリID（company, business, services, news, contact, legal）のみで回答してください。それ以外は出力しないでください。";

    $result1 = callOpenAI([
        'model' => 'gpt-4o-mini',
        'messages' => [
            ['role' => 'user', 'content' => $categoryPrompt],
        ],
        'max_tokens' => 50,
        'temperature' => 0,
    ]);

    if (isset($result1['error'])) {
        ob_clean();
        http_response_code(500);
        echo json_encode([
            'error' => $result1['error'],
            'reply' => '申し訳ございません。一時的に応答できません。しばらくしてからお試しください。',
            'references' => [],
        ]);
        exit;
    }

    $categoryContent = trim($result1['choices'][0]['message']['content'] ?? '');
    $selectedCategory = null;
    foreach (array_keys($categories) as $cid) {
        if (stripos($categoryContent, $cid) !== false) {
            $selectedCategory = $cid;
            break;
        }
    }

    if ($selectedCategory === null || empty($categories[$selectedCategory]['contents'])) {
        ob_clean();
        echo json_encode([
            'reply' => 'ご質問の内容に該当する情報が見つかりませんでした。お問い合わせフォームからお気軽にご相談ください。',
            'references' => [],
        ]);
        exit;
    }

    $contents = $categories[$selectedCategory]['contents'];

    // Step 2: そのカテゴリ内で、質問に最も関連するコンテンツを最大2つ選ぶ
    $contentList = [];
    foreach ($contents as $pageKey => $c) {
        $bodyShort = mb_substr($c['body'] ?? '', 0, 150);
        $contentList[] = $pageKey . ': ' . ($c['title'] ?? '') . ' - ' . $bodyShort;
    }
    $contentPrompt = "ユーザーの質問に最も関連するコンテンツを、以下の一覧から最大2つ選んでください。\n\nコンテンツ一覧:\n" . implode("\n", $contentList)
        . "\n\n質問: " . $message
        . "\n\n選んだコンテンツのID（各行の先頭の英数字とハイフンの組み合わせ）を、カンマ区切りで1つまたは2つだけ回答してください。例: services または business-web, business-operation";

    $result2 = callOpenAI([
        'model' => 'gpt-4o-mini',
        'messages' => [
            ['role' => 'user', 'content' => $contentPrompt],
        ],
        'max_tokens' => 100,
        'temperature' => 0,
    ]);

    if (isset($result2['error'])) {
        ob_clean();
        http_response_code(500);
        echo json_encode([
            'error' => $result2['error'],
            'reply' => '申し訳ございません。一時的に応答できません。しばらくしてからお試しください。',
            'references' => [],
        ]);
        exit;
    }

    $contentAnswer = trim($result2['choices'][0]['message']['content'] ?? '');
    $selectedKeys = [];
    $contentIds = array_keys($contents);
    foreach (array_map('trim', explode(',', $contentAnswer)) as $part) {
        $part = preg_replace('/^\d+\.\s*|^[-.\s]+|[-.\s]+$/', '', $part);
        if ($part === '') {
            continue;
        }
        $found = null;
        if (isset($contents[$part])) {
            $found = $part;
        } else {
            foreach ($contentIds as $pk) {
                if (strpos($part, $pk) !== false) {
                    $found = $pk;
                    break;
                }
            }
        }
        if ($found !== null && !in_array($found, $selectedKeys, true)) {
            $selectedKeys[] = $found;
            if (count($selectedKeys) >= 2) {
                break;
            }
        }
    }
    if (empty($selectedKeys)) {
        $selectedKeys = [array_key_first($contents)];
    }

    $firstContent = $contents[$selectedKeys[0]] ?? null;
    if (!$firstContent) {
        ob_clean();
        echo json_encode([
            'reply' => '該当する情報を取得できませんでした。お問い合わせフォームからご連絡ください。',
            'references' => [],
        ]);
        exit;
    }

    // Step 3: 第一位のコンテンツ本文を参照して回答を生成
    $systemPrompt = 'あなたはホワットエバーパートナーズ株式会社のAIアシスタントです。'
        . '以下の参考情報に基づき、ユーザーの質問に簡潔に答えてください。'
        . '参考情報に代表者名・住所・電話番号などが含まれる場合は、そのまま回答に含めてください。参考情報にないことだけ「お問い合わせください」と案内してください。'
        . '回答は日本語で、親しみやすく丁寧に。必要に応じて**太字**で要点を強調してください。';

    $firstPageKey = $selectedKeys[0];
    $pageHtml = getPageHtmlForAi($firstPageKey);
    if ($pageHtml !== '') {
        $referenceBody = "【該当ページのHTML（ここから必要な情報を抽出して回答してください）】\n\n" . $pageHtml;
    } else {
        $referenceBody = $firstContent['body'] ?? '';
        if ($selectedCategory === 'company' && defined('COMPANY_INFO')) {
            $info = COMPANY_INFO;
            $companyFacts = '【会社基本情報】'
                . '代表者: ' . ($info['ceo'] ?? '') . '。'
                . '所在地: ' . ($info['address'] ?? '') . '。'
                . 'TEL: ' . ($info['tel'] ?? '') . '。'
                . '設立: ' . ($info['established'] ?? '') . '。'
                . '資本金: ' . ($info['capital'] ?? '') . '。';
            $referenceBody = $companyFacts . "\n\n" . $referenceBody;
        }
    }
    $userPrompt = "【参考情報】\n" . $referenceBody . "\n\n【ユーザーの質問】\n" . $message;

    $result3 = callOpenAI([
        'model' => 'gpt-4o-mini',
        'messages' => [
            ['role' => 'system', 'content' => $systemPrompt],
            ['role' => 'user', 'content' => $userPrompt],
        ],
        'max_tokens' => 500,
        'temperature' => 0.7,
    ]);

    if (isset($result3['error'])) {
        ob_clean();
        http_response_code(500);
        echo json_encode([
            'error' => $result3['error'],
            'reply' => '申し訳ございません。一時的に応答できません。しばらくしてからお試しください。',
            'references' => [],
        ]);
        exit;
    }

    $reply = trim($result3['choices'][0]['message']['content'] ?? '');
    if ($reply === '') {
        $reply = '申し訳ございません。応答を生成できませんでした。お問い合わせフォームからご連絡ください。';
    }

    $references = [];
    foreach ($selectedKeys as $key) {
        if (isset($contents[$key])) {
            $references[] = [
                'title' => $contents[$key]['title'] ?? '',
                'url' => $contents[$key]['url'] ?? '',
            ];
        }
    }

    ob_clean();
    echo json_encode(['reply' => $reply, 'references' => $references]);
} catch (Throwable $e) {
    ob_clean();
    http_response_code(500);
    $response = [
        'error' => 'Internal server error',
        'reply' => '申し訳ございません。一時的に応答できません。しばらくしてからお試しください。',
        'references' => [],
    ];
    if (defined('DEBUG_MODE') && DEBUG_MODE) {
        $response['debug'] = $e->getMessage() . ' (line ' . $e->getLine() . ')';
    }
    if (function_exists('error_log')) {
        error_log('[chat.php] ' . $e->getMessage() . ' in ' . $e->getFile() . ' on line ' . $e->getLine());
    }
    echo json_encode($response);
}
