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

    <img src="assets/img/PROJECTS/biossance/biossance-branding-packaging-1.jpg" alt="Biossance Branding + Design | Bartlett Brands">
    <img src="assets/img/PROJECTS/biossance/biossance-branding-packaging-2.jpg" alt="Biossance Branding + Design | Bartlett Brands">
    <img src="assets/img/PROJECTS/biossance/biossance-branding-packaging-3.jpg" alt="Biossance Branding + Design | Bartlett Brands">
    <img src="assets/img/PROJECTS/biossance/biossance-branding-packaging-4.jpg" alt="Biossance Branding + Design | Bartlett Brands">
    <img src="assets/img/PROJECTS/biossance/biossance-branding-packaging-5.jpg" alt="Biossance Branding + Design | Bartlett Brands">
    <img src="assets/img/PROJECTS/biossance/biossance-branding-packaging-6.jpg" alt="Biossance Branding + Design | Bartlett Brands">
    <img src="assets/img/PROJECTS/biossance/biossance-branding-packaging-7.jpg" alt="Biossance Branding + Design | Bartlett Brands">
    <img src="assets/img/PROJECTS/biossance/biossance-branding-packaging-8.jpg" alt="Biossance Branding + Design | Bartlett Brands">
    <img src="assets/img/PROJECTS/biossance/biossance-branding-packaging-9.jpg" alt="Biossance Branding + Design | Bartlett Brands">
    <img src="assets/img/PROJECTS/biossance/biossance-branding-packaging-10.gif" alt="Biossance Branding + Design | Bartlett Brands">
    <iframe src="//player.vimeo.com/video/213582843?byline=0&amp;portrait=0&amp;badge=0" allowfullscreen></iframe>
    <img src="assets/img/PROJECTS/biossance/biossance-branding-packaging-11.jpg" alt="Biossance Branding + Design | Bartlett Brands">
    <img src="assets/img/PROJECTS/biossance/biossance-branding-packaging-12.jpg" alt="Biossance Branding + Design | Bartlett Brands">
    <img src="assets/img/PROJECTS/biossance/biossance-branding-packaging-13.jpg" alt="Biossance Branding + Design | Bartlett Brands">
    <img src="assets/img/PROJECTS/biossance/biossance-branding-packaging-14.gif" alt="Biossance Branding + Design | Bartlett Brands">
    <img src="assets/img/PROJECTS/biossance/biossance-branding-packaging-15.jpg" alt="Biossance Branding + Design | Bartlett Brands">
    <img src="assets/img/PROJECTS/biossance/biossance-branding-packaging-16.jpg" alt="Biossance Branding + Design | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
