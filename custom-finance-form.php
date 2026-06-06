<?php
/*
Plugin Name: Credit Application Plugin
Description: A custom plugin that provides the credit application form for WordPress.
Version: 1.0
Author: Abubakar
License: GPL-2.0-or-later
*/

if (!defined('ABSPATH')) {
    exit;
}

function cff_enqueue_assets() {

    wp_enqueue_style(
        'cff-style',
        plugin_dir_url(__FILE__) . 'style.css'
    );

    wp_enqueue_script(
        'cff-script',
        plugin_dir_url(__FILE__) . 'script.js',
        array('jquery'),
        null,
        true
    );
}

add_action('wp_enqueue_scripts', 'cff_enqueue_assets');


function cff_form_shortcode() {

    ob_start();

    include plugin_dir_path(__FILE__) . 'form-template.php';

    return ob_get_clean();
}

add_shortcode('finance_form', 'cff_form_shortcode');