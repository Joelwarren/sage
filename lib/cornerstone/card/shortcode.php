<?php

/**
 * Shortcode handler
 */

$id    = ( $id    != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
$class = ( $class != '' ) ? 'card ' . esc_attr( $class ) : 'card';
$style = ( $style != '' ) ? 'style="' . $color . $style . '"' : 'style="' . $color . '"';

?>

<div <?php echo $id; ?> class="<?php echo $class; ?>" <?php echo $style; ?>>
  <img class="card-img-top" src="<?php echo $image; ?>" alt="<?php echo $alt; ?>">
  <div class="card-body">
    <<?php echo $level; ?>><span><?php echo $heading; ?></span></<?php echo $level; ?>>
    <?php echo $content; ?>
  </div>
</div>
