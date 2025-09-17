<?php
/**
 * Template Name: OSDS
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
			<div class="order-2 col-md-12">
				<div class="row">
					<div class="col-md-12">
						<h2 class="h1 mb-4">Vision</h2>
						<p>The Office of Student Development and Services (OSDS) in Guimaras State University as a
Center of Excellence in Education and Green Technology Generation through Quality Programs,
Trainings and Services.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h3 class="h2 mt-5 mb-3">Mission</h3>
						<p>The Office of Student Development and Services (OSDS) in Guimaras State University is
committed to provide access to relevant and quality programs, training and services for the holistic
development of the students.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h3 class="h2 mt-5 mb-3">Objectives</h3>
						<ol>
							<li>Enhance capability of clubs/organizations, advisers and student leaders to develop well-
							rounded and globally competitive graduates.</li>
							<li>Generate funding for scholarship from various funding donors.</li>
							<li>Promote continuous skills enhancement for active participation of students to the program
							and activities of the college.</li>
							<li>Promote the research culture among students on development and community extension
							services.</li>
							<li>Develop services of responsibility among students to make Guimaras State College a Green
							Technology campus through environment friendly activities program and services.</li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h3 class="h2 mt-5 mb-3 text-center">Organizational Chart - Salvador Campus</h3>
						<div>
							<img src="<?= get_stylesheet_directory_uri(); ?>/images/osds/org-chart-sal.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h3 class="h2 mt-5 mb-3 text-center">Organizational Chart - Mosqueda Campus</h3>
						<div>
							<img src="<?= get_stylesheet_directory_uri(); ?>/images/osds/org-chart-mos.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h3 class="h2 mt-5 mb-3 text-center">Organizational Chart - Baterna Campus</h3>
						<div>
							<img src="<?= get_stylesheet_directory_uri(); ?>/images/osds/org-chart-bat.jpg" alt="">
						</div>
					</div>
				</div>
				
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
