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
				<div id="vApp" v-cloak>
					
					<div class="text-center">
						<p>Select Your Profile Photo (Must be a square photo)</p>
						<input v-on:change="readFile" name="photo" id="photo" ref="file_photo" type="file" class="mb-5">
						<img v-if="!photo" src="<?=get_stylesheet_directory_uri(); ?>/images/frame.png" alt="Frame">
						<p v-else>Download the frame below <em>(Right-click or hold tap)</em>:</p>
						<p v-if="photo"><em>Note: Open in a browser for download to work.</em></p>
						<img v-if="photo" v-bind:src="photo" alt="Frame">
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
