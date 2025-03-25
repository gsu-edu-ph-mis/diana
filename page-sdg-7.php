<?php
/**
 * Template Name: SDG 7
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
$SDG = 7;
get_header(); ?>
<div class="section section-page-title">
	<div class="container">
		<h1 class="page-title">Sustainable Development Goals</h1>
	</div>
</div>
<div class="site-content">
	<div class="container">
		<main id="main" class="form-row pt-5 pb-5  text-left" role="main">
			
			<!--  -->
			<div class="order-2 col-md-8 col-7 pl-md-5 pt-4">
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			$args = array( 
				'posts_per_page' => 10, 
				'category_name' => 'sdg-' . $SDG,
				'paged' => $paged,
				'post_type' => 'post' 
			);
			$query = new WP_Query( $args );

			if ( $query->have_posts() ) : 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$posts_per_page  = $query->query_vars['posts_per_page'] > -1 ? $query->query_vars['posts_per_page'] : 0;
				?>
				<h2 class="h2 mb-5">There <? printf(_n( 'is %s article', 'are %s articles', $query->found_posts, 'diana' ), number_format_i18n( $query->found_posts )) ?> for SDG <?= $SDG; ?></h2>
				<div class="table-responsive mb-5">
					<table class="table table-striped">
						<tr>
							<th width="1%">#</th>
							<th width="15%" class="d-none d-md-table-cell">Date</th>
							<th>Title</th>
							<th class="d-none d-md-table-cell"></th>
						</tr>
						<?php 
						$count = 0;
						while ( $query->have_posts() ) : $query->the_post(); $count++;
						?>
						<tr>
							<td><?= $count + ($posts_per_page * ($paged -1)); ?></td>
							<td class="d-none d-md-table-cell"><?= get_the_date(); ?></td>
							<!-- <td><?php //echo diana_categories($post->ID); ?></td> -->
							<td><a href="<?php echo get_permalink( $post->ID); ?>"><?php the_title(); ?></a></td>
							<td class="d-none d-md-table-cell"><a class="btn btn-primary" href="<?php echo get_permalink( $post->ID); ?>">Read</a></td>
						</tr>
						<?php endwhile;  ?>
					</table>
				</div>
				<div class="pagination">
					<?php 
						echo paginate_links( array(
							'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
							'total'        => $query->max_num_pages,
							'current'      => max( 1, get_query_var( 'paged' ) ),
							'format'       => '?paged=%#%',
							'show_all'     => false,
							'type'         => 'plain',
							'end_size'     => 1,
							'mid_size'     => 0,
							'prev_next'    => true,
							'prev_text'    => sprintf( '<i></i> %1$s', __( '&laquo; Newer Posts', 'diana' ) ),
							'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts &raquo;', 'diana' ) ),
							'add_args'     => false,
							'add_fragment' => '',
						) );
					?>
				</div>

				<?php 
				// next_posts_link( 'Older Entries', $query->max_num_pages );
				// previous_posts_link( 'Next Entries &raquo;' ); 
				?>
				<?php wp_reset_postdata(); ?>
			<?php 
			else: 
			?>
				<h2 class="h2 mb-5">There are no postings yet.</h2>
			<?php
			endif;
			?>
			</div>
			<!--  -->

			<div class="order-1 col-md-4 col-5 mb-5">
				<div class="mb-3">
					<img src="<?= get_stylesheet_directory_uri(); ?>/images/sdg/<?= $SDG; ?>_SDG_MakeEveryDayCount_Gifs_GDU.gif" alt="">
				</div>
				<?php get_sidebar('sdg'); ?>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
