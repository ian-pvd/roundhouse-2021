<?php
/**
 * The sidebar containing the main widget area
 *
 * @package roundhouse
 */

$sidebar = 'sidebar-single';

if ( is_page() || is_404() ) {
	$sidebar = 'sidebar-page';
}

if ( ! is_active_sidebar( $sidebar ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area widget-area--<?php echo esc_attr( $sidebar ); ?>">
	<?php dynamic_sidebar( $sidebar ); ?>
</aside><!-- #secondary -->
