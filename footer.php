<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<?php if(has_nav_menu('footer')) {?>
	<nav class="navbar navbar-expand-md footer-menu">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
						<span class="navbar-toggler-icon"></span>
					</button>

	<!-- The WordPress Menu goes here -->

	<?php wp_nav_menu(
		array(
			'theme_location'  => 'footer',
			'container_class' => 'collapse navbar-collapse',
			'container_id'    => 'navbarNavDropdown',
			'menu_class'      => 'navbar-nav mr-auto',
			'fallback_cb'     => '',
			'menu_id'         => 'main-menu',
			'depth'           => 2,
			'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
		)
	); ?>
	</nav>
<?php }  ?>
<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<div class="footer-widget footer-menu" style="min-height:30px"> </div>
<div class="wrapper footer" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">
	
	<div class="row text-center text-xs-center text-sm-left text-md-left footer-vertical-menu-container">
		<div class="col-xs-12 col-sm-1 col-md-1 ">
			<ul class="list-unstyled quick-links">
				<li><a href="list-of-companies/"><i class="fa fa-angle-double-right"></i>A-Z Companies</a></li>
				<li><a href="login"><i class="fa fa-angle-double-right"></i>Sign in / Register</a></li>
				<li><a href="contact-us"><i class="fa fa-angle-double-right"></i>Contact us</a></li>
				<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Useful links</a></li>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-1 col-md-1">
			<ul class="list-unstyled quick-links">
				<li><a href="add-product"><i class="fa fa-angle-double-right"></i>Add a product</a></li>
				<li><a href="list-of-companies/?wpbdp_view=submit_listing/"><i class="fa fa-angle-double-right"></i>Add a company</a></li>
				<li><a href="subscription-package-new/#1513719599597-0d8fdef7-cb3b/"><i class="fa fa-angle-double-right"></i>Advertise</a></li>
				<li><a href="mailto:info@masterbuildafrica.com"><i class="fa fa-angle-double-right"></i>Subscribe to Newsletter</a></li>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-1 col-md-1">
			<ul class="list-unstyled quick-links">
				<li><a href="aboutus"><i class="fa fa-angle-double-right"></i>About us</a></li>
				<li><a href="privacy-statement/"><i class="fa fa-angle-double-right"></i>Privacy policy</a></li>
				<li><a href="terms-of-use/"><i class="fa fa-angle-double-right"></i>Terms & Conditions</a></li> 
			</ul>
		</div>
		<div class="col">
			<div class="image-holder social-icons-footer">
				<span class="Centerer">
				</span>
				<div class="Centered">
						<ul class="list-unstyled list-inline social text-center">
							<li class="list-inline-item"><a href="https://www.facebook.com/masterbuildafrica"><i class="fa fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href="https://twitter.com/MBuildAfrica"><i class="fa fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="https://www.instagram.com/masterbuildafrica/"><i class="fa fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
							<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
						</ul>
				</div>
		</div>
					
		</div>
	</div>
	<div class="row">

		<div class="col-md-12">

			<footer class="site-footer" id="colophon">

				<div class="site-info">

						Copyright © 2019 Master Build Africa. 

				</div><!-- .site-info -->

			</footer><!-- #colophon -->

		</div><!--col end -->

	</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

