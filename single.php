<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package roundhouse
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">
		<div id="primary" class="content-area">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content' );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</main><!-- #main -->

<?php
get_footer();
