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
            <div class="card my-5" id="nbSignIn">
                <div class="card-body container-fluid">
                    <div class="row justify-content-center my-3">
                        <div class="col-8 d-flex flex-column align-items-center">
                            <img style="width: 40%;" src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/logo_sans_text.svg' ); ?>" alt="Ankuräḫ">
                            <h2 class="heroFont fw-bold mt-3" >
                                Welcome Back, Patron!!!
                            </h2>
                            <div class="alert alert-danger" role="alert" ng-if="!!message" ng-bind-html="message">
                            </div>
                            <div class="mb-3 w-100">
                                <label class="form-label primaryFont">
                                    Email <?php print_r('<h1>'.is_user_logged_in().'</h1>'); ?>
                                </label>
                                <input type="text" class="form-control primaryFont" placeholder="name@example.com" ng-model="email">
                            </div>
                            <div class="mb-3 w-100">
                                <label class="form-label primaryFont">
                                    Password
                                </label>
                                <input type="password" class="form-control primaryFont" ng-model="password">
                            </div>
                            <input type="hidden" value="<?php echo wp_create_nonce( -1 ) ?>" ng-model="nonce" id="nonce3">
                            <div class="d-flex justify-content-between w-100 mt-3">
                                <button class="btn btn-custom" ng-click="login()">
                                    Login
                                </button>
                                <!-- ng-click="resetPassword()" -->
                                <button class="btn btn-clear primaryFont mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Forgot Password?
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h2 class="heroFont" id="exampleModalLabel">
                    Reset Password
                </h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger primaryFont" role="alert" ng-if="!!resetPasswordMessage">
                    {{ resetPasswordMessage }}
                </div>
                <p>
                    Enter your Email ID to receive Password Reset Email.
                </p>
                <input type="text" ng-model="email" placeholder="name@example.com" class="form-control primaryFont">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-custom" ng-click="resetPassword()">
                    Send Reset Email
                </button>
            </div>
            </div>
        </div>
    </div>
</div>