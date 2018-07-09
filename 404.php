<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package StormGuard
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="container-fluid">
			<div class="row">
			<div class="col-md-12 col-xs-1">
			<section class="error-404 not-found" style="background-image: url('http://localhost:8080/stormguard/wp-content/themes/stormguard/stormguard/img/404.jpg'); height: 300px; background-repeat: no-repeat; background-size: contain; background-position: center;";>
			</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-xs-1">	
				<header class="page-header">
					<h1 class="page-title main_heading"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'stormguard' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p class="main_description"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'stormguard' ); ?></p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
			</div>
			</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
