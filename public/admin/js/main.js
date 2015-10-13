"use strict";

function initiate() {
    Materialize.updateTextFields(), $(".validate").validate({
        errorElement: "span",
        errorClass: "invalid",
        validClass: "valid",
        errorPlacement: function(a, b) {
            var c, d = b.siblings(".helper-text");
            d.length ? b.siblings(".helper-text").append(a) : (c = $('<small class="helper-text"></small>').append(a), b.parent(".input-field").append(c))
        },
        highlight: function(a, b, c) {
            $(a).closest(".input-field").addClass(b).removeClass(c)
        },
        unhighlight: function(a, b, c) {
            $(a).closest(".input-field").removeClass(b).addClass(c)
        }
    })
}

function stackBoxBlurImage(a, b, c, d, e) {
    var f = document.getElementById(a),
        g = f.naturalWidth,
        h = f.naturalHeight,
        i = document.getElementById(b);
    i.style.width = g + "px", i.style.height = h + "px", i.width = g, i.height = h;
    var j = i.getContext("2d");
    j.clearRect(0, 0, g, h), j.drawImage(f, 0, 0), isNaN(c) || 1 > c || (d ? stackBoxBlurCanvasRGBA(b, 0, 0, g, h, c, e) : stackBoxBlurCanvasRGB(b, 0, 0, g, h, c, e))
}

function stackBoxBlurCanvasRGBA(a, b, c, d, e, f, g) {
    if (!(isNaN(f) || 1 > f)) {
        f |= 0, isNaN(g) && (g = 1), g |= 0, g > 3 && (g = 3), 1 > g && (g = 1);
        var h, i = document.getElementById(a),
            j = i.getContext("2d");
        try {
            try {
                h = j.getImageData(b, c, d, e)
            } catch (k) {
                try {
                    netscape.security.PrivilegeManager.enablePrivilege("UniversalBrowserRead"), h = j.getImageData(b, c, d, e)
                } catch (k) {
                    throw alert("Cannot access local image"), new Error("unable to access local image data: " + k)
                }
            }
        } catch (k) {
            throw alert("Cannot access image"), new Error("unable to access image data: " + k)
        }
        var l, m, n, o, p, q, r, s, t, u, v, w, x, y, z, A = h.data,
            B = f + f + 1,
            C = d - 1,
            D = e - 1,
            E = f + 1,
            F = new BlurStack,
            G = F;
        for (n = 1; B > n; n++) G = G.next = new BlurStack, n == E;
        G.next = F;
        for (var H = null, I = mul_table[f], J = shg_table[f]; g-- > 0;) {
            for (r = q = 0, m = e; --m > -1;) {
                for (s = E * (w = A[q]), t = E * (x = A[q + 1]), u = E * (y = A[q + 2]), v = E * (z = A[q + 3]), G = F, n = E; --n > -1;) G.r = w, G.g = x, G.b = y, G.a = z, G = G.next;
                for (n = 1; E > n; n++) o = q + ((n > C ? C : n) << 2), s += G.r = A[o], t += G.g = A[o + 1], u += G.b = A[o + 2], v += G.a = A[o + 3], G = G.next;
                for (H = F, l = 0; d > l; l++) A[q++] = s * I >>> J, A[q++] = t * I >>> J, A[q++] = u * I >>> J, A[q++] = v * I >>> J, o = r + ((o = l + f + 1) < C ? o : C) << 2, s -= H.r - (H.r = A[o]), t -= H.g - (H.g = A[o + 1]), u -= H.b - (H.b = A[o + 2]), v -= H.a - (H.a = A[o + 3]), H = H.next;
                r += d
            }
            for (l = 0; d > l; l++) {
                for (q = l << 2, s = E * (w = A[q]), t = E * (x = A[q + 1]), u = E * (y = A[q + 2]), v = E * (z = A[q + 3]), G = F, n = 0; E > n; n++) G.r = w, G.g = x, G.b = y, G.a = z, G = G.next;
                for (p = d, n = 1; f >= n; n++) q = p + l << 2, s += G.r = A[q], t += G.g = A[q + 1], u += G.b = A[q + 2], v += G.a = A[q + 3], G = G.next, D > n && (p += d);
                for (q = l, H = F, m = 0; e > m; m++) o = q << 2, A[o + 3] = z = v * I >>> J, z > 0 ? (z = 255 / z, A[o] = (s * I >>> J) * z, A[o + 1] = (t * I >>> J) * z, A[o + 2] = (u * I >>> J) * z) : A[o] = A[o + 1] = A[o + 2] = 0, o = l + ((o = m + E) < D ? o : D) * d << 2, s -= H.r - (H.r = A[o]), t -= H.g - (H.g = A[o + 1]), u -= H.b - (H.b = A[o + 2]), v -= H.a - (H.a = A[o + 3]), H = H.next, q += d
            }
        }
        j.putImageData(h, b, c)
    }
}

