<?php
    /**
     *  Header UI template file
     *  @2ndInning
     */
?>

	<div id="nbFooterArea" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 brand d-flex justify-content-center justify-content-md-start flex-column" id="nbFooterIntro">
					<a href="/" id="nbLogo">
						<img id="logo" height="100px" src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/logo_sans_text.svg' ); ?>" alt="">
						<div id="name">
							<img class="w-50" src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/name.svg' ); ?>" alt="Ankuräḫ">
						</div>
						<div id="tagline">
							<p>
							।। प्रकृति के साथ सामंजस्य ।।
							</p>
						</div>
					</a>
					<a href="">
						At <b>Ankuräḫ</b>, we are committed to bringing nature’s purest offerings directly to your kitchen. Our products are rooted in the philosophy of simplicity—untouched, unaltered, and full of natural goodness.
					</a>
				</div>
				<div class="col-12 col-sm-6 col-md-3">
					<h4>
						Legal
					</h4>
					<ul id="legals">
					<?php
						$menus = [
							[ 'menu' => [ 'url' => '/terms-and-conditions' , 'title' => 'Terms & Conditions' ]],
							[ 'menu' => [ 'url' => '/privacy-policy' , 'title' => 'Privacy Policy' ]],
							[ 'menu' => [ 'url' => '/refund-and-cancellation-policy' , 'title' => 'Refund & Cancellations Policy' ]],
							[ 'menu' => [ 'url' => '/return-policy' , 'title' => 'Return Policy' ]],
							[ 'menu' => [ 'url' => '/shipping-policy' , 'title' => 'Shipping Policy' ]],
						];

						foreach( $menus as $menu ){
							print_r('<li><a href="'.$menu['menu']['url'].'">'.$menu['menu']['title'].'</a></li>');
						}
					?>
					</ul>
					<img class="mt-4" style="filter: invert(1) brightness(0.5); width: 35%;" src="http://ankurah.com/wp-content/uploads/2025/02/path840-1024x497.png" alt="">
					<p style="font-size: 10px;">
						RG/NO. :20625008000043
					</p>
					<!-- TO:DO: clean -->
				</div>
				<div class="col-12 col-sm-6 col-md-3 d-flex flex-column" id="nbContactUs">
					<h4>
						Contact Us
					</h4>
					<div class="d-flex flex-column">
						<a href="https://www.google.com/maps/place/65J2%2B35R+Malkarnem,+Bazaarwado,+Sanguem,+Goa+403704/@15.2295483,74.1500138,17z/data=!4m6!3m5!1s0x3bbfabcba7ecb3eb:0x6c9df562e178349a!8m2!3d15.2302419!4d74.1503965!16s%2Fg%2F11vbg0pnrt?utm_campaign=ml-le-16204184&g_ep=Eg1tbF8yMDI1MDgyN18wIOC7DCoASAJQAg%3D%3D">
							Akhil Babal Prabhu, House No 332, Bhindem, Malcornem, Quepem 403 705.
						</a>
						<a class="mt-3" href="mailto:contact@ankurah.com">
							contact@ankurah.com
						</a>
					</div>
					<h4 class="mt-3">
						Available to contact us from 9AM to 6PM
					</h4> 
					<a class="btn btn-custom fw-bolder secondaryFont mb-3" href="https://wa.me/917620805302?text=Hi">
						<i class="fa-brands fa-whatsapp mr-4">
						</i>
						&nbsp;
						CONTACT US
					</a>
					<br>
					<a class="pb-5" href="tel:+917620805302">
						<i class="fa-solid fa-phone">
						</i>
						+917620805302
					</a>				
				</div>
			</div>	
		</div>
  	</div>
</div>
<div id="secondaryFooter" class="container-fluid px-0">
  	<div class="container">
    	<div class="w-100 d-flex flex-sm-column flex-md-row justify-content-between">
      		<div class="d-flex justify-content-center justify-content-md-start">
				<a href="/about_us">
					Ankuräḫ 2025 All Rights Reserved 
				</a>
      		</div>
			<div class="d-flex justify-content-center justify-content-md-end">
				<!-- TO:DO Remove once all pages are finished -->
				<?php
					// $menus = nb_get_menu('nb_footer_menu');

					// if(sizeof($menus) > 0 ){} else {
					// $menus = [
					// 	[ 'menu' => [ 'url' => '/our-story' , 'title' => 'Our Story' ]],
					// 	[ 'menu' => [ 'url' => '/our-process' , 'title' => 'Our Process' ]],
					// 	[ 'menu' => [ 'url' => '/faqs' , 'title' => 'FAQs' ]]
					// ]; 
					// }
				
					// foreach( $menus as $menu ){
					// 	print_r('<a href="'.$menu['menu']['url'].'">'.$menu['menu']['title'].'</a>');
					// }
				?>    
			</div>
		</div>
    </div>
</div>

<!-- ////////////////////////////////////////////////////// -->

<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="nbToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-config='{"delay":0, "title":123}'>
    <div class="toast-header">
      	<strong class="me-auto" id="nbToastTitle">
			Failed
		</strong>
		<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
		<span id="nbToastBody">

		</span>
		<div class="mt-2 pt-2 border-top">
      		<a id="nbReportLink" href="" type="button" class="btn btn-custom btn-sm">
				Report
			</a>
      		<button type="button" class="btn btn-custom btn-sm" data-bs-dismiss="toast">Close</button>
    	</div>
    </div>
  </div>
</div>

<!-- ////////////////////////////////////////////////////// -->

