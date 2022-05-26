<?php
/**
 * Template Name: Library
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
			<div class="order-2 col-md-9 mb-5"> 
				<h2 id="about" class="h1 mb-5">About Library</h2>
				<div class="form-row mb-4">
					<div class="col-md-3">
						<img src="<?= get_stylesheet_directory_uri(); ?>/images/library1.jpg" alt="">
					</div>	
					<div class="col-md-3">
						<img src="<?= get_stylesheet_directory_uri(); ?>/images/library2.jpg" alt="">
					</div>	
					<div class="col-md-3">
						<img src="<?= get_stylesheet_directory_uri(); ?>/images/library3.jpg" alt="">
					</div>	
					<div class="col-md-3">
						<img src="<?= get_stylesheet_directory_uri(); ?>/images/library4.jpg" alt="">
					</div>	
				</div>
				<p>The library is the heart of all learning institution. </p>
				<p>It is synergy of people, the hardware and the software which assist clients in interpolating the knowledge and technology to transform and improve lives.
				<p>Information and knowledge are essential to the attainment of institutional goals. The ways in which they selected, acquired, stored, accessed and distributed within Guimaras State College will, in turn, measure and determine the success of teaching, research and other academic concepts.</p>
				<p>Located in the second floor of the Science building, the library, named after the former Governor Emily R. Lopez, offer rich opportunities for students to boots their academic performance and concretize their holistic growth though books and non- books materials.</p>
				<p>The library maintains a regular periodical subscription to given student and faculty up-to-date information which are never contained in books yet. Inter-library services with some academic libraries in the city and province of Iloilo are also fostered.</p>
				<p>The library likewise provides computer and internet services to further support learning by taking advantage of the current technologies.</p>
				
				<h2 id="vision" class="mb-5 mt-5">Vision, Mission &amp; Objectives</h2>
				<h3 class="h3">Vision</h3>
				<p>The library envisions being electronically advanced in system and to have more responsive library resources to cater the need of the academic community.</p>
				<h3 class="h3">Mission</h3>
				<p>The library primarily upholds the total college educational program and the individual intellectual development through maximum provision of readily available quality information resources and library services.</p>
				<h3 class="h3">Objectives</h3>
				<ol>
					<li>Collect materials in all formats to meet the needs of curricular programs and to assist the institution in reaching its goals and objectives;</li>
					<li>Support the various aspects of the institution’s research activities and teaching-learning processes;</li>
					<li>Provide, organize and preserve relevant materials needed by the college to achieve quality and excellent education;</li>
					<li>Uphold efficient and effective library services and guidance on the use of the materials; and</li>
					<li>Continuously update the library facilities, equipment to keep abreast with the fast changing technology.</li>
				</ol>
			</div>
			<div class="order-1 col-md-3 mb-4">
				<nav class="page-sub-menu scrolling-nav mb-5">
					<ul>
						<li><a href="#about">About Library</a></li>
						<li><a href="#vision">Vision, Mission & Objectives</a></li>
						<li><a href="<?= home_url(); ?>/library-online-services">Online Services</a></li>
						<li><a href="<?= home_url(); ?>/library-online-resources">Online Resources</a></li>
						<li><a href="https://drive.google.com/drive/folders/1CrO_3W0pttp_y-iQV8sQ6wcUMsKJl_UL">E-Books</a></li>
					</ul>
				</nav>
				
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
