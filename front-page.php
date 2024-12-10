<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Diana
 * subpackage Diana 1.0
 */

get_header(); ?>
<section class="section section-video">
	<video autoplay muted loop id="homeVideo" class="video">
		<source src="https://videos-gsu-ph.s3.ap-southeast-1.amazonaws.com/stream-home.mp4" type="video/mp4">
	</video>
	<div class="video-roll">
		<div>
			<a href="<?php echo home_url(); ?>/videos"><img src="<?php echo get_stylesheet_directory_uri(); ?>/media/stream-gsu-hymn.jpg" alt=""></a>
			<!-- <div>GSU Hymn</div> -->
		</div>
		<div>
			<a href="<?php echo home_url(); ?>/videos"><img src="<?php echo get_stylesheet_directory_uri(); ?>/media/stream-gsu-the-prayer.jpg" alt=""></a>
			<!-- <div>The Prayer</div> -->
		</div>
		<button class="btn btn-videos" type="button">
			<svg width="28px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M8.16,3L6.75,4.41L9.34,7H4C2.89,7 2,7.89 2,9V19C2,20.11 2.89,21 4,21H20C21.11,21 22,20.11 22,19V9C22,7.89 21.11,7 20,7H14.66L17.25,4.41L15.84,3L12,6.84L8.16,3M4,9H17V19H4V9M19.5,9A1,1 0 0,1 20.5,10A1,1 0 0,1 19.5,11A1,1 0 0,1 18.5,10A1,1 0 0,1 19.5,9M19.5,12A1,1 0 0,1 20.5,13A1,1 0 0,1 19.5,14A1,1 0 0,1 18.5,13A1,1 0 0,1 19.5,12Z" /></svg>
			<svg width="28px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
		</button>
	</div>
</section>

