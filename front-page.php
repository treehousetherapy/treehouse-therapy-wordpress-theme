<?php
/**
 * Template Name: Homepage
 * The template for displaying the homepage
 */

get_header();
?>

<!-- Hero Section -->
<section id="hero" class="hero-section relative overflow-hidden bg-gradient-to-br from-cream-bg to-teal-light/10 pt-32 pb-20 px-4">
    <div class="container-custom">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="hero-content">
                <span class="inline-block bg-gradient-to-r from-teal-light/20 to-primary-orange/20 text-primary-navy px-4 py-2 rounded-full text-sm font-nunito font-semibold mb-6">
                    ✨ Serving the Greater Twin Cities
                </span>

                <h1 class="text-5xl md:text-6xl lg:text-7xl font-nunito font-bold text-primary-navy mb-6 leading-tight">
                    Building a
                    <span class="gradient-text block">Foundation for Growth</span>
                </h1>

                <p class="text-xl text-text-medium mb-8">
                    Evidence-based ABA therapy delivered in the comfort of your home. Empowering families throughout the Twin Cities.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary btn-lg">
                        Start Your Journey →
                    </a>
                    <a href="<?php echo home_url('/services'); ?>" class="btn btn-secondary btn-lg">
                        Our Services
                    </a>
                </div>
            </div>

            <div class="hero-image">
                <div class="bg-gradient-to-br from-primary-orange to-seafoam-green rounded-3xl p-12 shadow-premium-lg">
                    <div class="bg-white/90 rounded-2xl p-8 text-center">
                        <div class="text-6xl mb-4">🌳</div>
                        <h3 class="text-2xl font-nunito font-bold text-primary-navy mb-2">95%</h3>
                        <p class="text-text-medium">prefer home-based therapy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Insurance Section -->
<section id="insurance" class="section bg-white">
    <div class="container-custom text-center">
        <h2 class="text-4xl font-nunito font-bold text-primary-navy mb-4">Most insurances accepted</h2>
        <p class="text-xl text-text-medium mb-12">We've got you covered :)</p>

        <div class="grid grid-cols-2 md:grid-cols-5 gap-8">
            <div class="p-6 bg-cream-bg rounded-xl"><p class="font-semibold">Blue Cross Blue Shield</p></div>
            <div class="p-6 bg-cream-bg rounded-xl"><p class="font-semibold">Medicaid/MA</p></div>
            <div class="p-6 bg-cream-bg rounded-xl"><p class="font-semibold">HealthPartners</p></div>
            <div class="p-6 bg-cream-bg rounded-xl"><p class="font-semibold">Aetna</p></div>
            <div class="p-6 bg-cream-bg rounded-xl"><p class="font-semibold">Cigna</p></div>
        </div>
    </div>
</section>

