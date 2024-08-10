<?php
/**
 * Template Name: Faculty Roster
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
			<div class="col-md-8 order-2">
				<!-- CAGS -->
				<div class="college mb-5 pb-5">
					<h2 id="cags" class="h1 mb-5 text-center">College of Agricultural Sciences</h2>
					<div class="row mb-5">
						<div class="col-md-4">
						</div>
						<div class="col-md-4 official">
							<div class="official-photo mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rheajoy.flora.jpg" alt="">
							</div>
							<h3 class="h3">Rhea Joy D. Flora</h3>
							<h4 class="h4">Dean</h4>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<!-- FACU -->
					<h3 class="h1 text-center mb-4">Faculty</h3>
					<div class="row mb-5">
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/adrian.alumbro.jpg" alt="">
							</div>
							<h3 class="h3">Adrian C. Alumbro</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/julius.vergara.jpg" alt="">
							</div>
							<h3 class="h3">Julius T. Vergara</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/gerald.gamo.jpg" alt="">
							</div>
							<h3 class="h3">Gerald Sheo Thon D. Gamo </h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/reynro.herrera.jpg" alt="">
							</div>
							<h3 class="h3">Reynro T. Herrera</h3>
						</div>
					</div>
				</div>
				<div class="college mb-5 pb-5">
					<h2 id="cst" class="h1 mb-5 text-center">College of Science and Technology</h2>
					<div class="row mb-5">
						<div class="col-md-4">
						</div>
						<div class="col-md-4 official">
							<div class="official-photo mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/adrian.forca.jpg" alt="">
							</div>
							<h3 class="h3">Adrian J. Forca</h3>

							<h4 class="h4">Dean</h4>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<h3 class="h1 text-center mb-4">Faculty</h3>
					<div class="row mb-5">
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/reiner.alminaza.jpg" alt="">
							</div>
							<h3 class="h3">Reiner Jun G. Alminaza</h3>
						</div>
						
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/simeon.cainday.jpg" alt="Sam Cainday">

							</div>
							<h3 class="h3">Simeon J. Cainday III</h3>

						</div>
						<!--
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" alt="">
							</div>
							<h3 class="h3">Jessierey Heart C. Gabo</h3>
						</div>
						
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" alt="">
							</div>
							<h3 class="h3">Loveson C. Gallos</h3>
						</div>
						
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" alt="">
							</div>
							<h3 class="h3">Kristine S. Gonzales</h3>
						</div>
						-->
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rodney.martires.jpg" alt="">
							</div>
							<h3 class="h3">Rodney N. Martires</h3>
						</div>
						
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/liezel.tabale.jpg" alt="">
							</div>
							<h3 class="h3">Liezel A. Tabale</h3>
						</div>
						
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" alt="">
							</div>
							<h3 class="h3">James Ryan B. Ga</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/divon.tamdang.jpg" alt="">
							</div>
							<h3 class="h3">Divon G. Tamdang</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/lea.ymalay.jpg" alt="">
							</div>
							<h3 class="h3">Lea P. Ymalay</h3>
						</div>
					</div>
				</div>
				<!--  -->
				<div class="college mb-5 pb-5">
					<h2 id="cbm" class="h1 mb-5 text-center">College of Business and Management</h2>
					<div class="row mb-5">
						<div class="col-md-4">
						</div>
						<div class="col-md-4 official">
							<div class="official-photo mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rome.moralista.jpg" alt="Rome Moralista">
							</div>
							<h3 class="h3">Rome B. Moralista</h3>
							<h4 class="h4">Dean</h4>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<h3 class="h1 text-center mb-4">Faculty</h3>
					<div class="row mb-5">
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/anelyn.anas.jpg" alt="">
							</div>
							<h3 class="h3">Anelyn P. Anas</h3>
						</div>
						<div class="col-md-4 official  mb-4">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/shiela.diaz.jpg" alt="">
							</div>
							<h3 class="h3">Shiela Mae A. Diaz</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ivony.asprilla.jpg" alt="">
							</div>
							<h3 class="h3">Ivony S. Asprilla</h3>
						</div>
						<div class="col-md-4 official  mb-4">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/kizzy.cariaga.jpg" alt="">
							</div>
							<h3 class="h3">Kissy G. Cariaga</h3>
						</div>
						<div class="col-md-4 official  mb-4">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/margie.delacruz.jpg" alt="">
							</div>
							<h3 class="h3">Margie Y. De la Cruz</h3>
						</div>
						<div class="col-md-4 official  mb-4">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/erwin.dumagpi.jpg" alt="">
							</div>
							<h3 class="h3">Erwin D. Dumagpi</h3>
						</div>
						<div class="col-md-4 official  mb-4">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/lovely.egael.jpg" alt="">
							</div>
							<h3 class="h3">Lovely Joy J. Egael</h3>
						</div>
						<div class="col-md-4 official  mb-4">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/yyy.jpg" alt="">
							</div>
							<h3 class="h3">Joeve Grace N. Gaborno</h3>
						</div>
						<div class="col-md-4 official  mb-4">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/revenlie.galapin.jpg" alt="">
							</div>
							<h3 class="h3">Revenlie G. Galapin</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ronald.gentapanan.jpg" alt="">
							</div>
							<h3 class="h3">Ronald G. Gentapanan</h3>
						</div>
						<div class="col-md-4 official  mb-4">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/daisy.ibieza.jpg" alt="">
							</div>
							<h3 class="h3">Daisy B. Ibieza</h3>
						</div>
						
						<div class="col-md-4 official  mb-4">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/anelyn.janaban.jpg" alt="">
							</div>
							<h3 class="h3">Anelyn A. Janaban</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ellyn.maramento.jpg" alt="">
							</div>
							<h3 class="h3">Ellyn Ly O. Maramento</h3>
						</div>
						
						<div class="col-md-4 official  mb-4">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/nenen.marquez.jpg" alt="">
							</div>
							<h3 class="h3">Nenen N. Marquez</h3>
						</div>
						<div class="col-md-4 official  mb-4">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rome.moralista.jpg" alt="">
							</div>
							<h3 class="h3">Rome B. Moralista</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/andrew.paguntalan.jpg" alt="">
							</div>
							<h3 class="h3">Andrew D. Paguntalan</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/arthur.soquena.jpg" alt="">
							</div>
							<h3 class="h3">Arthur C. Soqueña</h3>
						</div>
						<div class="col-md-4 official  mb-4">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/maychelle.sorongon.jpg" alt="">
							</div>
							<h3 class="h3">Maychelle P. Sorongon</h3>
						</div>
					</div>
				</div>
				<!--  -->
				<div class="college mb-5 pb-5">
					<h2 id="ccje" class="h1 mb-5 text-center">College of Criminal Justice Education</h2>
					<div class="row mb-5">
						<div class="col-md-4">
						</div>
						
						<div class="col-md-4 official">
							<div class="official-photo mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/aizle.eres.jpg" alt="Photo">
							</div>
							<h3 class="h3">Aizle  F. Eres</h3>
							<h4 class="h4">Dean (OIC)</h4>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<h3 class="h1 text-center mb-4">Faculty</h3>
					<div class="row mb-5">
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/jean.bullo.jpg" alt="">
							</div>
							<h3 class="h3">Jean G. Bullo</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/allan.david.jpg" alt="">
							</div>
							<h3 class="h3">Allan S. David</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/violeta.efondo.jpg" alt="">
							</div>
							<h3 class="h3">Violeta C. Efondo</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/aizle.eres.jpg" alt="">
							</div>
							<h3 class="h3">Aizle  F. Eres</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/jufel.fernandez.jpg" alt="">
							</div>
							<h3 class="h3">Jufel D. Fernandez</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" alt="Photo">
							</div>
							<h3 class="h3">Reynald T. Ladera</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/kert.pillora.jpg" alt="">
							</div>
							<h3 class="h3">Kert D. Pillora</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/shiela.paltiquera.jpg" alt="">
							</div>
							<h3 class="h3">Shiela Mae G. Paltiguera</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/jerry.salinas.jpg" alt="">
							</div>
							<h3 class="h3">Jerry H. Salinas</h3>
						</div>
					</div>
				</div>
				<div class="college mb-5 pb-5">
					<h2 id="cte" class="h1 mb-5 text-center">College of Teacher Education</h2>
					<div class="row mb-5">
						<div class="col-md-4">
						</div>
						<div class="col-md-4 official">
							<div class="official-photo mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/jasmin.gadian.jpg" alt="">
							</div>
							<h3 class="h3">Jasmin T. Gadian</h3>
							<h4 class="h4">Dean</h4>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<h3 class="h1 text-center mb-4">Faculty</h3>
					<div class="row mb-5">
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/gilbert.amistas.jpg" alt="">
							</div>
							<h3 class="h3">Gilbert A. Amistas</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/jocyl.caber.jpg" alt="">
							</div>
							<h3 class="h3">Jocyl C. Caber</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/josephine.deasis.jpg" alt="">
							</div>
							<h3 class="h3">Josephine G. de Asis</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/methus.perrocha.jpg" alt="">
							</div>
							<h3 class="h3">Methusela C. Perrocha</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/kitt.siva.jpg" alt="">
							</div>
							<h3 class="h3">Enriqueta N. Siva</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/joedar.satojito.jpg" alt="">
							</div>
							<h3 class="h3">Joedar P. Satojito</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/jeffrey.magbanua.jpg" alt="">
							</div>
							<h3 class="h3">Jeffrey G. Magbanua</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/sol.basanes.jpg" alt="">
							</div>
							<h3 class="h3">Sol M. Basañes</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/norie.palma.jpg" alt="">
							</div>
							<h3 class="h3">Norie H. Palma</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/joel.japitana.jpg" alt="">
							</div>
							<h3 class="h3">Joel V. Japitana</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/khristian.delarama.jpg" alt="">
							</div>
							<h3 class="h3">Khristian T. de la Rama</h3>
						</div>
					</div>
				</div>
				<!-- CAS -->
				<div class="college mb-5 pb-5">
					<h2 id="cas" class="h1 mb-5 text-center">College of Arts and Sciences</h2>
					<div class="row mb-5">
						<div class="col-md-4">
						</div>
						<div class="col-md-4 official">
							<div class="official-photo mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" alt="">
							</div>
							<h3 class="h3">Bernardo G. Cagasan</h3>
							<h4 class="h4">Dean</h4>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<!-- FACU -->
					<h3 class="h1 text-center mb-4">Social Science Department</h3>
					<div class="row mb-5">
						
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rey.arturo.jpg" alt="">
							</div>
							<h3 class="h3">Rey M. Arturo</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rosabeth.arturo.jpg" alt="">
							</div>
							<h3 class="h3">Rosabeth M. Arturo</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/raquel.buelva.jpg" alt="">
							</div>
							<h3 class="h3">Raquel T. Buelva</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/anthony.jalandoon.jpg" alt="">
							</div>
							<h3 class="h3">Anthony P. Jalando-on</h3>
						</div>
						
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/jimmy.luzuriaga.jpg" alt="">
							</div>
							<h3 class="h3">Jimmy P. Luzuriaga</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/katherine.niego.jpg" alt="">
							</div>
							<h3 class="h3">Katherine L. Niego</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/agatha.norilla.jpg" alt="">
							</div>
							<h3 class="h3">Agatha Rica B. Norilla</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ruby.catalan.jpg" alt="">
							</div>
							<h3 class="h3">Ruby D. Catalan</h3>
						</div>
					</div>
					<!-- FACU -->
					<h3 class="h1 text-center mb-4">Science Department</h3>
					<div class="row mb-5">
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/tommy.artajo.jpg" alt="">
							</div>
							<h3 class="h3">Tommy M. Artajo</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ana.encarquez.jpg" alt="">
							</div>
							<h3 class="h3">Ana P. Encarquez</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/joan.gerada.jpg" alt="">
							</div>
							<h3 class="h3">Jo Ann T. Gerada</h3>
						</div>
						
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/joebert.ramos.jpg" alt="">
							</div>
							<h3 class="h3">Joebert Diane Ramos</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/maxy.yanguas.jpg" alt="">
							</div>
							<h3 class="h3">Ma Xy J. Yanguas</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/monaliza.sollano.jpg" alt="">
							</div>
							<h3 class="h3">Mona Liza H. Sollano</h3>
						</div>
					</div>
					<!-- FACU -->
					<h3 class="h1 text-center mb-4">English Department</h3>
					<div class="row mb-5">
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/kyrl.palma.jpg" alt="">
							</div>
							<h3 class="h3">Kyrl S. Palma</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/agustin.arcena.jpg" alt="">
							</div>
							<h3 class="h3">Agustin N. Arceña</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/criste.dilag.jpg" alt="">
							</div>
							<h3 class="h3">Criste F. Dilag</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/jasmin.gadian.jpg" alt="">
							</div>
							<h3 class="h3">Jasmin T. Gadian</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/josie.gaitano.jpg" alt="">
							</div>
							<h3 class="h3">Josie H. Gaitano</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/beverly.garmay.jpg" alt="">
							</div>
							<h3 class="h3">Beverly F. Garmay</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/roger.rueda.jpg" alt="">
							</div>
							<h3 class="h3">Roger B. Rueda</h3>
						</div>
					</div>
					<!-- FACU -->
					<h3 class="h1 text-center mb-4">Mathematics Department</h3>
					<div class="row mb-5">
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/geraldo.cang.jpg" alt="">
							</div>
							<h3 class="h3">Geraldo B. Cang</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ethel.junco.jpg" alt="">
							</div>
							<h3 class="h3">Ethel P. Junco</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/mary.molate.jpg" alt="">
							</div>
							<h3 class="h3">Mary Joy T. Molate</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rodrigo.paglomutan.jpg" alt="">
							</div>
							<h3 class="h3">Rodrigo G. Paglomutan</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/efren.tellermo.jpg" alt="">
							</div>
							<h3 class="h3">Efren S. Tellermo</h3>
						</div>
					</div>
					<!-- FACU -->
					<h3 class="h1 text-center mb-4">Filipino Department</h3>
					<div class="row mb-5">
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/french.edang.jpg" alt="">
							</div>
							<h3 class="h3">French Mariee P. Edang</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/adora.gabayoyo.jpg" alt="">
							</div>
							<h3 class="h3">Adora B. Gabayoyo</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/nelson.rodriguez.jpg" alt="">
							</div>
							<h3 class="h3">Nelson J. Rodriguez</h3>
						</div>
					</div>
					<!-- FACU -->
					<h3 class="h1 text-center mb-4">PE Department</h3>
					<div class="row mb-5">
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/elishamajepphunee.isogon.jpg" alt="">
							</div>
							<h3 class="h3">Elishama Jepphunee D. Isogon</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ervin.isogon.jpg" alt="">
							</div>
							<h3 class="h3">Ervin L. Isogon</h3>
						</div>
						
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/leopoldo.tumapang.jpg" alt="">
							</div>
							<h3 class="h3">Leopoldo Third R. Tumapang</h3>
						</div>
					</div>
					<!-- FACU -->
					<h3 class="h1 text-center mb-4">Public Administration</h3>
					<div class="row mb-5">
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/jasmine.cadornigara.jpg" alt="">
							</div>
							<h3 class="h3">Jasmine L. Cadornigara</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/niel.gonzales.jpg" alt="">
							</div>
							<h3 class="h3">Niel John M. Gonzales</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/rodante.villaflor.jpg" alt="">
							</div>
							<h3 class="h3">Rodante G. Villaflor</h3>
						</div>
					</div>
					<!-- FACU -->
				</div>
				<!-- CEIT -->
				<div class="college mb-5 pb-5">
					<h2 id="ceit" class="h1 mb-5 text-center">College of Engineering and Industrial Technology</h2>
					<div class="row mb-5">
						<div class="col-md-4">
						</div>
						<div class="col-md-4 official">
							<div class="official-photo mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ruben.habana.jpg" alt="">
							</div>
							<h3 class="h3">Engr. Ruben M. Habaña</h3>
							<h4 class="h4">Dean</h4>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<!-- FACU -->
					<h3 class="h1 text-center mb-4">Faculty</h3>
					<div class="row mb-5">
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/joven.cablas.jpg" alt="">
							</div>
							<h3 class="h3">Engr. Joven C. Cablas</h3>
						</div>
						
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/conrado.calumpita.jpg" alt="">
							</div>
							<h3 class="h3">Engr. Conrado S. Calumpita </h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/eric.catalan.jpg" alt="">
							</div>
							<h3 class="h3">Eric P. Catalan</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/jonathan.gabion.jpg" alt="">
							</div>
							<h3 class="h3">Jonathan G. Gabion</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/elizabeth.gajo.jpg" alt="">
							</div>
							<h3 class="h3">Elizabeth G. Gajo</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/ralph.hervilla.jpg" alt="">
							</div>
							<h3 class="h3">Ralph P. Hervilla</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/aser.job.jpg" alt="">
							</div>
							<h3 class="h3">Aser M. Job</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/fernando.libutaque.jpg" alt="">
							</div>
							<h3 class="h3">Fernando J. Libutaque Jr.</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/alvin.bales.jpg" alt="">
							</div>
							<h3 class="h3">Alvin Erick C. Bales</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/michael.occena.jpg" alt="">
							</div>
							<h3 class="h3">Michael M. Occeña</h3>
						</div>
						<div class="col-md-4 official">
							<div class="official-photo-3 mb-3">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/officials/xxx.jpg" alt="">
							</div>
							<h3 class="h3">Salem John P. Suelon</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 order-1 mb-5">
				<nav class="page-sub-menu college-menu scrolling-nav mb-5">
					<ul>
						<li>
							<a href="#cags" class="d-flex align-items-center" style="line-height: 1.2">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CAGS-sm.png" width="60" height="60" alt="">
								<span>College of Agricultural Sciences (CAgS)</span>
							</a>
						</li>
						<li>
							<a href="#cas" class="d-flex align-items-center" style="line-height: 1.2">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CAS-sm.png" width="60" height="60" alt="">
								<span>College of Arts and Sciences (CAS)</span>
							</a>
						</li>
						<li>
							<a href="#cbm" class="d-flex align-items-center" style="line-height: 1.2">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CBM-sm.png" width="60" height="60" alt="">
								<span>College of Business and Management (CBM)</span>
							</a>
						</li>
						<li>
							<a href="#ccje" class="d-flex align-items-center" style="line-height: 1.2">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CCJE-sm.png" width="60" height="60" alt="">
								<span>College of Criminal Justice Education (CCJE)</span>
							</a>
						</li>
						<li>
							<a href="#ceit" class="d-flex align-items-center" style="line-height: 1.2">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CEIT-sm.png" width="60" height="60" alt="">
								<span>College of Engineering and Industrial Technology (CEIT)</span>
							</a>
						</li>
						<li>
							<a href="#cst" class="d-flex align-items-center" style="line-height: 1.2">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CST-sm.png" width="60" height="60" alt="">
								<span>College of Science and Technology (CST)</span>
							</a>
						</li>
						<li>
							<a href="#cte" class="d-flex align-items-center" style="line-height: 1.2">
								<img src="<?= get_stylesheet_directory_uri(); ?>/images/logos/CTE-sm.png" width="60" height="60" alt="">
								<span>College of Teacher Education (CTE)</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
