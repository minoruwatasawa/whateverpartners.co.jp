<?php
/**
 * Whatever Partners Inc. - インターネット集客（/business/marketing）
 * cursor_ai_web.md の C. 集客 仕様に基づく（web・operation と同構成）
 */

$pageMeta = getPageMetaOptions($pageKey);
$pageTitle = $pageMeta['pageTitle'];
$metaOptions = $pageMeta['metaOptions'];
$bodyClass = 'page-business-marketing';

require INCLUDES_PATH . '/header.php';
?>

<section class="page-header page-header--with-video page-header--overlay-dark">
    <div class="page-header-video-wrap" aria-hidden="true">
        <video class="page-header-video" src="<?= asset('images/marketing_low.mp4') ?>" muted playsinline loop autoplay></video>
    </div>
    <div class="page-header-overlay" aria-hidden="true"></div>
    <div class="container">
        <span class="page-header-icon" aria-hidden="true"><img src="<?= asset('icons/028-marketing.svg') ?>" alt=""></span>
        <span class="page-title-en">Business C</span>
        <h1 class="page-title">インターネット集客</h1>
    </div>
</section>

<section class="section section-lg">
    <div class="container business-web-lead-wrap">
        <p class="lead business-web-lead animate-on-scroll">
            当ページでは、WebサイトやWebサービスを通じた集客（SEO・コンテンツ・広告・導線改善）について、当社のスタンスと提供内容をまとめています。
        </p>
        <p class="lead business-web-lead animate-on-scroll">
            強引なSEOは行いません。Googleの考え方に沿った解析・コンテンツ改善・広告・導線設計をご提案し、短期・中期で「できること」と「期待値」を最初にすり合わせたうえで、無理のない範囲で成果を目指します。
        </p>
    </div>
</section>

<section class="section bg-gray">
    <div class="container page-content-narrow">
        <h2 class="section-title-sm animate-on-scroll">施策カテゴリ</h2>
        <p class="section-desc-mb animate-on-scroll">解析からコンテンツ・広告・導線まで、目的に合わせて必要な範囲でご提案します。</p>
        <ul class="business-web-types animate-on-scroll">
            <li><strong>解析・改善</strong> … アクセス解析やヒートマップなどから課題を洗い出し、改善案を提案します。</li>
            <li><strong>コンテンツ</strong> … 記事・ページの企画・構成・キーワード設計から執筆支援まで。</li>
            <li><strong>広告</strong> … 検索連動型・ディスプレイなど、目的に合わせた運用提案と運用代行。</li>
            <li><strong>導線改善</strong> … ランディングから問い合わせ・成約までの流れの設計・改善。</li>
        </ul>
    </div>
</section>

<section class="section section-lg bg-gray">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">得意とするパターン</h2>
        <ul class="business-pattern-grid">
            <li class="business-pattern-card animate-on-scroll animate-delay-1">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/020-growth.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">検索順位・オーガニック流入を改善したい</h3>
                <p class="business-pattern-desc">小手先のテクニックではなく、サイトとコンテンツの質を見直し、検索エンジンのガイドラインに沿った改善を提案します。</p>
            </li>
            <li class="business-pattern-card animate-on-scroll animate-delay-1">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/015-data analytics.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">解析に基づく改善を進めたい</h3>
                <p class="business-pattern-desc">アクセス解析・ヒートマップ・コンバージョン分析から課題を抽出し、優先度をつけた改善施策をご提案します。</p>
            </li>
            <li class="business-pattern-card animate-on-scroll animate-delay-2">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/013-digital content.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">コンテンツ（記事・ページ）の支援が欲しい</h3>
                <p class="business-pattern-desc">キーワード設計・構成案・執筆まで、検索ニーズとビジネス目標に合わせたコンテンツ設計をサポートします。</p>
            </li>
            <li class="business-pattern-card animate-on-scroll animate-delay-2">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/028-marketing.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">広告運用を任せたい</h3>
                <p class="business-pattern-desc">検索連動型・ディスプレイ・リターゲティングなど、予算と目的に合わせた運用設計・運用代行に対応します。</p>
            </li>
            <li class="business-pattern-card animate-on-scroll animate-delay-3">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/026-flow.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">導線を改善して成約・問い合わせを増やしたい</h3>
                <p class="business-pattern-desc">LPから申込・問い合わせまでの流れを見直し、離脱の要因整理と改善案をご提案します。</p>
            </li>
            <li class="business-pattern-card animate-on-scroll animate-delay-3">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/042-target.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">期待値のすり合わせから進めたい</h3>
                <p class="business-pattern-desc">集客施策は「すぐ効く」「確実に数値化できる」とは限りません。短期・中期でできることと目指すことを最初に共有します。</p>
            </li>
        </ul>
    </div>
</section>

