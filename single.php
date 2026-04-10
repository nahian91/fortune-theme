<?php get_header(); ?>

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

    <div class="container py-5">
        <div class="row">
            <div class="col-md-9">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="single-post-thumbnail mb-4">
                        <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                    </div>
                    
                    <div class="single-post-meta mb-3">
                        <span><i class="fa-solid fa-table"></i> Categories: <?php the_category(', '); ?></span>
                        <span><i class="fa-solid fa-calendar-days"></i> Date: <?php the_time('F j, Y'); ?></span>
                        <span><i class="fa-solid fa-eye"></i> 
                            <?php 
                                $views = get_post_meta(get_the_ID(), 'post_views_count', true);
                                echo ($views ? $views : '0') . ' Views'; 
                            ?>
                        </span>
                    </div>

                    <div class="post-content entry-content">
                        <?php the_content(); ?>
                    </div>

                    <div class="social-share-buttons">
    <?php 
    $post_url   = urlencode(get_permalink());
    $post_title = urlencode(get_the_title());
    ?>

    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>" target="_blank" class="facebook-share">
        <i class="fab fa-facebook-f"></i> Share
    </a>
    
    <a href="https://twitter.com/intent/tweet?url=<?php echo $post_url; ?>&text=<?php echo $post_title; ?>" target="_blank" class="twitter-share">
        <i class="fab fa-twitter"></i> Tweet
    </a>
    
    <a href="https://api.whatsapp.com/send?text=<?php echo $post_title; ?>%20<?php echo $post_url; ?>" target="_blank" class="whatsapp-share">
        <i class="fab fa-whatsapp"></i> Share
    </a>
</div>

                    <hr class="my-5">

                    <?php
                    $categories = get_the_category();
                    if ($categories) {
                        $category_ids = array();
                        foreach ($categories as $category) {
                            $category_ids[] = $category->term_id;
                        }

                        $args = array(
                            'category__in'   => $category_ids,
                            'post__not_in'   => array(get_the_ID()),
                            'posts_per_page' => 3,
                            'orderby'        => 'rand',
                        );

                        $related_posts = new WP_Query($args);

                        if ($related_posts->have_posts()) { ?>
                            <div class="related-posts mb-5">
                                <h3 class="mb-4">Related Posts</h3>
                                <div class="row">
                                    <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                                        <div class="col-md-4">
                                            <div class="single-blog">
                                                <div class="related-thumb mb-2">
                                                    <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                                                </div>
                                                <div class="blog-grid-content">
                                                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                                    <a href="<?php the_permalink(); ?>" class="read-more-link">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php }
                        wp_reset_postdata();
                    }
                    ?>
                <?php endwhile; endif; ?>
            </div>

            <div class="col-md-3">
                <div class="blog-sidebar">
                    <div class="single-blog-sidebar popular-posts">
                        <h4>Popular Posts</h4>
                        <ul>
                            <?php
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
                                        <?php the_post_thumbnail();?>
                                        <?php the_title(); ?> (<?php echo get_post_meta(get_the_ID(), 'post_views_count', true); ?> views)
                                    </a>
                                </li>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </ul>
                    </div>
                    <div class="single-blog-sidebar">
                        <h4>Categories</h4>
                        <ul>
                            <?php
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