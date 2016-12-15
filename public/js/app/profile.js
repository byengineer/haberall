angular.module('profile', [])
    .controller('Hello', function($scope, $http) {
        var i = $scope.loading;
        i = false;
        $http.get('api/profile').
        then(function(response) {
            $scope.profile = response.data.data[0];
            $("#loading").hide();
            $scope.profile.formpath="api/profile/"+$scope.profile.id;
            console.log(response.data.data);


        });
    });