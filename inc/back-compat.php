<?php
/**
 * diana back compat functionality
 *
 * Prevents diana from running on WordPress versions prior to 4.1,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.1.
 *
 * @package WordPress
 * @subpackage Diana
 * subpackage Diana 1.0
 */

/**
 * Prevent switching to diana on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * subpackage Diana 1.0
 */
function diana_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'diana_upgrade_notice' );
}
add_action( 'after_switch_theme', 'diana_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * diana on WordPress versions prior to 4.1.
 *
 * subpackage Diana 1.0
 */
function diana_upgrade_notice() {
	$message = sprintf( __( 'diana requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'diana' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 4.1.
 *
 * subpackage Diana 1.0
 */
function diana_customize() {
	wp_die( sprintf( __( 'diana requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'diana' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'diana_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 4.1.
 *
 * subpackage Diana 1.0
 */
function diana_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'diana requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'diana' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'diana_preview' );
