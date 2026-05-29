<?php
/**
 * Sitemap XML 出力
 * アクセス: /sitemap.xml（.htaccess で本ファイルにルーティング）
 */

require_once __DIR__ . '/includes/functions.php';

$base = 'https://www.whateverpartners.co.jp';

// 固定ページ（data/pages.json の url を持つページ + トップ）
$pages = loadJson('pages.json');
$urls = [
    ['loc' => $base . '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
];

if (!empty($pages['pages'])) {
    foreach ($pages['pages'] as $page) {
        if (!empty($page['url']) && $page['url'] !== '/') {
            $urls[] = [
                'loc' => $base . $page['url'],
                'priority' => '0.8',
                'changefreq' => 'monthly',
            ];
        }
    }
}

// お知らせ詳細
$newsList = getNewsList();
foreach ($newsList as $item) {
    if (!empty($item['slug'])) {
        $urls[] = [
            'loc' => $base . '/news/' . $item['slug'],
            'priority' => '0.6',
            'changefreq' => 'monthly',
        ];
    }
}

// サービス詳細
$servicesList = getServicesList();
foreach ($servicesList as $item) {
    if (!empty($item['slug'])) {
        $urls[] = [
            'loc' => $base . '/services/' . $item['slug'],
            'priority' => '0.7',
            'changefreq' => 'monthly',
        ];
    }
}

header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $u): ?>
    <url>
        <loc><?= h($u['loc']) ?></loc>
        <changefreq><?= h($u['changefreq']) ?></changefreq>
        <priority><?= h($u['priority']) ?></priority>
    </url>
<?php endforeach; ?>
</urlset>
