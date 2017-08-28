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
	wp_enqueue_script( 'roundhouse-navigation', get_template_directory_uri() . '/client/lib/js/vendor/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'roundhouse-skip-link-focus-fix', get_template_directory_uri() . '/client/lib/js/vendor/skip-link-focus-fix.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'roundhouse_wp_assets' );
