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
				<p>Guimaras State College (GSC) is a state college in the Philippines that aims to have an effective and efficient implementation of its quality management system along with its vision, mission and core values.</p>
				<div class="d-flex align-items-center quality-policy mb-3 mt-4 pl-2">
					<div class="letters mr-3">G</div>
					<p class="mb-0">Goal-oriented and God-fearing servant leaders promoting Green Technology for sustainable development.</p>
				</div>
				<div class="d-flex align-items-center quality-policy mb-3 pl-2">
					<div class="letters mr-3">S</div>
					<p class="mb-0">Service-effective, and service-efficient professionals with global standards and practices.</p>
				</div>
				<div class="d-flex align-items-center quality-policy mb-4 pl-2">
					<div class="letters mr-3">C</div>
					<p class="mb-0">Committed to excellence and desire for harmony among stakeholders.</p>
				</div>
				<p>And to achieve this, Guimaras State College is committed to provide its client with quality and excellent education through green technology generation for sustainable development and global competitiveness. It shall endeavor to continually improve its quality management system, satisfying applicable requirements of the standard, addressing risks and maximizing opportunities.</p>
				<p class="mb-5">Further, the Top management pledges to inspire a college-wide commitment to this policy and ensure to regularly review and monitor strategic implementation of the Quality Management System in all levels of the organization for customer’s satisfaction and continual improvement.</p>
			</div>
			<div class="col-md-3 order-2 order-md-1 mb-4">
				<nav class="page-sub-menu text-center scrolling-nav mb-5">
					<ul>
					<li><a href="<?= home_url(); ?>/brief-history">Brief History</a></li>
						<li><a href="<?= home_url(); ?>/the-mandate">The Mandate</a></li>
						<li><a href="<?= home_url(); ?>/vision-mission-goals">Vision, Mission and Goals</a></li>
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
