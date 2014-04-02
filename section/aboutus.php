<div class="br">
<h1><?php echo $lang['about']; ?></h1>
<h3><?php echo $lang['about_2']; ?></h3>
    </div>


<div class="glass"><div class="onast" ><?php echo $lang['description']; ?></div></div>



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


    <section id="parallax">
        <div id="parallaxbg">
            <div class="top"></div>
            <div class="bottom"></div>
        </div>
        <h3></h3>
        <h3 id="big"></h3>
        <script type="text/javascript">
            // parallax
            new ScrollScene({
                triggerElement: "section#parallax",
                duration: $(window).height() + 300,
                offset: -150
            })
                .addTo(controller)
                .triggerHook("onCenter")
                .setTween(new TimelineMax().add([
                    TweenMax.fromTo("#parallax #big", 1, {scale: 2, alpha: 0.1, top: "10%"}, {top: "0%", ease: Linear.easeNone}),
                    TweenMax.to("#parallax #parallaxbg", 1, {backgroundPosition: "30% 105%", ease: Linear.easeNone})
                ]));
        </script>
    </section>







