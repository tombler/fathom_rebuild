<?php /*
Template Name: Contact

*/
 ?> 


<?php include('header.php'); ?> 

<div id="fullpage">
    <div class="section individual-project">
        <div class="container">
            <div class="row short-form">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="text-center">CONTACT</h2>
                    <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?> 
                </div>
            </div>
        </div> 
      
    </div> <!-- section -->
</div> <!-- fullpage -->


<?php include('footer.php'); ?>