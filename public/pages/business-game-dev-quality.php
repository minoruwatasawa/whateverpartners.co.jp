<?php
/**
 * Whatever Partners Inc. - 制作のこだわり（/business/game-dev/quality）
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
        <h1 class="page-title">制作のこだわり</h1>
    </div>
</section>

<!-- ブロック1：キャラクター・UI・世界観 -->
<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">キャラクター・UI・世界観</h2>
        <p class="gd-sub-text animate-on-scroll" style="max-width: 720px;">ビジネスやゲームの目的に合った魅力的なキャラクターを作成し、楽しくプレイできるUI・音楽・SEの設計から、ストーリー・ビジュアル・トーンを統一した世界観の構築まで、一貫したクオリティでゲーム体験を作り上げます。</p>
        <div class="gd-q-img-center animate-on-scroll">
            <img src="<?= asset('images/business_game_dev/gd_quality_creative.png') ?>" alt="キャラクター・UI・世界観のイメージ" width="800" height="400" loading="lazy">
        </div>
        <div class="gd-q-grid">
            <div class="gd-q-card animate-on-scroll">
                <h3 class="gd-q-card-title">目的に合ったオリジナルキャラクター</h3>
                <p class="gd-q-card-desc">ターゲットやブランドイメージに合わせた<strong>オリジナルキャラクター</strong>を制作します。親しみやすいデザインでユーザーの感情に訴えかけ、ゲーム体験を通じて企業やサービスへの好感度を高めます。キャラクターが持つ「個性」が、他のキャンペーンとの差別化ポイントになります。</p>
            </div>
            <div class="gd-q-card animate-on-scroll">
                <h3 class="gd-q-card-title">UI・音楽・SEの設計</h3>
                <p class="gd-q-card-desc">直感的に操作できる<strong>UIデザイン</strong>と、ゲーム体験を盛り上げるBGM・効果音を制作します。視覚だけでなく聴覚にも訴えるリッチな演出で、Webサイトとは一線を画す没入感を実現。テーマ曲の制作にも対応しています。</p>
            </div>
            <div class="gd-q-card animate-on-scroll">
                <h3 class="gd-q-card-title">統一された世界観の構築</h3>
                <p class="gd-q-card-desc">ストーリー・ビジュアル・トーンを統一した<strong>魅力的な世界観</strong>を構築します。小規模なゲームでも短時間で達成感を感じられる体験設計を行い、「もう一度プレイしたい」と思わせる仕掛けを組み込みます。</p>
            </div>
        </div>
    </div>
</section>

<!-- ブロック2：ビジネス目的を達成するための設計 -->
<section class="section section-lg bg-gray">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">ビジネス目的を達成するための設計</h2>
        <p class="gd-sub-text animate-on-scroll" style="max-width: 720px;">ゲームは楽しいだけでは不十分です。集客・CV・リテンションなど、ビジネス目的を達成するための設計をゲーム体験の中に自然に組み込みます。</p>
        <div class="gd-q-img-center animate-on-scroll">
            <img src="<?= asset('images/business_game_dev/gd_quality_business.png') ?>" alt="ビジネス目的達成の設計イメージ" width="800" height="400" loading="lazy">
        </div>
        <div class="gd-q-grid">
            <div class="gd-q-card animate-on-scroll">
                <h3 class="gd-q-card-title">CVへの自然な誘導設計</h3>
                <p class="gd-q-card-desc">ゲームプレイの流れの中に、問い合わせ・購入・シェアなど<strong>ビジネスゴールへの導線</strong>を自然に設計します。押しつけがましくない動線で、ユーザー体験を損なわずにコンバージョンへつなげます。</p>
            </div>
            <div class="gd-q-card animate-on-scroll">
                <h3 class="gd-q-card-title">オリジナル仕様の「フック」</h3>
                <p class="gd-q-card-desc">テンプレートにはない<strong>独自の仕掛け（フック）</strong>を設計し、他では味わえない特別感を演出します。「このゲームだけの体験」がユーザーの記憶に残り、ブランドの印象を強化します。</p>
            </div>
            <div class="gd-q-card animate-on-scroll">
                <h3 class="gd-q-card-title">外国人・英語向け対応</h3>
                <p class="gd-q-card-desc">全編英語・英語音声読み上げ・英語チュートリアルに対応し、<strong>海外・インバウンド向け</strong>にそのまま利用可能なゲームを制作します。<a href="/business/game-dev/overview#global" class="gd-q-link">詳しくはこちら</a></p>
            </div>
        </div>
    </div>
</section>

<!-- ブロック3：AI利用についての考え方 -->
<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">AI利用についての考え方</h2>
        <p class="gd-sub-text animate-on-scroll" style="max-width: 720px;">ゲーム制作にAIを活用する場合は、トラブルを未然に防ぐために権利・品質の両面から万全の体制を整えています。安心してご依頼いただけるよう、以下の方針を徹底しています。</p>
        <div class="gd-q-ai-grid">
            <div class="gd-q-ai-item animate-on-scroll">
                <div class="gd-q-ai-icon">
                    <img src="<?= asset('icons/001-document.svg') ?>" alt="" width="40" height="40">
                </div>
                <div class="gd-q-ai-body">
                    <h3 class="gd-q-ai-title">AIツール利用時の資料添付</h3>
                    <p class="gd-q-ai-desc">AIで素材を作成した場合、納品時に<strong>利用したAIツール・公開の権利・所有権</strong>などを説明した資料を添付します。どのツールでどのように生成したかを明示し、お客様が安心して素材を利用できる状態でお渡しします。</p>
                </div>
            </div>
            <div class="gd-q-ai-item animate-on-scroll">
                <div class="gd-q-ai-icon">
                    <img src="<?= asset('icons/023-shield.svg') ?>" alt="" width="40" height="40">
                </div>
                <div class="gd-q-ai-body">
                    <h3 class="gd-q-ai-title">版権のある素材のみを参照元に使用</h3>
                    <p class="gd-q-ai-desc">AI素材を作成する際は、<strong>参照元として版権が確認できる素材のみ</strong>を使用します。出所の不明な素材や権利関係の曖昧な素材は参照しない方針で、著作権トラブルのリスクを最小限に抑えます。</p>
                </div>
            </div>
            <div class="gd-q-ai-item animate-on-scroll">
                <div class="gd-q-ai-icon">
                    <img src="<?= asset('icons/023-handshake.svg') ?>" alt="" width="40" height="40">
                </div>
                <div class="gd-q-ai-body">
                    <h3 class="gd-q-ai-title">納品時の両者チェック</h3>
                    <p class="gd-q-ai-desc">偶然の重複・類似を防ぐため、納品時に<strong>発注者・制作者の両者で素材のチェック</strong>を行います。AI生成物と既存著作物との重複や類似がないかを双方で確認し、リスクを排除した状態で納品します。</p>
                </div>
            </div>
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
/* quality page */
.gd-q-img-center { text-align: center; margin: var(--space-4) auto var(--space-6); max-width: 640px; }
.gd-q-img-center img { width: 100%; height: auto; border-radius: var(--radius-lg); }

