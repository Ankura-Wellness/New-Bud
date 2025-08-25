export const checkout = function ($scope,httpManager,cartManager) {
    $scope.height = 300;

    $scope.differentShippingAddress = false;

    $scope.signInForm = {
        user_login : {
            value : '',
            pattern : /^[a-z ,.'-]+$/
        },user_password : {
            value : '',
            pattern : /^[a-z ,.'-]+$/
        },remember : {
            value : true
        }
    };

    var name_regex = /^[a-zA-Z ,.'-]+$/;
    var address_regex = /^[a-zA-Z0-9\s,'-]*$/;
    var company_regex = /^([a-zA-Z0-9\s,'-]|)*$/;
    var postcode_regex = /^[1-9][0-9]{5}$/;
    var phone_regex = /^[789]\d{9}$/;
    var email_regex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    $scope.step = "billing";

    $scope.checkoutForm = {
        billing_first_name : {
            value : '',
            pattern : name_regex
        },billing_last_name : {
            value : '',
            pattern : name_regex
        },billing_company : {
            value : '',
            pattern : ''
        },billing_country : {
            value : 'India',
            pattern : name_regex
        },billing_address_1 : {
            value : '',
            pattern : address_regex
        },billing_address_2 : {
            value : '',
            pattern : address_regex
        },billing_city : {
            value : '',
            pattern : address_regex
        },billing_state : {
            value : '',
            pattern : name_regex
        },billing_postcode : {
            value : '',
            pattern : postcode_regex
        },billing_phone : {
            value : '',
            pattern : phone_regex
        },billing_email : {
            value : '',
            pattern : email_regex
        },shipping_first_name : {
            value : '',
            pattern : name_regex
        },shipping_last_name : {
            value : '',
            pattern : name_regex
        },shipping_company : {
            value : '',
            pattern : ''
        },shipping_country : {
            value : 'India',
            pattern : name_regex
        },shipping_address_1 : {
            value : '',
            pattern : address_regex
        },shipping_address_2 : {
            value : '',
            pattern : address_regex
        },shipping_city : {
            value : '',
            pattern : address_regex
        },shipping_state : {
            value : '',
            pattern : name_regex
        },shipping_postcode : {
            value : '',
            pattern : postcode_regex
        },shipping_phone : {
            value : '',
            pattern : phone_regex
        },shipping_email : {
            value : '',
            pattern : email_regex
        },order_comment : {
            value : '',
            pattern : ''
        },shipping_method : {
            value : 'shiprocket_woocommerce_shipping_cod:1',
            pattern : ''
        },payment_method : {
            value : 'Razorpay',
            pattern : ''
        },woocommerce_process_checkout_nonce : {
            value : '',
            pattern : ''
        }
    };

    $scope.checkFieldValidity = (name) => {
        console.log('Go1',name,$scope.checkoutForm[name].pattern);
        return $scope.checkoutForm[name].value.length > 0 ? ($scope.checkValidity(name) ? 'is-valid' : 'is-invalid') : '';
    };

    $scope.checkValidity = (name) => {
        console.log('Go2',name,$scope.checkoutForm[name].pattern,!!$scope.checkoutForm[name].pattern);
        
        return $scope.checkoutForm[name].pattern.test($scope.checkoutForm[name].value);
    };

    $scope.showSignIn = () => {
        const myModalAlternative = new bootstrap.Modal('#signInModal', {});
        myModalAlternative.show();
    };

    $scope.signInCallback = (response) => {
        hideLoader();
        switch(Number(response.data.message)){
            case 1 :
                // $scope.getEventQuestionAnswers();
                break ;
        }
    }

    $scope.signIn = () => {
        showLoader();

        httpManager.postRequester('wp-admin/admin-ajax.php',{action:'zsi_get_shipping_options', ... stripForm($scope.signInForm)},true,$scope.signInCallback);
    };

    function stripForm(form){
        var minimalistForm = {};
        for(const field in form) {
            minimalistForm[field] = form[field].value;
        }
        return minimalistForm;
    }

    function fillShipping(){
        if(!$scope.differentShippingAddress){
            for(const field in $scope.checkoutForm) {
                if(field.includes('billing_'))
                    $scope.checkoutForm[field.replace('billing_','shipping_')].value = $scope.checkoutForm[field].value;
            }
        }
    }

    $scope.addressValid = () => {
        for(const field in $scope.checkoutForm) {
            if(!!$scope.checkoutForm[field].pattern){
                console.log('pattern check',field,!!$scope.checkoutForm[field].pattern);
                if( field.includes('shipping') ? $scope.differentShippingAddress : true ){
                    if(!$scope.checkValidity(field)){
                        console.log('valid',field,field.includes('shipping'),$scope.checkValidity(field));
                        return true;
                    }
                }
            }
        }
        return false;
    };


    // zsi_get_shipping_options
    $scope.checkout = () => {
        $scope.checkoutForm.woocommerce_process_checkout_nonce.value = angular.element(document.getElementById('nonce')).val();
        fillShipping();
        console.log('Form 2',stripForm($scope.checkoutForm));
		httpManager.postRequester('wp-admin/admin-ajax.php',{ action: 'zsi_get_shipping_options' , ... stripForm($scope.checkoutForm) },true,() => {console.log('test');} );
    }
};