<?php

// All cornerstone related functionality should exist in this file
use Roots\Sage\Assets;

/**
 * Remove specific Cornerstone Elements that we don't want to use.
 */
add_action('init', 'add_remove_cornerstone_elements');
function add_remove_cornerstone_elements() {
  CS()->component( 'Element_Orchestrator' )->remove('responsive-text');
  // CS()->component( 'Element_Orchestrator' )->remove('button');
  CS()->component( 'Element_Orchestrator' )->remove('callout');
  CS()->component( 'Element_Orchestrator' )->remove('card');
  CS()->component( 'Element_Orchestrator' )->remove('clear');
  CS()->component( 'Element_Orchestrator' )->remove('creative-cta');
  CS()->component( 'Element_Orchestrator' )->remove('map-embed');
  CS()->component( 'Element_Orchestrator' )->remove('prompt');
  CS()->component( 'Element_Orchestrator' )->remove('protect');
  CS()->component( 'Element_Orchestrator' )->remove('skill-bar');
  CS()->component( 'Element_Orchestrator' )->remove('toc');
  CS()->component( 'Element_Orchestrator' )->remove('block-grid');
  CS()->component( 'Element_Orchestrator' )->remove('columnize');
  CS()->component( 'Element_Orchestrator' )->remove('author');
  CS()->component( 'Element_Orchestrator' )->remove('code');
  CS()->component( 'Element_Orchestrator' )->remove('feature-headline');
  CS()->component( 'Element_Orchestrator' )->remove('icon');
  CS()->component( 'Element_Orchestrator' )->remove('promo');
  CS()->component( 'Element_Orchestrator' )->remove('recent-posts');
  CS()->component( 'Element_Orchestrator' )->remove('search');
  CS()->component( 'Element_Orchestrator' )->remove('slider');
  CS()->component( 'Element_Orchestrator' )->remove('social-sharing');
  CS()->component( 'Element_Orchestrator' )->remove('text-type');
  CS()->component( 'Element_Orchestrator' )->remove('widget-area');
  CS()->component( 'Element_Orchestrator' )->remove('feature-list');

  remove_shortcode(  'cs_row' );
  add_shortcode( 'cs_row', 'cs_shortcode_container' );
  function cs_shortcode_container( $atts, $content = null ) {
    extract( shortcode_atts( array(
      'id'                 => '',
      'class'              => '',
      'style'              => '',
      'inner_container'    => '',
      'marginless_columns' => '',
      'bg_color'           => ''
    ), $atts, 'x_row' ) );

    $class              = ( $class              != ''     ) ? 'x-container ' . esc_attr( $class ) : 'x-container';
    $inner_container    = ( $inner_container    == 'true' ) ? ' max width' : '';
    $marginless_columns = ( $marginless_columns == 'true' ) ? ' marginless-columns' : '';
    $bg_color           = ( $bg_color           != ''     ) ? ' background-color:' . $bg_color . ';' : '';

    $atts = cs_atts( array(
      'id'    => $id,
      'class' => trim( $class . $inner_container . $marginless_columns ),
      'style' => $bg_color
    ) );

    $output = "<div {$atts} style=\"{$style}\"><div class=\"x-row\">" . do_shortcode( $content ) . '</div></div>';

    return $output;
  }

  remove_shortcode(  'cs_column' );
  add_shortcode( 'cs_column', 'cs_shortcode_column' );
  function cs_shortcode_column( $atts, $content = null ) {
    extract( shortcode_atts( array(
      'id'                    => '',
      'class'                 => '',
      'style'                 => '',
      'type'                  => '',
      'last'                  => '',
      'fade'                  => '',
      'fade_animation'        => '',
      'fade_animation_offset' => '',
      'fade_duration'         => '',
      'bg_color'              => ''
    ), $atts, 'x_column' ) );

    $id                    = ( $id                    != ''     ) ? 'id="' . esc_attr( $id ) . '"' : '';
    $class                 = ( $class                 != ''     ) ? 'x-column x-sm ' . esc_attr( $class ) : 'x-column x-sm';
    $style                 = ( $style                 != ''     ) ? $style : '';
    $type                  = ( $type                  != ''     ) ? $type : ' x-1-2';
    $last                  = ( $last                  == 'true' ) ? ' last' : '';
    $fade_animation        = ( $fade_animation        != ''     ) ? $fade_animation : 'in';
    $fade_animation_offset = ( $fade_animation_offset != ''     ) ? $fade_animation_offset : '45px';
    $fade_duration         = ( $fade_duration         != ''     ) ? $fade_duration : '750';
    $bg_color              = ( $bg_color              != ''     ) ? ' background-color:' . $bg_color . ';' : '';

    switch ( $type ) {
      case '1/1'   :
      case 'whole' :
        $type = ' x-1-1';
        break;
      case '1/2'      :
      case 'one-half' :
        $type = ' x-1-2';
        break;
      case '1/3'       :
      case 'one-third' :
        $type = ' x-1-3';
        break;
      case '2/3'        :
      case 'two-thirds' :
        $type = ' x-2-3';
        break;
      case '1/4'        :
      case 'one-fourth' :
        $type = ' x-1-4';
        break;
      case '3/4'           :
      case 'three-fourths' :
        $type = ' x-3-4';
        break;
      case '1/5'       :
      case 'one-fifth' :
        $type = ' x-1-5';
        break;
      case '2/5'        :
      case 'two-fifths' :
        $type = ' x-2-5';
        break;
      case '3/5'          :
      case 'three-fifths' :
        $type = ' x-3-5';
        break;
      case '4/5'         :
      case 'four-fifths' :
        $type = ' x-4-5';
        break;
      case '1/6'       :
      case 'one-sixth' :
        $type = ' x-1-6';
        break;
      case '5/6'       :
      case 'five-sixths' :
        $type = ' x-5-6';
        break;
      default:
        $type = ' x-1-1';
        break;
    }

    if ( $fade == 'true' ) {
      $fade = ' data-fade="true"';
      $data = cs_generate_data_attributes( 'column', array( 'fade' => true ) );
      switch ( $fade_animation ) {
        case 'in' :
          $fade_animation_offset = '';
          break;
        case 'in-from-top' :
          $fade_animation_offset = ' transform: translate(0, -' . $fade_animation_offset . '); ';
          break;
        case 'in-from-left' :
          $fade_animation_offset = ' transform: translate(-' . $fade_animation_offset . ', 0); ';
          break;
        case 'in-from-right' :
          $fade_animation_offset = ' transform: translate(' . $fade_animation_offset . ', 0); ';
          break;
        case 'in-from-bottom' :
          $fade_animation_offset = ' transform: translate(0, ' . $fade_animation_offset . '); ';
          break;
      }
      $fade_animation_style = 'opacity: 0;' . $fade_animation_offset . 'transition-duration: ' . $fade_duration . 'ms;';
    } else {
      $data                 = '';
      $fade                 = '';
      $fade_animation_style = '';
    }

    $output = "<div {$id} class=\"{$class}{$type}{$last}\" {$data}{$fade}><div style=\"{$style}{$fade_animation_style}{$bg_color}\">" . do_shortcode( $content ) . "</div></div>";

    return $output;
  }
}

