<?php

/**
 * Hooks the style.css to site
 * @author David Kangas <david.kangas@solidio.se>
 * @return void
 */
function learningWP() {

  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learningWP');




/**
 * Get the correct submenu no matter if youre in the parent or the childpage
 * @return string parent ID
 */
function get_top_ancestor_id(){

  global $post;

  if ($post->post_parent) {
    $ancectors = array_reverse(get_post_ancestors($post->ID));
    return $ancectors[0];
  }

  return $post->ID;
}

/**
 * Does the page have any children
 * @author David Kangas <david.kangas@solidio.se>
 * @return boolean [description]
 */
function has_children(){
  global $post;

  $pages = get_pages('child_of=' . $post->ID);
  return count($pages);
}

/**
 * Theme setup
 * @author David Kangas <david.kangas@solidio.se>
 */
function myThemeSetup(){
    //navigation menus
    register_nav_menus(array(
      'primary' => __('Primary Menu'),
      'footer' => __('Footer Menu'),
    ));

    //Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 120, true);
    add_image_size('banner-image', 920, 210, array('left', 'bottom'));

    //Add "Post Formats" support
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'myThemeSetup');

/////////////////////////////////////////////////////////////////////////////////////////////////////////
//PLUGIN STUFF BELOW


function dkwp_alter_books_icon( $args ){
  $args['menu_icon'] = 'dashicons-book-alt';
  return $args;
}
add_filter('dkwp_post_type_args', 'dkwp_alter_books_icon');

function dkwp_change_label( $plural ){
  $plural = 'Boookz!';
  return $plural;
}
add_filter( 'dkwp_label_plural', 'dkwp_change_label');
