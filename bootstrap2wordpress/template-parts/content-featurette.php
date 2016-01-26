<?php
//COURSE VIDEO SAMPLE
$course_section_title = get_field('course_section_title');
$course_video_url = get_field('course_video_url');
 ?>

<!-- VIDEO FEATURETTE
================================================================ -->
<section id="featurette">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2><?= $course_section_title;?></h2>
        <iframe width="100%" height="415" src="<?= $course_video_url; ?>" frameborder="0" allowfullscreen></iframe>
      </div>
    </div><!-- row -->
  </div>
</section><!-- featurette -->
