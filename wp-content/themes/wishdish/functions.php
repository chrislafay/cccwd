<?php

// Version bump
function get_current_version() { return rand(0,10000); } //return '0.0.2'; }

// Print and die
function pd($mixed) {
    echo "<pre>";
    var_dump($mixed);
    echo "</pre>";
    die();
}

// Enqueue all header scripts
function vtms_enqueue_scripts() {
    wp_enqueue_style('parent', get_template_directory_uri() . '/stylesheets/styles.css', array(), get_current_version());
} add_action('wp_enqueue_scripts', 'vtms_enqueue_scripts');


?>
