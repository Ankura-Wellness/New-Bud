<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$product= wc_get_product();
print_r($product);

get_header( null , [ 'title' => '' ] ); ?>

<section id="nbBasketPage" class="container placeholderChildren">
	<div class="row" ng-if="!cartManagerCtrl.updated() || ( cartManagerCtrl.getCartItemsTotal() > 0)">
		<div class="col-12">
			<h1 class="heroFont">
				Cart
			</h1>
		</div>
		<div class="col-12 col-md-6 mb-5" >
			<div class="card" id="nbCartItemBox">
				<div class="card-body">
					<a href="/product/{{ cartItem.url }}" class="cartItem" ng-repeat="cartItem in cartManagerCtrl.cart()" ng-if="cartItem.quantity > 0">
						<img class="specialPlaceholder" src="{{ cartItem.thumbnail }}">
						<div class="d-flex flex-grow-1 ms-3 justify-content-between align-items-center">
							<div >
								<h5 class="px-1">
									{{ cartItem.product_name }}
								</h5>
								<h5 class="currencyFont">
									{{ cartItem.price * cartItem.quantity }}  <small> ( ₹{{ cartItem.price }} x {{ cartItem.quantity }} ) </small>
								</h5>
							</div>
							<div class="d-flex flex-column" role="group">
								<button type="button" ng-disabled="cartManagerCtrl.getCartItemsTotal() > 9" class="btn btn-custom addToCart p-1" data-itemname="{{ cartItem.product_name }}" data-itemid="{{ cartItem.id }}" data-itemquantity="{{ cartItem.quantity }}" data-itemprice="{{ cartItem.price }}" data-itemcategory1="{{ cartItem.category }}" ng-click="cartManagerCtrl.addToCart(cartItem.id,false,$event);$event.stopPropagation();$event.preventDefault()">
									<i data-itemname="{{ cartItem.product_name }}" data-itemid="{{ cartItem.id }}" data-itemquantity="{{ cartItem.quantity }}" data-itemprice="{{ cartItem.price }}" data-itemcategory1="{{ cartItem.category }}" class="fa-solid fa-plus">
									</i>
								</button>
								<button type="button" class="btn btn-custom removeFromCart mt-0" data-itemname="${ cartItem.product_name }" data-itemid="${ cartItem.id }" data-itemquantity="1" data-itemprice="{{ cartItem.price }}" data-itemcategory1="{{ cartItem.category }}" ng-click="cartManagerCtrl.removeFromCart(cartItem.id,(cartItem.quantity - 1),$event);$event.stopPropagation();$event.preventDefault()">
									<i data-itemname="{{ cartItem.product_name }}" data-itemid="{{ cartItem.id }}" data-itemquantity="1" data-itemprice="{{ cartItem.price }}" data-itemcategory1="{{ cartItem.category }}" class="fa-solid {{ cartItem.quantity == 1 ? 'fa-trash' : 'fa-minus'}}">
									</i>
								</button>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="card" id="nbCouponBox" ng-if="cartManagerCtrl.discount().length == 0">
				<div class="card-body">
					<h2 class="heroFont">
						Have a coupon?
					</h2>
					<div class="d-flex">
						<input type="text" ng-model="couponCode" placeholder="Enter Coupon Code..." class="specialPlaceholder">
						<button class="btn btn-custom mt-0 ms-2 btn-sm specialPlaceholder" ng-click="cartManagerCtrl.applyCoupon(couponCode)">
							Apply Coupon
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-5 container-fluid justify-content-center">
			<div id="nbInfoArea" class="row justify-content-center" style="border-image: url(<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/woocommerce/thankyou/border.png' ); ?>) round 20%">
				<div class="col-12 col-md-8 my-3 ">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row">
									<p>
										Subtotal:
									</p>
									
								</th>
								<td>
									<p>
										{{ cartManagerCtrl.cartSubTotal() }}
									</p>
								</td>
							</tr>
							<tr>
								<th scope="row">    
									<p>
										Tax
									</p>
								</th>
								<td>
									<p>
										0
									</p>
								</td>
							</tr>
							<tr ng-repeat="discount in cartManagerCtrl.discount()">
								<th scope="row">
									<p class="mb-1">
										<i class="bi bi-tags-fill">
										</i>
										{{  discount.code }}
										<small class="fw-light">
											(Coupon)
										</small>
									</p>
									<button class="btn" ng-click="cartManagerCtrl.removeCoupon(discount.code)">
										Remove
									</button>
								</th>
								<td>
									<p>
										-{{ cartManagerCtrl.discount()[0].amount_raw }}
									</p>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<p>
										Total
									</p>
								</th>
								<td>
									<p style="font-size: 30px;">
										{{ cartManagerCtrl.cartTotal() }}
									</p>
								</td>
							</tr>
						</tbody>
					</table>
					<a class="btn btn-custom dark w-100 specialPlaceholder" href="/ankurah/checkout">
						Checkout
					</a>
				</div>
				<div class="col-12 row justify-content-center" id="nbAddress">
					<p class="text-center text-black-50" style="border:none;border-top: dashed 1px #000; padding-top:15px;font-size:12px;">
						All rights reserved with Ankuräḫ
					</p>
				</div>
			</div>
        </div>
	</div>
	<div class="d-flex flex-column align-items-center my-5" ng-if="cartManagerCtrl.updated() && (cartManagerCtrl.getCartItemsTotal() == 0)">
		<h2 class="heroFont text-center">
			Cart Empty
		</h2>
		<div>
			<a class="btn btn-custom" href="/shop">
				Go To Shop
			</a>
		</div>
		
	</div>
</section>

<?php
get_footer( 'cart' );