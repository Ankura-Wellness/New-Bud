export const cartManager =  function ( httpManager,loadingManager ) {
	var cart = [];
	var discount = [];
	var showCart = false;
	var shouldShowCart = false;
	var updated = false;

	function getCartItemsError(error) {
		updated = true;
		loadingManager.hide();
	}

	function getCartItemsCallback(response) {
		updated = true;
		loadingManager.hide();
		if(shouldShowCart){
			shouldShowCart = false;
			showCart = true;
		}
		cart = response.data.cart.filter( item => { return item.quantity > 0 } ) ;
		discount = response.data.discount ;
		localStorage.setItem('items',JSON.stringify(cart));
		jQuery('#nbBasketPage').removeClass('placeholderChildren');
	}

	function getCart(){
		httpManager.postRequester('wp-admin/admin-ajax.php',{ action:'get_cart_items' },true,getCartItemsCallback,getCartItemsError);
	}

	function getCartItemsTotal(){
		var count = 0;
		cart.forEach(item => {
			count = count + Number(item.quantity);
		});
		return count;
	}

	getCart();

   	return { 
		cart: function(){
			return cart;
		},discount: function(){
			return discount;
		},setCart: function (newCart) {
			cart = newCart;
		},applyCoupon: function (couponCode) {	
			loadingManager.show();
			httpManager.postRequester('wp-admin/admin-ajax.php',{ action: 'apply_coupon' , coupon_code : couponCode },true,getCartItemsCallback);
		},removeCoupon: function (couponCode) {	
			loadingManager.show();
			httpManager.postRequester('wp-admin/admin-ajax.php',{ action: 'remove_coupon' , coupon_code : couponCode },true,getCartItemsCallback);
		},addToCart: function (id,openCart) {	
			loadingManager.show();
			shouldShowCart = openCart;
			httpManager.postRequester('wp-admin/admin-ajax.php',{ action: 'add_cart_items' , id : id },true,getCartItemsCallback);
		},removeFromCart: function (id,quantity) {
    		loadingManager.show();
			httpManager.postRequester('wp-admin/admin-ajax.php',{ action: 'remove_cart_items' , id : id , quantity : quantity },true,getCartItemsCallback);
		},toggleCart: function () {
			showCart = !showCart;
		},cartState: function () {
			return showCart;
		},cartSubTotal:  function () {
			var cartSubTotal = 0;
			cart.forEach(item => {
				cartSubTotal =  cartSubTotal + (item.quantity * item.price);
			});
			return cartSubTotal;
		},cartTotal:  function () {
			var cartTotal = 0;
			cart.forEach(item => {
				cartTotal =  cartTotal + (item.quantity * item.price);
			});
			discount.forEach(item => {
				cartTotal =  cartTotal - item.amount_raw;
			});
			return cartTotal;
		},getCart: function () {
			getCart();
		},getCartItemsTotal: function() {			
			return getCartItemsTotal();
		}, updated:  function(){
			return updated;
		}, orderPossible: function(){
			return !updated || getCartItemsTotal() > 9;
		}
   };
};