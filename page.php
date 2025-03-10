<?php
get_header();  // Includes the header.php file
?>

<section class="breadcumb-area">
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
