<?php
/**
 * Whatever Partners Inc. - WPのゲーム制作の立ち位置（/business/game-dev/about-wp）
 */

$pageMeta = getPageMetaOptions($pageKey);
$pageTitle = $pageMeta['pageTitle'];
$metaOptions = $pageMeta['metaOptions'];
$bodyClass = 'page-business-game-dev-sub';

require INCLUDES_PATH . '/header.php';
?>

<section class="page-header">
    <div class="container">
        <p class="page-header-parent"><a href="/business/game-dev">ブラウザゲーム制作</a></p>
        <h1 class="page-title">WPのゲーム制作の立ち位置</h1>
    </div>
</section>

<!-- リード -->
<section class="section section-lg">
    <div class="container page-content-narrow">
        <p class="gd-sub-text animate-on-scroll" style="font-size: var(--text-lg);">ゲーム制作会社は数多くありますが、<strong>「ビジネス目的のブラウザゲーム」</strong>に特化した制作会社は多くありません。ここではゲーム業界全体の中で、Whatever Partners（WP）がどの位置にいるのかをご説明します。</p>
    </div>
</section>

<!-- セクション1：ゲーム業界のレイヤー -->
<section class="section section-lg bg-gray">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">ゲーム業界のレイヤー</h2>
        <p class="gd-sub-text animate-on-scroll" style="max-width: 720px;">ゲーム制作にはさまざまなレイヤーがあります。目的・予算に合ったレイヤーを選ぶことが、成功するゲーム制作の第一歩です。</p>

        <div class="gd-wp-layers-wrap animate-on-scroll">
            <div class="gd-wp-layer-img">
                <img src="<?= asset('images/business_game_dev/gd_aboutwp_layers.png') ?>" alt="ゲーム業界のレイヤー図" width="600" height="340" loading="lazy">
            </div>
            <ol class="gd-wp-layer-list">
                <li class="gd-wp-layer">
                    <span class="gd-wp-layer-num">1</span>
                    <div class="gd-wp-layer-body">
                        <h3 class="gd-wp-layer-title">コンシューマー系 大企業</h3>
                        <p class="gd-wp-layer-desc">据置機・大作タイトルを手がける大手ゲーム会社。開発チームは数百人規模で、予算は数億〜数十億円。企業のキャンペーンゲームとは全く異なる世界です。</p>
                    </div>
                </li>
                <li class="gd-wp-layer">
                    <span class="gd-wp-layer-num">2</span>
                    <div class="gd-wp-layer-body">
                        <h3 class="gd-wp-layer-title">Steam等 ハイスペック3Dゲーム</h3>
                        <p class="gd-wp-layer-desc">PC/Steam向けの3D描画エンジンを使ったゲーム。UnityやUnreal Engineで開発され、高品質なグラフィックとゲーム体験を提供。制作費は数千万円〜。</p>
                    </div>
                </li>
                <li class="gd-wp-layer">
                    <span class="gd-wp-layer-num">3</span>
                    <div class="gd-wp-layer-body">
                        <h3 class="gd-wp-layer-title">スマホアプリ（課金型）</h3>
                        <p class="gd-wp-layer-desc">App Store / Google Play で配信される課金型ゲーム。ゲーム好きが納得する品質が求められ、継続的な運用・アップデートが必要。制作費は数百万〜数千万円。</p>
                    </div>
                </li>
                <li class="gd-wp-layer gd-wp-layer--highlight">
                    <span class="gd-wp-layer-num">★</span>
                    <div class="gd-wp-layer-body">
                        <h3 class="gd-wp-layer-title">Whatever Partners の位置</h3>
                        <p class="gd-wp-layer-desc"><strong>JSゲームエンジンでブラウザ上の軽量ゲーム</strong>を制作。多彩な表現・キャラクター・音楽・SEで、Webサイト訪問者にとって十分に魅力的なコンテンツを提供できます。<strong>30万円〜</strong>というビジネスに合った価格帯で、企画から制作まで一貫対応します。</p>
                    </div>
                </li>
                <li class="gd-wp-layer">
                    <span class="gd-wp-layer-num">5</span>
                    <div class="gd-wp-layer-body">
                        <h3 class="gd-wp-layer-title">同人ゲーム制作チーム</h3>
                        <p class="gd-wp-layer-desc">「自分たちが面白いものを作る」が目的のチーム。ビジネス目的の設計・CV導線・外部連携などは対象外のケースが多く、企業のキャンペーン用途には不向きです。</p>
                    </div>
                </li>
                <li class="gd-wp-layer">
                    <span class="gd-wp-layer-num">6</span>
                    <div class="gd-wp-layer-body">
                        <h3 class="gd-wp-layer-title">簡易ブラウザJSゲーム</h3>
                        <p class="gd-wp-layer-desc">簡易的なJavaScriptで作られたブラウザゲーム。表現力・世界観は控えめで、キャラクターや音楽も最小限。安価だがブランドイメージの向上には繋がりにくい面があります。</p>
                    </div>
                </li>
            </ol>
        </div>
    </div>
