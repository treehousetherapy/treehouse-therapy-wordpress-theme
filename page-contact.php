<?php
/**
 * Template Name: Contact Page
 * Treehouse Therapy Center - Contact Page
 */

get_header();
?>

<!-- Hero Section -->
<section class="section bg-white pt-32 pb-16 overflow-hidden">
    <div class="container-custom">
        <div class="max-w-3xl mx-auto text-center" data-animate="fade-up">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6" style="color: var(--primary-navy);">
                Get in <span class="gradient-text">Touch</span>
            </h1>
            <p class="text-xl" style="color: var(--text-medium);">
                Have questions about ABA therapy? Ready to start your child's journey? We're here to help.
            </p>
        </div>
    </div>
</section>

<!-- Wave Divider -->
<div class="wave-divider-curve" style="background: #F5F5F5;">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none" style="width: 100%; height: 60px; display: block; transform: rotate(180deg);">
        <path d="M0,50 C360,80 720,80 1080,50 C1260,35 1380,25 1440,20 L1440,0 L0,0 Z" fill="#FFFFFF"/>
    </svg>
</div>

<!-- Contact Section -->
<section class="section bg-gray-light py-20">
    <div class="container-custom">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Contact Info -->
            <div data-animate="fade-up">
                <h2 class="text-3xl font-bold mb-8" style="color: var(--primary-navy);">
                    We'd Love to Hear From You
                </h2>
                
                <div class="space-y-6 mb-12">
                    <!-- Phone -->
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 rounded-full flex items-center justify-center" style="background: var(--gradient-orange);">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold mb-1" style="color: var(--primary-navy);">Phone</h4>
                            <p style="color: var(--text-medium);">
                                <a href="tel:6123094135" class="hover:underline">(612) 309-4135</a><br>
                                <a href="tel:6517657444" class="hover:underline">(651) 765-7444</a>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 rounded-full flex items-center justify-center" style="background: var(--gradient-teal);">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold mb-1" style="color: var(--primary-navy);">Email</h4>
                            <p style="color: var(--text-medium);">
                                <a href="mailto:info@treehousetherapymn.com" class="hover:underline">info@treehousetherapymn.com</a>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Service Area -->
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 rounded-full flex items-center justify-center" style="background: var(--gradient-navy);">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold mb-1" style="color: var(--primary-navy);">Service Area</h4>
                            <p style="color: var(--text-medium);">
                                Greater Twin Cities Metro<br>
                                Minneapolis / St. Paul, Minnesota
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="card p-6">
                    <h4 class="font-bold mb-3" style="color: var(--primary-navy);">What to Include in Your Message</h4>
                    <ul class="space-y-2 text-sm" style="color: var(--text-medium);">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Your child's name and age
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Any diagnosis or evaluation info
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Your insurance provider (if applicable)
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            What you're hoping to achieve
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="card p-8" style="box-shadow: var(--shadow-form);" data-animate="fade-up">
                <h3 class="text-2xl font-bold mb-6" style="color: var(--primary-navy);">Send Us a Message</h3>
                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" class="space-y-4">
                    <input type="hidden" name="action" value="submit_contact_form">
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="form-label">First Name*</label>
                            <input type="text" name="first_name" class="form-input" placeholder="Jane" required>
                        </div>
                        <div>
                            <label class="form-label">Last Name*</label>
                            <input type="text" name="last_name" class="form-input" placeholder="Doe" required>
                        </div>
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
                        <label class="form-label">Subject</label>
                        <select name="subject" class="form-input">
                            <option value="consultation">Request a Consultation</option>
                            <option value="insurance">Insurance Questions</option>
                            <option value="careers">Careers / Employment</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="form-label">Message*</label>
                        <textarea name="message" class="form-input" rows="4" placeholder="Tell us about your child and how we can help..." required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-full text-lg">
                        Send Message
                    </button>
                    
                    <p class="text-xs text-center" style="color: var(--text-light);">
                        This site is protected by reCAPTCHA. Your information is secure and will never be shared.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Wave Divider to CTA -->
<div class="wave-divider-curve" style="background: var(--primary-navy);">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none" style="width: 100%; height: 60px; display: block; transform: rotate(180deg);">
        <path d="M0,50 C360,80 720,80 1080,50 C1260,35 1380,25 1440,20 L1440,0 L0,0 Z" fill="#F5F5F5"/>
    </svg>
</div>

<!-- CTA Section -->
<section class="section py-20 text-white text-center" style="background: var(--gradient-navy);">
    <div class="container-custom">
        <div class="max-w-2xl mx-auto" data-animate="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Prefer to Talk?
            </h2>
            <p class="text-xl mb-8 opacity-90">
                Our team is available to answer your questions and help you get started.
            </p>
            <a href="tel:6123094135" class="btn btn-primary text-lg">
                Call (612) 309-4135
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
