</div><!-- #content -->

<footer id="colophon" class="site-footer relative">
    
    <!-- Wave Divider -->
    <div class="wave-divider">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none" class="w-full h-16">
            <path d="M0,64L48,75C96,85,192,107,288,112C384,117,480,107,576,91C672,75,768,53,864,59C960,64,1056,96,1152,107C1248,117,1344,107,1392,101L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z" 
                  fill="#1A5276"/>
        </svg>
    </div>

    <!-- Footer Content -->
    <div class="footer-content bg-deep-teal text-white py-16 px-4">
        <div class="container-custom">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                
                <!-- Column 1: Brand -->
                <div>
                    <h3 class="text-xl font-nunito font-bold mb-4">Treehouse Therapy Center</h3>
                    <p class="text-cream-bg mb-4 italic">Building a foundation for growth</p>
                    <p class="text-sm text-teal-light">Evidence-based ABA therapy helping Minnesota families reach their full potential.</p>
                </div>

                <!-- Column 2: Quick Links -->
                <div>
                    <h4 class="text-lg font-nunito font-bold mb-4 text-golden-yellow">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="<?php echo home_url('/'); ?>" class="text-cream-bg hover:text-primary-orange">Home</a></li>
                        <li><a href="<?php echo home_url('/about'); ?>" class="text-cream-bg hover:text-primary-orange">About</a></li>
                        <li><a href="<?php echo home_url('/services'); ?>" class="text-cream-bg hover:text-primary-orange">Services</a></li>
                        <li><a href="<?php echo home_url('/contact'); ?>" class="text-cream-bg hover:text-primary-orange">Contact</a></li>
                    </ul>
                </div>

                <!-- Column 3: Services -->
                <div>
                    <h4 class="text-lg font-nunito font-bold mb-4 text-golden-yellow">Our Services</h4>
                    <ul class="space-y-2 text-sm text-cream-bg">
                        <li>In-Home ABA Therapy</li>
                        <li>School Support</li>
                        <li>Community-Based Therapy</li>
                        <li>Parent Training</li>
                    </ul>
                </div>

                <!-- Column 4: Contact -->
                <div>
                    <h4 class="text-lg font-nunito font-bold mb-4 text-golden-yellow">Contact</h4>
                    <ul class="space-y-3 text-sm">
                        <li>
                            <a href="tel:6123094135" class="text-cream-bg hover:text-primary-orange">(612) 309-4135</a>
                        </li>
                        <li>
                            <a href="mailto:info@treehousetherapymn.com" class="text-cream-bg hover:text-primary-orange">info@treehousetherapymn.com</a>
                        </li>
                        <li class="text-cream-bg">Minneapolis/St. Paul, MN</li>
                    </ul>
                </div>

            </div>

            <!-- Bottom Bar -->
            <div class="pt-8 border-t border-teal-light/20 text-center text-sm text-cream-bg">
                &copy; <?php echo date('Y'); ?> Treehouse Therapy Center LLC. All rights reserved.
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
