<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Diana
 * subpackage Diana 1.0
 */

get_header(); ?>
<div class="section section-page-title">
	<div class="container">
		<h1 class="page-title"><?php _e( '404 Error', 'diana' ); ?></h1>
	</div>
</div>
<div class="site-content">
	<div class="container">
		<main id="main" class="row pt-5 pb-5  text-left" role="main">
			<div class="col-md-8">
				<p><?php _e( 'It looks like nothing was found at this location.', 'diana' ); ?></p>
			</div><!-- .page-content -->
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
