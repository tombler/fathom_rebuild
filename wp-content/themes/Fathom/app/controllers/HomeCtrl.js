fathom.controller('HomeCtrl', function ($scope, $anchorScroll, $location, $document, projects, anchorSmoothScroll) {


    $scope.projects = projects.projects;


    $scope.myInterval = 3000;
    $scope.noWrapSlides = false;
    $scope.noTrans = false;
    $scope.active = 0;
    var slides = $scope.slides = [];
    var currIndex = 0;

    $scope.addSlides = function() {
      for (var i = 0; i < $scope.projects.length; i++) {
        slides.push({
          image: $scope.projects[i].imgSrc,
          text: $scope.projects[i].description,
          title: $scope.projects[i].title,
          slug: $scope.projects[i].slug,
          id: currIndex++
        });
      }
    };

    $scope.addSlides();


    $scope.gotoElement = function (eID){
      // set the location.hash to the id of
      // the element you wish to scroll to.
      $location.hash('bottom');
 
      // call $anchorScroll()
      anchorSmoothScroll.scrollTo(eID);
      
    };


});