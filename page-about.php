<?php
/**
 * Template Name: About Page
 * Treehouse Therapy Center - About Us (Redesigned)
 */

get_header();
?>

<!-- About Hero Section - Split Layout -->
<section class="about-hero">
    <div class="about-hero-bg">
        <div class="about-hero-shape about-hero-shape-1"></div>
        <div class="about-hero-shape about-hero-shape-2"></div>
        <div class="about-hero-shape about-hero-shape-3"></div>
    </div>
    
    <div class="about-hero-container">
        <div class="about-hero-grid">
            <!-- Left: Content -->
            <div class="about-hero-content" data-animate>
                <p class="about-hero-eyebrow">About Treehouse Therapy Center</p>
                <h1 class="about-hero-title">
                    Building <span class="highlight-pill">confident</span>, connected kids—one family at a time.
                </h1>
                <p class="about-hero-subhead">
                    We're a family-centered ABA therapy practice dedicated to helping children with autism thrive in the place they feel most comfortable: home.
                </p>
                
                <div class="about-hero-buttons">
                    <a href="#team" class="btn btn-primary btn-lg">
                        Meet Our Team
                        <span class="btn-arrow">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </a>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-ghost btn-lg">
                        Get Started
                    </a>
                </div>
                
                <ul class="about-hero-trust">
                    <li>
                        <span class="trust-icon">✓</span>
                        Ages 2–12
                    </li>
                    <li>
                        <span class="trust-icon">✓</span>
                        Minneapolis/St. Paul metro
                    </li>
                    <li>
                        <span class="trust-icon">✓</span>
                        Most insurances accepted
                    </li>
                </ul>
            </div>
            
            <!-- Right: Illustration/Graphic -->
            <div class="about-hero-visual" data-animate>
                <div class="about-hero-illustration">
                    <div class="illustration-blob"></div>
                    <div class="illustration-icon">
                        <svg viewBox="0 0 120 120" fill="none">
                            <!-- Treehouse icon -->
                            <circle cx="60" cy="60" r="55" fill="rgba(80, 128, 184, 0.1)"/>
                            <path d="M60 25L95 50V90H25V50L60 25Z" fill="#98B860" fill-opacity="0.3"/>
                            <path d="M60 25L95 50V90H25V50L60 25Z" stroke="#5080B8" stroke-width="3"/>
                            <rect x="50" y="60" width="20" height="30" fill="#F0D860" rx="2"/>
                            <rect x="35" y="55" width="15" height="15" fill="white" stroke="#5080B8" stroke-width="2" rx="2"/>
                            <rect x="70" y="55" width="15" height="15" fill="white" stroke="#5080B8" stroke-width="2" rx="2"/>
                            <circle cx="60" cy="15" r="8" fill="#98B860"/>
                            <path d="M55 15h10M60 10v10" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="floating-badge floating-badge-1">
                        <span class="badge-icon">🏠</span>
                        <span class="badge-text">Home-Based</span>
                    </div>
                    <div class="floating-badge floating-badge-2">
                        <span class="badge-icon">💛</span>
                        <span class="badge-text">Family-Centered</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sticky Section Navigation -->
<nav class="about-nav" id="about-nav">
    <div class="about-nav-container">
        <a href="#story" class="about-nav-link">Our Story</a>
        <a href="#mission" class="about-nav-link">Mission</a>
        <a href="#difference" class="about-nav-link">What's Different</a>
        <a href="#values" class="about-nav-link">Values</a>
        <a href="#team" class="about-nav-link">Team</a>
        <a href="#approach" class="about-nav-link">Approach</a>
    </div>
</nav>

