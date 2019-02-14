<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

function register_additional_childtheme_sidebars() {
    register_sidebar(
        array(
            'name'          => __( 'Top Full', 'understrap' ),
            'id'            => 'statichero',
            'description'   => __( 'Full top widget with dynamic grid', 'understrap' ),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s dynamic-classes">',
            'after_widget'  => '</div><!-- .static-hero-widget -->',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'Footer Full', 'understrap' ),
            'id'            => 'footerfull',
            'description'   => __( 'Full sized footer widget with dynamic grid', 'understrap' ),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s dynamic-classes">',
            'after_widget'  => '</div><!-- .footer-widget -->',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'Header Navbar', 'understrap' ),
            'id'            => 'header-nav',
            'description'   => __( 'Widget in Header Menu Bar, used for Search', 'understrap' ),
            'before_widget' => '<div class="col-2 menu-search-bar">',
            'after_widget'  => '</div>',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
    

    //Home Page Widgets Start
    register_sidebar(
        array(
            'name'          => __( 'Header Page Top', 'understrap' ),
            'id'            => 'home-page-widget-top',
            'description'   => __( 'Widget Container for Main Carousel or any other Full Width Widget', 'understrap' ),
            'before_widget' => ' <div class="row" id="%1$s"><div class="col  %2$s">',
            'after_widget'  => '</div></div>',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
    
    register_sidebar(
        array(
            'name'          => __( 'Home Page Center', 'understrap' ),
            'id'            => 'home-page-widget-center',
            'description'   => __( 'Widget Container for Directory Listing or any other  Widget', 'understrap' ),
            'before_widget' => ' <div class="row center-widget-container" id="%1$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="home-page-widget-center-title">',
            'after_title'   => '</h4>',
        )
    );
}



function register_childtheme_menus() {
    register_nav_menu('primary-2', __( 'Primary Menu 2', 'child-theme-textdomain' ));
  }
  
add_action( 'init', 'register_additional_childtheme_sidebars' );
add_action( 'init', 'register_childtheme_menus' );