<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package StormGuard
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
    		<div class="container">
			<?php get_template_part('template-parts/content', 'breadcrumbs');?>
			<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-md-12">
					<h1><?=get_the_title()?></h1>
					<div style="margin: 0px 0px 10px 0px;"><?=get_the_content();?></div>
				</div>
<?php endwhile;
		endif;?>
			</div>
    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
