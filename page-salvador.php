<?php
/**
 * Template Name: Salvador
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
			<div class="col-md-10 order-2">
				<h2 class="h1 mb-0">Salvador Campus (Main)</h2>
				<h3 class="h3 mb-4 pl-1" style="font-weight: 300; color: #2799a4; font-size: 16px;">McLain, Buenavista, Guimaras</h3>
				<div>
					<img src="<?= get_stylesheet_directory_uri(); ?>/images/salvador.jpg" alt="Salvador">
				</div>
			</div>
			<div class="col-md-2 order-1">
				<nav class="page-sub-menu mb-5">
				<nav class="page-sub-menu mb-5">
					<ul>
						<li>
							<a href="<?= home_url(); ?>/baterna">
								Baterna
							</a>
						</li>
						<li>
							<a href="<?= home_url(); ?>/mosqueda">
								Mosqueda
							</a>
						</li>
						<li class="current">
							<a href="<?= home_url(); ?>/salvador">
								Salvador
							</a>
						</li>
					</ul>
				</nav>
				</nav>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
