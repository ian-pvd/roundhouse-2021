<?php
/**
 * antifainfo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package antifainfo
 */

define( 'ANTIFAINFO_PATH', dirname( __FILE__ ) );
define( 'ANTIFAINFO_URL', get_template_directory_uri() );

if ( ! function_exists( 'antifainfo_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function antifainfo_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on antifainfo, use a find and replace
	 * to change 'antifainfo' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'antifainfo', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'antifainfo' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'antifainfo_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add theme suppot for post thumbnails
	add_theme_support( 'post-thumbnails' );
}
endif;
add_action( 'after_setup_theme', 'antifainfo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function antifainfo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'antifainfo_content_width', 640 );
}
add_action( 'after_setup_theme', 'antifainfo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function antifainfo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'antifainfo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'antifainfo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'antifainfo_widgets_init' );

// WordPress Underscores theme JS
require_once ANTIFAINFO_PATH . '/inc/wp-assets.php';
// Generated asset versioning function.
// NOTE: This is a auto-generated file, alter it manually at your own risk.
require_once ANTIFAINFO_PATH . '/inc/versioned-assets.php';
// Manage static assets (js and css).
require_once ANTIFAINFO_PATH . '/inc/assets.php';

/**
 * Add custom query vars.
 *
 * @param array $vars Array of current query vars.
 * @return array $vars Array of query vars.
 */
add_filter( 'query_vars', function( $vars ) {
	// Add a query var to enable hot reloading
	$vars[] = 'webpack-dev';
	return $vars;
} );


/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function antifainfo_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'antifainfo_pingback_header' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
