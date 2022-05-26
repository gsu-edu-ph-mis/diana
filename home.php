<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
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
			<?php if ( have_posts() ) : ?>
				<div class="row">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php if (is_sticky()) : ?>
							<div class="col-md-12 mb-5">
								<?php 
									the_title( sprintf( '<h2 class="h2"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
								?>
								<div><?php diana_entry_meta(); ?></div>
								<?php the_excerpt(); ?>
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
				// Previous/next page navigation.
				the_posts_pagination( array(
					'prev_text'          => __( 'Previous page', 'diana' ),
					'next_text'          => __( 'Next page', 'diana' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'diana' ) . ' </span>',
				) );
				?>

			<?php else : // If no content, include the "No posts found" template. ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
		</main>
		<?php //get_sidebar(); ?>
	</div><!-- .container -->
</div>
<?php get_footer();