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
                <span class="inline-flex items-center gap-2 bg-gradient-to-r from-teal-light/20 to-primary-orange/20 text-primary-navy px-4 py-2 rounded-full text-sm font-nunito font-semibold mb-6">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2L14.5 9H22L16 14L18.5 21L12 17L5.5 21L8 14L2 9H9.5L12 2Z" fill="url(#sparkle-grad-php)"/>
                        <defs><linearGradient id="sparkle-grad-php" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" stop-color="#E8912D"/><stop offset="100%" stop-color="#F5B041"/></linearGradient></defs>
                    </svg>
                    Serving the Greater Twin Cities
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
                        <div class="w-16 h-16 mx-auto mb-4">
                            <svg viewBox="0 0 64 64" fill="none">
                                <rect x="28" y="40" width="8" height="18" rx="2" fill="#6E4C1E"/>
                                <circle cx="32" cy="28" r="18" fill="#48C9B0"/>
                                <circle cx="24" cy="24" r="12" fill="#5DADE2"/>
                                <circle cx="40" cy="22" r="14" fill="#48C9B0" opacity="0.9"/>
                                <circle cx="32" cy="18" r="10" fill="#5DADE2" opacity="0.8"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-nunito font-bold text-primary-navy mb-2">95%</h3>
                        <p class="text-text-medium">prefer home-based therapy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Wave Divider: Hero → Insurance -->
<div class="wave-divider bg-gradient-to-br from-cream-bg to-teal-light/10">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" class="w-full h-[60px] md:h-[80px] lg:h-[100px]">
        <path d="M0,64 C288,89 576,108 720,108 C864,108 1152,89 1440,64 L1440,120 L0,120 Z" fill="#FFFFFF"/>
    </svg>
</div>

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

<!-- Wave Divider: Insurance → What is ABA -->
<div class="wave-divider bg-white">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" class="w-full h-[60px] md:h-[80px] lg:h-[100px]">
        <path d="M0,40 C120,60 240,80 360,75 C480,70 600,45 720,50 C840,55 960,90 1080,95 C1200,100 1320,75 1440,60 L1440,120 L0,120 Z" fill="rgba(93, 173, 226, 0.1)"/>
    </svg>
</div>

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
                <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-gradient-to-br from-primary-orange to-golden-yellow flex items-center justify-center">
                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="12" r="10" stroke="white" stroke-width="2"/>
                        <circle cx="12" cy="12" r="6" stroke="white" stroke-width="2"/>
                        <circle cx="12" cy="12" r="2" fill="white"/>
                    </svg>
                </div>
                <h3 class="text-xl font-nunito font-bold mb-3">Builds Communication</h3>
                <p>Finding their voice in ways that work</p>
            </div>
            <div class="card-elevated p-8 text-center">
                <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-gradient-to-br from-teal-light to-seafoam-green flex items-center justify-center">
                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none">
                        <path d="M7 11C7 8.79 8.79 7 11 7H13C15.21 7 17 8.79 17 11V13L19 15V17H5V15L7 13V11Z" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        <path d="M9 17V18C9 19.66 10.34 21 12 21C13.66 21 15 19.66 15 18V17" stroke="white" stroke-width="2"/>
                        <circle cx="8" cy="5" r="2" fill="white"/>
                        <circle cx="16" cy="5" r="2" fill="white"/>
                    </svg>
                </div>
                <h3 class="text-xl font-nunito font-bold mb-3">Develops Social Skills</h3>
                <p>Learning to connect and build friendships</p>
            </div>
            <div class="card-elevated p-8 text-center">
                <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-gradient-to-br from-seafoam-green to-primary-orange flex items-center justify-center">
                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none">
                        <path d="M12 4C14.5 4 16.5 6 16.5 8.5C16.5 10 15.5 11.5 14 12.5L14 14H10L10 12.5C8.5 11.5 7.5 10 7.5 8.5C7.5 6 9.5 4 12 4Z" stroke="white" stroke-width="2"/>
                        <path d="M9 17H15" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        <path d="M10 20H14" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        <path d="M12 4V2" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        <path d="M18 6L20 4" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        <path d="M6 6L4 4" stroke="white" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="text-xl font-nunito font-bold mb-3">Increases Independence</h3>
                <p>Building skills for everyday life</p>
            </div>
            <div class="card-elevated p-8 text-center">
                <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-gradient-to-br from-primary-navy to-deep-teal flex items-center justify-center">
                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none">
                        <path d="M12 4C7.58 4 4 7.58 4 12C4 14.5 5 16.5 6.5 18L6 21L9 19.5C10 19.8 11 20 12 20C16.42 20 20 16.42 20 12C20 7.58 16.42 4 12 4Z" stroke="white" stroke-width="2"/>
                        <path d="M9 12C9 11 9.5 10 11 10C12.5 10 13 11 13 12C13 13 12 13.5 12 14.5" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        <circle cx="12" cy="17" r="1" fill="white"/>
                    </svg>
                </div>
                <h3 class="text-xl font-nunito font-bold mb-3">Emotional Regulation</h3>
                <p>Tools to manage big feelings</p>
            </div>
        </div>
    </div>
</section>

<!-- Wave Divider: What is ABA → Services -->
<div class="wave-divider bg-teal-light/10">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" class="w-full h-[60px] md:h-[80px] lg:h-[100px]">
        <path d="M0,80 Q360,40 720,80 T1440,80 L1440,120 L0,120 Z" fill="#FFFFFF"/>
    </svg>
</div>

<!-- Services Section -->
<section id="services" class="section bg-white">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="text-5xl font-nunito font-bold text-primary-navy mb-4">Our Services</h2>
            <p class="text-xl text-text-medium">Therapy tailored to your family's needs</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="card-elevated p-8">
                <div class="icon-box mb-6">
                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none">
                        <path d="M3 10L12 3L21 10V20C21 20.55 20.55 21 20 21H4C3.45 21 3 20.55 3 20V10Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 21V12H15V21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-nunito font-bold mb-4">In-Home ABA Therapy</h3>
                <p class="text-text-medium mb-6">Personalized therapy in the comfort of your own home</p>
                <a href="<?php echo home_url('/services'); ?>" class="text-primary-orange font-semibold">Learn more →</a>
            </div>
            <div class="card-elevated p-8">
                <div class="icon-box mb-6">
                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none">
                        <path d="M4 19.5C4 18.12 5.12 17 6.5 17H20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.5 2H20V22H6.5C5.12 22 4 20.88 4 19.5V4.5C4 3.12 5.12 2 6.5 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 7H16" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        <path d="M8 11H14" stroke="white" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-nunito font-bold mb-4">School Support Services</h3>
                <p class="text-text-medium mb-6">Collaborative support within educational settings</p>
                <a href="<?php echo home_url('/services'); ?>" class="text-primary-orange font-semibold">Learn more →</a>
            </div>
            <div class="card-elevated p-8">
                <div class="icon-box mb-6">
                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="12" r="10" stroke="white" stroke-width="2"/>
                        <path d="M2 12H22" stroke="white" stroke-width="2"/>
                        <path d="M12 2C14.5 4.5 16 8 16 12C16 16 14.5 19.5 12 22C9.5 19.5 8 16 8 12C8 8 9.5 4.5 12 2Z" stroke="white" stroke-width="2"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-nunito font-bold mb-4">Community-Based Therapy</h3>
                <p class="text-text-medium mb-6">Real-world skill development in natural settings</p>
                <a href="<?php echo home_url('/services'); ?>" class="text-primary-orange font-semibold">Learn more →</a>
            </div>
        </div>
    </div>
</section>

<!-- Wave Divider: Services → Why Choose Us -->
<div class="wave-divider bg-white">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" class="w-full h-[60px] md:h-[80px] lg:h-[100px]">
        <path d="M0,64 L48,75 C96,85 192,107 288,112 C384,117 480,107 576,91 C672,75 768,53 864,59 C960,64 1056,96 1152,107 C1248,117 1344,107 1392,101 L1440,96 L1440,120 L0,120 Z" fill="rgba(30, 58, 95, 0.05)"/>
    </svg>
</div>

<!-- Why Choose Us -->
<section id="why-choose-us" class="section bg-primary-navy/5">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="text-5xl font-nunito font-bold text-primary-navy mb-6">Why Families Trust Us</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-12 text-center">
            <div>
                <div class="w-20 h-20 bg-gradient-to-br from-primary-orange to-golden-yellow rounded-full mx-auto mb-6 flex items-center justify-center">
                    <svg class="w-10 h-10" viewBox="0 0 24 24" fill="none">
                        <path d="M12 21.35L10.55 20.03C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3C9.24 3 10.91 3.81 12 5.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5C22 12.27 18.6 15.36 13.45 20.03L12 21.35Z" fill="white"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-nunito font-bold mb-4">Compassion</h3>
                <p class="text-text-medium">Empathy and genuine care for each family's journey</p>
            </div>
            <div>
                <div class="w-20 h-20 bg-gradient-to-br from-teal-light to-seafoam-green rounded-full mx-auto mb-6 flex items-center justify-center">
                    <svg class="w-10 h-10" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2L14.5 9H22L16 14L18.5 21L12 17L5.5 21L8 14L2 9H9.5L12 2Z" fill="white"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-nunito font-bold mb-4">Excellence</h3>
                <p class="text-text-medium">Highest standards with ongoing training</p>
            </div>
            <div>
                <div class="w-20 h-20 bg-gradient-to-br from-seafoam-green to-primary-orange rounded-full mx-auto mb-6 flex items-center justify-center">
                    <svg class="w-10 h-10" viewBox="0 0 24 24" fill="none">
                        <path d="M12 22C12 22 4 18 4 12V6L12 2L20 6V12C20 18 12 22 12 22Z" stroke="white" stroke-width="2" fill="none"/>
                        <path d="M12 8V14" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        <path d="M9 11L12 14L15 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="12" cy="18" r="1" fill="white"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-nunito font-bold mb-4">Growth</h3>
                <p class="text-text-medium">Celebrating every milestone with belief in potential</p>
            </div>
        </div>
    </div>
</section>

<!-- Wave Divider: Why Choose Us → Process -->
<div class="wave-divider bg-primary-navy/5">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" class="w-full h-[60px] md:h-[80px] lg:h-[100px]">
        <path d="M0,64 C288,89 576,108 720,108 C864,108 1152,89 1440,64 L1440,120 L0,120 Z" fill="#FFFFFF"/>
    </svg>
</div>

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

<!-- Wave Divider: Process → CTA -->
<div class="wave-divider bg-white">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" class="w-full h-[60px] md:h-[80px] lg:h-[100px]">
        <path d="M0,60 C240,90 480,100 720,80 C960,60 1200,40 1440,60 L1440,120 L0,120 Z" fill="#1E3A5F" opacity="0.3"/>
        <path d="M0,80 C360,100 720,90 1080,100 C1260,105 1380,95 1440,90 L1440,120 L0,120 Z" fill="#1E3A5F" opacity="0.5"/>
        <path d="M0,100 C480,85 960,110 1440,95 L1440,120 L0,120 Z" fill="#1E3A5F"/>
    </svg>
</div>

<!-- CTA Section -->
<section id="cta" class="section bg-gradient-to-r from-primary-navy to-deep-teal text-white">
    <div class="container-custom text-center">
        <h2 class="text-5xl font-nunito font-bold mb-6">Ready to Get Started?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Contact us today to learn how we can support your family's journey.</p>

        <div class="flex flex-wrap justify-center gap-6">
            <a href="tel:6123094135" class="btn bg-white text-primary-navy hover:bg-cream-bg btn-lg inline-flex items-center gap-2">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                    <path d="M22 16.92V19.92C22 20.48 21.56 20.93 21 20.99C20.68 21.02 20.35 21.04 20 21.04C10.61 21.04 3 13.43 3 4.04C3 3.69 3.02 3.36 3.05 3.04C3.11 2.48 3.56 2.04 4.12 2.04H7.12C7.62 2.04 8.06 2.41 8.12 2.91C8.18 3.48 8.29 4.03 8.46 4.56C8.6 5 8.49 5.47 8.17 5.8L6.71 7.26C8.4 10.27 10.8 12.67 13.81 14.36L15.27 12.9C15.6 12.58 16.07 12.47 16.51 12.61C17.04 12.78 17.59 12.89 18.16 12.95C18.66 13.01 19.03 13.45 19.03 13.95V16.95L22 16.92Z" fill="currentColor"/>
                </svg>
                (612) 309-4135
            </a>
            <a href="<?php echo home_url('/contact'); ?>" class="btn btn-outline border-2 border-white text-white hover:bg-white hover:text-primary-navy btn-lg">
                Contact Us
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
