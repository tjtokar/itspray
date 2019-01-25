<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
      <?php if ( get_the_ID() == 37 ){ ?>
        <a class="navbar-brand p-2" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/charge-logo.png" /></a>
      <?php } elseif (get_the_ID() == 103) { ?>
        <a class="navbar-brand p-2" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/dream-logo.png" /></a>
      <?php } elseif (get_the_ID() == 94) { ?>
        <a class="navbar-brand p-2" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/boost-logo.png" /></a>
      <?php } else { ?>
        <a class="navbar-brand p-2" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/it_spray_logo.png" /></a>
      <?php } ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
        wp_nav_menu( array(
          'theme_location'  => 'header-menu',
          'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id'    => 'bs-example-navbar-collapse-1',
          'menu_class'      => 'navbar-nav ml-auto',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
      </div>
    </nav>
