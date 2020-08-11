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

    <img src="assets/img/PROJECTS/exa/exa-branding-packaging-1.jpg" alt="Exa Branding & Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/exa/exa-branding-packaging-2.jpg" alt="Exa Branding & Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/exa/exa-branding-packaging-3.jpg" alt="Exa Branding & Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/exa/exa-branding-packaging-4.jpg" alt="Exa Branding & Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/exa/exa-branding-packaging-5.jpg" alt="Exa Branding & Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/exa/exa-branding-packaging-6.gif" alt="Exa Branding & Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/exa/exa-branding-packaging-7.gif" alt="Exa Branding & Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/exa/exa-branding-packaging-8.jpg" alt="Exa Branding & Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/exa/exa-branding-packaging-9.jpg" alt="Exa Branding & Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/exa/exa-branding-packaging-10.jpg" alt="Exa Branding & Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/exa/exa-branding-packaging-11.jpg" alt="Exa Branding & Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/exa/exa-branding-packaging-12.jpg" alt="Exa Branding & Packaging | Bartlett Brands">
	<img src="assets/img/PROJECTS/exa/exa-branding-packaging-13.jpg" alt="Exa Branding & Packaging | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
