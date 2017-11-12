<header class="banner">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php the_custom_logo(); ?>
      </div>

      <div class="collapse navbar-collapse" id="navbar">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu([
            'theme_location'  => 'primary_navigation',
            'menu_class'      => 'navbar-nav ml-auto',
            'depth'           => 2,
            'container'       => null,
            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
            'walker'          => new wp_bootstrap_navwalker()
          ]);
        endif;
        ?>
      </div>
    </div>
  </nav>
</header>
