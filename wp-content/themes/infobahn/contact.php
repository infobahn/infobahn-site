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

                    <hr class="lede-hr">

                    <h1 class="lede"><?php the_field('lede'); ?></h1>

                    <br><br>

                </div>

            </div>

        </div>

        <div class="stripe">
            
            <div class="wrapper">
                
                <div class="stripe__content">

                    <form action="" class="contact-form" name="contact-form" method="POST">
                        <fieldset>

                            <?php if ( $_POST ) : ?> 

                                <?php $response = infobahn_send_mail( $_POST ); ?>

                                <div class="form-message"><?php echo $response['global'] ?></div>

                            <?php endif; ?>
                            
                            <ul class="form">
                                <li class="form__item <?php echo ( $_POST && isset( $response['personName'] ) ) ? 'form__item--is-invalid' : ''; ?>">
                                    <label for="personName">Name <span class="required">(required)</span></label>
                                    <div class="controls">
                                        <input type="text" name="personName" id="personName" value="<?php echo $_POST ? $_POST['personName'] : ''?>">
                                        <span class="validation-error"><?php if ( $_POST && isset( $response['personName'] ) ) : echo $response['personName']; endif; ?>&nbsp;</span>
                                    </div>
                                </li>

                                <li class="form__item <?php echo ( $_POST && isset( $response['email'] ) ) ? 'form__item--is-invalid' : ''; ?>">
                                    <label for="email">Email address <span class="required">(required)</span></label>
                                    <div class="controls">
                                        <input type="text" name="email" id="email" value="<?php echo $_POST ? $_POST['email'] : ''?>">
                                        <span class="validation-error"><?php if ( $_POST && isset( $response['email'] ) ) : echo $response['email']; endif; ?>&nbsp;</span>
                                    </div>
                                </li>

                                <li class="form__item <?php echo ( $_POST && isset( $response['companyName'] ) ) ? 'form__item--is-invalid' : ''; ?>">
                                    <label for="companyName">Company name</label>
                                    <div class="controls">
                                        <input type="text" name="companyName" id="companyName" value="<?php echo $_POST ? $_POST['companyName'] : ''?>">
                                        <span class="validation-error"><?php if ( $_POST && isset( $response['companyName'] ) ) : echo $response['companyName']; endif; ?>&nbsp;</span>
                                    </div>
                                </li>

                                <li class="form__item <?php echo ( $_POST && isset( $response['budget'] ) ) ? 'form__item--is-invalid' : ''; ?>">
                                    <label for="budget">Approx budget <span class="required">(required)</span></label>
                                    <div class="controls">
                                        <input type="text" name="budget" id="budget" value="<?php echo $_POST ? $_POST['budget'] : ''?>">
                                        <span class="validation-error"><?php if ( $_POST && isset( $response['budget'] ) ) : echo $response['budget']; endif; ?>&nbsp;</span>
                                    </div>
                                </li>

                                <li class="form__item <?php echo ( $_POST && isset( $response['comments'] ) ) ? 'form__item--is-invalid' : ''; ?>">
                                    <label for="comments">Tell us about your project</label>
                                    <div class="controls">
                                        <textarea name="comments" id="comments"><?php echo $_POST ? $_POST['comments'] : ''?></textarea>
                                        <span class="validation-error"><?php if ( $_POST && isset( $response['comments'] ) ) : echo $response['comments']; endif; ?>&nbsp;</span>
                                    </div>
                                </li>

                                <li class="form__item <?php echo ( $_POST && isset( $response['website'] ) ) ? 'form__item--is-invalid' : ''; ?>">
                                    <input type="text"  class="special-field" name="website" id="website" value="<?php echo $_POST ? $_POST['website'] : ''?>">
                                    <span class="validation-error"><?php if ( $_POST && isset( $response['website'] ) ) : echo $response['website']; endif; ?>&nbsp;</span>
                                    <input type="submit" class="btn btn--large btn--full" id="formSubmitBtn" value="Send us your message">
                                </li>

                            </ul>
                        </fieldset>
                    </form>

                </div>

            </div>

        </div>

        <div class="stripe stripe--img stripe--psm">

            <span data-picture data-alt="The view over Port St Mary from Infobahn HQ">
                <span data-src="<?php echo get_template_directory_uri(); ?>/build/img/psm-small.jpg"></span>
                <span data-src="<?php echo get_template_directory_uri(); ?>/build/img/psm-large.jpg" data-media="(min-width: 400px)"></span>
                <span data-src="<?php echo get_template_directory_uri(); ?>/build/img/psm-large-x2.jpg" data-media="(min-width: 800px) and (-webkit-min-device-pixel-ratio: 2.0)"></span>

                <!--[if (lt IE 9) & (!IEMobile)]>
                <span data-src="<?php echo get_template_directory_uri(); ?>/build/img/psm-large.jpg"></span>
                <![endif]-->

                <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                <noscript>
                    <img src="<?php echo get_template_directory_uri(); ?>/build/img/psm-small.jpg" alt="The view over Port St Mary from Infobahn HQ">
                </noscript>
            </span>

            <div class="wrapper">
                
                <div class="offset-content address">
                    
                    <?php while ( have_posts() ) : the_post();

                        the_content( __( '', 'infobahn' ) );

                    endwhile; ?>

                </div>

            </div>

        </div>

<?php get_footer(); ?>