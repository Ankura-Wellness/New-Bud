export const toastManager = function () {

	const toastBootstrap = bootstrap.Toast.getOrCreateInstance(document.getElementById('nbToast'));

   	return { 
		show: (header,body,error) => {
			// var deviceName = navigator?.userAgentData?.platform || navigator?.platform;
			console.log('Toast','https://wa.me/918623999630?text=' + encodeURIComponent(navigator?.userAgent,navigator?.platform),error);
			document.getElementById('nbReportLink').setAttribute('href','https://wa.me/918623999630?text=' + encodeURIComponent('Report Issue:\n'+error.statusText));
			document.getElementById('nbToastTitle').innerHTML = (header ? header : 'Failure');
			document.getElementById('nbToastBody').innerHTML = (body ? body : 'Something went wrong');
			toastBootstrap.show();
		}
   	};
};