<article <?php post_class('excerpt'); ?>>
    <header>
        <div class="feature-image">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
        </div>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
        <p><a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a></p>
    </div>
</article>