</section>

<!-- セクション2：WPの位置づけ — 具体的なイメージ -->
<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">Whatever Partners が提供するゲーム体験</h2>
        <p class="gd-sub-text animate-on-scroll" style="max-width: 720px;">「ゲーム単体で何十時間も遊ぶ」ような大型タイトルとは異なります。当社が制作するのは、<strong>Webサイトを訪れたユーザーが「おっ」と思い、数分〜数十分楽しめるゲーム</strong>です。</p>

        <div class="gd-wp-exp-grid">
            <div class="gd-wp-exp-card animate-on-scroll">
                <div class="gd-wp-exp-icon">
                    <img src="<?= asset('icons/020-smartphone.svg') ?>" alt="" width="36" height="36">
                </div>
                <h3 class="gd-wp-exp-title">ブラウザ完結・インストール不要</h3>
                <p class="gd-wp-exp-desc">スマートフォンのブラウザでURLを開くだけでプレイ開始。アプリのダウンロードやアカウント登録は不要です。QRコードを読み取って即プレイ、という導線が設計できます。</p>
            </div>
            <div class="gd-wp-exp-card animate-on-scroll">
                <div class="gd-wp-exp-icon">
                    <img src="<?= asset('icons/040-trophy.svg') ?>" alt="" width="36" height="36">
                </div>
                <h3 class="gd-wp-exp-title">短時間でも達成感のある体験</h3>
                <p class="gd-wp-exp-desc">平均プレイ時間は約10分。短い時間でも「クリアした」「ハイスコアが出た」という達成感を得られる設計で、ユーザーの満足度とシェア意欲を高めます。</p>
            </div>
            <div class="gd-wp-exp-card animate-on-scroll">
                <div class="gd-wp-exp-icon">
                    <img src="<?= asset('icons/037-art.svg') ?>" alt="" width="36" height="36">
                </div>
                <h3 class="gd-wp-exp-title">Webサイト以上の表現力</h3>
                <p class="gd-wp-exp-desc">オリジナルキャラクター・アニメーション・BGM・効果音を使った演出で、通常のWebサイトでは実現できない没入感を提供します。テーマ曲の制作にも対応しています。</p>
            </div>
            <div class="gd-wp-exp-card animate-on-scroll">
                <div class="gd-wp-exp-icon">
                    <img src="<?= asset('icons/026-cogwheel.svg') ?>" alt="" width="36" height="36">
                </div>
                <h3 class="gd-wp-exp-title">ビジネス目的に最適化</h3>
                <p class="gd-wp-exp-desc">ゲーム体験の中にCV導線・クーポン発行・データ取得・SNSシェアなどを自然に組み込みます。「楽しかった」で終わらせず、次のアクションにつなげる設計です。</p>
            </div>
        </div>

        <div class="gd-wp-exp-note animate-on-scroll">
            <p>たとえば、こんなイメージで活用されています：</p>
            <ul>
                <li>新商品のキャンペーンLPにミニゲームを設置 → <strong>滞在時間が3倍に</strong></li>
                <li>周年記念サイトにストーリーゲームを掲載 → <strong>SNSで話題に</strong></li>
                <li>店頭QRコードからゲームをプレイ → <strong>クリアでクーポン獲得</strong></li>
                <li>観光地の名所をクイズゲームで紹介 → <strong>外国人観光客にも好評</strong></li>
            </ul>
        </div>
    </div>
</section>

