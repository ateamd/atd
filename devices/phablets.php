<?php
session_start();
require_once('../multilanguage.php');
?>

<h1>TEST</h1>
<h3>width <= 800</h3>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>ATD TEAM</title>
        <link href="../css/mobile_css/phablets.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="js/carousel_script.js"></script>
        <link rel="SHORTCUT ICON" href="" type="image/x-icon">
        <script type="text/javascript" src="js/jquery-1.7.1.js"></script>
        <script type="text/javascript" src="js/jquery.ui.core.js"></script>
        <script type="text/javascript" src="js/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="js/jquery.ui.rcarousel.js"></script>
        <script type="text/javascript" src="js/_dependent/greensock/TweenMax.min.js"></script>
        <script type="text/javascript" src="js/_dependent/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/_examples/modernizr.custom.min.js"></script>
        <script type="text/javascript" src="js/_mobile/iscroll.js"></script>
        <script type="text/javascript" src="js/jquery.scrollmagic.min.js"></script>
        <script type="text/javascript" src="js/_examples/demo.js"></script>
        <meta itemprop="url" content="http://adwmicro.pl">
        <span itemprop="openingHoursSpecification" itemscope itemtype="http://schema.org/OpeningHoursSpecification">
        <span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">
        <meta itemprop="name" content="Poniedziałek - Piątek"></span></span>
        <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <meta itemprop="addressLocality" content="Kraków"></span>
        <meta itemprop="email" content="Adrian@adwmicro.pl">
        <meta itemprop="telephone" content="793-785-747">
        <meta itemprop="name" content="Amentes Team Development">
    </head>
<body>
<center>
<h2><?php echo $lang['scroll']; ?></h2>
<h3><?php echo $lang['scroll_2']; ?></h3>
<img src="../img/section-scroll-img/scrollsg.png">
    <div class="br">
        <h1><?php echo $lang['about']; ?></h1>
        <h3><?php echo $lang['about_2']; ?></h3>
    </div>
    <div class="glass"><div class="onast" ><?php echo $lang['description']; ?></div></div>
</center>

<center>
<div class="brbr">
    <h1><?php echo $lang['portfolio']; ?></h1>

    <h3><?php echo $lang['portfolio_2']; ?></h3>
</div></center>
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
            <img src="../img/section-portfolio-img/demo_1.png" class="demo"/>
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
            <div class="portfolio_text">
                <?php echo $lang['portfolio_opis']; ?>
            </div>
        </td>
        <td class="portfolio_border">

        </td>
        <td>

        </td>
        <td>
            <img src="../img/section-portfolio-img/demo_2.png" class="demo"/>
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
<center>
<div class="br">
    <h1><?php echo $lang['clients']; ?></h1>
    <h3><?php echo $lang['clients_2']; ?></h3>
</div></center>
<center>
    <table class="table_clients">
        <tr>
            <td>
                <div id="slideshow">
                    <div>
                        <img src="../img/section-clients-img/logo_1.jpg" class="clients_img">
                    </div>
                    <div>
                        <img src="../img/section-clients-img/logo_2.jpg" class="clients_img">
                    </div>
                    <div>
                        <img src="../img/section-clients-img/logo_3.jpg" class="clients_img">
                    </div>
                    <div>
                        <img src="../img/section-clients-img/logo_4.jpg" class="clients_img">
                    </div>
                    <div>
                        <img src="../img/section-clients-img/logo_5.jpg" class="clients_img">
                    </div>

                </div></td></tr><tr>
            <td>
                <div id="slideshow_1">
                    <div>
                        <img src="../img/section-clients-img/logo_2.jpg" class="clients_img">
                    </div>
                    <div>
                        <img src="../img/section-clients-img/logo_3.jpg" class="clients_img">
                    </div>
                    <div>
                        <img src="../img/section-clients-img/logo_4.jpg" class="clients_img">
                    </div>
                    <div>
                        <img src="../img/section-clients-img/logo_5.jpg" class="clients_img">
                    </div>
                    <div>
                        <img src="../img/section-clients-img/logo_1.jpg" class="clients_img">
                    </div>

                </div></td></tr><tr>
            <td>
                <div id="slideshow_2">
                    <div>
                        <img src="../img/section-clients-img/logo_3.jpg" class="clients_img">
                    </div>
                    <div>
                        <img src="../img/section-clients-img/logo_4.jpg" class="clients_img">
                    </div>
                    <div>
                        <img src="../img/section-clients-img/logo_5.jpg" class="clients_img">
                    </div>
                    <div>
                        <img src="../img/section-clients-img/logo_1.jpg" class="clients_img">
                    </div>
                    <div>
                        <img src="../img/section-clients-img/logo_2.jpg" class="clients_img">
                    </div>

                </div></td></tr><tr>
            <td>
                <div id="slideshow_3">
                    <div>
                        <img src="../img/section-clients-img/logo_4.jpg" class="clients_img">
                    </div>
                    <div>
                        <img src="../img/section-clients-img/logo_1.jpg" class="clients_img">
                    </div>
                    <div>
                        <img src="../img/section-clients-img/logo_2.jpg" class="clients_img">
                    </div>
                    <div>
                        <img src="../img/section-clients-img/logo_2.jpg" class="clients_img">
                    </div>
                    <div>
                        <img src="../img/section-clients-img/logo_4.jpg" class="clients_img">
                    </div>

                </div></td></tr>
    </table>
