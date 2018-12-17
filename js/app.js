'use strict';

/*scroller*/
var nice = false;

$(document).ready(function() {
    nice = $("html").niceScroll();
});

var obj = window;

console.log(obj.length);
console.log("selector" in obj);



 jQuery(document).ready(function ($) {

    var lastId,
    topMenu = $("#top-navigation"),
    topMenuHeight = topMenu.outerHeight(),
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function () {
            var href = $(this).attr("href");
            if(href.indexOf("#") === 0){
                var item = $($(this).attr("href"));
                if (item.length) {
                    return item;
                }
            }
        });

    //Get width of container
    var containerWidth =$( window ).width();


     //Resize animated triangle
    $(".triangle").css({
        "border-left": 0 + 'px outset transparent',
        "border-right": containerWidth  + 'px outset transparent'
    });
    $(window).resize(function (){
        containerWidth = $( window ).width();
        //alert(containerWidth);

        $(".triangle").css({
            "border-left": 0 + 'px outset transparent',
            "border-right": containerWidth + 'px outset transparent'
        });
    });

    //Resize animated triangle
     $(".triangle1").css({
         "border-left": containerWidth + 'px outset transparent',
         "border-right": 0  + 'px outset transparent'
     });
     $(window).resize(function (){
         containerWidth = $( window ).width();
         //alert(containerWidth);

         $(".triangle1").css({
             "border-left": containerWidth + 'px outset transparent',
             "border-right": 0 + 'px outset transparent'
         });
     });


     //Resize animated triangle
     $(".triangle2").css({
         "border-left": containerWidth + 'px outset transparent',
         "border-right": 0  + 'px outset transparent'
     });
     $(window).resize(function (){
         containerWidth = $( window ).width();
         //alert(containerWidth);

         $(".triangle2").css({
             "border-left": containerWidth + 'px outset transparent',
             "border-right": 0 + 'px outset transparent'
         });
     });

    //Resize animated triangle
     $(".triangle3").css({
         "border-left": containerWidth + 'px outset transparent',
         "border-right": 0  + 'px outset transparent'
     });
     $(window).resize(function (){
         containerWidth = $( window ).width();
         //alert(containerWidth);

         $(".triangle3").css({
             "border-left": containerWidth + 'px outset transparent',
             "border-right": 0 + 'px outset transparent'
         });
     });

    //Resize animated triangle
     $(".triangle4").css({
         "border-left": 0 + 'px outset transparent',
         "border-right": containerWidth  + 'px outset transparent'
     });
     $(window).resize(function (){
         containerWidth = $( window ).width();
         //alert(containerWidth);

         $(".triangle4").css({
             "border-left": 0 + 'px outset transparent',
             "border-right": containerWidth + 'px outset transparent'
         });
     });

    //Initialize header slider.
    $('#da-slider').cslider();

    //Initial mixitup, used for animated filtering portgolio.
    $('#portfolio-grid').mixitup({
        'onMixStart': function (config) {
            $('div.toggleDiv').hide();
        }
    });

    //Initial Out clients slider in client section
    $('#clint-slider').bxSlider({
        pager: false,
        minSlides: 1,
        maxSlides: 5,
        moveSlides: 2,
        slideWidth: 210,
        slideMargin: 25,
        prevSelector: $('#client-prev'),
        nextSelector: $('#client-next'),
        prevText: '<i class="icon-left-open"></i>',
        nextText: '<i class="icon-right-open"></i>'
    });





    $('input, textarea').placeholder();

    // Bind to scroll
    $(window).scroll(function ()
    {

        //Display or hide scroll to top button
        if ($(this).scrollTop() > 100)
        {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }

        if ($(this).scrollTop() >130) {
            $('.navbar').addClass('navbar-fixed-top animated fadeInDown');
        } else {
            $('.navbar').removeClass('navbar-fixed-top animated fadeInDown');
        }

        // Get container scroll position
        var fromTop = $(this).scrollTop() + topMenuHeight +140;

        // Get id of current scroll item
        var cur = scrollItems.map(function () {
            if ($(this).offset().top < fromTop)
                return this;
        });

        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";

        if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
            .parent().removeClass("active")
            .end().filter("[href=#" + id + "]").parent().addClass("active");
        }
    });

    /*
    Function for scroliing to top
    ************************************/
    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });


    $(window).load(function () {
        function filterPath(string) {
            return string.replace(/^\//, '').replace(/(index|default).[a-zA-Z]{3,4}$/, '').replace(/\/$/, '');
        }
        $('a[href*=#]').each(function () {
            if (filterPath(location.pathname) == filterPath(this.pathname) && location.hostname == this.hostname && this.hash.replace(/#/, '')) {
                var $targetId = $(this.hash),
                $targetAnchor = $('[name=' + this.hash.slice(1) + ']');
                var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;

                if ($target) {

                    $(this).click(function () {

                        //Hack collapse top navigation after clicking
                        topMenu.parent().attr('style', 'height:0px').removeClass('in'); //Close navigation
                        $('.navbar .btn-navbar').addClass('collapsed');

                        var targetOffset = $target.offset().top -80;
                        $('html, body').animate({
                            scrollTop: targetOffset
                        }, 800);
                        return false;
                    });
                }
            }
        });
});

    /*
    Sand newsletter
    **********************************************************************/
    $('#subscribe').click(function () {
        var error = false;
        var emailCompare = /^([a-z0-9_.-]+)@([0-9a-z.-]+).([a-z.]{2,6})$/; // Syntax to compare against input
        var email = $('input#nlmail').val().toLowerCase(); // get the value of the input field
        if (email == "" || email == " " || !emailCompare.test(email)) {
            $('#err-subscribe').show(500);
            $('#err-subscribe').delay(4000);
            $('#err-subscribe').animate({
                height: 'toggle'
            }, 500, function () {
                // Animation complete.
            });
            error = true; // change the error state to true
        }

        if (error === false) {
            $.ajax({
                type: 'POST',
                url: 'php/newsletter.php',

                data: {
                    email: $('#nlmail').val()
                },
                error: function (request, error) {
                    alert("An error occurred");
                },
                success: function (response) {
                    if (response == 'OK') {
                        $('#success-subscribe').show();
                        $('#nlmail').val('')
                    } else {
                        alert("An error occurred");
                    }
                }
            });
        }

        return false;
    });

    /*
Sand mail
**********************************************************************/
$("#send-mail").click(function () {

        var name = $('input#name').val(); // get the value of the input field
        var error = false;
        if (name == "" || name == " ") {
            $('#err-name').show(500);
            $('#err-name').delay(4000);
            $('#err-name').animate({
                height: 'toggle'
            }, 500, function () {
                // Animation complete.
            });
            error = true; // change the error state to true
        }

        var emailCompare = /^([a-z0-9_.-]+)@([da-z.-]+).([a-z.]{2,6})$/; // Syntax to compare against input
        var email = $('input#email').val().toLowerCase(); // get the value of the input field
        if (email == "" || email == " " || !emailCompare.test(email)) {
            $('#err-email').show(500);
            $('#err-email').delay(4000);
            $('#err-email').animate({
                height: 'toggle'
            }, 500, function () {
                // Animation complete.
            });
            error = true; // change the error state to true
        }


        var comment = $('textarea#comment').val(); // get the value of the input field
        if (comment == "" || comment == " ") {
            $('#err-comment').show(500);
            $('#err-comment').delay(4000);
            $('#err-comment').animate({
                height: 'toggle'
            }, 500, function () {
                // Animation complete.
            });
            error = true; // change the error state to true
        }

        // Syntax to compare against input
        var phoneCompare = /^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/;
        var phone = $('input#phone').val().toLowerCase(); // get the value of the input field
        if (phone == "" || phone == " " || !phoneCompare.test(phone)) {
            $('#err-phone').show(500);
            $('#err-phone').delay(4000);
            $('#err-phone').animate({
                height: 'toggle'
            }, 500, function () {
                // Animation complete.
            });
            error = true; // change the error state to true
        }




        if (error == false) {
            var dataString = $('#contact-form').serialize(); // Collect data from form
            $.ajax({
                type: "POST",
                url: $('#contact-form').attr('action'),
                data: dataString,
                timeout: 6000,
                error: function (request, error) {

                },
                success: function (response) {
                    response = $.parseJSON(response);
                    if (response.success) {
                        $('#successSend').show();
                        $("#name").val('');
                        $("#email").val('');
                        $("#comment").val('');
                        $("#phone").val('');
                    } else {
                        $('#errorSend').show();
                    }
                }
            });
            return false;
        }

        return false; // stops user browser being directed to the php file
    });



    //Function for show or hide portfolio desctiption.
    $.fn.showHide = function (options) {

        var defaults = {
            speed: 1000,
            easing: '',
            changeText: 0,
            showText: 'Show',
            hideText: 'Hide'
        };
        var options = $.extend(defaults, options);
        $(this).click(function ()
        {
            $('.toggleDiv').slideUp(options.speed, options.easing);
            var toggleClick = $(this);
            var toggleDiv = $(this).attr('rel');
            $(toggleDiv).slideToggle(options.speed, options.easing, function () {
                if (options.changeText == 1) {
                    $(toggleDiv).is(":visible") ? toggleClick.text(options.hideText) : toggleClick.text(options.showText);
                }
            });

            return false;
        });
    };

    //Initial Show/Hide portfolio element.
    $('div.toggleDiv').hide();
    $('.show_hide').showHide({
        speed: 500,
        changeText: 0,
        showText: 'View',
        hideText: 'Close'
    });

    /************************
    Animate elements
    *************************/

    //Animate thumbnails
    jQuery('.thumbnail').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery(this).addClass("animated fadeInDown");
        } else {
            jQuery(this).removeClass("animated fadeInDown");
        }
    });

    //Animate triangles
    jQuery('.triangle').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery(this).addClass("animated fadeInDown");
        } else {
            jQuery(this).removeClass("animated fadeInDown");
        }
    });

    //Animate triangles
     jQuery('.triangle1').bind('inview', function (event, visible) {
         if (visible == true) {
             jQuery(this).addClass("animated fadeInDown");
             jQuery(this).removeClass("z0");
             jQuery(this).addClass("z1");
         } else {
             jQuery(this).removeClass("animated fadeInDown");
             jQuery(this).removeClass("z1");
             jQuery(this).addClass("z0");
         }
     });
     //Animate triangles
     jQuery('.triangle2').bind('inview', function (event, visible) {
         if (visible == true) {
             jQuery(this).addClass("animated fadeInDown");
         } else {
             jQuery(this).removeClass("animated fadeInDown");
         }
     });

    //Animate triangles
     jQuery('.triangle3').bind('inview', function (event, visible) {
         if (visible == true) {
             jQuery(this).addClass("animated fadeInUp");
         } else {
             jQuery(this).removeClass("animated fadeInUp");
         }
     });

     //Animate triangles
     jQuery('.triangle4').bind('inview', function (event, visible) {
         if (visible == true) {
             jQuery(this).addClass("animated fadeInUp");
         } else {
             jQuery(this).removeClass("animated fadeInUp");
         }
     });


     //animate first team member
    jQuery('#first-person').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('#first-person').addClass("animated pulse");
        } else {
            jQuery('#first-person').removeClass("animated pulse");
        }
    });

    //animate sectond team member
    jQuery('#second-person').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('#second-person').addClass("animated pulse");
        } else {
            jQuery('#second-person').removeClass("animated pulse");
        }
    });

    //animate thrid team member
    jQuery('#third-person').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('#third-person').addClass("animated pulse");
        } else {
            jQuery('#third-person').removeClass("animated pulse");
        }
    });

    //Animate price columns
    jQuery('.price-column, .testimonial').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery(this).addClass("animated fadeInDown");
        } else {
            jQuery(this).removeClass("animated fadeInDown");
        }
    });

     //Animate blog columns
     jQuery('.timeline-image, .timeline-panel, .testimonial').bind('inview', function (event, visible) {
         if (visible == true) {
             jQuery(this).addClass("animated fadeInDown");
         } else {
             jQuery(this).removeClass("animated fadeInDown");
         }
     });

     //animate services section
     jQuery('.serviceDiv').bind('inview', function (event, visible) {
         if (visible == true) {
             jQuery(this).addClass("animated fadeInDown");
         } else {
             jQuery(this).removeClass("animated fadeInDown");
         }
     });

     jQuery('#first-place,#second-place').bind('inview', function (event, visible) {
         if (visible == true) {
             jQuery(this).addClass("animated fadeInDown");
         } else {
             jQuery(this).removeClass("animated fadeInDown");
         }
     });


    //Animate contact form
    jQuery('.contact-form').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.contact-form').addClass("animated fadeInDown");
        } else {
            jQuery('.contact-form').removeClass("animated fadeInDown");
        }
    });

     //Animate contact form
     jQuery('ul#clint-slider li').bind('inview', function (event, visible) {
         if (visible == true) {
             jQuery('ul#clint-slider li').addClass("animated fadeInDown");
         } else {
             jQuery('ul#clint-slider li').removeClass("animated fadeInDown");
         }
     });




     //Animate skill bars
    jQuery('.skills > li > span').one('inview', function (event, visible) {
        if (visible == true) {
            jQuery(this).each(function () {
                jQuery(this).animate({
                    width: jQuery(this).attr('data-width')
                }, 3000);
            });
        }
    });
});

