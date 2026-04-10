<?php
/**
 * The template for displaying product content within loops
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure product visibility
if ( ! is_a( $product, WC_Product::class ) || ! $product->is_visible() ) {
    return;
}
?>

<div <?php wc_product_class( 'col-md-4 mb-4', $product ); ?>>
    <div class="single-product-box">
        
        <div class="product-thumbnail">
            <a href="<?php the_permalink(); ?>" class="thumb-link">
                <?php 
                // Sale Badge (If any)
                woocommerce_show_product_loop_sale_flash(); 
                
                // Product Image
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('medium_large'); 
                }
                ?>
                <div class="product-overlay">
                    <span class="view-btn">View Details</span>
                </div>
            </a>
        </div>
        
        <div class="product-details text-center">
            <h4 class="product-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
            
            <div class="product-price">
                <?php echo $product->get_price_html(); ?>
            </div>

            <div class="product-action mt-3">
                <?php
                // Using WooCommerce default button to maintain AJAX & logic
                woocommerce_template_loop_add_to_cart([
                    'class' => implode( ' ', array_filter( array(
                        'button',
                        'add-to-cart-button', // Apnar custom class
                        'product_type_' . $product->get_type(),
                        $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
                        $product->supports( 'ajax_add_to_cart' ) && $product->is_purchasable() && $product->is_in_stock() ? 'ajax_add_to_cart' : '',
                    ) ) ),
                ]);
                ?>
            </div>
        </div>
    </div>
</div>