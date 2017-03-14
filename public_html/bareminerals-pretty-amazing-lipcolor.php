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

    <img src="assets/img/PROJECTS/bareminerals-pretty-amazing-lipcolor/bm-prettyamazing-visual-01.jpg" alt="bareMinerals Pretty Amazing Lipcolor | Bartlett Brands">
    <img src="assets/img/PROJECTS/bareminerals-pretty-amazing-lipcolor/bm-prettyamazing-visual-02.jpg" alt="bareMinerals Pretty Amazing Lipcolor | Bartlett Brands">
    <img src="assets/img/PROJECTS/bareminerals-pretty-amazing-lipcolor/bm-prettyamazing-visual-03.jpg" alt="bareMinerals Pretty Amazing Lipcolor | Bartlett Brands">
    <img src="assets/img/PROJECTS/bareminerals-pretty-amazing-lipcolor/bm-prettyamazing-visual-04.jpg" alt="bareMinerals Pretty Amazing Lipcolor | Bartlett Brands">
    <img src="assets/img/PROJECTS/bareminerals-pretty-amazing-lipcolor/bm-prettyamazing-visual-05.jpg" alt="bareMinerals Pretty Amazing Lipcolor | Bartlett Brands">

    <iframe src="//player.vimeo.com/video/97783741?byline=0&amp;portrait=0&amp;badge=0" allowfullscreen></iframe>

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
