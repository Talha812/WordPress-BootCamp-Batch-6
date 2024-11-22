<?php

// Enqueue styles and scripts
function my_theme_enqueue_styles()
{
    // Enqueue the main stylesheet
    wp_enqueue_style('my-theme-style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function enqueue_theme_scripts()
{
    wp_enqueue_script('menu-script', get_template_directory_uri() . '/js/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');

function load_theme_supports()
{
    add_theme_support('title-tag');
}

add_action('wp_enqueue_themes', 'load_theme_supports');


if (!function_exists('mytheme_register_nav_menu')) {
    function mytheme_register_nav_menu()
    {
        register_nav_menus(array(
            'primary_menu' => __('Primary Menu', 'my-theme'),
            'footer_menu' => __('Footer Menu', 'my-theme')
        ));
    }

    add_action('after_setup_theme', 'mytheme_register_nav_menu', 0);
}

?>