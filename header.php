<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">
	<!--*********************Social Header********************** -->
	<div id="social-navbar" class="social-header " itemscope itemtype="http://schema.org/WebSite">
		<?php get_template_part( 'sidebar-templates/sidebar', 'statichero' ); ?>
	</div>
	<!--***********************Logo Header***********************-->
	<div id="logo-navbar" class="logo-header container" >
		<div class="row">
			<div class="col-5">
				<!-- Your site title as branding in the menu -->
				<?php if ( ! has_custom_logo() ) { ?>

					<?php if ( is_front_page() && is_home() ) : ?>

						<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

					<?php else : ?>

						<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

					<?php endif; ?>


					<?php } else {
					the_custom_logo();
					} ?><!-- end custom logo -->
			</div>
			<div class="col">
				<?php if ( is_active_sidebar( 'home-page-banner-widget' ) ) : ?>
					<?php dynamic_sidebar( 'home-page-banner-widget' ); ?>
				<?php endif; ?>
			</div>
		</div>
		
	</div>
	<!-- Search Bar -->
	
	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" >

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark bg-primary">

		<?php if ( 'container' == $container ) : ?>
			<div class="container" >
		<?php endif; ?>
			<!-- The WordPress Menu goes here -->
			<div class="row" style="width:100%">
				
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu'
					)
				); ?>
				<?php if ( is_active_sidebar( 'header-nav' ) ) : ?>
					<?php dynamic_sidebar( 'header-nav' ); ?>
				<?php endif; ?>
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary-2',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu-2'
					)
				); ?>
			</div>
		<?php if ( 'container' == $container ) : ?>
		</div><!-- .container -->
		<?php endif; ?>

		</nav><!-- .site-navigation -->

	

	</div><!-- #wrapper-navbar end -->

	<script>
		$('#mega-menu-wrap-primary-2').addClass('col');
	</script>