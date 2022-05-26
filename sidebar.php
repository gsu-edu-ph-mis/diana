<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Diana
 * subpackage Diana 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<div id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- .sidebar .widget-area -->
<?php endif; ?>
