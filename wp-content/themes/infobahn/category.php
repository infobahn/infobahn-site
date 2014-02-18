<?php
/**
 * The template for displaying the blog
 *
 * @package WordPress
 * @subpackage Infobahn
 * @since Infobahn 1.0
 */

get_header(); ?>



<div class="stripe stripe--blog">

    <div class="wrapper">

        <div class="upper-sidebar"><?php get_sidebar(); ?></div>

        <div class="articles">

        <?php if ( have_posts() ) : ?>

            <div class="stripe__content">

                <h1 class="section-heading"><?php printf( __( 'Posts categorised as &ldquo;%s&rdquo;', 'infobahn' ), single_cat_title( '', false ) ); ?></h1>

            </div>

                <?php
                // Start the Loop.
                while ( have_posts() ) : the_post();

                    /*
                     * Include the post format-specific template for the content. If you want to
                     * use this in a child theme, then include a file called called content-___.php
                     * (where ___ is the post format) and that will be used instead.
                     */
                    get_template_part( 'content', get_post_format() );

                endwhile;

            else :
                // If no content, include the "No posts found" template.
                get_template_part( 'content', 'none' );

            endif;
        ?>

        </div>

        <div class="lower-sidebar"><?php include( TEMPLATEPATH . '/sidebar.php'); ?></div>

    </div>

</div>

<?php get_footer(); ?>