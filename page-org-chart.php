<?php
/**
 * Template Name: Org Chart
 *
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Diana
 * subpackage Diana 1.0
 */

get_header(); ?>
<div class="section section-page-title">
	<div class="container">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</div>
</div>
<div class="site-content">
	<div class="container">
		<main id="main" class="row pt-5 pb-5  text-left" role="main">
			<div class="col-md-12">
				<a href="<?php echo get_stylesheet_directory_uri(); ?>/images/org-chart-2023-04.jpg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/org-chart-2023-04.jpg" alt="Org Chart"></a>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
