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

    add_theme_support('woocommerce');

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

// Change product image size on shop page
function custom_woocommerce_thumbnail_size() {
    add_filter( 'single_product_archive_thumbnail_size', function() {
        return 'medium'; // 'medium' is the image size you want to use
    });
}
add_action( 'wp', 'custom_woocommerce_thumbnail_size' );


// Excerpt Limit (Set to 20 words)
add_filter('excerpt_length', function($length) {
    return 20;
}, 999);

// Disable Comments Fully
add_action('admin_init', function () {
    $post_types = get_post_types();
    foreach ($post_types as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
add_action('wp_before_admin_bar_render', function() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
});

// Remove default sorting dropdown
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );


/**
 * Fortune International Speed Optimization Snippets
 */

// 1. Remove Emoji and Block Library CSS
add_action('init', function() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
});

// 2. Disable Gutenberg Block Library CSS
add_action('wp_enqueue_scripts', function() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
}, 100);

// 3. Defer Non-Critical Scripts for faster rendering
add_filter('script_loader_tag', function($tag, $handle) {
    if (is_admin() || 'jquery' === $handle) {
        return $tag;
    }
    return str_replace(' src', ' defer src', $tag);
}, 10, 2);

// 4. Set JPEG quality to 80% for better compression
add_filter('jpeg_quality', function($arg) { return 80; });

// 5. Remove Query Strings from Static Resources
function fortune_remove_script_version($src) {
    if (strpos($src, '?ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'fortune_remove_script_version', 15, 1);
add_filter('script_loader_src', 'fortune_remove_script_version', 15, 1);