<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StormGuard
 */
$footer_left_title = (is_front_page()) ? get_field('home_footer_left_title', 'options') : get_field('inner_footer_left_title', 'options');
$footer_left_subtitle = (is_front_page()) ? get_field('home_footer_left_subtitle', 'options') : get_field('inner_footer_left_subtitle', 'options');
$footer_left_content = (is_front_page()) ? get_field('home_footer_left_content', 'options') : false;
$footer_gallery_title = (is_front_page()) ? get_field('home_footer_gallery_title', 'options') : get_field('inner_footer_gallery_title', 'options');
$footer_gallery_sub_title = (is_front_page()) ? get_field('home_footer_gallery_subtitle', 'options') : get_field('inner_footer_gallery_subtitle', 'options');

// echo "<pre>";
// print_r($footer_left_content);
// echo "</pre>;"
?>


	</div><!-- #content -->

	<footer id="colophon" class="site-footer site-footer--second">
		<div class="container">
			<div class="row">
			<div class="col-md-6">
				<?php if($footer_left_title):
				
				?>
				<p class="contact_us_title"><?=$footer_left_title;?></p>
				<?php endif;?>
				<?php 
					if($footer_left_subtitle):
				?>
				<p class="contact_info"><?=$footer_left_subtitle;?></p>
					<?php endif;?>
					<?php
					if($footer_left_content):
						echo $footer_left_content;
					?>
					<?php
					else:
						if(have_rows('inner_footer_left_content','options')): 
							while(have_rows('inner_footer_left_content','options')): the_row();
							$inner_footer_btn_text = get_sub_field('inner_footer_left_content_button_text');
							$inner_footer_btn_link = get_sub_field('inner_footer_left_content_button_link');
						?>
							<a class="btn" href="<?=$inner_footer_btn_link;?>"><?=$inner_footer_btn_text;?></a>
						<?php
							endwhile;
						endif;
					?>
						<?php
						endif;
				
						?>
			</div>
			<div class="col-md-6">
				<?php if($footer_gallery_title):?>
				<p class="past_projects_title"><?=$footer_gallery_title;?></p>
					<?php endif;?>
				<?php if($footer_gallery_sub_title):?>
				<p class="past_projects_description"><?=$footer_gallery_sub_title;?> <?php echo (!is_front_page()) ? "<a class='footer_portfolio_archive_link' href='". get_post_type_archive_link('gallery') ."'>". __('View the whole portfolio', 'stormguard') ."</a>." : '' ;?></p>
					<?php endif;?>
					<?php 
						$gallery_images = new WP_Query( array( 
							'post_type' => 'gallery' ,
							'posts_per_page' => 8,
							'orderby'=>'date',
							'order'=>'DESC'
						) );
						if($gallery_images->have_posts()):
					?>

					<div class="row">	
					<div class="col-md-12 no-gutters pr-0">
						<?php while($gallery_images->have_posts()): $gallery_images->the_post();?>
					<div class="past_project_image">
						<a href="<?php the_permalink();?>"><img src="<?=get_the_post_thumbnail_url(get_the_ID(),'gallery_small_image');?>" alt="past project" /></a>
					</div>
						<?php endwhile; ?>
				</div>
				<?php
					if(is_front_page()):
				?>
				<a  href="<?=get_post_type_archive_link('gallery');?>" class="more_photos btn"><?php echo  __('View More Photos', 'stormguard');?></a>
					<?php
						endif;
					?>
				</div>
						<?php endif;?>
			</div>
		</div>
		</div>
	</footer><!-- #colophon -->
	<div class="bottom_bar">
		<div class="container">
			<p class="copyright">Copyright 2017. Storm Guard. All Rights Reserved. Website Produced by: Inverse Paradox</p>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
