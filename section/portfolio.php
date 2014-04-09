<?php
/**
 * Created by PhpStorm.
 * User: adrian
 * Date: 24.03.14
 * Time: 14:20
 */
?>

<div class="brbr">
    <h1><?php echo $lang['portfolio']; ?></h1>

    <h3><?php echo $lang['portfolio_2']; ?></h3>
</div>
<script type="text/javascript">
    var controller;
    if (Modernizr.touch) {
        var myScroll;
        $(document).ready(function () {
            // wrap for iscroll
            $("#content-wrapper")
                .addClass("scrollContainer")
                .wrapInner('<div class="scrollContent"></div>');

            // add iScroll
            myScroll = new IScroll('#content-wrapper', {scrollX: false, scrollY: true, scrollbars: true, useTransform: false, useTransition: false, probeType: 3});

            // update container on scroll
            myScroll.on("scroll", function () {
                controller.update();
            });

            // overwrite scroll position calculation to use child's offset instead of parents scrollTop();
            controller.scrollPos(function () {
                return -myScroll.y;
            });

            // refresh height, so all is included.
            setTimeout(function () {
                myScroll.refresh();
            }, 0);

            $("#content-wrapper").on("touchend", "a", function (e) {
                // a bit dirty workaround for links not working in iscroll for some reason...
                e.preventDefault();
                window.location.href = $(this).attr("href");
            });

            // manual set hight (so height 100% is available within scroll container)
            $(document).on("orientationchange", function () {
                $("section")
                    .css("min-height", $(window).height())
                    .parent(".scrollmagic-pin-spacer").css("min-height", $(window).height());
            });
            $(document).trigger("orientationchange"); // trigger to init
        });
        // init the controller
        controller = new ScrollMagic({
            container: "#content-wrapper",
            globalSceneOptions: {
                triggerHook: "onLeave"
            }
        });
    } else {
        // init the controller
        controller = new ScrollMagic({
            globalSceneOptions: {
                triggerHook: "onLeave"
            }
        });
    }

</script>
<section id="parallax_portfolio">
    <div id="parallaxbg_portfolio">
        <div class="top"></div>
        <div class="bottom"></div>

<div class="portfolio_background">
    <table>
        <tr class="br_portfolio">
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
        </tr>
        <tr class="height_portfolio">
            <td>
               <a href="http://agnieszka.adwmicro.pl"> <img src="img/section-portfolio-img/demo1.jpg" class="demo"/></a>
            </td>
            <td class="portfolio_border">


            </td>
            <td>

            </td>
            <td>
                <div class="portfolio_text">
                   <?php echo $lang['portfolio_opis']; ?>
                </div>
            </td>
        </tr>
        <tr class="br_portfolio">
            <td>

            </td>
            <td class="portfolio_border">

            </td>
            <td>

            </td>
            <td>

            </td>
        </tr>
        <tr class="height_portfolio">
            <td>
                <div class="portfolio_text_2">
                   <?php echo $lang['portfolio_opis_2']; ?>
                </div>
            </td>
            <td class="portfolio_border">

            </td>
            <td>

            </td>
            <td>
               <a href="http://adwmicro.pl"><img src="img/section-portfolio-img/demo2.jpg" class="demo"/></a>
            </td>
        </tr>
        <tr class="br_portfolio">
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
        </tr>
    </table>
    </div>
        <h3></h3>
        <h3 id="big_portfolio"></h3>
        <script type="text/javascript">
            // parallax
            new ScrollScene({
                triggerElement: "section#parallax_portfolio",
                duration: $(window).height() + 300,
                offset: -150
            })
                .addTo(controller)
                .triggerHook("onCenter")
                .setTween(new TimelineMax().add([
                    TweenMax.fromTo("#parallax_portfolio #big_portfolio", 1, {scale: 2, alpha: 0.1, top: "10%"}, {top: "0%", ease: Linear.easeNone}),
                    TweenMax.to("#parallax_portfolio #parallaxbg_portfolio", 1, {backgroundPosition: "0% 110%", ease: Linear.easeNone})
                ]));
        </script>

</div>
    </section>
