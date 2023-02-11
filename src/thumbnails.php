<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Custom Image Sizes
 * ------------------------------------------------------------------------
 * This file is for registering custom image
 * sizes for using as for thumbnails.
 */

if ( ! function_exists( 'fairp_register_thumbnails' ) ) {
	/**
	 * Registers theme's additional thumbnail sizes.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function fairp_register_thumbnails() {
		add_image_size( 'news_img', 374, 201, true);
		add_image_size( 'news_popular', 145, 77, true);
	}
}
add_action( 'after_setup_theme', 'fairp_register_thumbnails' );
