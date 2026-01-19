<?php
/**
 * Template Name: Our Process
 * Treehouse Therapy Center - How It Works
 */

get_header();
?>

<!-- Hero Section -->
<section class="page-hero page-hero-process">
    <div class="page-hero-container">
        <div class="page-hero-content" data-animate>
            <h1>How It Works</h1>
            <p class="page-hero-subhead">Getting started is simple. Here's what to expect every step of the way.</p>
            <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary btn-lg">
                Start the Process
                <span class="btn-arrow">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </span>
            </a>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section class="section-intro">
    <div class="section-intro-container">
        <div class="section-intro-content" data-animate>
            <h2>From First Call to First Session</h2>
            <div class="intro-text">
                <p>We know starting therapy can feel overwhelming. That's why we've designed our process to be as straightforward and stress-free as possible. We handle the complicated stuff—insurance, paperwork, scheduling—so you can focus on what matters most: your child.</p>
                <p>Most families move from initial contact to starting services within 4-8 weeks, depending on insurance authorization timelines.</p>
            </div>
        </div>
    </div>
</section>

<!-- Process Steps Section -->
<section class="section-process-steps">
    <div class="process-steps-container">
        <div class="process-steps-header" data-animate>
            <h2>Your Journey With <span class="highlight-box highlight-yellow">Treehouse</span></h2>
        </div>

        <div class="process-steps-detailed">
            <!-- Step 1: Connect With Us -->
            <div class="process-step-detailed" data-animate>
                <div class="process-step-number">
                    <span>1</span>
                </div>
                <div class="process-step-content">
                    <div class="process-step-header-row">
                        <div class="process-step-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                        </div>
                        <div>
                            <h3>Connect With Us</h3>
                            <span class="process-timeline">Day 1</span>
                        </div>
                    </div>
                    
                    <div class="process-step-details">
                        <div class="process-detail-block">
                            <h4>What happens:</h4>
                            <ul>
                                <li>You reach out via our contact form, phone, or email</li>
                                <li>We schedule a free 15-20 minute consultation call</li>
                                <li>We answer your questions about ABA, EIDBI, and our services</li>
                                <li>We gather basic information about your child and family</li>
                            </ul>
                        </div>

                        <div class="process-detail-block">
                            <h4>What you'll need:</h4>
                            <ul>
                                <li>Your child's autism diagnosis (if available)</li>
                                <li>Your insurance information</li>
                                <li>Any questions you have for us</li>
                            </ul>
                        </div>

                        <div class="process-detail-block">
                            <h4>What we do:</h4>
                            <ul>
                                <li>Explain our services and approach</li>
                                <li>Determine if we're a good fit for your family</li>
                                <li>Begin the intake process if you're ready to proceed</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2: Insurance Verification -->
            <div class="process-step-detailed" data-animate>
                <div class="process-step-number">
                    <span>2</span>
                </div>
                <div class="process-step-content">
                    <div class="process-step-header-row">
                        <div class="process-step-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2l7 4v6c0 5-3.5 9.5-7 10-3.5-.5-7-5-7-10V6l7-4z"/>
                                <path d="M9 12l2 2 4-4"/>
                            </svg>
                        </div>
                        <div>
                            <h3>Insurance Verification</h3>
                            <span class="process-timeline">1-3 business days</span>
                        </div>
                    </div>
                    
                    <div class="process-step-details">
                        <div class="process-detail-block">
                            <h4>What happens:</h4>
                            <ul>
                                <li>We verify your insurance benefits and EIDBI coverage</li>
                                <li>We explain your coverage, including any copays or deductibles</li>
                                <li>We handle prior authorization requests</li>
                                <li>We coordinate with Minnesota Medicaid or your health plan</li>
                            </ul>
                        </div>

                        <div class="process-detail-block">
                            <h4>What you'll need:</h4>
                            <ul>
                                <li>Insurance card (front and back)</li>
                                <li>Child's diagnosis documentation</li>
                                <li>Prescriber referral (we can help you obtain this if needed)</li>
                            </ul>
                        </div>

                        <div class="process-detail-block">
                            <h4>What we do:</h4>
                            <ul>
                                <li>Contact your insurance on your behalf</li>
                                <li>Navigate EIDBI program requirements</li>
                                <li>Keep you informed throughout the process</li>
                                <li>Answer any coverage questions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3: Initial Assessment -->
            <div class="process-step-detailed" data-animate>
                <div class="process-step-number">
                    <span>3</span>
                </div>
                <div class="process-step-content">
                    <div class="process-step-header-row">
                        <div class="process-step-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <polyline points="14 2 14 8 20 8"/>
                                <line x1="16" y1="13" x2="8" y2="13"/>
                                <line x1="16" y1="17" x2="8" y2="17"/>
                            </svg>
                        </div>
                        <div>
                            <h3>Initial Assessment</h3>
                            <span class="process-timeline">2-4 weeks after authorization</span>
                        </div>
                    </div>
                    
                    <div class="process-step-details">
                        <div class="process-detail-block">
                            <h4>What happens:</h4>
                            <ul>
                                <li>A Board Certified Behavior Analyst (BCBA) visits your home</li>
                                <li>We observe your child in their natural environment</li>
                                <li>We talk with you about your child's strengths, challenges, and your goals</li>
                                <li>We conduct standardized assessments to understand your child's current skills</li>
                                <li>The assessment typically takes 2-4 hours (can be split across visits)</li>
                            </ul>
                        </div>

                        <div class="process-detail-block">
                            <h4>What you'll need:</h4>
                            <ul>
                                <li>Be present during the assessment</li>
                                <li>Share any relevant reports (school evaluations, previous therapy records)</li>
                                <li>Tell us about your priorities and concerns</li>
                            </ul>
                        </div>

                        <div class="process-detail-block">
                            <h4>What we do:</h4>
                            <ul>
                                <li>Complete a comprehensive evaluation</li>
                                <li>Identify skill areas to target</li>
                                <li>Understand your family's routines and dynamics</li>
                                <li>Begin building a relationship with your child</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4: Treatment Planning -->
            <div class="process-step-detailed" data-animate>
                <div class="process-step-number">
                    <span>4</span>
                </div>
                <div class="process-step-content">
                    <div class="process-step-header-row">
                        <div class="process-step-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 11l3 3L22 4"/>
                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/>
                            </svg>
                        </div>
                        <div>
                            <h3>Treatment Planning</h3>
                            <span class="process-timeline">1-2 weeks after assessment</span>
                        </div>
                    </div>
                    
                    <div class="process-step-details">
                        <div class="process-detail-block">
                            <h4>What happens:</h4>
                            <ul>
                                <li>The BCBA develops a personalized treatment plan</li>
                                <li>We schedule a meeting to review the plan together</li>
                                <li>We discuss goals, therapy hours, and what to expect</li>
                                <li>We make adjustments based on your input</li>
                                <li>The plan is submitted to insurance for final approval</li>
                            </ul>
                        </div>

                        <div class="process-detail-block">
                            <h4>What you'll need:</h4>
                            <ul>
                                <li>Review and sign the treatment plan</li>
                                <li>Ask questions and share feedback</li>
                                <li>Confirm your availability for therapy sessions</li>
                            </ul>
                        </div>

                        <div class="process-detail-block">
                            <h4>What we do:</h4>
                            <ul>
                                <li>Create individualized, measurable goals</li>
                                <li>Recommend appropriate therapy intensity</li>
                                <li>Match your family with a therapist</li>
                                <li>Finalize scheduling</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 5: Therapy Begins -->
            <div class="process-step-detailed" data-animate>
                <div class="process-step-number">
                    <span>5</span>
                </div>
                <div class="process-step-content">
                    <div class="process-step-header-row">
                        <div class="process-step-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                            </svg>
                        </div>
                        <div>
                            <h3>Therapy Begins</h3>
                            <span class="process-timeline">Within 1-2 weeks of plan approval</span>
                        </div>
                    </div>
                    
                    <div class="process-step-details">
                        <div class="process-detail-block">
                            <h4>What happens:</h4>
                            <ul>
                                <li>Your assigned therapist (RBT) begins regular sessions in your home</li>
                                <li>Sessions focus on your child's treatment goals</li>
                                <li>The BCBA provides ongoing supervision (at least monthly)</li>
                                <li>We track progress and share updates with you regularly</li>
                            </ul>
                        </div>

                        <div class="process-detail-block">
                            <h4>What you'll need:</h4>
                            <ul>
                                <li>Be available during sessions (or ensure another caregiver is present)</li>
                                <li>Participate in parent training as scheduled</li>
                                <li>Communicate with our team about any concerns or changes</li>
                            </ul>
                        </div>

                        <div class="process-detail-block">
                            <h4>What we do:</h4>
                            <ul>
                                <li>Deliver high-quality, engaging therapy sessions</li>
                                <li>Monitor progress and adjust as needed</li>
                                <li>Provide regular parent training and support</li>
                                <li>Celebrate milestones along the way</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 6: Ongoing Progress & Graduation -->
            <div class="process-step-detailed" data-animate>
                <div class="process-step-number">
                    <span>6</span>
                </div>
                <div class="process-step-content">
                    <div class="process-step-header-row">
                        <div class="process-step-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                                <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                            </svg>
                        </div>
                        <div>
                            <h3>Ongoing Progress & Graduation</h3>
                            <span class="process-timeline">Ongoing</span>
                        </div>
                    </div>
                    
                    <div class="process-step-details">
                        <div class="process-detail-block">
                            <h4>What happens:</h4>
                            <ul>
                                <li>We reassess your child's progress regularly (typically every 6 months)</li>
                                <li>Goals are updated as your child masters skills</li>
                                <li>Therapy intensity may decrease as your child progresses</li>
                                <li>When goals are met, we celebrate graduation from services</li>
                            </ul>
                        </div>

                        <div class="process-detail-block">
                            <h4>What you'll need:</h4>
                            <ul>
                                <li>Continue participating in therapy and training</li>
                                <li>Share feedback on what's working</li>
                                <li>Celebrate your child's achievements!</li>
                            </ul>
                        </div>

                        <div class="process-detail-block">
                            <h4>What we do:</h4>
                            <ul>
                                <li>Track data and measure outcomes</li>
                                <li>Adjust treatment plans based on progress</li>
                                <li>Prepare your child for independence</li>
                                <li>Support transitions (to school, reduced services, etc.)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Overview Section -->
