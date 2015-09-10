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
	    var url = $(this).attr('action');
	    var datos = $(this).serialize();
	    var form = $(this);

	    $.ajax({
	        url: $(this).prop('action'),
	        type: 'post',
	        data: $(this).serialize(),

	        success: function(data) {



	        	if(data.success){

	            $('.sendMessage :input').val(null);
	        	}else{
	           
                     console.log('rtutyuyiui');
	        	}
	            $('.sendMessage :input#' + 'name' + ' + div > span').remove();
	            $('.sendMessage :input#' + 'email' + ' + div > span').remove();
	            $('.sendMessage :input#' + 'message' + ' + div > span').remove();

	            $('thanks for you').appendTo('.sendMessage > p');

	        },
	        error: function(jqXhr) {

	            var errors = jqXhr.responseJSON;

	            $.each(errors, function(key, value) {

	                var t = $(".sendMessage :input#" + key + " + div > span").length;
	                console.log(t);

	                if (t == 0) {
	                    $('<span class="text-danger">' + errors[key] + '</span>').appendTo('.sendMessage :input#' + key + ' + div');

	                }
	                if (t > 0) {
	                    $('.sendMessage :input#' + key + ' + div > span').remove();

	                    $('<span class="text-danger">' + errors[key] + '</span>').appendTo('.sendMessage :input#' + key + ' + div');

	                }

	                if (errors['name'] == undefined) {

	                    $('.sendMessage :input#' + 'name' + ' + div > span').remove();
	                }
	                if (errors['email'] == undefined) {

	                    $('.sendMessage :input#' + 'email' + ' + div > span').remove();
	                }
	                if (errors['message'] == undefined) {

	                    $('.sendMessage :input#' + 'message' + ' + div > span').remove();
	                }
	                $('thanks for you').appendTo('.sendMessage > p');

	            });

	        }
	    });

	 });

});