/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('jquery/src/jquery');


require('../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap');
require('./plugins/jquery.cookie');
require('./admin/admin')
/*----------------------------------------------------------------------------------------------------------------------
-------------------------------------------Carousel---------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------*/
/**/
// url="/intro/carousel"
var carouselData = {
    image: null,
    captionHeader: null,
    caption: null,
    buttonText: null,
    btnUrl: null
};



var carousel = (function () {
    var _interval;
    var _selector;
    var _url;
    var $imageContainer = null;

    function createCarousel(carouselData) {
        var noOfSlides = $($imageContainer).children('.item').length || 0
        $($imageContainer).append('  ' +
            '<div class="item">\n' +
            '            <img  src="{{ asset( \'images/intro/2.jpeg\') }}" caption="' + noOfSlides + '" ' +
            'alt="slidebg1" class="img-responsive"\n' +
            '                 data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">\n' +
            '</div>')


    }

    var initlides = function () {
        return $.ajax({
            url: _url,
            contentType:'application/json',
            dataType: "json",
            accept:'application/json',
            success: function (data) {
              console.log(data)

            },
            error: function (textStatus, errorThrown) {
                console.log(textStatus, errorThrown)
            }
        });
    };

    function initOptions() {
        var container = $(_selector).parent('div')
        _interval = $(container).attr('interval')
        _url = $(container).attr('url')
    }

    return {
        init: function (selector) {
            _selector = "#carouselExampleSlidesOnly"
            initOptions()
            $imageContainer = $(_selector).children('.carousel-inner');
            initlides(function () {
                $(_selector).carousel({
                    interval: _interval
                })
            })


        }
    }
})()

$('.carousel').bind('slide.bs.carousel', function (e) {
    $('.caption-' + activeSlide).animate({'opacity': '0'})
});
var activeSlide = 1;
$('.caption-' + activeSlide).animate({'opacity': '1'})
$('.carousel').bind('slid.bs.carousel', function (e) {
    activeSlide = $(this).children('.carousel-inner').children('.item.active').children('img').attr('caption');
    $('.caption-' + activeSlide).animate({'opacity': '1'})
    $('.caption-' + activeSlide).children('h3').addClass('animated bounceInLeft')
    $('.caption-' + activeSlide).children('p').addClass('animated bounceInRight')
});

carousel.init()

/*----------------------------------------------------------------------------------------------------------------------
--------------------------------------End  Carousel---------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------*/



