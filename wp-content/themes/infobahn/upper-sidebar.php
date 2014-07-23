<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Infobahn
 * @since Infobahn 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

    	<div class="sidebar" id="sidebar" role="complementary">

            <div class="sidebar__widgets">

                <?php dynamic_sidebar( 'sidebar-1' ); ?>

            </div>
           
    	</div>

	<?php endif; ?>