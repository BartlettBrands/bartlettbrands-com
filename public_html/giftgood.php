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

    <?php /* Include Navigation */ echo $nav; ?>

    <?php /* Include Projects Intro Content */ echo $projectPageContent_top; ?>

    <img src="assets/img/PROJECTS/giftgood/giftgood-1.jpg" alt="Gift Good Holiday | Bartlett Brands">
    <img src="assets/img/PROJECTS/giftgood/giftgood-2.jpg" alt="Gift Good Holiday | Bartlett Brands">
    <iframe src="https://player.vimeo.com/video/247557964?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    <img src="assets/img/PROJECTS/giftgood/giftgood-4.gif" alt="Gift Good Holiday | Bartlett Brands">
    <a href="https://itunes.apple.com/us/app/stick-with-the-good/id1318400479?mt=8" target="_blank"><img src="assets/img/PROJECTS/giftgood/giftgood-5.gif" alt="Gift Good Holiday | Bartlett Brands"></a>
    <img src="assets/img/PROJECTS/giftgood/giftgood-6.jpg" alt="Gift Good Holiday | Bartlett Brands">
    <img src="assets/img/PROJECTS/giftgood/giftgood-7.jpg" alt="Gift Good Holiday | Bartlett Brands">
    <iframe src="//player.vimeo.com/video/194091312?byline=0&amp;portrait=0&amp;badge=0" allowfullscreen></iframe>
    <img src="assets/img/PROJECTS/giftgood/giftgood-9.jpg" alt="Gift Good Holiday | Bartlett Brands">
    <img src="assets/img/PROJECTS/giftgood/giftgood-10.jpg" alt="Gift Good Holiday | Bartlett Brands">
    <img src="assets/img/PROJECTS/giftgood/giftgood-11.jpg" alt="Gift Good Holiday | Bartlett Brands">
    <img src="assets/img/PROJECTS/giftgood/giftgood-12.jpg" alt="Gift Good Holiday | Bartlett Brands">
    <img src="assets/img/PROJECTS/giftgood/giftgood-13.jpg" alt="Gift Good Holiday | Bartlett Brands">
    <iframe src="//player.vimeo.com/video/149318160?byline=0&amp;portrait=0&amp;badge=0" allowfullscreen></iframe>
    <img src="assets/img/PROJECTS/giftgood/giftgood-15.jpg" alt="Gift Good Holiday | Bartlett Brands">
    <img src="assets/img/PROJECTS/giftgood/giftgood-16.jpg" alt="Gift Good Holiday | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
