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



<body class="home-page home-page--v1">

    <div class="bg-images-fade">
        <div class="bg-img bg-img--fade bg-img--under"></div>
        <div class="bg-img bg-img--fade bg-img--over"></div>
    </div>



    <?php // WELCOME
       // this needs a #welcome because of justmotion.js (whatever that is) ?>
    <section id="welcome">
        <div class="content-wrap">
            <div class="logogroup">
                <img class="logo hidden-mobile" src="assets/img/brand-logo-alt.png" alt="Bartlett Brands">
                <img class="logo hidden-desktop" src="assets/img/brand-logo-mobile.png" alt="Bartlett Brands">
                <h1 class="logo-name">Bartlett Brand<span class="last-letter">s</span></h1>
                <h3 class="logo-subtext">Award-Winning&nbsp;Boutique&nbsp;Branding&nbsp;Agenc<span class="last-letter">y</span></h3>
                <h5 class="logo-location">Based in San Francisco</h5>
            </div>
            <?php echo $svg_icon_arrow; ?>
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

            <?php // HIGHLIGHT 1 - "Ipsy" ?>
            <a class="column4 item" href="<?php echo $pages['Ipsy']['url']; ?>" data-url="<?php echo $pages['Ipsy']['url']; ?>" title="Ipsy">
                <img src="<?php echo $pages['Ipsy']['navImg']; ?>" alt="Preview of Ipsy">
                <div class="hover-group">
                    <div class="hover-group-inner">
                        <h3 class="h3 project-category"><span>New Work</span></h3>
                        <hr>
                        <h4 class="h4 project-name">Ipsy</h4>
                        <h5 class="h5 project-type"><?php echo $pages['Ipsy']['navProjectType']; ?></h5>
                    </div>
                </div>
            </a>

            <?php // HIGHLIGHT 2 - "Colada Shop" ?>
            <a class="column4 item" href="<?php echo $pages['Colada Shop']['url']; ?>" data-url="<?php echo $pages['Colada Shop']['url']; ?>" title="Colada Shop">
                <img src="<?php echo $pages['Colada Shop']['navImg']; ?>" alt="Preview of Colada Shop">
                <div class="hover-group">
                    <div class="hover-group-inner">
                        <h3 class="h3 project-category"><span>New Work</span></h3>
                        <hr>
                        <h4 class="h4 project-name">Colada Shop</h4>
                        <h5 class="h5 project-type"><?php echo $pages['Colada Shop']['navProjectType']; ?></h5>
                    </div>
                </div>
            </a>

            <?php // HIGHLIGHT 3 - "Bravon" ?>
            <a class="column4 item" href="<?php echo $pages['Bravon Beauty']['url']; ?>" data-url="<?php echo $pages['Bravon Beauty']['url']; ?>" title="Bravon Beauty">
                <img src="<?php echo $pages['Bravon Beauty']['navImg']; ?>" alt="Preview of Bravon Beauty">
                <div class="hover-group">
                    <div class="hover-group-inner">
                        <h3 class="h3 project-category"><span>New Work</span></h3>
                        <hr>
                        <h4 class="h4 project-name">Bravon Beauty</h4>
                        <h5 class="h5 project-type"><?php echo $pages['Bravon Beauty']['navProjectType']; ?></h5>
                    </div>
                </div>
            </a>

            <?php // HIGHLIGHT 4 - "Pub 1842" ?>
            <a class="column4 item" href="<?php echo $pages['Pub 1842']['url']; ?>" data-url="<?php echo $pages['Pub 1842']['url']; ?>" title="Pub 1842">
                <img src="<?php echo $pages['Pub 1842']['navImg']; ?>" alt="Preview of Pub 1842">
                <div class="hover-group">
                    <div class="hover-group-inner">
                        <h3 class="h3 project-category"><span>New Work</span></h3>
                        <hr>
                        <h4 class="h4 project-name">Pub 1842</h4>
                        <h5 class="h5 project-type"><?php echo $pages['Pub 1842']['navProjectType']; ?></h5>
                    </div>
                </div>
            </a>

            <?php // HIGHLIGHT 5 - "Camp Collection" ?>
            <a class="column4 item" href="<?php echo $pages['Camp Collection']['url']; ?>" data-url="<?php echo $pages['Camp Collection']['url']; ?>" title="Camp Collection">
                <img src="<?php echo $pages['Camp Collection']['navImg']; ?>" alt="Preview of Camp Collection">
                <div class="hover-group">
                    <div class="hover-group-inner">
                        <h3 class="h3 project-category"><span>New Work</span></h3>
                        <hr>
                        <h4 class="h4 project-name">Camp Collection</h4>
                        <h5 class="h5 project-type"><?php echo $pages['Camp Collection']['navProjectType']; ?></h5>
                    </div>
                </div>
            </a>

            <?php // HIGHLIGHT 6 - "Rodan + Fields" ?>
            <a class="column4 item" href="<?php echo $pages['Rodan + Fields']['url']; ?>" data-url="<?php echo $pages['Rodan + Fields']['url']; ?>" title="Rodan + Fields">
                <img src="<?php echo $pages['Rodan + Fields']['navImg']; ?>" alt="Preview of Rodan + Fields">
                <div class="hover-group">
                    <div class="hover-group-inner">
                        <h3 class="h3 project-category"><span>New Work</span></h3>
                        <hr>
                        <h4 class="h4 project-name">Rodan + Fields</h4>
                        <h5 class="h5 project-type"><?php echo $pages['Rodan + Fields']['navProjectType']; ?></h5>
                    </div>
                </div>
            </a>
            <div class="common-center"><a href="work" class="button">See All Projects<br><?php echo $svg_icon_arrow; ?></a></div>
        </div>
    </section>



    <?php // SERVICES ?>
    <section id="services">
        <div class="container12">
            <h2 class="h2 section-title">Yes, We Are.</h2>
            <hr class="title-underline">
            <p class="section-subtitle">We are an award-winning, boutique branding agency with expertise in creative brand development.</p>
            <p class="common-center">From cosmetics and consumables to restaurants and tech, we craft premium brand experiences that are both relevant and timeless—but never expected. We wear many hats and shades of lipstick but always look best with clients who are as passionate about their projects as we are about&nbsp;ours.</p>

            <h2 class="h2 section-title">Yes, We Do.</h2>
            <hr class="title-underline">

            <?php // Strategy ?>
            <a class="service-item column2 prefix1" href="work?filter=strategy">
                <div class="services-icon">
                    <img src="assets/img/ICONS/services-strategy.png" alt="Strategy Icon" />
                    <img src="assets/img/ICONS/services-strategy-hover.png" alt="Strategy Hover Icon" />
                </div>
                <h3 class="h3 services-title">Strategy</h3>
                <h6 class="h6 services-list">Audits</br>Planning</br>Workshops</br>Recommendations</h6>
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

            <h2 class="h2 section-title"><q>Yes And&hellip;</q> Creative Philosophy</h2>
            <hr class="title-underline">
            <p class="section-subtitle">Based on the fundamental rule of improv, <q>Yes. And&hellip;</q> is about listening first, then collaborating to move a story forward, even when there is no defined script. The result is the creation of something entirely new—unexpected, relevant and&nbsp;interesting.</p>

        </div>
    </section>



    <?php // CLIENTS ?>
    <section id="clients">
        <div class="container12">

            <h2 class="h2 section-title">A Few Of Our Clients</h2>
            <hr class="title-underline">

            <div class="column2 prefix1">
                <img src="assets/img/CLIENTS/client-wine-group.png" alt="Wine Group Logo">
            </div>
            <div class="column2">
                <img src="assets/img/CLIENTS/client-mina.png" alt="Mina Logo">
            </div>
            <div class="column2">
                <img src="assets/img/CLIENTS/client-sephora.png" alt="Sephora Logo">
            </div>
            <div class="column2">
                <img src="assets/img/CLIENTS/client-williams-sonoma.png" alt="Williams Sonoma Logo">
            </div>
            <div class="column2">
                <img src="assets/img/CLIENTS/client-mgm-grand.png" alt="MGM Grand Logo">
            </div>
            <div class="column2 prefix1">
                <img src="assets/img/CLIENTS/client-rodan-fields.png" alt="Rodan Fields Logo">
            </div>
            <div class="column2">
                <img src="assets/img/CLIENTS/client-marin-french-cheese.png" alt="Marin French Cheese Logo">
            </div>
            <div class="column2">
                <img src="assets/img/CLIENTS/clients-beauty-booked.jpg" alt="Beauty Booked Logo">
            </div>
            <div class="column2">
                <img src="assets/img/CLIENTS/clients-ipsy.jpg" alt="Ipsy Logo">
            </div>
            <div class="column2">
                <img src="assets/img/CLIENTS/client-marriott.png" alt="Marriott Logo">
            </div>
            <div class="column2 prefix1">
                <img src="assets/img/CLIENTS/clients-coya.jpg" alt="Coya Logo">
            </div>
            <div class="column2">
                <img src="assets/img/CLIENTS/clients-patchology.jpg" alt="Patchology Logo">
            </div>
            <div class="column2">
                <img src="assets/img/CLIENTS/clients-la-mienne.jpg" alt="La Mienne Logo">
            </div>
            <div class="column2">
                <img src="assets/img/CLIENTS/clients-quay.jpg" alt="Quay Australia Logo">
            </div>
            <div class="column2">
                <img src="assets/img/CLIENTS/clients-naya.jpg" alt="Naya Logo">
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
                <p class="common-center"><q>I have worked with Bartlett Brands at two different restaurant companies, COYA and the MINA Group. The team is dedicated, detailed and delivers the highest quality every time, on time. Rebecca has never promised and not come through. She is well connected and up to speed with all the trends in our&nbsp;industry.</q></p>
                <h4 class="h2 compliment-name">Yavuz Pehlivanlar</h4>
                <h6 class="h6 compliment-position">C.E.O. COYA Americas</h6>
            </div>
            <div class="column6">
                <p class="common-center"><q>Rebecca and her team at Bartlett Brands have been invaluable partners to us. They helped us refine our brand strategy and then executed it with excellence on package design, copy and collateral. They are a trusted and valued extension of our marketing team. I recommend them and would work with them again in a heartbeat.</q></p>
                <h4 class="h2 compliment-name">Chris Hobson</h4>
                <h6 class="h6 compliment-position">C.E.O. &amp; President, Patchology</h6>
            </div>
        </div>
        <div class="container12">
            <div class="column6">
                <p class="common-center"><q>I loved working with Bartlett Brands. It’s a joy working with their talented team. They brought a fresh, creative perspective from outside my industry, which is exactly what I needed. I strongly recommend&nbsp;them.</q></p>
                <h4 class="h2 compliment-name">Paul Arnold</h4>
                <h6 class="h6 compliment-position">Startup Investor, Switch VC</h6>
            </div>
            <div class="column6">
                <p class="common-center"><q>With unparalleled understanding of the business needs and challenges unique to the beauty industry, Bartlett Brands is one of the only studios that has experience bridging beauty and&nbsp;technology.</q></p>
                <h4 class="h2 compliment-name">Hillary Hutchenson</h4>
                <h6 class="h6 compliment-position">Co-Founder at BeautyBooked</h6>
            </div>
        </div>
    </section>



    <?php // TEAM ?>
    <section id="team">
        <div class="container12">

            <h2 class="h2 section-title">Team</h2>
            <hr class="title-underline">
            <p class="section-subtitle">Idea makers. Art creators. Story shapers. Industry shakers. And good&nbsp;people.</p>
            <p class="section-subtitle">We love talented people. Send your portfolio and resume to <a href=mailto:hello@bartlettbrands.com?subject=JobInquiry>hello@bartlettbrands.com</a>.</p>

        </div>
        <div class="container12">

            <?php /* Insert Teammate Navigation */ echo $teammateNav; ?>

        </div>
    </section>



<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-app-footer.php' );
?>
