angular.module("ponentes",['ui.materialize'])
	.controller("app",function($scope,$http){
		$scope.ponentes=[]; 
		$scope.loading = true;
		$http.get("js/ponentes.json")
			.success(function(data){
				console.log(data);
				$scope.ponentes= data.ponentes; 
				$scope.loading = false;
			})
			.error(function(data){
				$scope.loading = false;
	})
})
angular.module("comite",['ui.materialize'])
	.controller("app",function($scope,$http){
		$scope.comite=[]; 
		$scope.loading = true;
		$http.get("js/comite.json")
			.success(function(data){
				console.log(data);
				$scope.comite= data.comite; 
				$scope.loading = false;
			})
			.error(function(data){
				$scope.loading = false;
	})
	});
