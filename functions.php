<?php
/**
 * Uku child theme functions and definitions
 */

/*-----------------------------------------------------------------------------------*/
/* Include the parent theme style.css
/*-----------------------------------------------------------------------------------*/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_register_style( 'uku-style',  get_stylesheet_uri(), [ 'uku-serif-style' ] );
    wp_enqueue_style( 'uku-style' );
}
