<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Initial WordPress Page</title>
        <?php wp_head(); ?>
    </head>
    <?php 
        if( is_front_page() ) : 
            $jason_classes = array('jasons-class', 'my-class');
        else: 
            $jason_classes = array('no-jason');
        endif;
    ?>
<body <?php body_class($jason_classes);?> >
    <?php 
        wp_nav_menu(array('theme_location' => 'primary'));
        ?>
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" />