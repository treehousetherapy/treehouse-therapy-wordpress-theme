<?php
/**
 * Template Name: Services Page
 * Treehouse Therapy Center - Services Page
 */

get_header();
?>

<!-- Hero Section -->
<section class="page-hero page-hero-services">
    <div class="page-hero-container">
        <div class="page-hero-content" data-animate>
            <h1>Our ABA Therapy Services</h1>
            <p class="page-hero-subhead">Personalized, home-based therapy that helps children build skills for life—right where they feel most comfortable.</p>
            <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary btn-lg">
                Get Started Today
                <span class="btn-arrow">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </span>
            </a>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="section-intro">
    <div class="section-intro-container">
        <div class="section-intro-content" data-animate>
            <h2>How We Support Families</h2>
            <div class="intro-text">
                <p>Every child learns differently, and every family has unique needs. At Treehouse Therapy Center, we bring expert ABA therapy directly to your home throughout the Minneapolis/St. Paul metro area. Our approach is built around your child's strengths, your family's routines, and real-life situations where skills matter most.</p>
                <p>We specialize in Early Intensive Developmental and Behavioral Intervention (EIDBI) services for children ages 2-12 with autism spectrum disorder. Our team works closely with you to create a therapy plan that fits your life—not the other way around.</p>
            </div>
        </div>
    </div>
</section>

<!-- Service Cards Section -->
<section class="section-service-cards">
    <div class="service-cards-container">
        <div class="service-cards-header" data-animate>
            <h2>What We Offer</h2>
        </div>

        <div class="service-cards-grid" data-stagger>
            <!-- Card 1: In-Home ABA Therapy -->
            <div class="service-detail-card" data-animate>
                <div class="service-detail-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                </div>
                <h3>In-Home ABA Therapy</h3>
                <p class="service-detail-description">Our therapists come to you, providing one-on-one support in your child's most comfortable environment. Home-based therapy allows us to work on real-life skills during daily routines—mealtimes, playtime, bedtime, and everything in between.</p>
                
                <h4>Benefits:</h4>
                <ul class="service-benefits-list">
                    <li>Skills are learned where they'll be used</li>
                    <li>Parents can observe and participate</li>
                    <li>No commute or schedule disruption</li>
                    <li>Siblings and family can be involved</li>
                    <li>Therapy fits naturally into your routine</li>
                </ul>
            </div>

            <!-- Card 2: School/Daycare Collaboration -->
            <div class="service-detail-card" data-animate>
                <div class="service-detail-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                        <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                    </svg>
                </div>
                <h3>School/Daycare Collaboration</h3>
                <p class="service-detail-description">We partner with your child's school or daycare to ensure consistency across environments. Our team can coordinate with teachers and staff to support your child's learning goals throughout their day.</p>
                
                <h4>Benefits:</h4>
                <ul class="service-benefits-list">
                    <li>Consistency between home and school</li>
                    <li>Support for IEP goals</li>
                    <li>Better peer interactions</li>
                    <li>Teacher collaboration</li>
                    <li>Smoother transitions</li>
                </ul>
            </div>

            <!-- Card 3: Parent & Caregiver Training -->
            <div class="service-detail-card" data-animate>
                <div class="service-detail-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3>Parent & Caregiver Training</h3>
                <p class="service-detail-description">You know your child best. We equip you with practical strategies and techniques to support your child's growth between sessions. Parent training is built into every treatment plan because your involvement is essential to lasting progress.</p>
                
                <h4>Benefits:</h4>
                <ul class="service-benefits-list">
                    <li>Practical tools you can use immediately</li>
                    <li>Confidence in supporting your child</li>
                    <li>Better understanding of ABA techniques</li>
                    <li>Stronger family communication</li>
                    <li>Skills that extend beyond therapy hours</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Skills We Help Develop Section -->
