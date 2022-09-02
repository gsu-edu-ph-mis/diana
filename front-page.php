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
		<source src="<?php echo get_stylesheet_directory_uri(); ?>/media/home.mp4" type="video/mp4">
	</video>
	<div class="section-video-overlay">
		<h1>Welcome to <?= get_bloginfo( 'name' ); ?></h1>
		<p>Center of Excellence in Education and Green Technology Generation</p>
		<div class="scrolling-nav">
			<a href="#section-features" class="btn btn-sm btn-primary">Why Enroll at GSU?</a>
		</div>
		<a target="_blank" class="btn btn-sm btn-open-video" href="<?php echo get_stylesheet_directory_uri(); ?>/media/home.mp4">
			<svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="white" d="M17,10.5V7A1,1 0 0,0 16,6H4A1,1 0 0,0 3,7V17A1,1 0 0,0 4,18H16A1,1 0 0,0 17,17V13.5L21,17.5V6.5L17,10.5Z" /></svg>
		</a>
	</div>
	<a target="_blank" href="https://journals.gsu.edu.ph"><img style="position: absolute; left:0; bottom:0; width:100%; z-index:1" src="<?php echo get_stylesheet_directory_uri(); ?>/images/journals.jpg" alt=""></a>
</section>

<section id="section-press" class=" pt-5 pb-5" >
	<div class="container">
		<div class="row pt-0 pt-md-5 pb-5">
			<div class="col-md-8 text-left order-2 order-md-1">
				<h2 class="h1 mb-5">News and Updates </h2>
				<div class="row">
					<?php 
					$cat1 = get_category_by_slug( 'bac' );
					$cat2 = get_category_by_slug( 'career' );
					$args = array(
						'post_type' => 'post',
						'post_status' => array('publish'), // As long as it exist, get it
						'numberposts' => 6, // Get all
						'category__not_in' => array(
							$cat1->term_id,
							$cat2->term_id,
						) 
						// 'meta_query' => array(
						// 	array(
						// 		'key'       => '_diana_settings_career',
						// 		'value'     => '"' . $post->post_name . '"',
						// 		'compare'   => 'LIKE'
						// 	)
						// )
					);
					$posts   = get_posts( $args ); // Returns array 
					?>
					<?php
					foreach($posts as $_post):
						// print_r($_post);
					?>
					<div class="col-md-4 mb-4">
						<h3 class="h3"><a href="<?php the_permalink($_post->ID); ?>"><?php echo $_post->post_title; ?></a></h3>
						<p><?php echo diana_get_excerpt($_post->post_content, $_post); ?></p>
					</div>
					<?php 
						endforeach
					?>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<a href="<?php echo home_url(); ?>/news" class="btn btn-light btn-sm btn-outline-primary">More News &raquo;</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 text-left order-1 order-md-2 mb-5 mb-md-0">
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
				<h2 class="counters" style="font-size: 0; min-height: 33.6px;">7</h2>
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
					<a href="<?= home_url('/undergraduate-programs'); ?>" class="btn btn-primary btn-lg">Browse Courses</a>
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
				<p class="text-left">You dont need to leave the island of Guimaras as our campuses are located across the 3 municipalities of the province.</p>
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
				<p class="text-left">Our faculty roster are qualified in their field of expertise and have the highest educational attainment fit for higher education.</p>
				<div class="text-center">
					<a href="<?= home_url('/faculty-roster'); ?>" class="btn btn-primary btn-lg">See Faculty</a>
				</div>
			</div>
			<div class="col-md-6 text-center order-1">
				<a href="<?= home_url('/faculty-roster'); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why-quality-ed.jpg" style="max-width:300px" width="500" height="300" alt="Quality Education">
				</a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
