<!-- <div class="product-details container py-5">
  <div class="row d-xs-block d-sm-flex">
    <div class="col-xs-12 col-sm-5  align-self-center">
      <img src="<?php the_sub_field('product_shot'); ?>" />
    </div>
    <div class="col-xs-12 col-sm-6 offset-1 align-self-center">
      <?php
        if( get_sub_field('color') == "red" ):
          $fontcolor = "font-red";
          $buttonscolor = "buttons-red";
          $btncolor = "btn-red";
        elseif( get_sub_field('color') == "blue" ):
          $fontcolor = "font-blue";
          $buttonscolor = "buttons-blue";
          $btncolor = "btn-blue";
        else :
          $fontcolor = "font-orange";
          $buttonscolor = "buttons-orange";
          $btncolor = "btn-orange";
        endif;
      ?>
      <h2 class="<?php echo $fontcolor; ?>">
        <?php the_sub_field('product_headline'); ?>
      </h2>
      <div><?php the_sub_field('product_copy'); ?></div>
      <div class="row mt-4">
        <div class="col-6">
          <p><strong class="<?php echo $fontcolor; ?>"><?php the_sub_field('doses');?> Doses<br /><?php the_sub_field('flavor');?></strong></p>
        </div>
        <div class="col-6">
          <div class="buttons <?php echo $buttonscolor; ?> mt-1">
            <a href="<?php the_sub_field('product_link');?>" class="btn btn-primary <?php echo $btncolor; ?> py-2 px-5">BUY it!</a>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-4 position-relative">
          <div class="quote <?php echo $fontcolor; ?>">&#8220;</div>
          <img src="<?php the_sub_field('review_thumbnail'); ?>" />
        </div>
        <div class="col-8">
          <p><?php the_sub_field('review_copy'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div> -->