<section class="section-skills-develop">
    <div class="skills-develop-container">
        <div class="skills-develop-header" data-animate>
            <h2>Building Skills That Matter</h2>
            <p>Our therapy targets the skills that make the biggest difference in your child's daily life and long-term independence.</p>
        </div>

        <div class="skills-develop-grid" data-stagger>
            <!-- Communication Skills -->
            <div class="skill-develop-card" data-animate>
                <div class="skill-develop-icon skill-icon-teal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    </svg>
                </div>
                <h3>Communication Skills</h3>
                <ul>
                    <li>Requesting wants and needs</li>
                    <li>Following directions</li>
                    <li>Expressing feelings</li>
                    <li>Conversation skills</li>
                    <li>Using words, signs, or AAC devices</li>
                </ul>
            </div>

            <!-- Social Skills -->
            <div class="skill-develop-card" data-animate>
                <div class="skill-develop-icon skill-icon-pink">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3>Social Skills</h3>
                <ul>
                    <li>Playing with siblings and peers</li>
                    <li>Taking turns and sharing</li>
                    <li>Making eye contact</li>
                    <li>Understanding social cues</li>
                    <li>Building friendships</li>
                </ul>
            </div>

            <!-- Daily Living Skills -->
            <div class="skill-develop-card" data-animate>
                <div class="skill-develop-icon skill-icon-yellow">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                </div>
                <h3>Daily Living Skills</h3>
                <ul>
                    <li>Toileting and hygiene</li>
                    <li>Dressing independently</li>
                    <li>Mealtime routines</li>
                    <li>Following morning/bedtime routines</li>
                    <li>Safety awareness</li>
                </ul>
            </div>

            <!-- Emotional Regulation -->
            <div class="skill-develop-card" data-animate>
                <div class="skill-develop-icon skill-icon-coral">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                    </svg>
                </div>
                <h3>Emotional Regulation</h3>
                <ul>
                    <li>Identifying emotions</li>
                    <li>Coping with frustration</li>
                    <li>Managing transitions</li>
                    <li>Calming strategies</li>
                    <li>Handling unexpected changes</li>
                </ul>
            </div>

            <!-- Behavior Support -->
            <div class="skill-develop-card" data-animate>
                <div class="skill-develop-icon skill-icon-purple">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2l7 4v6c0 5-3.5 9.5-7 10-3.5-.5-7-5-7-10V6l7-4z"/>
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                </div>
                <h3>Behavior Support</h3>
                <ul>
                    <li>Reducing challenging behaviors</li>
                    <li>Building positive alternatives</li>
                    <li>Understanding behavior triggers</li>
                    <li>Developing self-control</li>
                    <li>Following rules and boundaries</li>
                </ul>
            </div>

            <!-- Play & Learning Skills -->
            <div class="skill-develop-card" data-animate>
                <div class="skill-develop-icon skill-icon-teal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                </div>
                <h3>Play & Learning Skills</h3>
                <ul>
                    <li>Independent play</li>
                    <li>Imaginative play</li>
                    <li>Following instructions</li>
                    <li>Attention and focus</li>
                    <li>Pre-academic skills</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Progress Examples Section -->
<section class="section-progress-examples">
    <div class="progress-examples-container">
        <div class="progress-examples-header" data-animate>
            <h2>What Progress Can Look Like</h2>
            <p>Progress looks different for every child. Here's what families often experience after starting therapy with us:</p>
        </div>

        <div class="progress-examples-grid" data-stagger>
            <div class="progress-example-item" data-animate>
                <svg class="progress-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                <span>Fewer meltdowns and smoother transitions</span>
            </div>
            <div class="progress-example-item" data-animate>
                <svg class="progress-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                <span>First words or clearer communication</span>
            </div>
            <div class="progress-example-item" data-animate>
                <svg class="progress-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                <span>Successfully using the toilet independently</span>
            </div>
            <div class="progress-example-item" data-animate>
                <svg class="progress-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                <span>Playing alongside siblings without conflict</span>
            </div>
            <div class="progress-example-item" data-animate>
                <svg class="progress-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                <span>Following a bedtime routine without struggles</span>
            </div>
            <div class="progress-example-item" data-animate>
                <svg class="progress-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                <span>Trying new foods at mealtimes</span>
            </div>
            <div class="progress-example-item" data-animate>
                <svg class="progress-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                <span>Making a friend at school or daycare</span>
            </div>
            <div class="progress-example-item" data-animate>
                <svg class="progress-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                <span>Getting dressed independently</span>
            </div>
            <div class="progress-example-item" data-animate>
                <svg class="progress-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                <span>Expressing feelings instead of hitting or biting</span>
            </div>
            <div class="progress-example-item" data-animate>
                <svg class="progress-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                <span>Sitting through a family meal</span>
            </div>
            <div class="progress-example-item" data-animate>
                <svg class="progress-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                <span>Handling "no" without a tantrum</span>
            </div>
            <div class="progress-example-item" data-animate>
                <svg class="progress-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                <span>Waiting their turn during games</span>
            </div>
        </div>
    </div>
