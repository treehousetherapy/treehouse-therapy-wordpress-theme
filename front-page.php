<?php
/**
 * Template Name: Homepage
 * The template for displaying the homepage - Aviation ABA Style
 */

get_header();
?>

<!-- Hero Section - AVIATION ABA STYLE: White background, navy text, orange CTAs -->
<section id="hero" class="hero-section relative overflow-hidden pt-32 pb-20 px-4 bg-white">
    <!-- Static Cloud Graphics (Aviation ABA - low opacity, decorative only) -->
    <div class="absolute top-20 right-[8%] w-64 h-40 pointer-events-none z-0 opacity-15">
        <svg viewBox="0 0 200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30,60 Q20,40 40,35 Q45,20 65,25 Q80,15 95,25 Q110,20 120,30 Q135,25 145,35 Q165,30 170,45 Q180,50 170,60 Q175,70 165,75 L35,75 Q25,70 30,60 Z" fill="#5DADE2"/>
        </svg>
    </div>
    <div class="absolute bottom-16 left-[3%] w-48 h-32 pointer-events-none z-0 opacity-12">
        <svg viewBox="0 0 200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25,65 Q15,45 35,40 Q40,25 60,30 Q75,20 90,30 Q105,25 115,35 Q130,30 140,40 Q160,35 165,50 Q175,55 165,65 Q170,75 160,80 L30,80 Q20,75 25,65 Z" fill="#48C9B0"/>
        </svg>
    </div>
    <div class="absolute top-[50%] right-[25%] w-40 h-28 pointer-events-none z-0 opacity-10">
        <svg viewBox="0 0 200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M35,55 Q28,42 45,38 Q50,28 68,32 Q80,25 92,32 L40,55 Q32,52 35,55 Z" fill="#87CEEB"/>
        </svg>
    </div>

    <div class="container-custom relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column: Text Content (Navy text on white) -->
            <div class="hero-content" data-animate="fade-up">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6" style="color: var(--primary-navy); line-height: 1.1;">
                    Caring, Individualized
                    <span class="gradient-text block">ABA Therapy</span>
                </h1>

                <p class="text-xl mb-8 max-w-lg" style="color: var(--text-medium); line-height: 1.7;">
                    We help children with autism thrive through individualized ABA therapy, delivered with heart and care throughout the Twin Cities.
                </p>

                <div class="flex flex-wrap gap-4" data-animate="fade-up">
                    <a href="#contact" class="btn btn-primary">
                        Get Started Today
                    </a>
                    <a href="#services" class="btn btn-secondary">
                        Our Services
                    </a>
                </div>
            </div>

            <!-- Right Column: Contact Form (Aviation ABA floating card style) -->
            <div class="hero-form" data-animate="fade-up">
                <div class="hero-form-container">
                    <h3 class="text-2xl font-bold mb-6" style="color: var(--primary-navy);">Start Your Journey</h3>
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
                            <textarea name="message" class="form-input" style="height: 80px; resize: none;" placeholder="How can we help?"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-full text-lg">
                            Request Free Consultation
                        </button>
                        <p class="text-xs text-center mt-4" style="color: #666;">
                            Your information is secure. We will respond within 24 hours.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Wave Divider: Hero to Insurance (Aviation ABA curved wave) -->
<div class="wave-divider-curve" style="background: #FFFFFF;">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none" style="width: 100%; height: 60px; display: block; transform: rotate(180deg);">
        <path d="M0,50 C360,80 720,80 1080,50 C1260,35 1380,25 1440,20 L1440,0 L0,0 Z" fill="#FAF9F6"/>
    </svg>
</div>

