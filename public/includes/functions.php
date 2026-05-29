<?php
/**
 * Whatever Partners Inc. - ユーティリティ関数
 */

require_once __DIR__ . '/config.php';

/**
 * JSONファイルを読み込む（DATA_PATH 配下）
 */
function loadJson(string $path): array {
    $fullPath = DATA_PATH . '/' . $path;
    if (!file_exists($fullPath)) {
        return [];
    }
    $content = file_get_contents($fullPath);
    return json_decode($content, true) ?? [];
}

/**
 * 表示用設定JSONを読み込む（DISPLAY_CONFIG_PATH 配下。デプロイで上書きしない）
 */
function loadDisplayConfigJson(string $path): array {
    $fullPath = DISPLAY_CONFIG_PATH . '/' . $path;
    if (!file_exists($fullPath) || !is_readable($fullPath)) {
        return [];
    }
    $content = file_get_contents($fullPath);
    return json_decode($content, true) ?? [];
}

/**
 * HTMLファイルを読み込む
 */
function loadHtml(string $path): string {
    $fullPath = DATA_PATH . '/' . $path;
    if (!file_exists($fullPath)) {
        return '';
    }
    return file_get_contents($fullPath);
}

/** 天気キャッシュの有効時間（秒） */
const HERO_WEATHER_CACHE_TTL = 600; // 10分

/**
 * 東京時間の現在時刻からヒーロー用 time (hiru/yugata/yoru) を返す
 * hiru: 6:30-16:00, yugata: 16:00-18:00, yoru: 18:00-6:30
 */
function getHeroTimeFromClock(): string {
    $tz = new DateTimeZone('Asia/Tokyo');
    $now = new DateTime('now', $tz);
    $minutes = (int) $now->format('G') * 60 + (int) $now->format('i');
    // 6:30 = 390, 16:00 = 960, 18:00 = 1080
    if ($minutes >= 390 && $minutes < 960) {
        return 'hiru';
    }
    if ($minutes >= 960 && $minutes < 1080) {
        return 'yugata';
    }
    return 'yoru';
}

/**
 * Open-Meteo API で現在の天気を取得し、ヒーロー用 scene (fine/cloud/rainy) を返す
 * 10分間サーバーキャッシュを使用し、期限切れ時のみ API を叩く。
 * weathercode <= 2: fine, <= 49: cloud, <= 100: rainy, それ以外: fine
 * 失敗時は null を返す（呼び出し側で hero.json の scene にフォールバック）
 */
function getHeroSceneFromWeather(): ?string {
    $cacheDir = DATA_PATH . '/cache';
    $cacheFile = $cacheDir . '/hero_weather.json';

    if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < HERO_WEATHER_CACHE_TTL) {
        $cached = @file_get_contents($cacheFile);
        if ($cached !== false) {
            $decoded = json_decode($cached, true);
            $scene = $decoded['scene'] ?? null;
            if (in_array($scene, ['fine', 'cloud', 'rainy'], true)) {
                return $scene;
            }
        }
    }

    $url = 'https://api.open-meteo.com/v1/forecast?' . http_build_query([
        'latitude' => 35.6895,
        'longitude' => 139.6917,
        'current_weather' => 'true',
        'timezone' => 'Asia/Tokyo',
    ]);
    $ctx = stream_context_create(['http' => ['timeout' => 3]]);
    $raw = @file_get_contents($url, false, $ctx);
    if ($raw === false) {
        return null;
    }
    $data = json_decode($raw, true);
    $code = $data['current_weather']['weathercode'] ?? null;
    if ($code === null || !is_numeric($code)) {
        return null;
    }
    $code = (int) $code;
    if ($code <= 2) {
        $scene = 'fine';
    } elseif ($code <= 49) {
        $scene = 'cloud';
    } elseif ($code <= 100) {
        $scene = 'rainy';
    } else {
        $scene = 'fine';
    }

    if (!is_dir($cacheDir)) {
        @mkdir($cacheDir, 0755, true);
    }
    if (is_dir($cacheDir) && is_writable($cacheDir)) {
        @file_put_contents($cacheFile, json_encode(['scene' => $scene], JSON_UNESCAPED_UNICODE));
    }

    return $scene;
}

