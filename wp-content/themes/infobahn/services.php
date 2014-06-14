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

		<div class="stripe stripe--grey">

		    <div class="wrapper">

                <div class="stripe__content">

                <?php
                    // Start the Loop.
                    while ( have_posts() ) : the_post(); ?>

                        <h1 class="section-heading"><?php the_title(); ?></h1>

                        <?php the_content( __( '', 'infobahn' ) );

                    endwhile;
                ?>

                    <hr>

                </div>

                <div class="services">

                    <h2>Our services</h2>
                            
                    <ul class="services-list">
                        <li class="services-list__item">Website design and development</li>
                        <li class="services-list__item">Web app design and development</li>
                        <li class="services-list__item">Ecommerce sites</li>
                        <li class="services-list__item">WordPress and Shopify themes</li>
                        <li class="services-list__item">Theme development</li>
                        <li class="services-list__item">Shopify theme development</li>
                        <li class="services-list__item">Ecommerce sites</li>
                        <li class="services-list__item">Eight</li>
                        <li class="services-list__item">Theme development</li>
                        <li class="services-list__item">Shopify theme development</li>
                        <li class="services-list__item">Ecommerce sites</li>
                        <li class="services-list__item">Eight</li>
                    </ul>

                </div>

            </div>

        </div>

        <div class="stripe stripe--process">
            
            <h1 class="section-heading">Our Process</h1>

            <ul>
                <li>enquiry</li>
                <li>meeting</li>
                <li>project spec</li>
                <li>design and development</li>
                <li>testing and feedback</li>
                <li>launch</li>
                <li>iterate!</li>
            </ul>

        </div>

<?php include "newsletter.php"; ?>