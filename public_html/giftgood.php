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

    <img src="assets/img/PROJECTS/giftgood/giftgood-holiday2015-1.jpg" alt="Gift Good Holiday 2015 | Bartlett Brands">
    <iframe src="//player.vimeo.com/video/149318160?byline=0&amp;portrait=0&amp;badge=0" allowfullscreen></iframe>
    <img src="assets/img/PROJECTS/giftgood/giftgood-holiday2015-3.jpg" alt="Gift Good Holiday 2015 | Bartlett Brands">
    <img src="assets/img/PROJECTS/giftgood/giftgood-holiday2015-4.jpg" alt="Gift Good Holiday 2015 | Bartlett Brands">
    <img src="assets/img/PROJECTS/giftgood/giftgood-holiday2015-5.jpg" alt="Gift Good Holiday 2015 | Bartlett Brands">
    <img src="assets/img/PROJECTS/giftgood/giftgood-holiday2015-7.jpg" alt="Gift Good Holiday 2015 | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
