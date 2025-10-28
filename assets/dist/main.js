var nb;
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scripts/nb.njs.js":
/*!*******************************!*\
  !*** ./src/scripts/nb.njs.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   nb: () => (/* binding */ nb)
/* harmony export */ });
/* harmony import */ var _njs_libs_cartManager_njs_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./njs/libs/cartManager.njs.js */ "./src/scripts/njs/libs/cartManager.njs.js");
/* harmony import */ var _njs_libs_httpManager_njs_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./njs/libs/httpManager.njs.js */ "./src/scripts/njs/libs/httpManager.njs.js");
/* harmony import */ var _njs_libs_loadingManager_njs_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./njs/libs/loadingManager.njs.js */ "./src/scripts/njs/libs/loadingManager.njs.js");
/* harmony import */ var _njs_libs_toastManager_njs_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./njs/libs/toastManager.njs.js */ "./src/scripts/njs/libs/toastManager.njs.js");
/* harmony import */ var _njs_components_checkout_njs_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./njs/components/checkout.njs.js */ "./src/scripts/njs/components/checkout.njs.js");
/* harmony import */ var _njs_components_cart_njs_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./njs/components/cart.njs.js */ "./src/scripts/njs/components/cart.njs.js");
/* harmony import */ var _njs_components_page_njs_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./njs/components/page.njs.js */ "./src/scripts/njs/components/page.njs.js");







const nb = angular.module('nb', []);
nb.service('httpManager', _njs_libs_httpManager_njs_js__WEBPACK_IMPORTED_MODULE_1__.httpManager);
nb.service('loadingManager', _njs_libs_loadingManager_njs_js__WEBPACK_IMPORTED_MODULE_2__.loadingManager);
nb.service('cartManager', _njs_libs_cartManager_njs_js__WEBPACK_IMPORTED_MODULE_0__.cartManager);
nb.service('toastManager', _njs_libs_toastManager_njs_js__WEBPACK_IMPORTED_MODULE_3__.toastManager);
nb.controller('page', _njs_components_page_njs_js__WEBPACK_IMPORTED_MODULE_6__.page);
nb.controller('cart', _njs_components_cart_njs_js__WEBPACK_IMPORTED_MODULE_5__.cart);
nb.controller('checkout', _njs_components_checkout_njs_js__WEBPACK_IMPORTED_MODULE_4__.checkout);

/***/ }),

/***/ "./src/scripts/njs/components/cart.njs.js":
/*!************************************************!*\
  !*** ./src/scripts/njs/components/cart.njs.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   cart: () => (/* binding */ cart)
/* harmony export */ });
const cart = function ($scope, cartManager, loadingManager) {
  $scope.cartManagerCtrl = cartManager;
  $scope.loadingManagerCtrl = loadingManager;
  $scope.cartManagerCtrl.getCart();
  $scope.couponCode = '';
};

/***/ }),

/***/ "./src/scripts/njs/components/checkout.njs.js":
/*!****************************************************!*\
  !*** ./src/scripts/njs/components/checkout.njs.js ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   checkout: () => (/* binding */ checkout)
/* harmony export */ });
const checkout = function ($scope, httpManager, cartManager) {
  $scope.height = 300;
  $scope.differentShippingAddress = false;
  $scope.signInForm = {
    user_login: {
      value: '',
      pattern: /^[a-z ,.'-]+$/
    },
    user_password: {
      value: '',
      pattern: /^[a-z ,.'-]+$/
    },
    remember: {
      value: true
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
    billing_first_name: {
      value: '',
      pattern: name_regex
    },
    billing_last_name: {
      value: '',
      pattern: name_regex
    },
    billing_company: {
      value: '',
      pattern: ''
    },
    billing_country: {
      value: 'India',
      pattern: name_regex
    },
    billing_address_1: {
      value: '',
      pattern: address_regex
    },
    billing_address_2: {
      value: '',
      pattern: address_regex
    },
    billing_city: {
      value: '',
      pattern: address_regex
    },
    billing_state: {
      value: '',
      pattern: name_regex
    },
    billing_postcode: {
      value: '',
      pattern: postcode_regex
    },
    billing_phone: {
      value: '',
      pattern: phone_regex
    },
    billing_email: {
      value: '',
      pattern: email_regex
    },
    shipping_first_name: {
      value: '',
      pattern: name_regex
    },
    shipping_last_name: {
      value: '',
      pattern: name_regex
    },
    shipping_company: {
      value: '',
      pattern: ''
    },
    shipping_country: {
      value: 'India',
      pattern: name_regex
    },
    shipping_address_1: {
      value: '',
      pattern: address_regex
    },
    shipping_address_2: {
      value: '',
      pattern: address_regex
    },
    shipping_city: {
      value: '',
      pattern: address_regex
    },
    shipping_state: {
      value: '',
      pattern: name_regex
    },
    shipping_postcode: {
      value: '',
      pattern: postcode_regex
    },
    shipping_phone: {
      value: '',
      pattern: phone_regex
    },
    shipping_email: {
      value: '',
      pattern: email_regex
    },
    order_comment: {
      value: '',
      pattern: ''
    },
    shipping_method: {
      value: 'shiprocket_woocommerce_shipping_cod:1',
      pattern: ''
    },
    payment_method: {
      value: 'Razorpay',
      pattern: ''
    },
    woocommerce_process_checkout_nonce: {
      value: '',
      pattern: ''
    }
  };
  $scope.checkFieldValidity = name => {
    console.log('Go1', name, $scope.checkoutForm[name].pattern);
    return $scope.checkoutForm[name].value.length > 0 ? $scope.checkValidity(name) ? 'is-valid' : 'is-invalid' : '';
  };
  $scope.checkValidity = name => {
    console.log('Go2', name, $scope.checkoutForm[name].pattern, !!$scope.checkoutForm[name].pattern);
    return $scope.checkoutForm[name].pattern.test($scope.checkoutForm[name].value);
  };
  $scope.showSignIn = () => {
    const myModalAlternative = new bootstrap.Modal('#signInModal', {});
    myModalAlternative.show();
  };
  $scope.signInCallback = response => {
    hideLoader();
    switch (Number(response.data.message)) {
      case 1:
        // $scope.getEventQuestionAnswers();
        break;
    }
  };
  $scope.signIn = () => {
    showLoader();
    httpManager.postRequester('wp-admin/admin-ajax.php', {
      action: 'zsi_get_shipping_options',
      ...stripForm($scope.signInForm)
    }, true, $scope.signInCallback);
  };
  function stripForm(form) {
    var minimalistForm = {};
    for (const field in form) {
      minimalistForm[field] = form[field].value;
    }
    return minimalistForm;
  }
  function fillShipping() {
    if (!$scope.differentShippingAddress) {
      for (const field in $scope.checkoutForm) {
        if (field.includes('billing_')) $scope.checkoutForm[field.replace('billing_', 'shipping_')].value = $scope.checkoutForm[field].value;
      }
    }
  }
  $scope.addressValid = () => {
    for (const field in $scope.checkoutForm) {
      if (!!$scope.checkoutForm[field].pattern) {
        console.log('pattern check', field, !!$scope.checkoutForm[field].pattern);
        if (field.includes('shipping') ? $scope.differentShippingAddress : true) {
          if (!$scope.checkValidity(field)) {
            console.log('valid', field, field.includes('shipping'), $scope.checkValidity(field));
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
    console.log('Form 2', stripForm($scope.checkoutForm));
    httpManager.postRequester('wp-admin/admin-ajax.php', {
      action: 'zsi_get_shipping_options',
      ...stripForm($scope.checkoutForm)
    }, true, () => {
      console.log('test');
    });
  };
};

/***/ }),

/***/ "./src/scripts/njs/components/page.njs.js":
/*!************************************************!*\
  !*** ./src/scripts/njs/components/page.njs.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   page: () => (/* binding */ page)
/* harmony export */ });
const page = function ($scope, cartManager) {
  $scope.cartManagerCtrl = cartManager;
};

/***/ }),

/***/ "./src/scripts/njs/libs/cartManager.njs.js":
/*!*************************************************!*\
  !*** ./src/scripts/njs/libs/cartManager.njs.js ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   cartManager: () => (/* binding */ cartManager)
/* harmony export */ });
const cartManager = function (httpManager, loadingManager) {
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
    if (shouldShowCart) {
      shouldShowCart = false;
      showCart = true;
    }
    cart = response.data.cart.filter(item => {
      return item.quantity > 0;
    });
    discount = response.data.discount;
    localStorage.setItem('items', JSON.stringify(cart));
    jQuery('#nbBasketPage').removeClass('placeholderChildren');
  }
  function getCart() {
    httpManager.postRequester('wp-admin/admin-ajax.php', {
      action: 'get_cart_items'
    }, true, getCartItemsCallback, getCartItemsError);
  }
  function getCartItemsTotal() {
    var count = 0;
    cart.forEach(item => {
      count = count + Number(item.quantity);
    });
    return count;
  }
  getCart();
  return {
    cart: function () {
      return cart;
    },
    discount: function () {
      return discount;
    },
    setCart: function (newCart) {
      cart = newCart;
    },
    applyCoupon: function (couponCode) {
      loadingManager.show();
      httpManager.postRequester('wp-admin/admin-ajax.php', {
        action: 'apply_coupon',
        coupon_code: couponCode
      }, true, getCartItemsCallback);
    },
    removeCoupon: function (couponCode) {
      loadingManager.show();
      httpManager.postRequester('wp-admin/admin-ajax.php', {
        action: 'remove_coupon',
        coupon_code: couponCode
      }, true, getCartItemsCallback);
    },
    addToCart: function (id, openCart) {
      loadingManager.show();
      shouldShowCart = openCart;
      httpManager.postRequester('wp-admin/admin-ajax.php', {
        action: 'add_cart_items',
        id: id
      }, true, getCartItemsCallback);
    },
    removeFromCart: function (id, quantity, $event) {
      $event.stopPropagation();
      loadingManager.show();
      httpManager.postRequester('wp-admin/admin-ajax.php', {
        action: 'remove_cart_items',
        id: id,
        quantity: quantity
      }, true, getCartItemsCallback);
    },
    toggleCart: function () {
      showCart = !showCart;
    },
    cartState: function () {
      return showCart;
    },
    cartSubTotal: function () {
      var cartSubTotal = 0;
      cart.forEach(item => {
        cartSubTotal = cartSubTotal + item.quantity * item.price;
      });
      return cartSubTotal;
    },
    cartTotal: function () {
      var cartTotal = 0;
      cart.forEach(item => {
        cartTotal = cartTotal + item.quantity * item.price;
      });
      discount.forEach(item => {
        cartTotal = cartTotal - item.amount_raw;
      });
      return cartTotal;
    },
    getCart: function () {
      getCart();
    },
    getCartItemsTotal: function () {
      return getCartItemsTotal();
    },
    updated: function () {
      return updated;
    },
    orderPossible: function () {
      return !updated || getCartItemsTotal() > 9;
    }
  };
};

/***/ }),

/***/ "./src/scripts/njs/libs/httpManager.njs.js":
/*!*************************************************!*\
  !*** ./src/scripts/njs/libs/httpManager.njs.js ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   httpManager: () => (/* binding */ httpManager)
/* harmony export */ });
const httpManager = function ($http, loadingManager, toastManager) {
  return {
    postRequester: function (requestMethod, parameters, secure, successCallback, errorCallback) {
      // var webUrl = process.env.NODE_ENV == 'production' ? 'https://ankurah.com/' : 'https://localhost/ankurah/';
      var webUrl = 'https://ankurah.com/';
      // var webUrl = 'http://localhost/ankurah/';
      let params_string = '';
      for (const parameter in parameters) {
        params_string = params_string.length == 0 ? '' : params_string + '&';
        params_string = params_string + `${parameter}=${parameters[parameter]}`;
      }
      var headers = {
        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
        'accept': 'application/json, text/javascript, */*; q=0.01'
      };
      if (errorCallback == null) {
        errorCallback = error => {
          console.log('Error', error);
          toastManager.show('Failed to load cart', 'Try in sometime or refresh page and try again.', error);
          loadingManager.hide();
        };
      }
      $http({
        method: 'POST',
        url: webUrl + requestMethod,
        data: params_string,
        headers: headers
      }).then(successCallback, errorCallback);
    }
    // 
    ,
    jsonParser: function (response) {
      var x2js = new X2JS();
      return x2js.xml_str2json(response.data);
    },
    jsonCleaner: function (response) {
      return response.string.__text.replace(/\r?\n|\r/g, '');
    }
  };
};

/***/ }),

