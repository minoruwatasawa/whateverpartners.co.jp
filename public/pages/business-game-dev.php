<?php
/**
 * Whatever Partners Inc. - ブラウザゲーム制作（/business/game-dev）
 */

$pageMeta = getPageMetaOptions($pageKey);
$pageTitle = $pageMeta['pageTitle'];
$metaOptions = $pageMeta['metaOptions'];
$bodyClass = 'page-business-game-dev';

require INCLUDES_PATH . '/header.php';
?>

<!-- Section 1: ヒーロー -->
<section class="page-header">
    <div class="container">
        <span class="page-header-icon" aria-hidden="true"><img src="<?= asset('icons/037-smartphone.svg') ?>" alt=""></span>
        <span class="page-title-en">Business D</span>
        <h1 class="page-title">ブラウザゲーム制作</h1>
    </div>
</section>

<!-- Section 1: リード -->
<section class="section section-lg">
    <div class="container gd-top-lead-wrap">
        <p class="gd-top-lead-catch animate-on-scroll">ブラウザゲームで、集客・体験・リテンションを。</p>
        <p class="lead gd-top-lead animate-on-scroll">
            URL を開くだけでプレイ開始。アプリのインストールもアカウント登録も不要です。<br>
            約10分の短時間でも「クリアした」「ハイスコアが出た」と達成感を感じられるゲーム体験を、<strong>30万円〜</strong>の予算で企画から制作まで一貫してご提供します。
        </p>
        <p class="lead gd-top-lead animate-on-scroll">
            キャンペーンLP・店頭QR・周年記念サイト・観光案内・教育コンテンツまで——ビジネスの目的に合わせたゲームを設計し、集客・CV・リテンションにつなげます。
        </p>
    </div>
</section>

<!-- Section 2: 数字で見る特徴 -->
<section class="section bg-gray">
    <div class="container">
        <ul class="gd-top-stats">
            <li class="gd-top-stat animate-on-scroll">
                <span class="gd-top-stat-num">30<small>万円〜</small></span>
                <span class="gd-top-stat-label">企画から制作まで一貫対応</span>
                <span class="gd-top-stat-desc">mini プランなら30万円からゲーム制作が可能。まずは試したいニーズにも対応。</span>
            </li>
            <li class="gd-top-stat animate-on-scroll">
                <span class="gd-top-stat-num">≈10<small>分</small></span>
                <span class="gd-top-stat-label">短時間でも達成感のある設計</span>
                <span class="gd-top-stat-desc">スマホ縦型・タップ操作で、短いプレイでも満足度とシェア意欲を高めます。</span>
            </li>
            <li class="gd-top-stat animate-on-scroll">
                <span class="gd-top-stat-num">EN<small>対応</small></span>
                <span class="gd-top-stat-label">英語・海外プラットフォーム実績</span>
                <span class="gd-top-stat-desc">全編英語・音声読み上げ対応。CrazyGames掲載実績あり。</span>
            </li>
        </ul>
    </div>
</section>

