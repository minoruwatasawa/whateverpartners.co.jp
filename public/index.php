<?php
/**
 * Whatever Partners Inc. - Front Controller & Top Page
 */

require_once __DIR__ . '/includes/functions.php';

// ルーティング
$page = $_GET['page'] ?? '';
$slug = $_GET['slug'] ?? '';

// ページルーティング（$pageKey は data/pages.json のキー。メタ情報・AI用に使用）
switch ($page) {
    case 'about':
        $pageKey = 'about';
        require __DIR__ . '/pages/about.php';
        break;
    case 'business':
        if ($slug === 'web') {
            $pageKey = 'business-web';
            require __DIR__ . '/pages/business-web.php';
        } elseif ($slug === 'operation') {
            $pageKey = 'business-operation';
            require __DIR__ . '/pages/business-operation.php';
        } elseif ($slug === 'marketing') {
            $pageKey = 'business-marketing';
            require __DIR__ . '/pages/business-marketing.php';
        } elseif ($slug === 'game-dev') {
            $sub = $_GET['sub'] ?? '';
            $gameDevSubs = [
                'overview' => 'business-game-dev-overview',
                'use-cases' => 'business-game-dev-use-cases',
                'quality' => 'business-game-dev-quality',
                'pricing' => 'business-game-dev-pricing',
                'cases' => 'business-game-dev-cases',
                'about-wp' => 'business-game-dev-about-wp',
            ];
            if ($sub !== '' && isset($gameDevSubs[$sub])) {
                $pageKey = $gameDevSubs[$sub];
                require __DIR__ . '/pages/' . $gameDevSubs[$sub] . '.php';
            } else {
                $pageKey = 'business-game-dev';
                require __DIR__ . '/pages/business-game-dev.php';
            }
        } else {
            $pageKey = 'business';
            require __DIR__ . '/pages/business.php';
        }
        break;
    case 'services':
        if ($slug !== '') {
            $pageKey = 'service-detail';
            require __DIR__ . '/pages/service-detail.php';
        } else {
            $pageKey = 'services';
            require __DIR__ . '/pages/services.php';
        }
        break;
    case 'philosophy':
        $pageKey = 'philosophy';
        require __DIR__ . '/pages/philosophy.php';
        break;
    case 'message':
        if ($slug === 'watasawaminoru') {
            $pageKey = 'representative-details';
            require __DIR__ . '/pages/watasawaminoru.php';
        } else {
            $pageKey = 'message';
            require __DIR__ . '/pages/message.php';
        }
        break;
    case 'news':
        if ($slug) {
            $pageKey = 'news-detail';
            require __DIR__ . '/pages/news-detail.php';
        } else {
            $pageKey = 'news';
            require __DIR__ . '/pages/news.php';
        }
        break;
    case 'contact':
        $pageKey = 'contact';
        require __DIR__ . '/pages/contact.php';
        break;
    case 'privacy':
        $pageKey = 'privacy';
        require __DIR__ . '/pages/privacy.php';
        break;
    case 'terms':
        $pageKey = 'terms';
        require __DIR__ . '/pages/terms.php';
        break;
    case 'admin-icons':
        $pageKey = 'admin-icons';
        require __DIR__ . '/pages/admin-icons.php';
        break;
    case 'internal-client-services':
        $pageKey = 'internal-client-services';
        require __DIR__ . '/pages/internal-client-services.php';
        break;
    default:
        $pageKey = 'home';
        showTopPage();
        break;
}

/**
 * トップページを表示
 */
