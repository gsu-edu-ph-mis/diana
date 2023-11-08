<?php
/**
 * Template Name: Maps
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
				<h2 class="h1">Interactive Map</h2>
				<p>Map showing the location of the three (3) campuses.</p>
				<div id="map" style="height:600px"></div>
			</div>
			<div class="col-md-3 order-2 order-md-1 mb-4">
				<nav class="page-sub-menu text-center scrolling-nav mb-5">
					<ul>
						<li><a href="<?= home_url(); ?>/brief-history">Brief History</a></li>
						<li><a href="<?= home_url(); ?>/the-mandate">Mandate</a></li>
						<li><a href="<?= home_url(); ?>/vision-mission-goals">VMGO</a></li>
						<li><a href="<?= home_url(); ?>/quality-policy">Quality Policy</a></li>
						<li><a href="<?= home_url(); ?>/hymn">Hymn</a></li>
						<li class="current"><a href="<?= home_url(); ?>/map">Map</a></li>
					</ul>
				</nav>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
