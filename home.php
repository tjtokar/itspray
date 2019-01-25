<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php
        // check if the flexible content field has rows of data
        if( have_rows('home') ):
             // loop through the rows of data
            while ( have_rows('home') ) : the_row();
                 get_template_part( 'flexible-templates/'. get_row_layout() );
            endwhile;
        else :
            // no layouts found
        endif;
        ?>
    <?php endwhile; // end of the loop. ?>
    
<?php get_footer(); ?>