<section class="section-timeline-overview">
    <div class="timeline-overview-container">
        <div class="timeline-overview-header" data-animate>
            <h2>How Long Does It Take?</h2>
        </div>

        <div class="timeline-visual" data-animate>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <strong>Week 1</strong>
                    <span>Initial contact & consultation</span>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <strong>Week 1-2</strong>
                    <span>Insurance verification</span>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <strong>Week 3-5</strong>
                    <span>Assessment scheduling & completion</span>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <strong>Week 5-7</strong>
                    <span>Treatment plan development & approval</span>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <strong>Week 7-8</strong>
                    <span>Therapy begins</span>
                </div>
            </div>
        </div>

        <p class="timeline-note" data-animate>
            <strong>Note:</strong> Timelines vary based on insurance authorization processes. We work to minimize delays and keep you informed every step of the way.
        </p>
    </div>
</section>

<!-- FAQ Snippet Section -->
<section class="section-faq-snippet">
    <div class="faq-snippet-container">
        <div class="faq-snippet-header" data-animate>
            <h2>Common Questions About Getting Started</h2>
        </div>

        <div class="faq-snippet-grid" data-stagger>
            <div class="faq-snippet-item" data-animate>
                <h4>Do I need a diagnosis before contacting you?</h4>
                <p>An autism diagnosis is required for EIDBI services, but we can help guide you through the diagnostic process if you're still in that stage.</p>
            </div>

            <div class="faq-snippet-item" data-animate>
                <h4>How many hours of therapy will my child need?</h4>
                <p>Therapy hours are determined based on your child's individual needs and typically range from 10-25 hours per week. We'll discuss recommendations during the treatment planning process.</p>
            </div>

            <div class="faq-snippet-item" data-animate>
                <h4>Will the same therapist work with my child every session?</h4>
                <p>Yes, consistency is important. Your child will be matched with a dedicated therapist who will work with them regularly.</p>
            </div>
        </div>

        <a href="<?php echo home_url('/faqs'); ?>" class="btn btn-ghost" data-animate>View All FAQs →</a>
    </div>
</section>

<!-- CTA Section -->
<section class="section-cta-simple">
    <div class="cta-simple-container" data-animate>
        <h2>Ready to Take the First Step?</h2>
        <p>Starting therapy is a big decision. We're here to answer your questions and help you feel confident about the path forward.</p>
        <div class="cta-simple-buttons">
            <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary btn-lg">
                Contact Us Today
                <span class="btn-arrow">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </span>
            </a>
            <a href="tel:6123094135" class="btn btn-ghost btn-lg">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 20px; height: 20px; margin-right: 0.5rem;">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
                Call: (612) 309-4135
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
