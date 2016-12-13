<?php

// =============================================================================
// TEMPLATE NAME: Layout - Fullwidth
// -----------------------------------------------------------------------------
// Handles output of fullwidth pages.
//
// Content is output based on which Stack has been selected in the Customizer.
// To view and/or edit the markup of your Stack's index, first go to "views"
// inside the "framework" subdirectory. Once inside, find your Stack's folder
// and look for a file called "template-layout-full-width.php," where you'll be
// able to find the appropriate output.
// =============================================================================

?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
