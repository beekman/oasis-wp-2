<?php
/**
 * The template used for displaying the Services page tabs
 *
 * @package WordPress
 * @subpackage Oasistheme
 */
?>
<div id="sub-tabs">
	<ul>
		<li><a href="#individual">Individual Coaching</a></li>
		<li><a href="#coaches">Coaching for Coaches</a></li>
		<li><a href="#classes">Workshops</a></li>
	</ul>

	<div id="individual" ><!-- second tab of services: Individual Coaching -->
		<div class="third-r">
			<div class="slidewrap2" data-autorotate="8000" aria-live="off"><ul class="slider">
			<?php
			$tterms='individual_sessions';
			/* ! 2ND TAB TESTIMONIAL QUOTES*/
			$testimonial_args2 = array(
				'cat' => 'testimonials', 'orderby' => 'date', 'post_type' => 'testimonials', 'tax_query' => array(
					array('taxonomy' => 'testimonial_sections', 'field' => 'slug', 'terms' => 'individual_sessions'
					)
				)
			);

			$individual_query = new WP_Query( $testimonial_args2 );

			while($individual_query->have_posts())  { $individual_query->the_post(); ?>
				<li class="slide">
				<blockquote class="pquote">
				<?php the_excerpt();
			echo '<h2 class="quote_attribution"><a href="';
			the_permalink();
			echo '">';
			the_title();
			//get_custom_field_data('testimonial_attributions', true);
			?></a></h2>
			<?php echo do_shortcode('[ta]'); ?>
			</blockquote></li>
			<?php } //endwhile
				wp_reset_postdata(); ?>
		</ul> <!-- slider -->
	</div> <!-- slidewrap2 -->
</div> <!-- .third -->
<div class="twothirds">
<?php the_field('individual_sessions'); ?>
<br>
<?php echo the_field('rates'); ?>
</div><!-- .whalf -->
</div><!--  .individual -->

<!--Third Tab in Services:  Coaching for Coaches -->
<div id="coaches">
	<div class="third-r">
		<div class="slidewrap2" data-autorotate="8000" aria-live="off"><ul class="slider"><?php
		$tterms='coaching_for_coaches';
		/* ! 3RD TAB TESTIMONIAL QUOTES */
		$testimonial_args3 = array(
			'cat' => 'testimonials', 'orderby' => 'date', 'post_type' => 'testimonials', 'tax_query' => array(
				array('taxonomy' => 'testimonial_sections', 'field' => 'slug', 'terms' => $tterms
				)
			)
		);
		$coaches_query = new WP_Query( $testimonial_args3 );
		while($coaches_query->have_posts())  { $coaches_query->the_post(); ?>
			<li class="slide">
			<blockquote class="pquote">
			<?php the_excerpt();
		echo '<h2 class="quote_attribution"><a href="';
		the_permalink();
		echo '">';
		the_title();
		?></a></h2><?php echo do_shortcode('[ta]');?></blockquote></li>
				<?php } //endwhile
		wp_reset_postdata(); ?>
			</ul> <!-- slider -->
		</div> <!-- slidewrap -->
		<p>Thanks to Anne Marie Polich for this artistic rendering of Hafiz's poetry. </p>
			<p class="peace"> &quot;Troubled? <br>Then stay with me <br>for I am not.&quot;   - Hafiz.</p>
	</div><!-- third-r -->
<div class="twothirds">
		<?php the_field('coaching_for_coaches'); ?>
<!--    <h3 class="bigbold">Coaching for Coaches</h3>
	<p>Designed to help break through a stuck place and make a <span class="bigbold">quick shift</span>.
	Excellent for moving through a deeply held limiting belief on a core issue.
	<p>Even though we “do our own work” diligently, we’re sometimes limited by our own blind spots.
	Being facilitated by a trained coach often gives <span class="bigbold">immediate traction</span> to move forward.
	<br>
	<p>I also offer <a href="http://www.oasislifedesign.com/services/#workshops" title="View Upcoming Workshops">group workshops</a> and <a href="http://www.oasislifedesign.com/services/#teleclasses" title="View Upcoming Teleclasses">teleclasses</a> for coaches.
		<div style="padding: 0 0;"><img src="http://www.oasislifedesign.com/wp-content/uploads/hafiz.jpg" alt= "Art by Anne Marie Polich" title="Thanks to Anne Marie Polich for this artistic rendering of Hafiz's poetry &quot;Troubled? Then stay with me for I am not.&quot;   - Hafiz." class="wp-image-1152"/>
		</div>--> <!-- hafiz -->
	</div> <!-- twothirds fl -->
</div> <!-- #coaches -->

<!-- 4th tab: Workshops -->
	<div id="classes">
	<div class="twothirds fl">
	<h3 class="bigbold">Upcoming Workshops, Retreats, and Teleclasses</h3>
					<?php
		$events_query = new WP_Query( array(
				'post_type' => 'events', 'posts_per_page' => 10, 'orderby' => 'date', 'order' => 'ASC','numberposts'=> 10, 'post_status' => 'future'
				// 'tax_query' => array(
				//  array('taxonomy' => 'event-categories', 'field' => 'slug', 'terms' => 'workshop')
				// )
			)
		);
		while($events_query->have_posts())  {
			$events_query->the_post(); ?>
					<div class="event"> <h2><?php the_title(); ?></h2> <div class="event-times"><?php /* get_custom_field_data('event-start-dates', true); */ the_date(); ?><br><?php get_custom_field_data('event-times', true); ?> </div> <!-- .event-times -->
						<div class="event-location">
						<?php get_custom_field_data('event-locations', true); ?> </div>
						<div class="event_description"><div class="fl"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium');}?> </div>
						<?php the_content(); ?> </div>
					</div> <!-- .event -->
		<?php } //endwhile
		wp_reset_postdata(); ?>
		</div><!-- twothirds -->
		<div class="third" style="margin-left: 66.66666%">
			<div class="slidewrap2" data-autorotate="10000" aria-live="off"><ul class="slider"> <?php
		$tterms='teleclasses';
		/* ! 5TH TAB TESTIMONIAL QUOTES */
		$testimonial_args4 = array(
			'cat' => 'testimonials', 'orderby' => 'date', 'post_type' => 'testimonials', 'tax_query' => array(
				array('taxonomy' => 'testimonial_sections', 'field' => 'slug', 'terms' => $tterms
				)
			)
		);
		$group_query = new WP_Query( $testimonial_args4 );
		while($group_query->have_posts())  {
			$group_query->the_post();
			echo '<li class="slide"><blockquote class="pquote">';
				the_excerpt();
				echo '<h2 class="quote_attribution"><a href="';
					the_permalink();
					echo '">';
					the_title();
				echo '</a></h2>';
				echo do_shortcode('[ta]';
			echo '</blockquote></li>';
		} //endwhile
		wp_reset_postdata(); ?>
			</ul> <!-- slider -->
			</div> <!-- .slidewrap2 -->
		</div> <!-- .third -->
	</div>   <!-- #workshops -->
</div><!-- #sub-tabs -->
<?php
//end of content-services.php
?>
