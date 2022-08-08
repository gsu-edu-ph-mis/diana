<?php
/**
 * Template Name: Hymn
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
						<a class="nav-link active" href="<?= home_url('/hymn'); ?>">GSU Hymn</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" href="<?= home_url('/hymn-gsc'); ?>">GSC Hymn</a>
					</li>
				</ul>
				<div class="tab-content">
  					<div class="bg-white border border-top-0 p-4 pt-5">
						<h2 class="mb-4">Guimaras State University Hymn</h2>
						<div class="mb-5">
							<small>Based on the original lyrics of GSC March by Juan Palmos, Jr. <br>
							Rearranged by Mary Elizabeth Parreño, Prof. Josie H. Gaitano &amp; Dr. Roger Rueda <br>
							Music by Argiel Resurreccion &amp; Roque Magsipoc</small>
						</div>

						<div class="mb-5">
							<audio controls autoplay src="<?php echo get_stylesheet_directory_uri(); ?>/media/gsu-orchestra.mp3">
								Your browser does not support the
								<code>audio</code> element.
							</audio>
						</div>

						<p>In the towns on the Guimaras shores <br>
						stands the University we all honor— <br>
						GSU, whom we all adore, with our hearts <br>
						and minds and souls.</p>

						<p>In the hall and throughout the world, <br>
						she will rise and never fall, <br>
						our beloved Guimaras State University, <br>
						a center of excellence and green technology.</p>

						<p>Excellent in education and champions of the Earth, <br>
						we are future global builders pushing boundaries, <br>
						chasing our dreams, lifting our banners high up into the sky, <br>
						the world cheering for the children, <em>Mabuhay! Mabuhay!</em></p>

						<p>A university for all in this part of the western shore,<br>
						brothers and sisters united for a common goal<br>
						to lift each other up through education and culture<br>
						for the success of one and all.</p>

						<p>In the hall and throughout the world,<br>
						we are ready to heed her call,<br>
						our beloved Guimaras State University<br>
						in the towns on the Guimaras shores.</p>

						<p>Excellent in education and champions of the Earth, <br>
						we are future global builders pushing boundaries, <br>
						chasing our dreams, lifting our banners high up into the sky, <br>
						the world cheering for the children, <em>Mabuhay! Mabuhay!</em></p>
						<p>Excellent in education, <em>Mabuhay! Mabuhay!</em></p>
						
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
