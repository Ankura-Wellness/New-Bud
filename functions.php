<?php

require_once( __DIR__ . '/includes/cart.php');
require_once( __DIR__ . '/includes/checkout.php');

////////////////////////////////////////////////////////////////////////////

function secondInning_enqueue_scripts(){
	// , deps, media
	// wp_enqueue_style( 'style', get_stylesheet_uri());
	// wp_enqueue_style( 'main', get_template_directory_uri().'/css/main.css' );
	// wp_enqueue_script( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' );
	// wp_enqueue_style( 'bootstrap-css' );
	wp_enqueue_script( 'angularjs',get_template_directory_uri().'/assets/node_modules/angular/angular.min.js' );
	wp_enqueue_script( 'webpack',get_template_directory_uri().'/assets/dist/main.js' , [] , '8.4.2' );
	wp_enqueue_script( 'lightslider',get_template_directory_uri().'/assets/lib/lightslider.min.js' , [] , '8.1.4' );
	wp_enqueue_script( 'lightgallery',get_template_directory_uri().'/assets/lib/lightgallery.js' );

	wp_enqueue_style( 'lightsliderStyle', get_template_directory_uri().'/assets/lib/lightslider.min.css' );
	wp_enqueue_style( 'lightgalleryStyle', get_template_directory_uri().'/assets/lib/lightgallery.css' );
}

add_action( 'wp_enqueue_scripts','secondInning_enqueue_scripts' );


function register_my_menus() {
	register_nav_menus(
	  array(
		'zsi_header_menu' => esc_html__( 'Header Menu','zantyesSecondInning' ),
		'zsi_legal_menu' => esc_html__( 'Legal Menu','zantyesSecondInning' ),
		'zsi_footer_menu' => esc_html__( 'Footer Menu','zantyesSecondInning' )
	   )
	);
}

function zsi_get_menu_id($location){
	return empty(get_nav_menu_locations()[$location]) ? '' : get_nav_menu_locations()[$location] ;
}

function zsi_get_menu($location){
	$newMenu = [];
	if (zsi_get_menu_id($location) != ''){
		foreach( wp_get_nav_menu_items(zsi_get_menu_id($location)) as $menu ){
			if($menu->menu_item_parent == 0){
				if(empty($newMenu[$menu->ID]))
					$newMenu[$menu->ID] = [ 'menu' => $menu , 'subMenu' => [] ];
			} else {
				if(empty($newMenu[$menu->menu_item_parent]))
					$newMenu[$menu->menu_item_parent] = [ 'menu' => null , 'subMenu' => [$menu] ];
				else
					array_push($newMenu[$menu->menu_item_parent]['subMenu'],$menu);
			}
		}
	}
	return $newMenu;
}

function zsi_process_payment(){
	try {

		wc_maybe_define_constant( 'WOOCOMMERCE_CHECKOUT', true );
		wc_set_time_limit( 0 );

		do_action( 'woocommerce_before_checkout_process' );

		if ( WC()->cart->is_empty() ) {
			throw new Exception( $expiry_message );
		}

		do_action( 'woocommerce_checkout_process' );

		if ( empty( $posted_data['woocommerce_checkout_update_totals'] ) && 0 === wc_notice_count( 'error' ) ) {
			$this->process_customer( $posted_data );
			$order_id = $this->create_order( $posted_data );
			$order    = wc_get_order( $order_id );

			if ( is_wp_error( $order_id ) ) {
				throw new Exception( $order_id->get_error_message() );
			}

			if ( ! $order ) {
				throw new Exception( __( 'Unable to create order.', 'woocommerce' ) );
			}

			do_action( 'woocommerce_checkout_order_processed', $order_id, $posted_data, $order );

			/**
			 * Note that woocommerce_cart_needs_payment is only used in
			 * WC_Checkout::process_checkout() to keep backwards compatibility.
			 * Use woocommerce_order_needs_payment instead.
			 *
			 * Note that at this point you can't rely on the Cart Object anymore,
			 * since it could be empty see:
			 * https://github.com/woocommerce/woocommerce/issues/24631
			 */
			// if ( apply_filters( 'woocommerce_cart_needs_payment', $order->needs_payment(), WC()->cart ) ) {
				$this->process_order_payment( $order_id, $posted_data['payment_method'] );

		}
	} catch ( Exception $e ) {
		wc_add_notice( $e->getMessage(), 'error' );
	}
	$this->send_ajax_failure_response();
}

add_action( 'init', 'register_my_menus' );


function zsi_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'zsi_add_woocommerce_support' );

/////////////////////////////////////////////////////////////////////////////////////

// add_action('wp_ajax_add_cart_items', 'zsiAddCartItems');
// add_action('wp_ajax_nopriv_add_cart_items', 'zsiAddCartItems');

// add_action('wp_ajax_remove_cart_items', 'zsiRemoveCartItems');
// add_action('wp_ajax_nopriv_remove_cart_items', 'zsiRemoveCartItems');

// add_action('wp_ajax_get_cart_items', 'zsiGetCartItems');
// add_action('wp_ajax_nopriv_get_cart_items', 'zsiGetCartItems');

// function zsiAddCartItems() {
// 	if(isset($_POST['id'])){
// 		WC()->cart->add_to_cart($_POST['id']);
// 	} 
// 		wp_send_json(zsiFetchCart());	
// }

// function zsiRemoveCartItems() {
// 	$cart = WC()->instance()->cart;
// 	if(isset($_POST['id'])){
//     	$id = $_POST['id'];
//     	$cart_id = $cart->generate_cart_id($id);
//     	$cart_item_id = $cart->find_product_in_cart($cart_id);
//     	if($cart_item_id)
//        		$cart->set_quantity($cart_item_id, $_POST['quantity']);
// 	}
// 	wp_send_json(zsiFetchCart());
// }

// function zsiGetCartItems() {
// 	wp_send_json(zsiFetchCart());
// }

// function zsiFetchCart(){
// 	$response = [ 'status' => 'success' , 'cart' => [] ];
// 	foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
// 		$product = $cart_item['data'];
// 		$productDetails = new WC_Product( $cart_item['product_id'] );
// 		array_push($response['cart'], [ 'id' => $product->id , 'product_name' => $product->get_name(),'quantity' => $cart_item['quantity'],'price' => $product->get_price(),'thumbnail' => wp_get_attachment_url($product->get_image_id(),'thumbnail') ]);
// 	}
// 	return $response;
// }