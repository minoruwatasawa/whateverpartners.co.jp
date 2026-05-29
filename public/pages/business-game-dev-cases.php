<?php
/**
 * Whatever Partners Inc. - 制作事例（/business/game-dev/cases）
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
        <h1 class="page-title">制作事例</h1>
    </div>
</section>

<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">自社制作事例 — ゲームセンター TINY</h2>
        <p class="gd-sub-text animate-on-scroll" style="max-width: 720px;">当社では自社ゲーム事業「<a href="https://tiny.game/" target="_blank" rel="noopener noreferrer">ゲームセンター TINY</a>」を運営しており、企画・制作・運用のすべてを自社で行っています。以下は実際に公開中のゲームです。受託制作でも、この知見とクオリティを活かしたゲーム制作が可能です。</p>

        <div class="gd-cases-grid">
            <article class="gd-case-card animate-on-scroll">
                <div class="gd-case-screenshots">
                    <img src="<?= asset('images/business_game_dev/tiny/bubblen_escape_01.jpg') ?>" alt="バブルんエスケープ スクリーンショット1" width="360" height="640" loading="lazy" class="gd-case-ss">
                    <img src="<?= asset('images/business_game_dev/tiny/bubblen_escape_02.jpg') ?>" alt="バブルんエスケープ スクリーンショット2" width="360" height="640" loading="lazy" class="gd-case-ss">
                </div>
                <div class="gd-case-body">
                    <div class="gd-case-logo-wrap">
                        <img src="<?= asset('images/business_game_dev/tiny/bubblen_escape_logo.png') ?>" alt="バブルんエスケープ" class="gd-case-logo" loading="lazy">
                    </div>
                    <h3 class="gd-case-title">バブルんエスケープ</h3>
                    <span class="gd-case-genre">パズル / カジュアル</span>
                    <p class="gd-case-desc">カラフルなバブルに乗って脱出するカジュアルパズルゲーム。可愛いキャラクターを操作して障害物を避けながらゴールを目指します。シンプルな操作で誰でも楽しめる癒し系の脱出アクション。テーマ曲も制作しています。</p>
                    <a href="https://tiny.game/game/bubblen-escape/" class="gd-case-play-link" target="_blank" rel="noopener noreferrer">ゲームを見る &rarr;</a>
                </div>
            </article>

            <article class="gd-case-card animate-on-scroll">
                <div class="gd-case-screenshots">
                    <img src="<?= asset('images/business_game_dev/tiny/blind_route_01.jpg') ?>" alt="BLIND Route スクリーンショット1" width="360" height="640" loading="lazy" class="gd-case-ss">
                    <img src="<?= asset('images/business_game_dev/tiny/blind_route_02.jpg') ?>" alt="BLIND Route スクリーンショット2" width="360" height="640" loading="lazy" class="gd-case-ss">
                </div>
                <div class="gd-case-body">
                    <div class="gd-case-logo-wrap">
                        <img src="<?= asset('images/business_game_dev/tiny/blind_route_logo.png') ?>" alt="BLIND Route" class="gd-case-logo" loading="lazy">
                    </div>
                    <h3 class="gd-case-title">BLIND Route</h3>
                    <span class="gd-case-genre">パズル / 記憶</span>
                    <p class="gd-case-desc">見えない道を進む記憶と直感のパズルゲーム。一度通った道を覚え、暗闇の迷路から最短ルートを見つけ出すユニークな体験。テーマ曲も制作しています。</p>
                    <a href="https://tiny.game/game/blind-route/" class="gd-case-play-link" target="_blank" rel="noopener noreferrer">ゲームを見る &rarr;</a>
                </div>
            </article>

            <article class="gd-case-card animate-on-scroll">
                <div class="gd-case-screenshots">
                    <img src="<?= asset('images/business_game_dev/tiny/monster_in_the_dark_01.jpg') ?>" alt="MONSTER IN THE DARK スクリーンショット1" width="360" height="640" loading="lazy" class="gd-case-ss">
                    <img src="<?= asset('images/business_game_dev/tiny/monster_in_the_dark_02.jpg') ?>" alt="MONSTER IN THE DARK スクリーンショット2" width="360" height="640" loading="lazy" class="gd-case-ss">
                </div>
                <div class="gd-case-body">
                    <div class="gd-case-logo-wrap">
                        <img src="<?= asset('images/business_game_dev/tiny/monster_in_the_dark_logo.png') ?>" alt="MONSTER IN THE DARK" class="gd-case-logo" loading="lazy">
                    </div>
                    <h3 class="gd-case-title">MONSTER IN THE DARK</h3>
                    <span class="gd-case-genre">アドベンチャー / ホラー</span>
                    <p class="gd-case-desc">暗闇に潜むモンスターを懐中電灯の光で見つけ出すホラーアドベンチャー。闇に蠢く怪物たちを探し出すスリリングな体験。テーマ曲も制作しています。</p>
                    <a href="https://tiny.game/game/monster-in-the-dark/" class="gd-case-play-link" target="_blank" rel="noopener noreferrer">ゲームを見る &rarr;</a>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="section section-lg bg-gray">
    <div class="container page-content-narrow">
        <h2 class="section-title-sm animate-on-scroll">業種別の活用事例</h2>
        <p class="gd-sub-text animate-on-scroll">ブラウザゲームは業種を問わず幅広く活用されています。以下は業界で見られる代表的な活用パターンです。</p>
        <ul class="gd-sub-case-list animate-on-scroll">
            <li><strong>通信</strong> … 診断型キャンペーンで商品購入誘導・ROI達成</li>
            <li><strong>飲料</strong> … 人気ゲームコラボ・WebARパッケージでゲーム解放、販促</li>
            <li><strong>アパレル・小売</strong> … シューティングゲームのハイスコアでクーポン獲得</li>
            <li><strong>観光・地域</strong> … 特産品EC＋ゲームで滞在・回遊を促進</li>
            <li><strong>教育</strong> … 学習コンテンツのゲーム化で理解促進・興味喚起</li>
            <li><strong>外国人向け</strong> … CrazyGames等の世界プラットフォーム掲載で海外リーチ拡大</li>
        </ul>
    </div>
</section>

<section class="section section-lg">
    <div class="container page-content-narrow">
        <h2 class="section-title-sm animate-on-scroll">事例から見るポイント</h2>
        <p class="gd-sub-text animate-on-scroll">成功するブラウザゲーム活用に共通するのは、<strong>「課題 → ゲームの役割 → 成果」</strong>のストーリーが明確であることです。単に「ゲームを作る」のではなく、ビジネスのどの課題を解決し、どの指標を改善するかを事前に設計することが重要です。当社では企画段階からこの設計を一緒に行い、成果につながるゲーム制作をご支援します。</p>
    </div>
</section>

<section class="section bg-gray">
    <div class="container page-content-narrow gd-sub-back-link-wrap">
        <a href="/business/game-dev" class="gd-sub-back-link">&larr; ブラウザゲーム制作に戻る</a>
    </div>
</section>

<?php require INCLUDES_PATH . '/game-dev-sub-style.php'; ?>

<style>
/* cases page — TINY game cards */
.gd-cases-grid { display: flex; flex-direction: column; gap: var(--space-8); max-width: 860px; margin: var(--space-6) auto 0; }
.gd-case-card { display: flex; flex-direction: column; gap: var(--space-5); background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: var(--space-6); overflow: hidden; }
@media (min-width: 768px) { .gd-case-card { flex-direction: row; } }
.gd-case-screenshots { display: flex; gap: var(--space-3); flex-shrink: 0; }
@media (min-width: 768px) { .gd-case-screenshots { flex: 0 0 240px; } }
.gd-case-ss { width: 110px; height: auto; border-radius: var(--radius-md); box-shadow: var(--shadow-sm); object-fit: cover; }
@media (min-width: 768px) { .gd-case-ss { width: 110px; } }
.gd-case-body { flex: 1; min-width: 0; }
.gd-case-logo-wrap { margin-bottom: var(--space-3); }
.gd-case-logo { max-width: 180px; height: auto; }
.gd-case-title { font-size: var(--text-lg); font-weight: var(--font-semibold); margin: 0 0 var(--space-1); }
.gd-case-genre { display: inline-block; font-size: var(--text-xs); color: var(--color-gray-400); margin-bottom: var(--space-3); }
.gd-case-desc { font-size: var(--text-sm); color: var(--color-gray-600); line-height: var(--leading-relaxed); margin: 0 0 var(--space-3); }
.gd-case-play-link { display: inline-block; font-size: var(--text-sm); font-weight: var(--font-medium); color: var(--color-primary); text-decoration: none; }
.gd-case-play-link:hover { text-decoration: underline; }
</style>

<?php require INCLUDES_PATH . '/footer.php'; ?>
