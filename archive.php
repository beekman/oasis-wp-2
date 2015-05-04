<?php get_header(); ?>

<div class="beachbar">
    <div>
        <div class="wrap">
            <?php oasis_blog_subnav(); ?>
        </div>
    </div>
</div>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

            <?php
            if (is_category()) {
                ?><h1 class="archive-title h2">
                   <span><?php _e('Posts Categorized:', 'oasistheme');?></span>
                  <?php single_cat_title();?>
                </h1>

           <?php
       }
       elseif (is_tag())
       {
         ?>
         <h1 class="archive-title h2">
             <span><?php _e('Posts Tagged:', 'oasistheme'); ?></span> <?php single_tag_title(); ?>
         </h1>

         <?php } elseif (is_author()) {
             global $post;
             $author_id = $post->post_author;
             ?>
             <h1 class="archive-title h2">

                <span><?php _e('Posts By:', 'oasistheme'); ?></span> <?php the_author_meta('display_name', $author_id); ?>

            </h1>
            <?php } elseif (is_day()) { ?>
            <h1 class="archive-title h2">
                <span><?php _e( 'Daily Archives:', 'oasistheme' ); ?></span> <?php the_time('l, F j, Y'); ?>
            </h1>

            <?php } elseif (is_month()) { ?>
            <h1 class="archive-title h2">
                <span><?php _e( 'Monthly Archives:', 'oasistheme' ); ?></span> <?php the_time('F Y'); ?>
            </h1>

            <?php } elseif (is_year()) { ?>
            <h1 class="archive-title h2">
                <span><?php _e( 'Yearly Archives:', 'oasistheme' ); ?></span> <?php the_time('Y'); ?>
            </h1>
            <?php } ?>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="d-1of2 t-1of2 m-all teaser-box">
                    <?php #the "teasers" appear after the featured posts
                    $more = 0; #Display content above the more tag.
                    ?>
                    <?php
                    get_template_part( 'post-formats/format', get_post_format() );
                    ?>
                </div>

             <?php endwhile; ?>

             <?php oasis_page_navi(); ?>

         <?php else : ?>

            <article id="post-not-found" class="hentry cf">
               <header class="article-header">
                  <h1><?php _e( 'Oops, Post Not Found!', 'oasistheme' ); ?></h1>
              </header>
              <section class="entry-content">
                  <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'oasistheme' ); ?></p>
              </section>
              <footer class="article-footer">
                  <p><?php _e( 'This is the error message in the archive.php template.', 'oasistheme' ); ?></p>
              </footer>
          </article>

      <?php endif; ?>

  </div>

  <?php get_sidebar(); ?>

</div>

</div>

<?php get_footer(); ?>
