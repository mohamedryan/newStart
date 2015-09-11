"use strict";
$(document).ready(function() {
    $("a[href='#']").click(function(a) {
        a.preventDefault()
    });
    var a = new GMaps({
        div: "#map",
        zoom: 16,
        lat: -12.043333,
        lng: -77.028333,
        scrollwheel: !1,
        styles: [{
            featureType: "landscape",
            stylers: [{
                saturation: -100
            }, {
                lightness: 65
            }, {
                visibility: "on"
            }]
        }, {
            featureType: "poi",
            stylers: [{
                saturation: -100
            }, {
                lightness: 51
            }, {
                visibility: "simplified"
            }]
        }, {
            featureType: "road.highway",
            stylers: [{
                saturation: -100
            }, {
                visibility: "simplified"
            }]
        }, {
            featureType: "road.arterial",
            stylers: [{
                saturation: -100
            }, {
                lightness: 30
            }, {
                visibility: "on"
            }]
        }, {
            featureType: "road.local",
            stylers: [{
                saturation: -100
            }, {
                lightness: 40
            }, {
                visibility: "on"
            }]
        }, {
            featureType: "transit",
            stylers: [{
                saturation: -100
            }, {
                visibility: "simplified"
            }]
        }, {
            featureType: "administrative.province",
            stylers: [{
                visibility: "off"
            }]
        }, {
            featureType: "water",
            elementType: "labels",
            stylers: [{
                visibility: "on"
            }, {
                lightness: -25
            }, {
                saturation: -100
            }]
        }, {
            featureType: "water",
            elementType: "geometry",
            stylers: [{
                hue: "#ffff00"
            }, {
                lightness: -25
            }, {
                saturation: -97
            }]
        }]
    });
    a.addMarker({
        lat: -12.043333,
        lng: -77.028333,
        title: "Lima",
        color: "blue",
        infoWindow: {
            content: "<p>HTML Content</p>"
        }
    }), $("nav.large").affix({
        offset: {
            top: $("nav.large").offset().top
        }
    }), $("nav.large").on("affix.bs.affix", function() {
        var a = $(this);
        $(".head-navbar").css("margin-bottom", a.height())
    }), $("nav.large").on("affix-top.bs.affix", function() {
        $(this);
        $(".head-navbar").css("margin-bottom", 0)
    })


	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	$('.sendMessage').submit(function(event) {

	    event.preventDefault();
        var form = $(this);
        var url = form.attr('action');

	    $.ajax({
	        url: form.prop('action'),
	        type: 'post',
	        data: form.serialize(),

	        success: function(data) {

                form.find('text-danger').remove();

                if(data.sendState){
	                $('.sendMessage :input').val(null);

                    //$('your message sent successfully .').appendTo('.sendMessage > p');
                    // success message
                }else{
                    console.log('rtutyuyiui'); // something went wrong
                }



	        },
	        error: function(jqXhr) {

	            var errors = jqXhr.responseJSON;
                console.log(errors);

                form.find('.text-danger').remove();

                $.each(errors, function(key, value) {


                    form.find(':input#' + key).parent().append('<span class="text-danger">' + errors[key] + '</span>');


	                if (errors['name'] == undefined) {

	                    $(form + ' :input#' + 'name' + ' span').remove();
	                }
	                if (errors['email'] == undefined) {

	                    $(form + ' :input#' + 'email' + ' span').remove();
	                }
	                if (errors['message'] == undefined) {

	                    $(form + ' :input#' + 'message' + ' span').remove();
	                }
	                //$('thanks for you').appendTo(form + ' > p');


	            });

	        }
	    });

	 });

});