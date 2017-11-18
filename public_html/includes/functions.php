<?php
// BEGIN FUNCTIONS INCLUDES FILE
// @has: functions + variables
// @requires: svg-images.php, site-data.php


// GET CURRENT PAGE URL
// @var: string
// NOTE - Brian Zoetewey wrote this. not quite sure what it's for, but I keep it around cause it did something.
$currentScript = substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/') + 1);
$currentUrl = str_replace('.php', '', $currentScript);


// SHARES
$fbShare = '<div class="fb-like" data-href="http://bartlettbrands.com' . $_SERVER['REQUEST_URI'] . '" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>';
$pinShare = '<a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="white"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_white_20.png" /></a>';


// MAILCHIMP EMIAL
$emailSignup = '
<form action="http://rebeccabartlett.us7.list-manage.com/subscribe/post?u=ea8809791249ba98e2379bcb8&amp;id=60dbd1ac33" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
    <div class="mc-field-group">
        <h3 class="h3 contact-header"><label for="mce-EMAIL">Get Emails From Us</label></h3>
        <div class="row">
            <input type="email" value="" name="EMAIL" placeholder="Enter email address" class="required email" id="mce-EMAIL">
        </div>
    </div>

    <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response"></div>
        <div class="response" id="mce-success-response"></div>
    </div>' .

    // real people should not fill this in and expect good things - do not remove this or risk form bot signups
    '<div class="move-off-screen"><input type="text" name="b_ea8809791249ba98e2379bcb8_60dbd1ac33" tabindex="-1" value=""></div>
    <button type="submit" value="" name="Subscribe" id="mc-embedded-subscribe" class="button" onclick="dataLayer.push({\'event\':\'newsletterModalSuccess\'});">'. $svg_icon_arrow . '</button>
</form>';



// MAIN NAV
// @script
// NOTE - sets up pages links to use .scroll on home page correctly
$nav = '
<header id="navbar" class="main">
    <div class="container12">

        <div class="logo">';
        // remove class="scroll". the js somehow gets confused with this class.
        if ('index' === $currentUrl) {
            $nav .= '<a href="#welcome" class="scroll">';
        } else {
            $nav .= '<a href="/#welcome">';
        };

        $nav .= '
                <p class="hidden-mobile">Bartlet<span class="last-letter">t</span><br>Brand<span class="last-letter">s</span></p>
                <img class="hidden-desktop" src="assets/img/brand-logoicon-alt.png" alt="B" nopin="nopin">
            </a>
        </div>

        <nav>
            <ul>';
                if ('work' === $currentUrl) {
                    $nav .= '<li class="active"><a href="work">Projects</a></li>';
                } else {
                    $nav .= '<li><a href="work">Projects</a></li>';
                };

                // same as above
                if ('index' === $currentUrl) {
                    $nav .= '
                    <li><a href="#services" class="scroll">What We Do</a></li>
                    <li><a href="#clients" class="scroll">Clients</a></li>
                    <li><a href="#team" class="scroll">Team</a></li>';
                } else {
                    $nav .= '
                    <li><a href="/#services">What We Do</a></li>
                    <li><a href="/#clients">Clients</a></li>
                    <li><a href="/#team">Team</a></li>';
                };

                $nav .= '
                <li><a href="#contact" class="scroll">Contact</a></li>
                <li><a href="blog">Blog</a></li>
            </ul>
        </nav>' .

        // Menu icon for Phones
        '<span class="menu hidden-desktop" id="phonesMenu"></span>

    </div>
</header>';



// BACKGROUND IMAGES ROTATION
// @script
// NOTE - This is just on the homepage
$currentBg = '';
// $currentBgName = '';
$bgImages = '';
$i = 0;
foreach ($bgs as $ID => $img) {
    $currentBgName = $ID;
    $currentBg = $img;
    $bgImages .= '
    <div class="bg-img bg-img--item-' . $i . '">
        <style>
            .bg-img--item-' . $i . ' {
                background-image: url("/assets/img/BGS/' . $currentBg['filename'] . '");
                background-color: ' . $currentBg['hexcolor'] . ';
            }
        </style>
    </div>';
    $i++;
};



