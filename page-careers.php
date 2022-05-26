<?php
/**
 * Template Name: Careers
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
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				// Include the page content template.
			?>
				<div class="col-md-12">

					<?php 
					$args = array(
						'post_type' => 'career',
						'post_status' => array('publish'), // As long as it exist, get it
						'numberposts' => -1, // Get all
						// 'meta_query' => array(
						// 	array(
						// 		'key'       => '_diana_settings_career',
						// 		'value'     => '"' . $post->post_name . '"',
						// 		'compare'   => 'LIKE'
						// 	)
						// )
					);
					$job_posts   = get_posts( $args ); // Returns array 
					?>
					
					<?php if (count($job_posts) > 0) : ?>
						<div class="table-responsive mb-5">
							<table class="table table-striped">
								<tr>
									<th width="20%" class="text-left">Position</th>
									<th width="20%" class="text-left">Plantilla Item No.</th>
									<th width="20%" class="text-right d-none d-md-table-cell">Posting Date</th>
									<th width="20%" class="text-right">Closing Date</th>
									<th width="15%" class="text-right d-none d-md-table-cell"></th>
								</tr>
								<?php
								foreach($job_posts as $job_post):
									// print_r($job_post);
									$job_post_meta = (diana_get_post_meta($job_post->ID, '_diana_settings_career'));
									// print_r($job_post_meta);
								?>
								<tr>
									<td class="text-left"><a href="<?php echo get_permalink( $job_post->ID); ?>"><u><?php echo $job_post_meta['diana_career_position_title']; ?></u></a></td>
									<td class="text-left"><?php echo $job_post_meta['diana_career_plantilla']; ?></td>
									<td class="text-right d-none d-md-table-cell"><?php echo date('M d Y', strtotime($job_post_meta['diana_career_posting_date'])); ?></td>
									<td class="text-right"><?php echo date('M d Y', strtotime($job_post_meta['diana_career_closing_date'])); ?></td>
									<td class="text-right d-none d-md-table-cell"><a class="btn btn-success" href="<?php echo get_permalink( $job_post->ID); ?>">View</a></td>
								</tr>
								<?php 
								endforeach
								?>
							</table>
						</div>

						<p>The College encourages interested and qualified applicants regardless of age, sex, sexual orientation and gender identity, civil status, disability, religion, ethnicity, social status, income class, paternity and filiation, political affiliation, or other similar factors/personal circumstances ethnicity and political affiliation or other similar factors/ personal circumstances to apply as per their qualifications.</p>

					<?php else: ?>
						<div style="min-height: 200px">
							<h2 class="h2 mb-5 text-center pt-5">No vacant positions or job openings as of now.</h2>
						</div>
					<?php endif; ?>
				</div>
			<?php
			// End the loop.
			endwhile;
			?>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
