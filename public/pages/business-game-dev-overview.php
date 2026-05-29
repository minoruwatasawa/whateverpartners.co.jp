<?php
/**
 * Whatever Partners Inc. - 作成できるゲーム概要（/business/game-dev/overview）
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
        <h1 class="page-title">作成できるゲーム概要</h1>
    </div>
</section>

<!-- おすすめのゲームタイプ -->
<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">おすすめのゲームタイプ</h2>
        <p class="gd-sub-text animate-on-scroll" style="max-width: 720px;">ブラウザで動作し、PC・スマートフォンの両方に対応。スマホ縦型・タップ操作・約10分のプレイ時間を基本設計としています。目的と予算に合わせた3つのパターンをご用意しています。</p>
        <div class="gd-ov-img-center animate-on-scroll">
            <img src="<?= asset('images/business_game_dev/gd_recommended_patterns.png') ?>" alt="おすすめの3パターン" width="900" height="340" loading="lazy">
        </div>
        <div class="gd-type-grid">
            <div class="gd-type-card animate-on-scroll">
                <span class="gd-type-label">mini</span>
                <h3 class="gd-type-title">キャンペーン・ミニゲーム</h3>
                <p class="gd-type-price">30万円〜</p>
                <ul class="gd-type-list">
                    <li>1〜2回プレイ、約10分</li>
                    <li>タップで消す・避ける・集めるなど1ルール</li>
                    <li>Webキャンペーン・LP・店頭QR向け</li>
                </ul>
            </div>
            <div class="gd-type-card gd-type-card--primary animate-on-scroll">
                <span class="gd-type-label">standard</span>
                <h3 class="gd-type-title">情報紹介・体験型ゲーム</h3>
                <p class="gd-type-price">100万円〜</p>
                <ul class="gd-type-list">
                    <li>繰り返し遊べる、20分〜</li>
                    <li>2〜3ルール（トーク＋プレイ、スコア連動等）</li>
                    <li>観光案内・商品紹介・教育コンテンツ向け</li>
                    <li>行動データの外部連携あり</li>
                </ul>
            </div>
            <div class="gd-type-card animate-on-scroll">
                <span class="gd-type-label">full</span>
                <h3 class="gd-type-title">没入型フルゲーム</h3>
                <p class="gd-type-price">200万円〜</p>
                <ul class="gd-type-list">
                    <li>1週間〜1ヶ月計画で遊ぶ、30分〜</li>
                    <li>OP・チュートリアル・プレイ・EDの完全構成</li>
                    <li>外部連携＋通知・情報配信</li>
                    <li>CrazyGames等プラットフォーム掲載サポート</li>
                </ul>
            </div>
        </div>
        <p class="gd-sub-note animate-on-scroll" style="max-width: 720px; margin-left: auto; margin-right: auto;">※料金の詳細は<a href="/business/game-dev/pricing">料金・進め方</a>ページをご覧ください。</p>
    </div>
</section>

<!-- 対応ジャンル -->
<section class="section section-lg bg-gray">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">対応ジャンル</h2>
        <p class="gd-sub-text animate-on-scroll" style="max-width: 720px;">幅広いジャンルに対応しています。目的やターゲットに合わせて最適なジャンルをご提案します。</p>
        <div class="gd-ov-img-center animate-on-scroll">
            <img src="<?= asset('images/business_game_dev/gd_genre_icons.png') ?>" alt="対応ジャンルのイラスト" width="800" height="200" loading="lazy" class="gd-ov-genre-img">
        </div>
        <ul class="gd-genre-grid">
            <li class="gd-genre-card animate-on-scroll">
                <h3 class="gd-genre-title">パズル系</h3>
                <p class="gd-genre-desc">マッチング、並べ替え、消す系など。直感的な操作で幅広いユーザーに対応。キャンペーンや教育に最適。</p>
            </li>
            <li class="gd-genre-card animate-on-scroll">
                <h3 class="gd-genre-title">簡易アクション系</h3>
                <p class="gd-genre-desc">避ける、集める、タップで反応するなど。テンポの良いプレイでエンゲージメント向上に効果的。</p>
            </li>
            <li class="gd-genre-card animate-on-scroll">
                <h3 class="gd-genre-title">音ゲー</h3>
                <p class="gd-genre-desc">リズムに合わせたタップ・簡易演奏。音楽と連動した体験で、ブランドや商品の世界観を演出。</p>
            </li>
            <li class="gd-genre-card animate-on-scroll">
                <h3 class="gd-genre-title">占い・診断系</h3>
                <p class="gd-genre-desc">診断・結果表示・シェア誘導。SNS拡散と相性が良く、商品マッチングや認知拡大に活用可能。</p>
            </li>
            <li class="gd-genre-card animate-on-scroll">
                <h3 class="gd-genre-title">ノベルゲーム系</h3>
                <p class="gd-genre-desc">選択肢分岐・ストーリー体験・情報案内。観光地案内や商品ストーリーの伝達に効果的。</p>
            </li>
        </ul>
        <p class="gd-sub-note animate-on-scroll" style="max-width: 720px; margin-left: auto; margin-right: auto;">※上記を組み合わせた複合タイプも可能です（例：ノベル＋ミニゲーム）。</p>
    </div>
</section>

<!-- 外国人・英語向け対応 -->
<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">外国人・英語向け対応</h2>
        <div class="gd-global-block animate-on-scroll">
            <div class="gd-global-text">
                <p class="gd-sub-text">オプションとして、外国人・英語向けのゲーム制作にも対応しています。</p>
                <ul class="gd-global-list">
                    <li>全コンテンツを<strong>英語で作成</strong>（UI・テキスト・説明文）</li>
                    <li><strong>音声での英語読み上げ</strong>対応</li>
                    <li><strong>チュートリアルも英語</strong>で制作（操作説明・ルール説明）</li>
                    <li><strong>CrazyGames等</strong>の世界的ゲームプラットフォームへの掲載サポート（実績あり）</li>
                </ul>
                <p class="gd-sub-text">海外ユーザーへのリーチ拡大、インバウンド向けの店舗・観光アピール、外国人向け事業展開のプロモーションなどに活用できます。</p>
            </div>
            <div class="gd-global-img">
                <img src="<?= asset('images/business_game_dev/gd_global_support.png') ?>" alt="外国人・英語対応イメージ" width="480" height="180" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- CrazyGames 掲載実例 -->
<section class="section section-lg bg-gray">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">CrazyGames 掲載実例</h2>
        <p class="gd-sub-text animate-on-scroll" style="max-width: 720px;">世界的にユーザーが多いゲームプラットフォーム <strong>CrazyGames</strong> に、当社が制作したゲームを実際に掲載しています。英語対応・チュートリアル・音声読み上げを含むフルローカライズで、海外ユーザーにプレイされています。</p>
        <div class="gd-cg-gallery animate-on-scroll">
            <figure class="gd-cg-figure">
                <img src="<?= asset('images/business_game_dev/crazygames_title.png') ?>" alt="CrazyGames タイトル画面" width="1024" height="640" loading="lazy" class="gd-cg-img">
                <figcaption class="gd-cg-caption">タイトル画面 — CrazyGames上でプレイ可能</figcaption>
            </figure>
            <figure class="gd-cg-figure">
                <img src="<?= asset('images/business_game_dev/crazygames_select.png') ?>" alt="CrazyGames ステージ選択" width="1024" height="640" loading="lazy" class="gd-cg-img">
                <figcaption class="gd-cg-caption">ステージ選択 — 複数のステージを用意</figcaption>
            </figure>
            <figure class="gd-cg-figure">
                <img src="<?= asset('images/business_game_dev/crazygames_play.png') ?>" alt="CrazyGames プレイ画面" width="1024" height="640" loading="lazy" class="gd-cg-img">
                <figcaption class="gd-cg-caption">プレイ画面 — 英語UIでのゲーム体験</figcaption>
            </figure>
        </div>
    </div>
</section>

<!-- 他社のブラウザゲーム紹介 -->
<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">他社のブラウザゲーム紹介</h2>
        <p class="gd-sub-text animate-on-scroll" style="max-width: 720px;">「ブラウザゲームってどんなもの？」というイメージを持っていただくために、他社が公開しているブラウザゲームをご紹介します。実際に触れてみることで、ゲーム制作のご依頼時の参考にしていただけます。</p>
        <ul class="gd-ref-grid">
            <li class="gd-ref-card animate-on-scroll">
                <a href="https://rpg.beyondjapan.com/" class="gd-ref-link" target="_blank" rel="noopener noreferrer">
                    <h3 class="gd-ref-title">ビヨンドクエスト</h3>
                    <p class="gd-ref-org">株式会社ビヨンド</p>
                    <p class="gd-ref-desc">中小企業がRPG風のブラウザゲームで会社紹介。ストーリーを通じて事業内容や社風を伝える採用・PR向けコンテンツ。</p>
                </a>
            </li>
            <li class="gd-ref-card animate-on-scroll">
                <a href="https://www.safetyaction.tokyo/game/#mini_game" class="gd-ref-link" target="_blank" rel="noopener noreferrer">
                    <h3 class="gd-ref-title">SAFETY ACTION ミニゲーム</h3>
                    <p class="gd-ref-org">警視庁</p>
                    <p class="gd-ref-desc">交通安全をテーマにしたシンプルなブラウザゲーム。公共団体による啓発目的のゲーム活用例。</p>
                </a>
            </li>
            <li class="gd-ref-card animate-on-scroll">
                <a href="https://social.ja-kyosai.or.jp/town/hyoushikieawase.html" class="gd-ref-link" target="_blank" rel="noopener noreferrer">
                    <h3 class="gd-ref-title">標識絵合わせゲーム</h3>
                    <p class="gd-ref-org">JA共済</p>
                    <p class="gd-ref-desc">交通標識を題材にした絵合わせゲーム。保険・共済の認知向上と交通安全啓発を兼ねたコンテンツ。</p>
                </a>
            </li>
            <li class="gd-ref-card animate-on-scroll">
                <a href="https://shouene-kaden.net/smartquest/" class="gd-ref-link" target="_blank" rel="noopener noreferrer">
                    <h3 class="gd-ref-title">スマートクエスト</h3>
                    <p class="gd-ref-org">省エネ家電 スマートライフ</p>
                    <p class="gd-ref-desc">省エネをテーマにしたRPG風ゲーム。遊びながら省エネ知識が身につく教育・啓発コンテンツ。</p>
                </a>
            </li>
            <li class="gd-ref-card animate-on-scroll">
                <a href="https://www.sanko-seika.co.jp/cheese-almond-40th/" class="gd-ref-link" target="_blank" rel="noopener noreferrer">
                    <h3 class="gd-ref-title">チーズアーモンド 40周年</h3>
                    <p class="gd-ref-org">三幸製菓</p>
                    <p class="gd-ref-desc">商品の周年記念キャンペーンサイト。QR読み取りと連動したプロモーション型ゲーム。</p>
                </a>
            </li>
            <li class="gd-ref-card animate-on-scroll">
                <a href="https://kocha.benesse.ne.jp/kodomo/open/play/" class="gd-ref-link" target="_blank" rel="noopener noreferrer">
                    <h3 class="gd-ref-title">しまじろう あそび</h3>
                    <p class="gd-ref-org">ベネッセ</p>
                    <p class="gd-ref-desc">子供向け学習ゲーム。遊びを通じて学習への興味を引き出す教育系ブラウザゲーム。</p>
                </a>
            </li>
            <li class="gd-ref-card animate-on-scroll">
                <a href="https://balance.bz/works/?kind=%E3%82%B2%E3%83%BC%E3%83%A0" class="gd-ref-link" target="_blank" rel="noopener noreferrer">
                    <h3 class="gd-ref-title">ゲーム制作事例集</h3>
                    <p class="gd-ref-org">バランス株式会社</p>
                    <p class="gd-ref-desc">ゲーム制作会社の事例ページ。動画付きで実際のゲーム画面や演出を確認できる。</p>
                </a>
            </li>
            <li class="gd-ref-card animate-on-scroll">
                <a href="https://n2p.co.jp/blog/digital-promotion/ja_promotion/gamecampaign-casestudy/" class="gd-ref-link" target="_blank" rel="noopener noreferrer">
                    <h3 class="gd-ref-title">企業ゲームキャンペーン事例まとめ</h3>
                    <p class="gd-ref-org">N2P（まとめ記事）</p>
                    <p class="gd-ref-desc">企業のゲームキャンペーン事例をまとめた記事。業種ごとの活用パターンが網羅されている。</p>
                </a>
            </li>
        </ul>
        <p class="gd-ref-note animate-on-scroll" style="max-width: 720px; margin-left: auto; margin-right: auto;">※上記はすべて他社が制作・公開しているブラウザゲームです。当社の制作物ではありませんが、「ブラウザゲームでこういうことができる」というイメージの参考としてご覧ください。</p>
    </div>
</section>

<section class="section bg-gray">
    <div class="container page-content-narrow gd-sub-back-link-wrap">
        <a href="/business/game-dev" class="gd-sub-back-link">&larr; ブラウザゲーム制作に戻る</a>
    </div>
</section>

<?php require INCLUDES_PATH . '/game-dev-sub-style.php'; ?>

<style>
/* overview page specific styles */
.gd-ov-img-center { text-align: center; margin: var(--space-6) auto; max-width: 800px; }
.gd-ov-img-center img { width: 100%; height: auto; border-radius: var(--radius-lg); }
.gd-ov-genre-img { border-radius: 0 !important; }

