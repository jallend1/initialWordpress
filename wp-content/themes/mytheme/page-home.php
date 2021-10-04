<?php get_header(); ?>
<div class="container">
    <div class="posts">
    <div>
        <?php 
            $lastBlog = new WP_Query('type=post&posts_per_page=1');
            if( $lastBlog->have_posts()) : 
                while($lastBlog->have_posts()): $lastBlog->the_post(); ?>
                    <div class="post">
                    <h3><?php the_title(); ?></h3>
                    <div class="thumbnail-img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <h4>
                        Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a');?> in <?php the_category(); ?>
                    </h4>
                    <p> <?php the_content(); ?> </p>    
                    <hr>
            </div>
                    <?php
                endwhile;
            endif;
            wp_reset_postdata();
        ?>
    </div>
    <?php 
        if(have_posts()) : 
            while(have_posts()): the_post(); ?>
                <div class="post">
                <h3><?php the_title(); ?></h3>
                <div class="thumbnail-img">
                    <?php the_post_thumbnail(); ?>
                </div>
                <h4>
                    Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a');?> in <?php the_category(); ?>
                </h4>
                <p> <?php the_content(); ?> </p>    
                <hr>
        </div>
                <?php
            endwhile;
        endif;
        
        $lastBlog = new WP_Query('type=post&posts_per_page=2&offset=1');
        if($lastBlog->have_posts()){
            while($lastBlog->have_posts()){
                $lastBlog->the_post();?>
                <div class="post">
                    <h3><?php the_title(); ?></h3>
                    <div class="thumbnail-img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <h4>
                        Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a');?> in <?php the_category(); ?>
                    </h4>
                    <p> <?php the_content(); ?> </p>    
                    <hr>
                </div>
            <?php }
        }
        wp_reset_postdata(); ?>



</div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>