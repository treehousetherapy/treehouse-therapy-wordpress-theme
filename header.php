<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="header-container bg-white/90 backdrop-blur-md shadow-sm">
        <div class="container-custom">
            <div class="flex items-center justify-between h-20 px-4">
                
                <!-- Logo -->
                <div class="site-branding">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center space-x-3">
                        <div class="w-12 h-12">
                            <svg viewBox="0 0 100 100" class="w-full h-full">
                                <rect x="42" y="60" width="16" height="30" fill="#6E4C1E" rx="2"/>
                                <circle cx="50" cy="50" r="25" fill="#48C9B0" opacity="0.8"/>
                                <circle cx="40" cy="45" r="18" fill="#48C9B0"/>
                                <circle cx="60" cy="42" r="20" fill="#5DADE2" opacity="0.9"/>
                                <rect x="35" y="35" width="30" height="20" fill="#E8912D" rx="2"/>
                                <path d="M32 35 L50 25 L68 35 Z" fill="#1E3A5F"/>
                                <rect x="42" y="40" width="7" height="7" fill="#F5B041" rx="1"/>
                                <rect x="52" y="40" width="7" height="7" fill="#F5B041" rx="1"/>
                                <rect x="46" y="48" width="7" height="7" fill="#6E4C1E" rx="1"/>
                            </svg>
                        </div>
                        <div>
                            <span class="block text-xl font-nunito font-bold text-primary-navy">
                                Treehouse Therapy Center
                            </span>
                            <span class="block text-xs text-text-medium">
                                Building a foundation for growth
                            </span>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center space-x-8">
                    <a href="<?php echo home_url('/'); ?>" class="font-nunito font-semibold text-text-dark hover:text-primary-orange">Home</a>
                    <a href="<?php echo home_url('/about'); ?>" class="font-nunito font-semibold text-text-dark hover:text-primary-orange">About</a>
                    <a href="<?php echo home_url('/services'); ?>" class="font-nunito font-semibold text-text-dark hover:text-primary-orange">Services</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="font-nunito font-semibold text-text-dark hover:text-primary-orange">Contact</a>
                </nav>

                <!-- CTA Button -->
                <div class="hidden lg:block">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">
                        Contact Us
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-toggle" class="lg:hidden">
                    <span class="sr-only">Menu</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white shadow-lg">
        <div class="px-4 py-6 space-y-4">
            <a href="<?php echo home_url('/'); ?>" class="block py-2 text-lg font-nunito">Home</a>
            <a href="<?php echo home_url('/about'); ?>" class="block py-2 text-lg font-nunito">About</a>
            <a href="<?php echo home_url('/services'); ?>" class="block py-2 text-lg font-nunito">Services</a>
            <a href="<?php echo home_url('/contact'); ?>" class="block py-2 text-lg font-nunito">Contact</a>
            <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary w-full mt-4">Contact Us</a>
        </div>
    </div>
</header>

<div id="content" class="site-content pt-20">
