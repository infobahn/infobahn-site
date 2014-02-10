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

			<div class="article__content">
				
				<?php the_content( __( '', 'infobahn' ) ); ?>

			</div>
			
			<?php the_tags( '<div class="article__footer"><span class="article__tags">', '', '</span></div>' ); ?>

			<?php if ( is_single() ) : ?>

				<p class="article__comment-request">Want to join the discussion? <a href="http://twitter.com/infobahndesign/">Comment on Twitter</a>.</p>

			<?php endif; ?>

		</div>