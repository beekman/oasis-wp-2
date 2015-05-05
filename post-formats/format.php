<?php
/*
* This is the default post format.
*
* So basically this is a regular post. if you don't want to use post formats,
* you can just copy ths stuff in here and replace the post format thing in
* single.php.
*
* The other formats are SUPER basic so you can style them as you like.
*
* Again, If you want to remove post formats, just delete the post-formats
* folder and replace the function below with the contents of the "format.php" file.
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

  <header class="article-header">

<?php
if(is_singular('post')) : ?>
      <h1 class="entry-title">
    <?php else: ?>
      <h2 class="entry-title">
        <a href="<?=the_permalink()?>" rel="bookmark" title="<?=the_title_attribute()?>">
    <?php endif; ?>

          <?=the_title()?>

          <?php if(is_singular( 'post' )) :?>
            </h1>
          <?php else: ?>
              </a>
              </h2>
          <?php endif; ?>

      <p class="byline vcard">
        <?php printf(__( '<time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'oasistheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')) ); ?>
        <?php if (has_category()): ?>
          <span class="meta-gray"><i>in </i><span class="all-caps">
              <?php printf( __( ' %1$s', 'oasistheme' ), get_the_category_list(', ') ); ?>
            </span>
          </span>
        <?php endif; ?>
      </p>

  </header> <?php // end article header ?>

    <section class="entry-content cf" itemprop="articleBody">
      <?php if (has_post_thumbnail()): ?>
        <? global $more; ?>
        <?php if ($more): ?>
          <div class="t-1of2 d-1of2 m-all">
            <?php $thumb_size = 'medium';
          ?></div><?php
        else:
          $thumb_size = 'thumb';
        endif;
      ?>

      <div class="stroked-orange box-left featured-img"> <?php the_post_thumbnail($thumb_size); ?>
      </div> <?php
      endif;
      global $more;
      //use the excerpt if there is one. If not, use up to the More tag if there is one,
      //If no more tag and no excerpt, use the whole post content.
      if ($more):
        the_content();
      elseif($post->post_excerpt):
          the_excerpt();
        else:
          the_content('Read More>>');
      endif;

      ?>
    </section><?php // end article section ?>

    <footer class="article-footer">

      <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'oasistheme' ) . '</span> ', ', ', '</p>' ); ?>

    </footer> <?php // end article footer ?>

 <?php if(is_singular('post')) : ?>
  <?php comments_template(); ?>
<?php endif; ?>
</article> <?php // end article ?>
