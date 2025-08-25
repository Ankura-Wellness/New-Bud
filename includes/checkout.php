<?php

add_action('wp_ajax_zsi_sign_in', 'zsiSignIn');
add_action('wp_ajax_nopriv_zsi_sign_in', 'zsiSignIn');

add_action('wp_ajax_zsi_initiate_order', 'zsiInitiateOrder');
add_action('wp_ajax_nopriv_zsi_initiate_order', 'zsiInitiateOrder');

add_action('wp_ajax_zsi_get_shipping_options', 'zsiGetShippingOptions');
add_action('wp_ajax_nopriv_zsi_get_shipping_options', 'zsiGetShippingOptions');

add_action('wp_ajax_zsi_initiate_payment', 'zsiInitiatePayment');
add_action('wp_ajax_nopriv_zsi_initiate_payment', 'zsiInitiatePayment');

function zsiSignIn(){
	$response = [ 'status' => 'success' , 'cart' => [] ];
	return wp_send_json($response);
}

function zsiGetShippingOptions() {
	define( 'SHIPROCKET_WC_RATE_URL', 'https://apiv2.shiprocket.in/v1/external/woocommerce/courier/serviceability' );
	$customer_id = apply_filters( 'woocommerce_checkout_customer_id', get_current_user_id() );
	$packages = WC()->cart->get_shipping_packages();

	$data = get_formatted_data( $packages[0] );

	$response = [ 'status' => 'failure' , 'message' => $data];
	// 
	$rResponse = json_decode(wp_remote_get(
		SHIPROCKET_WC_RATE_URL . '?' . http_build_query( $response['message'] ),
		array(
			'headers' => array(
				'authorization' => 'ACCESS_TOKEN:' . SOURCE_WC_APP,
			),
			'timeout' => 20,
		)
	)['body']);
	// $object = 

	// 'data' => $rResponse ,
	$response['message'] = [ 'response' => process_result($rResponse) , 'customer_id' => $customer_id ];
	return wp_send_json($response);
}

function get_formatted_data( $package ) {

	$l = 0;
	$b = 0;
	$h = 0;
	$w = 0;

	foreach ( $package['contents'] as $key => $line_item ) {
		$quantity = $line_item['quantity'];
		if(!empty($line_item['data']->get_weight())) {
			$w += $line_item['data']->get_weight() * $quantity;
		}
		$temp     = array( $line_item['data']->get_length(), $line_item['data']->get_width(), $line_item['data']->get_height() );
		sort( $temp );
		$h += empty( $temp[0] ) || ! is_numeric( $temp[0] ) ? 0 : $temp[0];
		$l  = max( $l, empty( $temp[1] ) || ! is_numeric( $temp[1] ) ? 0 : $temp[1] );
		$b  = max( $b, empty( $temp[2] ) || ! is_numeric( $temp[2] ) ? 0 : $temp[2] );
	}

	// Convert weight into Kgs.
	$units = get_option( 'woocommerce_weight_unit' );
	if ( ! empty( get_option( 'woocommerce_weight_unit' ) ) && 'grams' === get_option( 'woocommerce_weight_unit' ) ) {
		$weight /= 1000;
	}

	// Convert dimensions into cm.
	if ( ! empty( get_option( 'woocommerce_dimension_unit' ) ) && 'inches' === get_option( 'woocommerce_dimension_unit' ) ) {
		$l *= 2.54;
		$b *= 2.54;
		$h *= 2.54;
	}

	$data_to_send = array(
		'length'         => $l,
		'width'          => $b,
		'height'         => $h,
		'weight'         => $w,
		'declared_value' => $package['cart_subtotal'],
	);

	$chosen_payment_method = WC()->session->get( 'chosen_payment_method' );

	$data_to_send['cod'] = ( 'cod' !== $chosen_payment_method ) ? '0' : '1';
	$data_to_send['currency'] = get_woocommerce_currency();
	$data_to_send['declared_value'] = $package['cart_subtotal'];
	$data_to_send['delivery_postcode'] = '403001';
	$data_to_send['reference_id'] = uniqid();
	$data_to_send['merchant_id'] = '4d5459304d7a4930';

	WC()->session->set( 'ph_shiprocket_rates_unique_id', $data_to_send['reference_id'] );
	return $data_to_send;
}

function process_result( $body ) {
	$found_rates = [];
	if ( ( 200 === $body->status || '200' === $body->status ) && ! empty( $body->data ) ) {
		$json_decoded_data = $body->data;

		
		$available_courier_companies = $json_decoded_data->available_courier_companies;
		if ( is_array( $available_courier_companies ) ) {
			$limit = 5;
			foreach ( $available_courier_companies as $key => $couriers ) {
				if ( empty( $limit ) ) {
					break;
				}
				array_push($found_rates,prepare_rate($couriers));
				$limit--;
			}
		}
	}
	return $found_rates;
}

