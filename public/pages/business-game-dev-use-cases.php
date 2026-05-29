<?php
/**
 * Whatever Partners Inc. - ゲームの活用シーン（/business/game-dev/use-cases）
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
        <h1 class="page-title">ゲームの活用シーン</h1>
    </div>
</section>

<!-- 集客・認知・PR -->
<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">集客・認知・PR</h2>
        <p class="gd-sub-text animate-on-scroll" style="max-width: 720px;">ブラウザゲームは新規顧客の獲得やブランド認知に強力な効果を発揮します。通常のWebコンテンツでは実現しにくい「体験」を提供することで、ユーザーとの接点を深めます。</p>
        <div class="gd-uc-img-center animate-on-scroll">
            <img src="<?= asset('images/business_game_dev/gd_uc_acquisition.png') ?>" alt="集客・認知・PRのイメージ" width="800" height="400" loading="lazy">
        </div>
        <ul class="gd-uc-grid gd-uc-grid--2">
            <li class="gd-uc-card animate-on-scroll">
                <h3 class="gd-uc-card-title">LP設置で滞在時間を大幅向上</h3>
                <p class="gd-uc-card-desc">ランディングページにゲームを埋め込むことで、通常のLPと比べてユーザーの滞在時間が大幅に伸びます。長く滞在することでサービスへの理解が深まり、問い合わせや申込など<strong>CVへの転換率が向上</strong>します。テキストや動画だけでは伝わらない「体験」を通じて、商品・サービスの魅力を自然に伝えることができます。</p>
            </li>
            <li class="gd-uc-card animate-on-scroll">
                <h3 class="gd-uc-card-title">キャンペーンのゲーム化でメディア露出</h3>
                <p class="gd-uc-card-desc">通常のキャンペーンをゲーム化することで「遊べるキャンペーン」として話題性が生まれます。<strong>プレスリリースやメディア取材のネタ</strong>になりやすく、広告費をかけずに露出を獲得できる可能性があります。「企業がゲームを出した」というニュース性そのものが集客効果を持ちます。</p>
            </li>
            <li class="gd-uc-card animate-on-scroll">
                <h3 class="gd-uc-card-title">スコア共有によるSNS拡散</h3>
                <p class="gd-uc-card-desc">ゲーム終了後のスコア画面から<strong>SNSシェアを促す</strong>仕組みを組み込めます。ハイスコアの共有はユーザー自身が拡散の起点となるため、広告とは異なるオーガニックなリーチが期待できます。ランキング機能と組み合わせることで、繰り返しプレイや友人招待の動機づけにもなります。</p>
            </li>
            <li class="gd-uc-card animate-on-scroll">
                <h3 class="gd-uc-card-title">周年・記念サイトの目玉コンテンツ</h3>
                <p class="gd-uc-card-desc">会社や商品の<strong>周年記念サイト</strong>にゲームを設置することで、記念サイトに訪問する動機と滞在する理由を作れます。既存ファン向けの特別コンテンツとしても、新規認知を獲得する話題づくりとしても活用可能です。限定ゲームだからこそ生まれる特別感が、ブランドへの愛着を深めます。</p>
            </li>
        </ul>
    </div>
</section>

<!-- リテンション・店舗・イベント -->
<section class="section section-lg bg-gray">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">リテンション・店舗・イベント</h2>
        <p class="gd-sub-text animate-on-scroll" style="max-width: 720px;">既存顧客の維持・再来訪の促進に、ゲームは強力なフックになります。実店舗やイベント会場との連動で、オンラインとオフラインをつなぐ体験を提供できます。</p>
        <div class="gd-uc-img-center animate-on-scroll">
            <img src="<?= asset('images/business_game_dev/gd_uc_retention.png') ?>" alt="リテンション・店舗・イベントのイメージ" width="800" height="400" loading="lazy">
        </div>
        <ul class="gd-uc-grid gd-uc-grid--2">
            <li class="gd-uc-card animate-on-scroll">
                <h3 class="gd-uc-card-title">プレゼント・クーポン配布の入口</h3>
                <p class="gd-uc-card-desc">ゲームクリアやスコアに応じて<strong>特典やクーポンを配布</strong>する仕組みを組み込めます。単にクーポンを配るよりもゲームを介することで「獲得した」達成感が生まれ、利用率が高まります。キャンペーンのエンゲージメントを大幅に向上させる効果があります。</p>
            </li>
            <li class="gd-uc-card animate-on-scroll">
                <h3 class="gd-uc-card-title">期間限定ゲームで再ログイン促進</h3>
                <p class="gd-uc-card-desc">月替わりや季節限定のゲームを配信することで、<strong>「また来月も」「次は何が出るか」</strong>という期待感を生み出せます。サービスへの再ログイン・再訪問のきっかけとなり、解約防止にも効果的です。定期的なコンテンツ更新をゲームで実現する方法です。</p>
            </li>
            <li class="gd-uc-card animate-on-scroll">
                <h3 class="gd-uc-card-title">店頭QR・タブレットでゲーム体験</h3>
                <p class="gd-uc-card-desc">店頭に<strong>QRコードやタブレット</strong>を設置し、来店客にその場でゲームをプレイしてもらいます。プレイ後に特典を付与することで、店舗内の滞在時間延長、購買促進、再来店の動機づけが可能です。アプリのインストール不要で、ブラウザだけで完結する手軽さがポイントです。</p>
            </li>
            <li class="gd-uc-card animate-on-scroll">
                <h3 class="gd-uc-card-title">展示会・オフラインイベント連動</h3>
                <p class="gd-uc-card-desc">展示会やイベント会場で、来場者が<strong>スマホからその場で参加できるゲーム</strong>を提供します。ブースへの集客・滞在時間の延長、リード獲得に活用可能です。ゲーム内で会社情報や商品情報を自然に伝える設計もできます。</p>
            </li>
            <li class="gd-uc-card animate-on-scroll">
                <h3 class="gd-uc-card-title">ゲーム結果でクーポン発行・EC誘導</h3>
                <p class="gd-uc-card-desc">ゲームのスコアやクリア状況に応じて<strong>割引クーポンを発行</strong>し、そのままECサイトへ誘導する導線を設計できます。「ハイスコア＝お得に購入」という仕組みで、ゲーム体験が直接売上につながります。行動データの外部連携にも対応しています。</p>
            </li>
        </ul>
    </div>
</section>

<!-- 観光・教育・外国人向け -->
<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">観光・教育・外国人向け</h2>
        <p class="gd-sub-text animate-on-scroll" style="max-width: 720px;">「知ってもらいたい」「行ってみたい」「学んでほしい」。情報を伝える手段として、ゲームは非常に効果的です。特に外国人向けでは、言葉の壁をゲーム体験で乗り越えられます。</p>
        <div class="gd-uc-img-center animate-on-scroll">
            <img src="<?= asset('images/business_game_dev/gd_uc_tourism.png') ?>" alt="観光・教育・外国人向けのイメージ" width="800" height="400" loading="lazy">
        </div>
        <ul class="gd-uc-grid gd-uc-grid--2">
            <li class="gd-uc-card animate-on-scroll">
                <h3 class="gd-uc-card-title">観光地への集客・再訪促進</h3>
                <p class="gd-uc-card-desc"><strong>地域限定ゲーム</strong>で「行ってみたい」を喚起します。観光地の風景やキャラクターをゲームに取り入れ、訪問前の興味喚起から、訪問後の再訪促進まで一貫した体験設計が可能です。地元キャラクターの作成にも対応します。</p>
            </li>
            <li class="gd-uc-card animate-on-scroll">
                <h3 class="gd-uc-card-title">クイズ・ストーリーで観光情報を案内</h3>
                <p class="gd-uc-card-desc">観光地や名所を<strong>クイズやストーリー形式</strong>でゲーム化し、遊びながら「知ってもらう」情報案内を実現します。パンフレットやWebサイトでは読まれにくい情報も、ゲーム体験を通じて自然に伝えることができます。</p>
            </li>
            <li class="gd-uc-card animate-on-scroll">
                <h3 class="gd-uc-card-title">学習・教育コンテンツのゲーム化</h3>
                <p class="gd-uc-card-desc">「知ってもらいたい内容」をゲーム化し、<strong>遊びながら理解を促進</strong>します。子供向け学習アプリの入口としての簡易学習ゲームから、社内研修のゲーミフィケーションまで幅広く対応。ルールや仕組みを「体験」として届けることで、テキストだけでは得られない学習効果が期待できます。</p>
            </li>
            <li class="gd-uc-card animate-on-scroll">
                <h3 class="gd-uc-card-title">自治体の情報通知・啓発</h3>
                <p class="gd-uc-card-desc">防災・健康・制度案内など、<strong>自治体が市民に届けたい情報</strong>をゲームで届けます。堅い内容もゲーム化することで参加のハードルが下がり、幅広い層にリーチできます。特に若い世代や子供向けの啓発には効果的です。</p>
            </li>
            <li class="gd-uc-card animate-on-scroll">
                <h3 class="gd-uc-card-title">飲食店・店舗での外国人アピール</h3>
                <p class="gd-uc-card-desc">店頭やタブレット・QRで<strong>英語ゲームを提供</strong>し、外国人顧客へアピールします。言葉の壁がある場面でも、ゲーム体験を通じてサービスや商品の魅力を伝えることが可能です。インバウンド顧客の来店・リピート促進に活用できます。</p>
            </li>
            <li class="gd-uc-card animate-on-scroll">
                <h3 class="gd-uc-card-title">海外プラットフォーム掲載で世界へ</h3>
                <p class="gd-uc-card-desc"><strong>CrazyGames等の世界的ゲームプラットフォーム</strong>への掲載をサポートします（実績あり）。海外向けLP・多言語キャンペーンと組み合わせることで、外国人向けサービス展開のプロモーションツールとして活用可能です。</p>
            </li>
        </ul>
    </div>
</section>

<section class="section bg-gray">
    <div class="container page-content-narrow gd-sub-back-link-wrap">
        <a href="/business/game-dev" class="gd-sub-back-link">&larr; ブラウザゲーム制作に戻る</a>
    </div>
</section>

<?php require INCLUDES_PATH . '/game-dev-sub-style.php'; ?>

<style>
/* use-cases page */
.gd-uc-img-center { text-align: center; margin: var(--space-4) auto var(--space-6); max-width: 640px; }
.gd-uc-img-center img { width: 100%; height: auto; border-radius: var(--radius-lg); }
.gd-uc-grid { list-style: none; padding: 0; margin: 0; display: grid; gap: var(--space-5); }
.gd-uc-grid--2 { grid-template-columns: 1fr; max-width: 960px; margin-left: auto; margin-right: auto; }
@media (min-width: 768px) { .gd-uc-grid--2 { grid-template-columns: repeat(2, 1fr); } }
.gd-uc-card { background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: var(--space-5); }
.bg-gray .gd-uc-card { background: var(--color-white); }
.gd-uc-card-title { font-size: var(--text-base); font-weight: var(--font-semibold); margin: 0 0 var(--space-2); }
.gd-uc-card-desc { font-size: var(--text-sm); color: var(--color-gray-600); line-height: var(--leading-relaxed); margin: 0; }
</style>

<?php require INCLUDES_PATH . '/footer.php'; ?>
