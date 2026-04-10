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
                                <div class="col-lg-8 col-md-8">
                                    <div class="banner-content">
                                        <span class="product-badge">Daily Wellness</span>
                                        <h4>Megaton: Power of Vitamins</h4>
                                        <p>A great combination of vitamins, minerals, and natural ingredients. Your daily companion to meet your body’s essential needs.</p>
                                        <div class="banner-btns">
                                            <a href="https://fortuneinternationalbd.com/product/megaton-super-multivitamin/" class="btn-main">See Details <i class="fa-solid fa-arrow-right"></i></a>
                                            <a href="#" class="btn-secondary">View Catalog</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="banner-img-wrapper">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/megaton.png" alt="Megaton">
                                        <div class="img-glow"></div>
                                    </div>
                                </div>
                            </div>                        
                        </div>

                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col-lg-8 col-md-8">
                                    <div class="banner-content">
                                        <span class="product-badge">Bone & Joint Care</span>
                                        <h4>Super Flex: Move Freely</h4>
                                        <p>A complete solution for joint pain and better physical movement. Relieves bone weakness and improves mobility effectively.</p>
                                        <div class="banner-btns">
                                            <a href="https://fortuneinternationalbd.com/product/super-flex/" class="btn-main">See Details <i class="fa-solid fa-arrow-right"></i></a>
                                            <a href="#" class="btn-secondary">Watch Info</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="banner-img-wrapper">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/superflex.png" alt="Super Flex">
                                        <div class="img-glow"></div>
                                    </div>
                                </div>
                            </div>                        
                        </div>

                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col-lg-8 col-md-8">
                                    <div class="banner-content">
                                        <span class="product-badge">Essential Minerals</span>
                                        <h4>Biomore Plus: Vital Health</h4>
                                        <p>Provides calcium, magnesium, and vitamins essential for a healthy lifestyle and normal bodily functions.</p>
                                        <div class="banner-btns">
                                            <a href="https://fortuneinternationalbd.com/product/bimore-plus/" class="btn-main">See Details <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="banner-img-wrapper">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/biomore-plus.png" alt="Biomore Plus">
                                        <div class="img-glow"></div>
                                    </div>
                                </div>
                            </div>                        
                        </div>

                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col-lg-8 col-md-8">
                                    <div class="banner-content">
                                        <span class="product-badge">Strong Foundation</span>
                                        <h4>Calcibone: Stronger Teeth</h4>
                                        <p>A complete solution for strong bones and teeth, helping prevent osteoporosis and bone loss for all ages.</p>
                                        <div class="banner-btns">
                                            <a href="https://fortuneinternationalbd.com/product/calcibone/" class="btn-main">See Details <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="banner-img-wrapper">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/calcibone.png" alt="Calcibone">
                                        <div class="img-glow"></div>
                                    </div>
                                </div>
                            </div>                        
                        </div>

                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col-lg-8 col-md-8">
                                    <div class="banner-content">
                                        <span class="product-badge">Hormonal Balance</span>
                                        <h4>Procive Ultra: PCOS Support</h4>
                                        <p>An effective solution for treating PCOS/PCOD, enhancing egg quality, and maintaining reproductive health.</p>
                                        <div class="banner-btns">
                                            <a href="https://fortuneinternationalbd.com/product/procive-ultra/" class="btn-main">See Details <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
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

