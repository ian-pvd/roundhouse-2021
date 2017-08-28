<?php
/**
 * Manage static assets.
 *
 * @package brigada71
 */

/**
 * WP Starter Theme Scripts
 *
 * @return void
 */

function brigada71_wp_assets() {
	wp_enqueue_script( 'brigada71-navigation', get_template_directory_uri() . '/client/lib/js/vendor/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'brigada71-skip-link-focus-fix', get_template_directory_uri() . '/client/lib/js/vendor/skip-link-focus-fix.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'brigada71_wp_assets' );