</center>

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
<center>
<h1><?php echo $lang['contact']; ?></h1>
<h3><?php echo $lang['contact_2']; ?></h3>
</center>
<table width="100%" height="500px" class="tabletr">
    <tr>
        <td>
            <?php
            if (empty($_POST['submit'])) {
                ?>
                <div id="form">
                    <form action="http://adwmicro.pl/index.php" method="post">
                        <input type="text" class="text_box_form" name="imienazwisko" style="width:90%;"
                               placeholder="<?php echo $lang['name']; ?>"><br/>
                        <input type="text" class="text_box_form" name="email" style="width:44%" placeholder="E-Mail">
                        <input type="text" class="text_box_form" name="telefon" style="width:44%" placeholder="Telefon."><br/>

                        <input type="text" class="text_box_form" name="trescwiadomosci" style="width:90%"
                               placeholder="<?php echo $lang['massage']; ?>"><br/>
                        <input type="submit" name="submit" class="buttons" value=<?php echo $lang['send']; ?>>

                    </form>
                </div>
            <?php

            } elseif (!empty($_POST['imienazwisko']) && !empty($_POST['email']) && !empty($_POST['telefon']) && !empty($_POST['trescwiadomosci'])) {
                if ($_POST['email']) {
                    $adresemail = 'adwmicro@adwmicro.pl, wasyl@adwmicro.pl, adrian@adwmicro.pl, adrian.wojdat@gmail.com';
                    $wiadomosc = "Od: $_POST[imienazwisko]\n\n($_POST[email])\n\n($_POST[telefon])\n\n$_POST[trescwiadomosci]";
                    $nadawca = "From: $_POST[email]";
                    @mail($adresemail, "Formularz kontaktowy z www.adwa.adwmicro.pl", "$wiadomosc", "$nadawca");
                    echo "<span style=\'color: #00D800; font-weight: bold; \'>Dziękujemy, formularz został wysłany.</span>";
                } else {
                    echo "<span style=\'color: #FF0000; text-align: center; font-weight: bold;\''>Wprowadzony adres E-Mail jest niepoprawny!!!</span>";
                }
            } else {
                echo "<span style=\'color: #FF0000; text-align: center; font-weight: bold;\''>Cofnij i wypełnij wszystkie pola formularza!!!</span>";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <table class=tabledwa>
                <tr>
                    <td><a href="https://twitter.com/AmentesTeam"><img src="../img/section-conto-img/twit.png"></a></td>
                    <td><a href="https://www.facebook.com/amentesteamdevelopment"><img src="../img/section-conto-img/face.png"></a></td>
                    <td><a href="https://plus.google.com/u/0/109699041792924459287/posts"><img src="../img/section-conto-img/gog.png"></a></td>
                    <td><a href="skype:amentesteamdev?chat"><img src="../img/section-conto-img/skype.png"></a></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<table class="table_footer">
    <tr>
        <td class="footer"><h4>&#169 2014 ATD. All rights reserved. </h4></td>
    </tr>
</table>

</body>