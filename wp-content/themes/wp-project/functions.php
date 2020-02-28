<?php
    add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );


   function mytheme_scripts() {
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
    wp_enqueue_script('mytheme-script', get_template_directory_uri() . '/assets/js/main.min.js',
    array(), null, true);
   };


   add_theme_support('custom-logo');
