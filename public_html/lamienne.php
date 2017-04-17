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

    <img src="assets/img/PROJECTS/lamienne/LaMienne-branding-design-1.jpg" alt="La Mienne | Beauty As You Like It | Bartlett Brands">
    <img src="assets/img/PROJECTS/lamienne/LaMienne-branding-design-2.gif" alt="La Mienne | Beauty As You Like It | Bartlett Brands">
    <img src="assets/img/PROJECTS/lamienne/LaMienne-branding-design-3.jpg" alt="La Mienne | Beauty As You Like It | Bartlett Brands">
    <img src="assets/img/PROJECTS/lamienne/LaMienne-branding-design-4.jpg" alt="La Mienne | Beauty As You Like It | Bartlett Brands">
    <img src="assets/img/PROJECTS/lamienne/LaMienne-branding-design-5.jpg" alt="La Mienne | Beauty As You Like It | Bartlett Brands">
    <img src="assets/img/PROJECTS/lamienne/LaMienne-branding-design-6.jpg" alt="La Mienne | Beauty As You Like It | Bartlett Brands">
    <img src="assets/img/PROJECTS/lamienne/LaMienne-branding-design-7.jpg" alt="La Mienne | Beauty As You Like It | Bartlett Brands">
    <img src="assets/img/PROJECTS/lamienne/LaMienne-branding-design-8.jpg" alt="La Mienne | Beauty As You Like It | Bartlett Brands">
    <img src="assets/img/PROJECTS/lamienne/LaMienne-branding-design-9.jpg" alt="La Mienne | Beauty As You Like It | Bartlett Brands">
    <img src="assets/img/PROJECTS/lamienne/LaMienne-branding-design-10.jpg" alt="La Mienne | Beauty As You Like It | Bartlett Brands">
    <img src="assets/img/PROJECTS/lamienne/LaMienne-branding-design-11.jpg" alt="La Mienne | Beauty As You Like It | Bartlett Brands">
    <img src="assets/img/PROJECTS/lamienne/LaMienne-branding-design-12.jpg" alt="La Mienne | Beauty As You Like It | Bartlett Brands">
    <img src="assets/img/PROJECTS/lamienne/LaMienne-branding-design-14.jpg" alt="La Mienne | Beauty As You Like It | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
