<?php
/**
 * Created by PhpStorm.
 * User: mantran
 * Date: 8/15/19
 * Time: 11:48 AM
 */
add_action('wp_enqueue_scripts', 'fujielevator_assets');
function fujielevator_assets() {

    // TODO: remove when finish style and inject app.css to style.css
    wp_dequeue_style('storefront-style');
    wp_enqueue_style( 'storefront-style', get_template_directory_uri() . '/style.css' );
    wp_dequeue_style('storefront-icons');
    wp_enqueue_style( 'storefront-icons', get_template_directory_uri() . '/assets/css/base/icons.css', '', wp_get_theme()->get( 'Version' ) );
    wp_dequeue_style('storefront-woocommerce-style');
    wp_enqueue_style( 'storefront-woocommerce-style', get_template_directory_uri() . '/assets/css/woocommerce/woocommerce.css', array(), wp_get_theme()->get( 'Version' ) );
    // enqueue style
    wp_enqueue_style(
        'fujielevator-style-custom',
        get_stylesheet_directory_uri() . '/assets/css/app.css',
        array(),
//        wp_get_theme()->get( 'Version' )
        rand(1000, 2000)
    );

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
