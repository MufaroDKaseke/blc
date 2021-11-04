$(document).ready(function($) {
  (function($) {
    'use strict';

    let materialsContainer = $('.library-books > .container > .row');

    // Category Filter
    let categoryFilter = $('select[name="filter-category"]');

    categoryFilter.on('change', function() {
      let filterVal  = categoryFilter.val();
      let resultsNumber = $('.results-container > p');

      $.ajax({
        url: '../includes/library_filter.php',
        type: "POST",
        dataType: "html",
        data: {filterType: 'category',filterVal: filterVal},
        beforeSend: function() {
          materialsContainer.html('<p class="text-muted text-center">Loading...</p>');
        },
        success: function(data) {
          materialsContainer.html(data);
        },
        error: function(e) {
          materialsContainer.html('<span class="text-warning"><i class="fa fa-exclamation-triangle"></i> Connection Error</span>');
          console.log(e);
        }, 
        complete: function() {
        }
      });
    });


    // Filter By
    let filterBy = $('select[name="filter-by"]');

    filterBy.on('change', function() {
      let filterVal  = filterBy.val();

      $.ajax({
        url: '../includes/library_filter.php',
        type: "POST",
        dataType: "html",
        data: {filterType: 'filter-by',filterVal: filterVal},
        beforeSend: function() {
          materialsContainer.html('<p class="text-muted text-center">Loading...</p>');
        },
        success: function(data) {
          materialsContainer.html(data);
        },
        error: function(e) {
          materialsContainer.html('<span class="text-warning"><i class="fa fa-exclamation-triangle"></i> Connection Error</span>');
          console.log(e);
        }, 
        complete: function() {
        }
      });
    });

  })(jQuery);
}); 