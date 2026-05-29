<?php
/**
 * Whatever Partners Inc. - Webサイト制作（/business/web）
 * ビジネスを成功させるためのWebサイト。分析と実装で成果にコミット。
 */

$pageMeta = getPageMetaOptions($pageKey);
$pageTitle = $pageMeta['pageTitle'];
$metaOptions = $pageMeta['metaOptions'];
$bodyClass = 'page-business-web';

require INCLUDES_PATH . '/header.php';
?>

<section class="page-header page-header--with-video">
    <div class="page-header-video-wrap" aria-hidden="true">
        <video class="page-header-video" src="<?= asset('images/web_low.mp4') ?>" muted playsinline loop autoplay></video>
    </div>
    <div class="page-header-overlay" aria-hidden="true"></div>
    <div class="container">
        <span class="page-header-icon" aria-hidden="true"><img src="<?= asset('icons/043-web development.svg') ?>" alt=""></span>
        <span class="page-title-en">Business A</span>
        <h1 class="page-title">Webサイト制作</h1>
    </div>
</section>

<section class="section section-lg">
    <div class="container business-web-lead-wrap">
        <p class="lead business-web-lead-sub animate-on-scroll">
            分析と実装で、ビジネスを支えるWebを。
        </p>
        <div class="lead business-web-lead animate-on-scroll">
            <p>Webサイトは手段であり、目的ではありません。私たちは<strong>ビジネスを成功させるためのWebサイト</strong>という位置付けで制作・改善に取り組んでいます。</p>
            <p>強みは<strong>分析をしっかり行うこと</strong>。発注者様とデータを共有し、同じ指標を元に成功に向けて施策を打ちます。分析・企画だけでなく<strong>実装まで一貫して対応</strong>できる点も特徴です。予算に合わせた柔軟な制作アイデアをご提案し、やるべき全体像を見据えながら、いまできることから進めていきます。</p>
        </div>
    </div>
</section>

<section class="section bg-gray">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">制作タイプ・料金の目安</h2>
        <p class="section-desc business-web-types-intro animate-on-scroll">制作の種類と、ご依頼内容に応じた金額の目安です。規模・スコープにより変動します。初回ヒアリングのうえで、おおよその範囲をご提示します。</p>
        <ul class="business-web-types-grid animate-on-scroll">
            <li class="business-web-type-card">
                <span class="business-web-type-icon" aria-hidden="true"><img src="<?= asset('icons/042-website.svg') ?>" alt=""></span>
                <h3 class="business-web-type-title">Webサイトリニューアル</h3>
                <table class="business-web-type-table">
                    <tbody>
                        <tr><th scope="row">部分的な制作・改善</th><td>30万円程度</td></tr>
                        <tr><th scope="row">小規模サイト構築・リニューアル</th><td>100万円程度</td></tr>
                        <tr><th scope="row">中規模サイト構築・リニューアル</th><td>200〜400万円程度</td></tr>
                        <tr><th scope="row">大規模サイト構築・リニューアル</th><td>500〜1,000万円程度</td></tr>
                    </tbody>
                </table>
            </li>
            <li class="business-web-type-card">
                <span class="business-web-type-icon" aria-hidden="true"><img src="<?= asset('icons/043-search.svg') ?>" alt=""></span>
                <h3 class="business-web-type-title">基本SEO対策</h3>
                <table class="business-web-type-table">
                    <tbody>
                        <tr><th scope="row">分析・企画・改善（3ヶ月程度）</th><td>30〜60万円程度</td></tr>
                        <tr><th scope="row">分析・企画・大規模な改善（数百ページ対応など）</th><td>100〜200万円程度</td></tr>
                    </tbody>
                </table>
            </li>
            <li class="business-web-type-card">
                <span class="business-web-type-icon" aria-hidden="true"><img src="<?= asset('icons/028-migration.svg') ?>" alt=""></span>
                <h3 class="business-web-type-title">インフラ対応</h3>
                <table class="business-web-type-table">
                    <tbody>
                        <tr><th scope="row">ドメイン移管・サーバー移転（小規模サイト）</th><td>30〜50万円程度</td></tr>
                        <tr><th scope="row">ドメイン移管・サーバー移転（大規模サイト）</th><td>100〜150万円程度</td></tr>
                    </tbody>
                </table>
            </li>
            <li class="business-web-type-card">
                <span class="business-web-type-icon" aria-hidden="true"><img src="<?= asset('icons/038-developer.svg') ?>" alt=""></span>
                <h3 class="business-web-type-title">システム制作</h3>
                <table class="business-web-type-table">
                    <tbody>
                        <tr><th scope="row">小規模プログラム</th><td>30〜100万円程度</td></tr>
                        <tr><th scope="row">中規模プログラム</th><td>100〜300万円程度</td></tr>
                        <tr><td colspan="2">大規模・業務システムは対応しておりません</td></tr>
                    </tbody>
                </table>
            </li>
            <li class="business-web-type-card">
                <span class="business-web-type-icon" aria-hidden="true"><img src="<?= asset('icons/019-shop.svg') ?>" alt=""></span>
                <h3 class="business-web-type-title">ネットショップ</h3>
                <table class="business-web-type-table">
                    <tbody>
                        <tr><th scope="row">立ち上げ・リニューアル</th><td>100〜300万円程度</td></tr>
                    </tbody>
                </table>
            </li>
        </ul>
    </div>
