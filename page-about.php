<?php /*
 Template Name: About Page
 */
get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap clearfix">

			<?php main_column_before_post();
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					echo the_field ('about_tab1');
					echo the_field ('about_tab2');
					echo the_field ('about_tab3');
					echo the_field ('about_tab4');
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
