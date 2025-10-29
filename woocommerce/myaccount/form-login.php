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

print_r('<h1>'.is_user_logged_in().'</h1>');
?>
<div class="container" ng-controller="login">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <div class="card my-5">
                <div class="card-body container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="mb-3">
                                <label class="form-label primaryFont">
                                    Email <?php print_r('<h1>'.is_user_logged_in().'</h1>'); ?>
                                </label>
                                <input type="text" class="form-control primaryFont" placeholder="name@example.com" ng-model="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label primaryFont">
                                    Password
                                </label>
                                <input type="password" class="form-control primaryFont" placeholder="name@example.com" ng-model="password">
                            </div>
                            <input type="hidden" value="<?php echo wp_create_nonce( -1 ) ?>" ng-model="nonce" id="nonce3">
                            <button class="btn btn-custom" ng-click="login()">
                                Login
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>