<?php
session_start();
require_once('multilanguage.php');
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        <!--
        if (screen.width <= 1100) {
            document.location = "devices/tablets.php";
        }
        if (screen.width <= 800) {
            document.location = "devices/phablets.php";
        }
        if (screen.width <= 600) {
            document.location = "devices/mobile_big.php";
        }
        if (screen.width <= 480) {
            document.location = "devices/mobile.php";
        }
        if (screen.width <= 320) {
            document.location = "devices/mobile_small.php";
        }

        //-->
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>ATD TEAM</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
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
<div class="container">
    <div id="menu">
        <?php include 'section/menu.php'; ?>
    </div>

    <div id="scrolls">
        <?php include 'section/scrolls.php'; ?>
    </div>

    <div id="aboutus">
        <?php include 'section/aboutus.php'; ?>
    </div>

    <div id="portfolio">
        <?php include 'section/portfolio.php'; ?>
    </div>

    <div id="clients">
        <?php include 'section/clients.php'; ?>
    </div>

    <div id="contact">
        <?php include 'section/contact.php'; ?>
    </div>

    <div id="footer">
        <?php include 'section/footer.php'; ?>

    </div>
</body>
</html>