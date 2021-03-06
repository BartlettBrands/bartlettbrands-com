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



<body class="home-page">

    <div class="bg-images">
        <?php /* Include Bg Images List */ echo $bgImages; ?>
    </div>


    <?php // WELCOME
       // this needs a #welcome because of justmotion.js (whatever that is) ?>
    <section id="welcome">
        <div class="content-wrap">
            <div class="logogroup">
                <img class="logo" src="assets/img/brand-logo-transparent.png" alt="Bartlett Brands">
                <h1 class="logo-name">Bartlett Brand<span class="last-letter">s</span></h1>
                <h3 class="logo-subtext">Award-Winning&nbsp;Boutique<br>Branding&nbsp;Agenc<span class="last-letter">y</span></h3>
                <h5 class="logo-location">Based in San Francisco</h5>
                <?php echo $svg_icon_arrow; ?>
            </div>
        </div>
    </section>



    <?php /* Include Navigation */ echo $nav; ?>



    <?php // WORK HIGHLIGHTS
       // 5 instances) To change the "highlight" just change the "TITLENAME", i.e., $pages['PAGENAME']['url'] would become $pages['PAGE NAME']['url']
       // 3 instances) Also, anytime the actual TITLENAME exists in the HTML, change that
       // 1 instance ) Also note that "New Work" is most common, but you might use "New Award" or something else in it's place
    ?>
    <section id="work-highlights">
        <div class="container12">

            <h2 class="h2 section-title">Recent Projects</h2>
            <hr class="title-underline">

			<?php // HIGHLIGHT 1 - "Exa" ?>
            <a class="column4 item" href="<?php echo $pages['Exa']['url']; ?>" data-url="<?php echo $pages['Exa']['url']; ?>" title="Exa">
                <img src="<?php echo $pages['Exa']['navImg']; ?>" alt="Preview of Exa">
                <div class="hover-group">
                    <div class="hover-group-inner">
                        <h3 class="h3 project-category"><span>New Work</span></h3>
                        <hr>
                        <h4 class="h4 project-name">Exa</h4>
                        <h5 class="h5 project-type"><?php echo $pages['Exa']['navProjectType']; ?></h5>
                    </div>
                </div>
            </a>
			
			<?php // HIGHLIGHT 2 - "German Kabirski" ?>
            <a class="column4 item" href="<?php echo $pages['German Kabirski']['url']; ?>" data-url="<?php echo $pages['German Kabirski']['url']; ?>" title="German Kabirski">
                <img src="<?php echo $pages['German Kabirski']['navImg']; ?>" alt="Preview of German Kabirski">
                <div class="hover-group">
                    <div class="hover-group-inner">
                        <h3 class="h3 project-category"><span>New Work</span></h3>
                        <hr>
                        <h4 class="h4 project-name">German Kabirski</h4>
                        <h5 class="h5 project-type"><?php echo $pages['German Kabirski']['navProjectType']; ?></h5>
                    </div>
                </div>
            </a>
			
			<?php // HIGHLIGHT 3 - "Superkin" ?>
            <a class="column4 item" href="<?php echo $pages['Superkin']['url']; ?>" data-url="<?php echo $pages['Superkin']['url']; ?>" title="Superkin">
                <img src="<?php echo $pages['Superkin']['navImg']; ?>" alt="Preview of Superkin">
                <div class="hover-group">
                    <div class="hover-group-inner">
                        <h3 class="h3 project-category"><span>New Work</span></h3>
                        <hr>
                        <h4 class="h4 project-name">Superkin</h4>
                        <h5 class="h5 project-type"><?php echo $pages['Superkin']['navProjectType']; ?></h5>
                    </div>
                </div>
            </a>
			
			<?php // HIGHLIGHT 4 - "First Day" ?>
            <a class="column4 item" href="<?php echo $pages['First Day']['url']; ?>" data-url="<?php echo $pages['First Day']['url']; ?>" title="First Day">
                <img src="<?php echo $pages['First Day']['navImg']; ?>" alt="Preview of First Day">
                <div class="hover-group">
                    <div class="hover-group-inner">
                        <h3 class="h3 project-category"><span>New Work</span></h3>
                        <hr>
                        <h4 class="h4 project-name">First Day</h4>
                        <h5 class="h5 project-type"><?php echo $pages['First Day']['navProjectType']; ?></h5>
                    </div>
                </div>
            </a>

			<?php // HIGHLIGHT 5 - "Styleseat" ?>
            <a class="column4 item" href="<?php echo $pages['Styleseat']['url']; ?>" data-url="<?php echo $pages['Styleseat']['url']; ?>" title="Styleseat">
                <img src="<?php echo $pages['Styleseat']['navImg']; ?>" alt="Preview of Styleseat">
                <div class="hover-group">
                    <div class="hover-group-inner">
                        <h3 class="h3 project-category"><span>New Work</span></h3>
                        <hr>
                        <h4 class="h4 project-name">Styleseat</h4>
                        <h5 class="h5 project-type"><?php echo $pages['Styleseat']['navProjectType']; ?></h5>
                    </div>
                </div>
            </a>
			
			<?php // HIGHLIGHT 6 - "Biossance" ?>
            <a class="column4 item" href="<?php echo $pages['Biossance']['url']; ?>" data-url="<?php echo $pages['Biossance']['url']; ?>" title="Biossance">
                <img src="<?php echo $pages['Biossance']['navImg']; ?>" alt="Preview of Biossance">
                <div class="hover-group">
                    <div class="hover-group-inner">
                        <h3 class="h3 project-category"><span>New Work</span></h3>
                        <hr>
                        <h4 class="h4 project-name">Biossance</h4>
                        <h5 class="h5 project-type"><?php echo $pages['Biossance']['navProjectType']; ?></h5>
                    </div>
                </div>
            </a>
			
            <div class="common-center"><a href="work" class="button">See All Projects<br><?php echo $svg_icon_arrow; ?></a></div>
        </div>
    </section>



    <?php // SERVICES ?>
    <section id="services">
        <div class="container12">
            <h2 class="screen-reader-only">Our Services</h2>
            <h3 class="h2 section-title">Yes, We Are.</h3>
            <hr class="title-underline">
            <p class="section-subtitle">Bartlett Brands is an award-winning boutique branding agency.
