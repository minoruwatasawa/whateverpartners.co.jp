<?php
/**
 * Whatever Partners Inc. - 代表メッセージ（/message）
 * cursor_ai_web.md 3938-3994 に基づく
 */

$pageMeta = getPageMetaOptions($pageKey);
$pageTitle = $pageMeta['pageTitle'];
$metaOptions = $pageMeta['metaOptions'];
$bodyClass = 'page-message';

require INCLUDES_PATH . '/header.php';
?>

<section class="page-header">
    <div class="container">
        <span class="page-title-en">Message</span>
        <h1 class="page-title">代表メッセージ</h1>
    </div>
</section>

<section class="section section-lg">
    <div class="container message-body">
        <p class="message-p animate-on-scroll">
            Webサイトをご覧いただきありがとうございます。ホワットエバーパートナーズ株式会社は創業から15年目のWeb制作を中心としたクリエイティブ活動を行っている企業です。これからお付き合いをご検討いただく企業の皆様、弊社に入社をご検討されている方に向けてこのメッセージを書いています。
        </p>
        <p class="message-p animate-on-scroll">
            弊社は、長くWebサイト制作を中心としたインターネット上でビジネスを推進するための事業を行ってきました。現在はインターネット上で何かを行う際に、適切な手段を選び、確実に前に進めることができるようなノウハウ・技術が備わっている状態になりました。
        </p>
        <p class="message-p animate-on-scroll">
            弊社がサポートさせていただくクライアントは、社会的に意義があるサービスを提供している企業や団体です。インターネット自体、またはインターネットを通して世の中を少しでも良い状態にしていくことができるよう、サポートさせていただきます。
        </p>
        <p class="message-p animate-on-scroll">
            また、弊社オリジナルでも同様のことができるよう一歩踏み出しています。関わる人が楽しくなるようなクリエイティブ活動をしています。
        </p>
        <p class="message-p animate-on-scroll">
            クライアント、メンバーとして弊社と関わっていただくこと、興味を持っていただくことに感謝しています。一緒に大きな課題を解決できるよう尽力していきたいと考えています。
        </p>
    </div>
</section>

<section class="section section-lg bg-gray">
    <div class="container">
        <div class="message-signature">
            <div class="message-signature-img-wrap">
                <img src="<?= asset('images/watasawaminoru_03.jpg') ?>" alt="渡沢農" width="240" height="320" class="message-signature-img">
            </div>
            <div class="message-signature-text">
                <p class="message-signature-company"><?= h(COMPANY_INFO['name']) ?></p>
                <p class="message-signature-title">代表取締役</p>
                <p class="message-signature-name">渡沢農</p>
            </div>
        </div>
        <div class="message-career animate-on-scroll">
            <h2 class="message-career-title">代表 経歴</h2>
            <dl class="message-career-list">
                <dt>2003年</dt><dd>会津大学 コンピュータ理工学部 ソフトウェア学科 卒業</dd>
                <dt>2003年</dt><dd>アットネットホーム株式会社（現JCOM株式会社 傘下）入社</dd>
                <dt>2006年</dt><dd>株式会社ティーアンドエフカンパニー 入社</dd>
                <dt>2009年</dt><dd>Webディレクターとして独立</dd>
                <dt>2011年</dt><dd>ホワットエバーパートナーズ株式会社 設立</dd>
                <dt>2021年</dt><dd>社員10名体制に拡大</dd>
                <dt>2024年</dt><dd>年商1億円に拡大</dd>
            </dl>
            <div class="message-career-what">
                <?php
                $whatHelpId = 'message-career-what';
                $whatHelpContent = '<p>これは代表の略歴です。</p><p>採用活動などで代表の存在を重要視する方は下記のページを参照ください。</p><p><a href="/message/watasawaminoru">代表 詳細経歴</a></p>';
                require INCLUDES_PATH . '/what-help.php';
                ?>
            </div>
        </div>
    </div>
</section>