<!-- Section 3: 活用シーン ハイライト -->
<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">ゲームの活用シーン</h2>
        <p class="gd-top-section-desc animate-on-scroll">ブラウザゲームはさまざまなビジネスシーンで活用されています。</p>
        <ul class="gd-top-uc-grid">
            <li class="gd-top-uc-card animate-on-scroll">
                <div class="gd-top-uc-img">
                    <img src="<?= asset('images/business_game_dev/gd_uc_acquisition.png') ?>" alt="集客・認知" width="400" height="200" loading="lazy">
                </div>
                <h3 class="gd-top-uc-title">集客・認知・PR</h3>
                <p class="gd-top-uc-desc">LPにゲームを設置して滞在時間を大幅向上。キャンペーンのゲーム化で話題性を生み、SNSシェアで認知を拡大します。</p>
            </li>
            <li class="gd-top-uc-card animate-on-scroll">
                <div class="gd-top-uc-img">
                    <img src="<?= asset('images/business_game_dev/gd_uc_retention.png') ?>" alt="リテンション" width="400" height="200" loading="lazy">
                </div>
                <h3 class="gd-top-uc-title">リテンション・店舗・イベント</h3>
                <p class="gd-top-uc-desc">ゲームクリアで特典配布、期間限定ゲームで再訪促進。店頭QRやイベント会場でスマホから即参加できる体験を提供します。</p>
            </li>
            <li class="gd-top-uc-card animate-on-scroll">
                <div class="gd-top-uc-img">
                    <img src="<?= asset('images/business_game_dev/gd_uc_tourism.png') ?>" alt="観光・教育" width="400" height="200" loading="lazy">
                </div>
                <h3 class="gd-top-uc-title">観光・教育・外国人向け</h3>
                <p class="gd-top-uc-desc">観光地をクイズで紹介、学習コンテンツのゲーム化、英語ゲームでインバウンド対応。ゲームで「伝わる」体験を設計します。</p>
            </li>
        </ul>
        <p class="gd-top-more animate-on-scroll"><a href="/business/game-dev/use-cases">活用シーンをもっと詳しく &rarr;</a></p>
    </div>
</section>

<!-- Section 4: 料金プラン 抜粋 -->
<section class="section section-lg bg-gray">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">料金プラン</h2>
        <p class="gd-top-section-desc animate-on-scroll">ゲームの規模と目的に合わせた3つのプランをご用意しています。</p>
        <div class="gd-top-pricing-grid animate-on-scroll">
            <div class="gd-top-pricing-card">
                <span class="gd-top-pricing-label">mini</span>
                <p class="gd-top-pricing-price">30<small>万円〜</small></p>
                <p class="gd-top-pricing-time">想定プレイ：約10分</p>
                <p class="gd-top-pricing-desc">1〜2回プレイのシンプルなキャンペーンゲーム。タップ操作の1ルールで手軽に導入。</p>
            </div>
            <div class="gd-top-pricing-card gd-top-pricing-card--primary">
                <span class="gd-top-pricing-label">standard</span>
                <p class="gd-top-pricing-price">100<small>万円〜</small></p>
                <p class="gd-top-pricing-time">想定プレイ：20分〜</p>
                <p class="gd-top-pricing-desc">繰り返し遊べる情報紹介・体験型。2〜3ルールで行動データの外部連携にも対応。</p>
            </div>
            <div class="gd-top-pricing-card">
                <span class="gd-top-pricing-label">full</span>
                <p class="gd-top-pricing-price">200<small>万円〜</small></p>
                <p class="gd-top-pricing-time">想定プレイ：30分〜</p>
                <p class="gd-top-pricing-desc">没入型フルゲーム。OP〜ED完全構成で、CrazyGames等掲載サポートも。</p>
            </div>
        </div>
        <p class="gd-top-more animate-on-scroll"><a href="/business/game-dev/pricing">料金・進め方の詳細 &rarr;</a></p>
    </div>
</section>

