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

		<div class="stripe footer" id="contact">

            <div class="wrapper">

                <div class="stripe__content">
                    
                    <!-- <h1 class="section-heading"><?php the_field('footer-heading', $homepage); ?></h1>

                    <?php the_field('footer-text', $homepage); ?>

                    <p class="disclaimer"><small><?php the_field('small-print', $homepage); ?></small></p> -->

                    <h1 class="section-heading">Don&rsquo;t be a stranger</h1>

                    <p>We&rsquo;d love to hear from you. Get in touch to hire us, ask a question, or start a conversation.</p>

                    <p>Call us on: 
                    <span style="font-size: 1.6em;"><strong>01234&nbsp;567&nbsp;890</strong></span>&nbsp;(UK) or 
                    <span style="font-size: 1.6em;"><strong>01234&nbsp;567&nbsp;890</strong></span>&nbsp;(IOM)</p>
                    
                    <p style="margin-top: -0.5em;">Or email us at <a class="" href="mailto:team@infobahndesign.com">team@infobahndesign.com</a></p>

                    <hr>

                    <h3>Follow us on social media</h3><br>

                    <ul class="nav nav--share">
                        <li class="nav__item"><a id="twitterLinkBtn" class="btn btn--share btn--twitter" href="https://twitter.com/infobahndesign">&nbsp;<span class="hide-small">Twitter</span>&nbsp;</a></li>
                        <li class="nav__item"><a id="facebookLinkBtn" class="btn btn--share btn--facebook" href="https://www.facebook.com/">&nbsp;<span class="hide-small">Facebook</span>&nbsp;</a></li>
                        <li class="nav__item"><a id="linkedinLinkLinBtn" class="btn btn--share btn--linkedin" href="http://www.linkedin.com/">&nbsp;<span class="hide-small">LinkedIn</span>&nbsp;</a></li>
                        <li class="nav__item"><a id="pinterestLinkLinBtn" class="btn btn--share btn--pinterest" href="http://www.pinterest.com/">&nbsp;<span class="hide-small">Pinterest</span>&nbsp;</a></li>
                    </ul>

                </div>

            </div>

        </div>

    </div></div>

        <script>
            var pixelRatio = (window.devicePixelRatio >= 1.5) ? "retina" : "normal";
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
            ga('create', 'UA-24587494-1', 'infobahndesign.com');
            ga('set', 'dimension1', pixelRatio);
            ga('send', 'pageview');
        </script>

		<?php wp_footer(); ?>

	</body>
</html>