function prepare_rate( $shipping_method_detail ) {
	$plugin_configuration = Shiprocket_Woocommerce_Shipping::shiprocket_plugin_configuration();
	$rate_name = isset( $shipping_method_detail->courier_name ) ? $shipping_method_detail->courier_name : '';

	if ( isset( $shipping_method_detail->carrier_id ) && ! empty( $shipping_method_detail->etd ) && in_array( $shipping_method_detail->carrier_id, array( 'fallback_rate', 'flat_rate' ), true ) ) {
		$rate_name .= $shipping_method_detail->etd;
	} elseif ( ! empty( $shipping_method_detail->etd ) ) {
		$rate_name .= ' ( Delivery By ' . $shipping_method_detail->etd . ')';
	}

	if ( isset( $shipping_method_detail->courier_company_id ) ) {
		if ( isset( $shipping_method_detail->cod ) && $shipping_method_detail->cod ) {
			$rate_id = $plugin_configuration['id'] . '_cod:' . $shipping_method_detail->courier_company_id;
		} else {
			$rate_id = $plugin_configuration['id'] . '_prepaid:' . $shipping_method_detail->courier_company_id;
		}
	}

	$rate_cost = $shipping_method_detail->rate;

	return array(
		'id'        => $rate_id ?? 1,
		'label'     => $rate_name,
		'cost'      => $rate_cost,
		// 'taxes'     => ! empty( self::$tax_calculation_mode ) ? '' : false,
		// 'calc_tax'  => self::$tax_calculation_mode,
		'meta_data' => array(
			'ph_shiprocket_shipping_rates' => array(
				'courier_company_id'      => $shipping_method_detail->courier_company_id ?? 0,
				'uniqueId'                => WC()->session->get( 'ph_shiprocket_rates_unique_id' ),
				'serviceId'               => $shipping_method_detail->courier_name ?? '',
				'carrierId'               => $shipping_method_detail->courier_company_id ?? 0,
				'shiprocketTransactionId' => null,
			),
		),
	);
}

// 	// WP_error while getting the response.
// 	if ( is_wp_error( $response ) ) {
// 		$error_string = $response->get_error_message();
// 		self::debug( 'Wordpreess Error: <a href="#" class="debug_reveal">Reveal</a><pre class="debug_info" style="background:#EEE;border:1px solid #DDD;padding:5px;">' . __( 'WP Error : ' ) . wp_json_encode( $error_string ) . '</pre>' );
// 		return wp_send_json($error_string);;
// 	}

// 	// Successful response.
// 	if ( 200 === $response['response']['code'] || '200' === $response['response']['code'] ) {
// 		$body = $response['body'];
// 		$body = json_decode( $body );
// 		return wp_send_json($body);
// 	} else {
// 		self::debug( 'Shiprocket Error: <a href="#" class="debug_reveal">Reveal</a><pre class="debug_info" style="background:#EEE;border:1px solid #DDD;padding:5px;">' . __( 'Error Code : ' ) . wp_json_encode( $response['response']['code'] ) . '<br/>' . __( 'Error Message : ' ) . wp_json_encode( $response['response']['message'] ) . '</pre>' );
// 		return wp_send_json(false);;
// 	}

// }

function zsiInitiatePayment(){
	$response = [ 'status' => 'failure' , 'message' => ''];
	try{
		if(wp_verify_nonce($_POST['woocommerce_process_checkout_nonce'],'zsi_process_payment')){
			$customer_id = apply_filters( 'woocommerce_checkout_customer_id', get_current_user_id() );
			$response['message'] = WC()->cart->get_shipping_packages();
			// $order_id = absint( WC()->session->get( 'order_awaiting_payment' ) );
			// $response['message'] = get_option( 'woocommerce_shiprocket_woocommerce_shipping_settings' );
			$response['status'] = 'success';
		} else {
			$response['message'] = 'Session Expired, we will need to reload the session.';
		}
	} catch(Exception $ex){
		return wp_send_json($ex);	
	}
	return wp_send_json($response);
}