</section>

<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">手がけることが多いWebサイト</h2>
        <div class="business-web-sites">
            <div class="business-web-site-block animate-on-scroll">
                <span class="business-web-site-icon" aria-hidden="true"><img src="<?= asset('icons/020-building.svg') ?>" alt=""></span>
                <h3 class="business-web-site-title">コーポレートサイト</h3>
                <p class="business-web-site-desc">単純なものであればAIツールなどを利用して自社で作った方が良いとお伝えする場合も多くあります。まずはご相談いただければ、目的に応じて自社制作をご案内することもあります。社内で更新しやすい機能の追加や、デザインの担保、上場企業様などで堅牢な運用体制が必要な場合にご依頼いただいています。</p>
            </div>
            <div class="business-web-site-block animate-on-scroll">
                <span class="business-web-site-icon" aria-hidden="true"><img src="<?= asset('icons/046-dashboard.svg') ?>" alt=""></span>
                <h3 class="business-web-site-title">集客を目的としたサービスサイト</h3>
                <p class="business-web-site-desc">一番得意とする分野です。</p>
                <h4 class="business-web-site-subtitle">新規立ち上げの場合</h4>
                <p class="business-web-site-desc">提供サービスや商品の深い理解と、競合調査・市場調査を通し、インターネット上での立ち位置や戦略を検討します。必要なコンテンツのリストアップ、各ページの構成決定、集客のための記事コンテンツ作成なども行います。なお、新規ドメイン・新規サイトの立ち上げでは、半年から1年程度のGoogleへの認知期間を想定いただく必要があります。</p>
                <h4 class="business-web-site-subtitle">リニューアルの場合</h4>
                <p class="business-web-site-desc">現在のWebサイトの分析を行い、今後伸ばしていくべき部分を見極めてリニューアルします。現在のブランド・デザインテイストを引き継ぎながらブラッシュアップ。多数のページがある場合も、プログラムによる変換と人間による手作業修正を丁寧に行い、SEO効果を損なわない転送処理にも対応します。</p>
            </div>
            <div class="business-web-site-block animate-on-scroll">
                <span class="business-web-site-icon" aria-hidden="true"><img src="<?= asset('icons/024-landing.svg') ?>" alt=""></span>
                <h3 class="business-web-site-title">LP・キャンペーンサイト</h3>
                <p class="business-web-site-desc">目的を決め、達成するための必要十分なWebサイトを作成します。予算に合わせて技術的に省略する部分を決め、コストのなかで最大の成果が出るようにします。広告展開・SNS集客展開もサポート。キャンペーンサイトでは動画やゲームなどを含め、ユーザーに興味を持っていただく施策の提案・制作も行います。</p>
            </div>
            <div class="business-web-site-block animate-on-scroll">
                <span class="business-web-site-icon" aria-hidden="true"><img src="<?= asset('icons/019-shop.svg') ?>" alt=""></span>
                <h3 class="business-web-site-title">ネットショップ</h3>
                <p class="business-web-site-desc">主にリニューアルを担当しています。現状の分析とビジネス展開についてお伺いし、最も売っていくべき商品やカテゴリの決定、ターゲットに合わせたデザインを行います。商品が大量にある場合もプログラムと人間の作業で対応可能です。リリース後のメールマガジンやSNSでの集客、継続的な分析と対策のための保守運用による伴走も行います。</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-lg bg-gray">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">得意とするパターン</h2>
        <p class="section-desc business-web-pattern-intro animate-on-scroll">業種・会社規模は問いません。「現在のWebサイトを改善したい」というご要望には、成果を出せるプランをご提案します。必ず、現在のアクセス状況・売上状況を確認させていただき、現実的な増加見込みを提示。コストと見合うかどうかのご判断をいただいたうえでプロジェクトをスタートします。既存顧客のご紹介や、事例をご覧いただいた企業様からのご相談も多くいただいています。</p>
        <ul class="business-pattern-grid">
            <li class="business-pattern-card animate-on-scroll animate-delay-1">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/020-growth.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">リニューアルしてアクセスを増やしたい</h3>
                <p class="business-pattern-desc">経年で情報が古くなったサイトを整理し、検索流入や導線を改善します。検索順位・オーガニック流入の向上を目的としたリニューアルに強みがあります。</p>
            </li>
            <li class="business-pattern-card animate-on-scroll animate-delay-1">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/015-data analytics.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">コンテンツ・データが多く、加工して掲載したい</h3>
                <p class="business-pattern-desc">商品データや在庫情報などを整形・一括掲載する仕組みを設計します。基幹システムと連携した商品一覧・在庫表示などに対応します。</p>
            </li>
            <li class="business-pattern-card animate-on-scroll animate-delay-2">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/036-security.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">運用の手間を減らしたい、リスクに対応したい</h3>
                <p class="business-pattern-desc">更新フローの効率化や、セキュリティ・障害対応の体制づくりを支援します。マニュアル化と権限設計による更新負荷の軽減など。</p>
            </li>
            <li class="business-pattern-card animate-on-scroll animate-delay-2">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/016-play.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">インタラクティブな機能を追加したい</h3>
                <p class="business-pattern-desc">動画配信、予約・申込、会員向けコンテンツなど、双方向の機能を設計・実装します。会員限定の動画配信サイトなどの実績があります。</p>
            </li>
            <li class="business-pattern-card animate-on-scroll animate-delay-3">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/042-target.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">Webサイトでビジネスを推進したい</h3>
                <p class="business-pattern-desc">問い合わせ・申込・資料請求など、成果に直結する導線とフォーム設計を提案します。LPとフォームの改善による問い合わせ増など。</p>
            </li>
            <li class="business-pattern-card animate-on-scroll animate-delay-3">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/027-online learning.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">社内メンバーを学習させながら運用したい</h3>
                <p class="business-pattern-desc">CMSの操作レクチャーやマニュアル作成で、社内で更新できる体制を整えます。担当変更後も継続して更新できる運用設計をご提案します。</p>
            </li>
            <li class="business-pattern-card animate-on-scroll animate-delay-3">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/039-group.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">Web担当が社内にいない（いなくなった）</h3>
                <p class="business-pattern-desc">全体の把握と改善・運用をご依頼いただくパターンです。こうしたご相談は、とくに感謝の声を多くいただくことが多いです。</p>
            </li>
            <li class="business-pattern-card animate-on-scroll animate-delay-3">
                <span class="business-pattern-icon" aria-hidden="true"><img src="<?= asset('icons/047-people.svg') ?>" alt=""></span>
                <h3 class="business-pattern-title">主力サービスに集中するため、Web運用を任せたい</h3>
                <p class="business-pattern-desc">サービス企業様で、社内にWebサイトチームを持たず、事業部の担当者様から指示を受けてWebサイトを弊社で運用する形です。自社サービスと同等のサービス理解とご提案を行っています。</p>
            </li>
        </ul>
    </div>
