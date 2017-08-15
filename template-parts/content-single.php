<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package brigada71
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="post-header">
		<?php
			the_title( '<h1 class="post-title">', '</h1>' );
			if ( 'post' === get_post_type() ) : ?>
			<div class="post-meta">
				<?php brigada71_posted_on(); ?>
			</div><!-- .post-meta -->
		<?php
		endif; ?>
	</header><!-- .post-header -->

	<?php
	// check if the post has a Post Thumbnail assigned to it.
	if ( has_post_thumbnail() ) {
		?><div class="post-thumbnail"><?php
		the_post_thumbnail();
		?></div><?php
	} ?>

	<div class="post-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'brigada71' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'brigada71' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .post-content -->

	<footer class="post-footer">
		<?php brigada71_entry_footer(); ?>
	</footer><!-- .post-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
