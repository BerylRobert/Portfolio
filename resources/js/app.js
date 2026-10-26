
document.addEventListener('DOMContentLoaded', () => {
    // ---- 1. MENU HAMBURGER ----
    const toggle = document.getElementById('menuToggle');
    const menu = document.getElementById('mobileMenu');
    const icon = document.getElementById('menuIcon');

    if (toggle && menu) {
        toggle.addEventListener('click', () => {
            const isOpen = menu.classList.toggle('hidden') === false;
            toggle.setAttribute('aria-expanded', String(isOpen));
            icon.classList.toggle('bi-list', !isOpen);
            icon.classList.toggle('bi-x-lg', isOpen);
        });
    }

    // ---- 2. MUNCUL SAAT SCROLL ----
    const revealEls = document.querySelectorAll('.reveal');

    if (revealEls.length > 0) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) return;

                    const el = entry.target;
                    el.classList.add('is-visible');
                    observer.unobserve(el);

                    // Setelah animasi selesai, lepas class-nya supaya efek hover kartu normal lagi
                    setTimeout(() => {
                        el.classList.remove('reveal', 'is-visible');
                        el.style.transitionDelay = '';
                    }, 1000);
                });
            },
            { threshold: 0.12 }
        );

        revealEls.forEach((el) => observer.observe(el));
    }

    // ---- 3. VALIDASI FORM KONTAK ----
    const form = document.getElementById('contactForm');

    if (form) {
        const rules = {
            name: (v) => v.trim().length >= 2,
            email: (v) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v.trim()),
            message: (v) => v.trim().length >= 10,
        };
        const success = document.getElementById('formSuccess');
        const error = document.getElementById('formError');

        const setState = (input, valid) => {
            input.classList.toggle('is-invalid', !valid);
            const msg = input.parentElement.querySelector('[data-error]');
            if (msg) msg.classList.toggle('hidden', valid);
        };

        const showAlert = (el, visible) => {
            el.classList.toggle('hidden', !visible);
            el.classList.toggle('flex', visible);
        };

        form.addEventListener('submit', (e) => {
            e.preventDefault();

            let allValid = true;
            form.querySelectorAll('[data-rule]').forEach((input) => {
                const valid = rules[input.dataset.rule](input.value);
                setState(input, valid);
                if (!valid) allValid = false;
            });

            showAlert(success, allValid);
            showAlert(error, !allValid);

            if (allValid) {
                form.reset();
                setTimeout(() => showAlert(success, false), 4000);
            } else {
                setTimeout(() => showAlert(error, false), 3500);
            }
        });

        // Hilangkan merah begitu isian diperbaiki
        form.addEventListener('input', (e) => {
            const input = e.target;
            if (input.classList.contains('is-invalid')) {
                setState(input, rules[input.dataset.rule](input.value));
            }
        });
    }
});