function stackBoxBlurCanvasRGB(a, b, c, d, e, f, g) {
    if (!(isNaN(f) || 1 > f)) {
        f |= 0, isNaN(g) && (g = 1), g |= 0, g > 3 && (g = 3), 1 > g && (g = 1);
        var h, i = document.getElementById(a),
            j = i.getContext("2d");
        try {
            try {
                h = j.getImageData(b, c, d, e)
            } catch (k) {
                try {
                    netscape.security.PrivilegeManager.enablePrivilege("UniversalBrowserRead"), h = j.getImageData(b, c, d, e)
                } catch (k) {
                    throw alert("Cannot access local image"), new Error("unable to access local image data: " + k)
                }
            }
        } catch (k) {
            throw alert("Cannot access image"), new Error("unable to access image data: " + k)
        }
        var l, m, n, o, p, q, r, s, t, u, v, w, x, y = h.data,
            z = f + f + 1,
            A = d - 1,
            B = e - 1,
            C = f + 1,
            D = new BlurStack,
            E = D;
        for (n = 1; z > n; n++) E = E.next = new BlurStack, n == C;
        E.next = D;
        for (var F = null, G = mul_table[f], H = shg_table[f]; g-- > 0;) {
            for (r = q = 0, m = e; --m > -1;) {
                for (s = C * (v = y[q]), t = C * (w = y[q + 1]), u = C * (x = y[q + 2]), E = D, n = C; --n > -1;) E.r = v, E.g = w, E.b = x, E = E.next;
                for (n = 1; C > n; n++) o = q + ((n > A ? A : n) << 2), s += E.r = y[o++], t += E.g = y[o++], u += E.b = y[o], E = E.next;
                for (F = D, l = 0; d > l; l++) y[q++] = s * G >>> H, y[q++] = t * G >>> H, y[q++] = u * G >>> H, q++, o = r + ((o = l + f + 1) < A ? o : A) << 2, s -= F.r - (F.r = y[o++]), t -= F.g - (F.g = y[o++]), u -= F.b - (F.b = y[o]), F = F.next;
                r += d
            }
            for (l = 0; d > l; l++) {
                for (q = l << 2, s = C * (v = y[q++]), t = C * (w = y[q++]), u = C * (x = y[q]), E = D, n = 0; C > n; n++) E.r = v, E.g = w, E.b = x, E = E.next;
                for (p = d, n = 1; f >= n; n++) q = p + l << 2, s += E.r = y[q++], t += E.g = y[q++], u += E.b = y[q], E = E.next, B > n && (p += d);
                for (q = l, F = D, m = 0; e > m; m++) o = q << 2, y[o] = s * G >>> H, y[o + 1] = t * G >>> H, y[o + 2] = u * G >>> H, o = l + ((o = m + C) < B ? o : B) * d << 2, s -= F.r - (F.r = y[o]), t -= F.g - (F.g = y[o + 1]), u -= F.b - (F.b = y[o + 2]), F = F.next, q += d
            }
        }
        j.putImageData(h, b, c)
    }
}

