<?php
/**
 * If there is a front-page.php file in the theme, this template is always used for the start page. Without the template file, either home.php (blog index) or page.php (static start page) is loaded as normal.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#home-page-display
 *
 */

get_header();?>
<div class="page-content">
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
</nav>
</header>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : ?>
            <?php the_post(); ?>
                <!--Post Loop-->
        <?php endwhile; ?>
                <!--Post Navigation-->
    <?php else : ?>
                <!--No Post Found-->
    <?php endif; ?>
</div>
<?php get_footer(); ?>