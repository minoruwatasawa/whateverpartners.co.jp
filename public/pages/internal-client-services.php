<?php
/**
 * クライアントサービス紹介（確認用・内部ページ）
 * data/client-intro.json を全件読み込み、TOPと同じデザインで縦に並べて表示。
 * public_ok を true にしたものだけトップページに表示される。
 */
$clientServices = getClientIntroSlidesForPreview();
$uniqueClientNames = [];
foreach ($clientServices as $s) {
    $name = isset($s['client_name']) ? trim((string) $s['client_name']) : '';
    if ($name !== '' && !in_array($name, $uniqueClientNames, true)) {
        $uniqueClientNames[] = $name;
    }
}

$pageMeta = getPageMetaOptions($pageKey);
$pageTitle = $pageMeta['pageTitle'];
$metaOptions = $pageMeta['metaOptions'];
$metaOptions['robots'] = 'noindex, nofollow';
$bodyClass = 'page-internal-client-services';

require INCLUDES_PATH . '/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1 class="page-title"><?= h($pageTitle) ?></h1>
        <p class="internal-client-services-desc">トップページ掲載前にクライアントへ確認用の一覧です。スイッチをONにすると display-config/client-intro-approvals.json が更新され、トップページに表示されます（デプロイで上書きされない場所に保存）。バナー本体は public/data/client-intro.json で別管理。</p>
    </div>
</section>

<section class="section section-lg bg-gray">
    <div class="container">
        <?php if (empty($clientServices)): ?>
        <p class="text-center text-gray">クライアントサービスはまだ登録されていません。</p>
        <?php else: ?>
        <section class="client-intro-section client-intro-section--preview mt-8" aria-label="クライアントのサービス紹介（確認用）">
            <div class="client-intro-preview-controls">
                <label for="client-intro-filter" class="client-intro-preview-controls-label">クライアントで絞り込み</label>
                <select id="client-intro-filter" class="client-intro-preview-select" aria-label="表示するクライアントを選択">
                    <option value="">すべて</option>
                    <?php foreach ($uniqueClientNames as $name): ?>
                    <option value="<?= h($name) ?>"><?= h($name) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <h3 class="client-intro-title">クライアントサービス紹介</h3>
            <p class="client-intro-preview-drag-hint">ドラッグで並び順を変更できます。トップページの表示順に反映されます。</p>
            <div class="client-intro-preview-list" id="client-intro-preview-list">
                <?php foreach ($clientServices as $slide): $slideId = (string) $slide['_id']; ?>
                <div class="client-intro-slide" data-id="<?= h($slideId) ?>" data-client-name="<?= h($slide['client_name']) ?>" role="listitem">
                    <span class="client-intro-drag-handle" draggable="true" aria-hidden="true" title="ドラッグで並び替え">⋮⋮</span>
                    <div class="client-intro-preview-banner">
                        <div class="client-intro-slide-inner" style="--client-intro-bg: url('<?= h($slide['back_image']) ?>');">
                            <div class="client-intro-gradient" aria-hidden="true"></div>
                        <div class="client-intro-content">
                            <div class="client-intro-brand">
                                <div class="client-intro-logo-wrap">
                                    <?php if (!empty($slide['logo_url'])): ?>
                                    <a href="<?= h($slide['logo_url']) ?>" class="client-intro-logo-link" target="_blank" rel="noopener noreferrer">
                                    <?php endif; ?>
                                    <img src="<?= h($slide['logo']) ?>" alt="" class="client-intro-logo" width="140" height="70" loading="lazy">
                                    <?php if (!empty($slide['logo_url'])): ?>
                                    </a>
                                    <?php endif; ?>
                                    <p class="client-intro-name"><?= h($slide['client_name']) ?></p>
                                </div>
                                <?php if (!empty($slide['description'])): ?>
                                <p class="client-intro-desc"><?= h($slide['description']) ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                            <div class="client-intro-back" aria-hidden="true"></div>
                        </div>
                        <div class="client-intro-product">
                        <div class="client-intro-product-label">PICKUP</div>
                        <div class="client-intro-product-inner">
                            <?php if (!empty($slide['product_url'])): ?>
                            <a href="<?= h($slide['product_url']) ?>" class="client-intro-product-link" target="_blank" rel="noopener noreferrer">
                            <?php endif; ?>
                            <?php if (!empty($slide['product_image'])): ?>
                            <div class="client-intro-product-img-wrap">
                                <img src="<?= h($slide['product_image']) ?>" alt="" class="client-intro-product-img" width="48" height="48" loading="lazy">
                            </div>
                            <?php endif; ?>
                            <div class="client-intro-product-text">
                                <p class="client-intro-product-name"><?= h($slide['product_name']) ?></p>
                                <p class="client-intro-product-meta">
                                    <span class="client-intro-product-price"><?= h($slide['price']) ?></span>
                                    <span class="client-intro-product-desc"><?= h($slide['product_desc']) ?></span>
                                </p>
                            </div>
                            <?php if (!empty($slide['product_url'])): ?>
                            </a>
                            <?php endif; ?>
                        </div>
                        </div>
                    </div>
                    <div class="client-intro-preview-status">
                        <span class="client-intro-preview-badge <?= !empty($slide['public_ok']) ? 'badge-success' : 'badge-default' ?>"><?= !empty($slide['public_ok']) ? '公開OK' : '未承認' ?></span>
                        <label class="client-intro-switch" aria-label="トップページに表示">
                            <input type="checkbox" class="client-intro-switch-input" data-id="<?= h($slideId) ?>" <?= !empty($slide['public_ok']) ? ' checked' : '' ?>>
                            <span class="client-intro-switch-slider"></span>
                        </label>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>
    </div>