<!-- Insurance Section - Aviation ABA Style: Clean, minimal -->
<section id="insurance" class="section bg-white py-16">
    <div class="container-custom text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4" style="color: var(--primary-navy);" data-animate="fade-up">Insurance We Accept</h2>
        <p class="text-lg mb-12" style="color: var(--text-medium);" data-animate="fade-up">We work with most major insurance providers</p>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-6" data-animate-group>
            <div class="card p-6 text-center" data-animate="fade-up">
                <div class="icon-circle-teal mx-auto mb-4" style="width: 56px; height: 56px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="white"><path d="M12 2L4 5V11.09C4 16.14 7.41 20.85 12 22C16.59 20.85 20 16.14 20 11.09V5L12 2Z"/></svg>
                </div>
                <p class="font-semibold" style="color: var(--primary-navy);">Blue Cross Blue Shield</p>
            </div>
            <div class="card p-6 text-center" data-animate="fade-up">
                <div class="icon-circle-orange mx-auto mb-4" style="width: 56px; height: 56px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="white"><path d="M12 2L4 5V11.09C4 16.14 7.41 20.85 12 22C16.59 20.85 20 16.14 20 11.09V5L12 2Z"/></svg>
                </div>
                <p class="font-semibold" style="color: var(--primary-navy);">Aetna</p>
            </div>
            <div class="card p-6 text-center" data-animate="fade-up">
                <div class="icon-circle-teal mx-auto mb-4" style="width: 56px; height: 56px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="white"><path d="M12 2L4 5V11.09C4 16.14 7.41 20.85 12 22C16.59 20.85 20 16.14 20 11.09V5L12 2Z"/></svg>
                </div>
                <p class="font-semibold" style="color: var(--primary-navy);">UnitedHealthcare</p>
            </div>
            <div class="card p-6 text-center" data-animate="fade-up">
                <div class="icon-circle-orange mx-auto mb-4" style="width: 56px; height: 56px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="white"><path d="M12 2L4 5V11.09C4 16.14 7.41 20.85 12 22C16.59 20.85 20 16.14 20 11.09V5L12 2Z"/></svg>
                </div>
                <p class="font-semibold" style="color: var(--primary-navy);">Cigna</p>
            </div>
            <div class="card p-6 text-center" data-animate="fade-up">
                <div class="icon-circle-navy mx-auto mb-4" style="width: 56px; height: 56px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="white"><path d="M12 2L4 5V11.09C4 16.14 7.41 20.85 12 22C16.59 20.85 20 16.14 20 11.09V5L12 2Z"/></svg>
                </div>
                <p class="font-semibold" style="color: var(--primary-navy);">Medicaid</p>
            </div>
        </div>
    </div>
</section>


<!-- Wave Divider: Insurance to What is ABA -->
<div class="wave-divider" style="background: #FFFFFF;">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" style="width: 100%; height: 80px; display: block;">
        <path d="M0,40 C120,60 240,80 360,75 C480,70 600,45 720,50 C840,55 960,90 1080,95 C1200,100 1320,75 1440,60 L1440,120 L0,120 Z" fill="#f8f9fa"/>
    </svg>
</div>

<!-- What is ABA Section -->
<section id="what-is-aba" class="section gray-light relative overflow-hidden" style="background: #f8f9fa; padding: 80px 0;">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-bold mb-6 gradient-text">What is ABA Therapy?</h2>
            <p class="text-xl max-w-4xl mx-auto" style="color: #666;">Applied Behavior Analysis (ABA) is a scientifically proven approach that helps children with autism develop essential skills through positive reinforcement and individualized learning strategies.</p>
        </div>
        <div class="grid md:grid-cols-4 gap-8">
            <div class="card-elevated" style="background: white; border-radius: 16px; padding: 32px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
                <div class="icon-box-blue mx-auto mb-4" style="width: 64px; height: 64px; border-radius: 50%; background: linear-gradient(135deg, #1E3A5F, #E8912D); display: flex; align-items: center; justify-content: center;">
                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none"><path d="M9 12L11 14L15 10M21 12C21 16.97 16.97 21 12 21C7.03 21 3 16.97 3 12C3 7.03 7.03 3 12 3C16.97 3 21 7.03 21 12Z" stroke="white" stroke-width="2"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #333;">Evidence-Based</h3>
                <p style="color: #666;">Backed by decades of scientific research and proven outcomes</p>
            </div>
            <div class="card-elevated" style="background: white; border-radius: 16px; padding: 32px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
                <div class="icon-box-purple mx-auto mb-4" style="width: 64px; height: 64px; border-radius: 50%; background: linear-gradient(135deg, #E8912D, #1E3A5F); display: flex; align-items: center; justify-content: center;">
                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none"><path d="M16 7C16 9.21 14.21 11 12 11C9.79 11 8 9.21 8 7C8 4.79 9.79 3 12 3C14.21 3 16 4.79 16 7Z" stroke="white" stroke-width="2"/><path d="M12 14C8.13 14 5 17.13 5 21H19C19 17.13 15.87 14 12 14Z" stroke="white" stroke-width="2"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #333;">Individualized Plans</h3>
                <p style="color: #666;">Customized therapy tailored to each child unique needs and goals</p>
            </div>
            <div class="card-elevated" style="background: white; border-radius: 16px; padding: 32px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
                <div class="icon-box-blue mx-auto mb-4" style="width: 64px; height: 64px; border-radius: 50%; background: linear-gradient(135deg, #1E3A5F, #E8912D); display: flex; align-items: center; justify-content: center;">
                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none"><path d="M17 20H22V18C22 16.34 20.66 15 19 15M17 20H7M17 20V18C17 17.34 16.87 16.72 16.64 16.14M7 20H2V18C2 16.34 3.34 15 5 15M7 20V18C7 17.34 7.13 16.72 7.36 16.14M15 7C15 8.66 13.66 10 12 10C10.34 10 9 8.66 9 7C9 5.34 10.34 4 12 4C13.66 4 15 5.34 15 7Z" stroke="white" stroke-width="2"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #333;">Family Involvement</h3>
                <p style="color: #666;">Parents and caregivers are active partners in the therapy process</p>
            </div>
            <div class="card-elevated" style="background: white; border-radius: 16px; padding: 32px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
                <div class="icon-box-purple mx-auto mb-4" style="width: 64px; height: 64px; border-radius: 50%; background: linear-gradient(135deg, #E8912D, #1E3A5F); display: flex; align-items: center; justify-content: center;">
                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none"><path d="M16 8V16M12 11V16M8 14V16M6 20H18C19.1 20 20 19.1 20 18V6C20 4.9 19.1 4 18 4H6C4.9 4 4 4.9 4 6V18C4 19.1 4.9 20 6 20Z" stroke="white" stroke-width="2"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #333;">Measurable Progress</h3>
                <p style="color: #666;">Data-driven approach with clear goals and trackable outcomes</p>
            </div>
        </div>
    </div>
