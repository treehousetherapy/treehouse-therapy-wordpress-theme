/**
 * Main JavaScript for Treehouse Therapy Theme
 */

(function() {
    'use strict';

    // Mobile Menu Toggle
    function initMobileMenu() {
        const menuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (menuToggle && mobileMenu) {
            menuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                const expanded = menuToggle.getAttribute('aria-expanded') === 'true' || false;
                menuToggle.setAttribute('aria-expanded', !expanded);
            });

            // Close on outside click
            document.addEventListener('click', function(event) {
                if (!mobileMenu.contains(event.target) && !menuToggle.contains(event.target)) {
                    mobileMenu.classList.add('hidden');
                    menuToggle.setAttribute('aria-expanded', 'false');
                }
            });
        }
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

        let lastScroll = 0;
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
            
            lastScroll = currentScroll;
        });
    }

    // Contact Form Handler
    function initContactForm() {
        const forms = document.querySelectorAll('form[action*="admin-post.php"]');
        if (forms.length === 0) return;

        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const formData = new FormData(form);
                if (form.querySelector('[name="action"]')) {
                    formData.append('action', form.querySelector('[name="action"]').value);
                } else {
                    formData.append('action', 'submit_contact_form');
                }

                const submitBtn = form.querySelector('[type="submit"]');
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Sending...';
                submitBtn.disabled = true;

                // Check if treehouseData exists, otherwise use admin-ajax.php
                const ajaxUrl = typeof treehouseData !== 'undefined' ? treehouseData.ajaxUrl : '/wp-admin/admin-ajax.php';

                fetch(ajaxUrl, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        form.innerHTML = '<div class="bg-green-50 border-2 border-green-500 rounded-lg p-6 text-center"><p class="text-green-700 font-semibold text-lg">Thank you! We will be in touch soon.</p><p class="text-green-600 text-sm mt-2">We respond within 24 hours.</p></div>';
                    } else {
                        alert(data.data?.message || 'There was an error. Please try again.');
                        submitBtn.textContent = originalText;
                        submitBtn.disabled = false;
                    }
                })
                .catch(error => {
                    console.error('Form submission error:', error);
                    alert('There was an error. Please try again or contact us directly.');
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                });
            });
        });
    }

    // Initialize on DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
        initMobileMenu();
        initSmoothScroll();
        initHeaderScroll();
        initContactForm();
    });

})();