<!-- What is ABA Section -->
<section id="what-is-aba" class="section bg-teal-light/10">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-nunito font-bold text-primary-navy mb-6">What is ABA therapy?</h2>
            <p class="text-xl text-text-medium max-w-4xl mx-auto">
                ABA (Applied Behavior Analysis) helps children develop essential skills while reducing challenging behaviors through personalized, play-based learning.
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            <div class="card-elevated p-8 text-center">
                <div class="text-5xl mb-4">🎯</div>
                <h3 class="text-xl font-nunito font-bold mb-3">Builds Communication</h3>
                <p>Finding their voice in ways that work</p>
            </div>
            <div class="card-elevated p-8 text-center">
                <div class="text-5xl mb-4">🤝</div>
                <h3 class="text-xl font-nunito font-bold mb-3">Develops Social Skills</h3>
                <p>Learning to connect and build friendships</p>
            </div>
            <div class="card-elevated p-8 text-center">
                <div class="text-5xl mb-4">💪</div>
                <h3 class="text-xl font-nunito font-bold mb-3">Increases Independence</h3>
                <p>Building skills for everyday life</p>
            </div>
            <div class="card-elevated p-8 text-center">
                <div class="text-5xl mb-4">🧠</div>
                <h3 class="text-xl font-nunito font-bold mb-3">Emotional Regulation</h3>
                <p>Tools to manage big feelings</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="section bg-white">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="text-5xl font-nunito font-bold text-primary-navy mb-4">Our Services</h2>
            <p class="text-xl text-text-medium">Therapy tailored to your family's needs</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="card-elevated p-8">
                <div class="icon-box mb-6"><span class="text-3xl">🏠</span></div>
                <h3 class="text-2xl font-nunito font-bold mb-4">In-Home ABA Therapy</h3>
                <p class="text-text-medium mb-6">Personalized therapy in the comfort of your own home</p>
                <a href="<?php echo home_url('/services'); ?>" class="text-primary-orange font-semibold">Learn more →</a>
            </div>
            <div class="card-elevated p-8">
                <div class="icon-box mb-6"><span class="text-3xl">📚</span></div>
                <h3 class="text-2xl font-nunito font-bold mb-4">School Support Services</h3>
                <p class="text-text-medium mb-6">Collaborative support within educational settings</p>
                <a href="<?php echo home_url('/services'); ?>" class="text-primary-orange font-semibold">Learn more →</a>
            </div>
            <div class="card-elevated p-8">
                <div class="icon-box mb-6"><span class="text-3xl">🌍</span></div>
                <h3 class="text-2xl font-nunito font-bold mb-4">Community-Based Therapy</h3>
                <p class="text-text-medium mb-6">Real-world skill development in natural settings</p>
                <a href="<?php echo home_url('/services'); ?>" class="text-primary-orange font-semibold">Learn more →</a>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section id="why-choose-us" class="section bg-primary-navy/5">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="text-5xl font-nunito font-bold text-primary-navy mb-6">Why Families Trust Us</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-12 text-center">
            <div>
                <div class="w-20 h-20 bg-gradient-to-br from-primary-orange to-golden-yellow rounded-full mx-auto mb-6 flex items-center justify-center text-4xl">😊</div>
                <h3 class="text-2xl font-nunito font-bold mb-4">Compassion</h3>
                <p class="text-text-medium">Empathy and genuine care for each family's journey</p>
            </div>
            <div>
                <div class="w-20 h-20 bg-gradient-to-br from-teal-light to-seafoam-green rounded-full mx-auto mb-6 flex items-center justify-center text-4xl">⭐</div>
                <h3 class="text-2xl font-nunito font-bold mb-4">Excellence</h3>
                <p class="text-text-medium">Highest standards with ongoing training</p>
            </div>
            <div>
                <div class="w-20 h-20 bg-gradient-to-br from-seafoam-green to-primary-orange rounded-full mx-auto mb-6 flex items-center justify-center text-4xl">🌱</div>
                <h3 class="text-2xl font-nunito font-bold mb-4">Growth</h3>
                <p class="text-text-medium">Celebrating every milestone with belief in potential</p>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section id="process" class="section bg-white">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="text-5xl font-nunito font-bold text-primary-navy mb-6">Getting Started is Easy</h2>
        </div>

        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="w-16 h-16 bg-gradient-to-br from-primary-orange to-golden-yellow rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-2xl font-nunito font-bold text-white">1</span>
                </div>
                <h3 class="text-xl font-nunito font-bold mb-4">Reach Out</h3>
                <p class="text-text-medium">Call us or fill out our form</p>
            </div>
            <div>
                <div class="w-16 h-16 bg-gradient-to-br from-primary-orange to-golden-yellow rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-2xl font-nunito font-bold text-white">2</span>
                </div>
                <h3 class="text-xl font-nunito font-bold mb-4">Insurance Verification</h3>
                <p class="text-text-medium">We handle the paperwork</p>
            </div>
            <div>
                <div class="w-16 h-16 bg-gradient-to-br from-primary-orange to-golden-yellow rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-2xl font-nunito font-bold text-white">3</span>
                </div>
                <h3 class="text-xl font-nunito font-bold mb-4">Assessment</h3>
                <p class="text-text-medium">Meet with our BCBA team</p>
            </div>
            <div>
                <div class="w-16 h-16 bg-gradient-to-br from-primary-orange to-golden-yellow rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-2xl font-nunito font-bold text-white">4</span>
                </div>
                <h3 class="text-xl font-nunito font-bold mb-4">Begin Therapy</h3>
                <p class="text-text-medium">Watch the progress unfold</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="cta" class="section bg-gradient-to-r from-primary-navy to-deep-teal text-white">
    <div class="container-custom text-center">
        <h2 class="text-5xl font-nunito font-bold mb-6">Ready to Get Started?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Contact us today to learn how we can support your family's journey.</p>

        <div class="flex flex-wrap justify-center gap-6">
            <a href="tel:6123094135" class="btn bg-white text-primary-navy hover:bg-cream-bg btn-lg">
                📞 (612) 309-4135
            </a>
            <a href="<?php echo home_url('/contact'); ?>" class="btn btn-outline border-2 border-white text-white hover:bg-white hover:text-primary-navy btn-lg">
                Contact Us
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