</section>


<!-- Wave Divider: What is ABA to Services -->
<div class="wave-divider" style="background: #f8f9fa;">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" style="width: 100%; height: 80px; display: block;">
        <path d="M0,80 Q360,40 720,80 T1440,80 L1440,120 L0,120 Z" fill="#FFFFFF"/>
    </svg>
</div>

<!-- Services Section -->
<section id="services" class="section relative overflow-hidden" style="background: #FFFFFF; padding: 80px 0;">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="text-5xl font-bold mb-4" style="color: #1E3A5F;">Our Services</h2>
            <p class="text-xl" style="color: #666;">Comprehensive ABA therapy tailored to your family needs</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="card-elevated" style="background: white; border-radius: 16px; padding: 32px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); border-top: 4px solid #1E3A5F;">
                <div class="icon-box-blue mb-6" style="width: 64px; height: 64px; border-radius: 16px; background: linear-gradient(135deg, #1E3A5F, #E8912D); display: flex; align-items: center; justify-content: center;">
                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none"><path d="M3 10L12 3L21 10V20C21 20.55 20.55 21 20 21H4C3.45 21 3 20.55 3 20V10Z" stroke="white" stroke-width="2"/><path d="M9 21V12H15V21" stroke="white" stroke-width="2"/></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4" style="color: #333;">In-Home ABA Therapy</h3>
                <p class="mb-6" style="color: #666;">Personalized one-on-one therapy sessions conducted in the comfort and familiarity of your home environment.</p>
                <a href="<?php echo home_url("/services"); ?>" class="font-semibold" style="color: #1E3A5F;">Learn more &rarr;</a>
            </div>
            <div class="card-elevated" style="background: white; border-radius: 16px; padding: 32px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); border-top: 4px solid #E8912D;">
                <div class="icon-box-purple mb-6" style="width: 64px; height: 64px; border-radius: 16px; background: linear-gradient(135deg, #E8912D, #1E3A5F); display: flex; align-items: center; justify-content: center;">
                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none"><path d="M19 21V5C19 3.9 18.1 3 17 3H7C5.9 3 5 3.9 5 5V21M3 21H21M9 7H10M9 11H10M14 7H15M14 11H15M9 21V16H15V21" stroke="white" stroke-width="2"/></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4" style="color: #333;">Center-Based Therapy</h3>
                <p class="mb-6" style="color: #666;">Structured learning environment designed to help children develop social skills and thrive in group settings.</p>
                <a href="<?php echo home_url("/services"); ?>" class="font-semibold" style="color: #E8912D;">Learn more &rarr;</a>
            </div>
            <div class="card-elevated" style="background: white; border-radius: 16px; padding: 32px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); border-top: 4px solid #1E3A5F;">
                <div class="icon-box-blue mb-6" style="width: 64px; height: 64px; border-radius: 16px; background: linear-gradient(135deg, #1E3A5F, #E8912D); display: flex; align-items: center; justify-content: center;">
                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none"><path d="M17 20H22V18C22 16.34 20.66 15 19 15M17 20H7M17 20V18M7 20H2V18C2 16.34 3.34 15 5 15M7 20V18M15 7C15 8.66 13.66 10 12 10C10.34 10 9 8.66 9 7C9 5.34 10.34 4 12 4C13.66 4 15 5.34 15 7Z" stroke="white" stroke-width="2"/></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4" style="color: #333;">Parent Training</h3>
                <p class="mb-6" style="color: #666;">Empowering parents with the knowledge and techniques to support their child progress at home.</p>
                <a href="<?php echo home_url("/services"); ?>" class="font-semibold" style="color: #1E3A5F;">Learn more &rarr;</a>
            </div>
        </div>
    </div>
