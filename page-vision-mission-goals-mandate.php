<?php
/**
 * Template Name: Vision Mission Goals Mandate
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
				<h2 id="vision" class="mb-4">Vision</h2>
				<p class="mb-5">By 2040, GSU is a premier university on education, green technology, innovations,and community transformation excelling in the holistic development of globally competitive, locally responsive and resilient human capital.</p>
				
				<h2 id="mission" class="mb-4">Mission</h2>
				<p class="mb-5">GSU is committed to produce globally-competitive, technologically-equipped and research-oriented graduates of quality and innovative advanced and higher education programs in sustainable agriculture, fisheries, forestry and tourism, entrepreneurship,liberal arts, education, healthcare, sciences and good governance.</p>
				
				<h2 id="goal" class="mb-4">Goals</h2>
				<ol type="" class="mb-5">
					<li>
						<h3 class="h4">Instruction</h3>
						<p>Provide quality education and produce globally competitive, technologically equipped and research-oriented graduates in advanced and higher education programs. </p>
					</li>
					<li>
						<h3 class="h4">Research </h3>
						<p>Cultivate locally rooted, globally competitive and responsive research culture among faculty, staff and students.</p> 
					</li>
					<li>
						<h3 class="h4">Extension </h3>
						<p>Engage the faculty, staff and students in sustainable extension services to improve quality of life in the community.
					</li>
					<li>
						<h3 class="h4">Governance</h3>
						<p>Strengthen administrative operation, develop human capital and intensify fiscal management for the efficient and effective delivery of public service.</li>
					</li>
				</ol>
				<h2 class="mb-4">Objectives</h2>
				<ol class="mb-5">
					<li>
						<h3 class="h4">Instruction</h3>
						<ol class="mb-4">
							<li>Develop and offer programs responsive to the needs of the Nation and industries.</li>
							<li>Secure certifications and recognition from credible bodies (Accrediting Agency of Chartered Colleges and Universities in the Philippines (AACCUP), Institutional Sustainability Assessment (ISA), Accreditation Board for Engineering and Technology (ABET), Times Higher Education (THE), Quacquarelli Symonds (QS), SUC Leveling).</li>
							<li>Achieve Licensure and first-generation graduate targets.</li>
							<li>Ensure career advancement and employability of graduates.</li>
							<li>Provide a vibrant and supportive environment for faculty professional development.</li>
							<li>Promote initiatives and coordinate college/programs toward student completion and learning outcomes in a holistic environment.</li>
							<li>Maintain high quality flexible learning strategies to accommodate wide-ranging students’ needs and experiences.</li>
							<li>Provide quality training for tertiary and advanced education and advocate sustainable development through green technology generation.</li>
							<li>Develop responsible, environment-friendly, productive, healthy and sports -oriented citizens who can contribute to the attainment of local and national goals.</li>
							<li>Foster planning for excellence in instruction, research and community engagement.</li>
							<li>Create a vibrant ASEAN/Trans-international and Distance Education.</li>
							<li>Innovate research-based pedagogy to foster equitable and inclusive education.</li>
							<li>Continue ISO Certification for the management of tertiary and advanced education.</li>
						</ol>
					<li>
						<h3 class="h4">Governance </h3>
						<ol class="mb-4">
							<li>Conduct periodic review, evaluation, and re-engineering of the processes, structures and system.</li>
							<li>Improve the delivery of services to stakeholders/clients.</li>
							<li>Strengthen the implementation of the automation and digitalization of the administrative and financial management system for efficient and transparent service.</li>
							<li>Enhance Human Resource Learning and Development</li>
						</ol>
					</li>
					<li>
						<h3 class="h4">Research, Extension, Training, and Innovations </h3>
						<ol class="mb-4">
							<li>Conduct, manage, and supervise gender-responsive Research and Extension activities in consonance with the institutional, national, and international goals.</li>
							<li>Present quality research outputs and extension projects in local, national, and international fora and symposia.</li>
							<li>Publish research outputs and other scholarly works in reputable publications with Scopus and/or International Scientific Indexing for wide dissemination and circulation.</li>
							<li>Establish and intensify the University’s collaboration with public and private local and international organizations towards sustainable development through sharing of resources, skills, expertise, and knowledge.</li>
							<li>Extend mature technologies, programs, and innovations to enhance skills, and competencies of stakeholders/clients.</li>
							<li>Utilize protected research outputs for technology transfer and commercialization.</li>
							<li>Ensure continuous quality improvement in Research, Extension, Training, and Innovations</li>
						</ol>
					</li>
				</ol>
				<h2>Core Values</h2>
				<ol type="a" class="mb-4">
					<li>God-Fearing</li>
					<li>People Centered</li>
					<li>Pro – Environment</li>
					<li>Selfless Public Service</li>
					<li>Respect for Human Dignity</li>
				</ol>
				<p class="mb-5 text-right"><small><em>Source: MEMORANDUM NO. 302 Series of 2023</em></small></p>
			</div>
			<div class="col-md-3 order-2 order-md-1 mb-4">
				<nav class="page-sub-menu text-center scrolling-nav mb-5">
					<ul>
						<li><a href="<?= home_url(); ?>/brief-history">Brief History</a></li>
						<li><a href="<?= home_url(); ?>/the-mandate">The Mandate</a></li>
						<li class="current"><a href="<?= home_url(); ?>/vision-mission-goals">VMGO</a></li>
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
