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

	// Get the post thumbnail ID
	$thumbnail_id = get_post_thumbnail_id();

	// Init Featured Image Classes
	$classes[] = 'featured-image';

	/* Featured Image Layout */

	// Add Featured Image layout class
	if ( isset( $featured_image['layout'] ) && $theme_options['image_layouts'] ) {
		$image_classes[] = 'featured-image-layout--' . $featured_image[ 'layout' ];
	} else {
		$image_classes[] = 'featured-image-layout--standard';
	}

	// Add Featured Image alignment class
	if ( isset( $featured_image['align'] ) && $theme_options['image_alignment'] ) {
		$image_classes[] = 'featured-image-align--' . $featured_image[ 'align' ];
	} else {
		$image_classes[] = 'featured-image-align--top';
	}

	// Add Featured Image effect classes
	if ( ! empty( $featured_image['effects'] ) && $theme_options['image_effects'] ) {
		foreach ($featured_image['effects'] as $effect) {
			$image_classes[] = 'image-effect--' . $effect;
		}
	}

	// Merge array of Featured Image classes
	$image_classes = implode( ' ', array_merge( $classes, $image_classes ) );

	/* Featured Image Frame */

	// Build array of Featured Image frame classes
	foreach ($classes as $class) {
		$frame_classes[] = $class . '__frame';
	}

	// Merge array of Featured Image classes
	$frame_classes = implode( ' ', $frame_classes);

	/* Featured Image Caption */

	// Set up Featured Image caption classes, if supported.
	if ( get_the_post_thumbnail_caption() && $theme_options['show_captions'] ) {
		foreach ($classes as $class) {
			$caption_classes[] = $class . '__caption';
		}

		// Merge array of Featured Image caption classes
		$caption_classes = implode( ' ', $caption_classes);
	}

	/* Featured Image Attributes */

	// Get the Featured Image Title
	$title = the_title_attribute( [ 'echo' => false, 'post' => $thumbnail_id ] );
	if ( empty( $title ) ) {
		$title = get_the_title();
	}

	// Get the Featured Image Alt Text
	$alt_text = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );

	// Get the Featured Image Caption
	$caption = get_the_post_thumbnail_caption();

	// Check if alt text is set
	if ( empty( $alt_text ) ) {
		// If not, check if caption is set
		if ( empty( $caption ) ) {
			// If not, use (image or post) title value for alt
			$alt_text = $title;
			// Don't display title value
			$title = null;
		} else {
			// Use caption for the alt text
			$alt_text = $caption;
		}
	}

	?>
	<figure class="<?php esc_attr_e( $image_classes ); ?>">
		<div class="<?php esc_attr_e( $frame_classes ); ?>">
			<?php the_post_thumbnail( 'post-thumbnail', [ 'alt' => $alt_text, 'title' => $title ] ); ?>
		</div>
		<?php if ( isset( $caption ) && isset( $caption_classes ) ) : ?>
		<figcaption class="<?php esc_attr_e( $caption_classes ); ?>">
			<?php _e( $caption, 'roundhouse' ); ?>
		</figcaption>
		<?php endif; ?>
	</figure>
	<?php
}
