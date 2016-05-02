fathom.controller('ProjectCtrl', function ($scope, $routeParams, projects) {

  for (var i = 0; i < projects.projects.length; i++) {
    if (projects.projects[i].slug == $routeParams.projectSlug)
    {
      $scope.project = projects.projects[i];
      console.log("this proj", $scope.project);
    }
  };

  
  



});