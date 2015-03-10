<?php
/**
 * The template used for displaying homepage content
 *
 * @package WordPress
 * @subpackage Oasistheme
 */
?>

<div class="m-all t-2of3 d-4of7 cf first" role="main">
	<?php the_field('top_left'); ?>
      <?php the_content();?>
	<?php if ( dynamic_sidebar('home-main-left-widgets') ) : else : endif; ?>
</div><!-- role: main -->
<div class="m-all t-1of3 d-3of7 last-col">
	<?php the_post_thumbnail('large' ); ?>
	<?php if ( dynamic_sidebar('home-main-right-widgets') ) : else : endif; ?>
</div>
<?php ?>
