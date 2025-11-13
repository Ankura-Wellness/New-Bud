export const cart = function ( $scope,cartManager,loadingManager ){
    $scope.cartManagerCtrl = cartManager;
    $scope.loadingManagerCtrl = loadingManager;
    $scope.cartManagerCtrl.getCart();
    $scope.couponCode = '';
    $scope.currentPrice = 0;
    $scope.regularPrice = 0;
    $scope.currentVariationId = 0;

    $scope.selectVariation = function(id,price,regularPrice){
        $scope.currentPrice = price;
        $scope.regularPrice = regularPrice;
        $scope.currentVariationId = id;
    }

    $scope.addToCart = function(productId){
        $scope.loadingManagerCtrl.show();
        $scope.cartManagerCtrl.addToCart(productId,$scope.currentVariationId, true);
    }

};