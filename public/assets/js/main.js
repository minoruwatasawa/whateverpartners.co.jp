/**
 * Whatever Partners Inc. - Main JavaScript
 * インタラクティブな機能とアニメーション
 */

// DOM Ready
document.addEventListener('DOMContentLoaded', () => {
    initHeroVideo();
    initHeroRainCanvas();
    initHeader();
    initMobileNav();
    initBackToTop();
    initScrollAnimations();
    initAIChat();
    initSmoothScroll();
    initWhatHelp();
    initClientIntroSlider();
});

/**
 * Hero Video: data/hero.json の time (hiru/yugata/yoru) + scene (fine/cloud/rainy) に応じた設定を適用
 * iOS 等で自動再生がブロックされた場合は「タップして再生」を表示
 */
function initHeroVideo() {
    const hero = document.getElementById('hero');
    const video = hero?.querySelector('.hero-video');
    const tapOverlay = document.getElementById('hero-tap-to-play');
    if (!hero || !video) return;

    const configEl = document.getElementById('hero-config');
    if (configEl && configEl.textContent) {
        try {
            const config = JSON.parse(configEl.textContent);
            if (config.initialImage || config.videoFile) {
                const bg = hero.querySelector('.hero-bg');
                if (bg && config.initialImage) {
                    bg.style.backgroundImage = `url('${config.initialImage}')`;
                }
                /* src は HTML のままにして iOS の autoplay を有効にする（JS で上書きしない） */
                if (typeof config.playbackSpeed === 'number') {
                    video.playbackRate = config.playbackSpeed;
                }
                if (typeof config.brightness === 'number') {
                    hero.style.setProperty('--hero-brightness', String(config.brightness));
                }
            }
        } catch (_) {}
    }

    const speed = parseFloat(hero.dataset.heroPlaybackSpeed) || 0.3;
    video.playbackRate = video.playbackRate || speed;

    const HERO_COLOR_DELAY = 5;
    let hasReachedFiveSeconds = false;
    let playbackStarted = false;
    const progressWrap = hero.querySelector('.hero-progress');
    const progressBar = hero.querySelector('.hero-progress-bar');

    function startHeroProgressAndReady() {
        if (playbackStarted) return;
        playbackStarted = true;
        hero.classList.add('hero-video-ready');
        video.classList.add('active');
        if (tapOverlay) {
            tapOverlay.setAttribute('hidden', '');
        }

        const startTime = performance.now();
        const tick = () => {
            if (hasReachedFiveSeconds) return;
            const elapsed = (performance.now() - startTime) / 1000;
            const pct = Math.min(100, (elapsed / HERO_COLOR_DELAY) * 100);
            if (progressBar) progressBar.style.setProperty('--hero-progress', String(pct));
            if (elapsed >= HERO_COLOR_DELAY) {
                hasReachedFiveSeconds = true;
                video.classList.add('hero-video-color');
                if (progressWrap) progressWrap.classList.add('hero-progress-done');
                return;
            }
            requestAnimationFrame(tick);
        };
        requestAnimationFrame(tick);
    }

    function showTapToPlay() {
        if (!tapOverlay || playbackStarted) return;
        tapOverlay.removeAttribute('hidden');
    }

    function tryPlay() {
        if (playbackStarted) return;
        video.play().catch(() => showTapToPlay());
    }

    /* 再生開始（autoplay / tryPlay / タップのいずれか）で共通処理 */
    video.addEventListener('play', () => startHeroProgressAndReady(), { once: true });
    video.addEventListener('loadeddata', tryPlay, { once: true });
    video.addEventListener('canplay', tryPlay, { once: true });
    video.addEventListener('canplaythrough', tryPlay, { once: true });
    if (!video.paused) startHeroProgressAndReady();

    var isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent) || (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1);
    var fallbackDelay = isIOS ? 800 : 1500;
    setTimeout(() => {
        if (!playbackStarted && video.paused) showTapToPlay();
    }, fallbackDelay);

    if (tapOverlay) {
        function handleTapToPlay(e) {
            if (playbackStarted) return;
            e.preventDefault();
            e.stopPropagation();
            video.play().catch(() => {});
        }
        tapOverlay.addEventListener('touchstart', handleTapToPlay, { passive: false, once: true });
        tapOverlay.addEventListener('click', handleTapToPlay, { once: true });
    }
}

/**
 * Hero Rain: scene=rainy のとき Canvas で雨粒を斜めに降らせる
 */
