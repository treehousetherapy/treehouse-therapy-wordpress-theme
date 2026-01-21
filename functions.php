<?php
/**
 * Treehouse Therapy Center Theme Functions
 * 
 * @package Treehouse_Therapy
 * @since 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function treehouse_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'treehouse-therapy'),
        'footer' => __('Footer Menu', 'treehouse-therapy'),
    ));

    // Set content width
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'treehouse_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function treehouse_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style(
        'treehouse-fonts',
        'https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Main stylesheet (Tailwind compiled)
    wp_enqueue_style(
        'treehouse-styles',
        get_template_directory_uri() . '/dist/css/style.min.css',
        array(),
        filemtime(get_template_directory() . '/dist/css/style.min.css')
    );

    // Upstream design system (overrides)
    wp_enqueue_style(
        'treehouse-upstream',
        get_template_directory_uri() . '/assets/css/upstream-style.css',
        array('treehouse-styles'),
        filemtime(get_template_directory() . '/assets/css/upstream-style.css')
    );

    // Premium enhancements CSS
    wp_enqueue_style(
        'treehouse-premium',
        get_template_directory_uri() . '/assets/css/premium-enhancements.css',
        array('treehouse-upstream'),
        filemtime(get_template_directory() . '/assets/css/premium-enhancements.css')
    );

    // Main JavaScript
    wp_enqueue_script(
        'treehouse-main',
        get_template_directory_uri() . '/dist/js/main.min.js',
        array(),
        filemtime(get_template_directory() . '/dist/js/main.min.js'),
        true
    );

    // Animation JavaScript
    wp_enqueue_script(
        'treehouse-animations',
        get_template_directory_uri() . '/dist/js/animations.min.js',
        array(),
        filemtime(get_template_directory() . '/dist/js/animations.min.js'),
        true
    );

    // Premium enhancements JavaScript
    wp_enqueue_script(
        'treehouse-premium',
        get_template_directory_uri() . '/assets/js/premium-enhancements.js',
        array('treehouse-main', 'treehouse-animations'),
        filemtime(get_template_directory() . '/assets/js/premium-enhancements.js'),
        true
    );

    // Localize script for AJAX
    wp_localize_script('treehouse-main', 'treehouseData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('treehouse-nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'treehouse_enqueue_assets');

/**
 * Company Constants
 */
define('TREEHOUSE_PHONE', '(612) 309-4135');
define('TREEHOUSE_PHONE_ALT', '(651) 765-7444');
define('TREEHOUSE_EMAIL', 'info@treehousetherapymn.com');
define('TREEHOUSE_LOCATION', 'Minneapolis/St. Paul, Minnesota');

/**
 * Helper Functions
 */

// Get company phone number
function treehouse_phone($alt = false) {
    return $alt ? TREEHOUSE_PHONE_ALT : TREEHOUSE_PHONE;
}

// Get company email
function treehouse_email() {
    return TREEHOUSE_EMAIL;
}

// Get service areas
function treehouse_service_areas() {
    return array(
        'Minneapolis',
        'St. Paul',
        'Plymouth',
        'Minnetonka',
        'Edina',
        'Bloomington',
        'Eden Prairie',
        'Burnsville',
        'Maple Grove',
        'Woodbury',
        'Eagan',
        'Apple Valley',
        'Lakeville',
        'Chanhassen',
        'Prior Lake',
        'Shakopee',
        'Roseville',
        'Coon Rapids',
        'Blaine',
    );
}

// Get insurance providers
function treehouse_insurance_providers() {
    return array(
        'Blue Cross Blue Shield',
        'Medicaid/MA',
        'HealthPartners',
        'Aetna',
        'Cigna',
    );
}

/**
 * Component Template Functions
 */

// Button component
function treehouse_button($args = array()) {
    $defaults = array(
        'text' => 'Learn More',
        'url' => '#',
        'style' => 'primary', // primary, secondary, outline
        'icon' => true,
        'size' => 'md', // sm, md, lg
        'class' => '',
    );
    
    $args = wp_parse_args($args, $defaults);
    
    $classes = 'btn btn-' . esc_attr($args['style']) . ' btn-' . esc_attr($args['size']) . ' ' . esc_attr($args['class']);
    
    $output = '<a href="' . esc_url($args['url']) . '" class="' . $classes . '">';
    $output .= esc_html($args['text']);
    if ($args['icon']) {
        $output .= ' <svg class="inline-block w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>';
    }
    $output .= '</a>';
    
    return $output;
}

// Section header
function treehouse_section_header($title, $subtitle = '', $alignment = 'center') {
    $align_class = $alignment === 'center' ? 'text-center' : 'text-left';
    
    $output = '<div class="section-header ' . $align_class . ' mb-12">';
    $output .= '<h2 class="text-4xl md:text-5xl font-bold text-primary-navy mb-4">' . esc_html($title) . '</h2>';
    if ($subtitle) {
        $output .= '<p class="text-xl text-text-medium max-w-3xl ' . ($alignment === 'center' ? 'mx-auto' : '') . '">' . esc_html($subtitle) . '</p>';
    }
    $output .= '</div>';
    
    return $output;
}

/**
 * Contact Form Handler
 */
function treehouse_handle_contact_form() {
    check_ajax_referer('treehouse-nonce', 'nonce');
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Send email
    $to = TREEHOUSE_EMAIL;
    $subject = 'New Contact Form Submission - ' . get_bloginfo('name');
    $body = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\n\nMessage:\n{$message}";
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json_success(array('message' => 'Thank you! We will be in touch soon.'));
    } else {
        wp_send_json_error(array('message' => 'Sorry, there was an error. Please try again.'));
    }
}
add_action('wp_ajax_treehouse_contact', 'treehouse_handle_contact_form');
add_action('wp_ajax_nopriv_treehouse_contact', 'treehouse_handle_contact_form');

/**
 * Custom Excerpt Length
 */
function treehouse_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'treehouse_excerpt_length');

/**
 * Body Classes
 */
function treehouse_body_classes($classes) {
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }
    
    if (is_front_page()) {
        $classes[] = 'homepage';
    }
    
    return $classes;
}
add_filter('body_class', 'treehouse_body_classes');
