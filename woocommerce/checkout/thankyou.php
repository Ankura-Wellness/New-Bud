<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.1.0
 *
 * @var WC_Order $order
 */

defined( 'ABSPATH' ) || exit;
$order = new WC_Order($args['order']);
print_r($order);
?>

<div id="zsiThankyou" class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center w-100">
                Order Received
            </h1>
            <p class="text-center">
                Thank you for your order. Your order number is #<strong><?php echo esc_html( $order->get_order_number() ); ?></strong>.
            </p>
        </div>
        <div class="col-8">
            <h6>
                Shipping To :
            </h6>
            <p>
                <?php echo esc_html( $order->get_shipping_first_name() . ' ' . $order->get_shipping_last_name() ) ?>
            </p>
        </div>
    </div>
</div>


