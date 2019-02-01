<section class="section shop" data-section-name="why">
  <div class="s-slider">
    <?php if( have_rows('slides') ): while ( have_rows('slides') ) : the_row(); ?>

      <div class="p-5 shop-holder d-flex" style="background-image:url('<?php the_sub_field('background'); ?>');">
        <div class="headline align-self-center col-6 pl-5 <?php the_sub_field('text_placement'); ?>">
          <div class="h1 h1-<?php the_sub_field('color'); ?>"><h1><?php the_sub_field('content'); ?></h1></div>
          <div class="buttons buttons-<?php the_sub_field('color'); ?> mt-5">
              <a href="<?php the_sub_field('buy_button_link'); ?>" class="btn btn-primary btn-<?php the_sub_field('color'); ?> px-md-1 px-lg-5 py-2"><?php the_sub_field('buy_button_text'); ?></a>
              <a href="<?php the_sub_field('why_button_link'); ?>" class="btn btn-secondary btn-<?php the_sub_field('color'); ?>-reverse px-md-1 px-lg-5 py-2"><?php the_sub_field('why_button_text'); ?></a>
          </div>
        </div>
        <div class="col-6">
          <div class="smallbubbles wow zoomIn"><img src="<?php the_sub_field('small_bubbles_image'); ?>" /></div>

          <?php if( have_rows('bubbles') ): while ( have_rows('bubbles') ) : the_row(); ?>

            <div class="bubble <?php the_sub_field('size'); ?> <?php the_sub_field('bubble_color'); ?>" data-animation-in="zoomIn" data-delay-in="<?php the_sub_field('animation_delay'); ?>" style="top:<?php the_sub_field('top'); ?>%;left:<?php the_sub_field('left'); ?>%;">
              <div class="plus"><i class="fas fa-plus"></i></div>
              <div class="headline-shop"><?php the_sub_field('bubble_head'); ?></div>
              <div class="copy-shop"><?php the_sub_field('bubble_copy'); ?></div>
            </div>

          <?php endwhile; else : endif; ?>

        </div>
      </div>

    <?php endwhile; else : endif; ?>
  </div>
</section>
