<?php
/**
 * Manage static assets.
 *
 * @package roundhouse
 */

/**
 * Enqueues scripts and styles for the frontend
 *
 * @return void
 */
function roundhouse_enqueue_assets() {
	// Dev-specific scripts.
	if ( false !== strpos( get_site_url(), '.dev' ) &&
		true == get_query_var( 'webpack-dev', false ) ) {
		wp_enqueue_script(
			'dev',
			'http://localhost:8080/static/js/dev.bundle.js',
			array(),
			false,
			false
		);
	} else {
		wp_enqueue_style( 'roundhouse-site-css', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'site-css' ), array(), '1.0' );
		wp_enqueue_script( 'roundhouse-common-js', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'common-js' ), array(), '1.0' );
		wp_enqueue_script( 'roundhouse-site-js', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'site-js' ), array( 'roundhouse-common-js' ), '1.0' );
		wp_enqueue_script( 'roundhouse-article-js', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'article-js' ), array( 'roundhouse-common-js' ), '1.0' );
		wp_enqueue_style( 'roundhouse-article-css', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'article-css' ), array(), '1.0' );

		if ( is_admin() ) {
			wp_enqueue_script( 'roundhouse-admin-js', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'admin-js' ), array( 'roundhouse-common-js' ), '1.0' );
			wp_enqueue_style( 'roundhouse-admin-css', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'admin-css' ), array(), '1.0' );
		}

		if ( is_front_page() ) {
			wp_enqueue_script( 'roundhouse-home-js', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'home-js' ), array( 'roundhouse-common-js' ), '1.0' );
			wp_enqueue_style( 'roundhouse-home-css', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'home-css' ), array(), '1.0' );
			wp_enqueue_script( 'roundhouse-archive-js', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'archive-js' ), array( 'roundhouse-common-js' ), '1.0' );
			wp_enqueue_style( 'roundhouse-archive-css', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'archive-css' ), array(), '1.0' );
		}

		if ( is_archive() ) {
			wp_enqueue_script( 'roundhouse-archive-js', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'archive-js' ), array( 'roundhouse-common-js' ), '1.0' );
			wp_enqueue_style( 'roundhouse-archive-css', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'archive-css' ), array(), '1.0' );
			wp_enqueue_script( 'roundhouse-article-js', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'article-js' ), array( 'roundhouse-common-js' ), '1.0' );
			wp_enqueue_style( 'roundhouse-article-css', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'article-css' ), array(), '1.0' );
		}

		if ( is_page() ) {
			wp_enqueue_script( 'roundhouse-article-js', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'article-js' ), array( 'roundhouse-common-js' ), '1.0' );
			wp_enqueue_style( 'roundhouse-article-css', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'article-css' ), array(), '1.0' );
			wp_enqueue_script( 'roundhouse-page-js', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'page-js' ), array( 'roundhouse-common-js' ), '1.0' );
			wp_enqueue_style( 'roundhouse-page-css', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'page-css' ), array(), '1.0' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'roundhouse_enqueue_assets' );

/**
 * Enqueues scripts and styles for admin screens
 *
 * @return void
 */
function roundhouse_enqueue_admin() {
	wp_enqueue_style( 'roundhouse-admin-css', get_template_directory_uri() . '/static/' . roundhouse_get_versioned_asset( 'admin-css' ), array(), '1.0' );
}
add_action( 'admin_enqueue_scripts', 'roundhouse_enqueue_admin' );

/**
 * Removes scripts that could potentially cause style conflicts
 *
 * @return void
 */
function roundhouse_dequeue_scripts() {
	wp_dequeue_style( 'jetpack-slideshow' );
	wp_dequeue_style( 'jetpack-carousel' );
}
add_action( 'wp_print_scripts', 'roundhouse_dequeue_scripts' );