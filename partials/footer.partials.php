<?php
    /**
     *  Header UI template file
     *  @2ndInning
     */
?>

	<div id="footerArea" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 brand d-flex justify-content-center justify-content-md-start">
					<img src="https://zantyes.com/wp-content/uploads/2022/06/Zantye_5-3.png" alt="">
				</div>
				<div class="col-12 col-md-6 mt-5 mt-sm-0 social justify-content-center justify-content-md-end">
					<a href="https://www.instagram.com/zantyesgoa">
						<i class="fa-brands fa-instagram">
						</i>
					</a>
					<a href="https://www.youtube.com/channel/UC-1hcKQSAm6oFKutjIq300A">
						<i class="fa-brands fa-youtube">
						</i>
					</a>
					<a href="https://www.facebook.com/zantyesgoa">
						<i class="fa-brands fa-facebook">
						</i>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-6 col-md-3">
					<a href="/our-story/">
						The journey of cashews in Goa began nearly 450 years ago when the Portuguese missionaries brought in the Cashew plant from Brazil to prevent soil erosion in the state. In due course of time the local population was acquainted with the edible property of this marvelous fruit. Eventually the cashew plants grew
					</a>
				</div>
				<div class="col-12 col-sm-6 col-md-3">
					<h4>
						Certification
					</h4>
					<div id="certification">
					<a href="https://www.machandel.com/en/certifications/eko-certification">
						<div>
						</div>
					</a>
					<a href="https://www.star-k.org/">
						<div>
						</div>
					</a>
					<a href="https://www.usda.gov/topics/organic">
						<div>
						</div>
					</a>
				</div>
			</div>   
			<div class="col-12 col-sm-6 col-md-3">
				<h4>
					Legal
				</h4>
				<ul id="legals">
					<?php
						// $menus = zsi_get_menu('zsi_legal_menu');
						// if(sizeof($menus) > 0 ){} else {
						// $menus = [
						// 	[ 'menu' => [ 'url' => '/terms-and-conditions' , 'title' => 'Terms & Conditions' ]],
						// 	[ 'menu' => [ 'url' => '/privacy-policy' , 'title' => 'Privacy Policy' ]],
						// 	[ 'menu' => [ 'url' => '/faqs' , 'title' => 'FAQs' ]],
						// 	[ 'menu' => [ 'url' => '/csr' , 'title' => 'CSR' ]]
						// ];
						// }

						// foreach( $menus as $menu ){
						// 	print_r('<li><a href="'.$menu['menu']['url'].'">'.$menu['menu']['title'].'</a></li>');
						// }
					?>
				</ul>
			</div>
			<div class="col-12 col-sm-6 col-md-3">
				<h4>
					Contact Us
				</h4>
				<div class="d-flex flex-column">
					<a href="https://goo.gl/maps/dEgXMBbXgWVW38fR9">
						Narayan Ganesh Prabhu Zantye &amp; Company,Bicholim – Goa.
					</a>
					<a class="mt-3" href="mailto:contact@zantyes.com">
						contact@zantyes.com
					</a>
				</div>
				<h4 class="mt-3">
					Available to contact us from 9AM to 6PM
				</h4>
				<a class="btn btn-outline-dark btn-lg fw-bolder secondaryFont mb-3" href="https://wa.me/91+8208067849?text=Hi">
					<i class="fa-brands fa-whatsapp mr-4">
					</i>
					&nbsp;
					CONTACT US
				</a>
				<br>
				<a href="tel:+91+8208067849">
					<i class="fa-solid fa-phone">
					</i>
					+91 820 806 7849
				</a>
    		</div>
		</div>
  	</div>
</div>
<div id="secondaryFooter" class="container-fluid px-0">
  	<div class="container">
    	<div class="w-100 d-flex flex-sm-column flex-md-row justify-content-between">
      		<div class="d-flex justify-content-center justify-content-md-start">
				<a href="/about_us">
					Zantye's™ 2019 All Rights Reserved 
				</a>
      		</div>
			<div class="d-flex justify-content-center justify-content-md-end">
				<!-- TO:DO Remove once all pages are finished -->
				<?php
					// $menus = zsi_get_menu('zsi_footer_menu');

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

