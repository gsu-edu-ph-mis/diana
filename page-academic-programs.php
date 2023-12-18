<?php
/**
 * Template Name: Academic Programs
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
		<main id="main" class="row pt-5 pb-5 text-left" role="main">
			<div class="col-md-12 order-2">
				<div class="d-flex flex-wrap align-items-center mb-5">
					<span class="h2 d-inline-box m-1">Filter by: </span>
					<div v-for="filter in byGroup(filters, 'level')" class="m-1 custom-checkbox" v-bind:data-checked="isChecked(filter.key)">
						<input v-on:change="checkbox($event)" type="checkbox" v-bind:value="filter.key" name="filter" v-bind:id="'filter-' + filter.key">
						<label v-bind:for="'filter-' + filter.key">
							<img v-if="filter.photo" v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + filter.photo" width="20px">	
							${filter.name}
						</label>
					</div>
					<div v-for="filter in byGroup(filters, 'campus')" data-toggle="tooltip" v-bind:title="filter.name + ' Campus'" class="m-1 custom-checkbox" v-bind:data-checked="isChecked(filter.key)">
						<input v-on:change="checkbox($event)" type="checkbox" v-bind:value="filter.key" name="filter" v-bind:id="'filter-' + filter.key">
						<label v-bind:for="'filter-' + filter.key">
							<img v-if="filter.photo" v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + filter.photo" width="20px" alt="Select">	
							${filter.name}
						</label>
					</div>
					<div v-for="filter in byGroup(filters, 'board')" class="m-1 custom-checkbox" v-bind:data-checked="isChecked(filter.key)">
						<input v-on:change="checkbox($event)" type="checkbox" v-bind:value="filter.key" name="filter" v-bind:id="'filter-' + filter.key">
						<label v-bind:for="'filter-' + filter.key">
							<img v-if="filter.photo" v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + filter.photo" width="20px">	
							${filter.name}
						</label>
					</div>
				</div>
				<div id="data-programs" class="data-programs ">
					<h2 class="h1 text-center mb-5 font-weight-bold text-dark">Showing ${byTags(programs, filterKeys).length} Courses:</h2>
					
					<div id="cags" class="college-programs">
						<div class="programs">
							<div v-for="program in byTags(byTags(programs, ['cags']), filterKeys)" class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center">
									<img v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + program.logo" width="40px" data-toggle="tooltip" v-bind:alt="program.college" v-bind:title="program.college">
									<h2 class="h3 ml-4 mb-0">${program.name} <em style="padding-left: 4px; font-size:14px; font-weight: 300; color: #111">${program.board}</em></h2>
								</div>
								<div class="legend">
									<img v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + program.logoCampus" data-toggle="tooltip" v-bind:alt="program.campus" v-bind:title="program.campus">
								</div>
							</div>
						</div>
					</div>
					<div id="cas" class="college-programs">
						<div class="programs">
							<div v-for="program in byTags(byTags(programs, ['cas']), filterKeys)" class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center">
									<img v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + program.logo" width="40px" data-toggle="tooltip" v-bind:alt="program.college" v-bind:title="program.college">
									<h2 class="h3 ml-4 mb-0">${program.name} <em style="padding-left: 4px; font-size:14px; font-weight: 300; color: #111">${program.board}</em></h2>
								</div>
								<div class="legend">
									<img v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + program.logoCampus" data-toggle="tooltip" v-bind:alt="program.campus" v-bind:title="program.campus">
								</div>
							</div>
						</div>
					</div>
					<div id="cbm" class="college-programs">
						<div class="programs">
							<div v-for="program in byTags(byTags(programs, ['cbm']), filterKeys)" class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center">
									<img v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + program.logo" width="40px" data-toggle="tooltip" v-bind:alt="program.college" v-bind:title="program.college">
									<div class="pl-4">
										<h2 class="h3 mb-0">${program.name} <em style="padding-left: 4px; font-size:14px; font-weight: 300; color: #111">${program.board}</em></h2>
										<p v-if="program.majors" class="mb-0 pl-3">Major in: ${program.majors}</p>
									</div>
								</div>
								<div class="legend">
									<img v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + program.logoCampus" data-toggle="tooltip" v-bind:alt="program.campus" v-bind:title="program.campus">
								</div>
							</div>
						</div>
					</div>
					<div id="ccje" class="college-programs">
						<div class="programs">
							<div v-for="program in byTags(byTags(programs, ['ccje']), filterKeys)" class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center">
									<img v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + program.logo" width="40px" data-toggle="tooltip" v-bind:alt="program.college" v-bind:title="program.college">
									<div class="pl-4">
										<h2 class="h3 mb-0">${program.name} <em style="padding-left: 4px; font-size:14px; font-weight: 300; color: #111">${program.board}</em></h2>
										<p v-if="program.majors" class="mb-0 pl-3">Major in: ${program.majors}</p>
									</div>
								</div>
								<div class="legend">
									<img v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + program.logoCampus" data-toggle="tooltip" v-bind:alt="program.campus" v-bind:title="program.campus">
								</div>
							</div>
						</div>
					</div>
					<div id="ceit" class="college-programs">
						<div class="programs">
							<div v-for="program in byTags(byTags(programs, ['ceit']), filterKeys)" class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center">
									<img v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + program.logo" width="40px" data-toggle="tooltip" v-bind:alt="program.college" v-bind:title="program.college">
									<div class="pl-4">
										<h2 class="h3 mb-0">${program.name} <em style="padding-left: 4px; font-size:14px; font-weight: 300; color: #111">${program.board}</em></h2>
										<p v-if="program.majors" class="mb-0 pl-3">Major in: ${program.majors}</p>
									</div>
								</div>
								<div class="legend">
									<img v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + program.logoCampus" data-toggle="tooltip" v-bind:alt="program.campus" v-bind:title="program.campus">
								</div>
							</div>
						</div>
					</div>
					<div id="cst" class="college-programs">
						<div class="programs">
							<div v-for="program in byTags(byTags(programs, ['cst']), filterKeys)" class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center">
									<img v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + program.logo" width="40px" data-toggle="tooltip" v-bind:alt="program.college" v-bind:title="program.college">
									<div class="pl-4">
										<h2 class="h3 mb-0">${program.name} <em style="padding-left: 4px; font-size:14px; font-weight: 300; color: #111">${program.board}</em></h2>
										<p v-if="program.majors" class="mb-0 pl-3">Major in: ${program.majors}</p>
									</div>
								</div>
								<div class="legend">
									<img v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + program.logoCampus" data-toggle="tooltip" v-bind:alt="program.campus" v-bind:title="program.campus">
								</div>
							</div>
						</div>
					</div>
					<div id="cte" class="college-programs">
						<div class="programs">
							<div v-for="program in byTags(byTags(programs, ['cte']), filterKeys)" class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center">
									<img v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + program.logo" width="40px" data-toggle="tooltip" v-bind:alt="program.college" v-bind:title="program.college">
									<div class="pl-4">
										<h2 class="h3 mb-0">${program.name} <em style="padding-left: 4px; font-size:14px; font-weight: 300; color: #111">${program.board}</em></h2>
										<p v-if="program.majors" class="mb-0 pl-3">Major in: ${program.majors}</p>
									</div>
								</div>
								<div class="legend">
									<img v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + program.logoCampus" data-toggle="tooltip" v-bind:alt="program.campus" v-bind:title="program.campus">
								</div>
							</div>
						</div>
					</div>
					<div id="master" class="college-programs">
						<div class="programs">
							<div v-for="program in byTags(byTags(programs, ['master']), filterKeys)" class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center">
									<img v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + program.logo" width="40px" data-toggle="tooltip" v-bind:alt="program.college" v-bind:title="program.college">
									<div class="pl-4">
										<h2 class="h3 mb-0">${program.name} <em style="padding-left: 4px; font-size:14px; font-weight: 300; color: #111">${program.board}</em></h2>
										<p v-if="program.majors" class="mb-0 pl-3">Major in: ${program.majors}</p>
									</div>
								</div>
								<div class="legend">
									<img v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + program.logoCampus" data-toggle="tooltip" v-bind:alt="program.campus" v-bind:title="program.campus">
								</div>
							</div>
						</div>
					</div>
					<div id="doctorate" class="college-programs">
						<div class="programs">
							<div v-for="program in byTags(byTags(programs, ['doctorate']), filterKeys)" class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center">
									<img v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + program.logo" width="40px" data-toggle="tooltip" v-bind:alt="program.college" v-bind:title="program.college">
									<div class="pl-4">
										<h2 class="h3 mb-0">${program.name} <em style="padding-left: 4px; font-size:14px; font-weight: 300; color: #111">${program.board}</em></h2>
										<p v-if="program.majors" class="mb-0 pl-3">Major in: ${program.majors}</p>
									</div>
								</div>
								<div class="legend">
									<img v-bind:src="'<?= get_stylesheet_directory_uri(); ?>' + program.logoCampus" data-toggle="tooltip" v-bind:alt="program.campus" v-bind:title="program.campus">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</main>
	</div><!-- .container -->
</div>
<?php get_footer();
