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

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-24587494-1', 'infobahndesign.com');
            ga('send', 'pageview');
        </script>

		<?php wp_footer(); ?>

	</body>
</html>