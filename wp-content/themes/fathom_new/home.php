
<?php include('header.php'); ?>

    <div id="fullpage">
      <div class="section">
        <div id="hero-content" class="text-center">
          <h1>EMPOWER. INNOVATE. SUSTAIN.</h1>
          <p>Fathom is a social enterprise for young people to earn a living pursuing their passion.</p>
          <a href="" ng-click="gotoElement('about')" class="btn btn-lg text-center feature-btn hvr-shutter-out-horizontal">LEARN MORE</a>  
        </div>
      </div> <!-- section -->

      <div class="section">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="section-header text-center">ABOUT FATHOM</h2>
              <p>
                Fathom is the Social Network for Social Change. As a lifestyle platform for youth empowerment, we envision a reality in which the youth and their communities are empowered as proactive agents of change. Our mission is to cultivate and incentivize collaborative creativity, social engagement and entrepreneurial solutions that support the emergence of conscious communities, companies and commodities. In essence, Fathom is an idea… your idea and a way to share it with those around you. We empower our generation to pursue their passion and forge their future, while providing assistance to seed ideas from concept to creation. We challenge you to Fathom your reality.
              </p>
            </div>
            <div class="col-md-5">
              <img class="img-responsive center-block" src="http://placehold.it/500x500" alt="Generic placeholder image">
            </div> <!-- col -->
          </div> <!-- row -->
        </div> <!-- container -->
      </div> <!-- section -->

      <div class="section alt-background">
        <h2 class="section-header text-center">COMMUNITY PROJECTS</h2>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/changeagentslargeblack.png" alt="...">
              <div class="carousel-caption">
                <h3>CHANGE AGENTS</h3>
                <p>A 'Gamesplainer' workshop on creative problem-solving for social change, offered for middle, high school and college students as well as school faculty.</p>
              </div>
            </div>
            <div class="item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/thepillarslarge.png" alt="...">
              <div class="carousel-caption">
                <h3>THE PILLARS</h3>
                <p>Workshop and event series focused on the four elements of Hip Hop: MC-ing, Breakdancing, Graffiti and DJ-ing.</p>
              </div>
            </div>
            <div class="item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fathom-your-reality-seed-grey-01.svg" width="200px" alt="...">
              <div class="carousel-caption">
                <h3>FATHOM YOUR CAMPUS</h3>
                <p>Our initiative to support local businesses, organizations and associations through collaborative efforts between the youth and community stakeholders.</p>
              </div>
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> <!-- carousel -->
      </div> <!-- section -->

      <div class="section">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-5">
              <img class="img-responsive center-block" src="http://placehold.it/500x500" alt="Generic placeholder image">
            </div> <!-- col -->
            <div class="col-md-7">
              <h2 class="section-header text-center">FATHOM APP</h2>
              <p>
                Fathom’s mobile app empowers users to create and discover meaningful opportunities via entrepreneurial problem-solving. Do you have the next great idea that can change the world or make it a better place? If so, Fathom’s mobile app is for you. We're now inviting Nashville students, creatives and community partners  for Beta testing.  </br></br><a href="/contact">Contact us</a> to recieve a special access code on our Beta release date.
              </p>
            </div> <!-- col -->
          </div> <!-- row -->
        </div> <!-- container -->
      </div> <!-- section -->

    </div>

<?php include('footer.php'); ?> 