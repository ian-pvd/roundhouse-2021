<?php
/**
 * Roundhouse theme settings not displayed in the WP Admin.
 *
 * @package Roundhouse
 */

// if ( ! function_exists( 'pvd_get_option' ) ) :
	//this
// endif;

if ( ! function_exists( 'pvd_get_page' ) ) :
	/**
	 * Returns a WP page permalink for use in theme templates.
	 *
	 * @see get_privacy_policy_url()
	 * @link https://wordpress.org/support/article/settings-privacy-screen/
	 *
	 * @param  string $pvd_page The page being requested.
	 * @return mixed        A permalink or boolean false.
	 */
	function pvd_get_page( $pvd_page ) {
		$page_url = false;
		if ( get_page_by_path( $pvd_page ) ) {
			$page_url = get_permalink( get_page_by_path( $pvd_page ) );
		}
		return $page_url;
	}
endif;
