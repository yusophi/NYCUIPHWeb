(function($){
    $(document).ready(function(){
      $(document).on('click', '.cat-list_item', function(e){
        e.preventDefault();
  
        editFilterInputs($('#filters-' + $(this).data('filter-type')), $(this).data('slug'));
        const post_cat_slug = $('#filters-' + $(this).data('filter-type')).val().split(','); // an array
        
        $('.cat-list_item').removeClass('cat_active');
        adding_active_class(post_cat_slug);
        
        const type = $(this).data('type');

        $.ajax({
          url: wpAjax.ajaxUrl,
          type: 'POST',
          data: { action: 'filter', 
                  category: post_cat_slug,
                  type: type
          },
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
  
  
  function editFilterInputs(inputField, value) {
    const newFilter = value.toString();
    inputField.val(newFilter);
  }
  
  function adding_active_class(post_cat){
    const len_post_cat = post_cat.length; // get the length of array

    if ( len_post_cat > 0 && post_cat[0].length > 0){
        for(var i = 0; i < len_post_cat; i++){
          var item = document.getElementsByClassName(post_cat[i]);
          item[0].className += " cat_active";
        }
    }
   
  }