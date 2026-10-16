/**
 * Mounthailand Coffee — Main JavaScript
 * Organized into modular init functions for maintainability.
 */

document.addEventListener('DOMContentLoaded', () => {
    initPreloader();
    initNavbar();
    initMobileNav();
    initScrollSpy();
    initParallax();
    initReveal();
    initAccordion();
    initTestimonials();
    initFloatingBeans();
});

/* ========================================
   PRELOADER
   ======================================== */
function initPreloader() {
    const preloader = document.getElementById('preloader');
    if (!preloader) return;

    const fade = () => preloader.classList.add('fade-out');

    if (document.readyState === 'complete') {
        setTimeout(fade, 400);
    } else {
        window.addEventListener('load', () => setTimeout(fade, 400));
    }
    // Failsafe
    setTimeout(fade, 2500);
}

/* ========================================
   NAVBAR SCROLL EFFECT
   ======================================== */
function initNavbar() {
    const navbar = document.getElementById('navbar');
    if (!navbar) return;

    const onScroll = () => {
        navbar.classList.toggle('navbar-scrolled', window.scrollY > 30);
    };

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
}

/* ========================================
   MOBILE NAVIGATION
   ======================================== */
function initMobileNav() {
    const toggle = document.getElementById('mobile-toggle');
    const menu = document.getElementById('nav-menu');
    if (!toggle || !menu) return;

    const links = document.querySelectorAll('.nav-link, .nav-cta-btn');

    toggle.addEventListener('click', () => {
        const isActive = toggle.classList.toggle('active');
        menu.classList.toggle('active');
        document.body.style.overflow = isActive ? 'hidden' : '';
    });

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            // Close mobile menu
            toggle.classList.remove('active');
            menu.classList.remove('active');
            document.body.style.overflow = '';

            // Smooth scroll to anchor
            const href = link.getAttribute('href');
            if (href && href.startsWith('#')) {
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    const offset = window.innerWidth > 767 ? 80 : 64;
                    window.scrollTo({
                        top: target.getBoundingClientRect().top + window.pageYOffset - offset,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
}

/* ========================================
   SCROLLSPY
   ======================================== */
function initScrollSpy() {
    const sections = document.querySelectorAll('section[id], footer[id]');
    const navLinks = document.querySelectorAll('.nav-link');
    if (!sections.length || !navLinks.length) return;

    const sectionMap = {
        'home': '#home',
        'products': '#products',
        'profile': '#products',
        'gallery': '#products',
        'testimonials': '#testimonials',
        'contact': '#testimonials'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const href = sectionMap[entry.target.id];
                if (href) {
                    navLinks.forEach(l => {
                        l.classList.toggle('active', l.getAttribute('href') === href);
                    });
                }
            }
        });
    }, {
        rootMargin: '-30% 0px -60% 0px',
        threshold: 0
    });

    sections.forEach(s => observer.observe(s));
}

/* ========================================
   PARALLAX HERO
   ======================================== */
function initParallax() {
    const heroBg = document.getElementById('hero-bg');
    if (!heroBg) return;

    let ticking = false;

    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(() => {
                heroBg.style.transform = `translate3d(0, ${window.pageYOffset * 0.3}px, 0)`;
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });
}

/* ========================================
   SCROLL REVEAL
   ======================================== */
function initReveal() {
    const elements = document.querySelectorAll('.reveal');
    if (!elements.length) return;

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                obs.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.08,
        rootMargin: '0px 0px -40px 0px'
    });

    elements.forEach(el => observer.observe(el));
}

/* ========================================
   PRODUCT ACCORDION
   ======================================== */
function initAccordion() {
    const toggles = document.querySelectorAll('.product-accordion-toggle');

    toggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const expanded = toggle.getAttribute('aria-expanded') === 'true';
            toggle.setAttribute('aria-expanded', !expanded);
            const content = toggle.nextElementSibling;
            content.style.maxHeight = expanded ? null : content.scrollHeight + 'px';
        });
    });
}

/* ========================================
   TESTIMONIALS CAROUSEL
   ======================================== */
