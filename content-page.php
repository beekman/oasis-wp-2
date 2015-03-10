<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Oasistheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
		<header class="article-header">
			<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
		</header> <!-- end article header -->
		<section class="entry-content clearfix" itemprop="articleBody">
			<?php the_content(); ?>
<?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
				<?php the_post_thumbnail( 'medium', array( 'class' => 'floatright stroked' ) );
		} ?>
			<?php the_content(); ?>
		</section> <!-- end article section -->

		<footer class="article-footer"></footer> <!-- end article footer -->
</article> <!-- end article -->
