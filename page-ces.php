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
				<div class="mb-5">
					<?= the_content(); ?>
				</div>
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			$args = array( 
				'posts_per_page' => 10, 
				'category_name' => 'community-extension-services',
				'paged' => $paged,
				'post_type' => 'post' 
			);
			$query = new WP_Query( $args );

			if ( $query->have_posts() ) : 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$posts_per_page  = $query->query_vars['posts_per_page'] > -1 ? $query->query_vars['posts_per_page'] : 0;
				?>
				<h2 class="h2 mb-5">Showing <?= $query->found_posts; ?> posts from Community Extension Services</h2>
				<div class="table-responsive mb-5">
					<table class="table table-striped">
						<tr>
							<th width="1%">#</th>
							<th width="15%">Date</th>
							<!-- <th>Type</th> -->
							<th>Title</th>
							<th width="15%"></th>
						</tr>
						<?php while ( $query->have_posts() ) : $query->the_post(); $count++;
							
						?>
						<tr>
							<td><?= $count + ($posts_per_page * ($paged -1)); ?></td>
							<td><?= get_the_date(); ?></td>
							<!-- <td><?php //echo diana_categories($post->ID); ?></td> -->
							<td><a href="<?php echo get_permalink( $post->ID); ?>"><?php the_title(); ?></a></td>
							<td class="text-right"><a class="btn" href="<?php echo get_permalink( $post->ID); ?>">
							<?php the_post_thumbnail('tiny'); ?>
							<!-- <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 75.32 92.604" xmlns:v="https://vecta.io/nano"><g transform="matrix(1.4843 0 0 1.4843 53.548057 -183.975276)"><path d="M-29.633 123.947c-3.552 0-6.443 2.893-6.443 6.445v49.498c0 3.552 2.891 6.445 6.443 6.445h37.85c3.552 0 6.443-2.893 6.443-6.445v-40.701s.101-1.192-.416-2.352c-.485-1.087-1.275-1.844-1.275-1.844a1.058 1.058 0 0 0-.006-.008l-9.391-9.211a1.058 1.058 0 0 0-.016-.016s-.802-.763-1.99-1.273c-1.399-.6-2.842-.537-2.842-.537l.021-.002z" fill="#ff2116" paint-order="markers fill stroke"/><path d="M-29.633 126.064h28.379a1.058 1.058 0 0 0 .021 0s1.135.011 1.965.367c.799.343 1.365.862 1.369.865l9.371 9.193s.564.596.838 1.209c.221.495.234 1.4.234 1.4a1.058 1.058 0 0 0-.002.045v40.746c0 2.416-1.91 4.328-4.326 4.328h-37.85c-2.416 0-4.326-1.912-4.326-4.328v-49.498c0-2.416 1.91-4.328 4.326-4.328z" fill="#f5f5f5" paint-order="markers fill stroke"/><path d="M-23.408 161.093c-1.457-1.457.119-3.458 4.396-5.584l2.691-1.337 1.048-2.294 1.913-4.575.864-2.281-.595-1.688c-.732-2.075-.993-5.194-.529-6.316.629-1.519 2.69-1.363 3.506.265.637 1.272.572 3.575-.183 6.479l-.619 2.381.546.926c.3.509 1.176 1.719 1.947 2.687l1.449 1.803 1.803-.235c5.729-.748 7.691.523 7.691 2.345 0 2.299-4.498 2.489-8.276-.164-.85-.597-1.434-1.19-1.434-1.19l-3.532.796-3.565 1.122-1.021 1.55c-1.499 2.428-3.248 4.44-4.498 5.172-1.399.82-2.866.876-3.604.137zm2.286-.817c.819-.506 2.476-2.466 3.623-4.286l.464-.737-2.115 1.063c-3.267 1.642-4.761 3.19-3.984 4.127.437.526.959.482 2.011-.168zm21.218-5.956c.801-.561.685-1.691-.221-2.147-.705-.355-1.273-.428-3.103-.401l-3.24.372 1.435.939c.587.335 2.015.958 3.057 1.277 1.028.315 1.622.281 2.073-.041zm-8.532-3.546c-.485-.51-1.309-1.573-1.832-2.363-.684-.896-1.026-1.529-1.026-1.529l-.909 2.574-1.279 3.161-.371.717 2.974-.908 3.218-.701zm-2.749-11.026c.124-1.037.176-2.073-.157-2.596-.925-1.011-2.041-.168-1.852 2.235.064.808.264 2.19.533 3.042l.488 1.549.344-1.166c.189-.642.479-2.02.644-3.064z" fill="#ff2116"/><path d="M-20.93 167.839h2.365q1.134 0 1.84.217.707.21 1.189.945.483.728.483 1.756 0 .945-.392 1.623-.392.679-1.057.98-.658.301-2.029.301h-.819v3.729h-1.581zm1.581 1.224v3.331h.784q1.05 0 1.448-.392.406-.392.406-1.273 0-.658-.266-1.064-.266-.413-.588-.504-.315-.098-1.001-.098zm5.507-1.224h2.148q1.56 0 2.491.553.938.553 1.413 1.644.483 1.092.483 2.421 0 1.399-.434 2.498-.427 1.092-1.315 1.763-.882.672-2.519.672h-2.267zm1.581 1.266v7.018h.658q1.378 0 2.001-.952.623-.959.623-2.554 0-3.512-2.624-3.512zm6.472-1.266h5.304v1.266h-3.722v2.855h2.981v1.266h-2.981v4.163h-1.581z" fill="#2c2c2c"/></g></svg> -->
							</a></td>
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
				
			<?php
			endif;
			?>
			</div>
			<!-- <div class="order-2 col-md-3 mb-4">
				<?php //get_sidebar(); ?>
			</div> -->
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
