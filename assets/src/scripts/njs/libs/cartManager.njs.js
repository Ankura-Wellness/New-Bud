export const cartManager =  function ( httpManager,loadingManager ) {
	var cart = [];
	var showCart = false;
	var shouldShowCart = false;
	var updated = false;

	function getCartItemsCallback(response) {
		updated = true;
		loadingManager.hide();
		if(shouldShowCart){
			shouldShowCart = false;
			showCart = true;
		}
		cart = response.data.cart.filter( item => { return item.quantity > 0 } ) ;
		localStorage.setItem('items',JSON.stringify(cart));
	}

	function getCart(){
		httpManager.postRequester('wp-admin/admin-ajax.php',{ action:'get_cart_items' },true,getCartItemsCallback);
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
		},
		setCart: function (newCart) {
			cart = newCart;
		},
		addToCart: function (id,openCart) {
			loadingManager.show();
			shouldShowCart = true;
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