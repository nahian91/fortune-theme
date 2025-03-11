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
                <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            ?>
                            <!-- Display Post Content -->
                            <article <?php post_class(); ?>>
                                <?php the_content(); ?>
                            </article>
                        <?php
                        endwhile;
                    endif;
                ?>
                
                <!-- Display Comments Section -->
                <div class="comments-section">
                    <?php
                    // Check if comments are open or there are comments
                    if (comments_open() || get_comments_number()) :
                        ?>
                        <h4>Comments</h4>
                        <ul class="comments-list">
                            <?php
                            // Display comments
                            wp_list_comments([
                                'style' => 'ul',
                                'short_ping' => true,
                                'avatar_size' => 50,
                            ]);
                            ?>
                        </ul>

                        <!-- Comment Form -->
                        <div class="comment-form">
                            <?php
                            // Display comment form
                            comment_form([
                                'title_reply' => 'Leave a Comment',
                                'label_submit' => 'Submit Comment',
                            ]);
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Sidebar Area -->
            <div class="col-md-3">
                <div class="blog-sidebar">

                    <!-- Popular Posts Widget -->
                    <div class="single-blog-sidebar popular-posts">
                        <h4>Popular Posts</h4>
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

                    <!-- Categories Widget -->
                    <div class="single-blog-sidebar">
                        <h4>Categories</h4>
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
