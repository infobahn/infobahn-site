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

			<?php if ( is_search() ) : ?>

				<h1>Bam! Here are your search results. Oh, er&hellip;</h1>

				<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'infobahn' ); ?></p>

			<?php else : ?>

				<h1>Bam! Nothing was found. Oh.</h1>

				<p><?php _e( 'Uh oh. We couldn&rsquo;t find what you were looking for. Maybe try searching the site.', 'infobahn' ); ?></p>

			<?php endif; ?>

		</div>