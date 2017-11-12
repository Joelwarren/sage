<?php

/**
 * Shortcode handler
 */

$id    = ( $id    != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
$class = ( $class != '' ) ? 'card ' . esc_attr( $class ) : 'card';
$style = ( $style != '' ) ? 'style="' . $color . $style . '"' : 'style="' . $color . '"';

?>

<div <?php echo $id; ?> class="<?php echo $class; ?>" <?php echo $style; ?>>
  <div class="card-header" role="tab" id="heading-<?php echo sanitize_title($heading); ?>">
    <h5 class="mb-0">
      <a data-toggle="collapse" href="#collapse-<?php echo sanitize_title($heading); ?>" aria-expanded="true" aria-controls="collapse-<?php echo sanitize_title($heading); ?>">
        <?php echo $heading; ?>
      </a>
    </h5>
  </div>
  <div id="collapse-<?php echo sanitize_title($heading); ?>" class="collapse" role="tabpanel" aria-labelledby="heading-<?php echo sanitize_title($heading); ?>" <?php if( $parent != '' ) { echo "data-parent=\"{$parent}\""; } ?>>
    <div class="card-body">
      <?php echo $content; ?>
    </div>
  </div>
</div>
