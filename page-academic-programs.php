<?php
/**
 * Template Name: Academic Programs
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
			<div class="col-md-6">
				<div id="data-programs" class="data-programs ">
					<div id="cags" class="college-programs">
						<div class="program-header">
							<a href="<?= home_url(); ?>/graduate-programs">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/gradschool.png" width="150" height="150" alt="Grad">
							</a>
							<h2 class="h2">Graduate Programs</h2>
						</div>
						<div class="programs">
							<a href="<?= home_url(); ?>/graduate-programs" class="btn btn-primary btn-full-width">View Programs</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div id="data-programs" class="data-programs ">
					<div id="cags" class="college-programs">
						<div class="program-header">
							<a href="<?= home_url(); ?>/undergraduate-programs">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/undergrad.jpg" width="327" height="150" alt="Undergrad">
							</a>
							<h2 class="h2">Undergraduate Programs</h2>
						</div>
						<div class="programs">
							<a href="<?= home_url(); ?>/undergraduate-programs" class="btn btn-primary btn-full-width">View Programs</a>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
