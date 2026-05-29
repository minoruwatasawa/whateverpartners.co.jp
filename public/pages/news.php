<?php
/**
 * Whatever Partners Inc. - お知らせ一覧ページ
 */

$pageMeta = getPageMetaOptions($pageKey);
$pageTitle = $pageMeta['pageTitle'];
$metaOptions = $pageMeta['metaOptions'];
$bodyClass = 'page-news';

$newsList = getNewsList();
$perPage = 10;
$currentPage = max(1, intval($_GET['p'] ?? 1));
$totalItems = count($newsList);
$paginationData = pagination($totalItems, $perPage, $currentPage);
$offset = ($currentPage - 1) * $perPage;
$displayNews = array_slice($newsList, $offset, $perPage);

// カテゴリーフィルター
$category = $_GET['category'] ?? '';
if ($category) {
    $displayNews = array_filter($displayNews, function($item) use ($category) {
        return $item['category'] === $category;
    });
}

require INCLUDES_PATH . '/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <span class="page-title-en">News</span>
        <h1 class="page-title">お知らせ</h1>
    </div>
</section>

<!-- News List Section -->
<section class="section section-lg">
    <div class="container">
        <!-- Category Filter -->
        <div class="news-filter animate-on-scroll">
            <a href="/news" class="filter-btn <?= empty($category) ? 'active' : '' ?>">すべて</a>
            <a href="/news?category=お知らせ" class="filter-btn <?= $category === 'お知らせ' ? 'active' : '' ?>">お知らせ</a>
            <a href="/news?category=プレスリリース" class="filter-btn <?= $category === 'プレスリリース' ? 'active' : '' ?>">プレスリリース</a>
            <a href="/news?category=イベント" class="filter-btn <?= $category === 'イベント' ? 'active' : '' ?>">イベント</a>
            <a href="/news?category=メディア掲載" class="filter-btn <?= $category === 'メディア掲載' ? 'active' : '' ?>">メディア掲載</a>
        </div>
        
        <!-- News List -->
        <?php if (empty($displayNews)): ?>
        <div class="news-empty">
            <p>該当するお知らせはありません</p>
        </div>
        <?php else: ?>
        <div class="news-list-full">
            <?php foreach ($displayNews as $index => $news): ?>
            <a href="/news?slug=<?= h($news['slug']) ?>" class="news-item animate-on-scroll animate-delay-<?= $index % 5 ?>">
                <div class="news-item-date">
                    <span class="news-date-day"><?= date('d', strtotime($news['date'])) ?></span>
                    <span class="news-date-month"><?= date('Y.m', strtotime($news['date'])) ?></span>
                </div>
                <div class="news-item-content">
                    <div class="news-item-meta">
                        <?= categoryBadge($news['category']) ?>
                    </div>
                    <h2 class="news-item-title"><?= h($news['title']) ?></h2>
                    <?php if (!empty($news['excerpt'])): ?>
                    <p class="news-item-excerpt"><?= h(truncate($news['excerpt'], 100)) ?></p>
                    <?php endif; ?>
                </div>
                <div class="news-item-arrow">
                    <svg viewBox="0 0 24 24"><path fill="currentColor" d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        
        <!-- Pagination -->
        <?php if ($paginationData['total'] > 1): ?>
        <nav class="pagination">
            <?php if ($paginationData['prev']): ?>
            <a href="/news?p=<?= $paginationData['prev'] ?><?= $category ? '&category=' . urlencode($category) : '' ?>" class="pagination-btn pagination-prev">
                <svg viewBox="0 0 24 24"><path fill="currentColor" d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
                前へ
            </a>
            <?php endif; ?>
            
            <div class="pagination-numbers">
                <?php foreach ($paginationData['pages'] as $page): ?>
                <a href="/news?p=<?= $page['number'] ?><?= $category ? '&category=' . urlencode($category) : '' ?>" 
                   class="pagination-number <?= $page['active'] ? 'active' : '' ?>">
                    <?= $page['number'] ?>
                </a>
                <?php endforeach; ?>
            </div>
            
            <?php if ($paginationData['next']): ?>
            <a href="/news?p=<?= $paginationData['next'] ?><?= $category ? '&category=' . urlencode($category) : '' ?>" class="pagination-btn pagination-next">
                次へ
                <svg viewBox="0 0 24 24"><path fill="currentColor" d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z"/></svg>
            </a>
            <?php endif; ?>
        </nav>
        <?php endif; ?>
        <?php endif; ?>
    </div>
