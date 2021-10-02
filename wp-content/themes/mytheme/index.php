<?php get_header(); ?>

<?php 
    if(have_posts()) : 
        while(have_posts()): the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <div class="thumbnail-img">
                <?php the_post_thumbnail(); ?>
            </div>
            <h4>
                Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a');?> in <?php the_category(); ?>
            </h4>
            <p> <?php the_content(); ?> </p>    
            <hr>
    <?php
        endwhile;
        endif;
?>

<?php get_footer(); ?>