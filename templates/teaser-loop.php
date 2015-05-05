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
  <h2 class="entry-title">
    <a
    href="<?=the_permalink()?>"
    rel="bookmark"
    title="<?=the_title_attribute()?>"
    >
    <?=the_title()?>
    </a>
  </h2>

  <p class="byline entry-meta vcard">

  </p>

  <section class="entry-content cf">
  <div class="alignright">
    <?=the_post_thumbnail( 'thumb' )?>
  </div>


  <?php

  the_content("More...");
  ?>

  <footer class="article-footer">
  </footer>

  </section>
</article>
				<?php
			endwhile;
		}
		// Posts not found
		else {
			echo '<h4>' . __( 'Posts not found', 'su' ) . '</h4>';
		}
	?>
</div>
