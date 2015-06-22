/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

jQuery(function() { /*<- shortcut for document ready*/
  var poptext= '.poptext';

  jQuery('header nav').meanmenu({
    meanScreenWidth:"768",
    meanMenuOpen:"<span /><span /><span /><div class='menu_title'>Soulful Mentoring &amp; Coaching with Susan Grace Beekman</div>"
  });

   // /* Open links to pages without oasis in the url in another window */
  jQuery("a[rel=external]").attr('target', '_blank');

  jQuery(".sub-tabs").tabs({
    //event: "click"
  });
  // jQuery(".sub-tabs .ui-tabs-nav").removeClass("ui-tabs-hide"); /*unhide anti-FOUC class */
  // jQuery(".sub-tabs .ui-tabs-nav li a").fadeIn(5000); // Tab section links fade in.
  // jQuery(".gquote").removeClass("ui-tabs-hide"); /*unhide anti-FOUC class */
  // jQuery(".beachbar").hide(); // Ghibran quote on home page fades in.
  // jQuery(".beachbar").fadeIn(2000); // Ghibran quote on home page fades in.
  // jQuery(".poptext").hide();
  // jQuery("#signup-box").hoverIntent(poptext);

  jQuery(".widget_em_widget li").accordion({ /* accordion for faq and whatsnew */
    /* icons: true, */
    event: "click",
    disabled: false,
    active: true,
    autoHeight: false,
    heightStyle: "content",
    animated: 'easeinout',
    collapsible: true,
    header: 'header'
  });




/**********************************************************************************************************************************
jQuery tooltips for social media icons-- adapted from http://www.queness.com/post/556/jquery-horizontal-tooltips-menu-tutorials
***********************************************************************************************************************************/
  //transitions
  //for more transition, goto http://gsgd.co.uk/sandbox/jquery/easing/
  var url, left; /* var poptext, max_height = 134; */
  url = document.URL;
  // jQuery(".slidewrap2").carousel({
  //  slider: ".slider",
  //  slide: ".slide",
  //  addNav: false,
  //  addPagination: false,
  //  speed: 7500 // ms.
  var style = 'easeOutExpo';
  var default_left = 0; /* Math.round(jQuery('#social_thumbs li.selected').offset().left - jQuery('#social_thumbs').offset().left); */
  var default_top = 0; /* jQuery('#social_thumbs li.selected').height(); */
  //Set the default position and text for the tooltips
  jQuery('#box').css({
    left: default_left,
    top: default_top
  });
  jQuery('#box .head').html(jQuery('#social_thumbs li.selected').find('img').attr('alt'));
  //if mouseover the menu item
  jQuery('#social_thumbs li').hover(function() {
    //get the left pos
    left = Math.round(jQuery(this).offset().left - jQuery('#social_thumbs').offset().left);
    //Set it to current item position and text
    jQuery('#box .head').html(jQuery(this).find('img').attr('alt'));
    jQuery('#box').stop(false, true).animate({
      left: left
    }, {
      duration: 500,
      easing: style
    });
    //if user click on the menu
  }).click(function() {
    //reset the selected item
    jQuery('#social_thumbs li').removeClass('selected');
    //select the current item
    jQuery(this).addClass('selected');
  });
  //If the mouse leave the menu, reset the floating bar to the selected item
  jQuery('#social_thumbs').mouseleave(function() {
    //get the left pos
    default_left = Math.round(jQuery('#social_thumbs li.selected').offset().left - jQuery('#social_thumbs').offset().left);
    //Set it back to default position and text
    jQuery('#box .head').html(jQuery('#social_thumbs li.selected').find('img').attr('alt'));
    jQuery('#box').stop(false, true).animate({
      left: default_left
    }, {
      duration: 500,
      easing: style
    });
  });

 //    /*
 //    Responsive jQuery is a tricky thing.
 //    There's a bunch of different ways to handle
 //    it, so be sure to research and find the one
 //    that works for you best.
 //    */

 //    /* getting viewport width */
 //    var responsive_viewport = $(window).width();

 //    /* if is below 481px */
 //    if (responsive_viewport < 481) {

 //    } /* end smallest screen */

 //    /* if is larger than 481px */
 //    if (responsive_viewport > 481) {

 //    } /* end larger than 481px */

 //    /* if is above or equal to 768px */
 //    if (responsive_viewport >= 768) {

 //        /* load gravatars */
 //        $('.comment img[data-gravatar]').each(function(){
 //            $(this).attr('src',$(this).attr('data-gravatar'));
 //        });

 //    }

 //    /* off the bat large screen actions */
 //    if (responsive_viewport > 1030) {

 //    }
// // add all your scripts here
}); /* end of as page load scripts */

/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
 */
 (function(w){
  // This fix addresses an iOS bug, so return early if the UA claims it's something else.
  if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
  var doc = w.document;
  if( !doc.querySelector ){ return; }
  var meta = doc.querySelector("meta[name=viewport]"),
  initialContent = meta && meta.getAttribute("content"),
    disabledZoom = initialContent + ",maximum-scale=1",
    enabledZoom = initialContent + ",maximum-scale=10",
    enabled = true,
    x,
    y,
    z,
    aig;
  if (!meta) {return; }
  function restoreZoom() {
    meta.setAttribute("content", enabledZoom);
    enabled = true;
  }
  function disableZoom() {
    meta.setAttribute("content", disabledZoom);
    enabled = false;
  }
  function checkTilt(e) {
    aig = e.accelerationIncludingGravity;
    x = Math.abs(aig.x);
    y = Math.abs(aig.y);
    z = Math.abs(aig.z);
    // If portrait orientation and in one of the danger zones
    if (!w.orientation && (x > 7 || (((z > 6 && y < 8) || (z < 8 && y > 6)) && x > 5))) {
      if (enabled) { disableZoom(); }
    } else if (!enabled) { restoreZoom(); }
  }
  w.addEventListener("orientationchange", restoreZoom, false);
  w.addEventListener("devicemotion", checkTilt, false);
})(this);
