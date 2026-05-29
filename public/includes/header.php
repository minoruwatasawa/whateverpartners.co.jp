<?php
/**
 * Whatever Partners Inc. - 共通ヘッダー
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= pageTitle($pageTitle ?? '') ?></title>
    <?= metaTags($metaOptions ?? []) ?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-72WFYM8RRE"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-72WFYM8RRE');
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
    
    <!-- Favicon -->
    <link rel="icon" href="<?= asset('images/favicon.ico') ?>" type="image/x-icon">
    <link rel="icon" href="<?= asset('images/favicon.png') ?>" type="image/png">
    <link rel="apple-touch-icon" href="<?= asset('images/favicon.png') ?>">
</head>
<body class="<?= $bodyClass ?? '' ?>">
    <!-- Header -->
    <header class="site-header" id="site-header">
        <div class="header-inner">
            <a href="/" class="site-logo">
                <img src="<?= asset('images/logo_wp.svg') ?>" alt="<?= h(SITE_NAME) ?>" class="logo-mark" width="88" height="43">
            </a>
            
            <nav class="main-nav" id="main-nav">
                <ul class="nav-list">
                    <?php foreach (NAV_ITEMS as $item): ?>
                    <li class="nav-item">
                        <a href="/<?= $item['slug'] ?>" class="nav-link <?= navActiveClass($item['slug']) ?>">
                            <span class="nav-label"><?= h($item['label']) ?></span>
                            <span class="nav-label-en"><?= h($item['label_en']) ?></span>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            
            <button class="menu-toggle" id="menu-toggle" aria-label="メニューを開く">
                <span class="menu-toggle-bar"></span>
                <span class="menu-toggle-bar"></span>
                <span class="menu-toggle-bar"></span>
            </button>
        </div>
    </header>

    <!-- Mobile Navigation -->
    <div class="mobile-nav" id="mobile-nav">
        <div class="mobile-nav-inner">
            <ul class="mobile-nav-list">
                <?php foreach (NAV_ITEMS as $item): ?>
                <li class="mobile-nav-item">
                    <a href="/<?= $item['slug'] ?>" class="mobile-nav-link <?= navActiveClass($item['slug']) ?>">
                        <span class="mobile-nav-label"><?= h($item['label']) ?></span>
                        <span class="mobile-nav-label-en"><?= h($item['label_en']) ?></span>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
            <div class="mobile-nav-footer">
                <div class="mobile-nav-contact">
                    <p class="mobile-nav-tel"><?= h(COMPANY_INFO['tel']) ?></p>
                    <p class="mobile-nav-email"><?= h(COMPANY_INFO['email']) ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="site-main" id="site-main">
    <?php
    $breadcrumbs = getBreadcrumbs();
    if (count($breadcrumbs) > 1):
        $currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? '') . ($_SERVER['REQUEST_URI'] ?? '');
    ?>
    <nav class="breadcrumb-wrap" aria-label="パンくず">
        <div class="container">
        <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
            <?php foreach ($breadcrumbs as $i => $crumb): $pos = $i + 1; ?>
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <?php if ($crumb['url'] !== ''): ?>
                <a href="<?= h($crumb['url']) ?>" itemprop="item"><span itemprop="name"><?= h($crumb['label']) ?></span></a>
                <?php else: ?>
                <span itemprop="name"><?= h($crumb['label']) ?></span>
                <link itemprop="item" href="<?= h($currentUrl) ?>">
                <?php endif; ?>
                <meta itemprop="position" content="<?= $pos ?>">
                <?php if ($i < count($breadcrumbs) - 1): ?><span class="breadcrumb-sep" aria-hidden="true">/</span><?php endif; ?>
            </li>
            <?php endforeach; ?>
        </ol>
        </div>
    </nav>
    <?php endif; ?>