function initHeroRainCanvas() {
    const hero = document.getElementById('hero');
    const container = hero?.querySelector('.hero-rain-effect');
    if (!hero || !container || !hero.classList.contains('hero-scene-rainy')) return;

    const canvas = document.createElement('canvas');
    canvas.className = 'hero-rain-canvas';
    container.appendChild(canvas);

    const ctx = canvas.getContext('2d');
    let width = 0;
    let height = 0;
    let animationId = 0;

    const DROP_COUNT = 120;
    const DROP_LEN_MIN = 10;
    const DROP_LEN_MAX = 28;
    const SPEED_MIN = 6;
    const SPEED_MAX = 14;
    const ANGLE_SPREAD = 0.12;

    const drops = [];

    function initDrops() {
        drops.length = 0;
        for (let i = 0; i < DROP_COUNT; i++) {
            drops.push({
                x: Math.random() * (width + 100) - 50,
                y: Math.random() * (height + 200) - 200,
                len: DROP_LEN_MIN + Math.random() * (DROP_LEN_MAX - DROP_LEN_MIN),
                speed: SPEED_MIN + Math.random() * (SPEED_MAX - SPEED_MIN),
                angle: (Math.random() - 0.5) * 2 * ANGLE_SPREAD
            });
        }
    }

    function resize() {
        const rect = container.getBoundingClientRect();
        const dpr = window.devicePixelRatio || 1;
        width = rect.width;
        height = rect.height;
        canvas.width = width * dpr;
        canvas.height = height * dpr;
        canvas.style.width = width + 'px';
        canvas.style.height = height + 'px';
        ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
        initDrops();
    }

    function draw() {
        ctx.clearRect(0, 0, width, height);
        ctx.strokeStyle = 'rgba(255, 255, 255, 0.15)';
        ctx.lineWidth = 1.5;
        ctx.lineCap = 'round';

        for (let i = 0; i < drops.length; i++) {
            const d = drops[i];
            const vx = d.speed * Math.sin(d.angle);
            const vy = d.speed * Math.cos(d.angle);
            const x2 = d.x + d.len * Math.sin(d.angle);
            const y2 = d.y + d.len * Math.cos(d.angle);

            ctx.beginPath();
            ctx.moveTo(d.x, d.y);
            ctx.lineTo(x2, y2);
            ctx.stroke();

            d.x += vx;
            d.y += vy;

            if (d.y > height + 50) {
                d.y = -20;
                d.x = Math.random() * (width + 100) - 50;
            }
            if (d.x > width + 50) d.x = -20;
            if (d.x < -50) d.x = width + 20;
        }

        animationId = requestAnimationFrame(draw);
    }

    resize();
    draw();

    const ro = new ResizeObserver(() => {
        resize();
    });
    ro.observe(container);

    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            cancelAnimationFrame(animationId);
        } else {
            draw();
        }
    });
}

/**
 * Header Scroll Effects
 */
function initHeader() {
    const header = document.getElementById('site-header');
    if (!header) return;

    let lastScrollY = window.scrollY;
    let ticking = false;

    const updateHeader = () => {
        const currentScrollY = window.scrollY;

        // スクロール方向を検出
        if (currentScrollY > lastScrollY && currentScrollY > 100) {
            header.classList.add('hidden');
        } else {
            header.classList.remove('hidden');
        }

        // スクロール位置でシャドウを追加
        if (currentScrollY > 10) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

        lastScrollY = currentScrollY;
        ticking = false;
    };

    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(updateHeader);
            ticking = true;
        }
    });
}

/**
 * Mobile Navigation
 */
function initMobileNav() {
    const menuToggle = document.getElementById('menu-toggle');
    const mobileNav = document.getElementById('mobile-nav');
    if (!menuToggle || !mobileNav) return;

    const toggleMenu = () => {
        menuToggle.classList.toggle('active');
        mobileNav.classList.toggle('active');
        document.body.classList.toggle('menu-open');
    };

    menuToggle.addEventListener('click', toggleMenu);

    // メニューリンクをクリックしたら閉じる
    const navLinks = mobileNav.querySelectorAll('.mobile-nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            menuToggle.classList.remove('active');
            mobileNav.classList.remove('active');
            document.body.classList.remove('menu-open');
        });
    });

    // ESCキーで閉じる
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileNav.classList.contains('active')) {
            toggleMenu();
        }
    });
}

/**
 * Back to Top Button
 */
function initBackToTop() {
    const backToTop = document.getElementById('back-to-top');
    if (!backToTop) return;

    let ticking = false;

    const updateButton = () => {
        if (window.scrollY > 300) {
            backToTop.classList.add('visible');
        } else {
            backToTop.classList.remove('visible');
        }
        ticking = false;
    };

    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(updateButton);
            ticking = true;
        }
    });

    backToTop.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

