<?php
/**
 * クライアント紹介の表示順を更新する API（内部ページ用）
 * client-intro-approvals.json の "order" のみを更新。
 * POST JSON: { "order": ["yumeplaza-2", "yumeplaza-1", "yumeplaza-3"] }  （ID の配列）
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

$order = isset($input['order']) && is_array($input['order']) ? $input['order'] : null;
if ($order === null) {
    http_response_code(400);
    echo json_encode(['error' => 'order array is required']);
    exit;
}

$banners = loadJson('client-intro.json');
if (!is_array($banners)) {
    http_response_code(500);
    echo json_encode(['error' => 'Banners not found']);
    exit;
}
$validIds = [];
foreach ($banners as $b) {
    if (isset($b['id'])) {
        $validIds[] = trim((string) $b['id']);
    }
}
$validIds = array_values(array_filter($validIds));

$order = array_values(array_unique(array_map('trim', $order)));
$order = array_filter($order);
foreach ($order as $id) {
    if (!in_array($id, $validIds, true)) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid id in order: ' . $id]);
        exit;
    }
}
foreach ($validIds as $id) {
    if (!in_array($id, $order, true)) {
        http_response_code(400);
        echo json_encode(['error' => 'Order must contain all banner ids']);
        exit;
    }
}

$approvalsPath = DISPLAY_CONFIG_PATH . '/client-intro-approvals.json';
$approvals = loadDisplayConfigJson('client-intro-approvals.json');
if (!is_array($approvals)) {
    $approvals = [];
}
$approvals['order'] = $order;

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
