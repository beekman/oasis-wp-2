<?php # The content loop for the index page. ?>
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
	<div class="floatright">
		<?=the_post_thumbnail( 'thumb' )?>
	</div>


	<?php
	the_content("More...");
	?>

	<footer class="article-footer">
	</footer>

	</section>
</article>
