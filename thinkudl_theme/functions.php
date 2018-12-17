<?php
/**
 * Theme Functions
 */

add_theme_support( 'post-thumbnails' );
//show_admin_bar( true );
function theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );

}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
?>
