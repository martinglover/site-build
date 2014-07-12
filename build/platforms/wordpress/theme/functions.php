<?php
function customThemeSetup()
{
    // Enable nav locations
    register_nav_menus(array(
        'primary' => __('Main'),
    ));

    // Enable post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Enable session handling
//    add_action('init', 'myStartSession', 1);
//    add_action('wp_logout', 'myEndSession');
//    add_action('wp_login', 'myEndSession');

}
add_action( 'after_setup_theme', 'customThemeSetup' );

// Load custom css files
if (!function_exists("customStyles")) {
    function trustinnsStyles() {
        // Styles
        // Custom Stylesheet
        wp_register_style(
            'custom-style',
            get_stylesheet_directory_uri() . '/style.css',
            array(),
            '1.0',
            'all'
        );

        wp_enqueue_style('custom-style');

        // Scripts
        //Modernizr
        wp_register_script(
            'custom-modernizr',
            get_stylesheet_directory_uri() . '/js/modernizr.js',
            array(),
            '1.0',
            'all'
        );
        // jQuery
        wp_register_script(
            'custom-jquery',
            'http://code.jquery.com/jquery-1.11.0.min.js',
            array(),
            '1.0',
            'all'
        );
        // Custom Script
        wp_register_script(
            'custom-script',
            get_stylesheet_directory_uri() . '/js/script.js',
            array(
                'custom-jquery',
            ),
            '1.0',
            'all'
        );

        wp_enqueue_script('custom-jquery');
        wp_enqueue_script('custom-modernizr');
        wp_enqueue_script('custom-script');
    }
}
add_action( 'wp_enqueue_scripts', 'customStyles' );

// Add query string variables
function customQueryVars( $vars ){
    $vars[] = 'id';
    $vars[] = 'region';
    $vars[] = 'search-type';

    return $vars;
}
add_filter( 'query_vars', 'customQueryVars' );

// Session handling
function customStartSession()
{
    if(!session_id()) {
        session_start();
    }
}
function customEndSession()
{
    session_destroy ();
}

// Include page updates
require_once 'inc/page.php';
add_filter('rwmb_meta_boxes', 'initPageUpdates');

// Init widgets
//require_once 'inc/widgets.php';
//function customWidgets() {
//    register_widget('widgetName');
//    register_sidebar(array(
//        'id' => 'widgetId',
//        'name' => 'widgetFieldName',
//        'before_widget' => '<div id="%1$s" class="widgetClass %2$s">',
//        'after_widget' => '</div>',
//        'before_title' => '',
//        'after_title' => '',
//    ));
//
//}
//add_action('widgets_init', 'customWidgets');
