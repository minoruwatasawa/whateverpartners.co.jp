<?php
/**
 * Whatever Partners Inc. - 会社概要ページ
 */

$pageMeta = getPageMetaOptions($pageKey);
$pageTitle = $pageMeta['pageTitle'];
$metaOptions = $pageMeta['metaOptions'];
$bodyClass = 'page-about';

require INCLUDES_PATH . '/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <span class="page-title-en">About Us</span>
        <h1 class="page-title">会社概要</h1>
    </div>
</section>

<!-- Company Info Section -->
<section class="section section-lg">
    <div class="container">
        <div class="section-header">
            <span class="section-title-en">Company Information</span>
            <h2 class="section-title">会社情報</h2>
        </div>
        
        <div class="company-info-table animate-on-scroll">
            <table class="info-table">
                <tr>
                    <th>会社名</th>
                    <td>
                        <?= h(COMPANY_INFO['name']) ?><br>
                        <span class="text-gray"><?= h(COMPANY_INFO['name_en']) ?></span>
                    </td>
                </tr>
                <tr>
                    <th>設立</th>
                    <td><?= h(COMPANY_INFO['established']) ?></td>
                </tr>
                <tr>
                    <th>資本金</th>
                    <td><?= h(COMPANY_INFO['capital']) ?></td>
                </tr>
                <tr>
                    <th>代表者</th>
                    <td><?= h(COMPANY_INFO['ceo']) ?></td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td><?= h(COMPANY_INFO['address']) ?></td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><?= h(COMPANY_INFO['tel']) ?></td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td><a href="mailto:<?= h(COMPANY_INFO['email']) ?>"><?= h(COMPANY_INFO['email']) ?></a></td>
                </tr>
                <tr>
                    <th>事業内容</th>
                    <td>
                        <ul class="business-list">
                            <?php foreach (COMPANY_INFO['business'] as $business): ?>
                            <li><?= h($business) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</section>

<!-- Access Section -->
<section class="section section-lg bg-dark text-white access-block-centered" id="access">
    <div class="container">
        <div class="section-header section-header-center">
            <span class="section-title-en section-title-en-white">Access</span>
            <h2 class="section-title">アクセス</h2>
        </div>
        
        <div class="access-content access-content-centered animate-on-scroll">
            <div class="access-map access-map-wrap" id="access-map-wrap" data-lat="35.69745311816636" data-lng="139.77863414593716" data-logo-url="<?= h(asset('images/logo_wp.svg')) ?>" data-address="<?= h(COMPANY_INFO['address']) ?>" data-api-key="<?= h(GOOGLE_MAPS_API_KEY) ?>">
                <div class="map-placeholder" id="access-map-canvas" aria-label="本社所在地の地図" style="min-height: 280px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <p>Google Map</p>
                </div>
            </div>
            
            <div class="access-info">
                <h3 class="access-title"><?= h(COMPANY_INFO['name']) ?></h3>
                <p class="access-address"><?= h(COMPANY_INFO['address']) ?></p>
                <div class="access-routes">
                    <h4>アクセス方法</h4>
                    <ul>
                        <li>JR「神田駅」徒歩約5分</li>
                        <li>都営新宿線「岩本町駅」徒歩約3分</li>
                        <li>東京メトロ丸ノ内線「淡路町駅」徒歩約5分</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="access-content access-content-centered animate-on-scroll">
            <div class="access-map access-map-wrap" id="satellite-a-map-wrap" data-lat="35.69851852458195" data-lng="139.77791040984013" data-logo-url="<?= h(asset('images/logo_wp.svg')) ?>" data-address="〒101-0025 東京都千代田区神田佐久間町3-33 古田土ビル 4F">
                <div class="map-placeholder" id="satellite-a-map-canvas" aria-label="Satellite office A の地図" style="min-height: 280px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <p>Google Map</p>
                </div>
            </div>
            <div class="access-info">
                <h3 class="access-title">Satellite office A</h3>
                <p class="access-address">〒101-0025 東京都千代田区神田佐久間町3-33 古田土ビル 4F</p>
            </div>
        </div>

        <div class="access-content access-content-centered animate-on-scroll">
            <div class="access-map access-map-wrap" id="satellite-b-map-wrap" data-lat="35.69892200661841" data-lng="139.7801665383447" data-logo-url="<?= h(asset('images/logo_wp.svg')) ?>" data-address="〒101-0024 東京都千代田区神田和泉町2-18 美倉ビル 2F">
                <div class="map-placeholder" id="satellite-b-map-canvas" aria-label="Satellite office B の地図" style="min-height: 280px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <p>Google Map</p>
                </div>
            </div>
            <div class="access-info">
                <h3 class="access-title">Satellite office B</h3>
                <p class="access-address">〒101-0024 東京都千代田区神田和泉町2-18 美倉ビル 2F</p>
            </div>
        </div>
    </div>
</section>

