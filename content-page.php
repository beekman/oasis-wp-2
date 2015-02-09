<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Oasistheme
 */
?>
<!-- oasis begin  -->
<div class="m-all t-2of3 d-3of7 cf" role="main">
	<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
		<header class="article-header">
			<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
		</header> <!-- end article header -->
		<section class="entry-content clearfix" itemprop="articleBody">
			<?php the_content(); ?>
		</div>
<?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
				<?php the_post_thumbnail( 'medium', array( 'class' => 'alignright stroked' ) );
		} ?>
			<?php the_content(); ?>
		</section> <!-- end article section -->

		<footer class="article-footer"></footer> <!-- end article footer -->
	</article> <!-- end article -->
</div>