</section>

<!-- Our Approach Section -->
<section class="section-our-approach">
    <div class="our-approach-container">
        <div class="our-approach-header" data-animate>
            <h2>How We Do ABA <span class="highlight-box highlight-yellow">Differently</span></h2>
        </div>

        <div class="our-approach-grid" data-stagger>
            <div class="approach-element" data-animate>
                <div class="approach-number">1</div>
                <h3>Play-Based Learning</h3>
                <p>Learning happens best when it feels like fun. We use your child's interests and natural play to teach new skills in a way that keeps them engaged and wanting more.</p>
            </div>

            <div class="approach-element" data-animate>
                <div class="approach-number">2</div>
                <h3>Family-Centered Care</h3>
                <p>You're the expert on your child. We listen to your insights, respect your values, and build therapy around what matters most to your family.</p>
            </div>

            <div class="approach-element" data-animate>
                <div class="approach-number">3</div>
                <h3>Natural Environment</h3>
                <p>Skills stick when they're learned where they'll be used. That's why we bring therapy to your home—so your child learns in the real world, not a clinical setting.</p>
            </div>

            <div class="approach-element" data-animate>
                <div class="approach-number">4</div>
                <h3>Data-Driven Progress</h3>
                <p>We track progress carefully and adjust our approach based on what's working. You'll always know how your child is doing and what we're working toward.</p>
            </div>

            <div class="approach-element" data-animate>
                <div class="approach-number">5</div>
                <h3>Culturally Responsive</h3>
                <p>Every family is unique. We honor your culture, language, and traditions, tailoring our approach to fit your family's way of life.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-cta-simple">
    <div class="cta-simple-container" data-animate>
        <h2>Ready to Get Started?</h2>
        <p>Every child deserves support that meets them where they are. Let's talk about how we can help your family.</p>
        <div class="cta-simple-buttons">
            <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary btn-lg">
                Contact Us Today
                <span class="btn-arrow">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </span>
            </a>
            <a href="<?php echo home_url('/our-process'); ?>" class="btn btn-ghost btn-lg">Learn About Our Process →</a>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="section-page-contact-form">
    <div class="page-contact-form-container">
        <div class="page-contact-form-header" data-animate>
            <h2>Schedule a Free Consultation</h2>
            <p>Your information is confidential. We'll reach out within 1 business day.</p>
        </div>

        <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" class="page-contact-form" data-animate>
            <input type="hidden" name="action" value="submit_services_contact_form">
            
            <div class="form-row-two">
                <div class="form-group">
                    <label>Parent/Guardian Name*</label>
                    <input type="text" name="parent_name" required>
                </div>
                <div class="form-group">
                    <label>Child's First Name*</label>
                    <input type="text" name="child_name" required>
                </div>
            </div>

            <div class="form-row-two">
                <div class="form-group">
                    <label>Child's Age*</label>
                    <input type="text" name="child_age" required>
                </div>
                <div class="form-group">
                    <label>Phone Number*</label>
                    <input type="tel" name="phone" required>
                </div>
            </div>

            <div class="form-row-two">
                <div class="form-group">
                    <label>Email*</label>
                    <input type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Insurance Provider*</label>
                    <select name="insurance" required>
                        <option value="">Select Insurance</option>
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
            </div>

            <div class="form-group">
                <label>How did you hear about us? (optional)</label>
                <select name="referral_source">
                    <option value="">Select one</option>
                    <option value="Google Search">Google Search</option>
                    <option value="Facebook">Facebook</option>
                    <option value="Instagram">Instagram</option>
                    <option value="Friend/Family Referral">Friend/Family Referral</option>
                    <option value="Doctor/Therapist Referral">Doctor/Therapist Referral</option>
                    <option value="School">School</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label>Message/Questions (optional)</label>
                <textarea name="message" rows="4" placeholder="Tell us about your child and what you're looking for..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                Get Started
                <span class="btn-arrow">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </span>
            </button>
        </form>
    </div>
</section>

<?php get_footer(); ?>
