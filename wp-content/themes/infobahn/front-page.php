<?php
/**
 * The template for displaying the home page
 *
 * @package WordPress
 * @subpackage Infobahn
 * @since Infobahn 1.0
 */

get_header(); ?>

		<div class="stripe stripe--patterned stripe--pink">

		    <div class="wrapper">

		        <div class="main-illustration">
		            
		            <img src="<?php echo get_template_directory_uri(); ?>/build/img/main-illustration.png" alt="">

		        </div>

		        <div class="intro">
		            
		            <h1 class="intro__heading"><?php the_field('headline'); ?></h1>

		            <?php the_field('intro'); ?>

		        </div>

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

		<div class="stripe stripe--patterned stripe--blue" id="us">

            <div class="wrapper">
            
                <h1 class="section-heading"><?php the_field('about-heading'); ?></h1>

                <span class="and">&amp;</span>

                <div class="person person--sam">

                    <div class="person__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/img/people/sam.jpg" alt="Sam Roberts">
                    </div>

                    <h2 class="person__name"><?php the_field('sam-heading'); ?></h2>

                    <?php the_field('sam-bio'); ?>

                </div>

                <div class="person person--james">

                    <div class="person__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/img/people/james.jpg" alt="James Burnett">
                    </div>

                    <h2 class="person__name"><?php the_field('james-heading'); ?></h2>

                    <?php the_field('james-bio'); ?>

                </div>

            </div>

        </div>

<?php get_footer(); ?>