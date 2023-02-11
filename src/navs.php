<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Navigations
 * ------------------------------------------------------------------------
 * This file is for registering your theme's custom navigation areas
 * where various menus can be assigned by site administrators.
 */

if ( ! function_exists( 'fairp_register_navigations' ) ) {
	/**
	 * Registers theme's navigation menus.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function fairp_register_navigations() {
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'fairp' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'fairp_register_navigations' );
