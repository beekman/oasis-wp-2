<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

			<?php if (have_posts()) {
				while (have_posts()) {
					the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<header class="article-header">

							<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<!-- in the byline, print only the post date on the index pages -->
							<p class="byline vcard"><?php the_time('F j, Y'); ?></p>

							</header> <!-- end article header -->

							<section class="entry-content clearfix">
							<?php if ( has_post_thumbnail() ) { ?>
								<div class="stroked box-left"> <?php the_post_thumbnail('thumbnail'); ?></div>
						<?php 	} //end post thumnail
							the_content(); ?>
							</section> <!-- end article section -->

							<footer class="article-footer">
								<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'oasistheme') . '</span> ', ', ', ''); ?></p>

							</footer> <!-- end article footer -->

							<?php // comments_template(); // uncomment if you want to use them ?>

						</article> <!-- end article -->

					<?php } //endwhile; ?>

					<?php if (function_exists('oasis_page_navi')) { ?>
						<?php oasis_page_navi(); ?>
					<?php } else { ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "oasistheme")) ?></li>
								<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "oasistheme")) ?></li>
							</ul>
						</nav>
					<?php } ?>  <!-- endwhile -->

					<?php } else { ?>

					<article id="post-not-found" class="hentry clearfix">
						<header class="article-header">
							<h1><?php _e("Oops, Post Not Found!", "oasistheme"); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "oasistheme"); ?></p>
						</section>
						<footer class="article-footer">
							<p><?php _e("This is the error message in the index.php template.", "oasistheme"); ?></p>
						</footer>
					</article>

					<?php } //endif ?>

				</div> <!-- end #main -->

				<?php get_sidebar(); ?>

			</div> <!-- end #inner-content -->

		</div> <!-- end #content -->

		<?php get_footer(); ?>
