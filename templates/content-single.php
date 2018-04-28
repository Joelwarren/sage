<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php get_template_part('templates/entry-meta'); ?>
        </header>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        <footer>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>
<<<<<<< HEAD
        <?php comments_template( '', true); ?>
=======
        <?php comments_template('/templates/comments.php'); ?>
>>>>>>> 0f500ccbf3c1af6623e0ebf60508c419b54619a1
    </article>
<?php endwhile; ?>
