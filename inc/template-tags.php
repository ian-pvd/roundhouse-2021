<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package roundhouse
 */

if ( ! function_exists( 'pvd_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function pvd_posted_on() {
		echo '<div class="entry-date">';

		$time_string = '<time class="entry-date__published entry-date__updated" datetime="%1$s">%2$s</time>';
		$updated_string = null;
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date__published" datetime="%1$s">%2$s</time>';
			$updated_string = '<time class="entry-date__updated" datetime="%1$s">%2$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() )
		);

		if ( $updated_string ) {
			$updated_string = sprintf(
				$updated_string,
				esc_attr( get_the_modified_date( DATE_W3C ) ),
				esc_html( get_the_modified_date() )
			);
		}

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'pvd' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		if ( $updated_string ) {
			$last_updated = sprintf(
				/* translators: %s: last updated date. */
				esc_html_x( 'Last updated %s', 'updated', 'pvd' ),
				'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $updated_string . '</a>'
			);
		}

		echo '<span class="entry-date__posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

		if ( $updated_string ) {
			echo '<span class="entry-date__last-updated">' . $last_updated . '</span>'; // WPCS: XSS OK.
		}

		echo '</div>';

	}
endif;

if ( ! function_exists( 'pvd_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function pvd_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'pvd' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'pvd_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function pvd_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'pvd' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'pvd' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'pvd' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'pvd' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'pvd' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'pvd_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on list views, or a div
	 * element when on single views.
	 *
	 * @param  string $size The image size to use.
	 */
	function pvd_post_thumbnail( $size = 'post-thumbnail' ) {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<figure class="post-thumbnail">
				<div class="post-thumbnail__frame">
					<?php the_post_thumbnail(); ?>
				</div>

				<?php if ( get_the_post_thumbnail_caption() ) : ?>
				<figcaption>
					<?php
						echo wp_kses(
							get_the_post_thumbnail_caption(),
							[
								'a'      => [
									'href'   => [],
									'rel'    => [],
									'target' => [],
								],
								'b'      => [],
								'strong' => [],
								'i'      => [],
								'em'     => [],
							]
						);
					?>
				</figcaption>
				<?php endif; ?>
			</figure><!-- .post-thumbnail -->

		<?php else : ?>

			<div class="post-thumbnail">
				<a class="post-thumbnail__link" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
					<?php
					the_post_thumbnail(
						$size,
						[
							'alt' => the_title_attribute(
								[
									'echo' => false,
								]
							),
						]
					);
					?>
				</a>
			</div>

			<?php
		endif; // End is_singular().
	}
endif;