From cosmetics to consumables, we bring the all-girl power to creating brands that challenge the status and cut through the quo.</p>
            <p class="common-center">Our snappy strategies, stylish stories and standout designs attract the attention of even the world’s most distracted humans, engaging and entertaining them for the long haul. We never met a branding boundary we couldn’t break.</p>

            <h3 class="h2 section-title">Yes, We Do.</h3>
            <hr class="title-underline">

            <?php // Strategy ?>
            <a class="service-item column2 prefix1" href="work?filter=strategy">
                <div class="services-icon">
                    <img src="assets/img/ICONS/services-strategy.png" alt="Strategy Icon" />
                    <img src="assets/img/ICONS/services-strategy-hover.png" alt="Strategy Hover Icon" />
                </div>
                <h3 class="h3 services-title">Strategy</h3>
                <h6 class="h6 services-list">Audits</br>Research</br>Workshops</br>Recommendations</h6>
            </a>
            <?php // Branding ?>
            <a class="service-item column2" href="work?filter=branding">
                <div class="services-icon">
                    <img src="assets/img/ICONS/services-branding.png" alt="Strategy Icon" />
                    <img src="assets/img/ICONS/services-branding-hover.png" alt="Strategy Hover Icon" />
                </div>
                <h3 class="h3 services-title">Branding</h3>
                <h6 class="h6 services-list">Naming</br>Positioning</br>Identity</br>Guidelines</h6>
            </a>
            <?php // Messaging ?>
            <a class="service-item column2" href="work?filter=messaging">
                <div class="services-icon">
                    <img src="assets/img/ICONS/services-messaging.png" alt="Strategy Icon" />
                    <img src="assets/img/ICONS/services-messaging-hover.png" alt="Strategy Hover Icon" />
                </div>
                <h3 class="h3 services-title">Messaging</h3>
                <h6 class="h6 services-list">Taglines</br>Copywriting</h6>
            </a>
            <?php // Design ?>
            <a class="service-item column2" href="work?filter=design">
                <div class="services-icon">
                    <img src="assets/img/ICONS/services-design.png" alt="Strategy Icon" />
                    <img src="assets/img/ICONS/services-design-hover.png" alt="Strategy Hover Icon" />
                </div>
                <h3 class="h3 services-title">Design</h3>
                <h6 class="h6 services-list">Packaging</br>Collateral</br>Websites</br>Apps</h6>
            </a>
            <?php // Marketing ?>
            <a class="service-item column2" href="work?filter=marketing">
                <div class="services-icon">
                    <img src="assets/img/ICONS/services-marketing.png" alt="Strategy Icon" />
                    <img src="assets/img/ICONS/services-marketing-hover.png" alt="Strategy Hover Icon" />
                </div>
                <h3 class="h3 services-title">Marketing</h3>
                <h6 class="h6 services-list">Campaigns</br>Photography</br>Video</br>Email</br>Social Media</h6>
            </a>

        </div>
    </section>



    <?php // SERVICES-STATEMENT ?>
    <section class="parallax" id="services-statement">
        <div class="container12">

            <h3 class="h2 section-title">Our Planet-First Pledge</h3>
            <hr class="title-underline">
            <p class="section-subtitle">We're committed to helping our clients make the most environmentally sustainable decisions for their products and packaging. As we create the next generation of brands, we are on the forefront of innovative solutions that make the earth and our hearts happy.</p>

        </div>
    </section>



    <?php // CLIENTS ?>
    <section id="clients">
        <div class="container12">

            <h2 class="h2 section-title">A Few Of Our Clients</h2>
            <hr class="title-underline">

			<div class="column2 prefix1">
                <img src="assets/img/CLIENTS/clients-paulaschoice.jpg" alt="Paula's Choice Logo">
            </div>
			<div class="column2">
                <img src="assets/img/CLIENTS/clients-kendo.jpg" alt="Kendo Logo">
            </div>
			<div class="column2">
                <img src="assets/img/CLIENTS/clients-biossance.jpg" alt="Biossance Logo">
            </div>
            <div class="column2">
                <img src="assets/img/CLIENTS/clients-mina.jpg" alt="Mina Logo">
            </div>
			<div class="column2">
                <img src="assets/img/CLIENTS/clients-patchology.jpg" alt="Patchology Logo">
            </div>
			<div class="column2 prefix1">
                <img src="assets/img/CLIENTS/clients-crabtreeandevelyn.jpg" alt="Crabtree and Evelyn Logo">
            </div>
			<div class="column2">
                <img src="assets/img/CLIENTS/clients-sonomabrands.jpg" alt="Sonoma Brands Logo">
            </div>
			<div class="column2">
                <img src="assets/img/CLIENTS/clients-randf.jpg" alt="Rodan and Fields Logo">
            </div>
            <div class="column2">
                <img src="assets/img/CLIENTS/clients-williamssonoma.jpg" alt="Williams Sonoma Logo">
            </div>
            <div class="column2">
                <img src="assets/img/CLIENTS/clients-ipsy.jpg" alt="Ipsy Logo">
            </div>

        </div>
    </section>



    <?php // CLIENT COMPLIMENTS ?>
    <section id="client-compliments">
        <div class="container12">
            <h2 class="h2 section-title">In Their Own Words</h2>
            <hr class="title-underline">
        </div>

        <div class="container12">
            <div class="column6">
                <p class="common-center"><q>Crabtree &amp; Evelyn is building a revolutionary brand. Bartlett Brands didn’t just understand our vision—they shared it. They are not an agency, they are us. When you like the people, it all becomes an adventure you love.</q></p>
                <h4 class="h2 compliment-name">David Stern</h4>
                <h6 class="h6 compliment-position">CEO, Crabtree &amp; Evelyn</h6>
            </div>
            <div class="column6">
                <p class="common-center"><q>One-of-a-kind. They represent the future of brand building—a dynamic, restless and obsessive team that won’t settle. Trust in the process, buckle up and enjoy the ride.</q></p>
                <h4 class="h2 compliment-name">James Rangihika</h4>
                <h6 class="h6 compliment-position">CEO, Ao Skincare</h6>
            </div>
        </div>
        <div class="container12">
            <div class="column6">
                <p class="common-center"><q>I loved working with Bartlett Brands. They brought an insightful, creative perspective from outside my industry, which is exactly what I needed. I strongly recommend them.</q></p>
                <h4 class="h2 compliment-name">Paul Arnold</h4>
                <h6 class="h6 compliment-position">Startup Investor, Switch VC</h6>
            </div>
            <div class="column6">
                <p class="common-center"><q>Bartlett Brands’ strategic vision and deep knowledge of the beauty industry guided our rebrand and launch in Sephora. They think big and demand perfection. I'd recommend them to anyone.</q></p>
                <h4 class="h2 compliment-name">Caroline Hadfield</h4>
                <h6 class="h6 compliment-position">SVP of Personal Care, Biossance</h6>
            </div>
        </div>
    </section>



    <?php // TEAM ?>
    <section id="team">
        <div class="container12">

            <h2 class="h2 section-title">Team</h2>
            <hr class="title-underline">
            <p class="section-subtitle">Idea makers. Art creators. Story shapers. Industry shakers.</p>

        </div>
        <div class="container12">

            <?php /* Insert Teammate Navigation */ echo $teammateNav; ?>

        </div>
    </section>



    <?php // AS SEEN IN ?>
    <section id="promos">
        <div class="container12">

            <h2 class="h2 section-title">Awards</h2>
            <hr class="title-underline">

        </div>
        <div class="container12">

            <div class="item column4">
                <img src="assets/img/PROMOS/logo-wwd-black.png" alt="WWD">
            </div>
			<div class="item column4">
                <img src="assets/img/PROMOS/logo-adc-black.png" alt="Art Directors Club">
            </div>
            <div class="item column4">
                <img src="assets/img/PROMOS/logo-fastco-black.png" alt="Fast Company">
            </div>

        </div>

        <div class="container12">

            <div class="item column4">
                <img src="assets/img/PROMOS/logo-graphis.png" alt="Graphis">
            </div>
            <div class="item column4">
                <img src="assets/img/PROMOS/logo-clio-black.png" alt="Clio">
            </div>
            <div class="item column4">
                <img src="assets/img/PROMOS/logo-dieline-color.png" alt="Beauty ID Awards">
            </div>

        </div>
    </section>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
