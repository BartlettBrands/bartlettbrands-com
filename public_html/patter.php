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

    <img src="assets/img/PROJECTS/patter/patter-appbranding-visual-01.jpg" alt="Patter App | Bartlett Brands">
    <img src="assets/img/PROJECTS/patter/patter-appbranding-visual-02.jpg" alt="Patter App | Bartlett Brands">
    <img src="assets/img/PROJECTS/patter/patter-appbranding-visual-03.jpg" alt="Patter App | Bartlett Brands">
    <img src="assets/img/PROJECTS/patter/patter-appbranding-visual-04.jpg" alt="Patter App | Bartlett Brands">
    <img src="assets/img/PROJECTS/patter/patter-appbranding-visual-05.jpg" alt="Patter App | Bartlett Brands">
    <img src="assets/img/PROJECTS/patter/patter-appbranding-visual-06.jpg" alt="Patter App | Bartlett Brands">
    <img src="assets/img/PROJECTS/patter/patter-appbranding-visual-07.jpg" alt="Patter App | Bartlett Brands">
    <img src="assets/img/PROJECTS/patter/patter-appbranding-visual-08.jpg" alt="Patter App | Bartlett Brands">
    <img src="assets/img/PROJECTS/patter/patter-appbranding-visual-09.jpg" alt="Patter App | Bartlett Brands">

    <iframe src="//player.vimeo.com/video/97772899?byline=0&amp;portrait=0&amp;badge=0" allowfullscreen></iframe>

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php /* Include Pinit */ echo $pinit_script; ?>
<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