<section id="section-journals" class="section-journals">
	<svg id="wave" style="position: absolute; left: 0; right: 0; bottom: 100%; transform: translateY(5px); z-index: 1" viewBox="0 0 1440 120" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(0, 25, 104, 1)" offset="0%"></stop><stop stop-color="rgba(0, 25, 104, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1; fill: #4bb29d" fill="url(#sw-gradient-0)" d="M0,36L48,40C96,44,192,52,288,64C384,76,480,92,576,94C672,96,768,84,864,82C960,80,1056,88,1152,90C1248,92,1344,88,1440,82C1536,76,1632,68,1728,58C1824,48,1920,36,2016,44C2112,52,2208,80,2304,76C2400,72,2496,36,2592,26C2688,16,2784,32,2880,36C2976,40,3072,32,3168,32C3264,32,3360,40,3456,40C3552,40,3648,32,3744,24C3840,16,3936,8,4032,6C4128,4,4224,8,4320,20C4416,32,4512,52,4608,58C4704,64,4800,56,4896,60C4992,64,5088,80,5184,80C5280,80,5376,64,5472,50C5568,36,5664,24,5760,24C5856,24,5952,36,6048,40C6144,44,6240,40,6336,32C6432,24,6528,12,6624,22C6720,32,6816,64,6864,80L6912,96L6912,120L6864,120C6816,120,6720,120,6624,120C6528,120,6432,120,6336,120C6240,120,6144,120,6048,120C5952,120,5856,120,5760,120C5664,120,5568,120,5472,120C5376,120,5280,120,5184,120C5088,120,4992,120,4896,120C4800,120,4704,120,4608,120C4512,120,4416,120,4320,120C4224,120,4128,120,4032,120C3936,120,3840,120,3744,120C3648,120,3552,120,3456,120C3360,120,3264,120,3168,120C3072,120,2976,120,2880,120C2784,120,2688,120,2592,120C2496,120,2400,120,2304,120C2208,120,2112,120,2016,120C1920,120,1824,120,1728,120C1632,120,1536,120,1440,120C1344,120,1248,120,1152,120C1056,120,960,120,864,120C768,120,672,120,576,120C480,120,384,120,288,120C192,120,96,120,48,120L0,120Z"></path></svg>
	<div class="journals">
		<h2 class="h3 pt-4 text-white ml-2 mr-3 d-none d-md-block">Research Journals</h2>
		<div class="journal journal-1">
			<a target="_blank" href="https://journals.gsu.edu.ph/himal-us/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/journal-1.jpg" alt="journal"></a>
		</div>
		<div class="journal journal-2">
			<a target="_blank" href="https://journals.gsu.edu.ph/the-graduate-school-journal/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/journal-2.jpg" alt="journal"></a>
		</div>
		<div class="journal journal-3">
			<a target="_blank" href="https://journals.gsu.edu.ph/higher-education-research-review/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/journal-3.jpg" alt="journal"></a>
		</div>
	</div>
</section>
<section id="section-press" class=" pt-5 pb-5" >
	<div class="container">
		<div class="row">
		<div class="col-md-12 mee">
				<h2 class="h1 mb-5 d-flex">
					<span>News and Updates </span>
				</h2>
				<h2 class="h2 mb-1 text-center">
					<span>Featured News</span>
				</h2>
				<!-- Featured -->
				<div id="featured-swiper" class="swiper mb-5">
					<div class="swiper-wrapper">
						<?php 
						$cat1 = get_category_by_slug( 'bac' );
						$cat2 = get_category_by_slug( 'career' );
						$args = array(
							'post_type' => 'post',
							'post_status' => array('publish'), // As long as it exist, get it
							'numberposts' => -1, // Get all
							'post__in' => get_option('sticky_posts'),
							'category__not_in' => array(
								@$cat1->term_id,
								@$cat2->term_id,
							) 
						);
						$posts   = get_posts( $args ); // Returns array 
						?>
						<?php
						foreach($posts as $_post):
							// print_r($_post);
						?>
						<div class="swiper-slide">
							<?= diana_get_featured_image(get_post_thumbnail_id($_post->ID), 'medium', 'Image', 'border: 2px solid teal;'); ?>
							<h3 class="h3 p-4"><a href="<?= get_permalink($_post->ID); ?>"><?php echo $_post->post_title; ?></a></h3>
						</div>
						<?php endforeach; ?>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</div>
		<div class="row pt-0 pt-md-5 pb-5">
			
			<div class="col-md-9 text-left order-2 order-md-1">
				<h2 class="h2 mb-4">
					<span>News and Updates</span>
				</h2>
				<div class="form-row">
					<?php 
					$cat1 = get_category_by_slug( 'bac' );
					$cat2 = get_category_by_slug( 'career' );
					$args = array(
						'post_type' => 'post',
						'post_status' => array('publish'), // As long as it exist, get it
						'numberposts' => 10, // Get all
						'post__not_in'   => get_option('sticky_posts'),
						'category__not_in' => array(
							@$cat1->term_id,
							@$cat2->term_id,
						) 
					);
					$posts   = get_posts( $args ); // Returns array 
					?>
					<?php
					foreach($posts as $_post):
						// print_r($_post);
					?>
					<div class="col-md-6 text-center text-md-left mb-4">
						<div class="form-row">
							<div class="col-md-12 col-xl-5 mb-3 text-md-left">
								<a class="d-block" href="<?= get_permalink($_post->ID); ?>"><?= diana_get_featured_image(get_post_thumbnail_id($_post->ID), 'medium', 'Image', 'border: 2px solid teal;'); ?></a>
							</div>
							<div class="col-md-12 col-xl-7 mb-3">
								<h3 class="h3 mb-3"><a href="<?= get_permalink($_post->ID); ?>"><?php echo $_post->post_title; ?></a></h3>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<a href="<?php echo home_url(); ?>/news" class="btn btn-lg btn-primary">More News &raquo;</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-left order-1 order-md-2 mb-5 mb-md-0">
				<div class="row">
					<div class="col-5 col-md-12 order-2 order-md-1">
						<img srcset="<?= get_stylesheet_directory_uri(); ?>/images/opres-200w.png 200w,
							<?= get_stylesheet_directory_uri(); ?>/images/opres.png 334w"
						sizes="(max-width: 576px) 200px,
								334x"
						src="<?php echo get_stylesheet_directory_uri(); ?>/images/opres.png"
						alt="The President">

					</div>
					<div class="col-7 col-md-12 text-center order-1 order-md-2">
						<h3 class="h1 mb-4">Office of the President</h3>
						<a href="<?php echo home_url(); ?>/office-of-the-president/" class="btn btn-primary">The President's Message</a>
					</div>
				</div>
				<div class="row pt-5">
					<div class="col-md-12 pt-5">
						<a href="<?php echo home_url(); ?>/sustainable-development-goals/"><img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/E_SDG_logo_UN_emblem_square_trans_WEB.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="section-counters" class="section section-subfooter pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-6 text-white text-center mb-4">
				<div class="mb-2">
					<svg style="width:64px;height:64px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M21 10H17V8L12.5 6.2V4H15V2H11.5V6.2L7 8V10H3C2.45 10 2 10.45 2 11V22H10V17H14V22H22V11C22 10.45 21.55 10 21 10M8 20H4V17H8V20M8 15H4V12H8V15M12 8C12.55 8 13 8.45 13 9S12.55 10 12 10 11 9.55 11 9 11.45 8 12 8M14 15H10V12H14V15M20 20H16V17H20V20M20 15H16V12H20V15Z" />
					</svg>
				</div>
				<h2 class="counters" style="font-size: 0; min-height: 33.6px;">3</h2>
				<h3 class="h2">Campuses</h3>
			</div>
			<div class="col-md-3 col-6 text-white text-center mb-4">
				<div class="mb-2">
					<svg style="width:64px;height:64px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M12 3L1 9L5 11.18V17.18L12 21L19 17.18V11.18L21 10.09V17H23V9L12 3M18.82 9L12 12.72L5.18 9L12 5.28L18.82 9M17 16L12 18.72L7 16V12.27L12 15L17 12.27V16Z" />
					</svg>
				</div>
				<h2 class="counters" style="font-size: 0; min-height: 33.6px;">9</h2>
				<h3 class="h2">Colleges</h3>
			</div>
			<div class="col-md-3 col-6 text-white text-center mb-4">
				<div class="mb-2">
					<svg style="width:64px;height:64px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M22,21H2V3H4V15.54L9.5,6L16,9.78L20.24,2.45L21.97,3.45L22,21Z" />
					</svg>
				</div>
				<h2 class="counters" style="font-size: 0; min-height: 33.6px;">12</h2>
				<h3 class="h2">Hectares Landholding</h3>
			</div>
			<div class="col-md-3 col-6 text-white text-center mb-4">
				<div class="mb-2">
					<svg style="width:64px;height:64px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M18,22A2,2 0 0,0 20,20V4C20,2.89 19.1,2 18,2H12V9L9.5,7.5L7,9V2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18Z" />
					</svg>
				</div>
				<h2 class="counters" style="font-size: 0; min-height: 33.6px;">28</h2>
				<h3 class="h2">Programs Offered</h3>
			</div>
		</div>
	</div>
</section>
<section id="section-features" class="pt-5 pb-5" >
	<div class="container">
		<div class="row pt-5 pb-5">
			<div class="col-md-12 text-center">
				<h2 class="mb-5">Why Enroll Here?</h2>
			</div>
		</div>
		
		<div class="row pt-5 pb-5 mb-5">
			<div class="col-md-6 pt-md-5 mb-4 order-2 order-md-1">
				<h3 class="h1 mb-3">Courses</h3>
				<p class="text-left">Choose from a multitude of undergraduate and graduate programs that <?= get_bloginfo( 'name' ); ?> has to offer.</p>
				<div class="text-center">
					<a href="<?= home_url('/academic-programs'); ?>" class="btn btn-primary btn-lg">Browse Courses</a>
				</div>
			</div>
			<div class="col-md-6 mb-5 text-center order-1 order-md-2">
				<a href="<?= home_url('/undergraduate-programs'); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why-courses.jpg" style="max-width:250px" alt="Courses">
				</a>
			</div>
		</div>
		<div class="row pt-5 pb-5 mb-5">
			<div class="col-md-6 mb-5 order-2">
				<h3 class="h1 mb-3">Scholarships</h3>
				<p class="text-left">We offer scholarships to help you finance your college education and a chance for a brighter future.</p>
				<div class="text-center">
					<a href="<?= home_url('/scholarships'); ?>" class="btn btn-primary btn-lg">View Scholarships</a>
				</div>
			</div>
			<div class="col-md-6 mb-5 text-center order-1">
				<a href="<?= home_url('/scholarships'); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why-scholarships.jpg" style="max-width:250px" width="318" height="199" alt="Scholarships">
				</a>
			</div>
		</div>
		<div class="row pt-5 pb-5 mb-5">
			<div class="col-md-6 mb-4 order-md-1 order-2">
				<h3 class="h1 mb-3">Accessibility</h3>
				<p class="text-left">There is no need to leave the island of Guimaras as our campuses are located across the 3 municipalities of the province.</p>
				<div class="text-center">
					<a href="<?= home_url('/map'); ?>" class="btn btn-primary btn-lg">Open Map</a>
				</div>
			</div>
			<div class="col-md-6 mb-5 text-center order-md-2 order-1">
				<a href="<?= home_url('/map'); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why-accessibility.jpg" style="max-width:300px" width="400" height="314" alt="Accessibility">
				</a>
			</div>
		</div>
		<div class="row pt-5 pb-5 mb-5">
			<div class="col-md-6 pt-5 order-2">
				<h3 class="h1 mb-3">Quality Education</h3>
				<p class="text-left">Our faculty members are highly qualified in their respective fields of expertise and possess the highest level of educational attainment.</p>
				<div class="text-center">
					<a href="<?= home_url('/faculty-roster'); ?>" class="btn btn-primary btn-lg">See Faculty</a>
				</div>
			</div>
			<div class="col-md-6 text-center order-1">
				<a href="<?= home_url('/faculty-roster'); ?>">
					<div id="faculty-roster" class="faculty-roster">
						<div class="heads">
							<div class="scene">
								<div class="coin coin-1">
									<div class="front">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/adrian.alumbro.jpg" alt="Flip Photo" width="250" height="250">
									</div>
									<div class="back">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/adora.gabayoyo.jpg" alt="Flip Photo" width="250" height="250">
									</div>
								</div>
							</div>
							
							<div class="scene">
								<div class="coin coin-2">
									<div class="front">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/adrian.forca.jpg" alt="Flip Photo" width="250" height="250">
									</div>
									<div class="back">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/agatha.norilla.jpg" alt="Flip Photo" width="250" height="250">
									</div>
								</div>
							</div>

							<div class="scene">
								<div class="coin coin-3">
									<div class="front">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/aizle.eres.jpg" alt="Flip Photo" width="250" height="250">
									</div>
									<div class="back">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/allan.david.jpg" alt="Flip Photo" width="250" height="250">
									</div>
								</div>
							</div>

							<div class="scene">
								<div class="coin coin-4">
									<div class="front">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/anthony.jalandoon.jpg" alt="Flip Photo" width="250" height="250">
									</div>
									<div class="back">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/aziel.estilo.jpg" alt="Flip Photo" width="250" height="250">
									</div>
								</div>
							</div>

							<div class="scene">
								<div class="coin coin-5">
									<div class="front">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/divon.tamdang.jpg" alt="Flip Photo" width="250" height="250">
									</div>
									<div class="back">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/donnavie.loriezo.jpg" alt="Flip Photo" width="250" height="250">
									</div>
								</div>
							</div>

							<div class="scene">
								<div class="coin coin-6">
									<div class="front">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/ellyn.maramento.jpg" alt="Flip Photo" width="250" height="250">
									</div>
									<div class="back">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/erly.martir.jpg" alt="Flip Photo" width="250" height="250">
									</div>
								</div>
							</div>

							<div class="scene">
								<div class="coin coin-7">
									<div class="front">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/jasmin.gadian.jpg" alt="Flip Photo" width="250" height="250">
									</div>
									<div class="back">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/ervin.isogon.jpg" alt="Flip Photo" width="250" height="250">
									</div>
								</div>
							</div>

							<div class="scene">
								<div class="coin coin-8">
									<div class="front">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/ivony.asprilla.jpg" alt="Flip Photo" width="250" height="250">
									</div>
									<div class="back">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/jed.sorolla.jpg" alt="Flip Photo" width="250" height="250">
									</div>
								</div>
							</div>

							<div class="scene">
								<div class="coin coin-9">
									<div class="front">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/rheajoy.flora.jpg" alt="Flip Photo" width="250" height="250">
									</div>
									<div class="back">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/reynro.herrera.jpg" alt="Flip Photo" width="250" height="250">
									</div>
								</div>
							</div>

							<div class="scene">
								<div class="coin coin-10">
									<div class="front">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/joan.gerada.jpg" alt="Flip Photo" width="250" height="250">
									</div>
									<div class="back">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/joel.japitana.jpg" alt="Flip Photo" width="250" height="250">
									</div>
								</div>
							</div>


							<div class="scene">
								<div class="coin coin-11">
									<div class="front">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/monaliza.sollano.jpg" alt="Flip Photo" width="250" height="250">
									</div>
									<div class="back">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/rome.moralista.jpg" alt="Flip Photo" width="250" height="250">
									</div>
								</div>
							</div>

							<div class="scene">
								<div class="coin coin-12">
									<div class="front">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/french.edang.jpg" alt="Flip Photo" width="250" height="250">
									</div>
									<div class="back">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/ruben.habana.jpg" alt="Flip Photo" width="250" height="250">
									</div>
								</div>
							</div>

							<div class="scene">
								<div class="coin coin-13">
									<div class="front">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/rosabeth.arturo.jpg" alt="Flip Photo" width="250" height="250">
									</div>
									<div class="back">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/rey.arturo.jpg" alt="Flip Photo" width="250" height="250">
									</div>
								</div>
							</div>

							<div class="scene">
								<div class="coin coin-14">
									<div class="front">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/reiner.alminaza.jpg" alt="Flip Photo" width="250" height="250">
									</div>
									<div class="back">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/gerald.gamo.jpg" alt="Flip Photo" width="250" height="250">
									</div>
								</div>
							</div>

							<div class="scene">
								<div class="coin coin-15">
									<div class="front">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/lovely.egael.jpg" alt="Flip Photo" width="250" height="250">
									</div>
									<div class="back">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officials/julieta.infante.jpg" alt="Flip Photo" width="250" height="250">
									</div>
								</div>
							</div>


						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
