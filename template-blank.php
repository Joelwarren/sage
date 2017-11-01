<?php

// =============================================================================
// TEMPLATE NAME: No Header, No Footer
// =============================================================================

?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
