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

                    <?php if ( $_POST ) : ?> 

                        <?php $response = infobahn_send_mail( $_POST ); ?>

                        <span class="form-message"> <?php echo $response['global'] ?> </span>

                    <?php endif; ?>


                    <form action="" class="contact-form" name="contact-form" method="POST">
                        <fieldset>
                            <ul class="form">
                                <li class="form__item <?php echo ( $_POST && isset( $response['personName'] ) ) ? 'validation-bad' : ''; ?>">
                                    <label for="personName">Name</label>
                                    <input type="text" name="personName" id="personName" value="<?php echo $_POST ? $_POST['personName'] : ''?>">
                                    <span class="validation-error"><?php if ( $_POST && isset( $response['personName'] ) ) : echo $response['personName']; endif; ?></span>
                                </li>

                                <li class="form__item <?php echo ( $_POST && isset( $response['email'] ) ) ? 'validation-bad' : ''; ?>">
                                    <label for="email">Email address</label>
                                    <input type="text" name="email" id="email" value="<?php echo $_POST ? $_POST['email'] : ''?>">
                                    <span class="validation-error"><?php if ( $_POST && isset( $response['email'] ) ) : echo $response['email']; endif; ?></span>
                                </li>

                                <li class="form__item <?php echo ( $_POST && isset( $response['companyName'] ) ) ? 'validation-bad' : ''; ?>">
                                    <label for="companyName">Company name</label>
                                    <input type="text" name="companyName" id="companyName" value="<?php echo $_POST ? $_POST['companyName'] : ''?>">
                                    <span class="validation-error"><?php if ( $_POST && isset( $response['companyName'] ) ) : echo $response['companyName']; endif; ?></span>
                                </li>

                                <li class="form__item <?php echo ( $_POST && isset( $response['budget'] ) ) ? 'validation-bad' : ''; ?>">
                                    <label for="budget">Approx budget</label>
                                    <input type="text" name="budget" id="budget" value="<?php echo $_POST ? $_POST['budget'] : ''?>">
                                    <span class="validation-error"><?php if ( $_POST && isset( $response['budget'] ) ) : echo $response['budget']; endif; ?></span>
                                </li>

                                <li class="form__item <?php echo ( $_POST && isset( $response['comments'] ) ) ? 'validation-bad' : ''; ?>">
                                    <label for="comments">Tell us about your project</label>
                                    <textarea name="comments" id="comments"><?php echo $_POST ? $_POST['comments'] : ''?></textarea>
                                    <span class="validation-error"><?php if ( $_POST && isset( $response['comments'] ) ) : echo $response['comments']; endif; ?></span>
                                </li>

                                <li class="form__item <?php echo ( $_POST && isset( $response['website'] ) ) ? 'validation-bad' : ''; ?>">
                                    <input type="text"  class="special-field" name="website" id="website" value="<?php echo $_POST ? $_POST['website'] : ''?>">
                                    <span class="validation-error"><?php if ( $_POST && isset( $response['website'] ) ) : echo $response['website']; endif; ?></span>
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