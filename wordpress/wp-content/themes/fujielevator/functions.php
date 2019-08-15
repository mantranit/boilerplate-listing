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

function storefront_post_meta() {
    if ( 'post' !== get_post_type() ) {
        return;
    }

    // Posted on.
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

    $time_string = sprintf(
        $time_string,
        esc_attr( get_the_date( 'c' ) ),
        esc_html( get_the_date() ),
        esc_attr( get_the_modified_date( 'c' ) ),
        esc_html( get_the_modified_date() )
    );

    $output_time_string = sprintf( '<a href="%1$s" rel="bookmark">%2$s</a>', esc_url( get_permalink() ), $time_string );

    echo wp_kses(
        sprintf( '%1$s', $output_time_string ), array(
            'span' => array(
                'class' => array(),
            ),
            'time' => array(
                'datetime' => array(),
                'class'    => array(),
            ),
        )
    );
}

function storefront_post_taxonomy() {}

function storefront_post_nav() {
    $args = array(
        'next_text' => 'next',
        'prev_text' => 'back',
    );
    the_post_navigation( $args );
}
/* end override parent functions */

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
