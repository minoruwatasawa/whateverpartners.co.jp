    </main>
    <!-- End Main Content -->

    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-inner">
            <!-- Footer Top -->
            <div class="footer-top">
                <div class="footer-brand">
                    <a href="/" class="footer-logo">
                        <img src="<?= asset('images/logo_whateverpartners.svg') ?>" alt="<?= h(SITE_NAME) ?>" class="footer-logo-img" width="512" height="24">
                    </a>
                    <p class="footer-tagline"><?= h(SITE_DESCRIPTION) ?></p>
                </div>
                
                <div class="footer-nav-group">
                    <div class="footer-nav">
                        <h4 class="footer-nav-title">メニュー</h4>
                        <ul class="footer-nav-list">
                            <?php foreach (NAV_ITEMS as $item): ?>
                            <li><a href="/<?= $item['slug'] ?>"><?= h($item['label']) ?></a></li>
                            <?php endforeach; ?>
                            <li><a href="/about#access">アクセス</a></li>
                            <li><a href="/message">代表メッセージ</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-nav">
                        <h4 class="footer-nav-title">受託サービス</h4>
                        <ul class="footer-nav-list">
                            <?php foreach (FOOTER_BUSINESS_LINKS as $item): ?>
                            <li><a href="<?= h($item['url']) ?>"><?= h($item['label']) ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Footer Middle -->
            <div class="footer-middle">
                <div class="footer-contact">
                    <h4 class="footer-contact-title">お問い合わせ</h4>
                    <p class="footer-address"><?= h(COMPANY_INFO['address']) ?></p>
                    <p class="footer-tel">TEL: <?= h(COMPANY_INFO['tel']) ?></p>
                    <p class="footer-email">
                        <a href="mailto:<?= h(COMPANY_INFO['email']) ?>"><?= h(COMPANY_INFO['email']) ?></a>
                    </p>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p class="copyright">&copy; <?= date('Y') ?> <?= h(SITE_NAME) ?> All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <button class="back-to-top" id="back-to-top" aria-label="ページトップへ戻る">
        <svg viewBox="0 0 24 24" class="back-to-top-icon">
            <path d="M12 4l-8 8h5v8h6v-8h5z"/>
        </svg>
    </button>

    <!-- AI Chat Widget（SE用URLは data 属性で渡す） -->
    <div class="ai-chat-widget" id="ai-chat-widget"
         data-se-click="<?= h(asset('sound/se_ai_click.mp3')) ?>"
         data-se-close="<?= h(asset('sound/se_ai_close.mp3')) ?>"
         data-se-thinking="<?= h(asset('sound/se_ai_thinking.mp3')) ?>"
         data-se-answer="<?= h(asset('sound/se_ai_answer.mp3')) ?>"
         data-se-what-click="<?= h(asset('sound/se_what_click.mp3')) ?>">
        <button class="ai-chat-toggle" id="ai-chat-toggle" aria-label="AIアシスタントを開く">
            <svg viewBox="0 0 24 24" class="ai-chat-icon">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
            <span class="ai-chat-label">AI</span>
        </button>
        <div class="ai-chat-panel" id="ai-chat-panel">
            <div class="ai-chat-header">
                <span class="ai-chat-title">AIアシスタント</span>
                <button class="ai-chat-close" id="ai-chat-close" aria-label="閉じる">&times;</button>
            </div>
            <div class="ai-chat-messages" id="ai-chat-messages">
                <div class="ai-message">
                    <p>こんにちは！ホワットエバーパートナーズのAIアシスタントです。何かお手伝いできることはありますか？</p>
                </div>
            </div>
            <div class="ai-chat-input-area">
                <input type="text" class="ai-chat-input" id="ai-chat-input" placeholder="メッセージを入力...">
                <button class="ai-chat-send" id="ai-chat-send" aria-label="送信">
                    <svg viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/embla-carousel@8/embla-carousel.umd.js"></script>
    <script src="https://unpkg.com/embla-carousel-autoplay@8/embla-carousel-autoplay.umd.js"></script>
    <script src="<?= asset('js/main.js') ?>"></script>
</body>
</html>