/**
 * Scroll Animations
 */
function initScrollAnimations() {
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    if (animatedElements.length === 0) return;

    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -100px 0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    animatedElements.forEach(el => observer.observe(el));
}

/**
 * AI Chat Widget
 */
function initAIChat() {
    const widget = document.getElementById('ai-chat-widget');
    const toggle = document.getElementById('ai-chat-toggle');
    const panel = document.getElementById('ai-chat-panel');
    const close = document.getElementById('ai-chat-close');
    const input = document.getElementById('ai-chat-input');
    const send = document.getElementById('ai-chat-send');
    const messages = document.getElementById('ai-chat-messages');

    if (!toggle || !panel) return;

    const basePath = document.querySelector('script[src*="main.js"]')?.src?.replace(/\/js\/main\.js.*$/, '') || '';
    const getSoundUrl = (name) => {
        const url = widget?.dataset[name];
        return url ? (url.startsWith('http') || url.startsWith('/') ? url : basePath + '/' + url) : '';
    };

    // AI用SEをプリロード
    ['seClick', 'seClose', 'seThinking', 'seAnswer'].forEach((name) => {
        const src = getSoundUrl(name);
        if (src) {
            const audio = new Audio();
            audio.preload = 'auto';
            audio.src = src;
            audio.load();
        }
    });

    const playSe = (name, options = {}) => {
        const src = getSoundUrl(name);
        if (!src) return null;
        const audio = new Audio(src);
        if (options.loop) audio.loop = true;
        audio.volume = options.volume != null ? options.volume : 0.6;
        audio.play().catch(() => {});
        return audio;
    };

    let thinkingAudio = null;

    // パネルの開閉
    toggle.addEventListener('click', () => {
        const wasActive = panel.classList.contains('active');
        panel.classList.toggle('active');
        if (panel.classList.contains('active')) {
            playSe('seClick');
            input?.focus();
        } else if (wasActive) {
            playSe('seClose', { volume: 0.1 });
        }
    });

    close?.addEventListener('click', () => {
        playSe('seClose', { volume: 0.1 });
        panel.classList.remove('active');
    });

    // メッセージ送信
    const sendMessage = async () => {
        const text = input?.value.trim();
        if (!text || !messages) return;

        // ユーザーメッセージを追加
        addMessage(text, 'user');
        input.value = '';

        // タイピングインジケーターを表示・思考中SEをループ再生
        const typingId = showTypingIndicator();
        if (thinkingAudio) {
            thinkingAudio.pause();
            thinkingAudio.currentTime = 0;
        }
        thinkingAudio = playSe('seThinking', { loop: true, volume: 0.03 });

        try {
            const response = await getAIResponse(text);
            if (thinkingAudio) {
                thinkingAudio.pause();
                thinkingAudio.currentTime = 0;
                thinkingAudio = null;
            }
            removeTypingIndicator(typingId);
            playSe('seAnswer', { volume: 0.4 });
            addAiMessage(response.reply, text, response.references);
        } catch (error) {
            if (thinkingAudio) {
                thinkingAudio.pause();
                thinkingAudio.currentTime = 0;
                thinkingAudio = null;
            }
            removeTypingIndicator(typingId);
            addMessage('申し訳ございません。エラーが発生しました。もう一度お試しください。', 'ai');
        }
    };

    send?.addEventListener('click', sendMessage);
    input?.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });

    // メッセージを追加する関数
    function addMessage(text, type) {
        const messageEl = document.createElement('div');
        messageEl.className = type === 'user' ? 'ai-message user-message' : 'ai-message';
        messageEl.innerHTML = `<p>${escapeHtml(text)}</p>`;
        messages.appendChild(messageEl);
        messages.scrollTop = messages.scrollHeight;
    }

    // 代表に関する質問かどうか（代表メッセージへのリンクを出す判定用）
    function isAboutRepresentative(userText) {
        const keywords = /代表|代表取締役|考え方|メッセージ|渡沢|経営方針|思い|ビジョン/;
        return keywords.test(userText);
    }

    // 簡易Markdown（**太字** *斜体* 改行）をHTMLに変換。XSS対策のため必ずescapeHtmlの後に実行する
    function renderMarkdown(escapedText) {
        return escapedText
            .replace(/\*\*(.+?)\*\*/g, '<strong>$1</strong>')
            .replace(/\*(.+?)\*/g, '<em>$1</em>')
            .replace(/\n/g, '<br>');
    }

    // AIメッセージを追加（Markdown表示・代表リンク・参考ページ・フェードイン）
    function addAiMessage(text, userText, references) {
        const messageEl = document.createElement('div');
        messageEl.className = 'ai-message ai-message-enter';
        const escaped = escapeHtml(text);
        const html = renderMarkdown(escaped);
        messageEl.innerHTML = `<p>${html}</p>`;
        if (isAboutRepresentative(userText)) {
            messageEl.innerHTML += '<p class="ai-message-ref"><a href="/?page=message">代表メッセージ</a>もご覧ください。</p>';
        }
        if (references && references.length > 0) {
            const refLinks = references.map(r => `<a href="${escapeHtml(r.url)}">${escapeHtml(r.title)}</a>`).join('、');
            messageEl.innerHTML += `<p class="ai-message-ref">参考：${refLinks}</p>`;
        }
        messages.appendChild(messageEl);
        const userMessages = messages.querySelectorAll('.user-message');
        const lastUserMessage = userMessages[userMessages.length - 1];
        if (lastUserMessage) {
            const userRect = lastUserMessage.getBoundingClientRect();
            const messagesRect = messages.getBoundingClientRect();
            const top = Math.max(0, messages.scrollTop + (userRect.top - messagesRect.top) - 10);
            messages.scrollTo({ top, behavior: 'smooth' });
        } else {
            messages.scrollTop = messages.scrollHeight;
        }
    }

    let typingLongWaitTimeout = null;

    // タイピングインジケーター
    function showTypingIndicator() {
        const id = 'typing-' + Date.now();
        if (typingLongWaitTimeout) {
            clearTimeout(typingLongWaitTimeout);
            typingLongWaitTimeout = null;
        }
        const indicator = document.createElement('div');
        indicator.id = id;
        indicator.className = 'ai-message typing-indicator';
        indicator.innerHTML = '<p class="typing-indicator-text">回答を考えています<span class="dots"><span>.</span><span>.</span><span>.</span></span></p><div class="ai-typing-progress" aria-hidden="true"><span class="ai-typing-progress-bar"></span></div>';
        messages.appendChild(indicator);
        messages.scrollTop = messages.scrollHeight;

        typingLongWaitTimeout = setTimeout(() => {
            typingLongWaitTimeout = null;
            const el = document.getElementById(id);
            const textEl = el?.querySelector('.typing-indicator-text');
            if (textEl) {
                textEl.textContent = '回答を考えています...（もうしばらくお待ちください）';
            }
        }, 8000);

        return id;
    }

    function removeTypingIndicator(id) {
        if (typingLongWaitTimeout) {
            clearTimeout(typingLongWaitTimeout);
            typingLongWaitTimeout = null;
        }
        const indicator = document.getElementById(id);
        indicator?.remove();
    }

    async function getAIResponse(message) {
        const res = await fetch('/api/chat.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ message: message })
        });
        const text = await res.text();
        let data = {};
        try {
            data = JSON.parse(text);
        } catch (e) {
            console.error('[AI chat] Invalid JSON:', text.slice(0, 200));
        }
        const reply = data.reply || data.error || '申し訳ございません。エラーが発生しました。もう一度お試しください。';
        const references = Array.isArray(data.references) ? data.references : [];
        return { reply, references };
    }
}

