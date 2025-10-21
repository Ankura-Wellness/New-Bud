export const httpManager = function ($http,loadingManager,toastManager) {
   return { 
   		postRequester: function (requestMethod,parameters,secure,successCallback,errorCallback) {
            // var webUrl = process.env.NODE_ENV == 'production' ? 'https://ankurah.com/' : 'https://localhost/ankurah/';
			// var webUrl = 'https://ankurah.com/';
			var webUrl = 'http://localhost/ankurah/';
            let params_string = ''
            for(const parameter in parameters ){
                params_string = params_string.length == 0 ? '' :  params_string + '&';
                params_string =  params_string + `${parameter}=${parameters[parameter]}`;
            }

			var headers = {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8','accept': 'application/json, text/javascript, */*; q=0.01'};

			if( errorCallback == null){
				errorCallback = error => {
					console.log('Error',error);
					toastManager.show('Failed to load cart','Try in sometime or refresh page and try again.',error);
					loadingManager.hide();
				};
			}
    		$http({method: 'POST',url: webUrl+requestMethod,data: params_string,headers: headers}).then( successCallback, errorCallback );
		}
		// 
		,jsonParser: function (response) {
    		var x2js = new X2JS();
    		return x2js.xml_str2json(response.data);
		},
		jsonCleaner: function (response) {
			return response.string.__text.replace(/\r?\n|\r/g,'');
		}
   };
};

// ,getRequester: function (requestMethod,parameters,secure,successCallback,errorCallback) {
// 	var webUrl = 'https://api.dctp.club/web/';
// 	var storage = window.localStorage;
// 	var headers = {'Content-Type': 'application/json'};
	
// 	if(secure){
// 		headers = {'Content-Type': 'application/json','Authorization': 'Bearer ' + storage.getItem('token')};
// 	}			
// 	if( errorCallback == null){
// 		errorCallback = function (response) {
// 			switch( response.status){
// 				case 401 :
// 					var storage = window.localStorage;
// 					storage.removeItem('token');
// 					$state.go('login',{});
// 					break;
// 			}
// 			loadManager.hideWaiter();
// 		};
// 	}

// 	$http({method: 'GET',url: webUrl+requestMethod,data: parameters,headers: headers}).then( successCallback, errorCallback );
// },