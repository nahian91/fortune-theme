<?php
/**
 * The Template for displaying product archives
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 */
do_action( 'woocommerce_before_main_content' );
?>

<section class="breadcumb-area text-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/footer.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Shop</h4>
                <ul>
                    <li><a href="<?php echo site_url();?>">Home</a></li>
                    <li><i class="fa-solid fa-angle-right"></i></li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php 
echo '<div class="container py-5">'; // Container for the shop content

/**
 * Hook: woocommerce_shop_loop_header.
 */
do_action( 'woocommerce_shop_loop_header' );

if ( woocommerce_product_loop() ) {

    /**
     * Hook: woocommerce_before_shop_loop.
     */
    do_action( 'woocommerce_before_shop_loop' );

    // Bootstrap Row Start
    echo '<div class="row">';

    if ( wc_get_loop_prop( 'total' ) ) {
        while ( have_posts() ) {
            the_post();

            /**
             * Hook: woocommerce_shop_loop.
             */
            do_action( 'woocommerce_shop_loop' );

            // This loads content-product.php
            wc_get_template_part( 'content', 'product' );
        }
    }

    // Bootstrap Row End
    echo '</div>';

    /**
     * Hook: woocommerce_after_shop_loop.
     */
    do_action( 'woocommerce_after_shop_loop' );
} else {
    /**
     * Hook: woocommerce_no_products_found.
     */
    do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 */
do_action( 'woocommerce_after_main_content' );

echo '</div>'; // Close container

get_footer( 'shop' );