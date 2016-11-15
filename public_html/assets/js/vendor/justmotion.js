/**
 * Justmotion v1.1
 * One page HTML template
 * http://axminenko.com
 *
 * Copyright 2014 Alexander Axminenko
 */
$.isMobile = ( /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test( navigator.userAgent.toLowerCase( ) ) );
var Justmotion = {
    // Constructor
    init: function( ) {
        // this.features.loader( );
        // this.features.imageSlider( );
        // this.features.contentSlider( );
        this.features.parallax( );
        this.features.players( );

        this.features.tweaks( );

        // this.sections.welcome( );
        this.sections.header( );
        // this.sections.skills( );
        this.sections.portfolio( );
        // this.sections.subscribe( );
        this.sections.contact( );
    },

    // Sections
    sections: {
        // // Welcome
        // welcome: function( ) {
        //     if ( $( '#welcome' ).length > 0 ) {
        //         if ( $( '#welcome').attr( 'data-type' ) == 'video' ) { // Video Mode
        //             $( '#welcome .images' ).remove( );
        //             $( '#welcome .arrows' ).hide( );

        //             $( document ).ready( function( ) {
        //                 $( '<div />' ).css( {
        //                     position: 'absolute',
        //                     backgroundColor: '#000000',
        //                     width: '100%',
        //                     height: '100%'
        //                 } ).addClass( 'video-fullscreen' ).prependTo( 'body' );
        //                 if ( ! $.isMoBile ) {
        //                     $( '.video-fullscreen' ).mb_YTPlayer( {
        //                         videoURL: $( '#welcome' ).attr( 'data-source' ),
        //                         containment: '.video-fullscreen',
        //                         mute: $( '#welcome' ).attr( 'data-mute' ) == 'true' ? true : false,
        //                         startAt: parseInt( $( '#welcome' ).attr( 'data-start' ) ),
        //                         autoPlay: true,
        //                         showControls: false,
        //                         ratio: '16/9',
        //                         showYTLogo: false,
        //                         vol: 100
        //                     } );
        //                 } else {
        //                     $( '.video-fullscreen' ).css( {
        //                         backgroundRepeat: 'no-repeat',
        //                         backgroundSize: 'cover',
        //                         backgroundPosition: 'center center',
        //                         backgroundImage: 'url("' + $( '#welcome' ).attr( 'data-on-error' ) + '")'
        //                     } );
        //                 }
        //             } );
        //         } else { // Slideshow
        //             var elements = [], slides = 0;
        //             $( '.welcome .images img' ).each( function( ) {
        //                 slides += 1;
        //                 elements.push( { src: $( this ).attr( 'src' ) } );
        //                 $( this ).attr( 'data-index', slides );
        //                 $( '.slider.content .slides' ).append( '<a href="#" data-index="' + slides + '"></a>' );
        //             } );

        //             if ( slides < 2 ) {
        //                 $.vegas( {
        //                     src: elements[0].src,
        //                     loading: false
        //                 } ) ( 'overlay', { src: $( '.welcome .images' ).attr( 'data-overlay' ) } );

        //                 $( '.slider.content .slides' ).hide( );
        //                 $( '.slider.arrows' ).hide( );
        //             } else {
        //                 $.vegas( 'slideshow', {
        //                     backgrounds: elements,
        //                     loading: false,
        //                     delay: 7000
        //                 } ) ( 'overlay', { src: $( '.welcome .images' ).attr( 'data-overlay' ) } );
        //             }

        //             $( 'body' ).bind( 'vegasload', 
        //                 function( e, bg ) {
        //                     $element = $( '.welcome .images img[src="' + $( bg ).attr( 'src' ) + '"]' );
        //                     $( '.slider.content h1' ).text( $element.attr( 'alt' ) );
        //                     $( '.slider.content .slides a' ).removeClass( 'active' );
        //                     $( '.slider.content .slides a[data-index="' + $element.attr( 'data-index' ) + '"]' ).addClass( 'active' );
        //                 }
        //             );
        //             $( '.slider.content .slides a' ).click( function( evt ) {
        //                 $.vegas( 'jump', $( this ).attr( 'data-index' ) - 1 );
        //                 evt.preventDefault( );
        //             } );
        //             $( '.slider.arrows a' ).click( function( evt ) {
        //                 if ( $( this ).hasClass( 'prev' ) ) $.vegas( 'previous' );
        //                 else if ( $( this ).hasClass( 'next' ) ) $.vegas( 'next' );
        //                 evt.preventDefault( );
        //             } );

        //             var verticalAlignContent = function( ) {
        //                 settedValue = $( '.slider.content' ).outerHeight( ) / 2 / -1;
        //                 $( '.slider.content' ).css( { 'marginTop': Math.floor( settedValue ) } );
        //             }
        //             $( window ).resize( function( ) {
        //                 verticalAlignContent( );
        //             } );
        //             $( window ).load( function( ) {
        //                 verticalAlignContent( );
        //             } );
        //         }
        //     }
        // },

        // Header
        header: function( ) {
            var phoneMenuHide = function( ) {
                $( 'header.main nav' ).removeClass( 'active' );
                $( '#phonesMenu' ).removeClass( 'active' );
                $( 'body' ).css( { overflow: 'visible' } );
                phoneMenuResize( $( 'header.main nav' ) );
            }, phoneMenuShow = function( ) {
                $( 'header.main nav' ).addClass( 'active' );
                $( '#phonesMenu' ).addClass( 'active' );
                $( 'body' ).css( { overflow: 'hidden' } );
                phoneMenuResize( $( 'header.main nav' ) );
            }, phoneMenuResize = function( $that ) {
                if ( $( '#phonesMenu' ).hasClass( 'active' ) ) {
                    var items = $that.find( 'li' ).length, offset = Math.floor( ( $that.outerHeight( ) - parseFloat( $that.find( 'li:first-child a' ).css( 'line-height' ) ) * items ) / items / 2 );
                    $that.find( 'li a' ).css( 'cssText', 'padding-top: ' + offset + 'px !important; padding-bottom: ' + offset + 'px !important;' );
                } else $that.find( 'li a' ).css( 'cssText', '' );
            }

            $( '#phonesMenu' ).click( function( ) {
                if ( $( this ).hasClass( 'active' ) ) phoneMenuHide( );
                else phoneMenuShow( );
            } );
            $( 'header.main nav' ).click( function( ) {
                phoneMenuHide( );
            } );

            $( 'body' ).on( {
                'mousewheel': function( evt ) {
                    if ( $( '#phonesMenu.active' ).length > 0 ) {
                        evt.preventDefault( );
                        evt.stopPropagation( );
                    }
                }, 'touchmove': function( evt ) {
                    if ( $( '#phonesMenu.active' ).length > 0 ) {
                        evt.preventDefault( );
                        evt.stopPropagation( );
                    }
                }
            } );
            $( window ).resize( function( ) {
                if ( $( '#phonesMenu' ).hasClass( 'active' ) ) {
                    if ( $( 'body' ).outerWidth( ) > 767 ) phoneMenuHide( );
                    else phoneMenuResize( $( 'header.main nav' ) );
                }
            } );

            $( 'header.main' ).sticky( );
            $( 'header.main' ).onePageNav( { scrollOffset: 76, currentClass: 'active', changeHash: true } );
        },

        // // Our Skills
        // skills: function( ) {
        //     if ( $( '.skill' ).length > 0 ) {
        //         $( '.skill' ).knob( {
        //             font: '"Lato", sans-serif',
        //             fgColor: $( 'a' ).css( 'color' ),
        //             inputColor: '#404040',
        //             fontWeight: 400,
        //             fontSize: '22px',
        //             width: '76px',
        //             readOnly: true,
        //             thickness: .16
        //         } );
        //         $( '.skill' ).each( function( ) {
        //             if ( $( this ).val( ) > 0 ) {
        //                 $( this ).val( 0 ).trigger( 'change' );
        //             }
        //         } );

        //         setTimeout( function( ) {
        //             $( window ).scroll( function( ) {
        //                 var scrollTop = $( window ).scrollTop( );
        //                 $( '.skill' ).each( function( ) {
        //                     var $that = $( this ), itemTop = $that.offset( ).top - $( window ).height( ) + $that.height( ) / 2;
        //                     if ( scrollTop > itemTop && $that.val( ) == 0 ) {
        //                         $( { value: 0 } ).animate( { value: $that.attr( 'data-value' ) }, {
        //                             duration: 1500,
        //                             easing: 'swing',
        //                             step: function( ) {
        //                                 $that.val( Math.ceil( this.value ) ).trigger( 'change' );
        //                             }
        //                         } );
        //                     }
        //                 } );
        //             } ).scroll( );
        //         }, 100 );
        //     }
        // },

        // Portfolio
        portfolio: function( ) {
            var marginTopFix = 30;
            var portfolioDetailsShow = function( html, onComplete ) {
                $( 'html, body' ).animate( { scrollTop: $( '#portfolio' ).offset( ).top }, { duration: 400, queue: false } );

                heightItems = $( '#portfolioItems' ).outerHeight( true );
                $( '#portfolioItems' ).animate( { opacity: 0 }, { duration: 400, queue: false, complete: function( ) {
                    $( this ).hide( );
                    $( '#portfolioDetails' ).hide( ).html( html ).load( );
                    heightDetails = $( '#portfolioDetails' ).outerHeight( true );

                    $( '#portfolioDetails' ).css( { opacity: 0, height: heightItems } ).show( ).animate( { opacity: 1 }, { duration: 600, queue: false } );
                    $( '#portfolioDetails' ).animate( { height: heightDetails }, { duration: 600, queue: false, complete: function( ) {
                        var imageHeight = $( '#portfolioDetails' ).find( '.image' ).outerHeight( );
                        if ( imageHeight > heightDetails && $( '#portfolioDetails' ).find( '.column12' ).length < 1 ) {
                            $( '#portfolioDetails' ).animate( { height: imageHeight }, { duration: 100, queue: false } );
                        }
                        if ( onComplete && typeof onComplete == 'function' ) onComplete( );
                    } } );
                } } );
            }, portfolioDetailsHide = function( onComplete ) {
                $( '#portfolioDetails' ).animate( { opacity: 0 }, { duration: 400, queue: false, complete: function( ) {
                    $( this ).hide( );

                    $( '#portfolioItems' ).css( { height: heightDetails + marginTopFix } ).show( ).animate( { opacity: 1 }, { duration: 300, queue: false, complete: function( ) {
                        $( '#portfolioDetails' ).html( '' ).css( { height: 'auto' } );
                    } } );
                    $( '#portfolioItems' ).animate( { height: heightItems + marginTopFix }, { duration: 200, queue: false, complete: function( ) {
                        if ( onComplete && typeof onComplete == 'function' ) onComplete( );
                    } } );
                } } );
            }

            $( window ).load( function( ) {
                if ( $( '#portfolioItems' ).length > 0 ) {
                    $( '#portfolioItems' ).isotope( {
                        itemSelector: '.portfolioItem',
                        layoutMode: 'fitRows'
                    } );
                }
            } );

            if ( $( '#portfolioItems' ).length > 0 ) {
                $( '#portfolioFilters a' ).click( function( evt ) {
                    var $that = $( this );
                    $( '#portfolioFilters a' ).parent( ).removeClass( 'active' );
                    $that.parent( ).addClass( 'active' );

                    if ( ! $( '#portfolioItems' ).is( ':visible' ) ) {
                        portfolioDetailsHide( function( ) {
                            $that.click( );
                        } );
                        evt.preventDefault( );
                        return false;
                    }

                    $( '#portfolioItems' ).isotope( { filter: $that.attr( 'data-filter' ) } );
                    evt.preventDefault( );
                } );
                $( '.portfolioItem .row a' ).click( function( evt ) {
                    var that = this;
                    $.get( $( that ).attr( 'data-url' ), { }, function( response ) {
                        portfolioDetailsShow( response );
                    } );
                    evt.preventDefault( );
                } );
                $( document.body ).on( 'click', '.portfolioBack', function( evt ) {
                    portfolioDetailsHide( );
                    evt.preventDefault( );
                } );
            }
        },

        // // Subcribe
        // subscribe: function( ) {
        //     if ( $( '#subscribeButton' ).length > 0 ) {
        //         $( '#subscribeButton' ).click( function( ) {
        //             var $input = $( '#subscribeInput' ), $that = $( this ), stopped = false;
        //             var fieldNotice = function( $input ) {
        //                 $input.addClass( 'notice' );
        //                 setTimeout( function( ) {
        //                     $input.removeClass( 'notice' );
        //                 }, 300 );
        //             }
        //             if ( $input.val( ).length < 1 ) {
        //                 stopped = true;
        //                 fieldNotice( $input );
        //             }
        //             if ( ! stopped ) {
        //                 $input.attr( 'disabled' );
        //                 $that.attr( 'disabled', true ).val( 'PROCESS...' );
        //                 $.post( 'ajax/subscribe.php', { email: $input.val( ) }, function( response ) {
        //                     setTimeout( function( ) {
        //                         data = $.parseJSON( response );
        //                         if ( data.status != 'ok' ) {
        //                             fieldNotice( $input );
        //                             $input.removeAttr( 'disabled' );
        //                             $that.removeAttr( 'disabled' ).val( 'SUBSCRIBE' );
        //                         } else {
        //                             $that.val( 'THANK YOU!' );
        //                         }
        //                     }, 1000 );
        //                 } );
        //             }
        //         } );
        //     }
        // },

        // Contact
        contact: function( ) {
            if ( $( '#contact' ).length > 0 ) {
                var name = '#name', email = '#email', subject = '#subject', text = '#text', button = '#sendMessage';
                $( button ).click( function( ) {
                    var that = this, stopped = false;
                    var fieldNotice = function( selector ) {
                        $( selector ).addClass( 'notice' );
                        setTimeout( function( ) {
                            $( selector ).removeClass( 'notice' );
                        }, 400 );
                    }, fieldsDisable = function( value ) {
                        if ( value ) {
                            $( name ).attr( 'disabled', true );
                            $( email ).attr( 'disabled', true );
                            $( subject ).attr( 'disabled', true );
                            $( text ).attr( 'disabled', true );
                        } else {
                            $( name ).removeAttr( 'disabled' );
                            $( email ).removeAttr( 'disabled' );
                            $( subject ).removeAttr( 'disabled' );
                            $( text ).removeAttr( 'disabled' );
                        }
                    }
                    if ( $( name ).val( ).length < 1 ) {
                        fieldNotice( name );
                        stopped = true;
                    }
                    if ( $( email ).val( ).length < 1 ) {
                        fieldNotice( email );
                        stopped = true;
                    }
                    if ( $( text ).val( ).length < 1 ) {
                        fieldNotice( text );
                        stopped = true;
                    }
                    if ( ! stopped ) {
                        fieldsDisable( true );
                        $( button ).attr( 'disabled', true ).val( 'PROCESS...' );
                        $.post( 'ajax/contact.php', { name: $( name ).val( ), email: $( email ).val( ), subject: $( subject ).val( ), message: $( text ).val( ) }, function( response ) {
                            setTimeout( function( ) {
                                data = $.parseJSON( response );
                                if ( data.status == 'email' ) {
                                    fieldsDisable( false );
                                    fieldNotice( email );
                                    $( button ).removeAttr( 'disabled' ).val( 'SUBMIT MESSAGE' );
                                } else if ( data.status == 'error' ) {
                                    $( button ).val( 'UNKNOWN ERROR' );
                                } else {
                                    $( button ).val( 'THANK YOU!' );
                                }
                            }, 1000 );
                        } );
                    }
                } );
            }
        }
    },

    // Features
    features: {
        // Animations
        animations: function( ) {
            if ( ! $.isMobile ) {
                var animationItem = $( '.animation[class*="animation-"]' );
                if ( animationItem.length ) {
                    var delay;
                    animationItem.not( '.active' ).each( function( i ) {
                        if ( i != 0 && $( this ).offset( ).top == $( animationItem.get( i - 1 ) ).offset( ).top ) {
                            delay ++
                        } else delay = 0;
                        $( this ).css( {
                            '-webkit-transition-delay': delay * 100 + 'ms',
                            '-moz-transition-delay': delay * 100 + 'ms',
                            '-o-transition-delay': delay * 100 + 'ms',
                            '-ms-transition-delay': delay * 100 + 'ms',
                            'transition-delay': delay * 100 + 'ms'
                        } );
                    } );
                    setTimeout( function( ) {
                        $( window ).scroll( function( ) {
                            var scrollTop = $( window ).scrollTop( );
                            animationItem.not( '.active' ).each( function( ) {
                                var $that = $( this ), itemTop = $that.offset( ).top - $( window ).height( ) + $that.height( ) / 2;
                                if ( scrollTop > itemTop ) $( this ).addClass( 'active' );
                            } );
                        } ).scroll( );
                    }, 100 );
                }
            }
        },

        // /* Image Slider */
        // imageSlider: function( ) {
        //     var imageSliderTimers = new Array;
        //     var imageSliderSet = function( $that, index ) {
        //         var $currentImage = $that.find( '.image img:first-child' ),
        //         currentIndex = $currentImage.attr( 'data-index' ),
        //         lastIndex = $that.find( '.images img:last-child' ).attr( 'data-index' ),
        //         sliderId = $that.attr( 'data-image-slider-id' );

        //         if ( index <= 0 ) index = lastIndex;
        //         else if ( index > lastIndex ) index = 1;

        //         var $newImage = $that.find( '.images img[data-index="' + index + '"]' );
        //         if ( $newImage.length > 0 && index != currentIndex ) {
        //             $that.find( '.slides a' ).removeClass( 'active' );
        //             $that.find( '.slides a[data-index="' + index + '"]' ).addClass( 'active' );

        //             $that.find( '.image' ).append( '<img src="' + $newImage.attr( 'src' ) + '" data-index="' + $newImage.attr( 'data-index' ) + '" alt="" />' );
        //             $newImage = $that.find( '.image img:last-child' );
        //             $newImage.css( { opacity: 0 } ).show( ).animate( { opacity: 1 }, { duration: 500, queue: false, complete: function( ) {
        //                 $currentImage.remove( );
        //                 $newImage.addClass( 'active' );
        //             } } );

        //             clearTimeout( imageSliderTimers[sliderId] );
        //             imageSliderTimers[sliderId] = setInterval( function( ) {
        //                 imageSliderNext( $that );
        //             }, 7000 );
        //             return true;
        //         }
        //         return false;
        //     }, imageSliderNext = function( $that ) {
        //         return imageSliderSet( $that, parseInt( $that.find( '.image img:last-child' ).attr( 'data-index' ) ) + 1 );
        //     }, imageSliderLoad = function( $that, sliderId ) {
        //         var index = 0;
        //         $that.attr( 'data-image-slider-id', sliderId );
        //         $that.append( '<div class="wrapper"><div class="image" /><div class="slides" /></div>' );
        //         $that.find( '.images img' ).each( function( ) {
        //             index += 1;
        //             $( this ).attr( 'data-index', index );
        //             $that.find( '.slides' ).append( '<a data-index="' + index + '" />' );
        //         } );

        //         if ( index == 1 ) $that.find( '.slides' ).hide( );
        //         imageSliderSet( $that, 1 );

        //         //$that.find( '.image img' ).addClass( 'current' );
        //         $that.find( '.slides a' ).first( ).addClass( 'active' );

        //         $that.find( '.slides a' ).click( function( evt ) {
        //             imageSliderSet( $that, parseInt( $( this ).attr( 'data-index' ) ) );
        //             evt.preventDefault( );
        //         } )
        //     }

        //     sliderId = 0;
        //     $( '.imageSlider' ).each( function( ) {
        //         sliderId += 1;
        //         imageSliderLoad( $( this ), sliderId );
        //     } );
        // },

        // // Slider for text content
        // contentSlider: function( ) {
        //     $( '.contentSlider' ).each( function( ) {
        //         $this = this;

        //         var index = 0;
        //         $( this ).append( '<div class="slides clearfix" />' );
        //         $( this ).find( '.item' ).each( function( ) {
        //             index += 1;
        //             $( this ).attr( 'data-index', index );
        //             if ( index == 1 ) {
        //                 $( this ).show( );
        //                 $( this ).parent( ).height( $( this ).outerHeight( ) );
        //             }
        //             $( $this ).find( '.slides' ).append( '<a href="#" data-index="' + index + '"' + ( index == 1 ? ' class="active"' : '' ) + ' />' );
        //         } );
        //         if ( index == 1 ) $( this ).find( '.slides' ).hide( );
        //     } );

        //     $( '.contentSlider .slides a' ).click( function( evt ) {
        //         if ( ! $( this ).hasClass( 'active' ) ) {
        //             var index = $( this ).attr( 'data-index' );
        //             $( this ).parent( ).parent( ).find( '.slides a' ).removeClass( 'active' );
        //             $( this ).parent( ).parent( ).find( '.slides a[data-index="' + index + '"]' ).addClass( 'active' );

        //             var rootElement = $( this ).parent( ).parent( ), heightSet = rootElement.find( '.item[data-index="' + index + '"]' ).outerHeight( );
        //             rootElement.find( '.item:visible' ).fadeOut( 300, function( ) {
        //                 rootElement.find( '.content' ).animate( { height: heightSet }, 300 );
        //                 rootElement.find( '.item[data-index="' + index + '"]' ).css( 'opacity', .0 ).show( ).animate( { opacity: 1 }, 300 );
        //             } );
        //         }
        //         evt.preventDefault( );
        //     } );

        //     $( window ).resize( function( ) {
        //         $( '.contentSlider' ).each( function( ) {
        //             $( this ).find( '.content' ).height( $( this ).find( '.item:visible' ).outerHeight( ) );
        //         } );
        //     } );
        // },

        // Parallax
        parallax: function( ) {
            if ( $( '.parallax' ).length > 0 && ! $.isMobile ) {
                $( '.parallax' ).each( function( ) {
                    $( this ).parallax( '50%', 0.5 );
                } );
            }
        },

        // // Loader
        // loader: function( ) {
        //     $( window ).load( function( ) {
        //         $( '.loader' ).delay( 700 ).fadeOut( );
        //         $( '#pageLoader' ).delay( 1200 ).fadeOut( 'slow', function( ) {
        //             Justmotion.features.animations( );
        //         } );
        //     } );
        // },

        // Video Players
        players: function( ) {
            var playersWide = function( ) {
                $( 'iframe' ).each( function( ) {
                    $( this ).css( { height: Math.floor( $( this ).outerWidth( ) / 16 * 9 ) } );
                } );
            }
            $( window ).resize( function( ) {
                playersWide( );
            } );
            $( document ).ready( function( ) {
                playersWide( );
            } );
        },

        // Tweaks
        tweaks: function( ) {
            $.browser = { };
            $.browser.msie = /msie|trident/i.test( navigator.userAgent );
            $.browser.is9 = /msie 9/i.test( navigator.userAgent );

            if ( $.browser.msie && $.browser.is9 ) {
                $( 'input[placeholder]' ).each( function( ) {
                    $( this ).attr( 'value', $( this ).attr( 'placeholder' ) );
                } );
                $( 'textarea[placeholder]' ).each( function( ) {
                    $( this ).text( $( this ).attr( 'placeholder' ) );
                } );
            }
        }
    }
};

$( document ).ready( function( ) {
    if ( $.isMobile ) $( 'body' ).addClass( 'mobile' );
    Justmotion.init( );
} );