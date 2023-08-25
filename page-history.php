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
						<p><img src="<?= get_stylesheet_directory_uri(); ?>/images/history/munofficials1962.jpg" alt=""></p>
						<p>The establishment of BVS was the culmination of the efforts of many local officials starting with Hon. Tomas Junco, who sponsored a resolution requesting the statesmen in Congress to establish a vocational school in Buenavista in 1962. </p>
					</div>
					<div class="event right">
						<h2 class="h2">1964</h2>
						<p>With the passage of Republic Act 3933 in 1964, Congressman Fermin Caram of the Lone District of Iloilo City exerted effort for the implementation of the law.</p>
					</div>
					<div class="important event">
						<h2 class="h2">1968</h2>
						<p><img src="<?= get_stylesheet_directory_uri(); ?>/images/history/marker1968.jpg" alt=""></p>
						<p>Four years later, through the efforts of Atty. Ernesto Gaduyon and Governor Abelardo Javellana, the philanthropist Atty. Juan Salvador donated a 50,000-square-meter lot from his estate in Barangay Mclain, Buenavista, Guimaras, to serve as the school site. As a result, Buenavista Vocational School was officially opened.</p>
					</div>
					<div class="event right">
						<h2 class="h2">1980</h2>
						<p>In 1980, the school was granted a permit to offer post-secondary courses. The two-year trade technical and technology courses paved the way for the offering of higher education courses, which include both terminal and ladderized programs.</p>
					</div>
					<div class="event">
						<h2 class="h2">1992</h2>
						<p>In 1992, the Sangguniang Bayan of Buenavista passed a resolution requesting Representative Alberto Lopez from the second district of Iloilo to work towards the conversion of Buenavista Vocational School into Guimaras Polytechnic College.</p>
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
						<p>In June 2000, Representative Emily R. Lopez of the Lone District of Guimaras held a consultation and public hearing on House Bills 7382 and 5807. 179 public and private sector representatives supported the conversion of GPC, Buenavista, and Western Visayas College of Science and Technology (WVCST)-Mosqueda Campus in Jordan into a State College.</p>
					</div>
					<div class="important event">
						<h2 class="h2">2001</h2>
						<p>Dante V. Liban and Emily R. Lopez filed House Bill 12358 in the eleventh Congress' first regular session (in substitution of House Bills 5807 & 7382). </p>
						<p>On June 8, 2001, President Gloria M. Arroyo signed Republic Act 9138, creating the Guimaras State College by merging the Guimaras Polytechnic College in Buenavista and the Western Visayas College of Science and Technology - Guimaras Extension in Jordan.</p>
					</div>
					<div class="event right">
						<h2 class="h2">2012</h2>
						<p><a target="_blank" href="<?= get_stylesheet_directory_uri(); ?>/files/HB06634.pdf"><img src="<?= get_stylesheet_directory_uri(); ?>/images/history/HB06634.jpg" alt="HB06634"></a><br>The 15th Congress enacted House Bill 06634 (An Act Converting the Guimaras State College in The Province of Guimaras Into a State University to Be Known as The Guimaras State University and Appropriating Funds Therefor) by former Congressman Joaquin Carlos Rahman Nava.</p>
					</div>
					<div class="event ">
						<h2 class="h2">2014</h2>
						<p>Cong. Rahman Nava refiled HB 05181 in the 16th Congress, which the House approved and sent to the Senate in December 2014.</p>
						<p>17th Congress - Hon. Ma. Lucille Ledesma Nava sponsored HB 07953 to convert GSC to GSU.</p>
					</div>
					<div class="event right">
						<h2 class="h2">2019</h2>
						<p><a target="_blank" href="<?= get_stylesheet_directory_uri(); ?>/files/20190426-RA-11335-RRD.pdf"><img src="<?= get_stylesheet_directory_uri(); ?>/images/history/20190426-RA-11335-RRD.jpg" alt="20190426-RA-11335-RRD"></a> <br> President Rodrigo R. Duterte signed Republic Act 11335 on April 26, 2019.</p>
					</div>
					<div class="important event">
						<h2 class="h2">2022</h2>
						<p>In June 7, 2022, the CHED Commission en Banc confirmed the conversion of Guimaras State College into Guimaras State University.</p>
					</div>
				</div>
				<p class="h1 text-center text-md-left p-0 p-md-5">At last, the people of Guimaras have the chance to get educated and become professionals right in their own locale, spending less for quality education.</p>
			</div>
			<div class="col-md-3 order-2 order-md-1 mb-4">
				<nav class="page-sub-menu text-center scrolling-nav mb-5">
					<ul>
						<li class="current"><a href="<?= home_url(); ?>/brief-history">Brief History</a></li>
						<li><a href="<?= home_url(); ?>/the-mandate">The Mandate</a></li>
						<li><a href="<?= home_url(); ?>/vision-mission-goals">VMGO</a></li>
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
