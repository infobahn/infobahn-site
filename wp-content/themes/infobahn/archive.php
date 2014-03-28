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

    <?php echo get_previous_posts_link('<span class="prevnext__text">Newer posts </span>&raquo;'); ?>
    <?php echo get_next_posts_link('&laquo;<span class="prevnext__text"> Older posts</span>'); ?>

    <div class="wrapper">

        <div class="upper-sidebar"><?php include( TEMPLATEPATH . '/upper-sidebar.php'); ?></div>

        <div class="articles">

        <?php if ( have_posts() ) : ?>

            <h1 class="archive-heading"><?php
                if ( is_day() ) :
                    printf( __( 'Archived posts from <strong>%s</strong>', 'infobahn' ), get_the_date() );

                elseif ( is_month() ) :
                    printf( __( 'Archived posts from <strong>%s</strong>', 'infobahn' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'infobahn' ) ) );

                elseif ( is_year() ) :
                    printf( __( 'Archived posts from <strong>%s</strong>', 'infobahn' ), get_the_date( _x( 'Y', 'yearly archives date format', 'infobahn' ) ) );

                else :
                    _e( 'Archives', 'infobahn' );

                endif;
            ?></h1>

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

        <div class="lower-sidebar"><?php include( TEMPLATEPATH . '/lower-sidebar.php'); ?></div>

    </div>

</div>

<?php get_footer(); ?>