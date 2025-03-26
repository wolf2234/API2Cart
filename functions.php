<?php 
add_action('wp_enqueue_scripts', 'api2Cart_styles');
add_action('wp_enqueue_scripts', 'api2Cart_scripts');
add_action('after_setup_theme', 'api2Cart_nav_menu');


function api2Cart_nav_menu() {
    register_nav_menu( 'top', 'menu in header' );
    register_nav_menu( 'bottom', 'menu in footer' );
}


function api2Cart_styles() {
    wp_enqueue_style('null-style', get_template_directory_uri() . '/assets/css/null-style.css');
    wp_enqueue_style('pure-style', get_template_directory_uri() . '/assets/css/pure-min.css');
    wp_enqueue_style('base-style', get_template_directory_uri() . '/assets/css/base-min.css');
    wp_enqueue_style('grids-responsive', get_template_directory_uri() . '/assets/css/grids-responsive-min.css');
    wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('sub-header-style', get_template_directory_uri() . '/assets/css/sub-header.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main-style.css');
}


function api2Cart_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', "https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js");
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true);
    // wp_enqueue_script( 'jq-script', get_template_directory_uri() . '/assets/js/jq-script.js', array('jquery'), null, true);
    wp_enqueue_script( 'header-script', get_template_directory_uri() . '/assets/js/header.js', array('jquery'), null, true);
    wp_enqueue_script( 'sub-header-script', get_template_directory_uri() . '/assets/js/sub-header.js', array('jquery'), null, true);
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true);
} 

add_theme_support('custom-logo');
