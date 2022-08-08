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
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/prospero.devera.jpg" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. J. Prospero E. De Vera, III</h3>
							<h4 class="h4">Chairman, Commission on Higher Education</h4>
							<h4 class="h4">Chairman, GSU Board of Regents</h4>
						</div>
						<div class="col-md-6 official">
							<div class="official-photo mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/lilian-parreno.jpg" alt="Lilian">
							</div>
							<h3 class="h3">Hon. Lilian Diana B. Parreño</h3>
							<h4 class="h4">University President</h4>
							<h4 class="h4">Vice Chair, GSU Board of Regents</h4>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-md-6 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/joel.villanueva.jpg" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Joel J. Villanueva</h3>
							<h4 class="h4">Chairman, Committee on Higher, Technical and Vocational Education</h4>
							<h4 class="h4">Member</h4>
							<h4 class="h4">Represented by: <strong>Hon. Luquin Sartorio</strong></h4>
						</div>
						<div class="col-md-6 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/mark.go.jpg" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Mark O. Go</h3>
							<h4 class="h4">Chairman, Committee on Higher and Technical Education of the House of Representatives</h4>
							<h4 class="h4">Member</h4>
							<h4 class="h4">Represented by: <strong>Hon. Congw. Ma. Lucille L. Nava</strong></h4>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/arecio.casing.jpg" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Arecio A. Casing, Jr.</h3>
							<h4 class="h4">Regional Director, National Economic & Development Authority (NEDA) Region VI – Western Visayas</h4>
							<h4 class="h4">Member</h4>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rowen.gelonga.jpg" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Rowen R. Gelonga</h3>
							<h4 class="h4">Regional Director, Department of Science and Technology (DOST) Region VI – Western Visayas
							<h4 class="h4">Member</h4>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/remelyn.recoter.jpg" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Remelyn R. Recoter</h3>
							<h4 class="h4">Regional Director, Department of Agriculture (DA) Region VI – Western Visayas</h4>
							<h4 class="h4">Member</h4>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rebecca.tubongbanua.jpg" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Rebecca C. Tubongbanua</h3>
							<h4 class="h4">Private Sector Representative</h4>
							<h4 class="h4">Member</h4>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/charity.delmo.jpg" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Charity Mae Z. Delmo</h3>
							<h4 class="h4">Private Sector Representative</h4>
							<h4 class="h4">Member</h4>
						</div>
						
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/jonathan.gabion.jpg" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Jonathan G. Gabion</h3>
							<h4 class="h4">President, Federated Faculty Association</h4>
							<h4 class="h4">Member</h4>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/erly.martir.jpg" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Erly M. Martir</h3>
							<h4 class="h4">Representative, Federated Alumni Association</h4>
							<h4 class="h4">Member</h4>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/celine.eulin.jpg" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. Celine D. Eulin</h3>
							<h4 class="h4">President, Federated Student Republic</h4>
							<h4 class="h4">Member</h4>
						</div>
						<!-- <div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" alt="Profile Photo">
							</div>
							<h3 class="h3">Hon. John Kin I. Guzman</h3>
							<h4 class="h4">President, Federated Student Republic</h4>
							<h4 class="h4">Member</h4>
						</div> -->
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/janet.aleman.jpg" alt="Profile Photo">
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
