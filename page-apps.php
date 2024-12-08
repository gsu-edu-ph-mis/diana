<?php
/**
 * Template Name: Apps
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
			<div class="col-md-3 mb-5 text-center">
				<a href="https://hris.gsu.edu.ph" class="mb-2 d-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apps-hris.jpg" alt="hris"></a>
				<h3 class="h2">Human Resource Information System</h3>
			</div>
			<div class="col-md-3 mb-5 text-center">
				<a href="https://siasonline.gsu.edu.ph" class="mb-2 d-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apps-sias.jpg" alt="sias"></a>
				<h3 class="h2">Student Information and Accounting System</h3>
			</div>
			<div class="col-md-3 mb-5 text-center">
				<a href="https://board.gsu.edu.ph/entrance" class="mb-2 d-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apps-board.jpg" alt="board"></a>
				<h3 class="h2">The Board Room</h3>
			</div>
			<div class="col-md-3 mb-5 text-center">
				<a href="https://clinic.gsu.edu.ph" class="mb-2 d-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apps-clinic.jpg" alt="clinic"></a>
				<h3 class="h2">Clinic Online Portal</h3>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); 
