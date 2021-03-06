<section class="section head d-flex" data-section-name="home">
  <div class="col-lg-5 headline align-self-center pl-0">
    <?php if( have_rows('taglines') ): while ( have_rows('taglines') ) : the_row(); ?>

      <div class="h1 h1-<?php the_sub_field('color'); ?>" data-color="<?php the_sub_field('color'); ?>"><h1><span class="mmdash">&mdash;</span> <?php the_sub_field('tagline'); ?></h1></div>

    <?php endwhile; else : endif; ?>

    <div class="p mt-2 pl-5 ml-1">
      <?php the_sub_field('content'); ?>
    </div>

    <?php if( have_rows('taglines') ): while ( have_rows('taglines') ) : the_row(); ?>

      <div class="d-none buttons buttons-<?php the_sub_field('color'); ?> mt-5 pl-5 ml-1">
          <a href="<?php the_sub_field('buy_button_link'); ?>" class="btn btn-primary btn-<?php the_sub_field('color'); ?> px-5 py-2">BUY it!</a>
          <a href="<?php the_sub_field('why_button_link'); ?>" class="btn btn-secondary btn-<?php the_sub_field('color'); ?>-reverse px-5 py-2">WHY it!</a>
      </div>

    <?php endwhile; else : endif; ?>
  </div>
  <div class="col-lg-7 graphic">
    <div class="bubble-layer wow zoomIn" >
      <img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/colored-bubbles.png" />
    </div>
    <div class="fruit-layer wow zoomIn" data-wow-delay="0.3s" >
      <img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/fruit-spray-online.png" />
    </div>
  </div>
</section>
