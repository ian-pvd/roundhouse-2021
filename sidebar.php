<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Roundhouse
 */

// The default sidebar.
$sidebar = 'sidebar-single';

// Conditionals to use a different sidebar.
if ( is_page() || is_404() ) {
	$sidebar = 'sidebar-page';
}

// If the sidebar isn't active, bail.
if ( ! is_active_sidebar( $sidebar ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area widget-area--<?php echo esc_attr( $sidebar ); ?>">
	<?php dynamic_sidebar( $sidebar ); ?>
</aside><!-- #secondary -->
