<?php
/*
Template Name: Portfolio
*/
global $portfolio;
get_header(); ?>


<?php

if (is_front_page()) {
    get_template_part('template-parts/content', 'page-portfolio');
} ?>


<div class="center-container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="portfolio-container">
    <?php
    $count = 0;
    $args = array(
        'type' => 'post',
        'posts_per_page' => 9,
        'cat' => $portfolio,
        'order_by' => 'date');
    ?>
    <?php query_posts($args); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

                <div class="portfolio-img" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')">
                    <?php the_title( sprintf( '
                        <a class="portfolio-overlay" href="%s" rel="bookmark">
                            <p class="overlay-text draw meet">', esc_url( get_permalink() ) ),
                            '</p>
                        </a>
                        ' ); ?>
<!--                    <a href="#" class="portfolio-overlay">-->
<!--                        <p class="overlay-text draw meet">Strong overlay</p>-->
<!--                    </a>-->
                </div>

        <?php endwhile; ?>
    <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>
