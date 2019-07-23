<?php
/**
 * Theme helper functions.
 *
 * @package Roundhouse
 */

if ( ! function_exists( 'pvd_social_handle' ) ) :
	/**
	 * Distills a url or @name down to a string handle for social network links.
	 *
	 * @param  string $social_link The user supplied social link.
	 * @return string              The filtered social link.
	 */
	function pvd_social_handle( $social_link ) {
		// If the string is empty, don't bother.
		if ( ! isset( $social_link ) ) {
			return;
		}

		// Strip tags.
		$social_link = wp_strip_all_tags( $social_link );

		// Trim whitespace.
		$social_link = trim( $social_link );

		// Remove Trailing Slash.
		$social_link = trim( $social_link, '/' );

		// Break possible url up into '/' sections.
		$social_link = explode( '/', $social_link );

		// Use the last section of the URL.
		$social_link = $social_link[ count( $social_link ) - 1 ];

		// Trim the '@' character.
		$social_link = ltrim( $social_link, '@' );

		return $social_link;
	}
endif;
