(function(){
	'use strict';

	function FlashCardController($http){
		var vm = this;
		vm.data = {};
		
		$http.get('data.json').then(function(res) {
			vm.data = res.data;
		});

	}

	FlashCardController.$inject = [
		'$http'
	];

	angular
		.module('_Controllers')
		.controller('FlashCardController', FlashCardController);
})();