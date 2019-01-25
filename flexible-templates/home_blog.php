<section class="section blog" data-section-name="blog">
  <div class="h-100">
    <div class="row h-100 d-block">
      <div class="col-3 h-50 py-3 float-left">
        <div class="s-blog p-5 h-100 d-flex">
          <div class="s-copy align-self-end">
            <h2><?php the_sub_field('heading'); ?></h2>
            <p><?php the_sub_field('content'); ?></p>
            <div class="buttons buttons-gray mt-1">
              <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-primary btn-gray px-3 py-2"><?php the_sub_field('button_text'); ?></a>
            </div>
          </div>
        </div>
      </div>
      <?php $args = array(
        'numberposts' => 5,
        'post_type' => 'post'
      );

      $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
      foreach( $recent_posts as $recent ){ ?>
        <?php if( get_field('post_size', $recent[ID]) == "dw") { ?>
          <div class="col-6 h-50 py-3 float-left">
        <?php } else if( get_field('post_size', $recent[ID]) == "dh") { ?>
          <div class="col-3 h-100 py-3 float-right">
        <?php } else { ?>
          <div class="col-3 h-50 py-3 float-left">
        <?php } ?>
          <?php if( get_field('featured_image', $recent[ID]) == "") { ?>
            <div class="s-blog s-border p-5 h-100 d-flex">
          <?php } else { ?>
            <div class="s-blog p-5 h-100 d-flex" style="background-image:url('<?php echo get_field('featured_image', $recent[ID]); ?>')">
          <?php } ?>
            <?php if( get_field('post_size', $recent[ID]) == "dw") { ?>
              <div class="s-copy align-self-center col-6 offset-6">
            <?php } else { ?>
              <div class="s-copy align-self-center">
            <?php } ?>
              <?php if( get_field('button_color', $recent[ID]) == "white") { ?>
                <div class="grey-copy">
              <?php } else { ?>
                <div class="white-copy">
              <?php } ?>
                  <h2><?php echo $recent["post_title"]; ?></h2>
                  <p><?php echo $recent["post_excerpt"]; ?></p>
                  <div class="buttons buttons-gray mt-1">
                    <a href="<?php echo get_permalink($recent["ID"]); ?>" class="btn btn-primary btn-gray px-5 py-2">READ it</a>
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
