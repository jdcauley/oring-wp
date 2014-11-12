<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="wrap folder" role="document">
    <div class="container whitebg">
      <div class="row content">
        <div class="col-sm-12">
           <nav class="inside-invert-tabs">
              <?php
                if (has_nav_menu('secondary_navigation')) :
                  wp_nav_menu(array('theme_location' => 'secondary_navigation', 'menu_class' => 'invert-tabs'));
                endif;
              ?>
            </nav>
        </div>
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
           <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
        <main class="main <?php echo roots_main_class(); ?>" role="main">
          <?php include roots_template_path(); ?>
        </main><!-- /.main -->
      </div><!-- /.row -->
    </div><!-- /.content -->
    <?php get_template_part('templates/footer'); ?>
  </div><!-- /.wrap -->

  

</body>
</html>
