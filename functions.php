<?php

add_action('wp_enqueue_scripts', 'iqos_style');
add_action('wp_enqueue_scripts', 'iqos_scripts');

function iqos_style() {
	wp_enqueue_style('main-style', get_stylesheet_uri());

	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}




function iqos_scripts() {

	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script('jquery');
	
	wp_enqueue_script('iqos-script', get_template_directory_uri() .'./assets/js/script.min.js', array(jquery), null, true);
}