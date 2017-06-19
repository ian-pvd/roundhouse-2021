<?php
/**
 * Manage static assets.
 *
 * @package roundhouse
 */



/**
 * WP Starter Theme Scripts
 *
 * @return void
 */
function roundhouse_wp_assets() {
	wp_enqueue_script( 'roundhouse-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'roundhouse-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'roundhouse_wp_assets' );
