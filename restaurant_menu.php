<?php
/*
Plugin Name: Restaurant Menu
Plugin URI: http://www.npalomares.com
Description: Restaurant Menu Plugin
Author: Nicholas Palomares
Author URI: http://www.npalomares.com/
License: All Rights Reserved
*/

include("inc/post_type.php");
include("inc/metabox.php");
include("inc/shortcodes.php");
include("inc/taxonomies.php");

add_image_size('menu_thumb', 250, 150, true);

function restaurant_menu_scripts() {
    $plugin_url = plugin_dir_url( __FILE__ );

    //register timeline css
    wp_register_style( 'rmStyle', $plugin_url . 'inc/css/menu.css' );
    wp_enqueue_style( 'rmStyle' );
	
	//load javascript    
    wp_register_script( 'rmScript', $plugin_url . 'inc/js/menu.js' );
    wp_enqueue_script( 'rmScript' );
}
add_action( 'wp_enqueue_scripts', 'restaurant_menu_scripts' );