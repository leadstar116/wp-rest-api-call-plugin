<?php // ScriptSquare - Create Search Post Type



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}



// Register Drug Custom Post Type
function scriptsquareplugin_create_drug_posttype() {
	$supports = array(
		'title', // post title
		'editor', // post content
		'author', // post author
		'thumbnail', // featured images
		'excerpt', // post excerpt
		'custom-fields', // custom fields
		'comments', // post comments
		'revisions', // post revisions
		'post-formats', // post formats
	);
	$labels = array(
		'name' => _x('Drug', 'plural'),
		'singular_name' => _x('Drug', 'singular'),
		'menu_name' => _x('Drug', 'admin menu'),
		'name_admin_bar' => _x('Drug', 'admin bar'),
		'add_new' => _x('Add New', 'add new'),
		'add_new_item' => __('Add New Drug'),
		'new_item' => __('New drug'),
		'edit_item' => __('Edit drug'),
		'view_item' => __('View drug'),
		'all_items' => __('All drug'),
		'search_items' => __('Search drug'),
		'not_found' => __('No drug found.'),
	);
	$args = array(
		'supports' => $supports,
		'labels' => $labels,
		'public' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'drug'),
		'has_archive' => true,
		'hierarchical' => false,
	);
	register_post_type('drug', $args);
}
// Hooking up our function to theme setup
add_action( 'init', 'scriptsquareplugin_create_drug_posttype' );