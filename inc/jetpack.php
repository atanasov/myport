<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package My port
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function my_port_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'my_port_jetpack_setup' );
