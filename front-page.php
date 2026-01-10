<?php
/**
 * Template Name: Homepage
 * The template for displaying the homepage
 */

get_header();
?>

<!-- Hero Section -->
<section id="hero" class="hero-section relative overflow-hidden bg-gradient-to-br from-cream-bg to-teal-light/10 pt-32 pb-20 px-4">
    <!-- Static Cloud Graphics (Aviation ABA Style) -->
    <div class="absolute top-20 right-[10%] w-32 h-20 opacity-20 pointer-events-none z-0">
        <svg viewBox="0 0 200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30,60 Q20,40 40,35 Q45,20 65,25 Q80,15 95,25 Q110,20 120,30 Q135,25 145,35 Q165,30 170,45 Q180,50 170,60 Q175,70 165,75 L35,75 Q25,70 30,60 Z" fill="#5DADE2" opacity="0.3"/>
        </svg>
    </div>
    <div class="absolute top-[30%] left-[5%] w-40 h-24 opacity-15 pointer-events-none z-0">
        <svg viewBox="0 0 200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25,65 Q15,45 35,40 Q40,25 60,30 Q75,20 90,30 Q105,25 115,35 Q130,30 140,40 Q160,35 165,50 Q175,55 165,65 Q170,75 160,80 L30,80 Q20,75 25,65 Z" fill="#48C9B0" opacity="0.4"/>
        </svg>
    </div>
    <div class="absolute bottom-32 right-[15%] w-36 h-22 opacity-15 pointer-events-none z-0">
        <svg viewBox="0 0 200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M35,70 Q25,50 45,45 Q50,30 70,35 Q85,25 100,35 Q115,30 125,40 Q140,35 150,45 Q170,40 175,55 Q185,60 175,70 L40,70 Q30,65 35,70 Z" fill="#E8912D" opacity="0.25"/>
        </svg>
    </div>
    
    <!-- Background Blob Shapes - REMOVED (Aviation ABA uses clean, minimal backgrounds) -->
    <!-- 
    <div class="absolute -top-20 -right-20 w-64 h-64 opacity-10 pointer-events-none z-0">
        <svg viewBox="0 0 200 200">
            <defs>
                <linearGradient id="blobGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#48C9B0" stop-opacity="0.6"/>
                    <stop offset="100%" stop-color="#5DADE2" stop-opacity="0.3"/>
                </linearGradient>
            </defs>
            <path d="M44.5,-51.4C59.1,-41.8,73.3,-28.6,77.8,-12.4C82.4,3.8,77.3,23,66.3,37.3C55.3,51.6,38.4,61,20.5,67.1C2.6,73.2,-16.3,75.9,-32.7,70.1C-49.1,64.3,-63,50,-71.2,32.7C-79.4,15.4,-81.9,-4.9,-76.1,-22.7C-70.3,-40.5,-56.2,-55.8,-40.3,-65.1C-24.4,-74.4,-6.7,-77.7,8.5,-73.5C23.7,-69.3,29.9,-61,44.5,-51.4Z" transform="translate(100 100)" fill="url(#blobGrad1)"/>
        </svg>
    </div>
    <div class="absolute -bottom-20 -left-20 w-56 h-56 opacity-8 pointer-events-none z-0">
        <svg viewBox="0 0 200 200">
            <defs>
                <linearGradient id="blobGrad2" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#E8912D" stop-opacity="0.5"/>
                    <stop offset="100%" stop-color="#F5B041" stop-opacity="0.2"/>
                </linearGradient>
            </defs>
            <path d="M39.9,-48.1C52.6,-38.7,64.3,-27.4,69.5,-13.2C74.7,1,73.4,18.1,65.8,31.8C58.2,45.5,44.3,55.8,29,62.4C13.7,69,-3,71.9,-19.5,68.7C-36,65.5,-52.3,56.2,-62.1,42.4C-71.9,28.6,-75.2,10.3,-72.1,-6.5C-69,-23.3,-59.5,-38.6,-46.4,-47.9C-33.3,-57.2,-16.7,-60.5,-1.3,-59C14.1,-57.5,27.2,-57.5,39.9,-48.1Z" transform="translate(100 100)" fill="url(#blobGrad2)"/>
        </svg>
    </div>
    -->

    <!-- Floating Decorative Elements - REMOVED (Aviation ABA doesn't use animated floating elements) -->
    <!-- 
    <div class="floating-element float-slow top-24 left-[5%] w-24 h-16 text-teal-light/10">
        <svg viewBox="0 0 100 60" fill="currentColor">
            <ellipse cx="30" cy="40" rx="20" ry="15"/>
            <ellipse cx="50" cy="35" rx="25" ry="20"/>
            <ellipse cx="75" cy="40" rx="18" ry="14"/>
        </svg>
    </div>
    <div class="floating-element float top-40 right-[8%] w-20 h-14 text-seafoam-green/10">
        <svg viewBox="0 0 100 60" fill="currentColor">
            <ellipse cx="25" cy="35" rx="18" ry="12"/>
            <ellipse cx="50" cy="30" rx="22" ry="18"/>
            <ellipse cx="70" cy="38" rx="15" ry="10"/>
        </svg>
    </div>
    <div class="floating-element drift top-60 left-[12%] w-12 h-20">
        <svg viewBox="0 0 50 80" fill="#48C9B0" opacity="0.15">
            <path d="M25,5 Q45,25 40,50 Q35,70 25,75 Q15,70 10,50 Q5,25 25,5 Z"/>
        </svg>
    </div>
    <div class="floating-element float-reverse bottom-32 right-[15%] w-10 h-16">
        <svg viewBox="0 0 50 80" fill="#5DADE2" opacity="0.12">
            <path d="M25,5 Q45,25 40,50 Q35,70 25,75 Q15,70 10,50 Q5,25 25,5 Z"/>
        </svg>
    </div>
    <div class="floating-element float-slow bottom-20 left-[20%] w-16 h-10 text-golden-yellow/10">
        <svg viewBox="0 0 100 60" fill="currentColor">
            <ellipse cx="50" cy="30" rx="35" ry="22"/>
            <ellipse cx="25" cy="40" rx="20" ry="12"/>
        </svg>
    </div>
    <div class="floating-element drift top-32 right-[25%] w-8 h-14">
        <svg viewBox="0 0 50 80" fill="#48C9B0" opacity="0.1">
            <path d="M25,5 Q45,25 40,50 Q35,70 25,75 Q15,70 10,50 Q5,25 25,5 Z"/>
        </svg>
    </div>
    -->

    <div class="container-custom relative z-10">
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
                    Caring, Individualized
                    <span class="gradient-text block">ABA Therapy</span>
                </h1>

                <p class="text-xl text-text-medium mb-8">
                    We help children with autism thrive through individualized ABA therapy, delivered with heart and care throughout the Twin Cities.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="<?php echo home_url('/services'); ?>" class="btn btn-secondary btn-lg">
                        Our Services
                    </a>
                </div>
            </div>

            <div class="hero-image">
                <div class="hero-form-container">
                    <h3 class="text-2xl font-nunito font-bold text-primary-navy mb-6">Start Your Journey</h3>
                    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" class="space-y-4">
                        <input type="hidden" name="action" value="submit_contact_form">
                        <div>
                            <label class="form-label">Full Name*</label>
                            <input type="text" name="full_name" class="form-input" placeholder="Jane Doe" required>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="form-label">Phone*</label>
                                <input type="tel" name="phone" class="form-input" placeholder="(555) 123-4567" required>
                            </div>
                            <div>
                                <label class="form-label">Email*</label>
                                <input type="email" name="email" class="form-input" placeholder="jane@example.com" required>
                            </div>
                        </div>
                        <div>
                            <label class="form-label">Insurance Provider</label>
                            <input type="text" name="insurance" class="form-input" placeholder="e.g. Blue Cross Blue Shield">
                        </div>
                        <div>
                            <label class="form-label">Message</label>
                            <textarea name="message" class="form-input h-24 resize-none" placeholder="How can we help?"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-full text-lg">
                            Send Message
                        </button>
                        <p class="text-xs text-text-light text-center mt-4">
                            Your information is secure. We'll be in touch within 24 hours.
                        </p>
                    </form>
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
<section id="what-is-aba" class="section bg-teal-light/10 relative overflow-hidden">
    <!-- Static Cloud Graphics -->
    <div class="absolute top-10 right-[8%] w-36 h-20 opacity-15 pointer-events-none">
        <svg viewBox="0 0 200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30,60 Q20,40 40,35 Q45,20 65,25 Q80,15 95,25 Q110,20 120,30 Q135,25 145,35 Q165,30 170,45 Q180,50 170,60 L35,60 Q25,55 30,60 Z" fill="#48C9B0" opacity="0.4"/>
        </svg>
    </div>
    <div class="absolute bottom-20 left-[5%] w-32 h-18 opacity-12 pointer-events-none">
        <svg viewBox="0 0 200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M35,65 Q25,45 45,40 Q50,25 70,30 Q85,20 100,30 Q115,25 125,35 L30,65 Q30,60 35,65 Z" fill="#5DADE2" opacity="0.3"/>
        </svg>
    </div>
    
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
<section id="services" class="section bg-white relative overflow-hidden">
    <!-- Static Cloud Graphics -->
    <div class="absolute top-[15%] left-[3%] w-28 h-16 opacity-10 pointer-events-none">
        <svg viewBox="0 0 200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25,60 Q15,40 35,35 Q40,20 60,25 Q75,15 90,25 Q105,20 115,30 Q130,25 140,35 Q160,30 165,45 L30,60 Q20,55 25,60 Z" fill="#E8912D" opacity="0.3"/>
        </svg>
    </div>
    <div class="absolute bottom-[10%] right-[5%] w-32 h-20 opacity-12 pointer-events-none">
        <svg viewBox="0 0 200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30,65 Q20,45 40,40 Q45,25 65,30 Q80,20 95,30 Q110,25 120,35 Q135,30 145,40 L35,65 Q25,60 30,65 Z" fill="#5DADE2" opacity="0.35"/>
        </svg>
    </div>
    
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

<!-- Wave Divider: Process → Testimonials -->
<div class="wave-divider bg-white">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" class="w-full h-[60px] md:h-[80px] lg:h-[100px]">
        <path d="M0,64 C288,89 576,108 720,108 C864,108 1152,89 1440,64 L1440,120 L0,120 Z" fill="rgba(93, 173, 226, 0.05)"/>
    </svg>
</div>

<!-- Testimonials Section -->
<section id="testimonials" class="section bg-gradient-to-br from-teal-light/5 to-seafoam-green/5 relative overflow-hidden">
    <!-- Static Cloud Graphics -->
    <div class="absolute top-[20%] right-[10%] w-36 h-20 opacity-15 pointer-events-none">
        <svg viewBox="0 0 200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M35,60 Q25,40 45,35 Q50,20 70,25 Q85,15 100,25 Q115,20 125,30 Q140,25 150,35 Q170,30 175,45 L40,60 Q30,55 35,60 Z" fill="#48C9B0" opacity="0.4"/>
        </svg>
    </div>
    <div class="absolute bottom-10 left-[8%] w-28 h-16 opacity-12 pointer-events-none">
        <svg viewBox="0 0 200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30,65 Q20,45 40,40 Q45,25 65,30 Q80,20 95,30 Q110,25 120,35 L35,65 Q25,60 30,65 Z" fill="#F5B041" opacity="0.3"/>
        </svg>
    </div>
    
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 data-animate="fade-up" class="text-5xl font-nunito font-bold text-primary-navy mb-4">What Families Are Saying</h2>
            <p data-animate="fade-up" class="text-xl text-text-medium">Real stories from real families</p>
        </div>

        <!-- Testimonials Grid - SIMPLIFIED to static grid (Aviation ABA style) -->
        <div class="grid md:grid-cols-3 gap-8" data-animate="fade-up">
            <!-- Testimonial 1 -->
            <div class="bg-white rounded-2xl p-6 shadow-md">
                <div class="text-4xl text-primary-orange/30 mb-4">"</div>
                <p class="text-text-medium mb-6 leading-relaxed">
                    Treehouse Therapy has been a blessing for our family. The therapists are patient, caring, and truly understand our son's needs. We've seen incredible progress in his communication skills.
                </p>
                <p class="font-nunito font-bold text-primary-navy">- Sarah M.</p>
                <p class="text-sm text-text-light">Parent, Minneapolis</p>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white rounded-2xl p-6 shadow-md">
                <div class="text-4xl text-teal-light/30 mb-4">"</div>
                <p class="text-text-medium mb-6 leading-relaxed">
                    The team at Treehouse made the entire process seamless. From insurance verification to the personalized therapy plan, they were professional and supportive every step of the way.
                </p>
                <p class="font-nunito font-bold text-primary-navy">- Michael & Jennifer T.</p>
                <p class="text-sm text-text-light">Parents, St. Paul</p>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white rounded-2xl p-6 shadow-md">
                <div class="text-4xl text-seafoam-green/30 mb-4">"</div>
                <p class="text-text-medium mb-6 leading-relaxed">
                    We couldn't be happier with the progress our daughter has made. The in-home therapy approach has been perfect for her, and the therapists have become like family to us.
                </p>
                <p class="font-nunito font-bold text-primary-navy">- Amanda R.</p>
                <p class="text-sm text-text-light">Parent, Bloomington</p>
            </div>
        </div>
    </div>
</section>

    </div>
</section>

<!-- Wave Divider: Testimonials → In the News -->
<div class="wave-divider bg-white">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" class="w-full h-[60px] md:h-[80px] lg:h-[100px]">
        <path d="M0,60 C240,90 480,100 720,80 C960,60 1200,40 1440,60 L1440,120 L0,120 Z" fill="#FFFFFF"/>
    </svg>
</div>

<!-- In the News Section -->
<section id="news" class="section bg-white relative overflow-hidden">
    <!-- Static Cloud Graphics -->
    <div class="absolute top-[10%] left-[4%] w-32 h-18 opacity-10 pointer-events-none">
        <svg viewBox="0 0 200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25,60 Q15,40 35,35 Q40,20 60,25 Q75,15 90,25 Q105,20 115,30 L30,60 Q20,55 25,60 Z" fill="#5DADE2" opacity="0.35"/>
        </svg>
    </div>
    <div class="absolute bottom-[15%] right-[6%] w-36 h-20 opacity-12 pointer-events-none">
        <svg viewBox="0 0 200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30,65 Q20,45 40,40 Q45,25 65,30 Q80,20 95,30 Q110,25 120,35 Q135,30 145,40 L35,65 Q25,60 30,65 Z" fill="#48C9B0" opacity="0.3"/>
        </svg>
    </div>
    
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 data-animate="fade-up" class="text-5xl font-nunito font-bold text-primary-navy mb-4">In the News</h2>
            <p data-animate="fade-up" class="text-xl text-text-medium">Latest updates and resources for families</p>
        </div>

        <div data-animate="fade-up" data-stagger class="grid md:grid-cols-3 gap-8">
            <!-- News Item 1 -->
            <article class="bg-white rounded-2xl shadow-md hover:shadow-premium transition-all duration-300 overflow-hidden">
                <div class="h-48 bg-teal-light/20 relative">
                    <div class="absolute inset-0 flex items-center justify-center text-teal-light/40">
                        <svg class="w-16 h-16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                            <path d="M19 20H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v1m2 13a2 2 0 0 1-2-2V7m2 13a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <span class="text-sm font-semibold text-primary-orange mb-2 block">Resources</span>
                    <h3 class="text-xl font-nunito font-bold text-primary-navy mb-3">Naturalistic Teaching Strategies in ABA</h3>
                    <p class="text-text-medium text-sm mb-4">Discover how learning happens naturally through play and daily routines.</p>
                    <a href="#" class="text-primary-navy font-semibold hover:text-primary-orange flex items-center transition-colors">
                        Read More <span class="ml-2">→</span>
                    </a>
                </div>
            </article>

            <!-- News Item 2 -->
            <article class="bg-white rounded-2xl shadow-md hover:shadow-premium transition-all duration-300 overflow-hidden">
                <div class="h-48 bg-primary-orange/10 relative">
                    <div class="absolute inset-0 flex items-center justify-center text-primary-orange/30">
                        <svg class="w-16 h-16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                            <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <span class="text-sm font-semibold text-primary-orange mb-2 block">Guides</span>
                    <h3 class="text-xl font-nunito font-bold text-primary-navy mb-3">Parent's Guide to Home-Based Therapy</h3>
                    <p class="text-text-medium text-sm mb-4">What to expect when starting in-home ABA therapy for your child.</p>
                    <a href="#" class="text-primary-navy font-semibold hover:text-primary-orange flex items-center transition-colors">
                        Read More <span class="ml-2">→</span>
                    </a>
                </div>
            </article>

            <!-- News Item 3 -->
            <article class="bg-white rounded-2xl shadow-md hover:shadow-premium transition-all duration-300 overflow-hidden">
                <div class="h-48 bg-seafoam-green/20 relative">
                    <div class="absolute inset-0 flex items-center justify-center text-seafoam-green/40">
                        <svg class="w-16 h-16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                            <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <span class="text-sm font-semibold text-primary-orange mb-2 block">Team</span>
                    <h3 class="text-xl font-nunito font-bold text-primary-navy mb-3">Meet Our Behavior Technicians</h3>
                    <p class="text-text-medium text-sm mb-4">Get to know the dedicated professionals working with your family.</p>
                    <a href="#" class="text-primary-navy font-semibold hover:text-primary-orange flex items-center transition-colors">
                        Read More <span class="ml-2">→</span>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Wave Divider: In the News → CTA -->
<div class="wave-divider bg-white">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" class="w-full h-[60px] md:h-[80px] lg:h-[100px]">
        <path d="M0,60 C240,90 480,100 720,80 C960,60 1200,40 1440,60 L1440,120 L0,120 Z" fill="#1E3A5F" opacity="0.3"/>
        <path d="M0,80 C360,100 720,90 1080,100 C1260,105 1380,95 1440,90 L1440,120 L0,120 Z" fill="#1E3A5F" opacity="0.5"/>
        <path d="M0,100 C480,85 960,110 1440,95 L1440,120 L0,120 Z" fill="#1E3A5F"/>
    </svg>
</div>

<!-- Contact Section (Call or Text Away) -->
<section id="contact" class="section bg-gradient-to-r from-primary-navy to-deep-teal text-white relative overflow-hidden">
    <!-- Static Cloud Graphics -->
    <div class="absolute top-[15%] right-[5%] w-40 h-24 opacity-10 pointer-events-none">
        <svg viewBox="0 0 200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30,60 Q20,40 40,35 Q45,20 65,25 Q80,15 95,25 Q110,20 120,30 Q135,25 145,35 Q165,30 170,45 Q180,50 170,60 L35,60 Q25,55 30,60 Z" fill="white" opacity="0.2"/>
        </svg>
    </div>
    <div class="absolute bottom-20 left-[8%] w-32 h-20 opacity-8 pointer-events-none">
        <svg viewBox="0 0 200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25,65 Q15,45 35,40 Q40,25 60,30 Q75,20 90,30 Q105,25 115,35 L30,65 Q20,60 25,65 Z" fill="white" opacity="0.15"/>
        </svg>
    </div>
    
    <!-- Decorative Dots Pattern -->
    <div class="absolute inset-0 opacity-5 pointer-events-none">
        <svg width="100%" height="100%">
            <pattern id="dots" x="0" y="0" width="30" height="30" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="2" fill="white"/>
            </pattern>
            <rect x="0" y="0" width="100%" height="100%" fill="url(#dots)"/>
        </svg>
    </div>
    
    <div class="container-custom relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div data-animate="fade-up">
                <h2 class="text-5xl font-nunito font-bold mb-6">We're Just a Call or Text Away</h2>
                <p class="text-xl mb-8 leading-relaxed text-teal-light">
                    Have questions? We're here to help your child's journey take off with clarity, care, and heart.
                </p>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-primary-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold font-nunito">Call Us</h3>
                            <a href="tel:6123094135" class="text-lg hover:text-primary-orange transition-colors">(612) 309-4135</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-primary-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold font-nunito">Email Us</h3>
                            <a href="mailto:info@treehousetherapymn.com" class="text-lg hover:text-primary-orange transition-colors">info@treehousetherapymn.com</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-primary-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold font-nunito">Visit Us</h3>
                            <p class="text-lg">Minneapolis/St. Paul, MN</p>
                        </div>
                    </div>
                </div>
            </div>

            <div data-animate="fade-up" data-delay="200">
                <div class="bg-white rounded-3xl p-8 shadow-2xl text-text-dark">
                    <h3 class="text-2xl font-nunito font-bold text-primary-navy mb-6">Send Us a Message</h3>
                    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" class="space-y-4">
                        <input type="hidden" name="action" value="submit_contact_form">
                        <div>
                            <label class="form-label">Full Name*</label>
                            <input type="text" name="full_name" class="form-input bg-gray-50" placeholder="Jane Doe" required>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="form-label">Phone*</label>
                                <input type="tel" name="phone" class="form-input bg-gray-50" placeholder="(555) 123-4567" required>
                            </div>
                            <div>
                                <label class="form-label">Email*</label>
                                <input type="email" name="email" class="form-input bg-gray-50" placeholder="jane@example.com" required>
                            </div>
                        </div>
                        <div>
                            <label class="form-label">Insurance Provider</label>
                            <input type="text" name="insurance" class="form-input bg-gray-50" placeholder="e.g. Blue Cross Blue Shield">
                        </div>
                        <div>
                            <label class="form-label">Message</label>
                            <textarea name="message" class="form-input bg-gray-50 h-24 resize-none" placeholder="How can we help?"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-full text-lg shadow-lg">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
