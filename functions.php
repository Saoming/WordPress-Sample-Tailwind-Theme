<?php 

// add basic wordpress base support
if ( ! function_exists( 'base_setup' ) ) :
    function base_setup() {
        require get_template_directory() . '/functions/base.php';
    }
endif;
add_action( 'after_setup_theme', 'base_setup' );

// register the WordPress Registered Style
add_action('wp_enqueue_scripts', 'wp_register_styles');
function wp_register_styles() {
    $theme_version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'global-style', get_template_directory_uri() . '/style.css', $theme_version );
}
// register the WordPress Registered Style
add_action('wp_enqueue_scripts', 'wp_register_scripts');
function wp_register_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );
    wp_register_script('global-script', get_template_directory_uri() . '/dist/script.js', array(), $theme_version, true);
    wp_enqueue_script('global-script');
}