<?php
/**
 * Template Name: BlueStrap Home
 *
 * Custom Home Page Template with Widget Areas for Slider and Direcotory Listings.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package bluestrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="container-fluid">

<?php 
    /**Adding Widget Container for Main Carousel or any other Full Width Widget */
?>
<?php if ( is_active_sidebar( 'home-page-widget-top' ) ) : ?>
    <?php dynamic_sidebar( 'home-page-widget-top' ); ?>
<?php endif; ?>
</div>
<div class="<?php echo esc_attr( $container ); ?>">
        <?php if ( is_active_sidebar( 'home-page-widget-center' ) ) : ?>
            <?php dynamic_sidebar( 'home-page-widget-center' ); ?>
        <?php endif; ?>
</div>
<?php
get_footer();
?>
