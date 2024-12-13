<?php

/*
Plugin Name: WPacademy Like/Dislike
Plugin URI: likedislike.io
Description: Simple post like and dislike system
License: GPL2
*/

if (!defined('WPINC')) {
    die;
}

if (!defined('WPAC_PLUGIN_VERSION')) {
    define('WPAC_PLUGIN_VERSION', '1.0.0');
}

if (!defined('WPAC_PLUGIN_DIR')) {
    define('WPAC_PLUGIN_DIR', plugin_dir_url(__FILE__));
}

// Include scripts and styling
function wpac_plugin_scripts() {
    wp_enqueue_style('wpac-css', WPAC_PLUGIN_DIR . 'assets/css/style.css');
    wp_enqueue_script('wpac-js', WPAC_PLUGIN_DIR . 'assets/js/main.js');
}
add_action('wp_enqueue_scripts', 'wpac_plugin_scripts');

// Admin settings page HTML
function wpac_settings_page_html() {
    ?>
    <div class="wrap">
        <h1 style="padding:10px; background:#333; color:#fff;"><?php echo esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields('wpac-settings');
            do_settings_sections('wpac-settings');
            submit_button('Save Changes');
            ?>
        </form>
    </div>
    <?php
}

require plugin_dir_path(__FILE__). 'inc/settings.php';