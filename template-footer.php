<?php

// =============================================================================
// TEMPLATE NAME: Footer, No Header
// =============================================================================

?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
