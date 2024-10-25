<?php
/**
 * Template Name: SDG
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
					<div class="col-md-4">
						<div id="symbolism" class="text-center mb-5">
							<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E_SDG_logo_UN_emblem_square_trans_WEB.png" alt="SDG">
						</div>	
					</div>
					<div class="col-md-7">
						<h2 class="h1 mb-4">Guimaras State University is committed in achieving its Sustainable Development Goals.</h2>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At maiores minus totam nemo fuga molestiae ipsa ducimus pariatur qui. Mollitia beatae quasi soluta quae obcaecati voluptate, laudantium ab voluptatem. Est!</p>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At maiores minus totam nemo fuga molestiae ipsa ducimus pariatur qui. Mollitia beatae quasi soluta quae obcaecati voluptate, laudantium ab voluptatem. Est!</p>
					</div>
				</div>
				<div class="sdg">
					<div class="scene">
						<div class="coin">
							<div class="front">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E-WEB-Goal-01.png" alt="">
							</div>
							<div class="back text-center">
								<h2>Goal 1. No Poverty</h2>
								<a class="btn btn-sm btn-primary" href="<?= home_url('/sustainable-development-goals/no-poverty/'); ?>">Read More</a>
							</div>
						</div>
					</div>
					<div class="scene">
						<div class="coin">
							<div class="front">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E-WEB-Goal-02.png" alt="">
							</div>
							<div class="back text-center">
								<h2>Goal 2. Zero Hunger</h2>
								<a class="btn btn-sm btn-primary" href="<?= home_url('/sustainable-development-goals/zero-hunger/'); ?>">Read More</a>
							</div>
						</div>
					</div>
					<div class="scene">
						<div class="coin">
							<div class="front">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E-WEB-Goal-03.png" alt="">
							</div>
							<div class="back text-center">
								<h2>Goal 3. Good Health and Well-Being</h2>
								<a class="btn btn-sm btn-primary" href="<?= home_url('/sustainable-development-goals/good-health-and-well-being/'); ?>">Read More</a>
							</div>
						</div>
					</div>
					<div class="scene">
						<div class="coin">
							<div class="front">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E-WEB-Goal-04.png" alt="">
							</div>
							<div class="back text-center">
								<h2>Goal 4: Quality Education</h2>
								<a class="btn btn-sm btn-primary" href="<?= home_url('/sustainable-development-goals/quality-education/'); ?>">Read More</a>
							</div>
						</div>
					</div>
					<div class="scene">
						<div class="coin">
							<div class="front">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E-WEB-Goal-05.png" alt="">
							</div>
							<div class="back text-center">
								<h2>Goal 5: Gender Equality</h2>
								<a class="btn btn-sm btn-primary" href="<?= home_url('/sustainable-development-goals/gender-equality/'); ?>">Read More</a>
							</div>
						</div>
					</div>
					<div class="scene">
						<div class="coin">
							<div class="front">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E-WEB-Goal-06.png" alt="">
							</div>
							<div class="back text-center">
								<h2>Goal 6: Clean Water and Sanitation</h2>
								<a class="btn btn-sm btn-primary" href="<?= home_url('/sustainable-development-goals/clean-water-and-sanitation/'); ?>">Read More</a>
							</div>
						</div>
					</div>
					<div class="scene">
						<div class="coin">
							<div class="front">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E-WEB-Goal-07.png" alt="">
							</div>
							<div class="back text-center">
								<h2>Goal 7: Affordable and Clean Energy</h2>
								<a class="btn btn-sm btn-primary" href="<?= home_url('/sustainable-development-goals/affordable-and-clean-energy'); ?>">Read More</a>
							</div>
						</div>
					</div>
					<div class="scene">
						<div class="coin">
							<div class="front">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E-WEB-Goal-08.png" alt="">
							</div>
							<div class="back text-center">
								<h2>Goal 8: Decent Work and Economic Growth</h2>
								<a class="btn btn-sm btn-primary" href="<?= home_url('/sustainable-development-goals/decent-work-and-economic-growth/'); ?>">Read More</a>
							</div>
						</div>
					</div>
					<div class="scene">
						<div class="coin">
							<div class="front">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E-WEB-Goal-09.png" alt="">
							</div>
							<div class="back text-center">
								<h2>Goal 9: Industry, Innovation, and Infrastructure</h2>
								<a class="btn btn-sm btn-primary" href="<?= home_url('/sustainable-development-goals/industry-innovation-and-infrastructure/'); ?>">Read More</a>
							</div>
						</div>
					</div>
					<div class="scene">
						<div class="coin">
							<div class="front">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E-WEB-Goal-10.png" alt="">
							</div>
							<div class="back text-center">
								<h2>Goal 10: Reduced Inequalities</h2>
								<a class="btn btn-sm btn-primary" href="<?= home_url('/sustainable-development-goals/reduced-inequalities/'); ?>">Read More</a>
							</div>
						</div>
					</div>
					<div class="scene">
						<div class="coin">
							<div class="front">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E-WEB-Goal-11.png" alt="">
							</div>
							<div class="back text-center">
								<h2>Goal 11: Sustainable Cities and Communities</h2>
								<a class="btn btn-sm btn-primary" href="<?= home_url('/sustainable-development-goals/sustainable-cities-and-communities/'); ?>">Read More</a>
							</div>
						</div>
					</div>
					<div class="scene">
						<div class="coin">
							<div class="front">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E-WEB-Goal-12.png" alt="">
							</div>
							<div class="back text-center">
								<h2>Goal 12: Responsible Consumption and Production</h2>
								<a class="btn btn-sm btn-primary" href="<?= home_url('/sustainable-development-goals/responsible-consumption-and-production/'); ?>">Read More</a>
							</div>
						</div>
					</div>
					<div class="scene">
						<div class="coin">
							<div class="front">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E-WEB-Goal-13.png" alt="">
							</div>
							<div class="back text-center">
								<h2>Goal 13: Climate Action</h2>
								<a class="btn btn-sm btn-primary" href="<?= home_url('/sustainable-development-goals/climate-action/'); ?>">Read More</a>
							</div>
						</div>
					</div>
					<div class="scene">
						<div class="coin">
							<div class="front">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E-WEB-Goal-14.png" alt="">
							</div>
							<div class="back text-center">
								<h2>Goal 14: Life Below Water</h2>
								<a class="btn btn-sm btn-primary" href="<?= home_url('/sustainable-development-goals/life-below-water/'); ?>">Read More</a>
							</div>
						</div>
					</div>
					<div class="scene">
						<div class="coin">
							<div class="front">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E-WEB-Goal-15.png" alt="">
							</div>
							<div class="back text-center">
								<h2>Goal 15: Life on Land</h2>
								<a class="btn btn-sm btn-primary" href="<?= home_url('/sustainable-development-goals/life-on-land/'); ?>">Read More</a>
							</div>
						</div>
					</div>
					<div class="scene">
						<div class="coin">
							<div class="front">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E-WEB-Goal-16.png" alt="">
							</div>
							<div class="back text-center">
								<h2>Goal 16: Peace, Justice and Strong Institutions</h2>
								<a class="btn btn-sm btn-primary" href="<?= home_url('/sustainable-development-goals/peace-justice-and-strong-institutions/'); ?>">Read More</a>
							</div>
						</div>
					</div>
					<div class="scene">
						<div class="coin">
							<div class="front">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E-WEB-Goal-17.png" alt="">
							</div>
							<div class="back text-center">
								<h2>Goal 17: Partnerships</h2>
								<a class="btn btn-sm btn-primary" href="<?= home_url('/sustainable-development-goals/partnerships/'); ?>">Read More</a>
							</div>
						</div>
					</div>
					<div class="sdg-horz-logo">
						<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E_SDG_logo_UN_emblem_horizontal_trans_WEB.png" alt="">
					</div>
				</div>
			</div>
			
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
