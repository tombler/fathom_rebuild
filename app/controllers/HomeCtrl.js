fathom.controller('HomeCtrl', function ($scope, $anchorScroll, $location, $window, $document) {

    $scope.scroll = function(x) {
        
      var newHash = 'anchor' + x;
      if ($location.hash() !== newHash) {
        // set the $location.hash to `newHash` and
        // $anchorScroll will automatically scroll to it
        $location.hash('anchor' + x);
      } else {
        // call $anchorScroll() explicitly,
        // since $location.hash hasn't changed
        $anchorScroll();
      }
    };

    $document.on('scroll', function() {
      // do your things like logging the Y-axis
      // console.log($window.scrollY);
      // or pass this to the scope
      $scope.$apply(function() {
          $scope.pixelsScrolled = $window.scrollY;
      });
    });


    $scope.projects = [
      {
        title: "Empowering the Youth With Tools for Social Change",
        description: "Fathom’s Change Agents is a 'Gamesplainer' workshop on creative problem-solving for social change. Change Agents demonstrates Fathom’s online and offline strategies for youth empowerment and community sustainability. We offer Change Agents as a one-day abridged workshop for college students, faculty, creatives and other organizations. We also offer a 6-week curriculum for middle and high school students to instill the values of social entrepreneurship and creative problem-solving.",
        imgSrc: "img/changeagentslargeblack.png",
        show: false
      },
      {
        title: "Youth Empowerment Summit 2015",
        description: "The YES 2015 will be highlighting millennial entrepreneurship in the Nashville area. YES 2015 will bring together students, creatives, campus & community partners for an engaging day of networking, interactive games & activities, and collaborative problem solving around the topics of youth empowerment & entrepreneurship.",
        imgSrc: "img/yes2015large.png",
        show: false
      },
      {
        title: "Nurturing Lifelong Learners and Creators",
        description: "Hazel’s Garden is an early childhood enrichment project providing creative, artistic and hands-on approaches to holistic child development. We are partnering with childcare centers, college students and community organizations to provide outreach to preschoolers in the areas of:",
        imgSrc: "img/hazelsgardenlarge.png",
        show: false
      },
      {
        title: "Connecting the Youth and Their Communities",
        description: "Fathom’s CPC is our initiative to support local businesses, organizations and associations through collaborative efforts between the youth and community stakeholders.",
        imgSrc: "img/communitypartnerslarge.png",
        show: false
      },
      {
        title: "Highlighting Hip Hop Culture & Artistry",
        description: "The Pillars project is designed to capture and highlight the culture and talent of Hip Hop artistry within Fathom’s creative community. The Pillars focuses on the four elements of Hip Hop: MC-ing, Breakdancing, Graffiti and DJ-ing.",
        imgSrc: "img/thepillarslarge.png",
        show: false
      }
    ]

    $scope.showProject = function (project)
    {
      if (project.show)
      { 
        project.show = false;
        return;
      }

      for (var i = $scope.projects.length - 1; i >= 0; i--) {
        $scope.projects[i].show = false;
      };

      project.show = true;
    
    }


});