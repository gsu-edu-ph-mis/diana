<?php
/**
 * diana custom query
 *
 * Prevents diana from running on WordPress versions prior to 4.1,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.1.
 *
 * @package WordPress
 * @subpackage Diana
 * subpackage Diana 1.0
 */

/**
 * Custom query for bac child categories
 *
 * subpackage Diana 1.0
 */
function diana_bac_custom_query( $query ){
    if(is_category('invitation-to-bid')){
        // $query->set( 'posts_per_page', -1 );
        // $query->set( 'category_name', 'invitation-to-bid' );
        // $query->set( 'post_type', 'post' );
        // $query->set( 'paged', 1 );
    }
}
// add_action('pre_get_posts', 'diana_bac_custom_query');

function diana_news_query($query) {
	$cat1 = get_category_by_slug( 'bac' );
	$cat2 = get_category_by_slug( 'career' );
    if ( ! is_admin() &&  @$query->query['pagename'] === 'news' && ! $query->is_search ) {
        $query->set( 'category__not_in', array(
            $cat1->term_id,
            $cat2->term_id,
        ) );
    }
}
add_action( 'pre_get_posts', 'diana_news_query' );
