<?php

if( function_exists('acf_add_local_field_group') ):

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

endif;