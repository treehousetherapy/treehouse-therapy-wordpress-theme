<?php
/**
 * Template Name: Homepage
 * The template for displaying the homepage - Treehouse Therapy Center
 * Upstream ABA Flow Design
 */

get_header();
?>

<!-- Hero Section - Bedrock-inspired layout -->
<section class="hero-bedrock hero--light" id="page-hero">
    <!-- Rotating Decorative Badge -->
    <div class="rotating-badge" aria-hidden="true">
        <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="60" cy="60" r="58" stroke="#E8912D" stroke-width="2" fill="rgba(232, 145, 45, 0.05)"/>
            <circle cx="60" cy="60" r="50" stroke="#5080B8" stroke-width="1" stroke-dasharray="4 4" fill="none"/>
            <text font-family="Nunito, sans-serif" font-size="10" font-weight="700" fill="#1E3A5F">
                <textPath href="#circlePath" startOffset="0%">
                    TRUSTED • CARING • EXPERT • TRUSTED • CARING • EXPERT •
                </textPath>
            </text>
            <defs>
                <path id="circlePath" d="M 60,60 m -45,0 a 45,45 0 1,1 90,0 a 45,45 0 1,1 -90,0"/>
            </defs>
            <circle cx="60" cy="60" r="15" fill="#FFC107"/>
            <text x="60" y="65" text-anchor="middle" font-family="Nunito, sans-serif" font-size="18" font-weight="800" fill="#1E3A5F">★</text>
        </svg>
    </div>

    <div class="hero-bedrock-container">
        <div class="hero-bedrock-grid">
            <!-- Column 1: Headline Text -->
            <div class="hero-bedrock-content">
                <h1 class="hero-bedrock-title">
                    <span class="title-line-1">Home-based ABA therapy</span>
                    <span class="title-line-2">for <span class="hero-chip">Minnesota</span> families.</span>
                </h1>
                <p class="hero-bedrock-subhead">
                    No clinic. No commute. Just personalized care where your child learns best — at home.
                </p>
                <div class="hero-speed-promise">
                    <svg class="promise-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    <span>No waitlist — Start services in as little as 2-4 weeks</span>
                </div>
                <div class="hero-bedrock-cta">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary btn-lg">Get Started</a>
                    <a href="<?php echo home_url('/services'); ?>" class="btn btn-ghost btn-lg hero-secondary">Our Services</a>
                </div>
                <div class="hero-trust-signals">
                    <div class="trust-rating">
                        <span class="stars">⭐⭐⭐⭐⭐</span>
                        <span class="rating-text">Parents love Treehouse</span>
                    </div>
                    <ul class="hero-bedrock-trust">
                        <li><span class="hero-trust-icon">✓</span> Ages 2–12</li>
                        <li><span class="hero-trust-icon">✓</span> Minneapolis/St. Paul metro</li>
                    </ul>
                    <p class="trust-micro">Clinician-led care • 1:1 Support • Quick Start</p>
                </div>
            </div>

            <!-- Column 2: Hero Image -->
            <div class="hero-bedrock-image">
                <div class="hero-portrait-wrap">
                    <div class="hero-blob">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-child-portrait.png"
                            alt="Smiling child wearing headphones"
                            class="hero-blob-img"
                            loading="eager"
                        />
                    </div>
                </div>
            </div>

            <!-- Column 3: Form -->
            <div class="hero-bedrock-form">
                <div class="hero-form-wrap">
                    <div class="hero-form-card">
                        <p class="hero-card-title">Get Started Today</p>
                        <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" class="hero-lead-form">
                            <input type="hidden" name="action" value="submit_hero_lead_form">
                            
                            <div class="form-group-compact">
                                <input type="text" name="parent_name" placeholder="Parent Name*" required>
                            </div>
                            
                            <div class="form-group-compact">
                                <input type="text" name="child_age" placeholder="Child's Age*" required>
                            </div>
                            
                            <div class="form-group-compact">
                                <input type="tel" name="phone" placeholder="Phone*" required>
                            </div>
                            
                            <div class="form-group-compact">
                                <select name="insurance" required>
                                    <option value="">Insurance Provider*</option>
                                    <option value="Blue Cross Blue Shield">Blue Cross Blue Shield</option>
                                    <option value="Medicaid/MA">Medicaid/MA</option>
                                    <option value="HealthPartners">HealthPartners</option>
                                    <option value="Aetna">Aetna</option>
                                    <option value="Cigna">Cigna</option>
                                    <option value="UnitedHealthcare">UnitedHealthcare</option>
                                    <option value="Medica">Medica</option>
                                    <option value="UCare">UCare</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn-hero-form">Check Availability</button>
                            
                            <div class="form-trust-strip">
                                <p>We'll respond within 24 hours</p>
                                <p>HIPAA-compliant • Most insurances accepted</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Wave Transition: Hero to Services -->
