<?php
/**
 * Manage static assets.
 *
 * @package brigada71
 */

/**
 * Enqueues scripts and styles for the frontend
 *
 * @return void
 */
function brigada71_enqueue_assets() {
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

		wp_enqueue_script( 'brigada71-common-js', get_template_directory_uri() . '/static/' . brigada71_get_versioned_asset( 'common-js' ), array(), '1.0' );
		wp_enqueue_script( 'brigada71-site-js', get_template_directory_uri() . '/static/' . brigada71_get_versioned_asset( 'site-js' ), array( 'brigada71-common-js' ), '1.0' );
		wp_enqueue_style( 'brigada71-site-css', get_template_directory_uri() . '/static/' . brigada71_get_versioned_asset( 'site-css' ), array(), '1.0' );
		wp_enqueue_script( 'brigada71-article-js', get_template_directory_uri() . '/static/' . brigada71_get_versioned_asset( 'article-js' ), array( 'brigada71-common-js' ), '1.0' );
		wp_enqueue_style( 'brigada71-article-css', get_template_directory_uri() . '/static/' . brigada71_get_versioned_asset( 'article-css' ), array(), '1.0' );

		if ( is_admin() ) {
			wp_enqueue_script( 'brigada71-admin-js', get_template_directory_uri() . '/static/' . brigada71_get_versioned_asset( 'admin-js' ), array( 'brigada71-common-js' ), '1.0' );
			wp_enqueue_style( 'brigada71-admin-css', get_template_directory_uri() . '/static/' . brigada71_get_versioned_asset( 'admin-css' ), array(), '1.0' );
		}

		if ( is_front_page() ) {
			wp_enqueue_script( 'brigada71-home-js', get_template_directory_uri() . '/static/' . brigada71_get_versioned_asset( 'home-js' ), array( 'brigada71-common-js' ), '1.0' );
			wp_enqueue_style( 'brigada71-home-css', get_template_directory_uri() . '/static/' . brigada71_get_versioned_asset( 'home-css' ), array(), '1.0' );
			wp_enqueue_script( 'brigada71-archive-js', get_template_directory_uri() . '/static/' . brigada71_get_versioned_asset( 'archive-js' ), array( 'brigada71-common-js' ), '1.0' );
			wp_enqueue_style( 'brigada71-archive-css', get_template_directory_uri() . '/static/' . brigada71_get_versioned_asset( 'archive-css' ), array(), '1.0' );
		}

		if ( is_archive() ) {
			wp_enqueue_script( 'brigada71-archive-js', get_template_directory_uri() . '/static/' . brigada71_get_versioned_asset( 'archive-js' ), array( 'brigada71-common-js' ), '1.0' );
			wp_enqueue_style( 'brigada71-archive-css', get_template_directory_uri() . '/static/' . brigada71_get_versioned_asset( 'archive-css' ), array(), '1.0' );
			}

		if ( is_page() ) {
			wp_enqueue_script( 'brigada71-page-js', get_template_directory_uri() . '/static/' . brigada71_get_versioned_asset( 'page-js' ), array( 'brigada71-common-js' ), '1.0' );
			wp_enqueue_style( 'brigada71-page-css', get_template_directory_uri() . '/static/' . brigada71_get_versioned_asset( 'page-css' ), array(), '1.0' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'brigada71_enqueue_assets' );

/**
 * Enqueues scripts and styles for admin screens
 *
 * @return void
 */
function brigada71_enqueue_admin() {
	wp_enqueue_style( 'brigada71-admin-css', get_template_directory_uri() . '/static/' . brigada71_get_versioned_asset( 'admin-css' ), array(), '1.0' );
}
add_action( 'admin_enqueue_scripts', 'brigada71_enqueue_admin' );

/**
 * Removes scripts that could potentially cause style conflicts
 *
 * @return void
 */
function brigada71_dequeue_scripts() {
	wp_dequeue_style( 'jetpack-slideshow' );
	wp_dequeue_style( 'jetpack-carousel' );
}
add_action( 'wp_print_scripts', 'brigada71_dequeue_scripts' );