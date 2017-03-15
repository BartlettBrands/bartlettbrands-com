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

    <img src="assets/img/PROJECTS/bravon/bravon-beauty-cosmetics-branding-1.jpg" alt="Bravon Beauty | Bartlett Brands">
    <img src="assets/img/PROJECTS/bravon/bravon-beauty-cosmetics-branding-2.jpg" alt="Bravon Beauty | Bartlett Brands">
    <img src="assets/img/PROJECTS/bravon/bravon-beauty-cosmetics-branding-3.jpg" alt="Bravon Beauty | Bartlett Brands">
    <img src="assets/img/PROJECTS/bravon/bravon-beauty-cosmetics-branding-4.jpg" alt="Bravon Beauty | Bartlett Brands">
    <img src="assets/img/PROJECTS/bravon/bravon-beauty-cosmetics-branding-5.jpg" alt="Bravon Beauty | Bartlett Brands">
    <img src="assets/img/PROJECTS/bravon/bravon-beauty-cosmetics-branding-6.jpg" alt="Bravon Beauty | Bartlett Brands">
    <img src="assets/img/PROJECTS/bravon/bravon-beauty-cosmetics-branding-7.jpg" alt="Bravon Beauty | Bartlett Brands">
    <img src="assets/img/PROJECTS/bravon/bravon-beauty-cosmetics-branding-8.jpg" alt="Bravon Beauty | Bartlett Brands">
    <img src="assets/img/PROJECTS/bravon/bravon-beauty-cosmetics-branding-9.jpg" alt="Bravon Beauty | Bartlett Brands">
    <img src="assets/img/PROJECTS/bravon/bravon-beauty-cosmetics-branding-10.jpg" alt="Bravon Beauty | Bartlett Brands">
    <img src="assets/img/PROJECTS/bravon/bravon-beauty-cosmetics-branding-11.jpg" alt="Bravon Beauty | Bartlett Brands">
    <img src="assets/img/PROJECTS/bravon/bravon-beauty-cosmetics-branding-12.jpg" alt="Bravon Beauty | Bartlett Brands">
    <img src="assets/img/PROJECTS/bravon/bravon-beauty-cosmetics-branding-13.jpg" alt="Bravon Beauty | Bartlett Brands">
    <img src="assets/img/PROJECTS/bravon/bravon-beauty-cosmetics-branding-14.jpg" alt="Bravon Beauty | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
