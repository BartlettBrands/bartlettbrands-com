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

    <img src="assets/img/PROJECTS/ipsy/ipsyshopper-marketing-print-1.jpg" alt="Ipsy Marketing | Bartlett Brands">
    <img src="assets/img/PROJECTS/ipsy/ipsyshopper-marketing-print-2.jpg" alt="Ipsy Marketing | Bartlett Brands">
    <img src="assets/img/PROJECTS/ipsy/ipsyshopper-marketing-print-3.jpg" alt="Ipsy Marketing | Bartlett Brands">
    <img src="assets/img/PROJECTS/ipsy/ipsyshopper-marketing-print-4.jpg" alt="Ipsy Marketing | Bartlett Brands">
    <img src="assets/img/PROJECTS/ipsy/ipsyshopper-marketing-print-5.jpg" alt="Ipsy Marketing | Bartlett Brands">
    <img src="assets/img/PROJECTS/ipsy/ipsyshopper-marketing-print-6.jpg" alt="Ipsy Marketing | Bartlett Brands">
    <img src="assets/img/PROJECTS/ipsy/ipsyshopper-marketing-print-7.jpg" alt="Ipsy Marketing | Bartlett Brands">
    <img src="assets/img/PROJECTS/ipsy/ipsyshopper-marketing-print-8.jpg" alt="Ipsy Marketing | Bartlett Brands">
    <img src="assets/img/PROJECTS/ipsy/ipsyshopper-marketing-print-9.jpg" alt="Ipsy Marketing | Bartlett Brands">
    <img src="assets/img/PROJECTS/ipsy/ipsyshopper-marketing-print-10.jpg" alt="Ipsy Marketing | Bartlett Brands">
    <img src="assets/img/PROJECTS/ipsy/ipsyshopper-marketing-print-11.jpg" alt="Ipsy Marketing | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
