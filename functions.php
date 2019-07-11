<?php
/**
 * Roundhouse functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package roundhouse
 */

define( 'PVD_PATH', dirname( __FILE__ ) );
define( 'PVD_URL', get_template_directory_uri() );

if ( ! function_exists( 'pvd_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pvd_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on roundhouse, use a find and replace
		 * to change 'pvd' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pvd', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Add custom thumbnails sizes to the theme.
		 */
		add_image_size( 'pvd_stamp', 200, 200 );
		add_image_size( 'pvd_tout', 640, 427 );

		// This theme uses wp_nav_menu() in the following locations.
		register_nav_menus(
			[
				'primary-nav' => esc_html__( 'Primary Navigation', 'pvd' ),
				'utilities'   => esc_html__( 'Footer Utilities', 'pvd' ),
			]
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			]
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'pvd_custom_background_args',
				[
					'default-color' => 'ffffff',
					'default-image' => '',
				]
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			[
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			]
		);
	}
endif;
add_action( 'after_setup_theme', 'pvd_setup' );

/**
 * Add custom query vars.
 *
 * @param  array $vars Array of query vars.
 * @return  array $vars Array of query vars.
 */
add_filter(
	'query_vars',
	function( $vars ) {
		// Add a query var to enable webpack dev assets.
		$vars[] = 'webpack-dev';
		return $vars;
	}
);

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pvd_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'pvd_content_width', 640 );
}
add_action( 'after_setup_theme', 'pvd_content_width', 0 );

/**
 * Enqueue WP scripts.
 */
function pvd_scripts() {
	wp_enqueue_script( 'pvd-skip-link-focus-fix', PVD_URL . '/js/skip-link-focus-fix.js', [], '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pvd_scripts' );

/**
 * Version array for generated site assets
 */
require_once PVD_PATH . '/inc/asset-versions.php';

/**
 * Enqueue static assets
 */
require_once PVD_PATH . '/inc/assets.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Theme specific settings which belong in WP Admin.
 */
require_once PVD_PATH . '/inc/theme-settings.php';

/**
 * Theme template tags for displaying custom content.
 */
require_once PVD_PATH . '/inc/theme-tags.php';

/**
 * Theme hooks.
 */
require_once PVD_PATH . '/inc/theme-hooks.php';

/**
 * Theme helper functions.
 */
require_once PVD_PATH . '/inc/theme-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Roundhouse: Load Social Links Module
 */
require_once PVD_PATH . '/inc/social-links/index.php';

/**
 * Roundhouse: Disable & Customize Comments
 */
require_once PVD_PATH . '/inc/comments/index.php';

/**
 * Roundhouse: Load Custom Excerpts
 */
require_once PVD_PATH . '/inc/excerpts/index.php';

/**
 * Roundhouse: Widgets Module
 */
require_once PVD_PATH . '/inc/widgets/index.php';

/**
 * Roundhouse: Load Custom Featured Image Options
 */
// require_once PVD_PATH . '/inc/featured-image/index.php';
