<?php
/**
 * The template for displaying the Contact page
 * 
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage Infobahn
 * @since Infobahn 1.0
 */

get_header(); ?>

		<div class="stripe stripe--patterned stripe--pink">

		    <div class="wrapper">

                <div class="offset-content contact">

                <?php
                    // Start the Loop.
                    while ( have_posts() ) : the_post(); ?>

                        <h1 class="section-heading"><?php the_title(); ?></h1>

                        <?php the_content( __( '', 'infobahn' ) );

                    endwhile;
                ?>

                    <p>We&rsquo;d love to work with you. Drop us an email to get things started.</p>

                    <a class="btn btn--rev btn--large" href="mailto:team@infobahndesign.com">team@infobahndesign.com</a>

                </div>

            </div>

        </div>

        <div class="stripe">

            <div class="wrapper">
                
                <h1 class="section-heading">We're all over the internet like a rash</h1>

                <ul class="social">
                    <li class="social__item">Follow us on Twitter</li>

                    <li class="social__item">Like us on Facebook</li>

                    <li class="social__item">Connect with us on LinkedIn</li>

                    <li class="social__item">Pin us on Pinterest</li>

                    <li class="social__item">Call us on Skype</li>

                </ul>

                <p>Or just send us a good, old-fashioned email.</p>

            </div>

        </div>

        <div class="stripe stripe--grey">
            
            <div class="wrapper">
                
                <div class="offset-content address">
                    
                    <h1 class="section-heading">Our address</h1>
                    <p><strong>Infobahn Ltd</strong>.<br>
                    Croydon,<br>
                    Cronk Road,<br>
                    Port St Mary,<br>
                    Isle of Man, IM9 5AS</p>

                    <p>We also have a base just outside London, so we're conveniently close to rail, road and airport links.</p>

                </div>

            </div>

        </div>

<?php include "newsletter.php"; ?>