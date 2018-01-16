/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


/*
(function () {
    $('li.treeview').on('click', 'ul.sidebar-menu', function () {
        alert('dsdsdsdsd')
    })

})()
alert('dsdsdsdsd')

$('li.treeview').on('click', 'ul.sidebar-menu', function () {
}
*/
var Cookie = (function () {
    function cookieExist(name) {
        var req;
        var cookies = document.cookie.split(';');
        cookies.forEach(function (c) {
            if (c.indexOf(name) > -1) {
                req = c;
            }

            return c.split(':')[1] ? c.split(':')[1] : false;
        })
    };

    function remove(name) {
        var cookies = document.cookie.split(';');
        cookies.forEach(function (c) {
            if (c.indexOf(name) > -1) {
                c = '';
            }
        })
    }

    return {
        set: function (name, value) {
            if (cookieExist(name)) {
                remove(name)
            }
            document.cookie = '' + name + ':' + value + ''
        },
        get: function (name) {
            return cookieExist(name);

        }
    };
});

// setActiveScreen()

function setActiveScreen() {
    $('li.treeview').each(function (li) {
        var a = Cookie.get('activeScreen')
        if (a) {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active')

            }
            if ($(this).children('a').text().trin() == Cookie('activeScreen')) {
                $(this).children('ul.treeview-menu').show()
                $(this).addClass('active')
            }
        } else {
            $('li.treeview')[0].addClass('active')
        }
    });
}

// Side bar TREE VIEW------------------------------------------------------------------------------------------------------
$('li.treeview a').click(function () {
    $('li.treeview').each(function (li) {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active')
        }
    });
    if ($(this).parent('li').hasClass('menu-open')) {
        $(this).parent('li').removeClass('menu-open')
    } else {
        $(this).parent('li').addClass('menu-open')
    }
    $(this).parent('li').children('ul.treeview-menu').slideToggle("fast")
    $(this).parent('li').addClass('active');

})


$('#toggle-sidebar').click(function () {
    $('body').hasClass('sidebar-collapse') ? $('body').removeClass('sidebar-collapse') : $('body').addClass('sidebar-collapse');
})
//SIDE BAR TREE VIEW END------------------------------------------------------------------------------------------------------

/*Input FILE--------------------------------------------------------------------------------------
* ---------------------------------------------------------------------------------------------------*/

function bs_input_file() {
    $(".input-file").before(
        function () {
            if (!$(this).prev().hasClass('input-ghost')) {
                var element = $("<input type='file' id='input-ghost' class='input-ghost' style='visibility:hidden; height:0'>");
                element.attr("name", $(this).attr("name"));
                element.change(function () {
                    element.next(element).find('input').val((element.val()).split('\\').pop());
                });
                $(this).find("button.btn-choose").click(function () {
                    element.click();
                });
                $(this).find("button.btn-reset").click(function () {
                    element.val(null);
                    $(this).parents(".input-file").find('input').val('');
                });
                $(this).find('input').css("cursor", "pointer");
                $(this).find('input').mousedown(function () {
                    $(this).parents('.input-file').prev().click();
                    return false;
                });
                return element;
            }
        }
    );
}

$(function () {
    bs_input_file();
});

/*END Input FILE--------------------------------------------------------------------------------------
* ---------------------------------------------------------------------------------------------------*/


/********************************************************\
 * Show Hide Button Related Input In CArousel Admin Panel**
 \ *******************************************************/

function enableDisableBtnRelatedInputsForCarousel() {
    if ($('#includeBtn').is(':checked')) {
        $('#btnTxt').attr("disabled", false)
        $('#btnUrl').attr("disabled", false)
    } else if (!($('#includeBtn').is(':checked'))) {
        $('#btnTxt').attr("disabled", true)
        $('#btnUrl').attr("disabled", true)
    }
}
enableDisableBtnRelatedInputsForCarousel()

$('#includeBtn').click(function () {
    enableDisableBtnRelatedInputsForCarousel()
})

/********************************************************\
 *End  Show Hide Button Related Input In CArousel Admin Panel**
 \ *******************************************************/
/*---------------------------------------------------------------------------------------------------------|
* ------------------------------POST CAROUSEL DATA---------------------------------------------------------|
* ---------------------------------------------------------------------------------------------------------|
* */
$('#postCarouselData').click(function () {
    var form = new FormData();
    var image = $('#input-ghost')[0].files[0];
    form.append('image', image);
    form.append('captionHeader', $('#cHeading').val())
    form.append('caption', $('#caption').val())
    form.append('buttonText', $('#btnTxt').val())
    form.append('btnUrl', $('#btnUrl').val())
    $.ajax({
        url: '/intro/carousel',
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        type: "post",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        //{'filename': image.name},
        success: function (data) {
            alert(data);
        }
    })
})
/*End Input FILE*/
/*---------------------------------------------------------------------------------------------------------|
* ------------------------------END POST CAROUSEL DATA---------------------------------------------------------|
* ---------------------------------------------------------------------------------------------------------|
* */