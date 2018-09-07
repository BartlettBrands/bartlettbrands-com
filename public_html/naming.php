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

    <img src="assets/img/PROJECTS/naming/naming-branding-1.jpg" alt="Naming | Bartlett Brands">
	<p class="section-subtitle">It’s your first impression and your constant calling card. No matter what kind of business you’re in, you need a name that stands up and stands out for all the right reasons.</p>
    <img src="assets/img/PROJECTS/naming/naming-branding-2.jpg" alt="Naming | Bartlett Brands">
	<p class="section-subtitle">It’s your first impression and your constant calling card. No matter what kind of business you’re in, you need a name that stands up and stands out for all the right reasons.</p>
	<img src="assets/img/PROJECTS/naming/naming-branding-3.jpg" alt="Naming | Bartlett Brands">
	<p class="section-subtitle">It’s your first impression and your constant calling card. No matter what kind of business you’re in, you need a name that stands up and stands out for all the right reasons.</p>
	<img src="assets/img/PROJECTS/naming/naming-branding-4.jpg" alt="Naming | Bartlett Brands">
	<p class="section-subtitle">It’s your first impression and your constant calling card. No matter what kind of business you’re in, you need a name that stands up and stands out for all the right reasons.</p>
	<img src="assets/img/PROJECTS/naming/naming-branding-5.jpg" alt="Naming | Bartlett Brands">
	<p class="section-subtitle">It’s your first impression and your constant calling card. No matter what kind of business you’re in, you need a name that stands up and stands out for all the right reasons.</p>
	<img src="assets/img/PROJECTS/naming/naming-branding-6.jpg" alt="Naming | Bartlett Brands">
	<p class="section-subtitle">It’s your first impression and your constant calling card. No matter what kind of business you’re in, you need a name that stands up and stands out for all the right reasons.</p>
	<img src="assets/img/PROJECTS/naming/naming-branding-7.jpg" alt="Naming | Bartlett Brands">
	<p class="section-subtitle">It’s your first impression and your constant calling card. No matter what kind of business you’re in, you need a name that stands up and stands out for all the right reasons.</p>

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
