<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
<div class="row">
  <div class="col-12" style="height:150px;background:#FFF;"></div>
</div>
<?php while ( have_posts() ) : the_post(); ?>
<div class="position-relative">
  <div class="h1 position-absolute" style="color:<?php the_field('header_color'); ?> !important;">
    <h1 class="text-center"><?php the_title(); ?></h1>
  </div>
  <img src="<?php the_field('header_image'); ?>" class="w-100" />
</div>
<div class="container py-5">
  <div class="col">
    <?php the_content(); ?>
  </div>
</div>
<?php $next_post = get_next_post();
if ( is_a( $next_post , 'WP_Post' ) ) : ?>

<div class="position-relative next">
  <div class="h1 position-absolute" >
    <a href="<?php echo get_permalink( $next_post->ID ); ?>" style="color:<?php the_field('header_color'); ?> !important;"><p class="text-center" style="color:<?php the_field('header_color'); ?> !important;"><em>NEXT POST</em></p>
    <h2 class="text-center"><?php echo get_the_title( $next_post->ID ); ?></h2></a>
  </div>
  <img src="<?php echo get_field('bottom_image', $next_post->ID); ?>" class="w-100" />
</div>
<?php endif; ?>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
