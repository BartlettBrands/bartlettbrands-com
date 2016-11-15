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



<body class="project-page project-grouping-page">

    <?php /* Include Navigation */ echo $nav; ?>

    <?php /* Include Projects Intro Content */ echo $projectPageContent_top; ?>

    <img src="assets/img/PROJECTS/logos/logos-visual-propositionchicken.jpg"          alt="Proposition Chicken Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/logos-visual-bareminerals.jpg"                alt="bareMinerals Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/Branding_logo_design_DianesBM.jpg"            alt="Diane's Bloody Mary Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/Branding_logo_design_LaMienne.jpg"            alt="La Mienne Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/logos-visual-wednesdayseven.jpg"              alt="Wednesday Seven Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/Branding_logo_design_Naya.jpg"              alt="Naya Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/Branding_logo_design_MarinFrenchCheese150.jpg"              alt="Marin French Cheese 150 Year Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/Branding_logo_design_Camp.jpg"                alt="Camp Collection Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/Branding_logo_design_Patchology.jpg" alt="Patchology Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/Branding_logo_design_Optical_Underground.jpg" alt="Optical Underground Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/Branding_logo_design_Bravon.jpg"              alt="Bravon Beauty Logo | Bartlett Brands">
        <img src="assets/img/PROJECTS/logos/Branding_logo_design_Colada.jpg"              alt="Colada | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/Branding_logo_design_Cubert.jpg"              alt="Cubert Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/Branding_logo_design_Wonder.jpg"              alt="Wonder Gift Cards Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/Branding_logo_design_Hashed.jpg"              alt="Hashed Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/logos-visual-coterie.jpg"                     alt="Coterie Logo | Bartlett Brands">
        <img src="assets/img/PROJECTS/logos/Branding_logo_design_Switch.jpg"                     alt="Switch VC Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/logos-visual-patter.jpg"                      alt="Patter Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/logos-visual-beautybooked.jpg"                alt="Beauty Booked Logo | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php /* Include Pinit */ echo $pinit_script; ?>
<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
