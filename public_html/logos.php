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

    <img src="assets/img/PROJECTS/logos/Branding_logo_design_PaulasChoice.jpg"            alt="Paula's Choice Logo | Bartlett Brands">
	<img src="assets/img/PROJECTS/logos/Branding_logo_design_Biossance.jpg"            alt="Biossance Logo | Bartlett Brands">
	<img src="assets/img/PROJECTS/logos/Branding_logo_design_Camp.jpg"                alt="Camp Collection Logo | Bartlett Brands">
	<img src="assets/img/PROJECTS/logos/Branding_logo_design_Freya.jpg"            alt="Freya Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/Branding_logo_design_DianesBM.jpg"            alt="Diane's Bloody Mary Logo | Bartlett Brands">
	<img src="assets/img/PROJECTS/logos/logos-visual-bareminerals.jpg"                alt="bareMinerals Logo | Bartlett Brands">
	<img src="assets/img/PROJECTS/logos/Branding_logo_design_FifthTaste.jpg"            alt="Fifth Taste Logo | Bartlett Brands">
	<img src="assets/img/PROJECTS/logos/Branding_logo_design_FirstDay.jpg"            alt="First Day Logo | Bartlett Brands">
	<img src="assets/img/PROJECTS/logos/Branding_logo_design_Proposition_Chicken.jpg"          alt="Proposition Chicken Logo | Bartlett Brands">
	<img src="assets/img/PROJECTS/logos/Branding_logo_design_Ao.jpg"            alt="Ao Logo | Bartlett Brands">
	<img src="assets/img/PROJECTS/logos/Branding_logo_design_DaMario.jpg"            alt="DaMario Logo | Bartlett Brands">
	<img src="assets/img/PROJECTS/logos/Branding_logo_design_BambooAsia.jpg"            alt="Bamboo Asia Logo | Bartlett Brands">
	<img src="assets/img/PROJECTS/logos/Branding_logo_design_SaucyAsian.jpg"            alt="Saucy Asian Logo | Bartlett Brands">
	<img src="assets/img/PROJECTS/logos/Branding_logo_design_Colada.jpg"              alt="Colada Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/Branding_logo_design_Patchology.jpg" alt="Patchology Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/Branding_logo_design_Bravon.jpg"              alt="Bravon Beauty Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/Branding_logo_design_LittleLafa.jpg"              alt="Little Lafa Logo | Bartlett Brands">
    <img src="assets/img/PROJECTS/logos/Branding_logo_design_Switch.jpg"              alt="Switch VC Logo | Bartlett Brands">
	<img src="assets/img/PROJECTS/logos/Branding_logo_design_Naya.jpg"              alt="Naya Logo | Bartlett Brands">

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php /* Include Pinit */ echo $pinit_script; ?>
<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
