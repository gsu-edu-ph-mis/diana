<?php
/**
 * Template Name: Videos
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
			<div class="col-md-12 mb-5">
				<video id="my-video" class="video-js vjs-fluid" style="box-shadow: 0 0 3px lightgray; border-radius: 3px; overflow: hidden;" controls preload="auto" width="640" height="480" poster="<?php echo get_stylesheet_directory_uri(); ?>/media//stream-gsu-hymn.jpg"
					data-setup="{}">
					<source src="https://videos-gsu-ph.s3.ap-southeast-1.amazonaws.com/stream-gsu-hymn.mp4" type="video/mp4" />
					<!-- <source src="/media/what.webm" type="video/webm" /> -->
					<p class="vjs-no-js">
						To view this video please enable JavaScript, and consider upgrading to a
						web browser that
						<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
					</p>
				</video>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3 col-6 mb-5">
						<button type="button" class="btn btn-dark change-video" id="change-video" data-src="https://videos-gsu-ph.s3.ap-southeast-1.amazonaws.com/stream-gsu-hymn.mp4" data-type="video/mp4">
							<img width="1920" height="1080" src="<?php echo get_stylesheet_directory_uri(); ?>/media/stream-gsu-hymn.jpg" alt="preview">
						</button>
						<div class="text-center font-weight-normal">GSU Hymn</div>
					</div>
					
					<div class="col-md-3 col-6 mb-5">
						<button type="button" class="btn btn-dark change-video" id="change-video" data-src="https://videos-gsu-ph.s3.ap-southeast-1.amazonaws.com/stream-gsu-the-prayer.mp4" data-type="video/mp4">
							<img width="1920" height="1080" src="<?php echo get_stylesheet_directory_uri(); ?>/media/stream-gsu-the-prayer.jpg" alt="preview">
						</button>
						<div class="text-center font-weight-normal">The Prayer</div>
					</div>
					
					<div class="col-md-3 col-6 mb-5">
						<button type="button" class="btn btn-dark change-video" id="change-video" data-src="https://videos-gsu-ph.s3.ap-southeast-1.amazonaws.com/stream-gsu-promo-vid-july-2024.mp4" data-type="video/mp4">
							<img width="1920" height="1080" src="<?php echo get_stylesheet_directory_uri(); ?>/media/stream-gsu-promo-vid-july-2024.jpg" alt="preview">
						</button>
						<div class="text-center font-weight-normal">GSU Promotional Video</div>
					</div>
					
				</div>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
