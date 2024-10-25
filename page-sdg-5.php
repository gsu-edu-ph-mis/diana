<?php
/**
 * Template Name: SDG 5
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
		<h1 class="page-title">Sustainable Development Goals</h1>
	</div>
</div>
<div class="site-content">
	<div class="container">
		<main id="main" class="row pt-5 pb-5  text-left" role="main">
			<div class="order-2 col-md-8">
				<h2 class="h2"><?php single_post_title(); ?></h2>
				<div><?= the_content(); ?></div>
			</div>
			<div class="order-1 col-md-4 mb-5">
				<div class="mb-3">
					<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/5_SDG_MakeEveryDayCount_Gifs_GDU.gif" alt="">
				</div>
				<?php get_sidebar('sdg'); ?>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
