<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till the main content
 *
 * @package WordPress
 * @subpackage Infobahn
 * @since Infobahn 1.0
 */
?>

<!DOCTYPE html>
<!--[if lte IE 8]><html class="no-js no-mq"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Infobahn - We design websites for people</title>
        <meta name="description" content="We are James Burnett and Sam Roberts, more commonly known as Infobahn. We design and build websites from our homes in the UK and the Isle of Man.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <link rel="stylesheet" href="//f.fontdeck.com/s/css/PMeUiPSaOnK4Pgo4RhhzvZAtiDw/localhost/21405.css" type="text/css" />

        <script type="text/javascript">
            document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/,'js');

            /* grunticon Stylesheet Loader | https://github.com/filamentgroup/grunticon | (c) 2012 Scott Jehl, Filament Group, Inc. | MIT license. */
            window.grunticon=function(e){if(e&&3===e.length){var t=window,n=!!t.document.createElementNS&&!!t.document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect&&!!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"),A=function(A){var o=t.document.createElement("link"),r=t.document.getElementsByTagName("script")[0];o.rel="stylesheet",o.href=e[A&&n?0:A?1:2],r.parentNode.insertBefore(o,r)},o=new t.Image;o.onerror=function(){A(!1)},o.onload=function(){A(1===o.width&&1===o.height)},o.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="}};
            grunticon( [ "<?php echo get_template_directory_uri(); ?>/build/svg/icons.data.svg.css", "<?php echo get_template_directory_uri(); ?>/build/svg/icons.data.png.css", "<?php echo get_template_directory_uri(); ?>/build/svg/icons.fallback.css" ] );
        </script>
        <noscript><link href="<?php echo get_template_directory_uri(); ?>/build/svg/icons.fallback.css" rel="stylesheet"></noscript>

		<?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

		<div class="header" role="banner">

            <div class="wrapper">
            
                <a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>">Infobahn</a>

                <ul class="nav nav--main" role="navigation">
                    <li class="nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#work" class="nav__link">Work</a></li>
                    <li class="nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#us" class="nav__link">Us</a></li>
                    <li class="nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact" class="nav__link">Contact</a></li>
                </ul>

            </div>

        </div>