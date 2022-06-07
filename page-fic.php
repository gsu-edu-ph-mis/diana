<?php
/**
 * Template Name: FIC
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
		<main id="main" class="row pt-5 pb-5" role="main">
			<div class="col-md-9 order-1 order-md-2 mb-5">
				<h2 id="about" class="h2 mb-4 text-center">What is WVFIC?</h2>
				<p>The Department of Science and Technology Region VI, in partnership with Guimaras State College (GSC), have established the Western Visayas Food Innovation Center (WVFIC) intended as one-stop-shop for addressing various technology related concerns of the food processing industry-particularly process and product development and related areas such as technology training and consultancy services, laboratory and testing services, packaging assistance and information services.</p>
				<p>The WVFIC will primarily serve as venues for the conduct of R&D activities intended to produce new products, product variants, process technologies and other innovations. Moreover, the center is equipped with an array of major food processing equipment/technologies developed by DOST-industrial Technology Development Institute (ITDI) and DOST-Metals Industry Research and Development Center (MIRDC). These technologies shall be transferred to MSMEs in order to enhance the competitiveness of the food processing industry in Western Visayas. </p>
				<hr class="mb-5 mt-5">

				<h2 id="vision-mission-goals" class="h2 mb-4 text-center">Vision, Mission and Goals</h2>
				<h3 class="h3">Mission</h3>
				<p>A leading hub for innovations, technical support services for the food industry in Western Visayas.</p>
				<h3 class="h3">Vision</h3>
				<p>We commit to provide innovation technologies and relevant support services to contribute to inclusive and sustained development of the food industry in Western Visayas.</p>
				<h3 class="h3">Goal</h3>
				<p>To produce value added agricultural and fishery food products through innovation.</p>
				<hr class="mb-5 mt-5">

				<h2 id="services" class="h2 mb-4 text-center">Our Services</h2>
				<div class="mb-4">
					<h4 class="h4">Information Resource Center</h4>
					<p>Information databases, product library and repository of mature technologies of existing food products developed and produced in Western Visayas will be maintained by the Center to include a list of available technologies, market and regulatory standards and mandatory labelling requirements, among others.</p>
				</div>
				<div class="mb-4">
					<h4 class="h4">Research and Development</h4>
					<p>The center will serve as a venue for researchers in western Visayas to conduct R&D activities intended to produce new products, product variants, process technologies and other innovations. Food technologies shall leading product and process development activities using the food processing equipment and facilities available in the center. The center could be utilized by professionals and will also be open for non-members to conduct contract researchers on agreed terms and conditions.</p>
				</div>
				<div class="mb-4">
					<h4 class="h4">Laboratory and Testing</h4>
					<p>Chemical and microbiological testing services for food products including nutritional analysis shall be provided by DOST VI Regional Standards and Testing Laboratory (RSTL) and other DOST Regional RSTLs while packaging testing services will be provided in coordination with the Philippine Center for Packaging Engineering and Technology (PC-PET) of the Central Philippine University.</p>
				</div>
				<div class="mb-4">
					<h4 class="h4">Training and Consultancy</h4>
					<p>Technical training and consultancy services will be provided by technical experts from DOST-RDls, SUCs  and other institutions as well  as  in-house technical  personnel with established competence in the areas of food product development, process improvement,  food  safety  and quality  control, sensory evaluation  and  food packaging  among others.</p>
				</div>
				<div class="mb-4">
					<h4 class="h4">Packaging and Labelling</h4>
					<p>Assistance on the design and determination of compatible packaging materials to enhance the marketability and shelf-life of the product will be provided.  This includes the design of labels compliant with mandatory labelling requirements. A Packaging Center with packaging equipment’s will be made available to enhance capability to conduct product and process development, and other R&D activities.  On the other hand, packaging toll services will be provided by satellite packaging centers particularly the DOST-TSKI Design and Packaging Center.</p>
				</div>
					
				<hr class="mb-5 mt-5">
				<h2 id="equipments" class="h2 mb-4 text-center">Equipment</h2>
				
				<div class="form-row">
					<div class="col-md-4 mb-4">
						<div class="mb-3 text-center">
							<img class="mb-3 "src="<?= get_stylesheet_directory_uri(); ?>/images/reti/fic/freeze-dryer.jpg" width="250" height="250" alt="freeze-dryer.jpg">
							<h4 class="h4">Freeze Dryer</h4>
						</div>
						<p>Used to preserve a perishable material or make the material more convenient for transport through sublimation of its water content under vacuum condition.</p>
					</div>
					
					<div class="col-md-4 mb-4">
						<div class="mb-3 text-center">
							<img class="mb-3 "src="<?= get_stylesheet_directory_uri(); ?>/images/reti/fic/spray-dryer.jpg" width="250" height="250" alt="spray-dryer.jpg">
							<h4 class="h4">Spray Dryer</h4>
						</div>
						<p>Used for drying thermally-sensitive materials such as food solutions, slurry, paste gel or suspensions.</p>
					</div>
					<div class="col-md-4 mb-4">
						<div class="mb-3 text-center">
							<img class="mb-3 "src="<?= get_stylesheet_directory_uri(); ?>/images/reti/fic/vacuum-fryer.jpg" width="250" height="250" alt="vacuum-fryer">
							<h4 class="h4">Vacuum Fryer</h4>
						</div>
						<p>Used to deep-fry food inside a closed-system under reduced pressure, lowering   the boiling point of both oil and water in food.</p>
					</div>

					<div class="col-md-4 mb-4">
						<div class="mb-3 text-center">
							<img class="mb-3 "src="<?= get_stylesheet_directory_uri(); ?>/images/reti/fic/water-retort.jpg" width="250" height="250" alt="water-retort.jpg">
							<h4 class="h4">Water Retort</h4>
						</div>
						<p>Used for thermal processing of food in hennetically sealed containers resulting in food products that are shelf-stable even under non-refrigerated conditions.</p>
					</div>

					<div class="col-md-4 mb-4">
						<div class="mb-3 text-center">
							<img class="mb-3 "src="<?= get_stylesheet_directory_uri(); ?>/images/reti/fic/vacuum-packaging.jpg" width="250" height="250" alt="Vacuum Packaging">
							<h4 class="h4">Vacuum Packaging</h4>
						</div>
						<p>Used to vacuum-seal food products in flexible pouches to prolong shelf life.</p>
					</div>

					<div class="col-md-4 mb-4">
						<div class="mb-3 text-center">
							<img class="mb-3 "src="<?= get_stylesheet_directory_uri(); ?>/images/reti/fic/vertical-for-fill-seal.jpg" width="250" height="250" alt="Vertical For-Fill-Seal">
							<h4 class="h4">Vertical For-Fill-Seal</h4>
						</div>
						<p>Used to vacuum-seal food products in flexible pouches to prolong shelf life.</p>
					</div>

					<div class="col-md-4 mb-4">
						<div class="mb-3 text-center">
							<img class="mb-3 "src="<?= get_stylesheet_directory_uri(); ?>/images/reti/fic/steam-jacketed-kettle.jpg" width="250" height="250" alt="Steam Jacketed Kettle">
							<h4 class="h4">Steam Jacketed Kettle</h4>
						</div>
						<p>Used for mixing and cooking jams, sauces, gravy or soup, and may be powdered by using steam heat.</p>
					</div>
					
					<div class="col-md-4 mb-4">
						<div class="mb-3 text-center">
							<img class="mb-3 "src="<?= get_stylesheet_directory_uri(); ?>/images/reti/fic/cabiner-dryer.jpg" width="250" height="250" alt="Cabinet Dryer">
							<h4 class="h4">Cabinet Dryer</h4>
						</div>
						<p>Used for dehydrating fruits and vegetables.</p>
					</div>
					<div class="col-md-4 mb-4">
						<div class="mb-3 text-center">
							<!-- <img class="mb-3 "src="<?= get_stylesheet_directory_uri(); ?>/images/reti/fic/xxx" width="250" height="250" alt="Deep Fryer"> -->
							<h4 class="h4">Deep Fryer</h4>
						</div>
						<p>For frying of snacks such as crackers, chips, fries and kroepoeks.</p>
					</div>
					<div class="col-md-4 mb-4">
						<div class="mb-3 text-center">
							<!-- <img class="mb-3 "src="<?= get_stylesheet_directory_uri(); ?>/images/reti/fic/xxx" width="250" height="250" alt="Planetary Mixer"> -->
							<h4 class="h4">Planetary Mixer</h4>
						</div>
						<p>Used for mixing, beating, whipping battlers, cake mixes and the occasional dough or pastry.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 order-2 order-md-1 mb-4">
				<nav class="page-sub-menu text-center scrolling-nav mb-5">
					<ul>
						<li><a href="#about">About</a></li>
						<li><a href="#vision-mission-goals">Vision, Mission and Goal</a></li>
						<li><a href="#services">Services</a></li>
						<li><a href="#equipments">Equipment</a></li>
					</ul>
				</nav>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
