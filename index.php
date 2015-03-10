<?php get_header(); ?>

<div id="content">

  <div id="inner-content" class="wrap cf">

   <div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

    <article id="post-<?=the_ID()?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">

     <header>

      <?=get_template_part('includes/partials/content', 'header')?>

    </header>

    <section id="content" itemprop="articleBody">
     <?php if (have_posts()) :
      while (have_posts()) :
       the_post(); ?>

       <?=get_template_part('includes/partials/content', 'index');?>
     <?php endwhile; ?>

     <?php if (function_exists('oasis_page_navi')): ?>

      <?=oasis_page_navi()?>

    <?php else: ?>

      <nav class="wp-prev-next">

        <ul class="clearfix">

          <li class="prev-link"><?=next_posts_link(__('&laquo; Older Entries', 'oasistheme'))?></li>
          <li class="next-link"><?=previous_posts_link(__('Newer Entries &raquo;', 'oasistheme'))?></li>
        </ul>



      </nav>


    <?php endif; ?>
  </section>
<?php endif; ?>
</article>
</div> <!-- end #main -->
<div class="last-col d-2of7 t-1of3 m-all">
 <?php get_sidebar(); ?>
</div>
</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
