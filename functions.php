<?php

add_action( 'wp_enqueue_scripts', 'include_styles' );
add_action( 'wp_enqueue_scripts', 'include_js' );
add_action( 'after_setup_theme', 'register_nav' );


function register_nav() {
    register_nav_menu('primary', 'primary menu');
}


function include_styles() {
    // echo "include style hook worked";
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_style('default', get_template_directory_uri().'/assets/css/default.css');
    wp_enqueue_style('layout', get_template_directory_uri().'/assets/css/layout.css');
    wp_enqueue_style('media-queries', get_template_directory_uri().'/assets/css/media-queries.css');


}


function include_js() {
    // echo "include script hook worked";
    wp_enqueue_script('init',  get_template_directory_uri().'/assets/js/init.js');
    wp_enqueue_script('doupletap',  get_template_directory_uri().'/assets/js/doubletaptogo.js');
    wp_enqueue_script('modernize',  get_template_directory_uri().'/assets/js/modernizr.js');
    wp_enqueue_script('slider',  get_template_directory_uri().'/assets/js/jquery.flexslider.js');


}



// jquery



add_action( 'wp_enqueue_scripts', 'jquery' );
function jquery() {
	// отменяем зарегистрированный jQuery
	// вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
}
