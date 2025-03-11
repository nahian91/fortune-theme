<?php get_header(); ?>

    <section class="breadcumb-area text-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/footer.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4><?php the_title();?></h4>
                    <ul>
                        <li><a href="<?php echo site_url();?>">Home</a></li>
                        <li><i class="fa-solid fa-angle-right"></i></li>
                        <li><?php the_title();?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
