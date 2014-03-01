<?php
/**
 * The template for displaying a project page
 *
 * @package WordPress
 * @subpackage Infobahn
 * @since Infobahn 1.0
 */

get_header(); ?>

		<div class="stripe case-study">

            <div class="wrapper">

                <?php $prev_post = get_previous_post(); ?>
                <?php $next_post = get_next_post(); ?>

                <?php if ( !empty( $prev_post ) ) : ?>

                    <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="btn case-study__prev">
                        Prev<span class="chevron-left"></span>
                    </a>

                <?php endif; ?>

                <?php if ( !empty( $next_post ) ) : ?>  
                    
                    <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="btn case-study__next">
                        Next<span class="chevron-right"></span>
                    </a>

                <?php endif; ?>
            
                <h1 class="case-study__title"><?php the_title(); ?></h1>

                <a class="case-study__url" href="http://<?php the_field('project-url'); ?>/"><?php the_field('project-url'); ?></a>

                <hr class="case-study__divider">

                <div class="stripe__content case-study__description">

                    <?php echo $post->post_content; ?>

                </div>

                <?php if( have_rows('images') ): ?>
                 
                    <?php while( have_rows('images') ): the_row(); ?>
                 
                        <!-- 
                        <img src="<?php the_sub_field('image'); ?>" alt="<?php the_title(); ?>" class="case-study__screenshot">
                         -->

                        <span data-picture data-alt="<?php the_title(); ?>">
                            <span class="case-study__screenshot" data-src="<?php echo get_template_directory_uri(); ?>/build/img/projects/<?php the_sub_field('image'); ?>-small.jpg"></span>
                            <span class="case-study__screenshot" data-src="<?php echo get_template_directory_uri(); ?>/build/img/projects/<?php the_sub_field('image'); ?>-medium.jpg"        data-media="(min-width: 400px)"></span>
                            <span class="case-study__screenshot" data-src="<?php echo get_template_directory_uri(); ?>/build/img/projects/<?php the_sub_field('image'); ?>-medium-x2.jpg"     data-media="(min-width: 400px) and (-webkit-min-device-pixel-ratio: 2.0)"></span>
                            <span class="case-study__screenshot" data-src="<?php echo get_template_directory_uri(); ?>/build/img/projects/<?php the_sub_field('image'); ?>-large.jpg"         data-media="(min-width: 800px)"></span>
                            <span class="case-study__screenshot" data-src="<?php echo get_template_directory_uri(); ?>/build/img/projects/<?php the_sub_field('image'); ?>-large-x2.jpg"      data-media="(min-width: 800px) and (-webkit-min-device-pixel-ratio: 2.0)"></span>

                            <!--[if (lt IE 9) & (!IEMobile)]>
                            <span class="case-study__screenshot" data-src="<?php echo get_template_directory_uri(); ?>/build/img/projects/<?php the_sub_field('image'); ?>-large.jpg"></span>
                            <![endif]-->

                            <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                            <noscript>
                                <img class="case-study__screenshot" src="<?php echo get_template_directory_uri(); ?>/build/img/projects/<?php the_sub_field('image'); ?>-small.jpg" alt="<?php the_title(); ?>">
                            </noscript>
                        </span>

                    <?php endwhile; ?>

                <?php endif; ?>



            </div>

        </div>

		<div class="stripe" id="work">

            <div class="wrapper">

                <div class="stripe__content projects__intro">
                
                    <h1 class="section-heading"><?php the_field('work-heading'); ?></h1>

                    <?php the_field('work-text'); ?>

                </div>

            </div>

            <div class="wrapper">

                <ul class="nav nav--projects">

                    <?php

                    global $post;
                    $args = array( 'post_type' => 'infobahn_project', 'posts_per_page' => 6, 'order' => 'ASC' );
                    $myposts = get_posts( $args );
                    $i = 1;

                    foreach ( $myposts as $post ) : 
                        setup_postdata( $post );

                    ?>

                        <li class="project project-<?php echo $i; ?>">

                            <a href="<?php the_permalink(); ?>" class="project__link">

                                <img src="<?php echo get_template_directory_uri(); ?>/build/img/projects/thumbs/<?php the_field('project-thumb'); ?>" alt="<?php the_title(); ?>" class="project__img">

                                <h3 class="project__title"><?php the_title(); ?></h3>

                                <h4 class="project__tagline"><?php the_field('project-type'); ?></h4>

                            </a>

                        </li>

                        <?php $i++; ?>

                    <?php endforeach; ?>
                    
                    <?php wp_reset_postdata(); ?>

                </ul>

            </div>

        </div>

<?php get_footer(); ?>