<!-- Story Section - Two Column -->
<section id="story" class="about-story">
    <div class="about-story-container">
        <div class="about-story-grid">
            <!-- Left: Story Content -->
            <div class="about-story-content" data-animate>
                <p class="section-label">Our Story</p>
                <h2>Why We Started Treehouse</h2>
                
                <div class="story-text">
                    <p>Treehouse Therapy Center was founded with a simple belief: every child with autism deserves access to high-quality, compassionate care—delivered in a way that actually fits their family's life.</p>
                    
                    <p>We saw too many families struggling to find providers who understood their needs. Long waitlists. Inconvenient clinic hours. One-size-fits-all approaches. Services that didn't account for cultural differences or family dynamics.</p>
                    
                    <p><strong>We knew there had to be a better way.</strong></p>
                    
                    <p>That's why we built Treehouse around what families actually need: home-based therapy that comes to you, personalized care that respects your culture and values, and a team that treats your child like family—not just a case number.</p>
                </div>
            </div>
            
            <!-- Right: At a Glance Card -->
            <div class="about-story-sidebar" data-animate>
                <div class="at-a-glance-card">
                    <h3>At a Glance</h3>
                    <ul class="glance-list">
                        <li>
                            <div class="glance-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                            </div>
                            <div class="glance-text">
                                <strong>Ages 2–12</strong>
                                <span>Early intervention focus</span>
                            </div>
                        </li>
                        <li>
                            <div class="glance-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <div class="glance-text">
                                <strong>Twin Cities Metro</strong>
                                <span>Minneapolis & St. Paul area</span>
                            </div>
                        </li>
                        <li>
                            <div class="glance-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                                    <polyline points="9 22 9 12 15 12 15 22"/>
                                </svg>
                            </div>
                            <div class="glance-text">
                                <strong>Home-Based Care</strong>
                                <span>Therapy where life happens</span>
                            </div>
                        </li>
                        <li>
                            <div class="glance-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12 2l7 4v6c0 5-3.5 9.5-7 10-3.5-.5-7-5-7-10V6l7-4z"/>
                                </svg>
                            </div>
                            <div class="glance-text">
                                <strong>EIDBI Experts</strong>
                                <span>Minnesota program specialists</span>
                            </div>
                        </li>
                        <li>
                            <div class="glance-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <path d="M2 12h20"/>
                                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                                </svg>
                            </div>
                            <div class="glance-text">
                                <strong>Culturally Responsive</strong>
                                <span>Honoring your family's values</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section id="mission" class="about-mission">
    <div class="about-mission-container">
        <div class="about-mission-header" data-animate>
            <p class="section-label">Our Purpose</p>
            <h2>What Drives Us</h2>
        </div>
        
        <div class="about-mission-grid" data-stagger>
            <div class="mission-card" data-animate>
                <div class="mission-card-label">Our Mission</div>
                <div class="mission-card-icon mission-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2l7 4v6c0 5-3.5 9.5-7 10-3.5-.5-7-5-7-10V6l7-4z"/>
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                </div>
                <h3>Personalized Care, Real Results</h3>
                <p>To provide personalized, family-centered ABA therapy that helps children with autism develop confidence, independence, and lifelong skills—all within the comfort of their own home.</p>
            </div>

            <div class="mission-card" data-animate>
                <div class="mission-card-label">Our Vision</div>
                <div class="mission-card-icon vision-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </div>
                <h3>Access for Every Child</h3>
                <p>A community where every child with autism has access to early, effective intervention that sets them up for a fulfilling life—regardless of their background, location, or circumstances.</p>
            </div>
        </div>
    </div>
</section>

