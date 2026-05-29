<?php
/**
 * Whatever Partners Inc. - 受託サービス（一覧）
 */

$pageMeta = getPageMetaOptions($pageKey);
$pageTitle = $pageMeta['pageTitle'];
$metaOptions = $pageMeta['metaOptions'];
$bodyClass = 'page-business';

require INCLUDES_PATH . '/header.php';
?>

<section class="page-header">
    <div class="container">
        <span class="page-title-en">Business</span>
        <h1 class="page-title">受託サービス</h1>
    </div>
</section>

<section class="section section-lg">
    <div class="container">
        <p class="business-lead animate-on-scroll">
            ホワットエバーパートナーズでは、Webサイトの制作・運用・集客・ゲーム制作の4つを受託しています。いずれも「作って終わり」ではなく、運用や成果まで見据えた設計を心がけています。とくにWebサイト制作は、新規・リニューアル・ネットショップに対応し、お客様のビジネスや担当者の運用しやすさに合わせて設計から構築まで一貫してご支援します。まずは何ができるかを知っていただくため、各サービスの概要をご覧ください。
        </p>
    </div>
</section>

<section class="section bg-gray">
    <div class="container">
        <div class="grid grid-2">
            <a href="/business/web" class="service-card business-page-card animate-on-scroll">
                <span class="top-business-icon" aria-hidden="true"><img src="<?= asset('icons/043-web development.svg') ?>" alt=""></span>
                <h2 class="service-title">Webサイト制作</h2>
                <p class="service-desc">新規・リニューアル・ネットショップに対応。運用まで含めた設計から構築まで一括で行います。大量データの掲載や基幹システム連携、会員サイトなど、要件に合わせた設計が得意です。詳しくはこちらをご覧ください。</p>
            </a>
            <a href="/business/operation" class="service-card business-page-card animate-on-scroll animate-delay-1">
                <span class="top-business-icon" aria-hidden="true"><img src="<?= asset('icons/016-developer.svg') ?>" alt=""></span>
                <h2 class="service-title">Webサイト運営代行</h2>
                <p class="service-desc">日々の更新・記事作成・LP制作・フォーム対応のほか、障害の一次対応やバックアップまで。マニュアル化と確実な実施で、社内で手が回らない時期も更新が止まらない体制を整えます。</p>
            </a>
            <a href="/business/marketing" class="service-card business-page-card animate-on-scroll animate-delay-2">
                <span class="top-business-icon" aria-hidden="true"><img src="<?= asset('icons/028-marketing.svg') ?>" alt=""></span>
                <h2 class="service-title">インターネット集客</h2>
                <p class="service-desc">強引なSEOは行いません。Googleの考え方に沿った解析・コンテンツ改善・広告・導線設計をご提案します。短期・中期でできることと期待値のすり合わせから始めます。</p>
            </a>
            <a href="/business/game-dev" class="service-card business-page-card animate-on-scroll animate-delay-3">
                <span class="top-business-icon" aria-hidden="true"><img src="<?= asset('icons/037-smartphone.svg') ?>" alt=""></span>
                <h2 class="service-title">ブラウザゲーム開発</h2>
                <p class="service-desc">プロトタイプやミニゲーム、イベント連動・教育用途など。自社でもゲーム事業を運営しており、Webサイトの集客・滞在・回遊に活かせるゲームの企画・制作が可能です。</p>
            </a>
        </div>
    </div>
</section>

<style>
.business-lead { font-size: var(--text-base); line-height: var(--leading-relaxed); color: var(--color-gray-700); max-width: 720px; margin: 0 auto; }
.business-page-card { text-decoration: none; color: inherit; display: block; }
</style>

<?php require INCLUDES_PATH . '/footer.php'; ?>
