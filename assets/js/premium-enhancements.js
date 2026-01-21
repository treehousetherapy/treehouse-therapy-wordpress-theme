/**
 * Premium UI Enhancements for Treehouse Therapy Theme
 * Implements modern marketing site interactions and animations
 */

(function() {
    'use strict';

    // Check for reduced motion preference
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // ============================================
    // 1. ENHANCED STICKY HEADER WITH SCROLL STATE
    // ============================================
    function initEnhancedHeader() {
        const header = document.querySelector('.site-header');
        if (!header) return;

        let lastScroll = 0;
        const scrollThreshold = 50;

        function updateHeaderState() {
            const currentScroll = window.scrollY;

            if (currentScroll > scrollThreshold) {
                header.classList.add('header-scrolled');
                header.classList.remove('header-top');
            } else {
                header.classList.remove('header-scrolled');
                header.classList.add('header-top');
            }

            lastScroll = currentScroll;
        }

        window.addEventListener('scroll', updateHeaderState, { passive: true });
        updateHeaderState(); // Initial state
    }

    // ============================================
    // 2. MOBILE MENU WITH FOCUS TRAP & ESC CLOSE
    // ============================================
    function initMobileMenu() {
        const menuBtn = document.querySelector('.mobile-menu-btn');
        const mobileMenu = document.getElementById('mobileMenu');
        const body = document.body;
        
        if (!menuBtn || !mobileMenu) return;

        let focusableElements = [];
        let firstFocusable = null;
        let lastFocusable = null;

        function updateFocusableElements() {
            focusableElements = Array.from(
                mobileMenu.querySelectorAll('a, button, [tabindex]:not([tabindex="-1"])')
            );
            firstFocusable = focusableElements[0];
            lastFocusable = focusableElements[focusableElements.length - 1];
        }

        window.toggleMenu = function() {
            const isOpen = mobileMenu.classList.contains('mobile-menu-open');
            
            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        };

        function openMenu() {
            mobileMenu.classList.add('mobile-menu-open');
            body.classList.add('menu-open');
            menuBtn.setAttribute('aria-expanded', 'true');
            updateFocusableElements();
            
            // Focus first menu item
            setTimeout(() => {
                if (firstFocusable) firstFocusable.focus();
            }, 100);
        }

        function closeMenu() {
            mobileMenu.classList.remove('mobile-menu-open');
            body.classList.remove('menu-open');
            menuBtn.setAttribute('aria-expanded', 'false');
            menuBtn.focus();
        }

        // Focus trap
        mobileMenu.addEventListener('keydown', function(e) {
            if (e.key === 'Tab') {
                if (e.shiftKey) {
                    if (document.activeElement === firstFocusable) {
                        e.preventDefault();
                        lastFocusable.focus();
                    }
                } else {
                    if (document.activeElement === lastFocusable) {
                        e.preventDefault();
                        firstFocusable.focus();
                    }
                }
            }
        });

        // ESC to close
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileMenu.classList.contains('mobile-menu-open')) {
                closeMenu();
            }
        });

        // Close on outside click
        document.addEventListener('click', function(e) {
            if (mobileMenu.classList.contains('mobile-menu-open') &&
                !mobileMenu.contains(e.target) &&
                !menuBtn.contains(e.target)) {
                closeMenu();
            }
        });
    }

    // ============================================
    // 3. HERO HIGHLIGHT ANIMATION
    // ============================================
    function initHeroHighlight() {
        if (prefersReducedMotion) return;

        const highlight = document.querySelector('.hero-chip');
        if (!highlight) return;

        // Trigger animation on load
        setTimeout(() => {
            highlight.classList.add('highlight-animate-in');
        }, 300);
    }

    // ============================================
    // 4. BUTTON MICRO-INTERACTIONS
    // ============================================
    function initButtonInteractions() {
        // Primary CTA buttons
        const ctaButtons = document.querySelectorAll('.btn-primary, .btn-contact, .btn-hero-form, .btn-cta');
        
        ctaButtons.forEach(btn => {
            // Add ripple effect on click
            btn.addEventListener('click', function(e) {
                if (prefersReducedMotion) return;

                const ripple = document.createElement('span');
                ripple.classList.add('btn-ripple');
                
                const rect = btn.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                
                btn.appendChild(ripple);
                
                setTimeout(() => ripple.remove(), 600);
            });
        });
    }

    // ============================================
    // 5. SCROLL-TRIGGERED SECTION REVEALS
    // ============================================
    function initScrollReveal() {
        if (!('IntersectionObserver' in window)) {
            // Fallback: show all elements
            document.querySelectorAll('[data-animate]').forEach(el => {
                el.classList.add('is-visible');
            });
            return;
        }

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (prefersReducedMotion) {
                        entry.target.classList.add('is-visible-instant');
                    } else {
                        entry.target.classList.add('is-visible');
                    }
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        document.querySelectorAll('[data-animate]').forEach(el => {
            revealObserver.observe(el);
        });

        // Stagger children
        const staggerGroups = document.querySelectorAll('[data-stagger]');
        staggerGroups.forEach(group => {
            const children = Array.from(group.children);
            children.forEach((child, index) => {
                if (!prefersReducedMotion) {
                    child.style.transitionDelay = `${index * 0.1}s`;
                }
                child.setAttribute('data-animate', '');
                revealObserver.observe(child);
            });
        });
    }

    // ============================================
    // 6. CARD HOVER EFFECTS
    // ============================================
    function initCardHoverEffects() {
        const cards = document.querySelectorAll('.service-card, .feature-card, .benefit-card, .difference-card, .value-card, .process-step-card');
        
        cards.forEach(card => {
            if (!card.classList.contains('hover-enhanced')) {
                card.classList.add('hover-enhanced');
            }
        });
    }

    // ============================================
    // 7. ROTATING DECORATIVE BADGE
    // ============================================
    function initRotatingBadge() {
        if (prefersReducedMotion) return;

        const badge = document.querySelector('.rotating-badge');
        if (!badge) return;

        // Continuous rotation animation is handled by CSS
        // This just ensures it's visible
        badge.classList.add('badge-active');
    }

    // ============================================
    // 8. LEAD FORM ENHANCEMENTS
    // ============================================
    function initFormEnhancements() {
        const forms = document.querySelectorAll('.hero-lead-form, form[action*="admin-post.php"]');
        
        forms.forEach(form => {
            // Enhanced focus states
            const inputs = form.querySelectorAll('input, select, textarea');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('form-group-focused');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('form-group-focused');
                    
                    // Validation
                    if (this.hasAttribute('required') && !this.value) {
                        this.parentElement.classList.add('form-group-error');
                    } else {
                        this.parentElement.classList.remove('form-group-error');
                    }
                });

                // Real-time validation
                input.addEventListener('input', function() {
                    if (this.parentElement.classList.contains('form-group-error') && this.value) {
                        this.parentElement.classList.remove('form-group-error');
                    }
                });
            });

            // Phone formatting (US format)
            const phoneInputs = form.querySelectorAll('input[type="tel"], input[name*="phone"]');
            phoneInputs.forEach(input => {
                input.addEventListener('input', function(e) {
                    let value = e.target.value.replace(/\D/g, '');
                    if (value.length > 10) value = value.slice(0, 10);
                    
                    if (value.length >= 6) {
                        value = `(${value.slice(0, 3)}) ${value.slice(3, 6)}-${value.slice(6)}`;
                    } else if (value.length >= 3) {
                        value = `(${value.slice(0, 3)}) ${value.slice(3)}`;
                    }
                    
                    e.target.value = value;
                });
            });

            // Form entrance animation
            if (!prefersReducedMotion) {
                setTimeout(() => {
                    form.closest('.hero-form-card')?.classList.add('form-visible');
                }, 500);
            } else {
                form.closest('.hero-form-card')?.classList.add('form-visible');
            }
        });
    }

    // ============================================
    // 9. FLOATING HELP WIDGET
    // ============================================
    function initFloatingWidget() {
        const widget = document.getElementById('floatingHelp');
        if (!widget) return;

        const toggleBtn = widget.querySelector('.floating-help-toggle');
        const panel = widget.querySelector('.floating-help-panel');
        const closeBtn = widget.querySelector('.floating-help-close');

        if (!toggleBtn || !panel) return;

        function openWidget() {
            panel.classList.add('panel-open');
            toggleBtn.setAttribute('aria-expanded', 'true');
            toggleBtn.classList.add('toggle-active');
        }

        function closeWidget() {
            panel.classList.remove('panel-open');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.classList.remove('toggle-active');
        }

        toggleBtn.addEventListener('click', function() {
            const isOpen = panel.classList.contains('panel-open');
            if (isOpen) {
                closeWidget();
            } else {
                openWidget();
            }
        });

        if (closeBtn) {
            closeBtn.addEventListener('click', closeWidget);
        }

        // Close on ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && panel.classList.contains('panel-open')) {
                closeWidget();
            }
        });

        // Close on outside click
        document.addEventListener('click', function(e) {
            if (!widget.contains(e.target) && panel.classList.contains('panel-open')) {
                closeWidget();
            }
        });
    }

    // ============================================
    // 10. NAV ACTIVE STATE
    // ============================================
    function initNavActiveState() {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');
        
        navLinks.forEach(link => {
            const linkPath = new URL(link.href).pathname;
            if (linkPath === currentPath || (currentPath === '/' && linkPath === '/')) {
                link.classList.add('nav-link-active');
            }
        });
    }

    // ============================================
    // INITIALIZE ALL ENHANCEMENTS
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        initEnhancedHeader();
        initMobileMenu();
        initHeroHighlight();
        initButtonInteractions();
        initScrollReveal();
        initCardHoverEffects();
        initRotatingBadge();
        initFormEnhancements();
        initFloatingWidget();
        initNavActiveState();

        // Add loaded class to body for CSS transitions
        setTimeout(() => {
            document.body.classList.add('page-loaded');
        }, 100);
    });

    // Re-initialize on dynamic content changes
    window.treehouseEnhancements = {
        reinitCards: initCardHoverEffects,
        reinitForms: initFormEnhancements,
        reinitScrollReveal: initScrollReveal
    };

})();
