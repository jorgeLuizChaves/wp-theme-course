<?php
//WHO BENEFITS
$who_benefits_img = get_field('who_benefits_img');
$who_benefits_title = get_field('who_benefits_title');
$who_benefits_body = get_field('who_benefits_body');
 ?>

<!-- WHO BENEFITS
================================================================ -->
<section id="who-benefits">
  <div class="container">
      <div class="section-header">
        <img src="<?= $who_benefits_img['url'] ?>" alt="<?= $who_benefits_img['alt'] ?>">
        <h2><?= $who_benefits_title ?></h2>
      </div>
      <?= $who_benefits_body ?>
</section><!-- who-benefits -->