add_filter('cornerstone_enqueue_styles', '__return_false');
function cornerstone_assets() {
  wp_enqueue_style('sage/cornerstone', Assets\asset_path('styles/cornerstone.css'), false, null);
}
add_action('wp_enqueue_scripts', 'cornerstone_assets', 50);

add_action( 'cornerstone_register_elements', 'add_cornerstone_elements' );
function add_cornerstone_elements() {
  cornerstone_register_element( 'CSE_Button', 'cse_button', get_template_directory() . '/lib/cornerstone/button' );
}


/**
 * Add an ACF field for the storing of Cornerstone post meta so that
 * this is handled by ACF revisions allowing the ability to move between
 * page revisions without breaking the Cornerstone editor
 */
if( function_exists('acf_add_local_field_group') ) {

  acf_add_local_field_group(array (
  	'key' => 'group_5965c7efb1507',
  	'title' => 'Cornerstone Data',
  	'fields' => array (
  		array (
  			'key' => 'field_5965c7f318e8c',
  			'label' => '_cornerstone_data',
  			'name' => '_cornerstone_data',
  			'type' => 'text',
  			'instructions' => '',
  			'required' => 0,
        'readonly' => 1,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'maxlength' => '',
  		),
  		array (
  			'key' => 'field_5966fb82d4f62',
  			'label' => '_cornerstone_settings',
  			'name' => '_cornerstone_settings',
  			'type' => 'text',
  			'instructions' => '',
  			'required' => 0,
        'readonly' => 1,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'maxlength' => '',
  		),
  		array (
  			'key' => 'field_5966fba0d4f63',
  			'label' => '_cornerstone_override',
  			'name' => '_cornerstone_override',
  			'type' => 'text',
  			'instructions' => '',
  			'required' => 0,
        'readonly' => 1,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'maxlength' => '',
  		),
  	),
  	'location' => array (
  		array (
  			array (
  				'param' => 'post_type',
  				'operator' => '==',
  				'value' => 'page',
  			),
  		),
  	),
  	'menu_order' => 0,
  	'position' => 'normal',
  	'style' => 'default',
  	'label_placement' => 'top',
  	'instruction_placement' => 'label',
  	'hide_on_screen' => '',
  	'active' => 1,
  	'description' => '',
  ));

}
