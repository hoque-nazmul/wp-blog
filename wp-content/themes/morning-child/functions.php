<?php 
function morning_child_theme_assets() {
    wp_enqueue_style('parent-style', get_parent_theme_file_uri('/style.css'));
}
add_action('wp_enqueue_scripts', 'morning_child_theme_assets');

function morning_chile_dequeue_assets () {
    wp_dequeue_style('morning');
    wp_deregister_style('morning');
    wp_enqueue_style('morning', get_theme_file_uri('/assets/css/morning.css', ['bootstrap-css']));
}
add_action('wp_enqueue_scripts', 'morning_chile_dequeue_assets', 12);

function dequeue_bootstrap_cdn () {
    wp_dequeue_style('bootstrap-css');
    wp_deregister_style('bootstrap-css');
    wp_enqueue_style('bootstrap-css', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
}
add_action ('wp_enqueue_scripts', 'dequeue_bootstrap_cdn', 11);