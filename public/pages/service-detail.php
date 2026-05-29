<?php
/**
 * Whatever Partners Inc. - オリジナルサービス詳細（slug で1件表示）
 */

$slug = $_GET['slug'] ?? '';
$services = getServicesList();
$service = null;
foreach ($services as $s) {
    if (($s['slug'] ?? '') === $slug) {
        $service = $s;
        break;
    }
}

if ($service === null) {
    header('HTTP/1.0 404 Not Found');
    $pageTitle = 'ページが見つかりません';
    $bodyClass = 'page-error';
    $metaOptions = ['title' => pageTitle($pageTitle), 'description' => ''];
    require INCLUDES_PATH . '/header.php';
    echo '<section class="section section-lg"><div class="container"><p>お探しのページは見つかりませんでした。</p><p><a href="/services">オリジナルサービス一覧へ</a></p></div></section>';
    require INCLUDES_PATH . '/footer.php';
    exit;
}

$pageTitle = $service['title'];
$bodyClass = 'page-service-detail';
$metaOptions = [
    'title' => pageTitle($pageTitle),
    'description' => isset($service['description']) ? mb_substr(strip_tags($service['description']), 0, 120) . '...' : ''
];

require INCLUDES_PATH . '/header.php';
?>

<section class="page-header">
    <div class="container">
        <span class="page-title-en">Original Service</span>
        <h1 class="page-title"><?= h($service['title']) ?></h1>
    </div>
</section>

<section class="section section-lg">
    <div class="container page-content-narrow">
        <p class="lead animate-on-scroll"><?= nl2br(h($service['description'] ?? '')) ?></p>
    </div>
</section>

<?php if (!empty($service['features'])): ?>
<section class="section bg-gray">
    <div class="container page-content-narrow">
        <h2 class="section-title-sm animate-on-scroll">主な内容</h2>
        <ul class="service-detail-features animate-on-scroll">
            <?php foreach ($service['features'] as $feature): ?>
            <li>
                <svg viewBox="0 0 24 24" class="feature-check"><path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                <?= h($feature) ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<?php endif; ?>

<section class="section">
    <div class="container text-center">
        <a href="/services" class="btn btn-primary">オリジナルサービス一覧へ</a>
        <a href="/contact" class="btn btn-outline">お問い合わせ</a>
    </div>
</section>

<style>
.page-content-narrow { max-width: 720px; margin-left: auto; margin-right: auto; }
.lead { font-size: var(--text-base); line-height: var(--leading-relaxed); color: var(--color-gray-700); }
.service-detail-features { list-style: none; padding-left: 0; }
.service-detail-features li { display: flex; align-items: flex-start; gap: var(--space-3); margin-bottom: var(--space-3); }
.service-detail-features .feature-check { width: 20px; height: 20px; flex-shrink: 0; color: var(--color-primary); }
</style>

<?php require INCLUDES_PATH . '/footer.php'; ?>