/***/ "./src/scripts/njs/libs/loadingManager.njs.js":
/*!****************************************************!*\
  !*** ./src/scripts/njs/libs/loadingManager.njs.js ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   loadingManager: () => (/* binding */ loadingManager)
/* harmony export */ });
const loadingManager = function () {
  var loading = '';
  return {
    loading: () => {
      return loading;
    },
    toggle: () => {
      loading != loading;
    },
    show: () => {
      loading = 'show';
    },
    hide: () => {
      loading = '';
    }
  };
};

/***/ }),

/***/ "./src/scripts/njs/libs/toastManager.njs.js":
/*!**************************************************!*\
  !*** ./src/scripts/njs/libs/toastManager.njs.js ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   toastManager: () => (/* binding */ toastManager)
/* harmony export */ });
const toastManager = function () {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(document.getElementById('nbToast'));
  return {
    show: (header, body, error) => {
      // var deviceName = navigator?.userAgentData?.platform || navigator?.platform;
      console.log('Toast', 'https://wa.me/918623999630?text=' + encodeURIComponent(navigator?.userAgent, navigator?.platform), error);
      document.getElementById('nbReportLink').setAttribute('href', 'https://wa.me/918623999630?text=' + encodeURIComponent('Report Issue:\n' + error.statusText));
      document.getElementById('nbToastTitle').innerHTML = header ? header : 'Failure';
      document.getElementById('nbToastBody').innerHTML = body ? body : 'Something went wrong';
      toastBootstrap.show();
    }
  };
};

/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js!./node_modules/sass-loader/dist/cjs.js!./src/style/main.scss":
/*!**********************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js!./node_modules/sass-loader/dist/cjs.js!./src/style/main.scss ***!
  \**********************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_sourceMaps_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../node_modules/css-loader/dist/runtime/sourceMaps.js */ "./node_modules/css-loader/dist/runtime/sourceMaps.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_sourceMaps_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_sourceMaps_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_1__);
// Imports


