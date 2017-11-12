<?php

/**
 * Element Controls
 */

return array(

	'heading' => array(
    'ui' => array(
      'title' => __( 'Heading', 'sage' ),
    ),
		'type'    => 'text',
		'context' => 'content',
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

);