<!-- The Treehouse Difference Section -->
<section id="difference" class="about-difference">
    <div class="about-difference-container">
        <div class="about-difference-header" data-animate>
            <span class="section-label">WHY TREEHOUSE</span>
            <h2>What Makes Us <span class="highlight-pill">Different</span></h2>
            <p class="section-intro">We're not trying to be the biggest ABA provider. We're trying to be the best fit for your family. Here's what sets us apart:</p>
        </div>

        <div class="difference-cards" data-stagger>
            <div class="diff-card" data-animate>
                <div class="diff-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                </div>
                <h3>Home-Based Focus</h3>
                <p>Learning happens best where life happens. We bring expert therapy to your home, where skills are practiced in real situations.</p>
            </div>

            <div class="diff-card" data-animate>
                <div class="diff-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                    </svg>
                </div>
                <h3>Small Practice, Big Heart</h3>
                <p>We keep caseloads small so every family gets personal attention. You're not a number—you're part of our community.</p>
            </div>

            <div class="diff-card" data-animate>
                <div class="diff-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                </div>
                <h3>EIDBI Expertise</h3>
                <p>We navigate Minnesota's complex EIDBI system for you—handling paperwork, insurance, and compliance so you don't have to.</p>
            </div>

            <div class="diff-card" data-animate>
                <div class="diff-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M2 12h20"/>
                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                    </svg>
                </div>
                <h3>Culturally Responsive</h3>
                <p>We honor your family's culture, language, and traditions. Your child's identity is celebrated, not changed.</p>
            </div>

            <div class="diff-card" data-animate>
                <div class="diff-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3>Parent Partnership</h3>
                <p>You know your child best. We collaborate, listen, and build your confidence as your child's strongest advocate.</p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section id="values" class="about-values">
    <div class="about-values-container">
        <div class="about-values-header" data-animate>
            <p class="section-label">Our Core Values</p>
            <h2>The Heart Behind Everything We Do</h2>
        </div>

        <div class="values-cards" data-stagger>
            <div class="value-item" data-animate>
                <div class="value-item-icon compassion-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                    </svg>
                </div>
                <h3>Compassion</h3>
                <p>Every interaction is rooted in empathy. We treat your child the way we'd want our own children treated.</p>
            </div>

            <div class="value-item" data-animate>
                <div class="value-item-icon quality-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2l7 4v6c0 5-3.5 9.5-7 10-3.5-.5-7-5-7-10V6l7-4z"/>
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                </div>
                <h3>Quality</h3>
                <p>We never cut corners. From hiring to treatment planning, we hold ourselves to the highest clinical standards.</p>
            </div>

            <div class="value-item" data-animate>
                <div class="value-item-icon transparency-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </div>
                <h3>Transparency</h3>
                <p>No surprises. We communicate openly about progress, approach, and any challenges we encounter.</p>
            </div>

            <div class="value-item" data-animate>
                <div class="value-item-icon family-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                </div>
                <h3>Family First</h3>
                <p>Your family's needs drive every decision. Therapy should make your life easier, not harder.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="about-team">
    <div class="about-team-container">
        <div class="about-team-header" data-animate>
            <p class="section-label">Our People</p>
            <h2>Meet the <span class="highlight-pill">Team</span></h2>
            <p class="section-intro">Our team is small by design. You'll work with dedicated professionals who truly know your child.</p>
        </div>

        <div class="team-cards" data-stagger>
            <!-- Team Member 1 -->
            <div class="team-card" data-animate>
                <div class="team-card-photo">
                    <div class="team-photo-circle">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                </div>
                <div class="team-card-info">
                    <h3>[Clinical Director Name]</h3>
                    <p class="team-credential">BCBA, LBA</p>
                    <p class="team-title">Clinical Director</p>
                    <p class="team-bio">With extensive experience in pediatric ABA, [Name] leads our clinical team with compassion and expertise, specializing in early intervention and family-centered care.</p>
                    <p class="team-fun-fact"><span>Fun fact:</span> [Personal detail that humanizes them]</p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="team-card" data-animate>
                <div class="team-card-photo">
                    <div class="team-photo-circle">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                </div>
                <div class="team-card-info">
                    <h3>[BCBA Name]</h3>
                    <p class="team-credential">BCBA</p>
                    <p class="team-title">Board Certified Behavior Analyst</p>
                    <p class="team-bio">[Name] brings passion for helping families navigate their journey, celebrating when children reach milestones their families once thought impossible.</p>
                    <p class="team-fun-fact"><span>Fun fact:</span> [Personal detail]</p>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="team-card" data-animate>
                <div class="team-card-photo">
                    <div class="team-photo-circle">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                </div>
                <div class="team-card-info">
                    <h3>[RBT Name]</h3>
                    <p class="team-credential">RBT</p>
                    <p class="team-title">Registered Behavior Technician</p>
                    <p class="team-bio">[Name] works directly with children and families, bringing energy, patience, and creativity to every session—finding new ways to make learning fun.</p>
                    <p class="team-fun-fact"><span>Fun fact:</span> [Personal detail]</p>
                </div>
            </div>
        </div>

        <div class="team-cta" data-animate>
            <p>Interested in joining our growing team?</p>
            <a href="<?php echo home_url('/careers'); ?>" class="btn btn-ghost">
                View Career Opportunities →
            </a>
        </div>
    </div>
</section>