<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">集客事例</h2>
        <ul class="business-case-grid">
            <li class="business-case-card animate-on-scroll">
                <span class="business-case-card-bg" style="background-image: url('<?= asset('icons/015-data analytics.svg') ?>');" aria-hidden="true"></span>
                <h3 class="business-case-title">サイト分析から流入増・成果改善を実現</h3>
                <p class="business-case-desc">現状のアクセス・導線・コンバージョンを分析し、課題をリストアップ。重要な項目から改善を実施し、オーガニック流入と成果の向上を支援しました。</p>
            </li>
            <li class="business-case-card animate-on-scroll">
                <span class="business-case-card-bg" style="background-image: url('<?= asset('icons/013-digital content.svg') ?>');" aria-hidden="true"></span>
                <h3 class="business-case-title">記事設計・定期投稿で検索流入を拡大</h3>
                <p class="business-case-desc">上位獲得しているキーワードの分析に基づき記事設計を行い、定期投稿によるコンテンツ拡充で検索流入を増やした事例です。</p>
            </li>
            <li class="business-case-card animate-on-scroll">
                <span class="business-case-card-bg" style="background-image: url('<?= asset('icons/028-marketing.svg') ?>');" aria-hidden="true"></span>
                <h3 class="business-case-title">リスティング広告の運用でリード獲得</h3>
                <p class="business-case-desc">検索連動型広告のキーワード・入札・ランディング設計を見直し、コストと成果のバランスをとりながらリード獲得を増加させました。</p>
            </li>
            <li class="business-case-card animate-on-scroll">
                <span class="business-case-card-bg" style="background-image: url('<?= asset('icons/026-flow.svg') ?>');" aria-hidden="true"></span>
                <h3 class="business-case-title">LP・導線改善で申込率を向上</h3>
                <p class="business-case-desc">ランディングページと申込フローの分析・改善により、離脱を減らし申込率の向上を実現した事例です。</p>
            </li>
        </ul>
    </div>
</section>

<section class="section section-lg bg-gray">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">進め方</h2>
        <div class="business-process-flow animate-on-scroll">
            <div class="business-process-step"><span class="business-process-num">01</span><span class="business-process-label">初回相談</span><p class="business-process-desc">現状のサイト・集客・課題・ご希望をうかがいます。</p></div>
            <span class="business-process-arrow" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></span>
            <div class="business-process-step"><span class="business-process-num">02</span><span class="business-process-label">分析・課題整理</span><p class="business-process-desc">解析データやヒートマップなどから課題を整理します。</p></div>
            <span class="business-process-arrow" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></span>
            <div class="business-process-step"><span class="business-process-num">03</span><span class="business-process-label">施策提案</span><p class="business-process-desc">優先度とスコープを決め、実施する施策と期待値をご提案します。</p></div>
            <span class="business-process-arrow" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></span>
            <div class="business-process-step"><span class="business-process-num">04</span><span class="business-process-label">実施</span><p class="business-process-desc">合意した範囲でコンテンツ・広告・導線改善などを実施します。</p></div>
            <span class="business-process-arrow" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></span>
            <div class="business-process-step"><span class="business-process-num">05</span><span class="business-process-label">見直し</span><p class="business-process-desc">効果測定と振り返りを行い、次の施策や期待値の見直しをご提案します。</p></div>
        </div>
    </div>
</section>

<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">よくある質問</h2>
        <dl class="business-faq-dl animate-on-scroll">
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> 費用の目安はどの程度ですか？</dt>
                <dd><span class="faq-label faq-a">A</span> 施策の範囲・頻度により異なります。初回相談のうえで、おおよその費用と期間をご提示します。</dd>
            </div>
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> 短期で結果は出ますか？</dt>
                <dd><span class="faq-label faq-a">A</span> 施策によって異なります。広告は比較的短期で効果が見えやすく、SEO・コンテンツは中期で成果を目指すことが多いです。最初に期待値のすり合わせをします。</dd>
            </div>
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> 被リンク購入や黒帽SEOは行いますか？</dt>
                <dd><span class="faq-label faq-a">A</span> いいえ。検索エンジンのガイドラインに沿った手法のみでご提案します。リスクの高い手法はお勧めしません。</dd>
            </div>
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> Webサイト制作と一緒に依頼できますか？</dt>
                <dd><span class="faq-label faq-a">A</span> はい。サイト制作と集客施策をセットでご依頼いただけます。新規公開後の運用・集客まで一貫してサポートします。</dd>
            </div>
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> 解析や広告だけなど、一部だけ依頼できますか？</dt>
                <dd><span class="faq-label faq-a">A</span> はい。解析・改善提案のみ、広告運用のみ、コンテンツ制作のみなど、必要な範囲に絞ってご依頼いただけます。</dd>
            </div>
        </dl>
    </div>
</section>

