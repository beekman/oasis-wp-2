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
        meanScreenWidth:"670",
        meanMenuOpen:"<span /><span /><span /><div class='menu_title'>Soulful Mentoring &amp; Coaching with Susan Grace Beekman</div>"
    });

     // /* Open links to pages without oasis in the url in another window */
     jQuery("a[rel=external]").attr('target', '_blank');

     jQuery(".sub-tabs").tabs();

//begin home page accordion
     var more = {
        autoHeight:false,
        collapsible: true,
        navigation: true,
        clearStyle: true,
        active: false,
        heightStyle: 'content',
        header: 'header',
        //change: function(event, ui) {
            //resize_iframe();
        //}
        };
    var one = {
        autoHeight:false,
        collapsible: false,
        navigation: true,
        clearStyle: true,
        active: true,
        heightStyle: 'content',
        header: 'header',
    };

    jQuery(".widget_em_widget .ui-accordion-content").fadeIn(5000); // event details fade in
    if(jQuery(".widget_em_widget").length == 1) {
        jQuery(".widget_em_widget").accordion(one);
    } else {
        jQuery(".widget_em_widget").accordion(more);
    }

 //    /* getting viewport width */
 var responsive_viewport = jQuery(window).width();

 //    /* if is below 481px */
        if (responsive_viewport < 481) {

        } /* end smallest screen */

 //    /* if is larger than 481px */
        if (responsive_viewport > 481) {

        } /* end larger than 481px */

 //    /* if is above or equal to 768px */
     if (responsive_viewport >= 768) {

             /* load gravatars */
             jQuery('.comment img[data-gravatar]').each(function(){
                     jQuery(this).attr('src',$(this).attr('data-gravatar'));
             });

}

 //    /* off the bat large screen actions */
     if (responsive_viewport > 1030) {

     }
// add all your scripts here
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
