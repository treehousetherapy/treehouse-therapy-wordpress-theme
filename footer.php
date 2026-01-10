</div><!-- #content -->

<footer id="colophon" class="site-footer relative bg-dark-navy text-white">
    <!-- Footer Content -->
    <div class="py-16 px-4">
        <div class="container-custom">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">

                <!-- Column 1: Brand -->
                <div>
                    <h3 class="text-xl font-nunito font-bold mb-4 text-white">Treehouse Therapy Center</h3>
                    <p class="text-gray-400 mb-4 italic">Helping children soar</p>
                    <p class="text-sm text-gray-400">Evidence-based ABA therapy helping Minnesota families reach their full potential.</p>
                </div>

                <!-- Column 2: Quick Links -->
                <div>
                    <h4 class="text-lg font-nunito font-bold mb-4 text-primary-blue">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="<?php echo home_url('/'); ?>" class="text-gray-300 hover:text-primary-blue transition-colors">Home</a></li>
                        <li><a href="<?php echo home_url('/about'); ?>" class="text-gray-300 hover:text-primary-blue transition-colors">About</a></li>
                        <li><a href="<?php echo home_url('/services'); ?>" class="text-gray-300 hover:text-primary-blue transition-colors">Services</a></li>
                        <li><a href="<?php echo home_url('/contact'); ?>" class="text-gray-300 hover:text-primary-blue transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Column 3: Services -->
                <div>
                    <h4 class="text-lg font-nunito font-bold mb-4 text-primary-purple">Our Services</h4>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li>In-Home ABA Therapy</li>
                        <li>School Support</li>
                        <li>Community-Based Therapy</li>
                        <li>Parent Training</li>
                    </ul>
                </div>

                <!-- Column 4: Contact -->
                <div>
                    <h4 class="text-lg font-nunito font-bold mb-4 text-primary-blue">Contact</h4>
                    <ul class="space-y-3 text-sm">
                        <li>
                            <a href="tel:6123094135" class="text-gray-300 hover:text-primary-blue transition-colors">(612) 309-4135</a>
                        </li>
                        <li>
                            <a href="mailto:info@treehousetherapymn.com" class="text-gray-300 hover:text-primary-blue transition-colors">info@treehousetherapymn.com</a>
                        </li>
                        <li class="text-gray-300">Minneapolis/St. Paul, MN</li>
                    </ul>
                </div>

            </div>

            <!-- Bottom Bar -->
            <div class="pt-8 border-t border-gray-700 text-center text-sm text-gray-400">
                &copy; <?php echo date('Y'); ?> Treehouse Therapy Center LLC. All rights reserved.
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