function showTopPage() {
    $pageKey = 'home';
    $pageMeta = getPageMetaOptions($pageKey);
    $pageTitle = $pageMeta['pageTitle'];
    $metaOptions = $pageMeta['metaOptions'];
    $bodyClass = 'page-home';

    // ヒーロー設定（time=東京時間で hiru/yugata/yoru, scene=天気API で fine/cloud/rainy）
    $heroJson = loadJson('hero.json');
    $heroTime = getHeroTimeFromClock();
    $heroSceneFromApi = getHeroSceneFromWeather();
    $heroScene = $heroSceneFromApi !== null
        ? $heroSceneFromApi
        : (isset($heroJson['scene']) && in_array($heroJson['scene'], ['fine', 'cloud', 'rainy'], true) ? $heroJson['scene'] : 'fine');
    $heroSceneConfig = $heroJson[$heroTime][$heroScene] ?? $heroJson[$heroTime]['fine'] ?? [];
    $heroConfig = array_merge([
        'initialImage' => 'hero_hiru_bg_02.jpg',
        'videoFile' => 'hero_hiru_bg_02.mp4',
        'playbackSpeed' => 0.3,
        'brightness' => 1,
    ], is_array($heroSceneConfig) ? $heroSceneConfig : []);
    $heroConfig['time'] = $heroTime;
    $heroConfig['scene'] = $heroScene;
    
    // 最新のお知らせを取得
    $latestNews = getNewsList(3);

    // クライアント紹介スライド（data/client-intro.json から読み込み）
    $clientIntroSlides = getClientIntroSlides();

    require INCLUDES_PATH . '/header.php';
?>
<?php
$heroBrightness = (float)($heroConfig['brightness'] ?? 1);
$heroTime = $heroConfig['time'];
$heroScene = $heroConfig['scene'];
$heroConfigForJs = [
    'time' => $heroTime,
    'scene' => $heroScene,
    'initialImage' => asset('images/hero/' . ($heroConfig['initialImage'] ?? 'hero_hiru_bg_02.jpg')),
    'videoFile' => asset('images/hero/' . ($heroConfig['videoFile'] ?? 'hero_hiru_bg_02.mp4')),
    'playbackSpeed' => (float)($heroConfig['playbackSpeed'] ?? 0.3),
    'brightness' => $heroBrightness,
];
?>
<script type="application/json" id="hero-config"><?= json_encode($heroConfigForJs, JSON_UNESCAPED_SLASHES) ?></script>
<!-- Hero Section -->
<section class="hero hero-time-<?= h($heroTime) ?> hero-scene-<?= h($heroScene) ?>" id="hero" data-hero-playback-speed="<?= h((string)(float)($heroConfig['playbackSpeed'] ?? 0.3)) ?>" data-hero-time="<?= h($heroTime) ?>" data-hero-scene="<?= h($heroScene) ?>" style="--hero-brightness: <?= h((string)$heroBrightness) ?>">
    <div class="hero-bg hero-bg-placeholder" style="background-image: url('<?= h($heroConfigForJs['initialImage']) ?>');" aria-hidden="true"></div>
    <div class="hero-video-wrap" aria-hidden="true">
        <video class="hero-video" src="<?= h($heroConfigForJs['videoFile']) ?>" preload="auto" muted playsinline loop autoplay></video>
    </div>
    <button type="button" class="hero-tap-to-play" id="hero-tap-to-play" aria-label="動画を再生" hidden>
        <span class="hero-tap-to-play-icon" aria-hidden="true"></span>
        <span class="hero-tap-to-play-text">タップして再生</span>
    </button>
    <div class="hero-pattern"></div>
    <div class="hero-rain-effect" aria-hidden="true"></div>
    <div class="hero-progress" id="hero-progress" aria-hidden="true">
        <div class="hero-progress-bar" style="--hero-progress: 0;"></div>
    </div>
    <div class="hero-content">
        <h1 class="hero-title">
            クリエイティブの力で、<br>
            インターネットを便利に楽しく
        </h1>
        <p class="hero-desc">
            私たちはクライアントと共にインターネット自体、インターネットを使って<br class="br-pc-only">世の中を便利に楽しくしていく企業です。
        </p>
        <div class="hero-buttons">
            <a href="/contact" class="btn btn-primary btn-lg">
                お問い合わせ
                <svg class="btn-icon" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
            </a>
        </div>
    </div>
    <?php
    $whatHelpId = 'hero-what';
    $whatHelpModifier = 'what-help--hero';
    $whatHelpContent = '<p>このヒーローブロックは天気APIを利用して、<strong>時間帯</strong>（昼・夕方・夜）と<strong>天気</strong>（晴れ・曇り・雨）によって表示が変わります。</p><p>背景の動画・写真は、東京の写真・動画をAIで生成したものです。</p>';
    require INCLUDES_PATH . '/what-help.php';
    ?>
</section>

<!-- 受託サービス 4カード -->
<section class="section section-lg bg-gray">
    <div class="container">
        <div class="section-header">
            <span class="section-title-en">Business</span>
            <h2 class="section-title">受託サービス</h2>
        </div>
        <div class="grid grid-2">
            <a href="/business/web" class="service-card top-business-card animate-on-scroll">
                <span class="top-business-icon" aria-hidden="true"><img src="<?= asset('icons/043-web development.svg') ?>" alt=""></span>
                <h3 class="service-title">Webサイト制作</h3>
                <p class="service-desc">新規・リニューアル・ネットショップに対応。運用しやすさと将来の拡張を見据えた設計から構築まで一貫してご支援します。</p>
            </a>
            <a href="/business/operation" class="service-card top-business-card animate-on-scroll animate-delay-1">
                <span class="top-business-icon" aria-hidden="true"><img src="<?= asset('icons/016-developer.svg') ?>" alt=""></span>
                <h3 class="service-title">Webサイト運営代行</h3>
                <p class="service-desc">更新・記事作成・LP制作・フォーム対応・障害の一次対応・バックアップなど、運用が止まらない体制を整えます。</p>
            </a>
            <a href="/business/marketing" class="service-card top-business-card animate-on-scroll animate-delay-2">
                <span class="top-business-icon" aria-hidden="true"><img src="<?= asset('icons/028-marketing.svg') ?>" alt=""></span>
                <h3 class="service-title">インターネット集客</h3>
                <p class="service-desc">強引なSEOは行いません。解析・コンテンツ改善・広告・導線設計をご提案。できることと期待値をすり合わせて進めます。</p>
            </a>
            <a href="/business/game-dev" class="service-card top-business-card animate-on-scroll animate-delay-3">
                <span class="top-business-icon" aria-hidden="true"><img src="<?= asset('icons/037-smartphone.svg') ?>" alt=""></span>
                <h3 class="service-title">ブラウザゲーム開発</h3>
                <p class="service-desc">プロトタイプ・ミニゲーム・イベント連動・教育用途など。制作したゲームはWebサイトへの組み込みも可能です。</p>
            </a>
        </div>

        <!-- クライアント紹介スライダー（public_ok が true のもののみ表示） -->
        <?php if (!empty($clientIntroSlides)): ?>
        <section class="client-intro-section mt-8" aria-label="クライアントのサービス紹介">
            <h3 class="client-intro-title">クライアントサービス紹介</h3>
            <div class="client-intro-slider embla" id="client-intro-embla">
                <div class="client-intro-viewport embla__viewport" id="client-intro-viewport">
                    <div class="embla__container">
                    <?php foreach ($clientIntroSlides as $i => $slide): ?>
                    <div class="client-intro-slide embla__slide" data-index="<?= $i ?>">
                        <div class="client-intro-slide-inner" style="--client-intro-bg: url('<?= h($slide['back_image']) ?>');">
                            <div class="client-intro-gradient" aria-hidden="true"></div>
                            <div class="client-intro-content">
                                <div class="client-intro-brand">
                                    <div class="client-intro-logo-wrap">
                                        <?php if (!empty($slide['logo_url'])): ?>
                                        <a href="<?= h($slide['logo_url']) ?>" class="client-intro-logo-link" target="_blank" rel="noopener noreferrer">
                                        <?php endif; ?>
                                        <img src="<?= h($slide['logo']) ?>" alt="" class="client-intro-logo" width="140" height="70">
                                        <?php if (!empty($slide['logo_url'])): ?>
                                        </a>
                                        <?php endif; ?>
                                        <p class="client-intro-name"><?= h($slide['client_name']) ?></p>
                                    </div>
                                    <?php if (!empty($slide['description'])): ?>
                                    <p class="client-intro-desc"><?= h($slide['description']) ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="client-intro-back" aria-hidden="true"></div>
                        </div>
                        <div class="client-intro-product">
                            <div class="client-intro-product-label">PICKUP</div>
                            <div class="client-intro-product-inner">
                                <?php if (!empty($slide['product_url'])): ?>
                                <a href="<?= h($slide['product_url']) ?>" class="client-intro-product-link" target="_blank" rel="noopener noreferrer">
                                <?php endif; ?>
                                <?php if (!empty($slide['product_image'])): ?>
                                <div class="client-intro-product-img-wrap">
                                    <img src="<?= h($slide['product_image']) ?>" alt="" class="client-intro-product-img" width="48" height="48">
                                </div>
                                <?php endif; ?>
                                <div class="client-intro-product-text">
                                    <p class="client-intro-product-name"><?= h($slide['product_name']) ?></p>
                                    <p class="client-intro-product-meta">
                                        <span class="client-intro-product-price"><?= h($slide['price']) ?></span>
                                        <span class="client-intro-product-desc"><?= h($slide['product_desc']) ?></span>
                                    </p>
                                </div>
                                <?php if (!empty($slide['product_url'])): ?>
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    </div>
                </div>
                <?php if (count($clientIntroSlides) > 1): ?>
                <div class="client-intro-dots" id="client-intro-dots" role="tablist" aria-label="スライドナビゲーション">
                    <?php for ($i = 0; $i < count($clientIntroSlides); $i++): ?>
                    <button type="button" class="client-intro-dot<?= $i === 0 ? ' is-active' : '' ?>" data-index="<?= $i ?>" role="tab" aria-label="スライド<?= $i + 1 ?>へ" aria-selected="<?= $i === 0 ? 'true' : 'false' ?>"></button>
                    <?php endfor; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>
    </div>
</section>

<!-- オリジナルサービス -->
<section class="section section-lg">
    <div class="container">
        <div class="section-header">
            <span class="section-title-en">Original Services</span>
            <h2 class="section-title">オリジナルサービス</h2>
        </div>
        <p class="section-desc">100人アンケート、見える化メディア、MIYAGI SAKE MARKET</p>
        <div class="text-center mt-6">
            <a href="/services" class="btn btn-primary">オリジナルサービス一覧</a>
        </div>
    </div>
</section>

<!-- 基本的な考え方 -->
<section class="section section-lg bg-gray philosophy-top-section">
    <div class="container">
        <div class="section-header">
            <span class="section-title-en">Philosophy</span>
            <h2 class="section-title">基本的な考え方</h2>
        </div>
        <p class="section-desc section-desc-mb">企業運営・インターネット・クリエイティブ活動について、私たちの基本的な考え方をまとめています。</p>
        <div class="philosophy-top-cards">
            <div class="philosophy-top-card animate-on-scroll">
                <span class="philosophy-top-card-number">01</span>
                <h3 class="philosophy-top-card-title">企業運営について</h3>
                <p class="philosophy-top-card-desc">クライアントが求めるアウトプットを確実に積み重ね、メンバーが得意な業務を発揮できる運営を目指しています。</p>
            </div>
            <div class="philosophy-top-card animate-on-scroll animate-delay-1">
                <span class="philosophy-top-card-number">02</span>
                <h3 class="philosophy-top-card-title">インターネットについて</h3>
                <p class="philosophy-top-card-desc">1995年のインターネットに感じたワクワクと、AIがもたらす新しい可能性。私たちのスタンスをまとめています。</p>
            </div>
            <div class="philosophy-top-card animate-on-scroll animate-delay-2">
                <span class="philosophy-top-card-number">03</span>
                <h3 class="philosophy-top-card-title">クリエイティブ活動について</h3>
                <p class="philosophy-top-card-desc">原理原則を理解すること、時代を理解すること、自分が面白い・便利と思うこと。私たちが大切にしている3点です。</p>
            </div>
        </div>
        <div class="text-center mt-8">
            <a href="/philosophy" class="btn btn-primary">基本的な考え方を見る</a>
        </div>
    </div>
</section>

<!-- 代表メッセージ -->
<section class="top-message-section" id="top-message">
    <div class="top-message-bg" style="background-image: url('<?= asset('images/watasawaminoru_02_wide.jpg') ?>');" aria-hidden="true"></div>
    <div class="top-message-overlay"></div>
    <div class="top-message-content">
        <span class="top-message-label">Message</span>
        <h2 class="top-message-title">代表メッセージ</h2>
        <p class="top-message-desc">創業から15年、Web制作を中心としたクリエイティブ活動で培ったノウハウと技術で、お客様のビジネス推進と世の中を少しでも良くするお手伝いをしています。</p>
        <a href="/message" class="btn btn-primary">代表メッセージ</a>
    </div>
</section>

<!-- 会社情報ミニ（アクセス） -->
<section class="section bg-dark company-mini-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">アクセス</h2>
        </div>
        <p class="company-mini-address"><?= h(COMPANY_INFO['address']) ?></p>
        <p><a href="/about#access" class="btn btn-outline">会社情報・アクセス</a></p>
    </div>
</section>

<!-- News Section -->
<section class="section section-lg">
    <div class="container">
        <div class="section-header">
            <span class="section-title-en">News</span>
            <h2 class="section-title">お知らせ</h2>
        </div>
        
        <div class="news-list">
            <?php if (empty($latestNews)): ?>
            <p class="text-center text-gray">お知らせはありません</p>
            <?php else: ?>
                <?php foreach ($latestNews as $news): ?>
                <a href="/news?slug=<?= h($news['slug']) ?>" class="news-card animate-on-scroll">
                    <div class="news-meta">
                        <span class="news-date"><?= formatDate($news['date']) ?></span>
                        <?= categoryBadge($news['category']) ?>
                    </div>
                    <h3 class="news-title"><?= h($news['title']) ?></h3>
                </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        
        <div class="text-center mt-8">
            <a href="/news" class="btn btn-secondary">
                お知らせ一覧を見る
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section section-lg cta-section">
    <div class="container">
        <div class="cta-content animate-on-scroll">
            <h2 class="cta-title">
                ビジネスの可能性を<br>
                広げませんか？
            </h2>
            <p class="cta-desc">
                まずはお気軽にご相談ください。<br>
                専門スタッフが丁寧にヒアリングいたします。
            </p>
            <div class="cta-buttons">
                <a href="/contact" class="btn btn-primary btn-lg">お問い合わせ</a>
                <a href="tel:<?= h(str_replace('-', '', COMPANY_INFO['tel'])) ?>" class="btn btn-outline btn-lg">
                    <svg class="btn-icon" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                    <?= h(COMPANY_INFO['tel']) ?>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* 会社情報ミニ：白文字・中央寄せ */
.company-mini-section,
.company-mini-section .section-header,
.company-mini-section .section-title,
.company-mini-section .company-mini-address,
.company-mini-section a { color: var(--color-white); }
.company-mini-section .container { text-align: center; }
.company-mini-section .company-mini-address { margin-bottom: var(--space-4); opacity: 0.9; }

/* 基本的な考え方（TOP） */
.philosophy-top-cards { display: grid; gap: var(--space-8); margin-bottom: var(--space-8); }
@media (min-width: 768px) { .philosophy-top-cards { grid-template-columns: repeat(3, 1fr); } }
.philosophy-top-card { padding: var(--space-8); background: var(--color-white); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); transition: box-shadow var(--transition-base), transform var(--transition-base); }
.philosophy-top-card:hover { box-shadow: var(--shadow-md); transform: translateY(-2px); }
.philosophy-top-card-number { font-family: var(--font-en); font-size: var(--text-sm); font-weight: var(--font-semibold); color: var(--color-primary); letter-spacing: 0.05em; display: block; margin-bottom: var(--space-3); }
.philosophy-top-card-title { font-size: var(--text-lg); font-weight: var(--font-semibold); margin-bottom: var(--space-4); line-height: var(--leading-snug); }
.philosophy-top-card-desc { font-size: var(--text-base); color: var(--color-gray-600); line-height: var(--leading-relaxed); }

