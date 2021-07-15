<?php 
define( 'FS_METHOD', 'direct' );
if (class_exists('Attachments')) {
    require_once "lib/attachments.php";
}

function morning_theme_setup () {
    load_theme_textdomain('morning');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support( 'html5', array( 'search-form' ) );
    add_theme_support('post-formats', ['quote', 'video', 'audio', 'image']);
    register_nav_menu('primary', 'main-menu');
}
add_action('after_setup_theme', 'morning_theme_setup');

function morning_theme_assets () {
    // Cache Busting... 
    if (site_url() === 'http://localhost/wp-blog') {
        define('VERSION', time());
    } else {
        define('VERSION', wp_get_theme()->get('Version'));
    }

    wp_enqueue_style('tiny-css', '//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css', [], VERSION);

    wp_enqueue_style(
        'bootstrap-css', 
        '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', 
        null, 
        VERSION
    );
    wp_enqueue_style('morning', get_template_directory_uri(). '/assets/css/morning.css');
    wp_enqueue_style(
        'main-css', 
        get_stylesheet_uri(), 
        null, 
        VERSION
    );
    wp_enqueue_script('tiny-js', '//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js', null, VERSION, true);
    wp_enqueue_script('main-js', get_theme_file_uri('/assets/main.js'), null, VERSION, true);
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