/* recommended type cards */
.gd-type-grid { display: grid; gap: var(--space-5); grid-template-columns: 1fr; margin: var(--space-6) auto 0; max-width: 960px; }
@media (min-width: 768px) { .gd-type-grid { grid-template-columns: repeat(3, 1fr); } }
.gd-type-card { background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: var(--space-5); }
.gd-type-card--primary { border-color: var(--color-primary); box-shadow: var(--shadow-md); }
.gd-type-label { display: inline-block; font-family: var(--font-en); font-size: var(--text-xs); font-weight: var(--font-bold); text-transform: uppercase; letter-spacing: 0.08em; color: var(--color-gray-400); margin-bottom: var(--space-1); }
.gd-type-card--primary .gd-type-label { color: var(--color-primary); }
.gd-type-title { font-size: var(--text-base); font-weight: var(--font-semibold); margin-bottom: var(--space-1); }
.gd-type-price { font-size: var(--text-lg); font-weight: var(--font-bold); color: var(--color-gray-800); margin-bottom: var(--space-3); }
.gd-type-list { list-style: disc; padding-left: var(--space-5); margin: 0; }
.gd-type-list li { font-size: var(--text-sm); color: var(--color-gray-600); line-height: var(--leading-relaxed); margin-bottom: var(--space-1); }

