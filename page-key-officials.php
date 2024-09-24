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
<div id="vApp" v-cloak :data-pending="pending" class="site-content">
	<div class="container">
		<main id="main" class="row pt-5 pb-5  text-left" role="main">
			<div class="col-md-12">

				<div class="college mb-5 pb-5">
					<div class="row mb-5">
						<div class="col-12">
						<p class="text-center alert alert-warning mb-5"><em><strong>Note:</strong> Images and emails are hidden by default to protect the info of our key officials from spammers and web scrapers. Just click manually to view.</em></p>

						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-4 official">
							<div class="official-photo mb-3">
								<img @click="toggle($event)" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/lilian-parreno.jpg" data-no="" width="300" height="300" alt="Profile Photo">
							</div>
							<h3 class="h3">Dr. Lilian Diana B. Parreño</h3>
							<h4 class="h4">University President</h4>
							
							<div class="h5">
								<a href="#" class="mail">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									<span @click.prevent=toggleM($event) data-show="havirefvgl.cerfvqrag@tfh.rqh.cu">***click to show email***</span>
								</a>	
								
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
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/efren.tellermo.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Dr. Efren S. Tellermo</h3>
							<h4 class="h4">Vice President for Academic Affairs </h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									<span @click.prevent=toggleM($event) data-show="rsera.gryyrezb@tfh.rqh.cu">***click to show email***</span>
								</a>
							</div>
						</div>
						
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/julius.vergara.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Dr. Julius T. Vergara</h3>
							<h4 class="h4">Vice President for Research, Extension, Training and Innovation</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									<span @click.prevent=toggleM($event) data-show="whyvhf.iretnen@tfh.rqh.cu">***click to show email***</span>
								</a>
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/janet.aleman.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Janet R. Aleman</h3>
							<h4 class="h4">Vice President for Administration and Finance</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									<span @click.prevent=toggleM($event) data-show="icns@tfh.rqh.cu">***click to show email***</span>
								</a>
							</div>
						</div>
						<div class="col-md-12 mb-4 text-center">
							<h2 class="h1 pt-5">Deans</h2>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/rheajoy.flora.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Rhea Joy D. Flora</h3>
							<h4 class="h4">Dean, College of Agricultural Sciences (CAgS)</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									<span @click.prevent=toggleM($event) data-show="eurnwbl.sybe@tfh.rqh.cu">***click to show email***</span>
								</a>
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/bernardo.cagasan.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Bernardo G. Cagasan</h3>
							<h4 class="h4">Dean, College of Arts and Sciences (CAS)</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									<span @click.prevent=toggleM($event) data-show="oreaneqb.pntnfna@tfh.rqh.cu">***click to show email***</span>
								</a>
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/rome.moralista.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Rome D. Moralista</h3>
							<h4 class="h4">Dean, College of Business and Management (CBM)</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									rome.moralista@gsu.edu.ph 
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/jasmin.parreno.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Jasmin L. Parreño</h3>
							<h4 class="h4">Dean, College of Criminal Justice Education (CCJE)</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									<span @click.prevent=toggleM($event) data-show="wnfzva.cneerab@tfh.rqh.cu">***click to show email***</span>
								</a>
							</div>
						</div>
						
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/ruben.habana.jpg" width="250" height="250" alt="ProfileProfile Photo">
							</div>
							<h3 class="h3">Engr. Ruben M. Habaña</h3>
							<h4 class="h4">Dean, College of Engineering and Industrial Technology (CEIT)</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									ruben.habana@gsu.edu.ph
								</a>	
							</div>

						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/adrian.forca.jpg" width="250" height="250" alt="Profile Photo">
							</div>
							<h3 class="h3">Dr. Adrian J. Forca</h3>
							<h4 class="h4">Dean, College of Science and Technology (CST)</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									<span @click.prevent=toggleM($event) data-show="nqevna.sbepn@tfh.rqh.cu">***click to show email***</span>
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/jasmin.gadian.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Jasmin T. Gadian</h3>
							<h4 class="h4">Dean, College of Teacher Education (CTE)</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									jasmin.gadian@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/erly.martir.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Erly M. Martir</h3>
							<h4 class="h4">Dean, Graduate School</h4>
							<div class="h5">
								<a href="#">
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
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/kert.pillora.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Kert D. Pillora</h3>
							<h4 class="h4">Campus Director, Mosqueda Campus</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									kert.pillora@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-6 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/rheajoy.flora.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Rhea Joy D. Flora</h3>
							<h4 class="h4">Campus Director, Baterna Campus</h4>
							<div class="h5">
								<a href="#">
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
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/ken.pillora.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Ken D. Pillora</h3>
							<h4 class="h4">Head, Supply and Property Management Office / Supervising Administrative Officer - Admin</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									ken.pillora@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/rechel.pillora.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Ma. Rechel A. Pillora</h3>
							<h4 class="h4">Head, Human Resource Management Office (HRMO) / Administrative Officer V</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									marechel.pillora@gsu.edu.ph
								</a>	
							</div>
						</div>

						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/ijieline.gallo.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Ijieline F. Gallo </h3>
							<h4 class="h4">Head, Records and Archives Office / Administrative Officer V</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									ijieline.gallo@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/ian.gallo.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Engr. Ian G. Gallo</h3>
							<h4 class="h4">Head, General Services Office (GSO) / Administrative Officer V</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									ian.gallo@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/hazel.jarangue.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Hazel D. Jarangue</h3>
							<h4 class="h4">Head, Cashier Office / Administrative Officer V</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									hazel.jarangue@gsu.edu.ph
								</a>	
							</div>
						</div>

						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/randy.galve.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Randy G. Galve</h3>
							<h4 class="h4">Head, Procurement Office / Administrative Officer V</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									randy.galve@gsu.edu.ph
								</a>	
							</div>
						</div>
						
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/janet.aleman.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Janet R. Aleman</h3>
							<h4 class="h4">Head, Bids and Awards Committee</h4>
							<div class="h5">
								<!-- <a href="#">
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
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/ann.tumapang.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Ann Lyn S. Tumapang</h3>
							<h4 class="h4">Chief Administrative Officer - Finance Division</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									annlyn.tumapang@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/philippe.prologo.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Philippe R. Prologo</h3>
							<h4 class="h4">Supervising Administrative Officer - Finance Division</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									philippe.prologo@gsu.edu.ph
								</a>	
							</div>
						</div>

						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/eunicehannah.traifalgar.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Eunice Hannah V. Traifalgar</h3>
							<h4 class="h4">Head, Accounting Office / Accountant III</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									eunicehannah.traifalgar@gsu.edu.ph
								</a>	
							</div>
						</div>

						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/frennie.zarate.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Frennie D. Zarate</h3>
							<h4 class="h4">Head, Budget Office / Administrative Officer V</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									frennie.zarate@gsu.edu.ph
								</a>	
							</div>
						</div>

						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/erwin.dumagpi.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Erwin D. Dumagpi</h3>
							<h4 class="h4">Director, Economic Development Center (EDC)</h4>
							<div class="h5">
								<a href="#">
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
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/violeta.efondo.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Violeta C. Efondo</h3>
							<h4 class="h4">Director, Office of Student Development and Services</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									violeta.efondo@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/jean.baterzal.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Jean G. Baterzal</h3>
							<h4 class="h4">University Medical Office / Nurse II</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									jean.baterzal@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/rosebelle.tembrevilla.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Rosebelle V. Tembrevilla</h3>
							<h4 class="h4">University Guidance Office / Guidance Counselor III</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									rosebelle.tembrevilla@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Ronel P. Dulla</h3>
							<h4 class="h4">Registrar's Office / Registrar III</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									ronel.dulla@gsu.edu.ph
								</a>	
							</div>
						</div>
						
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/regina.traifalgar.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Regina V. Traifalgar</h3>
							<h4 class="h4">University Library / Librarian III</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									regina.traifalgar@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/maxy.yanguas.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Ma. Xy J. Yanguas</h3>
							<h4 class="h4">National Service Training Program</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									maxy.yanguas@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/roger.rueda.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Roger B. Rueda</h3>
							<h4 class="h4">Director, Instructional Materials Development Office</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									roger.rueda@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/leopoldo.tumapang.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Leopoldo Third R. Tumapang</h3>
							<h4 class="h4">Director, Sports and Wellness Office</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									leopoldo.tumapang@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/khristian.delarama.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Khristian T. De la Rama</h3>
							<h4 class="h4">Director, Cultural Affairs, Traditional and Contemporary Arts</h4>
							<div class="h5">
								<a href="#">
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
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/adrian.alumbro.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Adrian C. Alumbro</h3>
							<h4 class="h4">Director, University Research and Development Office</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									adrian.alumbro@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/eric.catalan.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Eric P. Catalan</h3>
							<h4 class="h4">Director, Industrial Technology Research and Development Center (ITRDC) / Affiliated Renewable Energy Center (AREC)</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									eric.catalan@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/frenz.gal.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Frenz Rian G. Gal</h3>
							<h4 class="h4">Director, Intellectual Property Management Office (IPMO)</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									frenz.gal@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/margie.delacruz.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Margie Y. De la Cruz</h3>
							<h4 class="h4">University Extension, Training and Development Services</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									margie.delacruz@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/joan.gerada.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Jo Ann T. Gerada</h3>
							<h4 class="h4">Director, Journal Publications & Instructional Materials Development</h4>
							<div class="h5">
								<a href="#">
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
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/josie.gaitano.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Josie H. Gaitano</h3>
							<h4 class="h4">Executive Assistant to the President</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									josie.gaitano@gsu.edu.ph
								</a>	
							</div>
						</div>

						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Nico G. Amarilla</h3>
							<h4 class="h4">Head, Information and Communications Technology Unit (ICTU)</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									<span @click.prevent=toggleM($event) data-show="avpb.nznevyyn@tfh.rqh.cu">***click to show email***</span>
								</a>	
							</div>
						</div>
						
						
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/christinejoy.villafuerte.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Christine Joy B. Villafuerte</h3>
							<h4 class="h4">Head, Internal Audit</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									christinejoy.villafuerte@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/felizardo.valdez.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Felizardo S. Valdez, III</h3>
							<h4 class="h4">Head, Project Management Unit</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									<span @click.prevent=toggleM($event) data-show="sryvmneqb.inyqrm@tfh.rqh.cu">***click to show email***</span>
								</a>
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/kitt.siva.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Enriqueta N. Siva</h3>
							<h4 class="h4">Director, Gender and Development (GAD)</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									enriqueta.siva@gsu.edu.ph
								</a>	
							</div>
						</div>

						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/joel.japitana.jpg" width="250" height="250" alt="Profile">
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
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/bessie.cebuano.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Bessie S. Cebuano</h3>
							<h4 class="h4">Head, Legal Unit / Legal Assistant III</h4>
							<div class="h5">	
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									<span @click.prevent=toggleM($event) data-show="orffvr.prohnab@tfh.rqh.cu">***click to show email***</span>
								</a>		
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/violeta.efondo.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Violeta C. Efondo</h3>
							<h4 class="h4">Head, Information Unit / Information Officer III</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									violeta.efondo@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/shyra.maximo.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Arch. Shyra V. Maximo</h3>
							<h4 class="h4">Head, Planning Unit</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									shyra.maximo@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/methus.perrocha.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Methusela C. Perrocha</h3>
							<h4 class="h4">Director, Quality Assurance (QA)</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									methusela.perrocha@gsu.edu.ph
								</a>	
							</div>
						</div>
						
						
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/jeffrey.magbanua.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Jeffrey G. Magbanua </h3>
							<h4 class="h4">Director, Alumni Affairs</h4>
							<div class="h5">
								<a href="#">
									<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
									jeffrey.magbanua@gsu.edu.ph
								</a>	
							</div>
						</div>
						<div class="col-md-4 official ">
							<div class="official-photo-2 mb-3">
								<img @click="toggle($event)" data-no="" src="<?= get_stylesheet_directory_uri(); ?>/images/officials/zzz.jpg" data-me="<?= get_stylesheet_directory_uri(); ?>/images/officials/arthur.soquena.jpg" width="250" height="250" alt="Profile">
							</div>
							<h3 class="h3">Dr. Arthur C. Soqueña</h3>
							<h4 class="h4">Director, Public Image and Related Creative Affairs Office</h4>
							<div class="h5">
								<a href="#">
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
