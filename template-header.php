<?php

// =============================================================================
// TEMPLATE NAME: Header, No Footer
// =============================================================================

?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
