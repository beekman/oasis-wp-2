<?=get_header()?>

<?php if (have_posts()): ?>
  <?php while (have_posts()): ?>
    <?php if (is_page ('resources')) : ?>
       <div class="sub-tabs cf clearfix">
          <nav id="submenu" class="tabs beachbar">
             <div class="wrap">
                <ul class="" role="navigation">
                   <li><a href="#awakening" id="awakening_tab" aria-describedby="awakening">Heart and Wholeness</a></li>
                   <li><a href="#investigating" id="investigating_tab" aria-describedby="investigating">Investigating the Mind</a></li>
                   <li><a href="#navigating" id="navigating_tab" aria-describedby="navigating">Navigating the Path Ahead</a></li>
                   <li><a href="#poetry" id="poetry_tab" aria-describedby="poetry">Poetry</a></li>
                   <li><a href="#audio" id="audio_tab" aria-describedby="audio">Audio</a></li>
                </ul>
             </div>
          </nav>
    <?php elseif (have_rows('tab_panels')): ?>
      <div class="sub-tabs cf clearfix">
      <nav id="submenu" class="tabs beachbar">
        <div class="wrap">
          <ul>
            <?php while (have_rows('tab_panels')): ?>
              <?php the_row();
              $section_title = get_sub_field('section_title');
              $section_slug = sanitize_title($section_title); //define tab names based on the "slugs" of the tab names. ?>
              <li><a href="#<?php echo $section_slug; ?>"><?php echo $section_title; ?></a></li>
            <?php endwhile; ?>
          </ul>
        </div>
      </nav> <!-- /#submenu -->
    <?php elseif( get_field('beach-text') ): ?>
      <div class="beachbar">
        <div class="wrap">
          <?php echo the_field('beach-text'); ?>
        </div>
      </div>
    <?php endif; ?>
    <?=the_post()?>
  <div class="wrap">
    <article id="post-<?=the_ID()?>" role="article" itemscope itemtype="http://schema.org/BlogPosting" class="m-all t-2of3 d-5of7">

     <header>

      <?=get_template_part('includes/partials/content', 'header')?>

    </header>


    <section id="content" itemprop="articleBody">


      <?=get_template_part('includes/partials/content', 'page')?>


    </section> <!-- /#content -->

  </article>

  <div id="sidebar" class="sidebar m-all t-1of3 d-2of7 last-col" role="complementary">

    <?=get_sidebar()?>

  </div> <!-- /#sidebar -->
<?php endwhile; ?>

<?php else: ?>

	<?=get_template_part('includes/partials/content', 'none')?>


<?php endif; ?>

<?=get_footer()?>
