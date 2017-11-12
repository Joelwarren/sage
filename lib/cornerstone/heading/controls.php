<?php

/**
 * Element Controls
 */

return array(

  'heading' => array(
    'type'    => 'text',
    'ui' => array(
      'title' => __( 'Heading', 'sage' ),
    ),
    'context' => 'content',
  ),
  'level' => array(
    'type'    => 'select',
    'ui' => array(
      'title' => __( 'Button URL', 'sage' ),
    ),
    'options' => array(
      'choices' => array(
        array( 'value' => 'h1',   'label' => __( 'h1', 'sage' ) ),
        array( 'value' => 'h2',   'label' => __( 'h2', 'sage' ) ),
        array( 'value' => 'h3',   'label' => __( 'h3', 'sage' ) ),
        array( 'value' => 'h4',   'label' => __( 'h4', 'sage' ) ),
        array( 'value' => 'h5',   'label' => __( 'h5', 'sage' ) ),
        array( 'value' => 'h6',   'label' => __( 'h6', 'sage' ) ),
      )
    )
  ),
  'color' => array(
    'type' => 'color',
    'ui' => array(
      'title' => __( 'Text Color', 'sage' ),
    ),
  ),
  'common' => array( 'text_align' ),
);
