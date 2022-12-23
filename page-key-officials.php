<?php
/**
 * Template Name: Key Officials
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
			<!-- <div class="col-md-3">

				<nav class="page-sub-menu text-left mb-5">
					<ul>
						<li><a href="#cbm">College of Business Management</a></li>
					
					</ul>
				</nav>
			
			</div> -->
			<div class="col-md-12">
				<div class="college mb-5 pb-5">
					<div class="row mb-5">
						<div class="col-md-4">
						</div>
						<div class="col-md-4 official">
							<div class="official-photo mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/lilian-parreno.jpg" width="300" height="300" alt="Profile Lilian">
							</div>
							<h3 class="h3">Dr. Lilian Diana B. Parreño</h3>
							<h4 class="h4">University President</h4>
							
							<div class="h5">
								<a href="mailto:guimstate@gsc.edu.ph" class="mail">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									guimstate@gsc.edu.ph
								</a>	
								<!-- |
								<a href="tel:+639778660104" class="phone">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" /></svg>
									+63 977 866 0104
								</a>	 -->
							</div>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-md-12 mb-4 text-center">
							<h2 class="h2 pt-5">Vice Presidents</h2>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ruby.catalan.jpg" width="250" height="250" alt="ProfileProfile Photo">
							</div>
							<h3 class="h3">Dr. Ruby D. Catalan</h3>
							<h4 class="h4">Vice President for Academic Affairs </h4>
							<h4 class="h4">Chair, Project Monitoring Team</h4>
							<h4 class="h4">Alternate Member, BAC (for Dr. Jasmin Gadian)</h4>
							<h4 class="h4">Member, PBB Committee</h4>
							<div class="h5">
								<a href="mailto:vpaa@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									vpaa@gsc.edu.ph
								</a>
								<!-- |
								<a href="tel:+639173032368">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" /></svg> 
									+63 917 303 2368
								</a>	 -->
							</div>
						</div>
						
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/julieta.infante.jpg" width="250" height="250" alt="ProfileProfile Photo">
							</div>
							<h3 class="h3">Dr. Julieta G. Infante</h3>
							<h4 class="h4">Vice President for Research, Extension, Training and Innovation</h4>
							<h4 class="h4">Member, Project Monitoring Team</h4>
							<h4 class="h4">Member, PBB Committee</h4>
							
							<div class="h5">
								<a href="mailto:julieta.infante@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									julieta.infante@gsc.edu.ph
								</a>	
								<!-- |
								<a href="tel:+639177614760">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" /></svg> 
									+639177614760
								</a> -->
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ann.tumapang.jpg" width="250" height="250" alt="ProfileProfile Photo">
							</div>
							<h3 class="h3">Dr. Ann Lyn S. Tumapang</h3>
							<h4 class="h4">Vice President for Administration and Finance</h4>
							<h4 class="h4">Budget Officer</h4>
							<h4 class="h4">Chair, BAC</h4>
							<h4 class="h4">Member, COVID-19 Task Force</h4>
							<h4 class="h4">Member, PBB Committee</h4>
							<!-- <h4 class="h4">Main Approver, LDDAP and ACIC</h4> -->
							<div class="h5">
								<a href="mailto:budget@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									vpaf@gsc.edu.ph
								</a>	
								<!-- |
								<a href="tel:09173228113">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" /></svg> 
									09173228113
								</a> -->
							</div>
						</div>
						<div class="col-md-12 mb-4 text-center">
							<h2 class="h2 pt-5">Deans</h2>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Bernardo G. Cagasan</h3>
							<h4 class="h4">Dean, College of Arts and Sciences (CAS)</h4>
							<div class="h5">
								<a href="mailto:bernardo.cagasan@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									bernardo.cagasan@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/simeon.cainday.jpg" width="250" height="250" alt="ProfileProfile Photo">
							</div>
							<h3 class="h3">Dr. Simeon J. Cainday III</h3>
							<h4 class="h4">Dean, College of Science and Technology (CST)</h4>
							<h4 class="h4">Data Protection Officer</h4>
							
							<div class="h5">
								<a href="mailto:scainday@gmail.com">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									scainday@gmail.com
								</a>	
								<!-- |
								<a href="tel:09338608261">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" /></svg> 
									09338608261
								</a> -->
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ruben.habana.jpg" width="250" height="250" alt="ProfileProfile Photo">
							</div>
							<h3 class="h3">Engr. Ruben M. Habaña</h3>
							<h4 class="h4">Dean, College of Engineering and Industrial Technology (CEIT)</h4>
							<h4 class="h4">Head, Electrical System of GSU</h4>
							<h4 class="h4">Project Engineer</h4>
							<h4 class="h4">Technical Working Group, BAC (Electrical)</h4>
							<h4 class="h4">Member, Project Monitoring Team</h4>
							
							<div class="h5">
								<a href="mailto:ruben.habana@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									ruben.habana@gsc.edu.ph
								</a>	
								<!-- |
								<a href="tel:09380130447">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" /></svg> 
									09380130447
								</a> -->
							</div>

						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Reynald T. Ladera</h3>
							<h4 class="h4">Dean, College of Criminal Justice Education (CCJE)</h4>
							<div class="h5">
								<a href="mailto:reynald.ladera@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									reynald.ladera@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/erly.martir.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Erly M. Martir</h3>
							<h4 class="h4">Dean, Graduate School</h4>
							<h4 class="h4">Head, Beautification and Landscaping of All Campuses</h4>
							<h4 class="h4">Technical Working Group, BAC (Office and Other Supplies)</h4>
							<div class="h5">
								<a href="mailto:erly.martir@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									erly.martir@gsc.edu.ph
								</a>	
							</div>

							
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/andrew.paguntalan.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Andrew D. Paguntalan</h3>
							<h4 class="h4">Dean, College of Business and Management (CBM)</h4>
							<div class="h5">
								<a href="mailto:andrew.paguntalan@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									andrew.paguntalan@gsc.edu.ph
								</a>	
							</div>

						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/jasmin.gadian.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Jasmin T. Gadian</h3>
							<h4 class="h4">Dean, College of Teacher Education (CTE)</h4>
							<h4 class="h4">Lead Internal Quality Auditor (IQA)</h4>
							<h4 class="h4">Member, BAC</h4>
							<h4 class="h4">Secretary, Academic Council</h4>
							<div class="h5">
								<a href="mailto:jasmin.gadian@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									jasmin.gadian@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/julius.vergara.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Julius T. Vergara</h3>
							<h4 class="h4">Dean, College of Agricultural Sciences (CAgS)</h4>
							<h4 class="h4">Director, Baterna Campus</h4>
							<h4 class="h4">Coordinator, Disaster Risk Reduction Management (Baterna Campus)</h4>
							<h4 class="h4">Member, Project Monitoring Team</h4>
							<h4 class="h4">Technical Working Group, BAC (Agriculture and Fisheries)</h4>
							<div class="h5">
								<a href="mailto:julius.vergara@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									julius.vergara@gsc.edu.ph
								</a>	
							</div>
						</div>
						
						
						<div class="col-md-12 mb-4 text-center">
							<h2 class="h2 pt-5">Directors</h2>
						</div>
						
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Prof. Eric P. Catalan</h3>
							<h4 class="h4">Director, Industrial Technology Research and Development Center (ITRDC)/Affiliated Renewable Energy Center (AREC)</h4>
							<h4 class="h4">Assistant Director, Planning Office</h4>
							<h4 class="h4">Technical Working Group, BAC (Electronics)</h4>
							<div class="h5">
								<a href="mailto:eric.catalan@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									eric.catalan@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/margie.delacruz.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Margie Y. De la Cruz</h3>
							<h4 class="h4">Director, Community Extension Services</h4>
							<div class="h5">
								<a href="mailto:margie.delacruz@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									margie.delacruz@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/khristian.delarama.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Prof. Khristian T. De la Rama</h3>
							<h4 class="h4">Director, Journal Publications &amp; Instructional Materials Development</h4>
							<div class="h5">
								<a href="mailto:khristian.delarama@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									khristian.delarama@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/erwin.dumagpi.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Erwin D. Dumagpi</h3>
							<h4 class="h4">Director, Quality Assurance (QA)</h4>
							<h4 class="h4">Director, Economic Development Center (EDC)</h4>
							<h4 class="h4">Project Manager, Canteen and Dormitory Services, Catering Food Services and Agri-Eco Hotel/Convention Hall</h4>
							<div class="h5">
								<a href="mailto:erwin.dumagpi@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									erwin.dumagpi@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/violeta.efondo.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Instr. Violeta C. Efondo</h3>
							<h4 class="h4">Director, Office of the Student Development and Services (OSDS)</h4>
							<h4 class="h4">Executive Assistant on Legal Matters</h4>
							<h4 class="h4">Member, BAC Secretariat</h4>
							<div class="h5">
								<a href="mailto:violeta.efondo@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									violeta.efondo@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rheajoy.flora.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Prof. Rhea Joy D. Flora</h3>
							<h4 class="h4">Director, Mango and Tropical Fruits Research Center</h4>
							<h4 class="h4">Program Head, BS Agricultural Sciences</h4>
							<h4 class="h4">Coordinator, Extension (CAgS)</h4>
							<div class="h5">
								<a href="mailto:rheajoy.flora@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									rheajoy.flora@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/adrian.forca.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Instr. Adrian J. Forca</h3>
							<h4 class="h4">Director, Information and Communications Technology Office (ICTO)</h4>
							<h4 class="h4">Technical Working Group, BAC (ICT Equipment)</h4>
							<h4 class="h4">Focal Person, SMART Campus Project</h4>
							<h4 class="h4">Focal Person, STARRPLAN VI</h4>
							<div class="h5">
								<a href="mailto:adrian.forca@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									adrian.forca@gsc.edu.ph
								</a>	
							</div>
						</div>
						
						
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/frenz.gal.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Instr. Frenz Rian G. Gal</h3>
							<h4 class="h4">Director, Intellectual Property Management Office (IPMO)</h4>
							<h4 class="h4">Manager, Innovation and Technology Support Office (ITSO)</h4>
							<h4 class="h4">Food Technologist, Food Innovation Center</h4>
							<div class="h5">
								<a href="mailto:frenz.gal@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									frenz.gal@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/joan.gerada.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Instr. Jo Ann T. Gerada</h3>
							<h4 class="h4">Director, Management Information System (MIS)</h4>
							<div class="h5">
								<a href="mailto:joann.gerada@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									joann.gerada@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/joel.japitana.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Joel V. Japitana</h3>
							<h4 class="h4">Director, International Affairs and External Linkages</h4>
							<div class="h5">
								<a href="mailto:jvgsc55@gmail.com">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									jvgsc55@gmail.com
								</a>	
							</div>

							
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ethel.junco.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Prof. Ethel P. Junco</h3>
							<h4 class="h4">Director, Research and Development</h4>
							<div class="h5">
								<a href="mailto:ethel.junco@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									ethel.junco@gsc.edu.ph
								</a>	
							</div>

							
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rome.moralista.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Rome B. Moralista</h3>
							<h4 class="h4">Director, Graduate School Linkages and Consortium</h4>
							<h4 class="h4">Coordinator, Disaster Risk Reduction Management and Mitigation and Climate Change Adaptation</h4>
							<div class="h5">
								<a href="mailto:rome.moralista@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									rome.moralista@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/methus.perrocha.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Methusela C. Perrocha</h3>
							<h4 class="h4">Director, Food Innovation Center &amp; Industry Linkages</h4>
							<h4 class="h4">Member, BAC</h4>
							<div class="h5">
								<a href="mailto:methusela.perrocha@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									methusela.perrocha@gsc.edu.ph
								</a>	
							</div>

							
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/kert.pillora.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Kert D. Pillora</h3>
							<h4 class="h4">Director, Mosqueda Campus</h4>
							<h4 class="h4">Project Manager, Water Refilling Station</h4>
							<h4 class="h4">Project Manager, Printing Press</h4>
							<div class="h5">
								<a href="mailto:kert.pillora@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									kert.pillora@gsc.edu.ph
								</a>	
							</div>

							
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/kitt.siva.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Enriqueta N. Siva</h3>
							<h4 class="h4">Director, Gender and Development (GAD)</h4>
							<h4 class="h4">Coordinator, Office of the AntiSexual Harassment (OASH)</h4>
							<h4 class="h4">Member, BAC Secretariat</h4>
							<div class="h5">
								<a href="mailto:enriqueta.siva@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									enriqueta.siva@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/maribeth.sumalde.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Prof. Maribeth E. Sumalde</h3>
							<h4 class="h4">Director, Cultural Affairs, Traditional and Contemporary Arts</h4>
							<div class="h5">
								<a href="mailto:maribeth.sumalde@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									maribeth.sumalde@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/efren.tellermo.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Efren S. Tellermo</h3>
							<h4 class="h4">Director, Planning Office</h4>
							<div class="h5">
								<a href="mailto:planning@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									planning@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/leopoldo.tumapang.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Instr. Leopoldo Third R. Tumapang</h3>
							<h4 class="h4">Director, Sports and Wellness</h4>
							<div class="h5">
								<a href="mailto:third.tumapang@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									third.tumapang@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/luna.lamera.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Luna V. Lamera</h3>
							<h4 class="h4">Director, Internal Audit Service</h4>
							<div class="h5">
								<a href="mailto:luna.lamera@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									luna.lamera@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/philippe.prologo.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Mr. Philippe R. Prologo</h3>
							<h4 class="h4">Director, Finance Division</h4>
							<h4 class="h4">Member, PBB Committee</h4>
							<h4 class="h4">Member, Project Monitoring Team</h4>
							<!-- <h4 class="h4">Main Signatory - Authorized</h4>
							<h4 class="h4">Approving Officer, PAG-IBIG Short Term Loan</h4> -->
							<div class="h5">
								<a href="mailto:accounting@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									accounting@gsc.edu.ph
								</a>	
							</div>
						</div>
						<!-- <div class="col-md-12 mb-4 text-center">
							<h2 class="h2 pt-5">Program Heads</h2>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/adrian.alumbro.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Adrian C. Alumbro</h3>
							<h4 class="h4">Program Head, BS Food Tech </h4>
							<h4 class="h4">Food Technologist, Food Innovation Center (FIC)</h4>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ivony.asprilla.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Ivony S. Asprilla</h3>
							<h4 class="h4">Program Head, BS Hotel and Restaurant Management (BSHRM)/Hospitality Management (HM)</h4>
							<h4 class="h4">Coordinator, College Hot & Cold Kitchen Project</h4>
							<h4 class="h4">Laboratory Supervisor, BSHRM/BSHM</h4>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/alvin.bales.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Alvin Erick C. Bales</h3>
							<h4 class="h4">Program Head, BS Industrial Technology</h4>
							<h4 class="h4">Coordinator, Research (BIT)</h4>
							<h4 class="h4">Food Technologist, Food Innovation Center (FIC)</h4>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/jocyl.caber.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Jocyl C. Caber</h3>
							<h4 class="h4">Program Head, Bachelor of Secondary Education (BSEd)</h4>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/conrado.calumpita.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Conrado S. Calumpita</h3>
							<h4 class="h4">Program Head, Mechanical Engineering</h4>
							<h4 class="h4">Focal Person, Trimaran Project and Australia Maritime College, University of Tasmania’s Ship Building and Maritime Related Studies</h4>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/josephine.deasis.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Josephine G. De Asis</h3>
							<h4 class="h4">Program Head, Bachelor of Elementary Education (BEEd)</h4>
							<h4 class="h4">Coordinator, Extension (CTE)</h4>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/lovely.egael.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Lovely Joy J. Egael</h3>
							<h4 class="h4">Program Head, Bachelor of Science in Business Administration (BSBA)</h4>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/jufel.fernandez.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Jufel D. Fernandez</h3>
							<h4 class="h4">Program Head, BS Criminology</h4>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/revenlie.galapin.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Revenlie G. Galapin</h3>
							<h4 class="h4">Program Head, BS Entrepreneurship</h4>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/gerald.gamo.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Gerald Sheo Thon D. Gamo</h3>
							<h4 class="h4">Program Head, BS Fisheries </h4>
							<h4 class="h4">Project Manager, Multi-Crop Pond</h4>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Michael Victor A. Gonzales</h3>
							<h4 class="h4">Program Head, BS Real Estate Management (BSREM)</h4>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/anelyn.janaban.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Anelyn A. Janaban</h3>
							<h4 class="h4">Program Head, Doctor of Management and Business Administration</h4>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ellyn.maramento.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Ellyn Ly O. Maramento</h3>
							<h4 class="h4">Program Head, BS in Hospitality Management</h4>
							<h4 class="h4">Program Head, BS Tourism Management</h4>
							<h4 class="h4">Coordinator, Edu-Tourism</h4>
							<h4 class="h4">Asst. Director, International Affairs and External Linkages</h4>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/kyrl.palma.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Kyrl S. Palma</h3>
							<h4 class="h4">Program Head, Bachelor of Arts in English Language (BAEL)</h4>
							<h4 class="h4">Subject Area Chair, English</h4>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/joedar.satojito.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Joedar P. Satojito</h3>
							<h4 class="h4">Program Head, Doctor of Education (Ed.D.)</h4>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/lea.ymalay.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Lea P. Ymalay</h3>
							<h4 class="h4">Program Head, BS Computer Science</h4>
							<h4 class="h4">Program Head, Bachelor of Technology and Livelihood Education (BTLEd)</h4>
							<h4 class="h4">Coordinator, Research (CST)</h4>
						</div> -->
						<div class="col-md-12">
							<h2 class="h1 mb-5 text-center">Administration</h2>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/janet.aleman.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Mrs. Janet R. Aleman</h3>
							<h4 class="h4">Board Secretary</h4>
							<h4 class="h4">Focal Person, PBB Committee</h4>
							<h4 class="h4">Vice Chair, BAC</h4>
							<h4 class="h4">Chair, Public Information Committee</h4>
							<h4 class="h4">Member, ISO Documentation Committee</h4>
							<div class="h5">
								<a href="mailto:gscbrdsec@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									gscbrdsec@gsc.edu.ph
								</a>	
							</div>
						</div>
						
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/yyy.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Jean R. Baterzal</h3>
							<h4 class="h4">Nurse</h4>
							<h4 class="h4">Chair, COVID-19 Task Force</h4>
							<h4 class="h4">Chair, Occupational Safety and Health</h4>
							<!-- <div class="h5">
								<a href="tel:09381393637">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" /></svg>
									09381393637
								</a>
							</div> -->
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rosalinda.cinco.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Rosalinda N. Cinco</h3>
							<h4 class="h4">Collecting Officer</h4>
							<h4 class="h4">Special Disbursing Officer</h4>
							<div class="h5">
								<a href="mailto:rosalinda.cinco@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									rosalinda.cinco@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Engr. Ronel P. Dulla</h3>
							<h4 class="h4">Registrar</h4>
							<div class="h5">
								<!-- <a href="tel:+639262679770">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" /></svg>
									+63 926 267 9770
								</a>	 -->
							</div>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/grace.ello.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Grace D. Ello</h3>
							<h4 class="h4">Secretariat, PBB Committee</h4>
							<h4 class="h4">Liaison Officer, GSIS, PhilHealth and SSS</h4>
							<!-- <h4 class="h4">Alternate Signatory - Authorized Approving Officer, PAG-IBIG Short Term Loan</h4> -->
							<div class="h5">
								<a href="mailto:grace.ello@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									grace.ello@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/josie.gaitano.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Prof. Josie H. Gaitano</h3>
							<h4 class="h4">Executive Assistant to the President</h4>
							<h4 class="h4">Member, BAC Secretariat</h4>
							<!-- <div class="h5">
								<a href="tel:09778660021">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" /></svg>
									09778660021
								</a>
							</div> -->
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/randy.galve.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Randy G. Galve</h3>
							<h4 class="h4">Procurement Officer</h4>
							<h4 class="h4">Chair, BAC Secretariat</h4>
							<div class="h5">
								<a href="mailto:randy.galve@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									randy.galve@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/hazel.jarangue.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Hazel D. Jarangue</h3>
							<h4 class="h4">Cashier</h4>
							<div class="h5">
								<a href="mailto:hazel.jarangue@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									hazel.jarangue@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/luna.lamera.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Luna V. Lamera</h3>
							<h4 class="h4">Chair, Committee on Anti-Red Tape</h4>
							<div class="h5">
								<a href="mailto:luna.lamera@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									luna.lamera@gsc.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/aser.job.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Instr. Aser M. Job</h3>
							<h4 class="h4">Head, Transportation Services</h4>
							<div class="h5">
								<!-- <a href="tel:+639262679770">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" /></svg>
									+63 926 267 9770
								</a>	 -->
							</div>
						</div>
						<!-- <div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/nestor.paez.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Nestor T. Paez</h3>
							<h4 class="h4">Messenger</h4>
						</div> -->
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ken.pillora.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Ken D. Pillora</h3>
							<h4 class="h4">Supply Officer/Property Custodian</h4>
							<h4 class="h4">Head, General Services Unit</h4>
							<h4 class="h4">Coordinator, Solid Waste Management Program/Pollution</h4>
							<h4 class="h4">Control Officer</h4>
							<h4 class="h4">Member, COVID-19 Task Force</h4>
							<div class="h5">
								<a href="mailto:gscsupplyoffice@gmail.com">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									gscsupplyoffice@gmail.com
								</a>	
							</div>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rechel.pillora.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Ma. Rechel A. Pillora</h3>
							<h4 class="h4">Human Resource Management Officer (HRMO)</h4>
							<h4 class="h4">Secretary, Administrative Council</h4>
							<!-- <h4 class="h4">Alternate Signatory - Authorized Approving Officer, PAG-IBIG Short Term Loan</h4> -->
							<div class="h5">
								<a href="mailto:hrmo@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									hrmo@gsc.edu.ph
								</a>	
								<!-- |
								<a href="tel:+09171564778">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" /></svg>
									09171564778
								</a> -->
							</div>
							
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rosebelle.tembrevilla.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Mrs. Rosebelle V. Tembrevilla</h3>
							<h4 class="h4">Guidance Counselor, Main and Baterna Campuses</h4>
							<h4 class="h4">Psychometrician, Main and Baterna Campuses</h4>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/regina.traifalgar.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Mrs. Regina V. Traifalgar</h3>
							<h4 class="h4">Head Librarian</h4>
							<div class="h5">
								<a href="mailto:library@gsc.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									library@gsc.edu.ph
								</a>	
							</div>
						</div>
						
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/arnel.villa.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Mr. Arnel P. Villa</h3>
							<h4 class="h4">Chief, Security Services</h4>
							<!-- <div class="h5">
								<a href="tel:+639557812795">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" /></svg>
									+63 955 781 2795
								</a>	
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer();
