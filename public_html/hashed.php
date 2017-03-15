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

    <img src="assets/img/PROJECTS/hashed/hashed_app_branding_design1.jpg" alt="Hashed | Bartlett Brands">
    <img src="assets/img/PROJECTS/hashed/hashed_app_branding_design2.jpg" alt="Hashed | Bartlett Brands">
    <img src="assets/img/PROJECTS/hashed/hashed_app_branding_design3.gif" alt="Hashed | Bartlett Brands">
    <img src="assets/img/PROJECTS/hashed/hashed_app_branding_design4.jpg" alt="Hashed | Bartlett Brands">
    <img src="assets/img/PROJECTS/hashed/hashed_app_branding_design5.jpg" alt="Hashed | Bartlett Brands">
    <img src="assets/img/PROJECTS/hashed/hashed_app_branding_design6.gif" alt="Hashed | Bartlett Brands">
    <img src="assets/img/PROJECTS/hashed/hashed_app_branding_design7.jpg" alt="Hashed | Bartlett Brands">
    <img src="assets/img/PROJECTS/hashed/hashed_app_branding_design8.jpg" alt="Hashed | Bartlett Brands">
    <img src="assets/img/PROJECTS/hashed/hashed_app_branding_design9.jpg" alt="Hashed | Bartlett Brands">
    <img src="assets/img/PROJECTS/hashed/hashed_app_branding_design10.jpg" alt="Hashed | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php /* Include Pinit */ echo $pinit_script; ?>
<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
