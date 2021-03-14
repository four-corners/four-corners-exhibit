<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Four Corners Exhibit
 * @since 1.0.0
 */

//////////////////////////////////////////////
/////////////////////INIT/////////////////////
//////////////////////////////////////////////
function exhibit_scripts() {
	$ver = '0.0.1';
	wp_enqueue_style( 'style', get_stylesheet_uri(), null, $ver );
	// wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), true );
	// wp_enqueue_script( 'imagesLoaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/scripts.js', array(), $ver, true );
	// wp_localize_script( 'ajax', 'ajax_obj', array(
	// 	'ajaxurl' => admin_url( 'admin-ajax.php' ),
	// ));
}
add_action( 'wp_enqueue_scripts', 'exhibit_scripts' );


//////////////////////////////////////////////
//////////////////POST TYPES//////////////////
//////////////////////////////////////////////

// function add_query_vars_filter( $vars ) {
//   $vars[] = 'partner_types';
//   $vars[] = 'event_date';
//   return $vars;
// }
// add_filter( 'query_vars', 'add_query_vars_filter' );

function register_photos() {
	register_post_type( 'photo',
		array(
			'labels' => array(
				'name' => __( 'Four Corners Photos' ),
				'singular_name' => __( 'Four Corners Photo' )
			),
			'menu_position' => 4,
			'menu_icon' => 'dashicons-grid-view',
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array( 'category' ),
			'supports' => array( 'title', 'thumbnail', 'editor', 'categories' )
		)
	);
}
add_action( 'init', 'register_photos' );


//////////////////////////////////////////////
//////////////////TAXONOMIES//////////////////
//////////////////////////////////////////////

// function register_partner_types() {
// 	$partner_type_args = array(
// 		'labels' => array(
// 			'name'              => _x( 'Partner Type', 'taxonomy general name', 'textdomain' ),
// 			'singular_name'     => _x( 'Partner Type', 'taxonomy singular name', 'textdomain' ),
// 			'search_items'      => __( 'Search Partner Types', 'textdomain' ),
// 			'all_items'         => __( 'All Partner Types', 'textdomain' ),
// 			'parent_item'       => __( 'Parent Partner Type', 'textdomain' ),
// 			'parent_item_colon' => __( 'Parent Partner Type:', 'textdomain' ),
// 			'edit_item'         => __( 'Edit Partner Type', 'textdomain' ),
// 			'update_item'       => __( 'Update Partner Type', 'textdomain' ),
// 			'add_new_item'      => __( 'Add New Partner Type', 'textdomain' ),
// 			'new_item_name'     => __( 'New Partner Type Name', 'textdomain' ),
// 			'menu_name'         => __( 'Partner Types', 'textdomain' ),
// 		),
// 		'hierarchical' => true,
// 		'show_uri' => true,
// 		'show_admin_column' => true,
// 		'update_count_callback' => '_update_post_term_count',
// 		'query_var' => true,
// 	);
// 	register_taxonomy( 'partner_type', array( 'partner' ), $partner_type_args );
// }
// add_action( 'init', 'register_partner_types' );

//////////////////////////////////////////////
//////////////////ADMIN PANEL/////////////////
//////////////////////////////////////////////

function remove_menus(){
	remove_menu_page( 'jetpack' );
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_menus' );

// show_admin_bar( false );

//////////////////////////////////////////////
/////////////////////MEDIA////////////////////
//////////////////////////////////////////////

add_theme_support( 'post-thumbnails', array( 'photo' ) );

@ini_set( 'upload_max_size' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'max_execution_time', '400' );


//////////////////////////////////////////////
////////////////////ENDING////////////////////
//////////////////////////////////////////////