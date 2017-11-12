<?php

/**
 * Shortcode handler
 */

$id    = ( $id    != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
$class = ( $class != '' ) ? 'custom-text ' . esc_attr( $class ) : 'custom-text';
$style = ( $style != '' ) ? 'style="' . $color . $style . '"' : 'style="' . $color . '"';

?>

<div <?php echo $id; ?> class="<?php echo $class; ?>" <?php echo $style; ?>><span><?php echo do_shortcode( wpautop( $content ) ); ?></span></div>
