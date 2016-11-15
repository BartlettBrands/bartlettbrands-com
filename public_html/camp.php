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

    <img src="assets/img/PROJECTS/camp/camp-collection-branding-01.jpg" alt="CAMP Collection | Bartlett Brands">
    <img src="assets/img/PROJECTS/camp/camp-collection-branding-02.jpg" alt="CAMP Collection | Bartlett Brands">
    <img src="assets/img/PROJECTS/camp/camp-collection-branding-03.jpg" alt="CAMP Collection | Bartlett Brands">
    <img src="assets/img/PROJECTS/camp/camp-collection-branding-04.jpg" alt="CAMP Collection | Bartlett Brands">
    <img src="assets/img/PROJECTS/camp/camp-collection-branding-05.jpg" alt="CAMP Collection | Bartlett Brands">
    <img src="assets/img/PROJECTS/camp/camp-collection-branding-06.jpg" alt="CAMP Collection | Bartlett Brands">
    <img src="assets/img/PROJECTS/camp/camp-collection-branding-07.jpg" alt="CAMP Collection | Bartlett Brands">
    <img src="assets/img/PROJECTS/camp/camp-collection-branding-09.jpg" alt="CAMP Collection | Bartlett Brands">
    <img src="assets/img/PROJECTS/camp/camp-collection-branding-10.jpg" alt="CAMP Collection | Bartlett Brands">
    <img src="assets/img/PROJECTS/camp/camp-collection-branding-11.jpg" alt="CAMP Collection | Bartlett Brands">
    <img src="assets/img/PROJECTS/camp/camp-collection-branding-13.jpg" alt="CAMP Collection | Bartlett Brands">
    <img src="assets/img/PROJECTS/camp/camp-collection-branding-14.jpg" alt="CAMP Collection | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
