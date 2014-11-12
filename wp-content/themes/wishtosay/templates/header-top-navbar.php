<header role="banner">
  <nav class="container wish-nav">
    <div class="brand-tab">
      <a class="home-link" href="<?php echo home_url('/') ?>">I Wish to Say. . .</a>
      <a class="oring-link" href="http://sheryloring.org">by Sheryl Oring</a>
    </div>
    <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-tabs oring-tabs'));
        endif;
      ?>
</nav>
</header>