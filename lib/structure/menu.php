<?php
/**
* Menu HTML markup structure
*
* @package 		PCianes\Genesis-SCT
* @since 		1.0.0
* @author 		PCianes
* @link 		htpps://pablocianes.com
* @license 		GNU General Public License 2.0+
*/

namespace PCianes\GenesisSCT;

//* Reposition the secondary navigation menu
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 5 );


add_filter( 'wp_nav_menu_args', __NAMESPACE__ . '\setup_secondary_menu_args' );
/**
 * Reduce the secondary navigation menu to one level depth
 *
 * @since 1.0.0
 *
 * @param array $args
 *
 * @return array
 */
function setup_secondary_menu_args( array $args ) {

	if ( 'secondary' != $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 1;

	return $args;

}