</section>

<section class="section section-lg">
    <div class="container container--wide">
        <h2 class="section-title-sm animate-on-scroll">制作事例</h2>
        <div class="business-case-list">
            <article class="business-case-block animate-on-scroll">
                <div class="business-case-block-body">
                    <h3 class="business-case-block-title">基幹連携・問い合わせ取り込み</h3>
                    <p class="business-case-block-desc">フロントはWordPressなど扱いやすい技術で構築し、レンタルサーバーで運用できるように設計。バックエンドで基幹システムとJSON連携し、データ表示とお問い合わせ・申込の自動取り込みを実現しました。ビジネスとシステムの両面から全体を見渡し、効率と費用対効果を考慮したWebサイト設計を行っています。</p>
                </div>
                <div class="business-case-block-img-wrap">
                    <img src="<?= asset('images/business_web/web_case_01.jpg') ?>" alt="" width="960" height="540" class="business-case-block-img" loading="lazy">
                </div>
            </article>
            <article class="business-case-block animate-on-scroll">
                <div class="business-case-block-body">
                    <h3 class="business-case-block-title">会員動画配信サイト</h3>
                    <p class="business-case-block-desc">WordPressでお知らせや固定ページを更新しやすくし、ログイン機能を実装。会員限定の動画は、動画変換とCDNを用いたストリーミング配信とし、会員管理・決済は外部システムと連携して実現しました。複雑に見える要件も要素に分解し、必要な機能ごとに最適なシステムを組み合わせる設計です。他社開発の会員システムとも打ち合わせを重ね、要件をすり合わせたうえで連携し、Web運用とシステム開発の橋渡しも行っています。</p>
                </div>
                <div class="business-case-block-img-wrap">
                    <img src="<?= asset('images/business_web/web_case_02.jpg') ?>" alt="" width="960" height="540" class="business-case-block-img" loading="lazy">
                </div>
            </article>
            <article class="business-case-block animate-on-scroll">
                <div class="business-case-block-body">
                    <h3 class="business-case-block-title">大規模サイトの一部コンテンツ追加</h3>
                    <p class="business-case-block-desc">長年クライアント様内で制作・更新されている大規模サイトに、追加コンテンツを制作しました。担当範囲を明確にし、Gitで安定運用しながら他社と連携。責任範囲を狭めすぎず、他社の領域を侵さずに作業を進めました。既存サイトには経緯や事情があることが多いため、それを踏まえたうえでベターな運用方法を提案し、クライアント様や既存の制作会社の事情にも配慮した進め方をしています。</p>
                </div>
                <div class="business-case-block-img-wrap">
                    <img src="<?= asset('images/business_web/web_case_03.jpg') ?>" alt="" width="960" height="540" class="business-case-block-img" loading="lazy">
                </div>
            </article>
            <article class="business-case-block animate-on-scroll">
                <div class="business-case-block-body">
                    <h3 class="business-case-block-title">センシティブ情報の安全運用</h3>
                    <p class="business-case-block-desc">上場企業のIR情報など、公開タイミングや内容の精度が特に重要なWebサイトの運用を支援しています。Gitなど事故が起きにくい仕組みの構築に加え、クライアント様との密な打ち合わせや、人為ミスを抑えるための体制設計まで含めてプロジェクトを設計しています。慎重さが必要な箇所とスピードを出す箇所を見極め、品質とスピードのバランスを取りながら進めています。</p>
                </div>
                <div class="business-case-block-img-wrap">
                    <img src="<?= asset('images/business_web/web_case_04.jpg') ?>" alt="" width="960" height="540" class="business-case-block-img" loading="lazy">
                </div>
            </article>
        </div>
        <div class="business-case-what animate-on-scroll">
            <?php
            $whatHelpId = 'business-case-what';
            $whatHelpContent = '<p>これは抽象化した制作事例の説明です。制作事例の詳細についてはクライアントの守秘義務があるため詳細は掲載しておりません。MTGなどで守秘義務の範囲内でより詳しいお話をさせていただくことは可能です。</p>';
            require INCLUDES_PATH . '/what-help.php';
            ?>
        </div>
        <div class="business-case-philosophy animate-on-scroll">
            <h3 class="business-case-philosophy-title">設計・運用の考え方</h3>
            <div class="business-case-philosophy-grid">
                <div class="business-case-philosophy-item">
                    <h4 class="business-case-philosophy-heading">インフラ</h4>
                    <p class="business-case-philosophy-desc">データを一箇所に集めすぎると、不要に高いスペックや、フロントの負荷増加につながりがちです。必要なレイヤーに必要なスペックの技術を割り当て、システム間は疎結合で連携し、それぞれで必要十分なスペックで運用する設計を心がけています。企画・設計の段階から、インフラコストを抑えられるかどうかも重要な検討軸としています。</p>
                </div>
                <div class="business-case-philosophy-item">
                    <h4 class="business-case-philosophy-heading">設計・連携</h4>
                    <p class="business-case-philosophy-desc">一見複雑なWebサイトでも、要素に分解し、各機能に必要なシステムを選んで組み合わせることで実現できます。会員管理など他社製システムとの連携では、打ち合わせを重ねて相互の要件を理解したうえで設計し、Webサイト運用とシステム開発のあいだをつなぐ役割も担っています。</p>
                </div>
                <div class="business-case-philosophy-item">
                    <h4 class="business-case-philosophy-heading">既存サイトとの協業</h4>
                    <p class="business-case-philosophy-desc">すべてを一元的にコントロールできる理想形ばかりではなく、経緯や事情に応じてベターな運用を提案します。クライアント様や既存の制作会社の事情も考慮し、責任範囲を守りながら協業できる進め方を提案しています。</p>
                </div>
                <div class="business-case-philosophy-item">
                    <h4 class="business-case-philosophy-heading">品質とスピード</h4>
                    <p class="business-case-philosophy-desc">プロジェクトのトラブルは、慎重にすべきところでスピードを出しすぎたり、逆にスピードを出すべきところで慎重になりすぎたりすることが原因になりがちです。必要な品質と適切なスピードを確認しながら、プロジェクトを進めています。</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-lg bg-gray">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">進め方</h2>
        <div class="business-process-flow animate-on-scroll">
            <div class="business-process-step"><span class="business-process-num">01</span><span class="business-process-label">初回相談無料</span><p class="business-process-desc">ヒアリングで目的・課題をうかがいます。</p></div>
            <span class="business-process-arrow" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></span>
            <div class="business-process-step"><span class="business-process-num">02</span><span class="business-process-label">目的整理</span><p class="business-process-desc">要件とスコープを整理します。</p></div>
            <span class="business-process-arrow" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></span>
            <div class="business-process-step"><span class="business-process-num">03</span><span class="business-process-label">仕様・スコープ</span><p class="business-process-desc">見積もりまたは要件定義プラン（2〜3ヶ月・月10万円目安）をご提案します。</p></div>
            <span class="business-process-arrow" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></span>
            <div class="business-process-step"><span class="business-process-num">04</span><span class="business-process-label">デザイン・構築</span><p class="business-process-desc">デザインから実装まで一貫して進めます。</p></div>
            <span class="business-process-arrow" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></span>
            <div class="business-process-step"><span class="business-process-num">05</span><span class="business-process-label">公開・運用</span><p class="business-process-desc">公開後は運用代行や集客支援など必要な範囲で継続サポートします。</p></div>
        </div>
    </div>
