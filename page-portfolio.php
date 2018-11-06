<?php
/*
Template Name: Members
*/
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
        'cat' => '5',
        'order_by' => 'date');
    ?>
    <?php query_posts($args); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
                <div class="portfolio-img" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')">
                </div>

        <?php endwhile; ?>
    <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>
