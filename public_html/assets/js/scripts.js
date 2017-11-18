$(document).ready(function(){

    // GET URLS TO TRIGGER ISOTOPE FILTERS ON WORK PAGE
    // these exist outside of rerunOnResize() because i only want this to run on page load, not over-and-over
    // @from: https://stackoverflow.com/questions/19491336/get-url-parameter-jquery
    function getUrlParameter(sParam) {
        var sPageUrl = window.location.search.substring(1);
        var sUrlVariables = sPageUrl.split('&');
        for (var i = 0; i < sUrlVariables.length; i++) {
            var sParameterName = sUrlVariables[i].split('=');
            if (sParameterName[0] === sParam) {
                return sParameterName[1];
            }
        }
    };

    // now use function to set url variables
    var urlFilter = getUrlParameter('filter');

    if (urlFilter === 'branding') {
        $(window).load(function() {
            $('#portfolioFilters #link-branding a').click();
        });
    } else if(urlFilter === 'design') {
        $(window).load(function() {
            $('#portfolioFilters #link-design a').click();
        });
    } else if(urlFilter === 'marketing') {
        $(window).load(function() {
            $('#portfolioFilters #link-marketing a').click();
        });
    } else if(urlFilter === 'messaging') {
        $(window).load(function() {
            $('#portfolioFilters #link-messaging a').click();
        });
    } else if(urlFilter === 'strategy') {
        $(window).load(function() {
            $('#portfolioFilters #link-strategy a').click();
        });
    };


    // COOKIES
    // @from: http://www.pontikis.net/blog/create-cookies-php-javascript
    // create cookie function
    // @param {string} name cookie name
    // @param {string} value cookie value
    // @param {int} daysToExpire
    // @param {string} path
    function createCookie(name, value, daysToExpire, path) {
        var date = new Date();
        date.setTime(date.getTime() + (daysToExpire * 24 * 60 * 60 * 1000));
        var expires = date.toUTCString();
        document.cookie = name + '=' + value + ';' + 'expires=' + expires + ';' + 'path=' + path + ';';
    }
    // retrieve cookie function
    // @param {string} name cookie name
    function retrieveCookie(name) {
        var cookieValue = "",
            currentCookie = "",
            nameExpr = name + "=",
            allCookies = document.cookie.split(';'),
            allCookieCount = allCookies.length;

        for (var i = 0; i < allCookieCount; i++) {
            currentCookie = allCookies[i].trim();
            if (currentCookie.indexOf(nameExpr) === 0) {
                cookieValue = currentCookie.substring(nameExpr.length, currentCookie.length);
                break;
            }
        }
        return cookieValue;
    }


    // MODALS
    $('.modal .close-button').click(function() {
        $(this).closest('.modal').removeClass('modal--visible');
    });

    // find if cookie is shown
    var cookieName = 'bartlettBrands_emailSignup_modal';
    var hasCookie = retrieveCookie(cookieName);

    if (!hasCookie) {
        $('#modal-email').addClass('modal--visible');
        var cookieValue = 'yayyy_they_came_to_our_site';
        // expire in 1 year
        createCookie(cookieName, cookieValue, 365, '/' );
        // google analytics -- show when modal shows
        dataLayer.push({'event': 'newsletterModal'});
    }


    // BG ITERATION
    // the flashing image banner for the home page
    var bgImgCount = $('.bg-images .bg-img').length - 1,
        bgImgNumber = 0;

    // only call function if the bg-images wrapper div exists on the page
    if ($('.bg-images').length > 0) showBgImage();

    function showBgImage() {
        // remove current 'prev' class
        $('.bg-img.bg-img--prev').removeClass('bg-img--prev');
        // set the current active to 'prev'
        $('.bg-img.bg-img--active').addClass('bg-img--prev');
        // set the current img to active
        $('.bg-img--item-' + bgImgNumber).addClass('bg-img--active');
        // now remove the active from the .active.prev img
        $('.bg-img.bg-img--active.bg-img--prev').removeClass('bg-img--active');

        // setup next img number
        (bgImgNumber === bgImgCount)? bgImgNumber = 0 : bgImgNumber++;

        // use timeout to wait on calling the function again.
        window.setTimeout(function() {
            showBgImage();
        }, 3000);
    }


    // INSERT FB JUST AFTER BODY TAG
    // $('body.project-page').prepend('<script src="assets/js/fblike.custom.min.js"></script>');
    $('body.project-page').prepend('<div id="fb-root"></div><script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=810711155666320&version=v2.0"; fjs.parentNode.insertBefore(js, fjs);}(document, "script", "facebook-jssdk"));</script>');


    // INSERT PINTEREST JUST BEFORE CLOSING BODY TAG
    $('body.project-page').append('<script type="text/javascript" async defer data-pin-color="white" data-pin-hover="true" src="//assets.pinterest.com/js/pinit.js"></script>');


    // VARIABLES FOR RUN ON RESIZE
    // these vars i don't want to override when i rerun the function
    var homePage = $('body.home-page'),
        logoContent = $('#welcome .content-wrap'),
        logoImg = $('#welcome .content-wrap .logo.hidden-mobile'),
        logoGroup = $('#welcome .logogroup'),
        welcomeHeight,
        logoContentHeight,
        logoImgHeight,
        logoGroup_width,
        isMobile = false,
        isSmallMobile = false,
        isHomePage = false,
        isLogoLoaded = false;

    // RERUN ON RESIZE
    // just all the stuff that should get recalculated when a browser resizes.
    // screen changes could be b/c of development or b/c of mobile-related screen size changes on scroll, or anything else
    function rerunOnResize() {

        logoGroup.removeClass('logogroup--hide-elements-when-short');

        // VARIABLES
        var winHeight = $(window).height(),
            winWidth = $(window).width(),
            navbarHeight = $('#navbar').innerHeight(),
            contactTop = $('#contact').offset().top;

        if (homePage.length) {
            isHomePage = true;
            welcomeHeight = $('#welcome').innerHeight();
            logoContentHeight = logoContent.innerHeight();
            logoImgHeight = logoImg.height();
            logoGroupWidth = logoGroup.width();
            logoGroupOffset = logoGroup.offset().left;
            logoGroupOffsetRight = logoGroupOffset + logoGroupWidth + 30;
        }


        // SET AS MOBILE
        // if really mobile, the code has a .mobile class
        if ($('body.mobile').length) isMobile = true;
        // if fake mobile (like dev testing), set as mobile anyway
        if ((winHeight < 481 || winWidth < 481) && isMobile === true) isSmallMobile = true;


        // SET 'STICKY WRAPPER' NAVBAR HEIGHT
        // helps with funky jump when nav becomes affixed on home page
        $('.sticky-wrapper').css({height: navbarHeight});


        // RUN THIS ONLY ON HOME PAGE
        if (isHomePage === true) {

            // SET BG IMG HEIGHT
            // this fixes a bg-img height 'jump' that happens on mobile browsers
            $('style[data-name="bg-img-pos"]').remove();
            $('.bg-img').css({height: welcomeHeight});
            $('.bg-images').prepend('<style data-name="bg-img-pos">.bg-img {background-position: ' + logoGroupOffsetRight + 'px 0;}</style>');

            // SET LOGO HEIGHT
            function getLogoImgHeight() {
                if (isLogoLoaded === false) {
                    logoImg.load(function() {
                        logoImgHeight = logoImg.height();
                        logoContentHeight = logoContent.innerHeight();
                        isLogoLoaded = true;
                        hideElemWhenShort();
                    });
                } else {
                    hideElemWhenShort();
                }
            }
            getLogoImgHeight();

            // REMOVE WELCOME CONTENT WHEN VIEWPORT IS SMALL
            function hideElemWhenShort() {
                console.log("run 4");
                if ((welcomeHeight - navbarHeight) < (logoContentHeight + 30)) {
                    logoGroup.addClass('logogroup--hide-elements-when-short');
                }
            }
        }


        // BEGIN FUNCTIONS THAT DEAL WITH SCROLLING
        // only use when tablet or bigger. JS slows down scrolling
        if (isSmallMobile === false) {
            $(document).scroll(function() {
                var logoTop = $(this).scrollTop();

                // SET LOGO GROUP MOVEMENT ON SCROLL
                // if these positions sit higher than the document, set it's position to 0
                if(logoTop < 0) logoTop = 0;
                if(logoTop > contactTop) logoTop = 0;
                // now set the logogroup top position based on scroll variable calculation
                if(!homePage.hasClass('home-page--test')) {
                    $('.logogroup').css({top: logoTop});
                }

            });
        };


    }; // end runeverything()
    rerunOnResize();


    // RERUN JS ON WINDOW RESIZE
    // helpful for development, but also when you have a window cut into the client screen. issues can arise when opening and closing internal client windows. this just helps remove those issues
    // @from: http://stackoverflow.com/questions/22720595/re-run-js-script-on-window-resize-or-mobile-screen-change
    // @from: http://stackoverflow.com/questions/7280307/resize-javascript-window
    $(window).resize(function() {
        rerunOnResize();
    }).resize();

});
