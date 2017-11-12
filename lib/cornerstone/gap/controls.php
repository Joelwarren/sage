<?php

/**
 * Element Controls
 */

return array(

  'size' => array(
    'type'    => 'select',
    'ui' => array(
      'title' => __( 'Size', 'sage' ),
    ),
    'context' => 'content',
    'options' => array(
      'choices' => array(
        array( 'value' => 'spacer-xs',   'label' => __( 'Extra Small', 'sage' ) ),
        array( 'value' => 'spacer-sm',   'label' => __( 'Small', 'sage' ) ),
        array( 'value' => 'spacer-md',   'label' => __( 'Medium', 'sage' ) ),
        array( 'value' => 'spacer-lg',   'label' => __( 'Large', 'sage' ) ),
        array( 'value' => 'spacer-xl',   'label' => __( 'Extra Large', 'sage' ) ),
      )
    )
  ),
);