var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_1___default()((_node_modules_css_loader_dist_runtime_sourceMaps_js__WEBPACK_IMPORTED_MODULE_0___default()));
// Module
___CSS_LOADER_EXPORT___.push([module.id, `@charset "UTF-8";
body {
  background-color: transparent !important; }

button:disabled {
  cursor: not-allowed; }

.hideScroller {
  overflow-y: hidden; }

.heroFont, .btn-custom, #sdPolicies h1, #nbFooterArea h4, #nbFrontPage #nbAboutUs:first-letter, #nbFrontPage #box > div h3, #nbFrontPage #nbProductsIntro h2, #nbFrontPage #nbProductsIntro h5, #nbFrontPage #nbProductsIntro p:first-letter, #nbFrontPage #nbProductsIntro #nbFeatures h6, #nbPageOurStory p#nbFirstParagraph::first-letter, #nbPageOurStory #nbFoundersNote h2, #nbOurMotivePartial p::first-letter, #nbSingleProduct .nbBreadcrumb a, #nbSingleProduct .nbBreadcrumb span, #bnCheckoutThankYou #nbInfoArea .col-md-3 span, #nbToast .toast-header strong {
  font-family: "Amatic SC", sans-serif !important;
  font-weight: 700; }

.primaryFont, a, h3, h4, h5, h6, p, .nbHeader p, .nbPrice .badge, #sdPolicies li, #nbCart #nbCartItemArea .cartItem div h5, #nbCartArea #nbCart #nonEmptyCart h3 .warningMessage, #nbCartArea #nbCart #nbCartItemArea .cartItem div h5, #nbCartArea #nbCart #nbCartItemArea .cartItem div h6, #nbBasketPage #nbInfoArea th, #nbBasketPage #nbCouponBox input, #nbFrontPage #box > div p, #nbFrontPage #nbProductsIntro h3, #nbFrontPage #nbProductsIntro #nbFeatures li, #nbPageOurStory p#nbFirstParagraph, #nbPageOurStory #nbFoundersNote p, .nbSampleProduct a h4, #nbSingleProduct .nbSharing a, #bnCheckoutThankYou th, #bnCheckoutThankYou td, #nbToast .toast-body {
  font-family: "Montserrat", sans-serif;
  font-optical-sizing: auto; }

.taglineFont, .currencyFont, #nbBasketPage #nbInfoArea td p, .nbPrice small, .nbPrice span:nth-of-type(1), nav#nbHeader #nbLogo #tagline, nav#nbHeader #nbLogo #tagline p, #nbFooterArea #nbLogo #tagline, #nbFooterArea #nbLogo #tagline p {
  font-family: "Teko", sans-serif;
  font-optical-sizing: auto; }

.primaryColor {
  color: #384c2c; }

.currencyFont, #nbBasketPage #nbInfoArea td p {
  color: #384c2c;
  font-weight: 800;
  font-size: 18px; }
  .currencyFont small, #nbBasketPage #nbInfoArea td p small {
    font-weight: 500; }
  .currencyFont::before, #nbBasketPage #nbInfoArea td p::before {
    content: '₹'; }

:root {
  color-scheme: only light; }

.hideScroll {
  overflow: hidden; }

label.mandatory::after {
  content: "*";
  color: red; }

.nbHeader {
  margin-top: 40px !important;
  margin-bottom: 30px;
  display: flex;
  flex-direction: column; }
  .nbHeader div {
    margin-top: 10px;
    margin: 0 12px;
    height: 5px;
    width: 100px;
    background-color: #384c2c; }
  .nbHeader p {
    font-size: 16px;
    font-weight: 400;
    margin: 20px 0 20px 0; }

.primaryText {
  color: #384c2c; }

.secondaryText {
  color: #a4d54d; }

.btn-custom {
  background-color: #a4d54d !important;
  color: #384c2c !important;
  padding: 5px 30px !important;
  border-radius: 5px;
  text-decoration: none;
  display: inline-block;
  margin-top: 10px;
  font-weight: 800 !important;
  font-size: 25px !important;
  letter-spacing: 1px; }
  .btn-custom:hover {
    background-color: #8cc12e !important;
    color: #506c3f !important;
    text-decoration: none; }
  .btn-custom.dark {
    background-color: #384c2c !important;
    color: #a4d54d !important; }
    .btn-custom.dark:hover {
      background-color: #202c19 !important;
      color: #b9df76 !important;
      text-decoration: none; }

.nbPrice {
  color: #384c2c;
  font-size: 35px; }
  .nbPrice small, .nbPrice span:nth-of-type(1) {
    font-weight: 700; }
    .nbPrice small::before, .nbPrice span:nth-of-type(1)::before {
      content: '₹';
      font-size: smaller; }
  .nbPrice small {
    font-weight: 300; }

#sdPolicies li {
  line-height: 21px;
  letter-spacing: 1px;
  font-size: 14px; }

.pulsing, .placeholder, .placeholderChildren h1,
.placeholderChildren .h1,
.placeholderChildren h2,
.placeholderChildren .h2,
.placeholderChildren .h3,
.placeholderChildren h3,
.placeholderChildren h4,
.placeholderChildren .h4,
.placeholderChildren .h5,
.placeholderChildren h5,
.placeholderChildren h6,
.placeholderChildren p,
.placeholderChildren label,
.placeholderChildren button,
.placeholderChildren textarea,
.placeholderChildren .specialPlaceholder,
.placeholderChildren .multiselect-dropdown,
.placeholderChildren .openObject, .placeholderChildren .specialPlaceholder2, .placeholderChildren .img {
  animation: pulse 2s infinite ease-in-out; }

@keyframes pulse {
  0% {
    background-color: #6f7c80; }
  50% {
    background-color: #bdbdbd; }
  100% {
    background-color: #6f7c80; } }

.placeholder {
  color: transparent;
  display: inline-block; }

.placeholder:after {
  content: "yoyoyoyoyoy"; }

.placeholderChildren {
  pointer-events: none; }
  .placeholderChildren h1,
  .placeholderChildren .h1,
  .placeholderChildren h2,
  .placeholderChildren .h2,
  .placeholderChildren .h3,
  .placeholderChildren h3,
  .placeholderChildren h4,
  .placeholderChildren .h4,
  .placeholderChildren .h5,
  .placeholderChildren h5,
  .placeholderChildren h6,
  .placeholderChildren p,
  .placeholderChildren label,
  .placeholderChildren button,
  .placeholderChildren textarea,
  .placeholderChildren .specialPlaceholder,
  .placeholderChildren .multiselect-dropdown,
  .placeholderChildren .openObject {
    color: transparent !important;
    border-radius: 0px !important;
    border-width: 0px !important; }
    .placeholderChildren h1 > *,
    .placeholderChildren h1 .forcedHide,
    .placeholderChildren h1 fa-icon,
    .placeholderChildren .h1 > *,
    .placeholderChildren .h1 .forcedHide,
    .placeholderChildren .h1 fa-icon,
    .placeholderChildren h2 > *,
    .placeholderChildren h2 .forcedHide,
    .placeholderChildren h2 fa-icon,
    .placeholderChildren .h2 > *,
    .placeholderChildren .h2 .forcedHide,
    .placeholderChildren .h2 fa-icon,
    .placeholderChildren .h3 > *,
    .placeholderChildren .h3 .forcedHide,
    .placeholderChildren .h3 fa-icon,
    .placeholderChildren h3 > *,
    .placeholderChildren h3 .forcedHide,
    .placeholderChildren h3 fa-icon,
    .placeholderChildren h4 > *,
    .placeholderChildren h4 .forcedHide,
    .placeholderChildren h4 fa-icon,
    .placeholderChildren .h4 > *,
    .placeholderChildren .h4 .forcedHide,
    .placeholderChildren .h4 fa-icon,
    .placeholderChildren .h5 > *,
    .placeholderChildren .h5 .forcedHide,
    .placeholderChildren .h5 fa-icon,
    .placeholderChildren h5 > *,
    .placeholderChildren h5 .forcedHide,
    .placeholderChildren h5 fa-icon,
    .placeholderChildren h6 > *,
    .placeholderChildren h6 .forcedHide,
    .placeholderChildren h6 fa-icon,
    .placeholderChildren p > *,
    .placeholderChildren p .forcedHide,
    .placeholderChildren p fa-icon,
    .placeholderChildren label > *,
    .placeholderChildren label .forcedHide,
    .placeholderChildren label fa-icon,
    .placeholderChildren button > *,
    .placeholderChildren button .forcedHide,
    .placeholderChildren button fa-icon,
    .placeholderChildren textarea > *,
    .placeholderChildren textarea .forcedHide,
    .placeholderChildren textarea fa-icon,
    .placeholderChildren .specialPlaceholder > *,
    .placeholderChildren .specialPlaceholder .forcedHide,
    .placeholderChildren .specialPlaceholder fa-icon,
    .placeholderChildren .multiselect-dropdown > *,
    .placeholderChildren .multiselect-dropdown .forcedHide,
    .placeholderChildren .multiselect-dropdown fa-icon,
    .placeholderChildren .openObject > *,
    .placeholderChildren .openObject .forcedHide,
    .placeholderChildren .openObject fa-icon {
      display: none !important; }
  .placeholderChildren label::after {
    content: '' !important; }
  .placeholderChildren .specialPlaceholder2 {
    color: transparent !important;
    border-width: 0px !important;
    background-image: unset; }
  .placeholderChildren .img {
    background-image: unset !important; }
  .placeholderChildren input[type="radio"],
  .placeholderChildren fa-icon,
  .placeholderChildren .forcedHide {
    display: none !important; }

.notPlaceholder {
  animation: none; }

nav#nbHeader {
  background-color: white !important;
  border: 1px solid #f0f0f0;
  height: 100px;
  position: relative;
  padding: 0 !important; }
  nav#nbHeader #nbLogo {
    position: relative;
    text-decoration: none;
    padding: 0px 10px;
    width: 246px; }
    nav#nbHeader #nbLogo h1, nav#nbHeader #nbLogo p {
      text-decoration: none !important;
      color: #384c2c; }
    nav#nbHeader #nbLogo h1 {
      font-size: 55px;
      margin-bottom: 0; }
    nav#nbHeader #nbLogo img {
      width: 60%; }
    nav#nbHeader #nbLogo #tagline {
      grid-column: span 2 / span 2;
      grid-column-start: 2;
      grid-row-start: 3;
      padding-left: 20px;
      display: flex;
      align-items: center;
      text-wrap: nowrap; }
      nav#nbHeader #nbLogo #tagline p {
        font-size: 22px; }
  nav#nbHeader a {
    color: #000; }
    nav#nbHeader a:hover, nav#nbHeader a:active, nav#nbHeader a:focus {
      color: #a4d54d !important; }
  nav#nbHeader a#nbEnquiry {
    display: flex;
    align-items: center;
    overflow: visible;
    gap: 0px;
    text-decoration: none;
    padding: 20px; }
    nav#nbHeader a#nbEnquiry #icon {
      border: solid 1px #505050;
      height: 30px;
      width: 30px;
      transform: rotate(45deg);
      border-radius: 9px;
      display: flex;
      justify-content: center;
      align-items: center; }
      nav#nbHeader a#nbEnquiry #icon i {
        color: #a4d54d;
        transform: rotate(-45deg);
        font-size: 16px; }
    nav#nbHeader a#nbEnquiry #text {
      margin-left: 30px;
      text-decoration: none;
      display: flex;
      flex-direction: column;
      text-decoration: none; }
      nav#nbHeader a#nbEnquiry #text p {
        margin-bottom: 0 !important; }
        nav#nbHeader a#nbEnquiry #text p:first-of-type {
          font-size: 20px; }
      nav#nbHeader a#nbEnquiry #text span {
        font-size: 12px;
        color: gray; }
  nav#nbHeader .navbar-toggler {
    border: 2px solid #384c2c !important;
    box-shadow: 0 0 0 0; }
    nav#nbHeader .navbar-toggler span.navbar-toggler-icon {
      color: #384c2c !important; }
  nav#nbHeader .nav-item a {
    font-size: 12px;
    font-weight: 700; }

#nbLgMenu {
  height: 50px;
  background-color: black;
  z-index: 9999;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 30px; }
  #nbLgMenu a {
    padding: 0 10px;
    color: #fff;
    font-weight: 800;
    text-decoration: none; }
    #nbLgMenu a#nbShop {
      color: #000;
      text-decoration: none;
      padding: 8px 20px;
      background-color: #fff;
      margin: 0 10px;
      border-radius: 40px;
      font-weight: 800; }

@media screen and (max-width: 768px) {
  nav#nbHeader {
    height: fit-content !important; }
    nav#nbHeader #nbLogo {
      display: flex !important;
      align-items: center !important;
      padding: 10px !important; }
      nav#nbHeader #nbLogo h1 {
        font-size: 45px !important; }
      nav#nbHeader #nbLogo p {
        font-size: 14px !important;
        margin-bottom: 0 !important; }
      nav#nbHeader #nbLogo img {
        margin: 10px; }
  #nbLgMenu {
    height: 8px !important; }
    #nbLgMenu a {
      display: none; }
  a#nbEnquiry {
    flex-direction: column; }
    a#nbEnquiry #icon {
      height: 55px !important;
      width: 55px !important;
      border-radius: 12px;
      margin-bottom: 20px; }
      a#nbEnquiry #icon i {
        color: #a4d54d;
        transform: rotate(-45deg);
        font-size: 25px !important; }
    a#nbEnquiry #text {
      margin-left: 0 !important; }
      a#nbEnquiry #text p {
        text-align: center; } }

#nbFooterArea {
  background-color: #d5d3c4 !important;
  background-image: url(http://ankurah.com/wp-content/uploads/2025/09/pattern-9d9863.svg); }
  #nbFooterArea #nbLogo {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(3, 1fr);
    height: 60% !important;
    position: relative;
    text-decoration: none;
    padding: 0px 10px; }
    #nbFooterArea #nbLogo:hover {
      opacity: 0.5;
      border-radius: 10px; }
    #nbFooterArea #nbLogo h1, #nbFooterArea #nbLogo p {
      text-decoration: none !important;
      color: #384c2c; }
    #nbFooterArea #nbLogo #logo {
      grid-row: span 3 / span 3;
      justify-self: end;
      align-self: center; }
    #nbFooterArea #nbLogo #name {
      grid-column: span 2 / span 2;
      grid-row: span 2 / span 2;
      font-size: 55px;
      padding-left: 20px;
      display: flex;
      align-items: end; }
      #nbFooterArea #nbLogo #name h1 {
        font-size: 65px;
        margin-bottom: 0; }
    #nbFooterArea #nbLogo #tagline {
      grid-column: span 2 / span 2;
      grid-column-start: 2;
      grid-row-start: 3;
      padding-left: 20px;
      display: flex;
      align-items: start; }
      #nbFooterArea #nbLogo #tagline p {
        font-size: 22px; }
  #nbFooterArea h4 {
    margin-top: 30px; }
  #nbFooterArea ul {
    padding: 0; }
    #nbFooterArea ul li {
      list-style-type: none;
      margin-bottom: 14px; }
      #nbFooterArea ul li a {
        text-decoration: none;
        font-size: 14px;
        letter-spacing: 1px;
        padding: 0px;
        color: #384c2c; }
  #nbFooterArea #nbContactUs a, #nbFooterArea ul li a {
    text-decoration: none;
    font-size: 12px;
    letter-spacing: 1px;
    padding: 0px;
    color: #384c2c !important; }
  #nbFooterArea #nbFooterIntro a {
    color: #384c2c;
    text-decoration: none;
    letter-spacing: 1px;
    font-size: 12px; }
    #nbFooterArea #nbFooterIntro a:hover {
      color: darkgrey; }

#nbCart {
  position: fixed;
  top: 0px;
  width: 400px;
  height: 100vh;
  background-color: white;
  right: 0px;
  box-shadow: rgba(99, 99, 99, 0.2) 0 2px 8px 0;
  transform: translateX(100%);
  transition: transform 0.5s;
  z-index: 99; }
  #nbCart.show {
    transform: translateX(0) !important; }
  #nbCart #nonEmptyCart {
    display: flex; }
  #nbCart #emptyCart {
    display: none; }
  #nbCart.empty #nonEmptyCart {
    display: none; }
  #nbCart.empty #emptyCart {
    display: flex; }
  #nbCart #nbCartItemArea {
    overflow-y: auto;
    flex-grow: 1; }
    #nbCart #nbCartItemArea .cartItem {
      display: grid;
      grid-template-columns: 30% 55% 15%; }
      #nbCart #nbCartItemArea .cartItem img {
        aspect-ratio: 1/1;
        max-width: 100%; }
      #nbCart #nbCartItemArea .cartItem div {
        display: flex;
        flex-direction: column;
        justify-content: center; }
        #nbCart #nbCartItemArea .cartItem div h5 {
          font-weight: 800; }
        #nbCart #nbCartItemArea .cartItem div h6 {
          font-weight: 300; }
      #nbCart #nbCartItemArea .cartItem button {
        line-height: 10px;
        border-width: 3px;
        height: 35px;
        width: 35px;
        padding: 0; }
        #nbCart #nbCartItemArea .cartItem button:nth-of-type(1) {
          border-radius: 4px 4px 0 0;
          border-bottom-width: 1.5px; }
        #nbCart #nbCartItemArea .cartItem button:nth-of-type(2) {
          border-radius: 0 0 4px 4px;
          border-top-width: 1.5px; }

#secondaryFooter {
  background-color: #000;
  min-height: 50px; }
  #secondaryFooter a {
    color: #fff !important;
    line-height: 50px;
    font-weight: 300;
    text-decoration: none !important; }
    @media only screen and (max-width: 517px) {
      #secondaryFooter a {
        line-height: 20px;
        padding: 10px 0; } }
    #secondaryFooter a:hover {
      color: #384c2c !important; }
  #secondaryFooter .d-flex div:nth-of-type(2) a {
    margin: 0 10px; }
  @media only screen and (min-width: 768px) {
    #secondaryFooter .d-flex div:nth-of-type(2) a {
      margin-left: 20px;
      margin-right: 0; } }

#nbCartArea #nbBackground {
  display: none;
  position: fixed;
  height: 100vh;
  width: 100vw;
  background-color: #000000aa;
  top: 0; }

#nbCartArea lottie-player {
  height: 200px;
  width: 200px; }

#nbCartArea #nbCart {
  position: fixed;
  top: 0px;
  width: 400px;
  height: 100vh;
  background-color: white;
  right: 0px;
  box-shadow: rgba(99, 99, 99, 0.2) 0 2px 8px 0;
  transform: translateX(100%);
  transition: transform 0.5s; }
  #nbCartArea #nbCart #nonEmptyCart {
    display: flex; }
    #nbCartArea #nbCart #nonEmptyCart h3 .warningMessage {
      font-size: 14px;
      font-weight: 700; }
  #nbCartArea #nbCart #emptyCart {
    display: none; }
  #nbCartArea #nbCart.empty #nonEmptyCart {
    display: none; }
  #nbCartArea #nbCart.empty #emptyCart {
    display: flex; }
  #nbCartArea #nbCart.empty.updating {
    display: none; }
  #nbCartArea #nbCart.updating #emptyCart {
    display: none !important; }
  #nbCartArea #nbCart #nbCartItemArea {
    overflow-y: auto;
    flex-grow: 1; }
    #nbCartArea #nbCart #nbCartItemArea .cartItem {
      display: grid;
      grid-template-columns: 30% 55% 15%; }
      #nbCartArea #nbCart #nbCartItemArea .cartItem img {
        aspect-ratio: 1/1;
        transform: scale(85%);
        border-radius: 10px; }
      #nbCartArea #nbCart #nbCartItemArea .cartItem div {
        display: flex;
        flex-direction: column;
        justify-content: center; }
        #nbCartArea #nbCart #nbCartItemArea .cartItem div h6 {
          font-weight: 300;
          color: #384c2c;
          font-weight: 800; }
          #nbCartArea #nbCart #nbCartItemArea .cartItem div h6 small {
            color: #a4d54d;
            font-weight: 400; }
      #nbCartArea #nbCart #nbCartItemArea .cartItem button {
        line-height: 10px;
        border-width: 3px;
        height: 35px;
        width: 35px;
        padding: 0 !important;
        margin-top: 0 !important;
        border-width: 0; }
        #nbCartArea #nbCart #nbCartItemArea .cartItem button:nth-of-type(1) {
          border-radius: 4px 4px 0 0;
          border-bottom-width: 1.5px;
          border-color: #384c2c; }
        #nbCartArea #nbCart #nbCartItemArea .cartItem button:nth-of-type(2) {
          border-radius: 0 0 4px 4px;
          border-top-width: 1.5px;
          border-color: #384c2c; }
  #nbCartArea #nbCart #nbCartFooterBox {
    background-color: #f0f0f0 !important;
    background: url(http://ankurah.com/wp-content/uploads/2025/09/pattern-9d9863.svg); }
    #nbCartArea #nbCart #nbCartFooterBox .nbCartTotal {
      font-weight: 800; }
      #nbCartArea #nbCart #nbCartFooterBox .nbCartTotal span {
        color: #384c2c !important; }
        #nbCartArea #nbCart #nbCartFooterBox .nbCartTotal span::before {
          content: "₹"; }

#nbCartArea #loader {
  display: none;
  position: fixed;
  height: 100vh;
  width: 100vw;
  background-color: #000000aa;
  top: 0;
  z-index: 9999999; }
  #nbCartArea #loader lottie-player {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%); }
  #nbCartArea #loader.show {
    display: block; }

@media screen and (max-width: 420px) {
  #nbCartArea #nbCart {
    width: 100% !important; } }

#nbCartArea.show #nbBackground {
  display: block; }

#nbCartArea.show #nbCart {
  transform: translateX(0) !important; }

#nbBasketPage {
  margin-top: 30px;
  margin-bottom: 30px; }
  #nbBasketPage #nbCartItemBox {
    background-color: #f0f0f0;
    border-width: 0; }
    #nbBasketPage #nbCartItemBox .cartItem {
      display: flex;
      justify-content: space-between;
      text-decoration: none;
      color: #000;
      padding: 10px;
      border-radius: 5px; }
      #nbBasketPage #nbCartItemBox .cartItem .currencyFont, #nbBasketPage #nbCartItemBox .cartItem #nbInfoArea td p, #nbBasketPage #nbInfoArea td #nbCartItemBox .cartItem p {
        font-size: 25px; }
      #nbBasketPage #nbCartItemBox .cartItem:hover {
        background-color: #fff; }
      #nbBasketPage #nbCartItemBox .cartItem img {
        width: 20% !important; }
      #nbBasketPage #nbCartItemBox .cartItem h5 {
        font-weight: 800; }
      #nbBasketPage #nbCartItemBox .cartItem button {
        line-height: 10px;
        border-width: 3px;
        height: 35px;
        width: 35px;
        padding: 0 !important;
        margin-top: 0 !important;
        border-width: 0; }
        #nbBasketPage #nbCartItemBox .cartItem button:nth-of-type(1) {
          border-radius: 4px 4px 0 0;
          border-bottom-width: 1.5px;
          border-color: #384c2c; }
        #nbBasketPage #nbCartItemBox .cartItem button:nth-of-type(2) {
          border-radius: 0 0 4px 4px;
          border-top-width: 1.5px;
          border-color: #384c2c; }
  #nbBasketPage #nbInfoArea {
    background-color: #a4d54d;
    background-image: url(http://ankurah.com/wp-content/uploads/2025/09/pattern-9d9863.svg);
    border: 15px solid transparent;
    padding: 15px;
    border-width: 10px 0 10px 0; }
    #nbBasketPage #nbInfoArea th, #nbBasketPage #nbInfoArea td {
      border-color: #384c2c;
      white-space: nowrap; }
    #nbBasketPage #nbInfoArea th {
      font-size: 14px; }
    #nbBasketPage #nbInfoArea td {
      font-size: 18px; }
    #nbBasketPage #nbInfoArea tr:last-of-type th, #nbBasketPage #nbInfoArea tr:last-of-type td {
      font-size: 21px; }
    #nbBasketPage #nbInfoArea button {
      font-size: 11px;
      padding: 5px; }
      #nbBasketPage #nbInfoArea button:hover {
        background-color: #384c2c;
        color: #fff; }
  #nbBasketPage #nbCouponBox {
    background-color: #d5d3c4;
    margin-top: 30px;
    border: 0; }
    #nbBasketPage #nbCouponBox input {
      height: 48px;
      border-width: 0;
      padding: 20px; }

#nbFrontPage #container {
  width: 100%;
  position: relative;
  overflow: visible;
  margin-bottom: 80px; }
  #nbFrontPage #container #box {
    height: 100px;
    width: 50%;
    max-width: 579px;
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #d5d3c4;
    z-index: 999;
    border-radius: 20px;
    display: grid;
    grid-template-columns: 50% 50%; }
    #nbFrontPage #container #box > div {
      height: 100px;
      display: flex; }
      #nbFrontPage #container #box > div > img {
        padding: 5%; }

#nbFrontPage #nbAboutUs:first-letter {
  font-size: 50px;
  float: left;
  font-size: 6rem;
  line-height: 0.65;
  color: #384c2c; }

@media only screen and (max-width: 995px) {
  #nbFrontPage #container #box {
    width: fit-content; }
    #nbFrontPage #container #box p {
      font-size: 12px; } }

@media only screen and (max-width: 600px) {
  #nbFrontPage #container {
    margin: 20px 0 20px 0;
    display: flex;
    justify-content: center;
    align-items: center; }
    #nbFrontPage #container #box {
      height: fit-content;
      width: 90% !important;
      max-width: unset;
      grid-template-columns: 50% 50%;
      grid-template-rows: 1fr;
      position: relative !important;
      left: unset !important;
      height: unset !important;
      transform: translate(0, 0) !important; }
      #nbFrontPage #container #box > div {
        flex-direction: column;
        height: unset !important;
        padding: 10px; }
        #nbFrontPage #container #box > div img {
          padding: 5%;
          aspect-ratio: 1/1; } }

#nbFrontPage #box > div > div {
  display: flex;
  flex-direction: column;
  justify-content: center; }

#nbFrontPage #box > div h3 {
  margin: 0px; }

#nbFrontPage #box > div p {
  font-size: 14px;
  margin-bottom: 0; }

#nbFrontPage #nbProductsIntro {
  background-image: url("http://ankurah.com/wp-content/uploads/2025/09/pattern-9d9863.svg");
  background-color: #f6f6f6;
  box-sizing: border-box; }
  #nbFrontPage #nbProductsIntro img {
    width: 100%;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
  #nbFrontPage #nbProductsIntro h2 {
    font-size: 55px;
    border-bottom: 2px solid #384c2c;
    display: inline-block;
    text-align: center;
    color: #384c2c; }
  #nbFrontPage #nbProductsIntro h3 {
    font-size: 40px;
    margin: 0;
    margin-top: 20px; }
  #nbFrontPage #nbProductsIntro h5 {
    font-size: 40px;
    color: #384c2c; }
  #nbFrontPage #nbProductsIntro p {
    font-size: 14px;
    line-height: 25px; }
    #nbFrontPage #nbProductsIntro p:first-letter {
      font-size: 50px;
      float: left;
      font-size: 6rem;
      line-height: 0.65; }
  #nbFrontPage #nbProductsIntro #nbFeatures {
    flex-direction: column;
    background-color: #a4d54d;
    padding: 20px;
    border-radius: 12px;
    background-image: url("http://ankurah.com/wp-content/uploads/2025/09/pattern-9d9863.svg"); }
    #nbFrontPage #nbProductsIntro #nbFeatures h6 {
      font-size: 30px;
      margin-bottom: 10px; }
    #nbFrontPage #nbProductsIntro #nbFeatures li {
      font-size: 14px; }

#nbPageOurStory p#nbFirstParagraph {
  font-size: 18px;
  text-align: justify;
  margin-bottom: 30px;
  line-height: 25px;
  letter-spacing: 1px; }
  #nbPageOurStory p#nbFirstParagraph::first-letter {
    font-size: 6rem;
    line-height: 0.65;
    float: left;
    color: #384c2c; }

#nbPageOurStory #nbFoundersNote {
  background-image: url("http://ankurah.com/wp-content/uploads/2025/09/pattern-9d9863.svg");
  background-color: #f6f6f6; }
  #nbPageOurStory #nbFoundersNote h2 {
    font-size: 40px;
    color: #384c2c;
    text-align: center;
    margin-bottom: 20px; }
  #nbPageOurStory #nbFoundersNote p {
    font-size: 16px;
    text-align: justify;
    line-height: 25px;
    letter-spacing: 1px;
    font-style: italic; }

#nbOurMotivePartial {
  background-image: url("http://ankurah.com/wp-content/uploads/2025/09/pattern-9d9863.svg");
  background-color: #f0f0f0;
  padding: 30px 0; }
  #nbOurMotivePartial h3 {
    font-size: 3rem; }
  #nbOurMotivePartial p::first-letter {
    font-size: 6rem;
    line-height: 0.65;
    float: left;
    color: #384c2c; }

.nbSampleProduct {
  border-radius: 10px; }
  .nbSampleProduct:hover {
    background-color: #f0f0f0; }
  .nbSampleProduct a {
    text-decoration: none; }
    .nbSampleProduct a img {
      margin-top: 20px; }
    .nbSampleProduct a h4 {
      font-weight: 700;
      color: #384c2c;
      text-decoration: none !important;
      height: 64px;
      margin-bottom: 0; }
      .nbSampleProduct a h4:hover {
        text-decoration: underline;
        color: #202c19; }
    .nbSampleProduct a h6 {
      color: gray; }

#nbSingleProduct .nbBreadcrumb {
  font-size: 14px;
  margin-top: 20px; }
  #nbSingleProduct .nbBreadcrumb a, #nbSingleProduct .nbBreadcrumb span {
    font-size: 16px;
    text-decoration: none;
    color: #384c2c; }
  #nbSingleProduct .nbBreadcrumb span {
    color: gray;
    cursor: not-allowed; }
  #nbSingleProduct .nbBreadcrumb a:hover {
    text-decoration: underline;
    color: #202c19; }

#nbSingleProduct .nbFeatures {
  justify-content: center; }
  #nbSingleProduct .nbFeatures div {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 0 20px; }
    #nbSingleProduct .nbFeatures div img {
      width: 65% !important;
      margin-bottom: 10px; }

#nbSingleProduct .nbShortDescription {
  font-size: 12px;
  letter-spacing: 1px;
  line-height: 20px;
  font-style: italic; }

#nbSingleProduct .nbSharing {
  display: flex;
  justify-content: center;
  margin-top: 10px; }
  #nbSingleProduct .nbSharing a {
    color: gray;
    text-transform: uppercase;
    margin: 10px;
    font-size: 14px;
    font-weight: 300;
    text-decoration: none;
    font-size: 12px; }
    #nbSingleProduct .nbSharing a i {
      margin-right: 10px; }

#nbProductDescription {
  background-color: #a4d54d;
  background-image: url(http://ankurah.com/wp-content/uploads/2025/09/pattern-9d9863.svg); }
  #nbProductDescription p {
    margin: 30px 0px; }

#bnCheckoutThankYou {
  margin: 30px 0; }
  #bnCheckoutThankYou h1 {
    font-size: 55px; }
  #bnCheckoutThankYou th, #bnCheckoutThankYou td {
    font-size: 13px; }
  #bnCheckoutThankYou td, #bnCheckoutThankYou th {
    border-style: dashed;
    border-color: #000; }
  #bnCheckoutThankYou #nbInfoArea {
    background-color: #a4d54d;
    background-image: url(http://ankurah.com/wp-content/uploads/2025/09/pattern-9d9863.svg);
    border: 15px solid transparent;
    padding: 15px;
    border-width: 10px 0 10px 0; }
    #bnCheckoutThankYou #nbInfoArea .col-md-3 {
      display: flex;
      flex-direction: column;
      align-items: center; }
      #bnCheckoutThankYou #nbInfoArea .col-md-3 span {
        font-size: 25px;
        text-align: center; }
      #bnCheckoutThankYou #nbInfoArea .col-md-3:nth-of-type(2) {
        border: 1px dashed grey;
        border-width: 0 1px 0 1px; }
      #bnCheckoutThankYou #nbInfoArea .col-md-3 p {
        font-weight: 700;
        text-align: center; }
  #bnCheckoutThankYou #nbAddress h5 {
    font-size: 25px; }
  #bnCheckoutThankYou #nbAddress p {
    font-size: 13px; }

#nbToast {
  background-color: #d5d3c4;
  border-left: 15px solid #384c2c; }
  #nbToast .toast-header {
    background-color: #c0bda6; }
    #nbToast .toast-header strong {
      color: #384c2c;
      font-size: 25px; }
  #nbToast .toast-body {
    font-size: 13px; }
`, "",{"version":3,"sources":["webpack://./src/style/main.scss","webpack://./src/style/variables.scss","webpack://./src/style/placeholder.scss","webpack://./src/style/header.scss","webpack://./src/style/footer.scss","webpack://./src/style/cart.scss","webpack://./src/style/basket-page.scss","webpack://./src/style/front-page.scss","webpack://./src/style/page-our-story.scss","webpack://./src/style/our-motive-partials.scss","webpack://./src/style/sample-product.scss","webpack://./src/style/single-product.scss","webpack://./src/style/thankyou.scss","webpack://./src/style/toast.scss"],"names":[],"mappings":"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","sourcesContent":["@import 'variables';\r\n@import 'placeholder';\r\n@import 'header';\r\n@import 'footer';\r\n\r\n@import 'cart';\r\n@import 'basket-page';\r\n@import 'front-page';\r\n// @import 'page-blog';\r\n@import 'page-our-story';\r\n// @import 'page-privacy-policy';\r\n// @import 'page-terms-and-conditions';\r\n// @import 'checkout';\r\n\r\n@import 'our-motive-partials';\r\n@import 'sample-product';\r\n@import 'single-product';\r\n// @import 'store-locator';\r\n// @import 'review-carousel';\r\n@import 'thankyou';\r\n@import 'toast';","$heroColor: #d5d3c4;\r\n$primaryColor: #384c2c;\r\n$secondaryColor: #a4d54d;\r\n\r\n$lightGray: #f0f0f0;\r\n\r\n$mobile: 576px;\r\n$tablet: 768px;\r\n$desktop: 992px;\r\n$wide: 1200px;\r\n\r\na,h3,h4,h4,h5,h6,p{\r\n    @extend .primaryFont;\r\n}\r\n\r\nbody{\r\n    background-color: transparent !important;\r\n}\r\n\r\nbutton:disabled{\r\n    cursor: not-allowed;\r\n}\r\n\r\n.hideScroller{\r\n    overflow-y: hidden;\r\n}\r\n\r\n.heroFont {\r\n  font-family: \"Amatic SC\", sans-serif !important;\r\n  font-weight: 700;\r\n}\r\n\r\n.primaryFont{\r\n    font-family: \"Montserrat\", sans-serif;\r\n    font-optical-sizing: auto;\r\n}\r\n\r\n.taglineFont{\r\n    font-family: \"Teko\", sans-serif;\r\n    font-optical-sizing: auto;\r\n}\r\n\r\n.primaryColor{\r\n    color: $primaryColor;\r\n}\r\n\r\n.currencyFont{\r\n    @extend .taglineFont;\r\n    color: $primaryColor;\r\n    font-weight: 800;\r\n    font-size: 18px;\r\n\r\n    small{\r\n        font-weight: 500;\r\n    }\r\n\r\n    &::before{\r\n        content: '₹';\r\n    }\r\n}\r\n\r\n:root {\r\n    color-scheme: only light;\r\n}\r\n\r\n.hideScroll{\r\n    overflow: hidden;\r\n}\r\n\r\nlabel.mandatory::after{\r\n    content: \"*\";\r\n    color: red;\r\n}\r\n\r\n.nbHeader{\r\n    margin-top: 40px !important;\r\n    margin-bottom: 30px;\r\n    display: flex;\r\n    flex-direction: column;\r\n \r\n    div{\r\n        margin-top: 10px;\r\n        margin: 0 12px;\r\n        height: 5px;\r\n        width: 100px;\r\n        background-color: $primaryColor;\r\n    }\r\n\r\n    p{\r\n        @extend .primaryFont;\r\n        font-size: 16px;\r\n        font-weight: 400;\r\n        margin: 20px 0 20px 0;\r\n    }\r\n}\r\n\r\n.primaryText{\r\n    color: $primaryColor;\r\n}\r\n\r\n.secondaryText{\r\n    color: $secondaryColor;\r\n}\r\n\r\n.btn-custom{\r\n    @extend .heroFont;\r\n    background-color: $secondaryColor !important;\r\n    color: $primaryColor !important;\r\n    padding: 5px 30px !important;\r\n    border-radius: 5px;\r\n    text-decoration: none;\r\n    display: inline-block;\r\n    margin-top: 10px;\r\n    font-weight: 800 !important;\r\n    font-size: 25px !important;\r\n    letter-spacing: 1px;\r\n    \r\n\r\n    &:hover{\r\n        background-color: darken($secondaryColor, 10%) !important;\r\n        color: lighten($primaryColor, 10%) !important;\r\n        text-decoration: none;\r\n    }\r\n\r\n    &.dark{\r\n        background-color: $primaryColor !important;\r\n        color: $secondaryColor !important;\r\n\r\n        &:hover{\r\n            background-color: darken($primaryColor, 10%) !important;\r\n            color: lighten($secondaryColor, 10%) !important;\r\n            text-decoration: none;\r\n        }\r\n    }\r\n}\r\n\r\n.nbPrice{\r\n    color: $primaryColor;\r\n    font-size: 35px;\r\n\r\n    small,span:nth-of-type(1){\r\n        @extend .taglineFont;\r\n        font-weight: 700;\r\n\r\n        &::before{\r\n            content: '₹';\r\n            font-size: smaller;\r\n        }\r\n    }\r\n\r\n    .badge{\r\n        @extend .primaryFont;\r\n    }\r\n\r\n    small{\r\n        font-weight: 300;\r\n    }\r\n}\r\n\r\n#sdPolicies{\r\n    h1{\r\n        @extend .heroFont;\r\n    }\r\n\r\n    li{\r\n        @extend .primaryFont;\r\n        line-height: 21px;\r\n        letter-spacing: 1px;\r\n        font-size: 14px;\r\n    }\r\n}","$color1: #6f7c80;\r\n$color2: #bdbdbd;\r\n\r\n.pulsing {\r\n    animation: pulse 2s infinite ease-in-out;\r\n  }\r\n  \r\n  @keyframes pulse {\r\n    0% {\r\n      background-color: $color1;\r\n    }\r\n    50% {\r\n      background-color: $color2;\r\n    }\r\n    100% {\r\n      background-color: $color1;\r\n    }\r\n}\r\n\r\n///////////////////////////////////////////////\r\n\r\n.placeholder {\r\n    @extend .pulsing;\r\n    color: transparent;\r\n    display: inline-block;\r\n}\r\n  \r\n.placeholder:after {\r\ncontent: \"yoyoyoyoyoy\";\r\n}\r\n\r\n.placeholderChildren {\r\npointer-events: none;\r\n\r\nh1,\r\n.h1,\r\nh2,\r\n.h2,\r\n.h3,\r\nh3,\r\nh4,\r\n.h4,\r\n.h5,\r\nh5,\r\nh6,\r\np,\r\nlabel,\r\nbutton,\r\ntextarea,\r\n.specialPlaceholder,\r\n.multiselect-dropdown,\r\n.openObject {\r\n    @extend .pulsing;\r\n    color: transparent !important;\r\n    border-radius: 0px !important;\r\n    border-width: 0px !important;\r\n    // display: inline-block;\r\n\r\n    > *,\r\n    .forcedHide,\r\n    fa-icon {\r\n    display: none !important;\r\n    }\r\n}\r\n\r\nlabel::after{\r\n  content: '' !important;\r\n}\r\n\r\n.specialPlaceholder2{\r\n    @extend .pulsing;\r\n    color: transparent !important;\r\n    border-width: 0px !important;\r\n    background-image: unset;\r\n}\r\n\r\n.img {\r\n    background-image: unset !important;\r\n    @extend .pulsing;\r\n}\r\n\r\ninput[type=\"radio\"],\r\nfa-icon,\r\n.forcedHide {\r\n    display: none !important;\r\n}\r\n\r\n// ,h2,h3,h4,h5,h6,label\r\n\r\n// h1,h2,h3,h4,h5,h6,label:after{\r\n//     content: 'yoyoyoyoyoy';\r\n// }\r\n}\r\n\r\n.notPlaceholder{\r\nanimation: none;\r\n}","nav#nbHeader{\r\n    background-color: white !important;\r\n    border: 1px solid $lightGray;\r\n    height: 100px;\r\n    position: relative;\r\n    padding: 0 !important;\r\n    \r\n\r\n    #nbLogo{\r\n        position: relative;\r\n        text-decoration: none;\r\n        padding: 0px 10px;\r\n        width: 246px;\r\n\r\n        // &:hover{\r\n        //     background-color: $lightGray;\r\n        //     border-radius: 10px;\r\n        // }\r\n\r\n        h1,p{\r\n            text-decoration: none !important;\r\n            color: $primaryColor;\r\n        }\r\n\r\n        h1{\r\n            font-size: 55px;\r\n            margin-bottom: 0;\r\n        }\r\n\r\n        img{\r\n            width: 60%;\r\n        }\r\n\r\n        #tagline{\r\n            @extend .taglineFont;\r\n            grid-column: span 2 / span 2;\r\n            grid-column-start: 2;\r\n            grid-row-start: 3;\r\n            padding-left: 20px;\r\n            display: flex;\r\n            align-items: center;\r\n            text-wrap: nowrap;\r\n         \r\n            p{\r\n                @extend .taglineFont;\r\n                font-size: 22px;\r\n            }\r\n        }\r\n    }\r\n    \r\n    a{\r\n        color: #000;\r\n\r\n        &:hover,&:active,&:focus {\r\n            color: $secondaryColor !important;\r\n        }\r\n    }\r\n\r\n    a#nbEnquiry{\r\n        display: flex;\r\n        align-items: center;\r\n        overflow: visible;\r\n        gap: 0px;\r\n        text-decoration: none;\r\n        padding: 20px;\r\n\r\n        #icon{\r\n            border: solid 1px #505050;\r\n            height: 30px;\r\n            width: 30px;\r\n            transform: rotate(45deg);\r\n            // margin-left: 30px;\r\n            border-radius: 9px;\r\n            display: flex;\r\n            justify-content: center;\r\n            align-items: center;\r\n\r\n            i{\r\n                color: $secondaryColor;\r\n                transform: rotate(-45deg);\r\n                font-size: 16px;\r\n            }\r\n        }\r\n\r\n        #text{\r\n            margin-left: 30px;\r\n            text-decoration: none;\r\n            display: flex;\r\n            flex-direction: column;\r\n            text-decoration: none;\r\n\r\n            p{\r\n                margin-bottom: 0 !important;\r\n\r\n                &:first-of-type{\r\n                    font-size: 20px;\r\n                }\r\n            }\r\n\r\n            span{\r\n                font-size: 12px;\r\n                color: gray;\r\n            }\r\n        }\r\n\r\n        // &:hover{\r\n        //     background-color: $lightGray;\r\n        //     border-radius: 10px;\r\n            \r\n        //     p{\r\n        //         color: $primaryColor;\r\n        //     }\r\n        // }\r\n    }\r\n\r\n    .navbar-toggler{\r\n        border: 2px solid $primaryColor !important;\r\n        box-shadow: 0 0 0 0;\r\n\r\n        span.navbar-toggler-icon{\r\n            color: $primaryColor !important;\r\n        }\r\n    }\r\n\r\n    .nav-item a{\r\n        font-size: 12px;\r\n        font-weight: 700;\r\n    }\r\n}\r\n\r\n#nbLgMenu{\r\n    height: 50px;\r\n    background-color: black;\r\n    z-index: 9999;\r\n    display: flex;\r\n    justify-content: center;\r\n    align-items: center;\r\n    padding: 0 30px;\r\n\r\n    a{\r\n        padding: 0 10px;\r\n        color: #fff;\r\n        font-weight: 800;\r\n        text-decoration: none;\r\n\r\n        &#nbShop{\r\n            color: #000;\r\n            text-decoration: none;\r\n            padding: 8px 20px;\r\n            background-color: #fff;\r\n            margin: 0 10px;\r\n            border-radius: 40px;\r\n            font-weight: 800;\r\n        }\r\n    }\r\n}\r\n\r\n@media screen and (max-width: 768px){\r\n    nav#nbHeader{\r\n        height: fit-content !important;\r\n\r\n        #nbLogo{\r\n            display: flex !important;\r\n            align-items: center !important;\r\n            padding: 10px !important;\r\n\r\n            h1{\r\n                font-size: 45px !important;\r\n            }\r\n\r\n            p{\r\n                font-size: 14px !important;\r\n                margin-bottom: 0 !important;\r\n            }\r\n\r\n            img{\r\n                margin: 10px;\r\n            }\r\n        }\r\n    }\r\n\r\n    #nbLgMenu{\r\n        height: 8px !important;\r\n\r\n        a{\r\n            display: none;\r\n        }\r\n    }\r\n\r\n    a#nbEnquiry{\r\n        flex-direction: column;\r\n\r\n        #icon{\r\n            height: 55px !important;\r\n            width: 55px !important;\r\n            border-radius: 12px;\r\n            margin-bottom: 20px;\r\n\r\n            i{\r\n                color: $secondaryColor;\r\n                transform: rotate(-45deg);\r\n                font-size: 25px !important;\r\n            }\r\n        }\r\n\r\n        #text{\r\n            margin-left: 0 !important;\r\n\r\n            p{\r\n                text-align: center;\r\n            }\r\n        }\r\n    }\r\n}","#nbFooterArea{\r\n    background-color: $heroColor !important;\r\n    background-image: url(http://ankurah.com/wp-content/uploads/2025/09/pattern-9d9863.svg);\r\n\r\n    #nbLogo{\r\n        display: grid;\r\n        grid-template-columns: repeat(3,1fr);\r\n        grid-template-rows: repeat( 3,1fr);\r\n        height: 60% !important;\r\n        position: relative;\r\n        text-decoration: none;\r\n        padding: 0px 10px;\r\n\r\n        &:hover{\r\n            opacity: 0.5;\r\n            border-radius: 10px;\r\n        }\r\n\r\n        h1,p{\r\n            text-decoration: none !important;\r\n            color: $primaryColor;\r\n        }\r\n\r\n        #logo{\r\n            grid-row: span 3 / span 3;\r\n            justify-self: end;\r\n\r\n            align-self: center;\r\n        }\r\n\r\n        #name{\r\n            grid-column: span 2 / span 2;\r\n            grid-row: span 2 / span 2;\r\n            font-size: 55px;\r\n            padding-left: 20px;\r\n            display: flex;\r\n            align-items: end;\r\n\r\n            h1{\r\n                font-size: 65px;\r\n                margin-bottom: 0;\r\n            }\r\n        }\r\n\r\n        #tagline{\r\n            @extend .taglineFont;\r\n            grid-column: span 2 / span 2;\r\n            grid-column-start: 2;\r\n            grid-row-start: 3;\r\n            padding-left: 20px;\r\n            display: flex;\r\n            align-items: start;\r\n         \r\n            p{\r\n                @extend .taglineFont;\r\n                font-size: 22px;\r\n            }\r\n        }\r\n    }\r\n\r\n    h4{\r\n        @extend .heroFont;\r\n        margin-top: 30px;\r\n    }\r\n\r\n    ul{\r\n        padding: 0;\r\n\r\n        li{\r\n            list-style-type: none;\r\n            margin-bottom: 14px;\r\n         \r\n            a{\r\n                text-decoration: none;\r\n                font-size: 14px;\r\n                letter-spacing: 1px;\r\n                padding: 0px;\r\n                color: $primaryColor;\r\n            }\r\n        }\r\n    }\r\n\r\n    #nbContactUs a,ul li a{\r\n        text-decoration: none;\r\n        font-size: 12px;\r\n\r\n        letter-spacing: 1px;\r\n        padding: 0px;\r\n        color: $primaryColor !important;\r\n    }\r\n\r\n    #nbFooterIntro a{\r\n        color: $primaryColor;        \r\n        text-decoration: none;\r\n        letter-spacing: 1px;\r\n        font-size: 12px;\r\n\r\n        &:hover{\r\n            color :  darkgrey;\r\n\r\n        }\r\n    }\r\n}\r\n\r\n#nbCart{\r\n    position:fixed;\r\n    top:0px;\r\n    width:400px;\r\n    height: 100vh;\r\n    background-color: white;\r\n    right: 0px;\r\n    box-shadow: rgba(99,99,99,.2) 0 2px 8px 0;\r\n    transform: translateX(100%);\r\n    transition: transform 0.5s;\r\n    z-index: 99;\r\n\r\n    &.show{\r\n        transform: translateX(0) !important;\r\n    }\r\n\r\n    #nonEmptyCart{\r\n        display: flex;\r\n    }\r\n\r\n    #emptyCart{\r\n        display: none;\r\n    }\r\n\r\n    \r\n\r\n    &.empty{\r\n        #nonEmptyCart{\r\n            display: none;\r\n        }\r\n\r\n        #emptyCart{\r\n            display: flex;\r\n        }\r\n    }\r\n    \r\n    #nbCartItemArea{\r\n        overflow-y: auto;\r\n        flex-grow: 1;\r\n\r\n        .cartItem{\r\n            display: grid;\r\n            grid-template-columns: 30% 55% 15%;\r\n\r\n            img{\r\n                aspect-ratio: 1/1;\r\n                max-width: 100%;\r\n            }\r\n    \r\n            div{\r\n                display: flex;\r\n                flex-direction: column;\r\n                justify-content: center;\r\n    \r\n                h5{\r\n                    @extend .primaryFont;\r\n                    font-weight: 800;\r\n                }\r\n\r\n                @media screen and (max-width: 420px){\r\n                    \r\n                }\r\n    \r\n                h6{\r\n                    // @extend .secondaryFont;\r\n                    font-weight: 300;\r\n                }\r\n            }\r\n\r\n            button{\r\n                line-height: 10px;\r\n                border-width: 3px;\r\n                height: 35px;\r\n                width: 35px;\r\n                padding: 0;\r\n\r\n                &:nth-of-type(1){\r\n                    border-radius: 4px 4px 0 0;\r\n                    border-bottom-width: 1.5px;\r\n                }\r\n\r\n                &:nth-of-type(2){\r\n                    border-radius: 0 0 4px 4px;\r\n                    border-top-width: 1.5px;\r\n                }\r\n            }\r\n        }\r\n    }   \r\n}\r\n\r\n#secondaryFooter{\r\n    background-color: #000;\r\n    min-height: 50px;\r\n    \r\n    a{\r\n        // @extend .secondaryFont;\r\n        color: #fff !important;\r\n        line-height: 50px;\r\n        font-weight: 300;\r\n        text-decoration: none !important;\r\n\r\n        @media only screen and (max-width: 517px) {\r\n            line-height: 20px;\r\n            padding: 10px 0;\r\n        }\r\n\r\n        &:hover{\r\n            color: $primaryColor !important;\r\n        }\r\n    }\r\n\r\n    .d-flex{\r\n        div:nth-of-type(2) a{\r\n            margin: 0 10px;\r\n        }\r\n\r\n        @media only screen and (min-width: $tablet) {\r\n            div:nth-of-type(2) a{\r\n                margin-left : 20px;\r\n                margin-right: 0;\r\n            }\r\n        }\r\n    }\r\n}","#nbCartArea{\r\n    #nbBackground{\r\n        display: none;\r\n        position: fixed;\r\n        height: 100vh;\r\n        width: 100vw;\r\n        background-color: #000000aa;\r\n        top:0;        \r\n    }\r\n\r\n    lottie-player{\r\n        height: 200px;\r\n        width: 200px\r\n    }\r\n\r\n    #nbCart{\r\n        position:fixed;\r\n        top:0px;\r\n        width:400px;\r\n        height: 100vh;\r\n        background-color: white;\r\n        right: 0px;\r\n        box-shadow: rgba(99,99,99,.2) 0 2px 8px 0;\r\n        transform: translateX(100%);\r\n        transition: transform 0.5s;\r\n    \r\n        #nonEmptyCart{\r\n            display: flex;\r\n\r\n            h3{\r\n                // box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);\r\n                // -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);\r\n                // -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);\r\n\r\n                .warningMessage{\r\n                    @extend .primaryFont;\r\n                    font-size: 14px;\r\n                    font-weight: 700;\r\n                }\r\n            }\r\n        }\r\n    \r\n        #emptyCart{\r\n            display: none;\r\n        }\r\n    \r\n        &.empty{\r\n            #nonEmptyCart{\r\n                display: none;\r\n            }\r\n    \r\n            #emptyCart{\r\n                display: flex;\r\n            }\r\n\r\n            &.updating{\r\n                display: none;\r\n            }\r\n        }\r\n\r\n        &.updating {\r\n            #emptyCart{\r\n                display: none !important;\r\n            }\r\n        }\r\n        \r\n        #nbCartItemArea{\r\n            overflow-y: auto;\r\n            flex-grow: 1;\r\n    \r\n            .cartItem{\r\n                display: grid;\r\n                grid-template-columns: 30% 55% 15%;\r\n    \r\n                img{\r\n                    aspect-ratio: 1/1;\r\n                    transform: scale(85%);\r\n                    border-radius: 10px;\r\n                }\r\n        \r\n                div{\r\n                    display: flex;\r\n                    flex-direction: column;\r\n                    justify-content: center;\r\n        \r\n                    h5{\r\n                        @extend .primaryFont;\r\n                    }\r\n    \r\n                    @media screen and (max-width: 420px){\r\n                        \r\n                    }\r\n        \r\n                    h6{\r\n                        @extend .primaryFont;\r\n                        font-weight: 300;\r\n                        color: $primaryColor;\r\n                        font-weight: 800;\r\n\r\n                        small{\r\n                            color: $secondaryColor;\r\n                            font-weight: 400;\r\n                        }\r\n                    }\r\n                }\r\n    \r\n                button{\r\n                    line-height: 10px;\r\n                    border-width: 3px;\r\n                    height: 35px;\r\n                    width: 35px;\r\n                    padding: 0 !important;\r\n                    margin-top: 0 !important;\r\n                    border-width: 0;\r\n    \r\n                    &:nth-of-type(1){\r\n                        border-radius: 4px 4px 0 0;\r\n                        border-bottom-width: 1.5px;\r\n                        border-color: $primaryColor;\r\n                    }\r\n    \r\n                    &:nth-of-type(2){\r\n                        border-radius: 0 0 4px 4px;\r\n                        border-top-width: 1.5px;\r\n                        border-color: $primaryColor;\r\n                    }\r\n                }\r\n            }\r\n        }\r\n\r\n        #nbCartFooterBox{\r\n            background-color: $lightGray !important;\r\n            background: url(http://ankurah.com/wp-content/uploads/2025/09/pattern-9d9863.svg);\r\n\r\n            .nbCartTotal{\r\n                font-weight: 800;\r\n            \r\n                span{\r\n                    color: $primaryColor !important;\r\n\r\n                    &::before{\r\n                        content: \"₹\";\r\n                    }\r\n                }\r\n            }\r\n        }\r\n    }\r\n\r\n    #loader{\r\n        display: none;\r\n        position: fixed;\r\n        height: 100vh;\r\n        width: 100vw;\r\n        background-color: #000000aa;\r\n        top: 0;\r\n        z-index: 9999999;\r\n\r\n        lottie-player{\r\n            position: absolute;\r\n            top: 50%;\r\n            left: 50%;\r\n            transform: translateX(-50%) translateY(-50%);\r\n        }\r\n\r\n        &.show{\r\n            display: block;\r\n        }\r\n    }\r\n    \r\n    @media screen and (max-width: 420px){\r\n        #nbCart{\r\n            width: 100% !important;\r\n        }\r\n    }\r\n}\r\n\r\n#nbCartArea{\r\n    &.show{\r\n        #nbBackground{\r\n            display: block;\r\n        }\r\n\r\n        #nbCart{\r\n            transform: translateX(0) !important;\r\n        }\r\n    }\r\n}","#nbBasketPage{\r\n    margin-top: 30px;\r\n    margin-bottom: 30px;\r\n\r\n    #nbCartItemBox{\r\n        background-color: $lightGray;\r\n        border-width: 0;\r\n\r\n        .cartItem{\r\n            display: flex;\r\n            justify-content: space-between;\r\n            text-decoration: none;\r\n            color: #000;\r\n            padding: 10px;\r\n            border-radius: 5px;\r\n\r\n            .currencyFont{\r\n                font-size: 25px;\r\n            }\r\n\r\n            &:hover{\r\n                background-color: #fff;\r\n            }\r\n\r\n            img{\r\n                width: 20% !important;\r\n            }\r\n\r\n            h5{\r\n                font-weight: 800;\r\n            }\r\n\r\n            button{\r\n                line-height: 10px;\r\n                border-width: 3px;\r\n                height: 35px;\r\n                width: 35px;\r\n                padding: 0 !important;\r\n                margin-top: 0 !important;\r\n                border-width: 0;\r\n\r\n                &:nth-of-type(1){\r\n                    border-radius: 4px 4px 0 0;\r\n                    border-bottom-width: 1.5px;\r\n                    border-color: $primaryColor;\r\n                }\r\n\r\n                &:nth-of-type(2){\r\n                    border-radius: 0 0 4px 4px;\r\n                    border-top-width: 1.5px;\r\n                    border-color: $primaryColor;\r\n                }\r\n            }\r\n        }\r\n    }\r\n\r\n    #nbInfoArea{\r\n        background-color: $secondaryColor;\r\n        background-image: url(http://ankurah.com/wp-content/uploads/2025/09/pattern-9d9863.svg);\r\n        border: 15px solid transparent;\r\n        padding: 15px;\r\n        border-width: 10px 0 10px 0;\r\n\r\n        th,td{\r\n            border-color: $primaryColor;\r\n            white-space: nowrap;\r\n        }\r\n\r\n        th{\r\n            @extend .primaryFont;\r\n            font-size: 14px\r\n        }\r\n\r\n        td{\r\n            font-size: 18px;\r\n\r\n            p{\r\n                @extend .currencyFont;\r\n            }\r\n        }\r\n\r\n        tr:last-of-type{\r\n            th,td{\r\n                font-size: 21px;\r\n            }\r\n        }\r\n\r\n        button{\r\n            font-size: 11px;\r\n            padding: 5px;\r\n\r\n            &:hover{\r\n                background-color: $primaryColor;\r\n                color: #fff;\r\n            }\r\n        }\r\n    }\r\n\r\n    #nbCouponBox{\r\n        background-color: $heroColor;\r\n        margin-top: 30px;\r\n        border: 0;\r\n\r\n        input{\r\n            @extend .primaryFont;\r\n            height: 48px;\r\n            border-width: 0;\r\n            padding: 20px;\r\n        }\r\n    }\r\n}","#nbFrontPage{\r\n    #container{\r\n        width:100%;\r\n        position: relative;\r\n        overflow: visible;\r\n        margin-bottom: 80px;\r\n\r\n        #box{\r\n            height: 100px;\r\n            width: 50%;\r\n            max-width: 579px;\r\n            position: absolute;\r\n            top: 100%;\r\n            left: 50%;\r\n            transform: translate(-50%,-50%);\r\n            background-color:#d5d3c4;\r\n            z-index:999;\r\n            border-radius: 20px;\r\n            display: grid;\r\n            grid-template-columns: 50% 50%;\r\n\r\n            &>div{\r\n                height: 100px;\r\n                display: flex;\r\n\r\n                &>img{\r\n                    padding: 5%;\r\n                }\r\n            }\r\n        }\r\n    }\r\n\r\n    #nbAboutUs:first-letter{\r\n        @extend .heroFont;\r\n        font-size: 50px;\r\n        float: left;\r\n        font-size: 6rem;\r\n        line-height: 0.65;\r\n        color: $primaryColor;\r\n    }\r\n\r\n    @media only screen and (max-width: 995px) {\r\n        #container{\r\n            #box{\r\n                width: fit-content;\r\n\r\n                p{\r\n                    font-size: 12px;\r\n                }\r\n            }\r\n        }\r\n    }\r\n\r\n    @media only screen and (max-width: 600px) {\r\n        #container{\r\n            margin: 20px 0 20px 0;\r\n            display: flex;\r\n            justify-content: center;\r\n            align-items: center;\r\n\r\n            #box{\r\n                height: fit-content;\r\n                width: 90% !important;\r\n                max-width: unset;\r\n                grid-template-columns: 50% 50%;\r\n                grid-template-rows: 1fr;\r\n                position: relative !important;\r\n                left: unset !important;\r\n                height: unset !important;\r\n                transform: translate(0, 0) !important;\r\n\r\n                &>div{\r\n                    flex-direction: column;\r\n                    height: unset !important;\r\n                    padding:10px;\r\n\r\n                    img{\r\n                        padding: 5%;\r\n                        aspect-ratio:1/1;\r\n                    }\r\n                }\r\n            }\r\n        }\r\n    }\r\n\r\n    #box>div>div{\r\n        display: flex;\r\n        flex-direction: column;\r\n        justify-content: center;\r\n    }\r\n\r\n    #box>div h3{\r\n        @extend .heroFont;\r\n        margin:0px;\r\n    }\r\n\r\n    #box>div p{\r\n        @extend .primaryFont;\r\n        font-size:14px;\r\n        margin-bottom: 0;\r\n    }\r\n\r\n    #nbProductsIntro{\r\n        background-image: url('http://ankurah.com/wp-content/uploads/2025/09/pattern-9d9863.svg');\r\n        background-color: rgb(246, 246, 246);\r\n        box-sizing: border-box;\r\n\r\n        img{\r\n            width: 100%;\r\n            border-radius: 12px;\r\n            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);\r\n        }\r\n\r\n        h2{\r\n            @extend .heroFont;\r\n            font-size: 55px;\r\n            border-bottom: 2px solid $primaryColor;\r\n            display: inline-block;\r\n            text-align: center;\r\n            color: $primaryColor;\r\n        }\r\n\r\n        h3{\r\n            @extend .primaryFont;\r\n            font-size: 40px;\r\n            margin: 0;\r\n            margin-top: 20px;\r\n            \r\n        }\r\n\r\n        h5{\r\n            @extend .heroFont;\r\n            font-size: 40px;\r\n            color: $primaryColor\r\n        }\r\n\r\n        p{\r\n            font-size: 14px;\r\n            line-height: 25px;\r\n\r\n            &:first-letter{\r\n                @extend .heroFont;\r\n                font-size: 50px;\r\n                float: left;\r\n                font-size: 6rem;\r\n                line-height: 0.65;\r\n            }\r\n        }\r\n\r\n        #nbFeatures{\r\n            flex-direction: column;\r\n            background-color: $secondaryColor;\r\n            padding: 20px;\r\n            border-radius: 12px;\r\n            background-image: url('http://ankurah.com/wp-content/uploads/2025/09/pattern-9d9863.svg');\r\n\r\n            h6{\r\n                @extend .heroFont;\r\n                font-size: 30px;\r\n                margin-bottom: 10px;\r\n            }\r\n\r\n            li{\r\n                @extend .primaryFont;\r\n                font-size: 14px;\r\n            }\r\n        }\r\n    }\r\n}","#nbPageOurStory{\r\n\r\n    p#nbFirstParagraph{\r\n        @extend .primaryFont;\r\n        font-size: 18px;\r\n        text-align: justify;\r\n        margin-bottom: 30px;\r\n        line-height: 25px;\r\n        letter-spacing: 1px;\r\n\r\n        &::first-letter{\r\n            @extend .heroFont;\r\n            font-size: 6rem;\r\n            line-height: 0.65;\r\n            float: left;\r\n            color: $primaryColor;\r\n        }\r\n    }\r\n\r\n    #nbFoundersNote{\r\n        background-image: url('http://ankurah.com/wp-content/uploads/2025/09/pattern-9d9863.svg');\r\n        background-color: rgb(246, 246, 246);\r\n\r\n        h2{\r\n            @extend .heroFont;\r\n            font-size: 40px;\r\n            color: $primaryColor;\r\n            text-align: center;\r\n            margin-bottom: 20px;\r\n        }\r\n\r\n        p{\r\n            @extend .primaryFont;\r\n            font-size: 16px;\r\n            text-align: justify;\r\n            line-height: 25px;\r\n            letter-spacing: 1px;\r\n            font-style: italic;\r\n        }\r\n    }\r\n}","#nbOurMotivePartial{\r\n    background-image: url('http://ankurah.com/wp-content/uploads/2025/09/pattern-9d9863.svg');\r\n    background-color: $lightGray;\r\n    padding: 30px 0;\r\n\r\n    h3{\r\n        font-size: 3rem;\r\n    }\r\n\r\n    p{\r\n        &::first-letter{\r\n            @extend .heroFont;\r\n            font-size: 6rem;\r\n            line-height: 0.65;\r\n            float: left;\r\n            color: $primaryColor;\r\n        }\r\n    }\r\n}",".nbSampleProduct{\r\n    border-radius: 10px;\r\n\r\n    &:hover{\r\n        background-color: $lightGray;\r\n    }\r\n\r\n    a{\r\n        text-decoration: none;\r\n\r\n        img{\r\n            margin-top: 20px;\r\n        }\r\n\r\n        h4{\r\n            @extend .primaryFont;\r\n            font-weight: 700;\r\n            color: $primaryColor;\r\n            text-decoration: none !important;\r\n            height: 64px;\r\n            margin-bottom: 0;\r\n\r\n            &:hover{\r\n                text-decoration: underline;\r\n                color: darken($primaryColor, 10%);\r\n            }\r\n        }\r\n\r\n        h6{\r\n            color: gray;\r\n        }\r\n    }\r\n}\r\n//     h1{\r\n//         font-weight: 700;\r\n//         margin-bottom: 30px;\r\n//         text-transform: uppercase;\r\n//     }\r\n\r\n//     h6{\r\n//         font-size: 14px;\r\n//         font-style: italic;\r\n//         font-weight: 300;\r\n//         color: $textGrey;\r\n//         margin-bottom: 20px;\r\n//     }\r\n\r\n//     img{\r\n//         width: 100% !important;\r\n//     }\r\n\r\n//     p,li span{\r\n//         @extend .secondaryFont;\r\n//         font-weight: 300;\r\n//     }\r\n\r\n//     h2{\r\n//         font-weight: 700;\r\n//         margin: 30px 0 20px 0;\r\n//     }\r\n// }","#nbSingleProduct{\r\n    .nbBreadcrumb{\r\n        font-size: 14px;\r\n        margin-top: 20px;\r\n\r\n        a, span{\r\n            @extend .heroFont;\r\n            font-size: 16px;\r\n            text-decoration: none;\r\n            color: $primaryColor;\r\n        }\r\n\r\n        span{\r\n            color: gray;\r\n            cursor: not-allowed;\r\n        }\r\n\r\n        a:hover{\r\n            text-decoration: underline;\r\n            color: darken($primaryColor, 10%);\r\n        }\r\n    }\r\n\r\n    .nbFeatures{\r\n        justify-content: center;\r\n        div{\r\n            display: flex;\r\n            flex-direction: column;\r\n            align-items: center;\r\n            padding: 0 20px;\r\n\r\n            img{\r\n                width: 65% !important;\r\n                margin-bottom: 10px;\r\n            }\r\n        }\r\n    }\r\n\r\n    .nbShortDescription{\r\n        font-size: 12px;\r\n        letter-spacing: 1px;\r\n        line-height: 20px;\r\n        font-style: italic;\r\n    }\r\n\r\n    .nbSharing{\r\n        display: flex;\r\n        justify-content: center;\r\n        margin-top: 10px;\r\n\r\n        a{\r\n            @extend .primaryFont;\r\n            color: gray;\r\n            text-transform: uppercase;\r\n            margin: 10px;\r\n            font-size: 14px;\r\n            font-weight: 300;\r\n            text-decoration: none;\r\n            font-size:  12px;\r\n\r\n            i{\r\n                margin-right: 10px;\r\n            }\r\n        }\r\n    }\r\n\r\n    \r\n}\r\n\r\n#nbProductDescription{\r\n    background-color: lighten($secondaryColor,0%);\r\n    background-image: url(http://ankurah.com/wp-content/uploads/2025/09/pattern-9d9863.svg);\r\n    \r\n    p{\r\n        margin: 30px 0px;\r\n    }\r\n}\r\n//     h1{\r\n//         font-weight: 700;\r\n//         margin-bottom: 30px;\r\n//         text-transform: uppercase;\r\n//     }\r\n\r\n//     h6{\r\n//         font-size: 14px;\r\n//         font-style: italic;\r\n//         font-weight: 300;\r\n//         color: $textGrey;\r\n//         margin-bottom: 20px;\r\n//     }\r\n\r\n//     img{\r\n//         width: 100% !important;\r\n//     }\r\n\r\n//     p,li span{\r\n//         @extend .secondaryFont;\r\n//         font-weight: 300;\r\n//     }\r\n\r\n//     h2{\r\n//         font-weight: 700;\r\n//         margin: 30px 0 20px 0;\r\n//     }\r\n// }","#bnCheckoutThankYou{\r\n    margin: 30px 0;\r\n    \r\n    h1{\r\n        font-size: 55px;\r\n    }\r\n\r\n    th,td{\r\n        @extend .primaryFont;\r\n        font-size:  13px;\r\n    }\r\n\r\n    td,th{\r\n        border-style: dashed;\r\n        border-color: #000;\r\n    }\r\n\r\n    #nbInfoArea{\r\n        background-color: $secondaryColor;\r\n        background-image: url(http://ankurah.com/wp-content/uploads/2025/09/pattern-9d9863.svg);\r\n        border: 15px solid transparent;\r\n        padding: 15px;\r\n        border-width: 10px 0 10px 0;\r\n\r\n        .col-md-3{\r\n            display: flex;\r\n            flex-direction: column;\r\n            align-items: center;\r\n\r\n            span{\r\n                @extend .heroFont;\r\n                font-size: 25px;\r\n                text-align: center;\r\n            }\r\n\r\n            &:nth-of-type(2){\r\n                border: 1px dashed grey;\r\n                border-width: 0 1px 0 1px;\r\n            }\r\n\r\n            p{\r\n                font-weight: 700;\r\n                text-align: center;\r\n            }\r\n        }\r\n    }\r\n\r\n    #nbAddress{\r\n        h5{\r\n            font-size: 25px;\r\n        }\r\n\r\n        p{\r\n            font-size: 13px;\r\n        }\r\n    }\r\n}","#nbToast{\r\n    \r\n    background-color: $heroColor;\r\n    border-left: 15px solid $primaryColor;\r\n\r\n    .toast-header{\r\n        background-color: darken($heroColor, 10%);\r\n\r\n        strong{\r\n            @extend .heroFont;\r\n            color: $primaryColor;\r\n            font-size: 25px;\r\n        }\r\n    }\r\n\r\n    .toast-body{\r\n        @extend .primaryFont;\r\n        font-size: 13px;\r\n    }\r\n}"],"sourceRoot":""}]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/css-loader/dist/runtime/api.js":
/*!*****************************************************!*\
  !*** ./node_modules/css-loader/dist/runtime/api.js ***!
  \*****************************************************/
/***/ ((module) => {



/*
  MIT License http://www.opensource.org/licenses/mit-license.php
  Author Tobias Koppers @sokra
*/
module.exports = function (cssWithMappingToString) {
  var list = [];

  // return the list of modules as css string
  list.toString = function toString() {
    return this.map(function (item) {
      var content = "";
      var needLayer = typeof item[5] !== "undefined";
      if (item[4]) {
        content += "@supports (".concat(item[4], ") {");
      }
      if (item[2]) {
        content += "@media ".concat(item[2], " {");
      }
      if (needLayer) {
        content += "@layer".concat(item[5].length > 0 ? " ".concat(item[5]) : "", " {");
      }
      content += cssWithMappingToString(item);
      if (needLayer) {
        content += "}";
      }
      if (item[2]) {
        content += "}";
      }
      if (item[4]) {
        content += "}";
      }
      return content;
    }).join("");
  };

  // import a list of modules into the list
  list.i = function i(modules, media, dedupe, supports, layer) {
    if (typeof modules === "string") {
      modules = [[null, modules, undefined]];
    }
    var alreadyImportedModules = {};
    if (dedupe) {
      for (var k = 0; k < this.length; k++) {
        var id = this[k][0];
        if (id != null) {
          alreadyImportedModules[id] = true;
        }
      }
    }
    for (var _k = 0; _k < modules.length; _k++) {
      var item = [].concat(modules[_k]);
      if (dedupe && alreadyImportedModules[item[0]]) {
        continue;
      }
      if (typeof layer !== "undefined") {
        if (typeof item[5] === "undefined") {
          item[5] = layer;
        } else {
          item[1] = "@layer".concat(item[5].length > 0 ? " ".concat(item[5]) : "", " {").concat(item[1], "}");
          item[5] = layer;
        }
      }
      if (media) {
        if (!item[2]) {
          item[2] = media;
        } else {
          item[1] = "@media ".concat(item[2], " {").concat(item[1], "}");
          item[2] = media;
        }
      }
      if (supports) {
        if (!item[4]) {
          item[4] = "".concat(supports);
        } else {
          item[1] = "@supports (".concat(item[4], ") {").concat(item[1], "}");
          item[4] = supports;
        }
      }
      list.push(item);
    }
  };
  return list;
};

/***/ }),

/***/ "./node_modules/css-loader/dist/runtime/sourceMaps.js":
/*!************************************************************!*\
  !*** ./node_modules/css-loader/dist/runtime/sourceMaps.js ***!
  \************************************************************/
/***/ ((module) => {



module.exports = function (item) {
  var content = item[1];
  var cssMapping = item[3];
  if (!cssMapping) {
    return content;
  }
  if (typeof btoa === "function") {
    var base64 = btoa(unescape(encodeURIComponent(JSON.stringify(cssMapping))));
    var data = "sourceMappingURL=data:application/json;charset=utf-8;base64,".concat(base64);
    var sourceMapping = "/*# ".concat(data, " */");
    return [content].concat([sourceMapping]).join("\n");
  }
  return [content].join("\n");
};

/***/ }),

/***/ "./src/style/main.scss":
/*!*****************************!*\
  !*** ./src/style/main.scss ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_style_loader_dist_runtime_styleDomAPI_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !../../node_modules/style-loader/dist/runtime/styleDomAPI.js */ "./node_modules/style-loader/dist/runtime/styleDomAPI.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_styleDomAPI_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_styleDomAPI_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _node_modules_style_loader_dist_runtime_insertBySelector_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../node_modules/style-loader/dist/runtime/insertBySelector.js */ "./node_modules/style-loader/dist/runtime/insertBySelector.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_insertBySelector_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_insertBySelector_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _node_modules_style_loader_dist_runtime_setAttributesWithoutAttributes_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! !../../node_modules/style-loader/dist/runtime/setAttributesWithoutAttributes.js */ "./node_modules/style-loader/dist/runtime/setAttributesWithoutAttributes.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_setAttributesWithoutAttributes_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_setAttributesWithoutAttributes_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _node_modules_style_loader_dist_runtime_insertStyleElement_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! !../../node_modules/style-loader/dist/runtime/insertStyleElement.js */ "./node_modules/style-loader/dist/runtime/insertStyleElement.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_insertStyleElement_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_insertStyleElement_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _node_modules_style_loader_dist_runtime_styleTagTransform_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! !../../node_modules/style-loader/dist/runtime/styleTagTransform.js */ "./node_modules/style-loader/dist/runtime/styleTagTransform.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_styleTagTransform_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_styleTagTransform_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_node_modules_sass_loader_dist_cjs_js_main_scss__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! !!../../node_modules/css-loader/dist/cjs.js!../../node_modules/sass-loader/dist/cjs.js!./main.scss */ "./node_modules/css-loader/dist/cjs.js!./node_modules/sass-loader/dist/cjs.js!./src/style/main.scss");

      
      
      
      
      
      
      
      
      

var options = {};

options.styleTagTransform = (_node_modules_style_loader_dist_runtime_styleTagTransform_js__WEBPACK_IMPORTED_MODULE_5___default());
options.setAttributes = (_node_modules_style_loader_dist_runtime_setAttributesWithoutAttributes_js__WEBPACK_IMPORTED_MODULE_3___default());

      options.insert = _node_modules_style_loader_dist_runtime_insertBySelector_js__WEBPACK_IMPORTED_MODULE_2___default().bind(null, "head");
    
options.domAPI = (_node_modules_style_loader_dist_runtime_styleDomAPI_js__WEBPACK_IMPORTED_MODULE_1___default());
options.insertStyleElement = (_node_modules_style_loader_dist_runtime_insertStyleElement_js__WEBPACK_IMPORTED_MODULE_4___default());

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_node_modules_sass_loader_dist_cjs_js_main_scss__WEBPACK_IMPORTED_MODULE_6__["default"], options);




       /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_node_modules_sass_loader_dist_cjs_js_main_scss__WEBPACK_IMPORTED_MODULE_6__["default"] && _node_modules_css_loader_dist_cjs_js_node_modules_sass_loader_dist_cjs_js_main_scss__WEBPACK_IMPORTED_MODULE_6__["default"].locals ? _node_modules_css_loader_dist_cjs_js_node_modules_sass_loader_dist_cjs_js_main_scss__WEBPACK_IMPORTED_MODULE_6__["default"].locals : undefined);