/**
 * data/pages.json の "pages" からページメタ（title, description）を取得する
 * キーが存在しない場合は null。動的ページは呼び出し元で $meta を上書きして利用する。
 */
function getPageMeta(string $pageKey): ?array {
    $cache = getPagesJson();
    $pages = $cache['pages'] ?? null;
    if (!is_array($pages) || !isset($pages[$pageKey]) || !is_array($pages[$pageKey])) {
        return null;
    }
    return $pages[$pageKey];
}

/**
 * data/pages.json を読み込む（pages + categories）。1リクエスト内でキャッシュ。
 */
function getPagesJson(): array {
    static $cache = null;
    if ($cache === null) {
        $cache = loadJson('pages.json');
    }
    return is_array($cache) ? $cache : [];
}

/**
 * AIチャット用: categories の contents を pages から組み立てて返す
 * 戻り値の contents は pageKey => { title, url, body }（body が無い場合は description を使用）
 */
function getAiCategories(): array {
    $cache = getPagesJson();
    $pages = $cache['pages'] ?? [];
    $categories = $cache['categories'] ?? [];
    if (!is_array($pages) || !is_array($categories)) {
        return [];
    }
    $result = [];
    foreach ($categories as $categoryId => $category) {
        if (!is_array($category)) {
            continue;
        }
        $contents = $category['contents'] ?? [];
        $resolved = [];
        foreach ($contents as $pageKey) {
            $p = $pages[$pageKey] ?? null;
            if (!is_array($p)) {
                continue;
            }
            $resolved[$pageKey] = [
                'title' => $p['title'] ?? '',
                'url' => $p['url'] ?? '',
                'body' => $p['body'] ?? $p['description'] ?? '',
            ];
        }
        $result[$categoryId] = [
            'label' => $category['label'] ?? '',
            'description' => $category['description'] ?? '',
            'contents' => $resolved,
        ];
    }
    return $result;
}

/**
 * ページキーから $pageTitle と $metaOptions を返す。フォールバックはここだけに集約する。
 * pages.json にキーがない場合は E_USER_WARNING を出し、サイト共通の title/description を返す。
 */
function getPageMetaOptions(string $pageKey): array {
    $meta = getPageMeta($pageKey);
    if ($meta === null) {
        trigger_error("Missing data/pages.json entry for pageKey: {$pageKey}", E_USER_WARNING);
        return [
            'pageTitle' => '',
            'metaOptions' => ['title' => SITE_NAME, 'description' => SITE_DESCRIPTION],
        ];
    }
    return [
        'pageTitle' => $meta['title'] ?? '',
        'metaOptions' => [
            'title' => pageTitle($meta['title'] ?? ''),
            'description' => $meta['description'] ?? SITE_DESCRIPTION,
        ],
    ];
}

/**
 * AI用にページのHTMLを取得（全ページ対応。script/style/link は除去してトークン節約）
 */
function getPageHtmlForAi(string $pageKey): string {
    $path = BASE_PATH . '/pages/' . $pageKey . '.php';
    if (!file_exists($path) || !is_readable($path)) {
        return '';
    }
    $pageMeta = getPageMetaOptions($pageKey);
    $pageTitle = $pageMeta['pageTitle'];
    $metaOptions = $pageMeta['metaOptions'];
    $bodyClass = 'page-' . $pageKey;
    $slug = '';

    ob_start();
    try {
        require $path;
    } catch (Throwable $e) {
        ob_end_clean();
        return '';
    }
    $html = ob_get_clean();
    if (!is_string($html)) {
        return '';
    }
    $html = preg_replace('/<script\b[^>]*>.*?<\/script>/is', '', $html);
    $html = preg_replace('/<style\b[^>]*>.*?<\/style>/is', '', $html);
    $html = preg_replace('/<link\b[^>]*>/i', '', $html);
    return trim($html);
}