</section>


<!-- Wave Divider: Services to Why Choose Us -->
<div class="wave-divider" style="background: #FFFFFF;">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" style="width: 100%; height: 80px; display: block;">
        <path d="M0,64 L48,75 C96,85 192,107 288,112 C384,117 480,107 576,91 C672,75 768,53 864,59 C960,64 1056,96 1152,107 C1248,117 1344,107 1392,101 L1440,96 L1440,120 L0,120 Z" fill="rgba(6, 147, 227, 0.05)"/>
    </svg>
</div>

<!-- Why Choose Us Section -->
<section id="why-choose-us" class="section" style="background: rgba(6, 147, 227, 0.05); padding: 80px 0;">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="text-5xl font-bold mb-6 gradient-text">Why Choose Us</h2>
            <p class="text-xl" style="color: #666;">Dedicated to helping your child reach their full potential</p>
        </div>
        <div class="grid md:grid-cols-3 gap-12 text-center">
            <div>
                <div class="mx-auto mb-6" style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, #1E3A5F, #E8912D); display: flex; align-items: center; justify-content: center;">
                    <svg class="w-10 h-10" viewBox="0 0 24 24" fill="none"><path d="M12 21.35L10.55 20.03C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3C9.24 3 10.91 3.81 12 5.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5C22 12.27 18.6 15.36 13.45 20.03L12 21.35Z" fill="white"/></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4" style="color: #333;">Compassionate Care</h3>
                <p style="color: #666;">Our team genuinely cares about each child and family we serve, creating a warm and supportive environment.</p>
            </div>
            <div>
                <div class="mx-auto mb-6" style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, #E8912D, #1E3A5F); display: flex; align-items: center; justify-content: center;">
                    <svg class="w-10 h-10" viewBox="0 0 24 24" fill="none"><path d="M12 2L14.5 9H22L16 14L18.5 21L12 17L5.5 21L8 14L2 9H9.5L12 2Z" fill="white"/></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4" style="color: #333;">Expert Team</h3>
                <p style="color: #666;">Board-certified behavior analysts (BCBAs) and trained therapists with years of experience and ongoing education.</p>
            </div>
            <div>
                <div class="mx-auto mb-6" style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, #1E3A5F, #E8912D); display: flex; align-items: center; justify-content: center;">
                    <svg class="w-10 h-10" viewBox="0 0 24 24" fill="none"><path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" fill="white"/></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4" style="color: #333;">Proven Results</h3>
                <p style="color: #666;">Track record of meaningful progress and life-changing outcomes for the children and families we work with.</p>
            </div>
        </div>
    </div>
</section>


<!-- Wave Divider: Why Choose Us to Process -->
<div class="wave-divider" style="background: rgba(6, 147, 227, 0.05);">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" style="width: 100%; height: 80px; display: block;">
        <path d="M0,64 C288,89 576,108 720,108 C864,108 1152,89 1440,64 L1440,120 L0,120 Z" fill="#FFFFFF"/>
    </svg>
</div>

