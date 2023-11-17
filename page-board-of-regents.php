<?php
/**
 * Template Name: Board of Regents
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
				<div class="college mb-5 pb-5">
					<div class="row mb-5 align-items-end">
						
						<div class="col-md-6 official">
							<div class="official-photo mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/prospero.devera.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. J. Prospero E. De Vera, III</h3>
							<h4 class="h4">Chairman, Commission on Higher Education</h4>
							<h4 class="h5">Chairman, GSU Board of Regents</h4>
						</div>
						<div class="col-md-6 official">
							<div class="official-photo mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/lilian-parreno.jpg" width="250" height="250" alt="Lilian">
							</div>
							<h3 class="h3">Hon. Lilian Diana B. Parreño</h3>
							<h4 class="h4">University President</h4>
							<h4 class="h5">Vice Chair, GSU Board of Regents</h4>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-md-6 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/chiz.escudero.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Francis "Chiz" G. Escudero</h3>
							<h4 class="h4">Chairman, Senate Committee on Higher and Technical Education</h4>
							<h4 class="h5">Member</h4>
							<h4 class="h4">Represented by: <strong>Hon. Rani E. Rodriguez</strong></h4>
						</div>
						<div class="col-md-6 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/mark.go.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Mark O. Go</h3>
							<h4 class="h4">Chairman, Committee on Higher and Technical Education of the House of Representatives</h4>
							<h4 class="h5">Member</h4>
							<h4 class="h4">Represented by: <strong>Hon. Congw. Ma. Lucille L. Nava</strong></h4>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/arecio.casing.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Arecio A. Casing, Jr.</h3>
							<h4 class="h4">Regional Director, National Economic & Development Authority (NEDA) Region VI – Western Visayas</h4>
							<h4 class="h5">Member</h4>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rowen.gelonga.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Rowen R. Gelonga</h3>
							<h4 class="h4">Regional Director, Department of Science and Technology (DOST) Region VI – Western Visayas
							<h4 class="h5">Member</h4>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/dennis.arpia.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Dennis R. Arpia</h3>
							<h4 class="h4">Regional Executive Director, Department of Agriculture (DA) Region VI – Western Visayas</h4>
							<h4 class="h5">Member</h4>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/dionne.fernandez.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Dionne B. Fernandez</h3>
							<h4 class="h4">Private Sector Representative</h4>
							<h4 class="h5">Member</h4>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/sanie.ong.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Sanie D. Ong</h3>
							<h4 class="h4">Private Sector Representative</h4>
							<h4 class="h5">Member</h4>
						</div>
						
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/vizur.gaitano.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Vizur-Ty C. Gaitano</h3>
							<h4 class="h4">Representative, Federated Alumni Association</h4>
							<h4 class="h5">Member</h4>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/erly.martir.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Erly M. Martir</h3>
							<h4 class="h4">President, Federated Faculty Association</h4>
							<h4 class="h5">Member</h4>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/axyl.gadian.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Axyl Rose T. Gadian</h3>
							<h4 class="h4">President, Federated Student Republic</h4>
							<h4 class="h5">Member</h4>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/janet.aleman.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Mrs. Janet R. Aleman</h3>
							<h4 class="h4">University Board Secretary</h4>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
