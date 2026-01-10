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
                    <h4 class="text-lg font-nunito font-bold mb-4" style="color: var(--primary-orange);">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="<?php echo home_url('/'); ?>" class="text-gray-300 hover:text-white transition-colors">Home</a></li>
                        <li><a href="<?php echo home_url('/about'); ?>" class="text-gray-300 hover:text-white transition-colors">About</a></li>
                        <li><a href="<?php echo home_url('/process'); ?>" class="text-gray-300 hover:text-white transition-colors">Process</a></li>
                        <li><a href="<?php echo home_url('/services'); ?>" class="text-gray-300 hover:text-white transition-colors">Services</a></li>
                        <li><a href="<?php echo home_url('/careers'); ?>" class="text-gray-300 hover:text-white transition-colors">Careers</a></li>
                        <li><a href="<?php echo home_url('/contact'); ?>" class="text-gray-300 hover:text-white transition-colors">Contact</a></li>
                        <li><a href="<?php echo home_url('/locations'); ?>" class="text-gray-300 hover:text-white transition-colors">Locations</a></li>
                    </ul>
                </div>

                <!-- Column 3: Services -->
                <div>
                    <h4 class="text-lg font-nunito font-bold mb-4" style="color: var(--accent-teal);">Our Services</h4>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li><a href="<?php echo home_url('/services'); ?>" class="hover:text-white transition-colors">In-Home ABA Therapy</a></li>
                        <li><a href="<?php echo home_url('/services'); ?>" class="hover:text-white transition-colors">Parent Training</a></li>
                        <li><a href="<?php echo home_url('/services'); ?>" class="hover:text-white transition-colors">School Collaboration</a></li>
                        <li><a href="<?php echo home_url('/services'); ?>" class="hover:text-white transition-colors">Social Skills</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact -->
                <div>
                    <h4 class="text-lg font-nunito font-bold mb-4" style="color: var(--primary-orange);">Contact</h4>
                    <ul class="space-y-3 text-sm">
                        <li>
                            <a href="tel:6123094135" class="text-gray-300 hover:text-white transition-colors">(612) 309-4135</a>
                        </li>
                        <li>
                            <a href="tel:6517657444" class="text-gray-300 hover:text-white transition-colors">(651) 765-7444</a>
                        </li>
                        <li>
                            <a href="mailto:info@treehousetherapymn.com" class="text-gray-300 hover:text-white transition-colors">info@treehousetherapymn.com</a>
                        </li>
                        <li class="text-gray-400">Greater Twin Cities Metro</li>
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
