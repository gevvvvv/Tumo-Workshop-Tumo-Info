app = {}, UTIL = {
    fire: function(i, n, o) {
        var t = app;
        n = void 0 === n ? "init" : n, "" !== i && t[i] && "function" == typeof t[i][n] && t[i][n](o);
    },
    loadEvents: function() {
        var i = document.body.id;
        UTIL.fire("common"), UTIL.fire(i), $.each(document.body.className.split(/\s+/), function(n, o) {
            UTIL.fire(i, o);
        }), UTIL.fire("common", "finalize");
    }
}, $(document).ready(UTIL.loadEvents), app.common = {
    init: function() {},
    finalize: function() {}
}, $(document).ready(function() {
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
        }, 700);
    }), ("map" == $("body").attr("id") || "about-us" == $("body").attr("id")) && $("#arrow_image").css("display", "none");
}), app.home = {
    init: function() {}
}, app.map = {
    init: function() {
        $("#tumo-map").maphilight();
    },
    doFirst: function() {
        var i = 1142;
        doc = document.getElementById("content"), console.log(doc), iframe = document.getElementById("ifr"), 
        slaq = document.getElementById("arrow_image"), slaq.style.display = "block", slaq.style.visibility = "visible", 
        doc.style.height = i + "px", iframe.style.display = "block";
    }
};