<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php wp_head();?>
<body <?php body_class();?>>

<section class="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="header-contact">
                    <a href="tel:+8801855444999"><i class="fa-solid fa-phone"></i> +880 1855-444999</a>
                    <a href="mailto:fortunesylhet@gmail.com"><i class="fa-solid fa-envelope"></i> fortunesylhet@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="header-top-right">
                    <div class="auth-box">
                        <?php if (is_user_logged_in()) : 
                            $current_user = wp_get_current_user(); ?>
                            <div class="user-logged">
                                <?php echo get_avatar($current_user->ID, 24); ?>
                                <a href="<?php echo wc_get_page_permalink('myaccount'); ?>">
                                    Account
                                </a>
                                <span class="sep">|</span>
                                <a href="<?php echo wp_logout_url(home_url()); ?>" class="logout-link">Logout</a>
                            </div>
                        <?php else : ?>
                            <div class="user-guest">
                                <a href="<?php echo wp_login_url(); ?>"><i class="fa-solid fa-circle-user"></i> Login</a>
                                <a href="<?php echo wp_registration_url(); ?>">Register</a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="lang-box">
                        <?php echo do_shortcode('[gtranslate]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<header class="main-header sticky-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-8">
                <div class="logo">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="<?php bloginfo('name'); ?>">
                    </a>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => 'nav',
                        'container_class' => 'primary-nav',
                        'menu_class'      => 'nav-menu-list',
                    ) );
                ?>
            </div>

            <div class="col-lg-3 col-4">
                <div class="header-actions">
                    <?php if ( class_exists( 'WooCommerce' ) ) : 
                        $count = WC()->cart->get_cart_contents_count();
                    ?>
                    <div class="mini-cart">
                        <a href="<?php echo wc_get_cart_url(); ?>" class="cart-btn">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="cart-badge"><?php echo $count; ?></span>
                            <span class="cart-price d-none d-xl-inline"><?php echo WC()->cart->get_cart_total(); ?></span>
                        </a>
                    </div>
                    <?php endif; ?>

                    <button class="mobile-menu-toggle d-lg-none" onclick="toggleMobileMenu()">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>