<?php
get_header();  // Includes the header.php file
?>

<section class="breadcumb-area py-5 text-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/footer.jpg');">
    <div class="container">
        <div class="grid">
            <div class="col-md-12">
                <h4><?php the_title();?></h4>
                <ul>
                    <li><a href="<?php echo site_url();?>">Home</a></li>
                    <li><?php the_title();?></li>
                </ul>
            </div>
        </div>
    </div>
</section>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            // The content of the page
            the_content();
        endwhile;
    endif;
    ?>

<?php
get_footer();  // Includes the footer.php file
?>
