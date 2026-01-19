/**
 * Enhanced JavaScript with AOS, Carousel, and Improvements
 * Treehouse Therapy Theme
 */

(function() {
    'use strict';

    // Initialize AOS (Animate On Scroll)
    function initAOS() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-out',
                once: false,
                offset: 100,
                mirror: false
            });
        }
    }

    // Testimonial Carousel - Swiper Implementation
    function initTestimonialCarousel() {
        // Check if Swiper is needed and loaded
        const testimonialSection = document.getElementById('testimonials');
        if (!testimonialSection) return;
        
        // For now, add data-attributes for future Swiper integration
        const cards = testimonialSection.querySelectorAll('.testimonial-card');
        if (cards.length > 0) {
            // Add carousel wrapper if not already present
            const container = testimonialSection.querySelector('[data-carousel]');
            if (!container) {
                console.log('Testimonial carousel: Ready for Swiper integration');
            }
        }
    }

    // Enhanced Mobile Menu Toggle with ARIA
    function initMobileMenu() {
        const menuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        if (menuToggle && mobileMenu) {
            menuToggle.addEventListener('click', function() {
                const isOpen = !mobileMenu.classList.contains('hidden');
                mobileMenu.classList.toggle('hidden');
                mobileMenu.classList.toggle('slideIn');
                menuToggle.setAttribute('aria-expanded', !isOpen);
            });

            // Close menu when a link is clicked
            const menuLinks = mobileMenu.querySelectorAll('a');
            menuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.classList.remove('slideIn');
                    menuToggle.setAttribute('aria-expanded', 'false');
                });
            });

            // Close on outside click
            document.addEventListener('click', function(event) {
                if (!mobileMenu.contains(event.target) && !menuToggle.contains(event.target)) {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.classList.remove('slideIn');
                    menuToggle.setAttribute('aria-expanded', 'false');
                }
            });

            // Close on Escape key
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.classList.remove('slideIn');
                    menuToggle.setAttribute('aria-expanded', 'false');
                }
            });
        }
    }

    // Enhanced Form Validation
    function initFormValidation() {
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                const inputs = form.querySelectorAll('[required]');
                let isValid = true;

                inputs.forEach(input => {
                    if (!input.value.trim()) {
                        isValid = false;
                        input.classList.add('border-error-red');
                    } else {
                        input.classList.remove('border-error-red');
                    }

                    // Email validation
                    if (input.type === 'email') {
                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (!emailRegex.test(input.value)) {
                            isValid = false;
                            input.classList.add('border-error-red');
                        }
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                }
            });
        });
    }

    // Smooth Scroll for Anchor Links
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href === '#') return;

                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }

    // Header Scroll Effect
    function initHeaderScroll() {
        const header = document.getElementById('masthead');
        if (!header) return;

        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 100) {
                header.classList.add('scrolled', 'shadow-md');
            } else {
                header.classList.remove('scrolled', 'shadow-md');
            }
        });
    }

    // Add hover classes for card elevation
    function initCardHovers() {
        const cards = document.querySelectorAll('.card, .card-elevated');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-4px)';
                this.style.boxShadow = '0 20px 60px rgba(30, 58, 95, 0.15)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = this.style.boxShadow.replace('0.15', '0.1');
            });
        });
    }

    // Initialize all on DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
        initAOS();
        initMobileMenu();
        initSmoothScroll();
        initHeaderScroll();
        initFormValidation();
        initCardHovers();
        initTestimonialCarousel();
        
        // Re-init AOS after dynamic content loads
        if (typeof AOS !== 'undefined') {
            AOS.refresh();
        }
    });

    // Re-initialize AOS on window load (for images)
    window.addEventListener('load', function() {
        if (typeof AOS !== 'undefined') {
            AOS.refresh();
        }
    });

})();
