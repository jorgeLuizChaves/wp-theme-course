<?php
//testimonial
$testimonial_title = get_field('testimonial_title');
 ?>

<!-- TESTIMONIALS
================================================================ -->
<section id="kudos">
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <h2><?= $testimonial_title; ?></h2>
      <?php $loop = new WP_Query(array('post_type' => 'testimonial',
      'orderby' => 'post_id',
      'order' => 'ASC'));?>
      <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="row testimonial">
          <div class="col-sm-4">
            <?php if(has_post_thumbnail() ) : the_post_thumbnail(200, 200); endif;?>
          </div>
          <div class="col-sm-8">
            <blockquote>
            <?= the_content(); ?>
            <cite>— <?= the_title(); ?></cite>
          </blockquote>
          </div>
        </div><!-- row -->
      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
</section><!-- kudos -->