<div class="wave-transition" style="background: #C5E6F3;">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
        <path d="M0,0 C360,100 1080,100 1440,0 L1440,100 L0,100 Z" fill="#F0F9FF"/>
    </svg>
</div>

<!-- Services Section -->
<section id="services" class="section-services">
    <div class="section-header" data-animate>
        <h2>
            From <span class="highlight-box">little ones</span> to
            <span class="highlight-box highlight-pink">growing teens</span>
        </h2>
        <p>Personalized ABA therapy that meets your child exactly where they are</p>
    </div>

    <div class="services-grid" data-stagger>
        <!-- In-Home Therapy -->
        <div class="service-card" data-animate>
            <div class="service-illustration">
                <svg viewBox="0 0 160 140" fill="none">
                    <!-- House -->
                    <path d="M80 20L130 55V120H30V55L80 20Z" fill="#E8F6F5"/>
                    <path d="M80 20L130 55V120H30V55L80 20Z" stroke="#2AA198" stroke-width="3"/>
                    <rect x="65" y="80" width="30" height="40" fill="#FFC107" rx="2"/>
                    <rect x="45" y="65" width="20" height="20" fill="white" stroke="#2AA198" stroke-width="2" rx="2"/>
                    <rect x="95" y="65" width="20" height="20" fill="white" stroke="#2AA198" stroke-width="2" rx="2"/>
                    <!-- Child character -->
                    <circle cx="80" cy="95" r="8" fill="#FFDBAC"/>
                    <circle cx="77" cy="93" r="2" fill="#1E3A5F"/>
                    <circle cx="83" cy="93" r="2" fill="#1E3A5F"/>
                    <path d="M77 98 Q80 101 83 98" stroke="#E91E8C" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
            <h3>In-Home Therapy</h3>
            <p>Personalized one-on-one therapy in the comfort and familiarity of your own home, where learning feels natural.</p>
        </div>

        <!-- In-School/Daycare -->
        <div class="service-card" data-animate>
            <div class="service-illustration">
                <svg viewBox="0 0 160 140" fill="none">
                    <!-- School building -->
                    <rect x="30" y="50" width="100" height="70" fill="#E8F6F5" stroke="#2AA198" stroke-width="3"/>
                    <rect x="70" y="90" width="20" height="30" fill="#E91E8C"/>
                    <rect x="40" y="65" width="15" height="20" fill="white" stroke="#2AA198" stroke-width="2"/>
                    <rect x="60" y="65" width="15" height="20" fill="white" stroke="#2AA198" stroke-width="2"/>
                    <rect x="85" y="65" width="15" height="20" fill="white" stroke="#2AA198" stroke-width="2"/>
                    <rect x="105" y="65" width="15" height="20" fill="white" stroke="#2AA198" stroke-width="2"/>
                    <!-- Flag -->
                    <rect x="75" y="25" width="3" height="30" fill="#1E3A5F"/>
                    <path d="M78 25H95L90 35L95 45H78V25Z" fill="#FFC107"/>
                    <!-- Book -->
                    <rect x="50" y="100" width="25" height="18" rx="2" fill="#5FCFC3"/>
                    <path d="M55 104H70M55 109H68M55 114H65" stroke="white" stroke-width="1.5"/>
                </svg>
            </div>
            <h3>In-School/Daycare</h3>
            <p>Collaborative support within educational settings, helping children succeed academically and socially.</p>
        </div>

        <!-- Parent Training -->
        <div class="service-card" data-animate>
            <div class="service-illustration">
                <svg viewBox="0 0 160 140" fill="none">
                    <!-- Parent figure -->
                    <circle cx="60" cy="45" r="18" fill="#FFDBAC"/>
                    <circle cx="55" cy="42" r="3" fill="#1E3A5F"/>
                    <circle cx="65" cy="42" r="3" fill="#1E3A5F"/>
                    <path d="M55 52 Q60 58 65 52" stroke="#E91E8C" stroke-width="2" stroke-linecap="round"/>
                    <path d="M45 35 Q40 20 55 25" stroke="#8B5A2B" stroke-width="6" stroke-linecap="round"/>
                    <rect x="45" y="65" width="30" height="45" rx="5" fill="#2AA198"/>
                    <!-- Child figure -->
                    <circle cx="105" cy="65" r="14" fill="#FFDBAC"/>
                    <circle cx="101" cy="63" r="2.5" fill="#1E3A5F"/>
                    <circle cx="109" cy="63" r="2.5" fill="#1E3A5F"/>
                    <path d="M101 70 Q105 74 109 70" stroke="#E91E8C" stroke-width="1.5" stroke-linecap="round"/>
                    <rect x="93" y="80" width="24" height="35" rx="4" fill="#FFC107"/>
                    <!-- Heart connection -->
                    <path d="M75 75 Q85 65 95 75" stroke="#E91E8C" stroke-width="2" stroke-dasharray="4 2"/>
                    <circle cx="85" cy="70" r="6" fill="#E91E8C"/>
                    <path d="M82 68 L85 72 L88 66" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h3>Parent Training</h3>
            <p>Empowering families with strategies and techniques to support their child's continued growth at home.</p>
        </div>
    </div>
