<?php
/**
 * Template Name: Contact Page
 * Treehouse Therapy Center - Contact Page
 * Upstream Flow Design System
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-upstream" style="min-height: auto; padding: 8rem 2rem 4rem;">
    <div class="hero-bg-pattern"></div>

    <!-- Decorative elements -->
    <div class="hero-decor decor-cloud-1">
        <svg viewBox="0 0 120 60" fill="white" fill-opacity="0.9">
            <ellipse cx="30" cy="40" rx="25" ry="18"/>
            <ellipse cx="55" cy="35" rx="30" ry="22"/>
            <ellipse cx="85" cy="38" rx="22" ry="16"/>
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
            Let's <span class="highlight-box">Connect</span>
        </h1>
        <p style="font-size: 1.25rem; color: var(--text-medium); max-width: 700px; margin: 0 auto;">
            Have questions about ABA therapy? Ready to get started? We're here to help your family take the next step.
        </p>
    </div>
</section>

<!-- Wave Transition -->
<div class="wave-transition" style="background: #C5E6F3;">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
        <path d="M0,0 C360,100 1080,100 1440,0 L1440,100 L0,100 Z" fill="#F0F9FF"/>
    </svg>
</div>

<!-- Contact Methods -->
<section class="section-services" style="padding: 4rem 2rem;">
    <div class="section-header" data-animate>
        <h2>Get in <span class="highlight-box highlight-pink">Touch</span></h2>
        <p>Choose the way that works best for you</p>
    </div>

    <div class="services-grid" data-stagger>
        <div class="service-card" data-animate style="text-align: center;">
            <div class="service-illustration">
                <svg viewBox="0 0 160 140" fill="none">
                    <circle cx="80" cy="70" r="50" fill="#E8F6F5" stroke="#E91E8C" stroke-width="3"/>
                    <path d="M60 55 L70 65 L60 75 L70 75 C75 75 80 70 80 65 C80 60 75 55 70 55 Z" fill="#E91E8C"/>
                    <path d="M100 55 L90 65 L100 75 L90 75 C85 75 80 70 80 65 C80 60 85 55 90 55 Z" fill="#E91E8C"/>
                    <circle cx="60" cy="90" r="6" fill="#FFC107"/>
                    <circle cx="80" cy="95" r="6" fill="#FFC107"/>
                    <circle cx="100" cy="90" r="6" fill="#FFC107"/>
                </svg>
            </div>
            <h3>Call Us</h3>
            <p style="margin-bottom: 1rem;">Speak with our friendly team directly</p>
            <a href="tel:6123094135" class="btn btn-pink" style="font-size: 1.1rem;">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 20px; height: 20px;">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
                (612) 309-4135
            </a>
        </div>

        <div class="service-card" data-animate style="text-align: center;">
            <div class="service-illustration">
                <svg viewBox="0 0 160 140" fill="none">
                    <rect x="30" y="40" width="100" height="70" rx="8" fill="#E8F6F5" stroke="#2AA198" stroke-width="3"/>
                    <path d="M30 50 L80 85 L130 50" stroke="#2AA198" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <circle cx="120" cy="50" r="8" fill="#E91E8C"/>
                    <path d="M117 50 L119 52 L123 48" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h3>Email Us</h3>
            <p style="margin-bottom: 1rem;">We'll respond within 24 hours</p>
            <a href="mailto:info@treehousetherapymn.com" class="btn btn-primary">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 20px; height: 20px;">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                </svg>
                Send Email
                <span class="btn-arrow">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </span>
            </a>
        </div>

        <div class="service-card" data-animate style="text-align: center;">
            <div class="service-illustration">
                <svg viewBox="0 0 160 140" fill="none">
                    <rect x="40" y="35" width="80" height="90" rx="8" fill="#E8F6F5" stroke="#FFC107" stroke-width="3"/>
                    <rect x="50" y="50" width="60" height="8" rx="4" fill="#FFC107" opacity="0.5"/>
                    <rect x="50" y="65" width="60" height="8" rx="4" fill="#2AA198" opacity="0.5"/>
                    <rect x="50" y="80" width="40" height="8" rx="4" fill="#E91E8C" opacity="0.5"/>
                    <rect x="55" y="100" width="50" height="15" rx="7.5" fill="#FFC107"/>
                    <path d="M75 105 L80 110 L87 103" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h3>Fill Out a Form</h3>
            <p style="margin-bottom: 1rem;">Tell us about your child and needs</p>
            <a href="#contact-form" class="btn btn-secondary" style="background: white; color: var(--navy-deep);">
                Get Started
                <span class="btn-arrow" style="background: var(--navy-deep);">
                    <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </span>
            </a>
        </div>
    </div>
</section>

<!-- Location & Hours -->
<section class="section-aba-fun">
    <div class="aba-fun-container">
        <div class="aba-fun-header" data-animate>
            <h2>Serving the <span class="highlight-box highlight-pink">Twin Cities</span></h2>
        </div>

        <div style="max-width: 900px; margin: 0 auto; display: grid; md:grid-cols-3 gap-3rem; text-align: center;" data-stagger>
            <div data-animate>
                <div style="width: 80px; height: 80px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#2AA198" stroke-width="2" style="width: 40px; height: 40px;">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                </div>
                <h3 style="color: var(--navy-deep); margin-bottom: 1rem;">Service Areas</h3>
                <p style="color: var(--text-medium); line-height: 1.8;">
                    Minneapolis<br/>
                    St. Paul<br/>
                    Lakeville<br/>
                    Apple Valley<br/>
                    Eagan<br/>
                    Bloomington<br/>
                    & surrounding areas
                </p>
            </div>

            <div data-animate>
                <div style="width: 80px; height: 80px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#E91E8C" stroke-width="2" style="width: 40px; height: 40px;">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <h3 style="color: var(--navy-deep); margin-bottom: 1rem;">Office Hours</h3>
                <p style="color: var(--text-medium); line-height: 1.8;">
                    <strong>Monday - Friday:</strong><br/>
                    8:00 AM - 6:00 PM<br/><br/>
                    <strong>Saturday:</strong><br/>
                    By appointment<br/><br/>
                    <strong>Sunday:</strong> Closed
                </p>
            </div>

            <div data-animate>
                <div style="width: 80px; height: 80px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#FFC107" stroke-width="2" style="width: 40px; height: 40px;">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                </div>
                <h3 style="color: var(--navy-deep); margin-bottom: 1rem;">Therapy Location</h3>
                <p style="color: var(--text-medium); line-height: 1.8;">
                    We come to you!<br/><br/>
                    Services provided in:<br/>
                    • Your home<br/>
                    • Schools<br/>
                    • Community settings
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section id="contact-form" class="section-contact">
    <div class="contact-container">
        <div class="contact-form-wrapper" data-animate>
            <h3>Request a Consultation</h3>
            <p style="margin-bottom: 2rem; color: var(--text-medium);">Fill out the form below and we'll be in touch within 24 hours to discuss how we can support your child.</p>
            <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST">
                <input type="hidden" name="action" value="submit_contact_form">

                <div class="form-row">
                    <div class="form-group">
                        <label>Parent/Guardian First Name*</label>
                        <input type="text" name="first_name" placeholder="Jane" required>
                    </div>
                    <div class="form-group">
                        <label>Parent/Guardian Last Name*</label>
                        <input type="text" name="last_name" placeholder="Doe" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Phone Number*</label>
                        <input type="tel" name="phone" placeholder="(612) 555-1234" required>
                    </div>
                    <div class="form-group">
                        <label>Email Address*</label>
                        <input type="email" name="email" placeholder="jane@example.com" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Child's Age</label>
                        <input type="text" name="child_age" placeholder="e.g. 5 years old">
                    </div>
                    <div class="form-group">
                        <label>Insurance Provider</label>
                        <input type="text" name="insurance" placeholder="e.g. Blue Cross Blue Shield">
                    </div>
                </div>

                <div class="form-group">
                    <label>How did you hear about us?</label>
                    <select name="referral_source" class="form-input">
                        <option value="">Select one...</option>
                        <option value="Google Search">Google Search</option>
                        <option value="Friend/Family">Friend or Family Member</option>
                        <option value="Doctor">Doctor/Healthcare Provider</option>
                        <option value="School">School</option>
                        <option value="Social Media">Social Media</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tell us about your child and what you're looking for*</label>
                    <textarea name="message" placeholder="Share your child's strengths, challenges, and what you hope to achieve with ABA therapy..." required></textarea>
                </div>

                <div class="form-group">
                    <label style="display: flex; align-items: center; gap: 0.5rem; font-weight: normal;">
                        <input type="checkbox" name="consent" required style="width: auto; margin: 0;">
                        <span>I consent to be contacted by Treehouse Therapy Center regarding ABA services*</span>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">
                    Send Message
                    <span class="btn-arrow">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </span>
                </button>

                <p style="text-align: center; font-size: 0.85rem; color: var(--text-light); margin-top: 1rem;">
                    We respect your privacy. Your information will never be shared with third parties.
                </p>
            </form>
        </div>

        <div class="contact-info-panel" data-animate>
            <h3>Quick Contact</h3>
            <p>Prefer to reach out directly? We're just a phone call or email away.</p>

            <div class="contact-item">
                <div class="contact-item-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                </div>
                <div>
                    <strong style="display: block; margin-bottom: 0.25rem;">Call or Text</strong>
                    <a href="tel:6123094135">(612) 309-4135</a>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-item-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                </div>
                <div>
                    <strong style="display: block; margin-bottom: 0.25rem;">Email</strong>
                    <a href="mailto:info@treehousetherapymn.com">info@treehousetherapymn.com</a>
                </div>
            </div>

            <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid rgba(30, 58, 95, 0.2);">
                <h4 style="margin-bottom: 1rem;">What to Include</h4>
                <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.9rem; opacity: 0.9; line-height: 1.8;">
                    <li>✓ Your child's age and diagnosis</li>
                    <li>✓ Current challenges and goals</li>
                    <li>✓ Insurance information (if applicable)</li>
                    <li>✓ Preferred service location</li>
                    <li>✓ Best times to reach you</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
