(function($){
  $(document).ready(function(){
    $(document).on('click', '.cat-list_item', function(e){
      e.preventDefault();
      $('.cat-list_item').removeClass('cat_active');
      $(this).addClass('cat_active');

      var category = $(this).data('slug');
      console.log(category);

      $.ajax({
        url: wpAjax.ajaxUrl,
        type: 'POST',
        data: { action: 'filter', category: category },
        success: function(result) {
          $('.post_block').html(result);
        },
        error: function(result) {
          console.log(result);
        }
      });
    });
  });


})(jQuery);
