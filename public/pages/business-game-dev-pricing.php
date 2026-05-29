<?php
/**
 * Whatever Partners Inc. - 料金・進め方（/business/game-dev/pricing）
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
        <h1 class="page-title">料金・進め方</h1>
    </div>
</section>

<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">料金プラン</h2>
        <p class="gd-sub-text animate-on-scroll" style="max-width: 720px;">ゲームの規模と目的に合わせた3つのプランをご用意しています。</p>
        <div class="gd-pricing-grid animate-on-scroll">
            <div class="gd-pricing-card">
                <h3 class="gd-pricing-plan">mini</h3>
                <p class="gd-pricing-price">30万円</p>
                <p class="gd-pricing-playtime">想定プレイ時間：約10分</p>
                <p class="gd-pricing-desc">1〜2回プレイの単純なキャンペーン向け。1ルール（合わせて消す・タップで操作・避けるなど）のシンプルなゲーム。外部連携なし。</p>
            </div>
            <div class="gd-pricing-card gd-pricing-card--primary">
                <h3 class="gd-pricing-plan">standard</h3>
                <p class="gd-pricing-price">100万円</p>
                <p class="gd-pricing-playtime">想定プレイ時間：20分〜</p>
                <p class="gd-pricing-desc">繰り返し遊べる、情報を紹介するタイプ。2〜3ルール（トーク＋プレイ、3タイプのゲーム等）。行動データの外部連携あり（CSV/JSON等）。</p>
            </div>
            <div class="gd-pricing-card">
                <h3 class="gd-pricing-plan">full</h3>
                <p class="gd-pricing-price">200万円〜</p>
                <p class="gd-pricing-playtime">想定プレイ時間：30分〜</p>
                <p class="gd-pricing-desc">1週間〜1ヶ月計画で遊ぶ、単体で魅力のあるゲーム。複数ルール・没入型（OP・チュートリアル・プレイ・ED等）。外部連携＋通知・情報配信。CrazyGames等掲載サポートも。</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-lg bg-gray">
    <div class="container page-content-narrow">
        <h2 class="section-title-sm animate-on-scroll">予算の考え方</h2>
        <p class="gd-sub-text animate-on-scroll">予算はゲームの規模でおおむね決まりますが、<strong>ブラッシュアップをどこまで行うか</strong>によっても作業時間が変わり、予算が変動します。そのため、一定の完成状態まで制作した時点で、予算を追加してブラッシュアップするかどうかをご確認します。</p>
        <p class="gd-sub-text animate-on-scroll">ゲームはシステムやWebサイトと異なり「完成」の定義がしづらいため、<strong>フェーズ分け・予算・完成タイミング</strong>を確認しながら進めます。</p>
    </div>
</section>

<section class="section section-lg">
    <div class="container page-content-narrow">
        <h2 class="section-title-sm animate-on-scroll">ゲーム作成のステップ</h2>
        <ol class="gd-sub-steps animate-on-scroll">
            <li><strong>ヒアリング・方向性の確認・予算提示</strong> — この時点で紙芝居的な画面イメージを作成します。</li>
            <li><strong>ゲームの初期バージョンを作成</strong> — 画像・UI・音などは仮のもので制作します。</li>
            <li><strong>ブラッシュアップ範囲の説明・要望のご確認</strong> — どの部分を詰めるかを共有し、ご要望を確認します。</li>
            <li><strong>ブラッシュアップ・確認</strong> — 1〜2回程度のやりとりで仕上げます。</li>
            <li><strong>テスト</strong></li>
            <li><strong>リリース</strong> — リリース場所の確認・配置を行います。</li>
            <li><strong>リリース後のバージョンアップ・更新</strong> — JSON等の更新でゲーム内容が変わる仕組みにしておき、更新コストを下げる方法もあります。</li>
        </ol>
    </div>
</section>

<section class="section bg-gray">
    <div class="container page-content-narrow gd-sub-back-link-wrap">
        <a href="/business/game-dev" class="gd-sub-back-link">&larr; ブラウザゲーム制作に戻る</a>
    </div>
</section>

<?php require INCLUDES_PATH . '/game-dev-sub-style.php'; ?>
<?php require INCLUDES_PATH . '/footer.php'; ?>
