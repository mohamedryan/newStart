"use strict";
function getContrastYIQ(a) {
    a = a.replace(/^#/, "");
    var b = parseInt(a.substr(0, 2), 16),
        c = parseInt(a.substr(2, 2), 16),
        d = parseInt(a.substr(4, 2), 16),
        e = (299 * b + 587 * c + 114 * d) / 1e3;
    return e >= 128 ? palette.get("Black", "Hint Text") : palette.get("White", "Hint Text")
}

function getDiameter(a) {
    return Math.round(Math.sqrt(Math.pow(a.height(), 2) + Math.pow(a.width(), 2)))
}

function initiate() {
    $(function() {
        Materialize.updateTextFields()
    })
}! function(a) {
    a.fn.subTitle = function() {
        return this.each(function() {
            var b = a(this);
            if (!b.hasClass("initiated")) {
                b.addClass("initiated");
                var c = b.find(".chip-img"),
                    d = c.find("img"),
                    e = b.find(".chip-title"),
                    f = function() {
                        var a = e.text().match(/\S+/g);
                        if (null != a) return a.length > 1 ? a[0].charAt(0) + a[a.length - 1].charAt(0) : a[0].charAt(0)
                    };
                if (!d.length || !d.attr("src")) {
                    d.remove();
                    var g = palette.random("500");
                    c.css({
                        "background-color": g,
                        color: getContrastYIQ(g)
                    }).append(f())
                }
            }
        })
    }
}(jQuery), $("li.chip").subTitle(), $(function() {
    var a = $(".main-search"),
        b = $('<input class="search-hint" type="text" />'),
        c = [{
            value: "baraa mashaal",
            data: {
                imgSRC: "/images/profile-pic.jpg"
            }
        }, {
            value: "shaza mashaal",
            data: {
                imgSRC: ""
            }
        }];
    a.hasClass("initiated") || (a.addClass("initiated").before(b), a.autocomplete({
        lookup: c,
        onHint: function(a) {
            b.val(a)
        },
        containerClass: "chips main-search-suggestions",
        formatResult: function(a) {
            var b = '<div class="chip waves-effect waves-default"><div class="chip-img"><img src=' + a.data.imgSRC + '></div><div class="chip-content"><h5>' + a.value + "</h5></div></div>";
            return b
        },
        onSelect: function(a) {
            console.log(a)
        },
        zIndex: 1
    }))
}), $(document).ready(function() {
    $("#sidenav-initiate").sideNav()
}), $(document).ready(function() {
    var a = !1;
    $(document).on("click", "nav .fullscreen", function() {
        function b(b) {
            b.requestFullscreen ? b.requestFullscreen() : b.mozRequestFullScreen ? b.mozRequestFullScreen() : b.webkitRequestFullscreen ? b.webkitRequestFullscreen() : b.msRequestFullscreen && b.msRequestFullscreen(), a = !0
        }

        function c() {
            document.exitFullscreen ? document.exitFullscreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitExitFullscreen && document.webkitExitFullscreen(), a = !1
        }
        return $(this).addClass("open"), a ? (c(), !1) : void b(document.documentElement)
    }),
        function() {
            var a = !1,
                b = !1,
                c = $("nav .nav-wrapper"),
                d = c.find(".menu"),
                e = d.find("span"),
                f = c.find(".search"),
                g = $("#sidenav-initiate"),
                h = $("#slide-out"),
                i = $('<div class="search-bg"></div>').css({
                    top: f.position().top + f.height() / 2 - getDiameter(c),
                    left: f.position().left + f.width() / 2 - getDiameter(c),
                    width: 2 * getDiameter(c),
                    height: 2 * getDiameter(c)
                }),
                j = function(a) {
                    var b = $(".main-search"),
                        f = 300,
                        g = 300;
                    e.velocity({
                        rotateZ: "+=180deg"
                    }, {
                        duration: f,
                        easing: "linear"
                    }), "open" === a && (i.velocity({
                        scale: "1"
                    }, {
                        duration: f,
                        easing: "easeInQuart",
                        begin: function() {
                            c.css("overflow", "hidden"), d.addClass("active")
                        },
                        complete: function() {
                            $("body").addClass("search-mode")
                        }
                    }), b.focus().typed({
                        strings: ["Search Here"],
                        typeSpeed: 0,
                        startDelay: g,
                        attr: "placeholder"
                    })), "close" === a && ($("body").removeClass("search-mode"), d.removeClass("active"), i.velocity({
                        scale: "0"
                    }, {
                        duration: 500,
                        easing: "easeOutQuart",
                        complete: function() {
                            c.css("overflow", "visible")
                        }
                    }), clearInterval(b.data("typed").timeout), b.removeData("typed").attr("placeholder", ""))
                };
            $.Velocity.hook(i, "scale", "0"), c.prepend(i), window.innerWidth > 1200 && h.css("left", 0), d.on("click", function() {
                return a ? (j("close"), a = !1, !1) : b ? (g.sideNav("hide"), b = !1, !1) : (g.sideNav("show"), b = !0, !1)
            }), $(document).on("click", ".drag-target,#sidenav-overlay", function() {
                b = !1
            }), f.on("click", function() {
                return a ? (e.add(i).velocity("stop").velocity("reverse"), d.removeClass("active"), c.css("overflow", "hidden").parent("nav").removeClass("search-mode"), void(a = !1)) : (j("open"), void(a = !0))
            }), $(window).resize(function() {
                i.css({
                    top: f.position().top + f.height() / 2 - getDiameter(c),
                    left: f.position().left + f.width() / 2 - getDiameter(c),
                    width: 2 * getDiameter(c),
                    height: 2 * getDiameter(c)
                }), b && (g.sideNav("hide"), b = !1), window.innerWidth > 1200 && b === !1 ? h.css("left", 0) : h.css("left", -(h.width() + 10))
            }), $("#notification .dropdown-wrapper").scrollbar()
        }()
}), $(document).ready(function() {
    var a = $("#slide-out"),
        b = ($("#sidenav-initiate"), $(".avatar-img")),
        c = b.children("img"),
        d = c.attr("src"),
        e = b.siblings(".avatar-name").html().split(" "),
        f = e[0].charAt(0);
    f = 1 == e.length ? f : e[0].charAt(0) + e[e.length - 1].charAt(0), c.length && d || (c.remove(), b.append(f)),
        function() {
            {
                var b = !1;
                a.children("ul")
            }
            a.find("#avatar-options").on("click", function() {
                var c = $(this);
                return b ? (c.velocity({
                    rotateZ: "-=270deg"
                }, {
                    duration: 200,
                    easing: "easeInOutSine"
                }), a.find(".list").velocity({
                    translateX: "0%",
                    opacity: 1
                }, {
                    display: "block"
                }), a.find(".avatar-options").velocity({
                    translateX: "-100%",
                    opacity: 0
                }, {
                    display: "none"
                }), void(b = !1)) : (c.velocity({
                    rotateZ: "-=90deg"
                }, {
                    duration: 200,
                    easing: "easeInOutSine"
                }), a.find(".list").velocity({
                    translateX: "-100%",
                    opacity: 0
                }, {
                    display: "none"
                }), a.find(".avatar-options").velocity({
                    translateX: "0%",
                    opacity: 1
                }, {
                    display: "block"
                }), void(b = !0))
            })
        }()
}), $(document).ready(function() {
    $("form.capitalize").validate({
        errorElement: "span",
        errorClass: "invalid",
        validClass: "valid",
        errorPlacement: function(a, b) {
            var c = b.siblings(".helper-text");
            if (c.length) b.siblings(".helper-text").append(a);
            else {
                var d = $('<small class="helper-text"></small>').append(a);
                b.parent(".input-field").append(d)
            }
        },
        highlight: function(a, b, c) {
            $(a).closest(".input-field").addClass(b).removeClass(c)
        },
        unhighlight: function(a, b, c) {
            $(a).closest(".input-field").removeClass(b).addClass(c)
        },
        submitHandler: function(a, b) {
            b.preventDefault(), console.log($(a))
        }
    })
});


if(window.location.hash.substr(1) == ''){
    $('#wrapper').css({'display':'block','opacity':1});
}

$(document).ready(function() {

    var url;
    var pageHash = window.location.hash.substr(3);
    var viewport = $('#wrapper');
    var loading = $('<div id="main-progress"> <div class="wrapper"> <p>Getting your content ...</p><div class="progress"><div class="indeterminate"></div></div></div></div>');
    var anchorState;
    var pathName = window.location.pathname;
    var prefix;
    if(pathName[pathName.length - 1] != '/'){

        prefix = pathName.split("/")[1] + '/';
    }else{
        prefix =  '';
    }

    if(pageHash != ''){
        var urlPathName = window.location.pathname.replace('/dashboard/','');
        if(urlPathName == pageHash){
            //window.location.hash="";
            return;
        }
        viewport.velocity({
                opacity: 0,
            }, {
                display: 'none',
                duration: 150,
                complete: function () {
                    ajaxContentLoad(pageHash);
                },

            }
        ).after(loading);

        loading.velocity({opacity: 1}, {display: 'block'});
    }
    window.onpopstate = function () {
        var pageName = location.pathname.split('/')[location.pathname.split('/').length -1];
        viewport.velocity({
                opacity: 0,
            }, {
                display: 'none',
                duration: 150,
                complete: function () {
                    ajaxContentLoad(pageName);
                },

            }
        ).after(loading);

        loading.velocity({opacity: 1}, {display: 'block'});

    };
    $(document).on('click', '#slide-out a,.brand-logo', function () {
        event.preventDefault();
        var anchor = $(this);
        //var data = anchor.attr('href');
        url = anchor.attr('href');
        var pathName = window.location.pathname;
        var prefix ;

        if(pathName[pathName.length - 1] != '/'){
            console.log(pathName.split('/'));
            var pathNameSplit = pathName.split('/');
            if(pathNameSplit.length > 2){
                prefix = '';
            }else{
                if(pathNameSplit[1] == url ){
                    prefix = '';
                    //data = '';
                }else{
                    prefix = pathName.split("/")[1] + '/';
                }
            }
        }else{
            prefix =  '';
        }

        history.pushState({},'',prefix + url);

        $('nav a,#slide-out a').click(function () {

            if (anchorState == 0)
                return false;

        });

            anchorState = 0;

            viewport.velocity({
                    opacity: 0,
                }, {
                    display: 'none',
                    duration: 150,
                    complete: function () {
                        ajaxContentLoad(url);
                    },

                }
            ).after(loading);

            loading.velocity({opacity: 1}, {display: 'block'});
    });



    function ajaxContentLoad(url) {

        $.ajax({
            type: 'get',
            url: url,
            //data: {'pageName': data},

            success: function (data) {

                var htmlData = $(data).find("#wrapper").html();
                $('#wrapper').html(htmlData);

                loading.velocity('stop').velocity({opacity: 0}, {
                    display: 'none', complete: function () {
                        loading.remove();

                        viewport.velocity('stop').velocity(
                            {opacity: 1},
                            {
                                display: 'block', duration: 150, complete: function () {
                                anchorState = 1;
                            }
                            }
                        );
                    }
                });

            },
            error: function (x) {
                // console.log(x);
                // alert("Hata Oluştu" +hata);
            }

        });

    }
});
