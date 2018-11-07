<?php
/*
Template Name: Contact
*/
get_header(); ?>


<?php

if (is_front_page()) {
    get_template_part('template-parts/content', 'page-gallery');
} ?>
<div class="container">
    <div class="center-container">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'template-parts/content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }

            // End of the loop.
        endwhile;
        ?>
    </div>

</div>



<?php get_footer(); ?>
