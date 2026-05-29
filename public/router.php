<?php
/**
 * PHP 組み込みサーバー用ルーター（.htaccess のリライトを再現）
 * 使い方（リポジトリルートで）: php -S wp.localhost:8080 -t public public/router.php
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/') ?: '/';

// 実在するファイル・ディレクトリはそのまま配信
if ($uri !== '/' && $uri !== '') {
    $path = __DIR__ . $uri;
    if (file_exists($path) && !is_dir($path)) {
        return false;
    }
}

$_GET['page'] = '';
$_GET['slug'] = '';

switch ($uri) {
    case '/':
        break;
    case '/about':
        $_GET['page'] = 'about';
        break;
    case '/business':
        $_GET['page'] = 'business';
        break;
    case '/services':
        $_GET['page'] = 'services';
        break;
    case '/philosophy':
        $_GET['page'] = 'philosophy';
        break;
    case '/message':
        $_GET['page'] = 'message';
        break;
    case '/message/watasawaminoru':
        $_GET['page'] = 'message';
        $_GET['slug'] = 'watasawaminoru';
        break;
    case '/news':
        $_GET['page'] = 'news';
        break;
    case '/contact':
        $_GET['page'] = 'contact';
        break;
    case '/privacy':
        $_GET['page'] = 'privacy';
        break;
    case '/terms':
        $_GET['page'] = 'terms';
        break;
    case '/admin/icons':
        $_GET['page'] = 'admin-icons';
        break;
    case '/internal/client-services':
        $_GET['page'] = 'internal-client-services';
        break;
    case '/sitemap.xml':
        require __DIR__ . '/sitemap.php';
        return true;
    default:
        if (preg_match('#^/business/([^/]+)$#', $uri, $m)) {
            $_GET['page'] = 'business';
            $_GET['slug'] = $m[1];
        } elseif (preg_match('#^/services/([^/]+)$#', $uri, $m)) {
            $_GET['page'] = 'services';
            $_GET['slug'] = $m[1];
        } elseif (preg_match('#^/news/([^/]+)$#', $uri, $m)) {
            $_GET['page'] = 'news';
            $_GET['slug'] = $m[1];
        } else {
            return false;
        }
        break;
}

require __DIR__ . '/index.php';
return true;