<!-- Section 5: 制作事例ピックアップ -->
<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">制作事例 — ゲームセンター TINY</h2>
        <p class="gd-top-section-desc animate-on-scroll">自社ゲーム事業「<a href="https://tiny.game/" target="_blank" rel="noopener noreferrer">ゲームセンター TINY</a>」で企画・制作・運用のすべてを自社で行っています。受託制作でも同じ知見とクオリティを活かします。</p>
        <div class="gd-top-cases-grid">
            <a href="https://tiny.game/game/bubblen-escape/" class="gd-top-case animate-on-scroll" target="_blank" rel="noopener noreferrer">
                <img src="<?= asset('images/business_game_dev/tiny/bubblen_escape_01.jpg') ?>" alt="バブルんエスケープ" width="360" height="640" loading="lazy" class="gd-top-case-ss">
                <div class="gd-top-case-info">
                    <img src="<?= asset('images/business_game_dev/tiny/bubblen_escape_logo.png') ?>" alt="" class="gd-top-case-logo" loading="lazy">
                    <span class="gd-top-case-name">バブルんエスケープ</span>
                    <span class="gd-top-case-genre">パズル / カジュアル</span>
                </div>
            </a>
            <a href="https://tiny.game/game/blind-route/" class="gd-top-case animate-on-scroll" target="_blank" rel="noopener noreferrer">
                <img src="<?= asset('images/business_game_dev/tiny/blind_route_01.jpg') ?>" alt="BLIND Route" width="360" height="640" loading="lazy" class="gd-top-case-ss">
                <div class="gd-top-case-info">
                    <img src="<?= asset('images/business_game_dev/tiny/blind_route_logo.png') ?>" alt="" class="gd-top-case-logo" loading="lazy">
                    <span class="gd-top-case-name">BLIND Route</span>
                    <span class="gd-top-case-genre">パズル / 記憶</span>
                </div>
            </a>
            <a href="https://tiny.game/game/monster-in-the-dark/" class="gd-top-case animate-on-scroll" target="_blank" rel="noopener noreferrer">
                <img src="<?= asset('images/business_game_dev/tiny/monster_in_the_dark_01.jpg') ?>" alt="MONSTER IN THE DARK" width="360" height="640" loading="lazy" class="gd-top-case-ss">
                <div class="gd-top-case-info">
                    <img src="<?= asset('images/business_game_dev/tiny/monster_in_the_dark_logo.png') ?>" alt="" class="gd-top-case-logo" loading="lazy">
                    <span class="gd-top-case-name">MONSTER IN THE DARK</span>
                    <span class="gd-top-case-genre">アドベンチャー / ホラー</span>
                </div>
            </a>
        </div>
        <p class="gd-top-more animate-on-scroll"><a href="/business/game-dev/cases">すべての制作事例を見る &rarr;</a></p>
    </div>
</section>

<!-- Section 6: 制作のこだわり ダイジェスト -->
<section class="section section-lg bg-gray">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">制作のこだわり</h2>
        <p class="gd-top-section-desc animate-on-scroll">ゲームは楽しいだけでは不十分。ビジネス目的の達成と、高品質な体験の両立にこだわります。</p>
        <div class="gd-top-quality-wrap">
            <div class="gd-top-quality-imgs animate-on-scroll">
                <img src="<?= asset('images/business_game_dev/gd_quality_creative.png') ?>" alt="クリエイティブ" width="400" height="200" loading="lazy">
                <img src="<?= asset('images/business_game_dev/gd_quality_business.png') ?>" alt="ビジネス設計" width="400" height="200" loading="lazy">
            </div>
            <ul class="gd-top-quality-grid">
                <li class="gd-top-quality-card animate-on-scroll">
                    <h3 class="gd-top-quality-title">キャラクター・UI・世界観</h3>
                    <p class="gd-top-quality-desc">目的に合ったオリジナルキャラクター、直感的なUI、BGM・効果音、統一された世界観で、Webサイト以上の没入感を実現。</p>
                </li>
                <li class="gd-top-quality-card animate-on-scroll">
                    <h3 class="gd-top-quality-title">ビジネス目的を達成する設計</h3>
                    <p class="gd-top-quality-desc">CVへの自然な誘導、テンプレートにはない独自のフック、外国人向け英語対応まで、ビジネスゴールを組み込んだ体験設計。</p>
                </li>
                <li class="gd-top-quality-card animate-on-scroll">
                    <h3 class="gd-top-quality-title">AI利用の透明性</h3>
                    <p class="gd-top-quality-desc">AI素材利用時は権利資料を添付、版権素材のみ参照、納品時に両者チェック。安心してご依頼いただける体制を整備。</p>
                </li>
            </ul>
        </div>
        <p class="gd-top-more animate-on-scroll"><a href="/business/game-dev/quality">制作のこだわりを詳しく見る &rarr;</a></p>
    </div>
