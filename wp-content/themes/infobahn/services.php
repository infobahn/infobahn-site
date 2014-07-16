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

                <?php
                    // Start the Loop.
                    while ( have_posts() ) : the_post(); ?>

                        <!--<h1 class="section-heading"><?php the_title(); ?></h1>-->

                        <?php // the_content( __( '', 'infobahn' ) );

                    endwhile;
                ?>
                    <hr class="lede-hr">
                    <h1 class="lede">We design elegant and engaging websites that address specific business objectives, and use the latest techniques and technologies to help you engage with your audience wherever they are.</h1>

                </div>

            </div>

        </div>

        <div class="stripe stripe--grey">

            <div class="wrapper">

                <div class="stripe__content left-aligned">

                    <img src="../assets/img/code-editor.png" alt="" style="float:right;margin-left: 2em;margin-top: 1em;">

                    <h3>Experience and expertise</h3>

                    <p>When you work with us, you benefit from our extensive experience in problem-solving and design, backed up by solid research and data. You can also take advantage of consultation and training on web strategy and marketing.</p>

                    <hr>

                        <img src="../assets/img/mug.png" alt="" style="float:left;margin-right: 2em;margin-top: 0em;">

                    <h3>Based on your needs</h3>

                    <p>Our services are designed to make your life easier. From the free initial consultation, to the month of free tech support and our unique modular maintenance contract that lets you choose exactly what you want to pay for, our approach makes each web project simple and painless.</p>

                </div>

            </div>

        </div>

        <div class="stripe">
            
            <div class="wrapper">

                <h1 class="section-heading">Our services</h1>

                <!-- <div class="stripe__content left-aligned">

                    

                </div> -->
                        
                <ul class="services-list">

                    <li class="services-list__item">
                        <span class="services-list__heading">Web design</span>
                        <div class="services-list__description">
                            Beautiful, functional design systems that will grow along with your site.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <span class="services-list__heading">Ecommerce sites</span>
                        <div class="services-list__description">
                            Everything you need to start selling products through the web.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <span class="services-list__heading">User research</span>
                        <div class="services-list__description">
                            We&rsquo;ll help you find out what your users really want from your site.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <span class="services-list__heading">Responsive design</span>
                        <div class="services-list__description">
                            Your site will work at all screen resolutions and on every type of device.


                        </div>
                    </li>

                    <li class="services-list__item">
                        <span class="services-list__heading">Site audits</span>
                        <div class="services-list__description">
                            An in-depth assessment of your website, with practical advice and fixes.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <span class="services-list__heading">Wordpress themes</span>
                        <div class="services-list__description">
                            Custom-made themes and plugins for one of the most popular CMS frameworks.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <span class="services-list__heading">Usability testing</span>
                        <div class="services-list__description">
                            We back up our design decisions by testing your site with real users.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <span class="services-list__heading">Code reviews</span>
                        <div class="services-list__description">
                            A detailed review of your HTML and CSS, with suggestions and code examples.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <span class="services-list__heading">Shopify themes</span>
                        <div class="services-list__description">
                            Completely custom, from-scratch themes for the snazzy ecommerce framework.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <span class="services-list__heading">Web development</span>
                        <div class="services-list__description">
                            Whatever you need, from a single-page brochure site to a full-blown web app.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <span class="services-list__heading">Web strategy</span>
                        <div class="services-list__description">
                            Help with all aspects of web strategy and online marketing.
                        </div>
                    </li>

                    <li class="services-list__item">
                        <span class="services-list__heading">Maintenance contracts</span>
                        <div class="services-list__description">
                            A range of monthly maintenance options to help out as you take your site forward.
                        </div>
                    </li>

                </ul>

            </div>

        </div>

        <div class="stripe stripe--patterned stripe--blue">
            
            <div class="stripe__content">
                
                <p>If you&rsquo;ve got a new web project on the horizon, we’d love to work with you.</p>

                <a href="" class="btn btn--cta btn--rev">Get in touch with us</a>

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