</section>

<style>
/* News Filter */
.news-filter {
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-2);
    margin-bottom: var(--space-8);
    padding-bottom: var(--space-6);
    border-bottom: 1px solid var(--color-gray-200);
}

.filter-btn {
    padding: var(--space-2) var(--space-4);
    font-size: var(--text-sm);
    color: var(--color-gray-600);
    border: 1px solid var(--color-gray-200);
    border-radius: var(--radius-full);
    transition: all var(--transition-fast);
}

.filter-btn:hover,
.filter-btn.active {
    color: var(--color-primary);
    border-color: var(--color-primary);
    background: rgba(37, 99, 235, 0.05);
}

/* News List Full */
.news-list-full {
    display: flex;
    flex-direction: column;
    gap: var(--space-4);
}

.news-item {
    display: grid;
    grid-template-columns: auto 1fr auto;
    gap: var(--space-5);
    padding: var(--space-6);
    background: var(--color-white);
    border: 1px solid var(--color-gray-100);
    border-radius: var(--radius-lg);
    transition: all var(--transition-base);
    align-items: center;
}

.news-item:hover {
    border-color: var(--color-primary);
    box-shadow: var(--shadow-md);
    transform: translateX(4px);
}

.news-item-date {
    text-align: center;
    min-width: 60px;
}

.news-date-day {
    display: block;
    font-family: var(--font-en);
    font-size: var(--text-3xl);
    font-weight: var(--font-bold);
    color: var(--color-primary);
    line-height: 1;
}

.news-date-month {
    display: block;
    font-family: var(--font-en);
    font-size: var(--text-xs);
    color: var(--color-gray-500);
    margin-top: var(--space-1);
}

.news-item-content {
    min-width: 0;
}

.news-item-meta {
    margin-bottom: var(--space-2);
}

.news-item-title {
    font-size: var(--text-base);
    font-weight: var(--font-medium);
    line-height: var(--leading-snug);
    margin-bottom: var(--space-2);
}

@media (min-width: 640px) {
    .news-item-title {
        font-size: var(--text-lg);
    }
}

.news-item-excerpt {
    font-size: var(--text-sm);
    color: var(--color-gray-500);
    line-height: var(--leading-relaxed);
    display: none;
}

@media (min-width: 640px) {
    .news-item-excerpt {
        display: block;
    }
}

.news-item-arrow {
    color: var(--color-gray-400);
    transition: transform var(--transition-base);
}

.news-item:hover .news-item-arrow {
    transform: translateX(4px);
    color: var(--color-primary);
}

.news-item-arrow svg {
    width: 24px;
    height: 24px;
}

/* Empty State */
.news-empty {
    padding: var(--space-16);
    text-align: center;
    color: var(--color-gray-500);
}

/* Pagination */
.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: var(--space-4);
    margin-top: var(--space-12);
}

.pagination-btn {
    display: flex;
    align-items: center;
    gap: var(--space-2);
    padding: var(--space-3) var(--space-5);
    font-size: var(--text-sm);
    color: var(--color-gray-600);
    border: 1px solid var(--color-gray-200);
    border-radius: var(--radius-md);
    transition: all var(--transition-fast);
}

.pagination-btn:hover {
    border-color: var(--color-primary);
    color: var(--color-primary);
}

.pagination-btn svg {
    width: 18px;
    height: 18px;
}

.pagination-numbers {
    display: flex;
    gap: var(--space-2);
}

.pagination-number {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: var(--text-sm);
    color: var(--color-gray-600);
    border: 1px solid var(--color-gray-200);
    border-radius: var(--radius-md);
    transition: all var(--transition-fast);
}

.pagination-number:hover,
.pagination-number.active {
    background: var(--color-primary);
    border-color: var(--color-primary);
    color: var(--color-white);
}
</style>

<?php require INCLUDES_PATH . '/footer.php'; ?>
