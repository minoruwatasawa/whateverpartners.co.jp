<?php
/**
 * Whatever Partners Inc. - Webサイト運営代行（/business/operation）
 * cursor_ai_web.md の B. 運営代行 仕様に基づく（web と同構成）
 */

$pageMeta = getPageMetaOptions($pageKey);
$pageTitle = $pageMeta['pageTitle'];
$metaOptions = $pageMeta['metaOptions'];
$bodyClass = 'page-business-operation';

require INCLUDES_PATH . '/header.php';
?>

<section class="page-header page-header--with-video page-header--overlay-dark">
    <div class="page-header-video-wrap" aria-hidden="true">
        <video class="page-header-video" src="<?= asset('images/operation_low_output.mp4') ?>" muted playsinline loop autoplay></video>
    </div>
    <div class="page-header-overlay" aria-hidden="true"></div>
    <div class="container">
        <span class="page-header-icon" aria-hidden="true"><img src="<?= asset('icons/016-developer.svg') ?>" alt=""></span>
        <span class="page-title-en">Business B</span>
        <h1 class="page-title">Webサイト運営代行</h1>
    </div>
</section>

<section class="section section-lg">
    <div class="container business-web-lead-wrap">
        <p class="lead business-web-lead animate-on-scroll">
            当ページでは、Webサイトの日々の更新や記事作成、LP・フォーム対応、障害の一次対応、バックアップなど、運用まわりを代行するサービスについてまとめています。
        </p>
        <p class="lead business-web-lead animate-on-scroll">
            更新作業・記事作成・LP制作・フォーム対応・障害一次対応・バックアップまで、マニュアル化と確実な実施で、社内で手が回らない時期も更新が止まらない体制を整えます。
        </p>
    </div>
</section>

<section class="section bg-gray">
    <div class="container page-content-narrow">
        <h2 class="section-title-sm animate-on-scroll">提供内容</h2>
        <ul class="business-web-types animate-on-scroll">
            <li>コンテンツの更新（テキスト・画像・PDFなど）</li>
            <li>記事・ブログの企画・執筆・公開</li>
            <li>LP（ランディングページ）の制作・更新</li>
            <li>お問い合わせフォームの確認・対応</li>
            <li>障害時の一次対応・復旧の連絡</li>
            <li>バックアップ・セキュリティ対策の運用</li>
        </ul>
    </div>
</section>

<section class="section section-lg bg-gray">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">得意とするパターン</h2>
        <p class="business-pattern-intro animate-on-scroll">社内にWeb担当がいない、担当はいるがサポートが欲しい、制作会社はいるが一部だけ依頼したいなど、ご状況に合わせてご提案します。</p>
        <ul class="business-pattern-grid">
            <li class="business-pattern-card animate-on-scroll animate-delay-1">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/012-building.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">社内にWebに詳しい担当がおらず、全て運用を任せたい</h3>
                <p class="business-pattern-desc">現在のWebサイトの状況から把握し、更新フローや役割分担を整理したうえで、運用全体をお任せいただける形でご支援します。</p>
            </li>
            <li class="business-pattern-card animate-on-scroll animate-delay-1">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/041-support.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">担当はいるが知識・リソースが不足、サポートが欲しい</h3>
                <p class="business-pattern-desc">社内のWebサイト担当者をサポートする形で、記事作成・更新・障害対応などを補完します。負荷が高い部分から段階的にお引き受けできます。</p>
            </li>
            <li class="business-pattern-card animate-on-scroll animate-delay-2">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/033-scissors.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">制作会社はいるが、不足している業務範囲だけ依頼したい</h3>
                <p class="business-pattern-desc">デザインのみ、システムのみ、更新のみなど、不足している業務範囲に絞って対応します。既存の制作会社様との協業も可能です。</p>
            </li>
            <li class="business-pattern-card animate-on-scroll animate-delay-2">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/013-digital content.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">新しいコンテンツを追加したいが、リソースが足りない</h3>
                <p class="business-pattern-desc">新規ページやブログ記事の追加など、その部分だけの制作・更新に対応します。設計から公開まで一括でお任せいただけます。</p>
            </li>
            <li class="business-pattern-card animate-on-scroll animate-delay-3">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/020-growth.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">アクセスを伸ばしたい。施策からコンテンツ制作までサポートしてほしい</h3>
                <p class="business-pattern-desc">単純な被リンク施策や指示だけのSEOではなく、解析・改善施策の具体化からコンテンツ制作まで一貫してサポートします。</p>
            </li>
        </ul>
    </div>
</section>

