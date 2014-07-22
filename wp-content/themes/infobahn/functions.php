<?php
/**
 * Infobahn functions and definitions
 *
 * Borrowed very heavily from Twenty Fourteen.
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Infobahn
 * @since Infobahn 1.0
 */



if ( ! function_exists( 'infobahn_setup' ) ) :
/**
 * Infobahn setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 *
 * @since Infobahn 1.0
 */
function infobahn_setup() {

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	// register_nav_menu( 'main', 'Main menu' );

}
endif; // infobahn_setup
add_action( 'after_setup_theme', 'infobahn_setup' );


/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Infobahn 1.0
 *
 * @return void
 */
function infobahn_scripts() {

	// Load our main stylesheet.
	wp_enqueue_style( 'infobahn-styles', get_stylesheet_uri() );

	// Load modernizr
	// wp_enqueue_script( 'infobahn-modernizr', get_template_directory_uri() . '/build/js/modernizr.js', array(), '20140308', false );

	// Load main script
	wp_enqueue_script( 'infobahn-scripts', get_template_directory_uri() . '/build/js/production.min.js', array(), '20131209', true );
}
add_action( 'wp_enqueue_scripts', 'infobahn_scripts' );



/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since Infobahn 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function infobahn_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title";
	}

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'infobahn' ), max( $paged, $page ) );
	}

	return $title . ' - ' . $site_description;
}
add_filter( 'wp_title', 'infobahn_wp_title', 10, 2 );



/**
 * Create custom post types for displaying projects in the portfolio
 *
 * @since Infobahn 1.0
 */

function create_post_type() {
	register_post_type( 'infobahn_project',
		array(
			'labels' => array(
				'name' => __( 'Projects' ),
				'singular_name' => __( 'Project' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'projects'),
		)
	);
}
add_action( 'init', 'create_post_type' );



// Show posts of 'infobahn_project' post types on home page
// add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

// function add_my_post_types_to_query( $query ) {
// 	if ( is_home() && $query->is_main_query() )
// 		$query->set( 'post_type', array( 'infobahn_project' ) );
// 	return $query;
// }

/**
 * Amend the search to just posts
 * @since  Infobahn 1.0
 * 
 * @param string $query The actual search query
 *
 * @return  string $query the amended query
 */
function SearchFilter( $query ) {

    if ( $query->is_search ) {

        $query->set('post_type', 'post');

    }

    return $query;

}

add_filter('pre_get_posts', 'SearchFilter');

/**
 * Register the Infobahn widget area.
 *
 * @since Infobahn 1.0
 *
 * @return void
 */
function infobahn_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'infobahn' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears at the top.', 'infobahn' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="sidebar__heading">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Mobile Sidebar', 'infobahn' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Sidebar that shows up on mobile.', 'infobahn' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="sidebar__heading">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'infobahn_widgets_init' );

/**
 * Add classes to blog pagination links
 *
 * @since Infobahn 1.0
 *
 * @return void
 */
add_filter('next_posts_link_attributes', 'next_posts_link_attributes');
add_filter('previous_posts_link_attributes', 'previous_posts_link_attributes');

function previous_posts_link_attributes() {
    return 'class="btn btn--next"';
}

function next_posts_link_attributes() {
    return 'class="btn btn--prev"';
}

Class infobahn_validation {

    private $post,
            $personName,
            $email,
            $companyName,
            $website,
            $validated,
            $error_counter;

    function __construct( $post ) {

        $this->post = $post;

        $this->error_counter = 0;

        $this->validate( $this->post );

    }

    private function validate() {

        if  ( $this->post['personName'] == '' ) {

            $this->error_counter++;

            $this->personName = "The Name field must be filled in";

        } 

        if  ( $this->post['email'] == '' && !filter_var( $this->post['email'], FILTER_VALIDATE_EMAIL ) ) {

            $this->error_counter++;

            if ( $this->post['email'] == '' ) {

                $this->email = "The Email field must be filled in";

            } else {

                $this->email = "The Email field must be a valid email";

            }

        }

        if  ( $this->post['companyName'] == '' ) {

            $this->error_counter++;

            $this->companyName = "The Company Name field must be filled in";

        }

        if  ( $this->post['budget'] == '' ) {

            $this->error_counter++;

            $this->budget = "The Budget field must be filled in";

        }

        if  ( $this->post['website'] !== '' ) {

            $this->error_counter++;

            $this->website = "This is a bot catcher field. If you are human please do not fill it in";

        }

    }

    public function validated() {

        if ( $this->error_counter > 0 ) {

            return false;

        } else {

            return true;

        }

    }

    public function error_messages() {

        $messages = array();

        $messages['global'] = "I'm sorry to have to report that there was a problem with your submission.<br>Please see below for details.";
        $messages['personName'] = $this->personName;
        $messages['email'] = $this->email;
        $messages['companyName'] = $this->companyName;
        $messages['budget'] = $this->budget;
        $messages['website'] = $this->website;

        return $messages;

    }




}

function infobahn_build_message( $post ) {

    $message = '';

    $message .= ' Name: ' . $post['personName'] . "\n";

    $message .= ' Email: ' . $post['email'] . "\n";

    $message .= ' Company: ' . $post['companyName'] . "\n";

    $message .= ' Budget: ' . $post['budget'] . "\n";

    $message .= ' Comments: ' . $post['comments'] . "\n";

    return $message;

}


function infobahn_send_mail( $post ) {

    $validation = new infobahn_validation( $post );

    if ( $validation->validated() ) {

        $to = "james@infobahndesign.com";

        $subject = "New Message from Contact Form";

        $message = infobahn_build_message( $post );

        $headers = 'From: admin@infobahndesign.com rn Reply-To: ' . $post['email'] . 'rn';

        $send = mail( $to, $subject, $message, $headers );

        if ( $send ) {

            return array("global" => "Thank you for your message.");

        } else {

            return array("global" => "There was a problem with sending the contact form at this time, please try again later.");

        }


    } else {

        return $validation->error_messages();

    }

}