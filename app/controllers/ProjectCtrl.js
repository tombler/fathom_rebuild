fathom.controller('ProjectCtrl', function ($scope, $routeParams, projects, $sce) {
console.log($sce)
  for (var i = 0; i < projects.projects.length; i++) {
    if (projects.projects[i].slug == $routeParams.projectSlug)
    {
      $scope.project = projects.projects[i];
      console.log("this proj", $scope.project);
    }
  };

  $scope.generateFormAction = function (projectTitle) {
    $scope.formAction = $sce.trustAsResourceUrl("//fathomonline.us11.list-manage.com/subscribe/post?u=786005b1121b326800b50b514&amp;id=4d7eb8ebc5&HOWWEMET=" + projectTitle);
  }


});