<style>
/* アクセスブロック：白文字・中央寄せ */
.access-block-centered .section-header-center { text-align: center; }
.access-block-centered .section-title-en-white { color: rgba(255, 255, 255, 0.85); }
.access-block-centered .section-title,
.access-block-centered .access-title,
.access-block-centered .access-address,
.access-block-centered .access-routes h4,
.access-block-centered .access-routes li { color: var(--color-white); }
.access-block-centered .access-address,
.access-block-centered .access-routes li { color: rgba(255, 255, 255, 0.9); }
.access-block-centered .access-content-centered { max-width: 900px; margin-left: auto; margin-right: auto; }
.access-block-centered .access-content-centered + .access-content-centered { margin-top: var(--space-10); }
@media (min-width: 768px) {
    .access-block-centered .access-content-centered { display: grid; grid-template-columns: 1fr 1fr; align-items: start; gap: var(--space-6); }
}
.access-block-centered .access-info { text-align: center; }
@media (min-width: 768px) { .access-block-centered .access-info { text-align: left; } }
.access-block-centered .access-routes ul { list-style: none; padding-left: 0; }
.access-block-centered .access-routes li::before { content: "・"; margin-right: 0.25em; }

/* 地図エリア（吹き出しはコンテナ基準で配置するため relative） */
.access-map-wrap { position: relative; }
#access-map-canvas,
#satellite-a-map-canvas,
#satellite-b-map-canvas { position: relative; }
/* 吹き出し（OverlayView 用）: doc 最終仕様 */
.access-map-callout { position: absolute; left: 0; top: 0; z-index: 10; pointer-events: auto; }
.access-map-callout-inner {
    position: relative;
    background: var(--color-white);
    color: var(--color-gray-800);
    padding: 10px 14px 12px;
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-md);
    min-width: 160px;
    filter: drop-shadow(0 1px 2px rgba(0,0,0,0.08));
}
.access-map-callout-logo-row { display: flex; align-items: center; gap: 8px; margin-bottom: 6px; }
.access-map-callout-logo { height: 20px; width: auto; display: block; }
.access-map-callout-headoffice, .access-map-callout-label { font-size: 12px; font-weight: 600; letter-spacing: 0.05em; color: var(--color-black); }
.access-map-callout-address { font-size: var(--text-xs); color: var(--color-gray-600); margin: 0; line-height: var(--leading-snug); }
.access-map-callout-close {
    position: absolute;
    top: 8px;
    right: 8px;
    width: 18px;
    height: 18px;
    padding: 0;
    border: none;
    background: transparent;
    font-size: 14px;
    line-height: 1;
    color: var(--color-gray-500);
    cursor: pointer;
}
.access-map-callout-tail {
    position: absolute;
    left: 50%;
    margin-left: -10px;
    width: 0;
    height: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-top: 28px solid var(--color-white);
    filter: drop-shadow(0 1px 1px rgba(0,0,0,0.06));
}

/* Company Info Table */
.company-info-table {
    max-width: 800px;
    margin: 0 auto;
}

.info-table {
    width: 100%;
    border-collapse: collapse;
}

.info-table tr {
    border-bottom: 1px solid var(--color-gray-200);
}

.info-table th,
.info-table td {
    padding: var(--space-5) var(--space-4);
    text-align: left;
    vertical-align: top;
}

.info-table th {
    width: 30%;
    font-size: var(--text-sm);
    font-weight: var(--font-medium);
    color: var(--color-gray-500);
    background: var(--color-gray-50);
}

.info-table td {
    font-size: var(--text-base);
    color: var(--color-gray-800);
}

.info-table a {
    color: var(--color-primary);
}

.business-list {
    list-style: disc;
    padding-left: var(--space-5);
}

.business-list li {
    margin-bottom: var(--space-1);
}

/* Access */
.access-content {
    display: grid;
    gap: var(--space-8);
}

@media (min-width: 768px) {
    .access-content {
        grid-template-columns: 1fr 1fr;
        align-items: start;
    }
}

.map-placeholder {
    aspect-ratio: 4/3;
    background: var(--color-gray-100);
    border-radius: var(--radius-lg);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: var(--color-gray-400);
}

.map-placeholder svg {
    width: 48px;
    height: 48px;
    margin-bottom: var(--space-4);
}

.access-title {
    font-size: var(--text-xl);
    margin-bottom: var(--space-3);
}

.access-address {
    font-size: var(--text-base);
    color: var(--color-gray-600);
    margin-bottom: var(--space-6);
}

.access-routes h4 {
    font-size: var(--text-sm);
    font-weight: var(--font-semibold);
    margin-bottom: var(--space-3);
}

.access-routes ul {
    list-style: disc;
    padding-left: var(--space-5);
}

.access-routes li {
    font-size: var(--text-sm);
    color: var(--color-gray-600);
    margin-bottom: var(--space-2);
}
</style>

