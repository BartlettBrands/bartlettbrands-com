(function($) {
	"use strict";
	var PENCI = PENCI || {};

	/* General functions
	 ---------------------------------------------------------------*/
	PENCI.general = function () {
		// Top search
		$( '#top-search a.search-click' ).on( 'click', function () {
			$( '.show-search' ).fadeToggle();
			$( '.show-search input.search-input' ).focus();
		} );

		// Go to top
		$( '.go-to-top' ).on( 'click', function () {
			$( 'html, body' ).animate( { scrollTop: 0 }, 700 );
			return false;
		} );

		// Double Touch To Go
		if ( $().doubleTouchToGo ) {
			$( '#navigation .menu li.menu-item-has-children, #navigation .menu li.penci-mega-menu' ).doubleTouchToGo();
		} // doubleTouchToGo
	}

	/* Sticky main navigation
	 ---------------------------------------------------------------*/
	PENCI.main_sticky = function () {
		if ( $().sticky ) {
			var spaceTop = 0;
			if ( $( 'body' ).hasClass( 'admin-bar' ) ) {
				spaceTop = 32;
			}
			$( "nav#navigation" ).each( function () {
				$( this ).sticky( { topSpacing: spaceTop } );
			} );
		} // sticky
	}

	/* Countdown
	 ---------------------------------------------------------------*/
	PENCI.count_down = function () {
		if ( $( '.penci-countdown' ).length > 0 ) {
			var $this = $( '.penci-countdown' ),
				count_time = $this.data( 'time' );
			$( '.penci-countdown' ).countdown( count_time ).on( 'update.countdown', function ( event ) {
				var $this = $( this ).html( event.strftime( '<div class="countdown-row">'
				+ '<span class="countdown-section"><span class="countdown-amount">%-m</span><span class="countdown-period">Months</span></span>'
				+ '<span class="countdown-section"><span class="countdown-amount">%-d</span><span class="countdown-period">Days</span></span>'
				+ '<span class="countdown-section"><span class="countdown-amount">%H</span><span class="countdown-period">Hours</span></span>'
				+ '<span class="countdown-section"><span class="countdown-amount">%M</span><span class="countdown-period">Minutes</span></span>'
				+ '<span class="countdown-section"><span class="countdown-amount">%S</span><span class="countdown-period">Seconds</span></span>'
				+ '</div>') );
			} );
		}
	}

	/* Slick home page carousel featured posts
	 ---------------------------------------------------------------*/
	PENCI.carousel_homepage = function () {
		if ( $().slick ) {
			$( '.featured-carousel' ).each( function () {
				var $this = $( this ),
					autoplay = $this.data( 'auto' ),
					autotime = $this.data( 'autotime' ),
					autospeed = $this.data( 'speed' );
				if ( $this.hasClass( 'style-2' ) ) {
					$this.slick( {
						dots          : false,
						infinite      : true,
						speed         : autospeed,
						slidesToShow  : 1,
						slidesToScroll: 1,
						autoplay      : autoplay,
						autoplaySpeed : autotime,
						centerMode    : true,
						variableWidth : true,
						nextArrow     : '<button type="button" class="slick-next slick-nav"><i class="fa fa-angle-right"></i></button>',
						prevArrow     : '<button type="button" class="slick-prev slick-nav"><i class="fa fa-angle-left"></i></button>'
					} );	// slick
				} else if ( $this.hasClass( 'style-7' ) ) {
					$this.slick( {
						dots          : false,
						infinite      : false,
						speed         : autospeed,
						slidesToShow  : 2,
						slidesToScroll: 1,
						autoplay      : autoplay,
						autoplaySpeed : autotime,
						centerMode    : false,
						variableWidth : false,
						nextArrow     : '<button type="button" class="slick-next slick-nav"><i class="fa fa-angle-right"></i></button>',
						prevArrow     : '<button type="button" class="slick-prev slick-nav"><i class="fa fa-angle-left"></i></button>',
						responsive    : [
							{
								breakpoint: 960,
								settings  : {
									slidesToShow  : 1,
									slidesToScroll: 1
								}
							}
						]
					} );	// slick
				}
				else {
					$this.slick( {
						dots          : false,
						infinite      : true,
						speed         : autospeed,
						slidesToShow  : 1,
						slidesToScroll: 1,
						autoplay      : autoplay,
						autoplaySpeed : autotime,
						centerMode    : false,
						variableWidth : false,
						adaptiveHeight: true,
						nextArrow     : '<button type="button" class="slick-next slick-nav"><i class="fa fa-angle-right"></i></button>',
						prevArrow     : '<button type="button" class="slick-prev slick-nav"><i class="fa fa-angle-left"></i></button>'
					} );	// slick
				}
				$this.on( 'setPosition', function ( event, slick, direction ) {
					$this.parent().addClass( 'loaded' );
					PENCI.carousel_fixtop();
					PENCI.arrows_carousel();
					$(window ).load( function() {
						$this.parent().addClass( 'loaded-wait' );
					} );
				} );
			} );	// each
		}	// if slick
	}


	/* Fix position arrows carousel homepage
	 ---------------------------------------------------------------*/
	PENCI.arrows_carousel = function () {
		$('.featured-area.style-2 button.slick-prev' ).each( function(){
			var $this = $(this ),
				$center_width = $this.parent().find( '.slick-center' ).width(),
				$win_width = $this.closest( '.featured-area' ).width();
			var $pos_this = ( ( $win_width - $center_width )/2 ) - 22;
			$this.css( "left", $pos_this + 'px' );
			$this.next().css( "right", $pos_this + 'px' );
		} );
	}

	/* Fix top featured carousel slider
	 ---------------------------------------------------------------*/
	PENCI.carousel_fixtop = function () {
		$('.featured-carousel .featured-content' ).each( function(){
			var $this = $(this ),
				this_height = $this.height(),
				parent_height = $this.parent().height();
			var top_this = ( parent_height - this_height )/2;
			$this.css( "top", top_this + 'px' );
		} );
	}

	/* Penci Slider
	 ---------------------------------------------------------------*/
	PENCI.flexslider = function () {
		$( window ).load( function () {
			/* Load all slider */
			$( '.penci-slider, .penci-magazine-slider' ).each( function () {
				var $this = $( this ),
					$smooth = false,
					$control = false,
					$dir = true;
				if ( $this.attr( 'data-smooth' ) ) { $smooth = true; }
				if ( $this.attr( 'data-control' ) ) { $control = true; }
				if ( $this.attr( 'data-dir' ) ) { $dir = false; }

				$this.flexslider( {
					namespace     : "penci-",
					animation     : 'slide',
					slideshow     : $this.data( 'auto' ),
					slideshowSpeed: $this.data( 'autotime' ),
					animationSpeed: $this.data( 'speed' ),
					smoothHeight  : $smooth,
					controlNav    : $control,
					directionNav  : $dir,
					pauseOnHover  : true,
					prevText      : '<i class="fa fa-angle-left"></i>',
					nextText      : '<i class="fa fa-angle-right"></i>',
					start         : function ( slider ) {
						$this.parent().addClass( 'loaded' );
						PENCI.fixtop();
						$this.parent().addClass( 'loaded-wait' );
					}
				} );
			} );
		} );
	}

	/* Headline Posts
	----------------------------------------------------------------*/
	PENCI.headline = function () {
		if ( $().slick ) {
			$( '.penci-headline-posts' ).each( function () {
				var $this = $( this );
				$this.slick( {
					dots          : false,
					infinite      : true,
					speed         : $this.data( 'speed' ),
					slidesToShow  : 1,
					slidesToScroll: 1,
					vertical : true,
					autoplay      : $this.data( 'auto' ),
					autoplaySpeed : $this.data( 'autotime' ),
					nextArrow     : '<button type="button" class="slick-next slick-nav"><i class="fa fa-angle-right"></i></button>',
					prevArrow     : '<button type="button" class="slick-prev slick-nav"><i class="fa fa-angle-left"></i></button>'
				} );	// slick

				$this.on( 'setPosition', function ( event, slick, direction ) {
					$(window ).load( function() {
						PENCI.fixheadline();
						$this.parent().addClass( 'loaded' );
					} );
				} );
			} );
		}
	}

	/* Fix margin headline
	----------------------------------------------------------------*/
	PENCI.fixheadline = function () {
		var $headline_title = $( '.penci-headline .headline-title' );
		if ( $headline_title.length ) {
			var headline_w = $headline_title.outerWidth() + 70;
			$('.penci-headline-posts' ).css( 'margin-left', headline_w + 'px' );
		}
	}

	/* Fix top penci slider
	 ---------------------------------------------------------------*/
	PENCI.fixtop = function () {
		$('.penci-slider .pencislider-container' ).each( function(){
			var $this = $(this ),
				parent_slider = $this.closest('.penci-slider' ),
				this_height = $this.height(),
				parent_height = $this.parent().height();
			if( parent_slider.hasClass('fixed-height') ){
				parent_height = parent_slider.height();
			}
			var top_this = ( parent_height - this_height )/2;
			$this.css( "top", top_this + 'px' );
		} );
	}

	/* Fitvids
	 ---------------------------------------------------------------*/
	PENCI.fitvids = function() {
		// Target your .container, .wrapper, .post, etc.
		$( ".container" ).fitVids();
	}

	/* Slick slider
	 ---------------------------------------------------------------*/
	PENCI.slider = function() {
		if ( $().slick ) {
			$( '.penci-slick-slider' ).each(function(){
				var $this = $(this),
					adapheight = $this.data('auto-height');
				if( typeof adapheight === "undefined" ) { adapheight = true; }
				$this.slick({
					dots: false,
					infinite: true,
					speed: 500,
					slidesToShow: 1,
					nextArrow    : '<button type="button" class="slick-next slick-nav"><i class="fa fa-angle-right"></i></button>',
					prevArrow    : '<button type="button" class="slick-prev slick-nav"><i class="fa fa-angle-left"></i></button>',
					adaptiveHeight: adapheight
				});	// slick

				$this.on('setPosition', function(event, slick, direction){
					$this.addClass('loaded');
				});
			});	// each
		}
	}

	/* Slick carousel
	 ---------------------------------------------------------------*/
	PENCI.carousel = function() {
		if ( $().slick ) {
			$( '.penci-carousel' ).each(function(){
				var $this = $( this ),
					slide = 4,
					autoplay = $this.data( 'auto' ),
					dots_show = $this.data( 'dots' ),
					arrows_show = $this.data( 'arrows' ),
					infiloop = false,
					tablet_slide = 2;
				if ( $( '.container-single' ).hasClass( 'penci_sidebar' ) ) { slide = 3; }
				if ( $this.hasClass( 'penci-magcat-carousel' ) ) { slide = 2; infiloop = true; tablet_slide = 1; }
				$this.slick( {
					infinite      : infiloop,
					slidesToShow  : slide,
					slidesToScroll: slide,
					dots          : dots_show,
					autoplay      : autoplay,
					autoplaySpeed : 5000,
					speed         : 700,
					arrows        : arrows_show,
					nextArrow     : '<button type="button" class="slick-next slick-nav"><i class="fa fa-angle-right"></i></button>',
					prevArrow     : '<button type="button" class="slick-prev slick-nav"><i class="fa fa-angle-left"></i></button>',
					responsive    : [
						{
							breakpoint: 1169,
							settings  : {
								slidesToShow  : 2,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 960,
							settings  : {
								slidesToShow  : 2,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 768,
							settings  : {
								slidesToShow  : tablet_slide,
								slidesToScroll: tablet_slide
							}
						},
						{
							breakpoint: 480,
							settings  : {
								slidesToShow  : 1,
								slidesToScroll: 1
							}
						}
					]
				} );	// slick

				$this.on( 'setPosition', function ( event, slick, direction ) {
					$this.addClass( 'loaded' );
				} );
			});	// each
		}
	}

	/* Sticky sidebar
	 ----------------------------------------------------------------*/
	PENCI.sticky_sidebar = function() {
		if ( $().theiaStickySidebar ) {
			var top_margin = 90;
			if( $('body' ).hasClass('admin-bar') ) {
				top_margin = 122;
			}
			$('#main.penci-main-sticky-sidebar, #sidebar.penci-sticky-sidebar' ).theiaStickySidebar({
				// settings
				additionalMarginTop: top_margin
			});
		} // if sticky
	}

	/* Mega menu
	 ----------------------------------------------------------------*/
	PENCI.mega_menu = function () {
		$( '#navigation .penci-mega-child-categories a' ).mouseenter( function () {
			if ( !$( this ).hasClass( 'cat-active' ) ) {
				var $this = $( this ),
					$row_active = $this.data( 'id' ),
					$parentA = $this.parent().children( 'a' ),
					$parent = $this.closest( '.penci-megamenu' ),
					$rows = $this.closest( '.penci-megamenu' ).find( '.penci-mega-latest-posts' ).children( '.penci-mega-row' );
				$parentA.removeClass( 'cat-active' );
				$this.addClass( 'cat-active' );
				$rows.hide();
				$parent.find( '.' + $row_active ).fadeIn( 'normal' ).css( 'display', 'inline-block' );
			}
		} );
	}

	/* Mobile menu responsive
	 ----------------------------------------------------------------*/
	PENCI.mobile_menu = function () {
		// Add indicator
		$( '#sidebar-nav .menu li.menu-item-has-children > a' ).append( '<u class="indicator"><i class="fa fa-angle-down"></i></u>' );

		// Toggle menu when click show/hide menu
		$( '#navigation .button-menu-mobile' ).on( 'click', function () {
			$( 'body' ).addClass( 'open-sidebar-nav' );
		} );

		// indicator click
		$( '#sidebar-nav .menu li a .indicator' ).on( 'click', function ( e ) {
			var $this = $( this );
			e.preventDefault();
			$this.children().toggleClass( 'fa-angle-up' );
			$this.parent().next().slideToggle( 'fast' );
		} );

		// Close sidebar nav
		$( '#close-sidebar-nav' ).on( 'click', function () {
			$( 'body' ).removeClass( 'open-sidebar-nav' );
		} );
	}

	/* Pinterest widget
	 ----------------------------------------------------------------*/
	PENCI.pinterest_widget = function() {
		if ( $().isotope ) {
			$( '.penci-pinterest-widget-container .penci-images-pin-widget' ).each( function () {
				var $this = $( this );
				$( window ).load( function () {
					$this.isotope( {
						itemSelector      : 'a',
						transitionDuration: '.55s',
						layoutMode        : 'masonry'
					} ); // isotope
					$this.parent().removeClass( 'penci-loading' );
				} ); // load
			} ); // each .penci-portfolio
		}	// end if isotope
	}

	/* Light box
	 ----------------------------------------------------------------*/
	PENCI.lightbox = function () {
		if ( $().magnificPopup) {
			$( 'a[data-rel^="penci-gallery-image-content"], .penci-enable-lightbox .gallery-item a' ).magnificPopup( {
				type               : 'image',
				closeOnContentClick: true,
				closeBtnInside     : false,
				fixedContentPos    : true,
				image              : {
					verticalFit: true
				},
				gallery : {
					enabled: true
				},
				zoom               : {
					enabled : true,
					duration: 300 // don't foget to change the duration also in CSS
				}
			} );
		} // if magnificPopup exists
	}

	/* Masonry layout
	----------------------------------------------------------------*/
	PENCI.masonry = function() {
		$(window).load(function() {
			var $masonry_container = $( '.penci-masonry' );
			if ( $masonry_container.length ) {
				$masonry_container.each( function () {
					var $this = $( this );
					// initialize isotope
					$this.isotope( {
						itemSelector      : '.item-masonry',
						transitionDuration: '.55s',
						layoutMode        : 'masonry'
					} );
				} );
			}
		});
	}

	/* Video Background
	 ----------------------------------------------------------------*/
	PENCI.video_background = function() {
		var $penci_videobg = $( '#penci-featured-video-bg' );
		if ( $().mb_YTPlayer && $penci_videobg.length ) {
			$(window ).load( function() {
				$("#penci-featured-video-bg").mb_YTPlayer();
				setTimeout(function(){
					$('.featured-area').addClass( 'loaded-wait' ).append('<div class="overlay-video-click"></div>');
					$('.overlay-video-click').on( 'click', function () {
						var $this = $(this);
						if( !$this.hasClass( 'pause-video' ) ) {
							$this.addClass('pause-video');
							jQuery('#penci-featured-video-bg').pauseYTP();
						} else {
							$this.removeClass('pause-video');
							jQuery('#penci-featured-video-bg').playYTP();
						}
					});
				}, 4000);
			} );
		}
	}

	/* Portfolio
	 ----------------------------------------------------------------*/
	PENCI.portfolio = function () {
		var $penci_portfolio = $( '.penci-portfolio' );
		if ( $().isotope && $penci_portfolio.length ) {
			$( '.penci-portfolio' ).each( function () {
				var $this = $( this );
				$( window ).load( function () {
					$this.isotope( {
						itemSelector    : '.portfolio-item',
						animationEngine : 'best-available',
						animationOptions: {
							duration: 250,
							queue   : false
						}
					} ); // isotope

					$this.addClass( 'loaded' );

					$('.portfolio-item .inner-item-portfolio').each( function () {
						var $this = $( this );
						$this.one( 'inview', function ( event, isInView, visiblePartX, visiblePartY ) {
							$this.addClass( 'animated' );
						} ); // inview
					} ); // each

				} ); // load

				// filter items when filter link is clicked
				$this.parent().find( '.penci-portfolio-filter' ).find( 'li' ).on( 'click', function () {
					$this.parent().find( '.penci-portfolio-filter' ).find( 'li' ).removeClass( 'active' );
					$( this ).addClass( 'active' );
					var selector = $( this ).find( "a" ).attr( 'data-filter' );
					$this.isotope( { filter: selector } );
					return false;
				} );
			} ); // each .penci-portfolio

		}	// end if isotope & portfolio
	}

	/* Gallery
	 ----------------------------------------------------------------*/
	PENCI.gallery = function () {
		var $penci_gallery = $( '.penci-post-gallery-container' );
		if ( $().justifiedGallery && $penci_gallery.length ) {
			$( '.penci-post-gallery-container' ).each( function () {
				var $this = $( this );
				$this.justifiedGallery( {
					rowHeight: $this.data('height'),
					lastRow  : 'nojustify',
					margins  : $this.data('margin')
				} );
			} ); // each .penci-post-gallery-container
		}
	}

	/* Magazine slider 2
	 ----------------------------------------------------------------*/
	PENCI.magazine_slider2 = function () {
		var $mag_slider = $( '.penci-mag2-carousel' ),
			$mag_content = $( '.penci-mag2-carousel .penci-mag2-carousel-content' );
		if ( $().carouFredSel && $mag_slider.length ) {
			var auto = $mag_content.data('auto' ),
				autotime = $mag_content.data('autotime' ),
				speed = $mag_content.data('speed' );
			if( auto !== false ) {
				auto = autotime;
			}
			$mag_content.carouFredSel( {
				width: '100%',
				scroll: { items:1, duration: speed, pauseOnHover: true },
				align: 'left',
				auto : auto,
				padding: 1,
				swipe : true,
				prev: '.penci-magazine2-prev',
				next: '.penci-magazine2-next',
				onCreate: function(){
					$mag_slider.parent().addClass('loaded-wait');
				}
			} );
		}

		penciFitMag2Image();
		$( window ).resize( function () {
			penciFitMag2Image();
		} );
		function penciFitMag2Image() {
			if ( $( window ).width() <= 778 ) {
				$( ".penci-mag2-carousel .mag2-thumbnail img" ).each( function ( index, element ) {
					var $this = $( this );
					if ( $this.outerWidth() > $( window ).width() ) {
						var transfrom = ($( this ).outerWidth() - $( window ).width()) / 2,
							window_w = $( window ).width(),
							title_w = window_w - 20;
						$this.attr( "style", "transform:translate3d(-" + transfrom + "px,0,0); -webkit-transform:translate3d(-" + transfrom + "px,0,0)" );
						$this.parent().parent().find('.mag2-header' ).attr( "style", "width: " + title_w +"px;" );
					}
				} );
			}
		}
	}


	/* Init functions
	 ---------------------------------------------------------------*/
	$(document).ready(function() {
		PENCI.general();
		PENCI.main_sticky();
		PENCI.count_down();
		PENCI.carousel_homepage();
		PENCI.flexslider();
		PENCI.headline();
		PENCI.fitvids();
		PENCI.slider();
		PENCI.carousel();
		PENCI.sticky_sidebar();
		PENCI.mega_menu();
		PENCI.mobile_menu();
		PENCI.pinterest_widget();
		PENCI.lightbox();
		PENCI.masonry();
		PENCI.video_background();
		PENCI.portfolio();
		PENCI.gallery();
		PENCI.magazine_slider2();
		$(window ).resize( function(){ PENCI.sticky_sidebar(); PENCI.fixtop(); PENCI.carousel_fixtop(); } );
	});

})(jQuery);	// EOF