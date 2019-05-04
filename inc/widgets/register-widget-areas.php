<?php
/**
 * Register widget areas.
 *
 * @package Roundhouse
 */

/**
 * Registers sidebar and widget areas for the Roundhouse theme.
 */
function pvd_widgets_init() {
	/**
	 * Single Post Sidebar
	 */
	register_sidebar(
		[
			'name'          => esc_html__( 'Single Post Sidebar', 'roundhouse' ),
			'id'            => 'sidebar-single',
			'description'   => esc_html__( 'Add widgets for the article sidebar here.', 'roundhouse' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget__title">',
			'after_title'   => '</h2>',
		]
	);
	/**
	 * Page Content Sidebar
	 */
	register_sidebar(
		[
			'name'          => esc_html__( 'Page Content Sidebar', 'roundhouse' ),
			'id'            => 'sidebar-page',
			'description'   => esc_html__( 'Add widgets for the page sidebar here.', 'roundhouse' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget__title">',
			'after_title'   => '</h2>',
		]
	);
}

add_action( 'widgets_init', 'pvd_widgets_init' );
