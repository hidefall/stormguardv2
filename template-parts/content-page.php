<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package StormGuard
 */

?>
<?php get_template_part('template-parts/content', 'breadcrumbs');?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->
</div>
</div>
</div>
	<?php get_template_part('template-parts/content', 'becomefranchise');?>
</article><!-- #post-<?php the_ID(); ?> -->




