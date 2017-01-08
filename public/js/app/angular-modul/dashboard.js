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
    $scope.haberModalOpen = function (url) {
    var h = $( window ).height()-150;
        var test = "<iframe src='"+url+"' style='border:0;width: 100%;height:"+h+"px;'></iframe >";
        $("#haberBody").html(test);
    };

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

app.controller('dovizController', function ($scope,$http) {
    var url = "http://www.doviz.com/api/v1/currencies/all/latest";
    $scope.dolar="yükleniyor";
    $scope.euro="yükleniyor";
    $scope.kontrolsayisi=1;


    setInterval(function(){
        $http.get(url).
        then(function (response) {
            var data = response.data;
            $scope.dolar = data[0].selling;
            $scope.dolar_change = data[0].change_rate;
            $scope.euro = data[1].selling;
            $scope.euro_change = data[1].change_rate;
            $scope.kontrolsayisi +=1;

        });
    }, 3000);


});




