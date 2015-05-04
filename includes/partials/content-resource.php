<? #single publication ?>
<div class="publication clearfix">
<?php if(has_post_thumbnail()): ?>
	<div class="d-1of7 t-1of5 m-1of5 first">
	<? the_post_thumbnail('medium'); ?>
</div>
<? endif; ?>
<div class="d-6of7 t-4of5 m-4of5 last-col">
	<div class="pubgroup">
		<span class="pub_title">
			<a href="<?php get_custom_field_data('link_to_amazon', true); ?>" rel="external"><?php the_title(); ?>
		</span><!-- .pub_title --></a><br>
			<span class="pub_author">
				<?php get_custom_field_data('book_titles', true); #this field actually maps to the author?>
			</span>
	</div> <!-- .pubgroup -->
	<div class="pub_review"><?php the_content();?></div>
</div>
</div><!-- .publication -->