/**
 * Smooth Scroll for Anchor Links
 */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const target = document.querySelector(targetId);
            if (target) {
                const headerHeight = document.getElementById('site-header')?.offsetHeight || 0;
                const targetPosition = target.getBoundingClientRect().top + window.scrollY - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

/**
 * What? ヘルプコンポーネント: ボタンでポップアップ開閉、外クリックで閉じる。クリック時にSE再生。
 */
function initWhatHelp() {
    const widget = document.getElementById('ai-chat-widget');
    const basePath = document.querySelector('script[src*="main.js"]')?.src?.replace(/\/js\/main\.js.*$/, '') || '';
    const whatClickSrc = widget?.dataset?.seWhatClick
        ? (widget.dataset.seWhatClick.startsWith('http') || widget.dataset.seWhatClick.startsWith('/')
            ? widget.dataset.seWhatClick
            : basePath + '/' + widget.dataset.seWhatClick)
        : '';
    if (whatClickSrc) {
        const preload = new Audio();
        preload.preload = 'auto';
        preload.src = whatClickSrc;
        preload.load();
    }

    const playWhatClick = () => {
        if (!whatClickSrc) return;
        const audio = new Audio(whatClickSrc);
        audio.volume = 0.3;
        audio.play().catch(() => {});
    };

    document.querySelectorAll('.what-help').forEach((wrap) => {
        const btn = wrap.querySelector('.what-help-btn');
        const popup = wrap.querySelector('.what-help-popup');
        if (!btn || !popup) return;

        function open() {
            wrap.classList.add('is-open');
            btn.setAttribute('aria-expanded', 'true');
            popup.setAttribute('aria-hidden', 'false');
        }
        function close() {
            wrap.classList.remove('is-open');
            btn.setAttribute('aria-expanded', 'false');
            popup.setAttribute('aria-hidden', 'true');
        }

        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            playWhatClick();
            btn.classList.add('what-help-btn--clicked');
            btn.addEventListener('animationend', function removeClickAnim() {
                btn.classList.remove('what-help-btn--clicked');
                btn.removeEventListener('animationend', removeClickAnim);
            }, { once: true });
            if (wrap.classList.contains('is-open')) close();
            else open();
        });

        document.addEventListener('click', (e) => {
            if (wrap.classList.contains('is-open') && !wrap.contains(e.target)) close();
        });
    });
}