/***/ }),

/***/ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js":
/*!****************************************************************************!*\
  !*** ./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js ***!
  \****************************************************************************/
/***/ ((module) => {



var stylesInDOM = [];
function getIndexByIdentifier(identifier) {
  var result = -1;
  for (var i = 0; i < stylesInDOM.length; i++) {
    if (stylesInDOM[i].identifier === identifier) {
      result = i;
      break;
    }
  }
  return result;
}
function modulesToDom(list, options) {
  var idCountMap = {};
  var identifiers = [];
  for (var i = 0; i < list.length; i++) {
    var item = list[i];
    var id = options.base ? item[0] + options.base : item[0];
    var count = idCountMap[id] || 0;
    var identifier = "".concat(id, " ").concat(count);
    idCountMap[id] = count + 1;
    var indexByIdentifier = getIndexByIdentifier(identifier);
    var obj = {
      css: item[1],
      media: item[2],
      sourceMap: item[3],
      supports: item[4],
      layer: item[5]
    };
    if (indexByIdentifier !== -1) {
      stylesInDOM[indexByIdentifier].references++;
      stylesInDOM[indexByIdentifier].updater(obj);
    } else {
      var updater = addElementStyle(obj, options);
      options.byIndex = i;
      stylesInDOM.splice(i, 0, {
        identifier: identifier,
        updater: updater,
        references: 1
      });
    }
    identifiers.push(identifier);
  }
  return identifiers;
}
function addElementStyle(obj, options) {
  var api = options.domAPI(options);
  api.update(obj);
  var updater = function updater(newObj) {
    if (newObj) {
      if (newObj.css === obj.css && newObj.media === obj.media && newObj.sourceMap === obj.sourceMap && newObj.supports === obj.supports && newObj.layer === obj.layer) {
        return;
      }
      api.update(obj = newObj);
    } else {
      api.remove();
    }
  };
  return updater;
}
module.exports = function (list, options) {
  options = options || {};
  list = list || [];
  var lastIdentifiers = modulesToDom(list, options);
  return function update(newList) {
    newList = newList || [];
    for (var i = 0; i < lastIdentifiers.length; i++) {
      var identifier = lastIdentifiers[i];
      var index = getIndexByIdentifier(identifier);
      stylesInDOM[index].references--;
    }
    var newLastIdentifiers = modulesToDom(newList, options);
    for (var _i = 0; _i < lastIdentifiers.length; _i++) {
      var _identifier = lastIdentifiers[_i];
      var _index = getIndexByIdentifier(_identifier);
      if (stylesInDOM[_index].references === 0) {
        stylesInDOM[_index].updater();
        stylesInDOM.splice(_index, 1);
      }
    }
    lastIdentifiers = newLastIdentifiers;
  };
};

/***/ }),

