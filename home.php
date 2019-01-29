<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
    <div class="intro">
      <div class="container h-100">
        <div class="row h-100 d-flex">
          <div class="col-6 offset-3 text-center align-self-center">
            <img class="mb-4" src="<?php echo bloginfo('stylesheet_directory'); ?>/img/it_spray_logo.png" />
            <h1 class="text-uppercase mb-4">Make the day<br /><span class="font-green">go your way</span></h1>
            <h3 class="mb-4">ItSpray are spritzable<br /> solutions for everyday issues.</h3>
            <p>Don’t wait to feel great. ItSpray are proprietary, fast-acting, drug-free formulas that keep you on point on your own schedule.</p>
          </div>
        </div>
      </div>

    </div>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php
      //local only
        if( have_rows('home') ):
            while ( have_rows('home') ) : the_row();
                 get_template_part( 'flexible-templates/'. get_row_layout() );
            endwhile;
        else :
        endif;
        ?>
    <?php endwhile;  ?>

<?php get_footer(); ?>
