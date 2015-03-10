<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 */

if (is_page()) {
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
        <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
                <?php the_post_thumbnail( 'medium', array( 'class' => 'alignright' ) ); ?>
        } ?>
            <?php the_content(); ?>


        <header class="article-header">
            <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
        </header> <!-- end article header -->
        <section class="entry-content clearfix" itemprop="articleBody">
            <?php the_content(); ?>
        </section> <!-- end article section -->

        <footer class="article-footer">
        </footer> <!-- end article footer -->
    </article> <!-- end article --> <!-- oasis end -->
    }
    else {
    ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <header class="entry-header">

        <?php       if ( is_single() ) {

                    the_title( '<h1 class="entry-title">', '</h1>' );
                } else {
                    the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
                } //endif ?>

            <div class="entry-meta">

                <?php if ( 'post' == get_post_type() ) { ?>

                    <?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>

                        <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'oasistheme' ), __( '1 Comment', 'oasistheme' ), __( '% Comments', 'oasistheme' ) ); ?></span>
                    <?php } //endif  ! post_password_required() && ( comments_open() || get_comments_number()

                edit_post_link( __( 'Edit', 'oasistheme' ), '<span class="edit-link">', '</span>' );
                ?>
            </div><!-- .entry-meta -->
        </header><!-- .entry-header -->

        <?php if ( is_search() ) { ?>
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
        <?php } else {} ?>

            <div class="entry-content">
                <p class="byline vcard">
                <!-- Put the author's avatar on the left side of the byline on the single post template only -->
                <?php if( is_single() ) {
                    ?><img class="floatleft" src="<?php echo get_avatar( get_the_author_meta( 'ID' )); ?>">
                    <?php } //endif is_single
                printf( __( 'Written by <a href="%1$s"><span class="author">%2$s</span></a><br><time class="updated" datetime="%3$s" pubdate>%4$s</time>', 'oasistheme' ),
                    esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                    get_the_author_link ( get_the_author_meta( 'ID' ) ) ,
                    get_the_time('Y-m-j'),
                    get_the_time ( get_option ('date_format') )) ;
                ?>
                </p><!-- byline vcard -->
<!-- If there is a post thumbnail, put it to the left of the post on the single post template only -->
                <?php if( is_single() ) { ?>
                    <?php if ( has_post_thumbnail() ) { ?>
                    <div class="floatleft">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                    <?php } //endif post thumbnail ?>
                    </div>
                } //endif is_single

                 ?>
                <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'oasistheme' ) );
                wp_link_pages( array(
                              'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'oasistheme' ) . '</span>',
                              'after'       => '</div>',
                              'link_before' => '<span>',
                              'link_after'  => '</span>',
                              ) );
                            ?>
                <?php if( is_single() ) { ?></div> <!-- close the single content div --><?php } ?>
                </div><!-- .entry-content -->
                </article><!-- #post-## -->
<?php
} //end if

