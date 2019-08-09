<?php
/**
 * Created by PhpStorm.
 * User: mantran
 * Date: 8/8/19
 * Time: 11:26 AM
 */
function fujielevator_assets() {

    // enqueue style
    wp_enqueue_style(
        'fujielevator-style-custom',
        get_stylesheet_directory_uri() . '/assets/css/app.css',
        array(),
//        wp_get_theme()->get( 'Version' )
        rand(1000, 2000)
    );
    wp_enqueue_style('fujielevator-style', get_stylesheet_uri());

    wp_deregister_script('jquery');
    wp_deregister_script('jquery');
    wp_enqueue_script(
        'jquery',
        get_stylesheet_directory_uri() . '/assets/js/library/jquery.min.js',
        array(),
        '3.4.1'
    );

    wp_enqueue_script(
        'fujielevator-script',
        get_stylesheet_directory_uri() . '/assets/js/app.js',
        array('jquery'),
//        wp_get_theme()->get( 'Version' ),
        rand(1000, 2000),
        true
    );

}
add_action('wp_enqueue_scripts', 'fujielevator_assets');

/* TODO: override parent functions */
//function storefront_product_search() {}
function storefront_header_cart() {}
function storefront_primary_navigation_wrapper() {}
function storefront_primary_navigation_wrapper_close() {}
function storefront_handheld_footer_bar() {}
function storefront_product_search() {}
