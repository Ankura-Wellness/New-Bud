<?php
/**
 *  Master template file
 *  @2ndInning
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$countries_obj = new WC_Countries();
$states = $countries_obj->get_states('IN');

function zsi_get_user(){
	if(Is_user_logged_in()){
		return [ true ,  wp_get_current_user()];
	} else {
		return [ false , null ];
	}
}
// get_rates_from_server()

?>

<div id="zsiCheckout" class="container" ng-controller="checkout">
	<div class="row">
		<div class="col-8">
			<div id="loginDisplayArea" class="mt-5">
				<h2>
					<?php print_r( zsi_get_user()[0] ? 'Hi, '.zsi_get_user()[1]->display_name : 'Guest' )?>
				</h2>
				<button type="button" class="btn btn-light" ng-click="showSignIn()">
					<?php print_r( zsi_get_user()[0] ? 'Switch User' : 'Sign Up' )?>
				</button>
				<div class="modal" id="signInModal">
  					<div class="modal-dialog modal-dialog-centered">
    					<div class="modal-content">
      						<div class="modal-body">
							  	<div class="mb-3">
  									<label for="emailIDFormControl" class="form-label" ng-class="signUpForm.first_name.value.length > 3 ? (checkValidity('first_name') ? 'is-valid' : 'is-invalid') : '' "  ng-model="form.first_name.value">
										Email ID
									</label>
  									<input type="email" class="form-control" id="emailIDFormControl" placeholder="zantyes.fan@example.com">
								</div>
								<div class="mb-3">
  									<label for="passwordFormControl" class="form-label">
										Password
									</label>
  									<input type="password" class="form-control" id="passwordFormControl" placeholder="name@example.com">
								</div>
								<div class="form-check">
  									<input class="form-check-input" type="checkbox" value="" id="rememberChecked" checked>
  									<label class="form-check-label" for="rememberChecked">
										Remember Me
  									</label>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" ng-click="setCart()">
									Close
								</button>
        						<button type="button" class="btn btn-primary" ng-click="getCart()">
									Sign In
								</button>
      						</div>
    					</div>
  					</div>
				</div>
			</div>
			<div id="checkoutSteps" class="accordion">
  				<div class="accordion-item">
					<h2 class="accordion-header" id="headingTwo">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<h2 class="primaryFont mb-0">
								Billing Details
							</h2>
						</button>
					</h2>
    				<div id="collapseTwo" class="accordion-collapse collapse" ng-class="step == 'billing' ? 'show' : '' " aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      					<div class="accordion-body">
							<div class="container-fluid">
								<div class="row">
									<div class="col-12 col-md-6">
										<div class="mb-3">
											<label for="billingFirstNameFormControl" class="form-label">
												First Name
											</label>
											<input type="text" class="form-control" ng-class="checkFieldValidity('billing_first_name')" ng-model="checkoutForm.billing_first_name.value" id="billingFirstNameFormControl" placeholder="First Name">
											<div class="validationMessage">
												First Name should be a Alphabetical
											</div>
										</div>
									</div>
									 <div class="col-12 col-md-6">
										<div class="mb-3">
											<label for="billingLastNameFormControl" class="form-label">
												Last Name
											</label>
											<input type="text" class="form-control" ng-class="checkFieldValidity('billing_last_name')" ng-model="checkoutForm.billing_last_name.value" id="billingLastNameFormControl" placeholder="Last Name">
											<div class="validationMessage">
												Last Name should be a Alphabetical
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="mb-3">
											<label for="billingCompanyNameFormControl" class="form-label">
												Company (Optional)
											</label>
											<input type="text" class="form-control" ng-model="checkoutForm.billing_company.value" id="billingCompanyNameFormControl" placeholder="Company Name">
											<div class="validationMessage">
												Not a valid Company Name
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="mb-3">
											<label for="billingAddressOneFormControl" class="form-label">
												Address
											</label>
											<input type="text" class="form-control" ng-class="checkFieldValidity('billing_address_1')" ng-model="checkoutForm.billing_address_1.value" id="billingAddressOneFormControl" placeholder="House No./Apartment">
											<div class="validationMessage">
												Not a valid Address
											</div>
										</div>
									</div>
									 <div class="col-12">
										<div class="mb-3">
											<input type="text" class="form-control" ng-class="checkFieldValidity('billing_address_2')" ng-model="checkoutForm.billing_address_2.value" id="billingAddressTwoFormControl" placeholder="Landmark">
											<div class="validationMessage" ng-class="checkFieldValidity('billing_address_2')">
												Not a valid Address
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="mb-3">
											<label for="billingCityFormControl" class="form-label">
												City/Town
											</label>
											<input type="text" class="form-control" ng-class="checkFieldValidity('billing_city')" ng-model="checkoutForm.billing_city.value" id="billingCityFormControl" placeholder="City">
											<div class="validationMessage" ng-class="checkFieldValidity('billing_city')">
												Not a valid City Name
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="mb-3">
											<label for="billingCityFormControl" class="form-label">
												State
											</label>
											<select class="form-select" ng-model="checkoutForm.billing_state.value">
												<?php 
													foreach($states as $state){
														print_r( "<option value='$state'>{$state}</option>" );
													}
												?>
											</select>
										</div>
									</div>
									<div class="col-12">
										<div class="mb-3">
											<label for="billingPostcodeFormControl" class="form-label">
												Pincode
											</label>
											<input type="text" class="form-control" ng-class="checkFieldValidity('billing_postcode')" ng-model="checkoutForm.billing_postcode.value" id="billingPpstcodeFormControl" placeholder="Pincode">
											<div class="validationMessage">
												Not a valid Pincode
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="mb-3">
											<label for="billingPhoneFormControl" class="form-label">
												Phone
											</label>
											<input type="tel" class="form-control" ng-class="checkFieldValidity('billing_phone')" ng-model="checkoutForm.billing_phone.value" id="billingPostcodeFormControl" placeholder="Phone">
											<div class="validationMessage">
												Not a valid Phone
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="mb-3">
											<label for="billingEmailFormControl" class="form-label">
												Email
											</label>
											<input type="text" class="form-control" ng-class="checkFieldValidity('billing_email')" ng-model="checkoutForm.billing_email.value" id="billingEmailFormControl" placeholder="Email">
											<div class="validationMessage">
												Not a valid Email
											</div>
										</div>
									</div>
									
									<div class="col-12">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="differentShippingAddress" ng-click="differentShippingAddress = !differentShippingAddress">
											<label class="form-check-label text-bolder" for="flexCheckChecked">
												Deliver to a Different Address
											</label>
										</div>
									</div>
								</div>
								<div class="row" ng-if="differentShippingAddress">
									<div class="col-12 col-md-6">
										<div class="mb-3">
											<label for="shippingFirstNameFormControl" class="form-label">
												First Name
											</label>
											<input type="text" class="form-control" ng-class="checkFieldValidity('shipping_first_name')" ng-model="checkoutForm.shipping_first_name.value" id="shippingFirstNameFormControl" placeholder="First Name">
											<div class="validationMessage">
												First Name should be a Alphabetical
											</div>
										</div>
									</div>
									 <div class="col-12 col-md-6">
										<div class="mb-3">
											<label for="shippingLastNameFormControl" class="form-label">
												Last Name
											</label>
											<input type="text" class="form-control" ng-class="checkFieldValidity('shipping_last_name')" ng-model="checkoutForm.shipping_last_name.value" id="shippingLastNameFormControl" placeholder="Last Name">
											<div class="validationMessage">
												Last Name should be a Alphabetical
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="mb-3">
											<label for="shippingCompanyNameFormControl" class="form-label">
												Company (Optional)
											</label>
											<input type="text" class="form-control" ng-model="checkoutForm.shipping_company.value" id="shippingCompanyNameFormControl" placeholder="Company Name">
											<div class="validationMessage">
												Not a valid Company Name
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="mb-3">
											<label for="shippingAddressOneFormControl" class="form-label">
												Address
											</label>
											<input type="text" class="form-control" ng-class="checkFieldValidity('shipping_address_1')" ng-model="checkoutForm.shipping_address_1.value" id="shippingAddressOneFormControl" placeholder="House No./Apartment">
											<div class="validationMessage">
												Not a valid Address
											</div>
										</div>
									</div>
									 <div class="col-12">
										<div class="mb-3">
											<input type="text" class="form-control" ng-class="checkFieldValidity('shipping_address_2')" ng-model="checkoutForm.shipping_address_2.value" id="shippingAddressTwoFormControl" placeholder="Landmark">
											<div class="validationMessage" ng-class="checkFieldValidity('shipping_address_2')">
												Not a valid Address
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="mb-3">
											<label for="shippingCityFormControl" class="form-label">
												City/Town
											</label>
											<input type="text" class="form-control" ng-class="checkFieldValidity('shipping_city')" ng-model="checkoutForm.shipping_city.value" id="shippingCityFormControl" placeholder="City">
											<div class="validationMessage" ng-class="checkFieldValidity('shipping_city')">
												Not a valid City Name
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="mb-3">
											<label for="shippingCityFormControl" class="form-label">
												State
											</label>
											<select class="form-select" ng-model="checkoutForm.shipping_state.value">
												<?php 
													foreach($states as $state){
														print_r( "<option value='$state'>{$state}</option>" );
													}
												?>
											</select>
										</div>
									</div>
									<div class="col-12">
										<div class="mb-3">
											<label for="shippingPincodeFormControl" class="form-label">
												Pincode
											</label>
											<input type="text" class="form-control" ng-class="checkFieldValidity('shipping_pincode')" ng-model="checkoutForm.shipping_pincode.value" id="shippingPincodeFormControl" placeholder="Pincode">
											<div class="validationMessage">
												Not a valid Pincode
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="mb-3">
											<label for="shippingPhoneFormControl" class="form-label">
												Phone
											</label>
											<input type="tel" class="form-control" ng-class="checkFieldValidity('shipping_phone')" ng-model="checkoutForm.shipping_phone.value" id="shippingPostcodeFormControl" placeholder="Phone">
											<div class="validationMessage">
												Not a valid Phone
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="mb-3">
											<label for="shippingEmailFormControl" class="form-label">
												Email
											</label>
											<input type="text" class="form-control" ng-class="checkFieldValidity('shipping_email')" ng-model="checkoutForm.shipping_email.value" id="shippingEmailFormControl" placeholder="Email">
											<div class="validationMessage">
												Not a valid Email
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<button class="btn btn-warning mt-3" ng-click="step = 'payment'" ng-disabled="addressValid()">
											Review Order
										</button>
									</div>
								</div>
							</div>
      					</div>
    				</div>
  				</div>
  				<div class="accordion-item">
    				<h2 class="accordion-header" id="headingThree">
      					<button class="accordion-button collapsed" style="pointer-events: none;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						  	<h2 class="primaryFont mb-0">
								Payment
							</h2>
      					</button>
    				</h2>
    				<div id="collapseThree" class="accordion-collapse collapse" ng-class="step == 'payment' ? 'show' : '' " aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      					<div class="accordion-body">
							<input type="hidden" id="nonce" value="<?php echo wp_create_nonce( 'zsi_process_payment' ); ?>">
							</input>
							<button class="btn btn-warning" ng-click="checkout()">
								Test Checkout
							</button>
      					</div>
    				</div>
  				</div>
			</div>
		</div>
	</div>
</div>
<?php
	get_footer( 'shop' );
?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-2">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
	<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
	
	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>