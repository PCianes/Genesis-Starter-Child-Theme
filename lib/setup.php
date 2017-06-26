<?php
/**
* Description
*
* @package 		PCianes\Genesis-SCT
* @since 		1.0.0
* @author 		PCianes
* @link 		htpps://pablocianes.com
* @license 		GNU General Public License 2.0+
*/

namespace PCianes\GenesisSCT;

add_action( 'genesis_setup', __NAMESPACE__ . '\setup_child_theme', 15 );

/**
 * Setup child theme
 *
 * @since 1.0.0
 *
 * @return void
 */
function setup_child_theme() {

	//* Set Localization (do not remove)
	load_child_theme_textdomain( CHILD_TEXT_DOMAIN, apply_filters( 'child_theme_textdomain', CHILD_THEME_DIR . '/languages', CHILD_TEXT_DOMAIN ) );
	
	adds_theme_supports();
	adds_new_image_sizes();
}

/**
 * Add theme supports to the site
 *
 * @since 1.0.0
 *
 * @return void
 */
function adds_theme_supports(){

	//* Add HTML5 markup structure
	add_theme_support( 'html5', array( 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ) );

	//* Add Accessibility support
	add_theme_support( 'genesis-accessibility', array( 
		'404-page', 
		'drop-down-menu', 
		'headings', 
		'rems', 
		'search-form', 
		'skip-links' 
	) );

	//* Add viewport meta tag for mobile browsers
	add_theme_support( 'genesis-responsive-viewport' );

	//* Add support for custom header
	add_theme_support( 'custom-header', array(
		'width'           => 600,
		'height'          => 160,
		'header-selector' => '.site-title a',
		'header-text'     => false,
		'flex-height'     => true,
	) );

	//* Add support for custom background
	add_theme_support( 'custom-background' );

	//* Add support for after entry widget
	add_theme_support( 'genesis-after-entry-widget-area' );

	//* Add support for 3-column footer widgets
	add_theme_support( 'genesis-footer-widgets', 3 );

	//* Rename primary and secondary navigation menus
	add_theme_support( 'genesis-menus' , array( 'primary' => __( 'After Header Menu', CHILD_TEXT_DOMAIN ), 'secondary' => __( 'Footer Menu', CHILD_TEXT_DOMAIN ) ) );
}


/**
 * Add new image sizes
 *
 * @since 1.0.0
 *
 * @return void
 */
function adds_new_image_sizes() {

	add_image_size( 'featured-image', 720, 400, TRUE );
}

