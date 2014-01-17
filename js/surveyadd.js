function surveyAdd($scope, $http){
	$scope.search = function () {
		$http.post('resources/curl.php', data)
		.success(function(data, status, headers, config){
			$scope.status = status;
            $scope.data = data;
            $scope.result = data;
			console.log(status + ' - ' + data);
		})
		.error(function(data, status, headers, config){
			$scope.data = data || "Request failed";
            $scope.status = status;
			console.log('error');
		});
	}
}