<?php
/**
 * Template Name: Locations Page
 * Treehouse Therapy Center - Service Areas Page
 */

get_header();
?>

<!-- Hero Section -->
<section class="section bg-white pt-32 pb-16 overflow-hidden">
    <div class="container-custom">
        <div class="max-w-3xl mx-auto text-center" data-animate="fade-up">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6" style="color: var(--primary-navy);">
                Where We <span class="gradient-text">Serve</span>
            </h1>
            <p class="text-xl" style="color: var(--text-medium);">
                Treehouse Therapy Center provides in-home ABA services throughout the Minneapolis-St. Paul metropolitan area.
            </p>
        </div>
    </div>
</section>

<!-- Wave Divider -->
<div class="wave-divider-curve" style="background: #F5F5F5;">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none" style="width: 100%; height: 60px; display: block; transform: rotate(180deg);">
        <path d="M0,50 C360,80 720,80 1080,50 C1260,35 1380,25 1440,20 L1440,0 L0,0 Z" fill="#FFFFFF"/>
    </svg>
</div>

<!-- Service Areas Grid -->
<section class="section bg-gray-light py-20">
    <div class="container-custom">
        <div class="text-center mb-16" data-animate="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4" style="color: var(--primary-navy);">
                Twin Cities <span class="gradient-text">Service Areas</span>
            </h2>
            <p class="text-lg max-w-2xl mx-auto" style="color: var(--text-medium);">
                We bring ABA therapy to your home, making it convenient for your family.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" data-animate-group>
            <!-- Lakeville -->
            <div class="card p-6" data-animate="fade-up">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: var(--gradient-orange);">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold" style="color: var(--primary-navy);">Lakeville</h3>
                </div>
                <p class="text-sm mb-4" style="color: var(--text-medium);">
                    Our home base. We serve families throughout Lakeville with comprehensive in-home ABA services.
                </p>
                <a href="<?php echo home_url('/contact'); ?>" class="text-sm font-semibold hover:underline" style="color: var(--primary-orange);">
                    Request services →
                </a>
            </div>

            <!-- Apple Valley -->
            <div class="card p-6" data-animate="fade-up">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: var(--gradient-teal);">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold" style="color: var(--primary-navy);">Apple Valley</h3>
                </div>
                <p class="text-sm mb-4" style="color: var(--text-medium);">
                    Serving Apple Valley families with personalized ABA therapy in the comfort of your home.
                </p>
                <a href="<?php echo home_url('/contact'); ?>" class="text-sm font-semibold hover:underline" style="color: var(--primary-orange);">
                    Request services →
                </a>
            </div>

            <!-- Burnsville -->
            <div class="card p-6" data-animate="fade-up">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: var(--gradient-navy);">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold" style="color: var(--primary-navy);">Burnsville</h3>
                </div>
                <p class="text-sm mb-4" style="color: var(--text-medium);">
                    Quality ABA therapy services for Burnsville families, delivered where your child is most comfortable.
                </p>
                <a href="<?php echo home_url('/contact'); ?>" class="text-sm font-semibold hover:underline" style="color: var(--primary-orange);">
                    Request services →
                </a>
            </div>

            <!-- Eagan -->
            <div class="card p-6" data-animate="fade-up">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: var(--gradient-orange);">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold" style="color: var(--primary-navy);">Eagan</h3>
                </div>
                <p class="text-sm mb-4" style="color: var(--text-medium);">
                    Helping Eagan families access evidence-based ABA therapy without leaving home.
                </p>
                <a href="<?php echo home_url('/contact'); ?>" class="text-sm font-semibold hover:underline" style="color: var(--primary-orange);">
                    Request services →
                </a>
            </div>

            <!-- Bloomington -->
            <div class="card p-6" data-animate="fade-up">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: var(--gradient-teal);">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold" style="color: var(--primary-navy);">Bloomington</h3>
                </div>
                <p class="text-sm mb-4" style="color: var(--text-medium);">
                    Comprehensive ABA services for Bloomington children and their families.
                </p>
                <a href="<?php echo home_url('/contact'); ?>" class="text-sm font-semibold hover:underline" style="color: var(--primary-orange);">
                    Request services →
                </a>
            </div>

            <!-- Minneapolis -->
            <div class="card p-6" data-animate="fade-up">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: var(--gradient-navy);">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold" style="color: var(--primary-navy);">Minneapolis</h3>
                </div>
                <p class="text-sm mb-4" style="color: var(--text-medium);">
                    In-home ABA therapy throughout Minneapolis neighborhoods.
                </p>
                <a href="<?php echo home_url('/contact'); ?>" class="text-sm font-semibold hover:underline" style="color: var(--primary-orange);">
                    Request services →
                </a>
            </div>

            <!-- St. Paul -->
            <div class="card p-6" data-animate="fade-up">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: var(--gradient-orange);">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold" style="color: var(--primary-navy);">St. Paul</h3>
                </div>
                <p class="text-sm mb-4" style="color: var(--text-medium);">
                    Serving St. Paul families with caring, individualized ABA therapy.
                </p>
                <a href="<?php echo home_url('/contact'); ?>" class="text-sm font-semibold hover:underline" style="color: var(--primary-orange);">
                    Request services →
                </a>
            </div>

            <!-- Rosemount -->
            <div class="card p-6" data-animate="fade-up">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: var(--gradient-teal);">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold" style="color: var(--primary-navy);">Rosemount</h3>
                </div>
                <p class="text-sm mb-4" style="color: var(--text-medium);">
                    Quality in-home ABA services for Rosemount families.
                </p>
                <a href="<?php echo home_url('/contact'); ?>" class="text-sm font-semibold hover:underline" style="color: var(--primary-orange);">
                    Request services →
                </a>
            </div>

            <!-- Farmington -->
            <div class="card p-6" data-animate="fade-up">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: var(--gradient-navy);">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold" style="color: var(--primary-navy);">Farmington</h3>
                </div>
                <p class="text-sm mb-4" style="color: var(--text-medium);">
                    Bringing ABA therapy to Farmington families in the comfort of home.
                </p>
                <a href="<?php echo home_url('/contact'); ?>" class="text-sm font-semibold hover:underline" style="color: var(--primary-orange);">
                    Request services →
                </a>
            </div>
        </div>
        
        <div class="text-center mt-12" data-animate="fade-up">
            <p class="text-lg mb-4" style="color: var(--text-medium);">
                Don't see your city listed? We may still be able to help!
            </p>
            <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">
                Contact Us to Check Availability
            </a>
        </div>
    </div>
