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

    <div class="img-caption"><p>Brand Strategy & Brand Book</p></div>
    <img src="assets/img/PROJECTS/randfbrand/RandF-branding-marketing-design-12.jpg" alt="Rodan + Fields Prescription For Change Campaign | Bartlett Brands">
    <img src="assets/img/PROJECTS/randfbrand/RandF-branding-marketing-design-13.jpg" alt="Rodan + Fields Prescription For Change Campaign | Bartlett Brands">
    <img src="assets/img/PROJECTS/randfbrand/RandF-branding-marketing-design-15.jpg" alt="Rodan + Fields Prescription For Change Campaign | Bartlett Brands">
        <div class="img-caption"><p>Acute Care Skincare for Expression Lines Marketing Campaign</p></div>
    <img src="assets/img/PROJECTS/randfbrand/RandF-branding-marketing-design-9.jpg" alt="Rodan + Fields Prescription For Change Campaign | Bartlett Brands">
    <img src="assets/img/PROJECTS/randfbrand/RandF-branding-marketing-design-10.jpg" alt="Rodan + Fields Prescription For Change Campaign | Bartlett Brands">
    <img src="assets/img/PROJECTS/randfbrand/RandF-branding-marketing-design-11.jpg" alt="Rodan + Fields Prescription For Change Campaign | Bartlett Brands">
        <div class="img-caption"><p>Men’s Skincare Launch Campaign</p></div>
    <img src="assets/img/PROJECTS/randfbrand/RandF-branding-marketing-design-6.jpg" alt="Rodan + Fields Prescription For Change Campaign | Bartlett Brands">
    <iframe src="//player.vimeo.com/video/140810926?byline=0&amp;portrait=0&amp;badge=0" allowfullscreen></iframe>
    <iframe src="//player.vimeo.com/video/140810925?byline=0&amp;portrait=0&amp;badge=0" allowfullscreen></iframe>
    <div class="img-caption"><p>Prescription for Change Marketing Campaign</p></div>
    <img src="assets/img/PROJECTS/randfbrand/RandF-branding-marketing-design-3.jpg" alt="Rodan + Fields Prescription For Change Campaign | Bartlett Brands">
    <iframe src="//player.vimeo.com/video/141078405?byline=0&amp;portrait=0&amp;badge=0" allowfullscreen></iframe>

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
