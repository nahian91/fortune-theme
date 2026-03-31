<footer class="footer-area" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/footer.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-footer about-widget">
                    <div class="footer-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Fortune Healthcare Logo">
                    </div>
                    <p class="footer-desc">"Fortune International" promises to follow rules that ensure medical care is easy to access and includes everyone. We strive to make healthcare better, more affordable, and suitable for all.</p>
                    <div class="footer-social">
                        <a href="#" target="_blank" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" target="_blank" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" target="_blank" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-6">
                <div class="single-footer">
                    <h4 class="widget-title">Quick Links</h4>
                    <div class="footer-menu-links">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'footer-1',
                                'container'      => false,
                                'fallback_cb'    => false,
                            ) );
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-footer">
                    <h4 class="widget-title">Latest Posts</h4>
                    <div class="latest-posts-wrapper">
                        <?php
                            $args = array(
                                'posts_per_page' => 2, // 2 looks cleaner in compact footers
                                'post_status'    => 'publish',
                            );
                            $latest_post_query = new WP_Query( $args );

                            if ( $latest_post_query->have_posts() ) : 
                                while ( $latest_post_query->have_posts() ) : $latest_post_query->the_post();
                            ?>
                                <div class="footer-latest-post">
                                    <a href="<?php the_permalink(); ?>" class="post-thumb">
                                        <?php if (has_post_thumbnail()) : the_post_thumbnail('thumbnail'); else: ?>
                                            <img src="placeholder.jpg" alt="Post Thumb">
                                        <?php endif; ?>
                                    </a>
                                    <div class="post-content">
                                        <span class="post-date"><?php echo get_the_date('M d, Y'); ?></span>
                                        <h4 class="post-title">
                                            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 7); ?></a>
                                        </h4>
                                    </div>
                                </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<p>No posts found.</p>';
                            endif;
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-footer">
                    <h4 class="widget-title">Contact Us</h4>
                    <div class="contact-list">
                        <div class="footer-single-contact">
                            <div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="contact-text">
                                <h5>Address</h5>
                                <span>209-Excel Tower, 2nd Floor, Subidbazar, Sylhet.</span>
                            </div>
                        </div>
                        <div class="footer-single-contact">
                            <div class="contact-icon"><i class="fa-solid fa-phone"></i></div>
                            <div class="contact-text">
                                <h5>Mobile</h5>
                                <a href="tel:+8801855444777"><span>+8801855-444777</span></a>
                            </div>
                        </div>
                        <div class="footer-single-contact">
                            <div class="contact-icon"><i class="fa-solid fa-envelope"></i></div>
                            <div class="contact-text">
                                <h5>Email</h5>
                                <a href="mailto:fortunesylhet@gmail.com"><span>fortunesylhet@gmail.com</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<section class="footer-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <div class="footer-copy">
                    <p>&copy; <?php echo date('Y'); ?> Developed by <a href="https://infinityflamesoft.com/" target="_blank">Infinity Flame Soft</a></p>
                </div>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <div class="footer-bottom-menu">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer-2',
                            'container'      => false,
                        ) );
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php wp_footer(); ?>