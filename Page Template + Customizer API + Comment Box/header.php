<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Header Section -->
    <!-- <header id="header">
        <div class="container">
            <div class="logo">
                <a href="">
                    <img id="img-logo" src="wp-content\themes\my-theme\images\logo.jpeg" alt="Logo">
                </a>
            </div>

            <nav class="primary-menu">
                <?php
                // wp_nav_menu(array(
                //     'theme_location' => "primary_menu",
                //     'menu_class' => 'menu_items' // For Styling Purpose CSS
                // ))
                    ?>
            </nav>
        </div>

    </header> -->

    <!-- Header Section -->
    <header id="header" style="background-color:<?php echo get_theme_mod('my_theme_header_bg_color') ?> ;">
        <div class="container">
            <!-- Logo -->
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img id="img-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.jpeg" alt="Logo">
                </a>
            </div>

            <!-- Hamburger Icon -->
            <div class="hamburger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <!-- Navigation Menu -->
            <nav class="primary-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => "primary_menu",
                    'menu_class' => 'menu_items' // For Styling Purpose CSS
                ));
                ?>
            </nav>
        </div>
    </header>