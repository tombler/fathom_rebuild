var fathom = angular.module("fathom", ['ngRoute', 'ngAnimate', 'ui.bootstrap']);

// fathom.directive('scrollOnClick', function() {
//   return {
//     restrict: 'A',
//     link: function(scope, $elm, attrs) {
//       var idToScroll = attrs.href;
//       $elm.on('click', function() {
//         var $target;
//         if (idToScroll) {
//           $target = $(idToScroll);
//         } else {
//           $target = $elm;
//         }
//         $("body").animate({scrollTop: $target.offset().top}, "slow");
//       });
//     }
//   }
// });


fathom.directive("myNavscroll", function($window) {
    return function(scope, element, attrs) {
        angular.element($window).bind("scroll", function() {
            if (!scope.scrollPosition) {
                scope.scrollPosition = 0
            }

            if (this.pageYOffset > 50) {
                scope.boolChangeClass = true;
            } else {
                scope.boolChangeClass = false;
            }
            scope.scrollPosition = this.pageYOffset;
            scope.$apply();
        });
    };
});


fathom.service('anchorSmoothScroll', function(){
    
    this.scrollTo = function(eID) {

        // This scrolling function 
        // is from http://www.itnewb.com/tutorial/Creating-the-Smooth-Scroll-Effect-with-JavaScript

        // https://jsfiddle.net/brettdewoody/y65G5/
        
        var startY = currentYPosition();
        var stopY = elmYPosition(eID);
        var distance = stopY > startY ? stopY - startY : startY - stopY;
        if (distance < 100) {
            scrollTo(0, stopY); return;
        }
        var speed = Math.round(distance / 100);
        if (speed >= 20) speed = 20;
        var step = Math.round(distance / 25);
        var leapY = stopY > startY ? startY + step : startY - step;
        var timer = 0;
        if (stopY > startY) {
            for ( var i=startY; i<stopY; i+=step ) {
                setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
                leapY += step; if (leapY > stopY) leapY = stopY; timer++;
            } return;
        }
        for ( var i=startY; i>stopY; i-=step ) {
            setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
            leapY -= step; if (leapY < stopY) leapY = stopY; timer++;
        }
        
        function currentYPosition() {
            // Firefox, Chrome, Opera, Safari
            if (self.pageYOffset) return self.pageYOffset;
            // Internet Explorer 6 - standards mode
            if (document.documentElement && document.documentElement.scrollTop)
                return document.documentElement.scrollTop;
            // Internet Explorer 6, 7 and 8
            if (document.body.scrollTop) return document.body.scrollTop;
            return 0;
        }
        
        function elmYPosition(eID) {
            var elm = document.getElementById(eID);
            var y = elm.offsetTop;
            var node = elm;
            while (node.offsetParent && node.offsetParent != document.body) {
                node = node.offsetParent;
                y += node.offsetTop;
            } return y - 50;
        }

    };
    
});

fathom.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.
        when('/', {
            templateUrl: '/views/home.html',
            controller: 'HomeCtrl'
            
        }).
        when('/contact', {
            templateUrl: '/views/signup.html',
            controller: 'SignupCtrl'
            
        }).
        when('/team', {
            templateUrl: '/views/team.html',
            controller: 'TeamCtrl'
            
        }).
        when('/projects/:projectSlug', {
            templateUrl: '/views/project.html',
            controller: 'ProjectCtrl'
            
        }).
        otherwise({
            redirectTo: '/'
        });
}]);