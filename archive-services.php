<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package StormGuard
 */

get_header();

$offers_title = (is_front_page()) ? get_field('front_offers_title','options') : get_field('offers_title','options'); 
$offers_content = (is_front_page()) ? get_field('front_offers_content','options') : get_field('offers_content','options'); 

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="offerings_block">
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
				<p class="main_heading"><?=$offers_title;?></p>
                <p class="main_description"><?=$offers_content;?></p>
            </div>
        </div>
        <div class="row">

		<?php if ( have_posts() ) : ?>


			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content','services' );

			endwhile;

			the_posts_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		 </div>
        </div>
    </div>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
