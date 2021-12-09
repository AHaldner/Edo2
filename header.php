<?php
/**
 * This is the template that displays all of the <head> section and everything up until main. It is called when using the wp_header().
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
<nav>
	<div>
		<img src="<?php the_post_thumbnail()?>" alt="logo">
	</div>
<!-- Nav-Start -->
<?php wp_nav_menu( array(
	'theme_location' => 'nav-menu',
	'menu_class'	=> 'navbar-nav',
	'container'	=> 'ul'	
));?>
<?php get_search_form();?>
</nav>
</header>
