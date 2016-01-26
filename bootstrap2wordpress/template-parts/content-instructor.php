<?php
//INSTRUCTOR SECTION
$instructor_section_title = get_field('instructor_section_title');
$instructor_name = get_field('instructor_name');
$excerpt_intro = get_field('excerpt_intro');
$full_intro = get_field('full_intro');

$numbers_title = get_field('numbers_title');
$numbers_desc = get_field('numbers_desc');

$quantity_students = get_field('quantity_students');
$quantity_reviews = get_field('quantity_reviews');
$quantity_courses = get_field('quantity_courses');

$facebook_profile = get_field('facebook_profile');
$twitter_profile = get_field('twitter_profile');
$google_plus_profile = get_field('google_plus_profile');
 ?>

<!-- INSTRUCTOR
================================================================ -->
<section id="instructor">
  <div class="container">
    <div class="col-sm-8 col-md-6">
      <div class="row">
        <div class="col-lg-8">
            <h2><?= $instructor_section_title;?> <small><?= $instructor_name; ?></small></h2>
        </div><!-- col -->
        <div class="col-lg-4">
          <a href="https://twitter.com/<?= $twitter_profile; ?>"
            target="_blank" class="badge social twitter">
            <i class="fa fa-twitter"></i></a>
          <a href="https://facebook.com/<?= $twitter_profile; ?>"
            target="_blank" class="badge social facebook">
            <i class="fa fa-facebook"></i></a>
          <a href="https://plus.google.com/<?= $google_plus_profile; ?>"
            target="_blank" class="badge social gplus">
            <i class="fa fa-google-plus"></i></a>
        </div><!-- col -->
      </div><!-- row -->
      <p class="lead">
        <?= $excerpt_intro; ?>
      </p>
      <?= $full_intro; ?>
      <hr />
      <h3><?= $numbers_title; ?> <small><?= $numbers_desc; ?></small></h3>
      <div class="row">
        <div class="col-xs-4">
          <div class="num">
              <div class="num-content">
                <?= $quantity_students; ?> <span>students</span>
              </div>
          </div>
        </div><!-- col -->
        <div class="col-xs-4">
          <div class="num">
              <div class="num-content">
                <?= $quantity_reviews; ?> <span>reviews</span>
              </div>
          </div>
        </div><!-- col -->
        <div class="col-xs-4">
          <div class="num">
              <div class="num-content">
                <?= $quantity_courses; ?> <span>courses</span>
              </div>
          </div>
        </div><!-- col -->
      </div><!-- row -->
    </div><!-- col -->
  </div>
</section><!-- instructor -->
