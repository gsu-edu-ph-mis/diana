<?php
/**
 * Template Name: Contact Us
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
					
					<div class="row mb-5">
						<div class="col-md-4 text-center mb-5">
							<div class="mb-3">
								<a href="https://www.facebook.com/GuimarasStateUniversity"><img src="<?= get_stylesheet_directory_uri(); ?>/images/logo-gsu.png" width="200" height="200" alt="PresOff"></a>
							</div>
							<h3 class="h3">Guimaras State University</h3>
							<h3 class="h4">
								<a href="mailto:university.president@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									university.president@gsu.edu.ph
								</a>
							</h3><h3 class="h4">
								<a href="https://www.facebook.com/GuimarasStateUniversity">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" />						</svg>
									GuimarasStateUniversity
								</a>
							</h3>
						</div>
						<div class="col-md-4 text-center mb-5">
							<div class="mb-3">
								<a href="https://www.facebook.com/Talk2ICTO"><img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/icto.png" width="200" height="200" alt="ICTO"></a>
							</div>
							<h3 class="h3">Information and Communications Technology Office</h3>
							<!-- <h3 class="h4"><a href="tel:+639158520498">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" /></svg> 
									+63 915 852 0498
								</a>
							</h3> -->
							<!-- <h3 class="h4"><a href="tel:+639158520488">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" /></svg> 
									+63 915 852 0488
								</a>
							</h3> -->
							<h3 class="h4">
								<a href="mailto:ict@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									ict@gsu.edu.ph 
								</a>
							</h3><h3 class="h4">
								<a href="https://www.facebook.com/Talk2ICTO">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">							<path fill="currentColor" d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" />						</svg>
									Talk2ICTO 
								</a>
							</h3>
						</div>
						<div class="col-md-4 text-center mb-5">
							<div class="mb-3">
								<a href="https://www.facebook.com/GradSchoolPage"><img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/gradschool.png" width="200" height="200" alt="GradSchool"></a>
							</div>
							<h3 class="h3">Graduate School</h3>
							<h3 class="h4">
								<a href="mailto:graduateschool@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									graduateschool@gsu.edu.ph
								</a>
							</h3>
							<h3 class="h4">
								<a href="https://www.facebook.com/GradSchoolPage">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" />						</svg>
									GradSchoolPage 
								</a>
							</h3>
							
						</div>
						<div class="col-md-4 text-center mb-5">
							<div class="mb-3">
								<a href="https://www.facebook.com/cstofficial2016"><img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CST.png" width="200" height="200" alt="CST"></a>
							</div>
							<h3 class="h3">College of Science and Technology</h3>
							<h3 class="h4">
								<a href="mailto:new.cst@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									new.cst@gsu.edu.ph
								</a>
							</h3>
							<h3 class="h4">
								<a href="https://www.facebook.com/cstofficial2016">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" />						</svg>
									cstofficial2016 
								</a>
							</h3>
							
						</div>
					</div>
				</div>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
