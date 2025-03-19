<?php get_header(); ?>

    <!-- Breadcrumb Area -->
    <section class="breadcumb-area text-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/footer.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4><?php the_title(); ?></h4>
                    <ul>
                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
                        <li><i class="fa-solid fa-angle-right"></i></li>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Area -->
    <div class="container py-5">
        <div class="row">
            <!-- Main Post Content -->
            <div class="col-md-9">
                <div class="single-post-thumbnail">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
                <div class="single-post-meta">
                    <span><i class="fa-solid fa-table"></i> বিভাগ: <?php the_category(', '); ?></span>
                    <span><i class="fa-solid fa-calendar-days"></i> তারিখ: <?php the_time('F j, Y'); ?></span>
                    <span><i class="fa-solid fa-eye"></i> <?php echo get_post_meta(get_the_ID(), 'post_views_count', true) . ' বার দেখা হয়েছে'; ?></span>
                </div>

                <?php
                the_content();
                    
                ?>

                <div class="social-share-buttons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="facebook-share" title="Share on Facebook">
                        <i class="fab fa-facebook-f"></i> Share
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" class="twitter-share" title="Share on Twitter">
                        <i class="fab fa-twitter"></i> Tweet
                    </a>
                    <a href="https://api.whatsapp.com/send?text=<?php the_title(); ?>%20<?php the_permalink(); ?>" target="_blank" class="whatsapp-share" title="Share on WhatsApp">
                        <i class="fab fa-whatsapp"></i> Share
                    </a>
                </div>
                <?php
    // Get the current post's categories
    $categories = get_the_category();
    if ($categories) {
        $category_ids = array();
        foreach ($categories as $category) {
            $category_ids[] = $category->term_id;
        }

        // Set up the query arguments to get related posts by category
        $args = array(
            'category__in'   => $category_ids, // Posts in the same categories
            'post__not_in'   => array(get_the_ID()), // Exclude the current post
            'posts_per_page' => 3, // Number of related posts to show
            'orderby'        => 'rand', // Random order for diversity
        );

        // Create a new query for related posts
        $related_posts = new WP_Query($args);

        if ($related_posts->have_posts()) {
            echo '<div class="related-posts"><h3>সম্পর্কিত পোস্টসমূহ</h3>';
            echo '<div class="row">'; // Start the row for grid layout

            while ($related_posts->have_posts()) {
                $related_posts->the_post();
                ?>
                <div class="col-md-4">
                    <div class="single-blog">
                        <?php the_post_thumbnail();?>
                        <div class="blog-grid-content">
                            <div class="blog-grid-meta">
                                <span><?php echo get_the_date('F j, Y');;?></span>
                                <span><?php the_category(); ?></span>
                            </div>
                            <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            <?php the_excerpt();?>
                            <a href="<?php the_permalink();?>">আরও পড়ুন</a>
                        </div>
                    </div>
                </div>
                <?php
            }

            echo '</div>'; // End the row
            echo '</div>'; // End the related-posts div
        }

        // Reset post data after custom query
        wp_reset_postdata();
    }
?>

            </div>

            <!-- Sidebar Area -->
            <div class="col-md-3 no-sidebar">
                <div class="blog-sidebar">
                    <!-- জনপ্রিয় পোস্টসমূহ Widget -->
                    <div class="single-blog-sidebar popular-posts">
                        <h4>জনপ্রিয় পোস্টসমূহ</h4>
                        <ul>
                            <?php
                            // Popular posts query
                            $popular_posts = new WP_Query([
                                'posts_per_page' => 5,
                                'meta_key'       => 'post_views_count',
                                'orderby'        => 'meta_value_num', 
                                'order'          => 'DESC'
                            ]);

                            while ($popular_posts->have_posts()) : $popular_posts->the_post();
                            ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) { the_post_thumbnail('thumbnail'); } ?>
                                        <?php the_title(); ?> 
                                        (<?php echo get_post_meta(get_the_ID(), 'post_views_count', true); ?> views)
                                    </a>
                                </li>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </ul>
                    </div>

                    <!-- বিভাগসমূহ Widget -->
                    <div class="single-blog-sidebar">
                        <h4>বিভাগসমূহ</h4>
                        <ul>
                            <?php
                            // Display categories
                            wp_list_categories([
                                'title_li' => '',
                                'show_count' => true,
                                'orderby' => 'name',
                                'order' => 'ASC',
                                'hierarchical' => true
                            ]);
                            ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
