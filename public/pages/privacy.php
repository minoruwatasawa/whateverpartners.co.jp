<?php
/**
 * Whatever Partners Inc. - プライバシーポリシー
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
        <span class="page-title-en">Privacy Policy</span>
        <h1 class="page-title">プライバシーポリシー</h1>
    </div>
</section>

<!-- Content -->
<section class="section section-lg">
    <div class="container">
        <div class="legal-content animate-on-scroll">
            <p class="legal-intro">
                ホワットエバーパートナーズ株式会社（以下「当社」）は、お客様の個人情報保護の重要性を認識し、以下のプライバシーポリシーを定め、これを遵守いたします。
            </p>
            
            <h2>1. 個人情報の定義</h2>
            <p>
                本ポリシーにおいて「個人情報」とは、個人情報保護法に定める個人情報を指し、生存する個人に関する情報であって、氏名、住所、電話番号、メールアドレス等により特定の個人を識別できるものをいいます。
            </p>
            
            <h2>2. 個人情報の収集</h2>
            <p>
                当社は、以下の目的で個人情報を収集することがあります：
            </p>
            <ul>
                <li>お問い合わせへの対応</li>
                <li>サービスの提供およびサポート</li>
                <li>お見積もりの作成</li>
                <li>契約の締結および履行</li>
                <li>サービス向上のための調査・分析</li>
                <li>新サービス・イベント等のご案内</li>
            </ul>
            
            <h2>3. 個人情報の利用目的</h2>
            <p>
                収集した個人情報は、収集時に明示した目的の範囲内でのみ利用いたします。目的外の利用を行う場合は、事前にお客様の同意を得るものとします。
            </p>
            
            <h2>4. 個人情報の第三者提供</h2>
            <p>
                当社は、以下の場合を除き、お客様の同意なく個人情報を第三者に提供することはありません：
            </p>
            <ul>
                <li>法令に基づく場合</li>
                <li>人の生命、身体または財産の保護のために必要がある場合</li>
                <li>公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合</li>
                <li>国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合</li>
            </ul>
            
            <h2>5. 個人情報の安全管理</h2>
            <p>
                当社は、個人情報の漏洩、滅失、毀損等を防止するため、適切なセキュリティ対策を講じます。また、個人情報を取り扱う従業員に対して、必要かつ適切な監督を行います。
            </p>
            
            <h2>6. 個人情報の開示・訂正・削除</h2>
            <p>
                お客様は、当社が保有する自己の個人情報について、開示、訂正、削除を請求することができます。請求があった場合は、本人確認の上、合理的な期間内に対応いたします。
            </p>
            
            <h2>7. Cookieの使用</h2>
            <p>
                当社のウェブサイトでは、サービス向上のためCookieを使用しています。Cookieによって個人を特定できる情報を収集することはありませんが、ブラウザの設定によりCookieを無効にすることができます。
            </p>
            
            <h2>8. プライバシーポリシーの変更</h2>
            <p>
                当社は、法令の変更や事業内容の変更に伴い、本ポリシーを変更することがあります。重要な変更がある場合は、ウェブサイト上でお知らせいたします。
            </p>
            
            <h2>9. お問い合わせ窓口</h2>
            <p>
                本ポリシーに関するお問い合わせは、以下までご連絡ください：
            </p>
            <p>
                ホワットエバーパートナーズ株式会社<br>
                個人情報保護管理者<br>
                Email: <?= h(COMPANY_INFO['email']) ?><br>
                TEL: <?= h(COMPANY_INFO['tel']) ?>
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
