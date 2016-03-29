<?php
/**
 * Plugin Name: Basic Plugin
 * Plugin Description: A plugin for displaying job oppurtunities.
 * Plugin URI: http://solidio.se
 * Author: David Kangas
 * Version: 1.0
 */

/*SYNTAX

function do_something_cool(){

}
add_action('a_hook', 'do_something_cool');
add_filter('a_hook', 'do_something_cool');
*/

/**
 * Removes the News Widgets i Panelen
 * @author David Kangas <david.kangas@solidio.se>
 * @return [type] [description]
 */
function dwwp_remove_dashboard_widget(){

  remove_meta_box('dashboard_primary', 'dashboard', 'side');
}

add_action('wp_dashboard_setup', 'dwwp_remove_dashboard_widget');

function dkwp__add_google_link(){
  global $wp_admin_bar;
  $wp_admin_bar->add_menu( array(
    'id' => 'google_analytics',
    'title' => 'Google Analytics',
    'href' => 'http://google.com/analytics'
  ) );
}
add_action('wp_before_admin_bar_render', 'dkwp__add_google_link');