/**
 * ページタイトルを生成
 */
function pageTitle(string $title = ''): string {
    if (empty($title)) {
        return SITE_NAME;
    }
    return $title . ' | ' . SITE_NAME;
}

/**
 * アセットパスを生成
 */
function asset(string $path): string {
    $fullPath = BASE_PATH . '/' . ASSETS_PATH . '/' . ltrim($path, '/');
    if (DEBUG_MODE) {
        $version = time();
    } else {
        $version = file_exists($fullPath) ? (string) filemtime($fullPath) : '1.0.0';
    }
    return ASSETS_PATH . '/' . ltrim($path, '/') . '?v=' . $version;
}

/**
 * 現在のページかどうかを判定
 */
function isCurrentPage(string $slug): bool {
    $currentPage = $_GET['page'] ?? '';
    return $currentPage === $slug;
}

/**
 * ナビゲーションのアクティブクラスを取得
 */
function navActiveClass(string $slug): string {
    return isCurrentPage($slug) ? 'active' : '';
}

/**
 * パンくず用の配列を取得（現在ページは url => ''）
 * TOP では [ ホーム ] のみなので、表示は count > 1 のときだけ行う
 */
function getBreadcrumbs(): array {
    $page = $_GET['page'] ?? '';
    $slug = $_GET['slug'] ?? '';
    $crumbs = [['label' => 'ホーム', 'url' => '/']];

    if ($page === '') {
        return $crumbs;
    }

    $base = '/' . $page;

    if ($page === 'about') {
        $crumbs[] = ['label' => '会社概要', 'url' => ''];
        return $crumbs;
    }
    if ($page === 'business') {
        $crumbs[] = ['label' => '受託サービス', 'url' => $slug !== '' ? $base : ''];
        $labels = [
            'web' => 'Webサイト制作',
            'operation' => 'Webサイト運営代行',
            'marketing' => 'インターネット集客',
            'game-dev' => 'ブラウザゲーム開発',
        ];
        if ($slug !== '' && isset($labels[$slug])) {
            $sub = $_GET['sub'] ?? '';
            $hasSubPage = ($slug === 'game-dev' && $sub !== '');
            $crumbs[] = ['label' => $labels[$slug], 'url' => $hasSubPage ? $base . '/' . $slug : ''];
            if ($hasSubPage) {
                $gameDevSubLabels = [
                    'overview' => '作成できるゲーム概要',
                    'use-cases' => 'ゲームの活用シーン',
                    'quality' => '制作のこだわり',
                    'pricing' => '料金・進め方',
                    'cases' => '制作事例',
                    'about-wp' => 'WPのゲーム制作の立ち位置',
                ];
                $subLabel = $gameDevSubLabels[$sub] ?? $sub;
                $crumbs[] = ['label' => $subLabel, 'url' => ''];
            }
        }
        return $crumbs;
    }
    if ($page === 'services') {
        $crumbs[] = ['label' => 'オリジナルサービス', 'url' => $slug !== '' ? $base : ''];
        if ($slug !== '') {
            $services = getServicesList();
            $title = $slug;
            foreach ($services as $s) {
                if (($s['slug'] ?? '') === $slug) {
                    $title = $s['title'] ?? $slug;
                    break;
                }
            }
            $crumbs[] = ['label' => $title, 'url' => ''];
        }
        return $crumbs;
    }
    if ($page === 'news') {
        $crumbs[] = ['label' => 'お知らせ', 'url' => $base];
        if ($slug !== '') {
            $detail = getNewsDetail($slug);
            $crumbs[] = ['label' => $detail ? $detail['title'] : $slug, 'url' => ''];
        }
        return $crumbs;
    }
    if ($page === 'contact') {
        $crumbs[] = ['label' => 'お問い合わせ', 'url' => ''];
        return $crumbs;
    }
    if ($page === 'philosophy') {
        $crumbs[] = ['label' => '基本的な考え方', 'url' => ''];
        return $crumbs;
    }
    if ($page === 'message') {
        $crumbs[] = ['label' => '代表メッセージ', 'url' => ''];
        return $crumbs;
    }
    if ($page === 'privacy') {
        $crumbs[] = ['label' => 'プライバシーポリシー', 'url' => ''];
        return $crumbs;
    }
    if ($page === 'terms') {
        $crumbs[] = ['label' => '利用規約', 'url' => ''];
        return $crumbs;
    }

    $crumbs[] = ['label' => $page, 'url' => ''];
    return $crumbs;
}

