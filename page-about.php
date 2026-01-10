<?php
/**
 * Template Name: About Page
 * Treehouse Therapy Center - About Page
 * Structure based on Upstream ABA blueprint
 */

get_header();
?>

<!-- Hero Section: What is ABA? -->
<section class="section bg-white pt-32 pb-16 overflow-hidden">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto text-center" data-animate="fade-up">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6" style="color: var(--primary-navy);">
                What is <span class="gradient-text">ABA Therapy?</span>
            </h1>
            <p class="text-xl mb-4" style="color: var(--text-medium); max-width: 700px; margin: 0 auto;">
                Applied Behavior Analysis (ABA) is a scientifically proven therapy that helps children with autism develop essential life skills through positive reinforcement and individualized learning strategies.
            </p>
            <p class="text-lg" style="color: var(--text-medium);">
                <strong style="color: var(--primary-navy);">Ages served:</strong> Birth through 21 years
            </p>
        </div>
        
        <!-- 3 Benefit Tiles -->
        <div class="grid md:grid-cols-3 gap-8 mt-16" data-animate-group>
            <div class="card p-8 text-center" data-animate="fade-up">
                <div class="w-16 h-16 mx-auto mb-6 rounded-full flex items-center justify-center" style="background: var(--gradient-teal);">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: var(--primary-navy);">Building Essential Skills</h3>
                <p style="color: var(--text-medium);">Developing communication, social, and daily living skills that last a lifetime.</p>
            </div>
            
            <div class="card p-8 text-center" data-animate="fade-up">
                <div class="w-16 h-16 mx-auto mb-6 rounded-full flex items-center justify-center" style="background: var(--gradient-orange);">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: var(--primary-navy);">Increasing Positive Behaviors</h3>
                <p style="color: var(--text-medium);">Encouraging growth through positive reinforcement and meaningful rewards.</p>
            </div>
            
            <div class="card p-8 text-center" data-animate="fade-up">
                <div class="w-16 h-16 mx-auto mb-6 rounded-full flex items-center justify-center" style="background: var(--gradient-navy);">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: var(--primary-navy);">Communicating & Connecting</h3>
                <p style="color: var(--text-medium);">Helping children express themselves and build meaningful relationships.</p>
            </div>
        </div>
    </div>
</section>

<!-- Wave Divider -->
<div class="wave-divider-curve" style="background: #F5F5F5;">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none" style="width: 100%; height: 60px; display: block; transform: rotate(180deg);">
        <path d="M0,50 C360,80 720,80 1080,50 C1260,35 1380,25 1440,20 L1440,0 L0,0 Z" fill="#FFFFFF"/>
    </svg>
</div>

<!-- Brand Philosophy Section -->
<section class="section bg-gray-light py-20">
    <div class="container-custom">
        <div class="text-center mb-16" data-animate="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4" style="color: var(--primary-navy);">
                Our <span class="gradient-text">Philosophy</span>
            </h2>
            <p class="text-lg max-w-2xl mx-auto" style="color: var(--text-medium);">
                Every child deserves to feel confident, capable, and connected. We believe in therapy that celebrates individuality.
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8" data-animate-group>
            <!-- The Child -->
            <div class="text-center" data-animate="fade-up">
                <div class="w-24 h-24 mx-auto mb-6 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg, #DA9B4D 0%, #E8B84D 100%);">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3" style="color: var(--primary-navy);">The Child</h3>
                <p style="color: var(--text-medium);">
                    Your child is the champion. Every session is designed around their unique strengths, interests, and goals.
                </p>
            </div>
            
            <!-- The Team -->
            <div class="text-center" data-animate="fade-up">
                <div class="w-24 h-24 mx-auto mb-6 rounded-full flex items-center justify-center" style="background: var(--gradient-teal);">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3" style="color: var(--primary-navy);">The Team</h3>
                <p style="color: var(--text-medium);">
                    Our therapists are supporters, not directors. We work alongside your family to create meaningful change.
                </p>
            </div>
            
            <!-- Belonging -->
            <div class="text-center" data-animate="fade-up">
                <div class="w-24 h-24 mx-auto mb-6 rounded-full flex items-center justify-center" style="background: var(--gradient-navy);">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3" style="color: var(--primary-navy);">Belonging</h3>
                <p style="color: var(--text-medium);">
                    Every child deserves dignity, joy, and a sense of belonging. That's what we work toward every day.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Wave Divider -->
