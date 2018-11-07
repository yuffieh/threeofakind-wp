<?php
/*
Template Name: Homepage
*/
global $about, $main;
get_header(); ?>

<?php get_template_part('template-parts/content', 'page-homepage'); ?>


<div class="container-fluid">

    <!-- main section-->
    <?php
        $count = 0;
        $args = array(
            'type' => 'post',
            'posts_per_page' => -1,
            'cat' => $main,
            'order_by' => 'date');
    ?>
    <?php query_posts($args); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) :
            the_post(); ?>
            <div class="section-one" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')">
                <div class="border-style">
                    <div class="main-info">

                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>


            </div>
        <?php endwhile; ?>
    <?php endif; ?>


    <!--about me-->

    <?php
    $count = 0;
    $args = array(
        'type' => 'post',
        'posts_per_page' => -1,
        'cat' => $about,
        'order_by' => 'date');
    ?>
    <?php query_posts($args); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) :
            the_post(); ?>
            <div class="section">
                <h2><?php the_title(); ?></h2>

                <div class="about-me">
                        <span class="about-me-content">
                            <?php the_content(); ?>
                        </span>
                    <img class="about-img" src="<?php the_post_thumbnail_url('full'); ?>"/>

                </div>


            </div>
        <?php endwhile; ?>
    <?php endif; ?>


    <?php get_footer(); ?>
</div>



