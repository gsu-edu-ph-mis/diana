<?php
/**
 * Template Name: Transparency Seal
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
				<div class="row">
					<div class="col-md-4">
						<div id="symbolism" class="text-center mb-5">
							<img src="<?= get_stylesheet_directory_uri(); ?>/images/transparency-seal-sm.png" alt="TS">
						</div>	
					</div>
					<div class="col-md-7">
						<h2 class="h1 mb-4">Symbolism</h2>
						<p class="h1 mb-3" style="font-weight: 300; font-style: italic">A pearl buried inside a tightly-shut shell is practically worthless. Government information is a pearl, meant to be shared with the public in order to maximize its inherent value. </p>
					</div>
				</div>
				
				<p>The Transparency Seal, depicted by a pearl shining out of an open shell, is a symbol of a policy shift towards openness in access to government information. On the one hand, it hopes to inspire Filipinos in the civil service to be more open to citizen engagement; on the other, to invite the Filipino citizenry to exercise their right to participate in governance.</p>

				<p>This initiative is envisioned as a step in the right direction towards solidifying the position of the Philippines as the Pearl of the Orient – a shining example for democratic virtue in the region.</p>

				<!-- <h2 class="h2 mt-5">National Budget Circular No. 542</h2>

				<p>A Transparency Seal, prominently displayed on the main page of the website of a particular government agency, is a certificate that it has complied with the requirements of <a target="_blank" href="https://www.dbm.gov.ph/wp-content/uploads/Issuances/2012/National%20Budget%20Circular/NBC542/NBC542.pdf">Section 93 of National Budget Circular No. 542</a>.</p> -->


				<ol type="I" class="pl-5 pt-5">
					<li id="mandate">
						Agency’s Mandate, Vision, Mission and List of Officials	
						<ol type="A">
							<li><a target="_blank" href="<?= home_url('/the-mandate/'); ?>">Agency’s Mandate</a></li>
							<li><a target="_blank" href="<?= home_url('/vision-mission-goals/'); ?>">VMGO</a></li>
							<li><a target="_blank" href="<?= home_url('/key-officials/'); ?>">List of Officials</a></li>
						</ol>
					</li>
					<li id="annual-financial">Annual Financial Reports
						<ol type="A" class="pl-5">
							<li>FAR No. 1: SAAODB (Statement of Appropriations, Allotments, Obligations, Disbursements and Balances)
								<ul>
									<li>FY 2024 - 
										<a target="_blank" href="https://drive.google.com/file/d/13O2x7WRJaP1xVjYPQbt--PpudwwMky46/preview">Q1</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1zjvdWc7s5kqxwOd6EuHiYgYMMta62vWU/preview">Q2</a>
									</li>
									<li>FY 2023 - 
										<a target="_blank" href="https://drive.google.com/file/d/12n-Q7LWz-aV4Uh9mErEHFfEWBtm1RGr8/preview">Q1</a>,
										<a target="_blank" href="https://drive.google.com/file/d/15B138hg3JzOhUZeATwIh_RRfzsDkWPa2/preview">Q2</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1aVRtmND8LFpsxZQZhLIhJZ_NTSK9XQZ7/preview">Q3</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1rsILXO3wbkA9mAukrX5nSqSkKRYylOry/preview">Q4</a>
									</li>
									<li>FY 2022 - 
										<a target="_blank" href="https://drive.google.com/file/d/1ukFJ0UTmba5mmYWax_DSE2WhrvDE3CXO/preview">Q1</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1P28AO536BRoS4BPQX9_4iEG-Qpr5jOrf/preview">Q2</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1o0ZKIxh73Rzz6MS21mIzPm4iwKz9GCL3/preview">Q3</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1nUaxPNYts4kKID22j86Ah7MXxZZTJcvZ/preview">Q4</a>
									</li>
									<li>FY 2021 - 
										<a target="_blank" href="https://drive.google.com/file/d/1B9vcBx40dZfOM7JIqyN4A1mi3C7QWd2g/preview">Q1</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1ThwVprkKGVuWkbX-CIUWaRNia2cq7Isk/preview">Q2</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1WnxkIqtqDqXH0CusjIW7ubd_AX3tBbw8/preview">Q3</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1yR9np_o2RntXskrXR25sejScCCTtHlv5/preview">Q4</a>
									</li>
									<li>FY 2020 - 
										<a target="_blank" href="https://drive.google.com/file/d/1aSC9zjiLnX60QlBuBScpowUTXq-_CUKC/preview">Q1</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1xRhft1EMyWXPptrc4Xo9uSBOMya5OAXp/preview">Q2</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1rp9NhRcHp2CjL2fM514pXT135iBjQhnc/preview">Q3</a>, 
										Q4
									</li>
									<!-- <li>FY 2019 - 
										<a target="_blank" href="https://drive.google.com/file/d/1sQHlVp4muYL8vx1I0j-oJfeuuQIID2PR/preview">Q1</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1PAa0iF3dfi_uf9iaur8jCq_LlpIseph6/preview">Q2</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/10GzwSJDqzvjQOxXPKBCYHCP_k1NckmI-/preview">Q3</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1fFJyqBv6Iq7c4ociJ-ESdMDqAytn_7Xx/preview">Q4</a>
									</li>
									<li>FY 2018 - 
										<a target="_blank" href="https://drive.google.com/file/d/1gYIDToUsLqY8hFdHblveMCeT8vjG_Y0j/preview">Q1</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1_dsalzGhBh43ssVN_2a7j8saT2xl0Sm5/preview">Q2</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1hJJLEg_K9J29-MmjSqYruyZdEqHFafBh/preview">Q3</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1iepzEeAYl9RJNeM_lBYanPHgaH15kj5F/preview">Q4</a>
									</li>
									<li>FY 2017 - 
										<a target="_blank" href="https://drive.google.com/file/d/1TfrKFlXzla6wEoVwheJXA0Uq8GDj86oV/preview">Q1</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1EASfQ365zcYZ-inL3UkGD7a1L0sU5tTP/preview">Q2</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1ifViOzZJiaiOMkWtZEZtjxfs5RKwftEH/preview">Q3</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1orIyVpc97LKPuJ1dD8fx7solN8Dukzb8/preview">Q4</a>
									</li> -->
								</ul>
							</li>

							<li>FAR No. 4 – Monthly Report on Disbursement / Summary Report on Disbursement
								<ul>
									<li>FY 2024 - <a target="_blank" href="https://drive.google.com/file/d/1tXim3x51_FPsAjdiCdEhYknwq_wA5E1j/view?usp=sharing">Jan</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/16AZJzjaU5PF8AYuIymXyIggjLRfP1nWj/view?usp=sharing">Feb</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1r4P-y9brE3UmuZmgVgAZ3dsrCcoiwSoa/view?usp=sharing">Mar</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1TkLgVw5zQIott38-du4WsQH7Pm7RHiFH/view?usp=sharing">Apr</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1AjN0fF6tiiXTfjcVyhY5kgI_tARLyGU5/view?usp=sharing">May</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1oVp5qXVCpt_asrB60Cj0BxIosrYjhdW1/preview">Jun</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1uHPcAxi8vd8S564zZIXgX_qUlaDLT3tY/preview">Jul</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1IaTzrZpwPE1ALQdnEf2bSNJB4SXxi21P/preview">Aug</a>
									</li>
									<li>FY 2023 - <a target="_blank" href="https://drive.google.com/file/d/1UaimKbfYDSZ28f8wRffMDf1naPePEZ5L/preview">Jan</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1YgLQOsi3I70qF7HVSidXDhwHG6CImvav/preview">Feb</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1M9w-eO0xMaGydzqJzOrsc8lG2-UhgKur/preview">Mar</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1dFUJ95dxjBefUgf9peRJaX9KAvFPsXuV/preview">Apr</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1aZdIS54WVqcHCG4lG9kMmBjg9f-hVHMj/preview">May</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1iV1jJN0rrAy20g0Ggxtw3rFyA0b8Hvef/preview">Jun</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1BKKP27D45-uJ75aN1yg0C5q74WW6YH2-/preview">Jul</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1UiQ8gTHr1I3wDwE_hDX_nMzwiUGnsMK6/preview">Aug</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1nifWYRH2Qz6tWuNCK_RdCgnVsU69iEVB/preview">Sep</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1AMjQ6fQTaZY27d4gXg9vvo1P3PqZdLNn/preview">Oct</a>,
										<a target="_blank" href="https://drive.google.com/file/d/14xw0-Qtxmu9xJ2NgeFaXbFRngUR9BYcN/preview">Nov</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1xesNfDTC3tAFCqAQoVCVe3EhrUmc7PoJ/preview">Dec</a>
									</li>
									<li>FY 2022 - <a target="_blank" href="https://drive.google.com/file/d/1XEN5HYLIBkJeLg_NvimMqpqDn5sGuO70/preview">Jan</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1-NbVOxJaptNmyzt9ZS5PXe8plwO3Qqhn/preview">Feb</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1gIxt6xcPRHnW_Z2KMD-upNsEdQQdt0RQ/preview">Mar</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1gH9YgsrmLHdhletBszFHC07Ywa0E7UUN/preview">Apr</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1Ch15h9N0xz0j1OMMk6Z4ySORioIUDsov/preview">May</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1v2CqjqML5oA_Lrw4s0n4Y6t6U302n5u7/preview">Jun</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1Xyff18y9rUuhOQqje7NretJBEeJskuEE/preview">Jul</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1_7QBZN1WCLtsn1V8mg9Octzi9oZOkq1B/preview">Aug</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1YGIwqBzmoLrWY8ZxKvYCQnzvU78hrAtO/preview">Sep</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1UTAqptakxCPc7TmsEtzmWGwMV7tb9_Rk/preview">Oct</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1DDYqvZ2G-CLkbVjev0VIwkHU4JPg2EAR/preview">Nov</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1u9KQlxCNtVF-0wjhMwZ8G27ZNRr8_LaZ/preview">Dec</a>
									</li>
									<li>FY 2021 - 
										<a target="_blank" href="https://drive.google.com/file/d/1O7vK_-E4knXkizU0pxayWAfhmYQzGSFU/preview">Jan</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1NL7FQ-1kzEoOjfku4EDE-amaaltXOzvH/preview">Feb</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1V6gXcU60QXYWbU7YFUQZEEj7bHYvZee7/preview">Mar</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1V08Q1GThG3yXmNNODzoQpEtI4oGRCzxj/preview">Apr</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1G-1LW3nfFeIvWAnY4yPx5AUSgy6TkXlU/preview">May</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1vrOvYz3z7jJ_5JUcS4YGIpwxw9mSzXBJ/preview">Jun</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1FfhX6sKblsTqy337V5_91E7gLrXX18BI/preview">Jul</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1V9UupUE6-wfC1Sb39XY2XOtq05vpgTyR/preview">Aug</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1KQg2NLdA4YorC-VjY20hHhQEq1Rt52eW/preview">Sep</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1KQg2NLdA4YorC-VjY20hHhQEq1Rt52eW/preview">Oct</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1eNWGwmyr7s1qE8NgedoHA-hlYWf_q16k/preview">Nov</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1fCuQjHNlu3rmXC0eervv77Qvg3kCFNuA/preview">Dec</a>
									</li>
									<li>FY 2020 - 
										<a target="_blank" href="https://drive.google.com/file/d/1SYzOZW7ep_-_nVOz_lR6OROpemDfmVyO/preview">Jan</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1l1s03T-SG0c19W8Crrnn4CKQsQ2Dsggb/preview">Feb</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1679YqjLsIIIhgebN1l62COklpRMOiel_/preview">Mar</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1P6WK4wg9z0xgyZJDxlrYiUftBWgQ6LQF/preview">Apr</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1P6WK4wg9z0xgyZJDxlrYiUftBWgQ6LQF/preview">May</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1Jg0i-XXPIthCLl9cNW-IhFD68_2pU6el/preview">Jun</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1SSDem56Btsp4Avfyy6EO-DdC95eZVbYO/preview">Jul</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1kLVohA7NU-ZFkr29bEd57UgZGu8ThqYf/preview">Aug</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1EYioxAxeWY53Bw8F6X0IGG3eipZt5ra-/preview">Sep</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1ODVkyTtrNtMt5jhv_lp8SBlyi5GMNdPC/preview">Oct</a>,
										<a target="_blank" href="https://drive.google.com/file/d/14P4IRzziyBO9D0ywRqoG8a_aGYjl3Ziy/preview">Nov</a>,
										Dec
									</li>
									<!-- <li>FY 2019 - 
										<a target="_blank" href="https://drive.google.com/file/d/1uXSmch2AnHUSpehY2ebF1MmfdblGCVy8/preview">Jan</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1QrAlQAL-DLwkniEi4-zaSm1iTHCEbfJO/preview">Feb</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1QrAlQAL-DLwkniEi4-zaSm1iTHCEbfJO/preview">Mar</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1XwDkQs2x_yjDVxITGn0evzsnIBvmpQf4/preview">Apr</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1EJs-w4k9Sw5oA_nhJ9OJEbI_227jVYaE/preview">May</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1a7DAKeRsD4Mz9rpp6zTe7iPWvsddY490/preview">Jun</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1ouoN9gJFI8rUFP4jKpRzoaduNB6yfAt4/preview">Jul</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1GXCjwGh8_PCQImTO7IJUYEEYDOWXyHAs/preview">Aug</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1WppK_6A3_FSUCduapvbZljjXIBmCb_bc/preview">Sep</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1lW47xwfNbG7ENkenOasSGnMjSENFd75p/preview">Oct</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1Kj4bAHeF3905QBFg1ejUajLR7dAl8W2z/preview">Nov</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1u7_s6l3ITjjSirews4GwYeYbBagwrA0X/preview">Dec</a>
									</li>
									<li>FY 2018 - 
										Jan, 
										Feb,
										Mar,
										<a target="_blank" href="https://drive.google.com/file/d/1KgcrosoacofTmJUr6TS2HNh_GcVgQ4Sw/preview">Apr</a>,
										<a target="_blank" href="https://drive.google.com/file/d/11TLNR8cr2Z7CG9L6IN7NoaN3SoqyWaZX/preview">May</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1T3DJI6goJauWoVbLJUb4oaYwG2O2s5-S/preview">Jun</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1B20Lf8_8yJ5rbWQPI14Dg6muXC_K5xbt/preview">Jul</a>,
										<a target="_blank" href="https://drive.google.com/file/d/10Qa0A41rXMP-lANRsTKjK6Eb_0brHLFm/preview">Aug</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1z58BNViFSrh1ZI5dqz9lYxyKHB6RSH4A/preview">Sep</a>,
										<a target="_blank" href="https://drive.google.com/file/d/19Bf-qWK7znJt1wxt6TjMGzhqd8ascndW/preview">Oct</a>,
										<a target="_blank" href="https://drive.google.com/file/d/175vQOrEs2FGoK2noRVTX9ETlt16wYIEo/preview">Nov</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1Q5fba5gyIoN07nGmXQiKJogpKk69cl19/preview">Dec</a>
									</li>
									<li>FY 2017 - 
										<a target="_blank" href="https://drive.google.com/file/d/1t7gIseKRKtdc_THNrMPxSO9cc4I5SGG0/preview">Jan</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1x9hZ0tWzkW0jUc8ysZadL20K7AYrgi1B/preview">Feb</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1vi-vQk6qiieOO_hgZk4XDGj5FUCqTz4b/preview">Mar</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1_rDA4q0mpn8eFP19KplVgng9FcEIeUHf/preview">Apr</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1fFePb0Drvmu0PPVyNfafIUQGY0ctitJn/preview">May</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1UTRvaIr1ld0oCm7NdPCfY_zoRwcvT8R9/preview">Jun</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1zY6fY48fXuLXzMC3qg1ixpdJFlv9p7wH/preview">Jul</a>,
										<a target="_blank" href="https://drive.google.com/file/d/16EM4biAgYw0yMTlG3D2mVyKRk0fKUiW-/preview">Aug</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1noX3U72e_FNvJrwZzCsJGVhWY9VubDtL/preview">Sep</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1nD5t-ytHFYt9VnAyWIEulDvx__5C4QRr/preview">Oct</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1NqNOH_SIiFFlWW9TzKIf_gR9l5MUkM0D/preview">Nov</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1YjKtPyNKNg-7OcQEbf89R44Hp3BNbqXW/preview">Dec</a>
									</li> -->
								</ul>
							</li>
							<li>BAR No. 1 – Quarterly Physical Report of Operations/Physical Plan

								<ul>
									<li>FY 2024 - 
										<a target="_blank" href="https://drive.google.com/file/d/1RvqOcogKrFpJANqPGPwcqD_JLGm_mL7W/preview">Q1</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1u29AHAcZ8Zi44eoc7h4CXOq9-yl_QDQb/preview">Q2</a>
									</li>
									<li>FY 2023 - 
										<a target="_blank" href="https://drive.google.com/file/d/1RvqOcogKrFpJANqPGPwcqD_JLGm_mL7W/preview">Q1</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1u29AHAcZ8Zi44eoc7h4CXOq9-yl_QDQb/preview">Q2</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1cNe7YGFFDE3xCKK59K_AesIjF8Nd6saV/preview">Q3</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1-W4EGWJodX6ePfkN_L8Ct8VuQgTpMeKY/preview">Q4</a>
									</li>
									<li>FY 2022 - 
										<a target="_blank" href="https://drive.google.com/file/d/1h9VyVWy5C-6ammYfOuZo9gTL9pE4eZ-E/preview">Q1</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1fXaxasIKPdg_-qh-MUe8KNL6dCYIrqb0/preview">Q2</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1lZlZvf8Bbk9sdtCmjIt2lpdgF1k17iDP/preview">Q3</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1f3xCgZyTJrRAyalW0vNJT0zvjeEmfGQQ/preview">Q4</a>
									</li>
									<li>FY 2021 - 
										<a target="_blank" href="https://drive.google.com/file/d/120Sauj6HNcCnuOhXSxE8raik5XwZc12h/preview">Q1</a>,
										<a target="_blank" href="https://drive.google.com/file/d/19VM_OEmHpNxb9oaMoFClyqzRZIhugoxk/preview">Q2</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1hi1Wwl9OFMVyeub6VYe2eOS6rF9rzpgY/preview">Q3</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1j6yUhx1gGYElYdo0kTd8tZ_6PGWER-Y1/preview">Q4</a>
									</li>
									<li>FY 2020 - 
										<a target="_blank" href="https://drive.google.com/file/d/1IcyTdion2k1Uo45LKf6p0lheL86FBAQ9/preview">Q1</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1ACIuUcb1vPVRTSYRAUYgGuT7CNHjJSNu/preview">Q2</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1Aj4Sd0YL2v37mkvNabqHfpSqN5pQoKwf/preview">Q3</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1BwSEyl0SWyZgH6oZkt5ERZfqSKGSfvLm/preview">Q4</a>
									</li>
									<!-- <li>FY 2019 - 
										<a target="_blank" href="https://drive.google.com/file/d/1slo3wd177YNHooE7-AZEYdqo7TeTgNiE/preview">Q1</a>,
										Q2,
										<a target="_blank" href="https://drive.google.com/file/d/1MDtPCwandtKpMP1JfAz_NOpH_qePrpXl/preview">Q3</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1D48lpXXmEDeY-rhHuHl2czgIP2z55pEb/preview">Q4</a>
									</li>
									<li>FY 2018 - 
										<a target="_blank" href="https://drive.google.com/file/d/1kXjtAhag-QT_dUMeyaVelf53l6Pzlm6T/preview">Q1</a>,
										<a target="_blank" href="https://drive.google.com/file/d/19sPhvfh_HCyJVIdfn7UvaobMY8SW4A-g/preview">Q2</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1HdBq2T6HIJFSjxcLdaDvD5KrgUKSVRdB/preview">Q3</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1hrHG4ZJsInITEzQfLI15-0s-0P-TpcZP/preview">Q4</a>
									</li>
									<li>FY 2017 - 
										<a target="_blank" href="https://drive.google.com/file/d/1kSjqOb4SjirMArFfhnXoBwrvVDlcOGT-/preview">Q1</a>,
										Q2,
										<a target="_blank" href="https://drive.google.com/file/d/1pOrqKuTuu67tKTNc07K2-CLnU4C8uzxv/preview">Q3</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1KtjeZ_haykTNMW0i5GsRLqyf-i-e4xt7/preview">Q4</a>
									</li> -->
								</ul>
							</li>
							<li>FAR No. 5 – Quarterly Report on Revenue and Other Receipts

								<ul>
									<li>FY 2023 - 
										<a target="_blank" href="https://drive.google.com/file/d/1Qd4-CyYCnIrC7UWhdyK0LpK2HaviHYSm/preview">Q1</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1DGydWWBJwGYS0qt2V1s2v5EB4i-AdkGG/preview">Q2</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1MHbvWnTJRfX8Ox8fvHMAfTxWGiIdbrCV/preview">Q3</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1Jvt5mW5MH0LViRxxbWVIUlh_12MFjC_h/preview">Q4</a>
									</li>
									<li>FY 2022 - 
										<a target="_blank" href="https://drive.google.com/file/d/1yYwzH-vrwXevW7W_nLqrwemDKZLmo8KP/preview">Q1</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1VxHw4O78_daecE4YCxCGqIk2ktm_aVOO/preview">Q2</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1kKtZnkL0YF6hAiOlws_sW7KtXhB2vNdk/preview">Q3</a>,
										<a target="_blank" href="https://drive.google.com/file/d/1LKyaEXDS_6vY91ESsSnY7NtRWiiy7Zqz/preview">Q4</a>
									</li>
									<li>FY 2021 - 
										<a target="_blank" href="https://drive.google.com/file/d/1ic76t0uDk-Tu1mT7mCjUUIYaLhYRcNW1/preview">Q1</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1J_hNCuodZoT2MYwoHh_aeak_G8QfjjaH/preview">Q2</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1zkID9hV5TFKW5keDndxfFkWtpMbP9_XO/preview">Q3</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/153oebDhCdCH_nW-mKJpdmXY4zNo6DeVw/preview">Q4</a>
									</li>
									<li>FY 2020 - 
										<a target="_blank" href="https://drive.google.com/file/d/18vEyXk-U0-Jj9J_Br0_L7VF0QhHNRAP9/preview">Q1</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1wJeMRWnHx_9rrUkUIjN8XcFnmbxG9gvr/preview">Q2</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1yNSv280eroZNKnDaeEWMHplMJj1dVFd0/preview">Q3</a>, 
										Q4
									</li>
									<!-- <li>FY 2019 - 
										<a target="_blank" href="https://drive.google.com/file/d/1MfK-z1DoVIWMCAD8EHKwUb5OnFZ9u-Oj/preview">Q1</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/15cCaI18jzbwHOCT8ukIcIoT--jWSBfBm/preview">Q2</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/13S7nectHf4rX4L4S8zde4GjYXIjQNCmQ/preview">Q3</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1EuvFU4q96R399ycq122novfKNNa2ucrN/preview">Q4</a>
									</li>
									<li>FY 2018 - 
										<a target="_blank" href="https://drive.google.com/file/d/1bbAFnvZfRWHAVhKu2mXveSN0yPHFZDtq/preview">Q1</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1FaXXcEgDFatSKnC_f6T16Pj4-asfkfun/preview">Q2</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1cP634T5zV56T5fhycI6XfL-R1ATFH6UH/preview">Q3</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1Ra2ZYIE_6sjNORO6UyyUxpZF4dz4B7wV/preview">Q4</a>
									</li>
									<li>FY 2017 - 
										<a target="_blank" href="https://drive.google.com/file/d/1NGRuN692d5-xB6va2nTaGaiwgo_PiaOo/preview">Q1</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1xUdVmB9GkOu0W9w5gTJ-PiqGq3Vt2UIW/preview">Q2</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1QWNStsvGJa-4G-9UqUN8vHpBWRI3NiqY/preview">Q3</a>, 
										<a target="_blank" href="https://drive.google.com/file/d/1GPtW4a6oNBKtIJM3wNtJyecjM0A6W8dw/preview">Q4</a>
									</li> -->
								</ul>
							</li>
							
							
							<li>Financial Plan (Detailed Statement of Current Year’s Obligations, Disbursements and Unpaid Obligations)
								<ul>
									<li><a target="_blank" href="https://drive.google.com/file/d/1uhvI4PgRjriZj0fvQ99k8kD3gEg4q09c/preview">FY 2024</a></li>
									<li><a target="_blank" href="https://drive.google.com/file/d/1CKC_071UbdeJpDz1fZg6ur10VPG9xr2B/preview">FY 2023</a></li>
									<li><a target="_blank" href="https://drive.google.com/file/d/1NYbrOx5EIrh5nJoZVvU5AxshMZmMYCVp/preview">FY 2022</a></li>
									<li><a target="_blank" href="https://drive.google.com/file/d/1qUw1zcwjcRV0NN_HdOtNVH7dGzlTtWdz/preview">FY 2021</a></li>
									<li><a target="_blank" href="https://drive.google.com/file/d/1PwFJKnZjSH8if95gSP9kVeLD09uJfYpX/preview">FY 2020</a></li>
									<!-- <li><a target="_blank" href="https://drive.google.com/file/d/1-YSgOLqcJwXbWg3H1tH4TeGcaKqoDI89/preview">FY 2019</a></li>
									<li><a target="_blank" href="https://drive.google.com/file/d/17JGE0Eep-CN62boIdpa-l774PLmhSovG/preview">FY 2018</a></li>
									<li><a target="_blank" href="https://drive.google.com/file/d/1G2RRs_fLCJiwDSnRMv47FIsLu1-ON9z2/preview">FY 2017</a></li> -->
								</ul>
							</li>
						</ol>
					</li>
					<li id="dbm-approved">DBM Approved Budget and Corresponding Targets 
						<ol type="A">
							<li><a target="_blank" href="https://drive.google.com/file/d/1m2VIKJNrYtMz6bjRvgxg_klMryVMCGTn/preview">Budget for FY 2023</a></li>
							<!-- <li>GAA Targets for FY 2023</li> -->
							<li><a target="_blank" href="https://drive.google.com/file/d/1xTP9tn7kR5MUBcq_O_s6oWLsWTjRqn-0/preview">Targets for FY 2023</a></li>
							<!-- <li><a target="_blank" href="https://drive.google.com/file/d/1MP4Q_QTY0PcQ1RQvpVnn0Xd36noBuLKT/preview">Budget for FY 2022</a></li> -->
							<!-- <li><a target="_blank" href="https://drive.google.com/file/d/105KxyvxgwRR4KcQ_doImXrhU7hiC6HWT/preview">GAA Targets for FY 2022</a></li> -->
							<!-- <li><a target="_blank" href="https://drive.google.com/file/d/1G6zKcoe45oXyTwg-oZJMSuw2yDdApg0h/preview" target="_blank">Budget for FY 2021</a></li>
							<li><a target="_blank" href="https://drive.google.com/file/d/1run4JbR8Wxi4x6NXdT602EcNBiy-51A8/preview" target="_blank">GAA Targets for FY 2021</a></li> -->
						</ol>
					</li>
					<li id="ppabsi">Projects, Programs and Activities, Beneficiaries, and Status of Implementation (not applicable)</li>
					<li id="app">Annual Procurement Plan
						<ol type="A">
						<li>
								<a target="_blank" href="https://drive.google.com/file/d/1VXq8KXpfBN8uUW-Hjc2lPcEm4nL1beBc/preview">FY 2025 APP Non-CSE</a>
							</li>
							<li><a target="_blank" href="https://drive.google.com/file/d/1B4bDXBPmg_jivB0IGfYQX52IYmQjirRC/preview">FY 2024 APP Non-CSE</a></li>
							<li><a target="_blank" href="https://drive.google.com/file/d/10jW0dhbJzwCBAY5BKR7rbCIJkueIMVIJ/preview">FY 2024 APP-CSE</a></li>

							<!-- <li><a target="_blank" href="/fy-2021-app-non-cse/">FY 2021 APP Non-CSE</a></li>
							<li><a target="_blank" href="/fy-2021-app-cse/">FY 2021 APP CSE</a></li> -->
							<!-- <li><a target="_blank" href="https://drive.google.com/file/d/1hWvp1cUHvGxY2ko6dF89BfosPc7TUdNE/preview">FY 2022 APP Indicative APP Non-CSE</a></li>
							<li><a target="_blank" href="https://drive.google.com/file/d/1n-y1TgLOO0mLRotiywqsa6aM8Im6pU5h/preview">FY 2022 APP-CSE</a></li> -->
							<li>
								<a target="_blank" href="https://drive.google.com/file/d/1hrQxX_qe7OzrDYU22ool-A6U5ckHGCHU/preview">FY 2024 Early Procurement Activities (EPA)</a>
							</li>
							<li>
								<a target="_blank" href="https://drive.google.com/file/d/14f6k0mjHp803Pvh9MYTVKCvQbCpes_J0/preview">FY 2023 Indicative APP Non-CSE</a>
							</li>
							<li>
								<a target="_blank" href="https://drive.google.com/file/d/1h-RdT6qWG2I9KuwUC9-Z_pl0eNDU_b9S/preview">FY 2023 APP-CSE</a>
							</li>
							
							<!-- <li><a target="_blank" href="https://drive.google.com/file/d/1PoQaRUSrObbMZONfjRd7jg6oMQfbEaGo/preview">FY 2022 APP Non-CSE</a></li> -->
						</ol>
					</li>
					<li id="qms">QMS Certification 
						<ol type="A">
							<li><a target="_blank" href="https://drive.google.com/file/d/1o-lxWJcYUTVb9z4qkYLB8w0BzIb6qB78/preview">Quality Management System (QMS) Certificate (ISO 9001:2015)</a></li>
						</ol>
					</li>
					<li id="srdu">Designation of the Agency’s Committee on Anti-Red Tape (CART)
						<ol type="A">
							<li><a target="_blank" href="https://drive.google.com/file/d/1KWytKswD-yro7w2yQH6W_J1LNj0Utc70/preview">Committee on Anti-Red Tape (CART)</a></li>
							<!-- <li><a target="_blank" href="https://drive.google.com/file/d/1LPpxsP7tHT1Ge9IhwOZUkFuDvtZzoDuF/preview">Committee on Anti-Red Tape (CART)</a></li> -->
						</ol>
					</li>
					<li id="sfd">The Agency Review and Compliance Procedure of Statements and Financial Disclosures 

						<ol type="A">
							<li><a target="_blank" href="/the-agency-review-and-compliance-procedure-of-statements-and-financial-disclosures/">The Agency Review and Compliance Procedure of Statements and Financial Disclosures</a></li>
						</ol>
					</li>
					<li id="foi">People’s Freedom of Information (FOI) 
						<ol type="A">
							<li><a target="_blank" href="/transparency-seal/peoples-foi-manual/">People's FOI Manual</a></li>
							<li><a target="_blank" href="/transparency-seal/one-page-foi-manual/">One-Page FOI Manual</a></li>
							<li><a target="_blank" href="/transparency-seal/foi-reports/">FOI Reports</a></li>
							<li><a target="_blank" href="https://www.foi.gov.ph/requests?agency=GSU">eFOI Portal</a></li>
						</ol>
						<!-- <ol type="A">
							<li><a target="_blank" href="https://drive.google.com/file/d/1yJvktitjpbVMju6Ba7FA--83GNni6dKX/preview">2021 FOI Inventory</a></li>
							<li><a target="_blank" href="https://drive.google.com/file/d/1LRNUxSCe0JadGnoGYUJK4qDWdcEy0hmZ/preview">2021 FOI Registry</a></li>
							<li><a target="_blank" href="https://drive.google.com/file/d/1oJ9A7vO6h2EXWlNJjIZCGZZ-iE9KBdf1/preview">2021 FOI Summary</a></li>
							<li><a target="_blank" href="https://drive.google.com/file/d/18wvQBBi3y2Kv4DkxOb799BpIjmGoPJmv/preview">Agency Information Inventory 2021</a></li>
							<li><a target="_blank" href="https://drive.google.com/file/d/1t7QlGsMhjrnTeI41Smx8zLRD-ht3Y5rA/preview">Peoples FOI Manual With Signature 2021</a></li>
							<li><a target="_blank" href="https://drive.google.com/file/d/1BH_5OcMSY2w44jEwIiu3CBatZABdfDuh/preview">Manual signed by head of agency</a></li>
							<li><a target="_blank" href="https://drive.google.com/file/d/17haVzhSEnfMUO-LRZY5yaRnIEtLxZoxS/preview">Agency Information Inventory, 2021 FOI Summary Report and 2021 FOI Registry</a></li>
						</ol> -->
						
					</li>
					<li id="ara">Agency’s Report on Aging of Unliquidated Cash Advances to Offices and Employees, Cash Disbursing Officer and Special Disbursing Officers
						<ol type="A">
							<li><a target="_blank" href="https://drive.google.com/file/d/1kuZAbcUefftgsjZmxKVYIdDK6c_jjx6g/preview">as of November 28, 2023</a></li>
							<li><a target="_blank" href="https://drive.google.com/file/d/1A6WmbUBwQ2v_V-5OtozehRpEo2mRVAQr/preview">as of November 15, 2022</a></li>
						</ol>
						<!-- <ol type="A">
							<li><a target="_blank" href="https://drive.google.com/file/d/1xRtPez79S1XrrncGeqvI1s95_dCQ_ZOO/preview">as of November 15, 2021</a></li>
						</ol> -->
					</li>
					
				</ol>
			</div>
			<div class="order-1 col-md-3 mb-5">
				<nav class="page-sub-menu scrolling-nav">
					<ul>
						<li><a href="#symbolism">Symbolism</a></li>
						<li>
							<a class="d-flex" href="#mandate">
								<span class="pr-4">I.</span>
								<span>Agency's Mandate, Vision, Mission and List of Officials</span>
							</a>
						</li>
						<li>
							<a class="d-flex" href="#annual-financial">
								<span class="pr-3">II.</span>
								<span>Annual Financial Reports</span>
							</a>
						</li>
						<li>
							<a class="d-flex" href="#dbm-approved">
								<span class="pr-2">III.</span>
								<span>DBM Approved Budget and Corresponding Targets</span>
							</a>
						</li>
						<li>
							<a class="d-flex" href="#ppabsi">
								<span class="pr-3">IV.</span>
								<span>Projects, Programs and Activities, Beneficiaries, and Status of Implementation</span>
							</a>
						</li>
						<li>
							<a class="d-flex" href="#app">
								<span class="pr-4">V. </span>
								<span>Annual Procurement Plan</span>
							</a>
						</li>
						<li>
							<a class="d-flex" href="#qms">
								<span class="pr-3">VI. </span>
								<span>QMS Certification</span>
							</a>
						</li>
						<li>
							<a class="d-flex" href="#srdu">
								<span class="pr-2">VII. </span>
								<span>Designation of the Agency’s Committee on Anti-Red Tape (CART)</span>
							</a>
						</li>
						<li>
							<a class="d-flex" href="#sfd">
								<span class="pr-1">VIII. </span>
								<span>The Agency Review and Compliance Procedure of Statements and Financial Disclosures</span>
							</a>
						</li>
						<li>
							<a class="d-flex" href="#foi">
								<span class="pr-3">IX. </span>
								<span>People’s Freedom of Information</span>
							</a>
						</li>
						<li>
							<a class="d-flex" href="#ara">
								<span class="pr-4">X. </span>
								<span>Agency’s Report on Aging of Unliquidated Cash Advances to Offices and Employees, Cash Disbursing Officer and Special Disbursing Officers</span>
							</a>
						</li>
						
					</ul>
				</nav>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
