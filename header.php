<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Aviation ABA Style Header: Transparent at top, solid white when scrolled -->
<header id="masthead" class="site-header">
    <div class="header-inner py-4">
        <div class="container-custom">
            <div class="flex items-center justify-between px-4">

                <!-- Logo -->
                <div class="site-branding">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center space-x-3">
                        <div class="w-12 h-12">
                            <!-- Treehouse Logo with Airplane/Heart motif -->
                            <svg viewBox="0 0 100 100" class="w-full h-full">
                                <!-- Tree trunk -->
                                <rect x="42" y="60" width="16" height="30" fill="#6E4C1E" rx="2"/>
                                <!-- Tree canopy -->
                                <circle cx="50" cy="45" r="30" fill="#48C9B0"/>
                                <circle cx="35" cy="55" r="18" fill="#5DADE2"/>
                                <circle cx="65" cy="55" r="18" fill="#5DADE2"/>
                                <!-- Heart accent -->
                                <path d="M50 35 C45 30, 38 32, 38 40 C38 48, 50 55, 50 55 C50 55, 62 48, 62 40 C62 32, 55 30, 50 35Z" fill="#E8912D"/>
                            </svg>
                        </div>
                        <div>
                            <span class="block text-xl font-nunito font-bold" style="color: var(--primary-navy);">
                                Treehouse Therapy Center
                            </span>
                            <span class="block text-xs" style="color: var(--teal-light);">
                                Building a foundation for growth
                            </span>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center space-x-8">
                    <a href="<?php echo home_url('/'); ?>" class="nav-link">Home</a>
                    <a href="<?php echo home_url('/about'); ?>" class="nav-link">About</a>
                    <a href="<?php echo home_url('/services'); ?>" class="nav-link">Services</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="nav-link">Contact</a>
                </nav>

                <!-- CTA Button (Orange Pill) -->
                <div class="hidden lg:block">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">
                        Contact Us
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-toggle" class="lg:hidden" style="color: var(--primary-navy);">
                    <span class="sr-only">Menu</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu">
        <div class="px-4 py-6 space-y-4">
            <a href="<?php echo home_url('/'); ?>" class="block py-2 text-lg font-nunito nav-link">Home</a>
            <a href="<?php echo home_url('/about'); ?>" class="block py-2 text-lg font-nunito nav-link">About</a>
            <a href="<?php echo home_url('/services'); ?>" class="block py-2 text-lg font-nunito nav-link">Services</a>
            <a href="<?php echo home_url('/contact'); ?>" class="block py-2 text-lg font-nunito nav-link">Contact</a>
            <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary w-full mt-4">Contact Us</a>
        </div>
    </div>
</header>

<div id="content" class="site-content pt-24">
