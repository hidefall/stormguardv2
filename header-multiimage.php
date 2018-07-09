<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StormGuard
 */
$header_bg_image = (is_home()) ? get_field('header_background_image')['sizes'][''] : get_field('header_background_image')['sizes']['header_general_bg_image'] ;
?>
<!doctype html>
<html id="html" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="st_header">
	<div id="top_bar">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
  				<a class="navbar-brand find_location" href="#">Find Your Local Storm guard</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>
			<?php
			wp_nav_menu( array(
				'theme_location'  => 'top_bar',
				'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
				'container'       => 'div',
				'container_class' => 'top_menu collapse navbar-collapse',
				'container_id'    => 'bs-example-navbar-collapse-1',
				'menu_class'      => 'top_menu_list navbar-nav',
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				'walker'          => new WP_Bootstrap_Navwalker(),
			) );
			?>
			</ul>
		</div>
	</div>
	
	<nav class="navbar navbar-expand-lg main_navigation">
		<div class="container">
  			<a class="navbar-brand logo" href="#"><img src="http://localhost:8080/stormguard/wp-content/themes/stormguard/stormguard/img/logo.png"/></a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
			<?php
			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'depth'	          => 0, // 1 = no dropdowns, 2 = with dropdowns.
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse header_main_menu',
				'container_id'    => 'bs-example-navbar-collapse-1',
				'menu_class'      => 'navbar-nav',
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				'walker'          => new WP_Bootstrap_Navwalker(),
			) );
			?>
			</div>
			</nav><!-- #site-navigation -->
		</div>
	 </div>
	 <?php if( get_field('header_image_second', 'options') ): ?>
			<div class="header_image_second" style="background-image: url('<?php the_field('header_image_second', 'options'); ?>')";>

			</div>

		<?php endif; ?>
</header><!-- #masthead -->
	<div id="content" class="site-content">
