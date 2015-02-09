
							<?php
								/*
								 * This is the default post format.
								 *
								 * So basically this is a regular post. if you don't want to use post formats,
								 * you can just copy ths stuff in here and replace the post format thing in
								 * single.php.
								 *
								 * The other formats are SUPER basic so you can style them as you like.
								 *
								 * Again, If you want to remove post formats, just delete the post-formats
								 * folder and replace the function below with the contents of the "format.php" file.
								*/
							?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h3 class="entry-title single-title bigbold" itemprop="headline"><?php the_title(); ?></h3>

									<p class="byline vcard">
										<?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'oasistheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')) ; ?>
									</p>

								</header> <?php // end article header ?>

								<section class="entry-content cf" itemprop="articleBody">
									<?php if ( has_post_thumbnail() ) { ?>
										<div class="stroked box-left"> <?php the_post_thumbnail('medium'); ?></div> <?php
									} //endif post thumbnail
									 the_content();
									?>
								</section><?php // end article section ?>

								<footer class="article-footer">

									<?php printf( __( 'Filed under: %1$s', 'oasistheme' ), get_the_category_list(', ') ); ?>

									<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'oasistheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer> <?php // end article footer ?>

								<?php comments_template(); ?>

							</article> <?php // end article ?>