</section>

<!-- Wave Transition -->
<div class="wave-transition wave-transition-flip" style="background: white;">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
        <path d="M0,100 C480,0 960,0 1440,100 L1440,0 L0,0 Z" fill="#F0F9FF"/>
    </svg>
</div>

<!-- Skills Section -->
<section class="section-skills">
    <div class="skills-container">
        <div class="skills-header" data-animate>
            <h2>Building <span class="highlight-box">essential skills</span> for life</h2>
            <p>Our comprehensive approach targets key developmental areas</p>
        </div>

        <div class="skills-grid" data-stagger>
            <div class="skill-card" data-animate>
                <div class="skill-icon skill-icon-teal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <div class="skill-content">
                    <h4>Social Skills</h4>
                    <p>Building friendships and meaningful connections</p>
                </div>
            </div>

            <div class="skill-card" data-animate>
                <div class="skill-icon skill-icon-pink">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                </div>
                <div class="skill-content">
                    <h4>Daily Living Skills</h4>
                    <p>Independence in everyday routines and self-care</p>
                </div>
            </div>

            <div class="skill-card" data-animate>
                <div class="skill-icon skill-icon-coral">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                        <line x1="9" y1="9" x2="9.01" y2="9"/>
                        <line x1="15" y1="9" x2="15.01" y2="9"/>
                    </svg>
                </div>
                <div class="skill-content">
                    <h4>Behavior Regulation</h4>
                    <p>Understanding and managing responses</p>
                </div>
            </div>

            <div class="skill-card" data-animate>
                <div class="skill-icon skill-icon-yellow">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    </svg>
                </div>
                <div class="skill-content">
                    <h4>Communication Skills</h4>
                    <p>Finding their voice in meaningful ways</p>
                </div>
            </div>

            <div class="skill-card" data-animate>
                <div class="skill-icon skill-icon-purple">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                    </svg>
                </div>
                <div class="skill-content">
                    <h4>Emotional Regulation</h4>
                    <p>Tools to navigate big feelings with confidence</p>
                </div>
            </div>

            <div class="skill-card" data-animate>
                <div class="skill-icon skill-icon-teal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                </div>
                <div class="skill-content">
                    <h4>Play Skills</h4>
                    <p>Learning through joyful, engaging play</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ABA Made Fun Section -->
