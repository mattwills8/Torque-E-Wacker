<?php

require_once( get_stylesheet_directory() . '/includes/e-wacker-child-nav-menus-class.php');
require_once( get_stylesheet_directory() . '/includes/widgets/e-wacker-child-widgets-class.php');
require_once( get_stylesheet_directory() . '/includes/acf/e-wacker-child-acf-class.php');

/**
 * Child Theme Nav Menus
 */

 if ( class_exists( 'E_Wacker_Nav_Menus' ) ) {
   new E_Wacker_Nav_Menus();
 }

/**
 * Child Theme Widgets
 */

if ( class_exists( 'E_Wacker_Widgets' ) ) {
  new E_Wacker_Widgets();
}

/**
 * Child Theme ACF
 */

 if ( class_exists( 'E_Wacker_ACF' ) ) {
   new E_Wacker_ACF();
 }

/**
 * The excerpt
 */
function wacker_excerpt_more($more) {
  global $post;
	return '...';
}
add_filter('excerpt_more', 'wacker_excerpt_more');


// enqueue child styles after parent styles, both style.css and main.css
// so child styles always get priority
add_action( 'wp_enqueue_scripts', 'torque_enqueue_child_styles' );
function torque_enqueue_child_styles() {

    $parent_style = 'parent-styles';
    $parent_main_style = 'torque-theme-styles';

    // make sure parent styles enqueued first
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( $parent_main_style, get_template_directory_uri() . '/bundles/main.css' );

    // enqueue child style
    wp_enqueue_style( 'e-wacker-child-styles',
        get_stylesheet_directory_uri() . '/bundles/main.css',
        array( $parent_style, $parent_main_style ),
        wp_get_theme()->get('Version')
    );
}

// enqueue child scripts after parent script
add_action( 'wp_enqueue_scripts', 'torque_enqueue_child_scripts');
function torque_enqueue_child_scripts() {

    wp_enqueue_script( 'e-wacker-child-script',
        get_stylesheet_directory_uri() . '/bundles/bundle.js',
        array( 'torque-theme-scripts' ), // depends on parent script
        wp_get_theme()->get('Version'),
        true       // put it in the footer
    );
}

?>
