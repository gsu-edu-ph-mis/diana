<?php
/**
 * Custom template tags for Twenty Fifteen
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 * @subpackage Diana
 * subpackage Diana 1.0
 */

if ( ! function_exists( 'diana_comment_nav' ) ) :
/**
 * Display navigation to next/previous comments when applicable.
 *
 * subpackage Diana 1.0
 */
function diana_comment_nav() {
	// Are there comments to navigate through?
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	?>
	<nav class="navigation comment-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'diana' ); ?></h2>
		<div class="nav-links">
			<?php
				if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'diana' ) ) ) :
					printf( '<div class="nav-previous">%s</div>', $prev_link );
				endif;

				if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'diana' ) ) ) :
					printf( '<div class="nav-next">%s</div>', $next_link );
				endif;
			?>
		</div><!-- .nav-links -->
	</nav><!-- .comment-navigation -->
	<?php
	endif;
}
endif;

if ( ! function_exists( 'diana_entry_meta' ) ) :
/**
 * Prints HTML with meta information for the categories, tags.
 *
 * subpackage Diana 1.0
 */
function diana_entry_meta() {
	echo '<div class="post-meta">';
	if ( is_sticky() && is_home() && ! is_paged() ) {
		printf( '<span class="sticky-post">%s</span>', __( 'Featured', 'diana' ) );
	}

	$format = get_post_format();
	if ( current_theme_supports( 'post-formats', $format ) ) {
		printf( '<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>',
			sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Format', 'Used before post format.', 'diana' ) ),
			esc_url( get_post_format_link( $format ) ),
			get_post_format_string( $format )
		);
	}

	if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			// $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			get_the_date(),
			esc_attr( get_the_modified_date( 'c' ) ),
			get_the_modified_date()
		);

		printf( '<span class="posted-on"><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">
		<svg style="width:24px;height:24px" viewBox="0 0 24 24">    <path fill="currentColor" d="M9,10H7V12H9V10M13,10H11V12H13V10M17,10H15V12H17V10M19,3H18V1H16V3H8V1H6V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M19,19H5V8H19V19Z" /></svg> 
		%3$s</a></span>',
			_x( 'Posted on', 'Used before publish date.', 'diana' ),
			esc_url( get_permalink() ),
			$time_string
		);
	}

	// if ( 'post' == get_post_type() ) {
	// 	if ( is_singular() || is_multi_author() ) {
	// 		printf( '<span class="byline"><span class="author vcard"><span class="screen-reader-text">%1$s </span><a class="url fn n" href="%2$s">%3$s</a></span></span>',
	// 			_x( 'Author', 'Used before post author name.', 'diana' ),
	// 			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
	// 			get_the_author()
	// 		);
	// 	}

	// 	$categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'diana' ) );
	// 	if ( $categories_list && diana_categorized_blog() ) {
	// 		printf( '<span class="cat-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
	// 			_x( 'Categories', 'Used before category names.', 'diana' ),
	// 			$categories_list
	// 		);
	// 	}

	// 	$tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'diana' ) );
	// 	if ( $tags_list ) {
	// 		printf( '<span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
	// 			_x( 'Tags', 'Used before tag names.', 'diana' ),
	// 			$tags_list
	// 		);
	// 	}
	// }

	if ( is_attachment() && wp_attachment_is_image() ) {
		// Retrieve attachment metadata.
		$metadata = wp_get_attachment_metadata();

		printf( '<span class="full-size-link"><span class="screen-reader-text">%1$s </span><a href="%2$s">%3$s &times; %4$s</a></span>',
			_x( 'Full size', 'Used before full size attachment link.', 'diana' ),
			esc_url( wp_get_attachment_url() ),
			$metadata['width'],
			$metadata['height']
		);
	}

	// if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
	// 	echo '<span class="comments-link">';
	// 	/* translators: %s: post title */
	// 	comments_popup_link( sprintf( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'diana' ), get_the_title() ) );
	// 	echo '</span>';
	// }

	edit_post_link( __( 'Edit', 'diana' ), '<span class="edit-link">', '</span>' );

	echo "</div>";
}
endif;

