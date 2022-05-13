(function($){
    $(document).ready(function(){
      $(document).on('click', '.cat-list_item', function(e){
        e.preventDefault();
  
        //editFilterInputs($('#filters-' + $(this).data('filter-type')), $(this).data('slug'));
        //filterProducts();
        /*$(this).addClass('cat_active');
  
        var category = $(this).data('slug');
        var type = $(this).data('type');
        
        console.log(category);
        console.log(type);*/
        
        //const filed_slugs = $('#filters-field').val().split(','); // an array
        //const title_slugs = $('#filters-title').val().split(','); // an array
  
        $('.cat-list_item').removeClass('cat_active');
        $(this).addClass('cat_active');
        //adding_active_class(filed_slugs,title_slugs);
        
        const type = $(this).data('type');
        const category = $(this).data('slug');
        //const filter_type =  $(this).data('filter-type');
        //console.log("field: ",filed_slugs);
        //console.log("title: ",title_slugs);
  
        $.ajax({
          url: wpAjax.ajaxUrl,
          type: 'POST',
          data: { action: 'filter', 
                  category: category,
                  //cat_field: filed_slugs,
                  //cat_title: title_slugs,
                  //filter_type: filter_type,
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
  
  
  /*function editFilterInputs(inputField, value) {
    const currentFilters = inputField.val().split(',');
    const newFilter = value.toString();
  
    if(currentFilters[0].length == 0){
      inputField.val(newFilter);
    }
    else if (currentFilters.includes(newFilter)) {//if it is existed in value, remove it
      const i = currentFilters.indexOf(newFilter);
      currentFilters.splice(i, 1);
      inputField.val(currentFilters);
    } 
    else {
      inputField.val(inputField.val() + ',' + newFilter);//if not, add it
    }
  }*/
  
  function adding_active_class(field, title){
    
    const len_field = field.length; // get the length of array
    const len_title = title.length;
  
    if ( len_field > 0 && field[0].length > 0){
        //console.log("there are field category.");
        for(var i = 0; i < len_field; i++){
          var item = document.getElementsByClassName(field[i]);
          item[0].className += " cat_active";
        }
    }
    if ( len_title > 0 && title[0].length > 0 ){
        //console.log("there are title category.");
        for(var i = 0; i < len_title; i++){
          var item = document.getElementsByClassName(title[i]);
          item[0].className += " cat_active";
        }
    }
  }