</section>

<section class="section section-lg">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">よくある質問</h2>
        <dl class="business-faq-dl animate-on-scroll">
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> 制作期間・費用の目安は？</dt>
                <dd><span class="faq-label faq-a">A</span> <div class="business-faq-answer">
                    <p>規模やスコープにより異なります。初回ヒアリングのうえで、おおよその期間と費用をご提示します。当ページの「制作タイプ・料金の目安」もあわせてご参照ください。</p>
                    <p>短いプロジェクトの場合、1週間程度で要件定義・契約などを行い、その後2週間程度で制作・テスト、1週間程度でリリース・納品となり、1ヶ月程度を目安にご相談ください。2回目からの作業の場合は1/2〜1/3程度の期間でスピード納品可能です。保守契約をいただければ、ご依頼から1〜2日程度でリリースまで行う場合もあります。</p>
                    <p>長いプロジェクトの場合、1〜2ヶ月程度かけて要件定義・設計を行い、制作については数ヶ月かけて行う場合もあります。リリース時にはデータ移行やリハーサルを行う場合もあります。</p>
                    <p>内容やサーバーの状態などに応じて適切な期間をご提示し、ご了承いただいたうえで着手いたします。</p>
                </div></dd>
            </div>
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> 既存サイトの引き継ぎ・保守は可能ですか？</dt>
                <dd><span class="faq-label faq-a">A</span> <div class="business-faq-answer">
                    <p>はい。既存の構成やデータを引き継いだうえで、保守・更新・改修に対応します。</p>
                    <p>仕様書やデザインファイルがある場合はそれらも入手したうえで保守を行います。ない場合でも、本番サーバーの状態からプログラムやファイルを解析し、保守に必要な状態を構築することも可能です。現状のサーバーから移転し、よりリーズナブルなインフラを選択する場合もあります。どういった状態でもご相談いただけます。</p>
                </div></dd>
            </div>
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> 保守・運用は依頼できますか？</dt>
                <dd><span class="faq-label faq-a">A</span> <div class="business-faq-answer">
                    <p>はい。運営代行サービスで、更新・障害対応・バックアップなど必要な範囲でお引き受けします。</p>
                    <p>Webサイトの現状のアクセス状況や問い合わせ状況を分析したうえで目標を決め、保守・運用を開始します。定期的に状況報告や、ご依頼の整理のためのオンラインミーティングも行います。</p>
                </div></dd>
            </div>
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> セキュリティ対策は対応していますか？</dt>
                <dd><span class="faq-label faq-a">A</span> <div class="business-faq-answer">
                    <p>適切なセキュリティ対策を講じます。HTTPS化、脆弱性対策、アクセス制御など、要件に応じて設計・運用面で対応します。</p>
                    <p>基本的に、重要な情報を公開スペースに置くこと自体を避けることが第一です。やむなく置く必要がある場合でも、アクセス制限やCMS・ミドルウェアのバージョン管理など対策を万全にします。</p>
                    <p>必要以上に細かく対策することで費用が膨らまないよう、Webサイトの規模に合わせたセキュリティレベルを保つようにしています。</p>
                </div></dd>
            </div>
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> 社内で更新できるようにしたい</dt>
                <dd><span class="faq-label faq-a">A</span> <div class="business-faq-answer">
                    <p>更新手順のマニュアル作成やCMSの操作レクチャーを行います。運用しやすい設計からお任せください。</p>
                    <p>コンテンツにより弊社で作成したほうが費用対効果が高い場合はご発注も承っています。弊社で下書きし、社内でチェックのうえ公開いただくパターンにも対応しています。</p>
                    <p>コンテンツは定期的な更新が重要です。弊社のような外部パートナーが管理することで、更新がおろそかにならないというメリットもあります。</p>
                </div></dd>
            </div>
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> 集客（SEO・広告）も依頼できますか？</dt>
                <dd><span class="faq-label faq-a">A</span> <div class="business-faq-answer">
                    <p>はい。インターネット集客サービスで、解析・コンテンツ改善・広告・導線設計をご提案します。まずはお気軽にご相談ください。</p>
                    <p>やみくもなSEO対策ではなく、競合調査、狙うべきターゲットとキーワード、費用対効果を踏まえた対策をご提案・実施します。</p>
                    <p>強引なコンテンツ作成・キーワード対策・被リンク施策は行いません。インターネット上で必要とされているコンテンツをしっかり作り、ターゲットに興味を持っていただく対策をしていきます。</p>
                </div></dd>
            </div>
        </dl>
    </div>
