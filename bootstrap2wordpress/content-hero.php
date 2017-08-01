
<?php
// Custom Fields
$prelaunch_price        = get_post_meta( 1064, 'prelaunch_price', true );
$launch_price           = get_post_meta( 1064, 'launch_price', true );
$final_price            = get_post_meta( 1064, 'final_price', true );
$course_url             = get_post_meta( 1064, 'course_url', true );
$button_text            = get_post_meta( 1064, 'button_text', true );
$optin_text             = get_post_meta( 1064, 'optin_text', true );
$optin_button_text      = get_post_meta( 1064, 'optin_button_text', true );

?>


  <!-- Hero ======================  -->
<section id="hero" data-type="background" data-speed="5">
    <article>
        <div class="container clearfix">
            <div class="row">

                <div class="col-sm-5">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to WordPress">
                </div><!-- /col -->

                <div class="col-sm-7 hero-text">
                    <h1><?php bloginfo('name'); ?> </h1>
                    <p class="lead"><?php bloginfo('description'); ?></p>

                    <div id="price-timeline">
                        <div class="price active">
                            <h4>Pre-Lunch Price <small>Ends Soon!</small></h4>
                            <span><?php echo $prelaunch_price; ?></span>
                        </div><!-- /price -->
                        <div class="price">
                            <h4>Pre-Lunch Price <small>Ends Soon!</small></h4>
                            <span><?php echo $launch_price; ?></span>
                        </div><!-- /price -->
                        <div class="price">
                            <h4>Final Price <small>Ends Soon!</small></h4>
                            <span><?php echo $final_price; ?></span>
                        </div><!-- /price -->
                    </div><!-- /price-timeline -->

                    <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button"><?php echo $button_text; ?></a></p>

                </div><!-- /col -->

            </div><!-- /row -->
        </div><!-- /container -->
    </article>
</section><!-- /hero -->
