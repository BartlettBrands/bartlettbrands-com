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

    <img src="assets/img/PROJECTS/pub-1842/pub_1842_branding_marketing_1.jpg"  alt="Pub 1842 | Bartlett Brands">
    <img src="assets/img/PROJECTS/pub-1842/pub_1842_branding_marketing_2.jpg"  alt="Pub 1842 | Bartlett Brandsl">
    <img src="assets/img/PROJECTS/pub-1842/pub_1842_branding_marketing_3.jpg"  alt="Pub 1842 | Bartlett Brands">
    <img src="assets/img/PROJECTS/pub-1842/pub_1842_branding_marketing_4.jpg"  alt="Pub 1842 | Bartlett Brands">
    <img src="assets/img/PROJECTS/pub-1842/pub_1842_branding_marketing_5.jpg"  alt="Pub 1842 | Bartlett Brands">
    <img src="assets/img/PROJECTS/pub-1842/pub_1842_branding_marketing_6.jpg"  alt="Pub 1842 | Bartlett Brands">
    <img src="assets/img/PROJECTS/pub-1842/pub_1842_branding_marketing_7.jpg"  alt="Pub 1842 | Bartlett Brands">
    <img src="assets/img/PROJECTS/pub-1842/pub_1842_branding_marketing_8.jpg" alt="Pub 1842 | Bartlett Brands">
    <img src="assets/img/PROJECTS/pub-1842/pub_1842_branding_marketing_9.jpg"  alt="Pub 1842 | Bartlett Brands">
    <img src="assets/img/PROJECTS/pub-1842/pub_1842_branding_marketing_10.jpg"  alt="Pub 1842 | Bartlett Brands">
    <img src="assets/img/PROJECTS/pub-1842/pub_1842_branding_marketing_11.jpg" alt="Pub 1842 | Bartlett Brands">
    <img src="assets/img/PROJECTS/pub-1842/pub_1842_branding_marketing_12.jpg" alt="Pub 1842 | Bartlett Brands">
    <img src="assets/img/PROJECTS/pub-1842/pub_1842_branding_marketing_13.jpg" alt="Pub 1842 | Bartlett Brands">
    <img src="assets/img/PROJECTS/pub-1842/pub_1842_branding_marketing_14.jpg" alt="Pub 1842 | Bartlett Brands">
    <img src="assets/img/PROJECTS/pub-1842/pub_1842_branding_marketing_15.jpg" alt="Pub 1842 | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
