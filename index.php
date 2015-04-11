<?php get_header(); ?>

<?php get_template_part('includes/partials/content', 'category_bar'); ?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

				<header>

					<?php oasis_blog_subnav(); ?>

				</header>

				<section id="content" itemprop="articleBody">

					<?php global $more;    // Declare global $more (before the loop). ?>

					<?php // First, initialize how many feature posts per page
					$display_count = 2;
					// Next, get the current page
					$page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
					// After that, calculate the offset
					$offset = (( $page - 1 ) * $display_count);
					// Finally, we'll set the query arguments and instantiate WP_Query
					$featured_args = array(
						'post_type'  =>  'post',
						'orderby'    =>  'date',
						'order'      =>  'desc',
						'posts_per_page'     =>  $display_count,
						'page'       =>  $page,
						'offset'     =>  $offset,
					);
					$featured_query = new WP_Query ( $featured_args );
					?>
					<?php if ($offset >= 0) : ?>

						<?php while ($featured_query->have_posts() ) :
							$featured_query->the_post(); ?>
							<div class="featured-post">

								<?php $more = 1;       // Display all content, including text below more.

									get_template_part( 'post-formats/format', get_post_format() );
								?>
							</div>
						<?php endwhile; ?>

					<? wp_reset_query(); ?>
					<?php endif; ?>
					<? // First, initialize how many teaser posts to render per page
					$display_count = 10;
					// Next, get the current page
					$page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
					// After that, calculate the offset
					$offset = (( $page - 1 ) * $display_count + 2);
					// Finally, we'll set the query arguments and instantiate WP_Query
					$query_args = array(
					  'post_type'   =>  'post',
					  'orderby' =>  'date',
					  'order'   =>  'desc',
					  'posts_per_page'  =>  $display_count,
					  'page'    =>  $page,
					  'offset'  =>  $offset
					);

					$teasers_query = new WP_Query ( $query_args );
					?>
					<?php if ($teasers_query->have_posts()) :
						while ($teasers_query->have_posts()) :
							$teasers_query->the_post(); ?>
							<div class="d-1of2 t-1of2 m-all teaser-box">
								<?php #the "teasers" appear after the featured posts
								$more = 0; #Display content above the more tag.
								?>
								<?php
								get_template_part( 'post-formats/format', get_post_format() );
								?>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					<?php endif; ?>

				</section>

			</article>

			<div class="page-nav cf">

				<?php if (function_exists('oasis_page_navi')): ?>

					<?=oasis_page_navi()?>

				<?php else: ?>

					<nav class="wp-prev-next">

						<ul class="clearfix">

						<li class="prev-link"><?=next_posts_link(__('&laquo; Older Entries', 'oasistheme'))?></li>
						<li class="next-link"><?=previous_posts_link(__('Newer Entries &raquo;', 'oasistheme'))?></li>
						</ul>



					</nav>


				<?php endif; ?>

			</div>

		</div> <!-- end #main -->

		<?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
