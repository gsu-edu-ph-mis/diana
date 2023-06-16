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
					<div style="max-width: 500px; margin: auto">
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
						<div>${getUserAgent()}</div>
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
