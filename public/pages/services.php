<?php
/**
 * Whatever Partners Inc. - オリジナルサービス（/services）
 * add_request.md 13-22 に基づく
 */

$pageMeta = getPageMetaOptions($pageKey);
$pageTitle = $pageMeta['pageTitle'];
$metaOptions = $pageMeta['metaOptions'];
$bodyClass = 'page-services';

$originalServices = [
    [
        'name' => '100人アンケート',
        'desc' => '6,800円から実施できるインターネット調査サービスです。これまで高額だったインターネット調査を、中小規模の事業者向けに使いやすい価格で提供。アンケートのテーマ決めや設問づくりからご相談に応じます。テレビ制作会社の視聴者調査、大学の卒業研究、商品開発の市場調査など、メディア・研究・マーケティングと幅広くご利用いただいています。',
        'url' => 'https://100nin.jp',
    ],
    [
        'name' => '見える化メディア',
        'desc' => '中小企業の業務全般の見える化を支援する情報メディアです。IT化・クラウド化・AI導入をサポートするツールやサービスを紹介し、導入時の比較やポイントを記事で発信。中小企業のサービスとニーズのマッチングにも役立つよう、経営・業務改善に使える実務情報をまとめています。',
        'url' => 'https://mieru-ka.jp',
    ],
    [
        'name' => 'MIYAGI SAKE MARKET',
        'desc' => '宮城県の日本酒に特化したネットショップです。県内の日本酒を国内最大級のラインナップで取り揃え、デザイン・サイト運営・在庫連動・マーケティングまで弊社で一貫して担当。産地の魅力を伝え、多くの方に宮城の日本酒を届けることを目指して運営しています。',
        'url' => 'https://miyagi.japan-sake.shop',
    ],
];

require INCLUDES_PATH . '/header.php';
?>

<section class="page-header">
    <div class="container">
        <span class="page-title-en">Original Services</span>
        <h1 class="page-title">オリジナルサービス</h1>
    </div>
</section>

<section class="section section-lg">
    <div class="container">
        <p class="services-lead animate-on-scroll">
            当社で企画・運営しているオリジナルサービスです。インターネット調査、中小企業の見える化メディア、宮城県日本酒のネットショップの3つを展開しています。
        </p>
    </div>
</section>

<section class="section section-lg bg-gray">
    <div class="container">
        <ul class="original-services-list">
            <?php foreach ($originalServices as $index => $item): ?>
            <li class="original-service-card animate-on-scroll">
                <div class="original-service-card-inner">
                    <h2 class="original-service-name"><?= h($item['name']) ?></h2>
                    <?php if (!empty($item['desc'])): ?>
                    <p class="original-service-desc"><?= h($item['desc']) ?></p>
                    <?php endif; ?>
                    <?php if (!empty($item['children'])): ?>
                    <ul class="original-service-children">
                        <?php foreach ($item['children'] as $child): ?>
                        <li>
                            <?php if (!empty($child['url'])): ?>
                            <a href="<?= h($child['url']) ?>" target="_blank" rel="noopener noreferrer" class="original-service-link"><?= h($child['name']) ?></a>
                            <span class="original-service-domain"><?= h(parse_url($child['url'], PHP_URL_HOST) ?? $child['url']) ?></span>
                            <?php else: ?>
                            <span class="original-service-name-only"><?= h($child['name']) ?></span>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php elseif ($item['url'] !== null): ?>
                    <p class="original-service-link-wrap">
                        <a href="<?= h($item['url']) ?>" target="_blank" rel="noopener noreferrer" class="original-service-link"><?= h(parse_url($item['url'], PHP_URL_HOST) ?? $item['url']) ?></a>
                    </p>
                    <?php else: ?>
                    <p class="original-service-nourl">（URL未定）</p>
                    <?php endif; ?>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<style>
.services-lead { max-width: 640px; margin: 0 auto; font-size: var(--text-base); line-height: var(--leading-relaxed); color: var(--color-gray-700); }
.original-services-list { list-style: none; padding: 0; margin: 0; display: grid; gap: var(--space-6); }
@media (min-width: 640px) { .original-services-list { grid-template-columns: repeat(2, 1fr); } }
.original-service-card { background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); overflow: hidden; }
.original-service-card-inner { padding: var(--space-6); }
.original-service-name { font-size: var(--text-xl); font-weight: var(--font-semibold); margin-bottom: var(--space-2); }
.original-service-desc { font-size: var(--text-sm); color: var(--color-gray-600); margin-bottom: var(--space-4); }
.original-service-link-wrap { margin: 0; }
.original-service-link { color: var(--color-primary); font-weight: var(--font-medium); }
.original-service-link:hover { text-decoration: underline; }
.original-service-domain { font-size: var(--text-sm); color: var(--color-gray-500); margin-left: var(--space-2); }
.original-service-nourl { font-size: var(--text-sm); color: var(--color-gray-500); margin: 0; }
.original-service-children { list-style: none; padding: 0; margin: 0; }
.original-service-children li { margin-bottom: var(--space-2); font-size: var(--text-base); }
.original-service-children li:last-child { margin-bottom: 0; }
.original-service-name-only { color: var(--color-gray-700); }
</style>

<?php require INCLUDES_PATH . '/footer.php'; ?>
