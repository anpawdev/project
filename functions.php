<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Includes
 * ------------------------------------------------------------------------
 * The `function.php` file is should responsible only for including theme's
 * components. Your theme custom logic should be distributed
 * across separate files in the `/src` directory.
 */
// general
require_once 'src/comments-off.php';
require_once 'src/styles.php';
require_once 'src/scripts.php';
require_once 'src/navs.php';
require_once 'src/supports.php';
require_once 'src/post-types.php';
require_once 'src/thumbnails.php';
require_once 'src/taxonomy.php';

// additional
require_once 'src/acf.php';
require_once 'src/utilities.php';

// disable default dashboard widgets and unnecessary code
require_once 'src/clean.php';


//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types)
{

	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg';
	$file_types = array_merge($file_types, $new_filetypes);

	return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

