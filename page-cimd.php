<?php
/**
 * Template Name: CIMD
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
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-title mb-0"><?php single_post_title(); ?></h1>
			</div>
		</div>
	</div>
</div>
<div class="site-content">
	<div class="container">
		<main id="main" class="row pt-5 pb-5  text-left" role="main">
			
			<div class="col-lg-3 text-center">
				<img class="mb-4" src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CIMD-md.png" alt="Logo">
			</div>
			<div class="col-lg-6">
				<h2 class="h2 mb-3">About the Center</h2>
				<p>The Center for Instructional Materials Development (CIMD) assists faculty authors in meticulously planning, selecting, organizing, refining, and utilizing instructional material (IM) to maximize its effectiveness. It ensures the breadth and depth of content to maximize student learning. CIMD directs the editorial direction of instructional materials and their content, as well as digital content, in order to promote equity of access, effectiveness of teaching and learning, and curriculum enhancement, with the dual goal of increasing student success and ensuring that graduates of the Guimaras State College are globally competitive, locally relevant, socially responsive, and fully representative of the country's diverse population. CIMD's content is managed by teams of editors, designers, industry experts, and freelance contributors.</p>
				<!-- <h2 class="h2 mb-3">Message from the Director</h2>
                <p>"In this day and age, writing IMs (Instructional Materials) has something to do with the fact that most people are juggling a variety of responsibilities such as family, career, and personal lives.</p>
                <p>I've discovered that everything is true. </p>
                <p>Since they can't see them in person, instructors and professors have to convey all of their meaning through their textbooks and other forms of electronic communication; they can't gaze into their students' eyes, which are the windows into their hearts. 
                </p>
                <p>Because they aren't familiar with the appearance of these students, IMs are, in my opinion, important vehicles for enabling education to produce fully formed and well-prepared individuals while also serving as a lever for social change."</p> -->
			</div>
			<!-- <div class="col-lg-3 text-center">
				<div class="official">
					<div class="official-photo-2">
						<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/roger.rueda.jpg" alt="Roger">
					</div>
				</div>
				<p>
					~ <strong>Dr. Roger B. Rueda</strong> <br>
					<em>Director, Center for Instructional Materials Development</em>
				</p>
			</div> -->
			<!-- <div class="col-12">
				<div class="row">
					<div class="col-sm-3 mt-3 mb-3">
						<div class="card">
							<div class="card-body">
								<img src="http://www.cimd.gsc.edu.ph/images/opt/A-Guide-To-Business-Plan-Preparation.jpg" alt="">
							</div>
						</div>
					</div>
					<div class="col-sm-3 mt-3 mb-3">
						<div class="card">
							<div class="card-body">
								<img src="http://www.cimd.gsc.edu.ph/images/opt/Agricultural-Systems-1.jpg" alt="">
							</div>
						</div>
					</div>
					<div class="col-sm-3 mt-3 mb-3">
						<div class="card">
							<div class="card-body">
								<img src="http://www.cimd.gsc.edu.ph/images/opt/Agricultural-Systems-2.jpg" alt="">
							</div>
						</div>
					</div>
					<div class="col-sm-3 mt-3 mb-3">
						<div class="card">
							<div class="card-body">
								<img src="http://www.cimd.gsc.edu.ph/images/opt/Animal-Science-and-Technology.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
