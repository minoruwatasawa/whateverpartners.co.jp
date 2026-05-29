<?php
/**
 * クライアント紹介の掲載可否を更新する API（内部ページ用）
 * client-intro-approvals.json のみを更新。client-intro.json（バナー本体）は触らない。
 * POST JSON: { "id": "yumeplaza-1", "public_ok": true }
 * 返却 JSON: { "ok": true } または { "error": "..." }
 */

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

require_once dirname(__DIR__) . '/includes/functions.php';

$raw = file_get_contents('php://input');
$input = json_decode($raw, true);

$id = isset($input['id']) ? trim((string) $input['id']) : null;
$publicOk = isset($input['public_ok']) ? (bool) $input['public_ok'] : null;

if ($id === null || $id === '') {
    http_response_code(400);
    echo json_encode(['error' => 'id is required']);
    exit;
}

$approvalsPath = DISPLAY_CONFIG_PATH . '/client-intro-approvals.json';

$banners = loadJson('client-intro.json');
if (!is_array($banners)) {
    http_response_code(500);
    echo json_encode(['error' => 'Banners not found']);
    exit;
}
$exists = false;
foreach ($banners as $b) {
    if (isset($b['id']) && trim((string) $b['id']) === $id) {
        $exists = true;
        break;
    }
}
if (!$exists) {
    http_response_code(400);
    echo json_encode(['error' => 'Unknown id']);
    exit;
}

$approvals = loadDisplayConfigJson('client-intro-approvals.json');
if (!is_array($approvals)) {
    $approvals = [];
}
$approvals[$id] = $publicOk;

$encoded = json_encode($approvals, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
if ($encoded === false) {
    http_response_code(500);
    echo json_encode(['error' => 'JSON encode failed']);
    exit;
}

if (!is_dir(DISPLAY_CONFIG_PATH) && !@mkdir(DISPLAY_CONFIG_PATH, 0755, true)) {
    http_response_code(500);
    echo json_encode(['error' => 'Private data directory could not be created']);
    exit;
}
if (!is_writable($approvalsPath) && (file_exists($approvalsPath) || !is_writable(DISPLAY_CONFIG_PATH))) {
    http_response_code(500);
    echo json_encode(['error' => 'Approvals file not writable']);
    exit;
}

if (file_put_contents($approvalsPath, $encoded) === false) {
    http_response_code(500);
    echo json_encode(['error' => 'Write failed']);
    exit;
}

echo json_encode(['ok' => true]);
