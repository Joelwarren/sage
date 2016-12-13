<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      if( !(is_page_template('template-blank-3.php') || is_page_template('template-blank-4.php') || is_page_template('template-blank-7.php') || is_page_template('template-blank-8.php')) ) {
        do_action('get_header');
        get_template_part('templates/header');
      }
    ?>
    <?php if( !(is_page_template('template-blank-5.php') || is_page_template('template-blank-6.php') || is_page_template('template-blank-7.php') || is_page_template('template-blank-8.php')) ) { ?>
      <div class="wrap container" role="document">
        <div class="content row">
    <?php } ?>
          <main class="main">
            <?php include Wrapper\template_path(); ?>
          </main><!-- /.main -->
          <?php if (Setup\display_sidebar()) : ?>
            <aside class="sidebar">
              <?php include Wrapper\sidebar_path(); ?>
            </aside><!-- /.sidebar -->
          <?php endif; ?>
    <?php if( !(is_page_template('template-blank-5.php') || is_page_template('template-blank-6.php') || is_page_template('template-blank-7.php') || is_page_template('template-blank-8.php')) ) { ?>
        </div><!-- /.content -->
      </div><!-- /.wrap -->
    <?php } ?>
    <?php
      if( !(is_page_template('template-blank-2.php') || is_page_template('template-blank-3.php') || is_page_template('template-blank-6.php') || is_page_template('template-blank-7.php')) ) {
        do_action('get_footer');
        get_template_part('templates/footer');
      }
      wp_footer();
    ?>
  </body>
</html>
