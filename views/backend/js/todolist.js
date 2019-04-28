(function($) {
  'use strict';
  $(function() {
    var todoListItem = $('.todo-list');
    var todoListInput = $('.todo-list-input');
    $('.todo-list-add-btn').on("click", function(event) {
      event.preventDefault();

      var item = $(this).prevAll('.todo-list-input').val();

      if (item) {
        todoListItem.append("<li><div class='form-check'><label class='form-check-label'><input class='checkbox' type='checkbox'/>" + item + "<i class='input-helper'></i></label></div><i class='remove icon-close'></i></li>");
        todoListInput.val("");
        console.log(item);
        $.ajax({
                    type: "POST",
                    url: "../backend/pages/save_todo.php",
                    data: 'item=' +  item ,
                    success: function(data) {
                      console.log(data);
                    },
                });
      }

    });

    todoListItem.on('change', '.checkbox', function() {
      if ($(this).attr('checked')) {
        $(this).removeAttr('checked');
        
        var id = $(this).prevAll('.id').val();
         $.ajax({
                    type: "POST",
                    url: "../backend/pages/done_todo.php",
                    data: 'done=' +  0 + "&id=" + id ,
                    success: function(data) {
                      console.log(data);
                    },
                });
      } else {
        $(this).attr('checked', 'checked');
         var id = $(this).prevAll('.id').val();
         $.ajax({
                    type: "POST",
                    url: "../backend/pages/done_todo.php",
                    data: 'done=' +  1 + "&id=" + id ,
                    success: function(data) {
                      console.log(data);
                    },
                });
      }

      $(this).closest("li").toggleClass('completed');

    });

    todoListItem.on('click', '.remove', function() {
      $(this).parent().remove();
    });

  });
})(jQuery);