</section>

<style>
/* /business/web */
.page-header--with-video { position: relative; overflow: hidden; }
.page-header--with-video .page-header-video-wrap { position: absolute; inset: 0; z-index: 0; }
.page-header--with-video .page-header-video { width: 100%; height: 100%; object-fit: cover; }
.page-header--with-video .page-header-overlay { position: absolute; inset: 0; z-index: 1; background: linear-gradient(180deg, rgba(15, 23, 42, 0.2) 0%, rgba(15, 23, 42, 0.35) 100%); }
.page-header--with-video .container { position: relative; z-index: 2; }
.page-header-icon { display: block; margin-bottom: var(--space-4); text-align: center; }
.page-header-icon img { display: block; width: 48px; height: 48px; margin-left: auto; margin-right: auto; filter: brightness(0) invert(1); }
.business-web-lead-wrap { max-width: 720px; margin-left: auto; margin-right: auto; }
.lead.business-web-lead-sub { font-size: var(--text-lg); font-weight: var(--font-semibold); margin-bottom: var(--space-4); color: var(--color-gray-800); }
.lead.business-web-lead { font-size: var(--text-base); line-height: var(--leading-relaxed); color: var(--color-gray-700); }
.lead.business-web-lead p { margin-bottom: var(--space-4); }
.lead.business-web-lead p:last-child { margin-bottom: 0; }