<!-- セクション3：WPの強み -->
<section class="section section-lg bg-gray">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">Whatever Partners の強み</h2>
        <p class="gd-sub-text animate-on-scroll" style="max-width: 720px;">ビジネス目的のブラウザゲームに特化しているからこそ、以下の強みがあります。</p>

        <div class="gd-wp-str-grid">
            <div class="gd-wp-str-card animate-on-scroll">
                <div class="gd-wp-str-icon">
                    <img src="<?= asset('icons/034-money.svg') ?>" alt="" width="40" height="40">
                </div>
                <h3 class="gd-wp-str-title">手の届く価格帯</h3>
                <p class="gd-wp-str-desc"><strong>mini 30万円</strong>からゲーム制作が可能。ゲーム専業の大手に依頼すると数百万〜ですが、WPなら「まずは試してみたい」というニーズにも応えられる価格設定です。</p>
                <a href="/business/game-dev/pricing" class="gd-wp-str-link">料金・進め方を見る &rarr;</a>
            </div>
            <div class="gd-wp-str-card animate-on-scroll">
                <div class="gd-wp-str-icon">
                    <img src="<?= asset('icons/043-gear.svg') ?>" alt="" width="40" height="40">
                </div>
                <h3 class="gd-wp-str-title">企画から制作まで一貫対応</h3>
                <p class="gd-wp-str-desc">「何から始めればいいかわからない」状態からでも大丈夫です。企画・キャラクターデザイン・開発・サウンド・テスト・リリースまで、<strong>すべてワンストップ</strong>で対応します。</p>
                <a href="/business/game-dev/quality" class="gd-wp-str-link">制作のこだわりを見る &rarr;</a>
            </div>
            <div class="gd-wp-str-card animate-on-scroll">
                <div class="gd-wp-str-icon">
                    <img src="<?= asset('icons/024-business.svg') ?>" alt="" width="40" height="40">
                </div>
                <h3 class="gd-wp-str-title">ビジネス設計に強い</h3>
                <p class="gd-wp-str-desc">集客・リテンション・観光・教育・キャンペーンなど、<strong>ビジネス目的に特化した設計</strong>が得意です。ゲームを楽しんだ先に「問い合わせ」「購入」「シェア」が待つ導線を設計します。</p>
                <a href="/business/game-dev/use-cases" class="gd-wp-str-link">活用シーンを見る &rarr;</a>
            </div>
            <div class="gd-wp-str-card animate-on-scroll">
                <div class="gd-wp-str-icon">
                    <img src="<?= asset('icons/030-globe.svg') ?>" alt="" width="40" height="40">
                </div>
                <h3 class="gd-wp-str-title">外国人・海外対応（実績あり）</h3>
                <p class="gd-wp-str-desc">全編英語・英語音声読み上げ・英語チュートリアルに対応。世界的ゲームプラットフォーム<strong>CrazyGames への掲載実績</strong>があり、インバウンド・海外展開をゲームで支援します。</p>
                <a href="/business/game-dev/overview" class="gd-wp-str-link">概要・対応範囲を見る &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section section-lg">
    <div class="container" style="text-align: center;">
        <h2 class="section-title-sm animate-on-scroll">まずはお気軽にご相談ください</h2>
        <p class="gd-sub-text animate-on-scroll" style="max-width: 640px; margin-left: auto; margin-right: auto;">「こんなゲームは作れる？」「予算感を知りたい」「企画段階から相談したい」——どんな段階からでもお気軽にお問い合わせください。初回のご相談は無料です。</p>
        <div class="gd-wp-cta-buttons animate-on-scroll">
            <a href="/contact" class="btn btn-primary btn-lg">お問い合わせ</a>
            <a href="/business/game-dev/cases" class="btn btn-secondary btn-lg">制作事例を見る</a>
        </div>
    </div>
</section>

<section class="section bg-gray">
    <div class="container page-content-narrow gd-sub-back-link-wrap">
        <a href="/business/game-dev" class="gd-sub-back-link">&larr; ブラウザゲーム制作に戻る</a>
    </div>
</section>

<?php require INCLUDES_PATH . '/game-dev-sub-style.php'; ?>

<style>
/* about-wp page */

