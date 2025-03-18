<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Theme Setup
function my_custom_theme_setup() {
    // Enable support for title tag
    add_theme_support('title-tag');

    // Enable support for post thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-custom-theme'),
        'footer-1'  => __('Footer 1', 'my-custom-theme'),
        'footer-2'  => __('Footer 2', 'my-custom-theme'),
    ));

    // Enable support for HTML5 markup
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Enable support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'my_custom_theme_setup');

// Enqueue Styles & Scripts
function my_custom_theme_enqueue_scripts() {
    // Enqueue Styles
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_style('reflex-style', get_template_directory_uri() . '/assets/css/reflex.min.css', array(), '1.0.0');
    wp_enqueue_style('slicknav-min-style', get_template_directory_uri() . '/assets/css/slicknav.min.css', array(), '1.0.0');
    wp_enqueue_style('font-awesome-style', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0');
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0');

    // Enqueue Scripts
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('slicknav-js', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_scripts');

// Register Widget Area (Sidebar)
function my_custom_theme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'my-custom-theme'),
        'id'            => 'sidebar-1',
        'description'   => __('Main sidebar area', 'my-custom-theme'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'my_custom_theme_widgets_init');

function set_post_views($postID) {
    $count = get_post_meta($postID, 'post_views_count', true);
    $count = $count ? $count + 1 : 1;
    update_post_meta($postID, 'post_views_count', $count);
}

function track_post_views($post_id) {
    if (!is_single()) return;
    set_post_views(get_the_ID());
}
add_action('wp_head', 'track_post_views');


add_action( 'woocommerce_before_checkout_form', function() {
    echo '<div class="custom-checkout-layout"><div class="checkout-left">';
}, 5 );

add_action( 'woocommerce_checkout_after_customer_details', function() {
    echo '</div><div class="checkout-right">';
    
    // Add "Your Order" title manually
    echo '<h3 class="checkout-order-title">' . __('Your Order', 'woocommerce') . '</h3>';
    
    // Move order review to the right
    do_action('woocommerce_checkout_order_review'); 
    
    echo '</div></div>';
}, 20 );
add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );

add_filter( 'woocommerce_billing_fields', function( $fields ) {
    unset( $fields['billing_country'] ); // Remove Country field
    unset( $fields['billing_postcode'] ); // Remove Postcode / ZIP field
    unset( $fields['billing_address_2'] ); // Remove Address Line 2 field
    return $fields;
} );