//Initialize google map for contact setion with your location.

function initializeMap() {

    var lat = '6.8927193'; //Set your latitude.
    var lon = '79.8636426'; //Set your longitude.

    var centerLon = lon - 0.0105;

    var myOptions = {
        scrollwheel: false,
        draggable: true,
        disableDefaultUI: true,
        center: new google.maps.LatLng(lat, centerLon),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP,

    };

    //Bind map to elemet with id map-canvas
    var map = new google.maps.Map(document.getElementById('map-canvas'), myOptions);
    var marker = new google.maps.Marker({
        map: map,
        position:new google.maps.LatLng(6.8927193,79.8536914),
        icon: 	{
            url: 'images/marker.png',
            scaledSize: new google.maps.Size(60, 60)
        }

    });


    var contentString =     "<div>" +
                                "<span style='font-size:20px;font-weight:bold;'>webdesignerssrilanka.lk</span><br><br>" +
                                "<div style='padding:5px;background: rgb(6, 59, 128);'>" +
                                    "<img src='" + "images/logo.png" +
                                    "'>" +
                                "</div><br>" +
                                "<div style=''>" +
                                    "Web Designers Sri Lanka is a locally based web <br>" +
                                    "design and development company. We specialize <br>" +
                                    "in creating websites that build company profiles, <br>" +
                                    "utilizing a range of online marketing strategies <br>" +
                                    "and web technologies ." +
                                "</div>" +
                            "</div>";




    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
    });

    //infowindow.open(map, marker);
}
google.maps.event.addDomListener(window, 'load', initializeMap);






$(function()
{
    $("img.lazy").lazyload(
    {
        effect : "fadeIn",
        //event : "click"
    });
});