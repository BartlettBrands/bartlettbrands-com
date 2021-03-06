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

    <img src="assets/img/PROJECTS/ao/ao-branding-packaging-1.jpg" alt="Ao Skincare Branding + Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/ao/ao-branding-packaging-2.jpg" alt="Ao Skincare Branding + Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/ao/ao-branding-packaging-3.gif" alt="Ao Skincare Branding + Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/ao/ao-branding-packaging-4.jpg" alt="Ao Skincare Branding + Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/ao/ao-branding-packaging-5.jpg" alt="Ao Skincare Branding + Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/ao/ao-branding-packaging-6.jpg" alt="Ao Skincare Branding + Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/ao/ao-branding-packaging-7.jpg" alt="Ao Skincare Branding + Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/ao/ao-branding-packaging-8.jpg" alt="Ao Skincare Branding + Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/ao/ao-branding-packaging-9.jpg" alt="Ao Skincare Branding + Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/ao/ao-branding-packaging-10.jpg" alt="Ao Skincare Branding + Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/ao/ao-branding-packaging-11.jpg" alt="Ao Skincare Branding + Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/ao/ao-branding-packaging-12.gif" alt="Ao Skincare Branding + Packaging | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
