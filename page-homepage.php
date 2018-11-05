<?php
/*
Template Name: Homepage
*/
get_header(); ?>


<?php get_template_part('template-parts/content', 'page-homepage'); ?>


<div class="container-fluid">
    <div class="section-one">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/text-2.png">
        <button class="stroked-btn">Learn More</button>
    </div>
    <div class="overlay-absolute">
        <div class="section">
            <h2 style="text-align: center">In The Last 5 Years, We've Lost 50% of Our Public School Teachers</h2>
            <div class="img-header">
                <img src="https://as2.ftcdn.net/jpg/01/92/03/63/1024W_F_192036340_QvWtrdORNCpBfzbByww029NYoWUzDe3U_NW1.jpg">
            </div>
        </div>
        <div class="section-one" style="background-position: center; background-image: url('<?php echo get_template_directory_uri(); ?>/imgs/book-work.jpg');">
            <div style="background-color: white; padding: 2em;">
                <div style="background-color:white; padding: 2em; border: 1px solid grey;">
                    <h1 style="text-align: center">So What Can We Do About It?</h1>
                </div>
            </div>
        </div>
        <div class="section">
            //something here about what Recess can do about helping teachers
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dpKX-OZtVUY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="section">
            //something here about what Others can do helping recess helping teachers "voulenteer, donate etc"
        </div>
        <?php get_footer(); ?>
    </div>
</div>