/**
 * 日付をフォーマット
 */
function formatDate(string $date, string $format = 'Y年n月j日'): string {
    $timestamp = strtotime($date);
    return date($format, $timestamp);
}

/**
 * テキストを省略
 */
function truncate(string $text, int $length = 100): string {
    if (mb_strlen($text) <= $length) {
        return $text;
    }
    return mb_substr($text, 0, $length) . '...';
}

/**
 * HTMLエスケープ
 */
function h(string $str): string {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/**
 * お知らせ一覧を取得
 */
function getNewsList(int $limit = 0): array {
    $news = loadJson('news/list.json');
    if (empty($news)) {
        return [];
    }
    // 日付で降順ソート
    usort($news, function($a, $b) {
        return strtotime($b['date']) - strtotime($a['date']);
    });
    if ($limit > 0) {
        return array_slice($news, 0, $limit);
    }
    return $news;
}

/**
 * お知らせ詳細を取得
 */
function getNewsDetail(string $slug): ?array {
    $news = getNewsList();
    foreach ($news as $item) {
        if ($item['slug'] === $slug) {
            // HTML本文を読み込む
            $content = loadHtml('news/articles/' . $slug . '.html');
            $item['content'] = $content;
            return $item;
        }
    }
    return null;
}

/**
 * サービス一覧を取得
 */
function getServicesList(): array {
    return loadJson('services/list.json');
}

/**
 * クライアント紹介スライド（TOP）を取得（public_ok が true のもののみ）
 * JSONの画像パスに asset() を適用して返す
 */
function getClientIntroSlides(): array {
    $slides = getClientIntroSlidesForPreview();
    return array_values(array_filter($slides, static function ($slide) {
        return !empty($slide['public_ok']);
    }));
}

/**
 * クライアント紹介スライドを全件取得（内部確認ページ用）
 * client-intro.json（バナー本体・各要素に id 必須）と client-intro-approvals.json（表示順 order・掲載可否）を結合。
 * approvals は DISPLAY_CONFIG_PATH 配下（デプロイで上書きしない）。
 */
function getClientIntroSlidesForPreview(): array {
    $banners = loadJson('client-intro.json');
    if (empty($banners)) {
        return [];
    }
    $byId = [];
    foreach ($banners as $b) {
        $id = isset($b['id']) ? trim((string) $b['id']) : null;
        if ($id !== null && $id !== '') {
            $byId[$id] = $b;
        }
    }
    if (empty($byId)) {
        return [];
    }
    $approvals = loadDisplayConfigJson('client-intro-approvals.json');
    if (!is_array($approvals)) {
        $approvals = [];
    }
    $defaultOrder = [];
    foreach ($banners as $b) {
        if (isset($b['id'])) {
            $id = trim((string) $b['id']);
            if ($id !== '' && isset($byId[$id])) {
                $defaultOrder[] = $id;
            }
        }
    }
    $order = isset($approvals['order']) && is_array($approvals['order'])
        ? array_values(array_filter(array_map('trim', $approvals['order'])))
        : $defaultOrder;
    foreach (array_keys($byId) as $id) {
        if (!in_array($id, $order, true)) {
            $order[] = $id;
        }
    }
    $result = [];
    foreach ($order as $id) {
        if (!isset($byId[$id])) {
            continue;
        }
        $slide = $byId[$id];
        $slide['public_ok'] = isset($approvals[$id]) ? (bool) $approvals[$id] : false;
        $slide['_id'] = $id;
        if (!empty($slide['logo'])) {
            $slide['logo'] = asset($slide['logo']);
        }
        if (!empty($slide['back_image'])) {
            $slide['back_image'] = asset($slide['back_image']);
        }
        if (!empty($slide['product_image'])) {
            $slide['product_image'] = asset($slide['product_image']);
        }
        $result[] = $slide;
    }
    return $result;
}

/**
 * カテゴリーバッジのHTMLを生成
 */
function categoryBadge(string $category): string {
    $classes = [
        'お知らせ' => 'badge-info',
        'プレスリリース' => 'badge-primary',
        'イベント' => 'badge-success',
        'メディア掲載' => 'badge-warning'
    ];
    $class = $classes[$category] ?? 'badge-default';
    return '<span class="badge ' . $class . '">' . h($category) . '</span>';
}

/**
 * ページネーションを生成
 */
function pagination(int $total, int $perPage, int $currentPage): array {
    $totalPages = ceil($total / $perPage);
    $pages = [];
    
    for ($i = 1; $i <= $totalPages; $i++) {
        $pages[] = [
            'number' => $i,
            'active' => $i === $currentPage,
            'url' => '?page=' . $i
        ];
    }
    
    return [
        'pages' => $pages,
        'prev' => $currentPage > 1 ? $currentPage - 1 : null,
        'next' => $currentPage < $totalPages ? $currentPage + 1 : null,
        'total' => $totalPages
    ];
}

/**
 * CSRF トークンを生成
 */
function generateCsrfToken(): string {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * CSRF トークンを検証
 */
function verifyCsrfToken(string $token): bool {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * OpenAI Chat Completions API を呼び出す
 * @return array API レスポンス（'choices' 等）。エラー時は ['error' => message]
 */
function callOpenAI(array $payload): array {
    $apiKey = defined('OPENAI_API_KEY') ? OPENAI_API_KEY : '';
    if ($apiKey === '') {
        return ['error' => 'API key not configured'];
    }
    $ch = curl_init('https://api.openai.com/v1/chat/completions');
    if ($ch === false) {
        return ['error' => 'curl init failed'];
    }
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $apiKey,
        ],
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_TIMEOUT => 30,
    ]);
    $response = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($response === false) {
        return ['error' => 'Request failed'];
    }
    $decoded = json_decode($response, true);
    if (!is_array($decoded)) {
        return ['error' => 'Invalid response'];
    }
    if ($code >= 400 && isset($decoded['error']['message'])) {
        return ['error' => $decoded['error']['message']];
    }
    return $decoded;
}

/**
 * メタタグを生成
 */
function metaTags(array $options = []): string {
    $title = $options['title'] ?? SITE_NAME;
    $description = $options['description'] ?? SITE_DESCRIPTION;
    $image = $options['image'] ?? 'https://www.whateverpartners.co.jp/assets/images/ogp.png';
    $url = $options['url'] ?? SITE_URL;
    $robots = $options['robots'] ?? null;
    $robotsTag = $robots !== null ? "\n    <meta name=\"robots\" content=\"" . h($robots) . "\">" : '';
    return <<<HTML
    <meta name="description" content="{$description}">
    <meta property="og:title" content="{$title}">
    <meta property="og:description" content="{$description}">
    <meta property="og:image" content="{$image}">
    <meta property="og:url" content="{$url}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">{$robotsTag}
HTML;
}
