<?php
session_start();
require_once('multilanguage.php');
?>
<!DOCTYPE html>
<html>
<head>
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
</head>

<body>
<div itemscope itemtype="http://schema.org/LocalBusiness" class="container">
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
        <meta itemprop="url" content="http://adwmicro.pl">
            <span itemprop="openingHoursSpecification" itemscope itemtype="http://schema.org/OpeningHoursSpecification">
            <span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">
<meta itemprop="name" content="Poniedziałek - Piątek"></span></span>
            <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <meta itemprop="addressLocality" content="Kraków"></span>
        <meta itemprop="email" content="Adrian@adwmicro.pl">
        <meta itemprop="telephone" content="793-785-747">
        <meta itemprop="name" content="Amentes Team Development">
    </div>
</body>
</html>