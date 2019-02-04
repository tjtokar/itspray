<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
<div class="row">
  <div class="col-12" style="height:150px;background:#FFF;">

  </div>
</div>
<div class="row">
  <div class="col-3 py-3">
    <div class="s-blog p-5 d-flex">
      <div class=" align-self-center">
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
    <div class="col-3 py-3 float-left"  style="min-height:250px;">
          <?php if( get_field('featured_image', $recent[ID]) == "") { ?>
            <div class="s-blog s-border p-5 d-flex h-100">
          <?php } else { ?>
            <div class="s-blog d-flex h-100 " style="background-image:url('<?php echo get_field('featured_image', $recent[ID]); ?>')">
          <?php } ?>
            <div class="s-copy align-self-end pb-2 pt-5 px-3">
                <div class="white-copy">
                  <h2><?php echo $recent["post_title"]; ?></h2>
                  <p><?php echo $recent["post_excerpt"]; ?></p>
                  <div class="buttons buttons-gray mt-1">
					 <?php if( get_field('external_link', $recent[ID]) ) { ?>
                    	<a href="<?php echo get_field('external_link', $recent[ID]); ?>" target="_blank" class="btn btn-primary btn-gray px-5 py-2">READ it</a>
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
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
