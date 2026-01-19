</main><!-- end main -->

<!-- Footer -->
<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-grid">
            <!-- Brand Column -->
            <div class="footer-brand">
                <h4>Treehouse Therapy Center</h4>
                <p class="tagline">Where progress flows</p>
                <p>Evidence-based ABA therapy helping Minnesota families reach their full potential. We bring joy, growth, and lasting change to children and families throughout the Twin Cities.</p>
            </div>

            <!-- Quick Links -->
            <div class="footer-column">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                    <li><a href="<?php echo home_url('/about'); ?>">About Us</a></li>
                    <li><a href="<?php echo home_url('/services'); ?>">Services</a></li>
                    <li><a href="<?php echo home_url('/careers'); ?>">Careers</a></li>
                    <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="footer-column">
                <h5>Services</h5>
                <ul>
                    <li><a href="<?php echo home_url('/services'); ?>">In-Home Therapy</a></li>
                    <li><a href="<?php echo home_url('/services'); ?>">In-School/Daycare</a></li>
                    <li><a href="<?php echo home_url('/services'); ?>">Parent Training</a></li>
                    <li><a href="<?php echo home_url('/services'); ?>">Community Support</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="footer-column">
                <h5>Contact</h5>
                <ul>
                    <li><a href="tel:6123094135">(612) 309-4135</a></li>
                    <li><a href="mailto:info@treehousetherapymn.com">info@treehousetherapymn.com</a></li>
                    <li>Minneapolis/St. Paul, MN</li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Treehouse Therapy Center LLC. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script>
// Mobile Menu Toggle
function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    if (menu) {
        menu.classList.toggle('active');
    }
}

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            // Close mobile menu
            const menu = document.getElementById('mobileMenu');
            if (menu) menu.classList.remove('active');
        }
    });
});

// Header scroll effect
const header = document.querySelector('.site-header');
let lastScroll = 0;

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }

    lastScroll = currentScroll;
});

// Intersection Observer for scroll animations
document.addEventListener('DOMContentLoaded', function() {
    const animatedElements = document.querySelectorAll('[data-animate]');
    const staggerContainers = document.querySelectorAll('[data-stagger]');

    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -80px 0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    animatedElements.forEach(el => observer.observe(el));
    staggerContainers.forEach(el => observer.observe(el));
});

  // Close when clicking outside (fallback)
  document.addEventListener('click', function (e) {
    if (panel.classList.contains('open') && !panel.contains(e.target) && !toggle.contains(e.target) && !overlay.contains(e.target)) closePanel();
  });
});
</script>

<?php wp_footer(); ?>
</body>
</html>
