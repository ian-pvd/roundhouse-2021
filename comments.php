<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roundhouse
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments comments-area">
	<?php
	// Comments Form.
	comment_form(
		[
			'title_reply'          => __( 'Comments', 'roundhouse' ),
			'title_reply_before'   => '<h3 id="reply-title" class="comments-respond__title">',
			'comment_notes_before' => '',
			'comment_field'        => '<p class="comment-form__comment"><textarea id="comment" name="comment" cols="45" rows="4" aria-required="true"></textarea></p>',
		]
	);

	// If there are comments, display the comments list.
	if ( have_comments() ) :
		?>
		<h2 class="comments__title">
			<?php
			$pvd_comment_count = get_comments_number();
			if ( '1' === $pvd_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One comment on &ldquo;%1$s&rdquo;', 'roundhouse' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', $pvd_comment_count, 'comments title', 'roundhouse' ) ),
					number_format_i18n( $pvd_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comments__list">
			<?php
			wp_list_comments(
				[
					'style'       => 'ol',
					'avatar_size' => 64,
				]
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments...
		if ( ! comments_open() ) :
			?>
			<p class="comments__none"><?php esc_html_e( 'Comments are closed.', 'roundhouse' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