</section>

<!-- Section 7: 詳しく知る（6ページハブ） -->
<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">詳しく知る</h2>
        <p class="gd-top-section-desc animate-on-scroll">各テーマごとに詳しくご説明しています。気になるところからご覧ください。</p>
        <ul class="gd-top-hub-grid">
            <li class="animate-on-scroll">
                <a href="/business/game-dev/overview" class="gd-top-hub-card">
                    <span class="gd-top-hub-num">01</span>
                    <h3 class="gd-top-hub-title">作成できるゲーム概要</h3>
                    <p class="gd-top-hub-desc">おすすめの3パターン（mini / standard / full）、対応ジャンル5種、外国人・英語対応、CrazyGames掲載実例。</p>
                </a>
            </li>
            <li class="animate-on-scroll">
                <a href="/business/game-dev/use-cases" class="gd-top-hub-card">
                    <span class="gd-top-hub-num">02</span>
                    <h3 class="gd-top-hub-title">ゲームの活用シーン</h3>
                    <p class="gd-top-hub-desc">集客・認知・PR（4事例）、リテンション・店舗・イベント（5事例）、観光・教育・外国人向け（6事例）を詳しく解説。</p>
                </a>
            </li>
            <li class="animate-on-scroll">
                <a href="/business/game-dev/quality" class="gd-top-hub-card">
                    <span class="gd-top-hub-num">03</span>
                    <h3 class="gd-top-hub-title">制作のこだわり</h3>
                    <p class="gd-top-hub-desc">キャラクター・UI・音楽・世界観の制作品質、ビジネス目的を達成する設計思想、AI利用時の権利保護体制。</p>
                </a>
            </li>
            <li class="animate-on-scroll">
                <a href="/business/game-dev/pricing" class="gd-top-hub-card">
                    <span class="gd-top-hub-num">04</span>
                    <h3 class="gd-top-hub-title">料金・進め方</h3>
                    <p class="gd-top-hub-desc">3つの料金プラン詳細、予算の考え方（フェーズ分け・ブラッシュアップ）、ヒアリングからリリースまでの7ステップ。</p>
                </a>
            </li>
            <li class="animate-on-scroll">
                <a href="/business/game-dev/cases" class="gd-top-hub-card">
                    <span class="gd-top-hub-num">05</span>
                    <h3 class="gd-top-hub-title">制作事例</h3>
                    <p class="gd-top-hub-desc">自社ゲーム事業「TINY」の公開中タイトル3作品（スクリーンショット・ジャンル・解説付き）と業種別の活用事例。</p>
                </a>
            </li>
            <li class="animate-on-scroll">
                <a href="/business/game-dev/about-wp" class="gd-top-hub-card">
                    <span class="gd-top-hub-num">06</span>
                    <h3 class="gd-top-hub-title">WPのゲーム制作の立ち位置</h3>
                    <p class="gd-top-hub-desc">ゲーム業界6層のレイヤー図でWPの位置を明示。ブラウザ完結の手軽さ、ビジネス特化、手の届く価格帯の強み。</p>
                </a>
            </li>
        </ul>
    </div>
</section>

