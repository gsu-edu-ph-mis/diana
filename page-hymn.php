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
  					<div class="bg-white border border-top-0 p-4 pt-5 hymn-lyrics">
						<h2 class="mb-4">Guimaras State University Hymn</h2>
						<p class="credits mb-5">
							<small>Based on the original lyrics of GSC March by Juan Palmos, Jr. <br>
							Rearranged by Mary Elizabeth Parreño, Prof. Josie H. Gaitano &amp; Dr. Roger Rueda <br>
							Music by Argiel Resurreccion &amp; Roque Magsipoc</small>
						</p>

						<div class="mb-5">
							<audio id="track" controls autoplay src="<?php echo get_stylesheet_directory_uri(); ?>/media/gsu-hymn-orchestra.mp3">
								Your browser does not support the
								<code>audio</code> element.
							</audio>

							
						</div>
						<div id="lyrics-area">
							<p><span class="10">In the towns on the Guimaras shores</span><br>
							<span class="14">stands the University we all honor—</span> <br>
							<span class="19">GSU, whom we all adore, with our hearts</span> <br>
							<span class="26">and minds and souls.</span></p>

							<p><span class="30">In the halls and throughout the world,</span> <br>
							<span class="34">she will rise and never fall,</span> <br>
							<span class="36">our beloved Guimaras State University,</span> <br>
							<span class="41">a center of excellence and green technology.</span></p>

							<p><span class="47">Excellent in education and champions of the Earth,</span> <br>
							<span class="56">we are future global builders pushing boundaries,</span> <br>
							<span class="61">chasing our dreams, lifting our banners high up into the sky,</span> <br>
							<span class="67">the world cheering for the children, <em>Mabuhay! Mabuhay!</em></span></p>

							<p><span class="79">A university for all in this part of the western shore,</span><br>
							<span class="84">brothers and sisters united for a common goal</span><br>
							<span class="89">to lift each other up through education and culture</span><br>
							<span class="96">for the success of one and all.</span></p>

							<p><span class="100">In the halls and throughout the world,</span><br>
							<span class="104">we are ready to heed her call,</span><br>
							<span class="109">our beloved Guimaras State University</span><br>
							<span class="113">in the towns on the Guimaras shores.</span></p>

							<p><span class="118">Excellent in education and champions of the Earth,</span> <br>
							<span class="127">we are future global builders pushing boundaries,</span> <br>
							<span class="133">chasing our dreams, lifting our banners high up into the sky,</span> <br>
							<span class="139">the world cheering for the children, <em>Mabuhay! Mabuhay!</em></span></p>
							<p><span class="149">Excellent in education, <em>Mabuhay! Mabuhay!</em></span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 order-2 order-md-1 mb-4">
				<nav class="page-sub-menu text-center scrolling-nav mb-5">
					<ul>
						<li><a href="<?= home_url(); ?>/brief-history">Brief History</a></li>
						<li><a href="<?= home_url(); ?>/the-mandate">Mandate</a></li>
						<li><a href="<?= home_url(); ?>/vision-mission-goals">VMGO</a></li>
						<li><a href="<?= home_url(); ?>/quality-policy">Quality Policy</a></li>
						<li class="current"><a href="<?= home_url(); ?>/hymn">Hymn</a></li>
						<li><a href="<?= home_url(); ?>/map">Map</a></li>
					</ul>
				</nav>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer();