<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content.
 *
 * @package WordPress
 * @subpackage Infobahn
 * @since Infobahn 1.0
 */
?>

        <?php $homepage = 2; ?>

		<div class="stripe <?php if ( !is_front_page() ) { echo 'stripe--patterned stripe--blue '; } ?>footer" id="contact">

            <div class="wrapper">

                <div class="stripe__content">
                    
                    <h1 class="section-heading"><?php the_field('footer-heading', $homepage); ?></h1>

                    <?php the_field('footer-text', $homepage); ?>

                    <p class="disclaimer"><small><?php the_field('small-print', $homepage); ?></small></p>

                </div>

            </div>

        </div>

		<?php wp_footer(); ?>

	</body>
</html>