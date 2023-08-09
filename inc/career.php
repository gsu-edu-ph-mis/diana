<?php
/**
 * Career custom post
 */
function custom_post_type_career() {

	$labels = array(
		'name'                  => _x( 'Job Posts', 'Post Type General Name', 'diana' ),
		'singular_name'         => _x( 'Job Post', 'Post Type Singular Name', 'diana' ),
		'menu_name'             => __( 'Job Posts', 'diana' ),
		'name_admin_bar'        => __( 'Job Post', 'diana' ),
		'archives'              => __( 'Item Archives', 'diana' ),
		'attributes'            => __( 'Item Attributes', 'diana' ),
		'parent_item_colon'     => __( 'Parent Item:', 'diana' ),
		'all_items'             => __( 'All Items', 'diana' ),
		'add_new_item'          => __( 'Add New Job Post', 'diana' ),
		'add_new'               => __( 'Add New', 'diana' ),
		'new_item'              => __( 'New Item', 'diana' ),
		'edit_item'             => __( 'Edit Item', 'diana' ),
		'update_item'           => __( 'Update Item', 'diana' ),
		'view_item'             => __( 'View Item', 'diana' ),
		'view_items'            => __( 'View Items', 'diana' ),
		'search_items'          => __( 'Search Item', 'diana' ),
		'not_found'             => __( 'Not found', 'diana' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'diana' ),
		'featured_image'        => __( 'Featured Image', 'diana' ),
		'set_featured_image'    => __( 'Set featured image', 'diana' ),
		'remove_featured_image' => __( 'Remove featured image', 'diana' ),
		'use_featured_image'    => __( 'Use as featured image', 'diana' ),
		'insert_into_item'      => __( 'Insert into item', 'diana' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'diana' ),
		'items_list'            => __( 'Items list', 'diana' ),
		'items_list_navigation' => __( 'Items list navigation', 'diana' ),
		'filter_items_list'     => __( 'Filter items list', 'diana' ),
	);
	$args = array(
		'label'                 => __( 'Career', 'diana' ),
		'description'           => __( 'Research career', 'diana' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array(),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page'
	);
	register_post_type( 'career', $args );

}
add_action( 'init', 'custom_post_type_career', 0 );

/**
 * Metaboxes
 */
function diana_render_career_metabox( $post ){
        
	$vars = array();
	$vars['post'] = $post;
	
	$keys = [
		'diana_career_posting_date',
		'diana_career_closing_date',
		'diana_career_position_title',
		'diana_career_place_of_assignment',
		'diana_career_plantilla',
		'diana_career_salary_grade',
		'diana_career_monthly_salary',
		'diana_career_eligibility',
		'diana_career_education',
		'diana_career_training',
		'diana_career_work_xp',
		'diana_career_competency',
		'diana_career_remarks',
		'diana_career_documents',
		'diana_career_recipient',
		'diana_career_recipient_title',
		'diana_career_recipient_address',
		'diana_career_recipient_email'
	];
	

	if(empty($post->post_name)){
		for ($i = 0; $i < count($keys); $i++) {
			$key = $keys[$i];
			$vars[$key] = '';
		}
		$vars['diana_career_posting_date'] = date("Y-m-d");;
		$vars['diana_career_closing_date'] = date("Y-m-d");;
		$vars['diana_career_place_of_assignment'] = 'GSU';
		$vars['diana_career_documents'] = '1. Fully accomplished Personal Data Sheet (PDS) with recent passport-sized picture (CS Form No. 212, Revised 2017) which can be downloaded at www.csc.gov.ph;
2. Performance rating in the last rating period (if applicable);
3. Authenticated copy of certificate of eligibility/rating/license (if applicable);
4. Authenticated copy of Transcript of Records and Diploma (BS and Masters); and
5. Photocopy of Certificate of training';
		$vars['diana_career_remarks'] = 'The University encourages all interested and qualified applicants including persons vmh disability (PWD), and members of the indigenous communities, irrespective of sexual orientation and gender iden@es and expression, to apply.';
		$vars['diana_career_recipient'] = 'DR. LILIAN DIANA B. PARREÑO';
		$vars['diana_career_recipient_title'] = 'SUC President III';
		$vars['diana_career_recipient_address'] = 'Guimaras State University, Mclain, Buenavista, Guimaras';
		$vars['diana_career_recipient_email'] = 'career@gsu.edu.ph';
	} else {
		$_diana_settings_career = diana_get_post_meta($post->ID, '_diana_settings_career');

		for ($i = 0; $i < count($keys); $i++) {
			$key = $keys[$i];
			$vars[$key] = $_diana_settings_career[$key];
		}
	}
	
	// print_r($vars);
	diana_view_render('career-settings.php', $vars);
}



function diana_add_career_metabox(){
	add_meta_box(
		'diana-career-metabox',
		__('Job Post Settings', 'diana'),
		'diana_render_career_metabox',
		'career' ,
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'diana_add_career_metabox');

/**
 * Save post hook
 */
function diana_save_post_hook_career( $post_id ){
	global $wp_version;

	// Use local variable
	$post = $_POST;
	
	// Verify nonce
	// $nonce_name = $this->nonce_name;
	// if (!empty($post[$nonce_name])) {
	// 	if (!wp_verify_nonce($post[$nonce_name], $this->nonce_action)) {
	// 		return $post_id;
	// 	}
	// } else {
	// 	return $post_id; // Make sure we cancel on missing nonce!
	// }
	
	// Check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}

	// Remove temporarily to avoid infinite loop
	remove_action( "save_post_career", 'diana_save_post_hook_career' );
	// Update info

	$keys = [
		'diana_career_posting_date',
		'diana_career_closing_date',
		'diana_career_position_title',
		'diana_career_place_of_assignment',
		'diana_career_plantilla',
		'diana_career_salary_grade',
		'diana_career_monthly_salary',
		'diana_career_eligibility',
		'diana_career_education',
		'diana_career_training',
		'diana_career_work_xp',
		'diana_career_competency',
		'diana_career_remarks',
		'diana_career_documents',
		'diana_career_recipient',
		'diana_career_recipient_title',
		'diana_career_recipient_address',
		'diana_career_recipient_email'
	];

	for ($i = 0; $i < count($keys); $i++) {
		$key = $keys[$i];
		$_diana_settings_career[$key] = isset($post[$key]) ? $post[$key] : "";
	}

	update_post_meta($post_id, '_diana_settings_career', $_diana_settings_career);
	
	// Add save hook
	add_action( "save_post_career", 'diana_save_post_hook_career' );
}
add_action( "save_post_career", 'diana_save_post_hook_career' );