<section class="section-aba-fun">
    <div class="aba-fun-container">
        <div class="aba-fun-header" data-animate>
            <h2>ABA Made <span class="highlight-box highlight-pink">Fun</span></h2>
        </div>

        <div class="blob-container" data-animate>
            <div class="blob blob-pink">
                <div class="blob-shape"></div>
                <h4>Engaging</h4>
                <p>Therapy that feels like play, not work</p>
            </div>

            <div class="blob blob-yellow">
                <div class="blob-shape"></div>
                <h4>Comfortable</h4>
                <p>A safe space to learn and grow</p>
            </div>

            <div class="blob blob-teal">
                <div class="blob-shape"></div>
                <h4>Warm</h4>
                <p>Caring therapists who become like family</p>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section-process">
    <div class="process-header" data-animate>
        <h2>Getting Started is Easy</h2>
        <p>Four simple steps to begin your child's journey</p>
    </div>

    <div class="process-flow">
        <div class="process-steps" data-stagger>
            <div class="process-step" data-animate>
                <div class="step-icon">
                    <span class="step-number">1</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                </div>
                <h4>Reach Out</h4>
                <p>Give us a call or fill out our simple contact form</p>
            </div>

            <div class="process-step" data-animate>
                <div class="step-icon">
                    <span class="step-number">2</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 11l3 3L22 4"/>
                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/>
                    </svg>
                </div>
                <h4>Insurance Verification</h4>
                <p>We handle the paperwork and verify your coverage</p>
            </div>

            <div class="process-step" data-animate>
                <div class="step-icon">
                    <span class="step-number">3</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                        <polyline points="10 9 9 9 8 9"/>
                    </svg>
                </div>
                <h4>Assessment</h4>
                <p>Our BCBA meets with your family to understand needs</p>
            </div>

            <div class="process-step" data-animate>
                <div class="step-icon">
                    <span class="step-number">4</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                </div>
                <h4>Begin Therapy</h4>
                <p>Your personalized plan begins - watch the progress flow!</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section-testimonials">
    <div class="testimonials-container">
        <div class="testimonials-header" data-animate>
            <h2>What Families Say</h2>
            <p>Real stories from families we've had the privilege to serve</p>
        </div>

        <div class="testimonials-grid" data-stagger>
            <div class="testimonial-card" data-animate>
                <div class="testimonial-stars">
                    <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <div class="testimonial-quote">
                    <svg class="quote-mark" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z"/>
                    </svg>
                    <p>"The team at Treehouse has been incredible for our family. Our son has made amazing progress with communication and social skills. The therapists are patient, caring, and truly understand him."</p>
                </div>
                <div class="testimonial-author">
                    <strong>Sarah M.</strong>
                    <span>Eagan, MN</span>
                </div>
            </div>

            <div class="testimonial-card" data-animate>
                <div class="testimonial-stars">
                    <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <div class="testimonial-quote">
                    <svg class="quote-mark" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z"/>
                    </svg>
                    <p>"Having therapy at home has been a game-changer. No more stressful drives to appointments. Our daughter is comfortable and learning in her own environment. We couldn't be happier with the progress."</p>
                </div>
                <div class="testimonial-author">
                    <strong>David L.</strong>
                    <span>Bloomington, MN</span>
                </div>
            </div>

            <div class="testimonial-card" data-animate>
                <div class="testimonial-stars">
                    <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <div class="testimonial-quote">
                    <svg class="quote-mark" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z"/>
                    </svg>
                    <p>"The Treehouse team feels like family. They took the time to understand our culture and values, and they've equipped us with tools to support our son every day. We're so grateful for their compassionate care."</p>
                </div>
                <div class="testimonial-author">
                    <strong>Maria G.</strong>
                    <span>St. Paul, MN</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Wave Transition -->
