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
				<video id="my-video" class="video-js vjs-fluid" style="box-shadow: 0 0 3px lightgray; border-radius: 3px; overflow: hidden;" controls preload="auto" width="640" height="480" poster="<?=get_template_directory_uri(); ?>/media/stream-gsu-hymn.png"
					data-setup="{}">
					<source src="<?=get_template_directory_uri(); ?>/media/stream-gsu-hymn.mp4" type="video/mp4" />
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
					<div class="col-3 mb-5">
						<video id="my-video2" class="video-js vjs-fluid" style="box-shadow: 0 0 3px lightgray; border-radius: 3px; overflow: hidden;" controls preload="auto" width="320" height="240" poster="<?=get_template_directory_uri(); ?>/media/stream-gsu-the-prayer.png"
							data-setup="{}">
							<source src="<?=get_template_directory_uri(); ?>/media/stream-gsu-the-prayer.mp4" type="video/mp4" />
							<p class="vjs-no-js">
								To view this video please enable JavaScript, and consider upgrading to a
								web browser that
								<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
							</p>
						</video>
					</div>
				
					<div class="col-3 mb-5">
						<video id="my-video3" class="video-js vjs-fluid" style="box-shadow: 0 0 3px lightgray; border-radius: 3px; overflow: hidden;" controls preload="auto" width="320" height="240" poster="<?=get_template_directory_uri(); ?>/media/stream-gsu-hymn.png"
							data-setup="{}">
							<source src="<?=get_template_directory_uri(); ?>/media/stream-gsu-hymn.mp4" type="video/mp4" />
							<p class="vjs-no-js">
								To view this video please enable JavaScript, and consider upgrading to a
								web browser that
								<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
							</p>
						</video>
					</div>
					<div class="col-3 mb-5">
						<video id="my-video3" class="video-js vjs-fluid" style="box-shadow: 0 0 3px lightgray; border-radius: 3px; overflow: hidden;" controls preload="auto" width="320" height="240" poster="<?=get_template_directory_uri(); ?>/media/stream-gsu-hymn.png"
							data-setup="{}">
							<source src="<?=get_template_directory_uri(); ?>/media/stream-gsu-hymn.mp4" type="video/mp4" />
							<p class="vjs-no-js">
								To view this video please enable JavaScript, and consider upgrading to a
								web browser that
								<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
							</p>
						</video>
					</div>
					<div class="col-3 mb-5">
						<video id="my-video3" class="video-js vjs-fluid" style="box-shadow: 0 0 3px lightgray; border-radius: 3px; overflow: hidden;" controls preload="auto" width="320" height="240" poster="<?=get_template_directory_uri(); ?>/media/stream-gsu-hymn.png"
							data-setup="{}">
							<source src="<?=get_template_directory_uri(); ?>/media/stream-gsu-hymn.mp4" type="video/mp4" />
							<p class="vjs-no-js">
								To view this video please enable JavaScript, and consider upgrading to a
								web browser that
								<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
							</p>
						</video>
					</div>
					<div class="col-3 mb-5">
						<video id="my-video3" class="video-js vjs-fluid" style="box-shadow: 0 0 3px lightgray; border-radius: 3px; overflow: hidden;" controls preload="auto" width="320" height="240" poster="<?=get_template_directory_uri(); ?>/media/stream-gsu-hymn.png"
							data-setup="{}">
							<source src="<?=get_template_directory_uri(); ?>/media/stream-gsu-hymn.mp4" type="video/mp4" />
							<p class="vjs-no-js">
								To view this video please enable JavaScript, and consider upgrading to a
								web browser that
								<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
							</p>
						</video>
					</div>
					<div class="col-3 mb-5">
						<video id="my-video3" class="video-js vjs-fluid" style="box-shadow: 0 0 3px lightgray; border-radius: 3px; overflow: hidden;" controls preload="auto" width="320" height="240" poster="<?=get_template_directory_uri(); ?>/media/stream-gsu-hymn.png"
							data-setup="{}">
							<source src="<?=get_template_directory_uri(); ?>/media/stream-gsu-hymn.mp4" type="video/mp4" />
							<p class="vjs-no-js">
								To view this video please enable JavaScript, and consider upgrading to a
								web browser that
								<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
							</p>
						</video>
					</div>
				</div>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
