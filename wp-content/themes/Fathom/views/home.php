<div class="bg">

    <header  data-my-navscroll  ng-class="{min:boolChangeClass}" id="page-header">
      <div class="container topnav">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand topnav" href="/#/">
                <img alt="Fathom" src="wp-content/themes/Fathom/img/fathom-logo-313px-white-01.svg" width="100px">
              </a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="/#/projects" class="link">PROJECTS</a>
                  </li>
                  <li>
                      <a href="/#/contact" class="link">CONTACT US</a>
                  </li>
              </ul>
          </div>
      </div>
    </header>

    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>EMPOWER. INNOVATE. SUSTAIN.</h1>
                        <h3>Fathom is a social enterprise for young people to earn a living pursuing their passion.</h3>
                        <div class="row">
                          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                            <a href="" ng-click="gotoElement('about')" class="btn btn-lg text-center feature-btn hvr-shutter-out-horizontal">LEARN MORE</a>
                          </div>
                        </div>
                        <!-- <hr class="intro-divider"> -->
                        <!-- <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->


    <!-- Page Content -->

     <div class="content-section-b">

        <div class="container" id="about">
          <div class="row text-center" id="project-header">
                      
            <div class="col-md-6 col-md-offset-3 col-sm-12">
              <img alt="Fathom" src="wp-content/themes/Fathom/img/fathom-your-reality-seed-grey-01.svg" width="50px">
              <h1 class="text-center">ABOUT FATHOM</h1>

            </div>
          </div>
          <div class="row">
              <div class="col-md-8 col-md-offset-2">
                  <p class="lead text-justify">Fathom is the Social Network for Social Change. As a lifestyle platform for youth empowerment, we envision a reality in which the youth and their communities are empowered as proactive agents of change. Our mission is to cultivate and incentivize collaborative creativity, social engagement and entrepreneurial solutions that support the emergence of conscious communities, companies and commodities.
                  <strong>In essence, Fathom is an idea… your idea and a way to share it with those around you. We empower our generation to pursue their passion and forge their future, while providing assistance to seed ideas from concept to creation. We challenge you to Fathom your reality.</strong></p>
              </div>
          </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

     <div class="content-section-a">

        <div id="projects">
          <div class="container">
            <div class="row" id="project-header">
                
                <div class="col-md-6 col-md-offset-3 col-sm-12"><h1 class="text-center">COMMUNITY PROJECTS</h1></div>
                
            </div>
          </div>
          <uib-carousel active="active" no-transition="noTrans" interval="myInterval" no-wrap="noWrapSlides">
            <uib-slide ng-repeat="slide in slides track by slide.id" index="slide.id">
              <a href="/#/projects/{{slide.slug}}">
                
                <div class="carousel-caption">
                  <!-- <img alt="Fathom" src="wp-content/themes/Fathom/img/fathom-your-reality-seed-01.svg" width="100px"> -->
                  <img ng-src="{{slide.image}}" width="200px" height="200px">
                  <!-- <h3>{{slide.title}}</h3> -->
                  <h4>{{slide.text}}</h4>
                  <div ng-show="slide.title == 'Change Agents'">
                    <h4>
                      Now taking students and sponsors for the Change Agents Summer Cohort! <strong>Sign up here.</strong>
                    </h4>
                  </div>
                   
                </div>
              </a>
            </uib-slide>
          </uib-carousel>
        </div>

    </div> <!-- section-a -->


    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">The Fathom App</h2>
                    <p class="lead">Fathom’s mobile app empowers users to create and discover meaningful opportunities via entrepreneurial problem-solving. Do you have the next great idea that can change the world or make it a better place? If so, Fathom’s mobile app is for you. We're now inviting Nashville students, creatives and community partners  for Beta testing.  </br></br><a href="/#/contact" class="link" id="signup" >Contact us</a> to recieve a special access code on our Beta release date.</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="wp-content/themes/Fathom/img/thefathom-app.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->


    <div class="content-section-a">
      <div id="projects">
        <div class="container">
          <div class="row" id="project-header">
              
              <div class="col-md-6 col-md-offset-3 col-sm-12"><h1 class="text-center">COMMUNITY PARTNERS</h1></div>
              
          </div>

          <div class="row" id="partners-explanation">
              
              <div class="col-md-10 col-md-offset-1 col-sm-12">
                <p class="text-justify">We realize in order to fulfill our mission we must work closely to form alliances with the communities, businesses and organizations the youth engage with most. We recognize that if we truly intend to succeed in our efforts of youth empowerment, we must reframe the ways in which we practice and think about community engagement and local economic development. Fathom’s platform  connects our partners with the needed talent, innovation and purchasing power of the youth.</p>
                <br>
              </div>

              <div class="col-md-10 col-md-offset-1 col-sm-12">
                 <p>We are currently seeking collaborative partnerships with academic institutions, local businesses, nonprofits organizations and community-based groups. Drop us a line at <strong>info@fathompbc.org</strong>.</p>
              </div>
              
          </div>
        </div>
      </div>

    </div> <!-- section-a -->



<div ng-include="'wp-content/themes/Fathom/views/partials/footer.html'"></div>

    

</div>