function initTestimonials() {
    const track = document.getElementById('testimonials-carousel-track');
    if (!track) return;

    const slides = Array.from(track.children);
    const nextBtn = document.querySelector('.carousel-arrow.next');
    const prevBtn = document.querySelector('.carousel-arrow.prev');
    if (!nextBtn || !prevBtn || !slides.length) return;

    let current = 0;
    let autoTimer = null;
    let visible = 1;

    const AUTOPLAY_INTERVAL = 6000; // 6 seconds

    const updateVisible = () => {
        if (window.innerWidth >= 1024) visible = 3;
        else if (window.innerWidth >= 768) visible = 2;
        else visible = 1;
    };

    const maxIdx = () => Math.max(0, slides.length - visible);

    const moveTo = (idx) => {
        const max = maxIdx();
        current = idx < 0 ? max : idx > max ? 0 : idx;
        if (slides[0]) {
            const w = slides[0].getBoundingClientRect().width;
            track.style.transform = `translateX(-${current * w}px)`;
        }
    };

    const startAuto = () => {
        clearInterval(autoTimer);
        autoTimer = setInterval(() => moveTo(current + 1), AUTOPLAY_INTERVAL);
    };

    const pauseAuto = () => {
        clearInterval(autoTimer);
        autoTimer = null;
    };

    const resetAuto = () => {
        pauseAuto();
        startAuto();
    };

    // Event listeners
    window.addEventListener('resize', () => { updateVisible(); moveTo(current); });
    nextBtn.addEventListener('click', () => { moveTo(current + 1); resetAuto(); });
    prevBtn.addEventListener('click', () => { moveTo(current - 1); resetAuto(); });

    // Touch / Swipe support
    let startX = 0;
    let currentX = 0;
    let dragging = false;

    track.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
        dragging = true;
        pauseAuto();
    }, { passive: true });

    track.addEventListener('touchmove', (e) => {
        if (dragging) currentX = e.touches[0].clientX;
    }, { passive: true });

    track.addEventListener('touchend', () => {
        if (!dragging) return;
        dragging = false;
        const diff = startX - currentX;
        if (Math.abs(diff) > 50) {
            moveTo(current + (diff > 0 ? 1 : -1));
        }
        startAuto();
    });

    // Pause on hover
    const wrapper = document.querySelector('.testimonials-carousel-wrapper');
    if (wrapper) {
        wrapper.addEventListener('mouseenter', pauseAuto);
        wrapper.addEventListener('mouseleave', startAuto);
    }

    // Initialize
    updateVisible();
    moveTo(0);
    startAuto();
}

/* ========================================
   FLOATING COFFEE BEANS
   Dynamically generated, pure CSS animation.
   Applied to dedicated containers in Hero, Gallery, CTA.
   ======================================== */
function initFloatingBeans() {
    const BEAN_SVG = `<svg viewBox="0 0 32 40" width="100%" height="100%" fill="none" xmlns="http://www.w3.org/2000/svg">
        <ellipse cx="16" cy="20" rx="14" ry="18" fill="currentColor"/>
        <path d="M16 4C12 12 20 28 16 36" stroke="rgba(15, 15, 15, 0.6)" stroke-width="2.5" stroke-linecap="round"/>
    </svg>`;

    const BEAN_COLORS = ['#C69C6D', '#A87E54', '#8C6239', '#784E38', '#5B3A29'];

    const targets = [
        { id: 'beans-hero', count: 14 },
        { id: 'beans-gallery', count: 14 },
        { id: 'beans-cta', count: 13 }
    ];

    targets.forEach(({ id, count }) => {
        const container = document.getElementById(id);
        if (!container) return;

        // Clear existing beans if any
        container.innerHTML = '';

        // Generate beans
        for (let i = 0; i < count; i++) {
            const bean = document.createElement('div');
            bean.className = 'floating-bean';
            bean.innerHTML = BEAN_SVG;

            // Random size (14–26px)
            const size = Math.random() * 12 + 14;
            bean.style.width = `${size}px`;
            bean.style.height = `${size * 1.25}px`;

            // Random horizontal position (3%–97%)
            bean.style.left = `${Math.random() * 94 + 3}%`;

            // Random upward distance and horizontal drift
            const distance = -(Math.random() * 350 + 750);
            const drift = (Math.random() * 80 - 40);
            bean.style.setProperty('--bean-distance', `${distance}px`);
            bean.style.setProperty('--bean-drift', `${drift}px`);

            // Random animation duration (12–22s)
            const duration = Math.random() * 10 + 12;
            bean.style.animationDuration = `${duration}s`;

            // Random delay (stagger start mid-animation)
            const delay = Math.random() * -duration;
            bean.style.animationDelay = `${delay}s`;

            // Random opacity (0.05–0.12)
            const opacity = (Math.random() * 0.07 + 0.05).toFixed(3);
            bean.style.setProperty('--bean-opacity', opacity);

            // Random rotation angle
            const rotateDeg = `${(Math.random() > 0.5 ? 1 : -1) * (Math.floor(Math.random() * 360) + 180)}deg`;
            bean.style.setProperty('--bean-rotate', rotateDeg);

            // Random color
            const color = BEAN_COLORS[Math.floor(Math.random() * BEAN_COLORS.length)];
            bean.style.color = color;

            container.appendChild(bean);
        }
    });
}
