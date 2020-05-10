<?php
add_action( 'wp_enqueue_scripts', 'my_child_theme_scripts' );
function my_child_theme_scripts() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/* Add my child theme localization */
function my_child_theme_setup() {
    load_child_theme_textdomain( 'my_child_theme', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_child_theme_setup' );

//add_action( 'twentytwenty_credits', function() {
//    echo 'Company © ' . date('Y');
//} );

function twentytwenty_fonts_url() {
    return '';
}