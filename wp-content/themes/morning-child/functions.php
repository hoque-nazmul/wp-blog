<?php 
function morning_child_theme_assets() {
    wp_enqueue_style('parent-style', get_parent_theme_file_uri('/style.css'));
}
add_action('wp_enqueue_scripts', 'morning_child_theme_assets');