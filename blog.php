<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
<div class="row">
  <div class="col-12" style="height:150px;background:#FFF;">

  </div>
</div>
<div class="row">
  <div class="col-3 py-3">
    <div class="s-blog p-5 d-flex">
      <div class="s-copy align-self-center">
        <h2>Blog</h2>
        <p>From health benefits to
new product announcement, catch up on all the latest
news from it Spray.</p>
      </div>
    </div>
  </div>
<?php while ( have_posts() ) : the_post(); ?>
  <?php $args = array(
    'numberposts' => 5,
    'post_type' => 'post'
  );

  $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
  foreach( $recent_posts as $recent ){ ?>
    <?php if( get_field('post_size', $recent[ID]) == "dw") { ?>
      <div class="col-6 py-3">
    <?php } else if( get_field('post_size', $recent[ID]) == "dh") { ?>
      <div class="col-3 py-3 ">
    <?php } else { ?>
      <div class="col-3 py-3">
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
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