<div ng-controller="cart" id="nbCartArea" ng-class="cartManagerCtrl.cartState() ? 'show' : ''">
	<!-- {{ loadingManagerCtrl.loading() }} -->
	<div id="loader" ng-class="loadingManagerCtrl.loading()">
		<script src="https://cdn.lottielab.com/s/lottie-player@1.x/player-web.min.js"></script>
		<lottie-player  src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/animation/Scene-1.json" loop autoplay>
		</lottie-player>
	</div>
	<div ng-click="cartManagerCtrl.toggleCart()" id="nbBackground">
	</div>
	<div id="nbCart" ng-class="cartManagerCtrl.cart().length == 0 ? 'empty' : ''" >
		<div id="nonEmptyCart" class="flex-column justify-content-between h-100" ng-if="cartManagerCtrl.updated()">
			<h3 class="heroFont text-center mt-3 p-3 fw-bold">
				<i class="fa-solid fa-basket-shopping">
				</i>
				Your Cart ( {{ cartManagerCtrl.cart().length }} )
				<p class="text-danger text-center warningMessage mt-3" ng-if="cartManagerCtrl.getCartItemsTotal() > 9">
					Only 10 Items can be ordered in single Order.
				</p>
			</h3> 
			<div id="nbCartItemArea" class="p-3">
				<div class="cartItem" ng-repeat="cartItem in cartManagerCtrl.cart()" ng-if="cartItem.quantity > 0">
					<img src="{{ cartItem.thumbnail }}">
					<div>
						<h5 class="px-1">
							{{ cartItem.product_name }}
						</h5>
						<h6>
							₹{{ cartItem.price * cartItem.quantity }}  <small> ( ₹{{ cartItem.price }} x {{ cartItem.quantity }} ) </small>
						</h6>
					</div>
					<div class="d-flex flex-vertical" role="group" aria-label="Vertical button group">
						<button type="button" ng-disabled="cartManagerCtrl.getCartItemsTotal() > 9" class="btn btn-custom addToCart" data-itemname="{{ cartItem.product_name }}" data-itemid="{{ cartItem.id }}" data-itemquantity="{{ cartItem.quantity }}" data-itemprice="{{ cartItem.price }}" data-itemcategory1="{{ cartItem.category }}" ng-click="cartManagerCtrl.addToCart(cartItem.id,cartItem.variation_id,false,true)">
							<i data-itemname="{{ cartItem.product_name }}" data-itemid="{{ cartItem.id }}" data-itemquantity="{{ cartItem.quantity }}" data-itemprice="{{ cartItem.price }}" data-itemcategory1="{{ cartItem.category }}" class="fa-solid fa-plus">
							</i>
						</button>
						<button type="button" class="btn btn-custom removeFromCart" data-itemname="${ cartItem.product_name }" data-itemid="${ cartItem.id }" data-itemquantity="1" data-itemprice="{{ cartItem.price }}" data-itemcategory1="{{ cartItem.category }}" ng-click="cartManagerCtrl.removeFromCart(cartItem.id,cartItem.variation_id,(cartItem.quantity - 1))">
							<i data-itemname="{{ cartItem.product_name }}" data-itemid="{{ cartItem.id }}" data-itemquantity="1" data-itemprice="{{ cartItem.price }}" data-itemcategory1="{{ cartItem.category }}" class="fa-solid {{ cartItem.quantity == 1 ? 'fa-trash' : 'fa-minus'}}">
							</i>
						</button>
					</div>
				</div>				
			</div>
			<div class="d-flex flex-column p-3" id="nbCartFooterBox">
				<h5 class="nbCartTotal primaryFont mt-3 text-center">
					Subtotal : 
					<span id="nbCartTotal" class="text-danger">
						{{ cartManagerCtrl.cartSubTotal() }}
					</span>
				</h5>
				<h6 class="secondaryFont text-center text-black-50 fw-light">
					SHIPPING CHARGES CALCULATED <br> AT CHECKOUT
				</h6>
				<a href="/checkout" class="btn btn-custom dark mt-3 checkout">
					Checkout
				</a>
				<button id="continueShopping" class="btn btn-custom mt-3 mb-5 mb-sm-5 mb-xl-3" ng-click="cartManagerCtrl.toggleCart()">
					Continue Shopping
				</button>
			</div>
		</div>
		<div id="emptyCart" class="flex-column justify-content-center align-items-center h-100 p-3" ng-if="cartManagerCtrl.updated()">
			<i class="fa-solid fa-basket-shopping text-dark" style="font-size: 45px;">
			</i>
			<h3 class="primaryFont mt-4">
				Your Cart is Empty
			</h3>
			<?php
				$path = explode('/',home_url(add_query_arg( array(), $wp->request)));
				if( $path[sizeof($path)-1] == 'shop' )
					print_r('<button ng-click="cartManagerCtrl.toggleCart()" class="btn-custom dark">Continue Shopping</button>');
				else
					print_r('<a href="/shop" class="btn-custom dark">Return to Shop</a>');
			?>
		</div>
		<div id="loadingCart" class="d-flex flex-column justify-content-center align-items-center h-100 p-3" ng-if="!cartManagerCtrl.updated()">
			<script src="https://cdn.lottielab.com/s/lottie-player@1.x/player-web.min.js"></script>
			<lottie-player  src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/animation/Scene-1.json" loop autoplay>
			</lottie-player>
			<h3 class="primaryFont mt-4">
				Wait, Loading Cart
			</h3>
		</div>
	</div>
</div>
<button class="btn-custom position-fixed dark d-block d-md-none" style="right: 20px;bottom: 20px;padding: 5px 13px !important;" ng-click="cartManagerCtrl.toggleCart()">
    <i class="bi bi-basket"></i>
</button>