<?php
/**
 * Whatever Partners Inc. - お知らせ詳細ページ
 */

$newsSlug = $_GET['slug'] ?? '';
$newsItem = getNewsDetail($newsSlug);

if (!$newsItem) {
    header('HTTP/1.0 404 Not Found');
    $pageTitle = 'ページが見つかりません';
    $bodyClass = 'page-404';
    require INCLUDES_PATH . '/header.php';
    ?>
    <section class="section section-lg">
        <div class="container text-center">
            <h1 class="page-title">404</h1>
            <p>お探しのページは見つかりませんでした。</p>
            <a href="/news" class="btn btn-primary mt-8">お知らせ一覧へ戻る</a>
        </div>
    </section>
    <?php
    require INCLUDES_PATH . '/footer.php';
    exit;
}

$pageTitle = $newsItem['title'];
$bodyClass = 'page-news-detail';
$metaOptions = [
    'title' => pageTitle($pageTitle),
    'description' => truncate($newsItem['excerpt'] ?? '', 120)
];

require INCLUDES_PATH . '/header.php';
?>

<!-- Page Header -->
<section class="page-header page-header-article">
    <div class="container">
        <div class="article-meta">
            <time class="article-date"><?= formatDate($newsItem['date']) ?></time>
            <?= categoryBadge($newsItem['category']) ?>
        </div>
        <h1 class="article-title"><?= h($newsItem['title']) ?></h1>
    </div>
</section>

<!-- Article Content -->
<section class="section section-lg">
    <div class="container">
        <article class="article-content animate-on-scroll">
            <?php if (!empty($newsItem['content'])): ?>
                <?= $newsItem['content'] ?>
            <?php else: ?>
                <p><?= nl2br(h($newsItem['excerpt'] ?? '')) ?></p>
                <p class="article-placeholder">
                    ※ この記事の詳細コンテンツは準備中です。
                </p>
            <?php endif; ?>
        </article>
        
        <!-- Share Buttons -->
        <div class="article-share">
            <span class="share-label">この記事をシェア</span>
            <div class="share-buttons">
                <a href="https://twitter.com/intent/tweet?text=<?= urlencode($newsItem['title']) ?>&url=<?= urlencode(SITE_URL . '/news?slug=' . $newsItem['slug']) ?>" 
                   class="share-btn share-twitter" target="_blank" rel="noopener">
                    <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(SITE_URL . '/news?slug=' . $newsItem['slug']) ?>" 
                   class="share-btn share-facebook" target="_blank" rel="noopener">
                    <svg viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="https://line.me/R/msg/text/?<?= urlencode($newsItem['title'] . ' ' . SITE_URL . '/news?slug=' . $newsItem['slug']) ?>" 
                   class="share-btn share-line" target="_blank" rel="noopener">
                    <svg viewBox="0 0 24 24"><path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.627-.63h2.386c.349 0 .63.285.63.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.627-.63.349 0 .631.285.631.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.349 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.281.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314"/></svg>
                </a>
            </div>
        </div>
        
        <!-- Navigation -->
        <nav class="article-nav">
            <a href="/news" class="article-nav-back">
                <svg viewBox="0 0 24 24"><path fill="currentColor" d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
                お知らせ一覧へ戻る
            </a>
        </nav>
    </div>
</section>

<!-- Related News -->
<section class="section bg-gray">
    <div class="container">
        <h2 class="related-title">関連するお知らせ</h2>
        <div class="news-list">
            <?php
            $relatedNews = array_filter(getNewsList(5), function($item) use ($newsItem) {
                return $item['slug'] !== $newsItem['slug'];
            });
            $relatedNews = array_slice($relatedNews, 0, 3);
            foreach ($relatedNews as $news):
            ?>
            <a href="/news?slug=<?= h($news['slug']) ?>" class="news-card">
                <div class="news-meta">
                    <span class="news-date"><?= formatDate($news['date']) ?></span>
                    <?= categoryBadge($news['category']) ?>
                </div>
                <h3 class="news-title"><?= h($news['title']) ?></h3>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
