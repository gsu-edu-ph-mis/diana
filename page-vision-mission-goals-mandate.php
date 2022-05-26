<?php
/**
 * Template Name: Vision Mission Goals Mandate
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
			<div class="col-md-9 order-1 order-md-2 mb-5">
				<h2 id="vision" class="mb-5">Vision</h2>
				<p>“Center of Excellence in Education and Green Technology Generation”</p>
				<p>Guimaras State College will be a center of excellence in education and green technology generation through the development of alternatives to technologies that have been proven damaging to health and the environment. It will create a center of economic activities through technologies and products that benefit the environment as well as creating new careers that truly protect and conserve the natural environment. Furthermore, it will work actively towards conservation of energy, natural resources, and foster the use of renewable resources.</p>
				<p>The success indicators are the following:
				<ol class="mb-5">
					<li>Reduced negative impact on the environment thus benefits health of the faculty and staff, students and the local community;	</li>
					<li>Cost saving on energy expenses;</li>
					<li>Increased income for the college greater than the GAA budget;</li>
					<li>Achieved the highest level of Accreditation;</li>
					<li>ISO Certified;</li>
					<li>Passing percentage of graduates in licensure examination is above 50 percentile;</li>
					<li>Presented/Published research outputs in international fora/journals;</li>
					<li>Forged MOA/MOU with national/international organizations.</li>
				</ol>
				
				<h2 id="mission" class="mb-5">Mission</h2>
				<p class="mb-5">Guimaras State College is committed to provide access to relevant and quality education and advocate sustainable development.</p>
				
				<h2 id="goal" class="mb-5">Goals</h2>
				<ol class="mb-5">
					<li> Provide quality training for Tertiary Education and advocate sustainable development through green technology generation;</li>
					<li> Develop responsible, environment-friendly and productive citizens who can contribute to the attainment of local and national goals;</li>
					<li> Encourage and promote research, extension, and technological and educational development redirected towards green technology generation, and;</li>
					<li> Ensure that curricular offerings are responsive to the needs of the community, region, and nation in order to be globally competitive.</li>
				</ol>
			</div>
			<div class="col-md-3 order-2 order-md-1 mb-4">
				<nav class="page-sub-menu text-center scrolling-nav mb-5">
					<ul>
						<li><a href="<?= home_url(); ?>/brief-history">Brief History</a></li>
						<li><a href="<?= home_url(); ?>/the-mandate">The Mandate</a></li>
						<li class="current"><a href="<?= home_url(); ?>/vision-mission-goals">Vision, Mission and Goals</a></li>
						<li><a href="<?= home_url(); ?>/quality-policy">Quality Policy</a></li>
						<li><a href="<?= home_url(); ?>/hymn">Hymn</a></li>
						<li><a href="<?= home_url(); ?>/map">Map</a></li>
					</ul>
				</nav>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
