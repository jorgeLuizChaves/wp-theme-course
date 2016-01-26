<?php
//BOOST INCOME SECTION
$graph_image = get_field('graph_image');
$boost_income_title = get_field('boost_income_title');
$boost_income_message = get_field('boost_income_message');
$reason_1_title = get_field('reason_1_title');
$reason_1_message = get_field('reason_1_message');
$reason_2_title = get_field('reason_2_title');
$reason_2_message = get_field('reason_2_message');
 ?>

<!-- BOOST YOUR INCOME
================================================================ -->
<section id="boost-income">
  <div class="container">
    <div class="section-header">
      <img src="<?= $graph_image['url'] ?>" alt="<?= $graph_image['alt'] ?>">
      <h2><?= $boost_income_title ?></h2>
    </div><!-- SECTION-HEADER -->
    <p class="lead">
      <?= $boost_income_message ?>
    </p>
    <div class="row">
      <div class="col-sm-6">
        <h3>
          <?= $reason_1_title ?>
        </h3>
        <p class="lead">
          <?= $reason_1_message ?>
        </p>
      </div><!-- col -->
      <div class="col-sm-6">
        <h3><?= $reason_2_title ?></h3>
        <p class="lead">
          <?= $reason_2_message ?>
        </p>
      </div><!-- col -->
    </div>
  </div>
</section><!-- BOOST-INCOME-->
