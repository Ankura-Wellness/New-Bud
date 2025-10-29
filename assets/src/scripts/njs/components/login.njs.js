export const login = function( $scope,httpManager,loadingManager ) {
    $scope.email = 'test';
    $scope.password = 'test';
    $scope.nonce = '';

    function signInCallback(response) {
        loadingManager.hide();
	}

    $scope.login = () => {
        loadingManager.show();
        httpManager.postRequester('wp-admin/admin-ajax.php',{ action:'auth' , email : $scope.email , password : $scope.password , nonce : jQuery('#nonce').val() },true,signInCallback,signInCallback);
    };
};