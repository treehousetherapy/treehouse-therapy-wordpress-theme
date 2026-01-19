<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Upstream Flow Design System Styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/upstream-style.css" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header -->
<?php $header_classes = 'site-header'; ?>
<?php if (is_front_page()) { $header_classes .= ' site-header--hero'; } ?>
<header class="<?php echo esc_attr($header_classes); ?>" data-header-mode="auto" id="main-header">
    <div class="header-inner">
        <!-- Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo site-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/THTC_NEW_LOGO.png" alt="Treehouse Therapy Center" class="header-logo-img">
        </a>

        <!-- Desktop Navigation -->
        <nav class="nav-main main-nav">
            <a href="<?php echo home_url('/'); ?>" class="nav-link">Home</a>
            <a href="<?php echo home_url('/about'); ?>" class="nav-link">About</a>
            <a href="<?php echo home_url('/services'); ?>" class="nav-link">Services</a>
            <a href="<?php echo home_url('/careers'); ?>" class="nav-link">Careers</a>
            <a href="<?php echo home_url('/contact'); ?>" class="nav-link">Contact</a>
        </nav>

        <!-- CTA Buttons -->
        <div class="header-cta">
            <a href="tel:6123094135" class="btn-phone">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
                (612) 309-4135
            </a>
            <a href="<?php echo home_url('/contact'); ?>" class="btn-contact">
                Contact Us
                <span class="arrow">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </span>
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button onclick="toggleMenu()" class="mobile-menu-btn" aria-label="Toggle menu">
            <svg class="menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="mobile-menu">
        <nav class="mobile-nav">
            <a href="<?php echo home_url('/'); ?>" class="mobile-nav-link">Home</a>
            <a href="<?php echo home_url('/about'); ?>" class="mobile-nav-link">About</a>
            <a href="<?php echo home_url('/services'); ?>" class="mobile-nav-link">Services</a>
            <a href="<?php echo home_url('/careers'); ?>" class="mobile-nav-link">Careers</a>
            <a href="<?php echo home_url('/contact'); ?>" class="mobile-nav-link">Contact</a>
            <a href="tel:6123094135" class="btn btn-pink mobile-cta">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
                Call Us
            </a>
        </nav>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.site-header[data-header-mode="auto"]');
  const hero = document.querySelector('#page-hero');

  if (!header) return;

  const setMode = (mode) => {
    header.classList.toggle('is-light', mode === 'light');
    header.classList.toggle('is-dark', mode === 'dark');
  };

  const heroMode = hero?.classList.contains('hero--light') ? 'light' : 'dark';
  setMode(heroMode);

  const onScroll = () => {
    if (!hero) return setMode('light');
    const heroBottom = hero.getBoundingClientRect().bottom;
    // Once you scroll past hero, force readable light header everywhere
    if (heroBottom <= 80) setMode('light');
    else setMode(heroMode);
  };

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
});
</script>

<!-- Main Content -->
<main>
