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

    <img src="assets/img/PROJECTS/michael-mina-rn74/rn74-menu-visual-01.jpg" alt="Michael Mina RN74 | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-rn74/rn74-menu-visual-02.jpg" alt="Michael Mina RN74 | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-rn74/rn74-menu-visual-03.jpg" alt="Michael Mina RN74 | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-rn74/rn74-menu-visual-04.jpg" alt="Michael Mina RN74 | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-rn74/rn74-menu-visual-05.jpg" alt="Michael Mina RN74 | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-rn74/rn74-menu-visual-06.jpg" alt="Michael Mina RN74 | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php /* Include Pinit */ echo $pinit_script; ?>
<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
