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

    <img src="assets/img/PROJECTS/damario/damario-branding-design-1.jpg" alt="Da Mario Branding + Design | Bartlett Brands">
	<img src="assets/img/PROJECTS/damario/damario-branding-design-2.jpg" alt="Da Mario Branding + Design | Bartlett Brands">
	<img src="assets/img/PROJECTS/damario/damario-branding-design-3.jpg" alt="Da Mario Branding + Design | Bartlett Brands">
	<img src="assets/img/PROJECTS/damario/damario-branding-design-4.jpg" alt="Da Mario Branding + Design | Bartlett Brands">
	<img src="assets/img/PROJECTS/damario/damario-branding-design-5.jpg" alt="Da Mario Branding + Design | Bartlett Brands">
	<img src="assets/img/PROJECTS/damario/damario-branding-design-6.gif" alt="Da Mario Branding + Design | Bartlett Brands">
	<img src="assets/img/PROJECTS/damario/damario-branding-design-7.jpg" alt="Da Mario Branding + Design | Bartlett Brands">
	<img src="assets/img/PROJECTS/damario/damario-branding-design-8.jpg" alt="Da Mario Branding + Design | Bartlett Brands">
	<img src="assets/img/PROJECTS/damario/damario-branding-design-9.jpg" alt="Da Mario Branding + Design | Bartlett Brands">
	<img src="assets/img/PROJECTS/damario/damario-branding-design-10.jpg" alt="Da Mario Branding + Design | Bartlett Brands">
	<img src="assets/img/PROJECTS/damario/damario-branding-design-11.jpg" alt="Da Mario Branding + Design | Bartlett Brands">
	<img src="assets/img/PROJECTS/damario/damario-branding-design-12.jpg" alt="Da Mario Branding + Design | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
