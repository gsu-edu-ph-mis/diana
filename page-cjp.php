<?php
/**
 * Template Name: CJP
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
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-title mb-0"><?php single_post_title(); ?></h1>
			</div>
		</div>
	</div>
</div>
<div class="site-content">
	<div class="container">
		<main id="main" class="row pt-5 pb-5  text-left" role="main">
			
			<div class="col-lg-3 text-center">
				<img class="mb-4" src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CJP-md.png" alt="Logo">
				<p class="mb-0">
					Website: <br>
					<a href="https://journals.gsu.edu.ph/">
						<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" /></svg>
						https://journals.gsu.edu.ph/
					</a>
				</p>
			</div>
			<div class="col-lg-6">
				<h2 class="h2 mb-3">About the Center</h2>
				<p>The Center for Journal Publications undertakes the publication of the institutional research journals, namely, Himal-Us, Higher Education Research Review (HERR), and The Graduate School Journal.</p>
				<p>These journals are recognized by the National Library and with respective International Standard Serial Numbers (ISSN). The Himal-us and HERR include quality completed research outputs that satisfactorily complied with the in-house review's rigorous process.</p>
				<p>The Graduate School Journal enclosed the research articles endorsed by the Graduate School and approved by the editorial board. Further, the center mediates the GSC personnel in complying with the standards for Scopus, Thomson Reuters, Web of Science Indexability, ASEAN, and other reputable citation indexes for possible external journal publications.</p>

			</div>
			<div class="col-lg-3 text-center">
				<div class="official">
					<div class="official-photo-2">
						<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/khristian.delarama.jpg" alt="Khristian">
					</div>
				</div>
				<p>
					~ <strong>Prof. Khristian Dela Rama</strong> <br>
					<em>Director, Center for Journal Publications</em>
				</p>
			</div>
			
		
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
