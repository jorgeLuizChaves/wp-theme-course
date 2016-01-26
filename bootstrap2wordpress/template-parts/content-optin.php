<?php
// HERO SECTION
$opt_msg = get_field('opt_msg');
$optin_button_txt = get_field('optin_button_txt');
 ?>

 <!-- OPT IN SECTION
 ================================================================ -->
 <section id="optin">
   <div class="container">
     <div class="row">
         <div class="col-sm-8">
           <p class="lead">
             <?= $opt_msg ?>
           </p>
         </div>
         <div class="col-sm-4">
           <button class="btn btn-success btn-lg btn-block"
           data-toggle="modal" data-target="#myModal">
           <?= $optin_button_txt ?>
         </button>
         </div>
     </div>
   </div>
 </section><!-- option -->
