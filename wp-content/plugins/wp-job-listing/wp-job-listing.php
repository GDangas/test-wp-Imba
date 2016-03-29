<?php
/**
 * Plugin Name: WP Job listing
 * Plugin Description: ADD job listing section to your wp site
 * Plugin URI: http://solidio.se
 * Author: David Kangas
 * Version: 1.0
 */

 //Exit if accessed directly
 if ( !defined('ABSPATH') ) {
 	exit;
 }

 function dkwp_register_job_post_type() {

   $singular = 'Job Listing';
   $plural = 'Job Listings';

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

   $args = (array(
 					'labels'             => $labels,
 	        'public'             => true,
 	        'publicly_queryable' => true,
 	        'show_ui'            => true,
 	        'show_in_menu'       => true,
 	        'menu_icon'          => 'dashicons-businessman',
          'can-export'         => true,
          'delete-with-user'   => false,
 	        'query_var'          => true,
 	        'rewrite'            => array( 'slug' => $plural ),
 	        'capability_type'    => 'page',
 	        'has_archive'        => true,
 	        'hierarchical'       => false,
 	        'menu_position'      => 10,
          'rewrite'            => array(
                                  'slug' => 'jobs',
                                  'with_front' => true,
                                  'pages' => true,
                                  'feeds' => false
                                ),
 	        'supports'           => array(
                                  'title',
                                  'editor',
                                  'author',
                                  'custom-fields'
                                )
 	      ));

   register_post_type('job', $args);
 }
add_action('init', 'dkwp_register_job_post_type');