// TEAMMATE NAV
// @script
// NOTE - This is just on the homepage
$currentTeammate = '';
$currentTeammateName = '';
$teammateNav = '';
foreach ($pages as $ID => $page) {
    $currentTeammate = $page;
    $currentTeammateName = $ID;
    if ($currentTeammate['pageType'] === 'teammate' && $currentTeammate['navIsActive'] === true && $currentTeammate['url'] != $currentUrl) {
        $teammateNav .= '
        <a class="item ';
        if ('index' === $currentUrl || 'index-test' === $currentUrl) {
            $teammateNav .= 'column4"';
        } else {
            $teammateNav .= 'column3 prefix1_2"';
        };
        if ('index' != $currentUrl && 'index-test' != $currentUrl && $currentTeammate['jobPosition'] === 'Join the Team') {
            $teammateNav .= ' style="display:none;"';
        }
        $teammateNav .= ' href="' . $currentTeammate['url'] . '" data-url="' . $currentTeammate['url'] . '" title="' . $currentTeammateName . '">
            <img src="' . $currentTeammate['imgPortraitFull'] . '" alt="' . $currentTeammateName . '&#8217;s Profile Photo">';
            if ('index' === $currentUrl || 'index-test' === $currentUrl) {
                $teammateNav .= '
                <div class="hover-group">
                    <div class="hover-group-inner">
                        <h3 class="h3 teammate-position">' . $currentTeammate['jobPosition'] . '</h3>
                        <hr>
                        <h4 class="h4 teammate-name">' . $currentTeammateName . '</h4>';
                        if ($currentTeammate['jobPosition'] != 'Join the Team') {
                            $teammateNav .= '<h5 class="h5 teammate-bio">Bio</h5>'
                            . $svg_icon_arrow;
                        }
                    $teammateNav .= '</div>
                </div>';
            };
        $teammateNav .= '</a>';
    };
};



// PROJECT NAV
// Set up project navigation based on $pages array
// @script
// NOTE - proper content is returned based on page name. exists on work page and project pages
$currentProject = '';
$currentProjectName = '';
$projectNav = '';
foreach ($pages as $ID => $page) {
    $currentProject = $page;
    $currentProjectName = $ID;
    // get all active projects except current page project
    if (($currentProject['pageType'] === 'project' || $currentProject['pageType'] === 'projectGroup') && ($currentProject['navIsActive'] === true) && ($currentProject['url'] != $currentUrl)) {
        $projectNav .= '
        <a href="' . $currentProject['url'] .'" data-url="' . $currentProject['url'] .'" title="' . $currentProjectName .'" class="column4 item portfolioItem ' . $currentProject['navSortingClasses'] .'">
            <img src="' . $currentProject['navImg'] .'" alt="' . $currentProjectName .'" nopin="nopin">
            <h3 class="h2 project-name">' . $currentProjectName .'</h3>
            <h6 class="h6 project-type">' . $currentProject['navProjectType'] .'</h6>
        </a>';
    };
};



// ALL CONTENT ASSOCIATED WITH CURRENTLY VIEWED PAGES
$currentPage = '';
$currentPageName = '';
$uniquePageHeader = '';
$teammatePageContent = '';
$projectPageContent_top = ''; // top requires bottom
$projectPageContent_bottom = ''; // bottom requires top

