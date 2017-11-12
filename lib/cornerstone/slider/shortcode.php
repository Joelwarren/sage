<?php

/**
 * Shortcode handler
 */

$class = "slider slick-slider " . $class;

?>

<div <?php cs_atts( array( 'id' => $id, 'class' => $class, 'style' => $style ), true ); ?>>
  <?php echo do_shortcode( $content ); ?>
</div>
<script>
<?php /* reference: http://kenwheeler.github.io/slick/#settings */ ?>
jQuery(function() {
  jQuery('.slick-slider').slick();
});
</script>