/* Layer diagram + list */
.gd-wp-layers-wrap { max-width: 860px; margin: var(--space-6) auto 0; }
.gd-wp-layer-img { text-align: center; margin-bottom: var(--space-6); }
.gd-wp-layer-img img { max-width: 480px; width: 100%; height: auto; }
.gd-wp-layer-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: var(--space-4); counter-reset: layer; }
.gd-wp-layer { display: flex; gap: var(--space-4); align-items: flex-start; background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); padding: var(--space-4) var(--space-5); box-shadow: var(--shadow-sm); }
.gd-wp-layer--highlight { border-color: var(--color-primary); border-width: 2px; box-shadow: var(--shadow-md); background: linear-gradient(135deg, rgba(var(--color-primary-rgb, 59, 130, 246), 0.04), rgba(var(--color-primary-rgb, 59, 130, 246), 0.01)); }
.gd-wp-layer-num { flex-shrink: 0; width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background: var(--color-gray-100); color: var(--color-gray-500); font-weight: var(--font-bold); font-size: var(--text-sm); }
.gd-wp-layer--highlight .gd-wp-layer-num { background: var(--color-primary); color: var(--color-white); font-size: var(--text-base); }
.gd-wp-layer-body { flex: 1; }
.gd-wp-layer-title { font-size: var(--text-base); font-weight: var(--font-semibold); margin: 0 0 var(--space-1); }
.gd-wp-layer--highlight .gd-wp-layer-title { color: var(--color-primary); }
.gd-wp-layer-desc { font-size: var(--text-sm); color: var(--color-gray-600); line-height: var(--leading-relaxed); margin: 0; }

/* Experience grid */
.gd-wp-exp-grid { display: grid; grid-template-columns: 1fr; gap: var(--space-5); max-width: 960px; margin: var(--space-6) auto 0; }
@media (min-width: 768px) { .gd-wp-exp-grid { grid-template-columns: repeat(2, 1fr); } }
.gd-wp-exp-card { background: var(--color-gray-50); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); padding: var(--space-5); }
.gd-wp-exp-icon { margin-bottom: var(--space-3); }
.gd-wp-exp-icon img { width: 36px; height: 36px; }
.gd-wp-exp-title { font-size: var(--text-base); font-weight: var(--font-semibold); margin: 0 0 var(--space-2); }
.gd-wp-exp-desc { font-size: var(--text-sm); color: var(--color-gray-600); line-height: var(--leading-relaxed); margin: 0; }

.gd-wp-exp-note { max-width: 720px; margin: var(--space-6) auto 0; background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); padding: var(--space-5); box-shadow: var(--shadow-sm); }
.gd-wp-exp-note p { font-size: var(--text-sm); color: var(--color-gray-700); font-weight: var(--font-semibold); margin: 0 0 var(--space-3); }
.gd-wp-exp-note ul { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: var(--space-2); }
.gd-wp-exp-note li { font-size: var(--text-sm); color: var(--color-gray-600); line-height: var(--leading-relaxed); padding-left: var(--space-4); position: relative; }
.gd-wp-exp-note li::before { content: '→'; position: absolute; left: 0; color: var(--color-primary); }

/* Strength grid */
.gd-wp-str-grid { display: grid; grid-template-columns: 1fr; gap: var(--space-5); max-width: 960px; margin: var(--space-6) auto 0; }
@media (min-width: 768px) { .gd-wp-str-grid { grid-template-columns: repeat(2, 1fr); } }
.gd-wp-str-card { background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: var(--space-5); display: flex; flex-direction: column; }
.gd-wp-str-icon { margin-bottom: var(--space-3); }
.gd-wp-str-icon img { width: 40px; height: 40px; }
.gd-wp-str-title { font-size: var(--text-base); font-weight: var(--font-semibold); margin: 0 0 var(--space-2); }
.gd-wp-str-desc { font-size: var(--text-sm); color: var(--color-gray-600); line-height: var(--leading-relaxed); margin: 0 0 var(--space-3); flex: 1; }
.gd-wp-str-link { font-size: var(--text-sm); color: var(--color-primary); text-decoration: none; font-weight: var(--font-medium); }
.gd-wp-str-link:hover { text-decoration: underline; }

/* CTA */
.gd-wp-cta-buttons { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; margin-top: var(--space-5); }
</style>

<?php require INCLUDES_PATH . '/footer.php'; ?>
