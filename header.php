<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11"><!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href='https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css' rel='stylesheet'
          type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
    <!--    fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400|PT+Serif:400,400i,700,700i|Playfair+Display:400,400i,700,700i,900,900i"
          rel="stylesheet" type="text/css"><!-- custom styles -->
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"><?php endif; ?><?php wp_head(); ?>

    <title></title>
</head>

<body <?php body_class(); ?>>
<!-- nav start -->

<div class="nav-container">
    <a href="/" class="header-brand"><img src="<?php header_image(); ?>" class="brand-icon"></a>

    <div class="header-nav">
        <ul class="main-links">
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </ul>
    </div><!--/.header-nav-->

    <ul class="social-links" style="float: right;">
        <li>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="CRTQHZHBSVCXS">
                <input class="submit-btn" type="submit" value="Donate" border="0" name="submit" alt="Donate">
            </form>
        </li>
    </ul>
    <a href="#" class="header-mobile-navicon js-mobile-navicon"></a>
</div><!--/.nav-container-->
<!-- nav end -->

<div class="spacer">
</div>

</body>
</html>