function BlurStack() {
    this.r = 0, this.g = 0, this.b = 0, this.a = 0, this.next = null
}
$(window).load(function() {
    var a = $("#window__preloader");
    a.fadeOut(1e3, "easeInExpo", function() {
        $(this).remove()
    }), a.children(".preloader-wrapper").animate({
        top: "25%"
    }, 1e3, "easeInExpo"), $("body").removeClass("window__unloaded")
}), $.ajaxSetup({
    animation: !0
}), $.ajaxPrefilter(function(a, b, c) {
    var d = $("#ajax__preloader");
    (a.animation === !0 || void 0 === a.animation) && (d.removeClass("inactive"), c.always(function() {
        d.addClass("inactive")
    }))
});
var adminlize = {};
adminlize.getContrastYIQ = function(a) {
    a = a.replace(/^#/, "");
    var b = parseInt(a.substr(0, 2), 16),
        c = parseInt(a.substr(2, 2), 16),
        d = parseInt(a.substr(4, 2), 16),
        e = (299 * b + 587 * c + 114 * d) / 1e3;
    return e >= 128 ? palette.get("Black", "Hint Text") : palette.get("White", "Hint Text")
}, adminlize.getDiameter = function(a, b) {
    if (a.length) {
        var c = a.width(),
            d = a.height();
        return Math.round("cicle" == b ? c >= d ? Math.sqrt(Math.pow(c, 2) + Math.pow(c, 2)) : Math.sqrt(Math.pow(d, 2) + Math.pow(d, 2)) : Math.sqrt(Math.pow(d, 2) + Math.pow(c, 2)))
    }
}, adminlize.getCenterPos = function(a) {
    if (a.length) {
        var b = a.position();
        return {
            top: b.left + a.height() / 2,
            left: b.left + a.width() / 2
        }
    }
    return "auto"
}, adminlize.newURL = function(a) {
    var b = $("<a href=" + a + "></a>");
    return b[0]
}, adminlize.newHTML = function(a) {
    var b = arguments.length <= 1 || void 0 === arguments[1] ? fasle : arguments[1],
        c = arguments.length <= 2 || void 0 === arguments[2] ? "div" : arguments[2],
        d = document.createElement(c);
    return d.innerHTML = a, b === !0 ? $(d) : d
}, adminlize.scrollDir = function(a, b, c) {
    var d = a.scrollTop(),
        e = void 0;
    a.scroll(function() {
        var a = $(this).scrollTop();
        if (a > d) {
            if ("down" === e) return d = a;
            b(), e = "down"
        } else {
            if ("up" === e) return d = a;
            c(), e = "up"
        }
        return d = a
    })
}, adminlize.blurImage = function(a) {
    var b = arguments.length <= 1 || void 0 === arguments[1] ? 25 : arguments[1],
        c = arguments.length <= 2 || void 0 === arguments[2] ? 2 : arguments[2];
    if (void 0 !== stackBoxBlurCanvasRGBA) {
        var d = Materialize.guid(),
            e = document.createElement("canvas"),
            f = e.getContext("2d"),
            g = new Image,
            h = function() {
                var a = e.width,
                    h = e.height;
                f.drawImage(g, 0, 0, a, h), stackBoxBlurCanvasRGBA(d, 0, 0, a, h, b, c)
            };
        return g.src = a, e.id = d, e.style.width = "100%", g.onload = function() {
            h()
        }, e
    }
},
function(a) {
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
                        color: adminlize.getContrastYIQ(g)
                    }).append(f())
                }
            }
        })
    }
}(jQuery),
function(a) {
    a.fn.ajaxReq = function(b) {
        var c = {
            url: null,
            type: "POST",
            datatype: "json",
            data: null,
            listener: "click",
            done: function() {},
            fail: function() {},
            always: function() {}
        };
        this.each(function() {
            function d() {
                null === g.url && (i && (g.url = f.attr("action")), f.is("a") && (g.url = f.attr("href")))
            }

            function e() {
                a.ajax({
                    url: g.url,
                    type: g.type,
                    dataType: g.dataType,
                    data: g.data
                }).done(function(a, b, c) {
                    g.done.call(f, a, b, c)
                }).fail(function(a, b, c) {
                    g.fail.call(f, a, b, c)
                }).always(function(a, b) {
                    g.always.call(f, a, b)
                })
            }
            var f = a(this),
                g = a.extend({}, c, b),
                h = !1,
                i = !1;
            null !== g.data && (h = !0), f.is("form") && (i = !0, g.listener = "submit"), d(), "none" === g.listener ? ((null === g.data && i || i && !h) && (g.data = a(this).serialize()), e()) : f.on(g.listener, function(b) {
                b.preventDefault(), (null === g.data && i || i && !h) && (g.data = a(this).serialize()), e()
            })
        })
    }
}(jQuery), $("li.chip").subTitle(), $(document).ready(function() {
    $("#sidenav-initiate").sideNav(), initiate()
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
        var a, b, c = !1,
            d = !1,
            e = $("nav .nav-wrapper"),
            f = e.find(".menu"),
            g = f.find("span"),
            h = e.find(".search"),
            i = $("#sidenav-initiate"),
            j = $("#slide-out");
        h.length && (a = $('<div class="search-bg"></div>').css({
            top: h.position().top + h.height() / 2 - adminlize.getDiameter(e),
            left: h.position().left + h.width() / 2 - adminlize.getDiameter(e),
            width: 2 * adminlize.getDiameter(e),
            height: 2 * adminlize.getDiameter(e)
        }), b = function(b) {
            var c = $(".main-search"),
                d = 300,
                h = 300;
            g.velocity({
                rotateZ: "+=180deg"
            }, {
                duration: d,
                easing: "linear"
            }), "open" === b && (a.velocity({
                scale: "1"
            }, {
                duration: d,
                easing: "easeInQuart",
                begin: function() {
                    e.css("overflow", "hidden"), f.addClass("active")
                },
                complete: function() {
                    $("body").addClass("search-mode")
                }
            }), c.focus().typed({
                strings: ["Search Here"],
                typeSpeed: 0,
                startDelay: h,
                attr: "placeholder"
            })), "close" === b && ($("body").removeClass("search-mode"), f.removeClass("active"), a.velocity({
                scale: "0"
            }, {
                duration: 500,
                easing: "easeOutQuart",
                complete: function() {
                    e.css("overflow", "visible")
                }
            }), clearInterval(c.data("typed").timeout), c.removeData("typed").attr("placeholder", ""))
        }, $.Velocity.hook(a, "scale", "0"), e.prepend(a), window.innerWidth > 1200 && j.css("left", 0), f.on("click", function() {
            return c ? (b("close"), c = !1, !1) : d ? (i.sideNav("hide"), d = !1, !1) : (i.sideNav("show"), d = !0, !1)
        }), $(document).on("click", ".drag-target,#sidenav-overlay", function() {
            d = !1
        }), h.on("click", function() {
            return c ? (g.add(a).velocity("stop").velocity("reverse"), f.removeClass("active"), e.css("overflow", "hidden").parent("nav").removeClass("search-mode"), void(c = !1)) : (b("open"), void(c = !0))
        }), $(window).resize(function() {
            a.css({
                top: h.position().top + h.height() / 2 - adminlize.getDiameter(e),
                left: h.position().left + h.width() / 2 - adminlize.getDiameter(e),
                width: 2 * adminlize.getDiameter(e),
                height: 2 * adminlize.getDiameter(e)
            }), d && (i.sideNav("hide"), d = !1), window.innerWidth > 1200 && d === !1 ? j.css("left", 0) : j.css("left", -(j.width() + 10))
        }), $("#notification .dropdown-wrapper").scrollbar())
    }()
}), $(document).ready(function() {
    {
        var a = $("#slide-out");
        $("#sidenav-initiate")
    }! function() {
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
});
var mul_table = [1, 171, 205, 293, 57, 373, 79, 137, 241, 27, 391, 357, 41, 19, 283, 265, 497, 469, 443, 421, 25, 191, 365, 349, 335, 161, 155, 149, 9, 278, 269, 261, 505, 245, 475, 231, 449, 437, 213, 415, 405, 395, 193, 377, 369, 361, 353, 345, 169, 331, 325, 319, 313, 307, 301, 37, 145, 285, 281, 69, 271, 267, 263, 259, 509, 501, 493, 243, 479, 118, 465, 459, 113, 446, 55, 435, 429, 423, 209, 413, 51, 403, 199, 393, 97, 3, 379, 375, 371, 367, 363, 359, 355, 351, 347, 43, 85, 337, 333, 165, 327, 323, 5, 317, 157, 311, 77, 305, 303, 75, 297, 294, 73, 289, 287, 71, 141, 279, 277, 275, 68, 135, 67, 133, 33, 262, 260, 129, 511, 507, 503, 499, 495, 491, 61, 121, 481, 477, 237, 235, 467, 232, 115, 457, 227, 451, 7, 445, 221, 439, 218, 433, 215, 427, 425, 211, 419, 417, 207, 411, 409, 203, 202, 401, 399, 396, 197, 49, 389, 387, 385, 383, 95, 189, 47, 187, 93, 185, 23, 183, 91, 181, 45, 179, 89, 177, 11, 175, 87, 173, 345, 343, 341, 339, 337, 21, 167, 83, 331, 329, 327, 163, 81, 323, 321, 319, 159, 79, 315, 313, 39, 155, 309, 307, 153, 305, 303, 151, 75, 299, 149, 37, 295, 147, 73, 291, 145, 289, 287, 143, 285, 71, 141, 281, 35, 279, 139, 69, 275, 137, 273, 17, 271, 135, 269, 267, 133, 265, 33, 263, 131, 261, 130, 259, 129, 257, 1],
    shg_table = [0, 9, 10, 11, 9, 12, 10, 11, 12, 9, 13, 13, 10, 9, 13, 13, 14, 14, 14, 14, 10, 13, 14, 14, 14, 13, 13, 13, 9, 14, 14, 14, 15, 14, 15, 14, 15, 15, 14, 15, 15, 15, 14, 15, 15, 15, 15, 15, 14, 15, 15, 15, 15, 15, 15, 12, 14, 15, 15, 13, 15, 15, 15, 15, 16, 16, 16, 15, 16, 14, 16, 16, 14, 16, 13, 16, 16, 16, 15, 16, 13, 16, 15, 16, 14, 9, 16, 16, 16, 16, 16, 16, 16, 16, 16, 13, 14, 16, 16, 15, 16, 16, 10, 16, 15, 16, 14, 16, 16, 14, 16, 16, 14, 16, 16, 14, 15, 16, 16, 16, 14, 15, 14, 15, 13, 16, 16, 15, 17, 17, 17, 17, 17, 17, 14, 15, 17, 17, 16, 16, 17, 16, 15, 17, 16, 17, 11, 17, 16, 17, 16, 17, 16, 17, 17, 16, 17, 17, 16, 17, 17, 16, 16, 17, 17, 17, 16, 14, 17, 17, 17, 17, 15, 16, 14, 16, 15, 16, 13, 16, 15, 16, 14, 16, 15, 16, 12, 16, 15, 16, 17, 17, 17, 17, 17, 13, 16, 15, 17, 17, 17, 16, 15, 17, 17, 17, 16, 15, 17, 17, 14, 16, 17, 17, 16, 17, 17, 16, 15, 17, 16, 14, 17, 16, 15, 17, 16, 17, 17, 16, 17, 15, 16, 17, 14, 17, 16, 15, 17, 16, 17, 13, 17, 16, 17, 17, 16, 17, 14, 17, 16, 17, 16, 17, 16, 17, 9];
! function(a) {
    a.fn.primaryColor = function(b) {
        function c() {
            return document.createElement("canvas").getContext("2d")
        }

        function d(d, e) {
            var f = c();
            f.drawImage(d, 0, 0);
            for (var g = f.getImageData(0, 0, d.width, d.height), h = g.data.length, i = g.data, j = {}, k = {
                rgb: "",
                count: 0
            }, l = 0; h > l; l += 4 * b.skip) {
                var m = [i[l], i[l + 1], i[l + 2]].join(",");~
                a.inArray(m, b.exclude) || (m in j ? j[m]++ : j[m] = 1);
                var n = j[m];
                n > k.count && (k.rgb = m, k.count = n)
            }
            e.attr("data-primary-color", k.rgb), "function" == typeof b.callback && b.callback.call(e[0], k.rgb)
        }
        return b = a.extend({
            skip: 5,
            exclude: ["0,0,0"],
            callback: null
        }, b), this.each(function() {
            var c = a(this),
                e = new Image,
                f = c.attr("data-primary-color");
            return f ? ("function" == typeof b.callback && b.callback.call(c[0], f), !0) : (a(e).on("load", function() {
                d(this, c)
            }), void(e.src = this.src || ""))
        }), this
    }
}(jQuery), $(document).ready(function() {
    function a(a) {
        $.ajax({
            url: a
        }).done(function(a) {
            var d = adminlize.newHTML(a, !0, "html");
            b.html(d.find("body #wrapper").html()), c.html(d.find("body #scripts").html()), document.title = d.find("head title").text(), initiate()
        }).always(function() {
            e.stop().fadeOut("fast", function() {
                b.fadeIn("fast", function() {
                    d.removeClass("disabled")
                })
            })
        })
    }
    var b = $("#wrapper"),
        c = $("#scripts"),
        d = $("#slide-out a,.brand-logo"),
        e = $("#content__preloader"),
        f = function(c) {
            b.fadeOut("fast", function() {
                a(c), e.fadeIn("fast")
            })
        };
    $(window).on("popstate", function() {
        f(location.href)
    }), d.on("click", function(a) {
        a.preventDefault();
        var b = $(this),
            c = b.attr("href");
        return b.hasClass("disabled") || b.hasClass("active") ? !1 : (d.addClass("disabled"), d.removeClass("active"), b.addClass("active"), f(c), void history.pushState({}, "", adminlize.newURL(c).pathname))
    })
}),
function() {
    var a = $("#login"),
        b = a.children(".panel-header"),
        c = $('<div class="waves-preloader"></div>').css({
            width: 2 * adminlize.getDiameter(b, "cicle"),
            height: 2 * adminlize.getDiameter(b, "cicle"),
            top: adminlize.getCenterPos(b.children(".avatar-img")).top,
            left: adminlize.getCenterPos(b.children(".avatar-img")).left
        });
    $(document).on("click", ".login a.next", function(b) {
        b.preventDefault();
        var d = a.find($(this).data("check"));
        d.valid() && (a.children(".panel-header").append(c), $(this).ajaxReq({
            data: {
                name: d.attr("name"),
                value: d.val()
            },
            listener: "none",
            always: function() {
                var b = a.children(".panel-header");
                b.children(".title").text(d.val()), b.children(".avatar-img").append('<img src="/images/profile-pic.jpg" />'), b.find(".avatar-name").text("baraamashaal"), b.append($(adminlize.blurImage("/images/profile-pic2.jpg", 5))), a.addClass("shifted")
            }
        })), d.focus()
    }), $(window).resize(function() {
        c.css({
            width: 2 * adminlize.getDiameter(b, "cicle"),
            height: 2 * adminlize.getDiameter(b, "cicle"),
            top: adminlize.getCenterPos(b.children(".avatar-img")).top,
            left: adminlize.getCenterPos(b.children(".avatar-img")).left
        })
    })
}();