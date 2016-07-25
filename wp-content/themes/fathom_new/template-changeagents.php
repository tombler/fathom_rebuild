<?php /*
Template Name: Change Agents

*/
 ?>

<?php include('header.php'); ?> 

<div id="fullpage">
    <div class="section individual-project">
        <div class="container">
            <div class="row" id="project-header">  
              <div class="col-md-6 col-md-offset-3 col-sm-12">
                <h2 class="text-center">CHANGE AGENTS</h2>
              </div>  <!-- col --> 
            </div> <!-- row -->

            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12">
                    <p>
                        Change Agents is a Fathom project empowering young people with tools for social change. It offers a 6-course curriculum that challenges students to explore topics like social justice, entrepreneurship and community sustainability, while developing their own personalized blueprints to pursue their passions, make positive impacts in their communities and launch social ventures to support their ideas. Young people have the power to change the world, if only they have the tools they need to thrive. Fathom’s Change Agents is working to plant the seed of entrepreneurial problem-solving for social change.
                    </p>
                    <!-- <h3>Now taking students and sponsors for the 2016 Change Agents Summer Cohort!</h3> -->
                    <!-- <div class="clear">
                        <a href="/projects/change-agents/" class="btn btn-lg text-center feature-btn hvr-shutter-out-horizontal">Student Sign Up</a>
                        <a href="/projects/change-agents/" class="btn btn-lg text-center feature-btn hvr-shutter-out-horizontal">Sponsor Sign Up</a>
                    </div> -->
                </div>
            </div>
            <div class="row short-form">
                <div class="col-md-6 col-md-offset-3">
                    <h3 class="text-center">Want to know more about Change Agents?</h3>

                    <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 6 ); } ?> 
                </div>
            </div>
        </div> <!-- container -->
    </div> <!-- section -->
</div> <!-- fullpage -->


<?php include('footer.php'); ?>