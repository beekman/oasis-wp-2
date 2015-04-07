<? ?>
<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php echo wp_title('-') ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

<body <?php body_class(); ?>>

<div id="container">
<!-- menu -->
<header role="banner">
<div id="logo" onclick = "window.location.href = ' <?php echo site_url(); ?> '">
<div id="idot" onclick = "window.location.href = '<?php echo site_url(); ?>'"></div>
<div id="sun"></div>
</div> <!-- / .logo -->
<a href="<?php echo site_url(); ?>">
<div id="slogan"><?php echo get_bloginfo ( 'description' ); ?></div>
</a> <!-- / .slogan -->
<header class="header" role="banner">
	<div id="inner-header" class="wrap clearfix">
		<div id="nav_area" class="full_width" role="nav">
			<div class="page">
				<nav role="navigation">
					<?php oasis_main_nav(); ?>
				</nav>

				<?
				if ( is_front_page() ) { ?>
					<aside><div class="gquote" role="complementary" style="display:none;">&ldquo;There is an oasis of the heart that can never be reached by a caravan of thinking. &rdquo; &#151;Ghibran</div></aside>
				<?php
				}
				if ( (is_home())||(is_category()) || (is_single()) ) { //Blog Nav for blog pages only
					wp_nav_menu( array('menu' => 'Blog Nav'));
				}

				/* For individual testimonials, display the Testimonials Tag Cloud above the testimonial*/
				if ( 'testimonial' == get_post_type() ){
					$args = array(
						'taxonomy'  => array('testimonial_attributions'),
					);
					?><div class="blueshadow pad1em margin1em-b">
						<div class="format_text">
							<h3 class="bigbold"><a href="<?php echo site_url() . '/testimonials/'?>">Testimonials</a> by Topic:
							</h3>

						</div><!-- .format-text -->
						<?php wp_tag_cloud($args, 'orderby=title'); ?>
					</div><!-- .blueshadow -->
					<div class="clear"></div>
				<?php
				}
			}
			?>
			</div> <!-- /.page -->
		</div> <!-- / #nav_area -->
	</div> <!-- .inner-header -->
</header>


