<?php /*
Template Name: Fathom Your Campus

*/
 ?>

<?php include('header.php'); ?> 

<div id="fullpage">
    <div class="section individual-project">
        <div class="container">
            <div class="row" id="project-header">  
              <div class="col-md-6 col-md-offset-3 col-sm-12">
                <h2 class="text-center">FATHOM YOUR CAMPUS</h2>
              </div>  <!-- col --> 
            </div> <!-- row -->

            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12">
                    <p>
                        We believe to invest in the youth is to invest in the future. And Fathom is placing its stake in the academic communities where young people are. Susan Davis said, “Work is not only a means of survival and meeting basic livelihood requirements. It is also a means of self-expression, self-actualization and vehicle for engaging in ones community. Fathom is bringing its project-based platform to campuses to empower students with the skills and competencies needed to turn their passions into professions and thrive in a 21st century economy.
                    </p>
                </div>
            </div>
            <div class="row short-form">
                <div class="col-md-6 col-md-offset-3">
                    <h3 class="text-center">Want to know more about Fathom Your Campus?</h3>
                    <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 6 ); } ?> 
                </div>
            </div>
        </div> <!-- container -->
    </div> <!-- section -->
</div> <!-- fullpage -->

<?php include('footer.php'); ?>