<!-- Section 8: よくある質問 -->
<section class="section section-lg bg-gray">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">よくある質問</h2>
        <dl class="gd-top-faq animate-on-scroll">
            <div class="gd-top-faq-item">
                <dt><span class="faq-label faq-q">Q</span> 期間と費用の目安はどの程度ですか？</dt>
                <dd><span class="faq-label faq-a">A</span><span> mini プラン（30万円〜）で約1ヶ月、standard（100万円〜）で2〜3ヶ月が目安です。ゲームの規模・仕様により変動しますので、初回相談のうえでお見積もりします。<a href="/business/game-dev/pricing">詳しくはこちら</a></span></dd>
            </div>
            <div class="gd-top-faq-item">
                <dt><span class="faq-label faq-q">Q</span> プロトタイプだけ依頼できますか？</dt>
                <dd><span class="faq-label faq-a">A</span><span> はい。企画検証用のプロトタイプのみのご依頼に対応しています。検証結果を踏まえて、本制作のご相談も可能です。</span></dd>
            </div>
            <div class="gd-top-faq-item">
                <dt><span class="faq-label faq-q">Q</span> スマートフォンでもプレイできますか？</dt>
                <dd><span class="faq-label faq-a">A</span><span> ブラウザで動作するゲームのため、スマートフォンやタブレットのブラウザからプレイ可能です。スマホ縦型・タップ操作を基本設計にしています。</span></dd>
            </div>
            <div class="gd-top-faq-item">
                <dt><span class="faq-label faq-q">Q</span> AI素材を使った場合の権利はどうなりますか？</dt>
                <dd><span class="faq-label faq-a">A</span><span> AIで素材を作成した場合は、利用ツール・権利・所有権を説明した資料を納品時に添付します。版権素材のみを参照元に使用し、納品時に両者で重複チェックを行います。<a href="/business/game-dev/quality">詳しくはこちら</a></span></dd>
            </div>
            <div class="gd-top-faq-item">
                <dt><span class="faq-label faq-q">Q</span> 自社でゲーム事業もやっていると聞きましたが？</dt>
                <dd><span class="faq-label faq-a">A</span><span> はい。「<a href="https://tiny.game/" target="_blank" rel="noopener noreferrer">ゲームセンター TINY</a>」や海外向けゲームなど、自社でゲームの企画・運営も行っています。受託制作と自社事業の両方の知見を活かしてご支援します。</span></dd>
            </div>
        </dl>
    </div>
</section>

<!-- Section 9: CTA -->
<section class="section section-lg">
    <div class="container" style="text-align: center;">
        <h2 class="section-title-sm animate-on-scroll">まずはお気軽にご相談ください</h2>
        <p class="gd-top-section-desc animate-on-scroll" style="margin-left: auto; margin-right: auto;">「こんなゲームは作れる？」「予算感を知りたい」「企画段階から相談したい」——<br>どんな段階からでもお気軽にお問い合わせください。初回のご相談は無料です。</p>
        <div class="gd-top-cta-buttons animate-on-scroll">
            <a href="/contact" class="btn btn-primary btn-lg">お問い合わせ</a>
            <a href="/business/game-dev/cases" class="btn btn-secondary btn-lg">制作事例を見る</a>
        </div>
    </div>
</section>

<style>
/* ==========================================================================
   /business/game-dev — 親ページ
   ========================================================================== */

/* --- Lead --- */
.gd-top-lead-wrap { max-width: 720px; margin-left: auto; margin-right: auto; }
.gd-top-lead-catch { font-size: var(--text-2xl); font-weight: var(--font-bold); text-align: center; margin-bottom: var(--space-5); line-height: var(--leading-tight); }
.lead.gd-top-lead { font-size: var(--text-base); line-height: var(--leading-relaxed); color: var(--color-gray-700); margin-bottom: var(--space-4); }
.lead.gd-top-lead:last-of-type { margin-bottom: 0; }

/* --- Stats --- */
.gd-top-stats { list-style: none; padding: 0; margin: 0; display: grid; gap: var(--space-6); grid-template-columns: 1fr; max-width: 960px; margin-left: auto; margin-right: auto; }
@media (min-width: 768px) { .gd-top-stats { grid-template-columns: repeat(3, 1fr); } }
.gd-top-stat { text-align: center; padding: var(--space-5) var(--space-4); }
.gd-top-stat-num { display: block; font-family: var(--font-en); font-size: var(--text-4xl); font-weight: var(--font-bold); color: var(--color-primary); line-height: 1.1; margin-bottom: var(--space-2); }
.gd-top-stat-num small { font-size: var(--text-lg); font-weight: var(--font-semibold); }
.gd-top-stat-label { display: block; font-size: var(--text-sm); font-weight: var(--font-semibold); margin-bottom: var(--space-2); }
.gd-top-stat-desc { display: block; font-size: var(--text-xs); color: var(--color-gray-500); line-height: var(--leading-relaxed); }

