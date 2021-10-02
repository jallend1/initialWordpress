<?php get_header(); 

/*
    Template Name: Page No Title
*/

while(have_posts()) : 
    the_post(); ?>
    <h4>Posted at: <?php the_time('F j, Y');?>
    <p><?php the_content() ?></p>
<?php 
    endwhile;

get_footer(); ?>