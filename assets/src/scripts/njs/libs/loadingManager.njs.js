export const loadingManager = function () {
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