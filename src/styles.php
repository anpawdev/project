<?php
/**
 * ------------------------------------------------------------------------
 * Theme's CSS Assets
 * ------------------------------------------------------------------------
 * This file is for registering your theme's stylesheets. In here you
 * should also deregister all unwanted assets which can be
 * shiped with various third-parity plugins.
 */

if ( ! function_exists( 'fairp_register_styles' ) ) {
	/**
	 * Registers theme's CSS styles.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function fairp_register_styles() {
		wp_enqueue_style( 'style-name', get_stylesheet_uri() );
		wp_enqueue_style( 'theme-style', get_template_directory_uri() .'/public/css/app.css', array(), '1.1' );
	}
}
add_action( 'wp_enqueue_scripts', 'fairp_register_styles' );
