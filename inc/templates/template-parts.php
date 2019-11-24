<?php
/**
 * Template Part Helper Functions.
 *
 * Functions for custom handling of template parts.
 *
 * @package Roundhouse
 */

if ( ! function_exists( 'pvd_get_template_part' ) ) :
	/**
	 * A wrapper for get_template_part which allows you to set custom values
	 * which can be accessed by the template part being loaded.
	 *
	 * @param  string $slug The slug name for the generic template.
	 * @param  string $name (Optional) The name of the specialised template.
	 * @param  array  $vars (Optional) An array of values made available in the template.
	 */
	function pvd_get_template_part( $slug, $name = null, $vars = [] ) {
		// Set up global variables.
		global $pvd_vars, $post;
		if ( ! is_array( $pvd_vars ) ) {
			$pvd_vars = [];
		}

		// If an array was sent as the second function arg...
		if ( is_array( $name ) ) {
			// Shift it to the variables.
			$vars = $name;
			// Assume the template name was skipped, set to default.
			$name = null;
		}

		// Add the variable to global array.
		$pvd_vars[] = $vars;

		// Stash the current global post to protect it from changes made in the template part.
		$origin_post = $post;

		// Use the default WP function to get the template part.
		get_template_part( $slug, $name );

		// Restore the original global post value if the template part changed it.
		if ( $origin_post !== $post ) {
			// Tell phpcs to ignore the "Overriding WordPress globals is prohibited" error.
			// phpcs:ignore WordPress.WP.GlobalVariablesOverride.OverrideProhibited
			$post = $origin_post;

			if ( $post instanceof WP_Post ) {
				setup_postdata( $post );
			}
		}

		// Clean up the custom variables from the global array.
		array_pop( $pvd_vars );
	}
endif;

if ( ! function_exists( 'pvd_get_template_var' ) ) :
	/**
	 * Retrieve a template variable passed by the get_template_part wrapper function.
	 *
	 * @param  mixed $key     The key to check for a value in the template variables.
	 * @param  mixed $default (Optional) A fallback value if a matching key isn't found.
	 * @return mixed          A value from the template vars or the default value.
	 */
	function pvd_get_template_var( $key, $default = null ) {
		// Set up global variables.
		global $pvd_vars;

		// If there are no global variables or it's not an array...
		if ( ! is_array( $pvd_vars ) || empty( $pvd_vars ) ) {
			// Something is wrong, just bail.
			return $default;
		}

		// Get the template variables from the last index in the global vars.
		$template_vars = end( $pvd_vars );
		// If the template variables have a matching key...
		if ( isset( $template_vars[ $key ] ) ) {
			// Return the value for the requested key.
			return $template_vars[ $key ];
		}

		// If we're still here, punt.
		return $default;
	}
endif;
