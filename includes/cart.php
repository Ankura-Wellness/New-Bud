<?php

add_action('wp_ajax_add_cart_items', 'zsiAddCartItems');
add_action('wp_ajax_nopriv_add_cart_items', 'zsiAddCartItems');

add_action('wp_ajax_remove_cart_items', 'zsiRemoveCartItems');
add_action('wp_ajax_nopriv_remove_cart_items', 'zsiRemoveCartItems');

add_action('wp_ajax_get_cart_items', 'zsiGetCartItems');
add_action('wp_ajax_nopriv_get_cart_items', 'zsiGetCartItems');

function zsiAddCartItems() {
	if(isset($_POST['id'])){
		WC()->cart->add_to_cart($_POST['id']);
	} 
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
	$response = [ 'status' => 'success' , 'cart' => [] ];
	foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
		$product = $cart_item['data'];
		$productDetails = new WC_Product( $cart_item['product_id'] );
		array_push($response['cart'], [ 'id' => $product->id , 'product_name' => $product->get_name(),'quantity' => $cart_item['quantity'],'price' => $product->get_price(),'thumbnail' => wp_get_attachment_url($product->get_image_id(),'thumbnail') ]);
	}
	return $response;
}
