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

    <img src="assets/img/PROJECTS/coterie/coterie-branding-visual-01.jpg" alt="Coterie Branding | Bartlett Brands">
    <img src="assets/img/PROJECTS/coterie/coterie-branding-visual-02.jpg" alt="Coterie Branding | Bartlett Brands">
    <img src="assets/img/PROJECTS/coterie/coterie-branding-visual-03.jpg" alt="Coterie Branding | Bartlett Brands">
    <img src="assets/img/PROJECTS/coterie/coterie-branding-visual-04.jpg" alt="Coterie Branding | Bartlett Brands">
    <img src="assets/img/PROJECTS/coterie/coterie-branding-visual-05.jpg" alt="Coterie Branding | Bartlett Brands">
    <img src="assets/img/PROJECTS/coterie/coterie-branding-visual-06.jpg" alt="Coterie Branding | Bartlett Brands">
    <img src="assets/img/PROJECTS/coterie/coterie-branding-visual-07.jpg" alt="Coterie Branding | Bartlett Brands">
    <img src="assets/img/PROJECTS/coterie/coterie-branding-visual-08.jpg" alt="Coterie Branding | Bartlett Brands">
    <img src="assets/img/PROJECTS/coterie/coterie-branding-visual-09.jpg" alt="Coterie Branding | Bartlett Brands">
    <img src="assets/img/PROJECTS/coterie/coterie-branding-visual-10.jpg" alt="Coterie Branding | Bartlett Brands">

    <iframe src="//player.vimeo.com/video/97763526?byline=0&amp;portrait=0&amp;badge=0" allowfullscreen></iframe>
    <iframe src="//player.vimeo.com/video/97763528?byline=0&amp;portrait=0&amp;badge=0" allowfullscreen></iframe>
    <iframe src="//player.vimeo.com/video/97763527?byline=0&amp;portrait=0&amp;badge=0" allowfullscreen></iframe>

    <img src="assets/img/PROJECTS/coterie/coterie-branding-visual-11.jpg" alt="Coterie Branding | Bartlett Brands">
    <img src="assets/img/PROJECTS/coterie/coterie-branding-visual-12.jpg" alt="Coterie Branding | Bartlett Brands">
    <img src="assets/img/PROJECTS/coterie/coterie-branding-visual-13.jpg" alt="Coterie Branding | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
