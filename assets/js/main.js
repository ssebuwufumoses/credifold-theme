/* CrediFold — Main JavaScript */
(function () {
  'use strict';

  // ── Nav scroll behavior ──────────────────────────────────────
  const header = document.getElementById('site-header');
  if (header) {
    const onScroll = () => {
      header.classList.toggle('scrolled', window.scrollY > 40);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ── Mobile menu ──────────────────────────────────────────────
  const hamburger = document.getElementById('hamburger');
  const mobileNav = document.getElementById('mobile-nav');
  if (hamburger && mobileNav) {
    hamburger.addEventListener('click', () => {
      const isOpen = mobileNav.classList.toggle('open');
      hamburger.classList.toggle('active', isOpen);
      hamburger.setAttribute('aria-expanded', isOpen);
      mobileNav.setAttribute('aria-hidden', !isOpen);
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    // Close on outside click
    document.addEventListener('click', (e) => {
      if (!header.contains(e.target) && !mobileNav.contains(e.target)) {
        mobileNav.classList.remove('open');
        hamburger.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        mobileNav.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
      }
    });

    // Close on escape
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && mobileNav.classList.contains('open')) {
        mobileNav.classList.remove('open');
        hamburger.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        mobileNav.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
        hamburger.focus();
      }
    });
  }

  // ── Scroll animations (Intersection Observer) ────────────────
  const fadeEls = document.querySelectorAll('.fade-up');
  if (fadeEls.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );
    fadeEls.forEach((el) => observer.observe(el));
  } else {
    // Fallback: show all
    fadeEls.forEach((el) => el.classList.add('is-visible'));
  }

  // ── Smooth anchor scroll ─────────────────────────────────────
  document.querySelectorAll('a[href^="#"]').forEach((link) => {
    link.addEventListener('click', (e) => {
      const id = link.getAttribute('href').slice(1);
      const target = document.getElementById(id);
      if (target) {
        e.preventDefault();
        const navH = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--nav-height'), 10) || 80;
        const top = target.getBoundingClientRect().top + window.scrollY - navH - 16;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

  // ── Contact form handler (AJAX) ──────────────────────────────
  const cfForm = document.getElementById('cf-investigation-form');
  if (cfForm) {
    cfForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const btn = cfForm.querySelector('[type="submit"]');
      const msg = document.getElementById('cf-form-message');
      const original = btn.textContent;

      btn.disabled = true;
      btn.textContent = 'Sending…';

      const data = new FormData(cfForm);
      data.append('action', 'cf_submit_inquiry');
      data.append('nonce', (window.cfData || {}).nonce || '');

      try {
        const res = await fetch((window.cfData || {}).ajaxUrl || '/wp-admin/admin-ajax.php', {
          method: 'POST',
          body: data,
        });
        const json = await res.json();
        if (json.success) {
          cfForm.innerHTML = `<div class="cf-success">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--cf-gold)" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>
            <h3>Inquiry Received</h3>
            <p>We will respond within 24 hours via your preferred channel. Your identity is protected.</p>
          </div>`;
        } else {
          if (msg) { msg.textContent = json.data || 'Something went wrong. Please try again.'; msg.style.display = 'block'; }
          btn.disabled = false;
          btn.textContent = original;
        }
      } catch {
        if (msg) { msg.textContent = 'Network error. Please try again or contact us via WhatsApp.'; msg.style.display = 'block'; }
        btn.disabled = false;
        btn.textContent = original;
      }
    });
  }

  // ── Multi-step form ──────────────────────────────────────────
  const steps = document.querySelectorAll('.form-step');
  const stepIndicators = document.querySelectorAll('.step-indicator');

  function showStep(index) {
    steps.forEach((s, i) => s.classList.toggle('active', i === index));
    stepIndicators.forEach((s, i) => {
      s.classList.toggle('active', i === index);
      s.classList.toggle('done', i < index);
    });
  }

  document.querySelectorAll('[data-next-step]').forEach((btn) => {
    btn.addEventListener('click', () => {
      const current = parseInt(btn.closest('.form-step').dataset.step, 10);
      showStep(current + 1);
    });
  });

  document.querySelectorAll('[data-prev-step]').forEach((btn) => {
    btn.addEventListener('click', () => {
      const current = parseInt(btn.closest('.form-step').dataset.step, 10);
      showStep(current - 1);
    });
  });

  if (steps.length) showStep(0);

})();
