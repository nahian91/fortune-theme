<?php 

/*
Template Name: Home
*/

get_header(); ?>

<section class="banner-area" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/bg.jpg');">
    <div class="banner-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="bannerCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                    
                    <div class="carousel-indicators custom-indicators">
                        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
                        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="3"></button>
                        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="4"></button>
                    </div>

                    <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-8">
                                    <div class="banner-content">
                                        <span class="product-badge">Daily Wellness</span>
                                        <h4>Megaton: <span>Power of Vitamins</span></h4>
                                        <p>A great combination of vitamins, minerals, and natural ingredients. Your daily companion to meet your body’s essential needs.</p>
                                        <div class="banner-btns">
                                            <a href="https://fortuneinternationalbd.com/product/megaton-super-multivitamin/" class="btn-main">See Details <i class="fa-solid fa-arrow-right"></i></a>
                                            <a href="#" class="btn-secondary">View Catalog</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-4">
                                    <div class="banner-img-wrapper">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/megaton.png" alt="Megaton">
                                        <div class="img-glow"></div>
                                    </div>
                                </div>
                            </div>                        
                        </div>

                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-8">
                                    <div class="banner-content">
                                        <span class="product-badge">Bone & Joint Care</span>
                                        <h4>Super Flex: <span>Move Freely</span></h4>
                                        <p>A complete solution for joint pain and better physical movement. Relieves bone weakness and improves mobility effectively.</p>
                                        <div class="banner-btns">
                                            <a href="https://fortuneinternationalbd.com/product/super-flex/" class="btn-main">See Details <i class="fa-solid fa-arrow-right"></i></a>
                                            <a href="#" class="btn-secondary">Watch Info</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-4">
                                    <div class="banner-img-wrapper">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/superflex.png" alt="Super Flex">
                                        <div class="img-glow"></div>
                                    </div>
                                </div>
                            </div>                        
                        </div>

                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-8">
                                    <div class="banner-content">
                                        <span class="product-badge">Essential Minerals</span>
                                        <h4>Biomore Plus: <span>Vital Health</span></h4>
                                        <p>Provides calcium, magnesium, and vitamins essential for a healthy lifestyle and normal bodily functions.</p>
                                        <div class="banner-btns">
                                            <a href="https://fortuneinternationalbd.com/product/bimore-plus/" class="btn-main">See Details <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-4">
                                    <div class="banner-img-wrapper">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/biomore-plus.png" alt="Biomore Plus">
                                        <div class="img-glow"></div>
                                    </div>
                                </div>
                            </div>                        
                        </div>

                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-8">
                                    <div class="banner-content">
                                        <span class="product-badge">Strong Foundation</span>
                                        <h4>Calcibone: <span>Stronger Teeth</span></h4>
                                        <p>A complete solution for strong bones and teeth, helping prevent osteoporosis and bone loss for all ages.</p>
                                        <div class="banner-btns">
                                            <a href="https://fortuneinternationalbd.com/product/calcibone/" class="btn-main">See Details <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-4">
                                    <div class="banner-img-wrapper">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/calcibone.png" alt="Calcibone">
                                        <div class="img-glow"></div>
                                    </div>
                                </div>
                            </div>                        
                        </div>

                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-8">
                                    <div class="banner-content">
                                        <span class="product-badge">Hormonal Balance</span>
                                        <h4>Procive Ultra: <span>PCOS Support</span></h4>
                                        <p>An effective solution for treating PCOS/PCOD, enhancing egg quality, and maintaining reproductive health.</p>
                                        <div class="banner-btns">
                                            <a href="https://fortuneinternationalbd.com/product/procive-ultra/" class="btn-main">See Details <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-4">
                                    <div class="banner-img-wrapper">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/procive-ultra.png" alt="Procive Ultra">
                                        <div class="img-glow"></div>
                                    </div>
                                </div>
                            </div>                        
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="single-feature">
                    <div class="feature-icon-box">
                        <i class="fa-solid fa-truck"></i>
                    </div>
                    <h4>Fast Delivery</h4>
                    <p>Reliable local shipping to ensure your health products reach your doorstep safely and on time.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="single-feature">
                    <div class="feature-icon-box box-red">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                    <h4>Top Quality</h4>
                    <p>Products carefully made to ensure the highest standards, supporting your long-term well-being.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="single-feature">
                    <div class="feature-icon-box box-green">
                        <i class="fa-solid fa-mug-hot"></i>
                    </div>
                    <h4>Best Offers</h4>
                    <p>Exclusive offers where you get top-quality health products at the most competitive prices.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="single-feature">
                    <div class="feature-icon-box box-orange">
                        <i class="fa-solid fa-money-bill"></i>
                    </div>
                    <h4>Secure Payment</h4>
                    <p>Shop with peace of mind knowing your data is protected with the highest industry security.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="products-home-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-container">
    <div class="section-title">
        <div class="sub-badge-wrapper">
            <span class="sub-badge animate-badge">Premium Selection</span>
        </div>
        <h4>Our <span>Products</span></h4>
        <div class="title-divider"></div>
        <p>Discover the benefits of choosing our exclusive medical products, crafted to the <br> highest quality standards and designed to improve your health.</p>
    </div>
