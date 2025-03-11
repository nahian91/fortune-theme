<?php 

/*
Template Name: Home
*/

get_header(); ?>

<section class="features-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="single-feature">
                    <i class="fa-solid fa-truck"></i>
                    <h4>Local Shipping</h4>
                    <p>We offer fast local shipping, ensuring your medical products arrive safely at your doorstep.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-feature">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <h4>Best Quality</h4>
                    <p>Our medical products are crafted to the highest standards, ensuring quality and meeting your health.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-feature">
                    <i class="fa-solid fa-mug-hot"></i>
                    <h4>Best Offers</h4>
                    <p>Enjoy exclusive offers on premium medical products, delivering the best value for your health and wellness.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-feature">
                    <i class="fa-solid fa-money-bill"></i>
                    <h4>Secure Payments</h4>
                    <p>Shop confidently with our secure payment gateway, protecting your payment information to the top.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="products-home-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h4>Exclusive Products</h4>
                    <p>Explore the benefits of choosing our exclusive medical products, crafted to meet <br> the highest standards of quality and designed to support your health.</p>
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
                            <?php 
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('full');
                            }
                            ?>
                        </div>
                        <div class="product-details">
                            <h4 class="product-title"><a href="<?php the_permalink();?> ?>"><?php the_title(); ?></a></h4>
                            <?php
                            global $product;
                            if ( $product ) {
                                echo '<p class="product-price">' . $product->get_price_html() . '</p>';
                            }
                            ?>
                            <form action="<?php echo esc_url( home_url( '/?add-to-cart=' . get_the_ID() ) ); ?>" method="post" class="cart">
                                <button type="submit" class="add-to-cart-button">Add to Cart</button>
                            </form>
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
                <div class="section-title">
                    <h4>Latest Blogs</h4>
                    <p>Explore the benefits of choosing our exclusive medical products, crafted to <br>meet the highest standards of quality and designed to support your health.</p>
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
                        <?php the_post_thumbnail();?>
                        <div class="blog-grid-content">
                            <div class="blog-grid-meta">
                                <span><?php echo get_the_date('F j, Y');;?></span>
                                <span><?php the_category(); ?></span>
                            </div>
                            <h4><?php the_title();?></h4>
                            <?php the_excerpt();?>
                            <a href="<?php the_permalink();?>">Read More</a>
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