<?php
/**
 * Template Name: Graduate Programs
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
			<div class="col-md-4">
				<div id="grad-school" class="college-programs">
					<div class="program-header">
						<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/gradschool-md.png" alt="">
						<h2 class="h2">Graduate School</h2>
						<h3 class="h4">
							<a href="mailto:graduateschool@gsc.edu.ph">
								<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
								graduateschool@gsc.edu.ph
							</a>
						</h3>
						
					</div>
				</div>
				<nav class="page-sub-menu college-menu scrolling-nav mb-5">
					<ul>
						<li>
							<a href="#masteral" class="d-flex align-items-center" style="line-height: 1.2">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/gradschool-sm.png" width="60" height="60" alt="">
								<span>Master Programs</span>
							</a>
						</li>
						<li>
							<a href="#doctorate" class="d-flex align-items-center" style="line-height: 1.2">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/gradschool-sm.png" width="60" height="60" alt="">
								<span>Doctorate Programs</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-md-8">
				<div class="d-flex justify-content-between justify-content-md-end mb-5" aria-label="Campus">
					<div class="bg-light ">
						<img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-baterna-sm.png" data-toggle="tooltip" alt="Baterna" title="Baterna">	
						Baterna	
					</div>
					<div class="bg-light pl-4">
						<img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-mosqueda-sm.png" data-toggle="tooltip" alt="Mosqueda" title="Mosqueda">	
						Mosqueda	
					</div>
					<div class="bg-light pl-4 pr-2">
						<img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador">	
						Salvador	
					</div>
				</div>
				<div id="data-programs" class="data-programs ">
					
					<div id="masteral" class="college-programs">
						<div class="program-header">
							<h2 class="h2">Master Programs</h2>
						</div>
						<div class="programs">
							<div>
								<h2 class="h3">Master in Public Administration <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
							</div>
							<div>
								<h2 class="h3">Master in Education <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
								<p class="mb-0">Major in: Educational Management </p>
							</div>
							<div>
								<h2 class="h3">Master of Arts in Teaching Mathematics <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
							</div>
							<div>
								<h2 class="h3">Master in Business Administration <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
							</div>
						</div>
					</div>
					<div id="doctorate" class="college-programs">
						<div class="program-header">
							<h2 class="h2">Doctorate Programs</h2>
						</div>
						<div class="programs">
							<div>
								<h2 class="h3">Doctor of Philosophy in Educational Management  <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
							</div>
							<div>
								<h2 class="h3">Doctor in Management <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
								<p class="mb-0">Major in: Business Administration, Human Resource Management </p>
							</div>
							<div>
								<h2 class="h3">Doctor of Education in Curriculum and Instruction <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
