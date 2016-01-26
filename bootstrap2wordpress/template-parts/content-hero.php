<?php
// Custom Fields
$post_id = 7;
$prelaunch_price = get_post_meta($post_id, 'prelaunch_price', true);
$launch_price = get_post_meta($post_id, 'launch_price', true);
$final_price = get_post_meta($post_id, 'final_price', true);

 ?>

<!-- HERO
      ================================================================ -->
      <section id="hero" data-type="background" data-speed="5">
          <article>
              <div class="container clearfix">
                  <div class="row">
                      <div class="col-sm-5">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="B2W" class="logo">
                      </div><!-- col -->
                      <div class="col-sm-7 hero-text">
                        <!-- site title -->
                        <h1><?php bloginfo('name'); ?></h1>
                        <p class="lead">
                          <?php bloginfo('description'); ?>
                        </p>
                        <div id="price-timeline">
                            <div class="price active">
                                <h4>Pre Launch Price <small>Ends soon!</small></h4>
                                  <span><?= $prelaunch_price ?></span>
                            </div>
                            <div class="price">
                              <h4>Launch Price <small>Coming soon</small></h4>
                                <span><?= $launch_price ?></span>
                            </div>
                            <div class="price">
                              <h4>Final Price <small>Coming soon</small></h4>
                                <span><?= $final_price ?></span>
                            </div>
                        </div><!-- price -->
                      </div><!-- hero-text -->
                        <p><a class="btn btn-lg btn-danger" href="/" role="button">Enroll now&raquo;</a></p>
                      </div><!-- col -->
                  </div><!-- row -->
              </div><!-- container -->
          </article>
      </section><!-- hero -->
