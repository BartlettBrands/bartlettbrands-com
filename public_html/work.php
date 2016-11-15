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



<body class="work-page">

    <?php /* Include Navigation */ echo $nav; ?>

    <section id="work">
        <div class="container12">

            <?php // #portfolioFilters, #portfolioItems, .portfolioItem are all JS controlled classes ?>
            <?php // change filter names here, in index.php, and in js. ?>

            <nav id="portfolioFilters">
                <ul>
                    <li id="link-all" class="active"><a href="#" data-filter="*" rel="nofollow">All</a></li>
                    <li id="link-strategy"><a href="#" data-filter=".strategy" rel="nofollow">Strategy</a></li>
                    <li id="link-branding"><a href="#" data-filter=".branding" rel="nofollow">Branding</a></li>
                    <li id="link-messaging"><a href="#" data-filter=".messaging" rel="nofollow">Messaging</a></li>
                    <li id="link-design"><a href="#" data-filter=".design" rel="nofollow">Design</a></li>
                    <li id="link-marketing"><a href="#" data-filter=".marketing" rel="nofollow">Marketing</a></li>
                </ul>
            </nav>

            <div id="portfolioItems">
                <div class="nav-wrap">
                    <?php /* Include Projects Navigation */ echo $projectNav; ?>
                </div>
            </div>

        </div>
    </section>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
