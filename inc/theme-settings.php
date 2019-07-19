<?php
/**
 * Roundhouse customizable theme settings not displayed in the WP Admin.
 *
 * @package Roundhouse
 */

if ( ! function_exists( 'pvd_get_option' ) ) :
	/**
	 * Returns a theme value for the requested setting.
	 *
	 * @param  string  $setting  Name of setting to be returned.
	 * @param  boolean $default Default value to return if setting not found.
	 * @return mixed           Value for the setting.
	 */
	function pvd_get_setting( $setting, $default = false ) {

		$setting = trim( $setting );
		if ( empty( $setting ) ) {
			return null;
		}

		// Start with theme value set to default.
		$value = $default;

		// An array of hardcoded theme settings.
		$theme_settings = [
			// Toggle display advertisments.
			'display-ads' => false,
		];

		if ( ! empty( $theme_settings[ $setting ] ) ) {
			$value = $theme_settings[ $setting ];
		}

		return $value;
	}
endif;

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
