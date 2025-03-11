<?php get_header();?>

<section class="breadcumb-area text-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/footer.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Blogs</h4>
                <ul>
                    <li><a href="<?php echo site_url();?>">Home</a></li>
                    <li><i class="fa-solid fa-angle-right"></i></li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="blogs-area py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="blogs-grid">
                    <div class="row">
                    <?php
                    $args = array(
                        'posts_per_page' => -1,
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
</section>

<?php get_footer();?>