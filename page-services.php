<?php
/**
 * Template Name: Services Page
 * Treehouse Therapy Center - Services Page
 * Decision support page with clear service buckets
 */

get_header();
?>

<!-- Hero Section -->
<section class="section bg-white pt-32 pb-16 overflow-hidden">
    <div class="container-custom">
        <div class="max-w-3xl mx-auto text-center" data-animate="fade-up">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6" style="color: var(--primary-navy);">
                ABA Services Built Around <span class="gradient-text">Your Child</span>
            </h1>
            <p class="text-xl" style="color: var(--text-medium);">
                Every child is unique. Our therapy programs are designed to meet your child where they are and help them grow in ways that matter to your family.
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

<!-- Service Cards -->
<section class="section bg-gray-light py-20">
    <div class="container-custom">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" data-animate-group>
            <!-- In-Home ABA Therapy -->
            <div class="card p-8" data-animate="fade-up">
                <div class="w-16 h-16 mb-6 rounded-full flex items-center justify-center" style="background: var(--gradient-orange);">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4" style="color: var(--primary-navy);">In-Home ABA Therapy</h3>
                <p class="mb-4" style="color: var(--text-medium);">
                    One-on-one therapy in the comfort of your home. We work with your child in their natural environment where skills transfer directly to daily life.
                </p>
                <ul class="space-y-2 text-sm" style="color: var(--text-medium);">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Personalized 1:1 sessions
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Flexible scheduling
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Family involvement encouraged
                    </li>
                </ul>
            </div>

            <!-- Parent Training -->
            <div class="card p-8" data-animate="fade-up">
                <div class="w-16 h-16 mb-6 rounded-full flex items-center justify-center" style="background: var(--gradient-teal);">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4" style="color: var(--primary-navy);">Parent Training</h3>
                <p class="mb-4" style="color: var(--text-medium);">
                    Empowering you with the knowledge and techniques to support your child's progress at home, school, and in the community.
                </p>
                <ul class="space-y-2 text-sm" style="color: var(--text-medium);">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--accent-teal);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Evidence-based strategies
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--accent-teal);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Practical, real-world techniques
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--accent-teal);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Ongoing coaching & support
                    </li>
                </ul>
            </div>

            <!-- BCBA Supervision -->
            <div class="card p-8" data-animate="fade-up">
                <div class="w-16 h-16 mb-6 rounded-full flex items-center justify-center" style="background: var(--gradient-navy);">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4" style="color: var(--primary-navy);">BCBA Oversight</h3>
                <p class="mb-4" style="color: var(--text-medium);">
                    Every program is designed and supervised by a Board Certified Behavior Analyst (BCBA) who ensures quality care and meaningful progress.
                </p>
                <ul class="space-y-2 text-sm" style="color: var(--text-medium);">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--primary-navy);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Regular program reviews
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--primary-navy);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Data-driven adjustments
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--primary-navy);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Clear progress reporting
                    </li>
                </ul>
            </div>

            <!-- School Collaboration -->
            <div class="card p-8" data-animate="fade-up">
                <div class="w-16 h-16 mb-6 rounded-full flex items-center justify-center" style="background: var(--gradient-orange);">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4" style="color: var(--primary-navy);">School Collaboration</h3>
                <p class="mb-4" style="color: var(--text-medium);">
                    We work with teachers and school staff to ensure consistency and support your child's success in the classroom.
                </p>
                <ul class="space-y-2 text-sm" style="color: var(--text-medium);">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        IEP/504 support
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Teacher consultations
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Classroom strategies
                    </li>
                </ul>
            </div>

            <!-- Social Skills -->
            <div class="card p-8" data-animate="fade-up">
                <div class="w-16 h-16 mb-6 rounded-full flex items-center justify-center" style="background: var(--gradient-teal);">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4" style="color: var(--primary-navy);">Social Skills</h3>
                <p class="mb-4" style="color: var(--text-medium);">
                    Building meaningful connections through play, conversation, and positive social interactions with peers and family.
                </p>
                <ul class="space-y-2 text-sm" style="color: var(--text-medium);">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--accent-teal);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Play-based learning
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--accent-teal);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Turn-taking & sharing
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--accent-teal);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Emotion recognition
                    </li>
                </ul>
            </div>

            <!-- Daily Living Skills -->
            <div class="card p-8" data-animate="fade-up">
                <div class="w-16 h-16 mb-6 rounded-full flex items-center justify-center" style="background: var(--gradient-navy);">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4" style="color: var(--primary-navy);">Daily Living Skills</h3>
                <p class="mb-4" style="color: var(--text-medium);">
                    Teaching independence through practical skills like dressing, eating, hygiene, and routines that make daily life easier.
                </p>
                <ul class="space-y-2 text-sm" style="color: var(--text-medium);">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--primary-navy);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Self-care routines
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--primary-navy);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Mealtime skills
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--primary-navy);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Safety awareness
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

