<?php # The content loop for the index page. ?>

<h3 class="entry-title">
  <a
    href="<?=the_permalink()?>"
    rel="bookmark"
    title="<?=the_title_attribute()?>"
  >
      <?=the_title()?>
  </a>
</h3>

<p class="byline entry-meta vcard">

</p>

<section class="entry-content cf">

  <?=the_post_thumbnail( 'portrait-300' )?>


  <?=the_excerpt()?>

  <footer class="article-footer">
  </footer>

</section>
