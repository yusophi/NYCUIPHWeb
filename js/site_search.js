
(function($){
$(document).ready(function(){
    $(document).on('click', '#yellow_search_btn', function(e){
    e.preventDefault();
    const search_str = $('#site_search_keyword').val();
    console.log(search_str);
    $.ajax({
        url: wpAjax.ajaxUrl,
        type: 'POST',
        data: { action: 'filter', 
                keyword: search_str,
                type: 'all'
        },
        success: function(result) {
        $('#site_search_result').html(result);
        },
        error: function(result) {
        console.log(result);
        }
    });
    });
});
})(jQuery);

