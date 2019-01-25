<?php

function add_theme_scripts() {
 wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' );

 wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css' );

 wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' );

 wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );

 wp_enqueue_style( 'slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css' );

  wp_enqueue_style( 'style', get_stylesheet_uri() );

  wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

  wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js', array ( 'jquery' ), 1.1, true);

  wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);

  wp_enqueue_script( 'scrollify', 'https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.19/jquery.scrollify.min.js', array ( 'jquery' ), 1.1, true);

  wp_enqueue_script( 'wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array ( 'jquery' ), 1.1, true);

  wp_enqueue_script( 'tilt', 'https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.6.1/vanilla-tilt.min.js', array ( 'jquery' ), 1.1, true);

  wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array ( 'jquery' ), 1.1, true);

  wp_enqueue_script( 'slick-animation', get_template_directory_uri() . '/js/slick-animation.min.js', array ( 'jquery' ), 1.1, true);

  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/index.js', array ( 'jquery' ), 1.1, true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function fb_move_admin_bar() { ?>
	<style type="text/css">
		body {
			margin-top: -28px;
			padding-bottom: 28px;
		}
		body.admin-bar #wphead {
			padding-top: 0;
		}
		body.admin-bar #footer {
			padding-bottom: 28px;
		}
		#wpadminbar {
			top: auto !important;
			bottom: 0;
		}
		#wpadminbar .quicklinks .menupop ul {
			bottom: 28px;
		}
	</style>
<?php }
// on backend area
add_action( 'admin_head', 'fb_move_admin_bar' );
// on frontend area
add_action( 'wp_head', 'fb_move_admin_bar' );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


?>
