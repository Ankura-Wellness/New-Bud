export const cart = function ( $scope,cartManager,loadingManager ){
    $scope.cartManagerCtrl = cartManager;
    $scope.loadingManagerCtrl = loadingManager;
    $scope.cartManagerCtrl.getCart();
    $scope.couponCode = '';
};