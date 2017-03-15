<?php
// Get absolute path to find our includes files
// NOTE - we can't get our @var $base-url until we call functions
global $base_dir;
$base_dir = rtrim( dirname( realpath( __FILE__ ) ), '/' );

// Include Functions & Header Open
include( $base_dir . '/includes/site-data.php' );
include( $base_dir . '/includes/svg-images.php' );
include( $base_dir . '/includes/functions.php' );
include( $base_dir . '/includes/html-app-header.php' );
?>



<body class="project-page">

    <? /* Include Navigation */ echo $nav; ?>

    <? /* Include Projects Intro Content */ echo $projectPageContent_top; ?>

    <img src="assets/img/PROJECTS/giftgood2016/giftgood-holiday2016-1.jpg" alt="Gift Good Holiday 2016 | Bartlett Brands">
    <iframe src="https://player.vimeo.com/video/194091312?title=0&byline=0&portrait=0" width="600" height="338" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    <img src="assets/img/PROJECTS/giftgood2016/giftgood-holiday2016-3.jpg" alt="Gift Good Holiday 2016 | Bartlett Brands">
    <img src="assets/img/PROJECTS/giftgood2016/giftgood-holiday2016-4.jpg" alt="Gift Good Holiday 2016 | Bartlett Brands">
    <img src="assets/img/PROJECTS/giftgood2016/giftgood-holiday2016-5.jpg" alt="Gift Good Holiday 2016 | Bartlett Brands">
    <img src="assets/img/PROJECTS/giftgood2016/giftgood-holiday2016-6.jpg" alt="Gift Good Holiday 2016 | Bartlett Brands">
    <img src="assets/img/PROJECTS/giftgood2016/giftgood-holiday2016-7.jpg" alt="Gift Good Holiday 2016 | Bartlett Brands">
    

    <? /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