/**
 * Determine whether blog/site has more than one category.
 *
 * subpackage Diana 1.0
 *
 * @return bool True of there is more than one category, false otherwise.
 */
function diana_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'diana_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'diana_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so diana_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so diana_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in {@see diana_categorized_blog()}.
 *
 * subpackage Diana 1.0
 */
function diana_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'diana_categories' );
}
add_action( 'edit_category', 'diana_category_transient_flusher' );
add_action( 'save_post',     'diana_category_transient_flusher' );

if ( ! function_exists( 'diana_post_thumbnail' ) ) :
/**
 * Display an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index views, or a div
 * element when on single views.
 *
 * subpackage Diana 1.0
 */
function diana_post_thumbnail($size) {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	} ?>
	<div class="post-thumbnail">
		<?php if ( is_singular() ) :
			?>
			<?php the_post_thumbnail($size); ?>
		<?php else : ?>
			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
				<?php
					the_post_thumbnail( 'thumbnail', array( 'alt' => get_the_title() ) );
				?>
			</a>
		<?php endif; // End is_singular() ?>
	</div><!-- .post-thumbnail -->
	<?php
}
endif;

if ( ! function_exists( 'diana_get_link_url' ) ) :
/**
 * Return the post URL.
 *
 * Falls back to the post permalink if no URL is found in the post.
 *
 * subpackage Diana 1.0
 *
 * @see get_url_in_content()
 *
 * @return string The Link format URL.
 */
function diana_get_link_url() {
	$has_url = get_url_in_content( get_the_content() );

	return $has_url ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}
endif;

if ( ! function_exists( 'diana_excerpt_more' ) && ! is_admin() ) :
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and a 'Continue reading' link.
 *
 * subpackage Diana 1.0
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function diana_excerpt_more( $more ) {
	$link = sprintf( '<a href="%1$s" class="btn btn-sm btn-light text-primary">%2$s</a>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Read more %s', 'diana' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
		);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'diana_excerpt_more' );
endif;


function diana_top_nav_cb( $args ){
	$markup = '';
	return $markup;
}

function diana_is_current( $checkUrl ){
	global $wp;

	$currentUrl = home_url($wp->request);
	return (1 === preg_match($checkUrl, $currentUrl)) ? 'current' : '';
}

function diana_categories( $postID ){
	$categories = wp_get_post_categories($postID);
	$categories = array_map(function($catId){
		return get_category($catId);
	}, $categories);
	$categories = array_filter($categories, function($cat){
		return $cat->parent > 0;
	});
	$categories = array_map(function($cat){
		return $cat->name;
	}, $categories);
	return implode(', ', $categories);
}

function diana_get_featured_image_url( $id, $size = 'thumb') {
	if(wp_attachment_is_image($id)){
		$results = image_downsize( $id, $size );
		return $results[0];
	} 
	return '';
}
function diana_get_featured_image( $id, $size = 'thumb', $title = 'Image', $styles='', $classes='' ) {
	if(wp_attachment_is_image($id)){
		list($path, $width, $height, $isResized) = image_downsize( $id, $size );
		return '<img width="'.$width.'" height="'.$height.'" src="'.$path.'" alt="'.$title.'" class="'.$classes.'" style="'.$styles.'">';
	} 
	return '';
}

function diana_entry_share(){
	?>
	<div class="d-flex align-items-center justify-content-center">
		<span>Share this on: </span>
		<a class="m-3 text-dark" href="https://facebook.com/sharer/sharer.php?u=<?= esc_url( get_permalink() ); ?>" target="_blank" rel="noopener" aria-label="Facebook">
			<svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z"></path></svg>
			<span>Facebook</span>
		</a>
		<a class="m-3 text-dark" href="mailto:?subject=<?= esc_html(get_the_title());?>&body=<?= esc_url( get_permalink() ); ?>" target="_self" rel="noopener" aria-label="E-Mail">
			<svg style="width:24px;height:24px" viewBox="0 0 24 24">
				<path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" />
			</svg>	
			<span>Email</span>
		</a>
	</div>
	<?php 
}

