<?php

// allow using SVG
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  $mimes['ai'] = 'application/postscript';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// disable some scripts while on the localhost
function ct_is_staging(){
  if($_SERVER['HTTP_HOST'] == 'localhost'){
    return true;
  }
  return false;
}

function author_page_redirect() {
    if ( is_author() ) {
        wp_redirect( home_url() );
    }
}

add_action( 'template_redirect', 'author_page_redirect' );

function remove_xmlrpc_pingback_ping( $methods ) {
	unset($methods['pingback.ping']);
	unset($headers['X-Pingback']);
	return $methods;
}

add_filter('xmlrpc_enabled', '__return_false');
add_filter('xmlrpc_methods', 'remove_xmlrpc_pingback_ping' );