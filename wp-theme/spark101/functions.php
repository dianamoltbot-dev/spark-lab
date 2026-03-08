<?php
/**
 * Spark101 Theme Functions
 */

if (!defined('ABSPATH')) exit;

define('SPARK101_VERSION', '1.0.0');
define('SPARK101_DIR', get_template_directory());
define('SPARK101_URI', get_template_directory_uri());

/**
 * Theme Setup
 */
function spark101_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    add_theme_support('custom-logo', [
        'height'      => 56,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    register_nav_menus([
        'primary' => __('Menú Principal', 'spark101'),
    ]);
}
add_action('after_setup_theme', 'spark101_setup');

/**
 * Enqueue styles & scripts
 */
function spark101_scripts() {
    // Google Fonts - Inter
    wp_enqueue_style('spark101-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', [], null);

    // Main stylesheet
    wp_enqueue_style('spark101-style', SPARK101_URI . '/assets/css/main.css', ['spark101-fonts'], SPARK101_VERSION);

    // Theme stylesheet (WP required)
    wp_enqueue_style('spark101-theme', get_stylesheet_uri(), ['spark101-style'], SPARK101_VERSION);

    // Main JS
    wp_enqueue_script('spark101-main', SPARK101_URI . '/assets/js/main.js', [], SPARK101_VERSION, true);
}
add_action('wp_enqueue_scripts', 'spark101_scripts');

/**
 * Tutor LMS compatibility
 */
function spark101_tutor_support() {
    if (function_exists('tutor')) {
        add_theme_support('tutor');
    }
}
add_action('after_setup_theme', 'spark101_tutor_support');

/**
 * Custom page template for Spark Lab landing
 */
function spark101_page_templates($templates) {
    $templates['template-spark-lab.php'] = 'Spark Lab Landing';
    $templates['template-spark-academy.php'] = 'Spark Academy Landing';
    return $templates;
}
add_filter('theme_page_templates', 'spark101_page_templates');

/**
 * Customizer - WhatsApp number
 */
function spark101_customizer($wp_customize) {
    $wp_customize->add_section('spark101_settings', [
        'title'    => 'Spark101 Settings',
        'priority' => 30,
    ]);

    $wp_customize->add_setting('spark101_whatsapp', [
        'default' => '541166094742',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('spark101_whatsapp', [
        'label'   => 'WhatsApp Number',
        'section' => 'spark101_settings',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('spark101_whatsapp_message', [
        'default' => 'Quiero info de Spark101',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('spark101_whatsapp_message', [
        'label'   => 'WhatsApp Default Message',
        'section' => 'spark101_settings',
        'type'    => 'text',
    ]);
}
add_action('customize_register', 'spark101_customizer');

/**
 * Helper: WhatsApp URL
 */
function spark101_whatsapp_url($message = null) {
    $number = get_theme_mod('spark101_whatsapp', '541166094742');
    $msg = $message ?: get_theme_mod('spark101_whatsapp_message', 'Quiero info de Spark101');
    return 'https://wa.me/' . $number . '?text=' . rawurlencode($msg);
}

/**
 * Widget areas
 */
function spark101_widgets() {
    register_sidebar([
        'name'          => 'Footer',
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
    ]);
}
add_action('widgets_init', 'spark101_widgets');
