jQuery.fn.fadeOutAndRemove = function(speed){
    speed = typeof speed !== 'undefined' ? speed : 300;
    $(this).fadeOut(speed,function(){
        $(this).remove();
    });
};

jQuery.fn.itemSearch = function(params){

    var id = $(this).attr("id");
    var results = null;

    $("#" + id + " .openmodal").click(function(){
        $("#modal-" + id).modal();
        $(params.containers.results).empty();
    });


    $("#modal-" + id + " button[name='search']").click(function(){
        var values = {};
        $.each($("#modal-" + id + " form").serializeArray(), function(i, field) {
            values[field.name] = field.value;
        });
        $.post(
            params.url,
            values,
            function(response){
                results = response.data;
                $(params.containers.results).empty();
                $.each(response.data, function(k,v){
                    v.resultid = k;
                    var template = $(params.templates.result).html();
                    var item = Mustache.render(template, v);
                    $(params.containers.results).append(item);
                });
            }, "json"
        );
    });

    $(document).on("click", params.containers.results + " button.select", function(){
        var result_id = $(this).attr("data-result-id");
        var result = results[result_id];
        var template = $(params.templates.item).html();
        var item = Mustache.render(template, result);

        $(params.containers.items).append(item);

        if(params.multiSelect === false){
            app.common.closeModal();
        }
    });

    $(document).on("click", params.containers.items + " .trash", function(){
        $(this).parent().parent().fadeOutAndRemove();
    });

};