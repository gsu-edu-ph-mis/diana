<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Diana
 * subpackage Diana 1.0
 */
?>
<button type="button" id="back-to-top" class="back-to-top">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M14,20H10V11L6.5,14.5L4.08,12.08L12,4.16L19.92,12.08L17.5,14.5L14,11V20Z" /></svg>
</button>
<div class="text-center">

    <section class="section-subfooter pt-5 pb-5 text-left">
		<div class="container">
			<div class="row">
				<div class="col-md-3 mb-3 mb-md-0">
					<h2 class="h2">
						<a href="<?= home_url('/federated-faculty-association'); ?>" class="text-light">Federated Faculty Association</a>
					</h2>
					<p>The FFA seal embodies a shield like shape that will defend the members of the association from all the atrocities of this challenging world.</p>
				</div>
				<div class="col-md-3 mb-3 mb-md-0">
					<h2 class="h2">
						<a href="<?= home_url('/careers'); ?>" class="text-light">Careers</a>
					</h2>
					<p>View list of vacant positions and job openings.</p>
				</div>
				<div class="col-md-3 mb-3 mb-md-0">
					<h2 class="h2">
						<a href="<?= home_url('/bids-and-awards-committee'); ?>" class="text-light">Bid Opportunity</a>
					</h2>
					<p>Participate in our bidding process.</p>
				</div>
				<div class="col-md-3 mb-3 mb-md-0">
					<h2 class="h2">
						<a href="<?= home_url('/downloads'); ?>" class="text-light">Downloads</a>
					</h2>
					<p>Downloadable documents for students, faculty, and staff.</p>
				</div>
			</div>
		</div>
	</section>
	<section id="section-apps" class="section-apps pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<a href="http://siasonline.gsu.edu.ph" class="btn d-flex justify-content-center align-items-end flex-wrap">
						<img width="98px" height="30px" src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-sias.png" alt="SIASOnline">
					</a>
				</div>
				<div class="col-4">
					<a href="https://www.facebook.com/GuimarasStateUniversity" class="btn d-flex justify-content-center align-items-center flex-wrap">
						<img width="98px" height="30px" src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-fb.png" alt="Facebook">
					</a>
				</div>
				<div class="col-4">
					<a href="https://hris.gsu.edu.ph" class="btn d-flex justify-content-center align-items-center flex-wrap">
						<img width="98px" height="30px" src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-hris.png" alt="HRIS">
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="<?= home_url(); ?>/transparency-seal"><img class="mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/transparency-seal-sm.png" width="200" height="200" alt="TS"></a>
					<h2 class="h3 mb-4">Transparency Seal</h2>
					<p class="text-left">A pearl buried inside a tightly-shut shell is practically worthless. Government information is a pearl, meant to be shared with the public in order to maximize its inherent value. </p>

				</div>
				<div class="col-md-3">
					<a href="https://arta.gov.ph/"><img class="mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arta-sm.png" width="200" height="200" alt="ARTA"></a>
					<h2 class="h3 mb-4">ARTA</h2>
					<p class="text-left">A Philippine Government that is clean, just, highly efficient, technology-enabled and people-centered which enables a high-trust society with a globally competitive service and business environment.</p>
				</div>
				<div class="col-md-3">
					<a href="https://www.foi.gov.ph/requests?agency=GSU"><img class="mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/FOI-logo-sm.png" width="200" height="200" alt="FOI"></a>
					<h2 class="h3 mb-4">Freedom of Information</h2>
					<p class="text-left">Freedom of Information aims to promote an open government by increasing the transparency of the executive branch and its agencies.</p>
				</div>
				<div class="col-md-3">
					<a href="<?= home_url('/citizens-charter'); ?>"><img class="mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-gsu.png" width="200" height="200" alt="FOI"></a>
					<h2 class="h3 mb-4">Citizen's Charter</h2>
					<p class="text-left">Contains the most current and updated service standards of the Guimaras State University.</p>
				</div>
			</div>
		</div>
	</section>
</div>

<footer class="footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 mb-5">
                <h3 class="h3 mb-3">Guimaras State University</h3>
                <p>&copy; 2024. All Rights Reserved.</p>
            </div>
            <div class="col-6 col-md-4">
                <h3 class="h3 mb-3">About GSU</h3>
                <p class="mb-3">Learn more about the Guimaras State University, its structure, how it works and the people behind it.</p>
                <ul class="p-0 ml-4">
                    <li><a href="<?= home_url('/brief-history'); ?>">History</a></li>
                    <li><a href="<?= home_url('/academic-programs'); ?>">Academics</a></li>
                    <li><a href="<?= home_url('/key-officials'); ?>">Key Officials</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-3">
                <h3 class="h3 mb-3">Government Links</h3>
                <ul class="p-0 ml-5">
                    <li><a target="_blank" href="http://president.gov.ph/">Office of the President</a></li>
                    <li><a target="_blank" href="http://ovp.gov.ph/">Office of the Vice President</a></li>
                    <li><a target="_blank" href="http://www.senate.gov.ph/">Senate of the Philippines</a></li>
                    <li><a target="_blank" href="http://www.congress.gov.ph/">House of Representatives</a></li>
                    <li><a target="_blank" href="http://sc.judiciary.gov.ph/">Supreme Court</a></li>
                    <li><a target="_blank" href="http://ca.judiciary.gov.ph/">Court of Appeals</a></li>
                    <li><a target="_blank" href="http://sb.judiciary.gov.ph/">Sandiganbayan</a></li>
                    <li><a target="_blank" href="https://psahelpline.ph/">PSA Helpline</a></li>
                </ul>
            </div>
        </div>
		<div class="row">
			<p class="col-md-12 pt-5 text-right mb-0"><em>&copy; 2024 - by <a href="https://ict.gsu.edu.ph/about-us">ICT Unit</a></em></p>
		</div>
    </div>
</footer>
<script>
    window.homeUrl = "<?= home_url(); ?>";
    window.mediaDirUrl = "<?= get_stylesheet_directory_uri('/media'); ?>";
</script>
<?php wp_footer(); ?>
</body><!--
    ____  _           __        ___        ____                  _                __             _   ___               ___   
   / __ \(_)  _____  / /____   ( _ )      / __ \____ ___________(_)___  ____     / /_  __  __   / | / (_)________     /   |  
  / /_/ / / |/_/ _ \/ / ___/  / __ \/|   / /_/ / __ `/ ___/ ___/ / __ \/ __ \   / __ \/ / / /  /  |/ / / ___/ __ \   / /| |  
 / ____/ />  </  __/ (__  )  / /_/  <   / ____/ /_/ (__  |__  ) / /_/ / / / /  / /_/ / /_/ /  / /|  / / /__/ /_/ /  / ___ |_ 
/_/   /_/_/|_|\___/_/____/   \____/\/  /_/    \__,_/____/____/_/\____/_/ /_/  /_.___/\__, /  /_/ |_/_/\___/\____/  /_/  |_(_)
                                                                                    /____/                                   
                                                                                                                                                  
--></html>
