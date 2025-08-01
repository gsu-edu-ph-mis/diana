<?php
/**
 * Template Name: International Affairs
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
			<div class="col-md-12">
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			$args = array( 
				'posts_per_page' => 10, 
				'category_name' => 'international-affairs',
				'paged' => $paged,
				'post_type' => 'post' 
			);
			$query = new WP_Query( $args );

			if ( $query->have_posts() ) : 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$posts_per_page  = $query->query_vars['posts_per_page'] > -1 ? $query->query_vars['posts_per_page'] : 0;
				?>
				<div class="row">
					<?php while ( $query->have_posts() ) : $query->the_post(); $count++; ?>
						<?php if (is_sticky()) : ?>
							<div class="col-md-10 mb-5">
								<div class="row">
									<div class="col-md-4 mb-3 text-md-left">
										<a class="d-block" href="<?= get_permalink(); ?>"><?= diana_get_featured_image(get_post_thumbnail_id(), 'medium', 'Image', 'border: 2px solid teal;'); ?></a>
									</div>
									<div class="col-md-8 mb-3">
										<div>
											<?php 
												the_title( sprintf( '<h2 class="h2"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
											?>
											<div class="mb-3"><?php diana_entry_meta(); ?></div>
										</div>
									</div>
								</div>
								<!--  -->
							</div>
						<?php else: ?>
						<div class="col-md-6 text-center text-md-left mb-4">
							<div class="row">
								<div class="col-md-4 mb-3 text-md-left">
									<a class="d-block" href="<?= get_permalink(); ?>"><?= diana_get_featured_image(get_post_thumbnail_id(), 'medium', 'Image', 'border: 2px solid teal;'); ?></a>
								</div>
								<div class="col-md-8 mb-3">
									<div>
										<?php 
											the_title( sprintf( '<h2 class="h2"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
										?>
										<div class="mb-3"><?php diana_entry_meta(); ?></div>
									</div>
								</div>
							</div>
							
							
						</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>

				<?php 
				// next_posts_link( 'Older Entries', $query->max_num_pages );
				// previous_posts_link( 'Next Entries &raquo;' ); 
				?>
				<?php wp_reset_postdata(); ?>

			<?php else : // If no content, include the "No posts found" template. ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
		</main>
		<?php //get_sidebar(); ?>
	</div><!-- .container -->
</div>
<?php get_footer();