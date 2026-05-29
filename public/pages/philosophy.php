<?php
/**
 * Whatever Partners Inc. - 基本的な考え方（/philosophy）
 * cursor_ai_web.md 3776-3854 に基づく
 */

$pageMeta = getPageMetaOptions($pageKey);
$pageTitle = $pageMeta['pageTitle'];
$metaOptions = $pageMeta['metaOptions'];
$bodyClass = 'page-philosophy';

require INCLUDES_PATH . '/header.php';
?>

<section class="page-header">
    <div class="container">
        <span class="page-title-en">Philosophy</span>
        <h1 class="page-title">基本的な考え方</h1>
    </div>
</section>

<section class="section section-lg">
    <div class="container philosophy-body">
        <p class="philosophy-intro animate-on-scroll">
            企業運営・インターネット・クリエイティブ活動について、私たちの基本的な考え方をまとめています。
        </p>
    </div>
</section>

<section class="section section-lg bg-gray">
    <div class="container philosophy-body">
        <h2 class="philosophy-chapter-title animate-on-scroll">企業運営について</h2>
        <div class="philosophy-chapter-body animate-on-scroll">
            <p class="philosophy-p">
                ホワットエバーパートナーズ株式会社は、2011年4月に創業しました。当初は単純なWebサイトの制作を中心としていましたが、それ以降多くのクライアントとプロジェクトを経験することで、多くのノウハウと技術が積み重なり、現在はより多彩で確度が高い成果物を生み出せるようになりました。
            </p>
            <p class="philosophy-p">
                クライアントとの間で重要視することは、クライアントが長期的に求めるアウトプットを確実に毎月、毎年、積み重ねて作っていくことです。机上の空論や企画するだけに留まらず、具体的なアウトプットを作り、市場に投げ込むこと（そしてそれを計測・分析すること）が、確実な一歩になり大きな成果につながっていくと考えています。
            </p>
            <p class="philosophy-p">
                また、企業内部の運営では、メンバーが一番得意な業務を行うことを重要視しています。本人も気づいていない得意な才能を発揮し、それが弊社が提供する価値に結びつくような形を目指しています。
            </p>
        </div>
    </div>
</section>

<section class="section section-lg">
    <div class="container philosophy-body">
        <h2 class="philosophy-chapter-title animate-on-scroll">インターネットについて</h2>
        <div class="philosophy-chapter-body animate-on-scroll">
            <p class="philosophy-p">
                日本では1995年から本格的に広まったインターネットの利用ですが、あの時のワクワクを私たちは忘れられません。それまでは作ったものを誰かに見て体験してもらうためには、既存メディアのネットワークに載せるしかありませんでした。自由な情報発信とそれを受け取った人の呼応、予想もつかない誰かに作ったものが届くこと、顔も知らない人が（年齢、人種を超えて）つながっていくことに大きな期待と可能性を感じました。
            </p>
            <p class="philosophy-p">
                それから30年。しかし今、多くの失望を感じています。自由で可能性の塊に思えたインターネットは、経済の論理に巻き込まれ、本当の面白さや便利さを広める場にはなっていません。また、日本国内では大手のインターネット企業が日本のインターネット体験を向上することに十分寄与していないように思います。
            </p>
            <p class="philosophy-p">
                一方で、この数年で技術的に実用レベルになったAI技術は、革新的で精密な制作リソースを全ての人に提供してくれるようになりました。小さな企業であっても大企業と戦える土台が整いました。私たちは、これまで蓄積したノウハウと技術と、メンバーの感性を掛け合わせ、1995年のインターネットに感じていたワクワクを実現するべく、事業を行っています。
            </p>
        </div>
    </div>
</section>

<section class="section section-lg bg-gray">
    <div class="container philosophy-body">
        <h2 class="philosophy-chapter-title animate-on-scroll">クリエイティブ活動について</h2>
        <div class="philosophy-chapter-body animate-on-scroll">
            <p class="philosophy-p">
                私たちは受託サービス・オリジナルサービスを通じてクリエイティブ活動を行い、間接的・直接的に多くの人にサービス提供をしています。クリエイティブ活動で重要だと考えていることは、次の3点です。
            </p>
            <h3 class="philosophy-h3">原理原則を理解すること</h3>
            <p class="philosophy-p">
                インターネットというインフラを使いWebサイトやゲームという形でサービスを提供する際に、それぞれを支える仕組みや技術がどういったものであるか理解することが重要です。また、人間が使うものであれば、人間とはどういったものであるのかを知ることも重要です。それは、例えば、ビジネスモデル、検索エンジン、AI、デザイン、文章など、取り扱う全てのものに対して範囲は及びます。また、原理原則は言葉になっているもの・できているものだけではないことも重要です。言語化されていないが重要なことに気づくことも求められます。
            </p>
            <h3 class="philosophy-h3">時代を理解すること</h3>
            <p class="philosophy-p">
                時代により社会の常識や、各種の守らなければならないライン、大事にすることは変わっていきます。これらは見えないことが多いですが、そこに敏感にならなければなりません。毎回同じことを繰り返していくと、時代に合わず失敗することになります。常にアップデートし続けることが重要となります。
            </p>
            <h3 class="philosophy-h3">自分が面白い、便利と思うこと</h3>
            <p class="philosophy-p">
                作っているものが、誰かの指示や要望を忠実に実現させるようなものであった場合、それはパワーが弱いものになると同時に細かい部分で低品質なものになります。誰かから依頼されたものでも自分の中に全てをいったん取り込み、自分から発する「作りたい」という欲求に変換して、そのパワーをもとに作ることが重要です。
            </p>
        </div>
    </div>
</section>

<style>
.philosophy-body { max-width: 640px; margin-left: auto; margin-right: auto; }
.philosophy-intro { font-size: var(--text-base); line-height: var(--leading-relaxed); color: var(--color-gray-700); }
.philosophy-chapter-title { font-size: var(--text-xl); font-weight: var(--font-semibold); margin-bottom: var(--space-4); }
.philosophy-chapter-body { font-size: var(--text-base); line-height: var(--leading-relaxed); color: var(--color-gray-700); }
.philosophy-p { margin-bottom: var(--space-4); }
.philosophy-p:last-child { margin-bottom: 0; }
.philosophy-h3 { font-size: var(--text-lg); font-weight: var(--font-semibold); margin-top: var(--space-6); margin-bottom: var(--space-2); }
.philosophy-h3:first-of-type { margin-top: var(--space-4); }
</style>

<?php require INCLUDES_PATH . '/footer.php'; ?>
