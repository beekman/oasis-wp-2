<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php if(is_singular('post')): ?>
<div class="beachbar">
  <div>
    <div class="wrap">
      <?php oasis_blog_subnav(); ?>
    </div>
  </div>
</div>
<?php endif; ?>
			<div id="content">

				<div id="inner-content" class="wrap cf">

					<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

							<?php
								/*
								* Ah, post formats. Nature's greatest mystery (aside from the sloth).
								*
								* So this function will bring in the needed template file depending on what the post
								* format is. The different post formats are located in the post-formats folder.
								*
								*
								* REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
								* A SPECIFIC POST FORMAT.
								*
								* If you want to remove post formats, just delete the post-formats folder and
								* replace the function below with the contents of the "format.php" file.
								*/
								get_template_part( 'post-formats/format', get_post_format());
							?>
              <div class="related-post-links">
                <h3>Want More? You Might Also Enjoy These&hellip;</h3>
                  <div class="two-col"
                    <?php echo the_excerpt() . oasis_related_posts(); ?>
                  </div>
              </div>
						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'oasistheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'oasistheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'oasistheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</div>

					<?php get_sidebar(); ?>


				</div>

			</div>

<?php get_footer(); ?>
