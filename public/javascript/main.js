/**
    * menuFixed
    * searchButton
    * parallax
    * progressBar
    * accordionToggle
    * slideClient
    * slideFreedback
    * slideTestimonial
    * slideTeam
    * portfolio
    * counter
    * textForm
    * contactForm
    * goTop
    * googleMap

*/

;(function($) {

   'use strict'
        var isMobile = {
            Android: function() {
                return navigator.userAgent.match(/Android/i);
            },
            BlackBerry: function() {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            iOS: function() {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            },
            Opera: function() {
                return navigator.userAgent.match(/Opera Mini/i);
            },
            Windows: function() {
                return navigator.userAgent.match(/IEMobile/i);
            },
            any: function() {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
            }
        }; // is Mobile

        var responsiveMenu = function() {
            var menuType = 'desktop';

            $(window).on('load resize', function() {
                var currMenuType = 'desktop';

                if ( matchMedia( 'only screen and (max-width: 991px)' ).matches ) {
                    currMenuType = 'mobile';
                }

                if ( currMenuType !== menuType ) {
                    menuType = currMenuType;

                    if ( currMenuType === 'mobile' ) {
                        var $mobileMenu = $('#mainnav').attr('id', 'mainnav-mobi').hide();
                        var hasChildMenu = $('#mainnav-mobi').find('li:has(ul)');

                        // $('#header').after($mobileMenu);
                        hasChildMenu.children('ul').hide();
                        hasChildMenu.children('a').after('<span class="btn-submenu"></span>');
                        $('.btn-menu').removeClass('active');
                    } else {
                        var $desktopMenu = $('#mainnav-mobi').attr('id', 'mainnav').removeAttr('style');
                        $('#mainnav .menu > li > .sub-menu').show();
                        $desktopMenu.find('.submenu').removeAttr('style');
                        $('#header').find('.nav-wrap').append($desktopMenu);
                        $('.btn-submenu').remove();
                    }
                }
            });

            $('.btn-menu').on('click', function() {         
                $('#mainnav-mobi').slideToggle(300);
                $(this).toggleClass('active');
                return false;
            });

            $(document).on('click', '#mainnav-mobi li .btn-submenu', function(e) {
                $(this).toggleClass('active').next('ul').slideToggle(300);
                e.stopImmediatePropagation();
                return false;
            });
        }; // Responsive Menu

        var headerFixed = function() {
            var nav = $('.header');
            if ( nav.size() != 0 ) {
                
                var offsetTop = $('.header').offset().top,
                    headerHeight = $('.header').height(),
                    injectSpace = $('<div />', { height: headerHeight }).insertAfter(nav);   
                    injectSpace.hide();                 

                $(window).on('load scroll', function(){
                    if ( $(window).scrollTop() > offsetTop + 100 ) {
                        $('.header').addClass('downscrolled');
                        injectSpace.show();
                    } else {
                        $('.header').removeClass('downscrolled');
                        injectSpace.hide();
                    }

                    if ( $(window).scrollTop() > 400) {
                        $('.header').addClass('upscrolled');
                    } else {
                        $('.header').removeClass('upscrolled');
                    }
                })
            }
        }; // Header Fixed

        var searchButton = function() {
            $('.box-search').each(function() {
                var showsearch = $('.box-search > span');
                showsearch.on('click',function() {
                    $('.box-search .top-search').addClass('active');
                });
            });
        }; // Show Search

        var menuCanvas = function() {
            $('.menu-extra').each(function() {
                var buttonCanvas = $('.menu-extra > div.box-canvas span');
                var buttonDelete = $('.menu-canvas > .delete');
                buttonCanvas.on('click', function() {
                    $('.menu-canvas').addClass('show');
                    $('.boxed').addClass('overlay-canvas');
                });
                buttonDelete.on('click', function() {
                    $('.menu-canvas').removeClass('show');
                    $('.boxed').removeClass('overlay-canvas');
                });
            });
        }; // Menu Canvas

        var parallax = function() {
            if ( $().parallax && isMobile.any() == null ) {
                $('.parallax7').parallax("50%", 0.5); 
                $('.parallax8').parallax("50%", 0.8);
                $('.parallax9').parallax("50%", 0.4);    
            }
        }; // Parallax

        var progressBar = function(){
            $('.progress-item').waypoint(function() {
                $('.progress-bar').each( function() {
                    var percent = $(this).data('percent');
                     $(this).find('.progress-animate').animate({
                        "width": percent + '%'
                    },2000);
                    $(this).parent('.progress-item').find('.perc').addClass('show').animate({
                        "width": percent + '%'
                    },2000);
                });
            }, {offset: '100%'});
        };// Progress Bar

        var accordionToggle = function() {
            var speed = {duration: 400};
            $('.toggle-content').hide();
            $('.accordion-toggle .toggle-title.active').siblings('.toggle-content').show();
            $('.accordion.v1').each(function() {
                $('.accordion').find('.toggle-title').on('click', function() {
                    $(this).toggleClass('active');
                    $(this).next().slideToggle(speed);
                    $(".toggle-content").not($(this).next()).slideUp(speed);
                    if ($(this).is('.active')) {
                        $(this).closest('.accordion').find('.toggle-title.active').toggleClass('active')
                        $(this).toggleClass('active');
                    };
                });
            });
            $('.accordion.style1').each(function() {
                $('.accordion.style1').find('.toggle-title').on('click', function() {
                    $(this).toggleClass('active');
                    $(this).next().slideToggle(speed);
                    $(".toggle-content").not($(this).next()).slideUp(speed);
                    if ($(this).is('.active')) {
                        $(this).closest('.accordion.style1').find('.toggle-title.active').toggleClass('active')
                        $(this).toggleClass('active');
                    };
                });
            });
        }; // Accordion Toggle

        var slideClient = function() {
            $(".owl-carousel-0").owlCarousel({
                autoplay:false,
                dots:false,
                responsive: true,
                margin:20,
                loop:true,
                items:6,
                responsive:{
                    0:{
                        items: 2
                    },

                    479:{
                        items: 3
                    },
                    768:{
                        items: 4
                    },
                    991:{
                        items: 5
                    },
                    1200: {
                        items: 6
                    }
                }
            });
        };// slide client

        var slideTeam_s1 = function() {
            $('.owl-carousel-2').owlCarousel({
                items:4,
                loop:true,
                margin:0,
                dots:false,
                autoplay:false,
                responsive:{
                    0:{
                        items: 1
                    },

                    479:{
                        items: 2
                    },
                    768:{
                        items: 3
                    },
                    991:{
                        items: 4
                    },
                    1200: {
                        items: 4
                    }
                }
            })
        }; // SlideTeam

        var slideTestimonial = function() {
            var owl = $('.owl-carousel-3');
            owl.owlCarousel({
                items:1,
                loop:true,
                rtl: true,
                margin:10,
                autoplay:false,
                autoplayTimeout:3000,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items: 1
                    },

                    479:{
                        items: 1
                    },
                    768:{
                        items: 1
                    },
                    991:{
                        items: 1
                    },
                    1200: {
                        items: 1
                    }
                }
            });
        }; // SlideTestimonial

        var slideTeam_s2 = function() {
            $('.owl-carousel-4').owlCarousel({
                items:4,
                loop:true,
                nav:true,
                dots:false,
                autoplay:false,
                responsive:{
                    0:{
                        items: 1
                    },

                    479:{
                        items: 2
                    },
                    768:{
                        items: 3
                    },
                    991:{
                        items: 4
                    },
                    1200: {
                        items: 4
                    }
                }
            })
        }; // SlideTeam

        var slideRelated = function() {
            $('.owl-carousel-5').owlCarousel({
                items:3,
                nav: true,
                loop:true,
                margin:30,
                dots:true,
                autoplay:false,
                autoplayTimeout:2000,
                responsive:{
                    0:{
                        items: 1,
                        dots: false
                    },

                    479:{
                        items: 2,
                        margin: 15,
                    },
                    768:{
                        items: 2
                    },
                    991:{
                        items: 3
                    },
                    1200: {
                        items: 3
                    }
                }
            })
        }; // SlideTeam

        var slideTestimonial_s2 = function() {
            $('.owl-carousel-6').owlCarousel({
                items:2,
                nav: false,
                loop:true,
                margin: 30,
                dots:true,
                autoplay:false,
                responsive:{
                    0:{
                        items: 1,
                        dots: false
                    },

                    479:{
                        items: 1
                    },
                    768:{
                        items: 2
                    },
                    991:{
                        items: 2
                    },
                    1200: {
                        items: 2
                    }
                }
            })
        }; // Slide Testimonial S2

        var slidePortfolio = function() {
            $('.owl-carousel-7').owlCarousel({
                items:2,
                nav: false,
                loop:true,
                margin: 0,
                dots:false,
                autoplay:false,
                responsive:{
                    0:{
                        items: 1
                    },

                    479:{
                        items: 2
                    },
                    768:{
                        items: 2
                    },
                    991:{
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            })
        }; // Slide Portfolio

        var slideIconbox = function() {
            $('.owl-carousel-8').owlCarousel({
                items:2,
                nav: true,
                loop:true,
                margin: 30,
                dots:false,
                autoplay:false,
                responsive:{
                    0:{
                        items: 1
                    },

                    479:{
                        items: 1
                    },
                    768:{
                        items: 2
                    },
                    991:{
                        items: 3
                    },
                    1200: {
                        items: 3
                    }
                }
            })
        }; // Slide Iconbox

        var slideIconbox_S2 = function() {
            $('.owl-carousel-9').owlCarousel({
                items:2,
                nav: false,
                loop:true,
                margin: 30,
                dots:true,
                autoplay:false,
                responsive:{
                    0:{
                        items: 1
                    },

                    479:{
                        items: 1
                    },
                    768:{
                        items: 2
                    },
                    991:{
                        items: 2
                    },
                    1200: {
                        items: 2
                    }
                }
            })
        }; // Slide Iconbox

        var slideTeam_s3 = function() {
            $('.owl-carousel-10').owlCarousel({
                items:4,
                nav: true,
                loop:true,
                margin: 30,
                dots:false,
                autoplay:false,
                responsive:{
                    0:{
                        items: 1
                    },

                    479:{
                        items: 2
                    },
                    768:{
                        items: 3
                    },
                    991:{
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            })
        }; // Slide Team S3

        var slidePortfolio_s2 = function() {
            $(".owl-carousel-11").owlCarousel({
                items:1,
                autoplay:false,
                dots:false,
                margin:0,
                nav: true,
                loop:true,
                
            });
        };

        var sectionVideo = function () {
            if($().YTPlayer) {
                $(".video-section").YTPlayer( {
                    showControls: false,
                    autoPlay: false,
                    
                }); 
                var v = $('.video-section');
                $('#video-controls a')
                .each(function() {
                    var t = $(this);
                    t.on('click', (function(e) {
                        e.preventDefault();  
                        if (t.hasClass('fa-play')) {
                            t.removeClass('fa-play')
                                .addClass(
                                    'fa-pause');
                            v.playYTP();
                            t.closest('.video').find('.mbYTP_wrapper').removeClass('YTPOverlay');
                            return false
                        }                  
                        if (t.hasClass('fa-pause')) {
                            t.removeClass(
                                    'fa-pause')
                                .addClass('fa-play');
                            v.pauseYTP();
                            t.closest('.video').find('.mbYTP_wrapper').addClass('YTPOverlay');
                            return false
                        }  
                        if (t.hasClass('fa-play-circle')) {
                            t.removeClass('fa-play-circle')
                                .addClass(
                                    'fa-pause-circle');
                            v.playYTP();
                            return false
                        }  
                        if (t.hasClass('fa-pause-circle')) {
                            t.removeClass(
                                    'fa-pause-circle')
                                .addClass('fa-play-circle');
                            v.pauseYTP();
                            return false
                        }
                    }));
                });
            }
        }; // Section Video

        var counter = function() {      
            if ( $().countTo ) {
                $('.flat-counter').on('on-appear', function() {
                    $(this).find('.numb-count').each(function() {
                        var to = parseInt( $(this).data('to'), 10 ),
                            speed = parseInt( $(this).data('speed'), 10 );
                            
                        $(this).countTo({
                            to: to,
                            speen: speed
                        });
                    });
                }); // wrap counter
            };
        }; // Counter About

        var detectViewport = function() {
            $('[data-waypoint-active="yes"]').waypoint(function() {
                $(this).trigger('on-appear');
            }, { offset: '95%', triggerOnce: true });
             $(window).on('load', function() {
                setTimeout(function() {
                    $.waypoints('refresh');
                }, 100);
            });
        }; // Detect Viewport

        var tabContent = function() {
            $('.tab-testimonial').each(function() {
            $(this).find('.tab-content').children().hide();
            $(this).find('.tab-content').children().first().show().addClass('active');
            $(this).find('.tab-list').children('li').on('click', function(){
                    var liActive = $(this).index(),
                    contentActive = $(this).siblings().removeClass('active').parents('.tab-testimonial').find('.tab-content').children().eq(liActive);
                    contentActive.addClass('active').fadeIn("slow");
                    contentActive.siblings().removeClass('active');
                    $(this).addClass('active').parents('.tab-testimonial').find('.tab-content').children().eq(liActive).siblings().hide();
                });
            });
            $('.tab-about').each(function() {
            $(this).find('.tab-content').children().hide();
            $(this).find('.tab-content').children().first().show().addClass('active');
            $(this).find('.tab-list').children('li').on('click', function(){
                    var liActive = $(this).index(),
                    contentActive = $(this).siblings().removeClass('active').parents('.tab-about').find('.tab-content').children().eq(liActive);
                    contentActive.addClass('active').fadeIn("slow");
                    contentActive.siblings().removeClass('active');
                    $(this).addClass('active').parents('.tab-about').find('.tab-content').children().eq(liActive).siblings().hide();
                });
            });
            $('.tab-planning').each(function() {
            $(this).find('.tab-content').children().hide();
            $(this).find('.tab-content').children().first().show().addClass('active');
            $(this).find('.tab-list').children('li').on('click', function(){
                    var liActive = $(this).index(),
                    contentActive = $(this).siblings().removeClass('active').parents('.tab-planning').find('.tab-content').children().eq(liActive);
                    contentActive.addClass('active').fadeIn("slow");
                    contentActive.siblings().removeClass('active');
                    $(this).addClass('active').parents('.tab-planning').find('.tab-content').children().eq(liActive).siblings().hide();
                });
            });
        }; // Tab Product

        var googleMap = function() {            
            if ( $().gmap3 ) {  
                $(".map").gmap3({
                    map:{
                        options:{
                            zoom: 13,
                            mapTypeId: 'themesflat_style',
                            mapTypeControlOptions: {
                                mapTypeIds: ['themesflat_style', google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.HYBRID]
                            },
                            scrollwheel: false
                        }
                    },
                    getlatlng:{
                        address:  $('.flat-maps').data('address'),
                        callback: function(results) {
                            if ( !results ) return;
                            $(this).gmap3('get').setCenter(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()));
                            $(this).gmap3({
                                marker:{
                                    latLng:results[0].geometry.location,
                                    options:{
                                        icon: $('.flat-maps').data('image')
                                    }
                                }
                            });
                        }
                    },
                    styledmaptype:{
                        id: "themesflat_style",
                        options:{
                            name: "Themesflat Map"
                        },
                        styles:[
                            {
                                "featureType": "water",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#e9e9e9"
                                    },
                                    {
                                        "lightness": 17
                                    }
                                ]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#f5f5f5"
                                    },
                                    {
                                        "lightness": 20
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.fill",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 17
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 29
                                    },
                                    {
                                        "weight": 0.2
                                    }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 18
                                    }
                                ]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 16
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#f5f5f5"
                                    },
                                    {
                                        "lightness": 21
                                    }
                                ]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#dedede"
                                    },
                                    {
                                        "lightness": 21
                                    }
                                ]
                            },
                            {
                                "elementType": "labels.text.stroke",
                                "stylers": [
                                    {
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 16
                                    }
                                ]
                            },
                            {
                                "elementType": "labels.text.fill",
                                "stylers": [
                                    {
                                        "saturation": 36
                                    },
                                    {
                                        "color": "#333333"
                                    },
                                    {
                                        "lightness": 40
                                    }
                                ]
                            },
                            {
                                "elementType": "labels.icon",
                                "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#f2f2f2"
                                    },
                                    {
                                        "lightness": 19
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry.fill",
                                "stylers": [
                                    {
                                        "color": "#fefefe"
                                    },
                                    {
                                        "lightness": 20
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                    {
                                        "color": "#fefefe"
                                    },
                                    {
                                        "lightness": 17
                                    },
                                    {
                                        "weight": 1.2
                                    }
                                ]
                            }
                        ]
                    },  
                });
            }
            $('.map').css( 'height', $('.flat-maps').data('height') );
        };// GoogleMap

        var portfolioIsotope = function() { 
            if ( $().isotope ) {           
                var $container = $('.wrap-portfolio');
                $container.imagesLoaded(function(){
                    $container.isotope({
                        itemSelector: '.ipsotope',
                        transitionDuration: '1s',
                        layoutMode: 'fitRows',
                        masonry: {
                            columnWidth: '.wrap-portfolio'
                        }
                    });
                });

                $('.menu-tab li').on('click',function() {                           
                    var selector = $(this).attr('data-filter');
                    $('.menu-tab li').removeClass('active');
                    $(this).addClass('active');
                    $container.isotope({ filter: selector });
                    return false;
                });            
            };
        }; // Portfolio Isotope

        var portfolioIsotope_s2 = function() { 
            if ( $().isotope ) {           
                var $container = $('.wrap-portfolio-1');
                $container.imagesLoaded(function(){
                    $container.isotope({
                        itemSelector: '.ipsotope',
                        transitionDuration: '1s',
                        layoutMode: 'fitRows',
                        masonry: {
                            columnWidth: '.wrap-portfolio-1'
                        }
                    });
                });

                $('.menu-tab li').on('click',function() {                           
                    var selector = $(this).attr('data-filter');
                    $('.menu-tab li').removeClass('active');
                    $(this).addClass('active');
                    $container.isotope({ filter: selector });
                    return false;
                });            
            };
        }; // Portfolio Isotope

        var portfolioIsotope_s3 = function() { 
            if ( $().isotope ) {           
                var $container = $('.wrap-portfolio-2');
                $container.imagesLoaded(function(){
                    $container.isotope({
                        itemSelector: '.ipsotope',
                        transitionDuration: '1s',
                        layoutMode: 'masonry'
                    });
                });

                $('.menu-tab li').on('click',function() {                           
                    var selector = $(this).attr('data-filter');
                    $('.menu-tab li').removeClass('active');
                    $(this).addClass('active');
                    $container.isotope({ filter: selector });
                    return false;
                });            
            };
        }; // Portfolio Isotope

        var videoPopup =  function() {
            $(".fancybox").on("click", function(){
                $.fancybox({
                  href: this.href,
                  type: $(this).data("type")
                }); // fancybox
                return false   
            }); // on
        }; // Video Popup

        var popupGallery = function () {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: false,
                slideshowSpeed: 3000
            });
        }; // Popup Gallery

        var scroll = function() {
            var scrollDown = $('.scroll-down a');
            scrollDown.on('click', function() {
                $('html, body').animate({ scrollTop: $( $(this).attr('href') ).offset().top}, 800);
                return false;
            });
        } // Scroll

        var goTop = function(){
            var gotop = $('.go-top');
            var btn_scroll = $('.scroll-down a');
            $(window).on('scroll', function() {
                if ($(this).scrollTop() > 500) {
                    gotop.addClass('show');
                } else {
                    gotop.removeClass('show');
                }
            });
            gotop.on('click', function() {
                $('html, body').animate({ scrollTop: 0}, 800, 'easeInOutExpo');
                return false;
            });
        }; // Go Top

        var retinaLogos = function() {
          var retina = window.devicePixelRatio > 1 ? true : false;
            if(retina) {
                $('.header .logo').find('img').attr( {src:'./images/logo@2x.png',width:'107',height:'78'} );   
            }
        }; 

        var removePreloader = function() {        
            $('.preloader').fadeOut('2s',function () {
                $(this).remove();
            });
        }; // Remove Preloader

    // Dom Ready
    $(function() {
        responsiveMenu();
        headerFixed();
        searchButton();
        menuCanvas();
        parallax();
        progressBar();
        accordionToggle();
        slideClient();
        slideTeam_s1();
        slideTestimonial();
        slideTeam_s2();
        slideRelated();
        slideTestimonial_s2();
        slidePortfolio();
        slideIconbox();
        slideIconbox_S2();
        slideTeam_s3();
        slidePortfolio_s2();
        portfolioIsotope();
        portfolioIsotope_s2();
        portfolioIsotope_s3();
        counter();
        detectViewport();
        tabContent();
        googleMap();
        sectionVideo();
        videoPopup();
        popupGallery();
        scroll();
        goTop();
        retinaLogos();
        removePreloader();
    });


})(jQuery);