<?php

/**
 * Element Controls
 */

return array(

  'img_class' => array(
    'ui' => array(
      'title' => __( 'Style', 'sage' ),
    ),
    'type'    => 'select',
    'context' => 'content',
    'options' => array(
      'choices' => array(
        array( 'value' => '',              'label' => __( 'None', 'sage' ) ),
        array( 'value' => 'img-thumbnail', 'label' => __( 'Thumbnail', 'sage' ) ),
        array( 'value' => 'rounded',       'label' => __( 'Rounded', 'sage' ) ),
        array( 'value' => 'circle',        'label' => __( 'Circle', 'sage' ) ),
      ),
    ),
  ),

  'image' => array(
    'ui' => array(
      'title' => __( 'Image', 'sage' ),
    ),
    'type'    => 'image',
    'context' => 'content',
  ),

  'alt' => array(
    'ui' => array(
      'title' => __( 'Alt Tag', 'sage' ),
    ),
    'type'    => 'text',
    'context' => 'content',
  ),

  'link' => array(
    'ui' => array(
      'title' => __( 'Link URL', 'sage' ),
      'tooltip' => __( 'Leave blank to disable link', 'sage' ),
    ),
    'type'    => 'text',
    'context' => 'content',
  ),

  'target' => array(
    'ui' => array(
      'title' => __( 'Open link in new tab', 'sage' ),
    ),
    'type'    => 'toggle',
    'context' => 'content',
  ),

);
