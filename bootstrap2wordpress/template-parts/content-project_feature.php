<?php
//PROJECT FEATURES
$project_features_title = get_field('project_features_title');
$project_features_message = get_field('project_features_message');

 ?>

<!-- PROJECTS FEATURES SECTION
================================================================ -->
<section id="project-features">
    <div class="container">
          <h2><?= $project_features_title; ?></h2>
          <p class="lead">
            <?= $project_features_message; ?>
          </p>
          <div class="row">
            <?php $loop = new WP_Query( array('post_type' => 'project_feature',
            'orderby' => 'post_id',
            'order' => 'ASC') ); ?>
            <?php while($loop->have_posts() ) : $loop->the_post(); ?>
              <div class="col-sm-4">
                <?php if(has_post_thumbnail() ) : the_post_thumbnail(); endif;?>
                <h3><?= the_title();?></h3>
                <p><?= the_content();?></p>
              </div>
            <?php endwhile; wp_reset_query(); ?>
    </div>
</section><!-- project_feature -->
