<?php

// =============================================================================
// TEMPLATE NAME: Custom Layout
// =============================================================================

?>

<?php get_header(); ?>

  <?php while (have_posts()) : the_post(); ?>

    <?php $sections = array(
      'section',
    ); ?>
    <?php while ( have_rows('sections') ) { ?>
      <?php the_row(); ?>
      <?php foreach($sections as $section) { ?>
        <?php if( get_row_layout() == $section ) { ?>
          <?php get_template_part('sections/section', str_replace('_', '-', get_row_layout())); ?>
        <?php } ?>
      <?php } ?>
    <?php } ?>
  <?php endwhile; ?>

<?php get_footer(); ?>
