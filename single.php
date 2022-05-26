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
		<h1 class="page-title">News and Updates</h1>
	</div>
</div>
<div class="site-content">
	<div class="container">
		<main id="main" class="row pt-5 pb-5  text-left" role="main">
			<div class="col-md-12">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				// Previous/next post navigation.
				$cat1 = get_category_by_slug( 'bac' );
				$cat2 = get_category_by_slug( 'career' );
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'diana' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'diana' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'diana' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'diana' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'excluded_terms' => array(
						$cat1->term_id,
						$cat2->term_id,
					)
				) );

			// End the loop.
			endwhile;
			?>
			</div>
			<!-- <div class="col-md-3"> -->
				<?php //get_sidebar(); ?>
			<!-- </div> -->
		</main>
	</div><!-- .container -->
</div>
<?php get_footer();
