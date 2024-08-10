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
								<a href="mailto:university.president@gsu.edu.ph " class="mail">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									university.president@gsu.edu.ph 
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
							<h2 class="h1 pt-5">Vice Presidents</h2>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/efren.tellermo.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Dr. Efren S. Tellermo</h3>
							<h4 class="h4">Vice President for Academic Affairs </h4>
							<div class="h5">
								<a href="mailto:efren.tellermo@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									efren.tellermo@gsu.edu.ph
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
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/julius.vergara.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Dr. Julius T. Vergara</h3>
							<h4 class="h4">Vice President for Research, Extension, Training and Innovation</h4>
							<div class="h5">
								<a href="mailto:julius.vergara@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									julius.vergara@gsu.edu.ph
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
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/janet.aleman.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Janet R. Aleman</h3>
							<h4 class="h4">Vice President for Administration and Finance</h4>
							<!-- <h4 class="h4">Main Approver, LDDAP and ACIC</h4> -->
							<div class="h5">
								<a href="mailto:budget@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									vpaf@gsu.edu.ph
								</a>	
								<!-- |
								<a href="tel:09173228113">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" /></svg> 
									09173228113
								</a> -->
							</div>
						</div>
						<div class="col-md-12 mb-4 text-center">
							<h2 class="h1 pt-5">Deans</h2>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rheajoy.flora.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Rhea Joy D. Flora</h3>
							<h4 class="h4">Dean, College of Agricultural Sciences (CAgS)</h4>
							<div class="h5">
								<a href="mailto:rheajoy.flora@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									rheajoy.flor@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Bernardo G. Cagasan</h3>
							<h4 class="h4">Dean, College of Arts and Sciences (CAS)</h4>
							<div class="h5">
								<a href="mailto:bernardo.cagasan@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									bernardo.cagasan@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rome.moralista.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Rome D. Moralista</h3>
							<h4 class="h4">Dean, College of Business and Management (CBM)</h4>
							<div class="h5">
								<a href="mailto:rome.moralista@gsu.edu.ph ">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									rome.moralista@gsu.edu.ph 
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/aizle.eres.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Aizle F. Eres (OIC)</h3>
							<h4 class="h4">Dean, College of Criminal Justice Education (CCJE)</h4>
							<div class="h5">
								<a href="mailto:aizle.eres@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									aizle.eres@gsu.edu.ph
								</a>	
							</div>
						</div>
						
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ruben.habana.jpg" width="250" height="250" alt="ProfileProfile Photo">
							</div>
							<h3 class="h3">Engr. Ruben M. Habaña</h3>
							<h4 class="h4">Dean, College of Engineering and Industrial Technology (CEIT)</h4>
							<div class="h5">
								<a href="mailto:ruben.habana@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									ruben.habana@gsu.edu.ph
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
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/adrian.forca.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Dr. Adrian J. Forca</h3>
							<h4 class="h4">Dean, College of Science and Technology (CST)</h4>
							<div class="h5">
								<a href="mailto:adrian.forca@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									adrian.forca@gsu.edu.ph
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
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/jasmin.gadian.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Jasmin T. Gadian</h3>
							<h4 class="h4">Dean, College of Teacher Education (CTE)</h4>
							<div class="h5">
								<a href="mailto:jasmin.gadian@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									jasmin.gadian@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/erly.martir.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Erly M. Martir</h3>
							<h4 class="h4">Dean, Graduate School</h4>
							<div class="h5">
								<a href="mailto:erly.martir@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									erly.martir@gsu.edu.ph
								</a>	
							</div>
						</div>
						
						<div class="col-md-12 mb-4 text-center">
							<h2 class="h2 pt-5">Campus Directors</h2>
						</div>
						
						<div class="col-md-6 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/kert.pillora.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Kert D. Pillora</h3>
							<h4 class="h4">Campus Director, Mosqueda Campus</h4>
							<div class="h5">
								<a href="mailto:kert.pillora@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									kert.pillora@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-6 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rheajoy.flora.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Rhea Joy D. Flora</h3>
							<h4 class="h4">Campus Director, Baterna Campus</h4>
							<div class="h5">
								<a href="mailto:rheajoy.flora@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									rheajoy.flora@gsu.edu.ph
								</a>	
							</div>
						</div>

						
						<div class="col-md-12 mb-4 text-center">
							<h2 class="h1 pt-5">Administration Staff</h2>
							<p>Based on the Organizational Structure of 2024</p>
						</div>
						<div class="col-md-12 mb-4 text-center">
							<h2 class="h2 pt-5 text-primary">Administration</h2>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ken.pillora.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Ken D. Pillora</h3>
							<h4 class="h4">Head, Supply and Property Management Office / Supervising Administrative Officer - Admin</h4>
							<div class="h5">
								<a href="mailto:ken.pillora@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									ken.pillora@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rechel.pillora.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Ma. Rechel A. Pillora</h3>
							<h4 class="h4">Head, Human Resource Management Office (HRMO) / Administrative Officer V</h4>
							<div class="h5">
								<a href="mailto:marechel.pillora@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									marechel.pillora@gsu.edu.ph
								</a>	
							</div>
						</div>

						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ijieline.gallo.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Ijieline F. Gallo </h3>
							<h4 class="h4">Head, Records and Archives Office / Administrative Officer V</h4>
							<div class="h5">
								<a href="mailto:ijieline.gallo@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									ijieline.gallo@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ian.gallo.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Engr. Ian G. Gallo</h3>
							<h4 class="h4">Head, General Services Office (GSO) / Administrative Officer V</h4>
							<div class="h5">
								<a href="mailto:ian.gallo@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									ian.gallo@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/hazel.jarangue.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Hazel D. Jarangue</h3>
							<h4 class="h4">Head, Cashier Office / Administrative Officer V</h4>
							<div class="h5">
								<a href="mailto:hazel.jarangue@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									hazel.jarangue@gsu.edu.ph
								</a>	
							</div>
						</div>

						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/randy.galve.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Randy G. Galve</h3>
							<h4 class="h4">Head, Procurement Office / Administrative Officer V</h4>
							<div class="h5">
								<a href="mailto:randy.galve@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									randy.galve@gsu.edu.ph
								</a>	
							</div>
						</div>
						
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/janet.aleman.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Janet R. Aleman</h3>
							<h4 class="h4">Head, Bids and Awards Committee</h4>
							<div class="h5">
								<!-- <a href="mailto:janet.aleman@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									janet.aleman@gsu.edu.ph
								</a>	 -->
							</div>
						</div>
						<div class="col-md-12 mb-4 text-center">
							<h2 class="h1 pt-5 mb-4 text-primary">Finance</h2>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ann.tumapang.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Ann Lyn S. Tumapang</h3>
							<h4 class="h4">Chief Administrative Officer - Finance Division</h4>
							<div class="h5">
								<a href="mailto:annlyn.tumapang@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									annlyn.tumapang@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/philippe.prologo.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Philippe R. Prologo</h3>
							<h4 class="h4">Supervising Administrative Officer - Finance Division</h4>
							<div class="h5">
								<a href="mailto:annlyn.tumapang@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									annlyn.tumapang@gsu.edu.ph
								</a>	
							</div>
						</div>

						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/eunicehannah.traifalgar.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Eunice Hannah V. Traifalgar</h3>
							<h4 class="h4">Head, Accounting Office / Accountant III</h4>
							<div class="h5">
								<a href="mailto:eunicehannah.traifalgar@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									eunicehannah.traifalgar@gsu.edu.ph
								</a>	
							</div>
						</div>

						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/frennie.zarate.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Frennie D. Zarate</h3>
							<h4 class="h4">Head, Budget Office / Administrative Officer V</h4>
							<div class="h5">
								<a href="mailto:frennie.zarate@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									frennie.zarate@gsu.edu.ph
								</a>	
							</div>
						</div>

						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/erwin.dumagpi.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Erwin D. Dumagpi</h3>
							<h4 class="h4">Director, Economic Development Center (EDC)</h4>
							<div class="h5">
								<a href="mailto:erwin.dumagpi@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									erwin.dumagpi@gsu.edu.ph
								</a>	
							</div>
						</div>

						<div class="col-md-12 mb-4 text-center">
							<h2 class="h1 pt-5 mb-4 text-primary">Academic Affairs</h2>
						</div>

						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/violeta.efondo.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Violeta C. Efondo</h3>
							<h4 class="h4">Director, Office of Student Development and Services</h4>
							<div class="h5">
								<a href="mailto:violeta.efondo@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									violeta.efondo@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/yyy.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Jean G. Baterzal</h3>
							<h4 class="h4">University Medical Office / Nurse II</h4>
							<div class="h5">
								<a href="mailto:jean.baterzal@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									jean.baterzal@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rosebelle.tembrevilla.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Rosebelle V. Tembrevilla</h3>
							<h4 class="h4">University Guidance Office / Guidance Counselor III</h4>
							<div class="h5">
								<a href="mailto:rosebelle.tembrevilla@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									rosebelle.tembrevilla@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Ronel P. Dulla</h3>
							<h4 class="h4">Registrar's Office / Registrar III</h4>
							<div class="h5">
								<a href="mailto:ronel.dulla@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									ronel.dulla@gsu.edu.ph
								</a>	
							</div>
						</div>
						
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/regina.traifalgar.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Regina V. Traifalgar</h3>
							<h4 class="h4">University Library / Librarian III</h4>
							<div class="h5">
								<a href="mailto:regina.traifalgar@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									regina.traifalgar@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/maxy.yanguas.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Ma. Xy J. Yanguas</h3>
							<h4 class="h4">National Service Training Program</h4>
							<div class="h5">
								<a href="mailto:maxy.yanguas@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									maxy.yanguas@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/roger.rueda.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Roger B. Rueda</h3>
							<h4 class="h4">Director, Instructional Materials Development Office</h4>
							<div class="h5">
								<a href="mailto:roger.rueda@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									roger.rueda@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/leopoldo.tumapang.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Leopoldo Third R. Tumapang</h3>
							<h4 class="h4">Director, Sports and Wellness Office</h4>
							<div class="h5">
								<a href="mailto:leopoldo.tumapang@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									leopoldo.tumapang@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/khristian.delarama.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Khristian T. De la Rama</h3>
							<h4 class="h4">Director, Cultural Affairs, Traditional and Contemporary Arts</h4>
							<div class="h5">
								<a href="mailto:khristian.delarama@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									khristian.delarama@gsu.edu.ph
								</a>	
							</div>
						</div>

						<div class="col-md-12 mb-4 text-center">
							<h2 class="h2 pt-5 mb-4 text-primary">Research, Extension, Training and Innovation</h2>
						</div>

						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/adrian.alumbro.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Adrian C. Alumbro</h3>
							<h4 class="h4">Director, University Research and Development Office</h4>
							<div class="h5">
								<a href="mailto:adrian.alumbro@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									adrian.alumbro@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/eric.catalan.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Eric P. Catalan</h3>
							<h4 class="h4">Director, Industrial Technology Research and Development Center (ITRDC) / Affiliated Renewable Energy Center (AREC)</h4>
							<div class="h5">
								<a href="mailto:eric.catalan@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									eric.catalan@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/frenz.gal.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Frenz Rian G. Gal</h3>
							<h4 class="h4">Director, Intellectual Property Management Office (IPMO)</h4>
							<div class="h5">
								<a href="mailto:frenz.gal@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									frenz.gal@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/margie.delacruz.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Margie Y. De la Cruz</h3>
							<h4 class="h4">University Extension, Training and Development Services</h4>
							<div class="h5">
								<a href="mailto:margie.delacruz@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									margie.delacruz@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/joan.gerada.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Jo Ann T. Gerada</h3>
							<h4 class="h4">Director, Journal Publications & Instructional Materials Development</h4>
							<div class="h5">
								<a href="mailto:joann.gerada@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									joann.gerada@gsu.edu.ph
								</a>	
							</div>
						</div>

						<div class="col-md-12 mb-4 text-center">
							<h2 class="h2 pt-5 mb-4 text-primary">University President's Office</h2>
						</div>
						
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/josie.gaitano.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Josie H. Gaitano</h3>
							<h4 class="h4">Executive Assistant to the President</h4>
							<div class="h5">
								<a href="mailto:josie.gaitano@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									josie.gaitano@gsu.edu.ph
								</a>	
							</div>
						</div>

						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Nico G. Amarilla</h3>
							<h4 class="h4">Head, Information and Communications Technology Unit (ICTU)</h4>
							<div class="h5">
								<a href="mailto:nico.amarilla@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									nico.amarilla@gsu.edu.ph
								</a>	
							</div>
						</div>
						
						
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/christinejoy.villafuerte.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Christine Joy B. Villafuerte</h3>
							<h4 class="h4">Head, Internal Audit</h4>
							<div class="h5">
								<a href="mailto:christinejoy.villafuerte@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									christinejoy.villafuerte@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Felizardo S. Valdez, III</h3>
							<h4 class="h4">Head, Project Management Unit</h4>
							<div class="h5">
								<a href="mailto:felizardo.valdez@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									felizardo.valdez@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/kitt.siva.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Enriqueta N. Siva</h3>
							<h4 class="h4">Director, Gender and Development (GAD)</h4>
							<div class="h5">
								<a href="mailto:enriqueta.siva@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									enriqueta.siva@gsu.edu.ph
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
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/bessie.cebuano.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Bessie S. Cebuano</h3>
							<h4 class="h4">Head, Legal Unit / Legal Assistant III</h4>
							<div class="h5">
								<a href="mailto:bessie.cebuano@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									bessie.cebuano@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/violeta.efondo.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Violeta C. Efondo</h3>
							<h4 class="h4">Head, Information Unit / Information Officer III</h4>
							<div class="h5">
								<a href="mailto:violeta.efondo@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									violeta.efondo@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/yyy.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Arch. Shyra V. Maximo</h3>
							<h4 class="h4">Head, Planning Unit</h4>
							<div class="h5">
								<a href="mailto:shyra.maximo@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									shyra.maximo@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/methus.perrocha.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Methusela C. Perrocha</h3>
							<h4 class="h4">Director, Quality Assurance (QA)</h4>
							<div class="h5">
								<a href="mailto:methusela.perrocha@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									methusela.perrocha@gsu.edu.ph
								</a>	
							</div>
						</div>
						
						
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/jeffrey.magbanua.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Jeffrey G. Magbanua </h3>
							<h4 class="h4">Director, Alumni Affairs</h4>
							<div class="h5">
								<a href="mailto:jeffrey.magbanua@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									jeffrey.magbanua@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/arthur.soquena.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Arthur C. Soqueña</h3>
							<h4 class="h4">Director, Public Image and Related Creative Affairs Office</h4>
							<div class="h5">
								<a href="mailto:arthur.soquena@gsu.edu.ph">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									arthur.soquena@gsu.edu.ph
								</a>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer();
