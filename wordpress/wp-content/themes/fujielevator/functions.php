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

/* override parent functions */
function storefront_header_cart() {}
function storefront_primary_navigation_wrapper() {}
function storefront_primary_navigation_wrapper_close() {}
function storefront_handheld_footer_bar() {}


function storefront_product_search() {
    if ( storefront_is_woocommerce_activated() ) {
        ?>
        <input type="checkbox" id="toggleSearchBar" name="toggleSearchBar">
        <label for="toggleSearchBar" class="toggleSearchBar-label"></label>
        <div class="site-search">
            <?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
        </div>
        <?php
    }
}

add_filter( 'get_product_search_form' , 'woo_custom_product_searchform' );
function woo_custom_product_searchform( $form ) {

    $form = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">
		<div class="search-product">
			<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'Search', 'fujielevator' ) . '" />
			<input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search', 'fujielevator' ) .'" />
			<input type="hidden" name="post_type" value="product" />
		</div>
	</form>';
    return $form;

}
