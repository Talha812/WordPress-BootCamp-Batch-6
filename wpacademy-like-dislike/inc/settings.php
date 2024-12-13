<?php
// Top-level menu
function wpac_register_menu_page() {
    add_menu_page(
        'WPAC Like System',
        'WPAC Settings',
        'manage_options',
        'wpac-settings',
        'wpac_settings_page_html',
        'dashicons-thumbs-up',
        30
    );
}
add_action('admin_menu', 'wpac_register_menu_page');

// Register settings, sections, and fields
function wpac_plugin_settings() {
    // Settings for like and dislike button labels
    register_setting('wpac-settings', 'wpac_like_btn_label');
    register_setting('wpac-settings', 'wpac_dislike_btn_label');

    // Register new section
    add_settings_section(
        'wpac_label_settings_section',
        'WPAC Button Labels',
        'wpac_plugin_settings_section_cb',
        'wpac-settings'
    );

    // Add settings fields
    add_settings_field(
        'wpac_like_label_field',
        'Like Button Label',
        'wpac_like_label_field_cb',
        'wpac-settings',
        'wpac_label_settings_section'
    );

    add_settings_field(
        'wpac_dislike_label_field',
        'Dislike Button Label',
        'wpac_dislike_label_field_cb',
        'wpac-settings',
        'wpac_label_settings_section'
    );
}
add_action('admin_init', 'wpac_plugin_settings');

function wpac_plugin_settings_section_cb() {
    echo '<p>Define Buttons Labels</p>';
}

function wpac_like_label_field_cb() {
    $setting = get_option('wpac_like_btn_label');
    ?>
    <input type="text" name="wpac_like_btn_label" value="<?php echo isset($setting) ? esc_attr($setting) : ''; ?>" />
    <?php
}

function wpac_dislike_label_field_cb() {
    $setting = get_option('wpac_dislike_btn_label');
    ?>
    <input type="text" name="wpac_dislike_btn_label" value="<?php echo isset($setting) ? esc_attr($setting) : ''; ?>" />
    <?php
}
