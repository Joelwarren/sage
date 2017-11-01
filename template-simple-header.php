<?php

// =============================================================================
// TEMPLATE NAME: Simple Header, No Footer
// =============================================================================

?>

<?php get_header('simple'); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
