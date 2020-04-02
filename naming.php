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

    <img src="assets/img/PROJECTS/naming/naming-branding-ace-of-air.jpg" alt="Ace of Air Naming | Bartlett Brands">
	<p class="section-subtitle">The first and only 100% circular beauty &amp; wellness brand.</p>
	<br>
	<img src="assets/img/PROJECTS/naming/naming-branding-superkin.jpg" alt="Superkin Naming | Bartlett Brands">
	<p class="section-subtitle">"Not a Maternity Brand"</p>
	<br>
	<img src="assets/img/PROJECTS/naming/naming-branding-exa.jpg" alt="Exa Naming | Bartlett Brands">
	<p class="section-subtitle">Clean makeup made for everyone and every frequency.</p>
	<br>
	<img src="assets/img/PROJECTS/naming/naming-branding-solvasa.jpg" alt="Solvasa Naming | Bartlett Brands">
	<p class="section-subtitle">Integrative beauty &amp; selfcare based on Eastern tradition.</p>
	<br>
	<img src="assets/img/PROJECTS/naming/naming-branding-saucyasian.jpg" alt="Saucy Asian Naming | Bartlett Brands">
	<p class="section-subtitle">Cali-Korean remixed restaurant with street food swagger.</p>
	<br>
    <img src="assets/img/PROJECTS/naming/naming-branding-moonshot.jpg" alt="Moonshot Naming | Bartlett Brands">
	<p class="section-subtitle">Experimental kitchen and cocktail lab where culinary scientists play.</p>
	<br>
	<img src="assets/img/PROJECTS/naming/naming-branding-proposition-chicken.jpg" alt="Proposition Chicken Naming | Bartlett Brands">
	<p class="section-subtitle">A catchy counter concept that’s cluck-worthy and foodie-approved.</p>
	<br>
	<img src="assets/img/PROJECTS/naming/naming-branding-little-lafa.jpg" alt="Little Lafa Naming | Bartlett Brands">
	<p class="section-subtitle">Fast casual Mediterranean flavors served fresh from the fold.</p>
	<br>
	<img src="assets/img/PROJECTS/naming/naming-branding-la-mienne.jpg" alt="La Mienne Naming | Bartlett Brands">
	<p class="section-subtitle">Beauty as you like it, on demand with the tap of and app.</p>
	<br>
	<img src="assets/img/PROJECTS/naming/naming-branding-cubert.jpg" alt="Cubert Naming | Bartlett Brands">
	<p class="section-subtitle">Mobile pop up venue that’s more than meets the cube.</p>
	<br>
	<img src="assets/img/PROJECTS/naming/naming-branding-bc-broth.jpg" alt="BC Broth Naming | Bartlett Brands">
	<p class="section-subtitle">Caveman-certified, grandma-approved bone broth beverage.</p>
	<br>
	<img src="assets/img/PROJECTS/naming/naming-branding-stave-and-steel.jpg" alt="Stave & Steel Naming | Bartlett Brands">
	<p class="section-subtitle">Bourbon-barrel aged Cabernet for bold-loving palettes.</p>

    <?php /* Include Projects End Content and Nav */ echo $projectPageContent_bottom; ?>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
