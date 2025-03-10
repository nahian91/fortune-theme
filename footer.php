<footer class="footer-area">
    <div class="container">
        <div class="grid">
            <div class="col-md-3">
                <div class="single-footer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Your Image">
                    <p>Fortune International’ has been promised to the stipulations of approachable and inclusive medical care.</p>
                    <div class="footer-social">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
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
    'posts_per_page' => 1,  // Only get the latest post
    'post_status'    => 'publish', // Only published posts
);

$latest_post_query = new WP_Query( $args );

// The Loop to display the latest post
if ( $latest_post_query->have_posts() ) : 
    while ( $latest_post_query->have_posts() ) : $latest_post_query->the_post();
?>
    <div class="latest-post">
        <!-- Display Post Title -->
        <h2 class="latest-post-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        
        <!-- Display Featured Image -->
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="latest-post-image">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full'); // 'full' is the image size ?>
                </a>
            </div>
        <?php endif; ?>

        <!-- Display Excerpt or Content -->
        <div class="latest-post-excerpt">
            <?php the_excerpt(); ?>
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
            <div class="col-md-3">
                <div class="single-footer">
                    <h4>Contact Us</h4>
                    <div class="footer-single-contact">
                        <i class="fa-solid fa-location-dot"></i>
                        <h4>address <span>209-Excel Tower, 1st Floor, Subidbazar, Sylhet</span></h4>
                    </div>
                    <div class="footer-single-contact">
                        <i class="fa-solid fa-phone"></i>
                        <h4>phone <span>+8801855-444777</span></h4>
                    </div>
                    <div class="footer-single-contact">
                        <i class="fa-solid fa-envelope"></i>
                        <h4>email <span>fortunesylhet@gmail.com</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<section class="footer-bottom">
    <div class="container">
        <div class="grid">
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