<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-md fixed-top navbar-light" role="navigation">
	<?php if ( get_the_ID() == 37 ){ ?>
        <a class="navbar-brand p-2" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/charge-logo.png" /></a>
      <?php } elseif (get_the_ID() == 103) { ?>
        <a class="navbar-brand p-2" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/dream-logo.png" /></a>
      <?php } elseif (get_the_ID() == 94) { ?>
        <a class="navbar-brand p-2" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/boost-logo.png" /></a>
      <?php } else { ?>
        <a class="navbar-brand p-2" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/it_spray_logo.png" /></a>
      <?php } ?>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	  <?php
		wp_nav_menu( array(
			'theme_location'    => 'header-menu',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav ml-auto',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
</nav>
