<?php
/**
 * Template Name: Frames
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
			<div class="col-md-12">
				<div id="vApp" v-cloak class="text-center" v-bind:data-pending="pending">
					<div v-if="isInFbApp" class="breakout" style="box-shadow: 0 0 5px gray; position: fixed; top: 0; right:0; width: 100%; height: 100%; z-index: 9999; background: #fff;">
						<div class="alert alert-success text-right p-4">
							<div class="d-flex align-items-center justify-content-end">
								<div>To continue, tap Open in Browser</div>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32"><title>arrow-up-right</title><path d="M21.5 9.5L20.09 10.92L17 7.83V13.5C17 17.09 14.09 20 10.5 20H4V18H10.5C13 18 15 16 15 13.5V7.83L11.91 10.91L10.5 9.5L16 4L21.5 9.5Z" /></svg>
							</div>
							<div class="mt-3 mb-0 text-right" style="font-size:12px;"><em>...or Open in Chrome or Open in Firefox</em></div>

						</div>
						<div class="p-5 d-flex justify-content-center text-left">
						</div>
					</div>
					<div v-else style="max-width: 500px; margin: auto">
						<div class="custom-file mb-5">
							<input v-on:change="readFile" name="photo" id="photo" ref="file_photo" type="file">
							<label class="custom-file-label" for="photo" style="border: 3px dotted #f5c014">Select Your Profile Photo</label>
						</div>
						<div id="scrollDL"></div>
						<img v-if="!photo" src="<?=get_stylesheet_directory_uri(); ?>/images/frame.png" alt="Frame">
						<img v-if="photo" v-bind:src="photo" alt="Frame">
						<div class="d-flex">
							<button type="button" v-if="photo" class="btn-full-width mt-3 mb-5 mr-1 btn btn-lg btn-warning" v-on:click="download">Download</button>
							<!-- <button type="button" v-if="photo" class="btn-full-width mt-3 mb-5 ml-1 btn btn-lg btn-secondary" v-on:click="openTab(photo)">Open in new Tab</button> -->
						</div>
					</div>
				</div>
				<div class="table-responsive">
					<div id="container" class="text-center"></div>
					<style>
						.konvajs-content {
							margin: auto;
							display: none;
						}
					</style>
				</div>
				
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
