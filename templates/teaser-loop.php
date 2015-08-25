<div class="su-posts su-posts-teaser-loop">
	<?php
		// Posts are found
		if ( $posts->have_posts() ) {
			while ( $posts->have_posts() ) :
				$posts->the_post();
				global $post;
        global $more;
 $more = 0; #Display content above the more tag.
				?>
				<article id="post-<?=the_ID()?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
    <section class="entry-content cf">
  <h2 class="entry-title">
    <a
    href="<?=the_permalink()?>"
    rel="bookmark"
    title="<?=the_title_attribute()?>"
    >
    <?=the_title()?>
    </a>
  </h2>
<div class="alignright"><?=the_post_thumbnail( 'small' )?></div>
  <?php the_content("More..."); ?>
  </section>
</article>
				<?php
			endwhile;
		}
		// Posts not found
		else {
			echo '<h4>' . __( 'Nothing Listed', 'su' ) . '</h4>';
      echo '<p>' . __( 'There are no upcoming events of this type listed currently. Please check back soon, as these listings are updated frequently.', 'su' ) . '</p>';
		}
	?>
</div>