<style>
/* /business/marketing - web・operation と同種のクラス・見た目 */
.page-header--with-video { position: relative; overflow: hidden; }
.page-header--with-video .page-header-video-wrap { position: absolute; inset: 0; z-index: 0; }
.page-header--with-video .page-header-video { width: 100%; height: 100%; object-fit: cover; }
.page-header--with-video .page-header-overlay { position: absolute; inset: 0; z-index: 1; }
.page-header--overlay-dark .page-header-overlay { background: linear-gradient(180deg, rgba(15, 23, 42, 0.55) 0%, rgba(15, 23, 42, 0.72) 100%); }
.page-header--with-video .container { position: relative; z-index: 2; }
.page-header-icon { display: block; margin-bottom: var(--space-4); text-align: center; }
.page-header-icon img { display: block; width: 48px; height: 48px; margin-left: auto; margin-right: auto; filter: brightness(0) invert(1); }
.business-web-lead-wrap { max-width: 720px; margin-left: auto; margin-right: auto; }
.lead.business-web-lead { font-size: var(--text-base); line-height: var(--leading-relaxed); color: var(--color-gray-700); margin-bottom: var(--space-4); }
.lead.business-web-lead:last-of-type { margin-bottom: 0; }
.page-content-narrow { max-width: 720px; margin-left: auto; margin-right: auto; }
.section-desc-mb { margin-bottom: var(--space-4); color: var(--color-gray-600); line-height: var(--leading-relaxed); }
.business-web-types { list-style: disc; padding-left: var(--space-6); }
.business-web-types li { margin-bottom: var(--space-2); line-height: var(--leading-relaxed); }

/* 得意とするパターン */
.business-pattern-grid { list-style: none; padding: 0; margin: 0; display: grid; gap: var(--space-6); grid-template-columns: 1fr; }
@media (min-width: 640px) { .business-pattern-grid { grid-template-columns: repeat(2, 1fr); } }
@media (min-width: 1024px) { .business-pattern-grid { grid-template-columns: repeat(3, 1fr); } }
.business-pattern-card { background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: var(--space-5); transition: box-shadow var(--transition-base), border-color var(--transition-base), transform var(--transition-base); }
.business-pattern-card:hover { border-color: var(--color-gray-300); box-shadow: var(--shadow-md); transform: translateY(-2px); }
.business-pattern-icon { display: block; margin-bottom: var(--space-3); }
.business-pattern-icon img { width: 40px; height: 40px; }
.business-pattern-title { font-size: var(--text-base); font-weight: var(--font-semibold); margin-bottom: var(--space-2); }
.business-pattern-desc { font-size: var(--text-sm); color: var(--color-gray-600); line-height: var(--leading-relaxed); margin: 0; }

/* 集客事例 */
.business-case-grid { list-style: none; padding: 0; margin: 0; display: grid; gap: var(--space-6); grid-template-columns: 1fr; }
@media (min-width: 640px) { .business-case-grid { grid-template-columns: repeat(2, 1fr); } }
.business-case-card { position: relative; overflow: hidden; background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: var(--space-5); min-height: 180px; }
.business-case-card-bg { position: absolute; inset: 0; background-repeat: no-repeat; background-position: calc(100% - var(--space-5)) calc(100% - var(--space-5)); background-size: 120px; opacity: 0.07; pointer-events: none; }
.business-case-title { position: relative; z-index: 1; font-size: var(--text-base); font-weight: var(--font-semibold); margin-bottom: var(--space-2); }
.business-case-desc { position: relative; z-index: 1; font-size: var(--text-sm); color: var(--color-gray-600); line-height: var(--leading-relaxed); margin: 0; }

/* 進め方 */
.business-process-flow { display: flex; flex-wrap: nowrap; align-items: stretch; overflow-x: auto; gap: 0; margin-left: auto; margin-right: auto; max-width: 100%; }
.business-process-step { flex: 0 0 180px; min-width: 180px; display: flex; flex-direction: column; padding: var(--space-5); background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); }
@media (min-width: 640px) { .business-process-step { flex: 0 0 200px; min-width: 200px; padding: var(--space-6); } }
.business-process-num { font-family: var(--font-en); font-size: var(--text-sm); font-weight: var(--font-semibold); color: var(--color-primary); margin-bottom: var(--space-2); }
.business-process-label { font-size: var(--text-base); font-weight: var(--font-semibold); margin-bottom: var(--space-2); }
.business-process-step .business-process-desc { font-size: var(--text-sm); color: var(--color-gray-600); line-height: var(--leading-relaxed); margin: 0; flex: 1; }
.business-process-arrow { flex: 0 0 32px; display: flex; align-items: center; justify-content: center; color: var(--color-gray-400); }

/* よくある質問 */
.business-faq-dl { max-width: 720px; margin-left: auto; margin-right: auto; }
.business-faq-item { background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: var(--space-4); margin-bottom: var(--space-4); }
.business-faq-item dt { display: flex; align-items: flex-start; gap: var(--space-3); font-weight: var(--font-semibold); margin: 0 0 var(--space-2); }
.business-faq-item dd { display: flex; align-items: flex-start; gap: var(--space-3); margin: 0; color: var(--color-gray-600); line-height: var(--leading-relaxed); }
.faq-label { flex-shrink: 0; width: 28px; height: 28px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; font-size: var(--text-sm); font-weight: var(--font-bold); }
.faq-q { background: var(--color-primary); color: var(--color-white); }
.faq-a { background: var(--color-gray-700); color: var(--color-white); }
</style>

<?php require INCLUDES_PATH . '/footer.php'; ?>
