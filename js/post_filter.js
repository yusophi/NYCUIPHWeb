(function($){
  $(document).ready(function(){
    $(document).on('click', '.cat-list_item', function(e){
      e.preventDefault();
      
      $('.cat-list_item').removeClass('cat_active');
      $(this).addClass('cat_active');

      var category = $(this).data('slug');
      var type = $(this).data('type');
      
      console.log(category);
      console.log(type);

      $.ajax({
        url: wpAjax.ajaxUrl,
        type: 'POST',
        data: { action: 'filter', category: category ,type: type},
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