/* --- Section desc / more link --- */
.gd-top-section-desc { max-width: 720px; color: var(--color-gray-600); line-height: var(--leading-relaxed); margin-bottom: var(--space-5); }
.gd-top-more { margin-top: var(--space-5); }
.gd-top-more a { font-size: var(--text-sm); font-weight: var(--font-medium); color: var(--color-primary); text-decoration: none; }
.gd-top-more a:hover { text-decoration: underline; }

/* --- Use-cases highlight --- */
.gd-top-uc-grid { list-style: none; padding: 0; margin: 0; display: grid; gap: var(--space-6); grid-template-columns: 1fr; }
@media (min-width: 768px) { .gd-top-uc-grid { grid-template-columns: repeat(3, 1fr); } }
.gd-top-uc-card { background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); overflow: hidden; }
.gd-top-uc-img img { width: 100%; height: auto; display: block; }
.gd-top-uc-title { font-size: var(--text-base); font-weight: var(--font-semibold); padding: var(--space-4) var(--space-4) var(--space-1); }
.gd-top-uc-desc { font-size: var(--text-sm); color: var(--color-gray-600); line-height: var(--leading-relaxed); padding: 0 var(--space-4) var(--space-4); margin: 0; }

/* --- Pricing --- */
.gd-top-pricing-grid { display: grid; gap: var(--space-5); grid-template-columns: 1fr; max-width: 960px; margin: 0 auto; }
@media (min-width: 768px) { .gd-top-pricing-grid { grid-template-columns: repeat(3, 1fr); } }
.gd-top-pricing-card { background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: var(--space-5); text-align: center; }
.gd-top-pricing-card--primary { border-color: var(--color-primary); box-shadow: var(--shadow-md); }
.gd-top-pricing-label { display: inline-block; font-family: var(--font-en); font-size: var(--text-xs); font-weight: var(--font-bold); text-transform: uppercase; letter-spacing: 0.08em; color: var(--color-gray-400); margin-bottom: var(--space-1); }
.gd-top-pricing-card--primary .gd-top-pricing-label { color: var(--color-primary); }
.gd-top-pricing-price { font-size: var(--text-2xl); font-weight: var(--font-bold); margin-bottom: var(--space-1); }
.gd-top-pricing-price small { font-size: var(--text-base); font-weight: var(--font-semibold); }
.gd-top-pricing-time { font-size: var(--text-sm); color: var(--color-gray-500); margin-bottom: var(--space-3); }
.gd-top-pricing-desc { font-size: var(--text-sm); color: var(--color-gray-600); line-height: var(--leading-relaxed); text-align: left; margin: 0; }

/* --- Cases pickup --- */
.gd-top-cases-grid { display: grid; gap: var(--space-5); grid-template-columns: 1fr; max-width: 780px; margin: var(--space-6) auto 0; }
@media (min-width: 640px) { .gd-top-cases-grid { grid-template-columns: repeat(3, 1fr); } }
.gd-top-case { display: block; text-decoration: none; color: inherit; background: var(--color-gray-50); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); overflow: hidden; transition: box-shadow var(--transition-base), transform var(--transition-base); }
.gd-top-case:hover { box-shadow: var(--shadow-md); transform: translateY(-2px); }
.gd-top-case-ss { width: 100%; height: auto; display: block; aspect-ratio: 9/16; object-fit: cover; }
.gd-top-case-info { padding: var(--space-3) var(--space-4); }
.gd-top-case-logo { max-width: 120px; height: auto; margin-bottom: var(--space-2); }
.gd-top-case-name { display: block; font-size: var(--text-sm); font-weight: var(--font-semibold); margin-bottom: var(--space-1); }
.gd-top-case-genre { display: block; font-size: var(--text-xs); color: var(--color-gray-400); }

