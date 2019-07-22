<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Roundhouse
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site site--mobile-nav">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'roundhouse' ); ?></a>

	<header id="masthead" class="site-header site-header--sticky">
		<div class="site-header__wrapper">
			<div class="site-header__branding">
				<?php the_custom_logo(); ?>

				<?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-header__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-header__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>

				<?php $pvd_description = get_bloginfo( 'description', 'display' ); ?>

				<?php if ( $pvd_description || is_customize_preview() ) : ?>
					<p class="site-header__description"><?php echo $pvd_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<?php if ( has_nav_menu( 'primary-nav' ) ) : ?>

				<nav id="site-navigation" class="site-header__navigation main-navigation main-navigation--priority-nav">
					<button id="mobile-nav-toggle" class="main-navigation__menu-toggle menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'roundhouse' ); ?></button>
					<?php
					// Add search bar to nav before menu.
					$menu_prefix_markup = get_search_form( false );

					// Check for social links to add to nav after menu.
					$menu_suffix_markup = ( has_nav_menu( 'social-links' ) ) ? pvd_social_links( false ) : null;

					// Display Primary Nav Menu.
					wp_nav_menu(
						[
							'container_class' => 'main-navigation__primary-nav primary-nav',
							'menu_class'      => 'primary-nav__menu',
							'menu_id'         => 'primary-nav__menu',
							'theme_location'  => 'primary-nav',
							'items_wrap'      => $menu_prefix_markup . '<ul id="%1$s" class="%2$s">%3$s</ul>' . $menu_suffix_markup,
						]
					);
					?>
				</nav><!-- #site-navigation -->

			<?php endif; ?>

			<div class="site-header__utilities">

				<?php if ( has_nav_menu( 'social-links' ) ) : ?>
				<div class="site-header__social-links">
					<?php pvd_social_links(); ?>
				</div>
				<?php endif; ?>

				<div class="site-header__search-form">
				<?php get_search_form(); ?>
				</div>
			</div><!-- .site-header__utilities -->

		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
