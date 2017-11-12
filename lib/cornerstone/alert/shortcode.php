<?php

/**
 * Shortcode handler
 */

$id    = ( $id    != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
$class = ( $class != '' ) ? 'alert ' . esc_attr( $class ) : 'alert';
$style = ( $style != '' ) ? 'style="' . $color . $style . '"' : 'style="' . $color . '"';

?>

<div <?php echo $id; ?> class="<?php echo $class; ?> <?php echo $alert_style; ?>" <?php echo $style; ?>>
  <span><?php echo $text; ?></span>
  <?php if( $dismissable == true ) { ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  <?php } ?>
</div>
