<?php 

/*
Template Name: About
*/

get_header(); ?>

<section class="breadcumb-area text-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/footer.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4><?php the_title(); ?></h4>
                    <ul>
                        <li><a href="<?php echo esc_url(site_url()); ?>">Home</a></li>
                        <li><i class="fa-solid fa-angle-right"></i></li>
                        <li><?php the_title(); ?></li>
                    </ul>
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

<section class="fortune-counter-section py-5">
    <div class="container">
        <div class="row text-center g-4">
            
            <div class="col-lg-3 col-md-6">
                <div class="counter-card">
                    <div class="counter-icon-box">
                        <i class="fa-solid fa-pills"></i>
                    </div>
                    <div class="counter-info">
                        <h2 class="counter-number" data-target="50">0</h2>
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
                        <h2 class="counter-number" data-target="35">0</h2>
                        <span class="plus-sign">k+</span>
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
                        <h2 class="counter-number" data-target="64">0</h2>
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