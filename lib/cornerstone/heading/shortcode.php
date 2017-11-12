<?php

/**
 * Shortcode handler
 */

$id    = ( $id    != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
$class = ( $class != '' ) ? 'custom-heading ' . esc_attr( $class ) : 'custom-heading';
$color = ( $color != '' ) ? 'color: ' . $color . '; ' : '';
$style = ( $style != '' ) ? 'style="' . $color . $style . '"' : 'style="' . $color . '"';

?>

<<?php echo $level; ?> <?php echo $id; ?> class="<?php echo $class; ?>" <?php echo $style; ?>><span><?php echo do_shortcode( $heading ); ?></span></<?php echo $level; ?>>
