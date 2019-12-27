<?php

if ( ! isset( $content_width ) )
    $content_width = 500;

add_theme_support( 'custom-logo' );

add_theme_support( 'post-thumbnails' );

function dayolddonuts_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'dayolddonuts_custom_logo_setup' );

add_action( 'after_setup_theme', 'register_custom_nav_menus' );
function register_custom_nav_menus() {
	register_nav_menus( array(
    'main-nav' => 'Main Navigation Bar',
		'mobile-nav' => 'Mobile Navigation Menu',
		'footer_menu' => 'Footer Menu',
	) );
}
function dayolddonuts_enqueue_styles() {
	wp_enqueue_style( 'custom', get_stylesheet_directory_uri(). "/assets/css/custom.css", [], time(), 'all');
}

add_action( 'wp_enqueue_scripts', 'dayolddonuts_enqueue_styles');