<!-- ABA Approach Section -->
<section id="approach" class="about-approach">
    <div class="about-approach-container">
        <div class="about-approach-grid">
            <!-- Left: Approach Cards -->
            <div class="about-approach-main" data-animate>
                <p class="section-label">Our Approach</p>
                <h2>How We Practice ABA</h2>
                <p class="section-intro">ABA therapy has evolved significantly. Here's what modern, ethical ABA looks like at Treehouse:</p>

                <div class="approach-items" data-stagger>
                    <div class="approach-item" data-animate>
                        <div class="approach-item-badge">1</div>
                        <div class="approach-item-content">
                            <h4>Play-Based & Child-Led</h4>
                            <p>We follow your child's lead and use their interests to make learning engaging.</p>
                        </div>
                    </div>

                    <div class="approach-item" data-animate>
                        <div class="approach-item-badge">2</div>
                        <div class="approach-item-content">
                            <h4>Naturalistic Teaching</h4>
                            <p>Skills are taught during everyday activities—not drills at a table.</p>
                        </div>
                    </div>

                    <div class="approach-item" data-animate>
                        <div class="approach-item-badge">3</div>
                        <div class="approach-item-content">
                            <h4>Positive Reinforcement</h4>
                            <p>We focus on building positive behaviors and celebrating progress.</p>
                        </div>
                    </div>

                    <div class="approach-item" data-animate>
                        <div class="approach-item-badge">4</div>
                        <div class="approach-item-content">
                            <h4>Individualized Goals</h4>
                            <p>Every treatment plan is built around your child's unique needs and strengths.</p>
                        </div>
                    </div>

                    <div class="approach-item" data-animate>
                        <div class="approach-item-badge">5</div>
                        <div class="approach-item-content">
                            <h4>Family Involvement</h4>
                            <p>Parents are essential partners. We train you to reinforce skills between sessions.</p>
                        </div>
                    </div>

                    <div class="approach-item" data-animate>
                        <div class="approach-item-badge">6</div>
                        <div class="approach-item-content">
                            <h4>Ethical Practice</h4>
                            <p>We follow BACB ethics and celebrate graduation when children are ready.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: What to Expect Card -->
            <div class="about-approach-sidebar" data-animate>
                <div class="expect-card">
                    <h3>What to Expect</h3>
                    <ul class="expect-list">
                        <li>
                            <span class="expect-icon">📅</span>
                            <span>10-25 hours/week of therapy</span>
                        </li>
                        <li>
                            <span class="expect-icon">🏠</span>
                            <span>Sessions in your home</span>
                        </li>
                        <li>
                            <span class="expect-icon">👩‍⚕️</span>
                            <span>Dedicated RBT therapist</span>
                        </li>
                        <li>
                            <span class="expect-icon">📊</span>
                            <span>Monthly BCBA supervision</span>
                        </li>
                        <li>
                            <span class="expect-icon">👪</span>
                            <span>Regular parent training</span>
                        </li>
                        <li>
                            <span class="expect-icon">📈</span>
                            <span>Progress updates every session</span>
                        </li>
                    </ul>
                    <a href="<?php echo home_url('/our-process'); ?>" class="btn btn-primary btn-sm">
                        Learn More About Our Process →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="about-cta">
    <div class="about-cta-container" data-animate>
        <div class="about-cta-content">
            <h2>Ready to Learn More?</h2>
            <p>We'd love to hear about your family and explore how we can help. No pressure, no obligation—just a conversation.</p>
            <div class="about-cta-buttons">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary btn-lg">
                    Schedule a Free Consultation
                    <span class="btn-arrow">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </span>
                </a>
                <a href="tel:6123094135" class="btn btn-ghost-light btn-lg">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="btn-icon">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    Call (612) 309-4135
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Sticky nav active state on scroll
document.addEventListener('DOMContentLoaded', function() {
    const nav = document.getElementById('about-nav');
    const navLinks = nav.querySelectorAll('.about-nav-link');
    const sections = document.querySelectorAll('section[id]');
    
    // Smooth scroll for nav links
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            if (targetSection) {
                const offset = nav.offsetHeight + 20;
                const targetPosition = targetSection.offsetTop - offset;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Active state on scroll
    function updateActiveLink() {
        const scrollPosition = window.scrollY + nav.offsetHeight + 100;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === '#' + sectionId) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }
    
    window.addEventListener('scroll', updateActiveLink);
    updateActiveLink();
});
</script>

<?php get_footer(); ?>
