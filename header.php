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
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
$emptyB = "";
	if(is_archive()):
		$header_bg_image = (get_field('archive_header_image','options')) ? get_field('archive_header_image','options')['sizes']['default_header_image'] : get_template_directory_uri() . '/img/header_image_1.png' ;
	elseif(is_front_page()):
		$header_bg_image = (get_field('page_header_image')) ? get_field('page_header_image')['sizes']['home_header_image'] : get_template_directory_uri() . '/img/home_banner.png';
	else:
		$header_bg_image = (get_field('page_header_image')) ? get_field('page_header_image')['sizes']['default_header_image'] : get_template_directory_uri() . '/img/header_image_1.png';	
endif;
	$hero_section_text = get_field('hero_section_text');
	$top_bar_link = get_field('top_bar_link', 'options');
	$top_bar_text = get_field('top_bar_text','options');
	?>
<header class="st_header">
	<div id="top_bar">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light top-bar-nav" id="navbarnav">
				<?php
					if($top_bar_link && $top_bar_text):
				?>
				  <a class="navbar-brand find_location" href="<?=$top_bar_link?>"><?=$top_bar_text?></a>
					<?php endif;?>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="navbarnav" aria-expanded="false" aria-label="Toggle navigation">
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
	
	<nav class="navbar navbar-expand-lg navbar-expand-md main_navigation" id="mainnav">
		<div class="container">
  			<a class="navbar-brand logo" href="<?php echo home_url('/');?>"><img src="<?php echo get_header_image();?>"/></a>
			<?php
			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'depth'	          => 0, // 1 = no dropdowns, 2 = with dropdowns.
				'container'       => 'div',
				'container_class' => 'navbar-collapse header_main_menu',
				'container_id'    => 'bs-example-navbar-collapse-2',
				'menu_class'      => 'navbar-nav',
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				'walker'          => new WP_Bootstrap_Navwalker(),
			) );
			?>
			</div>
			</nav><!-- #site-navigation -->
		</div>
	 </div>
	 <?php if( $header_bg_image ): 
		 ?>
			<!-- <div class="container-fluid p-0"> -->
			<div class="header_image <?php echo (is_front_page()) ? '' : 'header_image_second' ;?>" style="background: url('<?php echo $header_bg_image; ?>') no-repeat center center; background-size: cover;";>
			<?php
if($hero_section_text):
	?>

			<div class="container">
				<div class="row">
				<div class="col-md-6 col-sm-12">
				<div class="contact_heading_block">
					<div class="heading_block_description"><?php echo $hero_section_text;?></div>
					<?php if(have_rows('hero_section_button')): 
						while(have_rows('hero_section_button')): the_row();
						$hero_button_text = get_sub_field('button_text');
						$hero_button_link = get_sub_field('button_link');
					?>
					<a href="<?php echo $hero_button_link;?>" class="heading_block_link"><?php echo $hero_button_text;?></a>
					<?php 
						endwhile;
					endif;
					?>
				</div>
			</div>
			<?php
			endif;
			?>
		</div>
	</div>
</div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function(){
	window.addEventListener("resize", function(){
	var bgImage = '<?php echo $header_bg_image;?>';
	var emptyBg = '<?php echo $emptyB;?>';
	var w = 0;
	var h = 0;
	w = window.innerWidth
	if(window.innerWidth < 994) {
		document.getElementById("mainnav").style.backgroundImage = 'url('+bgImage+')';
		document.getElementById("mainnav").style.backgroundSize = 'cover';
		document.getElementById("mainnav").style.backgroundPosition = 'center';
		document.getElementById("mainnav").style.backgroundRepeat = 'no-repeat';
		document.querySelector('.header_image_second').style.backgroundImage = null;
		document.getElementById("mainnav").style.boxShadow = 'inset 0 0 0 2000px rgba(0,0,0,0.7)';
	}if(window.innerWidth > 994) {
		document.getElementById("mainnav").style.backgroundImage = null;
		document.getElementById("mainnav").style.backgroundSize = 'cover';
		document.getElementById("mainnav").style.backgroundPosition = 'center';
		document.getElementById("mainnav").style.backgroundRepeat = 'no-repeat';
		document.querySelector('.header_image_second').style.backgroundImage = 'url('+bgImage+')';
		document.getElementById("mainnav").style.boxShadow = 'inset 0 0 0 2000px rgba(0,0,0,0.5)';
	}
	});
	
});
</script>
		<?php endif; 
		wp_reset_postdata();?>
</header><!-- #masthead -->
<?php //elseif(is_single()) : ?>
<?php //get_header('multiimage');?>
<?php //endif;?>
	<div id="content" class="site-content">
