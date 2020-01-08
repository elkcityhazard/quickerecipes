<?php

function dayolddonuts_theme_setup() {
if ( ! isset( $content_width ) )
    $content_width = 500;

add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
add_action('after_setup_theme', 'dayolddonuts_theme_setup');


// register navigation menus
function register_custom_nav_menus() {
	register_nav_menus( array(
    'main-nav' => 'Main Navigation Bar',
		'mobile-nav' => 'Mobile Navigation Menu',
		'footer_menu' => 'Footer Menu',
    'site_map' => 'Site Map Navigation'
	) );
}

add_action( 'after_setup_theme', 'register_custom_nav_menus' );

//custom header set up

add_theme_support('custom-header');

function dayolddonuts_custom_header() {
  $defaults = array(
  'default-video' => 'get_template_directory_uri' . '/assets/images/echef.mp4',
  'default-image' => 'get_template_directory_uri' . '/assets/images/echef-logo.gif',
  'width' => 1200,
  'height' => 100,
  'flex-width' => true,
  'flex-height' => true,
  'video' => true,
);
add_theme_support('custom-header', $defaults);
}
add_action('after_setup_theme', 'dayolddonuts_custom_header');



// styles and scripts
function dayolddonuts_enqueue_styles() {
  wp_enqueue_style('normalize', get_stylesheet_directory_uri(). "/assets/css/normalize.css", [], time(), 'all');
	wp_enqueue_style( 'custom', get_stylesheet_directory_uri(). "/assets/css/custom.css", [], time(), 'all');
}
add_action( 'wp_enqueue_scripts', 'dayolddonuts_enqueue_styles');

function dayolddonuts_enqueue_scripts() {
  wp_enqueue_script( 'active', get_template_directory_uri() . '/assets/js/active.js', array(), time(), true );
}
add_action( 'wp_enqueue_scripts', 'dayolddonuts_enqueue_scripts');