<div class="wave-transition" style="background: linear-gradient(180deg, #F0F9FF 0%, #E8F6F5 100%);">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
        <path d="M0,50 Q360,100 720,50 T1440,50 L1440,100 L0,100 Z" fill="white"/>
    </svg>
</div>

<!-- Why Treehouse Section -->
<section class="section-why-treehouse">
    <div class="why-treehouse-container">
        <div class="why-treehouse-header" data-animate>
            <h2>Why Families Choose <span class="highlight-box highlight-yellow">Treehouse</span></h2>
            <p>What makes us different — and why it matters for your child</p>
        </div>

        <div class="why-treehouse-grid" data-stagger>
            <div class="why-card" data-animate>
                <div class="why-icon why-icon-teal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                </div>
                <h4>Home-Based Focus</h4>
                <p>Learning happens best where life happens. We bring expert therapy to your home, where your child feels most comfortable and confident.</p>
            </div>

            <div class="why-card" data-animate>
                <div class="why-icon why-icon-pink">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                    </svg>
                </div>
                <h4>Small Practice, Big Heart</h4>
                <p>We keep caseloads small so every family gets the personal attention they deserve. You're not a number here — you're part of our community.</p>
            </div>

            <div class="why-card" data-animate>
                <div class="why-icon why-icon-yellow">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2l7 4v6c0 5-3.5 9.5-7 10-3.5-.5-7-5-7-10V6l7-4z"/>
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                </div>
                <h4>Minnesota EIDBI Experts</h4>
                <p>We navigate the complexities of Minnesota's EIDBI system so you don't have to. Insurance verification, paperwork, coordination — we handle it all.</p>
            </div>

            <div class="why-card" data-animate>
                <div class="why-icon why-icon-coral">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M2 12h20"/>
                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                    </svg>
                </div>
                <h4>Culturally Responsive Care</h4>
                <p>We honor your family's culture, language, and values in everything we do. Your child's identity is celebrated, not changed.</p>
            </div>
        </div>
    </div>
</section>

<!-- Wave Transition -->
<div class="wave-transition" style="background: linear-gradient(180deg, #2AA198 0%, #4ECDC4 100%);">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
        <path d="M0,50 Q360,100 720,50 T1440,50 L1440,100 L0,100 Z" fill="white"/>
    </svg>
</div>

<!-- Insurance Section -->
<section class="section-insurance">
    <div class="insurance-container">
        <div class="insurance-header" data-animate>
            <h2>Insurance We Accept</h2>
            <p>We work with most major insurance providers</p>
        </div>

        <div class="insurance-grid" data-stagger>
            <span class="insurance-pill teal" data-animate>Blue Cross Blue Shield</span>
            <span class="insurance-pill pink" data-animate>Medicaid/MA</span>
            <span class="insurance-pill yellow" data-animate>HealthPartners</span>
            <span class="insurance-pill teal" data-animate>Aetna</span>
            <span class="insurance-pill pink" data-animate>Cigna</span>
            <span class="insurance-pill yellow" data-animate>UnitedHealthcare</span>
            <span class="insurance-pill teal" data-animate>Medica</span>
            <span class="insurance-pill pink" data-animate>UCare</span>
        </div>

        <p style="text-align: center; margin-top: 2rem; color: var(--text-medium);" data-animate>
            Don't see your insurance? <a href="<?php echo home_url('/contact'); ?>" style="color: var(--pop-pink); font-weight: 600;">Contact us</a> - we may still be able to help!
        </p>
    </div>
