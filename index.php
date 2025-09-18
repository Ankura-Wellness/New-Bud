<?php
/**
 *  Master template file
 *  @2ndInning
 */

get_header();
// if(get_page_by_path( str_replace( home_url(), '', home_url( $wp->request ) ) )){
    echo apply_filters('the_content', get_page_by_path( str_replace( home_url(), '', home_url( $wp->request ) ) )->post_content);
// } else if( str_contains( $wp->request, 'checkout/order-received' )){
//     get_template_part( 'woocommerce/checkout/thankyou', null , [ 'order' => explode( '/', $wp->request )[2] ] );
// }
get_footer();
?>