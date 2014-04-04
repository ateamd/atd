<?php ?>
<script>
    /*
     * Izilla touchMenuHover jQuery plugin v1.6
     * Allows ULs (or any element of your choice) that open on li:hover to open on tap/click on mobile platforms such as iOS, Android, WP7, WP8, BlackBerry, Bada, WebOS, 3DS & WiiU
     *
     * Copyright (c) 2013 Izilla Partners Pty Ltd
     *
     * http://izilla.com.au
     *
     * Licensed under the MIT license
     */
    ;(function(a){a.fn.touchMenuHover=function(j){var f=a.extend({childTag:"ul",closeElement:"",forceiOS:false,openClass:"tmh-open"},j);var d=a(this).find("a"),i="3ds|android|bada|bb10|hpwos|iemobile|kindle fire|opera mini|opera mobi|opera tablet|rim|silk|wiiu",c="|ipad|ipod|iphone",b,g="aria-haspopup",e="html",h;if(f.childTag.toString().toLowerCase()!=="ul"||f.forceiOS){i+=c}b=new RegExp(i,"gi");if(d.length>0&&b.test(navigator.userAgent)){d.each(function(){var m=a(this),l=m.parent("li"),k=l.siblings().find("a");if(m.next(f.childTag).length>0){l.attr(g,true)}m.click(function(o){var n=a(this);o.stopPropagation();k.removeClass(f.openClass);if(!n.hasClass(f.openClass)&&n.next(f.childTag).length>0){o.preventDefault();n.addClass(f.openClass)}})});if(f.closeElement.length>1){e+=","+f.closeElement}h=a(e);if("ontouchstart" in window){h.css("cursor","pointer")}h.click(function(){d.removeClass(f.openClass)})}return this}})(jQuery);
</script>
<script>
    $(document).ready(function() {
        $('#tmh1').touchMenuHover({
            forceiOS: true
        });
        $('#tmh2').touchMenuHover({
            childTag: 'div'
        });
    });
</script>

<div class="nav" id="tmh1">
    <ul>
        <li>
            <a href="#" class="parent">Menu</a>
            <ul>
                <li id="st"><a href="javascript:jumpScroll1()"><?php echo $lang['home']; ?></a></li>
                <li id="au"><a href="javascript:jumpScroll2()"><?php echo $lang['about']; ?></a></li>
                <li id="pf"><a href="javascript:jumpScroll3()"><?php echo $lang['portfolio']; ?></a></li>
                <li id="cs"><a href="javascript:jumpScroll4()"><?php echo $lang['clients']; ?></a></li>
                <li id="ct" class="jen"><a href="javascript:jumpScroll5()"><?php echo $lang['contact']; ?></a></li>
                <li id="pl" ><a href="?lang=pl" >PL</a></li>
                <li id="eng" ><a href="?lang=ang">ENG</a></li>
            </ul>
        </li>
</div>