</section>

<style>
.internal-client-services-desc { color: var(--color-gray-600); font-size: var(--text-sm); margin-top: var(--space-2); }
.internal-client-services-desc code { background: var(--color-gray-100); padding: 0.1em 0.4em; border-radius: var(--radius-sm); font-size: 0.9em; }
/* 絞り込み・スイッチ（内部ページのみ） */
.client-intro-preview-controls { display: flex; flex-wrap: wrap; align-items: center; gap: var(--space-3); padding: 0 var(--space-6) var(--space-4); }
.client-intro-preview-controls-label { font-size: var(--text-sm); font-weight: var(--font-medium); color: var(--color-gray-700); }
.client-intro-preview-select { padding: var(--space-2) var(--space-4); font-size: var(--text-base); border: 1px solid var(--color-gray-300); border-radius: var(--radius-md); background: var(--color-white); min-width: 200px; }
.client-intro-preview-select:focus { outline: none; border-color: var(--color-primary); }
.client-intro-preview-drag-hint { font-size: var(--text-sm); color: var(--color-gray-500); margin: 0 0 var(--space-4); padding: 0 var(--space-6); }
.client-intro-section--preview .client-intro-slide { position: relative; padding-left: 2.5rem; }
.client-intro-drag-handle { position: absolute; left: 0; top: 50%; transform: translateY(-50%); cursor: grab; color: var(--color-gray-400); font-size: 1rem; line-height: 1; letter-spacing: -0.2em; user-select: none; padding: var(--space-2); z-index: 2; }
.client-intro-drag-handle:hover { color: var(--color-gray-600); }
.client-intro-drag-handle:active { cursor: grabbing; }
.client-intro-slide.is-dragging { opacity: 0.6; }
.client-intro-slide.drag-over { outline: 2px solid var(--color-primary); outline-offset: 2px; }
.client-intro-section--preview .client-intro-preview-status { display: flex; align-items: center; gap: var(--space-3); flex-shrink: 0; }
.client-intro-preview-badge { display: inline-block; padding: 0.2em 0.5em; font-size: var(--text-xs); font-weight: var(--font-medium); border-radius: var(--radius-sm); }
.client-intro-preview-badge.badge-success { background: #dcfce7; color: #166534; }
.client-intro-preview-badge.badge-default { background: var(--color-gray-200); color: var(--color-gray-600); }
/* スイッチUI */
.client-intro-switch { display: inline-flex; align-items: center; cursor: pointer; }
.client-intro-switch-input { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); border: 0; }
.client-intro-switch-slider { display: block; width: 40px; height: 22px; background: var(--color-gray-300); border-radius: 11px; transition: background var(--transition-fast); }
.client-intro-switch-slider::after { content: ''; display: block; width: 18px; height: 18px; margin: 2px; background: var(--color-white); border-radius: 50%; box-shadow: 0 1px 2px rgba(0,0,0,0.2); transition: transform var(--transition-fast); }
.client-intro-switch-input:checked + .client-intro-switch-slider { background: var(--color-primary); }
.client-intro-switch-input:checked + .client-intro-switch-slider::after { transform: translateX(18px); }
.client-intro-switch-input:focus-visible + .client-intro-switch-slider { box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.25); }
.client-intro-switch-input:disabled + .client-intro-switch-slider { opacity: 0.6; cursor: not-allowed; }
/* TOPと同じカードを縦並びで表示（style.css の .client-intro-* をそのまま利用）。TOPには .client-intro-section--preview がないため影響なし */
.client-intro-section--preview .client-intro-preview-list { display: flex; flex-direction: column; align-items: center; gap: var(--space-6); }
.client-intro-section--preview .client-intro-slide { display: flex; flex-direction: row; align-items: center; gap: var(--space-4); flex: none; width: 100%; margin-right: 0; }
.client-intro-section--preview .client-intro-preview-banner { flex: 1; min-width: 0; overflow: hidden; border-radius: 12px; background: var(--color-white); }
.client-intro-section--preview .client-intro-slide-inner { position: relative; }
.client-intro-section--preview .client-intro-slide.is-hidden-by-filter { display: none; }
@media (min-width: 768px) {
    .client-intro-section--preview .client-intro-slide { width: auto; max-width: 100%; }
    .client-intro-section--preview .client-intro-preview-banner { width: 544px; flex: 0 0 544px; }
}
</style>

