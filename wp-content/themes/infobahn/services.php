<?php
/**
 * The template for displaying the Services page
 * 
 * Template Name: Services
 *
 * @package WordPress
 * @subpackage Infobahn
 * @since Infobahn 1.0
 */

get_header(); ?>

		<div class="stripe stripe--patterned stripe--pink">

		    <div class="wrapper">

                <div class="stripe__content">

                    <hr class="lede-hr">

                    <h1 class="lede"><?php the_field('lede'); ?></h1>

                </div>

            </div>

        </div>

        <div class="stripe stripe--grey">

            <div class="wrapper">

                <div class="stripe__content left-aligned">

                <?php while ( have_posts() ) : the_post();

                    the_content( __( '', 'infobahn' ) );

                endwhile; ?>

                </div>

            </div>

        </div>

        <div class="stripe">
            
            <div class="wrapper">

                <h1 class="section-heading">Our services</h1>

                <?php if( have_rows('services-list') ): ?>

                    <ul class="services-list">
                 
                    <?php while ( have_rows('services-list') ) : the_row(); ?>

                        <li class="services-list__item">
                            <span class="services-list__heading"><?php the_sub_field('service-name'); ?></span>
                            <div class="services-list__description">
                                <?php the_sub_field('service-description'); ?>
                            </div>
                        </li>
                 
                    <?php endwhile; ?>

                    </ul>

                <?php else : ?>
                 
                    <p>Uh oh! You&rsquo;ve found a bug. Perhaps trying refreshing the page?</p>
                 
                <?php endif; ?>

            </div>

        </div>

        <div class="stripe stripe--patterned stripe--blue">
            
            <div class="stripe__content">
                
                <p>If you&rsquo;ve got a new web project on the horizon, we’d love to work with you.</p>

                <a href="contact-us" class="btn btn--cta btn--rev" id="servicesCtaBtn">Get in touch with us</a>

            </div>

        </div>

<?php get_footer(); ?>