<!-- Process Section -->
<section id="process" class="section" style="background: #FFFFFF; padding: 80px 0;">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="text-5xl font-bold mb-6" style="color: #1E3A5F;">Getting Started is Easy</h2>
            <p class="text-xl" style="color: #666;">Four simple steps to begin your child journey</p>
        </div>
        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="mx-auto mb-6" style="width: 64px; height: 64px; border-radius: 50%; background: linear-gradient(135deg, #1E3A5F, #E8912D); display: flex; align-items: center; justify-content: center;">
                    <span class="text-2xl font-bold" style="color: white;">1</span>
                </div>
                <h3 class="text-xl font-bold mb-4" style="color: #333;">Free Consultation</h3>
                <p style="color: #666;">Contact us to discuss your child needs and learn about our services.</p>
            </div>
            <div>
                <div class="mx-auto mb-6" style="width: 64px; height: 64px; border-radius: 50%; background: linear-gradient(135deg, #E8912D, #1E3A5F); display: flex; align-items: center; justify-content: center;">
                    <span class="text-2xl font-bold" style="color: white;">2</span>
                </div>
                <h3 class="text-xl font-bold mb-4" style="color: #333;">Insurance Verification</h3>
                <p style="color: #666;">We handle all the paperwork and verify your insurance benefits.</p>
            </div>
            <div>
                <div class="mx-auto mb-6" style="width: 64px; height: 64px; border-radius: 50%; background: linear-gradient(135deg, #1E3A5F, #E8912D); display: flex; align-items: center; justify-content: center;">
                    <span class="text-2xl font-bold" style="color: white;">3</span>
                </div>
                <h3 class="text-xl font-bold mb-4" style="color: #333;">Comprehensive Assessment</h3>
                <p style="color: #666;">Our BCBA conducts a thorough assessment to create a personalized plan.</p>
            </div>
            <div>
                <div class="mx-auto mb-6" style="width: 64px; height: 64px; border-radius: 50%; background: linear-gradient(135deg, #E8912D, #1E3A5F); display: flex; align-items: center; justify-content: center;">
                    <span class="text-2xl font-bold" style="color: white;">4</span>
                </div>
                <h3 class="text-xl font-bold mb-4" style="color: #333;">Begin Therapy</h3>
                <p style="color: #666;">Start sessions and watch your child grow and develop new skills.</p>
            </div>
        </div>
    </div>
</section>


<!-- Wave Divider: Process to Testimonials -->
<div class="wave-divider" style="background: #FFFFFF;">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" style="width: 100%; height: 80px; display: block;">
        <path d="M0,64 C288,89 576,108 720,108 C864,108 1152,89 1440,64 L1440,120 L0,120 Z" fill="#f8f9fa"/>
    </svg>
</div>

<!-- Testimonials Section -->
<section id="testimonials" class="section relative overflow-hidden" style="background: #f8f9fa; padding: 80px 0;">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="text-5xl font-bold mb-4 gradient-text">What Families Say</h2>
            <p class="text-xl" style="color: #666;">Real stories from the families we serve</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="card-elevated" style="background: white; border-radius: 16px; padding: 32px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
                <div class="text-5xl mb-4" style="color: rgba(6, 147, 227, 0.3);">"</div>
                <p class="mb-6 leading-relaxed" style="color: #666;">The team at Aviation ABA has been incredible. Our son has made more progress in six months than we ever thought possible. The therapists are patient, skilled, and truly care about our family.</p>
                <div class="flex items-center gap-3">
                    <div style="width: 48px; height: 48px; border-radius: 50%; background: linear-gradient(135deg, #1E3A5F, #E8912D);"></div>
                    <div>
                        <p class="font-bold" style="color: #333;">Sarah M.</p>
                        <p class="text-sm" style="color: #999;">Parent</p>
                    </div>
                </div>
            </div>
            <div class="card-elevated" style="background: white; border-radius: 16px; padding: 32px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
                <div class="text-5xl mb-4" style="color: rgba(155, 81, 224, 0.3);">"</div>
                <p class="mb-6 leading-relaxed" style="color: #666;">From the very first consultation, we felt supported and understood. The individualized approach has helped our daughter develop communication skills we never thought possible.</p>
                <div class="flex items-center gap-3">
                    <div style="width: 48px; height: 48px; border-radius: 50%; background: linear-gradient(135deg, #E8912D, #1E3A5F);"></div>
                    <div>
                        <p class="font-bold" style="color: #333;">Michael T.</p>
                        <p class="text-sm" style="color: #999;">Parent</p>
                    </div>
                </div>
            </div>
            <div class="card-elevated" style="background: white; border-radius: 16px; padding: 32px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
                <div class="text-5xl mb-4" style="color: rgba(6, 147, 227, 0.3);">"</div>
                <p class="mb-6 leading-relaxed" style="color: #666;">The progress reports and parent training sessions have been invaluable. We now have the tools to support our son at home, and we have seen remarkable improvements in his daily life skills.</p>
                <div class="flex items-center gap-3">
                    <div style="width: 48px; height: 48px; border-radius: 50%; background: linear-gradient(135deg, #1E3A5F, #E8912D);"></div>
                    <div>
                        <p class="font-bold" style="color: #333;">Jennifer L.</p>
                        <p class="text-sm" style="color: #999;">Parent</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Wave Divider: Testimonials to Contact -->
