<?php
/**
 * Cart Page Template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_cart'); ?>

<div class="container py-5">
    <div class="row">
        <!-- Cart Table -->
        <div class="col-md-8">
            <form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
                <?php do_action('woocommerce_before_cart_table'); ?>

                <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="product-remove"><?php esc_html_e('Remove', 'woocommerce'); ?></th>
                            <th class="product-thumbnail"><?php esc_html_e('Image', 'woocommerce'); ?></th>
                            <th class="product-name"><?php esc_html_e('Product', 'woocommerce'); ?></th>
                            <th class="product-price"><?php esc_html_e('Price', 'woocommerce'); ?></th>
                            <th class="product-quantity"><?php esc_html_e('Quantity', 'woocommerce'); ?></th>
                            <th class="product-subtotal"><?php esc_html_e('Subtotal', 'woocommerce'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php do_action('woocommerce_before_cart_contents'); ?>

                        <?php foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) :
                            $_product   = $cart_item['data'];
                            $product_id = $cart_item['product_id'];

                            if ($_product && $_product->exists() && $cart_item['quantity'] > 0) :
                                $product_permalink = $_product->is_visible() ? $_product->get_permalink($cart_item) : '';
                                ?>
                                <tr class="woocommerce-cart-form__cart-item <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">
                                    
                                    <!-- Remove Button -->
                                    <td class="product-remove">
                                        <a href="<?php echo esc_url(wc_get_cart_remove_url($cart_item_key)); ?>" class="remove" 
                                           aria-label="<?php esc_attr_e('Remove this item', 'woocommerce'); ?>" 
                                           data-product_id="<?php echo esc_attr($product_id); ?>" 
                                           data-product_sku="<?php echo esc_attr($_product->get_sku()); ?>">
                                            &times;
                                        </a>
                                    </td>

                                    <!-- Product Thumbnail -->
                                    <td class="product-thumbnail">
                                        <?php
                                        $thumbnail = $_product->get_image();
                                        if (!$product_permalink) {
                                            echo $thumbnail; // PHPCS: XSS ok.
                                        } else {
                                            printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail);
                                        }
                                        ?>
                                    </td>

                                    <!-- Product Name -->
                                    <td class="product-name">
                                        <?php
                                        if (!$product_permalink) {
                                            echo wp_kses_post($_product->get_name());
                                        } else {
                                            printf('<a href="%s">%s</a>', esc_url($product_permalink), esc_html($_product->get_name()));
                                        }

                                        // Display meta data
                                        echo wc_get_formatted_cart_item_data($cart_item);

                                        // Backorder Notification
                                        if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
                                            echo '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>';
                                        }
                                        ?>
                                    </td>

                                    <!-- Product Price -->
                                    <td class="product-price"><?php echo WC()->cart->get_product_price($_product); ?></td>

                                    <!-- Quantity -->
                                    <td class="product-quantity">
                                        <?php
                                        woocommerce_quantity_input(
                                            array(
                                                'input_name'   => "cart[{$cart_item_key}][qty]",
                                                'input_value'  => $cart_item['quantity'],
                                                'max_value'    => $_product->get_max_purchase_quantity(),
                                                'min_value'    => '0',
                                                'product_name' => $_product->get_name(),
                                            ),
                                            $_product,
                                            false
                                        );
                                        ?>
                                    </td>

                                    <!-- Subtotal -->
                                    <td class="product-subtotal">
                                        <?php echo WC()->cart->get_product_subtotal($_product, $cart_item['quantity']); ?>
                                    </td>
                                </tr>
                                <?php
                            endif;
                        endforeach; ?>

                        <?php do_action('woocommerce_cart_contents'); ?>

                        <!-- Cart Actions -->
                        <tr>
                            <td colspan="6" class="actions">
                                <?php if (wc_coupons_enabled()) : ?>
                                    <div class="coupon">
                                        <label for="coupon_code"><?php esc_html_e('Coupon:', 'woocommerce'); ?></label>
                                        <input type="text" name="coupon_code" class="input-text" id="coupon_code" placeholder="<?php esc_attr_e('Coupon code', 'woocommerce'); ?>" />
                                        <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>">
                                            <?php esc_html_e('Apply coupon', 'woocommerce'); ?>
                                        </button>
                                    </div>
                                <?php endif; ?>

                                <button type="submit" class="button" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>">
                                    <?php esc_html_e('Update cart', 'woocommerce'); ?>
                                </button>

                                <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
                            </td>
                        </tr>

                        <?php do_action('woocommerce_after_cart_contents'); ?>
                    </tbody>
                </table>

                <?php do_action('woocommerce_after_cart_table'); ?>
            </form>
        </div>

        <!-- Cart Totals -->
        <div class="col-md-4">
            <div class="cart-collaterals">
                <?php do_action('woocommerce_cart_collaterals'); ?>
            </div>
        </div>
    </div>
</div>

<?php do_action('woocommerce_after_cart'); ?>
