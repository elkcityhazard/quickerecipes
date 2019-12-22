<?php

add_action( 'after_setup_theme', 'register_custom_nav_menus' );
function register_custom_nav_menus() {
	register_nav_menus( array(
    'main-nav' => 'Main Navigation Bar',
		'mobile-nav' => 'Mobile Navigation Menu',
		'footer_menu' => 'Footer Menu',
	) );
}

?>
