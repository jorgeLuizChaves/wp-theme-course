<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bootstrap2wordpress
 */

get_header(); ?>
<section class="feature-image feature-image-default" data-type="background" data-speed="2"
style="background-position: 50% 0px;">
	<h1 class="page-title">404 page not found</h1>
</section>

<div class="container" >
	<div class="row" id="primary">
		<main id="content" class="col-sm-8" role="main">
			<h3>Maybe you are looking for Resources</h3>
			<div class="row">
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
		</div><!-- row -->
		<div class="row">
			<h3>Categories</h3>
			<p>
				...or maybe a popular category?
			</p>
			<div class="widget widget_categories">
				<h4 class="widget-title">Most Used Categories</h4>
				<ul>
					<?php wp_list_categories( array (
					'orderby' => 'count',
					'order' => 'DESC',
					'show_count' => 1,
					'title_li' => '',
					'number' => 10
					)) ?>
				</ul>
			</div>

			<h3>Archives</h3>
			<p>
				You can always sort through our archives...
			</p>
				<?php the_widget( 'WP_Widget_Archives', 'title=Our Archives', 'before_title=<h4 class="widget_title">&after_title=</h4>'); ?>
<p>
	...or, just head back to the <a href="<?php echo esc_url( home_url('/') ); ?>">home page</a>
</p>
		</div>

		</main><!-- #main -->
		<aside class="col-sm-4">
			<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
			<?php if ( bootstrap2wordpress_categorized_blog() ) : ?>
				<div class="widget widget_categories">
					<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'bootstrap2wordpress' ); ?></h2>
					<ul>
					<?php
						wp_list_categories( array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 10,
						) );
					?>
					</ul>
				</div><!-- .widget -->
			<?php endif; ?>
			<?php
				/* translators: %1$s: smiley */

				the_widget( 'WP_Widget_Tag_Cloud' );
			?>
		</aside>
	</div><!-- #primary -->
</div>

<?php
get_footer();
