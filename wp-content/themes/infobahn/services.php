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

                <div class="stripe__content left-aligned">

                <?php
                    // Start the Loop.
                    while ( have_posts() ) : the_post(); ?>

                        <h1 class="section-heading"><?php the_title(); ?></h1>

                        <?php // the_content( __( '', 'infobahn' ) );

                    endwhile;
                ?>

                    <p>We design elegant and engaging websites that address specific business objectives, and use the latest techniques and technologies to help you engage with your audience wherever they are.</p>

                    <p>When you work with us, you benefit from our extensive experience in problem-solving and design, backed up by solid research and data. You can also take advantage of consultation and training on web strategy and marketing.</p>

                    <p>Our services are designed to make your life easier. From the free initial consultation, to the month of free tech support and our unique modular maintenance contract that lets you choose exactly what you want to pay for, our approach makes each web project simpler and more painless.</p>

                </div>

            </div>

        </div>

        <div class="stripe">
            
            <div class="wrapper">

                <h1 class="section-heading">Our services</h1>
                        
                <ul class="services-list">

                    <li class="services-list__item">
                        <a href="" class="services-list__link">Visual design</a>
                        <div class="services-list__description">
                            This is a horse.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <a href="" class="services-list__link">Ecommerce sites</a>
                        <div class="services-list__description">
                            This is a horse.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <a href="" class="services-list__link">User research</a>
                        <div class="services-list__description">
                            This is a horse.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <a href="" class="services-list__link">Responsive design</a>
                        <div class="services-list__description">
                            This is a horse.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <a href="" class="services-list__link">Site audits</a>
                        <div class="services-list__description">
                            This is a horse.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <a href="" class="services-list__link">Wordpress themes</a>
                        <div class="services-list__description">
                            This is a horse.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <a href="" class="services-list__link">Usability testing</a>
                        <div class="services-list__description">
                            This is a horse.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <a href="" class="services-list__link">Code reviews</a>
                        <div class="services-list__description">
                            This is a horse.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <a href="" class="services-list__link">Shopify themes</a>
                        <div class="services-list__description">
                            This is a horse.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <a href="" class="services-list__link">Web development</a>
                        <div class="services-list__description">
                            This is a horse.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <a href="" class="services-list__link">Web strategy</a>
                        <div class="services-list__description">
                            This is a horse.
                        </div>
                    </li>

                </ul>

            </div>

        </div>

        <div class="stripe stripe--patterned stripe--blue">
            
            <div class="stripe__content">
                
                <p>If you’ve got a new web project on the horizon, we’d love to work with you.</p>

                <a href="" class="btn">Hire us</a>

            </div>

        </div>

        <!-- <div class="stripe stripe--process">
            
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

        </div> -->

<?php get_footer(); ?>