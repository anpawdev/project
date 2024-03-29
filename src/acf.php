<?php
/**
 * ------------------------------------------------------------------------
 * ACF Configuration
 * ------------------------------------------------------------------------
 */

// define( 'ACF_LITE' , true );
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// acf fields update & save to the JSON
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point( $path ) {
  $path = get_stylesheet_directory() . '/acf';
  return $path;
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {
  unset($paths[0]);
  $paths[] = get_stylesheet_directory() . '/acf';
  return $paths;
}
