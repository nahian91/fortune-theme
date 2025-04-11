<footer class="footer-area" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/footer.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-footer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Your Image">
                    <p>"Fortune International" promises to follow rules that ensure medical care is easy to access and includes everyone. The goal is to make healthcare better, more affordable, and suitable for all, so that every person gets the help they need to stay healthy and well.</p>
                    <div class="footer-social">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="single-footer">
                    <h4>Quick Links</h4>
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer-1'   // CSS class for the <ul> element
                        ) );
                        ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-footer">
                    <h4>Latest Posts</h4>
                    <?php
                        // The Query to get the latest post
                        $args = array(
                            'posts_per_page' => 3,  // Only get the latest post
                            'post_status'    => 'publish', // Only published posts
                        );

                        $latest_post_query = new WP_Query( $args );

                        // The Loop to display the latest post
                        if ( $latest_post_query->have_posts() ) : 
                            while ( $latest_post_query->have_posts() ) : $latest_post_query->the_post();
                        ?>
                            <div class="footer-latest-post">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('thumbnail');?>
                                </a>
                                <h4 class="footer-latest-post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
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
            <div class="col-md-3">
                <div class="single-footer">
                    <h4>Contact Us</h4>
                    <div class="footer-single-contact">
                        <i class="fa-solid fa-location-dot"></i>
                        <h4>Address <span>209-Excel Tower, 2nd Floor, Subidbazar, Sylhet.</span></h4>
                    </div>
                    <div class="footer-single-contact">
                        <i class="fa-solid fa-phone"></i>
                        <h4>Mobile <span>+8801855-444777</span></h4>
                    </div>
                    <div class="footer-single-contact">
                        <i class="fa-solid fa-envelope"></i>
                        <h4>Email <span>fortunesylhet@gmail.com</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<section class="footer-bottom py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="footer-copy">
                    <p>&copy; 2025. Developed by <a href="https://infinityflamesoft.com/" target="_blank">Infinity Flame Soft</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="footer-menu">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer-2'   // CSS class for the <ul> element
                        ) );
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php wp_footer();?>
</body>
</html>