<div class="wave-divider-curve" style="background: #FFFFFF;">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none" style="width: 100%; height: 60px; display: block; transform: rotate(180deg);">
        <path d="M0,50 C360,80 720,80 1080,50 C1260,35 1380,25 1440,20 L1440,0 L0,0 Z" fill="#F5F5F5"/>
    </svg>
</div>

<!-- Finding What Works Section -->
<section class="section bg-white py-20">
    <div class="container-custom">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-animate="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6" style="color: var(--primary-navy);">
                    Finding <span class="gradient-text">What Works</span>
                </h2>
                <p class="text-lg mb-6" style="color: var(--text-medium);">
                    There's no one-size-fits-all approach to ABA therapy. We take the time to understand your child—their personality, their preferences, their potential—and design a plan that works for your whole family.
                </p>
                <p class="text-lg" style="color: var(--text-medium);">
                    Our BCBAs work closely with parents and caregivers to set meaningful goals, track progress with real data, and adjust strategies as your child grows.
                </p>
            </div>
            
            <div class="grid grid-cols-2 gap-6" data-animate="fade-up">
                <!-- 4 Value Cards -->
                <div class="card p-6" style="border-top: 4px solid var(--primary-orange);">
                    <h4 class="font-bold mb-2" style="color: var(--primary-navy);">Build Skills That Matter</h4>
                    <p class="text-sm" style="color: var(--text-medium);">Focus on real-world skills that make daily life easier.</p>
                </div>
                <div class="card p-6" style="border-top: 4px solid var(--accent-teal);">
                    <h4 class="font-bold mb-2" style="color: var(--primary-navy);">Make Progress Visible</h4>
                    <p class="text-sm" style="color: var(--text-medium);">Data-driven tracking so you see growth happening.</p>
                </div>
                <div class="card p-6" style="border-top: 4px solid var(--primary-orange);">
                    <h4 class="font-bold mb-2" style="color: var(--primary-navy);">Keep Therapy Joyful</h4>
                    <p class="text-sm" style="color: var(--text-medium);">Learning through play, not pressure or stress.</p>
                </div>
                <div class="card p-6" style="border-top: 4px solid var(--accent-teal);">
                    <h4 class="font-bold mb-2" style="color: var(--primary-navy);">Design for Real Life</h4>
                    <p class="text-sm" style="color: var(--text-medium);">Skills that transfer beyond therapy sessions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Wave Divider -->
<div class="wave-divider-curve" style="background: #F5F5F5;">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none" style="width: 100%; height: 60px; display: block; transform: rotate(180deg);">
        <path d="M0,50 C360,80 720,80 1080,50 C1260,35 1380,25 1440,20 L1440,0 L0,0 Z" fill="#FFFFFF"/>
    </svg>
</div>

<!-- Right at Home Section -->
<section class="section bg-gray-light py-20">
    <div class="container-custom">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1" data-animate="fade-up">
                <div class="grid grid-cols-3 gap-4">
                    <div class="card p-6 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full flex items-center justify-center" style="background: var(--gradient-orange);">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </div>
                        <p class="text-sm font-semibold" style="color: var(--primary-navy);">In-Home</p>
                    </div>
                    <div class="card p-6 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full flex items-center justify-center" style="background: var(--gradient-teal);">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <p class="text-sm font-semibold" style="color: var(--primary-navy);">School</p>
                    </div>
                    <div class="card p-6 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full flex items-center justify-center" style="background: var(--gradient-navy);">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <p class="text-sm font-semibold" style="color: var(--primary-navy);">Community</p>
                    </div>
                </div>
            </div>
            
            <div class="order-1 lg:order-2" data-animate="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6" style="color: var(--primary-navy);">
                    Right <span class="gradient-text">Where You Are</span>
                </h2>
                <p class="text-lg mb-6" style="color: var(--text-medium);">
                    Therapy works best where your child feels comfortable. That's why we offer services in your home, at school, and in the community.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span style="color: var(--text-medium);">Practice everyday skills in natural settings</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span style="color: var(--text-medium);">Celebrate small wins along the way</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span style="color: var(--text-medium);">Build lasting change that transfers everywhere</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Wave Divider -->
<div class="wave-divider-curve" style="background: #FFFFFF;">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none" style="width: 100%; height: 60px; display: block; transform: rotate(180deg);">
        <path d="M0,50 C360,80 720,80 1080,50 C1260,35 1380,25 1440,20 L1440,0 L0,0 Z" fill="#F5F5F5"/>
    </svg>
