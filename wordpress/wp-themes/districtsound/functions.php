<?php
// Load the Theme CSS
function theme_styles() {
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
}

// Load the Theme JS
function theme_js() {
	wp_enqueue_script ('jquery');
}

add_action( 'wp_enqueue_scripts', 'theme_js' );
add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Enable custom menus
add_theme_support( 'menus' );

?>