<?php

/**
 * Element Controls
 */

return array(

  'text' => array(
    'type'    => 'text',
    'ui' => array(
      'title' => __( 'Alert Text', 'sage' ),
    ),
    'context' => 'content',
  ),

  'alert_style' => array(
    'type' => 'select',
    'ui' => array(
      'title' => __( 'Alert Style', 'sage' ),
    ),
    'options' => array(
      'choices' => array(
        array( 'value' => 'alert-primary',   'label' => __( 'Primary', 'sage' ) ),
        array( 'value' => 'alert-secondary', 'label' => __( 'Secondary', 'sage' ) ),
        array( 'value' => 'alert-success',   'label' => __( 'Success', 'sage' ) ),
        array( 'value' => 'alert-danger',    'label' => __( 'Danger', 'sage' ) ),
        array( 'value' => 'alert-warning',   'label' => __( 'Warning', 'sage' ) ),
        array( 'value' => 'alert-info',      'label' => __( 'Info', 'sage' ) ),
        array( 'value' => 'alert-light',     'label' => __( 'Light', 'sage' ) ),
        array( 'value' => 'alert-dark',      'label' => __( 'Dark', 'sage' ) ),
      )
    )
  ),

  'dismissable' => array(
    'ui' => array(
      'title' => __( 'Dissmissable', 'sage' ),
    ),
    'type'    => 'toggle',
    'context' => 'content',
  ),
);
