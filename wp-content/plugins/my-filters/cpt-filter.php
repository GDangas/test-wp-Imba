<?php
/**
 * Plugin Name: CustomPostType with Filters
 * Plugin Description: Demonstating Filters
 * Plugin URI: http://solidio.se
 * Author: David Kangas
 * Version: 1.0
 */

//Exit if accessed directly
if ( !defined('ABSPATH') ) {
	exit;
}

// Define our Custom Post Type
function dkwp_register_post_type() {

	//Add a filter to our $singular variable.
	$singular = apply_filters( 'dkwp_label_single', 'Book' );

	//Add a filter to our $plural variable.
	$plural = apply_filters( 'dkwp_label_plural', 'Books' );

	$labels = array(
		'name' 			=> $plural,
		'singular_name' 	=> $singular,
		'add_new' 		=> 'Add New',
		'add_new_item'  	=> 'Add New ' . $singular,
		'edit'		        => 'Edit',
		'edit_item'	        => 'Edit ' . $singular,
		'new_item'	        => 'New ' . $singular,
		'view' 			=> 'View ' . $singular,
		'view_item' 		=> 'View ' . $singular,
		'search_term'   	=> 'Search ' . $plural,
		'parent' 		=> 'Parent ' . $singular,
		'not_found' 		=> 'No ' . $plural .' found',
		'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
	);

	//Add a filter to our cpt's $args variable.
	$args = apply_filters( 'dkwp_post_type_args',array(
					'labels'             => $labels,
	        'public'             => true,
	        'publicly_queryable' => true,
	        'show_ui'            => true,
	        'show_in_menu'       => true,
	        'menu_icon'          => 'dashicons-book-alt',
	        'query_var'          => true,
	        'rewrite'            => array( 'slug' => $plural ),
	        'capability_type'    => 'post',
	        'has_archive'        => true,
	        'hierarchical'       => false,
	        'menu_position'      => 10,
	        'supports'           => array( 'title', 'editor', 'author', 'custom-fields' )
	) );
	register_post_type( $singular, $args );
}
add_action( 'init', 'dkwp_register_post_type' );
