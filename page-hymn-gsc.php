<?php
/**
 * Template Name: Hymn GSC
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
			<div class="col-md-9 order-1 order-md-2 mb-5 text-center hymn">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link" href="<?= home_url('/hymn'); ?>">GSU Hymn</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link active" href="<?= home_url('/hymn-gsc'); ?>">GSC Hymn</a>
					</li>
				</ul>

				<div class="tab-content">
					<div class="bg-white border border-top-0 p-4 pt-5 hymn-lyrics" role="tabpanel">
						<h2 class="h1">Guimaras State College Hymn</h2>
						<p class="credits">
							<small>By: Juan N. Palmos Jr.</small>
						</p>

						<div class="mb-5">
							<iframe width="100%" height="auto" style="max-width: 680px; min-height:315px; border: 6px solid #006ea0; border-radius: 2px" src="https://www.youtube.com/embed/wwouEKB9Y1k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>

						<p>In a town at the Guimaras shore <br>
						stands a school we all honor <br>
						GSC that we all adore, <br>
						with our hearts and hands and soul.</p>

						<p>In the fields and in the hall, <br>
						she will rise and never fall; our beloved <br>
						Guimaras State College, our school <br>
						in a town at the Guimaras shore.</p>

						<p>It is true we are young but in judgement old <br>
						lead us on GSC make our hearts strong and bold <br>
						lift your banner high, flying in the sky <br>
						let your sons and daughters all shout; <br>
						Mabuhay, Mabuhay!</p>

						<p>In this school in the Western shore, <br>
						we are brothers and sisters all <br>
						together we've one purpose sure; <br>
						for the success of our school.</p>

						<p>In the fields and in the hall, <br>
						we are ready to heed her call <br>
						our Beloved Guimaras State College, our school <br>
						in a town at the Guimaras shore.</p>

						<div class="mb-5 pt-5">
							<h2 class="h2">Audio Only</h2>
							<audio controls src="<?php echo get_stylesheet_directory_uri(); ?>/media/gsc-hymn-audio-only.mp3">
								Your browser does not support the
								<code>audio</code> element.
							</audio>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 order-2 order-md-1 mb-4">
				<nav class="page-sub-menu text-center scrolling-nav mb-5">
					<ul>
						<li><a href="<?= home_url(); ?>/brief-history">Brief History</a></li>
						<li><a href="<?= home_url(); ?>/the-mandate">The Mandate</a></li>
						<li><a href="<?= home_url(); ?>/vision-mission-goals">Vision, Mission and Goals</a></li>
						<li><a href="<?= home_url(); ?>/quality-policy">Quality Policy</a></li>
						<li class="current"><a href="<?= home_url(); ?>/hymn">Hymn</a></li>
						<li><a href="<?= home_url(); ?>/map">Map</a></li>
					</ul>
				</nav>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
