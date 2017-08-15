<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package brigada71
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post-header">
		<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
	</header><!-- .post-header -->

	<div class="post-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'brigada71' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .post-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="post-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'brigada71' ),
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
			?>
		</footer><!-- .post-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
