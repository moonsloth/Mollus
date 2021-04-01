<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );
function js_before_do_header() {
    echo '<div class="site-container">';
}
add_action( 'elementor/theme/before_do_header', 'js_before_do_header' );

function js_after_do_footer() {
    echo '</div><!-- .site-container -->';
}
add_action( 'elementor/theme/after_do_footer', 'js_after_do_footer' );