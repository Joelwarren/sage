<?php get_header(); ?>

<div class="container">

  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  <?php endwhile; ?>

</div>

<?php get_footer(); ?>
