<?php
/**
 * アイコン一覧・検索（管理者用）assets/icons を名前順表示・ファイル名でインクリメンタルサーチ
 */
$iconsDir = BASE_PATH . '/assets/icons';
$files = is_dir($iconsDir) ? glob($iconsDir . '/*.svg') : [];
$icons = [];
foreach ($files as $path) {
    $basename = basename($path);
    $nameForSort = preg_replace('/^\d+-/', '', $basename);
    $icons[] = ['file' => $basename, 'sortName' => $nameForSort];
}
usort($icons, static function ($a, $b) {
    return strcasecmp($a['sortName'], $b['sortName']);
});

$pageMeta = getPageMetaOptions($pageKey);
$pageTitle = $pageMeta['pageTitle'];
$metaOptions = $pageMeta['metaOptions'];
$metaOptions['robots'] = 'noindex, nofollow';
$bodyClass = 'page-admin-icons';

require INCLUDES_PATH . '/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1 class="page-title"><?= h($pageTitle) ?></h1>
        <p class="admin-icons-desc">先頭の番号は無視してアイコン名で並んでいます。ファイル名で検索できます。</p>
    </div>
</section>

<section class="section section-lg">
    <div class="container">
        <div class="admin-icons-search-wrap">
            <label for="admin-icons-search" class="admin-icons-search-label">検索（ファイル名）</label>
            <input type="text" id="admin-icons-search" class="admin-icons-search-input" placeholder="例: gamepad, arrow, building..." autocomplete="off">
        </div>
        <p class="admin-icons-count" id="admin-icons-count"><?= count($icons) ?> 件</p>
        <ul class="admin-icons-grid" id="admin-icons-grid">
            <?php foreach ($icons as $icon): ?>
            <li class="admin-icons-item" data-filename="<?= h($icon['file']) ?>">
                <div class="admin-icons-preview">
                    <img src="<?= asset('icons/' . $icon['file']) ?>" alt="" width="48" height="48" loading="lazy">
                </div>
                <span class="admin-icons-filename"><?= h($icon['file']) ?></span>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<style>
.admin-icons-desc { color: rgba(255,255,255,0.8); font-size: var(--text-sm); margin-top: var(--space-2); }
.admin-icons-search-wrap { margin-bottom: var(--space-4); }
.admin-icons-search-label { display: block; font-size: var(--text-sm); font-weight: var(--font-medium); margin-bottom: var(--space-2); color: var(--color-gray-700); }
.admin-icons-search-input { width: 100%; max-width: 360px; padding: var(--space-3) var(--space-4); font-size: var(--text-base); border: 1px solid var(--color-gray-300); border-radius: var(--radius-md); }
.admin-icons-search-input:focus { outline: none; border-color: var(--color-primary); box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15); }
.admin-icons-count { font-size: var(--text-sm); color: var(--color-gray-500); margin-bottom: var(--space-4); }
.admin-icons-grid { list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: repeat(auto-fill, minmax(140px, 1fr)); gap: var(--space-4); }
.admin-icons-item { display: flex; flex-direction: column; align-items: center; padding: var(--space-4); background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); transition: border-color var(--transition-fast), box-shadow var(--transition-fast); }
.admin-icons-item:hover { border-color: var(--color-gray-300); box-shadow: var(--shadow-sm); }
.admin-icons-item.hidden { display: none; }
.admin-icons-preview { width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; margin-bottom: var(--space-2); }
.admin-icons-preview img { max-width: 100%; max-height: 100%; object-fit: contain; }
.admin-icons-filename { font-size: var(--text-xs); color: var(--color-gray-600); text-align: center; word-break: break-all; }
</style>

<script>
(function() {
    const search = document.getElementById('admin-icons-search');
    const grid = document.getElementById('admin-icons-grid');
    const countEl = document.getElementById('admin-icons-count');
    if (!search || !grid) return;

    const items = grid.querySelectorAll('.admin-icons-item');
    const total = items.length;

    function updateFilter() {
        const q = (search.value || '').trim().toLowerCase();
        let visible = 0;
        items.forEach(function(item) {
            const name = (item.getAttribute('data-filename') || '').toLowerCase();
            const show = !q || name.indexOf(q) !== -1;
            item.classList.toggle('hidden', !show);
            if (show) visible++;
        });
        countEl.textContent = visible + ' 件' + (q ? ' / ' + total + ' 件中' : '');
    }

    search.addEventListener('input', updateFilter);
    search.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') { search.value = ''; updateFilter(); search.blur(); }
    });
})();
</script>

<?php require INCLUDES_PATH . '/footer.php'; ?>