</div>
            </div>
        </div>
        <div class="row">
            <?php
            // Arguments to query the custom post type 'products'
            $args = array(
                'posts_per_page' => 6,  // Show 3 products
                'post_type'       => 'product',  // Custom post type
                'post_status'     => 'publish',  // Only published products
            );

            $latest_post_query = new WP_Query( $args );

            if ( $latest_post_query->have_posts() ) : 
                while ( $latest_post_query->have_posts() ) : $latest_post_query->the_post();
            ?>
                <div class="col-md-4">
                    <div class="single-product-box">
    <div class="product-thumbnail">
        <a href="<?php the_permalink();?>" class="thumb-link">
            <?php 
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('medium_large'); // 'full' is often too heavy for grids
            }
            ?>
            <div class="product-overlay">
                <span class="view-btn">View Details</span>
            </div>
        </a>
    </div>
    
    <div class="product-details">
        <h4 class="product-title">
            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
        </h4>
        
        <?php
        global $product;
        if ( $product ) {
            echo '<div class="product-price">' . $product->get_price_html() . '</div>';
        }
        ?>

        <div class="product-action">
            <form action="<?php echo esc_url( home_url( '/?add-to-cart=' . get_the_ID() ) ); ?>" method="post" class="cart">
                <button type="submit" class="add-to-cart-button">
                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
            </form>
        </div>
    </div>
</div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata(); // Reset the post data after custom query
            else :
                echo '<p>No products found.</p>';
            endif;
            ?>
        </div>
    </div>
</section>


<section class="blogs-home-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-container">
    <div class="section-title">
        <div class="sub-badge-wrapper">
            <span class="sub-badge animate-badge">Premium Selection</span>
        </div>
        <h4>Our <span>Products</span></h4>
        <div class="title-divider"></div>
        <p>Discover the benefits of choosing our exclusive medical products, crafted to the <br> highest quality standards and designed to improve your health.</p>
    </div>
</div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'posts_per_page' => 3,
                'post_status'    => 'publish',
            );

            $latest_post_query = new WP_Query( $args );

            if ( $latest_post_query->have_posts() ) : 
                while ( $latest_post_query->have_posts() ) : $latest_post_query->the_post();
            ?>
                <div class="col-md-4">
                    <div class="single-blog">
    <div class="blog-thumb-wrapper">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium_large'); ?>
        </a>
        <div class="blog-date-badge">
            <?php echo get_the_date('M j'); ?>
        </div>
    </div>

    <div class="blog-grid-content">
        <div class="blog-grid-meta">
            <span class="meta-item"><i class="fa-regular fa-folder-open"></i> <?php the_category(', '); ?></span>
        </div>
        
        <h4 class="blog-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h4>
        
        <div class="blog-excerpt">
            <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?>
        </div>
        
        <a href="<?php the_permalink(); ?>" class="read-more-btn">
            Read More <i class="fa-solid fa-arrow-right-long"></i>
        </a>
    </div>
</div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata(); // Reset post data after custom query
            else :
                echo '<p>No posts found.</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer();?>