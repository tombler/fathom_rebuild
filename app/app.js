var fathom = angular.module("fathom", ['ngRoute', 'ngAnimate']);

fathom.directive('scrollOnClick', function() {
  return {
    restrict: 'A',
    link: function(scope, $elm, attrs) {
      var idToScroll = attrs.href;
      $elm.on('click', function() {
        var $target;
        if (idToScroll) {
          $target = $(idToScroll);
        } else {
          $target = $elm;
        }
        $("body").animate({scrollTop: $target.offset().top}, "slow");
      });
    }
  }
});


fathom.directive("myNavscroll", function($window) {
    return function(scope, element, attrs) {
        angular.element($window).bind("scroll", function() {
            if (!scope.scrollPosition) {
                scope.scrollPosition = 0
            }

            if (this.pageYOffset > scope.scrollPosition) {
                scope.boolChangeClass = true;
            } else {
                scope.boolChangeClass = false;
            }
            scope.scrollPosition = this.pageYOffset;
            scope.$apply();
        });
    };
});


fathom.directive('customPopover', function () {
    return {
        restrict: 'A',
        template: '<span>{{label}}</span>',
        link: function (scope, el, attrs) {
            scope.label = attrs.popoverLabel;
            $(el).popover({
                trigger: 'click',
                html: true,
                content: attrs.popoverHtml,
                placement: attrs.popoverPlacement
            });
        }
    };
});

fathom.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.
        // when('/', {
        //     templateUrl: '/views/typist.html',
        //     controller: 'TypistCtrl'
        // }).
        when('/', {
            templateUrl: '/views/home.html',
            controller: 'HomeCtrl'
            
        }).
        when('/signup', {
            templateUrl: '/views/signup.html',
            controller: 'SignupCtrl'
            
        }).
        when('/team', {
            templateUrl: '/views/team.html',
            controller: 'TeamCtrl'
            
        }).
        otherwise({
            redirectTo: '/'
        });
}]);