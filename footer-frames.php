<?php
/**
 * The template for displaying the footer frames
 *
 * @package WordPress
 * @subpackage Diana
 * subpackage Diana 1.0
 */
?>

<div class="text-center">

    <section class="section-apps pt-5 pb-5 text-center">
		<div class="container">
			<div class="row">
				<h2 class="h3 mb-5 col-md-12">Previous Frames</h2>
				<div class="col-md-3 mb-4 mb-md-0">
					<img width="60" src="<?=get_stylesheet_directory_uri(); ?>/images/frame-02-sm.jpg" alt="Frame 2">
					<p>1st University Week</p>
				</div>
				<div class="col-md-3 mb-4 mb-md-0">
					<img width="60" src="<?=get_stylesheet_directory_uri(); ?>/images/frame-01-sm.jpg" alt="Frame 1">
					<p>50th Commencement</p>
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
                    <li><a target="_blank" href="https://psahelpline.ph/">PSA Helpline</a></li>
                </ul>
            </div>
        </div>
		<div class="row">
			<p class="col-md-12 pt-5 text-right mb-0"><em>&copy; 2022 - by <a href="https://mis.gsu.edu.ph">MIS Team</a></em></p>
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
