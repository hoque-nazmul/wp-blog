<?php 
function morning_theme_setup () {
    load_theme_textdomain('morning');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'morning_theme_setup');

function morning_theme_assets () {
    // Cache Busting... 
    if (site_url() === 'http://localhost/wp-blog') {
        define('VERSION', time());
    } else {
        define('VERSION', wp_get_theme()->get('Version'));
    }

    wp_enqueue_style(
        'bootstrap-css', 
        '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', 
        null, 
        VERSION
    );
    wp_enqueue_style(
        'main-css', 
        get_stylesheet_uri(), 
        null, 
        VERSION
    );
}
add_action('wp_enqueue_scripts', 'morning_theme_assets');

function morning_widgets_init() {
    register_sidebar(
		array(
			'name'          => __( 'Primary', 'morning' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Primary Sidebar', 'morning' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

    register_sidebar(
		array(
			'name'          => __( 'Secondary', 'morning' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Secondary Sidebar', 'morning' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'morning_widgets_init');
