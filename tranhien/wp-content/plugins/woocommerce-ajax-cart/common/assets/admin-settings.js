(function($){
    
    listenSubConfChange = function() {
        $('.check-subconf').change(function(){
            subConfDiv = $(this).parent().parent().find('.mh-subconf');

            // when subconf div is empty, hide them
            if ( subConfDiv.length && subConfDiv.html().trim().length === 0 ) {
                subConfDiv.detach();
            }

            if ( $(this).is(':checked') ) {
                $( subConfDiv ).slideDown();
            }
            else {
                $( subConfDiv ).slideUp();
            }
        }).change();
    };


    jQuery(document).ready(function($){
        
        listenSubConfChange();

        // display active tab
        $('#settings-' + tab_current).show();
    });

})(jQuery);
