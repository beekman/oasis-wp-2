<?=get_header()?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): ?>
        <?php if (is_page ('resources')) : ?>
          <? get_template_part('includes/partials/menu-resources'); ?>
        <?php elseif (have_rows('tab_panels')): ?>
            <div class="sub-tabs cf clearfix">
                <nav id="submenu" class="tabs beachbar">
                    <div>
                        <div class="wrap">
                            <ul>
                                <?php while (have_rows('tab_panels')): ?>
                                    <?php the_row();
                                    $section_title = get_sub_field('section_title'); //Get the custom field title and use it for tab titles
                                    $section_slug = sanitize_title($section_title); //create slugs from the Section Titles. ?>
                                    <li><a href="#<?php echo $section_slug; ?>"><?php echo $section_title; ?></a></li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </nav> <!-- /#submenu -->
            <? #.sub-tabs are closed in includes/sections/content.php after the tab content panels ?>
        <?php elseif( get_field('beach-text') ): ?>
            <div class="beachbar">
                <div>
                    <div class="wrap">
                        <?php echo the_field('beach-text'); ?>
                    </div>
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


        <?=get_sidebar()?>


<?php endwhile; ?>

<?php else: ?>

    <?=get_template_part('includes/partials/content', 'none')?>


<?php endif; ?>

<?=get_footer()?>
