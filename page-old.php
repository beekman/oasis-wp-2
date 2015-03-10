<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap clearfix">

			<?php main_column_before_post();
			if (have_posts()) {
				while (have_posts()) {
					the_post();
									// Include the page content template.
					if (is_page ('home')) {
						get_template_part('content', 'home' );
					}
					else {
						get_template_part( 'content', 'page' );
					} //endif page
				} //endwhile
			} //endif
			 ?>
			<?php main_column_after_post(); ?>

			<?php get_sidebar(); ?>

				</div>

			</div>


			</div> <!-- end #inner-content -->

		</div> <!-- end #content -->

<?php get_footer(); ?>
