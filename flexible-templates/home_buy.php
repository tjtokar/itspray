<section class="section buy" data-section-name="buy">
  <div class="container d-flex h-100 justify-content-center">
    <div class="row align-self-center d-flex justify-content-center">
      <div class="col-12 pb-4">
        <?php the_sub_field('product_intro'); ?>
      </div>
      <?php if( have_rows('products') ): while ( have_rows('products') ) : the_row(); ?>

        <div class="col-lg-3 col-xl-4 text-center product <?php the_sub_field('layer'); ?> px-5 py-2">
          <?php the_sub_field('product_headline'); ?>
          <img class="wow fadeIn mt-4" src="<?php the_sub_field('product_image'); ?>" />
          <div class="buttons buttons-<?php the_sub_field('color'); ?> mt-1 text-center">
            <a href="<?php the_sub_field('link'); ?>" class="btn btn-primary btn-<?php the_sub_field('color'); ?> px-5 py-2">BUY it!</a>
          </div>
        </div>

      <?php endwhile; else : endif; ?>

    </div>
  </div>
</section>
