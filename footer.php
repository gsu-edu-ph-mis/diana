<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Diana
 * subpackage Diana 1.0
 */
?>

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
				<div class="col-3">
					<a href="https://siasonline.gsc.edu.ph" class="btn d-flex justify-content-center align-items-end flex-wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/siaso.png" alt="SIASOnline">
						<span>Online</span>
					</a>
				</div>
				<div class="col-3">
					<a href="https://www.facebook.com/GuimarasStateCollege" class="btn d-flex justify-content-center align-items-center flex-wrap">
						<svg style="width:32px;height:32px" viewBox="0 0 24 24">
							<path fill="currentColor" d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" />
						</svg>
						<span>Facebook</span>
					</a>
				</div>
				<div class="col-3">
					<a href="<?= home_url('/citizens-charter'); ?>" class="btn d-flex justify-content-center align-items-center flex-wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/charter.png" alt="Citizens Charter">
						<span>Citizen's Charter</span>
					</a>
				</div>
				<div class="col-3">
					<a href="https://hris.gsc.edu.ph" class="btn d-flex justify-content-center align-items-center flex-wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hris.png" alt="HRIS">
						<span>HRIS</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a href="<?= home_url(); ?>/transparency-seal"><img class="mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/transparency-seal-sm.png" width="200" height="200" alt="TS"></a>
					<h2 class="h3 mb-4">Transparency Seal</h2>
					<p class="text-left">A pearl buried inside a tightly-shut shell is practically worthless. Government information is a pearl, meant to be shared with the public in order to maximize its inherent value. </p>

				</div>
				<div class="col-md-4">
					<a href="https://arta.gov.ph/"><img class="mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arta-sm.png" width="200" height="200" alt="ARTA"></a>
					<h2 class="h3 mb-4">ARTA</h2>
					<p class="text-left">A Philippine Government that is clean, just, highly efficient, technology-enabled and people-centered which enables a high-trust society with a globally competitive service and business environment.</p>
				</div>
				<div class="col-md-4">
					<a href="https://www.foi.gov.ph/"><img class="mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/FOI-logo-sm.png" width="200" height="200" alt="FOI"></a>
					<h2 class="h3 mb-4">Freedom of Information</h2>
					<p class="text-left">Freedom of Information aims to promote an open government by increasing the transparency of the executive branch and its agencies.</p>
				</div>
			</div>
		</div>
	</section>
</div>

<footer class="footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 mb-5">
                <h3 class="h3 mb-3">Republic of the Philippines</h3>
                <p>All content is in the public domain unless otherwise stated.</p>
            </div>
            <div class="col-6 col-md-4">
                <h3 class="h3 mb-3">About GOVPH</h3>
                <p class="mb-3">Learn more about the Philippine government, its structure, how government works and the people behind it.</p>
                <ul class="p-0 ml-4">
                    <li><a target="_blank" href="http://www.gov.ph/">GOV.PH</a></li>
                    <li><a target="_blank" href="http://www.gov.ph/data">Open Data Portal</a></li>
                    <li><a target="_blank" href="http://www.officialgazette.gov.ph/">Official Gazette</a></li>
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
                </ul>
            </div>
        </div>
    </div>
</footer>
<script>
    window.homeUrl = "<?= home_url(); ?>";
</script>
<?php wp_footer(); ?>
</body><!--
  __  __ _____  _____   _______                     ___   ___ ___  ___      _____      _                   _   _ _              __  __            _        _  __    _     _           
 |  \/  |_   _|/ ____| |__   __|                   |__ \ / _ \__ \|__ \ _  |  __ \    (_)                 | \ | (_)            |  \/  |          | |      | |/ /   (_)   | |          
 | \  / | | | | (___      | | ___  __ _ _ __ ___      ) | | | | ) |  ) (_) | |__) |___ _ _ __   ___ _ __  |  \| |_  ___ ___    | \  / | __ _ _ __| | __   | ' / ___ _ ___| |__   __ _ 
 | |\/| | | |  \___ \     | |/ _ \/ _` | '_ ` _ \    / /| | | |/ /  / /    |  _  // _ \ | '_ \ / _ \ '__| | . ` | |/ __/ _ \   | |\/| |/ _` | '__| |/ /   |  < / _ \ / __| '_ \ / _` |
 | |  | |_| |_ ____) |    | |  __/ (_| | | | | | |  / /_| |_| / /_ / /_ _  | | \ \  __/ | | | |  __/ |_   | |\  | | (_| (_) |  | |  | | (_| | |  |   < _  | . \  __/ \__ \ | | | (_| |
 |_|  |_|_____|_____/     |_|\___|\__,_|_| |_| |_| |____|\___/____|____(_) |_|  \_\___|_|_| |_|\___|_( )  |_| \_|_|\___\___( ) |_|  |_|\__,_|_|  |_|\_( ) |_|\_\___|_|___/_| |_|\__,_|
                                                                                                     |/                    |/                         |/                              
                                                                                                                                                                                                                                                                                                              \|___|/                                           \|___|/                                                     \|___|/                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
--></html>