foreach ($pages as $ID => $page) {
    $currentPage = $page;
    $currentPageName = $ID;


    // PAGE HEAD
    // @script
    if ($currentPage['url'] === $currentUrl) {
        $uniquePageHeader = '
            <meta name="description" content="' . $currentPage['metaDescription'] . '">

            <title>';
        if ($currentPageName !== '') {
            $uniquePageHeader .= $currentPageName . ' | ';
        };
        $uniquePageHeader .= $site['site-wide-title'] . '</title>
            <!-- Facebook -->
            <meta property="og:image"     content="' . $currentPage['fbOgImageUrl'] . '">
            <meta property="og:title"     content="' . $currentPageName . '">
            <meta property="og:url"       content="http://bartlettbrands.com' . $_SERVER['REQUEST_URI'] . '">
            <meta property="og:site_name" content="Bartlett Brands Branding &amp; Design Studio">';
    };


    // TEAMMATE PROFILE CONTENT
    // @script
    if ($currentPage['pageType'] === 'teammate' && $currentPage['url'] === $currentUrl) {
        $teammatePageContent = '
        <section id="team-content">
            <div class="container12">
                <div class="column4">
                    <img class="headshot" src="' . $currentPage['imgPortraitSquare'] . '" alt="' . $currentPageName .'">
                </div>
                <div class="column8">
                    <header class="page-header clearfix">
                        <h1 class="temmate-name">';
                        if ($currentPage['htmlSpecialName'] !== '') {
                            $teammatePageContent .= $currentPage['htmlSpecialName'];
                        } else {
                            $teammatePageContent .= $currentPageName;
                        }
                        $teammatePageContent .=  '</h1>
                    </header>
                    <hr>
                    <div class="page-subheader clearfix">
                        <h3 class="h2 teammate-position"><span class="position-title-header">Position:</span> <span class="position-title">' . $currentPage['jobPosition'] . '</span></h3>
                        <div class="social-icons clearfix">';
                            if ($currentPage['urlInstagram'] !== '') {
                                $teammatePageContent .= '<a href="' . $currentPage['urlInstagram'] . '" target="_blank" class="icon-instagram">' . $svg_icon_instagram_square . '</a>';
                            };
                            if ($currentPage['urlLinkedin'] !== '') {
                                $teammatePageContent .= '<a href="' . $currentPage['urlLinkedin'] . '" target="_blank" class="icon-linkedin">' . $svg_icon_linkedin_square . '</a>';
                            };
                            if ($currentPage['urlTumblr'] !== '') {
                                $teammatePageContent .= '<a href="' . $currentPage['urlTumblr'] . '" target="_blank" class="icon-tumblr">' . $svg_icon_tumblr_square . '</a>';
                            };
                        $teammatePageContent .= '</div>
                    </div>
                    <div class="page-info">' . $currentPage['htmlBio'] . '</div>
                </div>
            </div>
        </section>

        <section id="team-nav">
            <div class="container12">
                <div class="nav-wrap">
                    <h2 class="h2 section-title">Our Team</h2>
                    <hr class="title-underline">'
                    . $teammateNav . '
                </div>
            </div>
        </section>';
    };


    // PROJECTS PAGE UPPER CONTENT and PROJECTS IN HOUSE CONTENT
    // Does note include images
    // @script
    if (($currentPage['pageType'] === 'project' || $currentPage['pageType'] === 'projectGroup') && ($currentPage['url'] === $currentUrl)) {
        $projectPageContent_top = '
        <section id="project-content">
            <div class="container12">
                <header class="page-header clearfix">
                    <div class="column4">
                        <h1 class="project-name">';
                        if ($currentPage['htmlSpecialName'] !== '') {
                            $projectPageContent_top .= $currentPage['htmlSpecialName'];
                        } else {
                            $projectPageContent_top .= $currentPageName;
                        }
                        $projectPageContent_top .=  '</h1>
                    </div>
                </header>

                <hr>';

                // project groups, like "typography", have a slimmer layout for now
                if ($currentPage['pageType'] === 'projectGroup') {
                    $projectPageContent_top .= '
                    <div class="column12">
                        <div class="page-side-info">
                            <div class="sharing-icons clearfix">' . $fbShare . $pinShare . '</div>
                        </div>
                    </div>';
                // project pages have a fuller introduction
                } elseif ($currentPage['pageType'] === 'project') {
                    $projectPageContent_top .= '
                    <div class="column4">
                        <div class="page-side-info">';

                            if ($currentPage['client'] !== '') {
                                $projectPageContent_top .= '
                                <h3 class="h2 side-header">Client</h3>
                                <h5 class="h5 side-value">' . $currentPage['client'];
                                    if ($currentPage['clientIsInHouse'] === true) {
                                        $projectPageContent_top .= '*';
                                    };
                                $projectPageContent_top .= '</h5>';
                            };

                            if ($currentPage['projectServices'] !== '') {
                                $projectPageContent_top .= '
                                <h3 class="h2 side-header">Services</h3>
                                <h5 class="h5 side-value">' . $currentPage['projectServices'] . '</h5>';
                            };

                            if ($currentPage['projectSiteName'] !== '' && $currentPage['projectSiteUrl'] !== '') {
                                $projectPageContent_top .= '
                                <h3 class="h2 side-header">Website</h3>
                                <h5 class="h5 side-value"><a href="' . $currentPage['projectSiteUrl'] . '" target="_blank">' . $currentPage['projectSiteName'] . '</a></h5>';
                            };

                            $projectPageContent_top .= '
                            <h3 class="h2 side-header">Share</h3>
                            <div class="sharing-icons clearfix">' . $fbShare . $pinShare . '</div>
                        </div>
                    </div>
                    <div class="column8">
                        <div class="page-info">' . $currentPage['projectHtmlDesc'] . '</div>
                    </div>

                    <hr>';

                }; // end ELSEIF

                $projectPageContent_top .= '
                    <div class="column12">
                        <div class="project-visuals">';


                            // IMAGES AND VIDEOS AND IFRAMES GO HERE ON THE PAGE ITSELF


                            // START PROJECT PAGE CONTENT BOTTOM
                            if ($currentPage['clientIsInHouse'] === true) {
                                $projectPageContent_bottom .= '<div class="img-caption"><p>*in house</p></div>';
                            };

                        $projectPageContent_bottom .='
                    </div>
                </div>
            </div>
        </section>

        <section id="project-nav">
            <div class="container12">
                <div class="nav-wrap">
                    <h2 class="h2 section-title">Other Projects</h2>
                    <hr class="title-underline">'
                    . $projectNav . '
                </div>
            </div>
        </section>';
    };

}; // END FOREACH for All Content

?>