/***/ "./node_modules/style-loader/dist/runtime/insertBySelector.js":
/*!********************************************************************!*\
  !*** ./node_modules/style-loader/dist/runtime/insertBySelector.js ***!
  \********************************************************************/
/***/ ((module) => {



var memo = {};

/* istanbul ignore next  */
function getTarget(target) {
  if (typeof memo[target] === "undefined") {
    var styleTarget = document.querySelector(target);

    // Special case to return head of iframe instead of iframe itself
    if (window.HTMLIFrameElement && styleTarget instanceof window.HTMLIFrameElement) {
      try {
        // This will throw an exception if access to iframe is blocked
        // due to cross-origin restrictions
        styleTarget = styleTarget.contentDocument.head;
      } catch (e) {
        // istanbul ignore next
        styleTarget = null;
      }
    }
    memo[target] = styleTarget;
  }
  return memo[target];
}

/* istanbul ignore next  */
function insertBySelector(insert, style) {
  var target = getTarget(insert);
  if (!target) {
    throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
  }
  target.appendChild(style);
}
module.exports = insertBySelector;

/***/ }),

/***/ "./node_modules/style-loader/dist/runtime/insertStyleElement.js":
/*!**********************************************************************!*\
  !*** ./node_modules/style-loader/dist/runtime/insertStyleElement.js ***!
  \**********************************************************************/
