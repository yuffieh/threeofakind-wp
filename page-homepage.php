<?php
/*
Template Name: Homepage
*/
get_header(); ?>


<?php get_template_part('template-parts/content', 'page-homepage'); ?>


<div class="container-fluid">
    <?php
    $count = 0;
    $args = array(
        'type' => 'post',
        'posts_per_page' => -1,
        'cat' => '2',
        'order_by' => 'date');
    ?>
    <?php query_posts($args); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) :
            the_post(); ?>
            <div class="section-one" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')">
                <div style="border: 1px solid white; padding: 1em;">
                    <div class="main-info">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>


            </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <div class="overlay-absolute">

        <?php
        $count = 0;
        $args = array(
            'type' => 'post',
            'posts_per_page' => -1,
            'cat' => '4',
            'order_by' => 'date');
        ?>
        <?php query_posts($args); ?>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) :
                the_post(); ?>
                <div class="section">
                    <h2><?php the_title(); ?></h2>

                    <div class="about-me">
                        <span>
                            <?php the_content(); ?>
                        </span>
                        <img style="float:right;" src="<?php the_post_thumbnail_url('full'); ?>" />

                    </div>


                </div>
            <?php endwhile; ?>
        <?php endif; ?>


        <?php get_footer(); ?>
    </div>
</div>



