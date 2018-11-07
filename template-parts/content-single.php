<?php
/**
 * The template part for displaying single posts
 *
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="center-container">
            <div class="blog-post">
                <div class="centered">
                    <?php the_title('<h2 class="blog-title">', '</h3>'); ?>
                    <p>
                        <?php echo get_the_date('M d, Y'); ?>
                    </p>
                    <br/>
                </div>
                <!-- ./centered-->
                <div class="blog-content">
                    <?php
                    the_content();
                    ?>
                </div>
                <!-- ./blog-content -->
            </div>
            <!-- ./blog-post -->
        </div>
        <!-- ./center-container -->
    </div>
    <!-- ./container-fluid -->
    <hr>

</div><!-- #post-## -->

<!-- 	amazon banner	   -->
<div class="centered">
    <script type="text/javascript">
        amzn_assoc_ad_type = "banner";
        amzn_assoc_marketplace = "amazon";
        amzn_assoc_region = "US";
        amzn_assoc_placement = "assoc_banner_placement_default";
        amzn_assoc_campaigns = "gift_certificates";
        amzn_assoc_banner_type = "category";
        amzn_assoc_isresponsive = "true";
        amzn_assoc_banner_id = "1G274HKHXM7QERC7YAG2";
        amzn_assoc_tracking_id = "yuffieh-20";
        amzn_assoc_linkid = "425ce5f8b888467c864d3be5a4acd204";
    </script>
    <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
</div>
