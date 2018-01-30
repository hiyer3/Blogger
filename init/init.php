<?php 

function theme_styles() {

	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css', array() );
    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array() );
}

add_action( 'wp_enqueue_scripts', 'theme_styles');

function theme_js() {

	wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array());
    wp_enqueue_script( 'bootstrap_bundle_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js', array());
}

add_action( 'wp_enqueue_scripts', 'theme_js');


?>