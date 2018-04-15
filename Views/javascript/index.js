var app = angular.module("App", []);

app.controller("myCtrl", function($scope) {
    $scope.showService = function () {
        var element = angular.element(document.querySelector( '.wh-services')),
            e = element[0],
            height = e.offsetHeight;
             e.style.height = 230+'px';
    }

    $scope.hideService = function(){
        var element = angular.element(document.querySelector( '.wh-services')),
            e = element[0],
            height = e.offsetHeight;
            e.style.height = 0+'px';
    }

    $scope.$watch(function () {
        var element = angular.element(document.querySelector( 'header')),
            e = element[0],
            height = e.offsetHeight;

        window.addEventListener('scroll',function(pos){
            element = angular.element(document.querySelector( '.main-header')),
                e = element[0];
            var logo = document.querySelector( '.logo-img'),
            location = window.location.protocol+'//'+window.location.hostname+window.location.pathname;

            if(pos.pageY > 865 || pos.pageY > height){
                element.addClass('active-header');
                logo.setAttribute('src',location+"Views/img/logo-colored.png");
                console.log(logo);

            }else{
                element.removeClass('active-header');
                logo.setAttribute('src',location+"Views/img/logo.png");
                console.log(logo);

            };

        });
    });


});