.gd-q-grid { display: grid; grid-template-columns: 1fr; gap: var(--space-5); max-width: 960px; margin: 0 auto; }
@media (min-width: 768px) { .gd-q-grid { grid-template-columns: repeat(3, 1fr); } }

.gd-q-card { background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: var(--space-5); }
.bg-gray .gd-q-card { background: var(--color-white); }
.gd-q-card-title { font-size: var(--text-base); font-weight: var(--font-semibold); margin: 0 0 var(--space-2); }
.gd-q-card-desc { font-size: var(--text-sm); color: var(--color-gray-600); line-height: var(--leading-relaxed); margin: 0; }
.gd-q-link { color: var(--color-primary); text-decoration: underline; }

/* AI section — icon + text rows */
.gd-q-ai-grid { display: flex; flex-direction: column; gap: var(--space-5); max-width: 760px; margin: var(--space-6) auto 0; }
.gd-q-ai-item { display: flex; gap: var(--space-4); align-items: flex-start; background: var(--color-gray-50); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); padding: var(--space-5); }
.gd-q-ai-icon { flex-shrink: 0; width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; background: var(--color-white); border-radius: var(--radius-md); box-shadow: var(--shadow-sm); }
.gd-q-ai-icon img { width: 32px; height: 32px; }
.gd-q-ai-body { flex: 1; }
.gd-q-ai-title { font-size: var(--text-base); font-weight: var(--font-semibold); margin: 0 0 var(--space-1); }
.gd-q-ai-desc { font-size: var(--text-sm); color: var(--color-gray-600); line-height: var(--leading-relaxed); margin: 0; }
</style>

<?php require INCLUDES_PATH . '/footer.php'; ?>
