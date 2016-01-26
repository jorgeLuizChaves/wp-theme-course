<?php
//COURSE FEATURES
$course_feature_image = get_field('course_feature_image');
$course_feature_title = get_field('course_feature_title');
 ?>

<!-- COURSE FEATURES
================================================================ -->
<section id="course-features">
  <div class="container">
      <div class="section-header">
        <img src="<?= $course_feature_image['url'];?>" alt="<?= $course_feature_image['alt']; ?>">
        <h2><?= $course_feature_title; ?></h2>
        <div class="row">
          <?php $loop = new WP_Query( array('post_type' => 'course_features' ,
                  'orderby' => 'post_id',
                  'order' => 'ASC' ) ); ?>
          <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-sm-2">
              <i class="<?= the_field('course_feature_icon'); ?>"></i>
              <h4><?= the_title(); ?></h4>
            </div><!-- end -->
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div><!-- section header -->
  </div>
</section><!-- course-features -->
