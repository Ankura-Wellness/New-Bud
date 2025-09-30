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
        <div class="col-6 d-flex flex-column align-items-center">
            <img src="https://ankurah.com/wp-content/uploads/2025/09/front_label_top_it2_2.png" class="mb-3" style="height: 150px" alt="">
            <div class="d-flex align-items-center mb-4">
                <img src="https://ankurah.com/wp-content/uploads/2025/09/accept.png" style="height: 50px">
                <h1 class="text-center heroFont text-uppercase fw-bold primaryColor mb-0 ms-3">
				    Order Confirmed
			    </h1>
            </div>
            
            <h3 class="text-center" style="font-size:20px;">
                Thank you , <?php echo esc_html($order->get_shipping_first_name()); ?>
            </h3>
			<p class="secondaryFont mx-2 text-center">
				Our pride lies in providing our customers with only the best produce and Thank you for being part of our motive.
			</p>
        </div>
        <div class="col-6 row justify-content-center" id="nbInfoArea">
            <div class="col-md-3 primaryFont">
                <span class="fw-bold tex">
                    # Order
                </span> <br>
                <small>
                    <?php print_r($order->id); ?>
                </small>
            </div>
            <div class="col-md-3 primaryFont">
                <span class="fw-bold">
                    Date
                </span> <br>
                <small>
                    <?php print_r($order->get_date_created()->format('Y-m-d H:i')); ?>
                </small>
            </div>
            <div class="col-md-3 primaryFont">
                <span class="fw-bold">
                    Total
                </span> <br>
                <small>
                    <?php print_r($order->total); ?>
                </small>
            </div>
            <div class="col-8 mt-3">
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
            <div class="col-12">
                <div class="col-6">
                    <h5 class="heroFont">
                        Shipping address
                    </h5>
                    <p class="primaryFont">
                        <?php print_r($order->get_shipping_first_name()); ?> <?php print_r($order->get_shipping_last_name()); ?> <br>
                        <?php print_r($order->get_shipping_address_1()); ?> <br>
                        <?php print_r($order->get_shipping_address_2()); ?> <br>
                        <?php print_r($order->get_shipping_city()); ?>, <?php print_r($order->get_shipping_state()); ?><br>
                        <?php print_r($order->get_shipping_postcode()); ?>
                    </p>
                </div>
                <hr style="border: dashed 1px #000">
                <p>
                    All rights reserved with ankurah wellness
                </p>
            </div>
        </div>
    </div>
</div>
