(function($){
    $(document).ready(function(){
      $(document).on('click', '.cat-list_item', function(e){
        e.preventDefault();
  
        editFilterInputs($('#filters-' + $(this).data('filter-type')), $(this).data('slug'));

        const year_slugs = $('#filters-year').val().split(','); // an array
        const division_slugs = $('#filters-division').val().split(','); // an array
  
        $('.cat-list_item').removeClass('cat_active'); //remove the active class, reset later
        adding_active_class(year_slugs,division_slugs);

        const type = $(this).data('type'); //get the post type
        const category = $(this).data('slug'); 
        //console.log("year: ",year_slugs);
        //console.log("division: ",division_slugs);
  
        $.ajax({
          url: wpAjax.ajaxUrl,
          type: 'POST',
          data: { action: 'filter', 
                  category: category,
                  cat_year: year_slugs,
                  cat_division: division_slugs,
                  type: type
          },
          success: function(result) {
            $('.block_papers').html(result);
          },
          error: function(result) {
            console.log(result);
          }
        });
      });
    });
  })(jQuery);


  (function($){
    $(document).ready(function(){
      $(document).on('click', '#search_btn', function(e){
        e.preventDefault();
        const search_str = $('#keyword').val();
        $.ajax({
          url: wpAjax.ajaxUrl,
          type: 'POST',
          data: { action: 'filter', 
                  keyword: search_str,
                  type: 'papers'
          },
          success: function(result) {
            $('.block_papers').html(result);
          },
          error: function(result) {
            console.log(result);
          }
        });
      });
    });
  })(jQuery);
  
  (function($){
    $(document).ready(function(){
      $(".mobile-selector-dropdown").click(function(){
        $(this).find(".mobile-selector-dropdown-menu").slideToggle("fast");
      });

      $(document).on("click", function(event){
        var $trigger = $(".mobile-selector-dropdown");
        if($trigger !== event.target && !$trigger.has(event.target).length){
            $(".mobile-selector-dropdown-menu").slideUp("fast");
        }            
      });
    });
  })(jQuery);

  function editFilterInputs(inputField, value) {
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
  }
  
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