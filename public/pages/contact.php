<?php
/**
 * Whatever Partners Inc. - お問い合わせページ
 */

$pageMeta = getPageMetaOptions($pageKey);
$pageTitle = $pageMeta['pageTitle'];
$metaOptions = $pageMeta['metaOptions'];
$bodyClass = 'page-contact';

// 問い合わせは電話・メールで受け付け（SendGrid 連携前にフォームは未使用）
$contactEmail = 'web@whateverpartners.co.jp';

/*
$formError = '';
$formSuccess = false;
// フォーム送信処理（SendGrid 実装後に有効化）
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $csrfToken = $_POST['csrf_token'] ?? '';
    if (!verifyCsrfToken($csrfToken)) {
        $formError = 'セッションが切れました。ページを更新して再度お試しください。';
    } else {
        $name = trim($_POST['name'] ?? '');
        $company = trim($_POST['company'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $phone = trim($_POST['phone'] ?? '');
        $category = $_POST['category'] ?? '';
        $message = trim($_POST['message'] ?? '');
        if (empty($name)) {
            $formError = 'お名前を入力してください。';
        } elseif (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $formError = '有効なメールアドレスを入力してください。';
        } elseif (empty($message)) {
            $formError = 'お問い合わせ内容を入力してください。';
        } else {
            // SendGrid 等でメール送信
            $formSuccess = true;
        }
    }
}
$csrfToken = generateCsrfToken();
*/

require INCLUDES_PATH . '/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <span class="page-title-en">Contact</span>
        <h1 class="page-title">お問い合わせ</h1>
    </div>
</section>

<!-- Contact Section -->
<section class="section section-lg">
    <div class="container">
        <div class="contact-intro animate-on-scroll">
            <p>
                サービスに関するご質問、お見積もりのご依頼、その他ご相談など、<br class="hidden-sp">
                お気軽にご連絡ください。電話またはメールにてお受けし、担当者より2営業日以内にご連絡いたします。
            </p>
        </div>
        
        <div class="contact-grid contact-grid--info-only">
            <?php /* フォームは SendGrid 連携後に有効化
            <div class="contact-form-wrapper animate-on-scroll">
                <?php if ($formSuccess): ?>
                <div class="form-success">...</div>
                <?php else: ?>
                <form method="POST" class="contact-form" id="contact-form">...</form>
                <?php endif; ?>
            </div>
            */ ?>
            <!-- Contact Info（電話・メールで受付） -->
            <div class="contact-info animate-on-scroll animate-delay-1">
                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                    </div>
                    <div class="contact-info-content">
                        <h3>電話でのお問い合わせ</h3>
                        <p class="contact-info-main">
                            <a href="tel:<?= h(str_replace('-', '', COMPANY_INFO['tel'])) ?>"><?= h(COMPANY_INFO['tel']) ?></a>
                        </p>
                        <p class="contact-info-sub">平日 10:00〜18:00（土日祝除く）</p>
                    </div>
                </div>
                
                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </div>
                    <div class="contact-info-content">
                        <h3>メールでのお問い合わせ</h3>
                        <p class="contact-info-main">
                            <a href="mailto:<?= h($contactEmail) ?>"><?= h($contactEmail) ?></a>
                        </p>
                        <p class="contact-info-sub">24時間受付中</p>
                    </div>
                </div>
                
                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                    </div>
                    <div class="contact-info-content">
                        <h3>所在地</h3>
                        <p class="contact-info-main"><?= h(COMPANY_INFO['address']) ?></p>
                        <p class="contact-info-sub">
                            <a href="https://maps.google.com/?q=<?= urlencode(COMPANY_INFO['address']) ?>" target="_blank" rel="noopener">
                                Google Mapで見る →
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section（/business/web と見た目を統一） -->
<section class="section section-lg bg-gray">
    <div class="container">
        <h2 class="section-title-sm animate-on-scroll">よくある質問</h2>
        <dl class="business-faq-dl animate-on-scroll">
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> 相談は無料ですか？</dt>
                <dd><span class="faq-label faq-a">A</span> <div class="business-faq-answer"><p>はい、初回のご相談は無料で承っております。お気軽にお問い合わせください。</p></div></dd>
            </div>
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> 見積もりまでどのくらいかかりますか？</dt>
                <dd><span class="faq-label faq-a">A</span> <div class="business-faq-answer"><p>ヒアリング後、通常3〜5営業日以内にお見積もりをご提示いたします。お急ぎの場合はご相談ください。</p></div></dd>
            </div>
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> 対応エリアはどこですか？</dt>
                <dd><span class="faq-label faq-a">A</span> <div class="business-faq-answer"><p>オンラインでの対応が可能なため、全国どこからでもご依頼いただけます。対面でのお打ち合わせも可能です。</p></div></dd>
            </div>
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> 小規模な案件でも対応してもらえますか？</dt>
                <dd><span class="faq-label faq-a">A</span> <div class="business-faq-answer"><p>はい、規模の大小に関わらず、丁寧に対応いたします。まずはお気軽にご相談ください。</p></div></dd>
            </div>
            <div class="business-faq-item">
                <dt><span class="faq-label faq-q">Q</span> サービスの紹介や営業でのご連絡について</dt>
                <dd><span class="faq-label faq-a">A</span> <div class="business-faq-answer"><p>メールにサービス内容、料金などを記載いただければ担当部署で検討して折り返しご連絡させていただきます。</p></div></dd>
            </div>
        </dl>
    </div>
