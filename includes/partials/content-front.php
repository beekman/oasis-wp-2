<?php
/**
 * The template used for displaying homepage content
 *
 * @package WordPress
 * @subpackage Oasistheme
 */
?>

<div class="flex-half-reverse" role="main">
  <div class="half">
	<?php the_field('top_left'); ?>

	<?php the_content();?>

	<?php if ( dynamic_sidebar('home-main-left-widgets') ) : else : endif; ?>
  </div>
  <div class="half">
	<?php the_field('top_right'); ?>

	<?php the_post_thumbnail('large' ); ?>

	<?php if ( dynamic_sidebar('home-main-right-widgets') ) : else : endif; ?>
  </div>
</div>
<?php ?>
