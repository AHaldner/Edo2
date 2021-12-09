<?php
/**
 * Functions and definitions
 * In WordPress, functions.php or the theme functions file is a template included in WordPress themes. It acts like a plugin for your WordPress site that's automatically activated with your aIn WordPress, functions.php or the theme functions file is a template included in WordPress themes. It acts like a plugin for your WordPress site that's automatically activated with your current theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if (! function_exists('theme_slug_setup')) :
	function theme_slug_setup() {
		add_theme_support('post-thumbnails');
	}
endif;
add_action('after_setup_theme' , 'theme_slug_setup');

function wpb_custom_nav_menu() {
	register_nav_menu('nav-menu', ('Nav'));
}
add_action('init' , 'wpb_custom_nav_menu');
?>
