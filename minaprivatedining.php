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

    <img src="assets/img/PROJECTS/minaprivatedining/mina-group-private-dining-design-1.jpg" alt="Mina Group Private Dining | Bartlett Brands">
    <img src="assets/img/PROJECTS/minaprivatedining/mina-group-private-dining-design-2.jpg" alt="Mina Group Private Dining | Bartlett Brands">
    <img src="assets/img/PROJECTS/minaprivatedining/mina-group-private-dining-design-3.jpg" alt="Mina Group Private Dining | Bartlett Brands">
    <img src="assets/img/PROJECTS/minaprivatedining/mina-group-private-dining-design-4.jpg" alt="Mina Group Private Dining | Bartlett Brands">
    <img src="assets/img/PROJECTS/minaprivatedining/mina-group-private-dining-design-5.jpg" alt="Mina Group Private Dining | Bartlett Brands">
    <img src="assets/img/PROJECTS/minaprivatedining/mina-group-private-dining-design-6.jpg" alt="Mina Group Private Dining | Bartlett Brands">
    <img src="assets/img/PROJECTS/minaprivatedining/mina-group-private-dining-design-7.jpg" alt="Mina Group Private Dining | Bartlett Brands">
    <img src="assets/img/PROJECTS/minaprivatedining/mina-group-private-dining-design-8.jpg" alt="Mina Group Private Dining | Bartlett Brands">
    <img src="assets/img/PROJECTS/minaprivatedining/mina-group-private-dining-design-9.jpg" alt="Mina Group Private Dining | Bartlett Brands">
    <img src="assets/img/PROJECTS/minaprivatedining/mina-group-private-dining-design-10.jpg" alt="Mina Group Private Dining | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
