<div class="hero" style="height:1000px;">
  <div class="row h-100 d-xs-block d-sm-flex p-4">
    <div class="col-xs-10 col-sm-4 align-self-center p-lg-2 p-xl-5">
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
    </div>
    <div class="col-xs-12 col-sm-8 product-bubs">
      <div class="smallbubbles"><img src="<?php the_sub_field('bubblebg'); ?>" /></div>
      <div class="row">
        <div class="p-bubble p-bubble-1 wow zoomIn col-2 text-right"><img src="<?php the_sub_field('bubble1'); ?>" /></div>
        <div class="p-bubble p-bubble-2 wow zoomIn col-3 text-right" data-wow-delay="0.3s"><img src="<?php the_sub_field('bubble2'); ?>" /></div>
        <div class="p-bubble p-bubble-3 wow zoomIn col-5 text-right" data-wow-delay="0.6s"><img src="<?php the_sub_field('bubble3'); ?>" /></div>
      </div>
    </div>
  </div>
</div>
