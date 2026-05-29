<?php
/**
 * Whatever Partners Inc. - 利用規約
 */

$pageMeta = getPageMetaOptions($pageKey);
$pageTitle = $pageMeta['pageTitle'];
$metaOptions = $pageMeta['metaOptions'];
$bodyClass = 'page-legal';

require INCLUDES_PATH . '/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <span class="page-title-en">Terms of Service</span>
        <h1 class="page-title">利用規約</h1>
    </div>
</section>

<!-- Content -->
<section class="section section-lg">
    <div class="container">
        <div class="legal-content animate-on-scroll">
            <p class="legal-intro">
                この利用規約（以下「本規約」）は、ホワットエバーパートナーズ株式会社（以下「当社」）が提供するウェブサイト（以下「本サイト」）の利用条件を定めるものです。
            </p>
            
            <h2>第1条（適用）</h2>
            <p>
                本規約は、本サイトを利用するすべての方（以下「ユーザー」）に適用されます。ユーザーは、本サイトを利用することにより、本規約に同意したものとみなされます。
            </p>
            
            <h2>第2条（禁止事項）</h2>
            <p>ユーザーは、本サイトの利用にあたり、以下の行為をしてはなりません：</p>
            <ul>
                <li>法令または公序良俗に違反する行為</li>
                <li>犯罪行為に関連する行為</li>
                <li>当社または第三者の知的財産権、肖像権、プライバシー、名誉その他の権利または利益を侵害する行為</li>
                <li>本サイトのサーバーまたはネットワークの機能を破壊したり、妨害したりする行為</li>
                <li>本サイトの運営を妨害するおそれのある行為</li>
                <li>不正アクセスをし、またはこれを試みる行為</li>
                <li>他のユーザーに関する個人情報等を収集または蓄積する行為</li>
                <li>不正な目的を持って本サイトを利用する行為</li>
                <li>当社のサービスに関連して、反社会的勢力に対して直接または間接に利益を供与する行為</li>
                <li>その他、当社が不適切と判断する行為</li>
            </ul>
            
            <h2>第3条（知的財産権）</h2>
            <p>
                本サイトに掲載されているコンテンツ（文章、画像、動画、プログラム等）の著作権その他の知的財産権は、当社または正当な権利を有する第三者に帰属します。ユーザーは、当社の事前の書面による承諾なく、これらを複製、転載、改変、配布等することはできません。
            </p>
            
            <h2>第4条（免責事項）</h2>
            <p>
                当社は、本サイトに掲載される情報の正確性、完全性、有用性等について、いかなる保証も行いません。本サイトの利用により生じた損害について、当社は一切の責任を負いません。
            </p>
            <p>
                当社は、予告なく本サイトの内容を変更し、または本サイトの運営を中止することがあります。これによりユーザーに生じた損害について、当社は一切の責任を負いません。
            </p>
            
            <h2>第5条（リンク）</h2>
            <p>
                本サイトから他のウェブサイトへのリンク、または他のウェブサイトから本サイトへのリンクについて、当社は、リンク先のウェブサイトの内容、正確性、安全性等について一切の責任を負いません。
            </p>
            
            <h2>第6条（本規約の変更）</h2>
            <p>
                当社は、必要と判断した場合には、ユーザーに通知することなく本規約を変更することができるものとします。変更後の規約は、本サイトに掲載した時点から効力を生じるものとします。
            </p>
            
            <h2>第7条（準拠法・管轄裁判所）</h2>
            <p>
                本規約の解釈にあたっては、日本法を準拠法とします。本サイトに関して紛争が生じた場合には、東京地方裁判所を第一審の専属的合意管轄裁判所とします。
            </p>
            
            <p class="legal-date">
                制定日：2024年4月1日<br>
                最終更新日：2024年4月1日
            </p>
        </div>
    </div>
</section>

<style>
.legal-content {
    max-width: 800px;
    margin: 0 auto;
}

.legal-intro {
    font-size: var(--text-lg);
    color: var(--color-gray-700);
    margin-bottom: var(--space-10);
    padding-bottom: var(--space-8);
    border-bottom: 1px solid var(--color-gray-200);
}

.legal-content h2 {
    font-size: var(--text-xl);
    margin-top: var(--space-10);
    margin-bottom: var(--space-4);
    padding-bottom: var(--space-3);
    border-bottom: 2px solid var(--color-primary);
}

.legal-content p {
    font-size: var(--text-base);
    color: var(--color-gray-700);
    line-height: var(--leading-relaxed);
    margin-bottom: var(--space-4);
}

.legal-content ul {
    margin-bottom: var(--space-6);
    padding-left: var(--space-6);
}

.legal-content li {
    list-style: disc;
    font-size: var(--text-base);
    color: var(--color-gray-700);
    margin-bottom: var(--space-2);
}

.legal-date {
    margin-top: var(--space-12);
    padding-top: var(--space-8);
    border-top: 1px solid var(--color-gray-200);
    font-size: var(--text-sm);
    color: var(--color-gray-500);
}
</style>

<?php require INCLUDES_PATH . '/footer.php'; ?>
