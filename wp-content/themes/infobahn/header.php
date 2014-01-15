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
<html class="no-js">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Infobahn - We design websites for people</title>
        <meta name="description" content="We are James Burnett and Sam Roberts, more commonly known as Infobahn. We design and build websites from our homes in the UK and the Isle of Man.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <script type="text/javascript">
            document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/,'js');
        
            WebFontConfig = { fontdeck: { id: '21405' } };
            (function() {
                var wf = document.createElement('script');
                wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
                wf.type = 'text/javascript';
                wf.async = 'true';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(wf, s);
            })();
        </script>

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