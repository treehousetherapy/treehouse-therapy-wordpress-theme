/**
 * Scroll Animations for Treehouse Therapy Theme
 */

(function() {
    'use strict';

    // Scroll Animation Observer
    function initScrollAnimations() {
        // Support both old (.animate-on-scroll) and new ([data-animate]) selectors
        const animatedElements = document.querySelectorAll('.animate-on-scroll, [data-animate]');
        
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Add both classes for compatibility
                        entry.target.classList.add('visible');
                        entry.target.classList.add('animated');
                        
                        // Also animate staggered children
                        if (entry.target.hasAttribute('data-stagger')) {
                            entry.target.querySelectorAll('[data-animate]').forEach(child => {
                                child.classList.add('animated');
                            });
                        }

                        // Stagger groups with data-animate-group
                        if (entry.target.hasAttribute('data-animate-group')) {
                            const children = entry.target.children;
                            Array.from(children).forEach((child, index) => {
                                child.style.transitionDelay = (index * 0.1) + 's';
                            });
                        }
                    }
                });
            }, {
                threshold: 0.15,
                rootMargin: '0px 0px -50px 0px'
            });

            animatedElements.forEach(el => observer.observe(el));
        } else {
            // Fallback for browsers without IntersectionObserver
            animatedElements.forEach(el => {
                el.classList.add('visible');
                el.classList.add('animated');
            });
        }
    }

    // Stagger Animation for Lists
    function initStaggerAnimations() {
        const staggerGroups = document.querySelectorAll('[data-stagger]');
        
        staggerGroups.forEach(group => {
            const children = group.children;
            Array.from(children).forEach((child, index) => {
                child.style.transitionDelay = (index * 0.1) + 's';
                child.classList.add('animate-on-scroll');
            });
        });
    }

    // Parallax Effect for Decorative Elements (Optimized)
    function initParallax() {
        const parallaxElements = document.querySelectorAll('[data-parallax]');
        if (parallaxElements.length === 0) return;

        let ticking = false;

        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    const scrolled = window.pageYOffset;
                    parallaxElements.forEach(el => {
                        const speed = el.dataset.parallax || 0.2;
                        const yPos = -(scrolled * speed);
                        el.style.transform = `translateY(${yPos}px)`;
                    });
                    ticking = false;
                });
                ticking = true;
            }
        });
    }

    // Counter Animation
    function animateCounter(el, target, duration = 2000) {
        const start = 0;
        const increment = target / (duration / 16);
        let current = start;

        const timer = setInterval(function() {
            current += increment;
            if (current >= target) {
                el.textContent = target;
                clearInterval(timer);
            } else {
                el.textContent = Math.floor(current);
            }
        }, 16);
    }

    // Initialize Counters on Scroll
    function initCounters() {
        const counters = document.querySelectorAll('[data-counter]');
        
        if (counters.length === 0) return;

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = parseInt(entry.target.dataset.counter);
                    animateCounter(entry.target, target);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });

        counters.forEach(counter => observer.observe(counter));
    }

    // Floating Elements Animation
    function initFloatingElements() {
        const floatingElements = document.querySelectorAll('.floating-element');
        
        floatingElements.forEach((el, index) => {
            const delay = index * 0.2;
            const duration = 3 + (index % 3);
            
            el.style.animationDelay = delay + 's';
            el.style.animationDuration = duration + 's';
        });
    }

    // Testimonial Carousel
    let currentTestimonial = 0;
    let testimonialInterval;

    function initTestimonialCarousel() {
        const slides = document.querySelectorAll('.testimonial-slide');
        const dots = document.querySelectorAll('.testimonial-dot');
        
        if (slides.length === 0) return;

        window.showTestimonial = function(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            slides[index].classList.add('active');
            dots[index].classList.add('active');
            currentTestimonial = index;
        };

        window.changeTestimonial = function(index) {
            showTestimonial(index);
            resetTestimonialInterval();
        };

        window.nextTestimonial = function() {
            const next = (currentTestimonial + 1) % slides.length;
            showTestimonial(next);
        };

        window.prevTestimonial = function() {
            const prev = (currentTestimonial - 1 + slides.length) % slides.length;
            showTestimonial(prev);
        };

        function resetTestimonialInterval() {
            clearInterval(testimonialInterval);
            testimonialInterval = setInterval(nextTestimonial, 6000);
        }

        // Auto-advance every 6 seconds
        testimonialInterval = setInterval(nextTestimonial, 6000);

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') {
                prevTestimonial();
                resetTestimonialInterval();
            } else if (e.key === 'ArrowRight') {
                nextTestimonial();
                resetTestimonialInterval();
            }
        });
    }

    // Form Handling (Visual Only)
    function initForms() {
        const forms = document.querySelectorAll('form');
        
        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const btn = form.querySelector('button[type="submit"]');
                const originalText = btn.innerHTML;
                const originalWidth = btn.offsetWidth;
                
                // Loading state
                btn.style.width = originalWidth + 'px'; // Maintain width
                btn.innerHTML = '<svg class="animate-spin h-5 w-5 text-white mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>';
                btn.disabled = true;
                
                // Simulate success
                setTimeout(() => {
                    btn.innerHTML = 'Message Sent! ✓';
                    btn.classList.add('bg-green-500', 'border-green-500');
                    btn.classList.remove('btn-primary');
                    
                    // Reset form inputs visual state
                    form.querySelectorAll('.form-input').forEach(input => {
                        input.value = '';
                        input.classList.remove('border-gray-200');
                        input.classList.add('border-green-200', 'bg-green-50/50');
                    });

                    // Reset button after delay
                    setTimeout(() => {
                        btn.innerHTML = originalText;
                        btn.disabled = false;
                        btn.classList.remove('bg-green-500', 'border-green-500');
                        btn.classList.add('btn-primary');
                        
                        form.querySelectorAll('.form-input').forEach(input => {
                            input.classList.remove('border-green-200', 'bg-green-50/50');
                            input.classList.add('border-gray-200');
                        });
                    }, 3000);
                }, 1500);
            });
        });
    }

    // Sticky Header Transition
    function initStickyHeader() {
        const header = document.querySelector('[data-sticky-header]');
        if (!header) return;
        
        const scrollThreshold = 50;
        
        function updateHeader() {
            if (window.scrollY > scrollThreshold) {
                header.classList.add('header-scrolled');
            } else {
                header.classList.remove('header-scrolled');
            }
        }
        
        window.addEventListener('scroll', updateHeader, { passive: true });
        updateHeader(); // Initial check
    }

    // Progressive Image Loading
    function initProgressiveImages() {
        const images = document.querySelectorAll('img[data-src]');
        
        if (images.length === 0) return;
        
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.add('img-progressive');
                    
                    img.onload = () => {
                        img.classList.add('loaded');
                        img.classList.remove('img-skeleton');
                    };
                    
                    imageObserver.unobserve(img);
                }
            });
        }, { rootMargin: '50px' });
        
        images.forEach(img => {
            img.classList.add('img-skeleton');
            imageObserver.observe(img);
        });
    }

    // Initialize all animations
    document.addEventListener('DOMContentLoaded', function() {
        initScrollAnimations();
        initStaggerAnimations();
        initParallax();
        initCounters();
        initFloatingElements();
        initTestimonialCarousel();
        initForms();
        initStickyHeader();
        initProgressiveImages();
    });

    // Re-initialize on page resize (debounced)
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            initParallax();
        }, 250);
    });

})();
