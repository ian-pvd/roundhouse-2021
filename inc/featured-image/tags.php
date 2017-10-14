<?php
/**
 * PVD Roundhouse Feature Image
 *
 * Theme output tags
 *
 * @package roundhouse
 */

// Display the Featured Image
function pvd_the_featured_image( $classes = [] ) {

	// v2 - Get theme options for Featured Images
	$theme_options = pvd_get_featured_image_options();

	// Check if we have a post thumbnail & what to do if we don't
	if ( ! has_post_thumbnail() && false == $theme_options[ 'show_empty' ] ) {
		return; // If there's no post thumbnail and show empty is false, bail.
	}

	// Get the Featured Image format array
	$featured_image = pvd_get_featured_image_format();

	// Init Featured Image Classes
	$classes[] = 'featured-image';

	// Add Featured Image layout class
	if ( isset( $featured_image['layout'] ) && $theme_options['image_layouts'] ) {
		$image_classes[] = 'featured-image-layout--' . $featured_image[ 'layout' ];
	} else {
		$image_classes[] = 'featured-image-layout--' . 'standard';
	}

	// Add Featured Image treatment options
	if ( ! empty( $featured_image['effects'] ) && $theme_options['image_effects'] ) {
		foreach ($featured_image['effects'] as $effect) {
			$image_classes[] = 'image-effect--' . $effect;
		}
	}

	// Merge array of Featured Image classes
	$image_classes = implode( ' ', array_merge( $classes, $image_classes ) );

	// Build array of Featured Image frame classes
	foreach ($classes as $class) {
		$frame_classes[] = $class . '__frame';
	}

	// Merge array of Featured Image classes
	$frame_classes = implode( ' ', $frame_classes);

	// Set up Featured Image caption, if supported.
	if ( get_the_post_thumbnail_caption() && $theme_options['show_captions'] ) {
		foreach ($classes as $class) {
			$caption_classes[] = $class . '__caption';
		}

		// Get the Featured Image Caption
		$caption = get_the_post_thumbnail_caption();

		// Merge array of Featured Image caption classes
		$caption_classes = implode( ' ', $caption_classes);
	}

	?>
	<figure class="<?php esc_attr_e( $image_classes ); ?>">
		<div class="<?php esc_attr_e( $frame_classes ); ?>">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php if ( isset( $caption ) && isset( $caption_classes ) ) : ?>
		<figcaption class="<?php esc_attr_e( $caption_classes ); ?>">
			<?php _e( $caption, 'roundhouse' ); ?>
		</figcaption>
		<?php endif; ?>
	</figure>
	<?php
}
