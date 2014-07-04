app = {}, UTIL = {
    fire: function(t, n, e) {
        var o = app;
        n = void 0 === n ? "init" : n, "" !== t && o[t] && "function" == typeof o[t][n] && o[t][n](e);
    },
    loadEvents: function() {
        var t = document.body.id;
        UTIL.fire("common"), $.each(document.body.className.split(/\s+/), function(n, e) {
            UTIL.fire(t), UTIL.fire(t, e);
        }), UTIL.fire("common", "finalize");
    }
}, $(document).ready(UTIL.loadEvents), app.common = {
    init: function() {},
    finalize: function() {}
}, jQuery.fn.fadeOutAndRemove = function(t) {
    t = t !== void 0 ? t : 300, $(this).fadeOut(t, function() {
        $(this).remove();
    });
}, jQuery.fn.itemSearch = function(t) {
    var n = $(this).attr("id"), e = null;
    $("#" + n + " .openmodal").click(function() {
        $("#modal-" + n).modal(), $(t.containers.results).empty();
    }), $("#modal-" + n + " button[name='search']").click(function() {
        var o = {};
        $.each($("#modal-" + n + " form").serializeArray(), function(t, n) {
            o[n.name] = n.value;
        }), $.post(t.url, o, function(n) {
            e = n.data, $(t.containers.results).empty(), $.each(n.data, function(n, e) {
                e.resultid = n;
                var o = $(t.templates.result).html(), a = Mustache.render(o, e);
                $(t.containers.results).append(a);
            });
        }, "json");
    }), $(document).on("click", t.containers.results + " button.select", function() {
        var n = $(this).attr("data-result-id"), o = e[n], a = $(t.templates.item).html(), i = Mustache.render(a, o);
        $(t.containers.items).append(i), t.multiSelect === !1 && app.common.closeModal();
    }), $(document).on("click", t.containers.items + " .trash", function() {
        $(this).parent().parent().fadeOutAndRemove();
    });
};