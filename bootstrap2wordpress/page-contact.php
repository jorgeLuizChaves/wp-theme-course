<?php
/* Template Name: Contact Page */

get_header();
 ?>
 <!-- CONTACT ME -->
 <section class="feature-image feature-image-default" data-type="background" data-speed="2"
 style="background-position: 50% 0px;">
   <h1 class="page-title"><?php the_title(); ?></h1>
 </section>
 <div class="container">
   <div class="row" id="primary" style="padding-top:40px; padding-bottom:40px;">
     <div class="col-sm-12">
       <?php while(have_posts()) : the_post(); ?>
         <?php the_content(); ?>
       <?php endwhile; ?>
     </div>
   </div>
 </div>

 <?php get_footer(); ?>