<div class="wave-divider" style="background: #f8f9fa;">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" style="width: 100%; height: 80px; display: block;">
        <path d="M0,60 C240,90 480,100 720,80 C960,60 1200,40 1440,60 L1440,120 L0,120 Z" fill="#32373c" opacity="0.3"/>
        <path d="M0,80 C360,100 720,90 1080,100 C1260,105 1380,95 1440,90 L1440,120 L0,120 Z" fill="#32373c" opacity="0.5"/>
        <path d="M0,100 C480,85 960,110 1440,95 L1440,120 L0,120 Z" fill="#32373c"/>
    </svg>
</div>

<!-- Contact Section -->
<section id="contact" class="section dark-navy relative overflow-hidden" style="background: #32373c; padding: 80px 0;">
    <div class="container-custom relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div style="color: white;">
                <h2 class="text-5xl font-bold mb-6">Ready to Get Started?</h2>
                <p class="text-xl mb-8 leading-relaxed" style="color: rgba(255,255,255,0.8);">Take the first step toward helping your child reach new heights. Contact us today for a free consultation.</p>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div style="width: 48px; height: 48px; border-radius: 50%; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg class="w-6 h-6" style="color: #1E3A5F;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Call Us</h3>
                            <a href="tel:5551234567" class="text-lg" style="color: rgba(255,255,255,0.9);">(555) 123-4567</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div style="width: 48px; height: 48px; border-radius: 50%; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg class="w-6 h-6" style="color: #E8912D;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Email Us</h3>
                            <a href="mailto:info@aviationaba.com" class="text-lg" style="color: rgba(255,255,255,0.9);">info@aviationaba.com</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div style="width: 48px; height: 48px; border-radius: 50%; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg class="w-6 h-6" style="color: #1E3A5F;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Visit Us</h3>
                            <p class="text-lg" style="color: rgba(255,255,255,0.9);">123 Aviation Way, Suite 100<br>City, State 12345</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div style="background: white; border-radius: 24px; padding: 32px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);">
                    <h3 class="text-2xl font-bold mb-6" style="color: #32373c;">Send Us a Message</h3>
                    <form action="<?php echo esc_url( admin_url("admin-post.php") ); ?>" method="POST" class="space-y-4">
                        <input type="hidden" name="action" value="submit_contact_form">
                        <div>
                            <label class="form-label" style="display: block; margin-bottom: 6px; font-weight: 600; color: #333;">Full Name*</label>
                            <input type="text" name="full_name" class="form-input" style="width: 100%; padding: 12px 16px; border: 1px solid #ddd; border-radius: 8px; background: #f8f9fa;" placeholder="Jane Doe" required>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="form-label" style="display: block; margin-bottom: 6px; font-weight: 600; color: #333;">Phone*</label>
                                <input type="tel" name="phone" class="form-input" style="width: 100%; padding: 12px 16px; border: 1px solid #ddd; border-radius: 8px; background: #f8f9fa;" placeholder="(555) 123-4567" required>
                            </div>
                            <div>
                                <label class="form-label" style="display: block; margin-bottom: 6px; font-weight: 600; color: #333;">Email*</label>
                                <input type="email" name="email" class="form-input" style="width: 100%; padding: 12px 16px; border: 1px solid #ddd; border-radius: 8px; background: #f8f9fa;" placeholder="jane@example.com" required>
                            </div>
                        </div>
                        <div>
                            <label class="form-label" style="display: block; margin-bottom: 6px; font-weight: 600; color: #333;">Insurance Provider</label>
                            <input type="text" name="insurance" class="form-input" style="width: 100%; padding: 12px 16px; border: 1px solid #ddd; border-radius: 8px; background: #f8f9fa;" placeholder="e.g. Blue Cross Blue Shield">
                        </div>
                        <div>
                            <label class="form-label" style="display: block; margin-bottom: 6px; font-weight: 600; color: #333;">Message</label>
                            <textarea name="message" class="form-input" style="width: 100%; padding: 12px 16px; border: 1px solid #ddd; border-radius: 8px; background: #f8f9fa; height: 100px; resize: none;" placeholder="How can we help?"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%; padding: 16px; background: linear-gradient(135deg, #1E3A5F, #E8912D); color: white; border: none; border-radius: 8px; font-size: 18px; font-weight: 600; cursor: pointer;">Request Free Consultation</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
