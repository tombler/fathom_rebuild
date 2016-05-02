fathom.controller('HomeCtrl', function ($scope, $anchorScroll, $location, $window, $document, projects) {


    $scope.projects = projects.projects;
    

    // $scope.showProject = function (project)
    // {
    //   if (project.show)
    //   { 
    //     project.show = false;
    //     return;
    //   }

    //   for (var i = $scope.projects.length - 1; i >= 0; i--) {
    //     $scope.projects[i].show = false;
    //   };

    //   project.show = true;
    
    // }


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

    // for (var i = 0; i < 4; i++) {
    //   $scope.addSlide();
    // }

    // $scope.randomize = function() {
    //   var indexes = generateIndexesArray();
    //   assignNewIndexesToSlides(indexes);
    // };

    
    // Randomize logic below

    // function assignNewIndexesToSlides(indexes) {
    //   for (var i = 0, l = slides.length; i < l; i++) {
    //     slides[i].id = indexes.pop();
    //   }
    // }

    // function generateIndexesArray() {
    //   var indexes = [];
    //   for (var i = 0; i < currIndex; ++i) {
    //     indexes[i] = i;
    //   }
    //   return shuffle(indexes);
    // }

    // http://stackoverflow.com/questions/962802#962890
    // function shuffle(array) {
    //   var tmp, current, top = array.length;

    //   if (top) {
    //     while (--top) {
    //       current = Math.floor(Math.random() * (top + 1));
    //       tmp = array[current];
    //       array[current] = array[top];
    //       array[top] = tmp;
    //     }
    //   }

    //   return array;
    // }


});