document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.site-header');
    const menuToggle = document.querySelector('.menu-toggle');
    const globalNav = document.querySelector('.global-nav');

    // ヘッダーをスクロールに連動させる
    const updateHeader = () => {
        header?.classList.toggle('is-scrolled', window.scrollY > 20);
    };

    updateHeader();
    window.addEventListener('scroll', updateHeader, { passive: true });

    // ハンバーガーメニュー
    if (menuToggle && globalNav) {
        const setMenuState = (isOpen) => {
            menuToggle.classList.toggle('is-open', isOpen);
            globalNav.classList.toggle('is-open', isOpen);
            menuToggle.setAttribute('aria-expanded', String(isOpen));
            menuToggle.setAttribute('aria-label', isOpen ? 'メニューを閉じる' : 'メニューを開く');
            document.body.classList.toggle('menu-open', isOpen);
        };

        menuToggle.addEventListener('click', () => {
            setMenuState(!menuToggle.classList.contains('is-open'));
        });

        globalNav.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => setMenuState(false));
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') setMenuState(false);
        });
    }

    // スクロール連動の表示アニメーション
    const revealTargets = document.querySelectorAll('main section, .footer-inner');
    revealTargets.forEach((target) => target.classList.add('js-reveal'));

    if (!('IntersectionObserver' in window)) {
        revealTargets.forEach((target) => target.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('is-visible');
            obs.unobserve(entry.target);
        });
    }, { threshold: 0.12 });

    revealTargets.forEach((target) => observer.observe(target));
});
