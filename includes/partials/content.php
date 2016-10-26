<?php if (have_rows('tab_panels')): ?>
	<?php while (have_rows('tab_panels')): ?>
		<?php
            the_row();
            $section_title = get_sub_field('section_title');
            $section_slug = sanitize_title($section_title);
        ?>

		<div id="<?=$section_slug?>">
              <h2 class="section-title"><?=the_sub_field('section_title')?></h2>
			<?=the_sub_field('section_content')?>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php if (is_page('schedule')): ?>
	<div class="calendar-container">
		<iframe src="http://www.supersaas.com/schedule/oasis/IndividualSessions" width="600" height="800"> </iframe>
	</div>
<?php endif; ?>

<?php echo the_content(); ?>
