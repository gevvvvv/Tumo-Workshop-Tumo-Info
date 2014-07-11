app = {};

UTIL = {
    fire : function(func,funcname, args){
        var namespace = app;  // indicate your obj literal namespace here

        funcname = (funcname === undefined) ? 'init' : funcname;
        if (func !== '' && namespace[func] && typeof namespace[func][funcname] == 'function'){
            namespace[func][funcname](args);
        }
    },

    loadEvents : function(){
        var bodyId = document.body.id;

        // hit up common first.
        UTIL.fire('common');
		UTIL.fire(bodyId);
        // do all the classes too.
        $.each(document.body.className.split(/\s+/),function(i,classnm){
            
            UTIL.fire(bodyId,classnm);
        });

        UTIL.fire('common','finalize');
    }
};

// kick it all off here
$(document).ready(UTIL.loadEvents);