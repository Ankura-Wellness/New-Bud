export const login = function( $scope,$sce,httpManager,loadingManager ) {
    $scope.email = 'test';
    $scope.password = 'test';
    $scope.nonce = '';
    $scope.message = '';

    function signInCallback(response) {
        loadingManager.hide();
        var body = response.data.response;
        
        if(body.errors != null){
            for (const [key, value] of Object.entries(body.errors)) {
                $scope.message = $sce.trustAsHtml(value[0]);
            }
            console.log('Value', $scope.message);
        }else if(body.ID != null)
            location.reload();
	}

    $scope.login = () => {
        loadingManager.show();
        httpManager.postRequester('wp-admin/admin-ajax.php',{ action:'auth' , email : $scope.email , password : $scope.password , nonce : jQuery('#nonce').val() },true,signInCallback,signInCallback);
    };

    $scope.resetPassword = () => {
        loadingManager.show();
        httpManager.postRequester('wp-admin/admin-ajax.php',{ action:'auth_reset_password' , email : $scope.email },true,signInCallback,signInCallback);
    };
};