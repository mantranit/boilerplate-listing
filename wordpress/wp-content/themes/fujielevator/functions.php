<?php
/**
 * Created by PhpStorm.
 * User: mantran
 * Date: 8/8/19
 * Time: 11:26 AM
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

/* override parent functions */
function storefront_header_cart() {}
function storefront_primary_navigation_wrapper() {}
function storefront_primary_navigation_wrapper_close() {}
function storefront_handheld_footer_bar() {}
function storefront_credit() {
    ?>
    <div class="site-info">
        <div class="links">
        <?php echo get_the_privacy_policy_link(); ?>
        </div>
        <?php echo esc_html( apply_filters( 'storefront_copyright_text', $content = '&copy; 2019. ' . get_bloginfo( 'name' ) ) ); ?>
    </div><!-- .site-info -->
    <?php
}

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

