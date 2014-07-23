app = {}, UTIL = {
    fire: function(i, e, o) {
        var n = app;
        e = void 0 === e ? "init" : e, "" !== i && n[i] && "function" == typeof n[i][e] && n[i][e](o);
    },
    loadEvents: function() {
        var i = document.body.id;
        UTIL.fire("common"), UTIL.fire(i), $.each(document.body.className.split(/\s+/), function(e, o) {
            UTIL.fire(i, o);
        }), UTIL.fire("common", "finalize");
    }
}, $(document).ready(UTIL.loadEvents), app.common = {
    init: function() {
        $("#menu-main-menu li").hover(function() {
            var i = $(this).attr("id");
            switch (i) {
              case "menu-item-13":
                $(this).find("a").css("color", "#f69230");
                break;

              case "menu-item-17":
                $(this).find("a").css("color", "#f05f42");
                break;

              case "menu-item-15":
                $(this).find("a").css("color", "#5588c1");
                break;

              case "menu-item-14":
                $(this).find("a").css("color", "#a1d147");
            }
        }, function() {
            $(this).find("a").css("color", "#000");
        }), $("#arrow_image img").click(function() {
            $("html, body").animate({
                scrollTop: "0px"
            }, 700, "linear");
        }), ("map" == $("body").attr("id") || "about-us" == $("body").attr("id")) && $("#arrow_image").css("display", "none"), 
        $(document).scroll(function() {
            $(document).scrollTop() >= 700 ? $("#arrow_image img").css("opacity", "1") : 450 >= $(document).scrollTop() && $("#arrow_image img").css("opacity", "0");
        }), $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    },
    finalize: function() {}
}, app.home = {
    init: function() {}
}, app.map = {
    init: function() {
        $("#tumo-map").maphilight();
    },
    doFirst: function() {
        var i = 1142;
        doc = document.getElementById("content"), iframe = document.getElementById("ifr"), 
        slaq = document.getElementById("arrow_image"), slaq.style.display = "block", slaq.style.visibility = "visible", 
        doc.style.height = i + "px", iframe.style.display = "block";
    }
}, app.coaches = {
    init: function() {
        for (var i = -1, e = 0; $("#box img").length > e; e++) $("#box img").eq(e).css("z-index", $("#box img").length - e);
        setInterval(function() {
            4 > i ? (++i, console.log(i), $("#box img").eq(i).fadeOut(2e3), setTimeout(function() {
                $("#box img").eq(i).css("z-index", 1), $("#box img").eq(i).fadeIn();
                for (var e = 0; $("#box img").length > e; e++) if (e != i) {
                    var o = parseInt($("#box img").eq(e).css("z-index"), 10);
                    $("#box img").eq(e).css("z-index", o + 1);
                }
            }, 3e3)) : i = -1;
        }, 5e3);
    }
};