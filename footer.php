<footer class="footer-area" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/footer.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-footer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Your Image">
                    <p>"ফরচুন ইন্টারন্যাশনাল" প্রতিশ্রুতিবদ্ধ যে এটি প্রবেশযোগ্য এবং অন্তর্ভুক্তিমূলক মেডিকেল যত্নের নিয়মাবলী মেনে চলবে, যা সবার জন্য সহজলভ্য এবং মানসম্পন্ন স্বাস্থ্যসেবা নিশ্চিত করবে। আমাদের লক্ষ্য হল, স্বাস্থ্যসেবাকে সবার জন্য আরও কার্যকর, সাশ্রয়ী এবং উপযুক্ত করে তোলা, যাতে প্রত্যেক ব্যক্তি তার সুস্থতা ও ভালো থাকার জন্য প্রয়োজনীয় সহায়তা পায়।</p>
                    <div class="footer-social">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="single-footer">
                    <h4>কুইক লিঙ্ক</h4>
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer-1'   // CSS class for the <ul> element
                        ) );
                        ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-footer">
                    <h4>সর্বশেষ পোস্টসমূহ</h4>
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
                    <h4>যোগাযোগ করুন</h4>
                    <div class="footer-single-contact">
                        <i class="fa-solid fa-location-dot"></i>
                        <h4>ঠিকানা <span>209-এক্সসেল টাওয়ার, ২য় তলা, সুবিদবাজার, সিলেট</span></h4>
                    </div>
                    <div class="footer-single-contact">
                        <i class="fa-solid fa-phone"></i>
                        <h4>মোবাইল <span>+8801855-444777</span></h4>
                    </div>
                    <div class="footer-single-contact">
                        <i class="fa-solid fa-envelope"></i>
                        <h4>ইমেইল <span>fortunesylhet@gmail.com</span></h4>
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