/* 制作タイプ・料金の目安 */
.business-web-types-grid { list-style: none; padding: 0; margin: 0; display: grid; gap: var(--space-5); grid-template-columns: 1fr; }
@media (min-width: 640px) { .business-web-types-grid { grid-template-columns: repeat(2, 1fr); } }
@media (min-width: 1024px) { .business-web-types-grid { grid-template-columns: repeat(3, 1fr); } }
.business-web-type-card { background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: var(--space-5); }
.business-web-type-icon { display: block; margin-bottom: var(--space-3); }
.business-web-type-icon img { width: 40px; height: 40px; }
.business-web-type-title { font-size: var(--text-base); font-weight: var(--font-semibold); margin-bottom: var(--space-3); }
.business-web-type-table { width: 100%; table-layout: fixed; border-collapse: collapse; font-size: var(--text-sm); }
.business-web-type-table th,
.business-web-type-table td { padding: var(--space-2) var(--space-3); text-align: left; border: none; border-bottom: 1px solid var(--color-gray-200); vertical-align: top; }
.business-web-type-table th { width: 60%; background: var(--color-gray-100); font-weight: var(--font-semibold); color: var(--color-gray-700); }
.business-web-type-table td { width: 40%; color: var(--color-gray-600); word-wrap: break-word; overflow-wrap: break-word; }
.business-web-type-table tr:first-child th { border-radius: var(--radius-md) 0 0 0; }
.business-web-type-table tr:first-child td { border-radius: 0 var(--radius-md) 0 0; }
.business-web-type-table tr:last-child th { border-radius: 0 0 0 var(--radius-md); }
.business-web-type-table tr:last-child td { border-radius: 0 0 var(--radius-md) 0; }
.business-web-type-table tr:last-child th,
.business-web-type-table tr:last-child td { border-bottom: none; }
.business-web-type-table tr:last-child td[colspan="2"] { border-radius: 0 0 var(--radius-md) var(--radius-md); }
.business-web-type-table tr:only-child th { border-radius: var(--radius-md) 0 0 var(--radius-md); }
.business-web-type-table tr:only-child td { border-radius: 0 var(--radius-md) var(--radius-md) 0; }

