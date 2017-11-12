<?php

/**
 * Shortcode handler
 */

if( $btn_type == 'btn-outline' ) {
  $btn_style = 'btn-outline-' . split('-', $btn_style)[1];
}
$class .= ' btn ' . $btn_style;
$class .= ' ' . $btn_type;
$class .= ' ' . $btn_size;
$class .= ' ' . $btn_additional;

?>

<a href="<?php echo $btn_link; ?>" <?php cs_atts( array( 'id' => $id, 'class' => $class, 'style' => $style ), true ); ?>>
  <?php echo $btn_text; ?>
</a>