<?php if (GOOGLE_MAPS_API_KEY !== ''): ?>
<script>
window.initAccessMap = function() {
    if (typeof google === 'undefined' || !google.maps) return;

    var MAP_ZOOM = 16;
    var TAIL_H = 28;
    var TAIL_W = 20;

    function CalloutOverlay(opts) {
        this.map = opts.map;
        this.position = opts.position;
        this.label = opts.label || '';
        this.address = opts.address || '';
        this.logoUrl = opts.logoUrl || '';
        this.offsetY = opts.offsetY != null ? opts.offsetY : 0;
        this.div = null;
    }
    CalloutOverlay.prototype = Object.create(google.maps.OverlayView.prototype);
    CalloutOverlay.prototype.onAdd = function() {
        var inner = document.createElement('div');
        inner.className = 'access-map-callout-inner';
        var logoRow = document.createElement('div');
        logoRow.className = 'access-map-callout-logo-row';
        if (this.logoUrl) {
            var img = document.createElement('img');
            img.src = this.logoUrl;
            img.alt = '';
            img.className = 'access-map-callout-logo';
            logoRow.appendChild(img);
        }
        if (this.offsetY > 0) inner.style.marginTop = this.offsetY + 'px';
        var labelSpan = document.createElement('span');
        labelSpan.className = this.label === 'HEAD OFFICE' ? 'access-map-callout-headoffice' : 'access-map-callout-label';
        labelSpan.textContent = this.label;
        logoRow.appendChild(labelSpan);
        inner.appendChild(logoRow);
        var addr = document.createElement('p');
        addr.className = 'access-map-callout-address';
        addr.textContent = this.address;
        inner.appendChild(addr);
        var close = document.createElement('button');
        close.type = 'button';
        close.className = 'access-map-callout-close';
        close.setAttribute('aria-label', '閉じる');
        close.textContent = '×';
        var self = this;
        close.addEventListener('click', function() { if (self.div) self.div.style.display = 'none'; });
        inner.appendChild(close);
        var tail = document.createElement('div');
        tail.className = 'access-map-callout-tail';
        tail.setAttribute('aria-hidden', 'true');
        this.div = document.createElement('div');
        this.div.className = 'access-map-callout';
        this.div.appendChild(inner);
        this.div.appendChild(tail);
        this.div.style.display = '';
        var mapDiv = this.map.getDiv();
        if (mapDiv) mapDiv.appendChild(this.div);
    };
    CalloutOverlay.prototype.draw = function() {
        if (!this.div || !this.position) return;
        var proj = this.getProjection();
        if (!proj) return;
        var pos = proj.fromLatLngToContainerPixel(this.position);
        if (!pos) return;
        var tailH = TAIL_H;
        var tailW = TAIL_W;
        var w = this.div.offsetWidth;
        var h = this.div.offsetHeight;
        if (w === 0 || h === 0) {
            this.div.style.left = (pos.x - 80) + 'px';
            this.div.style.top = (pos.y - 120) + 'px';
            return;
        }
        this.div.style.left = (pos.x - w / 2) + 'px';
        this.div.style.top = (pos.y - h - tailH + this.offsetY) + 'px';
    };
    CalloutOverlay.prototype.onRemove = function() {
        if (this.div && this.div.parentNode) this.div.parentNode.removeChild(this.div);
        this.div = null;
    };

    var mapOpts = { zoom: MAP_ZOOM, disableDefaultUI: true, zoomControl: true, styles: [{ featureType: 'poi', stylers: [{ visibility: 'off' }] }] };

    function createLatLng(lat, lng) {
        return new google.maps.LatLng(lat, lng);
    }

    function initOneMap(wrap, canvas, label, offsetY) {
        if (!wrap || !canvas) return;
        var lat = parseFloat(wrap.dataset.lat);
        var lng = parseFloat(wrap.dataset.lng);
        if (isNaN(lat) || isNaN(lng)) return;
        var logoUrl = wrap.dataset.logoUrl || '';
        var address = wrap.dataset.address || '';
        canvas.innerHTML = '';
        canvas.style.display = 'block';
        var center = createLatLng(lat, lng);
        var map = new google.maps.Map(canvas, Object.assign({}, mapOpts, { center: center }));
        new CalloutOverlay({ map: map, position: createLatLng(lat, lng), label: label, address: address, logoUrl: logoUrl, offsetY: offsetY }).setMap(map);
    }

    initOneMap(document.getElementById('access-map-wrap'), document.getElementById('access-map-canvas'), 'HEAD OFFICE', 0);
    initOneMap(document.getElementById('satellite-a-map-wrap'), document.getElementById('satellite-a-map-canvas'), 'Satellite office A', 0);
    initOneMap(document.getElementById('satellite-b-map-wrap'), document.getElementById('satellite-b-map-canvas'), 'Satellite office B', 0);
};
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?= h(GOOGLE_MAPS_API_KEY) ?>&callback=initAccessMap" async defer></script>
<?php endif; ?>

<?php require INCLUDES_PATH . '/footer.php'; ?>