</section>

<!-- CTA Banner Section -->
<section class="section-cta-banner">
    <div class="cta-banner-container" data-animate>
        <div class="cta-banner-content">
            <h2>Ready to Take the First Step?</h2>
            <p>Every child deserves support that meets them where they are. Let's talk about how we can help your family.</p>
            <div class="cta-banner-buttons">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary btn-lg">
                    Get Started Today
                    <span class="btn-arrow">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </span>
                </a>
                <a href="tel:6123094135" class="btn btn-ghost-light btn-lg">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    Call: (612) 309-4135
                </a>
            </div>
        </div>
        <div class="cta-banner-decoration">
            <svg viewBox="0 0 200 200" fill="none">
                <circle cx="100" cy="100" r="80" fill="rgba(255, 255, 255, 0.1)"/>
                <circle cx="100" cy="100" r="60" fill="rgba(255, 255, 255, 0.15)"/>
                <circle cx="100" cy="100" r="40" fill="rgba(255, 255, 255, 0.2)"/>
            </svg>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section-contact">
    <div class="contact-container">
        <div class="contact-form-wrapper" data-animate>
            <h3>Ready to Get Started?</h3>
            <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST">
                <input type="hidden" name="action" value="submit_contact_form">

                <div class="form-row">
                    <div class="form-group">
                        <label>First Name*</label>
                        <input type="text" name="first_name" placeholder="Jane" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name*</label>
                        <input type="text" name="last_name" placeholder="Doe" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Phone*</label>
                        <input type="tel" name="phone" placeholder="(555) 123-4567" required>
                    </div>
                    <div class="form-group">
                        <label>Email*</label>
                        <input type="email" name="email" placeholder="jane@example.com" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Insurance Provider</label>
                    <input type="text" name="insurance" placeholder="e.g. Blue Cross Blue Shield">
                </div>

                <div class="form-group">
                    <label>How can we help?</label>
                    <textarea name="message" placeholder="Tell us about your child and what you're looking for..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">
                    Send Message
                    <span class="btn-arrow">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </span>
                </button>
            </form>
        </div>

        <div class="contact-info-panel" data-animate>
            <h3>We're here to help your child thrive</h3>
            <p>Have questions? Our friendly team is ready to answer them.</p>

            <div class="contact-item">
                <div class="contact-item-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                </div>
                <a href="tel:6123094135">(612) 309-4135</a>
            </div>

            <div class="contact-item">
                <div class="contact-item-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                </div>
                <a href="mailto:info@treehousetherapymn.com">info@treehousetherapymn.com</a>
            </div>

            <div class="contact-item">
                <div class="contact-item-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                </div>
                <span>Serving Minneapolis/St. Paul & Greater MN</span>
            </div>
        </div>
    </div>
</section>

<!-- Floating Help Widget -->
<div id="floatingHelp" aria-label="Help and support">
    <button class="floating-help-toggle" aria-expanded="false" aria-label="Get help">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
            <path d="M12 7v6M12 17h.01"/>
        </svg>
    </button>
    
    <div class="floating-help-panel" role="dialog" aria-labelledby="helpTitle">
        <button class="floating-help-close" aria-label="Close help panel">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18 6L6 18M6 6l12 12"/>
            </svg>
        </button>
        
        <h3 id="helpTitle">Questions?</h3>
        <p>We're here to help! Get started or reach out directly.</p>
        
        <div class="floating-help-links">
            <a href="<?php echo home_url('/contact'); ?>" class="floating-help-link">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Contact Us
            </a>
            <a href="<?php echo home_url('/services'); ?>" class="floating-help-link">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                </svg>
                Our Services
            </a>
            <a href="tel:6123094135" class="floating-help-link">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                </svg>
                Call (612) 309-4135
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
