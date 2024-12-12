<?php
/**
 * Template Name: President
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
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2 class="h1 mb-5 text-center">A Message from the President</h2>
				<div class="official">
					<div class="official-photo mb-3">
						<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/lilian-parreno.jpg" alt="Lilian">
					</div>
					<h3 class="h3">Dr. Lilian Diana B. Parreño</h3>
					<h4 class="h4">SUC President III</h4>
				</div>
				<div style="font-size: 2rem; text-align: justify; font-weight: 300">
					<p class="mb-5">It is with great pride and enthusiasm that I introduce you to Guimaras State University, an institution dedicated to fostering excellence, innovation, and transformation in higher education.</p>
					<p class="mb-5">GSU stands as a lighthouse of opportunity, grounded in the belief that education has the power to change lives and uplift societies. With a foundation built on academic quality, cultural inclusivity, and a forward-thinking approach, we aim to prepare our students not only for the challenges of today but also to lead in a rapidly changing world.</p>
					<p class="mb-5">At GSU, we are committed to create an environment that encourages intellectual curiosity, critical thinking, and collaborative exploration. Whether you are a student, faculty member, staff, or alumni, you are an essential part of a shared mission which is to empower individuals with the knowledge, skills, and values needed to make meaningful contributions to society.</p>
					<p class="mb-5">GSU envisions itself as a global leader in education, research, and societal impact. We aspire to be a center where innovation meets purpose, where the boundaries of knowledge are pushed, and where students, faculty, and partners collaborate to address the world’s most pressing issues.</p>
					<p class="mb-5">Through interdisciplinary programs, state of the art research, and a commitment to social responsibility, GSU seeks to empower individuals to become compassionate leaders, critical thinkers, and agents of change. Our aim is to cultivate a community that values lifelong learning and upholds the principles of integrity, creativity, and respect for diversity.</p>
					<p class="mb-5">At the heart of GSU lies a mission to provide transformative education that equips students with the knowledge, skills, and values to excel in their personal and professional lives producing competitive, technologically equipped and research-oriented graduates.</p>
					<p class="mb-5">As we move forward, GSU will continue to embrace the future with optimism and determination. We are dedicated to forging partnerships that enhance learning, expanding opportunities for students from all walks of life, and building a legacy of impact that resonates across generations.</p>
					<p class="mb-5">To those who choose to join us on this journey, you are not just entering a university; you are becoming part of a vision that seeks to inspire, innovate, and lead. Together, we will journey toward a future where education transforms individuals, empowers communities, and shapes a better world as is explicitly expressed in our tagline “GSU Excels as One”.</p>
					<p class="mb-5">Welcome to GSU. Welcome to the future.</p>
				</div>
				<a href="<?php echo get_home_url(); ?>" class="btn btn-light text-primary">&laquo; Return to Home Page</a>
			</div>
			<div class="col-md-2"></div>

		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
