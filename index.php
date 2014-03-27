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
            <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
            <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
            <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
            <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
            <link rel="SHORTCUT ICON" href=""type="image/x-icon">
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