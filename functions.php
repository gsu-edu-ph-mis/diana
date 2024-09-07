<?php
/**
 * diana functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Diana
 * subpackage Diana 1.0
 */

/*

Categories

bids-and-awards
job-posting
research

*/

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * subpackage Diana 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * diana only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'diana_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * subpackage Diana 1.0
 */
function diana_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on diana, use a find and replace
	 * to change 'diana' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'diana', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	
    add_image_size( 'tiny', 90, 90 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'diana' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	/*
	 * Declare woocommerce support.
	 */
    add_theme_support( 'woocommerce' );
	
	remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );
}
endif; // diana_setup
add_action( 'after_setup_theme', 'diana_setup' );

/**
 * Register widget area.
 *
 * subpackage Diana 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function diana_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'diana' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'diana' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'diana_widgets_init' );


/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * subpackage Diana 1.1
 */
function diana_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'diana_javascript_detection', 0 );

/**
 * Enqueue scripts and styles.
 *
 * subpackage Diana 1.0
 */
function diana_scripts() {
	wp_deregister_script('simcal-fullcal-moment');
	wp_deregister_script('simcal-moment-timezone');

	if(!is_admin()){
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-core' );
	
		wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js' , false, NULL, true );
		wp_register_script( 'popper', get_template_directory_uri() . '/js/popper.min.js' , false, NULL, true );
		wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' , false, NULL, true );
		
		wp_enqueue_script( 'jquery' );
		if(is_page('undergraduate-programs') || is_page('graduate-programs')){
			wp_enqueue_script( 'popper' );
			wp_enqueue_script( 'bootstrap' );
		}
		
	}

	// Load our main stylesheet.
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.6.0' );
	if(is_page('map')){
		wp_enqueue_style( 'leaflet-css', get_template_directory_uri() . '/leaflet/leaflet.css', array(), '1.7.1' );
	}
	wp_enqueue_style( 'diana-style', get_template_directory_uri() . '/style.css', array(), '20230428' );

	if(is_page('map')){
		wp_enqueue_script( 'leaflet-js', get_template_directory_uri() . '/leaflet/leaflet.js', array(), false, true );
	}
	if(is_page('academic-programs')){
		wp_enqueue_script( 'vuejs', get_template_directory_uri() . '/js/vue.js', array(), false, true );
		wp_enqueue_script( 'programs', get_template_directory_uri() . '/js/programs.js', array(), false, true );
	}
	if(is_page('key-officials')){
		wp_enqueue_script( 'vuejs', get_template_directory_uri() . '/js/vue.js', array(), false, true );
		wp_enqueue_script( 'programs', get_template_directory_uri() . '/js/key-officials.js', array(), false, true );
	}
	if(is_page('frames')){
		wp_enqueue_script( 'vuejs', get_template_directory_uri() . '/js/vue.js', array(), false, true );
		wp_enqueue_script( 'lodash', get_template_directory_uri() . '/js/unpkg.com_lodash@4.17.21_lodash.min.js', array(), false, true );
		wp_enqueue_script( 'konva', get_template_directory_uri() . '/js/unpkg.com_konva@8.3.5_konva.min.js', array(), false, true );
		wp_enqueue_script( 'frames', get_template_directory_uri() . '/js/frames.js', array(), false, true );
	}
	wp_enqueue_script( 'diana-script', get_template_directory_uri() . '/js/script.js', array(), '20221012', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'diana_scripts', 99 );

function diana_defer_scripts( $tag, $handle, $src ) {
	$defer = array( 
	  'jquery-core',
	  'jquery-migrate',
	  'moment',
	  'moment-timezone-with-data-10-year-range',
	  'simcal-qtip',
	  'simplecalendar-imagesloaded',
	  'vuejs',
	  'programs',
	  'konva',
	  'frames',
	  'diana-script'
	);
	if ( in_array( $handle, $defer ) ) {
	   return '<script type="text/javascript" src="' . $src . '" id="' . $handle . '" defer="defer"></script>' . "\n";
	}
	return $tag;
} 
add_filter( 'script_loader_tag', 'diana_defer_scripts', 10, 3 );

function diana_defer_styles( $tag, $handle, $href, $media ) {
	$defer = array( 
	  'bootstrap-style',
	  'diana-style',
	);
	if ( in_array( $handle, $defer ) ) {
	   return "<link rel='stylesheet' id='". $handle ."'  href='". $href ."' type='text/css' media='". $media ."' defer='defer' />"."\n";
	}
	return $tag;
}
// add_filter('style_loader_tag', 'diana_defer_styles', 10, 4);

/**
 * Custom template tags for this theme.
 *
 * subpackage Diana 1.0
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Main nav walker class.
 *
 * subpackage Diana 1.0
 */
require get_template_directory() . '/inc/main-nav-walker.php';


function diana_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'diana_section_id' , array(
		'title'      => __('Visible Section Name','diana'),
		'priority'   => 30
	) );

	$wp_customize->add_setting( 'diana_header_color' , array(
		'default' => '#000',
		'sanitize_callback' => 'diana_sanitize_hex_color',
	) );

	$wp_customize->add_control(
		'diana_control_id',
		array(
			'label'    => __( 'Control Label', 'diana' ),
			'description' => __( 'Applied to the header on small screens and the sidebar on wide screens.', 'diana' ),
			'section'  => 'diana_section_id',
			'settings' => 'diana_header_color',
			'type'     => 'text'
		)
	);
}
add_action( 'customize_register', 'diana_customize_register' );

