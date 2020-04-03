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

    <img src="assets/img/PROJECTS/superkin/superkin-branding-design-1.jpg" alt="German Kabirski Branding | Bartlett Brands">
	<img src="assets/img/PROJECTS/superkin/superkin-branding-design-2.jpg" alt="German Kabirski Branding | Bartlett Brands">
	<img src="assets/img/PROJECTS/superkin/superkin-branding-design-3.jpg" alt="German Kabirski Branding | Bartlett Brands">
	<img src="assets/img/PROJECTS/superkin/superkin-branding-design-4.jpg" alt="German Kabirski Branding | Bartlett Brands">
	<img src="assets/img/PROJECTS/superkin/superkin-branding-design-5.jpg" alt="German Kabirski Branding | Bartlett Brands">
	<img src="assets/img/PROJECTS/superkin/superkin-branding-design-6.jpg" alt="German Kabirski Branding | Bartlett Brands">
	<img src="assets/img/PROJECTS/superkin/superkin-branding-design-7.jpg" alt="German Kabirski Branding | Bartlett Brands">
	<img src="assets/img/PROJECTS/superkin/superkin-branding-design-8.jpg" alt="German Kabirski Branding | Bartlett Brands">
	<img src="assets/img/PROJECTS/superkin/superkin-branding-design-9.gif" alt="German Kabirski Branding | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