<script>
(function() {
    var filterEl = document.getElementById('client-intro-filter');
    var listEl = document.getElementById('client-intro-preview-list');
    if (!listEl) return;

    function getVisibleSlides() {
        return [].slice.call(listEl.querySelectorAll('.client-intro-slide:not(.is-hidden-by-filter)'));
    }
    function getAllSlides() {
        return [].slice.call(listEl.querySelectorAll('.client-intro-slide'));
    }

    if (filterEl) {
        filterEl.addEventListener('change', function() {
            var value = (filterEl.value || '').trim();
            getAllSlides().forEach(function(slide) {
                var name = slide.getAttribute('data-client-name') || '';
                var show = value === '' || name === value;
                slide.classList.toggle('is-hidden-by-filter', !show);
            });
        });
    }

    listEl.addEventListener('change', function(e) {
        var input = e.target;
        if (input.classList.contains('client-intro-switch-input')) {
            var id = input.getAttribute('data-id') || '';
            var publicOk = input.checked;
            input.disabled = true;
            fetch('/api/client-intro-update.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ id: id, public_ok: publicOk })
            }).then(function(res) { return res.json(); }).then(function(data) {
                input.disabled = false;
                if (data.ok) {
                    var slide = input.closest('.client-intro-slide');
                    var badge = slide ? slide.querySelector('.client-intro-preview-badge') : null;
                    if (badge) {
                        badge.textContent = publicOk ? '公開OK' : '未承認';
                        badge.className = 'client-intro-preview-badge ' + (publicOk ? 'badge-success' : 'badge-default');
                    }
                } else {
                    input.checked = !publicOk;
                    if (data.error) alert('更新に失敗しました: ' + data.error);
                }
            }).catch(function() {
                input.disabled = false;
                input.checked = !publicOk;
                alert('更新に失敗しました。');
            });
        }
    });

    var draggedEl = null;
    var orderBeforeDrag = null;

    listEl.addEventListener('dragstart', function(e) {
        if (!e.target.classList.contains('client-intro-drag-handle')) return;
        var slide = e.target.closest('.client-intro-slide');
        if (!slide) return;
        draggedEl = slide;
        slide.classList.add('is-dragging');
        orderBeforeDrag = getAllSlides().map(function(s) { return s.getAttribute('data-id') || ''; });
        e.dataTransfer.effectAllowed = 'move';
        e.dataTransfer.setData('text/plain', slide.getAttribute('data-id') || '');
        e.dataTransfer.setDragImage(slide, 0, 0);
    });

    listEl.addEventListener('dragend', function(e) {
        if (draggedEl) {
            draggedEl.classList.remove('is-dragging');
            draggedEl = null;
        }
        getAllSlides().forEach(function(s) { s.classList.remove('drag-over'); });
    });

    listEl.addEventListener('dragover', function(e) {
        e.preventDefault();
        var slide = e.target.closest('.client-intro-slide');
        if (slide && slide !== draggedEl) {
            getAllSlides().forEach(function(s) { s.classList.remove('drag-over'); });
            slide.classList.add('drag-over');
        }
    });

    listEl.addEventListener('dragleave', function(e) {
        if (!listEl.contains(e.relatedTarget)) {
            getAllSlides().forEach(function(s) { s.classList.remove('drag-over'); });
        }
    });

    listEl.addEventListener('drop', function(e) {
        e.preventDefault();
        var dropTarget = e.target.closest('.client-intro-slide');
        if (!dropTarget || !draggedEl || dropTarget === draggedEl) {
            if (draggedEl) draggedEl.classList.remove('is-dragging');
            draggedEl = null;
            return;
        }
        dropTarget.classList.remove('drag-over');
        var slides = getAllSlides();
        var fromIdx = slides.indexOf(draggedEl);
        var toIdx = slides.indexOf(dropTarget);
        if (fromIdx === -1 || toIdx === -1) return;
        listEl.removeChild(draggedEl);
        var afterSlides = getAllSlides();
        var insertBefore = afterSlides[toIdx] || null;
        if (insertBefore) {
            listEl.insertBefore(draggedEl, insertBefore);
        } else {
            listEl.appendChild(draggedEl);
        }
        var newOrder = getAllSlides().map(function(s) { return s.getAttribute('data-id') || ''; });
        fetch('/api/client-intro-order.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ order: newOrder })
        }).then(function(res) { return res.json(); }).then(function(data) {
            if (!data.ok) {
                revertOrder(orderBeforeDrag);
                alert(data.error || '並び順の保存に失敗しました。');
            }
        }).catch(function() {
            revertOrder(orderBeforeDrag);
            alert('並び順の保存に失敗しました。');
        });
        draggedEl = null;
    });

    function revertOrder(order) {
        var slides = getAllSlides();
        var byId = {};
        slides.forEach(function(s) {
            var id = s.getAttribute('data-id') || '';
            byId[id] = s;
        });
        listEl.innerHTML = '';
        order.forEach(function(id) {
            if (byId[id]) listEl.appendChild(byId[id]);
        });
    }
})();
</script>

<?php require INCLUDES_PATH . '/footer.php'; ?>
