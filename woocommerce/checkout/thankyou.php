<?php
    /**
     *  Order Received UI template file
     *  @2ndInning
     */

defined( 'ABSPATH' ) || exit;
$order = new WC_Order($args['order']);
// print_r($order);
?>

<div class="container" id="bnCheckoutThankYou">
    <div class="row my-5">
        <div class="col-12 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <img src="https://ankurah.com/wp-content/uploads/2025/09/front_label_top_it2_2.png" class="mb-3" style="height: 150px" alt="">
            <div class="d-flex align-items-center mb-4">
                <h1 class="text-center heroFont text-uppercase fw-bold primaryColor mb-0 ms-3">
				    Order Confirmed
			    </h1>
            </div>
            
            <h3 class="text-center" style="font-size:20px;">
                Thank you , <?php echo esc_html($order->get_shipping_first_name()); ?>
            </h3>
			<p class="secondaryFont mx-2 text-center">
				Our pride lies in providing our customers with only the best produce and <br> 
                <strong>
                    Appreciate you for being part of our motive
                </strong>.
			</p>
        </div>
        <div class="col-12 col-md-6 row justify-content-center" id="nbInfoArea" style="border-image: url(<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/woocommerce/thankyou/border.png' ); ?>) round 20%">
            <div class="col-md-3 primaryFont">
                <span class="fw-bold tex">
                    Order
                </span> <br>
                <p>
                    # <?php print_r($order->id); ?>
                </p>
            </div>
            <div class="col-md-3 primaryFont">
                <span class="fw-bold">
                    Date
                </span> <br>
                <p>
                    <?php print_r($order->get_date_created()->format('Y-m-d H:i')); ?>
                </p>
            </div>
            <div class="col-md-3 primaryFont">
                <span class="fw-bold">
                    Total
                </span> <br>
                <p>
                    <?php print_r($order->total); ?>
                </p>
            </div>
            <div class="col-12 col-md-8 my-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php foreach( $order->get_items()  as $item_id => $item ){
                            print_r('<tr>
                                        <th scope="row">'.$item->get_name().' x <small>('.$item->get_quantity().')</small></th>
                                        <td>₹'.$item->get_total().'</td>
                                    </tr>');
                        }

                        ?>
                        
                        <tr>
                            <th scope="row">
                                
                            </th>
                            <td>
                                <b>
                                    Total: ₹<?php print_r($order->total); ?>
                                </b>
                            </td>
                        </tr>        
                    </tbody>
                </table>
            </div>
            <div class="col-12 row justify-content-center" id="nbAddress">
                <div class="col-6">
                    <h5 class="heroFont text-center">
                        Shipping address
                    </h5>
                    <p class="primaryFont text-center">
                        <span class="fw-bold fs-6 fst-italic">
                            <?php print_r($order->get_shipping_first_name()); ?> <?php print_r($order->get_shipping_last_name()); ?>
                        </span> <br>
                        <?php print_r($order->get_shipping_address_1()); ?> <br>
                        <?php print_r($order->get_shipping_address_2()); ?> <br>
                        <strong>
                            <?php print_r($order->get_shipping_city()); ?>, <?php print_r($order->get_shipping_state()); ?> <?php print_r($order->get_shipping_postcode()); ?>
                        </strong>
                    </p>
                </div>
                <div class="col-6">
                    <h5 class="heroFont text-center">
                        Billing address
                    </h5>
                    <p class="primaryFont text-center">
                        <span class="fw-bold fs-6 fst-italic">
                            <?php print_r($order->get_billing_first_name()); ?> <?php print_r($order->get_billing_last_name()); ?> <br>
                        </span>
                        <?php print_r($order->get_billing_address_1()); ?> <br>
                        <?php print_r($order->get_billing_address_2()); ?> <br>
                        <strong>
                            <?php print_r($order->get_billing_city()); ?>, <?php print_r($order->get_billing_state()); ?> <?php print_r($order->get_billing_postcode()); ?>
                        </strong>
                    </p>
                </div>
                <p class="text-center text-black-50" style="border:none;border-top: dashed 1px #000; padding-top:15px;font-size:12px;">
                    All rights reserved with Ankuräḫ
                </p>
            </div>
        </div>
    </div>
</div>
