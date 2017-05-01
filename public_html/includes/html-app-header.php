<?php
// BEGIN APP HEADER INCLUDES FILE
// @has: HTML head
// @requires: functions.php, html-app-footer.php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="p:domain_verify" content="5194057dd48a17ff1e0392242cc28f5d">

    <!-- SEO Bing Webmaster Tools -->
    <meta name="msvalidate.01" content="CD42DA8DF24FABBF848E5324608D7B81">

    <?php echo $uniquePageHeader; ?>

    <!-- Favicon. filemtime just uses recently edited time to create a pseudo file. gets around some caching issues -->
    <link rel="icon" href="assets/img/favicon.ico?t=<?php echo filemtime('assets/img/favicon.ico'); ?>">
    <!--[if IE]><link rel="shortcut icon" href="assets/img/favicon.ico?t=<?php echo filemtime('assets/img/favicon.ico'); ?>"><![endif]-->

    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/719032/725844/css/fonts.css">
    <link rel="stylesheet" href="assets/css/vendor/normalize.min.css?t=<?php echo filemtime('assets/css/vendor/normalize.min.css'); ?>">
    <link rel="stylesheet" href="assets/css/vendor/grid.1140px.min.css?t=<?php echo filemtime('assets/css/vendor/grid.1140px.min.css'); ?>">
    <link rel="stylesheet" href="assets/css/vendor/isotope.min.css?t=<?php echo filemtime('assets/css/vendor/isotope.min.css'); ?>">

    <!-- Custom CSS. filemtime just uses recently edited time to create a pseudo file. gets around some caching issues -->
    <link rel="stylesheet" href="assets/css/styles.css?t=<?php echo filemtime('assets/css/styles.css'); ?>">

    <!-- jQuery hosted by Google. all other JS is in footer -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-K26DSQV');
    </script>
</head>
