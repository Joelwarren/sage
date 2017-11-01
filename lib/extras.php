<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Get First Post Date Function
 */
function first_post_date( $format = "Y-m-d" ) {
  // Setup get_posts arguments
  $args = array(
    'numberposts' => 1,
    'post_status' => 'publish',
    'order' => 'ASC'
  );

  // Get all posts in order of first to last
  $get_all = get_posts( $args );

  if( !empty($get_all) ) {
    // Extract first post from array
    $first_post = $get_all[0];

    // Assign first post date to var
    $first_post_date = $first_post->post_date;

    // return date in required format
    $output = date( $format, strtotime($first_post_date) );

    return $output;
  } else {
    return date('Y');
  }
}

/**
 * Create copyright label from publish dates on site
 */
function copyright_year() {

  $first_year = first_post_date('Y');
  $this_year = date('Y');

  if( $first_year != $this_year ) {
    return 'Copyright &copy; ' . $first_year . ' - ' . $this_year . ' ' . get_bloginfo('name');
  } else {
    return 'Copyright &copy; ' . $this_year . ' ' . get_bloginfo('name');
  }

}
