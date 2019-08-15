<?php
/**
 * Created by PhpStorm.
 * User: mantran
 * Date: 8/8/19
 * Time: 11:26 AM
 */

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

require_once 'inc/theme-assets.php';
require_once 'inc/admin-style.php';
