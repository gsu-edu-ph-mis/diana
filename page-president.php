<?php
/**
 * Template Name: President
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
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2 class="h1 mb-5 text-center">A Message from the President</h2>
				<div class="official">
					<div class="official-photo mb-3">
						<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/lilian-parreno.jpg" alt="Lilian">
					</div>
					<h3 class="h3">Dr. Lilian Diana B. Parreño</h3>
					<h4 class="h4">SUC President III</h4>
				</div>
				<div style="font-size: 2rem; text-align: justify; font-weight: 300">
					<p class="mb-5">The Guimaras State College (GSC) is a state-funded institution tasked to provide quality professional and technological training in the Western Visayas area. Its vision is to provide its clients with quality and excellent education and green technology generation. Through this vision, it will also support agri-eco tourism development program of Guimaras province.</p>
					<p class="mb-5">As a State College, GSC is committed to the transformation of the social well-being of the people, thus, it faces many challenges. The primary challenge is how it can effectively respond to the pressing needs of the province and the region, particularly in poverty alleviation and sustainability of socio-economic development efforts through its vision and mission. Through its four-fold function of instruction, research, extension and production, it develops programs that could bring development in the region. However, its effort to provide knowledge and technology must not be limited only to those who are capable of going to school, but it should reach the people even up to the region’s borders and beyond.</p>
				</div>
				<a href="<?php echo get_home_url(); ?>" class="btn btn-light text-primary">&laquo; Return</a>
			</div>
			<div class="col-md-2"></div>

		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