function zsiInitiateOrder(){
	$response = [ 'status' => 'failure' , 'message' => '' ];
 
	$fields_prefix = ['shipping' => true,'billing'  => true];
	$data = [];
	foreach( $_POST as $key => $value){
		if( isset($fields_prefix[explode( '_',$key )[0]]) ){
			$data[$key] = $value;
		}
	}
	
	try{
		if(wp_verify_nonce($_POST['woocommerce_process_checkout_nonce'],'zsi_process_payment')){
			$order_id = absint( WC()->session->get( 'order_awaiting_payment' ) );
			$cart_hash = WC()->cart->get_cart_hash();
			$available_gateways = WC()->payment_gateways->get_available_payment_gateways();
			$order = $order_id ? wc_get_order( $order_id ) : null;
			
			if ( $order && $order->has_cart_hash( $cart_hash ) && $order->has_status( array( 'pending', 'failed' ) ) ) {				
				do_action( 'woocommerce_resume_order', $order_id );
				$order->remove_order_items();
			} else {
				$order = new WC_Order();
			}

			$shipping_fields = ['shipping_method' => true,'shipping_total'  => true,'shipping_tax'    => true];
			
			foreach ( $data as $key => $value ) {
				if ( is_callable( array( $order, "set_{$key}" ) ) ) {
					$order->{"set_{$key}"}( $value );
				} elseif ( isset( $fields_prefix[ current( explode( '_', $key ) ) ] ) ) {
					if ( ! isset( $shipping_fields[ $key ] ) ) {
						$order->update_meta_data( '_' . $key, $value );
					}
				}
			}
			
			// $order->hold_applied_coupons( $data['billing_email'] );
			$order->set_created_via( 'checkout' );
			$order->set_cart_hash( $cart_hash );
			
			$order->set_customer_id( apply_filters( 'woocommerce_checkout_customer_id', get_current_user_id() ) );
			$order->set_currency( get_woocommerce_currency() );
			$order->set_prices_include_tax( 'yes' === get_option( 'woocommerce_prices_include_tax' ) );
			$order->set_customer_ip_address( WC_Geolocation::get_ip_address() );
			$order->set_customer_user_agent( wc_get_user_agent() );
			$order->set_customer_note( isset( $data['order_comments'] ) ? $data['order_comments'] : '' );
			$order->set_payment_method( isset( $available_gateways[ $data['payment_method'] ] ) ? $available_gateways[ $data['payment_method'] ] : 				$data['payment_method'] );
			
			$order_vat_exempt = WC()->cart->get_customer()->get_is_vat_exempt() ? 'yes' : 'no';
			$order->add_meta_data( 'is_vat_exempt', $order_vat_exempt, true );
			$order->set_shipping_total( WC()->cart->get_shipping_total() );
			$order->set_discount_total( WC()->cart->get_discount_total() );
			$order->set_discount_tax( WC()->cart->get_discount_tax() );
			$order->set_cart_tax( WC()->cart->get_cart_contents_tax() + WC()->cart->get_fee_tax() );
			$order->set_shipping_tax( WC()->cart->get_shipping_tax() );
			$order->set_total( WC()->cart->get_total( 'edit' ) );
				
			foreach ( WC()->cart->get_cart() as $cart_item_key => $values ) {
				$item = apply_filters( 'woocommerce_checkout_create_order_line_item_object', new WC_Order_Item_Product(), $cart_item_key, $values, $order );
				$product = $values['data'];
				$item->set_props([ 'quantity' => $values['quantity'],'variation' => $values['variation'],'subtotal' => $values['line_subtotal'],'total' => $values['line_total'],'subtotal_tax' => $values['line_subtotal_tax'],'total_tax' => $values['line_tax'],'taxes' => $values['line_tax_data']]);

				if( $product )
					$item->set_props(['name' => $product->get_name(),'tax_class' => $product->get_tax_class(),'product_id' => $product->is_type( 'variation' ) ? $product->get_parent_id() : $product->get_id(),'variation_id' => $product->is_type( 'variation' ) ? $product->get_id() : 0]);

				$item->set_backorder_meta();
				do_action( 'woocommerce_checkout_create_order_line_item', $item, $cart_item_key, $values, $order );
				$order->add_item( $item );
			}
			
			create_order_shipping_lines( $order,WC()->session->get( 'chosen_shipping_methods' ),WC()->cart->get_shipping_packages() );
				// $this->create_order_tax_lines( $order, WC()->cart );
				// $this->create_order_coupon_lines( $order, WC()->cart );
			
			do_action( 'woocommerce_checkout_create_order', $order, $data );
			$order_id = $order->save();
			do_action( 'woocommerce_checkout_update_order_meta', $order_id, $data );
			do_action( 'woocommerce_checkout_order_created', $order );
		}
	} catch(Exception $ex){
		return wp_send_json($ex);	
	}
	return wp_send_json($response);
}

function create_order_shipping_lines( &$order,$chosen_shipping_methods,$packages ){
	foreach ( $packages as $package_key => $package ) {
		if ( isset( $chosen_shipping_methods[ $package_key ], $package['rates'][ $chosen_shipping_methods[ $package_key ] ] ) ) {
			$shipping_rate            = $package['rates'][ $chosen_shipping_methods[ $package_key ] ];
			$item                     = new WC_Order_Item_Shipping();
			$item->legacy_package_key = $package_key; // @deprecated 4.4.0 For legacy actions.
			$item->set_props(
				array(
					'method_title' => $shipping_rate->label,
					'method_id'    => $shipping_rate->method_id,
					'instance_id'  => $shipping_rate->instance_id,
					'total'        => wc_format_decimal( $shipping_rate->cost ),
					'taxes'        => array(
						'total' => $shipping_rate->taxes,
					),
				)
			);

			foreach ( $shipping_rate->get_meta_data() as $key => $value ) {
				$item->add_meta_data( $key, $value, true );
			}

			/**
			 * Action hook to adjust item before save.
			 *
			 * @since 3.0.0
			 */
			do_action( 'woocommerce_checkout_create_order_shipping_item', $item, $package_key, $package, $order );

			// Add item to order and save.
			$order->add_item( $item );
		}
	}
}