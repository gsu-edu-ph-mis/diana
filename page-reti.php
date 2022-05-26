<?php
/**
 * Template Name: RETI
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
			<div class="col-md-12 order-2">
				<p>The Office of the Vice President for Research, Extension, Training and Innovation (OVPRETI) is the college's coordinating arm for Research, Extension, Training and Innovation (RETI). It coordinates the implementation of the different R&D commodity programs and extension activities of the following centers: Mango and Tropical Fruits Research Center (MTFRC), Industrial Technology Research and Development Center (ITRDC), Journal Publications Center (JPC), Instructional Materials Development Center (IMDC), Western Visayas Food Innovation Center (WVFIC), Intellectual Property Management Office (IPMO), Skills Training Center (STC), Statistical Data Processing Center (SDPC) and the academic departments.</p>
				<p>The OVPRETI is responsible of recommending to the College President in the formulation and implementation of administrative policies, strategies and procedures concerning research, extension, training and innovation. The VPRETI shall also direct the planning, implementation, and monitoring of all research, extension, innovation and training programs and the necessary collaborations with institutional linkages.</p>
				<h2 class="h2 mb-5 mt-5 text-center"> RETI Centers </h2>
				<div class="row" style="overflow:hidden">
					<div class="col-12 col-md-4 text-center mb-5">
						<div class="d-flex align-content-center flex-wrap justify-content-center research-ball" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/reti/lab.jpg')">
							<h3 class="h3 font-weight-bold mb-3" style="text-shadow: 0 0 4px #fff">Research and Development (R&D)</h3>
							<a href="<?php echo get_permalink( get_page_by_path( '/reti/research-and-development' ) ); ?>" class="btn btn-primary">Read more...</a>
						</div>
					</div>
					<div class="col-12 col-md-4 text-center mb-5">
						<div class="d-flex align-content-center flex-wrap justify-content-center research-ball" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/reti/ext.jpg')">
							<h3 class="h3 font-weight-bold mb-3" style="text-shadow: 0 0 4px #fff">Community Extension Services (CES)</h3>
							<a href="<?php echo get_permalink( get_page_by_path( '/reti/community-extension-services' ) ); ?>" class="btn btn-primary">Read more...</a>
						</div>
					</div>
					<div class="col-12 col-md-4 text-center mb-5">
						<div class="d-flex align-content-center flex-wrap justify-content-center research-ball" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/reti/type.jpg')">
							<h3 class="h3 font-weight-bold mb-3" style="text-shadow: 0 0 4px #fff">Intellectual Property Management Office (IPMO)</h3>
							<a href="<?php echo get_permalink( get_page_by_path( '/reti/intellectual-property-management-office' ) ); ?>" class="btn btn-primary">Read more...</a>
						</div>
					</div>
					<div class="col-12 col-md-4 text-center mb-5">
						<div class="d-flex align-content-center flex-wrap justify-content-center research-ball" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/reti/book.jpg')">
							<h3 class="h3 font-weight-bold mb-3" style="text-shadow: 0 0 4px #fff">Center for Instructional Materials Development (CIMD)</h3>
							<a href="<?php echo get_permalink( get_page_by_path( '/reti/center-for-instructional-materials-development' ) ); ?>" class="btn btn-primary">Read more...</a>
						</div>
					</div>
					<div class="col-12 col-md-4 text-center mb-5">
						<div class="d-flex align-content-center flex-wrap justify-content-center research-ball" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/reti/stats.jpg')">
							<h3 class="h3 font-weight-bold mb-3" style="text-shadow: 0 0 4px #fff">Statistical Data Processing Center (SDPC)</h3>
							<a href="<?php echo get_permalink( get_page_by_path( '/reti/statistical-data-processing-center' ) ); ?>" class="btn btn-primary">Read more...</a>
						</div>
					</div>
					<div class="col-12 col-md-4 text-center mb-5">
						<div class="d-flex align-content-center flex-wrap justify-content-center research-ball" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/reti/book.jpg')">
							<h3 class="h3 font-weight-bold mb-3" style="text-shadow: 0 0 4px #fff">Center for Journal Publications (CJP)</h3>
							<a href="<?php echo get_permalink( get_page_by_path( '/reti/center-for-journal-publications' ) ); ?>" class="btn btn-primary">Read more...</a>
						</div>
					</div>
					<div class="col-12 col-md-4 text-center mb-5">
						<div class="d-flex align-content-center flex-wrap justify-content-center research-ball" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/reti/fic.jpg')">
							<h3 class="h3 font-weight-bold mb-3" style="text-shadow: 0 0 4px #fff">Western Visayas Food Innovation Center-Guimaras State College (WVFIC-GSC)</h3>
							<a href="<?php echo get_permalink( get_page_by_path( '/reti/western-visayas-food-innovation-center-guimaras-state-college' ) ); ?>" class="btn btn-primary">Read more...</a>
						</div>
					</div>
					<div class="col-12 col-md-4 text-center mb-5">
						<div class="d-flex align-content-center flex-wrap justify-content-center research-ball" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/reti/mango.jpg')">
							<h3 class="h3 font-weight-bold mb-3" style="text-shadow: 0 0 4px #fff">Mango & Tropical Fruits Research Center (MTFRC)</h3>
							<a href="<?php echo get_permalink( get_page_by_path( '/reti/mango-tropical-fruits-research-center' ) ); ?>" class="btn btn-primary">Read more...</a>
						</div>
					</div>
					<div class="col-12 col-md-4 text-center mb-5">
						<div class="d-flex align-content-center flex-wrap justify-content-center research-ball" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/reti/skills.jpg')">
							<h3 class="h3 font-weight-bold mb-3" style="text-shadow: 0 0 4px #fff">Skills Training Center (STC)</h3>
							<a href="<?php echo get_permalink( get_page_by_path( '/reti/skills-training-center' ) ); ?>" class="btn btn-primary">Read more...</a>
						</div>
					</div>
					<div class="col-12 col-md-4 text-center mb-5">
						<div class="d-flex align-content-center flex-wrap justify-content-center research-ball" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/reti/itrdc.jpg')">
							<h3 class="h3 font-weight-bold mb-3" style="text-shadow: 0 0 4px #fff">Industrial Technology Research and Development Center (ITRDC)</h3>
							<a href="<?php echo get_permalink( get_page_by_path( '/reti/industrial-technology-research-and-development-center' ) ); ?>" class="btn btn-primary">Read more...</a>
						
						</div>
					</div>
				</div>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