</div>

<!-- Partner Promise Section -->
<section class="section bg-white py-20">
    <div class="container-custom">
        <div class="text-center mb-16" data-animate="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4" style="color: var(--primary-navy);">
                You're Choosing a Partner Who...
            </h2>
        </div>
        
        <div class="grid md:grid-cols-4 gap-8" data-animate-group>
            <div class="text-center" data-animate="fade-up">
                <div class="w-20 h-20 mx-auto mb-4 rounded-full flex items-center justify-center" style="background: var(--gradient-orange);">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2" style="color: var(--primary-navy);">Listens</h3>
                <p class="text-sm" style="color: var(--text-medium);">We hear your concerns, your hopes, and your child's unique needs.</p>
            </div>
            
            <div class="text-center" data-animate="fade-up">
                <div class="w-20 h-20 mx-auto mb-4 rounded-full flex items-center justify-center" style="background: var(--gradient-teal);">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2" style="color: var(--primary-navy);">Responds</h3>
                <p class="text-sm" style="color: var(--text-medium);">Quick communication and updates so you're never left wondering.</p>
            </div>
            
            <div class="text-center" data-animate="fade-up">
                <div class="w-20 h-20 mx-auto mb-4 rounded-full flex items-center justify-center" style="background: var(--gradient-navy);">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2" style="color: var(--primary-navy);">Adapts</h3>
                <p class="text-sm" style="color: var(--text-medium);">We adjust strategies as your child grows and changes.</p>
            </div>
            
            <div class="text-center" data-animate="fade-up">
                <div class="w-20 h-20 mx-auto mb-4 rounded-full flex items-center justify-center" style="background: var(--gradient-orange);">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2" style="color: var(--primary-navy);">Celebrates</h3>
                <p class="text-sm" style="color: var(--text-medium);">Every milestone matters. We celebrate progress together.</p>
            </div>
        </div>
    </div>
</section>

<!-- Wave Divider to CTA -->
<div class="wave-divider-curve" style="background: var(--primary-navy);">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none" style="width: 100%; height: 60px; display: block; transform: rotate(180deg);">
        <path d="M0,50 C360,80 720,80 1080,50 C1260,35 1380,25 1440,20 L1440,0 L0,0 Z" fill="#FFFFFF"/>
    </svg>
</div>

<!-- CTA Section with Service Areas -->
<section class="section py-20 text-white" style="background: var(--gradient-navy);">
    <div class="container-custom">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-animate="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Serving the Greater <span style="color: var(--primary-orange);">Twin Cities</span>
                </h2>
                <p class="text-lg mb-6 opacity-90">
                    Treehouse Therapy Center provides in-home ABA services throughout the Minneapolis-St. Paul metro area, including:
                </p>
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            </svg>
                            Lakeville
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            </svg>
                            Apple Valley
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            </svg>
                            Burnsville
                        </li>
                    </ul>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            </svg>
                            Eagan
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            </svg>
                            Bloomington
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            </svg>
                            Minneapolis
                        </li>
                    </ul>
                </div>
                <a href="<?php echo home_url('/locations'); ?>" class="btn btn-secondary" style="background: white; color: var(--primary-navy); border: none;">
                    View All Service Areas →
                </a>
            </div>
            
            <!-- Contact Form -->
            <div class="bg-white rounded-2xl p-8" style="box-shadow: 0 20px 50px -12px rgba(0,0,0,0.3);" data-animate="fade-up">
                <h3 class="text-2xl font-bold mb-6" style="color: var(--primary-navy);">Request a Consultation</h3>
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
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="form-label">State</label>
                            <input type="text" name="state" class="form-input" value="Minnesota" readonly>
                        </div>
                        <div>
                            <label class="form-label">Zip Code</label>
                            <input type="text" name="zip" class="form-input" placeholder="55044">
                        </div>
                    </div>
                    <div>
                        <label class="form-label">Insurance Provider</label>
                        <input type="text" name="insurance" class="form-input" placeholder="e.g. Blue Cross Blue Shield">
                    </div>
                    <div>
                        <label class="form-label">Message</label>
                        <textarea name="message" class="form-input" rows="3" placeholder="Tell us about your child and how we can help..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-full text-lg">
                        Submit Request
                    </button>
                    <p class="text-xs text-center" style="color: var(--text-light);">
                        This site is protected by reCAPTCHA. Your information is secure.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
