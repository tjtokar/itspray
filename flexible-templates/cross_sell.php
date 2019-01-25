<div class="container columns py-3 my-3">
  <div class="row d-flex align-items-stretch">
    <?php

      if( have_rows('column') ):

          while ( have_rows('column') ) : the_row(); ?>
            <?php
              if( get_sub_field('color') == "red" ):
                $fontcolor = "font-red";
                $buttonscolor = "buttons-red";
                if( get_sub_field('reverse_color_buttons') == "yes" ):
                  $btncolor = "btn-red-reverse";
                else :
                  $btncolor = "btn-red";
                endif;
              elseif( get_sub_field('color') == "blue" ):
                $fontcolor = "font-blue";
                $buttonscolor = "buttons-blue";
                if( get_sub_field('reverse_color_buttons') == "yes" ):
                  $btncolor = "btn-blue-reverse";
                else :
                  $btncolor = "btn-blue";
                endif;
              else :
                $fontcolor = "font-orange";
                $buttonscolor = "buttons-orange";
                if( get_sub_field('reverse_color_buttons') == "yes" ):
                  $btncolor = "btn-orange-reverse";
                else :
                  $btncolor = "btn-orange";
                endif;
              endif;
            ?>

            <div class="col-4 align-self-end">
              <div>
                <div class="img-holder"><p class="text-center"><img src="<?php the_sub_field('icon'); ?>" /></p></div>
                <h3 class="text-center mb-4"><strong class="<?php echo $fontcolor; ?>"><?php the_sub_field('headline'); ?></strong></h3>
                <p class="text-center"><?php the_sub_field('copy'); ?></p>
                <div class="buttons <?php echo $buttonscolor; ?> mt-4 text-center">
                  <a href="<?php the_sub_field('button_link');?>" class="btn btn-primary <?php echo $btncolor; ?> py-2 px-5"><?php the_sub_field('button_text');?></a>
                </div>
              </div>
            </div>
      <?php    endwhile;
      else :
      endif;

      ?>

  </div>
</div>