/* --- Quality digest --- */
.gd-top-quality-wrap { max-width: 960px; margin: 0 auto; }
.gd-top-quality-imgs { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-4); margin-bottom: var(--space-5); }
.gd-top-quality-imgs img { width: 100%; height: auto; border-radius: var(--radius-lg); }
.gd-top-quality-grid { list-style: none; padding: 0; margin: 0; display: grid; gap: var(--space-5); grid-template-columns: 1fr; }
@media (min-width: 768px) { .gd-top-quality-grid { grid-template-columns: repeat(3, 1fr); } }
.gd-top-quality-card { background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: var(--space-5); }
.gd-top-quality-title { font-size: var(--text-base); font-weight: var(--font-semibold); margin: 0 0 var(--space-2); }
.gd-top-quality-desc { font-size: var(--text-sm); color: var(--color-gray-600); line-height: var(--leading-relaxed); margin: 0; }

/* --- Hub grid --- */
.gd-top-hub-grid { list-style: none; padding: 0; margin: 0; display: grid; gap: var(--space-5); grid-template-columns: 1fr; }
@media (min-width: 640px) { .gd-top-hub-grid { grid-template-columns: repeat(2, 1fr); } }
@media (min-width: 1024px) { .gd-top-hub-grid { grid-template-columns: repeat(3, 1fr); } }
.gd-top-hub-card { display: block; background: var(--color-gray-50); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: var(--space-5); text-decoration: none; color: inherit; transition: box-shadow var(--transition-base), border-color var(--transition-base), transform var(--transition-base); height: 100%; }
.gd-top-hub-card:hover { border-color: var(--color-primary); box-shadow: var(--shadow-md); transform: translateY(-2px); }
.gd-top-hub-num { font-family: var(--font-en); font-size: var(--text-sm); font-weight: var(--font-semibold); color: var(--color-primary); display: block; margin-bottom: var(--space-2); }
.gd-top-hub-title { font-size: var(--text-base); font-weight: var(--font-semibold); margin-bottom: var(--space-2); }
.gd-top-hub-desc { font-size: var(--text-sm); color: var(--color-gray-500); line-height: var(--leading-relaxed); margin: 0; }

/* --- FAQ --- */
.gd-top-faq { max-width: 720px; margin-left: auto; margin-right: auto; }
.gd-top-faq-item { background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: var(--space-4); margin-bottom: var(--space-4); }
.gd-top-faq-item:last-child { margin-bottom: 0; }
.gd-top-faq-item dt { display: flex; align-items: flex-start; gap: var(--space-3); font-weight: var(--font-semibold); margin: 0 0 var(--space-2); }
.gd-top-faq-item dd { display: flex; align-items: flex-start; gap: var(--space-3); margin: 0; color: var(--color-gray-600); line-height: var(--leading-relaxed); }
.gd-top-faq-item dd a { color: var(--color-primary); }
.faq-label { flex-shrink: 0; width: 28px; height: 28px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; font-size: var(--text-sm); font-weight: var(--font-bold); }
.faq-q { background: var(--color-primary); color: var(--color-white); }
.faq-a { background: var(--color-gray-700); color: var(--color-white); }

/* --- CTA --- */
.gd-top-cta-buttons { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; margin-top: var(--space-5); }

/* --- Header icon --- */
.page-header-icon { display: block; margin-bottom: var(--space-4); text-align: center; }
.page-header-icon img { display: block; width: 48px; height: 48px; margin-left: auto; margin-right: auto; filter: brightness(0) invert(1); }
</style>

<?php require INCLUDES_PATH . '/footer.php'; ?>
