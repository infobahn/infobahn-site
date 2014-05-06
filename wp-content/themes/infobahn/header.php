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
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="description" content="We are James Burnett and Sam Roberts, more commonly known as Infobahn. We design and build websites from our homes in the UK and the Isle of Man.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        
        <link rel="shortcut icon" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.ico">
        
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo esc_url( home_url( '/' ) ); ?>apple-touch-icon-152x152-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo esc_url( home_url( '/' ) ); ?>apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo esc_url( home_url( '/' ) ); ?>apple-touch-icon-120x120-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo esc_url( home_url( '/' ) ); ?>apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo esc_url( home_url( '/' ) ); ?>apple-touch-icon-76x76-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo esc_url( home_url( '/' ) ); ?>apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo esc_url( home_url( '/' ) ); ?>apple-touch-icon-precomposed.png">
        <meta name="msapplication-TileImage" content="<?php echo esc_url( home_url( '/' ) ); ?>win8-pinned.png"/>
        <meta name="msapplication-TileColor" content="#cb1f41"/>

        <meta property="og:title" content="<?php the_field('meta-title'); ?>" />
        <meta property="og:url" content="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
        <meta property="og:description" content="<?php the_field('meta-description'); ?>" />
        <meta property="og:image" content="<?php the_field('meta-image'); ?>" />

        <meta name="twitter:card" content="bovril">
        <meta name="twitter:site" content="@infobahndesign">
        <meta name="twitter:creator" content="<?php the_field('meta-creator'); ?>">
        <meta name="twitter:url" content="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
        <meta name="twitter:title" content="<?php the_field('meta-title'); ?>">
        <meta name="twitter:description" content="<?php the_field('meta-description'); ?>">
        <meta name="twitter:image" content="<?php the_field('meta-image'); ?>">

        <script type="text/javascript">

            /* Modernizr 2.7.1 (Custom Build) | MIT & BSD
             * Build: http://modernizr.com/download/#-svg-cssclasses
             */
            ;window.Modernizr=function(a,b,c){function v(a){j.cssText=a}function w(a,b){return v(prefixes.join(a+";")+(b||""))}function x(a,b){return typeof a===b}function y(a,b){return!!~(""+a).indexOf(b)}function z(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:x(f,"function")?f.bind(d||b):f}return!1}var d="2.7.1",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m={svg:"http://www.w3.org/2000/svg"},n={},o={},p={},q=[],r=q.slice,s,t={}.hasOwnProperty,u;!x(t,"undefined")&&!x(t.call,"undefined")?u=function(a,b){return t.call(a,b)}:u=function(a,b){return b in a&&x(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=r.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(r.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(r.call(arguments)))};return e}),n.svg=function(){return!!b.createElementNS&&!!b.createElementNS(m.svg,"svg").createSVGRect};for(var A in n)u(n,A)&&(s=A.toLowerCase(),e[s]=n[A](),q.push((e[s]?"":"no-")+s));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)u(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},v(""),i=k=null,e._version=d,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+q.join(" "):""),e}(this,this.document);

        </script>

        <script src="//ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
        <script type="text/javascript">

            WebFont.load({
                fontdeck: {
                    id: '21405'
                },
                typekit: {
                    id: 'kld7erk'
                }
            });

        </script>

		<?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

        <div class="container" id="container">

		<div class="header" role="banner">

            <div class="wrapper">
            
                <a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>">Infobahn</a>

                <a href="#nav" class="show-menu" id="showMenu">Menu</a>

                <ul class="nav nav--main" id="menu" role="navigation">
                    <li class="nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog" class="nav__link">Blog</a></li>
                    <li class="nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#work" class="nav__link">Work</a></li>
                    <li class="nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#us" class="nav__link">Us</a></li>
                    <li class="nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact" class="nav__link">Contact</a></li>
                </ul>

            </div>

        </div>

        <div class="pusher" id="pusher">

            <a id="hideMenu" href="#">Close menu</a>

            