<div ng-controller="cart" id="zsiCartArea" ng-class="cartManagerCtrl.cartState() ? 'show' : ''">
	<!-- {{ loadingManagerCtrl.loading() }} -->
	<div id="loader" ng-class="loadingManagerCtrl.loading()">
		<script src="https://cdn.lottielab.com/s/lottie-player@1.x/player-web.min.js"></script>
		<lottie-player  src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/animation/Zantye0.2.json" loop autoplay>
		</lottie-player>
	</div>
	<div ng-click="cartManagerCtrl.toggleCart()" id="zsiBackground">
	</div>
	<div id="zsiCart" ng-class="cartManagerCtrl.cart().length == 0 ? 'empty' : ''" >
		<div id="nonEmptyCart" class="flex-column justify-content-between h-100" ng-if="cartManagerCtrl.updated()">
			<h3 class="primaryFont text-center mt-3 p-3">
				<i class="fa-solid fa-basket-shopping">
				</i>
				Your Cart ( {{ cartManagerCtrl.cart().length }} )
				<p class="text-danger text-center warningMessage mt-3" ng-if="cartManagerCtrl.getCartItemsTotal() > 9">
					Only 10 Items can be ordered in single Order.
				</p>
			</h3> 
			<div id="zsiCartItemArea" class="p-3">
				<div class="cartItem" ng-repeat="cartItem in cartManagerCtrl.cart()" ng-if="cartItem.quantity > 0">
					<img src="{{ cartItem.thumbnail }}">
					<div>
						<h5 class="px-1">
							{{ cartItem.product_name }}
						</h5>
						<h6 class="text-danger">
							₹{{ cartItem.price * cartItem.quantity }} ( ₹{{ cartItem.price }} x {{ cartItem.quantity }} )
						</h6>
					</div>
					<div class="d-flex flex-vertical" role="group" aria-label="Vertical button group">
						<button type="button" ng-disabled="cartManagerCtrl.getCartItemsTotal() > 9" class="btn btn-outline-danger addToCart" data-itemname="{{ cartItem.product_name }}" data-itemid="{{ cartItem.id }}" data-itemquantity="{{ cartItem.quantity }}" data-itemprice="{{ cartItem.price }}" data-itemcategory1="{{ cartItem.category }}" ng-click="cartManagerCtrl.addToCart(cartItem.id,false)">
							<i data-itemname="{{ cartItem.product_name }}" data-itemid="{{ cartItem.id }}" data-itemquantity="{{ cartItem.quantity }}" data-itemprice="{{ cartItem.price }}" data-itemcategory1="{{ cartItem.category }}" class="fa-solid fa-plus">
							</i>
						</button>
						<button type="button" class="btn btn-outline-danger removeFromCart" data-itemname="${ cartItem.product_name }" data-itemid="${ cartItem.id }" data-itemquantity="1" data-itemprice="{{ cartItem.price }}" data-itemcategory1="{{ cartItem.category }}" ng-click="cartManagerCtrl.removeFromCart(cartItem.id,(cartItem.quantity - 1))">
							<i data-itemname="{{ cartItem.product_name }}" data-itemid="{{ cartItem.id }}" data-itemquantity="1" data-itemprice="{{ cartItem.price }}" data-itemcategory1="{{ cartItem.category }}" class="fa-solid {{ cartItem.quantity == 1 ? 'fa-trash' : 'fa-minus'}}">
							</i>
						</button>
					</div>
				</div>				
			</div>
			<div class="d-flex flex-column p-3" style="background-color: #fecc00;">
				<h5 class="zsiCartTotal primaryFont mt-3 text-center">
					Subtotal : 
					<span id="zsiCartTotal" class="text-danger">
						{{ cartManagerCtrl.cartSubTotal() }}
					</span>
				</h5>
				<h6 class="secondaryFont text-center text-black-50 fw-light">
					SHIPPING CHARGES CALCULATED <br> AT CHECKOUT
				</h6>
				<button class="btn btn-danger mt-3" ng-click="cartManagerCtrl.toggleCart()">
					Continue Shopping
				</button>
				<a href="/checkout" class="btn btn-danger mt-3 mb-4 mb-md-1 checkout">
					Checkout
				</a>
			</div>
		</div>
		<div id="emptyCart" class="flex-column justify-content-center align-items-center h-100 p-3" ng-if="cartManagerCtrl.updated()">
			<i class="fa-solid fa-basket-shopping text-danger" style="font-size: 45px;">
			</i>
			<h3 class="primaryFont mt-4">
				Your Cart is Empty
			</h3>
			<?php
				$path = explode('/',home_url(add_query_arg( array(), $wp->request)));
				if( $path[sizeof($path)-1] == 'shop' )
					print_r('<button ng-click="cartManagerCtrl.toggleCart()" class="btn btn-danger">Continue Shopping</button>');
				else
					print_r('<a href="/shop" class="btn btn-danger">Return to Shop</a>');
			?>
		</div>
		<div id="loadingCart" class="d-flex flex-column justify-content-center align-items-center h-100 p-3" ng-if="!cartManagerCtrl.updated()">
			<script src="https://cdn.lottielab.com/s/lottie-player@1.x/player-web.min.js"></script>
			<lottie-player  src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/animation/Zantye0.2.json" loop autoplay>
			</lottie-player>
			<h3 class="primaryFont mt-4">
				Wait, Loading Cart
			</h3>
		</div>
	</div>
	<div ng-click="cartManagerCtrl.toggleCart()" class="btn btn-outline-danger btn-lg d-block d-lg-none" style="position: fixed; bottom: 10px; left:10px;background-color: #fff;">
		<i class="fa-solid fa-basket-shopping">
		</i>
	</div>
</div>