/**
 * クライアント紹介スライダー: Embla Carousel（loop + 3秒ごとに自動スライド + ドットナビ）
 */
function initClientIntroSlider() {
    const viewport = document.getElementById('client-intro-viewport');
    const dotsContainer = document.getElementById('client-intro-dots');
    if (!viewport) return;
    if (typeof EmblaCarousel === 'undefined') return;

    const autoplay = typeof EmblaCarouselAutoplay !== 'undefined'
        ? EmblaCarouselAutoplay({ delay: 5000 })
        : undefined;
    const plugins = autoplay ? [autoplay] : [];

    const emblaApi = EmblaCarousel(viewport, {
        loop: true,
        align: 'center',
        containScroll: 'trimSnaps',
    }, plugins);

    // ドットの更新（現在のスライドを●に）
    function updateDots() {
        if (!dotsContainer) return;
        const selectedIndex = emblaApi.selectedScrollSnap();
        const dots = dotsContainer.querySelectorAll('.client-intro-dot');
        dots.forEach((dot, i) => {
            const isActive = i === selectedIndex;
            dot.classList.toggle('is-active', isActive);
            dot.setAttribute('aria-selected', isActive);
        });
    }

    // ドットクリック: そのスライドへ移動し、自動スクロールを停止
    if (dotsContainer) {
        dotsContainer.addEventListener('click', (e) => {
            const dot = e.target.closest('.client-intro-dot');
            if (!dot) return;
            const index = parseInt(dot.dataset.index, 10);
            emblaApi.scrollTo(index);
            emblaApi.plugins().autoplay?.stop();
        });
        emblaApi.on('select', updateDots);
        updateDots();
    }

    emblaApi.plugins().autoplay?.play();
}

/**
 * Utility: Escape HTML
 */
function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

/**
 * Utility: Throttle
 */
function throttle(func, limit) {
    let inThrottle;
    return function(...args) {
        if (!inThrottle) {
            func.apply(this, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

/**
 * Utility: Debounce
 */
function debounce(func, wait) {
    let timeout;
    return function(...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), wait);
    };
}

/**
 * Counter Animation
 */
function animateCounter(element, target, duration = 2000) {
    const start = 0;
    const startTime = performance.now();

    const updateCounter = (currentTime) => {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        
        // Easing function (ease-out)
        const easeOut = 1 - Math.pow(1 - progress, 3);
        const current = Math.round(start + (target - start) * easeOut);
        
        element.textContent = current.toLocaleString();

        if (progress < 1) {
            requestAnimationFrame(updateCounter);
        }
    };

    requestAnimationFrame(updateCounter);
}

/**
 * Parallax Effect (軽量版)
 */
function initParallax() {
    const parallaxElements = document.querySelectorAll('[data-parallax]');
    if (parallaxElements.length === 0) return;

    let ticking = false;

    const updateParallax = () => {
        const scrollY = window.scrollY;

        parallaxElements.forEach(el => {
            const speed = parseFloat(el.dataset.parallax) || 0.5;
            const offset = scrollY * speed;
            el.style.transform = `translateY(${offset}px)`;
        });

        ticking = false;
    };

    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
        }
    });
}

/**
 * Lazy Load Images
 */
function initLazyLoad() {
    const lazyImages = document.querySelectorAll('img[data-src]');
    if (lazyImages.length === 0) return;

    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                img.classList.add('loaded');
                observer.unobserve(img);
            }
        });
    }, {
        rootMargin: '50px 0px'
    });

    lazyImages.forEach(img => imageObserver.observe(img));
}

// 追加の初期化
window.addEventListener('load', () => {
    initParallax();
    initLazyLoad();
});
