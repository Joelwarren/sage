<?php

/**
 * Element Controls
 */

return array(

  'btn_text' => array(
    'type'    => 'text',
    'ui' => array(
      'title' => __( 'Button Text', 'sage' ),
    ),
    'context' => 'content',
  ),
  'btn_link' => array(
    'type'    => 'text',
    'ui' => array(
      'title' => __( 'Button URL', 'sage' ),
    ),
    'context' => 'content',
  ),
  'btn_type' => array(
    'type' => 'select',
    'ui' => array(
      'title' => __( 'Button Type', 'sage' ),
    ),
    'options' => array(
      'choices' => array(
        array( 'value' => '',                'label' => __( 'Solid', 'sage' ) ),
        array( 'value' => 'btn-transparent', 'label' => __( 'Transparent', 'sage' ) ),
        array( 'value' => 'btn-link',        'label' => __( 'Link', 'sage' ) ),
      )
    )
  ),
  'btn_style' => array(
    'type' => 'select',
    'ui' => array(
      'title' => __( 'Button Style', 'sage' ),
    ),
    'options' => array(
      'choices' => array(
        array( 'value' => 'btn-default', 'label' => __( 'Default', 'sage' ) ),
        array( 'value' => 'btn-primary', 'label' => __( 'Primary', 'sage' ) ),
        array( 'value' => 'btn-success', 'label' => __( 'Success', 'sage' ) ),
        array( 'value' => 'btn-info',    'label' => __( 'Info', 'sage' ) ),
        array( 'value' => 'btn-warning', 'label' => __( 'Warning', 'sage' ) ),
        array( 'value' => 'btn-danger',  'label' => __( 'Danger', 'sage' ) ),
        array( 'value' => 'btn-white',   'label' => __( 'White', 'sage' ) ),
      )
    )
  ),
  'btn_size' => array(
    'type' => 'select',
    'ui' => array(
      'title' => __( 'Button Size', 'sage' ),
    ),
    'options' => array(
      'choices' => array(
        array( 'value' => '', 'label' => __( 'Regular', 'sage' ) ),
        array( 'value' => 'btn-lg', 'label' => __( 'Large', 'sage' ) ),
        array( 'value' => 'btn-sm', 'label' => __( 'Small', 'sage' ) ),
        array( 'value' => 'btn-xs', 'label' => __( 'Extra Small', 'sage' ) ),
      )
    )
  ),
  'btn_additional' => array(
    'type' => 'multi-choose',
    'ui' => array(
      'title'   => __( 'Addition Options', 'my-extension' )
    ),
    'options' => array(
      'columns' => '2',
      'choices' => array(
        array( 'value' => 'btn-disabled', 'label' => 'Disabled' ),
        array( 'value' => 'btn-block',    'label' => 'Block' ),
      )
    ),
  ),
);