/* genre cards */
.gd-genre-grid { list-style: none; padding: 0; margin: 0; display: grid; gap: var(--space-5); grid-template-columns: 1fr; max-width: 960px; margin-left: auto; margin-right: auto; }
@media (min-width: 640px) { .gd-genre-grid { grid-template-columns: repeat(2, 1fr); } }
@media (min-width: 960px) { .gd-genre-grid { grid-template-columns: repeat(3, 1fr); } }
.gd-genre-card { background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: var(--space-5); }
.gd-genre-title { font-size: var(--text-base); font-weight: var(--font-semibold); margin-bottom: var(--space-2); }
.gd-genre-desc { font-size: var(--text-sm); color: var(--color-gray-600); line-height: var(--leading-relaxed); margin: 0; }

/* global support block */
.gd-global-block { display: flex; flex-direction: column; gap: var(--space-6); max-width: 860px; margin: 0 auto; }
@media (min-width: 768px) { .gd-global-block { flex-direction: row; align-items: flex-start; } }
.gd-global-text { flex: 1; min-width: 0; }
.gd-global-list { list-style: disc; padding-left: var(--space-6); margin-bottom: var(--space-4); }
.gd-global-list li { margin-bottom: var(--space-2); line-height: var(--leading-relaxed); }
.gd-global-img { flex: 0 0 auto; text-align: center; }
@media (min-width: 768px) { .gd-global-img { flex: 0 0 320px; } }
.gd-global-img img { width: 100%; height: auto; border-radius: var(--radius-lg); }

/* CrazyGames gallery */
.gd-cg-gallery { display: grid; gap: var(--space-5); grid-template-columns: 1fr; max-width: 960px; margin: var(--space-6) auto 0; }
@media (min-width: 768px) { .gd-cg-gallery { grid-template-columns: repeat(3, 1fr); } }
.gd-cg-figure { margin: 0; }
.gd-cg-img { width: 100%; height: auto; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); }
.gd-cg-caption { font-size: var(--text-xs); color: var(--color-gray-500); margin-top: var(--space-2); text-align: center; }
</style>

<?php require INCLUDES_PATH . '/footer.php'; ?>
