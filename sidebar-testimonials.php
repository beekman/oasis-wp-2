<?
add_action('after_sidebar','page_testimonials');

function page_testimonials() {
global $post;?>
<?php
/* ! ASSIGN TESTIMONIALS TO PAGES USING TESTIMONIAL SECTIONS TAXONOMY SLUG */
if ( is_single ( ) ) {
	?> <a href="http://feedburner.google.com/fb/a/mailverify?uri=oasislifedesign&amp;loc=en_US">Enjoy the blog delivered weekly directly to your inbox</a> <?php
		$tterms='blog';
		$testorderby='rand';
	} // we're looking at a single post, so let's put the blog testimonials in the sidebar
		elseif ( is_page('blog') ) {
			$tterms='blog';
			$testorderby='rand';
		}
		elseif ( is_page('contact') ) {
			$tterms='contact';
			$testorderby='date';
		}
		elseif ( is_page('resources') ) {
			$tterms='resources';
			$testorderby='date';
		}
		elseif ( is_page('services') ) {

		} //none for services page
		else {
			$tterms='blog';
			$testorderby='rand';
		}
		/* ! PLACE 5 TESTIMONIAL QUOTES IN SIDEBAR */
		$testimonial_args = array(
		                          'cat' => 'testimonials',
		                          'posts_per_page' => 5,
		                          'orderby' => $testorderby,
		                          'post_type' => 'testimonials',
		                          'tax_query' => array(
		                                               array(
		                                                     'taxonomy' => 'testimonial_sections',
		                                                     'field' => 'slug',
		                                                     'terms' => $tterms
		                                                     )
		                                               )
		                          );

	// !NO SLIDER QUOTE IN SIDEBAR FOR HOME, RESOURCES, ABOUT, OR CONTACT PAGES
		if ( (!is_page('resources') ) && (!is_page('contact') ) && (!is_page('about') ) && (!is_page('home') ) ) {
			?>  <div class="slidewrap2" data-autorotate="9000" aria-live="off">
			<ul class="slider"> <?php
				$testimonial_query = new WP_Query( $testimonial_args );
				while($testimonial_query->have_posts())  { $testimonial_query->the_post(); ?>
				<li class="slide">
					<blockquote class="pquote">
						<?php the_excerpt();
						echo '<h2 class="quote_attribution"><a href="';
						the_permalink();
						echo '">';
						the_title();
		//get_custom_field_data('testimonial_attributions', true);
						?></h2></blockquote></li></a>
						<?php } //endwhile ?>
					</ul> <!-- slider -->
					<?php wp_reset_postdata(); ?>

				</div> <!-- slidewrap2 -->
				<?php echo do_shortcode('[ta]');
			} ?>



		<?php
		/* END PAGE TESTIMONIALS/SIDEBAR ICONS */
}