<!-- Who We Serve -->
<section class="section bg-white py-20">
    <div class="container-custom">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-animate="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6" style="color: var(--primary-navy);">
                    Who We <span class="gradient-text">Serve</span>
                </h2>
                <p class="text-lg mb-6" style="color: var(--text-medium);">
                    We provide ABA therapy for children and young adults diagnosed with autism spectrum disorder (ASD) or related developmental conditions.
                </p>
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 flex-shrink-0 rounded-full flex items-center justify-center" style="background: var(--gradient-orange);">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m3-10.203a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold" style="color: var(--primary-navy);">Ages Birth - 21</h4>
                            <p class="text-sm" style="color: var(--text-medium);">Early intervention through young adulthood transition.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 flex-shrink-0 rounded-full flex items-center justify-center" style="background: var(--gradient-teal);">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold" style="color: var(--primary-navy);">Autism Spectrum Disorder</h4>
                            <p class="text-sm" style="color: var(--text-medium);">ABA is the gold standard treatment for autism.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 flex-shrink-0 rounded-full flex items-center justify-center" style="background: var(--gradient-navy);">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold" style="color: var(--primary-navy);">Referrals Welcome</h4>
                            <p class="text-sm" style="color: var(--text-medium);">Physicians, schools, and families can refer.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card p-8" data-animate="fade-up">
                <h3 class="text-2xl font-bold mb-6" style="color: var(--primary-navy);">What You Can Expect</h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span style="color: var(--text-medium);"><strong style="color: var(--primary-navy);">Data-Driven:</strong> Progress is measured and shared with you regularly.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span style="color: var(--text-medium);"><strong style="color: var(--primary-navy);">Joyful:</strong> Therapy is fun—we use play, praise, and your child's interests.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span style="color: var(--text-medium);"><strong style="color: var(--primary-navy);">Individualized:</strong> Every program is built around your child's unique needs.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 flex-shrink-0 mt-0.5" style="color: var(--primary-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span style="color: var(--text-medium);"><strong style="color: var(--primary-navy);">Family-Centered:</strong> You're an active partner in the therapy process.</span>
                    </li>
                </ul>
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

<!-- Insurance Section -->
<section class="section bg-gray-light py-20">
    <div class="container-custom">
        <div class="text-center mb-12" data-animate="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4" style="color: var(--primary-navy);">
                Insurance & <span class="gradient-text">Funding</span>
            </h2>
            <p class="text-lg max-w-2xl mx-auto" style="color: var(--text-medium);">
                We work with most major insurance providers to make ABA therapy accessible for your family.
            </p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-5 gap-6 max-w-4xl mx-auto" data-animate="fade-up">
            <div class="bg-white rounded-xl p-6 text-center shadow-sm">
                <p class="font-semibold text-sm" style="color: var(--primary-navy);">Blue Cross Blue Shield</p>
            </div>
            <div class="bg-white rounded-xl p-6 text-center shadow-sm">
                <p class="font-semibold text-sm" style="color: var(--primary-navy);">Aetna</p>
            </div>
            <div class="bg-white rounded-xl p-6 text-center shadow-sm">
                <p class="font-semibold text-sm" style="color: var(--primary-navy);">UnitedHealthcare</p>
            </div>
            <div class="bg-white rounded-xl p-6 text-center shadow-sm">
                <p class="font-semibold text-sm" style="color: var(--primary-navy);">Cigna</p>
            </div>
            <div class="bg-white rounded-xl p-6 text-center shadow-sm">
                <p class="font-semibold text-sm" style="color: var(--primary-navy);">Medicaid</p>
            </div>
        </div>
        
        <p class="text-center mt-8 text-sm" style="color: var(--text-light);">
            Don't see your insurance? <a href="<?php echo home_url('/contact'); ?>" style="color: var(--primary-orange);" class="underline">Contact us</a> and we'll verify your benefits for free.
        </p>
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
                Ready to Learn More?
            </h2>
            <p class="text-xl mb-8 opacity-90">
                Every child's journey is different. Let's talk about how we can help yours.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary text-lg">
                    Request a Consultation
                </a>
                <a href="<?php echo home_url('/process'); ?>" class="btn" style="background: white; color: var(--primary-navy);">
                    See Our Process
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