<section class="section section-lg">
    <div class="container message-after-block">
        <div class="message-company-name animate-on-scroll">
            <h2 class="message-company-name-title">社名に込めた想い</h2>
            <p class="message-company-name-logo"><img src="<?= asset('images/logo_whateverpartners.svg') ?>" alt="Whatever Partners" width="300" height="60"></p>
            <p class="message-company-name-p">Whatever と Partners は、通常の英語的文脈では連結することがない和製の造語です。</p>
            <p class="message-company-name-p">Whatever は「何でも」「どんな〜でも」を表す副詞です。創業当初、私たちはクライアントの目標達成のために、どんな状況になっても寄り添うことを宣言するためにこの単語を選びました。その意味は時代とともに広がり、どういった特徴を持った人でも、一緒に時間を共にしたのであれば受け入れてサポートしていくという考え方にもつながっています。また、社内のメンバーに対してはあるがままで良いというメッセージ（Whatever you are, you are enough.）であり、この言葉は、この会社を表す言葉だとつくづく感じています。</p>
            <p class="message-company-name-p">そうした関係性を持つメンバーが集まる会社であり、クライアントや弊社のサービスをご利用いただくエンドユーザーとも、一方的なサービス提供ではなく、パートナーとして対等であることを目標としています。</p>
        </div>
    </div>
</section>

<style>
.message-body { max-width: 640px; margin-left: auto; margin-right: auto; }
.message-p { margin-bottom: var(--space-6); line-height: var(--leading-relaxed); color: var(--color-gray-700); }
.message-p:last-of-type { margin-bottom: 0; }

.message-signature { max-width: 560px; margin-left: auto; margin-right: auto; display: flex; flex-direction: column; align-items: center; gap: var(--space-6); }
@media (min-width: 640px) {
    .message-signature { flex-direction: row; justify-content: center; }
}
.message-signature-img-wrap { flex-shrink: 0; }
.message-signature-img { width: 240px; height: auto; aspect-ratio: 3 / 5; object-fit: cover; border-radius: var(--radius-lg); }
.message-signature-text { text-align: center; }
@media (min-width: 640px) { .message-signature-text { text-align: left; display: flex; flex-direction: column; justify-content: center; } }
.message-signature-company { font-size: var(--text-base); font-weight: var(--font-semibold); margin-bottom: var(--space-2); }
.message-signature-title { font-size: var(--text-sm); color: var(--color-gray-600); margin-bottom: var(--space-1); }
.message-signature-name { font-size: var(--text-xl); font-weight: var(--font-semibold); }

.message-company-name { margin-top: var(--space-12); padding-top: var(--space-8); border-top: 1px solid var(--color-gray-200); max-width: 560px; margin-left: auto; margin-right: auto; }
.message-after-block .message-company-name { margin-top: 0; padding-top: 0; border-top: none; }
.message-company-name-title { font-size: var(--text-lg); font-weight: var(--font-semibold); color: var(--color-gray-800); margin: 0 0 var(--space-4); }
.message-company-name-logo { margin: 0 0 var(--space-5); border-top: 1px solid var(--color-gray-200); border-bottom: 1px solid var(--color-gray-200); }
.message-company-name-logo img { display: block; height: 60px; width: auto; max-width: 300px; }
.message-company-name-p { font-size: var(--text-base); color: var(--color-gray-700); line-height: var(--leading-relaxed); margin: 0 0 var(--space-4); }
.message-company-name-p:last-child { margin-bottom: 0; }

.message-career { margin-top: var(--space-12); padding-top: var(--space-8); border-top: 1px solid var(--color-gray-200); max-width: 560px; margin-left: auto; margin-right: auto; }
.message-career-title { font-size: var(--text-sm); font-weight: var(--font-semibold); color: var(--color-gray-600); margin: 0 0 var(--space-4); }
.message-career-what { display: flex; justify-content: flex-end; margin-top: var(--space-4); }
.message-career .what-help-btn { color: var(--color-gray-500); background: var(--color-gray-200); }
.message-career .what-help-btn:hover,
.message-career .what-help-btn:focus { color: var(--color-gray-700); background: var(--color-gray-300); }
.message-career .what-help-popup-inner a { color: var(--color-primary); text-decoration: underline; }
.message-career-list { font-size: var(--text-xs); color: var(--color-gray-600); line-height: var(--leading-relaxed); margin: 0; }
.message-career-list dt { font-weight: var(--font-medium); color: var(--color-gray-700); float: left; clear: left; width: 3.5em; margin-right: var(--space-2); }
.message-career-list dd { margin: 0 0 var(--space-2); overflow: hidden; }
.message-career-list dd:last-child { margin-bottom: 0; }
</style>

<?php require INCLUDES_PATH . '/footer.php'; ?>
