<?php
/**
 * Template Name: Resources Page
 */
get_header();

$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>

<!-- FEATURE IMAGE
============================================== -->
  <?php if(has_post_thumbnail()) : ?>
  <section class="feature-image feature-image-default"
        style="background: url('<?= $thumbnail_url; ?>') no-repeat; background-size: cover;"
        data-type="background" data-speed="2">
    <h1 class="page-title"><?= the_title();?></h1>
  </section>
<?php else : ?>
  <section class="feature-image feature-image-default" data-type="background" data-speed="2">
    <h1 class="page-title"><?= the_title();?></h1>
  </section>
<?php endif; ?>

  <!-- MAIN content
  ========================================= -->
  <div class="container">
    <div class="row" id="primary">
      <div id="content" class="col-sm-12">
        <section class="main-content">
            <?php while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
          <hr>
          <div class="resource-row clear-fix" >
              <?php $loop = new WP_Query(array('post_type' => 'resource',
              'orderby' => 'post_id',
              'order' => 'asc'  )); ?>
              <?php while($loop->have_posts()) : $loop->the_post(); ?>
                <div class="resource">
                <?php
                  $link_url = get_field('link_resource');
                  $msg_btn = get_field('message_button');
                 ?>
                <?php if(has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
                  <h3><?php echo the_title(); ?></h3>
                  <?php the_content(); ?>
                  <a href="<?php echo $link_url; ?>" class="btn btn-success">
                      <?php echo $msg_btn; ?>
                  </a>
                  </div><!-- resource -->
              <?php endwhile; wp_reset_query(); ?>
          </div><!-- resource row -->
        </section>
      </div>
    </div>
  </div>

<?php
get_footer();
 ?>
