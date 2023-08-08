<?php
/**
 * Template Name: Quality Policy
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
				<p>Guimaras State University (GSU) aims to have an effective and efficient implementation of its quality management system along with its vision, mission and core values.</p>
				<p>To achieve this, Guimaras State University will produce globally competitive, technologically-equipped and research-oriented graduates of quality and innovative advanced and higher education programs in sustainable agriculture, fisheries, forestry and tourism, entrepreneurship, liberal arts, education, healthcare, science and good governance. It shall endeavor to continually improve its quality management system, satisfying applicable requirements of the standard, addressing risks and maximizing opportunities.</p>
				<p>Further, the top Management pledges to inspire a university-wide commitment to this Policy and ensure to regularly review and monitor strategic implementation of the Quality Management System in all levels of the organization for customer’s satisfaction and continual improvement.</p>

				<p class="mb-5 text-right"><small><em>Source: MEMORANDUM NO. 302 Series of 2023</em></small></p>

			</div>
			<div class="col-md-3 order-2 order-md-1 mb-4">
				<nav class="page-sub-menu text-center scrolling-nav mb-5">
					<ul>
					<li><a href="<?= home_url(); ?>/brief-history">Brief History</a></li>
						<li><a href="<?= home_url(); ?>/the-mandate">The Mandate</a></li>
						<li><a href="<?= home_url(); ?>/vision-mission-goals">VMGO</a></li>
						<li class="current"><a href="<?= home_url(); ?>/quality-policy">Quality Policy</a></li>
						<li><a href="<?= home_url(); ?>/hymn">Hymn</a></li>
						<li><a href="<?= home_url(); ?>/map">Map</a></li>
					</ul>
				</nav>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
