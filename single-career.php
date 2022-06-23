<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Diana
 * subpackage Diana 1.0
 */

get_header(); ?>
<div class="section section-page-title">
	<div class="container">
		<h1 class="page-title">Careers</h1>
	</div>
</div>
<div class="site-content">
	<div class="container">
		<main id="main" class="row pt-5 pb-5  text-left" role="main">
			<div class="col-md-8">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); 

			$job_post_meta = (diana_get_post_meta($post->ID, '_diana_settings_career'));

			?>
			<div class="table-responsive mb-4">
				<table class="table table-striped">
					<tr>
						<td><strong>Posting Date</strong></td>
						<td><?php echo date('F d Y', strtotime($job_post_meta['diana_career_posting_date'])); ?></td>
					</tr>
					<tr>
						<td><strong>Closing Date</strong></td>
						<td><?php echo date('F d Y', strtotime($job_post_meta['diana_career_closing_date'])); ?></td>
					</tr>
					<tr>
						<td><strong>Position</strong></td>
						<td><?php echo $job_post_meta['diana_career_position_title']; ?></td>
					</tr>
					<tr>
						<td><strong>Place of Assignment</strong></td>
						<td><?php echo $job_post_meta['diana_career_place_of_assignment']; ?></td>
					</tr>
					<tr>
						<td><strong>Plantilla Item No.</strong></td>
						<td><?php echo $job_post_meta['diana_career_plantilla']; ?></td>
					</tr>
					<tr>
						<td><strong>Salary/Job/Pay Grade </strong></td>
						<td><?php echo $job_post_meta['diana_career_salary_grade']; ?></td>
					</tr>
					<tr>
						<td><strong>Monthly Salary </strong></td>
						<td><?php echo $job_post_meta['diana_career_monthly_salary']; ?></td>
					</tr>
					<tr>
						<td><strong>Eligibility</strong></td>
						<td><?php echo $job_post_meta['diana_career_eligibility']; ?></td>
					</tr>
					<tr>
						<td><strong>Education </strong></td>
						<td><?php echo $job_post_meta['diana_career_education']; ?></td>
					</tr>

					<tr>
						<td><strong>Training </strong></td>
						<td><?php echo $job_post_meta['diana_career_training']; ?></td>
					</tr>
					<tr>
						<td><strong>Work Experience </strong></td>
						<td><?php echo $job_post_meta['diana_career_work_xp']; ?></td>
					</tr>
					<tr>
						<td><strong>Competency </strong></td>
						<td><?php echo $job_post_meta['diana_career_competency']; ?></td>
					</tr>
					
					
				</table>
			</div>
			<h2 class="h2 mt-4">Instructions/Remarks:</h2>
			<?php echo nl2br($job_post_meta['diana_career_remarks']); ?>

			<h2 class="h2 mt-4">Documents:</h2>
			<?php echo nl2br($job_post_meta['diana_career_documents']); ?>

			<p class="mb-5">QUALIFIED APPLICANTS are advised to hand in or send through courier/email their application to:</p>

			<p class="mb-0"><?php echo $job_post_meta['diana_career_recipient']; ?></p>
			<p class="mb-0"><strong><?php echo $job_post_meta['diana_career_recipient_title']; ?></strong></p>
			<p class="mb-0"><?php echo $job_post_meta['diana_career_recipient_address']; ?></p>
			<p class="mb-5"><a href="mailto:<?php echo $job_post_meta['diana_career_recipient_email']; ?>"><?php echo $job_post_meta['diana_career_recipient_email']; ?></a></p>

			<h2 class="h2">APPLICATIONS WITH INCOMPLETE DOCUMENTS SHALL NOT BE ENTERTAINED.</h2>
			<?php
			// End the loop.
			endwhile;
			?>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
