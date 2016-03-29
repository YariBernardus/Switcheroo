<?php

function switcheroo_enqueue_style() {
    wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/switcheroo/css/bootstrap.min.css' );
    wp_enqueue_style( 'switcheroo-css', get_stylesheet_directory_uri() . '/switcheroo/css/template.min.css' );
}
add_action( 'wp_enqueue_scripts', 'switcheroo_enqueue_style', 8 );

function switcheroo_enqueue_scripts() {
    wp_enqueue_script( 'switcheroo-js', get_stylesheet_directory_uri() . '/switcheroo/js/products.js', array(), '1.0.0', true );
    wp_enqueue_script( 'switcheroo-product-js', get_stylesheet_directory_uri() . '/switcheroo/js/application.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/switcheroo/js/libs/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'detectmobilebrowser-js', get_stylesheet_directory_uri() . '/switcheroo/js/libs/detectmobilebrowser.js', array(), '1.0.0', true );
    wp_enqueue_script( 'mousewheel-js', get_stylesheet_directory_uri() . '/switcheroo/js/libs/jquery.mousewheel.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquerycaroufredsel-js', get_stylesheet_directory_uri() . '/switcheroo/js/libs/jquery.carouFredSel-6.2.1-packed.js', array(), '6.2.1', true );
}
add_action( 'wp_enqueue_scripts', 'switcheroo_enqueue_scripts', 8 );

?>