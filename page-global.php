<?php
/**
 * Template Name: Global
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
			<div class="order-2 col-md-9">
				<h2 id="alumni" class="h2">Alumni</h2>
				<p>Guimaras State College Federated Alumni Association, Inc. (GSCFAAI). Visit their website below:</p>
				<p class="text-center mb-5">
					<a href="https://sites.google.com/a/gsc.edu.ph/gscfaai" target="_blank">
						<svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path></svg> https://sites.google.com/a/gsc.edu.ph/gscfaai
					</a>
				</p>
				<hr>
				<h2 id="linkages" class="h2 mb-4 mt-4">Linkages and Partners</h2>
				<div class="bg-white p-4 mb-5">
					<h3 class="h3 mb-5 text-center">Higher Education Institution Partners</h3>
					<div class="row">
						<div class="col-md-6 text-center mb-5">
							<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/ctu.jpg" alt="CTU"></p>
							<h4 class="h5">Cebu Technological University</h4>
						</div>
						<div class="col-md-6 text-center mb-5">
							<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/tau.jpg" alt="logo"></p>
							<h4 class="h5">Tarlac Agricultural University</h4>
						</div>
						<div class="col-md-6 text-center mb-5">
							<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/gcc.jpg" alt="logo"></p>
							<h4 class="h5">Guam Community College</h4>
						</div>
						<div class="col-md-6 text-center mb-5">
							<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/mendelu.jpg" alt="logo"></p>
							<h4 class="h5">Mendel University</h4>
						</div>
					</div>
				</div>

				<div class="bg-white p-4 mb-5">
					<h3 class="h3 mb-5 text-center">INTERNATIONAL GOVERNMENT LINKAGES</h3>
					<!-- 1 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 mb-4 text-success">Linkage #1</h4>
							<p><strong>Nature of Linkage:</strong> Collaboration in Research and Conservation of Irrawaddy Dolphins (Orcaella Brevirostris)</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Funding and Technical Assistance</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/gtz.jpg" alt="logo"></p>
									<h4 class="h5">Gesellschaft fur Tecnische Zusammenarbeit or German Technical Cooperation (GTZ)</h4>
								</div>
								<div class="col-md-6 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/tmrc-su.jpg" alt="logo"></p>
									<h4 class="h5">Tropical Marine Research Center, Siliman University <br>(TMRC-SU)</h4>
								</div>
								<div class="col-md-6 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/dlsu-mla.jpg" alt="logo"></p>
									<h4 class="h5">De la Salle University and Guimaras State College</h4>
								</div>
							</div>
						</div>
					</div>
					
					<!-- 2 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #2</h4>
							<h4 class="h5 mb-4">Manila Economic and Cultural Office (MECO) in Taiwan</h4>
							<p><strong>Nature of Linkage:</strong> Collaboration in Taiwanese Project</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Funding and Technical Assistance</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/meco.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					
					<!-- 3 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #3</h4>
							<h4 class="h5 mb-4">Google Philippines</h4>
							<p><strong>Nature of Linkage:</strong> Collaboration on Guimaras Island Mapping</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Technical Assistance</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/google.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					
					<!-- 4 -->
					<div class="row align-items-center"> 
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #4</h4>
							<h4 class="h5 mb-4">Google Educators Group (GEG)</h4>
							<p><strong>Nature of Linkage:</strong>  Collaboration on Training Teachers to be globally Competitive</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Training Assistance</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/geg.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					
					<!-- 5 -->
					<div class="row align-items-center"> 
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #5</h4>
							<h4 class="h5 mb-4">World Intellectual Property Office (WIPO)</h4>
							<p><strong>Nature of Linkage:</strong>  Collaboration in Research Output Protection</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Technical Assistance</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/wipo.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					
					<!-- 6 -->
					<div class="row align-items-center"> 
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #6</h4>
							<h4 class="h5 mb-4">Anglo Japanese American Registrars (AJA)</h4>

							<p><strong>Nature of Linkage:</strong>   Collaboration in ISO Certification</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Technical Assistance</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/aja.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bg-white p-4 mb-5">
					<h3 class="h3 mb-5 text-center">NATIONAL/ REGIONAL/ LOCAL GOVERNMENT LINKAGES</h3>
					<!-- 7 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #7</h4>
							<h4 class="h5 mb-4">Commission on Higher Education (CHED)</h4>
							<p><strong>Nature of Linkage:</strong> Research Collaboration</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Fund Assistance, Training Assistance/Capability Building, (GIA, etc.)</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/ched.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 8 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #8</h4>
							<h4 class="h5 mb-4">DOST-PCAARRD</h4>
							<p><strong>Nature of Linkage:</strong> Research Collaboration, Technical Development</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Fund Assistance, Training Assistance/Capability Building</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/dost-pcaarrd.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 9 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #9</h4>
							<h4 class="h5 mb-4">DOST</h4>
							<p><strong>Nature of Linkage:</strong> Research Collaboration, Technical Development</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Fund Assistance, Training Assistance/Capability Building</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/dost.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 10 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #10</h4>
							<h4 class="h5 mb-4">PCIEERD</h4>
							<p><strong>Nature of Linkage:</strong> Research Collaboration, Technical Development</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Fund Assistance, Training Assistance/Capability Building</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/pcieerd.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 11 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #11</h4>
							<h4 class="h5 mb-4">WVCIEERD</h4>
							<p><strong>Nature of Linkage:</strong> Research Collaboration, Technical Development</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Fund Assistance, Training Assistance/Capability Building</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/wvcieerd.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 12 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #12</h4>
							<h4 class="h5 mb-4">WESVARRDECC</h4>
							<p><strong>Nature of Linkage:</strong> Research Collaboration, Technical Development</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Fund Assistance, Training Assistance/Capability Building</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/wesvarrdecc.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 13 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #13</h4>
							<h4 class="h5 mb-4">Department of Environment and Natural Resources (DENR)</h4>
							<p><strong>Nature of Linkage:</strong> Research Collaboration, Technical Development</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Fund Assistance, Training Assistance/Capability Building</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/denr.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 14 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #14</h4>
							<h4 class="h5 mb-4">Department of Agriculture - Bureau of Fisheries and Aquatic Resources (DA-BFAR)</h4>
							<p><strong>Nature of Linkage:</strong> Research Collaboration, Technical Development</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Fund Assistance, Training Assistance/Capability Building</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/bfar.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 15 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #15</h4>
							<h4 class="h5 mb-4">Department of Energy (DOE)</h4>
							<p><strong>Nature of Linkage:</strong> Research Collaboration, Technical Development</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Fund Assistance, Training Assistance/Capability Building</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/doe.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 16 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #16</h4>
							<h4 class="h5 mb-4">Department of Agriculture (DA)</h4>
							<p><strong>Nature of Linkage:</strong> Research Collaboration, Technical Development</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Fund Assistance, Training Assistance/Capability Building</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/da.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 17-->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #17</h4>
							<h4 class="h5 mb-4">National Mango Research and Development Center (NMRDC)</h4>
							<p><strong>Nature of Linkage:</strong> Research Collaboration, Technical Development</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Fund Assistance, Training Assistance/Capability Building</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/nmrdc.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 18-->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #18</h4>
							<h4 class="h5 mb-4">PASUC VI</h4>
							<p><strong>Nature of Linkage:</strong> Research Collaboration, Technical Development</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Fund Assistance, Training Assistance/Capability Building</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/pasuc-vi.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 19-->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #19</h4>
							<h4 class="h5 mb-4">PENRO-Guimaras</h4>
							<p><strong>Nature of Linkage:</strong> Research Collaboration, Technical Development</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Technical Assistance/Capability Building</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/penro-guim.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 20 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #20</h4>
							<h4 class="h5 mb-4">UPV and other SUCs</h4>
							<p><strong>Nature of Linkage:</strong> Research Collaboration, Technical Development</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Technical Assistance/Capability Building</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/upv.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 21 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #21</h4>
							<h4 class="h5 mb-4">DILG Region VI</h4>

							<p><strong>Nature of Linkage:</strong> Research Collaboration, Technical Development</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Technical Assistance/Capability Building</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/dilg-vi.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 22 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #22</h4>
							<h4 class="h5 mb-4">Intellectual Property Office of the Philippines (IPOPHL)</h4>
							<p><strong>Nature of Linkage:</strong> Collaboration in Research Output Protection</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Patent Assistance/Technical Assistance</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/ipophil.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 23 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #23</h4>
							<h4 class="h5 mb-4">Philippine Coconut Authority (PCA)</h4>

							<p><strong>Nature of Linkage:</strong>  Research Collaboration</p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Technical Assistance/Capability Building</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/pca.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 24 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #24</h4>
							<h4 class="h5 mb-4">Technical Education And Skills Development Authority (TESDA)</h4>
							<p><strong>Nature of Linkage:</strong>  Skills Training </p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Training and Technical Assistance</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/tesda.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 25 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #25</h4>
							<h4 class="h5 mb-4">Provincial Government of Guimaras</h4>

							<p><strong>Nature of Linkage:</strong>  Research Collaboration </p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Fund Assistance</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/lgu-guim.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 26 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #26</h4>
							<h4 class="h5 mb-4">Municipality of San Lorenzo</h4>

							<p><strong>Nature of Linkage:</strong>  Research Collaboration </p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Fund Assistance</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/lgu-guim-sanlo.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 27 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #27</h4>
							<h4 class="h5 mb-4">Municipality of Buenavista</h4>

							<p><strong>Nature of Linkage:</strong>  Research Collaboration </p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Fund Assistance</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/lgu-guim-bta.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 28 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #28</h4>
							<h4 class="h5 mb-4">Municipality of Jordan</h4>
							<p><strong>Nature of Linkage:</strong>  Research Collaboration </p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Fund Assistance</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/lgu-guim-jord.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 29 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #29</h4>
							<h4 class="h5 mb-4">Municipality of Nueva Valencia</h4>
							<p><strong>Nature of Linkage:</strong>  Research Collaboration </p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Fund Assistance</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/lgu-guim-nueva.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 30 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #30</h4>
							<h4 class="h5 mb-4">Department of Information and Communications Technology</h4>
							<p><strong>Nature of Linkage:</strong>  Research Collaboration </p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Fund Assistance</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/dict.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 31 -->
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 order-md-2">
							<h4 class="h4 text-success">Linkage #31</h4>
							<h4 class="h5 mb-4">Department of Education (DepEd)</h4>
							<p><strong>Nature of Linkage:</strong>  Research Collaboration </p>
							<p><strong>Benefits derived from the Assistance Provided:</strong> Technical Assistance</p>
						</div>
						<div class="col-md-6 order-md-1">
							<div class="row">
								<div class="col-md-12 text-center mb-5">
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/deped.jpg" alt="logo"></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="order-1 col-md-3 mb-5">
				<nav class="page-sub-menu scrolling-nav">
					<ul>
						<li><a href="#alumni">Alumni</a></li>
						<li><a href="#linkages">Linkages and Partners</a></li>
					</ul>
				</nav>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