/**
 * Get array of weekdays with varying weekstart
 */
function kalendaryo_get_week_days($weekStart = 0) {
	$weekDays = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    return array_merge(array_slice($weekDays, $weekStart), array_slice($weekDays, 0, $weekStart));
}

function kalendaryo_get_prefix($momentDate, $weekStart = 0){

	if ($weekStart < 0 || $weekStart > 6) {
        throw new Error('Invalid param. Weekstart must be 0-6.');
    }

    $weekDayFirst = (int)((clone $momentDate)->modify('first day of this month')->format('w')); // First day of week. Zero-based. 0-6

	// Prefix length formula
    $prefixLength = $weekDayFirst - $weekStart;
    if ($prefixLength < 0) {
        $prefixLength += 7;
    }

	$prevMonthDays = (clone $momentDate)->modify('first day of previous month')->format('t');
	$prefix = ($prevMonthDays > 0) ? range(1, $prevMonthDays) : []; // Get previous month's total number of days and place it in an array

    $prefix = array_slice($prefix, count($prefix) - $prefixLength); // Cut the parts we need


    $prefix = array_map(function($i) use ($momentDate){
		$d = clone $momentDate;
		$d->modify('first day of previous month');
		$d->setDate($d->format('Y'), $d->format('m'), $i);
		return array(
			'type' => 'prefix',
			'date' => $d,
			'key' => $d->format('Ymd'),
			'events' => []
		);
    }, $prefix);

    return $prefix;
}


function kalendaryo_get_suffix($momentDate, $weekStart = 0) {

	if ($weekStart < 0 || $weekStart > 6) {
        throw new Error('Invalid param. Weekstart must be 0-6.');
    }

    $weekDayLast = (int)((clone $momentDate)->modify('last day of this month')->format('w')); // This months last day of week. Zero-based. 0-6

	// Suffix length formula
    $weekDays = 6; // 0-6 (7) days in a week
    $suffixLength = $weekDays - ($weekDayLast - $weekStart);
    if ($suffixLength > 6) {
        $suffixLength = $suffixLength - $weekDays - 1;
    }

	$suffix = ($suffixLength > 0) ? range(1, $suffixLength) : []; // Get previous month's total number of days and place it in an array

	$suffix = array_map(function($i) use ($momentDate){
		$d = clone $momentDate;
		$d->modify('first day of next month');
		$d->setDate($d->format('Y'), $d->format('m'), $i);
        return array(
			'type' => 'suffix',
			'date' => $d,
			'key' => $d->format('Ymd'),
			'events' => []
		);
    }, $suffix);
    return $suffix;
}


function kalendaryo_get_days($momentDate, $weekStart = 0) {

	$totalDays = $momentDate->format('t');
    $daysArray = range(1, $totalDays);

    $daysArray = array_map(function($day) use ($momentDate) {
        $d = new DateTime();
		$d->setDate($momentDate->format('Y'), $momentDate->format('m'), $day);
		return array(
			'type' => 'day',
			'date' => $d,
			'key' => $d->format('Ymd'),
			'events' => []
		);
    }, $daysArray);

    $daysArray = array_merge(kalendaryo_get_prefix($momentDate, $weekStart), $daysArray, kalendaryo_get_suffix($momentDate, $weekStart));
    return $daysArray;
}

/**
 * Split 1D array into chunk of 7 (2D array)
 */
function kalendaryo_get_matrix($momentDate, $weekStart = 0) {
    $weekDays = kalendaryo_get_week_days($weekStart);
    $daysArray = kalendaryo_get_days($momentDate, $weekStart);
    $daysArray = array_merge($weekDays, $daysArray);
    $matrix = array_chunk($daysArray, 7);
    return $matrix;
}