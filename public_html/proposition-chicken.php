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

    <img src="assets/img/PROJECTS/proposition-chicken/pc-branding-visual-01.jpg" alt="Proposition Chicken | Bartlett Brands">
    <img src="assets/img/PROJECTS/proposition-chicken/proposition-chicken-design-branding-2.jpg" alt="Proposition Chicken | Bartlett Brands">
    <img src="assets/img/PROJECTS/proposition-chicken/proposition-chicken-design-branding-3.jpg" alt="Proposition Chicken | Bartlett Brands">
    <img src="assets/img/PROJECTS/proposition-chicken/proposition-chicken-design-branding-4.jpg" alt="Proposition Chicken | Bartlett Brands">
    <img src="assets/img/PROJECTS/proposition-chicken/proposition-chicken-design-branding-5.jpg" alt="Proposition Chicken | Bartlett Brands">
    <img src="assets/img/PROJECTS/proposition-chicken/proposition-chicken-design-branding-6.jpg" alt="Proposition Chicken | Bartlett Brands">
    <img src="assets/img/PROJECTS/proposition-chicken/proposition-chicken-design-branding-7.jpg" alt="Proposition Chicken | Bartlett Brands">
    <img src="assets/img/PROJECTS/proposition-chicken/proposition-chicken-design-branding-8.jpg" alt="Proposition Chicken | Bartlett Brands">
    <img src="assets/img/PROJECTS/proposition-chicken/proposition-chicken-design-branding-9.jpg" alt="Proposition Chicken | Bartlett Brands">
    <img src="assets/img/PROJECTS/proposition-chicken/proposition-chicken-design-branding-10.jpg" alt="Proposition Chicken | Bartlett Brands">
    <img src="assets/img/PROJECTS/proposition-chicken/proposition-chicken-design-branding-11.jpg" alt="Proposition Chicken | Bartlett Brands">
    <img src="assets/img/PROJECTS/proposition-chicken/proposition-chicken-design-branding-12.jpg" alt="Proposition Chicken | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
