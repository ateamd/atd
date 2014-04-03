<?php
session_start();
require_once('../multilanguage.php');
?>
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
        <section id="scrolls">
        <h2><?php echo $lang['scroll']; ?></h2>
        <h3><?php echo $lang['scroll_2']; ?></h3>
        <img src="../img/section-scroll-img/scrollsg.png">
        </section>
            <div class="br">
                <h1><?php echo $lang['about']; ?></h1>
                <h3><?php echo $lang['about_2']; ?></h3>
            </div>
<div class="onas_foto"></div>
        <div class="glass"><div class="onas" ><?php echo $lang['description']; ?></div></div>
    </center>