<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">運営事例</h2>
        <ul class="business-case-grid">
            <li class="business-case-card animate-on-scroll">
                <span class="business-case-card-bg" style="background-image: url('<?= asset('icons/004-bar chart.svg') ?>');" aria-hidden="true"></span>
                <h3 class="business-case-title">分析から施策リストアップで3ヶ月後からアクセス増・売上アップを実現</h3>
                <p class="business-case-desc">Webサイト（Webサービス）のアクセスアップ・売上アップの要望に対し、現状分析から修正すべき施策をリストアップし、重要な項目から対応。3ヶ月後からアクセス増加を実現しました。</p>
            </li>
            <li class="business-case-card animate-on-scroll">
                <span class="business-case-card-bg" style="background-image: url('<?= asset('icons/007-books.svg') ?>');" aria-hidden="true"></span>
                <h3 class="business-case-title">担当退職後、構造の可視化とマニュアルで安全な運用を継続</h3>
                <p class="business-case-desc">Webサイト担当者退職に伴い、サイト構造を把握して可視化。更新フローとマニュアルを作成し、更新作業を代行。安全に運用を継続できる体制にしました。</p>
            </li>
            <li class="business-case-card animate-on-scroll">
                <span class="business-case-card-bg" style="background-image: url('<?= asset('icons/041-support.svg') ?>');" aria-hidden="true"></span>
                <h3 class="business-case-title">社内担当と協力し、SEO視点のコンテンツでサイト改善</h3>
                <p class="business-case-desc">社内にWeb担当はいるが経験・知識のサポートが必要なケース。コンテンツの業務内容はクライアント様から、SEO視点での設計・追加は当社から提供し、協力しながらサイトを改善しました。</p>
            </li>
            <li class="business-case-card animate-on-scroll">
                <span class="business-case-card-bg" style="background-image: url('<?= asset('icons/013-digital content.svg') ?>');" aria-hidden="true"></span>
                <h3 class="business-case-title">上位キーワード分析に基づく記事設計で毎月4件投稿</h3>
                <p class="business-case-desc">アクセスアップのため記事コンテンツを作成。現サイトで上位獲得しているキーワードの分析から記事設計を行い、毎月4件程度の記事を投稿する運用を実施しました。</p>
            </li>
        </ul>
    </div>
</section>

<section class="section section-lg bg-gray">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">進め方</h2>
        <div class="business-process-flow animate-on-scroll">
            <div class="business-process-step"><span class="business-process-num">01</span><span class="business-process-label">初回相談</span><p class="business-process-desc">現状の運用・課題・ご希望の範囲をうかがいます。</p></div>
            <span class="business-process-arrow" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></span>
            <div class="business-process-step"><span class="business-process-num">02</span><span class="business-process-label">範囲・頻度</span><p class="business-process-desc">更新対象・頻度・納品形式などをすり合わせます。</p></div>
            <span class="business-process-arrow" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></span>
            <div class="business-process-step"><span class="business-process-num">03</span><span class="business-process-label">ルール整備</span><p class="business-process-desc">マニュアル・連絡フロー・権限などを整えます。</p></div>
            <span class="business-process-arrow" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></span>
            <div class="business-process-step"><span class="business-process-num">04</span><span class="business-process-label">定期実施</span><p class="business-process-desc">合意した範囲で更新・記事・対応を定期実施します。</p></div>
            <span class="business-process-arrow" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></span>
            <div class="business-process-step"><span class="business-process-num">05</span><span class="business-process-label">見直し</span><p class="business-process-desc">運用状況を共有し、範囲や頻度の見直しをご提案します。</p></div>
        </div>
    </div>
</section>

<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">よくある質問</h2>
        <dl class="business-faq-dl animate-on-scroll">
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> 運用費用はどの程度になりますか？</dt>
                <dd><span class="faq-label faq-a">A</span> 作業量に合わせてご提案させていただきますが、月10万円程度からのご提案になることが多いです。</dd>
            </div>
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> 継続契約が必要ですか？</dt>
                <dd><span class="faq-label faq-a">A</span> 契約はひと月単位としているので、いつでも終了可能です。3ヶ月30万円程度でいったん打ち切りにして状況を見てから再契約なども可能です。</dd>
            </div>
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> サーバーや管理機能の情報が無いですが相談できますか？</dt>
                <dd><span class="faq-label faq-a">A</span> 場合によりますが、その情報を突き止めるところからサポートも可能です。</dd>
            </div>
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> ネットミーティングを通して情報交換可能ですか？</dt>
                <dd><span class="faq-label faq-a">A</span> 担当者を配置しますので、いつでも電話・ネットミーティングは可能です。たいていの場合、月に1回の定例MTGでお互いの状況確認をして、施策を確実に進めていくスタイルにしています。</dd>
            </div>
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> すでにWebサイト管理会社（インフラ・システム担当など）がいますが、運用だけ依頼できますか？</dt>
                <dd><span class="faq-label faq-a">A</span> 他社様と協業しての運用も可能です。その場合、サーバー上の管理スペースやgitでのソースコード管理など、必要な準備を整えてからの運用となります。</dd>
            </div>
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> アクセスアップ・売上アップをしたいのですが、成果が上がる前提で契約可能ですか？</dt>
                <dd><span class="faq-label faq-a">A</span> 基本的な契約は作業ベースとなります。ご納得いただくために最初に改善対策をご提案し、必要な作業を合意して進めます。成果報酬をご希望の際は、契約1件あたりの報酬を設定する成果報酬契約も可能な場合があります。</dd>
            </div>
        </dl>
    </div>
</section>

<style>
/* /business/operation - web と同種のクラス・見た目 */
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
.business-web-types { list-style: disc; padding-left: var(--space-6); }
.business-web-types li { margin-bottom: var(--space-2); line-height: var(--leading-relaxed); }
.business-pattern-intro { max-width: 720px; margin-bottom: var(--space-6); color: var(--color-gray-600); line-height: var(--leading-relaxed); }

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

/* 運営事例 */
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
