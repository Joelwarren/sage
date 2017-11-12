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

  'content' => array(
    'type'    => 'editor',
    'ui' => array(
      'title' => __( 'Text', 'sage' ),
    ),
    'context' => 'content',
  ),

  'parent' => array(
    'type'    => 'text',
    'ui' => array(
      'title' => __( 'Parent', 'sage' ),
    ),
    'context' => 'content',
  ),

);
