<?php 

add_action( 'wp_enqueue_scripts', 'SMB_style' );
add_action( 'wp_enqueue_scripts', 'SMB_scripts' );
function SMB_style() {
	wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/assets/css/normalize.css' );
	wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css' );
	wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

function SMB_scripts() {
	wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js');
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'magnific-script', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(jquery), null, true);
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.min.js', array(jquery), null, true);
}