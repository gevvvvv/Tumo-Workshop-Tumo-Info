app = {}, UTIL = {
    fire: function(i, n, o) {
        var e = app;
        n = void 0 === n ? "init" : n, "" !== i && e[i] && "function" == typeof e[i][n] && e[i][n](o);
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
    });
}), app.home = {
    init: function() {}
};