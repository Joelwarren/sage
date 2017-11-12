<?php

/**
 * Element Definition: "My Sortable Element Item"
 */

class CWT_Slide {

	public function ui() {
		return array(
      'title' => __( 'Slide', 'sage' )
    );
	}

	public function flags() {
		return array(
      'child' => true
    );
	}

	public function update_build_shortcode_atts( $atts, $parent ) {

		if ( ! is_null( $parent ) ) {
			$atts['linked'] = $parent['linked'];
		}

		return $atts;

	}


}
