<?php

/**
 * This is the template that displays all of the <head> section and <header> section.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="app">
		<div id="scrollUp" class="scroll-up d-flex justify-content-center align-items-center">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/public/images/icons/chevron-up.svg" alt="icon" />
		</div>
		<?php get_template_part('resources/templates/partials/header/header'); ?>