<section class="about-fortune-area py-5">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="about-image-stack">
                    <div class="main-image">
                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/about.jpg" alt="Fortune Healthcare Excellence" class="img-fluid rounded-3 shadow">
                    </div>
                    <div class="experience-badge animate-badge">
                        <span class="exp-num">10+</span>
                        <span class="exp-text">Years of Trust</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="about-content-wrapper ps-lg-4">
                    <div class="section-title text-start mb-4">
                        <div class="sub-badge-wrapper">
                            <span class="sub-badge">Established Excellence</span>
                        </div>
                        <h4>Legacy of <span>Quality</span></h4>
                        <div class="title-divider"></div>
                    </div>

                    <h2 class="about-headline">Empowering Lives Through <span>Pharmaceutical Precision</span></h2>
                    
                    <p class="about-para">
                        Fortune International BD specializes in high-quality dietary and nutritional supplements designed to support various aspects of physical well-being. Our journey began with a single goal: to bridge the gap between world-class pharmaceutical standards and everyday health needs.
                    </p>

                    <div class="about-features-grid mt-4">
    <div class="about-feat-item">
        <div class="feat-icon">
            <i class="fa-solid fa-shield"></i>
        </div>
        <div class="feat-content">
            <h6>100% Authentic Imports</h6>
            <p>Directly sourced from premium international manufacturers.</p>
        </div>
    </div>

    <div class="about-feat-item">
        <div class="feat-icon">
            <i class="fa-solid fa-microscope"></i>
        </div>
        <div class="feat-content">
            <h6>Clinical Grade Purity</h6>
            <p>Every product is lab-verified for safety and potency.</p>
        </div>
    </div>

    <div class="about-feat-item">
        <div class="feat-icon">
            <i class="fa-solid fa-snowflake"></i>
        </div>
        <div class="feat-content">
            <h6>Optimized Storage</h6>
            <p>Cold-chain logistics to preserve supplement efficacy.</p>
        </div>
    </div>

    <div class="about-feat-item">
        <div class="feat-icon">
            <i class="fa-solid fa-truck-fast"></i>
        </div>
        <div class="feat-content">
            <h6>Express Distribution</h6>
            <p>Fast and secure nationwide delivery across Bangladesh.</p>
        </div>
    </div>
</div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="fortune-services py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <div class="section-container">
                    <div class="section-title">
                        <div class="sub-badge-wrapper">
                            <span class="sub-badge animate-badge">Healthcare Solutions</span>
                        </div>
                        <h4>Our Specialized <span>Medical Services</span></h4>
                        <div class="title-divider m-auto"></div>
                        <p class="mt-3">Providing pharmaceutical-grade support through specialized healthcare pathways <br> designed for long-term recovery and vitality.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="s-icon"><i class="fa-solid fa-ship"></i></div>
                    <div class="s-content">
                        <h3>Global Product Sourcing</h3>
                        <p>We import 100% authentic, FDA-compliant supplements from world-class manufacturers in the USA and Europe.</p>
                        <ul class="s-list">
                            <li><i class="fa-solid fa-circle-check"></i> Authentic Verification</li>
                            <li><i class="fa-solid fa-circle-check"></i> GMP Certified Sources</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card active">
                    <div class="s-icon"><i class="fa-solid fa-user-doctor"></i></div>
                    <div class="s-content">
                        <h3>Expert Medical Guidance</h3>
                        <p>Professional advice on supplement dosage and health management from our network of qualified doctors.</p>
                        <ul class="s-list">
                            <li><i class="fa-solid fa-circle-check"></i> Personalized Dosage Plans</li>
                            <li><i class="fa-solid fa-circle-check"></i> Nutritional Counseling</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="s-icon"><i class="fa-solid fa-truck-medical"></i></div>
                    <div class="s-content">
                        <h3>Cold-Chain Distribution</h3>
                        <p>Specialized logistics to maintain the potency of sensitive medical products during nationwide delivery.</p>
                        <ul class="s-list">
                            <li><i class="fa-solid fa-circle-check"></i> Temperature Controlled</li>
                            <li><i class="fa-solid fa-circle-check"></i> Rapid Fulfillment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fortune-counter-section py-5">
    <div class="container">
        <div class="row text-center g-4">
            
            <div class="col-lg-3 col-md-6">
                <div class="counter-card">
                    <div class="counter-icon-box">
                        <i class="fa-solid fa-pills"></i>
                    </div>
                    <div class="counter-info">
                        <h2 class="counter-number" data-target="5">0</h2>
                        <span class="plus-sign">+</span>
                        <p class="counter-label">Premium Products</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="counter-card">
                    <div class="counter-info">
                        <div class="counter-icon-box">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <h2 class="counter-number" data-target="350">0</h2>
                        <span class="plus-sign">+</span>
                        <p class="counter-label">Happy Clients</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="counter-card">
                    <div class="counter-icon-box">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>
                    <div class="counter-info">
                        <h2 class="counter-number" data-target="20">0</h2>
                        <span class="plus-sign">+</span>
                        <p class="counter-label">Districts Covered</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="counter-card">
                    <div class="counter-icon-box">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <div class="counter-info">
                        <h2 class="counter-number" data-target="10">0</h2>
                        <span class="plus-sign">+</span>
                        <p class="counter-label">Years of Trust</p>
                    </div>
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

