<?php
/**
 * Template Name: Community Extension Services
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
			<div class="order-1 col-md-12">
				<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				$args = array( 
					'posts_per_page' => 12, 
					'category_name' => 'community-extension-services',
					'paged' => $paged,
					'post_type' => 'post' 
				);
				$query = new WP_Query( $args );

				if ( $query->have_posts() ) : 
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$posts_per_page  = $query->query_vars['posts_per_page'] > -1 ? $query->query_vars['posts_per_page'] : 0;
					?>
					<h2 class="h1 mb-5 text-center">News and Updates</h2>
					<div class="row mb-5">
						<?php while ( $query->have_posts() ) : $query->the_post(); $count++; ?>
						<div class="col-md-4 mb-5 d-flex flex-wrap">
							<?php if (has_post_thumbnail($post)): ?>
								<div class="flex-grow-1 text-center text-md-left"><a class="smooth-edges" href="<?php the_permalink($post->ID); ?>"><?php echo get_the_post_thumbnail($post, 'medium'); ?></a></div>
							<?php endif; ?>
							<div class="mb-2">
								<h3 class="h3 mb-2"><a href="<?php the_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></h3>
								<div class="post-meta">
									<svg style="margin-right:0; width:24px;height:24px" viewBox="0 0 24 24">    <path fill="currentColor" d="M9,10H7V12H9V10M13,10H11V12H13V10M17,10H15V12H17V10M19,3H18V1H16V3H8V1H6V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M19,19H5V8H19V19Z"></path></svg> 
									<time class="entry-date published updated"><?= date("M d, Y", strtotime($post->post_date)); ?></time>
								</div>
							</div>
							
							
							<!-- <p class="align-self-end"><?php echo diana_get_excerpt(($post->post_excerpt) ? $post->post_excerpt : $post->post_content, $post, 'Read Article &raquo;'); ?></p> -->
						</div>
						<?php endwhile;  ?>
					</div>
						<?php 
							$pagination = paginate_links( array(
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
						<?php if ($pagination): ?>
							<div class="pagination">
								<?= $pagination; ?>
							</div>
						<?php endif; ?>
					<?php 
					// next_posts_link( 'Older Entries', $query->max_num_pages );
					// previous_posts_link( 'Next Entries &raquo;' ); 
					?>
					<?php wp_reset_postdata(); ?>
				<?php 
				else: 
				?>
					
				<?php
				endif;
				?>
				<div class="mb-5 text-justify">
					<?= the_content(); ?>
				</div>
			</div>
			<!-- <div class="order-2 col-md-3 mb-4">
				<?php //get_sidebar(); ?>
			</div> -->
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
