   var titleTabel = '';
   function show(){
         titleTabel = $(this).attr("data-table");

         $.ajax({
             url: "admin_page.phtml",
             data:({ titleTabel }),
             type: "POST",
             dataType: "html",
             success: function (data) {
                $("body").html(data);

             }
          });

    }

   function addElem(){
       var values = [];
       var colums = [];

       var listElems = $(".values_to_add");
       for (var i = 0; i < listElems.length; i++) {
               var eqSelect = '.values_to_add:eq('+ i +')';
               values[i] = $(eqSelect).val();
               colums[i] = $(eqSelect).attr('data-column');
       }

         let arrInfoAdd = [values, colums];
         console.log(arrInfoAdd);
         $.ajax({
             url: "admin_page.phtml",
             data:({ arrInfoAdd }),
             type: "POST",
             dataType: "html",
             success: function (data) {
                $("body").html(data);
             }
          });
    }

    function changeColumn(evt){

      var charCode = evt.charCode;
      var values = [];
      var colums = [];
      
      if (charCode === 13) {
        var idField = $(this).attr('data-id-filed');
        var selector = "textarea[data-id-filed='"+ idField +"']";
        var listElems = $(selector);

        for (var i = 0; i < listElems.length; i++) {
               var listSelector = selector + ':eq('+ i +')';
               values[i] = $(listSelector).val();
               colums[i] = $(listSelector).attr('data-select-column-tochange');
        }

        let arrToChange = [idField,values,colums];
          $.ajax({
             url: "admin_page.phtml",
             data:({ arrToChange }),
             type: "POST",
             dataType: "html",
             success: function (data) {
                $("body").html(data);
             }
          });
      }
    }

    function delField(){
          var selectElemDel = $(this).attr('data-id-remove');
         $.ajax({
             url: "admin_page.phtml",
             data:({ selectElemDel }),
             type: "POST",
             dataType: "html",
             success: function (data) {
                $("body").html(data);
             }
          });

    }

    function exit(){
            $.ajax({
               url: "admin_page.phtml",
               data: ({exit}) ,
               type: "POST",
               dataType: "html",
               success: function (data) {
                $("body").html(data);
               }
            });
    }
$(".add_values").click(addElem);
$(".table_choise").click(show);
$(".inputs_change").keypress(changeColumn);
$(".deleteField").click(delField);
$("#exit").click(exit);



