<header class="banner">
  <div class="container">
    <nav class="site-header navbar nav-primary navbar-inverse">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-primary" aria-expanded="false">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="sr-only">Toggle navigation</span>
        </button>
        <?php the_custom_logo(); ?>
      </div>

      <div class="collapse navbar-collapse" id="navbar-primary">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu([
            'theme_location'  => 'primary_navigation',
            'menu_class'      => 'nav navbar-nav navbar-right',
            'depth'           => 2,
            'container'       => null,
            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
            'walker'          => new wp_bootstrap_navwalker()
          ]);
        endif;
        ?>
      </div>
    </nav>
  </div>
</header>
