<?php
/**
 * Template Name: Careers Page
 * Treehouse Therapy Center - Careers Page
 * Upstream Flow Design System
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-upstream" style="min-height: auto; padding: 8rem 2rem 4rem;">
    <div class="hero-bg-pattern"></div>

    <!-- Decorative elements -->
    <div class="hero-decor decor-rocket">
        <svg viewBox="0 0 80 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M40 5C40 5 65 25 65 55C65 75 55 90 40 95C25 90 15 75 15 55C15 25 40 5 40 5Z" fill="white" fill-opacity="0.9"/>
            <circle cx="40" cy="45" r="10" fill="#E91E8C"/>
            <path d="M35 85H45L40 100L35 85Z" fill="#FF6B6B"/>
        </svg>
    </div>

    <div class="hero-decor decor-cloud-2">
        <svg viewBox="0 0 100 50" fill="white" fill-opacity="0.8">
            <ellipse cx="25" cy="30" rx="20" ry="15"/>
            <ellipse cx="50" cy="25" rx="25" ry="18"/>
            <ellipse cx="75" cy="32" rx="18" ry="12"/>
        </svg>
    </div>

    <div style="max-width: 900px; margin: 0 auto; text-align: center; position: relative; z-index: 10;" data-animate>
        <h1 style="color: var(--navy-deep); margin-bottom: 1.5rem;">
            Join a Team That <span class="highlight-box">Makes a Difference</span>
        </h1>
        <p style="font-size: 1.25rem; color: var(--text-medium); max-width: 700px; margin: 0 auto;">
            At Treehouse Therapy, you'll be part of a caring, supportive team dedicated to helping children and families thrive. If you're passionate about making an impact, we'd love to meet you.
        </p>
    </div>
</section>

<!-- Wave Transition -->
<div class="wave-transition" style="background: #C5E6F3;">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
        <path d="M0,0 C360,100 1080,100 1440,0 L1440,100 L0,100 Z" fill="#F0F9FF"/>
    </svg>
</div>

<!-- Why Work Here Section -->
<section class="section-aba-fun">
    <div class="aba-fun-container">
        <div class="aba-fun-header" data-animate>
            <h2>Why <span class="highlight-box highlight-pink">Treehouse</span>?</h2>
        </div>

        <div class="blob-container" data-animate>
            <div class="blob blob-pink">
                <div class="blob-shape"></div>
                <h4>Meaningful Work</h4>
                <p>See real progress every day</p>
            </div>

            <div class="blob blob-yellow">
                <div class="blob-shape"></div>
                <h4>Supportive Team</h4>
                <p>Collaborative, caring culture</p>
            </div>

            <div class="blob blob-teal">
                <div class="blob-shape"></div>
                <h4>Growth</h4>
                <p>Professional development & training</p>
            </div>
        </div>
    </div>
</section>

<!-- Who Thrives Here -->
<section class="section-services">
    <div class="section-header" data-animate>
        <h2>Who <span class="highlight-box">Thrives</span> Here</h2>
        <p>The qualities that make great team members</p>
    </div>

    <div class="services-grid" data-stagger>
        <div class="service-card" data-animate>
            <div class="service-illustration">
                <svg viewBox="0 0 160 140" fill="none">
                    <circle cx="80" cy="60" r="40" fill="#E8F6F5" stroke="#2AA198" stroke-width="3"/>
                    <path d="M60 60L75 75L100 50" stroke="#2AA198" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M60 50C55 45 50 45 50 50C50 55 55 60 60 65C65 60 70 55 70 50C70 45 65 45 60 50Z" fill="#E91E8C"/>
                    <path d="M90 50C85 45 80 45 80 50C80 55 85 60 90 65C95 60 100 55 100 50C100 45 95 45 90 50Z" fill="#E91E8C"/>
                </svg>
            </div>
            <h3>Compassionate</h3>
            <p>You genuinely care about helping children and families reach their goals, bringing empathy and patience to every session.</p>
        </div>

        <div class="service-card" data-animate>
            <div class="service-illustration">
                <svg viewBox="0 0 160 140" fill="none">
                    <circle cx="80" cy="70" r="45" fill="#E8F6F5" stroke="#FFC107" stroke-width="3"/>
                    <circle cx="65" cy="60" r="5" fill="#1E3A5F"/>
                    <circle cx="95" cy="60" r="5" fill="#1E3A5F"/>
                    <path d="M60 85 Q80 100 100 85" stroke="#E91E8C" stroke-width="3" stroke-linecap="round"/>
                    <path d="M50 50 Q45 35 60 40" stroke="#8B5A2B" stroke-width="6" stroke-linecap="round"/>
                    <path d="M110 50 Q115 35 100 40" stroke="#8B5A2B" stroke-width="6" stroke-linecap="round"/>
                </svg>
            </div>
            <h3>Positive & Energetic</h3>
            <p>You bring joy and enthusiasm to your work, making therapy fun and engaging for the children you support.</p>
        </div>

        <div class="service-card" data-animate>
            <div class="service-illustration">
                <svg viewBox="0 0 160 140" fill="none">
                    <rect x="40" y="40" width="80" height="80" rx="10" fill="#E8F6F5" stroke="#2AA198" stroke-width="3"/>
                    <circle cx="60" cy="65" r="8" fill="#FFC107"/>
                    <circle cx="100" cy="65" r="8" fill="#E91E8C"/>
                    <circle cx="60" cy="100" r="8" fill="#48C9B0"/>
                    <circle cx="100" cy="100" r="8" fill="#9B59B6"/>
                    <path d="M60 65 L100 65 L100 100 L60 100 Z" stroke="#2AA198" stroke-width="2" stroke-dasharray="4 2"/>
                </svg>
            </div>
            <h3>Detail-Oriented</h3>
            <p>You understand the importance of accurate data collection and consistent implementation of therapy plans.</p>
        </div>
    </div>
</section>

<!-- Wave Transition -->
<div class="wave-transition wave-transition-flip" style="background: white;">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
        <path d="M0,100 C480,0 960,0 1440,100 L1440,0 L0,0 Z" fill="#F0F9FF"/>
    </svg>
</div>

<!-- Open Positions -->
<section class="section-skills">
    <div class="skills-container">
        <div class="skills-header" data-animate>
            <h2>Open <span class="highlight-box">Positions</span></h2>
            <p>Join our growing team</p>
        </div>

        <div class="skills-grid" data-stagger>
            <div class="skill-card" data-animate>
                <div class="skill-icon skill-icon-teal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                        <circle cx="12" cy="7" r="4"/>
                    </svg>
                </div>
                <div class="skill-content">
                    <h4>Registered Behavior Technician (RBT)</h4>
                    <p>Provide direct ABA therapy to children in home and community settings</p>
                </div>
            </div>

            <div class="skill-card" data-animate>
                <div class="skill-icon skill-icon-pink">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <div class="skill-content">
                    <h4>Board Certified Behavior Analyst (BCBA)</h4>
                    <p>Lead clinical programming, supervise RBTs, and support families</p>
                </div>
            </div>

            <div class="skill-card" data-animate>
                <div class="skill-icon skill-icon-yellow">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                    </svg>
                </div>
                <div class="skill-content">
                    <h4>Clinical Director</h4>
                    <p>Oversee clinical operations and ensure quality service delivery</p>
                </div>
            </div>

            <div class="skill-card" data-animate>
                <div class="skill-icon skill-icon-coral">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                    </svg>
                </div>
                <div class="skill-content">
                    <h4>Administrative Support</h4>
                    <p>Help families navigate insurance, scheduling, and coordination</p>
                </div>
            </div>

            <div class="skill-card" data-animate>
                <div class="skill-icon skill-icon-purple">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5"/>
                        <path d="M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <div class="skill-content">
                    <h4>Internship Opportunities</h4>
                    <p>Gain hands-on experience while pursuing BCBA certification</p>
                </div>
            </div>

            <div class="skill-card" data-animate>
                <div class="skill-icon skill-icon-teal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M12 6v6l4 2"/>
                    </svg>
                </div>
                <div class="skill-content">
                    <h4>Part-Time & Full-Time</h4>
                    <p>Flexible scheduling options to fit your lifestyle</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="section-process">
    <div class="process-header" data-animate>
        <h2>Benefits & Support</h2>
        <p>We invest in our team because you invest in our families</p>
    </div>

    <div class="process-flow">
        <div class="process-steps" data-stagger>
            <div class="process-step" data-animate>
                <div class="step-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                    </svg>
                </div>
                <h4>Competitive Pay</h4>
                <p>Above-market rates with performance bonuses</p>
            </div>

            <div class="process-step" data-animate>
                <div class="step-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                </div>
                <h4>Flexible Schedule</h4>
                <p>Work hours that fit your life</p>
            </div>

            <div class="process-step" data-animate>
                <div class="step-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                    </svg>
                </div>
                <h4>Training & CEUs</h4>
                <p>Ongoing professional development opportunities</p>
            </div>

            <div class="process-step" data-animate>
                <div class="step-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h4>Supportive Culture</h4>
                <p>Collaborative team that has your back</p>
            </div>
        </div>
    </div>
</section>

<!-- Wave Transition -->
<div class="wave-transition" style="background: linear-gradient(180deg, #2AA198 0%, #4ECDC4 100%);">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
        <path d="M0,50 Q360,100 720,50 T1440,50 L1440,100 L0,100 Z" fill="#F0F9FF"/>
    </svg>
</div>

<!-- Application Process -->
<section class="section-contact">
    <div class="contact-container">
        <div class="contact-form-wrapper" data-animate>
            <h3>Apply Today</h3>
            <p style="margin-bottom: 2rem; color: var(--text-medium);">Send us your resume and tell us why you'd be a great fit for our team.</p>
            <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="submit_career_form">

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
                    <label>Position of Interest*</label>
                    <select name="position" class="form-input" required>
                        <option value="">Select a position...</option>
                        <option value="RBT">Registered Behavior Technician (RBT)</option>
                        <option value="BCBA">Board Certified Behavior Analyst (BCBA)</option>
                        <option value="Clinical Director">Clinical Director</option>
                        <option value="Administrative">Administrative Support</option>
                        <option value="Internship">Internship</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tell us about yourself*</label>
                    <textarea name="message" placeholder="Why are you interested in joining Treehouse Therapy? What experience do you bring?" required></textarea>
                </div>

                <div class="form-group">
                    <label>Resume/CV*</label>
                    <input type="file" name="resume" accept=".pdf,.doc,.docx" class="form-input" required style="padding: 0.75rem;">
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">
                    Submit Application
                    <span class="btn-arrow">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </span>
                </button>
            </form>
        </div>

        <div class="contact-info-panel" data-animate>
            <h3>Questions About Working Here?</h3>
            <p>We'd love to hear from you!</p>

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
                <a href="mailto:careers@treehousetherapymn.com">careers@treehousetherapymn.com</a>
            </div>

            <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid rgba(30, 58, 95, 0.2);">
                <p style="font-size: 0.9rem; opacity: 0.9;">
                    We're an equal opportunity employer committed to building a diverse and inclusive team.
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
