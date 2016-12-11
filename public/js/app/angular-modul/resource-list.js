angular.module('resource', [])
    .controller('ResourceController', function($scope, $http) {
        $http.get('api/getResource').
        then(function(response) {
            $scope.settings = response.data.data;
            $scope.addResource = function (id) {
                $http({
                    method: 'POST',
                    url: 'api/getResource',
                    headers: { 'Content-Type' : 'application/json ' },
                    data: { resource_id: id}
                })
                    .then(function (response) {

                        if(response.data.type=="error")
                            toastr.error(response.data.message);
                        else
                            toastr.success(response.data.message);

                    });
            }

        });
    });