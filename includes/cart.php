<?php

add_action('wp_ajax_add_cart_items', 'zsiAddCartItems');
add_action('wp_ajax_nopriv_add_cart_items', 'zsiAddCartItems');

add_action('wp_ajax_remove_cart_items', 'zsiRemoveCartItems');
add_action('wp_ajax_nopriv_remove_cart_items', 'zsiRemoveCartItems');

add_action('wp_ajax_get_cart_items', 'zsiGetCartItems');
add_action('wp_ajax_nopriv_get_cart_items', 'zsiGetCartItems');

add_action('wp_ajax_apply_coupon', 'zsiApplyCoupon');
add_action('wp_ajax_nopriv_apply_coupon', 'zsiApplyCoupon');

add_action('wp_ajax_remove_coupon', 'zsiRemoveCoupon');
add_action('wp_ajax_nopriv_remove_coupon', 'zsiRemoveCoupon');

function zsiApplyCoupon() {
	WC()->cart->apply_coupon( $_POST['coupon_code'] );
	wp_send_json(zsiFetchCart());
}

function zsiRemoveCoupon() {
	WC()->cart->remove_coupon( $_POST['coupon_code'] );
	wp_send_json(zsiFetchCart());
}

function zsiAddCartItems() {
	if(isset($_POST['id']))
		WC()->cart->add_to_cart($_POST['id']);
	wp_send_json(zsiFetchCart());	
}

function zsiRemoveCartItems() {
	$cart = WC()->instance()->cart;
	if(isset($_POST['id'])){
    	$id = $_POST['id'];
    	$cart_id = $cart->generate_cart_id($id);
    	$cart_item_id = $cart->find_product_in_cart($cart_id);
    	if($cart_item_id)
       		$cart->set_quantity($cart_item_id, $_POST['quantity']);
	}
	wp_send_json(zsiFetchCart());
}

function zsiGetCartItems() {
	wp_send_json(zsiFetchCart());
}

function zsiFetchCart(){
	$response = [ 'status' => 'success' , 'cart' => [] , 'discount' => [] ];
	foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
		$product = $cart_item['data'];
		$productDetails = new WC_Product( $cart_item['product_id'] );
		array_push($response['cart'], [ 'id' => $product->id , 'product_name' => $product->get_name(),'quantity' => $cart_item['quantity'],'price' => $product->get_price(),'thumbnail' => wp_get_attachment_url($product->get_image_id(),'thumbnail'), 'url' => get_post($product->id)->post_name ]);
	}
	$coupons = WC()->cart->get_coupons();
	$discounts = [];

	foreach ( $coupons as $code => $coupon ) {
		// Normalize coupon object/array
		if ( is_a( $coupon, 'WC_Coupon' ) ) {
			$coupon_code   = $coupon->get_code();
			$discount_type = $coupon->get_discount_type();
			$description   = $coupon->get_description();
		} else {
			$coupon_code   = $code;
			$discount_type = isset( $coupon['discount_type'] ) ? $coupon['discount_type'] : '';
			$description   = isset( $coupon['description'] ) ? $coupon['description'] : '';
		}

		// Get numeric discount amount for this coupon (fallback safe checks)
		$amount_raw = 0;
		if ( method_exists( WC()->cart, 'get_coupon_discount_amount' ) ) {
			$amount_raw = WC()->cart->get_coupon_discount_amount( $coupon_code );
		} elseif ( isset( WC()->cart->applied_coupons ) && in_array( $coupon_code, WC()->cart->applied_coupons, true ) ) {
			// best-effort fallback
			$amount_raw = isset( WC()->cart->discount_cart ) ? floatval( WC()->cart->discount_cart ) : 0;
		}

		$discounts[] = [
			'code'        => $coupon_code,
			'description' => $description,
			'type'        => $discount_type,
			'amount_raw'  => floatval( $amount_raw ),
			'amount'      => wc_price( $amount_raw ),
		];
	}

	$response['discount'] = $discounts;
	return $response;
}