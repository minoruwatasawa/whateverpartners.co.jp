<?php
/**
 * Whatever Partners Inc. - 代表 詳細経歴（/message/watasawaminoru）
 */

$pageMeta = getPageMetaOptions($pageKey);
$pageTitle = $pageMeta['pageTitle'];
$metaOptions = $pageMeta['metaOptions'];
$metaOptions['robots'] = 'noindex';
$bodyClass = 'page-representative-details';

require INCLUDES_PATH . '/header.php';
?>

<section class="page-header">
    <div class="container">
        <span class="page-title-en">Message</span>
        <h1 class="page-title">代表 詳細経歴</h1>
    </div>
</section>

<section class="section section-lg">
    <div class="container representative-details-body">
        <dl class="representative-details-list">
            <dt>1981年</dt><dd>山形県南陽市生まれ</dd>
            <dt>1999年</dt><dd>山形県立長井高校 卒業</dd>
            <dt>2003年</dt><dd>会津大学 コンピュータ理工学部 ソフトウェア学科 卒業</dd>
            <dt>2003年</dt><dd>アットネットホーム株式会社（現JCOM株式会社 傘下）（ネットワークエンジニア採用）入社</dd>
            <dt>2006年</dt><dd>株式会社ティーアンドエフカンパニー（SE・プログラマー採用） 入社</dd>
            <dt>2008年</dt><dd>スクーリング・パッド 農業ビジネスデザイン学部（社会人スクール）入学</dd>
            <dt>2009年</dt><dd>農家の息子の団体 (倅)セガレ 設立</dd>
            <dt>2009年</dt><dd>Webディレクターとして独立</dd>
            <dt>2009年</dt><dd>定額メンバー制Bar スキーマ 開店</dd>
            <dt>2011年</dt><dd>ホワットエバーパートナーズ株式会社 設立</dd>
            <dt>2012年</dt><dd>Bar型レンタルスペース 両国店 事業開始</dd>
            <dt>2012年</dt><dd>Bar型レンタルスペース 浅草橋店 開始</dd>
            <dt>2017年</dt><dd>めざせ100万円！南陽若者 (まちづくり) コンペティション 優勝</dd>
            <dt>2017年</dt><dd>ホワットエバーパートナーズ株式会社 秋葉原 移転</dd>
            <dt>2019年</dt><dd>Bar関連事業 クローズ</dd>
            <dt>2019年</dt><dd>サテライトオフィスA(古田土ビル4F) 追加</dd>
            <dt>2020年</dt><dd>サテライトオフィスB(美倉ビル2F) 追加</dd>
            <dt>2021年</dt><dd>社員10名体制に拡大</dd>
            <dt>2024年</dt><dd>年商1億円に拡大</dd>
        </dl>
        <p class="representative-details-back">
            <a href="/message">代表メッセージへ戻る</a>
        </p>
    </div>
</section>

<style>
.representative-details-body { max-width: 560px; margin-left: auto; margin-right: auto; }
.representative-details-list { font-size: var(--text-sm); color: var(--color-gray-700); line-height: var(--leading-relaxed); margin: 0; }
.representative-details-list dt { font-weight: var(--font-medium); color: var(--color-gray-800); float: left; clear: left; width: 4em; margin-right: var(--space-4); }
.representative-details-list dd { margin: 0 0 var(--space-3); overflow: hidden; }
.representative-details-list dd:last-child { margin-bottom: 0; }
.representative-details-back { margin-top: var(--space-10); padding-top: var(--space-6); border-top: 1px solid var(--color-gray-200); }
.representative-details-back a { color: var(--color-primary); text-decoration: underline; }
</style>

<?php require INCLUDES_PATH . '/footer.php'; ?>
