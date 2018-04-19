<?php

// =============================================================================
// TEMPLATE NAME: No Header, No Footer
// =============================================================================

?>

<?php get_header(); ?>

    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', 'page'); ?>
    <?php endwhile; ?>

<?php get_footer(); ?>
