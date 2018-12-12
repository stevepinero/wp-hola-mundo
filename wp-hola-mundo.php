<?php
/**
 * Plugin de ejemplo.
 *
 * @link              https://github.com/stevepinero/wp-hola-mundo
 * @since             1.0.0
 * @package           WPHW
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Hola Mundo
 * Plugin URI:        https://github.com/stevepinero/wp-hola-mundo
 * Description:       Plugin de ejemplo.
 * Version:           1.0.0
 * Author:            Steve Piñero
 * Author URI:        https://stevepinero.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Muestra error si este archivo es ejecutado fuera de wordpress.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'login_message', 'wphw_login_message' );
/**
 * Agrega 'Hola Mundo' en el formulario de login.
 *
 * @param    string $message    El mensaje por defecto.
 * @return   string $message    Mensaje a mostrar.
 */
function wphw_login_message( $message ) {

	$message = '<h2>';
		$message .= 'Hola Mundo!';
	$message .= '</h2>';

	return $message ;

}
