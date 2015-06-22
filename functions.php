<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

/************* INCLUDE NEEDED FILES ***************/

/*
1. library/oasis.php
  - head cleanup (remove rsd, uri links, junk css, ect)
  - enqueueing scripts & styles
  - theme support functions
  - custom menu output & fallbacks
  - related post function
  - page-navi function
  - removing <p> from around images
  - customizing the post excerpt
  - custom google+ integration
  - adding custom fields to user profiles
*/
require_once('library/oasis.php'); // if you remove this, bones will break
/*
2. library/custom-post-type.php
  - an example custom post type
  - example custom taxonomy (like categories)
  - example custom taxonomy (like tags)
*/
//require_once('library/custom-post-types.php'); // you can disable this if you like
/*
3. library/admin.php
  - removing some default WordPress dashboard widgets
  - an example custom dashboard widget
  - adding custom login css
  - changing text in footer of admin
*/
// require_once('library/admin.php'); // this comes turned off by default
/*
4. library/translation/translation.php
  - adding support for other languages
*/
// require_once('library/translation/translation.php'); // this comes turned off by default
//
//require_once('custom/custom-functions.php'); // you can disable this if you like

  /************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
  add_image_size( 'landscape-lg', 750, 500, true );
  add_image_size( 'landscape-med', 450, 300, true );
  add_image_size( 'landscape-sm', 250, 150, true );
  add_image_size( 'portrait-lg', 500, 750, true);
  add_image_size( 'portrait-med', 300, 450, true );
  add_image_size( 'portrait-sm', 150, 250, true );
  add_image_size( 'square-sm', 150, 150, true );
  add_image_size( 'square-lg', 300, 300, true );
/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image,
we would use the function:
<?php the_post_thumbnail( 'oasis-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'oasis-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function oasis_register_sidebars() {

  register_sidebar(array(
    'id' => 'universal',
    'name' => __( 'Universal Sidebar Content', 'oasistheme' ),
    'description' => __( 'The universal sidebar content that appears on every page (after the page-specific one if applicable).', 'oasistheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
  register_sidebar(array(
    'id' => 'blog',
    'name' => __( 'Blog Sidebar', 'oasistheme' ),
    'description' => __( 'The blog sidebar content that appears before the site-wide sidebar content.', 'oasistheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
  register_sidebar(array(
    'id' => 'single',
    'name' => __( 'Single Sidebar', 'oasistheme' ),
    'description' => __( 'Single post (and single custom post type) sidebar content that appears before the site-wide sidebar content.', 'oasistheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
  register_sidebar(array(
    'id' => 'home-sidebar',
    'name' => __( 'Home Page Sidebar', 'oasistheme' ),
    'description' => __( 'The home page sidebar content that appears before the site-wide sidebar content.', 'oasistheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
  register_sidebar(array(
    'id' => 'resources',
    'name' => __( 'Resources Page Sidebar', 'oasistheme' ),
    'description' => __( 'The resources page sidebar content that appears before the site-wide sidebar content.', 'oasistheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
  register_sidebar(array(
    'id' => 'about',
    'name' => __( 'About Page Sidebar', 'oasistheme' ),
    'description' => __( 'The about page sidebar that appears before the site-wide sidebar content.', 'oasistheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
  register_sidebar(array(
    'id' => 'services',
    'name' => __( 'Services Page Sidebar', 'oasistheme' ),
    'description' => __( 'The services page sidebar content that appears before the site-wide sidebar content.', 'oasistheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
  register_sidebar(array(
    'id' => 'contact',
    'name' => __( 'Contact Page Sidebar', 'oasistheme' ),
    'description' => __( 'The contact page sidebar content that appears before the site-wide sidebar content.', 'oasistheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
  register_sidebar(array(
    'id' => 'footbar',
    'name' => __( 'Footer Widgets', 'oasistheme' ),
    'description' => __( 'Widgets to appear in the footer on every page.', 'oasistheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
  register_sidebar(array(
    'id'            => 'home-main-left-widgets',
    'name'          => __( 'Home Page, Lower Left Column', 'oasistheme' ),
    'description'   => __( 'A widget area below the page content in the left column of the home page.', 'oasistheme' ),
  ));
  register_sidebar(array(
    'id'            => 'home-main-right-widgets',
    'name'          => __( 'Home Page, Lower Right Column', 'oasistheme' ),
    'description'   => __( 'A widget area below the photo of Susan in the right column of the home page.', 'oasistheme' ),
  ));
} // don't remove this bracket!

/************* COMMENT LAYOUT *********************/

