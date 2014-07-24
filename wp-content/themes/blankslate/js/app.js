app = {}, UTIL = {
    fire: function(a, b, c) {
        var d = app;
        b = void 0 === b ? "init" : b, "" !== a && d[a] && "function" == typeof d[a][b] && d[a][b](c);
    },
    loadEvents: function() {
        var a = document.body.id;
        UTIL.fire("common"), UTIL.fire(a), $.each(document.body.className.split(/\s+/), function(b, c) {
            UTIL.fire(a, c);
        }), UTIL.fire("common", "finalize");
    }
}, $(document).ready(UTIL.loadEvents), app.common = {
    init: function() {
        $("#menu-main-menu li").hover(function() {
            var a = $(this).attr("id");
            switch (a) {
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
            $(document).scrollTop() >= 700 ? $("#arrow_image img").css("opacity", "1") : $(document).scrollTop() <= 450 && $("#arrow_image img").css("opacity", "0");
        }), $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    },
    finalize: function() {}
}, $(document).ready(function() {
    $("#menu-main-menu li").hover(function() {
        var a = $(this).attr("id");
        switch (a) {
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
    }), ("map" == $("body").attr("id") || "about-us" == $("body").attr("id")) && $("#arrow_image").css("display", "none");
}), app.home = {
    init: function() {}
}, app.map = {
    init: function() {
        $("#tumo-map").maphilight();
    },
    doFirst: function() {
        var a = 1142;
        doc = document.getElementById("content"), iframe = document.getElementById("ifr"), 
        slaq = document.getElementById("arrow_image"), slaq.style.display = "block", slaq.style.visibility = "visible", 
        doc.style.height = a + "px", iframe.style.display = "block";
    }
}, app.coaches = {
    init: function() {
        for (var a = -1, b = 0; b < $("#box img").length; b++) $("#box img").eq(b).css("z-index", $("#box img").length - b);
        setInterval(function() {
            4 > a ? (++a, console.log(a), $("#box img").eq(a).fadeOut(2e3), setTimeout(function() {
                $("#box img").eq(a).css("z-index", 1), $("#box img").eq(a).fadeIn();
                for (var b = 0; b < $("#box img").length; b++) if (b != a) {
                    var c = parseInt($("#box img").eq(b).css("z-index"), 10);
                    $("#box img").eq(b).css("z-index", c + 1);
                }
            }, 3e3)) : a = -1;
        }, 5e3);
    }
};