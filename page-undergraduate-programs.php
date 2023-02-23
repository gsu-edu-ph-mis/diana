<?php
/**
 * Template Name: Undergraduate Programs
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
			<div class="col-md-8 order-2">
				<div class="d-flex justify-content-between justify-content-md-end mb-5" aria-label="Campus">
					<div class="bg-light ">
						<img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-baterna-sm.png" data-toggle="tooltip" title="Baterna" alt="Baterna">	
						Baterna	
					</div>
					<div class="bg-light pl-4">
						<img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-mosqueda-sm.png" data-toggle="tooltip" title="Mosqueda" alt="Mosqueda">	
						Mosqueda	
					</div>
					<div class="bg-light pl-4 pr-2">
						<img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" title="Salvador" alt="Salvador">	
						Salvador	
					</div>
				</div>
				<div id="data-programs" class="data-programs ">
					<div id="cags" class="college-programs">
						<div class="program-header">
							<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CAGS-md.png" alt="">
							<h2 class="h2">College of Agricultural Sciences (CAGS)</h2>
						</div>
						<div class="programs">
							<div>
								<h2 class="h3">Bachelor of Science in Agriculture  <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-baterna-sm.png" data-toggle="tooltip" alt="Baterna" title="Baterna"></h2>
							</div>
							<div>
								<h2 class="h3">Bachelor of Science in Fisheries <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-baterna-sm.png" data-toggle="tooltip" alt="Baterna" title="Baterna"></h2>
							</div>
						</div>
					</div>
					<div id="cas" class="college-programs">
						<div class="program-header">
							<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CAS-md.png" alt="">
							<h2 class="h2">College of Arts and Sciences (CAS)</h2>
						</div>
						<div class="programs">
							<div>
								<h2 class="h3">Bachelor of Arts in English Language <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
							</div>
							<div>
								<h2 class="h3">Bachelor of Public Administration <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
							</div>
						</div>
					</div>
					<div id="cbm" class="college-programs">
						<div class="program-header">
							<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CBM-md.png" alt="">
							<h2 class="h2">College of Business Management (CBM)</h2>
						</div>
						<div class="programs">
							<div>
								<h2 class="h3">Bachelor of Science in Business Administration <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
								<p class="mb-0">Major in: Financial Management, Marketing Management, Human Resource Management </p>
							</div>
							<div>
								<h2 class="h3">Bachelor of Science in Hospitality Management  <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
							</div>
							<div>
								<h2 class="h3">Bachelor of Science in Real Estate Management  <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
							</div>
							<div>
								<h2 class="h3">Bachelor of Science in Entrepreneurship  <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
							</div>
						</div>
					</div>
					<div id="ccje" class="college-programs">
						<div class="program-header">
							<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CCJE-md.png" alt="">
							<h2 class="h2">College of Criminal Justice Education (CCJE)</h2>
							<p class="mb-0">
								<a href="http://www.ccje.gsc.edu.ph/">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" /></svg>
									http://www.ccje.gsc.edu.ph/
								</a>
							</p>	
						</div>
						<div class="programs">
							<div>
								<h2 class="h3">Bachelor of Science in Criminology  <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
							</div>
						</div>
					</div>
					<div id="ceit" class="college-programs">
						<div class="program-header">
							<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CEIT-md.png" alt="">
							<h2 class="h2">College of Engineering and Industrial Technology (CEIT)</h2>
						</div>
						<div class="programs">
							<div>
								<h2 class="h3">Bachelor in Industrial Technology  <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
								<p class="mb-0">Major in: Automotive Technology, Electricity Technology, Electronics Technology, Mechanical Technology</p>
							</div>
							<div>
								<h2 class="h3">Bachelor of Science in Mechanical Engineering  <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
							</div>
							<div>
								<h2 class="h3">Bachelor of Science in Electrical Engineering  <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
							</div>
						</div>
					</div>
					<div id="cst" class="college-programs">
						<div class="program-header">
							<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CST-md.png" alt="">
							<h2 class="h2">College of Science and Technology (CST)</h2>
							<p class="mb-0">
								<a href="http://www.cst.gsc.edu.ph/">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" /></svg>
									http://www.cst.gsc.edu.ph/
								</a>
							</p>
						</div>
						<div class="programs">
							<div>
								<h2 class="h3">Bachelor of Science in Information Technology  <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-mosqueda-sm.png" data-toggle="tooltip" alt="Mosqueda" title="Mosqueda"></h2>
							</div>
							<div>
								<h2 class="h3">Bachelor of Science in Computer Science  <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-mosqueda-sm.png" data-toggle="tooltip" alt="Mosqueda" title="Mosqueda"></h2>
							</div>
							<div>
								<h2 class="h3">Bachelor of Science in Information System  <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-mosqueda-sm.png" data-toggle="tooltip" alt="Mosqueda" title="Mosqueda"></h2>
							</div>
							<div>
								<h2 class="h3">Bachelor of Science in Food Technology   <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-mosqueda-sm.png" data-toggle="tooltip" alt="Mosqueda" title="Mosqueda"></h2>
							</div>
						</div>
					</div>
					<div id="cte" class="college-programs">
						<div class="program-header">
							<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CTE-md.png" alt="">
							<h2 class="h2">College of Teacher Education (CTE)</h2>
						</div>
						<div class="programs">
							<div>
								<h2 class="h3">Bachelor of Secondary Education <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
								<p class="mb-0">Major in: English,        Mathematics,        Filipino,        Science,        Social Science </p>
							</div>
							<div>
								<h2 class="h3">Bachelor of Elementary Education Major in General Education <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
							</div>
							<div>
								<h2 class="h3">Bachelor of Technology and Livelihood Education Major in Home Economics and Livelihood Education <img src="<?= get_stylesheet_directory_uri(); ?>/images/campus-salvador-sm.png" data-toggle="tooltip" alt="Salvador" title="Salvador"></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 order-1 mb-5">
				<nav class="page-sub-menu college-menu scrolling-nav mb-5">
					<ul>
						<li>
							<a href="#cags" class="d-flex align-items-center" style="line-height: 1.2">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CAGS-sm.png" width="60" height="60" alt="">
								<span>College of Agricultural Sciences (CAGS)</span>
							</a>
						</li>
						<li>
							<a href="#cas" class="d-flex align-items-center" style="line-height: 1.2">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CAS-sm.png" width="60" height="60" alt="">
								<span>College of Arts and Sciences (CAS)</span>
							</a>
						</li>
						<li>
							<a href="#cbm" class="d-flex align-items-center" style="line-height: 1.2">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CBM-sm.png" width="60" height="60" alt="">
								<span>College of Business Management (CBM)</span>
							</a>
						</li>
						<li>
							<a href="#ccje" class="d-flex align-items-center" style="line-height: 1.2">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CCJE-sm.png" width="60" height="60" alt="">
								<span>College of Criminal Justice Education (CCJE)</span>
							</a>
						</li>
						<li>
							<a href="#ceit" class="d-flex align-items-center" style="line-height: 1.2">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CEIT-sm.png" width="60" height="60" alt="">
								<span>College of Engineering and Industrial Technology (CEIT)</span>
							</a>
						</li>
						<li>
							<a href="#cst" class="d-flex align-items-center" style="line-height: 1.2">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CST-sm.png" width="60" height="60" alt="">
								<span>College of Science and Technology (CST)</span>
							</a>
						</li>
						<li>
							<a href="#cte" class="d-flex align-items-center" style="line-height: 1.2">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CTE-sm.png" width="60" height="60" alt="">
								<span>College of Teacher Education (CTE)</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
