app = {}, UTIL = {
    fire: function(n, i, o) {
        var e = app;
        i = void 0 === i ? "init" : i, "" !== n && e[n] && "function" == typeof e[n][i] && e[n][i](o);
    },
    loadEvents: function() {
        var n = document.body.id;
        UTIL.fire("common"), UTIL.fire(n), $.each(document.body.className.split(/\s+/), function(i, o) {
            UTIL.fire(n, o);
        }), UTIL.fire("common", "finalize");
    }
}, $(document).ready(UTIL.loadEvents), app.common = {
    init: function() {},
    finalize: function() {}
}, app.home = {
    init: function() {}
};