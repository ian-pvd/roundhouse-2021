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

if ( ! function_exists( 'pvd_get_the_ID' ) ) :
	// phpcs:disable WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid
	// -- This function name matches the `get_the_ID()` case, and is meant as a drop-in wrapper.
	/**
	 * Helper function to sanitize an ID if one is provided, or to get the
	 *  global post ID as a fallback.
	 *
	 * Differs from a simple get_the_ID() call by checking if a custom value
	 *  is present first before using the value from $post.
	 *
	 * @param  int $post_id The post ID to sanitize.
	 * @return int|false    The retreived post ID.
	 */
	function pvd_get_the_ID( $post_id = 0 ) {
		// Sanitize the post ID to make sure its an integer.
		$post_id = absint( $post_id );

		// If no post ID ...
		if ( ! $post_id ) {
			// Get the post ID.
			$post_id = get_the_ID();
		}

		// Return either the ID or false.
		return ! empty( $post_id ) ? $post_id : false;
	}
	// phpcs:enable
endif;
