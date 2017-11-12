<?php

namespace Roots\Sage\GravityForms;

use Roots\Sage\Assets;

// All Gravity Forms related functionality should exist in this file
/**
 * Theme assets
 */
function assets() {
  wp_enqueue_style('sage/css/gravity-forms', Assets\asset_path('styles/gravity-forms.css'), false, null);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);

// Add bootstrap classes to form elements
add_filter( 'gform_field_container', __NAMESPACE__ . '\\add_bootstrap_container_class', 10, 6 );
function add_bootstrap_container_class( $field_container, $field, $form, $css_class, $style, $field_content ) {
  $id = $field->id;
  $field_id = is_admin() || empty( $form ) ? "field_{$id}" : 'field_' . $form['id'] . "_$id";
  return '<li id="' . $field_id . '" class="' . $css_class . ' form-group">{FIELD_CONTENT}</li>';
}