function diana_sanitize_hex_color( $input ){
	return $input;
}

/*
 * Woocommerce Integration
 *
 * Remove default markup and add our theme's markup
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

add_filter( 'woocommerce_show_page_title', 'diana_show_page_title');

function my_theme_wrapper_start() {
	?>
	<div class="section section-page-title">
		<div class="container">
			<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
		</div>
	</div>
	<div class="site-content">
		<div class="container">
			<main id="main" class="site-main" role="main"><?php
}

function my_theme_wrapper_end() {
	?>
			</main>
			<?php //get_sidebar(); ?>
		</div>
	</div>
	<?php
}

function diana_show_page_title(){
	return false;
}



// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
add_filter( 'woocommerce_add_to_cart_fragments', 'mytheme_cart_item_count_fragment' );
function mytheme_cart_item_count_fragment( $fragments ) {
	ob_start();
	?>
	<a href="<?php echo WC()->cart->get_cart_url(); ?>">
		<svg viewBox="0 0 24 24"><path d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z" /></svg>
		<span><?php echo WC()->cart->cart_contents_count; ?></span>
	</a>
	<?php

	$fragments['#nav-cart>a'] = ob_get_clean();

	return $fragments;
}

// Custom body classes
add_filter( 'body_class', 'diana_body_classes' );
function diana_body_classes( $classes ){
	$template = wp_basename( get_page_template(), '.php' );
	if( 'page-full-width' === $template ){
		$classes[] = 'page-full-width';
	}
	return $classes;
}


add_action( 'woocommerce_after_shop_loop_item', 'diana_template_loop_demo', 11 );
function diana_template_loop_demo(){
	global $product;
	?> <a href="//demo.erikathemes.com/?theme=<?php echo $product->post->post_name; ?>" rel="nofollow" class="button">Demo</a><?php
}


function disable_wp_emojicons() {

	// all actions related to emojis
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  
	// filter to remove TinyMCE emojis
	add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );


/*
* Add directory separator if its missing. Can be \ or / depending on OS.
*
* @param string $string
* @return string $string
*/
function diana_fs_right_sep( $string ){
	$c = substr($string, -1);
	if($c !== '/' and $c !== '\\'){
		return $string.DIRECTORY_SEPARATOR;
	}
	return $string;
}

/**
* Include the view file and extract the passed variables
* 
* @param string $file File name of the template
* @param array $vars Template variables passed to the template
* @return void on success string "Not found $view_file" on fail
*/
function diana_view_render($file, $vars = array()){
	$plugin_path = realpath(get_template_directory()).DIRECTORY_SEPARATOR;
	$view_folder = $plugin_path.'views';
	$view_file = diana_fs_right_sep($view_folder).$file; // Add directory separator if needed
	if(@file_exists($view_file)){
		if(!empty($vars)){
			extract($vars, EXTR_SKIP); // Extract variables
		}

		include $view_file; //Include the view file
	} else {
		echo '<p>Not found '.$view_file.'</p>';
	}
}

/**
 * Wrapper for WP get_post_custom that automatically unserialize data.
 *
 * @param int $post_id ID of post
 * @param string $key Meta key name
 *
 * @return array Array of data or empty array
 */
function diana_get_post_meta( $post_id, $key ) {
	$meta = get_post_custom( $post_id );
	if ( isset( $meta[ $key ][0] ) and ! empty( $meta[ $key ][0] ) ) {
		return maybe_unserialize( $meta[ $key ][0] );
	}
	return array();
}

function diana_limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos   = array_keys($words);
        $text  = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}

function diana_get_excerpt($content, $post, $more = 'Read &raquo;') {
	$plain = wp_strip_all_tags($content);
	return diana_limit_text($plain, 10) .' <a href="'.get_permalink($post->ID).'" class="btn btn-sm btn-light text-primary">'.$more.'</a>';
}