/***/ ((module) => {



/* istanbul ignore next  */
function insertStyleElement(options) {
  var element = document.createElement("style");
  options.setAttributes(element, options.attributes);
  options.insert(element, options.options);
  return element;
}
module.exports = insertStyleElement;

/***/ }),

/***/ "./node_modules/style-loader/dist/runtime/setAttributesWithoutAttributes.js":
/*!**********************************************************************************!*\
  !*** ./node_modules/style-loader/dist/runtime/setAttributesWithoutAttributes.js ***!
  \**********************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {



/* istanbul ignore next  */
function setAttributesWithoutAttributes(styleElement) {
  var nonce =  true ? __webpack_require__.nc : 0;
  if (nonce) {
    styleElement.setAttribute("nonce", nonce);
  }
}
module.exports = setAttributesWithoutAttributes;

/***/ }),

/***/ "./node_modules/style-loader/dist/runtime/styleDomAPI.js":
/*!***************************************************************!*\
  !*** ./node_modules/style-loader/dist/runtime/styleDomAPI.js ***!
  \***************************************************************/
/***/ ((module) => {



/* istanbul ignore next  */
function apply(styleElement, options, obj) {
  var css = "";
  if (obj.supports) {
    css += "@supports (".concat(obj.supports, ") {");
  }
  if (obj.media) {
    css += "@media ".concat(obj.media, " {");
  }
  var needLayer = typeof obj.layer !== "undefined";
  if (needLayer) {
    css += "@layer".concat(obj.layer.length > 0 ? " ".concat(obj.layer) : "", " {");
  }
  css += obj.css;
  if (needLayer) {
    css += "}";
  }
  if (obj.media) {
    css += "}";
  }
  if (obj.supports) {
    css += "}";
  }
  var sourceMap = obj.sourceMap;
  if (sourceMap && typeof btoa !== "undefined") {
    css += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))), " */");
  }

  // For old IE
  /* istanbul ignore if  */
  options.styleTagTransform(css, styleElement, options.options);
}
function removeStyleElement(styleElement) {
  // istanbul ignore if
  if (styleElement.parentNode === null) {
    return false;
  }
  styleElement.parentNode.removeChild(styleElement);
}

