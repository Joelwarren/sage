<?php

/**
 * Shortcode handler
 */

$id    = ( $id    != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
$class = ( $class != '' ) ? 'custom-spacer ' . esc_attr( $class ) : 'custom-spacer';
$style = ( $style != '' ) ? 'style="' . $color . $style . '"' : 'style="' . $color . '"';

?>

<div <?php echo $id; ?> class="<?php echo $class; ?> <?php echo $size; ?>" <?php echo $style; ?>></div>