<section class="fortune-marquee">
    <div class="marquee-wrapper">
        <div class="marquee-track">
            <div class="marquee-item">
                <div class="item-icon"><i class="fa-solid fa-microscope"></i></div>
                <span class="item-label">Lab Tested Purity</span>
            </div>
            <div class="marquee-item">
                <div class="item-icon"><i class="fa-solid fa-truck-fast"></i></div>
                <span class="item-label">Nationwide Delivery</span>
            </div>
            <div class="marquee-item">
                <div class="item-icon"><i class="fa-solid fa-shield-virus"></i></div>
                <span class="item-label">Pharmaceutical Grade</span>
            </div>
            <div class="marquee-item">
                <div class="item-icon"><i class="fa-solid fa-user-doctor"></i></div>
                <span class="item-label">Expert Recommended</span>
            </div>
            <div class="marquee-item">
                <div class="item-icon"><i class="fa-solid fa-certificate"></i></div>
                <span class="item-label">ISO Certified</span>
            </div>

            <div class="marquee-item">
                <div class="item-icon"><i class="fa-solid fa-microscope"></i></div>
                <span class="item-label">Lab Tested Purity</span>
            </div>
            <div class="marquee-item">
                <div class="item-icon"><i class="fa-solid fa-truck-fast"></i></div>
                <span class="item-label">Nationwide Delivery</span>
            </div>
            <div class="marquee-item">
                <div class="item-icon"><i class="fa-solid fa-shield-virus"></i></div>
                <span class="item-label">Pharmaceutical Grade</span>
            </div>
            <div class="marquee-item">
                <div class="item-icon"><i class="fa-solid fa-user-doctor"></i></div>
                <span class="item-label">Expert Recommended</span>
            </div>
            <div class="marquee-item">
                <div class="item-icon"><i class="fa-solid fa-certificate"></i></div>
                <span class="item-label">Health Certified</span>
            </div>
        </div>
    </div>
</section>

<section class="video-gallery-area py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-container">
                    <div class="section-title">
                        <div class="sub-badge-wrapper">
                            <span class="sub-badge animate-badge">Video Center</span>
                        </div>
                        <h4>Our <span>Exclusive Vides</span></h4>
                        <div class="title-divider"></div>
                        <p>Watch our detailed product reviews, expert medical advice, <br> and pharmaceutical insights on our YouTube channel.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <?php
            // Video ID-er list (Apnar real video ID gulo ekhane diben)
            $videos = array(
                'JCZ5w43JeIk', 
                'S19rR_sKzDo', 
                '-uefUanXuyU'
            );

            foreach ($videos as $video_id) :
            ?>
            <div class="col-md-4 mb-4">
                <div class="single-video-box">
                    <div class="video-container shadow-sm">
                        <iframe 
                            width="100%" 
                            height="250" 
                            src="https://www.youtube.com/embed/<?php echo $video_id; ?>" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-section-glass">
    <div class="container">
        <div class="cta-card">
            <div class="cta-content">
                <span class="cta-tag">Expert Consultation</span>
                <h2>Still unsure which supplement is right for you?</h2>
                <p>Chat with our healthcare experts for a personalized recommendation based on your health goals.</p>
                <div class="cta-btns">
                    <a href="#" class="btn-primary-red">Talk to an Expert</a>
                </div>
            </div>
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

