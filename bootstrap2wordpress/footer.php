<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrap2wordpress
 */

?>



<?php wp_footer(); ?>

<!-- SIGN UP
      ================================================================ -->
      <section id="signup" data-type="background" data-speed="4" style="background-position: 50% -1710px;">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <h2>Are you ready to take your coding skills to the
                <strong>next level</strong>?</h2>
                <p>
                  <a href="/" class="btn btn-success btn-lg btn-block">Yes, sign me up!</a>
                </p>
            </div><!-- end col -->
          </div><!-- end row -->
        </div>
      </section>

      <!-- FOOTER
      ================================================================ -->
      <section id="footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <p>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to Wordpress">
              </p>
            </div><!-- col -->
            <div class="col-sm-6">
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'footer',
                  'container' => 'nav',
                  'container_class' => 'navbar-collapse collapse',
                  'menu_class' => 'list-unstyled list-inline',

                ));
               ?>
            </div><!-- col -->
            <div class="col-sm-3" id="copyrights">
              <p>© 2014 Brad Hussey</p>
            </div><!-- col -->
          </div><!-- div -->
        </div><!-- container -->
      </section>

      <!-- MODAL -->
      <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"> Subscribe to our Mailing List</h4>
              </div>
              <div class="modal-body">
                <p>
                  Simply enter your name and email! As a thank you form
                  joining us, we're going to give you one of our best-selling courses, <em>for free!</em>
                </p>
                <form class="form-inline" role="form">
                  <div class="form-group">
                    <label class="sr-only" for="subscribe-email">first name</label>
                    <input type="text" class="form-control" id="subscribe-email" placeholder="Your first name">
                  </div><!-- form group-->
                  <div class="form-group">
                    <label class="sr-only" for="subscribe-email">and your email</label>
                    <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
                  </div><!-- form group-->
                  <input type="submit" class="btn btn-danger"
                  value="Subscribe!">
                </form>
                <hr>
                <p><small>By providing your email you consent to receiving
                  occasional promotional email &amp; newsletters. <br>No Spam. Just
                  good stuff. We respect your privacy &amp; you may unsubscribe at any time.
                </small>
              </p>
              </div>
            </div>
          </div>
      </div>
<!-- BOOTSTRAP CORE JAVASCRIPT
      ================================================================ -->
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
      <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>
