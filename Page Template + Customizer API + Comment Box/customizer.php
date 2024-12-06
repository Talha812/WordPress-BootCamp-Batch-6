<?php

function my_theme_customize_register($wp_customize)
{
    // Add a new panel for color settings
    $wp_customize->add_panel('my_theme_color_panel', array(
        'title' => __('Color Settings'),
        'description' => __('Customize the color scheme of your theme.'),
        'priority' => 10,
    ));


    // Add a section for general color settings
    $wp_customize->add_section('my_theme_general_colors', array(
        'title' => __('General Colors'),
        'panel' => 'my_theme_color_panel',
    ));

    // Add a setting for the primary color
    $wp_customize->add_setting('my_theme_primary_color', array(
        'default' => '#007bff',
        'transport' => 'postMessage', // For live preview
    ));

    // Add a control for the primary color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'my_theme_primary_color', array(
        'label' => __('Primary Color'),
        'section' => 'my_theme_general_colors',
    )));

    // Add a setting for the secondary color
    $wp_customize->add_setting('my_theme_secondary_color', array(
        'default' => '#6c757d',
        'transport' => 'postMessage',
    ));

    // Add a control for the secondary color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'my_theme_secondary_color', array(
        'label' => __('Secondary Color'),
        'section' => 'my_theme_general_colors',
    )));

    // ----------------------------------------------------------------

    // Add a section for header color settings
    $wp_customize->add_section('my_theme_header_colors', array(
        'title' => __('Header Colors'),
        'panel' => 'my_theme_color_panel',
    ));

    // Add a setting for the header background color
    $wp_customize->add_setting('my_theme_header_bg_color', array(
        'default' => '#fff',
        'transport' => 'postMessage',
    ));

    // Add a control for the header background color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'my_theme_header_bg_color', array(
        'label' => __('Header Background Color'),
        'section' => 'my_theme_header_colors',
    )));

    // Add a setting for the header text color
    $wp_customize->add_setting('my_theme_header_text_color', array(
        'default' => '#333',
        'transport' => 'postMessage',
    ));

    // Add a control for the header text color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'my_theme_header_text_color', array(
        'label' => __('Header Text Color'),
        'section' => 'my_theme_header_colors',
    )));


    // ----------------------------------------------------------------

    // Add a section for footer color settings
    $wp_customize->add_section('my_theme_footer_colors', array(
        'title' => __('Footer Colors'),
        'panel' => 'my_theme_color_panel',
    ));

    // Add a setting for the footer background color
    $wp_customize->add_setting('my_theme_footer_bg_color', array(
        'default' => '#f8f9fa',
        'transport' => 'postMessage',
    ));

    // Add a control for the footer background color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'my_theme_footer_bg_color', array(
        'label' => __('Footer Background Color'),
        'section' => 'my_theme_footer_colors',
    )));

    // Add a setting for the footer text color
    $wp_customize->add_setting('my_theme_footer_text_color', array(
        'default' => '#6c757d',
        'transport' => 'postMessage',
    ));

    // Add a control for the footer text color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'my_theme_footer_text_color', array(
        'label' => __('Footer Text Color'),
        'section' => 'my_theme_footer_colors',
    )));


    // ----------------------------------------------------------------

    // Add a new section for text settings
    $wp_customize->add_section( 'my_theme_text_settings', array(
        'title' => __( 'Text Settings' ),
        'description' => __( 'Customize the text elements of your theme.' ),
        'priority' => 10,
    ) );

    // Add a setting for the site title
    $wp_customize->add_setting( 'my_theme_featured_title', array(
        'default' => "Default Value is set to ".get_bloginfo('name'),
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    // Add a control for the site title
    $wp_customize->add_control( 'my_theme_featured_title', array(
        'label' => __( 'Site Title' ),
        'section' => 'my_theme_text_settings',
        'type' => 'text',
    ) );

    // Add a setting for the site tagline
    $wp_customize->add_setting( 'my_theme_featured_title2', array(
        'default' => get_bloginfo( 'description' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    // Add a control for the site tagline
    $wp_customize->add_control( 'my_theme_featured_title2', array(
        'label' => __( 'Site Tagline' ),
        'section' => 'my_theme_text_settings',
        'type' => 'text',
    ) );
}

add_action('customize_register', 'my_theme_customize_register');