/* istanbul ignore next  */
function domAPI(options) {
  if (typeof document === "undefined") {
    return {
      update: function update() {},
      remove: function remove() {}
    };
  }
  var styleElement = options.insertStyleElement(options);
  return {
    update: function update(obj) {
      apply(styleElement, options, obj);
    },
    remove: function remove() {
      removeStyleElement(styleElement);
    }
  };
}
module.exports = domAPI;

/***/ }),

/***/ "./node_modules/style-loader/dist/runtime/styleTagTransform.js":
/*!*********************************************************************!*\
  !*** ./node_modules/style-loader/dist/runtime/styleTagTransform.js ***!
  \*********************************************************************/
/***/ ((module) => {



/* istanbul ignore next  */
function styleTagTransform(css, styleElement) {
  if (styleElement.styleSheet) {
    styleElement.styleSheet.cssText = css;
  } else {
    while (styleElement.firstChild) {
      styleElement.removeChild(styleElement.firstChild);
    }
    styleElement.appendChild(document.createTextNode(css));
  }
}
module.exports = styleTagTransform;

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			id: moduleId,
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/nonce */
/******/ 	(() => {
/******/ 		__webpack_require__.nc = undefined;
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   nb: () => (/* reexport safe */ _scripts_nb_njs_js__WEBPACK_IMPORTED_MODULE_1__.nb)
/* harmony export */ });
/* harmony import */ var _style_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./style/main.scss */ "./src/style/main.scss");
/* harmony import */ var _scripts_nb_njs_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./scripts/nb.njs.js */ "./src/scripts/nb.njs.js");


})();

nb = __webpack_exports__;
/******/ })()
;
//# sourceMappingURL=main.js.map