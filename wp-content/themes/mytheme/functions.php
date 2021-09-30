<?php
    function jasonsVerySpecial_script_enqueue() {
        wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/my.css', array(), '1.0.0', 'all');
        wp_enqueue_script('customjs', get_template_directory_uri() . './js/my.js', array(), '1.0.0', true);
    }
    function jasonsVerySpecial_theme_setup(){
        add_theme_support('menus');
        register_nav_menu('primary', 'Primary Navigation');
        register_nav_menu('secondary', 'Footer Navigation');
    }

    add_action('wp_enqueue_scripts', 'jasonsVerySpecial_script_enqueue');
    add_action('after_setup_theme', 'jasonsVerySpecial_theme_setup'); 
?>