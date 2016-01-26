<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bootstrap2wordpress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h3 class="entry-title">', '</h3>' );
			} else {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			}

		if ( 'post' === get_post_type() ) : ?>
				<div class="post-details">
						<i class="fa fa-user"></i>
						<?php the_author(); ?>
						<i class="fa fa-clock-o"></i>
						<?php the_date(); ?>
						<i class="fa fa-folder"></i>
						<?php the_category(', '); ?>
						<i class="fa fa-tags"></i>
						 <?php the_tags( 'Tags: ', ', ', ' ' ); ?> 
			<div class="post-comments-badge">
				<a href="<?php comments_link(); ?>">
					<i class="fa fa-comments"></i>
					<?php comments_number(0, 1, '%'); ?>
				</a>
			</div><!-- post-comments-badge -->
			<?php edit_post_link('Edit', '<div class="fa fa-pencil">', '</div>' ); ?>
		</div><!-- post details -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->


	<?php if(has_post_thumbnail()) : ?>
			<div class="post-image" style="height: auto;">
				<?php the_post_thumbnail(); ?>
			</div><!-- post-image -->
	<?php endif; ?>

	<div class="post-excerpt">
		<?php if(is_single()) : the_content(); ?>
		<?php else : the_excerpt(); endif; ?>
	</div><!-- post-excert -->
</article><!-- #post-## -->
