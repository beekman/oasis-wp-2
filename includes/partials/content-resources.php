<? // ! BOOKS, MUSIC & OTHER RESOURCES -------
//These use tags, not categories----------------------------------
?>
<section>
		<?php the_content(); ?>
</section>

<section id="awakening">
	<?php $awakening_query = new WP_Query( array(
		'post_type' => 'publications',
		'tag_slug__in' => 'awakening',
		'posts_per_page' => 50,
		'orderby' => 'title',
		'numberposts'=> 50 )
	);
	while($awakening_query->have_posts()) :
		$awakening_query->the_post();
		get_template_part('includes/partials/content-resource');
		endwhile;
	wp_reset_postdata();?>
</section>

<section id="investigating">
		<?php $investigating_query = new WP_Query( array(
				'post_type' => 'publications',
				'tag_slug__in' => 'investigating-the-mind',
				'posts_per_page' => 50,
				'orderby' => 'title',
				'meta_key' => 'publication_author',
				'numberposts'=> 50 )
		);
	while($investigating_query->have_posts()) :
			$investigating_query->the_post(); ?>

			<?=get_template_part('includes/partials/content-resource')?>

	<?php endwhile; ?>
	<?php wp_reset_postdata();?>
</section> <!-- #investigating -->

<section id="navigating">
		<?php $navigating_query = new WP_Query( array(
			'post_type' => 'publications',
			'tag_slug__in' => 'navigation',
			'posts_per_page' => 50,
			'orderby' => 'title',
			'numberposts'=> 50 )
		);
		while($navigating_query->have_posts()) :
			$navigating_query->the_post();
			get_template_part('includes/partials/content-resource');
		endwhile;
	wp_reset_postdata();?>
</section> <!-- #navigating -->

<section id="poetry">
	<?php $poetry_query = new WP_Query( array(
		'post_type' => 'publications',
		'tag_slug__in' => 'poetry',
		'posts_per_page' => 50,
		'orderby' => 'title',
				/* 'orderby' => 'meta_value',
				'meta_key' => 'publication_author', */
				'numberposts'=> 50 )
	);
	while($poetry_query->have_posts()) :
				$poetry_query->the_post();
				get_template_part('includes/partials/content-resource');
		endwhile;
		wp_reset_postdata(); ?>
</section>

<section id="audio">
		<?php
		$audio_query = new WP_Query( array(
			'post_type' => 'music',
			'posts_per_page' => 50,
			'orderby' => 'title',
			'numberposts'=> 50 )
				/* 'orderby' => 'meta_value',
				'meta_key' => 'publication_author', */ );
				while($audio_query->have_posts()) : $audio_query->the_post(); ?>
				<?=get_template_part('includes/partials/content-resource')?>
		<?php endwhile;
		wp_reset_postdata(); ?>
 </section>
