<?php 
  // @package _starter

if ( ! function_exists( '_starter_setup' ) ) :

function _starter_setup() {

	load_theme_textdomain( '_starter', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	// Wordpress Title Tag
	add_theme_support( 'title-tag' );

	// Featured Images 
	add_theme_support( 'post-thumbnails' );
  // set_post_thumbnail_size( 500, 500, array('center', 'center') );

  // Image Sizes
  // add_image_size('gallery', 362, 362, true );

	// Add HTML5 Support
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // starter_setup

add_action( 'after_setup_theme', '_starter_setup' );

// Remove Admin Bar
// add_filter('show_admin_bar', '__return_false');

// CSS and Javascript
function _starter_theme() {
  wp_enqueue_style( '_starter-fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
	wp_enqueue_style( '_starter-style', get_template_directory_uri() . '/application.css' );
	wp_enqueue_script( '_starter-application', get_template_directory_uri() . '/application.min.js', array(), '20130115', true );
}

function my_jquery_enqueue() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/plugins.min.js', false, null);
	wp_enqueue_script('jquery');
}

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
add_action( 'wp_enqueue_scripts', '_starter_theme' );


function _starter_favicon_url() {
  $faviconURL = get_stylesheet_directory_uri() . "/images/favicons";
  return $faviconURL;
}

// Custom Post Types
require get_template_directory() . '/inc/custom-post-types.php';

// Menus
require get_template_directory() . '/inc/menus.php';

// Template Tags
require get_template_directory() . '/inc/template-tags.php';

// Theme Extras
require get_template_directory() . '/inc/extras.php';

// ACF Options
require get_template_directory() . '/inc/acf-options.php';