function diana_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'diana_custom_excerpt_length', 999 );

// News and Update page
function diana_exclude_single_posts_home($query) {
	$cat1 = get_category_by_slug( 'bac' );
	$cat2 = get_category_by_slug( 'career' );
    if ( ! is_admin() && $query->is_main_query() ) {
        // if ( $query->is_search ) {
            $query->set( 'category__not_in', array(
				$cat1->term_id,
				$cat2->term_id,
			) );
        // }
    }
}
// add_action( 'pre_get_posts', 'diana_exclude_single_posts_home' );

function diana_301_redirects() {
    global $wp;

	$urls = array(
		array(
			'old' => 'bac-bid-bulletin-no-2', // /2020/10/19/bac-bid-bulletin-no-2/
			'new' => 'procurement-of-furniture-and-fixtures-for-the-higher-education-of-guimaras-state-college-salvador-campus-with-bid-number-20-10-077'
		),
		array(
			'old' => 'pbb-guidelines',
			'new' => 'performance-based-bonus-guidelines'
		),
		array(
			'old' => 'downloadables-2',
			'new' => 'downloads'
		),
		array(
			'old' => 'contact-us-2',
			'new' => 'contact-us'
		),
		array(
			'old' => 'contact-information-2',
			'new' => 'contact-us'
		),
		array(
			'old' => 'admissions',
			'new' => 'admission'
		),
		array(
			'old' => 'knowledge-base-2/general-information-general-information/academic-programs',
			'new' => 'academic-programs'
		),
		array(
			'old' => 'college-of-graduate-school',
			'new' => 'graduate-programs'
		),
		array(
			'old' => 'masteral',
			'new' => 'graduate-programs'
		),
		array(
			'old' => 'key-officials-and-faculty-with-designations-2020',
			'new' => 'key-officials'
		),
		array(
			'old' => 'college-officials',
			'new' => 'key-officials'
		),
		array(
			'old' => 'gsc-library',
			'new' => 'library'
		),
		array(
			'old' => 'vmgo',
			'new' => 'vision-mission-goals-mandate'
		),
		array(
			'old' => 'president',
			'new' => 'office-of-the-president'
		),
		array(
			'old' => 'knowledge-base-2/general-information-general-information/history-of-guimaras-state-college',
			'new' => 'brief-history'
		),
		array(
			'old' => 'scholarship-program',
			'new' => 'scholarships'
		),
		array(
			'old' => 'academic-calendar',
			'new' => 'school-calendar'
		),
		array(
			'old' => 'zumba2023',
			'new' => 'https://docs.google.com/forms/d/e/1FAIpQLSdUvcD8OC4GLKgRCneZUG0qSq7b8PZp85oywleKFFUnxiT-gA/viewform'
		),
	);

	$searchMe = $wp->request;
	$found = array_search($searchMe, array_column($urls, 'old'));
	
	if($found !== false and $searchMe !== $urls[$found]['new']){
		if (preg_match('/(^https:\/\/)|(^http:\/\/)/', $urls[$found]['new'])) {
			wp_redirect( $urls[$found]['new'], 301 );
			exit;
		}
		wp_redirect( home_url($urls[$found]['new']), 301 );
		exit;
	}
}
add_action ('template_redirect', 'diana_301_redirects');

function diana_register_admin_scripts($hook ) {
 
	if( 'journal' == get_post_type() || 'issue' == get_post_type() || 'article' == get_post_type() ){ // Limit loading to certain admin pages
		
		wp_enqueue_style( 'diana-admin-style', get_template_directory_uri().'/css/admin.css');
		wp_enqueue_script( "diana-admin-script", get_template_directory_uri().'/js/admin.js', array('jquery'));
	}
}
add_action( 'admin_enqueue_scripts', 'diana_register_admin_scripts', 10);

function diana_og_tags(){
	echo '<meta property="og:url" content="'. esc_url(get_permalink())  .'" />'."\n";
	echo '<meta property="og:title" content="'. esc_attr(get_the_title())  .'" />'."\n";
	echo '<meta property="og:description" content="'. esc_attr(get_bloginfo('description'))  .'" />'."\n";
    if(is_singular()) {
		$img = get_the_post_thumbnail_url(get_the_ID(), 'medium');
		if($img){
        	echo '<meta property="og:image" content="'. esc_url($img)   .'" />'."\n";
		}
    }
}
add_action('wp_head', 'diana_og_tags', 1);

// Disable for security - https://codex.wordpress.org/XML-RPC_WordPress_API
add_filter('xmlrpc_enabled', '__return_false');

require get_template_directory() . '/inc/career.php';
require get_template_directory() . '/inc/query.php';