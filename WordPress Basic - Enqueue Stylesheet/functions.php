<?php

// Enqueue styles and scripts
function my_theme_enqueue_styles() {
    // Enqueue the main stylesheet
    wp_enqueue_style( 'my-theme-style', get_stylesheet_uri() );
    
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


?>
