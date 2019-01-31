<section class="section blog" data-section-name="blog">
  <div class="h-100">
    <div class="row h-100 d-block">
      <div class="col-3 h-50 py-3 float-left">
        <div class="s-blog p-5 h-100 d-flex">
          <div class=" align-self-center">
            <h2><?php the_sub_field('heading'); ?></h2>
            <p><?php the_sub_field('content'); ?></p>
            <div class="buttons buttons-gray mt-1">
              <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-primary btn-gray px-3 py-2"><?php the_sub_field('button_text'); ?></a>
            </div>
          </div>
        </div>
      </div>

	 <div class="col-3 h-100 py-3 float-right">
        <div class="s-blog p-5 h-100 d-flex">
          <div class=" align-self-center">
            <?php echo do_shortcode('[instagram-feed]'); ?>
          </div>
        </div>
      </div>

      <?php $args = array(
        'numberposts' => 5,
        'post_type' => 'post'
      );

      $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
      foreach( $recent_posts as $recent ){ ?>
        <div class="col-3 h-50 py-3 float-left">
          <?php if( get_field('featured_image', $recent[ID]) == "") { ?>
            <div class="s-blog s-border p-5 h-100 d-flex">
          <?php } else { ?>
            <div class="s-blog  h-100 d-flex" style="background-image:url('<?php echo get_field('featured_image', $recent[ID]); ?>')">
          <?php } ?>
            <div class="s-copy align-self-end pb-2 pt-5 px-3">
                <div class="white-copy">
                  <h2><?php echo $recent["post_title"]; ?></h2>
                  <p><?php echo $recent["post_excerpt"]; ?></p>
                  <div class="buttons buttons-gray mt-1">
					 <?php if( get_field('external_link', $recent[ID]) ) { ?>
                    	<a href="<?php echo get_field('external_link', $recent[ID]); ?>" class="btn btn-primary btn-gray px-5 py-2">READ it</a>
					  <?php } else { ?>
                    	<a href="<?php echo get_permalink($recent["ID"]); ?>" class="btn btn-primary btn-gray px-5 py-2">READ it</a>
					  <?php } ?>
                  </div>
                </div>

              </div>
          </div>
        </div>
      <?php }
      wp_reset_query();
      ?>
    </div>
  </div>


</section>
