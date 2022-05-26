<?php
/**
 * Template Name: History
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
			<div class="col-md-9 order-1 order-md-2 mb-5">
				<p class="mb-5 p-0 p-md-4">Guimaras State College has its humble beginning as a secondary vocational institution, the Buenavista Vocational School (BVS), which was created by virtue of Republic Act 3933 in 1964 with Representative Rodolfo Ganzon of the 2nd District of Iloilo as the principal sponsor.</p>
				<h2 class="text-center mb-5 pb-3">Timeline</h2>
				<div class="timeline mb-5">
					<div class="event">
						<h2 class="h2">1962</h2>
						<p>The establishment of BVS was the culmination of the efforts of many local officials starting with Hon. Tomas Junco, who sponsored a resolution requesting the statesmen in Congress to establish a vocational school in Buenavista in 1962. </p>
					</div>
					<div class="important event right">
						<h2 class="h2">1964</h2>
						<p>With the passage of Republic Act 3933 in 1964, Congressman Fermin Caram of the Lone District of Iloilo City exerted effort for the implementation of the law.</p>
					</div>
					<div class="event">
						<h2 class="h2">1968</h2>
						<p>Four years after, through the efforts of Atty. Ernesto Gaduyon and Governor Abelardo Javellana, the philanthropist, Atty. Juan Salvador, donated 50,000 square meter lot of his estate in Barangay Mclain, Buenavista, Guimaras, to be the school site.</p>
					</div>
					<div class="event right">
						<h2 class="h2">1980</h2>
						<p>In 1980, the school was granted a permit to offer post-secondary courses. The two-year trade technical and technology courses paved the way for the offering of higher education courses, which are either terminal or ladderized courses. </p>
					</div>
					<div class="event">
						<h2 class="h2">1992</h2>
						<p> In 1992, the Sangguniang Bayan of Buenavista passed a resolution requesting Representative Alberto Lopez of the second district of Iloilo to work for the conversion of BVS to Guimaras Polytechnic College.</p>
					</div>
					<div class="event right">
						<h2 class="h2">1994</h2>
						<p>In July 1994, Representative Lopez filed House Bill 6252 in Congress seeking the conversion of the BVS into a Polytechnic College.</p>
					</div>
					<div class="important event">
						<h2 class="h2">1995</h2>
						<p>In March 1995, President Fidel V. Ramos signed into law Republic Act 7944, paving the way for the conversion of Buenavista Vocational School into Guimaras Polytechnic College.</p>
					</div>
					<div class="event right">
						<h2 class="h2">2000</h2>
						<p>In June 2000, a consultation and public hearing on House Bill nos. 7382 and 5807 sponsored by Representative Emily R. Lopez of the Lone District of Guimaras was conducted at the GPC Function Room. </p>
						<p>With 179 registered participants from public and private sectors in attendance, all sectoral representatives expressed full support for the conversion of GPC, Buenavista and West Visayas College of Science and Technology (WVCST)-Mosqueda Campus in the Municipality of Jordan, into a State College.</p>
					</div>
					<div class="important event">
						<h2 class="h2">2001</h2>
						<p>Then, in the eleventh congress first regular session, Congressman Dante V. Liban and Congresswoman Emily R. Lopez filed House Bill 12358 (in substitution of House Bills 5807 & 7382). </p>
						<p>On June 8, 2001, the long cherished dream of GPC community became a reality with the signing into law by President Gloria M. Arroyo of Republic Act 9138, establishing the Guimaras State College, integrating therewith the Guimaras Polytechnic College in the Municipality of Buenavista, and the Western Visayas College of Science and Technology – Guimaras Extension in the Municipality of Jordan. </p>

						<p>GSC is mandated to offer undergraduate and graduate courses in technology education, agriculture, fishery, engineering, arts and sciences, forestry, business, health, computer, criminology, nautical and short-term vocational-technical and other continuing courses that may be found to be needed and relevant.</p>
					</div>
				</div>
				<p class="h1 text-center text-md-left p-0 p-md-5">At last, Guimarasnons have the opportunity to be educated and become professionals right in their own turf, spending less for quality education.</p>
			</div>
			<div class="col-md-3 order-2 order-md-1 mb-4">
				<nav class="page-sub-menu text-center scrolling-nav mb-5">
					<ul>
						<li class="current"><a href="<?= home_url(); ?>/brief-history">Brief History</a></li>
						<li><a href="<?= home_url(); ?>/the-mandate">The Mandate</a></li>
						<li><a href="<?= home_url(); ?>/vision-mission-goals">Vision, Mission and Goals</a></li>
						<li><a href="<?= home_url(); ?>/quality-policy">Quality Policy</a></li>
						<li><a href="<?= home_url(); ?>/hymn">Hymn</a></li>
						<li><a href="<?= home_url(); ?>/map">Map</a></li>
					</ul>
				</nav>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
