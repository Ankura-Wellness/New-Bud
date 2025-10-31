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
]);
?>

<div class="container">
    <div class="row my-3">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="heroFont">
                        Hi, <?php echo $user_info->display_name ?>
                    </h2>
                    <!-- <button class="btn btn-custom">
                        Logout
                    </button> -->
                </div>
            </div>
        </div>
        <div class="col-9 d-flex">
            <?php foreach($orders as $order)
                get_template_part( 'woocommerce/myaccount/order',null,['class' => 'col-6 col-sm-4 col-md-3','data' => [ 'order' => $order ] ] );
            ?>
            <?php if( count($orders) == 0 )
                print_r('
                    <div class="d-flex flex-column align-items-center w-100">
                        <i class="bi bi-bag-x-fill mt-5 text-muted" style="font-size: 55px;">
                        </i>
                        <h4 class="fw-bold text-muted">
                            No Order Placed Yet
                        </h4>
                        <a href="/shop" class="btn btn-custom mb-5">
                            Go to Shop
                        </a>
                    </div>
                '); ?>
        </div>
    </div>
</div>