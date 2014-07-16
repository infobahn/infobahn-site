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

                <div class="stripe__content">

                <?php
                    // Start the Loop.
                    while ( have_posts() ) : the_post(); ?>

                        <!-- <h1 class="section-heading"><?php the_title(); ?></h1> -->

                        <?php the_content( __( '', 'infobahn' ) );

                    endwhile;
                ?>

                    <hr class="lede-hr">
                    <h1 class="lede">We can&rsquo;t wait to hear about your project. Get in touch with us using the form below. Or contact us via one of the options at the bottom of the page.</h1>

                    <br><br>

                </div>

            </div>

        </div>

        <div class="stripe">
            
            <div class="wrapper">
                
                <div class="stripe__content">

                    <!-- <h1 class="section-heading">Contact us</h1>
                    
                    <br> -->

                    <form action="" class="contact-form">
                        <fieldset>
                            <ul class="form">
                                <li class="form__item">
                                    <label for="personName">Name</label>
                                    <input type="text" name="personName" id="personName">
                                </li>

                                <li class="form__item">
                                    <label for="email">Email address</label>
                                    <input type="text" name="email" id="email">
                                </li>

                                <li class="form__item">
                                    <label for="companyName">Company name</label>
                                    <input type="text" name="companyName" id="companyName">
                                </li>

                                <li class="form__item">
                                    <label for="budget">Approx budget</label>
                                    <input type="text" name="budget" id="budget">
                                </li>

                                <li class="form__item">
                                    <label for="comments">Tell us about your project</label>
                                    <textarea name="comments" id="comments"></textarea>
                                </li>

                                <li class="form__item">
                                    <input type="submit" class="btn btn--large btn--full" value="Send us your message">
                                </li>

                            </ul>
                        </fieldset>
                    </form>

                </div>

            </div>

        </div>

        <div class="stripe stripe--patterned stripe--blue">
            
            <div class="wrapper">
                
                <div class="offset-content address">
                    
                    <h2>Where we are</h2>

                    <p>We&rsquo;re based in scenic Port St Mary, on the Isle of Man, just a two-minute walk from the beach. We also have a base in Woking, Surrey, so we're conveniently close to rail, road and airport links.</p>

                    <p><strong>Infobahn Ltd</strong>.<br>
                    Croydon,<br>
                    Cronk Road,<br>
                    Port St Mary,<br>
                    Isle of Man, IM9 5AS</p>

                </div>

                <div class="illustration">
                    
                    <img src="../assets/img/code-editor.png" alt="" style="float:right;margin-left: 2em;margin-top: 1em;">

                </div>

            </div>

        </div>

<?php get_footer(); ?>