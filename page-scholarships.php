<?php
/**
 * Template Name: Scholarships
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
				
				<p class="mb-5">Scholarships are coursed through the OSS (Office of Student Services). Scholarships range from half-tuition fee discount to full tuition and miscellaneous fees privilege, and vary in their grade requirements for poor but deserving students, academic achievers, talented student and student leaders.</p>
				<h2 class="h1 mb-3">AY 2021-2022</h2>
			
				<div class="row">
					<div class="col-md-4 bg-white pt-4 pt-md-0">
						<div class="text-center p-3">
							<img style="max-width: 125px" src="<?= get_stylesheet_directory_uri(); ?>/images/scholarships/unifast.jpg" alt="CHED">
						</div>		
						<p>Free Access to Quality Tertiary Education</p>
						<p><strong>Semester:</strong> 1st</p>
						<p><strong>Sponsor:</strong> CHED-UNIFAST</p>
						<p><strong>Amount Per Student:</strong> 13,915 w/ 32 units</p>
						<div>
							<p><strong>Criteria:</strong></p>
							<p>All Filipino undergraduate enrolled in SUC's and CHED-recognized LUCS will enjoy free tuition, miscellaneous, and other school fees, subject to the ff:</p>
							<ul>
								<li>Pass/meet the admission and retention policies of the institution (no age or financial requirements);</li>
								<li>No previous undergraduate degree; and</li>
								<li>Not overstaying at the college level (maximum residency rule plus one-year grace period)</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 bg-white pt-4 pt-md-0">
						<div class="text-center p-3">
							<img style="max-width: 125px" src="<?= get_stylesheet_directory_uri(); ?>/images/scholarships/buenavista.jpg" alt="BTA">	
						</div>		
						<p>Buenavista Municipal Scholarship Program</p>
						<p><strong>Semester:</strong> 1st</p>
						<p><strong>Sponsor:</strong> Municipality of Buenavista</p>
						<p><strong>Amount Per Student:</strong> 7,500 per scholar</p>
						<div>
							<p><strong>Criteria:</strong></p>
							<ul>
								<li>The Municipality of Buenavista through its Municipal Scholarship Committee composed of the Director of Student Development and Services of the GSC, High School Principal, and District Supervisor of District of Buenavista II in the Municipality of Buenavista screened the applicants.</li>
								<li>The applicants must pass the qualifying examination both oral and written given by the Scholarship Committee.</li>
								<li>The list of qualified applicants is submitted to GSC Scholarship Committee.</li>
								<li>The applicants must submit necessary documents required by the GSC Scholarship Committee.</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 bg-white pt-4 pt-md-0">
						<div class="text-center p-3">
							<img style="max-width: 125px" src="<?= get_stylesheet_directory_uri(); ?>/images/scholarships/bfar.jpg" alt="BFAR">	
						</div>		
						<p>Fisheries Scholarship Program (FSP)</p>	
						<p><strong>Semester:</strong> 1st</p>
						<p><strong>Sponsor:</strong> Bureau of Fisheries and Aquatic Resources (BFAR)</p>
						<p><strong>Amount Per Student:</strong> 17,000 / scholar</p>
						<div>
							<p><strong>Criteria:</strong></p>
							<ul>
								<li>Applicants are screened by the BFAR </li>
								<li>In coordination with DepEd and CHED, the FSP-MCU shall conduct the information dissemination process.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
