<?php

    function jasonsVerySpecial_script_enqueue() {
        wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/my.css', array(), get_the_time(), 'all');
        wp_enqueue_script('customjs', get_template_directory_uri() . './js/my.js', array(), get_the_time(), true);
    }

    function jasonsVerySpecial_theme_setup(){
        add_theme_support('menus');
        register_nav_menu('primary', 'Primary Navigation');
        register_nav_menu('secondary', 'Footer Navigation');
    }

    add_action('wp_enqueue_scripts', 'jasonsVerySpecial_script_enqueue');
    add_action('init', 'jasonsVerySpecial_theme_setup'); 
    
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');

        function jasons_widget_setup() {
            register_sidebar(
                array(
                    'name' => 'Sidebar', 
                    'id' => 'sidebar-1',
                    'class' => 'custom',
                    'description' => 'Standard Sidebar',
                    'before_widget' => '<aside =id="%1$s" class="widget %2$s">',
                    'after_widget' => '</aside>',
                    'before_title' => '<h1 class="widget-title">',
                    'after_title' => '</h1>',
                    )
            );
        }

        add_action('widgets_init', 'jasons_widget_setup');

?>