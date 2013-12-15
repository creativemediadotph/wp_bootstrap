<?php
/*
Author: Alipio Gabriel
URL: htp://alipio.creativemedia.ph

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images, 
sidebars, comments, ect.
*/

 
//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );
 
//Register area for custom menu
function register_my_menu() {
    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}
 
 // Enable post thumbnails
add_theme_support('post-thumbnails');

//Some simple code for our widget-enabled sidebar
if ( function_exists('register_sidebar') )
    register_sidebar();

//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

?>
