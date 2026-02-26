(function () {
  document.documentElement.classList.add('reveal-ready');

  const navToggle = document.querySelector('.nav-toggle');
  const nav = document.querySelector('.site-nav');
  const backdrop = document.querySelector('[data-nav-backdrop]');
  const navLinks = nav ? nav.querySelectorAll('a[href^="#"]') : [];
  const mobileQuery = window.matchMedia('(max-width: 860px)');

  const themeToggle = document.querySelector('.theme-toggle');
  const storedTheme = localStorage.getItem('ag-theme');

  const isMobile = () => mobileQuery.matches;

  const setNavState = (open) => {
    if (!nav || !navToggle) {
      return;
    }

    if (!isMobile()) {
      document.body.classList.remove('nav-open');
      navToggle.setAttribute('aria-expanded', 'false');
      nav.removeAttribute('aria-hidden');
      return;
    }

    document.body.classList.toggle('nav-open', open);
    navToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    nav.setAttribute('aria-hidden', open ? 'false' : 'true');
  };

  const applyTheme = (theme) => {
    const isLight = theme === 'light';
    document.body.classList.toggle('theme-light', isLight);
    themeToggle?.setAttribute('aria-pressed', isLight ? 'true' : 'false');
  };

  if (themeToggle) {
    applyTheme(storedTheme || 'dark');

    themeToggle.addEventListener('click', () => {
      const nextTheme = document.body.classList.contains('theme-light') ? 'dark' : 'light';
      localStorage.setItem('ag-theme', nextTheme);
      applyTheme(nextTheme);
    });
  }

  if (nav && navToggle) {
    navToggle.addEventListener('click', () => {
      const isOpen = document.body.classList.contains('nav-open');
      setNavState(!isOpen);
    });

    backdrop?.addEventListener('click', () => setNavState(false));

    navLinks.forEach((link) => {
      link.addEventListener('click', () => {
        if (isMobile()) {
          setNavState(false);
        }
      });
    });

    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') {
        setNavState(false);
      }
    });

    mobileQuery.addEventListener('change', () => setNavState(false));
    setNavState(false);
  }

  const elements = document.querySelectorAll('[data-reveal]');
  if (!elements.length) {
    return;
  }

  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)');

  const reveal = (element) => {
    const delay = parseInt(element.dataset.revealDelay || '0', 10);
    if (!Number.isNaN(delay) && delay > 0) {
      element.style.animationDelay = `${delay}ms`;
    }
    element.classList.add('is-visible');
  };

  if (prefersReduced.matches) {
    elements.forEach(reveal);
    return;
  }

  if (!('IntersectionObserver' in window)) {
    elements.forEach(reveal);
    return;
  }

  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) {
          return;
        }
        reveal(entry.target);
        obs.unobserve(entry.target);
      });
    },
    {
      threshold: 0.18,
      rootMargin: '0px 0px -10% 0px'
    }
  );

  elements.forEach((element) => observer.observe(element));
})();