// Comment Layout
function oasis_comments($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment; ?>
  <li <?php comment_class(); ?>>
    <article id="comment-<?php comment_ID(); ?>" class="clearfix">
      <header class="comment-author vcard">
        <?php
        /*
          this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
          echo get_avatar($comment,$size='32',$default='<path_to_url>' );
        */
        ?>
        <!-- custom gravatar call -->
        <?php
        // create variable
        $bgauthemail = get_comment_author_email();
        ?>
        <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5($bgauthemail); ?>?s=32" class="load-gravatar avatar avatar-48 photo" height="32" width="32" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
        <!-- end custom gravatar call -->
        <?php printf(__('<cite class="fn">%s</cite>', 'oasistheme'), get_comment_author_link()) ?>
        <time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__('F jS, Y', 'oasistheme')); ?> </a></time>
        <?php edit_comment_link(__('(Edit)', 'oasistheme'),'  ','') ?>
      </header>
      <?php if ($comment->comment_approved == '0')  { ?>
        <div class="alert info">
          <p><?php _e('Your comment is awaiting moderation.', 'oasistheme') ?></p>
        </div>
        <?php } //} //endif ?>
        <section class="comment_content clearfix">
          <?php comment_text() ?>
        </section>
        <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </article>
      <!-- </li> is added by WordPress automatically -->
      <?php

} // don't remove this bracket!

/************* SEARCH FORM LAYOUT *****************/

// Search Form
function oasis_wpsearch($form) {
  $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
  <label class="screen-reader-text" for="s">' . __('Search for:', 'oasistheme') . '</label>
  <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="'.esc_attr__('Search the Site...','oasistheme').'" />
  <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
</form>';
return $form;
} // </wpsearch>

/* PRE-POST CONTENT HOOK STARTS HERE
________________________________________________________________________*/
function main_column_before_post() {
}

function main_column_after_post() {
}


/* UTILITY FUNCTIONS */
function get_custom_field_data($key, $echo = false) {
	global $post;
	$value = get_post_meta($post->ID, $key, true);
	if($echo == false) {
		return $value;
	} else {
		echo $value;
	}
}

//Page Slug Body Class
function add_slug_body_class( $classes ) {
  global $post;
  if ( isset( $post ) ) {
    $classes[] = $post->post_name;
  }
  return $classes;
}

add_filter( 'body_class', 'add_slug_body_class' );

/**********************************************************************
PRE-PAGE POST CONTENT FOR SPECIFIC SECTIONS
***********************************************************************/
//called before the post content and after the primary nav. Header
function inner_listings() {
}
/* END PRE-PAGE POST CONTENT FOR SPECIFIC SECTIONS */

/*==================================
=            SHORTCODES            =
==================================*/
/*-----  Oasis shortcodes for buttons, RSS links, etc.  ------*/
function testesLinker() {
  return '<div class="testes-link"><a href="http://www.oasislifedesign.com/testimonials" title="Many More Kind Words" class="testes-link"><span><h3>More Compliments</h3></div></a><div class="clear"></span></div>';
}

add_shortcode('ta', 'testesLinker');

function groupLinker() {
  $site=get_site_url();
  $gplink='<a href="' . $site . '/signup" title="Sign Up For This Offering" class="btn clearFix"><span>Sign Up</span></a>';
  return $gplink;
}

add_shortcode('group', 'groupLinker');

function feedLinker() {
  ?><a title="Subscribe to my feed" rel="alternate" type="application/rss+xml" href="http://feeds.feedburner.com/OasisNewsletters"><img style="border:0" src="http://www.feedburner.com/fb/images/pub/feed-icon32x32.png" alt="" /></a><a title="Subscribe to my feed" rel="alternate" type="application/rss+xml" href="http://feeds.feedburner.com/OasisNewsletters">Subscribe to the newsletter via email or RSS</a><?php
}

add_shortcode('feeds', 'feedLinker');

function individualLinker() {
  $site=get_site_url();
  $inlink='<a href="'. $site . '/schedule" title="Schedule a Session with Susan Grace" class="btn clearFix"><span>Schedule</span></a>';
  return $inlink;
}

add_shortcode('indie', 'individualLinker');

function blogEmailLink() {
  return '<a href="http://feedburner.google.com/fb/a/mailverify?uri=oasislifedesign&amp;loc=en_US">Enjoy the blog delivered weekly directly to your inbox</a>';
}

add_shortcode('blogsignup', 'blogEmailLink');


remove_action( 'wp_head', 'remote_login_js_loader' ); //speeds up multisite


function oasis_wp_enqueue_scripts_styles() {

# See also: `oasis_scripts_and_styles` in `library/oasis.php`.

  if ( ! is_admin()) {
  }
}

add_action('wp_enqueue_scripts', 'oasis_wp_enqueue_scripts_styles');
