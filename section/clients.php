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
<table class="table_clients">
    <tr>
    <td>
    <div id="slideshow">
        <div>
            <img src="img/section-clients-img/logo_1.jpg" class="clients_img">
        </div>
        <div>
            <img src="img/section-clients-img/logo_1.jpg" class="clients_img">
        </div>
        <div>
            <img src="img/section-clients-img/logo_1.jpg" class="clients_img">
        </div>
        <div>
            <img src="img/section-clients-img/logo_1.jpg" class="clients_img">
        </div>

    </div></td>
    <td>
    <div id="slideshow_1">
        <div>
            <img src="img/section-clients-img/logo_2.jpg" class="clients_img">
        </div>
        <div>
            <img src="img/section-clients-img/logo_3.jpg" class="clients_img">
        </div>
        <div>
            <img src="img/section-clients-img/logo_4.jpg" class="clients_img">
        </div>
        <div>
            <img src="img/section-clients-img/logo_1.jpg" class="clients_img">
        </div>

    </div></td>
    <td>
    <div id="slideshow_2">
        <div>
            <img src="img/section-clients-img/logo_3.jpg" class="clients_img">
        </div>
        <div>
            <img src="img/section-clients-img/logo_4.jpg" class="clients_img">
        </div>
        <div>
            <img src="img/section-clients-img/logo_1.jpg" class="clients_img">
        </div>
        <div>
            <img src="img/section-clients-img/logo_2.jpg" class="clients_img">
        </div>

    </div></td>
        <td>
            <div id="slideshow_3">
                <div>
                    <img src="img/section-clients-img/logo_4.jpg" class="clients_img">
                </div>
                <div>
                    <img src="img/section-clients-img/logo_3.jpg" class="clients_img">
                </div>
                <div>
                    <img src="img/section-clients-img/logo_2.jpg" class="clients_img">
                </div>
                <div>
                    <img src="img/section-clients-img/logo_1.jpg" class="clients_img">
                </div>

            </div></td></tr>
    </table>


<script type="text/javascript">

    $("#slideshow > div:gt(0)").hide();

    setInterval(function() {
        $('#slideshow > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#slideshow');
    },  3000);

    $("#slideshow_1 > div:gt(0)").hide();

    setInterval(function() {
        $('#slideshow_1 > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#slideshow_1');
    },  3000);

    $("#slideshow_2 > div:gt(0)").hide();

    setInterval(function() {
        $('#slideshow_2 > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#slideshow_2');
    },  3000);
    $("#slideshow_3 > div:gt(0)").hide();

    setInterval(function() {
        $('#slideshow_3 > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#slideshow_3');
    },  3000);
</script>