/* Article Header */
.page-header-article {
    padding: var(--space-12) 0 var(--space-16);
}

.article-meta {
    display: flex;
    align-items: center;
    gap: var(--space-4);
    margin-bottom: var(--space-6);
}

.article-date {
    font-size: var(--text-sm);
    color: rgba(255, 255, 255, 0.7);
}

.article-title {
    font-size: var(--text-2xl);
    color: var(--color-white);
    line-height: var(--leading-snug);
}

@media (min-width: 640px) {
    .article-title {
        font-size: var(--text-3xl);
    }
}

/* Article Content */
.article-content {
    max-width: 720px;
    margin: 0 auto;
    font-size: var(--text-base);
    line-height: var(--leading-loose);
}

.article-content h2 {
    font-size: var(--text-xl);
    margin-top: var(--space-10);
    margin-bottom: var(--space-4);
    padding-bottom: var(--space-3);
    border-bottom: 2px solid var(--color-primary);
}

.article-content h3 {
    font-size: var(--text-lg);
    margin-top: var(--space-8);
    margin-bottom: var(--space-3);
}

.article-content p {
    margin-bottom: var(--space-6);
    color: var(--color-gray-700);
}

.article-content ul,
.article-content ol {
    margin-bottom: var(--space-6);
    padding-left: var(--space-6);
}

.article-content li {
    margin-bottom: var(--space-2);
    color: var(--color-gray-700);
}

.article-content ul li {
    list-style: disc;
}

.article-content ol li {
    list-style: decimal;
}

.article-content blockquote {
    margin: var(--space-8) 0;
    padding: var(--space-6);
    background: var(--color-gray-50);
    border-left: 4px solid var(--color-primary);
    border-radius: 0 var(--radius-md) var(--radius-md) 0;
}

.article-content blockquote p {
    margin: 0;
    font-style: italic;
}

.article-content img {
    max-width: 100%;
    height: auto;
    border-radius: var(--radius-md);
    margin: var(--space-8) 0;
}

.article-placeholder {
    padding: var(--space-8);
    background: var(--color-gray-50);
    border-radius: var(--radius-md);
    text-align: center;
    color: var(--color-gray-500);
}

/* Share */
.article-share {
    max-width: 720px;
    margin: var(--space-12) auto 0;
    padding-top: var(--space-8);
    border-top: 1px solid var(--color-gray-200);
    display: flex;
    align-items: center;
    gap: var(--space-4);
}

.share-label {
    font-size: var(--text-sm);
    color: var(--color-gray-500);
}

.share-buttons {
    display: flex;
    gap: var(--space-3);
}

.share-btn {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: var(--radius-full);
    transition: all var(--transition-fast);
}

.share-btn svg {
    width: 20px;
    height: 20px;
    fill: var(--color-white);
}

.share-twitter {
    background: #1DA1F2;
}

.share-twitter:hover {
    background: #0c8de4;
}

.share-facebook {
    background: #1877F2;
}

.share-facebook:hover {
    background: #0d65d9;
}

.share-line {
    background: #00B900;
}

.share-line:hover {
    background: #009900;
}

/* Article Nav */
.article-nav {
    max-width: 720px;
    margin: var(--space-12) auto 0;
}

.article-nav-back {
    display: inline-flex;
    align-items: center;
    gap: var(--space-2);
    font-size: var(--text-base);
    color: var(--color-gray-600);
    transition: color var(--transition-fast);
}

.article-nav-back:hover {
    color: var(--color-primary);
}

.article-nav-back svg {
    width: 20px;
    height: 20px;
}

/* Related News */
.related-title {
    font-size: var(--text-xl);
    margin-bottom: var(--space-6);
}

.news-list {
    display: flex;
    flex-direction: column;
    gap: var(--space-4);
}
</style>

<?php require INCLUDES_PATH . '/footer.php'; ?>
