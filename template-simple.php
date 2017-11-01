<?php

// =============================================================================
// TEMPLATE NAME: Simple Header, Simple Footer
// =============================================================================

?>

<?php get_header('simple'); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<?php get_footer('simple'); ?>
