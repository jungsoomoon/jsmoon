<?php
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
    function theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/js/script.js', array(), '1.0.0', true );
    }
    function modify_jquery() {
            if (!is_admin()) {
                    // comment out the next two lines to load the local copy of jQuery
                    wp_deregister_script('jquery');
                    wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', false, '1.8.3');
                    wp_enqueue_script('jquery');
            }
    }
    add_action('init', 'modify_jquery');
?>