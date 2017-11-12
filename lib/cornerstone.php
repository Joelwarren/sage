<?php

namespace Roots\Sage\Cornerstone;

use Roots\Sage\Assets;

// All cornerstone related functionality should exist in this file

/**
 * Theme assets
 */
add_filter( 'cornerstone_enqueue_styles', '__return_false' );
function assets() {
  wp_enqueue_style('sage/css/cornerstone', Assets\asset_path('styles/cornerstone.css'), false, null);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);

// add row so we can use bootstrap grid - reference: includes/views/elements/row.php
add_action('x_row', __NAMESPACE__ . '\\sage_row', 1);
function sage_row() {
  echo '<div class="row">';
}
add_action('x_row', __NAMESPACE__ . '\\sage_row_end', 9999);
function sage_row_end() {
  echo '</div>';
}

/**
 * Remove specific Cornerstone Elements that we don't want to use.
 * Reference includes/utility/api.php
 */
add_action('init', __NAMESPACE__ . '\\add_remove_cse', 100);
function add_remove_cse() {
	cornerstone_theme_integration( array(
		'remove_global_validation_notice' => true,
		'remove_themeco_offers'           => true,
		'remove_purchase_link'            => true,
		'remove_support_box'              => true
	) );

  cornerstone_remove_element('custom-headline');
  cornerstone_remove_element('gap');
  // cornerstone_remove_element('google-map');
  cornerstone_remove_element('image');
  cornerstone_remove_element('pricing-table');
  // cornerstone_remove_element('raw-content');
  cornerstone_remove_element('text');
  cornerstone_remove_element('accordion');
  cornerstone_remove_element('alert');
  cornerstone_remove_element('self-hosted-audio');
  cornerstone_remove_element('self-hosted-video');
  cornerstone_remove_element('embedded-audio');
  cornerstone_remove_element('embedded-video');
  cornerstone_remove_element('author');
  cornerstone_remove_element('block-grid');
  cornerstone_remove_element('blockquote');
  cornerstone_remove_element('button');
  cornerstone_remove_element('code');
  cornerstone_remove_element('columnize');
  cornerstone_remove_element('counter');
  cornerstone_remove_element('feature-headline');
  cornerstone_remove_element('feature-list');
  cornerstone_remove_element('feature-box');
  cornerstone_remove_element('icon');
  cornerstone_remove_element('icon-list');
  cornerstone_remove_element('line');
  cornerstone_remove_element('map-embed');
  cornerstone_remove_element('promo');
  cornerstone_remove_element('recent-posts');
  cornerstone_remove_element('search');
  cornerstone_remove_element('social-sharing');
  cornerstone_remove_element('slider');
  cornerstone_remove_element('tabs');
  cornerstone_remove_element('text-type');
  cornerstone_remove_element('widget-area');
  cornerstone_remove_element('responsive-text');
  cornerstone_remove_element('callout');
  cornerstone_remove_element('card');
  cornerstone_remove_element('clear');
  cornerstone_remove_element('creative-cta');
  cornerstone_remove_element('map-embed');
  cornerstone_remove_element('prompt');
  cornerstone_remove_element('protect');
  cornerstone_remove_element('skill-bar');
  cornerstone_remove_element('toc');
}

add_action( 'cornerstone_register_elements', __NAMESPACE__ . '\\cwt_register_elements' );
add_filter( 'cornerstone_icon_map', __NAMESPACE__ . '\\cwt_icon_map' );

function cwt_register_elements() {
	cornerstone_register_element( 'CWT_Button',       'cwt-button',       get_template_directory() . '/lib/cornerstone/button' );
	cornerstone_register_element( 'CWT_Heading',      'cwt-heading',      get_template_directory() . '/lib/cornerstone/heading' );
	cornerstone_register_element( 'CWT_Text',         'cwt-text',         get_template_directory() . '/lib/cornerstone/text' );
	cornerstone_register_element( 'CWT_Image',        'cwt-image',        get_template_directory() . '/lib/cornerstone/image' );
	cornerstone_register_element( 'CWT_Gap',          'cwt-gap',          get_template_directory() . '/lib/cornerstone/gap' );
	cornerstone_register_element( 'CWT_Card',         'cwt-card',         get_template_directory() . '/lib/cornerstone/card' );
	cornerstone_register_element( 'CWT_Collapse',     'cwt-collapse',     get_template_directory() . '/lib/cornerstone/collapse' );
	cornerstone_register_element( 'CWT_Alert',        'cwt-alert',        get_template_directory() . '/lib/cornerstone/alert' );
  cornerstone_register_element( 'CWT_Slider',       'cwt-slider',       get_template_directory() . '/lib/cornerstone/slider' );
	cornerstone_register_element( 'CWT_Slide',        'cwt-slide',        get_template_directory() . '/lib/cornerstone/slide' );
}

function cwt_icon_map( $icon_map ) {
	$icon_map['cwt'] =  get_template_directory() . '/lib/cornerstone/assets/icons.svg';
	return $icon_map;
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
  		array (
  			array (
  				'param' => 'post_type',
  				'operator' => '==',
  				'value' => 'landing_page',
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