.top-business-card { text-decoration: none; color: inherit; display: block; }

/* 代表メッセージブロック */
.top-message-section { position: relative; min-height: 360px; display: flex; align-items: center; justify-content: center; padding: var(--space-16) var(--container-padding); overflow: hidden; }
.top-message-bg { position: absolute; inset: 0; background-size: auto 100%; background-position: left center; background-repeat: no-repeat; }
.top-message-overlay { position: absolute; inset: 0; background: rgba(0, 0, 0, 0.35); }
.top-message-content { position: relative; z-index: 1; max-width: 560px; text-align: center; color: var(--color-white); }
.top-message-label { font-family: var(--font-en); font-size: var(--text-sm); font-weight: var(--font-medium); letter-spacing: 0.15em; text-transform: uppercase; color: var(--color-white); display: block; margin-bottom: var(--space-2); }
.top-message-title { font-size: var(--text-3xl); font-weight: var(--font-bold); margin-bottom: var(--space-4); letter-spacing: var(--letter-spacing-heading); color: var(--color-white); }
@media (min-width: 640px) { .top-message-title { font-size: var(--text-4xl); } }
.top-message-desc { font-size: var(--text-base); line-height: var(--leading-relaxed); color: var(--color-white); opacity: 0.95; margin-bottom: var(--space-8); }
.top-message-content .btn-primary { background: var(--color-primary); color: var(--color-white); border-color: transparent; }
.top-message-content .btn-primary:hover { background: var(--color-primary-dark); }

/* News List */
.news-list { display: flex; flex-direction: column; gap: var(--space-4); }
.cta-section { background: var(--gradient-primary); text-align: center; }
.cta-content { max-width: 600px; margin: 0 auto; }
.cta-title { font-size: var(--text-3xl); color: var(--color-white); margin-bottom: var(--space-6); }
@media (min-width: 640px) { .cta-title { font-size: var(--text-4xl); } }
.cta-desc { font-size: var(--text-base); color: rgba(255, 255, 255, 0.9); margin-bottom: var(--space-8); }
.cta-buttons { display: flex; flex-direction: column; gap: var(--space-4); }
@media (min-width: 640px) { .cta-buttons { flex-direction: row; justify-content: center; } }
.cta-section .btn-primary { background: var(--color-white); color: var(--color-primary); }
.cta-section .btn-primary:hover { background: var(--color-gray-100); }
</style>

<?php
    require INCLUDES_PATH . '/footer.php';
}
