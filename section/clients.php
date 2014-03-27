<?php
/**
 * Created by PhpStorm.
 * User: adrian
 * Date: 24.03.14
 * Time: 14:20
 */
?>
<div class="br">
    <h1>Klienci</h1>
    <h3>Zaufało nam już :</h3>
</div>


    <div class="flexslider carousel">
        <ul class="slides">
            <li>
                <img src="img/section-clients-img/logo_1.jpg" />
            </li>
            <li>
                <img src="img/section-clients-img/logo_2.jpg" />
            </li>
            <li>
                <img src="img/section-clients-img/logo_3.jpg" />
            </li>
            <li>
                <img src="img/section-clients-img/logo_4.jpg" />
            </li>

        </ul>
    </div>

<script type="text/javascript">
    $(function(){
        SyntaxHighlighter.all();
    });
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            animationLoop: false,
            itemWidth: 210,
            itemMargin: 5,
            pausePlay: true,
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