</section>

<!-- Wave Divider -->
<div class="wave-divider-curve" style="background: #FFFFFF;">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none" style="width: 100%; height: 60px; display: block; transform: rotate(180deg);">
        <path d="M0,50 C360,80 720,80 1080,50 C1260,35 1380,25 1440,20 L1440,0 L0,0 Z" fill="#F5F5F5"/>
    </svg>
</div>

<!-- Why In-Home Section -->
<section class="section bg-white py-20">
    <div class="container-custom">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-animate="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6" style="color: var(--primary-navy);">
                    Why <span class="gradient-text">In-Home</span> Therapy?
                </h2>
                <p class="text-lg mb-6" style="color: var(--text-medium);">
                    Research shows that children learn best in familiar environments. By bringing therapy to your home, we help skills generalize to real-life situations.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span style="color: var(--text-medium);"><strong style="color: var(--primary-navy);">Comfortable Environment:</strong> Your child learns in a space they know and feel safe in.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span style="color: var(--text-medium);"><strong style="color: var(--primary-navy);">Real-World Skills:</strong> Practice daily routines in the actual settings where they occur.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span style="color: var(--text-medium);"><strong style="color: var(--primary-navy);">Family Involvement:</strong> Parents can observe and participate, learning techniques to use every day.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span style="color: var(--text-medium);"><strong style="color: var(--primary-navy);">Convenience:</strong> No commute means more time for what matters.</span>
                    </li>
                </ul>
            </div>
            
            <div class="card p-8 text-center" data-animate="fade-up">
                <div class="w-24 h-24 mx-auto mb-6 rounded-full flex items-center justify-center" style="background: var(--gradient-orange);">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4" style="color: var(--primary-navy);">Therapy That Comes to You</h3>
                <p class="mb-6" style="color: var(--text-medium);">
                    We bring experienced therapists and proven techniques right to your doorstep—no extra travel, no disruption to your routine.
                </p>
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">
                    Get Started
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Wave Divider to CTA -->
<div class="wave-divider-curve" style="background: var(--primary-navy);">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none" style="width: 100%; height: 60px; display: block; transform: rotate(180deg);">
        <path d="M0,50 C360,80 720,80 1080,50 C1260,35 1380,25 1440,20 L1440,0 L0,0 Z" fill="#FFFFFF"/>
    </svg>
</div>

<!-- CTA Section -->
<section class="section py-20 text-white text-center" style="background: var(--gradient-navy);">
    <div class="container-custom">
        <div class="max-w-2xl mx-auto" data-animate="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Serving the Twin Cities Community
            </h2>
            <p class="text-xl mb-8 opacity-90">
                Contact us today to see if we serve your area and learn how we can help your family.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary text-lg">
                    Request a Consultation
                </a>
                <a href="tel:6123094135" class="btn" style="background: white; color: var(--primary-navy);">
                    Call (612) 309-4135
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
