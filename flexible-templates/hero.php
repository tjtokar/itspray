<div class="hero" style="height:1000px;">
  <div class="row h-100 d-flex">
    <div class="col-4 align-self-center p-lg-2 p-xl-5">
      <h1 class="pl-5 text-left"><?php the_sub_field('headline'); ?></h1>
      <div class="pl-5 mt-3"><?php the_sub_field('copy'); ?></div>
    </div>
    <div class="col-8">
      <div class="smallbubbles"><img src="<?php the_sub_field('bubblebg'); ?>" /></div>
      <div class="row">
        <div class="p-bubble p-bubble-1 wow zoomIn col-2 text-right"><img src="<?php the_sub_field('bubble1'); ?>" /></div>
        <div class="p-bubble p-bubble-2 wow zoomIn col-3 text-right" data-wow-delay="0.3s"><img src="<?php the_sub_field('bubble2'); ?>" /></div>
        <div class="p-bubble p-bubble-3 wow zoomIn col-5 text-right" data-wow-delay="0.6s"><img src="<?php the_sub_field('bubble3'); ?>" /></div>
      </div>
    </div>
  </div>
</div>
