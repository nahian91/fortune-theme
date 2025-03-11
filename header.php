<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php wp_head();?>
<body <?php body_class();?>>

<section class="header-top py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="header-info">
                    <ul>
                        <li><a href="tel: 01855444777"><i class="fa-solid fa-phone"></i> +8801855-444777</a></li>
                        <li><a href="mailto: fortunesylhet@gmail.com"><i class="fa-solid fa-envelope"></i> fortunesylhet@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="header-right-btn">
                    <?php if (is_user_logged_in()) : ?>
                    <div class="user-info">
                        <!-- Display Avatar -->
                        <div class="user-avatar">
                            <?php echo get_avatar(get_current_user_id(), 96); // 96 is the size of the avatar ?>
                        </div>
                        
                        <!-- Display Nickname -->
                        <div class="user-nickname">
                            <?php echo wp_get_current_user()->nickname; ?>
                            <div class="logout-link">
                                <a href="<?php echo wp_logout_url(); ?>">Logout</a>
                            </div>
                        </div>
                    </div>
                    

            <?php else : ?>
            <div class="login-register-links">
                <!-- Display Login and Registration links -->
                <a href="<?php echo wp_login_url(); ?>">Login</a> | 
                <a href="<?php echo wp_registration_url(); ?>">Register</a>
            </div>
        <?php endif; ?>
    </div>
            </div>

        </div>
    </div>
</section>

<header class="header-area py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="<?php echo site_url();?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary', // The menu location registered earlier
                        'container'       => 'nav',     // The HTML element to wrap the menu
                        'container_class' => 'primary-menu', // CSS class for the container
                        'menu_class'      => 'menu',   // CSS class for the <ul> element
                    ) );
                ?>

            </div>
            <div class="col-md-3">
            <?php
// Get the current WooCommerce cart
$cart = WC()->cart;
$cart_count = $cart->get_cart_contents_count(); // Number of items in the cart
$cart_total = $cart->get_cart_total(); // Total amount in the cart
?>

<div class="cart-button">
    <a href="<?php echo wc_get_cart_url(); ?>" class="cart-link">
        <!-- Font Awesome Cart Icon -->
        <span class="cart-icon">
            <i class="fas fa-shopping-cart"></i>
        </span>
        <span class="cart-total"> <?php echo $cart_total; ?></span>
    </a>
</div>

            </div>
        </div>
    </div>
</header>
