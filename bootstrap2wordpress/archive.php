<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_to_WordPress
 */

get_header(); ?>


        <?php
        if ( have_posts() ) : ?>


            <section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">

            <h1 class="page-title">
                <?php
                    if ( is_category() ) :
                        single_cat_title();
                elseif ( is_tag() ) :
                 single_tag_title();

                elseif ( is_author() ) :
                    printf( __('Author: %s', 'bootstrap2wordpress' ), '<span class="vcard">' . get_the_author() . '</span>' );

                elseif ( is_day() ) :
                    printf( __('Day: %s', 'bootstrap2wordpress' ), '<span>' . get_the_date() . '</span>' );

                elseif ( is_month() ) :
                    printf( __('Month: %s', 'bootstrap2wordpress' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'bootstrap2wordpress' )) . '</span>' );

                elseif ( is_year() ) :
                    printf( __('Year: %s', 'bootstrap2wordpress' ), '<span>' . get_the_date( __x( 'Y', 'yearly archives date format', 'bootstrap2wordpress' )) . '</span>' );

                 elseif ( is_tax( 'post_format', 'post-format-aside') ) :
                    _e( 'Aside', 'bootstrap2wordpress' );

                elseif ( is_tax( 'post_format', 'post-format-gallery') ) :
                    _e( 'Galleries', 'bootstrap2wordpress' );

                elseif ( is_tax( 'post_format', 'post-format-image') ) :
                    _e( 'Images', 'bootstrap2wordpress' );

                elseif ( is_tax( 'post_format', 'post-format-video') ) :
                    _e( 'Video', 'bootstrap2wordpress' );

                elseif ( is_tax( 'post_format', 'post-format-quote') ) :
                    _e( 'Quotes', 'bootstrap2wordpress' );

                elseif ( is_tax( 'post_format', 'post-format-link') ) :
                    _e( 'Links', 'bootstrap2wordpress' );

                elseif ( is_tax( 'post_format', 'post-format-status') ) :
                    _e( 'Statuses', 'bootstrap2wordpress' );

                elseif ( is_tax( 'post_format', 'post-format-audio') ) :
                    _e( 'Audio', 'bootstrap2wordpress' );

                elseif ( is_tax( 'post_format', 'post-format-chat') ) :
                    _e( 'Chats', 'bootstrap2wordpress' );

                else :
                    _e( 'Archives', 'bootstrap2wordpress' );
                endif;

                ?>

                 <?php
                // Show an optional term description.
$term_description =  term_description();
if( ! empty( $term_description ) ) :
    printf('<small class="taxonomy-description">%s</small>', $term_description );
endif;
            ?>
            </h1>
</section>

    <div class="container">
        <div id="primary" class="row">
            <main id="content" class="col-sm-8">



            <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( 'template-parts/content', get_post_format() );

            endwhile;


        else :

            get_template_part( 'template-parts/content', 'none' );

        endif; ?>

        </main><!-- #content -->


        <!-- SIDEBAR -->
        <aside class="col-sm-4">
            <?php get_sidebar(); ?>
        </aside>

        </div><!-- #primary -->
    </div><!-- .container -->

<?php
get_footer();
