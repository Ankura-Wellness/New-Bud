<?php
    /**
     *  Order Received UI template file
     *  @2ndInning
     */

defined( 'ABSPATH' ) || exit;
$user_id = get_current_user_id();

$user_info = get_userdata( $user_id );

$orders = wc_get_orders([
    'customer' => $user_id,   // Filter orders by user ID
    'limit'    => 10,         // Retrieve all orders, remove or set a number to limit
    'orderby'  => 'date',
    'order'    => 'desc'
])
?>

<div class="container">
    <div class="row mt-3">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    Hi, <?php echo $user_info->display_name ?>
                </div>
            </div>
        </div>
        <div class="col-9">
            <?php foreach($orders as $order)
                get_template_part( 'woocommerce/myaccount/order',null,['class' => 'col-6 col-sm-4 col-md-3','data' => [ 'order' => $order ] ] );
            ?>
        </div>
    </div>
</div>