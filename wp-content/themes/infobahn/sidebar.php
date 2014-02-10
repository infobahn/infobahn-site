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

            <div class="wrapper media">

                <div class="media__img sidebar__widgets">

                    <?php dynamic_sidebar( 'sidebar-1' ); ?>

                </div>

                <div class="media__bd sidebar__related-posts">

                    <h3 class="sidebar__heading">Viewing posts filed as <em>extra-curricular</em></h3>

                    <ul class="post-list">

                        <li class="post-list__post"><a href="" class="post-list__post-link">

                            <h4 class="post-list__post__title">One Of These Days</h4>

                            <span class="post-list__post__meta">by Sam, January 28, 2014</span>

                            <p class="post-list__post__excerpt">Monday dawned warm and rainless. Aurelio Escovar, a dentist without a degree, and a very early riser, opened his office at six.</p>

                        </a></li>

                        <li class="post-list__post"><a href="" class="post-list__post-link">

                            <h4 class="post-list__post__title">Monday dawned warm and rainless. Aurelio Escovar, a dentist without a</h4>

                            <span class="post-list__post__meta">by Sam, January 28, 2014</span>

                            <p class="post-list__post__excerpt">Monday dawned warm and rainless. Aurelio Escovar, a dentist without a degree, and a very early riser, opened his office at six.</p>

                        </a></li>

                        <li class="post-list__post"><a href="" class="post-list__post-link">

                            <h4 class="post-list__post__title">One Of These Days</h4>

                            <span class="post-list__post__meta">by Sam, January 28, 2014</span>

                            <p class="post-list__post__excerpt">Monday dawned warm and rainless. Aurelio Escovar, a dentist without a degree, and a very early riser, opened his office at six.</p>

                        </a></li>

                    </ul>

                    <a href="#" class="related-posts__see-all">See all posts in this category</a>

                </div>

            </div>
           
    	</div>

	<?php endif; ?>