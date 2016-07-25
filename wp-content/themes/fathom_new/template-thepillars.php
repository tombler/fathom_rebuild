<?php /*
Template Name: The Pillars

*/
 ?>

<?php include('header.php'); ?> 

<div id="fullpage">
    <div class="section individual-project">
        <div class="container">
            <div class="row" id="project-header">  
              <div class="col-md-6 col-md-offset-3 col-sm-12">
                <h2 class="text-center">THE PILLARS</h2>
              </div>  <!-- col --> 
            </div> <!-- row -->

            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12">
                    <p>
                        Creation is the purest form of self-expression and the manifestation of our legacy on this earth. Fathom’s The Pillars highlights the talents of Hip Hop community. The Pillars empowers young people within the Hip Hop community to preserve, protect and sustain Hip Hop culture, artisty and lifestyle via the Four Pillars of Hip Hop: Mc/Oral, DJ, Breakdancing and Graffiti/Visual art.
                    </p>
                </div>
            </div>
            <div class="row short-form">
                <div class="col-md-6 col-md-offset-3">
                    <h3 class="text-center">Want to know more about The Pillars?</h3>
                    <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 6 ); } ?> 
                </div>
            </div>
        </div> <!-- container -->
    </div> <!-- section -->
</div> <!-- fullpage -->


<?php include('footer.php'); ?>