<?php
/**
 * Whatever Partners Inc. - サイト設定ファイル
 */

// ドキュメントルート = public/。.env は public の親（プロジェクトルート）に配置
$basePath = dirname(__DIR__);
$projectRoot = realpath($basePath . '/..');
$envFile = $projectRoot ? $projectRoot . '/.env' : $basePath . '/../.env';
if ($envFile !== '' && file_exists($envFile) && is_readable($envFile)) {
    $raw = @file_get_contents($envFile);
    if ($raw !== false) {
        $raw = preg_replace('/^\xEF\xBB\xBF/', '', $raw);
        $lines = preg_split('/\r\n|\r|\n/', $raw, -1, PREG_SPLIT_NO_EMPTY);
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '' || strpos($line, '#') === 0) {
                continue;
            }
            if (strpos($line, '=') !== false) {
                [$key, $val] = explode('=', $line, 2);
                $key = trim($key);
                $val = trim(trim($val), " \t\"'");
                if ($key !== '') {
                    putenv("{$key}={$val}");
                }
            }
        }
    }
}

// サイト基本設定
define('SITE_NAME', 'ホワットエバーパートナーズ株式会社');
define('SITE_NAME_EN', 'Whatever Partners Inc.');
define('SITE_DESCRIPTION', '革新的なAIソリューションで、あなたのビジネスを次のステージへ');
define('SITE_URL', 'https://whateverpartners.co.jp');

// パス設定（ドキュメントルート = public/。デプロイ時は public/ のみ配信する想定）
define('BASE_PATH', $basePath);
define('INCLUDES_PATH', BASE_PATH . '/includes');
define('TEMPLATES_PATH', BASE_PATH . '/templates');
define('DATA_PATH', BASE_PATH . '/data');
define('ASSETS_PATH', '/assets');
// 本番用の設定・表示用のデータ（デプロイで上書きしない）。public の外に配置
define('DISPLAY_CONFIG_PATH', $projectRoot ? $projectRoot . '/display-config' : $basePath . '/../display-config');

// 会社情報
define('COMPANY_INFO', [
    'name' => 'ホワットエバーパートナーズ株式会社',
    'name_en' => 'Whatever Partners Inc.',
    'established' => '2011年4月1日',
    'capital' => '1,000万円',
    'ceo' => '代表取締役 渡沢農',
    'address' => '〒101-0025 東京都千代田区神田佐久間町3-20-3 NINEビル2F',
    'tel' => '03-6824-0122',
    'email' => 'info@whateverpartners.co.jp',
    'business' => [
        'Webサイト制作',
        'Webサイト運営代行',
        'インターネット集客',
        'ブラウザゲーム開発'
    ]
]);

// フッター「受託サービス」のリンク（ラベルとURL）
define('FOOTER_BUSINESS_LINKS', [
    ['label' => 'Webサイト制作', 'url' => '/business/web'],
    ['label' => 'Webサイト運営代行', 'url' => '/business/operation'],
    ['label' => 'インターネット集客', 'url' => '/business/marketing'],
    ['label' => 'ブラウザゲーム開発', 'url' => '/business/game-dev'],
]);

// ナビゲーション設定（考え方・お知らせはナビから外す。ページは残す）
define('NAV_ITEMS', [
    ['slug' => '', 'label' => 'ホーム', 'label_en' => 'Home'],
    ['slug' => 'business', 'label' => '受託サービス', 'label_en' => 'Business'],
    ['slug' => 'services', 'label' => 'オリジナルサービス', 'label_en' => 'Services'],
    ['slug' => 'about', 'label' => '会社情報', 'label_en' => 'About'],
    ['slug' => 'contact', 'label' => 'お問い合わせ', 'label_en' => 'Contact']
]);

// SNS設定
define('SNS_LINKS', [
    'twitter' => 'https://twitter.com/whatever_p',
    'linkedin' => 'https://linkedin.com/company/whatever-partners',
    'github' => 'https://github.com/whatever-partners'
]);

// OpenAI API設定（環境変数から読み込む）
define('OPENAI_API_KEY', getenv('OPENAI_API_KEY') ?: '');

// Google Maps API（会社概要の地図用。環境変数 GOOGLE_MAPS_API_KEY 未設定時はフォールバック。本番では環境変数推奨）
define('GOOGLE_MAPS_API_KEY', getenv('GOOGLE_MAPS_API_KEY') ?: 'AIzaSyA_vvtCH-TGxeHK6ojvW4LQRGG2wrzC9G8');

// デバッグモード
define('DEBUG_MODE', true);

// タイムゾーン
date_default_timezone_set('Asia/Tokyo');

// 文字エンコーディング
mb_internal_encoding('UTF-8');
