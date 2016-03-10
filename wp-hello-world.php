<?php
/**
 * An example plugin for a membership course walking readers through how to work with GitHub.
 *
 * @link              https://github.com/tommcfarlin/wp-hello-world/
 * @since             1.0.0
 * @package           WPHW
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Hello World
 * Plugin URI:        https://github.com/tommcfarlin/wp-hello-world/
 * Description:       An example plugin for a membership course walking readers through how to work with GitHub.
 * Version:           1.0.0
 * Author:            Tom McFarlin
 * Author URI:        https://tommcfarlin.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'login_message', 'wphw_login_message' );
/**
 * Adds 'Hello World' above the login form in the WordPress login form.
 *
 * @param    string $message    The default message to display above the form.
 * @return   string $message    The message to display above the form.
 */
function wphw_login_message( $message ) {

	$message = '<h2>';
		$message .= 'Hello World!';
	$message .= '</h2>';

	return $message ;

}
