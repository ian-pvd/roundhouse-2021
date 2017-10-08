<?php
/**
 * Additional features to allow styling of the templates
 *
 * @package roundhouse
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function roundhouse_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'roundhouse_body_classes' );

function roundhouse_get_sidebar( $sidebar ) {

	/*
	 * @TODO !!!
	 *
	 * if...
	 * page is ?
	 * post has ?
	 * etc...
	 *
	 * then:
	 * get_sidebar( some sidebar, some parameters );
	 */

	return get_sidebar( $sidebar );
}
