<?php

/**
 * Element Controls
 */

return array(

	'slides' => array(
		'type'    => 'sortable',
		'options' => array(
			'element' => 'cwt-slide',
			'newTitle' => __( 'Slide', 'sage' ),
			'floor'   => 1,
      'capacity' => 8,
      'title_field' => 'heading'
    ),
    'context' => 'content'
	),

);
