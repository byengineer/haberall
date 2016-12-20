var app = angular.module('dashboard',[]);

app.controller('sliderController', function($scope, $http) {
    $http({
        method:'JSONP',
        url:'https://ajax.googleapis.com/ajax/services/feed/load?v=1.0&q=http://www.hurriyet.com.tr/rss/anasayfa&output=json&num=15&scoring=h&callback=JSON_CALLBACK',

    }).
    then(function(response) {
        $scope.slider = response.data.responseData.feed.entries;
        console.log(response.data.responseData.feed.entries[0].mediaGroups[0].contents[0].url);

    });
}).directive('bxSlider', [function () {
    return {
        restrict: 'A',
        link: function (scope, element, attrs) {
            scope.$on('repeatFinished', function () {
                console.log("ngRepeat has finished");
                element.bxSlider(scope.$eval('{' + attrs.bxSlider + '}'));
            });
        }
    }
}])
    .directive('notifyWhenRepeatFinished', ['$timeout', function ($timeout) {
        return {
            restrict: 'A',
            link: function (scope, element, attr) {
                if (scope.$last === true) {
                    $timeout(function () {
                        scope.$emit('repeatFinished');
                    });
                }
            }
        }
    }]);




app.controller('NewsController', function ($scope,$http) {

    $http.get('api/news').
    then(function (response) {
        $scope.news = response.data;
        $("#newContent").show();
        $("#newsLoading").hide();

    });
});

app.controller('YazarController', function ($scope,$http) {

    $scope.abc = function (url) {
        console.log(url);
        alert(url);
        $scope.name=url;
    }




});




