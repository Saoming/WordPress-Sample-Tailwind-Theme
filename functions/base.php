<?php

// add menu for Primary and for Footer Menu
register_nav_menus( array(
    'primary' => __( 'Navigation Menu', 'WP_Geeks_Menu'),
    'secondary' => __( 'Footer Menu', 'WP_Geeks_Menu'),
) );

// //remove emoji support
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// // Remove rss feed links
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );

// // remove wp-embed
add_action( 'wp_footer', function(){
    wp_dequeue_script( 'wp-embed' );
});

add_action( 'wp_enqueue_scripts', function(){
    // // remove block library css
    wp_dequeue_style( 'wp-block-library' );
    // // remove comment reply JS
    wp_dequeue_script( 'comment-reply' );
} );


// remove svg render filters
// reference issue: https://github.com/WordPress/gutenberg/issues/36834
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

add_action('wp_enqueue_scripts', function() {
	// remove injected styles gutenberg 
	// reference issue: https://github.com/WordPress/gutenberg/issues/24684
	wp_dequeue_style('global-styles');
	wp_deregister_style('global-styles');
});

// shortcode for polylang 
function custom_polylang_langswitcher() {
	$output = '';
	if ( function_exists( 'pll_the_languages' ) ) {
		$args   = [
			'show_flags' => 0,
			'show_names' => 1,
			'echo'       => 0,
		];
		$output = '<div class="polylang_langswitcher">'. pll_the_languages( $args ) . '</div>';
	}

	return $output;
}

add_shortcode( 'polylang_langswitcher', 'custom_polylang_langswitcher' );