<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php
        if( have_rows('home') ):
            while ( have_rows('home') ) : the_row();
                 get_template_part( 'flexible-templates/'. get_row_layout() );
            endwhile;
        else :
        endif;
        ?>
    <?php endwhile;  ?>

<?php get_footer(); ?>
