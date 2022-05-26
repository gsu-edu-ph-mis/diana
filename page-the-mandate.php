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
				<p>The Guimaras State College shall offer undergraduate and graduate courses in technology education, agriculture, fishery, engineering, arts and sciences, forestry, business, health, computer, criminology, nautical and short-term vocational-technical and other continuing courses that may be found to be needed and relevant. It shall also promote research, advanced studies, extension work and progressive leadership in each area of specialization. It shall also provide primary consideration through the integration of research/studies for the development of the Province of Guimaras. The College shall offer undergraduate and graduate courses as well as short technical courses within its areas of specialization and according to its capabilities, as the Board of Trustees may deem necessary to carry out its objectives, particularly in order to meet the needs of the province and the region.</p>
			</div>
			<div class="col-md-3 order-2 order-md-1 mb-4">
				<nav class="page-sub-menu text-center scrolling-nav mb-5">
					<ul>
						<li><a href="<?= home_url(); ?>/brief-history">Brief History</a></li>
						<li class="current"><a href="<?= home_url(); ?>/the-mandate">The Mandate</a></li>
						<li><a href="<?= home_url(); ?>/vision-mission-goals">Vision, Mission and Goals</a></li>
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
