<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Infobahn
 * @since Infobahn 1.0
 */
?>

		<div class="article">
	
			<h1 class="article__title">

				<?php if ( is_single() ) : ?>

					<?php the_title(); ?>

				<?php else : ?>

					<a href="<?php esc_url( the_permalink() ); ?>" class="article__permalink" rel="bookmark"><?php the_title(); ?></a>

				<?php endif; ?>
				
			</h1>
			
			<span class="article__meta"><?php the_author(); ?> posted this on <?php the_date(); ?> under <span class="article__category"><?php the_category(' '); ?></span></span>

			<ul class="nav nav--share">
				<li class="nav__item"><a id="twitterBtn" class="btn btn--share btn--twitter" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>&via=infobahndesign">&nbsp;<span class="hide-small">Share on Twitter</span>&nbsp;</a></li>
				<li class="nav__item"><a id="facebookBtn" class="btn btn--share btn--facebook" href="https://www.facebook.com/dialog/share?app_id=1415281452092898&display=page&href=<?php the_permalink(); ?>&redirect_uri=<?php the_permalink(); ?>">&nbsp;<span class="hide-small">Share on Facebook</span>&nbsp;</a></li>
				<li class="nav__item"><a id="linkedinBtn" class="btn btn--share btn--linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php echo esc_url( home_url() ); ?>">&nbsp;<span class="hide-small">Share on LinkedIn</span>&nbsp;</a></li>
			</ul>

			<div class="article__content">
				
				<?php the_content( __( '', 'infobahn' ) ); ?>

			</div>
			
			<form action="http://infobahndesign.us2.list-manage2.com/subscribe/post?u=d8e2cfc461fbfc1589217a309&amp;id=879a84c1e2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="article__comment-request validate" target="_blank" novalidate>

				<h3>Like what you&rsquo;ve read?</h3>
				<p>Enter your email below to get future posts beamed straight to your inbox.</p>

				<div class="mc-field-group">
					<label for="mce-EMAIL" class="sidebar__heading visually-hidden">Email address</label>
					<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
					<input type="submit" value="Add my email" name="subscribe" id="mc-embedded-subscribe" class="button">
				</div>

				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>
				<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;"><input type="text" name="b_d8e2cfc461fbfc1589217a309_879a84c1e2" tabindex="-1" value=""></div>

			</form>
			

		</div>