</section>

<style>
/* Contact Intro */
.contact-intro {
    text-align: center;
    max-width: 700px;
    margin: 0 auto var(--space-12);
    font-size: var(--text-base);
    color: var(--color-gray-600);
}

/* Contact Grid */
.contact-grid {
    display: grid;
    gap: var(--space-12);
}

@media (min-width: 768px) {
    .contact-grid {
        grid-template-columns: 1fr 300px;
        gap: var(--space-16);
    }
}

.contact-grid--info-only {
    max-width: 520px;
    margin: 0 auto;
}

.contact-grid--info-only .contact-info {
    background: var(--color-white);
    padding: var(--space-8);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-sm);
}

@media (min-width: 640px) {
    .contact-grid--info-only .contact-info {
        padding: var(--space-10);
    }
}

/* Contact Form */
.contact-form-wrapper {
    background: var(--color-white);
    padding: var(--space-8);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-sm);
}

@media (min-width: 640px) {
    .contact-form-wrapper {
        padding: var(--space-10);
    }
}

.form-row {
    display: grid;
    gap: var(--space-6);
}

@media (min-width: 640px) {
    .form-row {
        grid-template-columns: repeat(2, 1fr);
    }
}

.form-error {
    display: flex;
    align-items: center;
    gap: var(--space-3);
    padding: var(--space-4);
    background: rgba(239, 68, 68, 0.1);
    border: 1px solid var(--color-error);
    border-radius: var(--radius-md);
    color: var(--color-error);
    font-size: var(--text-sm);
    margin-bottom: var(--space-6);
}

.form-error svg {
    width: 20px;
    height: 20px;
    flex-shrink: 0;
}

.form-privacy {
    margin-bottom: var(--space-6);
}

.checkbox-label {
    display: flex;
    align-items: center;
    gap: var(--space-3);
    cursor: pointer;
}

.checkbox-label input {
    width: 20px;
    height: 20px;
    accent-color: var(--color-primary);
}

.checkbox-text {
    font-size: var(--text-sm);
    color: var(--color-gray-600);
}

.checkbox-text a {
    color: var(--color-primary);
    text-decoration: underline;
}

.btn-submit {
    width: 100%;
}

/* Success Message */
.form-success {
    text-align: center;
    padding: var(--space-10);
}

.success-icon {
    width: 72px;
    height: 72px;
    margin: 0 auto var(--space-6);
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--color-success);
    border-radius: var(--radius-full);
}

.success-icon svg {
    width: 36px;
    height: 36px;
    fill: var(--color-white);
}

.success-title {
    font-size: var(--text-2xl);
    margin-bottom: var(--space-4);
}

.success-message {
    font-size: var(--text-base);
    color: var(--color-gray-600);
    margin-bottom: var(--space-8);
}

/* Contact Info */
.contact-info {
    display: flex;
    flex-direction: column;
    gap: var(--space-8);
}

.contact-info-item {
    display: flex;
    gap: var(--space-4);
}

.contact-info-icon {
    width: 48px;
    height: 48px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--color-gray-100);
    border-radius: var(--radius-lg);
}

.contact-info-icon svg {
    width: 24px;
    height: 24px;
    stroke: var(--color-primary);
}

.contact-info-content h3 {
    font-size: var(--text-sm);
    font-weight: var(--font-medium);
    color: var(--color-gray-500);
    margin-bottom: var(--space-2);
}

.contact-info-main {
    font-size: var(--text-base);
    font-weight: var(--font-semibold);
    color: var(--color-gray-900);
}

.contact-info-main a {
    color: inherit;
}

.contact-info-main a:hover {
    color: var(--color-primary);
}

.contact-info-sub {
    font-size: var(--text-sm);
    color: var(--color-gray-500);
    margin-top: var(--space-1);
}

.contact-info-sub a {
    color: var(--color-primary);
}

/* よくある質問（/business/web と統一） */
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

.hidden-sp {
    display: none;
}

@media (min-width: 640px) {
    .hidden-sp {
        display: inline;
    }
}
</style>

<?php require INCLUDES_PATH . '/footer.php'; ?>
