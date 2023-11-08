<?php
/**
 * Template Name: The Mandate
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
				<p>The University shall primarily provide advance education, higher technological, professional instruction and training in the fields of education, technology, agriculture, fisheries, engineering, arts and sciences, forestry, business administration, hotel and restaurant management, tourism, health sciences, computer technology, criminology, maritime and aviation education, and other related fields of study. It shall also undertake research and extension services, as well as production activities, in support of the socioeconomic development of the Province of Guimaras and Region VI, and provide progressive leadership in its areas of specialization.</p>
				<p class="mb-5 text-right"><small><em>Source: REPUBLIC ACT No. 11335</em></small></p>
			</div>
			<div class="col-md-3 order-2 order-md-1 mb-4">
				<nav class="page-sub-menu text-center scrolling-nav mb-5">
					<ul>
						<li><a href="<?= home_url(); ?>/brief-history">Brief History</a></li>
						<li class="current"><a href="<?= home_url(); ?>/the-mandate">Mandate</a></li>
						<li><a href="<?= home_url(); ?>/vision-mission-goals">VMGO</a></li>
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