/* 手がけることが多いWebサイト */
.business-web-sites { display: flex; flex-direction: column; gap: var(--space-8); }
.business-web-site-block { background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: var(--space-6); }
.business-web-site-icon { display: block; margin-bottom: var(--space-3); }
.business-web-site-icon img { width: 44px; height: 44px; }
.business-web-site-title { font-size: var(--text-lg); font-weight: var(--font-semibold); margin-bottom: var(--space-3); }
.business-web-site-subtitle { font-size: var(--text-base); font-weight: var(--font-semibold); color: var(--color-gray-800); margin: var(--space-4) 0 var(--space-2); }
.business-web-site-subtitle:first-of-type { margin-top: 0; }
.business-web-site-desc { font-size: var(--text-base); color: var(--color-gray-700); line-height: var(--leading-relaxed); margin-bottom: var(--space-3); }
.business-web-site-desc:last-child { margin-bottom: 0; }

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

/* 制作事例（横いっぱい・しっかりコンテンツ） */
.container--wide { max-width: 960px; margin-left: auto; margin-right: auto; padding-left: var(--container-padding); padding-right: var(--container-padding); }
.business-case-list { display: flex; flex-direction: column; gap: 0; }
.business-case-block { padding: var(--space-8) 0; border-bottom: 1px solid var(--color-gray-200); }
.business-case-block:last-of-type { border-bottom: none; }
.business-case-block-body { min-width: 0; }
.business-case-block-title { font-size: var(--text-lg); font-weight: var(--font-semibold); color: var(--color-gray-800); margin: 0 0 var(--space-4); }
.business-case-block-desc { font-size: var(--text-base); color: var(--color-gray-700); line-height: var(--leading-relaxed); margin: 0; }
.business-case-block-img-wrap { margin-top: var(--space-5); border-radius: var(--radius-lg); overflow: hidden; background: var(--color-gray-100); max-width: 70%; margin-left: auto; margin-right: auto; }
.business-case-block-img { width: 100%; height: auto; display: block; vertical-align: top; }
@media (min-width: 780px) {
  .business-case-block { display: flex; align-items: flex-start; gap: var(--space-8); }
  .business-case-block-body { flex: 0 0 70%; }
  .business-case-block-img-wrap { flex: 0 0 30%; margin-top: 0; max-width: none; margin-left: 0; margin-right: 0; }
}
.business-case-what { display: flex; justify-content: flex-end; margin-top: var(--space-4); }
.business-case-what .what-help-btn { color: var(--color-gray-500); background: var(--color-gray-200); }
.business-case-what .what-help-btn:hover,
.business-case-what .what-help-btn:focus { color: var(--color-gray-700); background: var(--color-gray-300); }
.business-case-philosophy { margin-top: var(--space-12); padding-top: var(--space-10); border-top: 1px solid var(--color-gray-200); }
.business-case-philosophy-title { font-size: var(--text-lg); font-weight: var(--font-semibold); color: var(--color-gray-800); margin: 0 0 var(--space-6); }
.business-case-philosophy-grid { display: grid; gap: var(--space-8); grid-template-columns: 1fr; }
@media (min-width: 640px) { .business-case-philosophy-grid { grid-template-columns: repeat(2, 1fr); } }
.business-case-philosophy-item { padding: var(--space-5); background: var(--color-gray-50); border-radius: var(--radius-lg); }
.business-case-philosophy-heading { font-size: var(--text-base); font-weight: var(--font-semibold); color: var(--color-gray-800); margin: 0 0 var(--space-2); }
.business-case-philosophy-desc { font-size: var(--text-sm); color: var(--color-gray-700); line-height: var(--leading-relaxed); margin: 0; }

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
.business-faq-answer { flex: 1; min-width: 0; }
.business-faq-answer p { margin: 0 0 var(--space-3); }
.business-faq-answer p:last-child { margin-bottom: 0; }
.faq-label { flex-shrink: 0; width: 28px; height: 28px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; font-size: var(--text-sm); font-weight: var(--font-bold); }
.faq-q { background: var(--color-primary); color: var(--color-white); }
.faq-a { background: var(--color-gray-700); color: var(--color-white); }
</style>

<?php require INCLUDES_PATH . '/footer.php'; ?>
