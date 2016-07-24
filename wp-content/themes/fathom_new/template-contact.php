<?php /*
Template Name: Contact

*/
 ?> 


<?php include('header.php'); ?> 

<div id="fullpage">
    <div class="section">
      <h1 class="text-center">CONTACT</h1>
      <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?> 
    </div> <!-- section -->
</div> <!-- fullpage -->


<?php include('footer.php'); ?>