<section class="how-to-order pt-80 pb-80">
    <div class="container">
        <div class="section-title text-center mb-5">
            <div class="sub-badge-wrapper">
                <span class="sub-badge animate-badge">Process</span>
            </div>
            <h4>How to <span>Order?</span></h4>
            <div class="title-divider m-auto"></div>
        </div>

        <div class="row text-center process-row">
            <div class="col-lg-3 col-md-6 mb-4 process-step">
                <div class="step-icon-wrapper">
                    <div class="step-number">01</div>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <h5>Browse Products</h5>
                <p>Select the medicine or supplement you need from our shop.</p>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 process-step">
                <div class="step-icon-wrapper">
                    <div class="step-number">02</div>
                    <i class="fa-solid fa-cart-plus"></i>
                </div>
                <h5>Add to Cart</h5>
                <p>Add products to your cart and proceed to secure checkout.</p>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 process-step">
                <div class="step-icon-wrapper">
                    <div class="step-number">03</div>
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <h5>Confirm Order</h5>
                <p>Our team will call you to verify the order and shipping details.</p>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 process-step">
                <div class="step-icon-wrapper">
                    <div class="step-number">04</div>
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
                <h5>Quick Delivery</h5>
                <p>Get your authentic products delivered at your doorstep.</p>
            </div>
        </div>
    </div>
</section>

<section class="expert-guidance-area pt-80 pb-80">
    <div class="container">
        <div class="row align-items-center g-5">
            
            <div class="col-lg-5 col-md-6 text-center position-relative">
                <div class="doctor-image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews.png" alt="Expert Doctor Consultation" class="img-fluid doctor-photo">
                    
                    <div class="doctor-bg-shape"></div>
                </div>
            </div>

            <div class="col-lg-7 col-md-6">
    <div class="expert-content-wrapper">
        
        <div class="section-container">
            <div class="section-title text-start mb-4">
                <div class="sub-badge-wrapper">
                    <span class="sub-badge animate-badge">Doctor's Advice</span>
                </div>
                <h4>Why Trust <span>Our Products?</span></h4>
                <div class="title-divider"></div>
            </div>
        </div>

        <div class="expert-quote-block mb-4">
            <i class="fa-solid fa-quote-left quote-icon-main"></i>
            <blockquote>
                "As a healthcare professional, I recommend these products because they are formulated with pharmaceutical-grade ingredients. Every supplement undergoes rigorous testing to ensure it delivers the precise nutrients your body needs for optimal recovery and long-term vitality."
            </blockquote>
        </div>

        <p class="expert-description mb-5">
            Our curated selection of medical products is backed by clinical research and trusted by experts worldwide. We prioritize purity and potency, so you can focus on your health with absolute peace of mind.
        </p>

        <div class="expert-action-btns">
            <a href="<?php echo site_url('/shop'); ?>" class="btn-primary-dark">View Recommended Products</a>
        </div>
    </div>
</div>
        </div>
    </div>
</section>

<section class="testimonial-area pt-80 pb-80">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <div class="section-container">
                    <div class="section-title">
                        <div class="sub-badge-wrapper">
                            <span class="sub-badge animate-badge">Testimonials</span>
                        </div>
                        <h4>What Our <span>Patients Say</span></h4>
                        <div class="title-divider m-auto"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            // Example Array for 4 items. In future, you can use a Custom Post Type loop.
            $testimonials = array(
                array(
                    'name' => 'Dr. Ariful Islam',
                    'role' => 'Cardiologist',
                    'text' => 'Super Flex has been a game changer for my joint pain patients. The results are visible within weeks of consistent use.',
                    'img'  => 't1.jpg'
                ),
                array(
                    'name' => 'Moyna Ahmed',
                    'role' => 'Regular Customer',
                    'text' => 'Order process was very smooth and the delivery was faster than expected. Highly recommended for authentic medicine.',
                    'img'  => 't2.jpg'
                ),
                array(
                    'name' => 'Rahat Khan',
                    'role' => 'Fitness Trainer',
                    'text' => 'The quality standards they maintain are truly premium. I feel more energetic and mobile after using their supplements.',
                    'img'  => 't3.jpg'
                ),
                array(
                    'name' => 'Sultana Razia',
                    'role' => 'Lifestyle Blogger',
                    'text' => 'Finally a reliable source for high-quality medical products in Bangladesh. Their support team is also very helpful.',
                    'img'  => 't4.jpg'
                ),
            );

            foreach ($testimonials as $item) :
            ?>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="single-testimonial">
                    <div class="quote-icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="testimonial-content">
                        <p><?php echo $item['text']; ?></p>
                    </div>
                    <div class="testimonial-footer">
                        <div class="client-info">
                            <h5><?php echo $item['name']; ?></h5>
                            <span><?php echo $item['role']; ?></span>
                        </div>
                        <div class="rating-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer();?>