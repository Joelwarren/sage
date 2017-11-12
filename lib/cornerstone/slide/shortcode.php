<?php

/**
 * Shortcode handler
 */

$class  = 'slide ' . $class;
$alt    = ( $alt != '' ) ? 'alt="' . $alt . '"' : '';
?>

<div <?php cs_atts( array( 'id' => $id, 'class' => $class, 'style' => $style ), true ); ?>>
  <?php echo "<img src=\"{$image}\" {$alt}>"; ?>
</div>
