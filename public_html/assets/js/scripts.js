$(document).ready(function(){

    // GET URLS TO TRIGGER ISOTOPE FILTERS ON WORK PAGE
    // these exist outside of rerunOnResize() because i only want this to run on page load, not over-and-over
    // @from: https://stackoverflow.com/questions/19491336/get-url-parameter-jquery
    function getURLParameter(sParam) {
        var sPageURL = window.location.search.substring(1);
        var sURLVariables = sPageURL.split('&');
        for (var i = 0; i < sURLVariables.length; i++) {
            var sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] == sParam) {
                return sParameterName[1];
            }
        }
    };

    // now use function to set url variables
    var url_filter = getURLParameter('filter');

    if (url_filter == 'branding') {
        $(window).load(function() {
            $('#portfolioFilters #link-branding a').click();
        });
    } else if(url_filter == 'design') {
        $(window).load(function() {
            $('#portfolioFilters #link-design a').click();
        });
    } else if(url_filter == 'marketing') {
        $(window).load(function() {
            $('#portfolioFilters #link-marketing a').click();
        });
    } else if(url_filter == 'messaging') {
        $(window).load(function() {
            $('#portfolioFilters #link-messaging a').click();
        });
    } else if(url_filter == 'strategy') {
        $(window).load(function() {
            $('#portfolioFilters #link-strategy a').click();
        });
    };


    // COOKIES
    // @from: http://www.pontikis.net/blog/create-cookies-php-javascript
    // create cookie function
    // @param {string} name cookie name
    // @param {string} value cookie value
    // @param {int} days2expire
    // @param {string} path
    function create_cookie(name, value, days2expire, path) {
        var date = new Date();
        date.setTime(date.getTime() + (days2expire * 24 * 60 * 60 * 1000));
        var expires = date.toUTCString();
        document.cookie = name + '=' + value + ';' + 'expires=' + expires + ';' + 'path=' + path + ';';
    }
    // retrieve cookie function
    // @param {string} name cookie name
    function retrieve_cookie(name) {
        var cookie_value = "",
        current_cookie = "",
        name_expr = name + "=",
        all_cookies = document.cookie.split(';'),
        n = all_cookies.length;

        for (var i = 0; i < n; i++) {
            current_cookie = all_cookies[i].trim();
            if (current_cookie.indexOf(name_expr) == 0) {
                cookie_value = current_cookie.substring(name_expr.length, current_cookie.length);
                break;
            }
        }
        return cookie_value;
    }


    // MODALS
    $('.modal .close-button').click(function() {
        $(this).closest('.modal').removeClass('modal--visible');
    });
    // find if cookie is shown
    var cookie_name = 'bartlettBrands_emailSignup_modal';
    var res = retrieve_cookie(cookie_name);
    if (res) {
        // do nothing
    } else {
        $('#modal-email').addClass('modal--visible');
        var cookie_value = 'yayyy_they_came_to_our_site';
        create_cookie(cookie_name, cookie_value, 365, '/' ); // expire in 1 year
        // google analytics -- show when modal shows
        dataLayer.push({
            'event':'newsletterModal'
        });
    }


    // BG ITERATION
    // the flashing image banner for the home page
    var bg_img_count = $('.bg-images-rotating-banner .bg-img').length - 1;
    var bg_img_number = 0;

    // only call function if the bg-images wrapper div exists on the page
    if ($('.bg-images-rotating-banner').length > 0) {
        showBgImage();
    }

    function showBgImage() {
        // remove current 'prev' class
        $('.bg-img--rotating-banner.bg-img--prev').removeClass('bg-img--prev');
        // set the current active to 'prev'
        $('.bg-img--rotating-banner.bg-img--active').addClass('bg-img--prev');
        // set the current img to active
        $('.bg-img-' + bg_img_number).addClass('bg-img--active');
        // now remove the active from the .active.prev img
        $('.bg-img--rotating-banner.bg-img--active.bg-img--prev').removeClass('bg-img--active');

        // setup next img number
        if (bg_img_number === bg_img_count) {
            bg_img_number = 0;
        } else {
            bg_img_number++;
        }

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
        welcome_height,
        logoContent_height,
        logoImg_height,
        logoGroup_width,
        is_mobile = false,
        is_small_mobile = false,
        is_home_page = false,
        is_logo_loaded = false;

    // RERUN ON RESIZE
    // just all the stuff that should get recalculated when a browser resizes.
    // screen changes could be b/c of development or b/c of mobile-related screen size changes on scroll, or anything else
    function rerunOnResize() {

        logoContent.removeClass('hide-elements-when-short');

        // VARIABLES
        var win_height = $(window).height(),
            win_width = $(window).width(),
            doc_height = $(document).height(),
            navbar_height = $('#navbar').innerHeight(),
            contact_top = $('#contact').offset().top;

        if (homePage.length) {
            is_home_page = true;
            welcome_height = $('#welcome').innerHeight();
            logoContent_height = logoContent.innerHeight();
            logoImg_height = logoImg.height();
            logoGroup_width = logoGroup.width();
            logoGroup_offset = logoGroup.offset().left;
            logoGroup_offset_right = logoGroup_offset + logoGroup_width + 30;
        }


        console.log("welcome_height = ", welcome_height);
        console.log("navbar_height = ", navbar_height);
        console.log("logoContent_height = ", logoContent_height);



        // SET AS MOBILE
        // if really mobile, the code has a .mobile class
        if ($('body.mobile').length) is_mobile = true;
        // if fake mobile (like dev testing), set as mobile anyway
        if ((win_height < 481 || win_width < 481) && is_mobile == true) is_small_mobile = true;


        // SET 'STICKY WRAPPER' NAVBAR HEIGHT
        // helps with funky jump when nav becomes affixed on home page
        $('.sticky-wrapper').css({height: navbar_height});


        // RUN THIS ONLY ON HOME PAGE
        if (is_home_page == true) {

            // SET BG IMG HEIGHT
            // this fixes a bg-img height 'jump' that happens on mobile browsers
            $('style[data-name="bg-img-pos"]').remove();
            $('.bg-img').css({height: welcome_height});
            $('.bg-images-rotating-banner').prepend('<style data-name="bg-img-pos">.bg-img.bg-img--rotating-banner {background-position: ' + logoGroup_offset_right + 'px 0;}</style>');

            // SET LOGO HEIGHT
            function getLogoImgHeight() {
                console.log("run 1");
                if (is_logo_loaded == false) {
                    console.log("run 2");
                    logoImg.load(function() {
                        console.log("run 2a");
                        logoImg_height = logoImg.height();
                        console.log("run 2b");
                        logoContent_height = logoContent.innerHeight();
                        console.log("run 2c");
                        is_logo_loaded = true;
                        console.log("run 2d");
                        hideElemWhenShort();
                    });
                } else {
                    console.log("run 3");
                    hideElemWhenShort();
                }
            }
            getLogoImgHeight();

            // REMOVE WELCOME CONTENT WHEN VIEWPORT IS SMALL
            function hideElemWhenShort() {
                console.log("run 4");
                if ((welcome_height - navbar_height) < (logoContent_height + 30)) {
                    // if (!logoContent.hasClass("hide-elements-when-short")) {
                        logoContent.addClass('hide-elements-when-short');
                    // }
                }
            }
        }


        // BEGIN FUNCTIONS THAT DEAL WITH SCROLLING
        // only use when tablet or bigger. JS slows down scrolling
        if (is_small_mobile == false) {
            $(document).scroll(function() {
                // SCROLL VARIABLES
                var y = $(this).scrollTop(),
                    bg_opac = 1 - y/1000,
                    logo_top = 1 * y; // it used to be 1.5 multiplier. leaving the code for future updates

                // SET BACKGROUND IMG DYNAMIC OPACITY ON SCROLL
                // in case opacity is dynamically less than 0, just set to 0.
                if(bg_opac < 0) bg_opac = 0;
                // set the 'over' bg image opactiy based on scroll position variable calculation
                $('.bg-img--fade.bg-img--over').css({opacity: bg_opac});

                // SET LOGO GROUP MOVEMENT ON SCROLL
                // if these positions sit higher than the document, set it's position to 0
                if(logo_top < 0) logo_top = 0;
                if(logo_top > contact_top) logo_top = 0;
                // now set the logogroup top position based on scroll variable calculation
                if(!homePage.hasClass('home-page--test')) {
                    $('.logogroup').css({top: logo_top});
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
