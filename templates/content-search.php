<article <?php post_class('search'); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php echo substr(strip_tags(strip_shortcodes(get_the_excerpt())), 0, 255); ?>
  </div>
</article>
