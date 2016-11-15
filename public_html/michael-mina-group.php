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

    <iframe src="//player.vimeo.com/video/97763525?byline=0&amp;portrait=0&amp;badge=0" allowfullscreen></iframe>

    <img src="assets/img/PROJECTS/michael-mina-group/mina-branding-visual-01.jpg" alt="Michael Mina Group | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-group/mina-branding-visual-02.jpg" alt="Michael Mina Group | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-group/mina-branding-visual-03.jpg" alt="Michael Mina Group | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-group/mina-branding-visual-04.jpg" alt="Michael Mina Group | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-group/mina-branding-visual-05.jpg" alt="Michael Mina Group | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-group/mina-branding-visual-06.jpg" alt="Michael Mina Group | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-group/mina-branding-visual-07.jpg" alt="Michael Mina Group | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-group/mina-branding-visual-08.jpg" alt="Michael Mina Group | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-group/mina-branding-visual-09.jpg" alt="Michael Mina Group | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-group/mina-branding-visual-10.jpg" alt="Michael Mina Group | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-group/mina-branding-visual-11.jpg" alt="Michael Mina Group | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-group/mina-branding-visual-12.jpg" alt="Michael Mina Group | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-group/mina-branding-visual-13.jpg" alt="Michael Mina Group | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-group/mina-branding-visual-16.jpg" alt="Michael Mina Group | Bartlett Brands">
    <img src="assets/img/PROJECTS/michael-mina-group/mina-branding-visual-14.jpg" alt="Michael Mina Group | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php /* Include Pinit */ echo $pinit_script; ?>
<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
