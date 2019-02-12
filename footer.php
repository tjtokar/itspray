<div class="footer py-5">
  <div class="inner">
    <?php
    wp_nav_menu( array(
      'theme_location'  => 'header-menu',
      'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
      'container'       => 'div',
      'container_class' => '',
      'container_id'    => '',
      'menu_class'      => 'nav justify-content-center',
      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
      'walker'          => new WP_Bootstrap_Navwalker(),
    ) );
    ?>
    <div class="text-center mt-4 d-flex">
      <ul class="list-inline mx-auto justify-content-center">
        <li class="list-inline-item"><a href="https://www.facebook.com/theitspray/" target="_blank"><i class="fa-2x fab fa-facebook-square"></i></a></li>
        <li class="list-inline-item"><a href="https://twitter.com/theitspray" target="_blank"><i class="fa-2x fab fa-twitter-square"></i></a></li>
        <li class="list-inline-item"><a href="https://www.instagram.com/theitspray/" target="_blank"><i class="fa-2x fab fa-instagram"></i></a></li>
      </ul>
    </div>
    <p class="text-center mt-2">©2018 Benesprays<br />801 West Bay Drive, Suite 428A<br />Largo, FL 33770</p>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
